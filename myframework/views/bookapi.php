<main class="container">

    <?
    
        $bookCart = ($data["books"]);

        foreach ($bookCart as $item){

            echo $item["volumeInfo"]["title"]."<br /> \n";


        }
    
    
    
    
    
    ?>

</main>