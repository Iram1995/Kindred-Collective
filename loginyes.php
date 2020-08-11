
<!doctype html>
<html lang="en"><head>
  

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  
  
<!-- =========================
      BASIC PAGE INFORMATION
============================== -->
    <!-- PAGE TITLE -->
      <title>The Kindred Collective</title>

<!-- =========================
      FAV & TOUCH ICONS  
============================== -->
    <!-- FAVICON FOR DESKTOPS -->
    <link rel="icon" href="img/favicon.png"> 
    

<!-- =========================
     FONTS  
============================== -->
    <!-- RALEWAY FONT FROM GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900' rel='stylesheet' type='text/css' />
      
    <!-- ELEGANT ICON PACK FOR YOUR PAGE -->
    <link href="css/elegant.css" rel='stylesheet' type='text/css' />


<!-- =========================
     MAIN STYLESHEETS   
============================== -->
    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.css" rel="stylesheet" />
      
    <!-- ALIVE! THEME -->
    <link href="css/style-yellow.css" rel="stylesheet" id="theme-change">
      
    <!-- COLORBOX THEME -->
    <!-- CAROUSEL THEME -->
    <link href="css/plugins.css" rel="stylesheet" />
  
  
<!-- =========================
     ANIMATIONS  
============================== -->
    <!-- ALIVE THEME ANIMATIONS -->
    <!-- ANIMATIONS BASED ON ANIMATE.CSS -->
    <link href="css/animations.css" rel="stylesheet" type="text/css" />
  
  
<!-- =========================
     INTERNET EXPLORER FIXES  
============================== -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    <!--
p.MsoNormal {
margin-top:0in;
margin-right:0in;
margin-bottom:8.0pt;
margin-left:0in;
line-height:107%;
font-size:11.0pt;
font-family:"Calibri",sans-serif;
}
.style10 {color: #FF0000}
.style11 {font-size: 18px}
.style13 {
	font-family: "Times New Roman", Times, serif;
	font-size: 36px;
	font-weight: bold;
}
.style14 {font-family: 'Georgia', serif}
.style18 {
	color: #CC3333;
	font-size: 24px;
}
.style19 {color: #738095}
.style20 {
	font-size: 18px;
	color: #666666;
}
-->
    </style>
</head>


<body id="body" class="page-loading">
    
<!-- =========================
     PRELOADER
============================== -->
    <div id="preloader">
        <div id="loading"></div>
    </div>
  
  
<!-- =========================
     MAIN MENU
============================== -->
   <style type="text/css">
<!--
.style1 {
	font-size: 18px;
	color: #CC0000;
}
.style7 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>

<nav id="mainmenu" class="navbar navbar-fixed-top main-menu head-menu auto-height" role="navigation">
        
        <div class="container">
 
            <!-- LOGO CONTAINER -->
            <div class="logo-cont">
                    <h1><a class="navbar-brand" href="#">
                    <!-- SCROLLS TO TOP OF THE PAGE -->
                      
                      <!--PLACE URL OF YOUR LOGO BELOW-->
                    <img src="img/greenlogo.jpg" alt> </a> </h1><p align="right"> </p> 
            </div>
            
            <!-- MAIN MENU BUTTONS CONTAINER --><br />
			
            <div class="buttons-cont">
			                <!-- OPEN MODAL WITH LOGIN FORM -->
           	<a href="joinyes.php" class="btn btn-primary">Join us</a> 
                
                <!-- DOWNLOAD BUTTON - PLACE LINK TO YOUR APP HERE -->
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#LogIn">Join the Collective</button>  
              	            </div>
            
            <!-- "BURGER MENU" FOR RESPONSIVE VIEW -->
            <div class="navbar-header" id="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                </button>
            </div>
            
            <!-- MAIN MENU CONTAINER -->
            <div id="navbar" class="navbar-collapse collapse">
                <div class="navbar-right">
               
                    <ul class="nav navbar-nav">
                      
                        <!-- MAIN MENU POSITIONS -->
						
                        <li><a href="index.php#about">About</a></li>
					  <li><a href="index.php#contact">Contact</a></li>
					   <li><div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</li>
				
                    </ul>
                </div>
            </div>
	
		<!--	<table width="100%">
			  <tr>
			  <td width="58%">&nbsp;</td>
			  <td width="42%"><p align="right"> </p> </td></tr></table> -->
               </nav>
		
	<!-- =========================
     JOIN US MODAL
============================== -->

    <div class="modal fade" id="joinUs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <!-- CLOSE MODAL BUTTON -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <!-- MODAL TITLE -->
        <h5 class="modal-title" id="myModalLabel">Join our community today!</h5> 
            <!-- MODAL SUBTITLE -->
            <h6>Register an account</h6>
          </div>
  			
          <!-- REGISTRATION FORM -->
          
          <div class="modal-body" id="register">
              <form class="form-horizontal" role="form" data-toggle="validator"  method="POST" action="register.php">
			  <input type="hidden" name="sponsor_id" value="" />
			  <input type="hidden" name="ucheck" id="ucheck" value="" />
			             <input type="hidden" name="checkform" value="checkform" />
			    <div class="form-group">

    <p class="style1"></p>
  </div>
		       <div class="form-group">
    	<p class="style1">Sorry, you cannot register without a sponsor</p>
    		  </div>
	  
			    <div class="form-group">
    <label class="col-sm-2 control-label">Sponsor</label>
    <div class="col-sm-10">
      <p class="form-control-static"></p>
    </div>
  </div>
  
  				<div class="form-group">
                    <div class="input-group col-xs-12">
               <!-- INPUT -->
                         <input type="text" pattern="^([_A-z0-9\s]){2,}$" class="form-control" id="first" name="first" placeholder="First Name" value=""  required />
                  </div>
                      <!-- ERROR MESSAGE BOX -->
                      <div class="help-block with-errors"></div>
                </div>
				  
	  			<div class="form-group">
                    <div class="input-group col-xs-12">
               <!-- INPUT -->
                         <input type="text" pattern="^([_A-z0-9\s]){2,}$" class="form-control" id="last"  name="last"  placeholder="Last Name"  value=""  required />
                  </div>
                      <!-- ERROR MESSAGE BOX -->
                      <div class="help-block with-errors"></div>
                </div>

				  
	  			<div class="form-group">
                    <div class="input-group col-xs-12">
               <!-- INPUT -->
                         <input type="text" pattern="^([_A-z0-9\s]){2,}$" class="form-control" id="rphone"  name="rphone" placeholder="Phone"  value="" required />
                  </div>
                      <!-- ERROR MESSAGE BOX -->
                      <div class="help-block with-errors"></div>
                </div>
	
		  				  
				  
	  			<div class="form-group">
                    <div class="input-group col-xs-12">
               <!-- INPUT -->
                         <input type="email" class="form-control" id="remail"  name="remail" placeholder="E-mail Adress" value="" required />
                  </div>
                      <!-- ERROR MESSAGE BOX -->
                      <div class="help-block with-errors"></div>
                </div>

				<div class="form-group">
                    <div class="input-group col-xs-12">
               <!-- INPUT -->
                         <input type="email" class="form-control" id="repeat-email"  name="repeat-email" placeholder="Retype E-mail"  data-match="#remail"  value="" required />
                  </div>
                      <!-- ERROR MESSAGE BOX -->
                      <div class="help-block with-errors"></div>
                </div>
				  
				  
				  
	  			<div class="form-group">
                    <div class="input-group col-xs-12">
               <!-- INPUT -->
                         <input type="text" pattern="^([_A-z0-9]){2,}$" class="form-control" id="user"  name="user" placeholder="Username" value="" required />
                  </div>
                      <!-- ERROR MESSAGE BOX -->
                      <div class="help-block with-errors"></div>
                </div>
	

				  
                  <div class="form-group">
                      <!-- PASSWORD INPUT -->
                      <div class="input-group col-xs-12">
                         <!-- INPUT -->
                         <input type="password" class="form-control" id="pass"   name="pass" placeholder="password" autocomplete="off" data-minlength="5" required />
                      </div>
                      <!-- ERROR MESSAGE BOX -->
                      <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                      <!-- PASSWORD REPEAT INPUT -->
                      <div class="input-group col-xs-12">
                         <!-- INPUT -->
                         <input type="password" class="form-control" id="pass-repeat"   name="pass-repeat" placeholder="repeat password" autocomplete="off" data-match="#pass" required />
                      </div>
                      
                      <!-- ERROR MESSAGE BOX -->
                      <div class="help-block with-errors"></div>
                  </div>
			
    
				  
   <div class="input-group col-xs-12">
                </div>
                  
              </form>
          </div>
  			
          <!-- MODAL FOOTERS -->
          <div class="modal-footer">          </div>
        </div>
      </div>
    </div>
<!-- =========================
    LOGIN  MODAL
============================== -->
    <div class="modal fade" id="LogIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <!-- CLOSE MODAL BUTTON -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <!-- MODAL TITLE -->
            <h5 class="modal-title" id="myModalLabel">Join the Collective</h5>
            
            <!-- MODAL SUBTITLE -->
            <p align="center" class="style7">
                        </p>
          </div>
          
          <!-- LOGIN FORM -->
          <div class="modal-body" id="login">
              <form class="form-horizontal" role="form" autocomplete="off" data-toggle="validator" method="POST" action="loginyes.php">
                  <div class="form-group">
                    
                      <!-- E-MAIL INPUT -->
                      <div class="input-group col-xs-12">
                        
                         <!-- ICON -->
                         
                         
                         <!-- INPUT -->
                         <input type="text" class="form-control" name="luser" id="luser" placeholder="Username"  required />
                      </div>
                      
                      <!-- ERROR MESSAGE BOX -->
                      <div class="help-block with-errors"></div>
                  </div>
                  
                  <div class="form-group">
                    
                      <!-- PASSWORD INPUT -->
                      <div class="input-group col-xs-12">
                        
                          <!-- ICON -->
                  
                          
                          <!-- INPUT -->
                          <input type="password" class="form-control" name="lpass" id="lpass" placeholder="password" required />
						  <input name="LoginForm[rememberMe]" id="LoginForm_rememberMe" value="0" type="hidden" />
                      </div>
                      
                      <!-- ERROR MESSAGE BOX -->
                      <div class="help-block with-errors"></div>
                  </div>
                  
                  <div class="input-group col-xs-12">
                    <input type="hidden" name="login" value="1"/>
                      <!-- SUBMIT BUTTON -->
					  <!---     <button type="submit" class="btn btn-success col-xs-12"  name="yt2" value="Login"  >--->
           <!--- <input class="btn block btn-success col-xs-12" type="submit" name="yt2" value="Login" />     --->
		    <button type="submit"  name="yt2" class="btn btn-success col-xs-12">
                            
                            <!-- ICON -->
                            <span class="icon_profile"></span>
                            
                            <!-- BUTTON TEXT -->
                            Login                      </button>
                  </div>
                  
                  <!--CHANGE FORM TO PASSWORD REMINDER-->
                  <p class="other" id="gotoRemind">Forgot your password?</p>
              </form>
          </div>
          
      
          
          <!-- PASSWORD REMINDER FORM -->
          <div class="modal-body noopacity nodisplay" id="remind">
              <form class="form-horizontal" role="form" autocomplete="off" data-toggle="validator" method="POST" action="loginyes.php">
			      
                  <div class="form-group">
                    
                      <!-- E-MAIL INPUT -->
                      <div class="input-group col-xs-12">
                        
                         <!-- ICON -->
         
                         
                         <!-- INPUT -->
						   <input name="sendit" type="hidden" id="sendit" value="1">
                         <input type="text" class="form-control"  id="username" name="username" placeholder="Username" autocomplete="off" required />
                      </div>
                      
                      <!-- ERROR MESSAGE BOX -->
                      <div class="help-block with-errors"></div>
                  </div>
                  
                  <div class="form-group">
                      <div class="input-group col-xs-12">
                        
                          <!-- SUBMIT BUTTON -->
                          <button type="submit" class="btn btn-success col-xs-12">
                            
                            <!-- ICON -->
                            <span class="icon_profile"></span>
                            
                            <!-- BUTTON TEXT -->
                            Send me my password                          </button>
                      </div>
                  </div>
              </form>
          </div>
          
          <!-- MODAL FOOTERS -->
          <div class="modal-footer">          </div>
        </div>
      </div>
    </div>

<!-- =========================
    COMING SOON  MODAL
============================== -->
    <div class="modal fade" id="coming_soon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <!-- CLOSE MODAL BUTTON -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <!-- MODAL TITLE -->
            <h5 class="modal-title" id="myModalLabel">Coming Soon!</h5>
            
            <!-- MODAL SUBTITLE -->
            <h6>&nbsp;</h6>
          </div>

        </div>
      </div>
    </div>
<!-- =========================
   PDFS  MODAL
============================== -->
    <div class="modal fade" id="pdfs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <!-- CLOSE MODAL BUTTON -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <!-- MODAL TITLE -->
            <h5 class="modal-title" id="myModalLabel">Download Opportunity PDFs</h5>
            
            <!-- MODAL SUBTITLE -->
            <h6> <a class="btn btn-default"  href="#" target="_blank" role="button">English PDF</a>  </h6>
          </div>

        </div>
      </div>
    </div>
	
  
<!-- =========================
     JOIN US MODAL
============================== -->
    

<!-- =========================
    LOGIN  MODAL
============================== -->
    






      <!-- =========================
     CONTACT
============================== -->
     <section id="members">
<div class="bg-members">
 <div class="row">
  
  

               
     <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp; </p>            

               
            
   
    </div>
 </div>
</section>
   
   <!-- =========================
     footer
============================== -->
       


<!-- =========================
     JS SCRIPTS
============================== -->
    <!-- JQUERY -->
    <script type="text/javascript" src="js/jquery_1.11.1.min.js"></script>
    
    <!-- BOOTSTRAP SCRIPTS -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    <!-- SMOOTH SCROLLING FIX -->
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    
    <!-- PARALLAX -->
    <script type="text/javascript" src="js/parallax.js" id="parallax-change"></script>
    
    <!-- HEADROOM -->
    <script type="text/javascript"  src="js/headroom.min.js"></script>      
    <script type="text/javascript"  src="js/jQuery.headroom.js"></script>
    
    <!-- VIEWPORT DETECTION -->
    <script type="text/javascript" src="js/jquery.inview.min.js"></script>
    
    <!-- CAROUSEL -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    

    
    <!-- FORM VALIDATION -->
    <script type="text/javascript" src="js/validator.js"></script>
    
    <!-- IMAGE ZOOM - COLORBOX JS-->
    <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
    
    <!--CUSTOM THEME SCRIPTS & SETTINGS -->
    <script type="text/javascript" src="js/alive.scripts.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('#LogIn').modal('show');
    });
</script>
</body>


</html>