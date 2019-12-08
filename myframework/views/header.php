<html>
<head>
  <title>SSL</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
  main{
      height: 90%;
  }
  
  </style>


</head>
<body >
<nav class="navbar bg-dark navbar-dark navbar-expand-sm">
  <div class="container">

  <a class="navbar-brand" href="\welcome">SSL Photography</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggledNavItems" 
    aria-controls="toggledNavItems"
    aria-expanded="false"
    aria-label="Toggled Navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="toggledNavItems">
      <div class="navbar-nav ml-auto">
      <?php
     foreach($data["navigation"]as $key=>$value){
        //This navigation loop tests if the current $pagename sent in the $data variable matches the $navigation=>$value.
        //If it does it changes the element class to active. 
        if ($key == $data["pagename"]){
            echo "<a class=\"nav-item nav-link active\" href=\"".$value."\">".strtoupper($key)."</a>";
        }else{
        //Otherwise, the element is left to be a normal button.
            echo "<a class=\"nav-item nav-link \" href=\"".$value."\">".strtoupper($key)."</a>";
     
        }
    }
?>

      </div><!-- .navbar -->
    </div><!-- .collapse -->
  </div><!-- .container -->
</nav><!-- .nav -->
