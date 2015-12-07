<?php
if($_FILES['file']['size']>0){

    
    if ($_FILES['file']['size']<= 6366000){
    
     if (move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']["name"])){ 
     
         ?>
         <script type = "text/javascript">
         parent.document.getElementById("message").innerHTML="";
         parent.document.getElementById("file").value="";
         window.parent.updatepicture("<?php echo 'images/'.$_FILES['file']["name"];?>");
         </script>
      <?php
        //file uploade
       
     } else{//failedto upload
    
     ?>
         <script type="text/javascript">
         parent.document.getElementById("message").innerHTML ="<font color ='red'>There was an error uploading your image. Please try again later.</font>"
     </script>
     <?php
    
     } 
    } else{
    
    
  
      ?>
     <script type="text/javascript">
         parent.document.getElementById("message").innerHTML ="<font color ='red'>Your image is to large.</font>"
     </script>
     <?php
    }
}


?>

