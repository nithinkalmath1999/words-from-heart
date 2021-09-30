
<?php require_once "header.php"; ?>
<div class="add">
<h1 class="text-center">Write Here </h1>

<form class="title" method="POST" action="php/create.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Give a Title</label>
    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Words from heart" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  <div class="text-center">
  <button class="btn btn-primary mt-3 " type="submit" name="submit" value="Submit">Submit</button>
  </div>
</form>
</div>