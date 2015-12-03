

<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Display
 *
 * @author SirJared
 */
include_once 'Database.php';
class Display {
    
    
    
   public function displayNav($navItems)
   {
       $output="<div id='nav'>";
       
       for($i = 0;$i < count($navItems);$i++)
       {
           
           
           if(isset($navItems[$i][2])&&$navItems[$i][2]=1 && isset($navItems[$i][3]))
           {
               $output.="<div class='navButton' onClick='".$navItems[$i][3]."'>".$navItems[$i][0]."</div>";
           }
           else{
               $output.="<a class='navLink' href='".$navItems[$i][1]."'><div class='navDiv'>".$navItems[$i][0]."</div></a>";
           }
       }
       
       $output.="</div>";
       
       return $output;
   }
   
   
   
}