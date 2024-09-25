<header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167); top: 0;">
  <div class="container">

    <div class="navbar-header">
      <!-- Logo -->
      <div class="navbar-brand">
        <a class="logo" href="main.php">Career AI</a>
      </div>
      <!-- /Logo -->

      <!-- Mobile toggle -->
      <button class="navbar-toggle">
        <span></span>
      </button>
      <!-- /Mobile toggle -->
    </div>

    <?php
					// Check if the user is logged in, if not then redirect him to login page
					if(!isset($_SESSION["adminloggedin"]) || $_SESSION["adminloggedin"] !== true):
				?>

    <!-- Navigation -->
    <nav id="nav">
      <ul class="main-menu nav navbar-nav navbar-right">
        <li><a href="main.php">Home</a></li>
        <li><a href="main.php#about">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li>
          <a href="login.php">Login</a>
        </li>
        <li>
          <a href="register.php">Register</a>
        </li>


      </ul>
    </nav>
    <!-- /Navigation -->
    <?php else: ?>
    <!-- Navigation -->
    <nav id="nav">
      <ul class="main-menu nav navbar-nav navbar-right">
        <li><a href="main.php">Users</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="logout.php">Log out</a></li>
      </ul>
    </nav>
    <!-- /Navigation -->
    <?php endif ?>

  </div>
</header>