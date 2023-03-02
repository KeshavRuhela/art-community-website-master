<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter image data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <!-- id|title|description|price|tags|category|time|image_name -->

    <form class="container" action="../Api/shopimage.php" method="POST" style="width:60%; padding:2%;" id="myForm" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputtitle" class="form-label">Title</label>
            <input type="text" required class="form-control" name="Title" id="exampleInputtitle" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label">Description</label>
            <input type="text" required class="form-control" name="Description" id="exampleInputDescription">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Price</label>
            <input type="number" required class="form-control" name="price" id="exampleInputprice">
        </div>
        <div class="mb-3">
            <label for="exampleInputTags" class="form-label">Tags</label>
            <input type="text"  requiredc class="form-control" name="Tags" id="exampleInputTags">
        </div>
        <div class="mb-3">
            <label for="exampleInputCategory" class="form-label">Category</label>
            <input type="text" required class="form-control" name="Category" id="exampleInputCategory">
        </div>
        <div class="mb-3">
            <label for="exampleInputImage" class="form-label">Image</label>
            <input type="file" required class="form-control" name="imagefile" accept="image/jpeg, image/jpg" id="exampleInputImage">
        </div>

        <button type="submit" id="send_request" class="btn btn-primary">Submit</button>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>







</html>