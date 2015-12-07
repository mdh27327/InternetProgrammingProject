<?php


include 'Database.php';
$db = new Database();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $sql= "INSERT INTO 'sql595597'.INDIVIDUAL (FirstName,LastName,Phone, Email, Title, Department,Date,Address,City,State,Zip,Country)
        VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[phone]',' $_POST[email]','
            $_POST[title]','$_POST[department]','$_POST[date]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[zip]','$_POST[country]')";
    if ($db->query($sql)=== TRUE)
    {
    echo " New recorded added";
 
    }
    else
    {
        echo "Error:" . $sql . "<br>" . $db->error;
     
    }
    
    
              
           echo "<form   action='post'>";
        $result = mysqli_query($db, "SELECT * FROM INDIVIDUAL");
        echo"<table border='1'>
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>E-Mail</th>
            <th>Title</th>
            <th>Department</th>
            <th>Date of First Contact</th>
            <th>Address</th>
             <th>City</th>
             <th>State</th>
              <th>Zip</th>
               <th>County</th>
             </tr>";
        
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>" .$row['firstName'] ."</td>";
            echo "<td>" .$row['lastNime'] ."</td>";
            echo "<td>" .$row['phone'] ."</td>";
            echo "<td>" .$row['email'] ."</td>";
            echo "<td>" .$row['title'] ."</td>";
            echo "<td>" .$row['department'] ."</td>";
            echo"<td>"  .$row['date']."</td>";
            echo"<td>"  .$row['address']."</td>";
            echo"<td>"  .$row['city']."</td>";
            echo"<td>"  .$row['state']."</td>";
            echo"<td>"  .$row['zip']."</td>";
            echo"<td>"  .$row['country']."</td>";
         echo ("<td><a href=\"deleteCourse.php?idcourse=".$row['id']."\">Delete</a></td></tr>");
         
        }
        echo "</form>";
        
         
        
    
    
    
  $db->close();
?>


