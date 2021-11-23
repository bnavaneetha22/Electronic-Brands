<?php
	include("db.php");
	
	$prodID = $_GET['prodid'];

	if(!empty($prodID)){
		$sqlSelectSpecProd = mysqli_query($conn,"select * from products where id = '$prodID'") or die(mysqli_error());
		$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);
		$prodname= $getProdInfo["Product"];
		$prodcat = $getProdInfo["Category"];
		$prodprice = $getProdInfo["Price"];
		$proddesc = $getProdInfo["Description"];
		$prodimage = $getProdInfo["imgUrl"];
		$proddis = $getProdInfo["discount"];
		if($proddis !='new')
		{
		$mat='<a style="font-weight:500;">Price:</a> <a style="text-decoration:line-through;font-size:10px;font-weight:300;">';
		$price=  $prodprice - ($prodprice*$proddis)/100;
		$dis="rs. ".$price;
		}
		else
		{
			$dis="";
			$price=$prodprice;
		}
				}
?>
<?php include('electronic.php'); ?>
		
<div class="rows" >
	<div class="two" >
			<div class="view-product">
				<img src="img/<?php echo $prodimage; ?>" />	
			</div>
	</div>
	<div class="two" id="information">
		<!--<div class="product-information"><!--/product-information-->
		<!--<h2 class="product">
			<table><th colspan="3"><?php echo $prodname; ?></h2></th>
			<tr><td><p>Description:</p></td><td><p><?php echo $proddesc; ?></p></td></tr>
			<tr><td><p>Category:</p> </td><td> <p><?php echo $prodcat; ?></p></td></tr>
			<tr><td><p>Price:</p></td><td><p><span class="price"> RS. <?php echo $prodprice; ?>\-</span></p></td></tr>
			<tr><td colspan="3"><a class="add-to-cart" id="add-to-cart" onclick="addtocart()"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
			<p id="info" style="color:red;"><strong></strong></p></td></tr>
			
			<tr><td></td></tr>
			</table>
	</div>--><!--/product-information-->
	<div class="heading"><?php echo $prodname; ?></div>
	<div class="fullhead"><?php echo $prodcat," ",$prodname; ?></div>
	<div class="row">
	<div class="col2">
		<div class="price"><?php echo $mat; ?> RS.<?php echo $prodprice; ?></a>   <?php echo $dis; ?></div>
			
	</div>
	<div class="col2"><span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
		</div>	
	</div>
	
	<div class="threecol">
	<div class="col"  onclick="des()">DESCRIPTION</div>
	<div class="col" onclick="details()">DETAILS</div>
	<div class="col" onclick="comment()">COMMENTS</div>
	</div>
	<div id="description" ><?php echo $proddesc; ?></div>
	<div class="threecol">
	
	<div class="col3" ><p><b>QUANTITY</b></p>
			
			<button onclick="increment()">+</button>
			<input id=demoInput type=number min=1 max=10 value="1" size="1">
			<button onclick="decrement()">-</button></div>
	<div class="col3" ><p><b>TOTAL PRICE</b></p><div id="tprice">RS.<?php echo $price; ?></div>
	</div>
	<div><br><br><br><br></div>
	
	<div class="add-to-cart" id="add-to-cart" onclick="addtocart()"><i class="fa fa-shopping-cart" ></i>  Add to Cart</div>
			<div><p id="info" style="color:red;"><strong></strong></p></div>
	</div>
<script>
function addtocart() {
  document.getElementById("info").innerHTML = "Product Added to Cart!";
}
function des() {
  document.getElementById("description").innerHTML = "<?php echo $proddesc; ?>";
}
function details() {
  document.getElementById("description").innerHTML = "<p>category: <?php echo $prodcat; ?></p><?php echo $proddesc; ?><p></p><p>ContactInfo:  1234567</p><p>Email: email@domain.com</p>";
}
function comment() {
  document.getElementById("description").innerHTML = "Value for Money!!!:)";
}
function increment() {

document.getElementById('demoInput').stepUp();
var input=document.getElementById('demoInput');
var count=input.value;
var price="<?php echo $price; ?>";
document.getElementById('tprice').innerHTML="RS."+count*price;
}
function decrement() {
document.getElementById('demoInput').stepDown();
var input=document.getElementById('demoInput');
var count=input.value;
var price="<?php echo $price; ?>";
document.getElementById('tprice').innerHTML="RS."+count*price;
}
</script>
</div>
<?php include('footer.php'); ?>
