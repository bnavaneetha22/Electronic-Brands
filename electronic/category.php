    	
	<section>
		<div class="electonic-container">
				<?php include('electronic.php'); ?>
				
                <?php $filter = isset($_GET['filter']) ? $_GET['filter'] : '';
		
				//$filter = isset($_POST['filter']) ? $_POST['filter'] : '';
				if(isset($_GET['filter']) && $filter!='ALL')
				{
					$filter = $_GET['filter'];
					$result = mysqli_query($conn,"SELECT * FROM products where Product like '%$filter%' or Description like '%$filter%' or Category like '%$filter%'");
					$c = mysqli_query($conn,"select count('Category') as counts from products where Category like '$filter%'");
                    			
				}
				else
			
				{
					 include('electronicBanner.php');
					$result = mysqli_query($conn,"SELECT * FROM products");
					$c = mysqli_query($conn,"select count(*) as counts from products");
					
               			 }
		?>
					
 	  <section class="product">
	
		
	 <h2 class="title"> <?php echo $filter;?> Products</h2>
				
	<div class="row">

	
	<!--php starts here-->
		<?php											
					

				if($result){
					$data=mysqli_fetch_assoc($c);
					
					$n=$data['counts'];
					$i=0;			
				while($row=mysqli_fetch_array($result)){
					
					$prodID = $row["ID"];
					$dis= $row['discount'];
					$p=$row['Price'];
					if($dis != 'new')
					{
						$value= $p-($dis * $p)/100;
						$rupe='₹';
						$rupe.=$value;
						$dis.='% off';
						$style='style="background-color: green;"';
						$style1='style="text-decoration:line-through;font-size:10px;font-weight:300;"';
					}
					else
					{
						$rupe='';
						$style1='style="font-size:18px;"';
						$style='style="background-color: red;"';
					}
					echo '
					<div class="card">
					<div class="image">
							<span class="discount"  '.$style.'>'.$dis.'</span>
							<a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'"><img src="img/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" /></a>
							<ul class="ullinks">
																
								<li><a href="#"><i class="fa fa-shopping-cart " ></i></a></li>
								<li><a href="#"><i class="fa fa-heart  "></i></a></li>
							</ul>
		
					
					
					</div>
				<div class="details"> 
				<div class="line"></div>
				<div class="line"></div>	
<h2><a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'"> '.$row['Category'].' '.$row['Product'].'</a></h2>	
					
					<h2 class="price1"><a '.$style1.' > ₹'.$row['Price'].'</a>    '.$rupe.'</h2>
					<h2><a href="product-details.php?prodid='.$prodID.'" class="add-to-cart" id="cardcart" ><i class="fa fa-shopping-cart" ></i>View Details</a></h2>
					</div>
				</div>';	
					
								
				}
				
				}
				?>
<div>

<!--php ends here-->
</section>
</div>
</section>
<?php include('footer.php'); ?>
