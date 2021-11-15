<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php file</title>
</head>
<body>
    
<div class="container">
    this is my first php  file

    <!-- syntax of php  -->
   <?php
         echo "hello world & this is my first php statement" ; 
         
   ?>
  
  
   <?php

         // make constants in  in php 
        define('pi' , 3.14) ;     
   
   
         echo "hello world " ; 


         // variables in php 
         $variable1 = 60 ; 
         $variable2 = 80 ;
         echo $variable1 ;
         echo $variable2 ;
      
         echo $variable1 + $variable2 ;

         // operators in php 
        //  Arithmetic Operators
        echo "<br>" ;
        echo "the value of variable1 + variable2 is" ;
        echo $variable1 + $variable2 ;

        echo "<br>" ;
        echo "the value of variable1 - variable2 is" ;
        echo $variable1 - $variable2 ;

        echo "<br>" ;
        echo "the value of variable1 / variable2 is" ;
        echo $variable1 / $variable2 ;
        
        echo "<br>" ;
        echo "the value of variable1 * variable2 is" ;
        echo $variable1 * $variable2 ;
        
        
          //  Assignment Operators
          $newvar = $variable1 ;
          $newvar += 30 ;
          echo "<br>" ;
          echo "the newvar value is " ;
          echo $newvar ;
          echo "<br>" ;

        //  Comparison 
        echo "the value of 1==4 is " ;
        echo var_dump(1==4) ;
        echo "<br>" ;

        echo "the value of 1!!=4 is " ;
        echo var_dump(1!=4) ;
        echo "<br>" ;

        echo "the value of 1<=4 is " ;
        echo var_dump(1<=4) ;
        echo "<br>" ;
 
        echo "the value of 1>=4 is " ;
        echo var_dump(1>=4) ;
        echo "<br>" ;


        //  Increament/Decreament Operators
        echo $variable1++;
        echo "<br>" ;

        echo $variable1--;
        echo "<br>" ;

        echo ++$variable1;
        echo "<br>" ;

        echo --$variable1;
        echo "<br>" ;


        //  Logiacal Operators 

        // and(&&) 
        // or(||) 
        // xor 
        //  !

        // $myv = (true and true) ;
        // $myv = (true and false) ;
        // $myv = (false and true) ;
        $myv = (false) and (false) ;
         echo "<br>" ;
        echo var_dump($myv);

         // $myv = (true or true) ;
        // $myv = (false or false) ;
        // $myv = (false or true) ;
        $myv = (true or false) ;
        echo "<br>" ;
        echo var_dump($myv);

        // $myv = (true xor true) ;
        // $myv = (false xor false) ;
        // $myv = (false xor true) ;
        $myv = (true or false) ;
        echo "<br>" ;
        echo var_dump($myv);
        
//  data types in php 
//  string 
//  integer 
//  boolean 
//  array 
//  object 
//  float 

         echo "<br>  data types <br> " ;
         $var = "this is muskan gupta " ;
         echo var_dump($var) ;

         $var = 64 ;
         echo "<br>" ;
         echo var_dump($var) ;

         $var = 60.8 ;
         echo "<br>" ;
         echo var_dump($var) ;

         $var = true ;
         echo "<br>" ;
         echo var_dump($var) ;

         echo pi ;


         
   ?>

  
</div>

</body>
</html>