<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload Student Information From Excel(CSV) file</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
</head>

<body>
    <div class="jumbotron text-center">
        <h2>Upload Student Information From Excel(CSV) file</h2>

    </div>
    <div class="container">
        <form action="excel-script.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="file" name="excelDoc" id="excelDoc" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <input type="submit" name="uploadBtn" id="uploadBtn" value="Upload Excel" class="btn btn-success" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>