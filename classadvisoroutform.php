<?php
include 'connect.php';
session_start();

// Check if the user is a class advisor
if(!isset($_SESSION['classadvisor'])){
  header('location:logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <!-- Add your meta tags, stylesheets, and scripts here -->
  <title>Out Form</title>
  <!--===============================================================================================-->
  <meta charset="UTF-8">
  <!--===============================================================================================-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo.jpg"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--===============================================================================================-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!--===============================================================================================-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!--===============================================================================================-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--===============================================================================================-->
</head>
<style>
  /* Add your styles here */
  html {
      position: relative;
      min-height: 100%;
  }
  
  body {
      padding-top: 4.5rem;
      margin-bottom: 4.5rem;
      background: linear-gradient(to left, #55A8FB  0%, white 100%);
  }
  body a {
    text-decoration: none;
  }
  #navbarCollapse a{
    color: #fff;
   
    
  }

  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 3.5rem;
    line-height: 3.5rem;
    background-color:#2196f3;
  }
  
  .nav-link:hover {
    transition: all 0.4s;
  }
  
  .nav-link-collapse:after {
    float: right;
    content: '\f067';
    font-family: 'FontAwesome';
  }
  
  .nav-link-show:after {
    float: right;
    content: '\f068';
    font-family: 'FontAwesome';
  }
  
  .nav-item ul.nav-second-level {
    padding-left: 0;
  }
  
  .nav-item ul.nav-second-level > .nav-item {
    padding-left: 20px;
  }
  
  @media (min-width: 992px) {
    .sidenav {
      position: absolute;
      top: 0;
      left: 0;
      width: 230px;
      height: calc(100vh - 3.5rem);
      margin-top: 3.5rem;
      background:#2196f3;
      box-sizing: border-box;
      border-top: 1px solid rgba(0, 0, 0, 0.3);
    }
  
    .navbar-expand-lg .sidenav {
      flex-direction: column;
    }
  
    .content-wrapper {
      margin-left: 230px;
    }
  
    .footer {
      width: calc(100% - 230px);
      margin-left: 230px;
    }
	.active{
		background-color:#1565c0 ;
	}
  }
</style>
<body>
<section>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background:#2196f3;">
    <!-- Add your navigation content here -->
    <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
      <!-- Add class advisor's information -->
      <li>
        <a href="" style="text-decoration: none;">&nbsp &nbsp &#127891; &nbsp <?php echo $_SESSION['classadvisor'];?></a>
      </li>
      <!-- Add navigation links for class advisors -->
      <li class="nav-item active">
        <a class="nav-link" href="classadvisor.php">  &#128221;   Enter Student Details<span class="sr-only">(current)</span></a>
      </li>
      <!-- Add other navigation links if needed -->
    </ul>
    <form class="form-inline ml-auto mt-2 mt-md-0">
    </form>
    <a href="logout.php" style="text-decoration: none;"> Logout &#128473;</a>
  </nav>

  <main class="content-wrapper">
    <div class="container-fluid">
      <!-- Modify your content as needed -->
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-heading">
          </div>

          <div class="modal-body">
            <h2 class="text-center">Enter Student Details</h2>
            <!-- Modify your form action to submit to the admin page -->
            <form action="adminpage.php" role="form" method="POST">
              <!-- Add your form fields for class advisors to enter student details -->
              <div class="form-group">
                <!-- Modify your form fields as needed -->
                <!-- For example, you may add a dropdown to select student or enter student information manually -->
                <!-- Adjust the input fields based on the required information -->
                <label>Student Name</label>
                <input type="text" name="studentName" class="form-control rounded-pill" placeholder="Student Name" required />
              </div>
              <!-- Add other form fields as needed -->

              <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</section>
</body>
<script>
  // Add your scripts here
  $(document).ready(function() {
  $('.nav-link-collapse').on('click', function() {
    $('.nav-link-collapse').not(this).removeClass('nav-link-show');
    $(this).toggleClass('nav-link-show');
  });
});
</script>
</html>