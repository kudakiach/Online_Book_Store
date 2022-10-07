<?php require_once "./template/head.php"; ?>

<body>
<?php require_once "./template/menu.php"; ?>
<div class="d-flex align-content-center flex-wrap mt-5">
        <div class="container-fluid">
            <div class="login-content">
                
                <div class="login-form">
                	<?php require_once "process_login.php"; ?>

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
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                       
                        <button type="submit" name="login" class="btn btn-success btn-flat">Login</button>
                        <div class="register-link mt-3">
                            <p>Dont have an account ? <a href="register.php"> Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
