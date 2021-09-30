<?php
session_start();
?>
<?php require_once "header.php"; ?>

<body>
<div>
<div class="d-flex">
<div>
<h1 class="tag">Share your <br><strong>WORDS FROM HEART</strong> <br> to the World &#10084;</h1>
</div>
  

    <div class="loginbox w-25">
      <!-- <img src="av.jpg" class="avathar"> -->
        <h1 class="text-center mt-5">Login </h1><hr >
        <form action="php/login.php" class="w-100 mx-5" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
          <div>
              <label>Email Address</label><br>
              <input class="w-75 p-2 mb-2 " type="text" name="email" placeholder="Enter your email" required>
           </div>

           <div >
              <label>Password</label><br>
              <input class="w-75 p-2 mb-2" type="password" name="password" placeholder="Enter new password" required>
    
            </div>

            <div>
               <br> <button class="btn btn-dark mb-3" type="submit" name="submit" value="Submit">Submit</button>
            </div>
        <div class="link mx-4">Not yet signed up? <a class="text-white text-decoration-none" href="index.php">Signup now</a></div>
            
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
