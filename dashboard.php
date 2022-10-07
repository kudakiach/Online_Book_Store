<?php require_once './template/head.php' ?>
<body>
    <div class="container-fluid p-1">
        
            <div class="top-nav pl-5 p-2">
                <div class="row">
                    <div class="col-m-2">
                        <span class="nav-brand">Onibooks</span>
                    </div> 
                     <div class="col-md-4"></div> 
                      <div class="col-md-3"></div> 
                       <div class="col-md-2">
                        <ul class="nav navbar-nav">
                          <li class="">
                            <a href="#"><b class="caret"></b></a>
                          </li>
                        </ul>
                       </div>  
                        <div class="col-md-1"><a href="logout.html">Logout</div>            
                </div>
            </div>
        
        <div class="row">
            <div class="col-md-3">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="Accounts.html"><i class="menu-icon fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="manage.html">Books</a></li>
                    <li><a href="Transfer.html">Users</a></li>
                    <li><a href="history.html">Customers</a></li>
                    <li><a href="pay.html">Orders</a></li>
                    <li><a href="epayment.html"></a></li>
                   
                </ul>
             </div>
          </div>
          <!-- end of sidebar navigation -->
        <div class="col-md-8 mt-2">
            <div class="content-box p-3">
                <div class="text-center"><h3>summary</h3></div>
                <hr>
                <div class="row mt-2">
               <div class="col-md-4">
                   <div class="box" style="background:#ff8912">
                       <div class="text-center pt-3"><b>total books</b></div>
                       <hr>
                       <div class="text-center"><b>
                            <?php 
                            require_once 'functions/database_functions.php';
                            $conn = db_connect();
                            $query = "SELECT * FROM books";
                            $result = mysqli_query($conn,$query);
                            $num_rows = mysqli_num_rows($result);
                            echo $num_rows;
                       ?>
                       </b></div>
                   </div>
               </div>
               <div class="col-md-4">
                    <div class="box" style="background:#ff8934">
                          <div class="text-center pt-3"><b>total user</b></div>
                           <hr>
                       <div class="text-center"><b>
                            <?php 
                            require_once 'functions/database_functions.php';
                            $conn = db_connect();
                            $query = "SELECT * FROM user";
                            $result = mysqli_query($conn,$query);
                            $num_rows = mysqli_num_rows($result);
                            echo $num_rows;
                       ?>
                       </b></div>
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="box" style="background:#ff8954">
                          <div class="text-center pt-3"><b>total orders</b></div>
                           <hr>
                       <div class="text-center"><b>
                        <?php 
                            require_once 'functions/database_functions.php';
                            $conn = db_connect();
                            $query = "SELECT * FROM orders";
                            $result = mysqli_query($conn,$query);
                            $num_rows = mysqli_num_rows($result);
                            echo $num_rows;
                       ?>
                           
                       </b></div>
                    </div>
               </div>
           </div> 
            </div>
                 
        </div>
        <!-- end of body content -->
         
        
       
    </div>
</body>
</html>