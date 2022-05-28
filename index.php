<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">      
      <header>
      <center>
        School Chat App
      </center>
        <img src="php/images/school_icon.png" style="height: 300px;border-radius: inherit;margin-left: 120px;">
      </header>    
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field select">
          <label>Course</label>
          <select class=""  name="course">
          <option value="">--</option>
          <option value="BA(Hons) Business & Management">BA(Hons) Business & Management</option>
          <option value="BA(Hons) Creative Computing">BA(Hons) Creative Computing</option>
          </select> 
        </div>
        <div class="field select">
          <label>Year Level</label>
          <select class="" name="yearlevel">
          <option value="">--</option>
          <option value="Year 1">Year 1</option>
          <option value="Year 2">Year 2</option>
          <option value="Year 3">Year 3</option>
          </select> 
        </div>
        <div class="field select">
          <label>Nationality</label>
          <select class="" id="nationality" name="nationality">
          <option value="">--</option>
          </select> 
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>
</body>
</html>

<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="nationality.js"></script>