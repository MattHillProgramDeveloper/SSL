<html>
    <h1>Matt Hill Activity1-1.php</h1>
<?php



//1)
echo "<h2>1)</h2>";
class Person{

    public $personName;
    public $personAge;

    function __construct($personName,$personAge){
        $this->personName = $personName;
        $this->personAge = $personAge;
    }

    function whoAmI(){
        echo "My name is $this->personName and my age is $this->personAge.<br>";
    }

}

$me = new Person("Matt Hill",37);
$me->whoAmI();


//2)
echo "<h2>2)</h2>";

$name = "Matt Hill";
$age = 37;

$person = array($name,$age,"name"=>$name,"age"=>$age);

//Double Quotes
echo "My name is $name and my age is $age.<br>";
//Single Quotes
echo 'My name is ',$name,' and my age is ',$age,'.<br>';
//Indexing
echo "My name is $person[0] and my age is $person[1].<br>";
//Key Values
echo 'My name is ',$person['name'],' and my age is ',$person['age'],'.<br>';
//Null
$age = null;
echo $age,"<br>";
echo "Using null seems to keep the variable but it is empty.<br>";
//unset()
unset($name);
echo $name,"<br>";
echo "unset() seems to uninstantiate the variable making it no longer exist.<br><br>";

// 3) 
echo "<h2>3)</h2>";
function whatsMyGrade($grade){
    if($grade < 59.5){
        echo "A grade of $grade is an F.<br>";
    }
    elseif($grade < 69.5){
        echo "A grade of $grade is a D.<br>";
    }
    elseif($grade < 79.5){
        echo "A grade of $grade is a C.<br>";
    }
    elseif($grade < 89.5){
        echo "A grade of $grade is a B.<br>";
    }
    else{
        echo "A grade of $grade is an A!<br>";
    }


}

$grades = array(94,54,89.9,60.01,102.1);

whatsMyGrade($grades[0]);
whatsMyGrade($grades[1]);
whatsMyGrade($grades[2]);
whatsMyGrade($grades[3]);
whatsMyGrade($grades[4]);

// 4)
echo "<h2>4)</h2>";

$colors = array(0=>"Red",1=>"Crimson",2=>"Orange",3=>"Coral",4=>"Yellow",5=>"LemonChiffon",6=>"Green",7=>"Chartreuse",8=>"Blue",9=>"DeepSkyBlue");
?>

<?

foreach($colors as $key=>$value){

    echo '<h3 style="background-color:lightgrey"><span style="color:',$value,'">Color index number ',$key,' is ',$value,'</span></h3>';

}




?>


</html>