<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Bootstrap Roadmap</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">



<link rel="stylesheet" href="assets/style.css">

</head>





<body id="home">
<!-- header -->
      
       

      <h1 class="logo"><a href="#home" class="scroll">Barons</a></h1>
      <div class="menu">
      <a href="#about" class="scroll">Menu</a>
      <a href="#products" class="scroll">Gallery</a>
      <a href="#contact" class="scroll">Contact</a>      
      </div>
      <!-- slider -->
      <div id="carousel-banner" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">


          <!-- image must be 1800 X 900 px -->
        <div class="item active"><img src="images/banner_1.jpg" class="img-responsive">
               <!-- caption -->
              <div class="caption">
              <h2>Freshest Ingredients</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </p>   
              </div>
              <!-- caption -->
        </div>



        <div class="item"><img src="images/banner_2.jpg" class="img-responsive">
               <!-- caption -->
              <div class="caption">
              <h2>Stunning Plates</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </p>   
              </div>
              <!-- caption -->
        </div>



        <div class="item"><img src="images/banner_3.jpg" class="img-responsive">
              <!-- caption -->
              <div class="caption">
              <h2>Family Ready</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </p>   
              </div>
              <!-- caption -->
        </div>


          <div class="item"><img src="images/banner_4.jpg" class="img-responsive">
              <!-- caption -->
              <div class="caption">
                  <h2>Warm Atmosphere</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </p>
              </div>
              <!-- caption -->
          </div>
      </div>         
      <!-- Controls -->
      <div class="next-prev">
      <a class="left" href="#carousel-banner" role="button" data-slide="prev"><i class="fa fa-3x fa-angle-left"></i></a>
      <a class="right" href="#carousel-banner" role="button" data-slide="next"><i class="fa fa-3x fa-angle-right"></i></a>
      </div>
      </div>
      
      <!-- slider -->













        <!-- About -->
        <div class="container top">
            <div class="row">
                <div class="text-center">
                    <h1>Fine Dining On A Budget</h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>














        <!-- food -->
        <div class="about" id="about">
          <div class="container">
            <h2 class="text-center">Our Menu</h2>
            <div class="row">
            <div class="col-md-6 col-xs-12 col-md-offset-3">

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


                    <!-- accordion one-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-cutlery"></i> Breakfast
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                            </div>
                        </div>
                    </div>


                    <!-- accordion two-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-fire"></i> Lunch
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                            </div>
                        </div>
                    </div>




                    <!-- accordion three-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa fa-coffee"></i> Dinner
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                            </div>
                        </div>
                    </div>



                    <!-- accordion four-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fa fa-money"></i> Beverages
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                            </div>
                        </div>
                    </div>



                    <!-- accordion five-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fa fa-flash"></i> Appetizers
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                                <div class="clearfix food-list"><div class="pull-left">Food Dish</div><span class="pull-right">$ 10.00</span></div>
                            </div>
                        </div>
                    </div>




                </div>
                </div>
            </div>
          </div>
        </div>
        <!-- about -->












       <!-- product list -->
       <div id="products">
       <h2 class="text-center">Home Cooking</h2>
        <div class="row-fluid gallery clearfix" id="portfolio">



                <!-- image must be 1024 X 683 px -->
              <!-- product -->
              <div class="col-sm-3 product wowload fadeInUp">
                <img src="images/photos/picture_1.jpg" class="img-responsive">
                <div class="overlay">
                  <div class="ab-wrap"><div class="ab-center text-center">
                    <h3>Relaxing</h3>
                    <a href="images/photos/picture_1.jpg" title="Shoes" class="btn btn-default gallery-image" data-gallery="">View</a>
                  </div></div>
                </div>
              </div>
              <!-- product -->





              <!-- product -->
              <div class="col-sm-3 product wowload fadeInUp">
                <img src="images/photos/picture_2.jpg" class="img-responsive">
                <div class="overlay">
                  <div class="ab-wrap"><div class="ab-center text-center">
                    <h3>Relaxing</h3>
                    <a href="images/photos/picture_2.jpg" title="Formal" class="btn btn-default gallery-image" data-gallery="">View</a>
                  </div></div>
                </div>
              </div>
              <!-- product -->





              <!-- product -->
              <div class="col-sm-3 product wowload fadeInUp">
                <img src="images/photos/picture_3.jpg" class="img-responsive">
                <div class="overlay">
                  <div class="ab-wrap"><div class="ab-center text-center">
                    <h3>Relaxing</h3>
                    <a href="images/photos/picture_3.jpg" title="Red" class="btn btn-default gallery-image" data-gallery="">View</a>
                  </div></div>
                </div>
              </div>
              <!-- product -->





              <!-- product -->
              <div class="col-sm-3 product wowload fadeInUp ">
                <img src="images/photos/picture_4.jpg" class="img-responsive">
                <div class="overlay">
                  <div class="ab-wrap"><div class="ab-center text-center">
                    <h3>Relaxing</h3>
                    <a href="images/photos/picture_4.jpg" title="Brown" class="btn btn-default gallery-image" data-gallery="">View</a>
                  </div></div>
                </div>
              </div>
              <!-- product -->





              <!-- product -->
              <div class="col-sm-3 product wowload fadeInUp ">
                <img src="images/photos/picture_5.jpg" class="img-responsive">
                <div class="overlay">
                  <div class="ab-wrap"><div class="ab-center text-center">
                    <h3>Relaxing</h3>
                    <a href="images/photos/picture_5.jpg" title="Brown" class="btn btn-default gallery-image" data-gallery="">View</a>
                  </div></div>
                </div>
              </div>
              <!-- product -->




              <!-- product -->
              <div class="col-sm-3 product wowload fadeInUp">
                <img src="images/photos/picture_6.jpg" class="img-responsive">
                <div class="overlay">
                  <div class="ab-wrap"><div class="ab-center text-center">
                    <h3>Relaxing</h3>
                    <a href="images/photos/picture_6.jpg" title="Red" class="btn btn-default gallery-image" data-gallery="">View</a>
                  </div></div>
                </div>
              </div>
              <!-- product -->





              <!-- product -->
              <div class="col-sm-3 product wowload fadeInUp">
                <img src="images/photos/picture_7.jpg" class="img-responsive">
                <div class="overlay">
                  <div class="ab-wrap"><div class="ab-center text-center">
                    <h3>Relaxing</h3>
                    <a href="images/photos/picture_7.jpg" title="Shoes" class="btn btn-default gallery-image" data-gallery="">View</a>
                  </div></div>
                </div>
              </div>
              <!-- product -->





              <!-- product -->
              <div class="col-sm-3 product wowload fadeInUp">
                <img src="images/photos/picture_8.jpg" class="img-responsive">
                <div class="overlay">
                  <div class="ab-wrap"><div class="ab-center text-center">
                    <h3>Relaxing</h3>
                    <a href="images/photos/picture_8.jpg" title="Formal" class="btn btn-default gallery-image" data-gallery="">View</a>
                  </div></div>
                </div>
              </div>
              <!-- product -->
       </div>
       </div>
       <!-- product list -->















       <!-- contact -->
       <div class="contact" id="contact">


           <div class="container">
               <div class="row text-center">
                   <h2>Contact Us</h2>
                   <ul>
                       <li>516 High St Portland</li><br>
                       <li>Phone: 1-541-788-7653</li>
                   </ul>
               </div>
           </div>




       <div class="container">
       <h2 class="text-center">Reservations</h2>
       <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            
            
            
            
          <form method="post" name="contact_form" action="assets/contact-form-handler.php">
                <div class="form-group">
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name"> 
                </div>
                <div class="form-group">
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email address">
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" class="form-control" placeholder="Your Message" rows="5"></textarea>
                </div>                  
                <button type="submit" class="btn btn-warning"><i class="fa fa-send-o"></i> Submit</button>
            </form>


            <!-- form validation -->
            <script language="JavaScript">
                var frmvalidator  = new Validator("contactform");
                frmvalidator.addValidation("name","req","Please provide your name");
                frmvalidator.addValidation("email","req","Please provide your email");
                frmvalidator.addValidation("email","email",
                    "Please enter a valid email address");
            </script>
            
         
          </div>
        </div>
       </div>
       </div>



        

       








       <div id="map"></div>
       <!-- contact -->











        <!-- footer -->
        <div class="footer text-center">
          <div class="social">
          <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
          <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
          <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
          <a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
          </div>
        <p>Copyright 2016</p>
        </div>
        <!-- footer -->












      <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
      <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
          <!-- The container for the modal slides -->
          <div class="slides"></div>
          <!-- Controls for the borderless lightbox -->
          <h3 class="title">Title</h3>
          <a class="prev">‹</a>
          <a class="next">›</a>
          <a class="close">×</a>
          <!-- The modal dialog, which will be used to wrap the lightbox content -->    
      </div>

<a href="#home" class="gototop scroll"><i class="fa fa-angle-up  fa-3x"></i></a>

<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- change the API key right after key= in the url here -->
<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
 
<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>