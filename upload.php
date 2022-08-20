<?php
// connection to databse
$conn = mysqli_connect('localhost', 'root', '', 'hostapp');
if(!$conn){
    echo mysqli_connect_error($conn);
}

// collecting form data
$name = $_REQUEST['name'];
$description = $_REQUEST['description'];

if(!empty($name) and !empty($description)){
    
    $sql = "INSERT INTO moviws (movie_name, movie_description)
    VALUES ('$name', '$description')";
    
    if (mysqli_query($conn, $sql)) {
        header("location:./index.php");
    } else {
        header("location:./index.php");
    
    }

} else {
    header("location:./index.php");

}
