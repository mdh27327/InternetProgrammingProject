<?php

include 'Database.php';
include 'PasswordHash.php';

//create password has
$hash = create_hash($_POST['password']);


//insert into employee table
$sql = 'INSERT INTO `sql595597`.`Employee`(`DepartmentID`,`FirstName`,`LastName`,`Title`,`Phone`,`PhotoUrl`)'
.' VALUES('.$_POST['department'].',"'.$_POST["firstname"].'","'.$_POST["lastname"].'","'.$_POST["title"].'","'.$_POST["phone"].'","dud");';

$db = new Database();

$result = $db->execDb($sql);




//get employee ID from DB
$sql2='SELECT * From Employee where FirstName= "'.$_POST["firstname"].'" AND LastName = "'.$_POST["lastname"].'" AND Title = "'.$_POST["title"].'"';


$result2=$db->queryDb($sql2,"SELECT","SELECT");
$row = $result2->fetch();

$EmployeeID = $row['ID'];




//insert into user table
$sql3='INSERT INTO `sql595597`.`USERS`(`USERNAME`,`RoleID`,`CreationDate`,`Locked`,`PasswordHash`,`employeeID`)'.
'VALUES("'.$_POST['username'].'",'.$_POST['role'].',"'.date("mm/dd/yyyy").'",0,"'.$hash.'",'.$EmployeeID.');';

$result3 = $db->execDb($sql3,'INSERT','INSERT');



//respond with result
if($result == 1 && $result3 == 1)
{
    $final = "success";
}
else
{
    $final = $result." ".$result3;
}

$json=array(
    
    "result" => $final
);
$jsonstring = json_encode($json);

echo($jsonstring);

die();