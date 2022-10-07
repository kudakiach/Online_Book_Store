 <?php 
 session_start();
  require_once "../functions/admin.php";
  $title = "List book";
  
  require_once "../functions/database_functions.php";
  $conn = db_connect();
  $result = getAll($conn);
?>
 <?php require_once 'admin-menu.php'; ?>
          <!-- end of sidebar navigation -->
        <div class="col-md-8 mt-2">
           
                <p class="lead"><a class="btn btn-primary" href="add_book.php">Add new book</a></p>
             
              <table class="table table-responsive" style="margin-top: 20px">
                <tr>
                  <th>ISBN</th>
                  <th>Title</th>
                  <th>Author</th>
                  
                  <th>Price</th>
                  <th>Publisher</th>
                  
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                  <td><?php echo $row['book_isbn']; ?></td>
                  <td><?php echo $row['book_title']; ?></td>
                  <td><?php echo $row['book_author']; ?></td>
                  
                  <td><?php echo $row['book_price']; ?></td>
                  <td><?php echo $row['book_publisher']; ?></td>
                  
                  <td><a class="btn btn-success" href="admin_edit.php?bookisbn=<?php echo $row['book_isbn']; ?>">Edit</a></td>
                  <td><a class="btn btn-danger" href="admin_delete.php?bookisbn=<?php echo $row['book_isbn']; ?>">Delete</a></td>
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