<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?=setting('description')?>">
    <meta name="keywords" content="<?=setting('keywords')?>">
    <title><?=setting('title')?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
          crossorigin="anonymous">
    <link rel="stylesheet" href="<?=public_url('styles/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=public_url('styles/main.css')?>">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <script src="<?=public_url('scripts/api.js')?>"></script>
    <script>
        var api_url = '<?=site_url('api')?>'
    </script>

</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand nav-head" href="#"><?=setting('title_text')?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#product-and-services">Product and Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#partners">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#career">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
</nav>
