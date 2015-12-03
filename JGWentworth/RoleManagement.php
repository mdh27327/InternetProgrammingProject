<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


session_start();


include 'Database.php';

    
        function userIsInRole($role)
        {
            
            $db = new Database();


            $sql ='SELECT * FROM USERS WHERE ID = :id';
            
            $result = $db->queryDb($sql,$_SESSION['sess_user_id'],':id');

            $row = $result->fetch();
            


            $sql2="SELECT * FROM ROLES WHERE ID = :id";
            $result2 = $db->queryDb($sql2,$row['RoleID'],':id');
            

            $row2 = $result2->fetch();

            $userRole = $row2['roleName'];

            if(strtolower($role) == strtolower($userRole))
            {
                return true;
            }
            else
            {
                return false;
            }


        }

?>