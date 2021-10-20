<?php
 if(isset($_POST['save user'])){
  echo "<pre>", print_r($_FILES['profileImage']['name']), "</pre>";

    $bio = $_POST['bio'];
    $profileImageName = time() . '_' . $_FILES['profileImage']['name'];

    $target = 'images/' . $profileImageName ;
    move_uploaded_file($_FILES['profileImage']['tmp_name'], $target);
 }
?>