<!DOCTYPE html>
<html class="h-100" lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.min.css") ?>">
        
        <style>
            main > .container {
                padding: 60px 15px 0;
            }
        </style>

    </head>

    <body class="d-flex flex-column h-100">
        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="<?= base_url("imagenes/logo.png")?>" alt="Logo de Wa2Eat" style="max-width: 100px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="home" href="<?=base_url('home') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url()?>">CodeIgniter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">About</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>

        <!-- Begin page content -->
        <main class="flex-shrink-0">
        <div class="container">