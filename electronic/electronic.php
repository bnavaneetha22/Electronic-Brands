<?php include('header.php'); ?>
<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
            <!-- Navbar HTML -->
    		<div class='content-wrapper'>
  <div class='navmenu'>
   <form action='category.php' autocomplete='off' id='search-form' method='get'>
<input name='filter' placeholder='Search here...' size='15' type='text'/>
<input id='button-submit' type='submit' value='Search'/>
        </form>
    <div id='menu'><div class="line"></div><div class="line"></div><div class="line"></div></div>
    <nav id='navbar' itemprop='mainEntity' itemscope='itemscope' itemtype='https://schema.org/SiteNavigationElement'>
    <ul class='navbar'>
	
	 	<?php                            
                            $q = "Select * from category where title != 'ALL' order by title asc";
			    $c = mysqli_query($conn,"select count(*) as t from category");
			    $data=mysqli_fetch_assoc($c);
			    $n=$data['counts'];
                            $r = mysqli_query($conn,$q);
			    $i=1;
                            if($r){
                                while($row = mysqli_fetch_array($r)){
			          if($i<=7)
				  {
                                     echo '<li><a href="category.php?filter='.$row['title'].'" class="list-group-item">'.$row['title'].'</a></li>';
				  }
				  else if($i==8)
				   {
					echo '
						 <li id="sub-menu"><span itemprop="name"> More <i class="fa fa-caret-down"></i>	</span>
                					<ul class="sub-menu"> 
						<li><a href="category.php?filter='.$row['title'].'" class="list-group-item">'.$row['title'].'</a></li>';
				   }
				  else
				  {
					echo '<li><a href="category.php?filter='.$row['title'].'" class="list-group-item">'.$row['title'].'</a></li>';
				  } 
				  $i++;                              
				}
                            }
                        ?>
      		</ul>
		</li>
        
          
             </ul>
</nav>
</div>
</div>
<div style='clear: both;'/>
       <!-- End Navbar HTML -->    
    		</div>
		</div>
    </div>
</section>
  <!--  <nav>
      
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links" >
		
			
       
	 	<?php                            
                            $q = "Select * from category where title != 'ALL' order by title asc";
			    $c = mysqli_query($conn,"select count(*) as t from category");
			    $data=mysqli_fetch_assoc($c);
			    $n=$data['counts'];
                            $r = mysqli_query($conn,$q);
			    $i=1;
                            if($r){
                                while($row = mysqli_fetch_array($r)){
			          if($i<=7)
				  {
                                     echo '<li><a href="category.php?filter='.$row['title'].'" class="list-group-item">'.$row['title'].'</a></li>';
				  }
				  else if($i==8)
				   {
					echo '
						 <div class="dropdown">
   						 <button class="dropbtn">More <i class="fa fa-caret-down"></i></button>
   						 <div class="dropdown-content"> 
						<a href="category.php?filter='.$row['title'].'" class="list-group-item">'.$row['title'].'</a>';
				   }
				  else
				  {
					echo '<a href="category.php?filter='.$row['title'].'" class="list-group-item">'.$row['title'].'</a>';
				  } 
				  $i++;                              
				}
                            }
                        ?> 
			</div></div>
			<form style="float: right;">
			<input type="text" placeholder="Search here"/>
			<input type="submit"/>
			</form>
			
        
        </ul>
    </nav>-->
 


<script>
    document.getElementById('menu').addEventListener('click', function () {
        var nav = document.getElementsByTagName('nav')[0];
	var submenu = document.getElementById('sub-menu');
	var product = document.getElementsByClassName('product');
        if (nav.style.display == 'block') {
            nav.style.display = 'none';
	    submenu.style.display = 'none';
	    product.style.display ='block';
        } else {
            nav.style.display = 'block';
	    submenu.style.display = 'block';
	    product.style.display ='none';
        }
    }, false);
    
    </script>
