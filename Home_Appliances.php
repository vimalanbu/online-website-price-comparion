<html>
<head>
    <title>Home Appliances</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
       <!--this is products pages  link start-->

  <link rel="stylesheet" href="CSS_File/home_app.css">

<!--this is product pages  link end-->
</head>
<body>
<div class="container-fulid py-3">
<div class="mobile_img">
    <h4>"In the heart of your home, find the perfect beats of technology. Explore our appliance haven today!"</h4>
</div>
<div class="heading">
    <h2>Brand in this category</h2>
</div>
    <div class="row mt-5">
        <?php
        require 'connection1.php';

        $query = "SELECT * FROM `home_appliances`";
        $query_run =mysqli_query($connection,$query);
        $check_data =mysqli_num_rows($query_run)>0;

        if($check_data)
        {
            while($row = mysqli_fetch_array($query_run))
            {
                ?>
   <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                  <img src="home/<?php echo $row["Product_imag"]; ?>" class="img-responsive"/ width="200" hieght="100">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['Product_Name']; ?></h5>
                    <p class="card-text"> 
                        <div>
                        <h6>Product Price  : <?php echo $row['Product_Price']; ?>   
                        <button><a href="<?php echo $row['Product_Link'];?>">BUY NOW</a></button></h6>    <br>   
                        </div>
                        <div><h6>Flipkart Price : <?php echo $row['Flipkart_Price']; ?>  
                        <button><a href="<?php echo $row['Flipkart_Link'];?>">BUY NOW</a></button></h6>        <br></div>
                        <div>
                        <h6>Amazon Price   : <?php echo $row['Amazon_Price']; ?>    
                        <button><a href="<?php echo $row['Amazon_Link'];?>">BUY NOW</a></button></h6></p>
                        </div>
                   </div>
                </div>
            </div>
        </div>
                <?php    
            }
        }
        ?>
    </div>
</div>  
</body>
</html>


