<?php
session_start();
?>

<?php require_once "header.php"; ?>
<body>
<div class="d-lg-flex d-sm-block">

<div>
  <h1 class="tag">Share your <br><strong>WORDS FROM HEART</strong> <br> to the World &#10084;</h1>
  <!-- <p class="tag1">Start sharing your WORDS FROM HEART to the world ! </p> -->
</div>

    <div class="loginbox w-25 ">
      <!-- <img src="wfh.png" class="avathar"> -->
        <h1 class="text-center mt-5"> Sign Up</h1><hr/>
        <form action="php/signup.php" class="w-100 mx-5" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="mb-2">
              <label class="text-right">Name</label><br>
              <input class="w-75 p-2" type="text" name="name" placeholder="First name" required>
          </div> 
          <div class="mb-2">
              <label>Email Address</label><br>
              <input class="w-75 p-2" type="text" name="email" placeholder="Enter your email" required>
           </div>

           <div class="mb-2">
              <label>Password</label><br>
              <input class="w-75 p-2" type="password" name="password" placeholder="Enter new password" required>
    
            </div>

            <div>
               <br> <button class="btn btn-dark mb-3" type="submit" name="submit" value="Submit">Submit</button>
            </div>
            <div class="link mx-4">Already signed up? <a class="text-white text-decoration-none" href="login.php">Login now</a></div>
        </form>

      </div>
</div>


</body>

