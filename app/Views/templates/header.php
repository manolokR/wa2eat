<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-Wq3znUOIZtqZkpWpkTVRtRwQ2YyPCvT03zWlj+iS9dH1eNTjiOVlG2xgC4np4FXwL+Hgx1pjcTXy09pgH5u5HA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        main>.container {
            padding: 60px 15px 0;
        }
    </style>

</head>

<body class="d-flex flex-column h-100">
    
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="<?= base_url("imagenes/logo.png") ?>" alt="Logo de Wa2Eat"
                        style="max-width: 100px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="home" href="<?= base_url('home') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>">CodeIgniter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">