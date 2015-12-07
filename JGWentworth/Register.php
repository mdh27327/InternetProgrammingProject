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

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Register New User</title>
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
<script src="scripts/additional-methods.js"></script>
<script type="text/javascript">
        function updatepicture(pic)
    {
        document.getElementById("image").setAttribute("src",pic);
    }
    
</script>
    </head>
    <body>
        <h2>Register a New Employee</h2>
        <div class="container">
            <div class="row">
                            <div class="col-md-2">
                                <label for="photo">User Photo</label>
                            </div>
                            <div class="col-md-6">
                                <form id="form" method="post" action="uploadPic.php" enctype="multipart/form-data" target="iframe">
            <input type="file" id="file" name="file"/>
            <input type="submit" name="submit" id="submit" value="Upload File"/>
       
        <p id="message"> Upload your profile image here.</p>
       
        <img style="min-height:120px; min-width:200px;max-height:120px;" id="image"/><br/></br>
        
        <iframe style="display: none;" name="iframe"></iframe>
        </form>
                            </div>
                        </div>
            <form id="registerForm">
                <fieldset>
                    <legend>Employee Info</legend>
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
                </fieldset>
                <fieldset>
                    <legend>User Info</legend>
                <div class="form-group">
                    <div class="row">
                    <div class="col-md-2">
                        <label for="username">Username</label>
                    </div>
                    <div class="col-md-6">
                        <input required minlength="2" maxlength="14" type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                    </div>
                    </div>
                 </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="password">Password</label>
                        </div>
                        <div class="col-md-6">
                            <input required minlength="2" maxlength="14" type="password" class="form-control" id="password" name="Password" placeholder="Enter Password">
                        </div>
                    </div>
                 </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="role">Role</label>
                        </div>
                        <div class="col-md-6">
                            <select name="role" id="role" class="form-control">
                                <?php
                                $result = $db->queryDb("Select * From ROLES", "ROLES", "ROLES");
                              
                                 
                                 while($row = $result->fetch())
                                 {
                                     echo("<option value='".$row['ID']."'>".$row["roleName"]."</option>");
                                 }
                                
                                
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                    </fieldset>
                <input type="button" id="submitbutton" value="Submit" class="btn btn-primary"/>
            </form>
        </div>
    </body>
</html>

<script>
    $("#registerForm").validate();
    
    $("document").ready(function(){
       
        
        $("#submitbutton").click(function(){
            
           if($("#registerForm").valid())
           {
               $.ajax({
                url: 'registerNewUser.php', //This is the current doc
                type: "POST",
                dataType:'json', // add json datatype to get json
                data: ({
                    
                    firstname:$("#firstname").val(),
                    lastname:$("#lastname").val(),
                    phonename:$("#phone").val(),
                    department:$("#department").val(),
                    title:$("#title").val(),
                    phone:$("#phone").val(),
                    username:$("#username").val(),
                    password:$("#password").val(),
                    role:$("#role").val(),
                    image:"<?php echo($_SESSION["imageurl"]);?>"
                    
                 
                
                }),
                success: function(json){
                    
                    
                    alert(json['result']);
                    if(json['result']=='success')
                    {
                        alert("employee successfully added");
                    }
                    else
                    {
                        alert("an error occured");
                    }
                
    }
    
    }); 
           }
           else
           {
               alert("invalid");
           }
           
        });
        
        
        
    });
</script>


