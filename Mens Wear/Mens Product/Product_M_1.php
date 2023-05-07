<!DOCTYPE html>

<head>

    <title>Fashiknow</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>
   
     <div class="back_icon" style="margin-left:80px;margin-top: 15px;">
    <a href="http://localhost/webathon/kids%20wear/">
                <img src="leftarrow.png" width="2%">
              </a>    
    </div>
   
    <div class="product_page" style="margin-top:-50px">

        <div class="row">

            <div class="col">
           
                 
          
                <div class="slider">

                    <div class="product">

                        <img src="images/2-1.jpg" alt="" onclick="clickme(this)">
                        <img src="images/2_2.jpg" alt="" onclick="clickme(this)">
                        <img src="images/2_3.jpg" alt="" onclick="clickme(this)">
                        <img src="images/2-4.jpg" alt="" onclick="clickme(this)">

                    </div>
                    <div class="preview">
                        <img src="images/2-1.jpg" id="imagebox" alt="">
                    </div>
                </div>

            </div>
            <div class="col">

               <div class="content">
                    
                    <h2>US POLO ASSN</h2>
                   <div class="caption">
                     <p>Full Sleeves Slim Fit Shirt</p>
                   </div>
                   <div class="cost">
                       <h3>₹1000</h3> 
                        <p>MRP <strike>₹2000</strike> (50% OFF) </p>
                        <p></p>
                   </div>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p class="price">Brand: USPA</p>
                    <p>Size: <select name="size" class="size">

                            <option value="select size">select size</option>
                            <option value="small">small</option>
                            <option value="medium">medium</option>
                            <option value="large">large</option>

                        </select></p>
                        <div class="quantity">
                    <p>Quantity: <input type="number" value="1" min="1" max="5"></p>
                </div>

                 
           <div class="price">Product Details</div>
           <div class="Pro_details" style="margin-top:10px; margin-bottom: 10px;">
               <ul>
                   
                   <li>Slim Fit</li>
                   <li>Machine Wash</li>
                   <li>100% cotton</li>
                   <li>Product Code: 36484872374</li>
               </ul>
           </div>
                    <button type="button">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart</button>
                         <button type="button" style="margin-left: 10px;">Buy Now</button>
                </div>

            </div>
        </div>


        <div class="related">
            <h2 style="font-family: lucidahandwriting; margin-left:560px; font-size: 30px; color: darkslateblue;">Similar Styles</h2>
            <div class="row">
                <div class="columns">
                    <div class="items">
                          <a href="Mens Product\Product_M_2.php"><img src="images/20-1.png" alt=""> </a>
                        <div class="details">
                            <p>Full Sleeves Slim Fit Shirt</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>

                            <p>INR ₹1000.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                         <a href="Product_M_2"><img src="images/3-1.jpg" alt=""> </a>
                        <div class="details">
                            <p>Full Sleeves Slim Fit Shirt</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>INR ₹610.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                          <a href="Product_M_3"><img src="images/5-1.jpg" alt=""> </a>
                        <div class="details">
                            <p>Sweatshirt</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>INR ₹1200.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                           <a href="Product_M_4"><img src="images/4-1.jpg" alt=""> </a>
                        <div class="details">
                            <p>Full Sleeves Slim Fit Shirt</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>INR ₹700.00</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>



    <script>
        function clickme(smallImg) {

            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src;

        }

    </script>



</body>

</html>
