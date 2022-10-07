<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/head.php";
  require_once "./template/menu.php";
  require_once "./template/banner.php";
  require_once "./functions/database_functions.php";
 
?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
          <?php require_once "./template/sidebar.php"; ?>
        </div>
        <div class="col-md-9">
          <p class="lead text-center text-muted">Latest books</p>
          <div class="row">
            <?php 
             $conn = db_connect();
             $result = select4LatestBook($conn);
            
            while($row = mysqli_fetch_assoc($result)){
            ?>
          
            <div class="col-md-3 mt-4">
              <a href="book.php?bookisbn=<?php echo $row['book_isbn']; ?>">
               <img class="img-responsive img-thumbnail" src="./uploads/<?php echo $row['book_image']; ?>" width='100%'>
              </a>
              <?php
            if(isset($_SESSION['login_user'])){
              ?>
               <div class="mt-1">
                <a href = "download.php?file=<?php echo $row['book_isbn']?>" class="btn btn-primary col-md-8">Download</a>
              
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
            <?php } ?>
          </div>
        </div>
      </div>
      
<?php
  if(isset($conn)) {mysqli_close($conn);}
 
?>