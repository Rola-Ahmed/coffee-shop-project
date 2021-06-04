<?php
 $item_total="0";
require_once("classes.php");
$cart=new Cart();
if(!empty($_POST['cart'])) {
	$cart->productsQuantity=unserialize($_POST['cart']);
}
if(!empty($_GET["action"])) {
	switch($_GET["action"]) {
		case "add":
			if(!empty($_POST["quantity"])) {
				$cart->addProduct($_GET["id"],$_POST["quantity"]);
			}
		break;
		case "remove":
			$cart->removeProduct($_GET["id"]);
		break;
		case "empty":
			$cart->emptyCart();	
		break;	
	}
}
?>
<HTML>

<HEAD>
    <TITLE> Miu coffee Shop</TITLE>
    <link href="menu.css" type="text/css" rel="stylesheet" />
</HEAD>

<BODY>
    <div id="shopping-cart">
        <div class="txt-heading"> Shopping Cart <a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
        </div>
        <table cellpadding="10" cellspacing="1">
            <tr>
                <th><strong>Name</strong></th>
                <th><strong>Quantity</strong></th>
                <th><strong>Price</strong></th>
                <th><strong>Action</strong></th>
            </tr>
            <?php	
			foreach ($cart->productsQuantity as $productID => $quantity){  
						///////////// complete DONE ////////////////////
						$product=new Product($productID);
						?>
            <tr>
                <td><strong><?php echo $product->drinkname; ?></strong></td>
                <td><?php echo $quantity; ?></td>
                <td><?php echo "$" .$product->image; ?></td>
                <td>
                    <form method="post" action="index.php?action=remove&id=<?php echo $product->id; ?>">
                        <input type="submit" value="Remove Item" class="btnAddAction" />
                        <input type='hidden' name='cart' value='<?php echo (serialize($cart->productsQuantity));?>' />
                    </form>
                </td>
            </tr>
            <?php
			       
					$item_total += ($product-> image * $quantity);
			}
			?>
            <tr>
                <!--	/////////////complete DONE ////////////////////  -->
                <td colspan="4"><strong>Total:</strong>
                    <?php echo"$".$item_total; ?></td>
            </tr>
        </table>
        <?php
	 ?>
    
</BODY>

</HTML>