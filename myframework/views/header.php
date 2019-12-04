<!DOCTYPE html>
<!-- 2. Create a view under views called header.php
     Here is that.
 -->
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSL</title>
    <!-- 7 Apply style to your final work, and make sure you have a header, body, and a footer. -->
    <style>
        .active{
            color: white;
            background-color: black;
        }
        button{
            padding: 10px;
        }
        html,body{
            height: 100%;
            margin: 0;
        }
        .wrapper{
            min-height: 100%;
            background-color: #f9f9f9;
        }
        .footer,
        .push{
            height: 50px;
        }
    </style>
</head>
<body>
    <h1>Header</h1>
    
<?php
    //6 Open up the view file and loop through the data in html concatenated form and display your navigation menu items
    foreach($data["navigation"]as $key=>$value){
        //8 Your application must show which page the current user is visiting.
        //This navigation loop tests if the current $pagename sent in the $data variable matches the $navigation=>$value.
        //If it does it changes the element class to active. 
        if ($key == $data["pagename"]){
            echo "<button class='active' onclick=\"window.location.href = '".$value."';\">".strtoupper($key)."</button>";
              
        }else{
        //Otherwise, the element is left to be a normal button.
            echo "<button onclick=\"window.location.href = '".$value."';\">".strtoupper($key)."</button>";
              
        }

    }

?>

<div class="wrapper">

 