<?php
 
 $insert = false ;
if(isset($_POST['name'])){


//set connection variables
     $server = "localhost" ;
     $username = "root" ;
     $password = "" ;

     // create a database connection
     $con = mysqli_connect($server, $username , $password) ;


     //check for connection success
     if(!$con){
         die("connection to this database failed due to"   .    mysqli_connect_error()) ;
     }

    // echo "success connecting to db" ;

    //collect post variables
    $name  = $_POST['name'] ;
    $gender  = $_POST['gender'] ;
    $age = $_POST['age'] ;
    $email = $_POST['email'] ;
    $phone = $_POST['phone'] ;
    $desc = $_POST['desc'] ;
    $sql = "INSERT INTO `rachna` . `rachna` ( `name`, `age`, `gender`, `email`, `phone`, `dt`, `desc`) 
            VALUES ('$name', '$age', '$gender', '$email', '$phone', current_timestamp(), '$desc'); " ;

    // echo $sql;

    //execute the query
   if($con->query($sql) == true){
    //    echo "succesfuly inserted" ;

    // flag for succesful insertion
    $insert = true ;


   }

   else{
       echo "ERROR: $sql <br> $con->error" ;
    //    $not_insert = true ;
   }


   //close the databse connection
   $con->close() ;

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php form</title> 
   
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>
<link rel="stylesheet" href="rachna.css">

<body>
     <img class="ig"  src="college.jpg" alt="KKCEM DHANBAD">
    <div  class="container"    >
        <h1>Welcome to KKCEM Dhanbad Rachna Fest 2K21</h1>
        <P>Enter your details and submit this form to confirm your participation in the fest </P>
        <?php
        if($insert == true){
        echo   "<p  class='msg' >Thanks for submitting this form we are honoured to Welcome you all</p>" ;
        }
        ?>
         <form action="index.php"  method="post">
             <input type="text" name="name" id="name"  placeholder="enter your name">
             <input type="text" name="age" id="age"  placeholder="enter your age">
             <input type="text" name="gender" id="gender"  placeholder="enter your gender">
             <input type="email" name="email" id="email"  placeholder="enter your email">
             <input type="phone" name="phone" id="phone"  placeholder="enter your phone no">

             <textarea name="desc" id="desc" cols="30" rows="5"  placeholder="enter other description"></textarea>
             
             <button class="btn" >Button</button>
             <!-- <button class="btn" >Reset</button> -->


              
 </form>

    </div>


<script src="rachna.js"></script>



</body>
</html>