<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>img/chocolate.ico">
        <link href="<?= base_url(); ?>__assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>__assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url(); ?>__assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> 

        <title>Simple Inventory</title>

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><h3>Simple Inventory</h3></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" aria-current="page" href="<?= base_url(); ?>">Home</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?= base_url(); ?>add">Add Product</a></li>
                        <li><a class="dropdown-item" href="<?= base_url(); ?>list">Product List</a></li>
                       
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sales">Sales</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
            </ul>
            </div>
                <!--
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
                -->
            <div class="float-end">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <?php if($this->session->logged_in){?>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome, <?= $this->session->fullname; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="<?= base_url(); ?>logout">Logout</a></li>
                        </ul>
                    <?php } else { ?>
                        <a class="nav-link" href="<?= base_url(); ?>login"></a>
                    <?php } ?>
                    </li>
                </ul>
            </div>
                 
        </div>
        </nav>

        <div class="container mt-4">