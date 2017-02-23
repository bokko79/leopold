<?php

/* @var $this yii\web\View */

$this->title = 'Hotel Leopold I';
?>

    <?php /*<header>
      <nav class="navbar navbar-default navbar-main navbar-fixed-top" role="navigation">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active dropdown singleDrop">
                <a href="index.html">Home</a>
              </li>
              <li class="dropdown megaDropMenu">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">tour packages</a>
                <ul class="row dropdown-menu">
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Tour Packages Grid View</li>
                      <li><a href="packages-grid-left-sidebar.html">Packages Sidebar Left</a></li>
                      <li><a href="packages-grid-right-sidebar.html">Packages Sidebar Right</a></li>
                      <li><a href="packages-grid.html">Packages 3 Columns</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Tour Packages List View</li>
                      <li><a href="packages-list-left-sidebar.html">Packages Sidebar Left</a></li>
                      <li><a href="packages-list-right-sidebar.html">Packages Sidebar Right</a></li>
                      <li><a href="packages-list.html">Packages List</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Single Package</li>
                      <li><a href="single-package-left-sidebar.html">Package Sidebar Left</a></li>
                      <li><a href="single-package-right-sidebar.html">Package Sidebar Right</a></li>
                      <li><a href="single-package-fullwidth.html">Package Fullwidth</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Booking Steps</li>
                      <li><a href="booking-1.html">Step 1 - Personal Info</a></li>
                      <li><a href="booking-2.html">Step 2 - Payment Info</a></li>
                      <li><a href="booking-3.html">Step 3 - Confirmation</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destinations</a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="destination-cities.html">Destination Cities</a></li>
                  <li><a href="destination-single-city.html">Single Destination</a></li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES</a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Gallery <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="gallery-grid.html">Gallery Grid</a></li>
                      <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                      <li><a href="gallery-photo-slider.html">Photo Slider</a></li>
                    </ul>
                  </li>
                  <li><a href="404.html">404 Not Found</a></li>
                  <li><a href="coming-soon.html">Coming Soon</a></li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid View <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-grid-three-col.html">Blog Grid 3 Col</a></li>
                      <li><a href="blog-grid-two-col.html">Blog Grid 2 Col</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog List View <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                      <li><a href="blog-list-left-sidebar.html">blog-list-left-sidebar.html</a></li>
                      <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Blog Post <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-single-right-sidebar.html">Right Sidebar</a></li>
                      <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">shortcodes</a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="accordion-and-toggles.html">Accordions &amp; Toggles</a></li>
                  <li><a href="tabs-and-dropdown.html">Tabs &amp; Dropdowns</a></li>
                  <li><a href="pricing-table.html">Pricing Tables</a></li>
                </ul>
              </li>
              <li class="dropdown searchBox">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="searchIcon"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <span class="input-group">
                      <input type="text" class="form-control" placeholder="Search..." aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2">Search</span>
                    </span>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header> */ ?>

    <!-- BANNER -->
    <section class="bannercontainer">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="/images/home/slider-05.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  WELCOME TO
                  <span>LEOPOLD I ****</span>
                </div>
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Spread throughout the building that composes the Hotel Leopold I at the top of the 17th century magnificent Petrovaradin Fortress, each of our 32 guestrooms and suites welcomes guests to sumptuous, elegant surroundings that reflect the rich cultural heritage of Novi Sad.
                </div>
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><a target="_blank" href="http://goo.gl/lXpsqr" class="btn buttonCustomPrimary">Book now</a></span>
                </div>
              </div>
            </li>
            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
              <img src="/images/home/slider-06.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Feel The History
                  <span>Fortress</span>
                </div>
                <div class="tp-caption rs-caption-2 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  With sweeping views over Novi Sad and the Danube River, HOTEL LEOPOLD I, enjoys a location rich in history, on the top of the 17th century magnificent Petrovaradin Fortress and just moments from the centre of Novi Sad.
                </div>
                <div class="tp-caption rs-caption-3 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><a target="_blank" href="http://goo.gl/lXpsqr" class="btn buttonCustomPrimary">Read More</a></span>
                </div>
              </div>
            </li>
            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="/images/home/slider-07.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Enjoy Ultimate Freedom
                  <span>Accomodation</span>
                </div>
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Spread throughout the building that compose the Hotel Leopold I at the top of the 17th century magnificent Petrovaradin Fortress, each of our 31 guestrooms and suites welcomes guests to sumptuous, elegant surroundings that reflect the rich cultural heritage of Novi Sad.
                  Choose your preferred accommodation from our selection of guestrooms and suites below, many of which feature views that extend out over Novi Sad and the Danube River for a unique experience.
                </div>
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><a target="_blank" href="http://goo.gl/lXpsqr" class="btn buttonCustomPrimary">Book Now</a></span>
                </div>
              </div>
            </li>
            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
              <img src="/images/home/slider-08.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Feel like at home
                  <span>24/7 Quick Support</span>
                </div>
                <div class="tp-caption rs-caption-2 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Hotel Leopold I offers all its guests a well equipped Wellness & Fitness Centre, an ideal place to find the right balance after a hard day’s work or an excursion.The Wellness Centre includes a Jacuzzi area, a Finnish sauna, Salt room, a relaxation area with comfortable chaise longue and a fitness area with Technogym equipment and views over Novi Sad and the Danube River. 
                  Pamper yourself and choose between an aesthetic treatment or a massage for face, hands, feet and body upon reservation.
                </div>
                <div class="tp-caption rs-caption-3 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><a target="_blank" href="http://goo.gl/lXpsqr" class="btn buttonCustomPrimary">View Delails</a></span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- SEARCH TOUR -->
    <section class="darkSection">
      <div class="container">
        <div class="row gridResize">
          <div class="col-sm-3 col-xs-12">
            <div class="sectionTitleDouble">
              <p>Search</p>
              <h2>your <span>rooms</span></h2>
            </div>
          </div>
          <div class="col-sm-7 col-xs-12">
            <div class="row">
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id2" id="guiest_id2" class="select-drop">
                    <option value="0">Destinations</option>
                    <option value="1">USA</option>
                    <option value="2">UK</option>
                    <option value="3">Canada</option>            
                  </select>
                </div>
              </div>
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id2" id="guiest_id2" class="select-drop">
                    <option value="0">Destinations</option>
                    <option value="1">USA</option>
                    <option value="2">UK</option>
                    <option value="3">Canada</option>            
                  </select>
                </div>
              </div>
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id2" id="guiest_id2" class="select-drop">
                    <option value="0">Destinations</option>
                    <option value="1">USA</option>
                    <option value="2">UK</option>
                    <option value="3">Canada</option>            
                  </select>
                </div>
              </div>
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id3" id="guiest_id3" class="select-drop">
                    <option value="0">$1000 - $2000</option>
                    <option value="1">$1400 - $2000</option>
                    <option value="2">$1600 - $2000</option>
                    <option value="3">$1800 - $2000</option>            
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-2 col-xs-12">
            <a href="#" class="btn btn-block buttonCustomPrimary">Search</a>
          </div>
        </div>
      </div>
    </section>

    <!-- TOP OFFER -->
    <section class="mainContentSection packagesSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="sectionTitle">
              <h2><span class="lightBg">Our Top Offers</span></h2>
              <p>These are our special packages available all around the year! </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="/images/home/deal-01.jpg" alt="deal-image">
              <a href="single-package-right-sidebar.html" class="pageLink"></a>
              <div class="discountInfo">
                <div class="discountOffer">
                  <h4>
                    50% <span>OFF</span>
                  </h4>
                </div>
                <ul class="list-inline rating homePage">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                </ul>
                <ul class="list-inline duration">
                  <li>7 days</li>
                  <li>Min stay: 1</li>
                  <li>Min persons: 1</li>
                </ul>
              </div>
              <div class="caption">
                <h4><a href="single-package-right-sidebar.html" class="captionTitle">BUSINESS PACKAGE</a></h4>
                <p>PACKAGE INCLUDES: - Accommodation in Superior double room with fortress view; - Buffet breakfast; - Welcome drink;</p>
                <div class="detailsInfo">
                  <h5>
                    <span>Start From</span>
                    $119
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li><a href="single-package-right-sidebar.html" class="btn buttonTransparent">Details</a></li>
                    <li><a href='booking-1.html' class="btn buttonTransparent">Book now</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="/images/home/deal-02.jpg" alt="deal-image">
              <a href="single-package-fullwidth.html" class="pageLink"></a>
              <div class="discountInfo">
                <div class="discountOffer">
                  <h4>
                    Free <span>Gift</span>
                  </h4>
                </div>
                <ul class="list-inline rating homePage">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                </ul>
                <ul class="list-inline duration">
                  <li>Min stay: 3</li>
                  <li>Min persons: 1</li>
                </ul>
              </div>
              <div class="caption">
                <h4><a href="single-package-fullwidth.html" class="captionTitle">PACKAGE FOR HUNTERS</a></h4>
                <p>THREE NIGHTS EUR 299 FOR ONE PERSON AVAILABLE FROM 06.06.2016. TO 30.12.2016. PACKAGE INCLUDES: - Accommodation in Superior double room for one person.</p>
                <div class="detailsInfo">
                  <h5>
                    <span>Start From</span>
                    $299
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li><a href="single-package-fullwidth.html" class="btn buttonTransparent">Details</a></li>
                    <li><a data-toggle="modal" href='.modalBook' class="btn buttonTransparent">Inquiry</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="/images/home/deal-03.jpg" alt="deal-image">
              <a href="single-package-left-sidebar.html" class="pageLink"></a>
              <div class="discountInfo">
                <div class="discountOffer">
                  <h4>
                    25% <span>OFF</span>
                  </h4>
                </div>
                <ul class="list-inline rating homePage">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                </ul>
                <ul class="list-inline duration">
                  <li>Min stay: 2</li>
                  <li>Min persons: 2</li>
                </ul>
              </div>
              <div class="caption">
                <h4><a href="single-package-left-sidebar.html" class="captionTitle">DINNER AND STAY PACKAGE</a></h4>
                <p>PACKAGE PRICE 129 EUR AVAILABLE FROM 10.11.2016. TO 29.12.2016. Pack your bags for a Autumn weekend in Novi Sad! Our dinner package for two persons includes a 3 .</p>
                <div class="detailsInfo">
                  <h5>
                    <span>Start From</span>
                    $129
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li><a href="single-package-left-sidebar.html" class="btn buttonTransparent">Details</a></li>
                    <li><a href='booking-1.html' class="btn buttonTransparent">Book now</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="btnArea">
              <a href="packages-grid.html" class="btn buttonTransparent">view all</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PROMOTION PARALLAX -->
    <section class="promotionWrapper">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="promotionTable">
              <div class="promotionTableInner">
                <div class="promotionInfo">
                  <span>Weekend Getaway Package</span>
                  <h2>Petrovaradin Fortress Tour</h2>
                  <ul class="list-inline rating">
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  </ul>
                  <p>$599 per person - 5 nights</p>
                  <a href="single-package-right-sidebar.html" class="btn buttonCustomPrimary">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- DESTINATIONS -->
    <section class="whiteSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="sectionTitle">
              <h2><span>Our Rooms</span></h2>
              <p>More than 50 luxury rooms and apartments</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="media destinations">
              <a class="media-left" href="destination-cities.html">
                <img class="media-object" src="/images/home/destination.jpg" alt="Destination">
              </a>
              <div class="media-body">
                <h3 class="media-heading">Choose <br>Your Suite</h3>
                <p>Choose your preferred accommodation from our selection of guestrooms and suites below, many of which feature views that extend out over Novi Sad and the Danube River for a unique experience.</p>
                <div class="clearfix">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-minus" aria-hidden="true"></i>Superior</li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Aenean</a></li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Etiam</a></li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Donec</a></li>
                  </ul>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-minus" aria-hidden="true"></i>Junior</li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Maecenas</a></li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Cras Sagittis</a></li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Vestibulum</a></li>
                  </ul>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-minus" aria-hidden="true"></i>Family</li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Morbi Sed</a></li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Pellentesque</a></li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Proin</a></li>
                  </ul>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-minus" aria-hidden="true"></i>Honeymoon</li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Duis Eu</a></li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Morbi Nisl</a></li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Curabitur</a></li>
                  </ul>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-minus" aria-hidden="true"></i>Royal</li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Vivamus</a></li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Nibh Odio</a></li>
                    <li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Dictum</a></li>
                  </ul>
                </div>
                <div class="media-btn">
                  <a href="destination-cities.html" class="btn buttonTransparent">View All</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- COUNTING PARALLAX -->
    
    <section class="countUpSection">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="text-center">
              <div class="icon">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <div class="counter">51</div>
              <h5>rooms</h5>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="text-center">
              <div class="icon">
                <i class="fa fa-gift" aria-hidden="true"></i>
              </div>
              <div class="counter">7119</div>
              <h5>annual stays</h5>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="text-center">
              <div class="icon">
                <i class="fa fa-smile-o" aria-hidden="true"></i>
              </div>
              <div class="counter">4562</div>
              <h5>happy clients</h5>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="text-center">
              <div class="icon">
                <i class="fa fa-life-ring" aria-hidden="true"></i>
              </div>
              <div class="counter">24</div>
              <h5>hours support</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- TOUR PACKAGES -->
    <section class="whiteSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="sectionTitle">
              <h2><span>Our Packages</span></h2>
              <p>These are our special packages available all around the year! You can book directly on the booking window at the top of the page (scroll down after the "only room" rates) or contact us at office@leopoldns.com, +381 (0)21 488 78 78.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="filter-container isotopeFilters">
              <ul class="list-inline filter">
                <li class="active"><a href="#" data-filter="*">All Packages</a></li>
                <li><a href="#" data-filter=".business">Business</a></li>
                <li><a href="#" data-filter=".pleasure">Pleasure</a></li>
                <li><a href="#" data-filter=".new">New Year</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row isotopeContainer">
            <div class="col-sm-4 isotopeSelector business">
              <article class="">
                <figure>
                  <img src="/images/home/deal-01.jpg" alt="">
                  <h4>Business Package</h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                    <a class="fancybox-pop" href="single-package-fullwidth.html">
                    <div class="overlayInfo">
                      <h5>from <span>€119</span></h5>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i>27 Jan, 2017</p>
                    </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
            <div class="col-sm-4 isotopeSelector business pleasure">
              <article class="">
                <figure>
                  <img src="/images/home/deal-02.jpg" alt="">
                  <h4>Hunters Package</h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                  <a class="fancybox-pop" href="single-package-fullwidth.html">
                      <div class="overlayInfo">
                        <h5>from <span>€299</span></h5>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i>09 Feb, 2017</p>
                      </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
            <div class="col-sm-4 isotopeSelector pleasure">
              <article class="">
                <figure>
                  <img src="/images/home/deal-03.jpg" alt="">
                  <h4>Weekend Getaway</h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                    <a class="fancybox-pop" href="single-package-fullwidth.html">
                    <div class="overlayInfo">
                      <h5>from <span>€119</span></h5>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i>14 Feb, 2017</p>
                    </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
            <div class="col-sm-4 isotopeSelector pleasure">
              <article class="">
                <figure>
                  <img src="/images/home/deal-02.jpg" alt="">
                  <h4>New Year: 1 Night Package</h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                    <a class="fancybox-pop" href="single-package-fullwidth.html">
                    <div class="overlayInfo">
                      <h5>from <span>€225</span></h5>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i>11 Jan, 2017</p>
                    </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
            <div class="col-sm-4 isotopeSelector pleasure new">
              <article class="">
                <figure>
                  <img src="/images/home/deal-03.jpg" alt="">
                  <h4>New Year: 2 Nights Package</h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                    <a class="fancybox-pop" href="single-package-fullwidth.html">
                    <div class="overlayInfo">
                      <h5>from <span>€310</span></h5>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i>02 Feb, 2017</p>
                    </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
            <div class="col-sm-4 isotopeSelector new">
              <article class="">
                <figure>
                  <img src="/images/home/deal-01.jpg" alt="">
                  <h4>New Year: 3 Nights Package</h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                    <a class="fancybox-pop" href="single-package-fullwidth.html">
                    <div class="overlayInfo">
                      <h5>from <span>€410</span></h5>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i>26 Feb, 2017</p>
                    </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
        </div>
      </div>
    </section>

    
