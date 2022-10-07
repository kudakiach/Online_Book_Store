<?php require_once "./template/head.php"; ?>

<body>
<?php require_once "./template/menu.php"; ?>
<div class="d-flex align-content-center flex-wrap mt-5">
        <div class="container-fluid">
            <div class="login-content">
                
                <div class="login-form">
                	<?php require_once "verify_user.php"; ?>

                    <form method="post" action="">
                    	<?php 
							foreach($error as $errors){
								?>
								<div class="alert-danger p-3 mb-2">
								<?php
									echo $errors ."<br>";
									?>
								</div>
								<?php
								}
							 ?>
                    	<div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastname" class="form-control" placeholder="last Name">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                   				 <input type="checkbox" name="agree"> Agree the terms and policy
                			</label>
                        </div>
                        <button type="submit" name="register" class="btn btn-success btn-flat">Register</button>
                        <div class="register-link mt-3">
                            <p>Already have account ? <a href="user_login.php"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
