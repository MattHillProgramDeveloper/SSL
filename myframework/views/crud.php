<main class="container">
  <div class="row">
    <h1>CRUD</h1>
  </div> 
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href='/crud/addForm'>Add New Fruit</a>
      </li>
    </ol>
    
  <div class="row">
    
  </div>

  <div class="row">
    <ul>

      <?
        foreach($data["fruit"] as $fruit){

          echo "<li>";
          echo strtoupper($fruit["name"]);
          echo " | <a href='/crud/deleteAction/".$fruit['id']."'>Delete </a>";
          echo " | <a href='/crud/updateForm/".$fruit['id']."'>Update </a>";
          echo "</li>";

        }
      ?>
    </ul>
  </div>
</main>


