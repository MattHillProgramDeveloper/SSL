<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSL</title>
</head>
<body>
    <h1>Header</h1>
<?php

    foreach($data["navigation"]as $key=>$value){
        echo "<a href='".$value."'>".strtoupper($key)."</a> | "; 
    }
?>