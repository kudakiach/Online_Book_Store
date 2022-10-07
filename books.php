<?php
  session_start();
  $count = 0;
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT book_isbn, book_image FROM books";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "Full Catalogs of Books";
  require_once "./template/head.php";
  require_once "./template/menu.php";

?><div class="col-md-8 offset-md-2">
   <p class="lead text-center text-muted">Full Catalogs of Books</p>
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
      <div class="row mt-2">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-3">
            <a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>">
              <img class="img-responsive img-thumbnail" src="./uploads/<?php echo $query_row['book_image']; ?>" width ='100%'>
            </a>
            <?php
            if(isset($_SESSION['login_user'])){
              ?>
               <div class="mt-1">
                <a href = "download.php?file=<?php echo $query_row['book_isbn']?>" class="btn btn-primary col-md-8">Download</a>
              
            </div>
            <?php
          }
          else{
            ?>
            <div class="mt-1">
             <a href = "user_login.php" class="btn btn-primary col-md-8">Download</a>
            </div>
          <?php } ?>
             
          </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
      </div>
      <?php
      }
      ?>
</div>
 
<?php
  if(isset($conn)) { mysqli_close($conn); }
  require_once "./template/footer.php";
?>