<?php
if(isset($_POST['add'])){
	$isbn = $_POST['isbn'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$cat = $_POST['category'];
	$descr = $_POST['descr'];
	$price = $_POST['price'];
	$pub = $_POST['publisher'];
	$image = $_FILES['image']['name'];
	$ebook = $_FILES['ebook']['name'];
	$ebook_type=$_FILES['ebook']['type'];
	require_once '../functions/database_functions.php';
	$conn = db_connect();

	if(empty($isbn) || empty($title) || empty($author) || empty($cat) || empty($descr) || empty($price) || empty($pub) || empty($image) || empty($ebook)){
		echo "All fields are required";
		exit;
	}
	$dest = "../uploads/".basename($image);
	$target = "../images/".basename($ebook);
	if(!(is_numeric($price))){
		echo "price must be a numeric number";
		exit;
	}
	if ($ebook != " " && $ebook_type !== 'application/pdf'){
		echo "file type should be a pdf";
		exit;
	}

	$move1 = move_uploaded_file($_FILES['ebook']['tmp_name'], $target); 
    $move = move_uploaded_file($_FILES['image']['tmp_name'], $dest);
    if(!$move1){
    	echo "failed to upload images";
    	exit;
    }
    if(!$move){
    	echo "failed to upload pdf";
    }
	else{
		$query = "INSERT INTO books(book_isbn,book_title,book_author,category,book_image,book_descr,book_price,book_publisher,ebook
	) values('$isbn','$title','$author','$cat','$image','$descr','$price','$pub','$ebook')";
		$result = mysqli_query($conn,$query);
		if(!$result){
			echo "Failed to add book" . mysqli_error($conn);
		}
		else{
			header("location: books.php");
		}
	}
	
}