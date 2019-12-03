<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Upload PHP</title>
    <link href="bst/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<script src="bst/js/jQuery.js"></script>
<script src="bst/js/bootstrap.js"></script>

<div class="container">
    <div class="page-header"><h3>Image Upload PHP</h3></div>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">Upload Image</div>
            <div class="panel-body">
                <form enctype="multipart/form-data" method="post" action="upload.php">
                    <div class="form-group">
                        <label for="image" class="control-label">Select Image</label>
                        <input style="height: auto" required type="file"name="image" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">Available Images</div>
            <div class="panel-body">
                <div class="row">
                    <?php
                    $img=scandir("images");
                    for($i=2; $i<count($img); $i++){
                        ?>
                        <div class="col-xs-6 col-sm-4">
                            <div class="thumbnail">
                                <img class="img-responsive img-rounded img-thumbnail" src="images/<?php echo $img[$i] ?>">
                                <a class="btn btn-danger btn-block" href="delete.php?img_name=<?php echo $img[$i] ?>">Delete</a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>