<?php
ob_start();
session_start();
include_once 'Database.php';

$db = new Database();
?>

<html>
    <head>
        <title>Log Contact</title>
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

    </head>
    <body>
        <h2>Log Contact</h2>
        <p>
            <button onClick="myTimer = setInterval(myCounter, 1000)">Start counter!</button>

`       <p id="demo">Click on the button above and I will count forever.</p>

        <button onClick="clearInterval(myTimer)">Stop counter!</button>

            

<script>

        var c = 0;
            function myCounter() 
                {
                    var d = new Date();
                  document.getElementById("demo").innerHTML = ++c;
                }
            </script> 
           
        </p>
        
       
        
        <div class="container">
            <form id="contactForm">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="company">Company</label>
                        </div>
                        <div class="col-md-6">
                            <select name="company" id="company" class="form-control">
                                <?php
                                $result2 = $db->queryDb("Select * From COMPANY", "COMPANY", "COMPANY");
                              
                                 while($row2 = $result2->fetch())
                                 {
                                     echo("<option value='".$row2['ID']."'>".$row2["CompanyName"]."</option>");
                                 }
                                
                                
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="client">Client</label>
                        </div>
                        <div class="col-md-6">
                            <select name="client" id="client" class="form-control">
                                <?php
                                $result = $db->queryDb("Select * From CONTACT_TYPE", "CONTACT_TYPE", "CONTACT_TYPE");
                              
                                 while($row = $result->fetch())
                                 {
                                     echo("<option value='".$row['ID']."'>".$row["Type"]."</option>");
                                 }
                                
                                
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

<script>
    $("#registerForm").validate();
    
    $("document").ready(function(){
        
   
      
//       $("#company").change(function() {
//           $.ajax({
//                url: 'Contact.php', //This is the current doc
//                type: "POST",
//                data: ({
//                    
//                    id:$("#company option:selected").val()
//                    
//                 
//                
//                }),
//                success: function(data){
//                    
//                   
//                
//    }
//    
//    });
//           
//       });
        
        
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