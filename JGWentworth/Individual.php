<?php
ob_start();
session_start();
include 'Database.php';
$db = new Database();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>
<html>
    <head>
        <title>Register New Individual</title>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script src="scripts/jquery.validate.js"></script>
<script src="scripts/additional-methods.js"></script><meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script src="scripts/jquery.validate.js"></script>
<script src="scripts/additional-methods.js">
        function updatepicture(pic)
    {
        document.getElementById("image").setAttribute("src",pic);
    }
    
</script>
        
    </head>
    <h2>Register a New Individual</h2>
    <body>
        
        <div class="container">
            <form id="individualForm"  >
                <fieldset>
                    <legend>Individual Info</legend>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="firstname">First Name</label>
                            </div>
                            <div class="col-md-6">
                                <input required minlength="2" maxlength="14" type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="lastname">Last Name</label>
                            </div>
                            <div class="col-md-6">
                                <input required minlength="2" maxlength="14" type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="phone">Phone</label>
                            </div>
                            <div class="col-md-6">
                                <input required minlength="10" maxlength="14" type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="email">E-Mail</label>
                            </div>
                            <div class="col-md-6">
                                <input required minlength="10" type="text" class="form-control" id="email" name="email" placeholder="E-Mail">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="title">Title</label>
                            </div>
                            <div class="col-md-6">
                                <input required minlength="2" maxlength="14" type="text" class="form-control" id="title" name="tite" placeholder="Title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="department">Department</label>
                        </div>
                        <div class="col-md-6">
                            <select name="department" id="department" class="form-control">
                                <?php
                                $result = $db->queryDb("Select * From DEPARTMENT", "DEPARTMENT", "DEPARTMENT");
                              
                                 
                                 while($row = $result->fetch())
                                 {
                                     echo("<option value='".$row['ID']."'>".$row["DeptName"]."</option>");
                                 }
                                
                                
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="date">Date of First Contact</label>
                            </div>
                            <div class="col-md-6">
                                <input  type="date" class="form-control" id="date" name="date" placeholder="Date of First Contact">
                            </div>
                        </div>
                    </div>
                  
                </fieldset>
                
                <fieldset> 
                    <legend>Address Info</legend>
                        
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="address">Address</label>
                            </div>
                            <div class="col-md-6">
                                <input required minlength="2"  type="text" class="form-control" id="address" name="address" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="city">City</label>
                            </div>
                            <div class="col-md-6">
                                <input required minlength="2" maxlength="20" type="text" class="form-control" id="title" name="city" placeholder="City">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="state">State</label>
                            </div>
                            <div class="col-md-6">
                                <input required minlength="2" maxlength="4" type="text" class="form-control" id="state" name="state" placeholder="State">
                            </div>
                        </div>
                    </div>
                <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="zip">Zip Code</label>
                            </div>
                            <div class="col-md-6">
                                <input required minlength="2" maxlength="14" type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="country">Country</label>
                            </div>
                            <div class="col-md-6">
                                <input required minlength="2" maxlength="34" type="text" class="form-control" id="title" name="country" placeholder="Country">
                            </div>
                        </div>
                    </div>
                
                
                
                
                </fieldset>
                
                <input type="button" id="submit" value="Submit" class="btn btn-primary"/>
            </form>
        </div>
    </body>
</html>

<script>
    