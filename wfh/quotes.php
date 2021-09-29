<?php
require_once "php/db.php";
session_start();
$sql = mysqli_query($conn, "SELECT * FROM my_quote WHERE unique_id = {$_SESSION['unique_id']}" );
$row=mysqli_fetch_all($sql, MYSQLI_ASSOC);

$sql2 = mysqli_query($conn, "SELECT * FROM visitors WHERE unique_id = {$_SESSION['unique_id']}");
$row1 = mysqli_fetch_assoc($sql2);

?>
<?php require_once "header.php"; ?>

<?php foreach($row as $r):   ?>
<body style="background-color: #b3d4fc;">
    <div class="card">   
    <div  id="logo" class="card-header text-start">
    <i class="bi bi-person-circle"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
    <?php echo $row1['name']; ?>
     </div> 
      <div class="card-body">
         <p class="h3 text-white"><?php echo $r['title']; ?><br><br></p>
        <blockquote  class="blockquote text-dark mt-1">
          <p><?php echo $r['text']; ?></p>
          <!-- <footer id="author" class="blockquote-footer text-white text-end "><cite title="Source Title"><?php echo $row1['name']; ?></cite></footer> -->
        </blockquote>
      </div>
    </div>
<?php endforeach; ?> 
<br><br><br><button class="button"><a href="create.php">add </a></button>
</body>