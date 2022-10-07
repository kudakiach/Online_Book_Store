<?php require_once "admin_head.php"; ?>

<body>

<div class="d-flex align-content-center flex-wrap mt-5">
        <div class="container-fluid">
            <div class="login-content">
                
                <div class="login-form">
                	<?php require_once "admin_verify.php"; ?>

                    <form method="post" action="">
                        <h3>ADMIN LOGIN</h3>
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
                            <label>UserName</label>
                            <input type="text" name="name" class="form-control" placeholder="UserName">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                        </div>
                       
                        <button type="submit" name="login" class="btn btn-success btn-flat">Login</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
