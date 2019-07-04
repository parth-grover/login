<html>
	<head>
		 <title>login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			  <a class="navbar-brand" href="#">Navbar</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						  <li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						  </li>
						  <li class="nav-item">
								<?php
									if(isset($_SESSION['id'])):
										echo '<a class="nav-link" href="https://localhost/imt/logout">Logout</a>';
									else:
										echo '<a class="nav-link" href="https://localhost/imt/login">Login</a>';
									endif;
								?>
								
						  </li>
						  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  Dropdown
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									  <a class="dropdown-item" href="#">Action</a>
									  <a class="dropdown-item" href="#">Another action</a>
									  <div class="dropdown-divider"></div>
									  <a class="dropdown-item" href="#">Something else here</a>
								</div>
						  </li>
						  <li class="nav-item">
								<a class="nav-link disabled" href="#">Disabled</a>
						  </li>
					</ul>
			  </div>
		</div>
	</nav>
	<body>