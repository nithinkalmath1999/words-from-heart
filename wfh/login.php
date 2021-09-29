<?php
session_start();
?>
<?php require_once "header.php"; ?>

<body>
<div>
  <h2 class="tag">Quotes..!</h2>
  

    <div class="loginbox p-4">
      <img src="av.jpg" class="avathar">
        <h1 class="text-center mt-5">Login </h1><hr >
        <form action="php/login.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
          <div>
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
        <div class="link text-center">Not yet signed up? <a href="index.php">Signup now</a></div>
            
        </form>
    </div>
      
    



      </div>
    
  
</body>



<!-- <div class="d-flex">
  <div class="wrapper" >
        <section class="form login">
        <header>Login</header>
        <form action="php/login.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <i class="fas fa-eye"></i>
            </div>
            <div class="field button">
            <input type="submit" name="submit" value="Submit">
            </div>
        </form>
        <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>
</div> -->
