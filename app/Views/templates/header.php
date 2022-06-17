<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage | Bookorama</title>
    <!-- bootstrap styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" integrity="sha512-xnP2tOaCJnzp2d2IqKFcxuOiVCbuessxM6wuiolT9eeEJCyy0Vhcwa4zQvdrZNVqlqaxXhHqsSV1Ww7T2jSCUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style -->
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <!-- navbar section -->
    <div class="nav__section position-fixed">
        <nav class="navbar navbar-expand-lg navbar-light navbar__expand">
            <a class="navbar-brand" href="/">
            	<img src="/assets/img/bokorama-logo.png" class="brand__logo" alt="bookorama-logo">
            </a> <!-- end logo navbar -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> <!-- end button collapse -->

            <div class="collapse navbar-collapse nav__bar" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item nav__item active">
                        <a class="nav-link nav__link" href="/">Home</a>
                    </li>
                    <li class="nav-item nav__item">
                        <a class="nav-link nav__link" href="#">Books</a>
                    </li>
                    <li class="nav-item nav__item">
                        <a class="nav-link nav__link" href="#">Customer</a>
                    </li>
                    <li class="nav-item nav__item">
                        <a class="nav-link nav__link" href="#">Cart</a>
                    </li>
                </ul>

                <div class="navbar-nav nav__item btn__sec">
                	<a href="/Book/login" class="nav-link nav__link btn__login">Log in</a>
                </div>
            </div> <!-- end collapse navbar -->
        </nav> <!-- end navbar -->
    </div> <!-- end nav section -->


	<?php $this->renderSection('mainpage'); ?>

	<!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> <!-- jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> <!-- bootstrap js -->
</body>
</html>