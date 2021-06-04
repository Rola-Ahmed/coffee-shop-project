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
        <?php
	if(count($cart->productsQuantity)>0){
		?>
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
	} ?>
    </div>

    <div id="product-grid">
        <div class="txt-heading">Traditional Coffee</div>

        <?php	
	$allProducts=Product::getAllProducts();
	foreach ($allProducts as $product){?>
        <div class="product-item" width="200px">
            <form method="post" action="index.php?action=add&id=<?php echo $product->id; ?>">
                <!--  COMPLETE DONE  -->
                <div><strong><?php echo $product-> drinkname; ?></strong></div>
                <div class="product-images"><img src="<?php echo $product->cost; ?>" width="100px"></div>
                <div class="product-price">$<?php echo $product->image; ?></div>
                <?php
						foreach ($product->options as $option => $value){
							echo "<div>$option: $value </div>";
						}
						?>
                <div>
                    <input type="text" name="quantity" value="1" size="2" />
                    <input type="hidden" name="Productid" value="<?php echo $product->id; ?>" />
                    <input type="submit" value="Add to cart" class="btnAddAction" />
                </div>
                <input type='hidden' name='cart' value='<?php echo (serialize($cart->productsQuantity)); ?>' />
            </form>
        </div>
        <?php
	}
	?>
    </div>

    <?php 
    if (isset($_POST['Add to cart'])){
        $db_handle= new DB();
        $Productid=$_POST['Productid'];
        $result =mysqli_query($db_handle,"SELECT * from `product` WHERE `id` ='$Productid'");
        $row=mysqli_fetch_assoc($result);
        $drinkname=$rowm=['drinkname'];
        $image = $row['image'];
        $cost = $row['cost'];
        $drinktype = $row['drinktype'];
        $description = $row['description']; 
    
       //$id=$row['id'];
       $result =mysqli_query($db_handle,"SELECT * FROM cart where drinktype='$Productid'");
       if ($result->num_rows==0)
       { 
       //we add the product
        $sql ="INSERT into cart (`id`,`iduser`,`drinktype`,`addcondimenttype`,`drinkcost`,`condimentcost`,`idmilk`)
        VALUES('$Productid','1','$drinktype','1','$cost','1',1)";
        $db_handle($sql);
       }
    } 
    ?>
</BODY>

</HTML>