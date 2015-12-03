<?php
session_start();
include 'RoleManagement.php';
include 'Display.php';
$disp = new Display();
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
if(!isset($_SESSION['sess_username']))
{
   header("Location:login.html");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='css/dashboard.css' type='text/css'/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script src="scripts/jquery.validate.js"></script>
<script src="scripts/additional-methods.js"></script>   
        <title>Welcome to the Employee Dashboard</title>
    </head>
    <body>
        <div id="headerZone">
            <div class="row" id="bannerZone">
                <div class="col-md-12 text-center">
                    <span class="heading">JG Wentworth</span>
                </div>
            </div>
            <div id="navZone">
            <?php 

            if(userIsInRole("Admin"))
            {
                echo $disp->displayNav(array(
                                                        array(
                                                            'Manage Employees',
                                                            'Register.php'
                                                        ),
                                                        array(
                                                            'Manage Companies',
                                                            'www.google.com'
                                                        ),
                                                        array(
                                                            
                                                            'Logout',
                                                            'Logout.php'
                                                        )
                                                        
                 ));
            }
            else if(userIsInRole("Manager"))
            {
                echo $disp->displayNav(array(
                                                        array(
                                                            'Manage Employees',
                                                            'Register.php'
                                                        ),
                                                        array(
                                                            'Manage Companies',
                                                            'www.google.com'
                                                        ),
                                                        array(
                                                            
                                                            'Logout',
                                                            'Logout.php'
                                                        )
                                                        
                 ));
            }
            else
            {
               echo $disp->displayNav(array(
                                                        array(
                                                            'View Employees',
                                                            'Register.php'
                                                        ),
                                                        array(
                                                            'View Companies',
                                                            'www.google.com'
                                                        ),
                                                        array(
                                                            
                                                            'Logout',
                                                            'Logout.php'
                                                        )
                                                        
                 )); 
            }
            
            
            ?>
            </div>
        </div>
        <div id='DbBodyWrapper'>
            <h2>Welcome</h2>
        </div>
    </body>
    
</html>