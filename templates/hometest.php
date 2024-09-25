<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>AI Based Career Couseling System</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">


	<link href="{{ url_for('static', filename='chart.css') }}" rel="stylesheet" media="all">

	<link href="{{ url_for('static', filename='css1/bootstrap.min.css') }}" rel="stylesheet" media="all">

	<link href="{{ url_for('static', filename='css1/font-awesome.min.css') }}" rel="stylesheet" media="all">

	<link href="{{ url_for('static', filename='css1/s.css') }}" rel="stylesheet" media="all">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
</head>

<body>
	<!--Header-->
	<header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167); top: 0;">
		<div class="container">

			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="http://localhost/main.php">Career AI</a>
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
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):
				?>

			<!-- Navigation -->

			<?php else: ?>
			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-menu nav navbar-nav navbar-right">
					<li><a href="http://localhost/main.php">Home</a></li>
					<li class="dropdown">
						<a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></i></a>
						<div class="dropdown-content">
							<a href="http://localhost/main.php">Career Prediction</a>
							<a href="http://localhost/courses.php">Courses</a>
							<!--<a href="blog.php">Blogs</a>
                                <a href="daily_bytes.php">Daily bytes</a>
                                <a href="community.php">Community</a>-->
							<a href="http://localhost/blog.php">Knowledge Network</a>

						</div>
					</li>
					<li><a href="http://localhost/main.php#about">About Us</a></li>
					<li><a href="http://localhost/contact.php">Contact Us</a></li>
					<li><a href="http://localhost/logout.php">Log out</a></li>


				</ul>
			</nav>
			<!-- /Navigation -->
			<?php endif ?>

		</div>
	</header>
	<div class="hero-area section">

		<!-- Backgound Image -->
		<div class="bg-image bg-parallax overlay" style="background-image:url(static/img/bgc2.jpg); "></div>
		<!-- /Backgound Image -->

		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<ul class="hero-area-tree">
						<li><a href="http://localhost/main.php">Services</a></li>
						<li><a href="http://localhost:5000/?name={{ name }}">Career Prediction</a></li>
					</ul>
					<h1 class="white-text">Get Started to Discover Yourself!</h1>

				</div>
			</div>
		</div>

	</div>

	<!-- Icons font CSS-->

	<link href=" {{ url_for('static', filename='vendor/mdi-font/css/material-design-iconic-font.min.css') }}"
		rel="stylesheet" media="all">

	<link href="{{ url_for('static', filename='vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet"
		media="all">
	<link href="{{ url_for('static', filename='css/range.scss') }}" rel="stylesheet" media="all">
	<!-- Font special for pages-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
		rel="stylesheet">

	<!-- Vendor CSS-->

	<link href="{{ url_for('static', filename='vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">

	<link href="{{ url_for('static', filename='vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">
	<!-- Main CSS-->

	<link href="{{ url_for('static', filename='css/main.css') }}" rel="stylesheet" media="all">
	</head>

	<body>
		<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
			<div class="wrapper wrapper--w790">
				<div class="card card-5">
					<div class="card-heading">
						<h2 class="title">Rate Yourself {{ name }}.....!!</h2>

					</div>


					<div class="card-body">

						<form method="POST" action="{{url_for('result', name=name)}}">

							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Database Fundamentals</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example"
										name="rate_Database Fundamentals">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>

								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Computer Architecture</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example"
										name="rate_Computer Architecture">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Distributed Computing Systems</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example"
										name="rate_Distributed Computing Systems">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Cyber Security</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example"
										name="rate_Cyber Security">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Computer Networking</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example" name="rate_Networking">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Software Development</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example" name="rate_Development">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Programming Skills</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example"
										name="rate_Programming Skills">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Project Management</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example"
										name="rate_Project Management">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Computer Forensics Fundamentals</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example"
										name="rate_Computer Forensics Fundamentals">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Technical Communication skills</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example"
										name="rate_Technical Communication">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">AI ML</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example" name="rate_AI ML">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Software Engineering</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example" name="rate_se">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Business Analysis</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example"
										name="rate_Business Analysis">
										<option disabled="disabled" selected="selected">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Communication skills</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example"
										name="rate_Communication skills">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Data Science</label>
								<div class="col-sm-9">
									<select class="form-select form-control" required aria-label="select example"
										name="rate_Data Science">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Troubleshooting skills</label>
								<div class="col-sm-9">
									<select class="form-control" name="rate_Troubleshooting skills">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>

							</div>
							<div class="form-group row">
								<label class="col-sm-3  col-form-label">Graphics Designing</label>
								<div class="col-sm-9">
									<select class="form-control" name="rate">
										<option value="">Choose option</option>
										<option value="1">Not Interested</option>
										<option value="2">Poor</option>
										<option value="3">Beginner</option>
										<option value="5">Average</option>
										<option value="6">Intermediate</option>
										<option value="7">Excellent</option>
										<option value="9">Professional</option>
									</select>
								</div>

							</div>
							<center><button class="btn btn--radius-2 btn--red" type="submit">Discover Yourself!</button></center>
					</div>
				</div>
			</div>

			</form>

			<!-- Footer -->
			<footer id="footer" class="section">

				<!-- container -->
				<div class="container">

					<!-- row -->
					<div class="row">

						<!-- footer logo -->
						<div class="col-md-6">
							<div class="footer-logo">
								<a class="logo" style="font-size: 30px;" href="http://localhost/main.php">Career AI</a>
							</div>
						</div>
						<!-- footer logo -->


					</div>
					<!-- /row -->

					<!-- row -->
					<div id="bottom-footer" class="row">

						<!-- social -->
						<div class="col-md-4 col-md-push-8">

						</div>
						<!-- /social -->

						<!-- copyright -->
						<div class="col-md-8 col-md-pull-4">
							<div class="footer-copyright">
								<span>&copy; 2022 - AI Based Career Counseing System Team </span>
							</div>
						</div>
						<!-- /copyright -->
					</div>
					<!-- row -->

				</div>
				<!-- /container -->

			</footer>
			<!-- /Footer -->


	</body>

</html>