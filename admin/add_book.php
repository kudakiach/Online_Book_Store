<?php require_once 'admin-menu.php'; ?>
          <!-- end of sidebar navigation -->
        <div class="col-md-8 mt-2">   
             <form method="post" action="process.php" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <th>ISBN</th>
        <td><input type="text" name="isbn"></td>
      </tr>
      <tr>
        <th>Title</th>
        <td><input type="text" name="title" required></td>
      </tr>
      <tr>
        <th>Author</th>
        <td><input type="text" name="author" required></td>
      </tr>
       <tr>
        <th>Category</th>
        <td><input type="text" name="category" required></td>
      </tr>
      <tr>
        <th>Image</th>
        <td><input type="file" name="image"></td>
      </tr>
      <tr>
        <th>Description</th>
        <td><textarea name="descr" cols="40" rows="5"></textarea></td>
      </tr>
      <tr>
        <th>Price</th>
        <td><input type="text" name="price" required></td>
      </tr>
      <tr>
        <th>Publisher</th>
        <td><input type="text" name="publisher" required></td>
      </tr>
      <tr>
        <th>E-book</th>
        <td><input type="file" name="ebook"></td>
      </tr>
    </table>
    <input type="submit" name="add" value="Add new book" class="btn btn-primary">
    <input type="reset" value="cancel" class="btn btn-default">
  </form>
  <br/> 
        </div>
        <!-- end of body content -->
         
        
       
    </div>
</body>
</html>