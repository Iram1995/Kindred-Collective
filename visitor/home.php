<?php
include('php-includes/check-login.php');
include('php-includes/connect.php');
$userid = $_SESSION['userid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Kindred Collective Visitor Dashboard - Home</title>

   

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 

</head>
<style>

</style>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('php-includes/menu.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper" style="color:white;">
            <div class="container-fluid">

                <div class="row">
                   <!-- <div style="padding: 2%;" class="col-lg-3">
                   <div class="row" style="padding: 15%;background-color: #858688;">
               <span> <i class="fas fa-dollar-sign" style="background-color: #da593536;
    border: 2px solid #4a3343;
    font-size: large;
    border-radius: 48%;
    padding: 4%;">$</i><span><span> Level 1 Bonus</span>
    <br/>
     <span> <i class="fas fa-dollar-sign" style="background-color: #da593536;
    border: 2px solid #4a3343;
    font-size: xx-large;
    border-radius: 48%;
    padding: 4%;visibility: hidden;">$</i><span><span>0 $</span>
              
            </div>
            <div class="row" style="padding: 15%;background-color: #858688;">
                <span> <i class="fas fa-dollar-sign" style="background-color: #da593536;
    border: 2px solid #4a3343;
    font-size: large;
    border-radius: 48%;
    padding: 4%;">$</i><span><span> Level 2 Bonus
     <br/>
     <span> <i class="fas fa-dollar-sign" style="background-color: #da593536;
    border: 2px solid #4a3343;
    font-size: xx-large;
    border-radius: 48%;
    padding: 4%;visibility: hidden;">$</i><span><span>0 $</span>
                                
            </div>                
            <div class="row" style="padding: 15%;background-color: #858688;">
                <span> <i class="fas fa-dollar-sign" style="background-color: #da593536;
    border: 2px solid #4a3343;
    font-size: large;
    border-radius: 48%;
    padding: 4%;">$</i><span><span> Level 3 Bonus
     <br/>
     <span> <i class="fas fa-dollar-sign" style="background-color: #da593536;
    border: 2px solid #4a3343;
    font-size: xx-large;
    border-radius: 48%;
    padding: 4%;visibility: hidden;">$</i><span><span>0 $</span>
                                  
            </div>
            <div class="row" style="padding: 15%;background-color: #858688;">
                <span> <i class="fas fa-dollar-sign" style="background-color: #da593536;
    border: 2px solid #4a3343;
    font-size: large;
    border-radius: 48%;
    padding: 4%;">$</i><span><span> Level 4 Bonus
     <br/>
     <span> <i class="fas fa-dollar-sign" style="background-color: #da593536;
    border: 2px solid #4a3343;
    font-size: xx-large;
    border-radius: 48%;
    padding: 4%;visibility: hidden;">$</i><span><span>0 $</span>
                                  
            </div>
            <div class="row" style="padding: 15%;background-color: #858688;">
                <span> <i class="fas fa-dollar-sign" style="background-color: #da593536;
    border: 2px solid #4a3343;
    font-size: large;
    border-radius: 48%;
    padding: 4%;">$</i><span><span> Level 5 Bonus
     <br/>
     <span> <i class="fas fa-dollar-sign" style="background-color: #da593536;
    border: 2px solid #4a3343;
    font-size: xx-large;
    border-radius: 48%;
    padding: 4%;visibility: hidden;">$</i><span><span>0 $</span>
                                  
            </div>

                         

</div> -->
<div style="padding: 2%;" class="col-lg-12">
                    <!-- /.col-lg-12 -->
                    <div class="row justify-content-center" >
                    <h4 style="background-color: #5a5b5c;
    text-align: center;
    padding: 1%;">Notification! Thanks for sending gift to<span style="float: right;">✕</span></h4>
                   
                    </div>
                    <div class="row justify-content-center" >
                    <h4 style="background-color: #5a5b5c;
    text-align: center;
    padding: 1%;">There is an open $25 spot on board _ would you like to re-gift?<span style="float: right;">✕</span></h4>
                   
                    </div>
                    <br/>
                    <div class="row justify-content-center">
                        <div class="col-lg-4" style="">
                        
                          <div style="background-color: #858688;padding:3%">
                              <h4 >Member Since</4>
                              <h5>------</h5>   
                              <h5>------</h5> 
                              <h5>------</h5> 
                              <h5>------</h5> 
                          </div>
                        </div>
                        <div class="col-lg-4" style="">
                          <div style="background-color: #858688;padding:3%">
                            <h4>Person gifted to - email</h4>
                            <h5>------</h5>   
                            <h5>------</h5> 
                            <h5>------</h5> 
                            <h5>------</h5> 

                          </div>
                        </div>
                        <div class="col-lg-4" style="">
                          <div style="background-color: #858688;padding:3%">
                          <h5>&nbsp;</h5>   
                              <h5>&nbsp;</h5> 
                              <h4>Paid</h4>                             
                              <h5> Status</h5> 
                              <h5>&nbsp;</h5>  
                          </div>
                        </div>
                                             
                </div>
                <br/>
                <div class="row justify-content-center">
                        <div class="col-lg-4" style="">
                        
                          <div style="background-color: #858688;padding:3%">
                              <h4 >Board Number</4>
                              <h5>------</h5>   
                              <h5>------</h5> 
                              <h5>------</h5> 
                              <h5>------</h5> 
                          </div>
                        </div>
                        <div class="col-lg-4" style="">
                          <div style="background-color: #858688;padding:3%">
                            <h4>Paid Referrals</h4>
                            <h5>------</h5>   
                            <h5>------</h5> 
                            <h5>------</h5> 
                            <h5>------</h5> 
                          </div>
                        </div>
                        <div class="col-lg-4" style="">
                          <div style="background-color: #858688;padding:3%">
                              <h4>Gift Amount
</h4>
                              <h5>------</h5>   
                              <h5>------</h5> 
                              <h5>------</h5> 
                              <h5>------</h5> 
                          </div>
                        </div>
                                             
                </div>
               
<br/>
                <div class="row" style="padding:1.5%" >
                        <div class="col-lg-4" style="padding: 3%;background-color: #858688;">
                        <h4>Confirmed Gifts</h4>
                       <h3>----</h3>
                       <h3>----</h3>
                       <h3>----</h3>
                        </div>
                        <div class="col-lg-4" style="padding: 3%;background-color: #858688;">
                        <h4>Unconfirmed Gifts</h4>
                        <h3>----</h3>
                       <h3>----</h3>
                       <h3>----</h3>
                        </div>
                      
                        <div class="col-lg-4" style="padding: 3%;background-color: #858688;">
                        <h4>Total Gifts Received</h4>
                        <h3>----</h3>
                       <h3>----</h3>
                       <h3>----</h3>
                        </div>
                </div>
                <br/>
                <!-- <div class="row" style="background-color: #858688;">
                        <div class="col-lg-4" style="padding: 3%;">
                        <h5>Cash Out</h5>
                        <h5>$ 0.00</h5>
                        <h5 style="color:#c7cbff"> <span style="color:#f4b77e;">Pending: </span>Website</h5>
                        </div>
                        <div class="col-lg-4" style="padding: 3%;">
                        <h5>Cash Out</h5>
                        <h5>$ 0.00</h5>
                        <h5 style="color:#c7cbff"> <span style="color:#68d9af">Approval: </span>Website</h5>
                        </div>
                        <div class="col-lg-4" style="padding: 3%;">
                        <h5>Cash Out</h5>
                        <h5>$ 0.00</h5>
                        <h5 style="color:#c7cbff"> <span style="color:#8f4053">Approval: </span>Website</h5>
                        </div>
                       
                </div>
                <br/>
                -->
                </div>
                       
                </div>

                </div>
                <!-- /.row -->
               
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
