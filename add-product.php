<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <form method="POST" action="handle-add-product.php">
        <div class="my-5 mx-3">
            <input class="form-control" name="name" type="text" placeholder="name">
            <textarea name="description" class="w-100 my-3 p-2" placeholder="description"></textarea>
            <input class="form-control" name="price" type="number" placeholder="price">
            <input class="btn btn-primary my-3" name="submit" type="submit">

        </div>



    </form>




    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>