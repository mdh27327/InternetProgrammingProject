<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <link rel="stylesheet" href="employee.css" type="text/css"/> 
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
        <title>Employee Info</title>
        <script type="text/javascript">
        function updatepicture(pic)
    {
        document.getElementById("image").setAttribute("src",pic);
    }
    
</script>
        
    </head>
    <body>
       <div id="wrapper">   
         
           <div class="headEmployee">
                
            <div class="emblemBox">
            </div>
              
                 <div class="labelName">
                   <p> JG WENTHWORTH </p>
                 </div>
     </div>
           
           
           
        <form id="form" method="post" action="uploadPic.php" enctype="multipart/form-data" target="iframe">
            <input type="file" id="file" name="file"/>
            <input type="submit" name="submit" id="submit" value="Upload File"/>
       
        <p id="message"> Upload your profile image here.</p>
       
        <img style="min-height:120px; min-width:200px;max-height:120px;" id="image"/><br/></br>
        
        <iframe style="display: none;" name="iframe"></iframe>
        </form>
        
        
        
        <?php
        // put your code here
        ?>
        
   
    
    <div id="mainwrapper">
    <p style="color:red; font-size:20px">* required field</p>
      <form method="post" action="SaveEmployee.php" >
	<fieldset style="border:3px solid #255625">
                <legend style="color: #255625; font-size: 15px; font-family: fantasy">Employee Info</legend>
                 <table>
                   <tr>
                     <td>First Name:</td>
                     <td><input type="text" name="firstName"><a style="color:red">&nbsp;*</a></td>
                     
                   </tr>
                   <tr>
                     <td>Last Name:</td>
                     <td><input type="text" name="lastName"><a style="color:red">&nbsp;*</a></td>
                     
                   </tr> 
                   <tr>
                     <td>Phone Number:</td>
                     <td><input type="text" name="number"><a style="color:red">&nbsp;*</a></td>
                 </tr>
                 
                  </tr> 
                   <tr>
                     <td>E-Mail:</td>
                    
                          <td><input type="text" name="email"><a style="color:red">&nbsp;*</a></td>
                         
                 </tr>
                 
                  </tr> 
                   <tr>
                     <td>Address:</td>
                     <td><input type="text" name="address"><a style="color:red">&nbsp;*</a></td>
                 </tr>
                 
                  </tr> 
                   
                 
            <tr>
                     <td>Department:</td>
                     <td><input type="text" name="dept"><a style="color:red">&nbsp;*</a></td>
                     
                   </tr>
                     <tr>
                     <td>Department Number:</td>
                     <td><input type="text" name="phone"><a style="color:red">&nbsp;*</a></td>
                 </tr>
                   <tr>
                     <td>Title:</td>
                     <td><input type="text" name="tite"><a style="color:red">&nbsp;*</a></td>
                     
                   </tr>
                   
               </table>
            </fieldset>
          <br>
            <a href="Congrats.php" style="text-decoration: none">
          <input type="submit" value="Submit Employee Information">
            </a>
      </form>
    <br>
   
    </div>
   </div>
    </body>
</html>


