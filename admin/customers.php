 <?php 
 session_start();
  require_once "../functions/admin.php";
  $title = "List book";
  
  require_once "../functions/database_functions.php";
  $conn = db_connect();
  $result = getCustomers($conn);
?>
 <?php require_once 'admin-menu.php'; ?>
          <!-- end of sidebar navigation -->
        <div class="col-md-8 mt-2">   
              <table class="table" style="margin-top: 20px">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>address</th>
                  <th>City</th>
                  <th>Zip code</th>
                  <th>Country</th>
                  <th>Email</th>
                  <th>&nbsp;</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                  <td><?php echo $row['customerid']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['city']; ?></td>
                  <td><?php echo $row['zip_code']; ?></td>
                  <td><?php echo $row['country']; ?></td>
                  <td><a class="btn btn-danger" href="delete_customer.php?cusId=<?php echo $row['customerid']; ?>">Delete</a></td>
                </tr>
                <?php } ?>
              </table>

  
<?php
  if(isset($conn)) {mysqli_close($conn);}
  
?>
                 
        </div>
        <!-- end of body content -->
         
        
       
    </div>
</body>
</html>