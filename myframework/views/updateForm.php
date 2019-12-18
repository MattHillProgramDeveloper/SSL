<main class="container">
  <div class="row">
    <h1>CRUD Update</h1>    
  </div>

  <div class="row">

    <?php 
    
      echo "<form action='/crud/updateAction/".$data["fruit"][0]["id"]."' method='post'>";
      echo "<input type='text' name='name' id='name' placeholder='Fruit Name' value='".$data["fruit"][0]["name"]."'>";
      
    ?>

      <input type="submit" value="Update">    
    </form>
  </div>
</main>


