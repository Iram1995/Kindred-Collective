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

    <title>Your Kindred Collective Visitor Dashboard - Home</title>


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('php-includes/menu.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper" style="color:white;">
            <div class="container-fluid">

                <div class="row">
                   <div style="padding: 2%;" class="col-lg-3">
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

                         

</div>
<div style="padding: 2%;" class="col-lg-9">
                    <!-- /.col-lg-12 -->
                    <div class="row" style="background-color: #858688;">
                        <div class="col-lg-3" style="padding: 3%;">
                        <h5>Current Balance</h5>
                        <h5>$ 0</h5>
                        <h5>Account For <span style="color:#f4b77e;">Website</span></h5>
                        </div>
                        <div class="col-lg-3" style="padding: 3%;">
                        <h5>Level 1 Bonus</h5>
                        <h5>$ 0</h5>
                        <h5>Bonus From <span style="color:#f4b77e;">Website</span></h5>
                        </div>
                        <div class="col-lg-3" style="padding: 3%;">
                        <h5>Level 2 Bonus</h5>
                        <h5>$ 0</h5>
                        <h5>Bonus From <span style="color:#f4b77e;">Website</span></h5>
                        </div>
                        <div class="col-lg-3" style="padding: 3%;">
                        <h5>Level 3 Bonus</h5>
                        <h5>$ 0</h5>
                        <h5>Bonus From <span style="color:#f4b77e;">Website</span></h5>
                        </div>
                       
                </div>
                <br/>

                <div class="row" >
                        <div class="col-lg-3" style="padding: 3%;background-color: #858688;">
                        <h5>Membership Type </h5>
                        <h3>Plan B</h3>
                        </div>
                        <div class="col-lg-3" style="padding: 3%;background-color: #858688;">
                        <h5>Member Since</h5>
                        <h3>---</h3>
                        </div>
                        <div class="col-lg-3" style="padding: 3%;background-color: #858688;">
                        <h5>Direct Referrals</h5>
                        <h3>0</h3>
                        </div>
                        <div class="col-lg-3" style="padding: 3%;background-color: #858688;">
                        <h5>Total Referrals</h5>
                        <h3>0</h3>
                        </div>
                </div>
                <br/>
                <div class="row" style="background-color: #858688;">
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
                <div class="row" style="background-color: #858688;">
                        <div class="col-lg-6" style="padding: 3%;">
                        
                        <table class="table">
  <thead>
    <tr>
      <th scope="col">USD</th>
      <th scope="col">EURO</th>
      <th scope="col">GBP</th>
      <th scope="col">CNY</th>
    </tr>
  </thead>
  <tbody>
                         <tr>
                            <th style="width: 30%;">BTC</th>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
                        <tr>
                           <th style="width: 30%;">ETH</th>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">UTC</th>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">XMR</th>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th style="width: 30%;">DASH</th>
                            <td></td>
                            <td></td>
                            <td>0</td>
                        </tr>
</tbody>
</table>
                    </div>
                        <div class="col-lg-6" style="padding: 3%;">

                        <h5>Rerreral Team</h5>
                        <hr/>
                        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PICTURE</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>---</td>
      <td>---</td>
      <td>---</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>---</td>
      <td>---</td>
      <td>---</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>---</td>
      <td>---</td>
      <td>---</td>
    </tr>
</tbody></table>
                        
                           </div>
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
