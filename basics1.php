<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box ;
    }
    .container{
        max-width: 80% ;
        background-color: pink;
        margin: auto;
        padding: 32px;
    }
</style>
<body>
    
    <div class="container">
        <h1> This is muskan gupta </h1>
        <p>hey how are you all , ur status is here : </p>

          <?php

              // method to make loops
              $age = 34;
                 if($age>18)  {
                    echo " can go to party" ;
                 }
                 else if($age==10)  {
                    echo " are eligible for party" ;
                 }
                 else{
                     echo "cannot go to the party" ;
                 }
                    

                //  method to make array in php
                
            $lang = array("python" , "c++" , "c" , "java" , "php" , "html" , "css" , "js") ;
                echo "<br>" ;
                echo $lang[1] ;
                echo count($lang) ;

                //method to make loops
                $i = 0 ;
                while($i <= 5){
                    echo "<br>" ;
                    echo "the value of i is : " ;
                    echo $i ;
                    $i++ ;
                }

                $i = 0 ;
                while($i < count($lang)){
                    echo "<br>" ;
                    echo "the value of i is : " ;
                    echo $lang[$i] ;
                    $i++ ;
                }
          ?>


    </div>
</body>
</html>