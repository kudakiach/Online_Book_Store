 <?php 
 session_start();
  require_once "../functions/admin.php";
  $title = "List book";
  
  require_once "../functions/database_functions.php";
  $conn = db_connect();
  $result = getAllUsers($conn);
?>
 <?php require_once 'admin-menu.php'; ?>
          <!-- end of sidebar navigation -->
        <div class="col-md-8 mt-2">   
              <table class="table" style="margin-top: 20px">
                <tr>
                  <th>ID</th>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Email</th>
                  
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['lname']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><a class="btn btn-danger" href="delete_user.php?userId=<?php echo $row['id']; ?>">Delete</a></td>
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