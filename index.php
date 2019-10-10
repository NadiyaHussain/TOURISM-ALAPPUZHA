<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Beauty Of Alappuzha - One page HTML Responsive</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js">
    </script>
    <script>
    function myfunction()
{
var x=document.forms["myform"]["name"].value;
if(x=="")
{
alert("Please Fill name Field");
document.getElementById('name').focus();
return false;
}

 if ((x.length < 3) || (x.length > 30))
  {
    alert("Your Character must be 3 to 15 Character");
    document.getElementById('name').focus();
     return false;
   }
   var pattern1 = new RegExp("^[a-zA-Z ]*$");
         if(!pattern1.test(document.myform.name.value))
   	       {
         alert("Error: Please enter valid name!");
         myform.name.focus();
         return false;
  }
var a=document.forms["myform"]["address"].value;
if(a=="")
{
alert("Please Fill Address Field");
document.getElementById('address').focus();
return false;
}
if(document.myform.contactno.value == "" ||
           isNaN( document.myform.contactno.value) ||
           document.myform.contactno.value.length != 10 )
   {
     alert( "Please provide a Mobile No upto 10 digit" );
   document.getElementById('contactno').focus();
     return false;
   }
   var pattern = new RegExp("^([6-9]{1})([0-9]{9})$");
      if(!pattern.test(document.myform.contactno.value))
	  {
      alert("Error: Phone Number is invalid!");
      myform.contactno.focus();
    return false;
     }
var e=document.forms["myform"]["emailid"].value;
if(e=="")
{
alert("Please Fill emailid Field");
document.getElementById('emailid').focus();
return false;
}
var email = document.myform.emailid.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
  if (email == "" || atpos < 1 || ( dotpos - atpos < 2 ))
  {
     alert("Please enter correct email ID")
   document.getElementById('emailid').focus();
     return false;
  }
var f=document.forms["myform"]["username"].value;
if(f=="")
{
alert("Please Fill username Field");
document.getElementById('username').focus();
return false;
}
var o=document.forms["myform"]["password"].value;
if(o=="")
{
alert("Please Fill password Field");
document.getElementById('password').focus();
return false;
}
if(o.length<8){
   alert("Password must be at least 8 characters long.");
   document.getElementById('password').focus();
    return false;
}

var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
  if(!strongRegex.test(document.myform.password.value))
	  {
      alert("Error: password should contain atleast one uppercase,lowercase ,digit and special characters!");
      myform.password.focus();
    return false;
     }

var h=document.forms["myform"]["cpassword"].value;
if(h=="")
{
alert("Please Fill confirm password Field");
document.getElementById('cpassword').focus();
return false;
}
var pwd = document.getElementById("password").value;
       var cpwd = document.getElementById("cpassword").value;
        if (pwd != cpwd) {
            alert("Passwords do not match.");
			document.getElementById('cpassword').focus();
            return false;
        }
return (true);
}

</script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!--<div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="images/logo.png" alt="">
                                    </a>
                                </div>-->
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#owl-demo11">place to visit</a></li>
                                    <li><a href="#houseboat">houseboat</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                    <li><a href="#login">Login</a></li>
                                    <li><a href="#register">Registration</a></li>

                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->

    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>
    Enjoy Your Trip  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                          <!--  <h2>Accidental appearances </h2>
                           <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh euismod</p>
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Book my Table</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>-->
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> About Us </h2>
                        <h3>Welcome To Alappuzha Tourism...</h3>
                        <p> Washed by the silvery waves of the Arabian Sea, the Venice of the East welcomes you to the backwaters of kerala. The Palm fringed canals and shores bustling with glimpses from the day to day life in the country side, the mirror still lagoons, picture book lakesides and its long sandy beach has blessed , the water locked district, to become one of the best Backwater tourism destinations in God's Own Country. </p>

                        <p> The large network of canals provides Alappuzha its lifeline. Water carnivals using the gigantic snake boats and the country canoes of varying sizes have an important role in the community life of the people of the district. </p>

                        <p>Alappuzha or Alleppey, with its labyrinth, of canals, bridges along silver beach, makes for a memorable holiday. Its cheerful people add to the town's charm. Alappuzha offers enjoyable boat cruises to Kollam along the scenic Vembanad Lake. The never-ending panorama of lush green paddy fields, towering coconut trees, shimmering water and long canals around Alappuzha make a delightful setting for the town. </p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="images/1.jpg" alt="About Main Image">
                            <img class="about-inset" src="images/t.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div class="special-menu pad-top-100 parallax" id="owl-demo11">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Beauty of Alappuzha..</h2>
                        <h5 class="title-caption text-center"> Referred to as the Venice of the East, Alappuzha has always enjoyed an important place in the maritime history of Kerala. </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            Kuttanad
                                            <div class="line"></div>
                                            <div class="dit-line">Kuttanad, is called the rice bowl of Kerala because of its wealth of paddy crops. It lies at the very heart of the backwaters.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/1.jpg" alt="sp-menu"style="height:300px;">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            Alappuzha Beach
                                            <div class="line"></div>
                                            <div class="dit-line">one of Kerala's famous tourist destinations. It is just a kilometre away from the Alappuzha Railway Station. This is one of the most popular picnic spots in Alappuzha.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/Alappuzhabeach.jpg" alt="sp-menu"style="height:300px;">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            Pathiramanal(An Island)
                                            <div class="line"></div>
                                            <div class="dit-line">This is a small beautiful island in the Vembanad Lake and is accessible only by boat from Kumarakom and Muhamma. Pathiramanal means 'Sands of Night'.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/pathiramanal.jpg" alt="sp-menu"style="height:300px;">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            Krishnapuram Palace
                                            <div class="line"></div>
                                            <div class="dit-line">The 18th century Krishnapuram Palace built during the reign of the Travancore monarch, Marthanda Varma.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/krishnapuram.jpg" alt="sp-menu"style="height:300px;">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            Karumadi
                                            <div class="line"></div>
                                            <div class="dit-line">Close to Ambalappuzha, the village of Karumadi is famous for its Karumadi Kuttan, a black granite figure of Lord Buddha, in a sitting position.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/karumadikuttan.jpg" alt="sp-menu"style="height:300px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->

    <div id="houseboat" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                      <h2 class="block-title text-center">
          Our Houseboats
        </h2>
                      <p class="title-caption text-center"></p>
                  </div>
                  <div class="gal-container clearfix">
                      <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                          <div class="box">
                              <a href="#" data-toggle="modal" data-target="#1">
                                  <img src="images/h9.jpg" alt="" />
                              </a>
                              <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <div class="modal-body">
                                              <img src="images/h9.jpg" alt="" />
                                          </div>
                                          <div class="col-md-12 description">
                                              <h4>This is the 1 one on my Gallery</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                          <div class="box">
                              <a href="#" data-toggle="modal" data-target="#2">
                                  <img src="images/p2.jpg" alt="" />
                              </a>
                              <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <div class="modal-body">
                                              <img src="images/p2.jpg" alt="" />
                                          </div>
                                          <div class="col-md-12 description">
                                              <h4>This is the 2 one on my Gallery</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                          <div class="box">
                              <a href="#" data-toggle="modal" data-target="#3">
                                  <img src="images/h10.jpg" alt="" />
                              </a>
                              <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <div class="modal-body">
                                              <img src="images/h10.jpg" alt="" />
                                          </div>
                                          <div class="col-md-12 description">
                                              <h4>This is the 3 one on my Gallery</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                          <div class="box">
                              <a href="#" data-toggle="modal" data-target="#4">
                                  <img src="images/p4.jpg" alt="" />
                              </a>
                              <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <div class="modal-body">
                                              <img src="images/p4" alt="" />
                                          </div>
                                          <div class="col-md-12 description">
                                              <h4>This is the 4 one on my Gallery</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                          <div class="box">
                              <a href="#" data-toggle="modal" data-target="#5">
                                  <img src="images/p5.jpg" alt="" />
                              </a>
                              <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <div class="modal-body">
                                              <img src="images/p5.jpg" alt="" />
                                          </div>
                                          <div class="col-md-12 description">
                                              <h4>This is the 5 one on my Gallery</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                          <div class="box">
                              <a href="#" data-toggle="modal" data-target="#9">
                                  <img src="images/h3.jpg" alt="" />
                              </a>
                              <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <div class="modal-body">
                                              <img src="images/h3.jpg" alt="" />
                                          </div>
                                          <div class="col-md-12 description">
                                              <h4>This is the 6 one on my Gallery</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                          <div class="box">
                              <a href="#" data-toggle="modal" data-target="#10">
                                  <img src="images/h6.jpg" alt="" />
                              </a>
                              <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <div class="modal-body">
                                              <img src="images/h6.jpg" alt="" />
                                          </div>
                                          <div class="col-md-12 description">
                                              <h4>This is the 7 one on my Gallery</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                          <div class="box">
                              <a href="#" data-toggle="modal" data-target="#11">
                                  <img src="images/1.jpg" alt="" />
                              </a>
                              <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <div class="modal-body">
                                              <img src="images/1.jpg" alt="" />
                                          </div>
                                          <div class="col-md-12 description">
                                              <h4>This is the 8 one on my Gallery</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                          <div class="box">
                              <a href="#" data-toggle="modal" data-target="#12">
                                  <img src="images/h5.jpg" alt="" />
                              </a>
                              <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <div class="modal-body">
                                              <img src="images/h5.jpg" alt="" />
                                          </div>
                                          <div class="col-md-12 description">
                                              <h4>This is the 9 one on my Gallery</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                          <div class="box">
                              <a href="#" data-toggle="modal" data-target="#13">
                                  <img src="images/a5.jpg" alt="" />
                              </a>
                              <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <div class="modal-body">
                                              <img src="images/a5.jpg" alt="" />
                                          </div>
                                          <div class="col-md-12 description">
                                              <h4>This is the 10 one on my Gallery</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- end gal-container -->
              </div>
              <!-- end col -->
          </div>
          <!-- end row -->
      </div>
      <!-- end container -->
  </div>


    <!-- end team-main -->

    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Gallery
					</h2>
                        <p class="title-caption text-center"></p>
                    </div>
                    <div class="gal-container clearfix">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#1">
                                    <img src="images/p1.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/p1.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 1 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#2">
                                    <img src="images/p2.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/p2.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 2 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#3">
                                    <img src="images/p3.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/p3.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 3 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#4">
                                    <img src="images/p4.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/p4" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 4 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#5">
                                    <img src="images/p5.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/p5.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 5 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#9">
                                    <img src="images/sun.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/sun.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 6 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#10">
                                    <img src="images/t.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/t.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 7 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#11">
                                    <img src="images/1.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/1.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 8 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#12">
                                    <img src="images/p6.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/p6.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 9 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#13">
                                    <img src="images/a5.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/a5.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 10 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end gallery-main -->


    <!-- end blog-main -->

    <div id="login" class="pricing-main pad-top-100 pad-bottom-100">
        <div class="container">
          <div class="row">
              <div class="form-reservations-box">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <br>
                          <h2 class="block-title text-center">
          Login
        </h2></br>
                      </div>
                      <!--<h4 class="form-title">BOOKING FORM</h4>-->
                      <p></p>

          <form  method="post"  action="checkdb.php" class="reservations-box" name="login">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-box">
                                  <input type="text" name="username" id="form_name" placeholder="Username" data-error="Firstname is required." autocomplete="off"/>
                              </div>
                          </div>
                          <!-- end <col span="2"> -->

                          <!-- end col -->

                          <!-- end col -->
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-box">
                                  <input type="password" name="password" id="pass" placeholder="password"/>
                              </div>
                          </div><br><br>

                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="reserve-book-btn text-center">

                                <input type="submit" id="btn"value="Login" name="send" style="font-size:20pt;color:white;background-color:#FF4500;">
                                <!--<a href="forgot.php"style="color:blue;">forgot password</a>-->

                              </div><br><br><br><br>
                          </div>
                          <!-- end col -->
                      </form>
                      <!-- end form -->
                  </div>
                  <!-- end col -->
              </div>
              <!-- end reservations-box -->
          </div>
          <!-- end row -->
      </div>
      <!-- end container -->
  </div>

    <div id="register" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						Registration
					</h2>
                        </div>
                        <!--<h4 class="form-title">BOOKING FORM</h4>-->
                        <p>PLEASE FILL OUT ALL REQUIRED* FIELDS. THANKS!</p>

                        <form method="post" class="reservations-box" name="myform" action="index.php">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="name" placeholder="Name"  data-error="Firstname is required." id="name" autocomplete="off" >
                                </div>
                            </div>
                            <!-- end col -->

                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="emailid" id="emailid" placeholder="E-Mail ID"  data-error="E-mail id is required." autocomplete="off">
                                </div>
                            </div>

                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="address" id="address" placeholder="Address" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="username" id="username" placeholder="Username" autocomplete="off">
                                </div>
                            </div>

                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                  <select name="district" id="district" class="selectpicker">
                                      <option selected disabled>District</option>

                                      <?php
                                      include 'co.php';
                                     //$q1="select * from department_tbl";
                              //$db1=mysqli_query($con,$q1);
                              $q2="select * from district";
                                $db2=mysqli_query($con,$q2);
                                     while($fetch=mysqli_fetch_array($db2))
                                  {
                                   ?>
                                  <option value="<?php echo $fetch['dis_id']?>"><?php echo $fetch['district']?>  <?php
                                    }
                                        ?>


                              </select>
                                </div>
                             </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="password" name="password" id="password" placeholder="password">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="contactno" id="contactno" placeholder="contact no." autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="password" name="cpassword" id="cpassword" placeholder="confirm password">
                                </div>
                            </div>
                            <!-- end col -->
                            <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="occasion" id="occasion" class="selectpicker">
                                        <option selected disabled>Occasion</option>
                                        <option>Wedding</option>
                                        <option>Birthday</option>
                                        <option>Anniversary</option>
                                    </select>
                                </div>
                            </div> -->
                            <!-- end col -->

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center"  name="submit" onclick="return myfunction();">Register </button>
                                  <!--<input type="submit" id="btn" value="Register" name="submit" onclick="return myfunction();" style="font-size:20pt;color:white;background-color:#FF4500;">
                                    <input type="submit" name="submit" value="Register" onClick="return myfunction();" >-->
                                </div>
                            </div>
                            <!-- end col -->
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->

    <!-- ALL JS FILES -->
      <script src="js/all.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js">
      </script>
</body>

</html>
<?php
include 'co.php';
if(isset($_POST["submit"]))
{
  $a=$_POST['name'];
  $b=$_POST['address'];
  $c=$_POST['contactno'];
  $d=$_POST['emailid'];
  $e=$_POST['district'];
  $f=$_POST['username'];
  $g=$_POST['password'];
   //echo "<script>alert('$g');</script>";
$sq="insert into login(username,password,usertype) values('$f','$g',1)";
if(mysqli_query($con,$sq))
{
	$s=mysqli_query($con,"select logid from login where username='$f'");
	$r=mysqli_fetch_array($s);
	$lid=$r['logid'];
	//echo "<script>alert('$lid');</script>";
$sql="insert into reg(logid,name,address,contactno,emailid,district) values($lid,'$a','$b','$c','$d','$e')";
 $ch=mysqli_query($con,$sql);
if($ch)
{?>
	 <script>
 alert("Registration Successfull");
</script>
	<?php
}
else
{
  echo"error:".$sql."<br>".mysqli_error($con);
}
}
}
