<?php require_once 'admin_head.php' ?>
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
                        <div class="col-md-1"><a href="logout.php">Logout</div>            
                </div>
            </div>
        
        <div class="row">
          <div class="col-md-3">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="menu-icon fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="books.php"><i class="menu-icon fa fa-book"></i> Books</a></li>
                    <li><a href="user.php"><i class="menu-icon fa fa-user"></i> Users</a></li>
                    <li><a href="customers.php"><i class="menu-icon fa fa-user"></i> Customers</a></li>
                    <li><a href="order.php"><i class="menu-icon fa fa-shopping-cart"></i> Orders</a></li>
                </ul>
             </div>
          </div>