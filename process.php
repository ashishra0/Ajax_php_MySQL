<?php

  $conn = mysqli_connect('localhost', 'root', 'valleyforge', 'ajax_test');

  // Checking for POST variable
  if(isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo  'Your name is '. $_POST['name'];


    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($conn, $query)) {
      echo "User has been added";
    } else {
      echo "Oops something went wrong". mysqli_error($conn);
    }
  }

  // Checking for GET variable
  if(isset($_GET['name'])) {
    echo  'Your name is '. $_GET['name'];
  }
  
?>