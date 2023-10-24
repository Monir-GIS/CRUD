<!-- PHP Section -->
<?php
require_once "./function.php";

$info = "";

$task = $_GET['task'] ?? 'report';
if('seed' == $task){
    seed();
    $info = "Seeding Completed";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBS's Office Data Entry Form</title>

    <meta name="keywords" content="33/11KV Sub-Station Data Entry Web Map, Web GIS, Web Map of Bangladesh Rural Electrification Board">
    <meta name="description" content="Web Map, Web GIS">
    <meta name="author" content="Web Map of Bangladesh Rural Electrification Board">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicon -->
    <link rel="icon" href="imgages/icon/globe-4.png" type="image/png">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>


<body>
    <div class="container w-100">
        <div class="row col-md-12 mt-4">
            <div class="col-md-12">
                <div class="float-start ps-0"><h2>Locational Database of 80 PBS Offices</h2></div>
                <div class="float-end ps-3"><a href="#" target="_blank" class="btn btn-info"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></div>
                <div class="float-end ps-3"><a href="#" target="_blank" class="btn btn-info"><i class="fa fa-external-link-square" aria-hidden="true"></i> Export CSV</a></div>
                <div class="float-end ps-3"><a href="./adddata.html" target="_blank" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create Record</a></div>
                <div class="float-end ps-3"><a href="./index.php?task=seed" target="_blank" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Data Seed</a></div>
            </div>
        </div>

        <div clsss="row" col-md-12>
            <hr>
            <?php include_once ('nav.php') ?>
            <hr>
            <?php
                if($info!==""){
                    echo "<p>{$info}</p>";
                }
            ?>
        </div>

        <?php if('report' == '$task'): ?>

        <div clsss="row" col-md-12>
            <?php generateReport(); ?>
        </div>
        <?php endif; ?>










    </div>


    <!-- Template JS -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>









































    <!-- <div class="row d-flex mt-4 bg-light-subtle">
        <div class="row col-md-6 align-items-md-center text-start">
            <h2 class="text-start">Locational Database of 80 PBS Offices</h2>
        </div>

        <div class="row col-md-6">
            <div class="p-2 flex-fill col-md-2 d-grid gap-2 d-md-flex justify-content-md-end"><a href="#" target="_blank" class="btn btn-info"><i class="fa fa-external-link-square" aria-hidden="true"></i> Export CSV</a></div>
            <div class="p-2 flex-fill col-md-2 d-grid gap-2 d-md-flex justify-content-md-end"><a href="./adddata.html" target="_blank" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Create Record</a></div>
            <div class="p-2 flex-fill col-md-2 d-grid gap-2 d-md-flex justify-content-md-end"><a href="./adddata.html" target="_blank" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Data Seed</a></div>
            <div class="p-2 flex-fill col-md-2 d-grid gap-2 d-md-flex justify-content-md-end"><a href="#" target="_blank" class="btn btn-info"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></div>
        </div>
    </div> -->
