<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "phpwebsite";  
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Sorry, we failed to connect: " . mysqli_connect_error());
    }
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your email ' . $email.' and password '. $password.' has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';

    // Insert query
    $sql = "INSERT INTO `phpwebsitedata` (`username`, `email`, `mobile`, `comment`) 
            VALUES ('$name', '$email', '$mobile', '$comment')";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Your record was added successfully!";
    } else {
        echo "Your record was not added, sorry! Error: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
header('location:index.php');
?>
