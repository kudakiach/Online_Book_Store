<?php

    $id = $_GET['file'];

    // fetch file to download from database
    require_once './functions/database_functions.php';
    $conn = db_connect();
    $sql = "SELECT ebook FROM books WHERE book_isbn=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'images/'. $file['ebook'];
   

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('images/' . $file['ebook']));
        readfile('images/' . $file['ebook']);

    }
    else{
    	echo "error downloading file". mysqli_error($conn);
    }

