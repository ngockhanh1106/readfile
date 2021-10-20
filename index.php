<?php
include('processform.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Image preview</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 form-div">
                <h3>Create Profile

                </h3>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="profileImage">Profile Image</label>
                        <input type="file" name="profileImage" id="profileImage" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="bio" >Bio</label>
                        <textarea name="bio" id="bio" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save-user" class="btn btn-primary btn-block">Save user</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>