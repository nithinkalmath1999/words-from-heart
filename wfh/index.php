<?php
session_start();
?>

<?php require_once "header.php"; ?>
<body>
<div>
  <h2 class="tag">Quotes..!</h2>
  

    <div class="loginbox p-4">
      <img src="av.jpg" class="avathar">
        <h1 class="text-center mt-5"> Sign Up</h1><hr >
        <form action="php/signup.php" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div  >
              <label>Name</label><br>
              <input type="text" name="name" placeholder="First name" required>
          </div> 
          <div >
              <label>Email Address</label><br>
              <input type="text" name="email" placeholder="Enter your email" required>
           </div>

           <div >
              <label>Password</label><br>
              <input type="password" name="password" placeholder="Enter new password" required>
    
            </div>

            <div  class="text-center">
               <br> <button class="btn btn-primary mb-3" type="submit" name="submit" value="Submit">Submit</button>
            </div>
            <div class="link text-center">Already signed up? <a href="login.php">Login now</a></div>
        </form>
    </div>
      </div>
    
  
</body>

