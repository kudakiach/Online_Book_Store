<div class="container-fluid">
	<div class="row p-0">
		<div class="col-md-6 p-2">
			<div class="info">
		      <a href="#">ENG</a>
			  <a href="#"> FRA</a>
			  <a href="#">SPA</a>
				
			</div>
		</div>
		<div class="col-md-6 text-right pr-7">
			<?php 
					if(isset($_SESSION['login_user']))
					{
						
						echo "Hi," . $_SESSION['login_user'];
					}
					else
					{
						Echo "Welcome to, Onibooks";
					}
			?>
		</div>
	</div>

</div>
<div class="container-fluid menu-bar pl-4">
 	
		<div class="row">
			<div class="col-md-2 col-sm-4">
			 <a class="navbar-brand" href="./index.php">online books</a>
			</div>
			
			<div class="col-md-6 col-sm-4 text-right" >
				<nav class="navbar navbar-expand-lg navbar-light p-0">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="./books.php">Books</a>
				      </li>
				       <li class="nav-item">
				        <a class="nav-link" href="#">All categories</a>
				      </li>
				       <li class="nav-item">
				        <a class="nav-link" href="#">About us</a>
				      </li>
				       <li class="nav-item">
				        <a class="nav-link" href="contact.php">Contact</a>
				      </li>
				      
				    </ul>
				  </div>
				</nav>
			</div>
			<div class="col-md-4 col-sm-4 text-right pr-7">
				<ul class="user-menu">
				
				<?php 
					if(isset($_SESSION['login_user']))
					{
						
						echo "<li class='nav-item'>
						        <a href='logout.php' class='nav-link'>Logout</a>
						      </li>";
					}
					else
					{
						echo "<li class = 'nav-item'><a href='./user_login.php' class= 'nav-link'>Login</a></li>";
						echo "<li class = 'nav-item'><a href='./register.php' class= 'nav-link'>Register</a></li>";
					}
			?>
		</ul>
			</div>
		</div>
		
	</div>
  


