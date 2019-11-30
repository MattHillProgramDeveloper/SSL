<html>
<h1>TEST</h1>



<?php

echo "<h2>Hello Day 1!</h2>";



?>

<p>more</p>

<?php

echo "<h3>Stuff</h3>";
//variables
$name = "Matt";

$arr = array("name"=>"Hill","age"=>37);

foreach ($arr as $key => $value){
    echo var_dump($value),"<br>";
    echo $value,"<br>";
}

class Name{

    
    public function methodName(){
        echo "<br>I'm the methodName inside of class Name<br>";
    }
}

$nameClass = new Name();

$nameClass->methodName();


?>


</html>