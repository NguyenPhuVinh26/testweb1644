 <?php
include_once("connection.php");
?>
<hr>
     <div class="slider-area">

			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/packground1.1.jpg" width="50" height="40" alt="Slide">
						<div class="caption-group">

					</li>
					<li><img src="img/iPhone12.1top.jpg" width="50" height="40" alt="Slide">
						<div class="caption-group">

					</li>
					<li><img src="img/iPhone.3top.jpg" width="50" height="40" alt="Slide">
						<div class="caption-group">

        
    </div>
			
    </div> 
    <hr>
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title"><strong>New product</h2></strong>
                        <div class="product-carousel">
                           <?php

		  				   	$result = pg_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { 
                                die('Invalid query: ' . pg_error($conn));
                            }
		
			            
			                while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
				            ?>
				            
                            <div class="single-product">
                                <div class="product-f-imagemu">
                                   <img src="img/<?php echo $row['pro_image']?>" width="550" height="450">
                                    <div class="product-hover">
                                        <a href="?page=1sanpham&&id=<?php echo  $row['product_id']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['product_id']?>"><?php echo  $row['product_name' ]?></a>
                                </h2>
                                    
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['price']?>,0$</ins> 
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
  