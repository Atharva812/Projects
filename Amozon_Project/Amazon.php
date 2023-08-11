<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://th.bing.com/th/id/OIP.eWfIdvxfHFWm_QXwSGNZJAHaFU?w=242&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" >
        <title>Online Shopping site in India: Shop Online for Mobiles, Books, Watches, Shoes and More - Amazon.in</title>

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" />
        <link rel="stylesheet" href="./CSS/amazon.css" />
        <link href="https://fonts.cdnfonts.com/css/amazon-ember" rel="stylesheet">

    </head>
    <body>
        <header class="header">
            <div class="container ">
                <div class="logo-container border-white">
                    <div class="logo"></div>
                    <span class="dotin">.in</span>
                </div>

                <div class="address-container border-white">
                    <div class="icon-address">
                        <i class="fa-solid fa-location-dot icon-location"></i>
                        <p id="address"><span>Select your address</span></p>
                    </div>
                </div>

                <div class="search-container">
                    <select class="search-select">
                        <option hidden>All</option>
                        <option>All Categories</option>
                        <option>Alexa Skills</option>
                        <option>Amazon Devices</option>
                        <option>Amazon Fashion</option>
                        <option>Amazon Fresh</option>
                        <option>Amazon Pharmacy</option>
                        <option>Appliances</option>
                        <option>Apps & Games</option>
                        <option>Baby</option>
                        <option>Beauty</option>
                        <option>Books</option>
                        <option>Car & Motorbike</option>
                        <option>Clothing & Accesories</option>
                        <option>Collectibles</option>
                        <option>Computers & Accesories</option>
                        <option>Deals</option>
                        <option>Electronics</option>
                        <option>Furniture</option>
                        <option>Garden & Outdoors</option>
                        <option>Gift Cards</option>
                        <option>Grocery & Gourmet Foods</option>
                        <option>Health & Personal Care</option>
                        <option>Home & Kitchen</option>
                        <option>Industrial & Scientific</option>
                        <option>Jwellery</option>
                        <option>Kindle Store</option>
                        <option>Luggage & Bags</option>
                        <option>Luxury Beauty</option>
                        <option>Movies & TV Shows</option>
                        <option>Music</option>
                        <option>Musical Instruments</option>
                        <option>Office Products</option>
                        <option>Pet Supplies</option>
                        <option>Prime Video</option>
                        <option>Shoes & Handbags</option>
                        <option>Software</option>
                        <option>Sports, Fitness & Outdoors</option>
                        <option>Subscribe & Save</option>
                        <option>Tools & Home Improvement</option>
                        <option>Toys & Games</option>
                        <option>Under ₹500</option>
                        <option>Video Games</option>
                        <option>Watches</option>
                    </select>
                    <input type="text" class="search-input" placeholder="Search Amazon.in"/>
                    <div class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>

                <div class="language-container border-white">
                    
                    <div class="lauguge-image">
                        <img src="https://media.istockphoto.com/vectors/vector-flag-of-the-republic-of-india-proportion-23-the-national-flag-vector-id1051236720?k=20&m=1051236720&s=612x612&w=0&h=ATObRTHmTosADa9zaB2dQPn_VAQmG1XYH2x92kzc304=">
                    </div>
                    <p>EN</p>
                </div>

                <div class="login-container border-white">
                    <!-- <p>Hello,<span>sign in</span></p>
                    <p id="account">Account & Lists</p> -->
                
                    <div class="container ">
                        <div class="dropdown">
                            <button class="dropbtn"><span class="icon">Hello,sign in<p id="account">Account & Lists</p></span></button>
                            <div class="dropdown-content">
                                <input type="submit" value="Sign in" id="continue" onclick="location.href='login.php'">
                                <p id="new">New customer? <a href="Account.php" class="link">Start here.</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="return-order-container">
                    <p>Returns
                        <div id="order">& Orders</div>
                    </p>
                </div>

                <div class="cart-container border-white">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Cart
                </div>
            </div>
        </header>

        <nav class="navbar">
            <ul>
                <li><a><i class="fa-solid fa-bars fa-sharp" id="bar"></i>All</a></li>
                <li><a>Amazon miniTV</a></li>
                <li><a>Sell</a></li>
                <li><a>Best Sellers</a></li>
                <li><a>Mobiles</a></li>
                <li><a>Today's Deals</a></li>
                <li><a>Customer Service</a></li>
                <li><a>Electronic</a></li>
                <li><a>Prime</a></li>
                <li><a>New Releases</a></li>
                <li><a>Amazon Pay</a></li>
                <li><a>Home & Kitchen</a></li>
                <li><a>Fashion</a></li>
                <img src="./Images/Prime.png" alt="" id="prime">
            </ul>
        </nav>

        <section>
        <div class="Slideshow">
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./Images/home1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./Images/home2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./Images/home3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./Images/home4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./Images/home5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="./Images/home6.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

 

        </section>

        <main class="main">
            <div class="container1">
                <div class="box">
                    <h3>Great Summer Sale</h3>
                    <a href="Sale.php"><img src="./Images/sale2.jpg" alt="" id="img1" ></a>
                </div>
                <div class="box">
                    <h3>Medicines | Up to 35% off</h3>
                    <a ><img src="./Images/medicine.jpeg" alt="" id="img1" ></a>
                </div>
                <div class="box">
                    <h3>Up to 70% off | Refurbished Products</h3>
                    <a ><img src="./Images/refurbished.jpg" alt="" id="img3" ></a>
                </div>
                <div class="box">
                    <h3>Up to 60% off | Daily essentials</h3>
                    <a ><img src="./Images/daily_essentials.jpg" alt="" id="img1" ></a>
                </div>
                <div id="box2">
                    <a href="Decor.php"><img src="./Images/home_decor.gif" alt="" id="img2"></a>
                </div>
                <div class="box">
                    <h3>Up to 70% off | International brands</h3>
                    <a ><img src="./Images/international_brands.jpg" alt="" id="img3" ></a>
                </div>
                <div class="box">
                    <h3>Biggest Deal of the Year</h3>
                    <a ><img src="./Images/redmi_11.jpg" alt="" id="img1" ></a>
                </div>
                <div class="box">
                    <h3>Ant Esports GP300 Pro V2 Wireless Gaming Contoller</h3>
                    <a href="Product.php"><img src="./Images/controller.webp" alt="" id="img1" style="height: 262px;"></a>
                </div>
                <div class="box">
                    <h3>Up to 40% off | Mobiles & Accesories</h3>
                    <a ><img src="./Images/mobile_accessories.jpg" alt="" id="img3" ></a>
                </div>
                <div id="box2">
                    <a ><img src="./Images/emi.jpg" alt="" id="img2"></a>
                </div>
            </div>

            <div id="box3">
                <h3 style="display: inline-block;">Bestselling speakers & soundbars</h3>
                <p class="link" id="offers">See all offers</p>
                <div class="container2">
                    <a ><img src="./Images/boat_airpods141.jpg" alt="" id="img4"></a>
                    <a ><img src="./Images/sony_wh100.jpg" alt="" id="img4"></a>
                    <a ><img src="./Images/jbl_flip5.jpg" alt="" id="img4"></a>
                    <a ><img src="./Images/boat_rockerz255.jpg" alt="" id="img4"></a>
                    <a ><img src="./Images/jbl_wave200.jpg" alt="" id="img4"></a>
                    <a ><img src="./Images/sony_ht.jpg" alt="" id="img4"></a>
                    <a ><img src="./Images/boult_z20.jpg" alt="" id="img4"></a>
                    <a ><img src="./Images/boat_avante.jpg" alt="" id="img4"></a>
                    <a ><img src="./Images/zebronics.jpg" alt="" id="img4"></a>
                </div>
            </div>
        </main>
        <nav class="navbar1">
            <ul>
                <li><b><a >Back to top</a></b></li>
            </ul>
        </nav>
        <div class="footer">
            <div class="footercon">             
                <ul class="list1">
                    <li><b>Get to know us</b></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Press releases</a></li>
                    <li><a href="">Amazon Science</a></li>
                </ul>
                <ul class="list1 list3">
                    <li><b>Connect with us</b></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Instagram</a></li>
                </ul>
                <ul class="list1 list2" >
                    <li><b>Make Money with us</b></li>
                    <li><a href="">Sell on Amazon</a></li>
                    <li><a href="">Sell under Amazon Acclerator </a></li>
                    <li><a href="">Protect and Built with us</a></li>
                    <li><a href="">Become an Affilitate</a></li>
                    <li><a href="">Fulfilment by Amazon</a></li>
                    <li><a href="">Advertise your Products</a></li>
                    <li><a href="">Amazon Pay on Merchants</a></li>
                </ul>
                <ul class="list1 list2">
                    <li><b>Let us Help You</b></li>
                    <li><a href="">COVID-19 and Amazon</a></li>
                    <li><a href="">Your Account</a></li>
                    <li><a href="">Return Center</a></li>
                    <li><a href="">100% Purchase Protection</a></li>
                    <li><a href="">Amazon App Download</a></li>
                    <li><a href="">Amazon Assistant Download</a></li>
                    <li><a href="">Help</a></li>
                </ul>
            </div>
        </div>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <div class="container container-header">
            <div class="logo-container border-white">
                    <img src="./Images/Amazon-logo4.png" alt="" class="logo">
                
            </div>
            <div class="dropdown2">
                <button class="dropbtn2"><span class="icon"><ion-icon name="globe-outline"></ion-icon> English</span></button>
                <div class="dropdown-content2">
                    <a href="">English-EN</a>
                    <a href="">हिंदी-HI</a>
                </div>
            </div>
        </div>
        <nav class="navbar2">
            <ul>

                <li><a >Austrailia</a></li>
                <li><a >Brazil</a></li>
                <li><a >Canada</a></li>
                <li><a >China</a></li>
                <li><a >France</a></li>
                <li><a >Germany</a></li>
                <li><a >Italy</a></li>
                <li><a >Japan</a></li>
                <li><a >Mexico</a></li>
                <li><a >Netherlands</a></li>
                <li><a >Poland</a></li>
                <li><a >Singapore</a></li>
                <li><a >Spain</a></li>
                <li><a >Turkey</a></li>
                <li><a >United Arab Emirates</a></li><br>
            </ul>
            <ul>      
                <li><a >United Kingdom</a></li>                
                <li><a >United States</a></li>
            </ul>
        </nav>
        <script> 
        let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("demo");
      let captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
    </body>
</html>