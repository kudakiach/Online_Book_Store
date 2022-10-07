
            <?php require_once 'admin-menu.php'; ?>
          <!-- end of sidebar navigation -->
        <div class="col-md-8 mt-2">
            <div class="p-3">
                <div class="text-center"><h3>summary</h3></div>
                <hr>
                <div class="row mt-2">
               <div class="col-md-4">
                   <div class="box text-center" style="background:#ccb">
                    <i class="menu-icon fa fa-book fa-2x"></i>
                       <div class="text-center pt-1"><b>total books</b></div>
                       
                       <div class="text-center"><b>
                            <?php 
                            require_once '../functions/database_functions.php';
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
                    <div class="box text-center" style="background:#ccc">
                      <i class="menu-icon text-center fa fa-user fa-2x"></i>
                          <div class="text-center pt-1"><b>total user</b></div>
                           
                       <div class="text-center"><b>
                            <?php 
                            require_once '../functions/database_functions.php';
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
                    <div class="box text-center" style="background:#cce">
                      <i class="menu-icon fa fa-shopping-cart fa-2x"></i>
                          <div class="text-center pt-1"><b>total orders</b></div>
                           
                       <div class="text-center"><b>
                        <?php 
                            require_once '../functions/database_functions.php';
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