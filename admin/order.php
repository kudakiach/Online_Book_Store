 <?php 
 session_start();
  require_once "../functions/admin.php";
  $title = "List book";
  
  require_once "../functions/database_functions.php";
  $conn = db_connect();
  $result = getOrders($conn);
?>
 <?php require_once 'admin-menu.php'; ?>
          <!-- end of sidebar navigation -->
        <div class="col-md-8 mt-2">   
              <table class="table" style="margin-top: 20px">
                <tr>
                  <th>Order Id</th>
                  <th>Customer Id</th>
                  <th>Amount</th>
                  <th>Date</th>
                  <th>&nbsp;</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                  <td><?php echo $row['orderid']; ?></td>
                  <td><?php echo $row['customerid']; ?></td>
                  <td><?php echo $row['amount']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                  <td><a class="btn btn-danger" href="delete_order.php?Id=<?php echo $row['orderid']; ?>">Delete</a></td>
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