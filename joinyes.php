
<!doctype html>
<html lang="en">


<head>
  

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  
<!-- =========================
      BASIC PAGE INFORMATION
============================== -->
    <!-- PAGE TITLE -->
      <title>Your Kindred Collective</title>   
    
  
     
    <!-- ALLOW GOOGLE TO INDEX YOUR PAGE -->
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">


<!-- =========================
      FAV & TOUCH ICONS  
============================== -->
    <!-- FAVICON FOR DESKTOPS -->
    <link rel="icon" href="img/favicon.png"> 
    
<!-- =========================
     FONTS  
============================== -->
    <!-- RALEWAY FONT FROM GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900' rel='stylesheet' type='text/css'>
      
    <!-- ELEGANT ICON PACK FOR YOUR PAGE -->
    <link href="css/elegant.css" rel='stylesheet' type='text/css'>


<!-- =========================
     MAIN STYLESHEETS   
============================== -->
    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.css" rel="stylesheet">
      
    <!-- ALIVE! THEME -->
    <link href="css/style-yellow.css" rel="stylesheet" id="theme-change">
      
    <!-- COLORBOX THEME -->
    <!-- CAROUSEL THEME -->
    <link href="css/plugins.css" rel="stylesheet">
  
  
<!-- =========================
     ANIMATIONS  
============================== -->
    <!-- ALIVE THEME ANIMATIONS -->
    <!-- ANIMATIONS BASED ON ANIMATE.CSS -->
    <link href="css/animations.css" rel="stylesheet" type="text/css">
  
  
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
.style1 {font-weight: bold}
.style2 {
	color: #FF0000;
	font-weight: bold;
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
                    <img src="img/logo.jpeg" alt="" style="width:35%"> </a> </h1><p align="right"> </p> 
            </div>
            
            <!-- MAIN MENU BUTTONS CONTAINER --><br />
			
            <div class="buttons-cont">
			                <!-- OPEN MODAL WITH LOGIN FORM -->
           	<a href="joinyes.php" class="btn btn-primary">Join us</a> 
                
                <!-- DOWNLOAD BUTTON - PLACE LINK TO YOUR APP HERE -->
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#LogIn">Member Login</button>  
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
            <h5 class="modal-title" id="myModalLabel">Member Login</h5>
            
            <!-- MODAL SUBTITLE -->
            <p align="center" class="style7">
                        </p>
          </div>
          
          <!-- LOGIN FORM -->
          <div class="modal-body" id="login">
          <form method="post" action="visitor/login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit"  class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
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
                          <button type="submit" class="btn btn-success col-xs-12" disabled>
                            
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
     HEADER
============================== -->
 <section id="header" class="parallax">
      
      <!-- FOR COLOR OVERLAY, CHANGE CLASS TO color-overlay -->
      <div class="overlay">
          <div class="container">
              <div class="row">
                
                  <!-- HEADER CONTENT -->
                  <div class="header-cont col-md-12 header-centred"> 
                                    <!-- MARGIN FROM TOP -->                                     
                                    <div class="header-margin-more"></div>                                     
                                    <!-- HEADER TEXT -->                                     
                                    <header class="anim-fade-down animated fadeInDown" style="opacity: 1;"> 
                                        <!-- HEADER TITLE -->                                         
                                        <h1> <!-- SMALL TITLE --> <span class="header-txt-small">Your</span><br> <!-- REGULAR TITLE --> <span class="header-txt-color"> Kindred  </span>   Collective                         </h1> 
                                        <!-- SUBTITLE -->                                         
                                        <h3>is finally here!</h3> 
                                    </header>                                     
                                    <!-- HEADER BUTTONS -->                                     
                                                                     
                                </div>    
              </div>
          </div>
      </div>
    </section>

<!-- =========================
     CONTACT
============================== -->
    <section id="contact" class="caption-margin">   
      <div class="container">
          <div class="row">
 	
           <h2  align="center" class="desc"><br><br>
 
       <!-- SUBTITLE -->   
        <span>Join Now </span></h2>
          <div class="col-md-12">
                <table width="100%" border="0" cellpadding="0" cellspacing="10">
        <tr>
          <td class="px16"><h1 class="white-text"><span class="blye2 style60">Member Registration </span></h1></td>
        </tr>
        <tr>
          <td align="center"><p>&nbsp;</p>
            <p class="style2">&nbsp;</p>
            <table width="471" border="0" align="center">
              <tr>
                <td bordercolor="#000000"><div>
                    <div align="center" class="style1">
                      <p>&nbsp;</p>
                    </div>
                </div></td>
              </tr>
              <tr>
                <td width="465" bordercolor="#000000"><strong> </strong>
                    <div class="af-element style54">
                      <form action="" class="af-form-wrapper"  method="post" name="signup" id="signup">
                        <div align="center">
                          <p><strong>
                            <input type="hidden" name="checkform" value="checkform" />
                              </strong> <font color="#FF0000" size="3"
            face="Arial,Helvetica,sans-serif"><strong></strong></font><br>
                            <strong>(No spaces, no special characters except @ in email)  </strong></p>
                          <p><span class="style2">DO NOT JOIN UNLESS YOU OR SOMEONE CAN SEND THE $10 ACTIVATION DONATION with Bitcoin or BTC with Cashapp. </span></p>
                        </div>
                        <table width="421" align="center">
                          <tr>
                            <td align="right"><span class="style66"><font size="2">*Inviter's Username : </font></span></td>
                            <td><strong>
                              <input type="text" name="id" value="" size="30" maxlength="30" required/>
                            </strong></td>
                          </tr>
                          <tr>
                            <td width="44%" align="right"><span class="style66"><font size="2">*First Name : </font></span></td>
                            <td width="56%"><strong>
                              <input name="usr_firstname" type="text" id="usr_firstname" value="" size="30" maxlength="30" pattern="^([A-z0-9]){2,}$" required/> 
                            </strong></td>
                          </tr>
                          <tr>
                            <td width="44%" align="right"><span class="style66"><font size="2">*Last Name : </font></span></td>
                            <td width="56%"><strong>
                              <input type="text" name="usr_lastname" value="" size="30" maxlength="30" pattern="^([A-z0-9]){2,}$" required/>
                            </strong></td>
                          </tr>
                          <tr>
                            <td width="44%" align="right"><span class="style66"><font size="2">*Email Address : </font></span></td>
                            <td width="56%"><strong>
                              <input type="text" name="usr_email" id="usr_email" value="" size="30" maxlength="60" required/>
                            </strong></td>
                          </tr>
                          <tr>
                            <td align="right"><span class="style66"><font size="2">*Retype Email Address : </font></span></td>
                            <td><strong>
                              <input type="text" name="email2" value="" size="30" maxlength="60" data-match="#usr_email" required/>
                            </strong></td>
                          </tr>
                          <tr>
                            <td align="right"><span class="style66"><font size="2">*Phone : </font></span></td>
                            <td><strong>
                              <input type="text" name="usr_phone" value="" size="30" maxlength="30" required/>
                            </strong></td>
                          </tr>
                          <tr>
                            <td align="right"><span class="style67"></span></td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="right"><div align="right" class="style68"><span class="style57 ">Gift Preference : </span></div></td>
                            <td><strong>
                                        <textarea name="account_id" cols="25" rows="10" id="account_id" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px"></textarea>
                            </strong></td>
                          </tr>
                          <tr>
                            <td align="right"><span class="style67"></span></td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="right"><span class="style68"><font size="2"><strong>*Create Username  : </strong></font></span></td>
                            <td><strong>
                              <input type="text" name="usr_username" value="" size="30" pattern="^([A-z0-9]){2,}$" required/>
                            </strong></td>
                          </tr>
                          <tr>
                            <td align="right"><span class="style67"></span></td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="right"><span class="style68"><font size="2"><strong>*Create Password : </strong></font></span></td>
                            <td><strong>
                              <input type="password" name="usr_pwd" id="usr_pwd" value="" size="30" data-minlength="5" required/>
                            </strong></td>
                          </tr>
                          <tr>
                            <td width="44%" align="right"><span class="style68"><font size="2"><strong>*Re-type Password : </strong></font></span></td>
                            <td width="56%"><strong>
                              <input type="password" name="usr_pwd_2" value="" size="30" data-match="#usr_pwd" data-minlength="5" required/>
                            </strong></td>
                          </tr>
                        </table>
                        <div align="left"><strong><br />
                          </strong><br />
                        </div>
						
						 <div align="center"><font color="#FF0000" size="3"
            face="Arial,Helvetica,sans-serif"><strong></strong></font></div>
			
                        <center>
                          <strong>
                          <input type="submit" class="button" name="Submit" value="Join" disabled />                          </strong>
                        </center>
                      </form>
                    </div>
                  <script type="text/javascript" src="js/signup.js"></script>
                  <strong></strong></td>
              </tr>
            </table>
            </td>
        </tr>
      </table>
                       
                       
                       
                       
                        <p><font color="#FFFFFF">&nbsp;
                                <!--/area Type="main"-->
                        </font> </p>
                </div>
                
        
        
          
          
      </div>
     </div>
      
    </section>


<!-- =========================
     FORM MODALS
============================== -->
    <!-- SUCCES - MESSAGE SEND -->
    <div class="modal fade" id="FormSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-body">
              <p class="formModal">
                
                  <!-- ICON -->
                  <span class="elegant icon_check_alt2"></span><br/>
                  
                  <!-- MODAL CONTENT BIG -->
                  <span class="desc">Thank You!</span><br/>
                  
                  <!-- MODAL CONTENT SMALL -->
                  Everything went well! We'll be in touch :)
                  
              </p>
          </div>
          
          <!-- CLOSE THE MODAL BUTTON -->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-ok" data-dismiss="modal">That's great!</button>
          </div>
          
        </div>
      </div>
    </div>
    
    <!-- FAILURE - MESSAGE NOT SEND -->
    <div class="modal fade" id="FormFailure" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-body">
              <p class="formModal">
                
                  <!-- ICON -->
                  <span class="elegant error icon_error-circle"></span><br/>
                  
                  <!-- MODAL CONTENT BIG -->
                  <span class="desc">Oops!!</span><br/>
                  
                  <!-- MODAL CONTENT SMALL -->
                  Please check the fields and try again. 
                  
              </p>
          </div>
          
          <!-- CLOSE THE MODAL BUTTON -->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-ok" data-dismiss="modal">Ok, I'll try again</button>
          </div>
          
        </div>
      </div>
    </div>


 <!-- =========================
     FOOTER
============================== -->                 
                <footer> 
                    <div class="container anim-fade-up"> 
                        <!-- CREDITS - HELP US SPREAD THE LOVE :-) -->                         
                        <div class="col-sm-3 col-xs-12 hidden-xs">Your Kindred Collective
                            <br>
                        </div>                         
                        <!-- SOCIAL MEDIA -->                         
                        <div class="col-sm-6"> 
                   
<a href="#" data-toggle="modal" data-target="#terms"> Terms </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	
		<a href="#" data-toggle="modal" data-target="#privacy"> Privacy </a>

								
						</div>                         
                        <!-- COPYRIGHT -->                         
                        <div class="col-sm-3 col-xs-12">Р’В© 2016 all rights reserved.</div>                         
                    </div>                     
                </footer>        
                			
	<!-- =========================
    COMING SOON  MODAL
============================== -->
    <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <!-- CLOSE MODAL BUTTON -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <!-- MODAL TITLE -->
            <h5 class="modal-title" id="myModalLabel">Terms</h5>
            
            <!-- MODAL SUBTITLE -->
            <h6>&nbsp;</h6>
          </div>
<p>Your Kindred Collective  (YES) is a private association of consenting individuals 18 years of age and above who willingly and knowingly have come together for charitable purposes.</p>
        <p>Participants have chosen to exercise their right to freely give to others who have joined with the same purpose and understanding. Access to the&nbsp;<strong>YES </strong>website and participation in the activity are by DIRECT, PERSONAL INVITATION ONLY. If you have been invited to view the website, you are a special person indeed and have been given a tremendous gift, perhaps far greater than you can imagine.</p>
        <p>Please know that&nbsp;<strong>YES&nbsp;</strong>is not an investment club, not a business, not MLM, not a company or corporation, not a commercial enterprise of any kind whatsoever, nor do its activities include the solicitation of anything.&nbsp; There are no investments here, no paychecks, no products or services to sell, no seminars to attend, no tapes or manuals to buy, and no one MAKES or EARNS any money.</p>
        <p>There are no profit making benefits of any kind associated with this activity.&nbsp; No benefit or return of any nature is expressed or implied and no promises or guarantees of any such return are permitted to be made by any participant of this activity.</p>
        <p>By participating in&nbsp;<strong>YES</strong>&nbsp;and willingly giving a gift to one or more of its participants, the donor of such a gift has chosen to extinguish all rights to the gift and cannot rightfully expect or depend on&nbsp;<strong>YES</strong>&nbsp;or any of its participants for any type of monetary compensation.</p>
        <p>Anyone seeking to profit from their endeavors are encouraged to investigate the many profit-making opportunities available today - no such program is offered here. Participants give freely of themselves and expect nothing in return.</p>
        <p>Guidelines have been established to maintain the integrity and high standards of this activity and to enforce respect for participants and the law as it pertains to gifting. Participants are prohibited from representing the activity of <strong>YES&nbsp;</strong>as anything other than as stated above.&nbsp; Maintaining the integrity of this activity and the privacy of its participants are foremost to ensure that this activity remains viable for the long-term.&nbsp; It is our sincere wish and hope that all who join us will be visited by abundance very soon.</p>
        <p>1.&nbsp;<strong>YES</strong>&nbsp;has a Zero Tolerance for Spam. Any Member violating this will automatically be terminated from our Membership.&nbsp;</p>
        <p>2.&nbsp;<strong>YES</strong>&nbsp;does not tolerate members sending out our web site address (<a href="http://kindred.blackbeautyteam.com/" target="_blank">http://kindred.blackbeautyteam.com/</a>) in any form of public marketing campaign such as post cards or letters, phone or fax blasts and ALL other sources of advertising including message boards and search engines.&nbsp;<strong>YES</strong>&nbsp;is a private activity and members must invite privately. Violation of this policy will result in automatic termination from our community.</p>
        <p>3.&nbsp;<strong>YES</strong>&nbsp;prohibits all members to send out the Conference Call phone number and access code in any public form of advertising (see above). Violation of this will result in automatic termination.</p>
        <p>4. No public meetings. Violation of this will result in automatic termination.</p>
        <p>5. No members can give their own Conference Call or Training Calls. Violation of this will result in automatic termination.&nbsp;<strong>YES</strong>&nbsp;cannot and will not monitor outside Conference Calls. We would not be able to control wrongful presentations of the true meaning of gifting and&nbsp;<strong>YES</strong>.</p>
        <p>6. Any ad used must be a blind ad and use appropriate wording in the true intent of gifting.</p>
        <p>7. Members cannot give tax or legal advice in accordance to&nbsp;<strong>YES</strong>&nbsp;activity and advertise tax or legal advice.</p>
        <p>8. Members cannot give income projections or falsely misrepresent the&nbsp;<strong>YES</strong> activity.</p>
        <p>9. Members SHALL NOT record and share the Conference Call in any form or fashion including but not limited to recorded phone calls, web based play back files, conference recording, message lines, CDs, tapes or any other medium, without the permission of Admin. Violation of this will result in immediate termination.</p>
        <p><strong>SPAM POLICY</strong></p>
        <p><strong>YES</strong>&nbsp;has a ZERO TOLERANCE SPAM POLICY, which means that spam activity of ANY kind by any member will result in Immediate Termination including All rights therein. Spam consists of advertising of services and goods by email to anyone without specific prior request or in the absence of a previously established relationship. Messages sent to unknown parties for the purpose of creating a request shall also be deemed as spam, even if specific services or goods are not mentioned. Also considered spam are any messages posted to message boards or use net groups that are not related to their discussions. In the event of a dispute, the burden of proof is on the member, not the recipient. SPAM WILL NOT BE TOLERATED IN ANY CONTEXT, SHAPE OR FORM! SPAM, AND YOU ARE GONE!</p>
        <p>Terminology</p>
        <p>In communicating with others, it is VERY IMPORTANT that the appropriate terminology be used in order to maintain the ethics of this private activity.</p>
        <p>PARTICIPANTS&nbsp;<strong>MUST NOT EVER</strong>&nbsp;use the following terminology when referring to the activity:</p>
        <p>Investment&nbsp;<br />
          Paid Earnings&nbsp;<br />
          Make&nbsp;<br />
          Profits&nbsp;<br />
          Dividends&nbsp;<br />
          Player&nbsp;<br />
          Down-line&nbsp;<br />
          Up-line&nbsp;<br />
          Return&nbsp;<br />
          Net&nbsp;<br />
          Paid out&nbsp;<br />
          Sponsor&nbsp;<br />
          Sign-up&nbsp;<br />
          Purchase&nbsp;<br />
          Guarantee&nbsp;<br />
          Took In<br />
          Paid off<br />
          Play the board<br />
          Play the house<br />
          Guarantee<br />
          Assured Buy<br />
          Sure bet<br />
          Earn<br />
          Multiply your money<br />
          Pay<br />
          Getting Paid<br />
          Recruit<br />
          Buy-in<br />
          Payout<br />
          Income&nbsp;&nbsp;</p>
        <p>PARTICIPANTS&nbsp;<strong>SHOULD ALWAYS</strong>&nbsp;use the following terminology in relation to this private activity:</p>
        <p>Gift<br />
          Give<br />
          Receive<br />
          I have gifted<br />
          I have received<br />
          Participation<br />
          Golden Rule<br />
          Invited by<br />
          Constitutional Rights<br />
          Sharing<br />
          I gave<br />
          Participant<br />
          Giving<br />
          Free association<br />
          Gifter<br />
          Helping others<br />
          Right to give<br />
          Giving<br />
          Nice people<br />
          Register your gift<br />
          Associates<br />
          Fellow man<br />
          Kindness<br />
          Caring<br />
          Activity<br />
          Family<br />
          Community<br />
          Invitation</p>
        <p>&nbsp;</p>
        </div>
      </div>
    </div>
<!-- =========================
   PRIVACY  MODAL
============================== -->
    <div class="modal fade" id="privacy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <!-- CLOSE MODAL BUTTON -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <!-- MODAL TITLE -->
            <h5 class="modal-title" id="myModalLabel">Privacy Policy</h5>
          </div>
<p>What information do we collect?</p>
        <p>We collect information from you when you register on our site.</p>
        <p>When registering on our site, as appropriate, you may be asked to enter your: name, e-mail address, mailing address, and phone number.&nbsp;<br />
              <br />
          <strong>What do we use your information for?</strong></p>
        <p>Any of the information we collect from you may be used in one of the following ways:</p>
        <ul>
          <li>To personalize your experience<br />
            (your information helps us to better respond to your individual needs)</li>
          <li>To improve our website<br />
            (we continually strive to improve our website offerings based on the information and feedback we receive from you)</li>
          <li>To improve customer service<br />
            (your information helps us to more effectively respond to your requests and support needs)</li>
          <li>
            <div align="left">To administer a contest, promotion, survey or other site feature<br />
                  <br />
            </div>
          </li>
        </ul>
        <p><strong>Do we disclose any information to outside parties?</strong></p>
        <p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information.&nbsp;<br />
              <br />
          <br />
          <strong>Terms and Conditions</strong></p>
        <p>Please also visit our Terms and Conditions section establishing the use, disclaimers, and limitations of liability governing the use of our website at <strong>http://kindred.blackbeautyteam.com/</strong><br />
              <br />
          <strong>Your Consent</strong></p>
        <p>By using our site, you consent to our websites privacy policy.<br />
              <br />
          <strong>Changes to our Privacy Policy</strong></p>
        <p>If we decide to change our privacy policy, we will post those changes on this page.&nbsp;</p>
        </div>
      </div>
    </div>


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
    
    <!-- COUTNUP -->
    <script type="text/javascript" src="js/countUp.min.js"></script>
    
    <!-- FORM VALIDATION -->
    <script type="text/javascript" src="js/validator.js"></script>
    
    <!-- IMAGE ZOOM - COLORBOX JS-->
    <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
    
    <!--CUSTOM THEME SCRIPTS & SETTINGS -->
    <script type="text/javascript" src="js/alive.scripts.js"></script>


</body>


</html>
<script>
function RedirectToDashBoard(user,pass){
  var UserName=user.value;
var Password=pass.value;
if(UserName=="mlm" && Password=="admin" ){
  return true;
}
}

</script>