<?php
//Global will host the global function and data base log in information
//require_once("protected/global.php");
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    .jumbotron{
    background: 
    linear-gradient(
    rgba(0, 0, 250, 0.25), 
    rgba(125, 250, 250, 0.45)
    );
    background-image: url("https://brandonthomas.tech/art/background1.jpg");
    background-size: cover;
    u
    }



    .date{
        color:blue;
    }
</style>
    <title>Brandon Thomas Tech</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
        <h1>Hello, I'm Brandon Thomas</h1>
        <p>Human Being, Musician, Programmer, Type 1 Diabetic</p>
    </div>
    <div class='container'>
        <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="https://brandonthomas.tech/">Resume</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Music</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Music Review</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Projects
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Magic Sealed Generator</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
            </li>
        </ul>
        </nav>

        <div>
        </div>
        <div class="bg-teal" id="resume_info">
            <div id="about_me">
                I am an experienced full stack developer, musician, and person living with type 1 diabetes. 
            <div>
            <div id="job_1">
                <h3>Senior Programming Manager</h3>
                <h4>Imperial Western Products</h4>
                <p class="date">October 2019 - Present</p>
                <p class="resume_info">Managed PHP(LAMP) web application stack for internal account management and tuck routing software.</p>
                <p class="resume_info">Migrated physical server to virtual server increasing business efficiency and backup protection.</p>
                <p class="resume_info">Increased billing and accounts receivable productivity by 300% with OCR functions and automaticpayments.</p>
                <p class="resume_info">Optimized business operations with SQL Database, complex SQL queries, and PHP class upgrades.</p>
                <p class="resume_info">Advanced leadership's access to data by creating new account management functions and dashboards</p>
                <p class="resume_info">Serve as liaison between leadership and programmers for strategic business operation changes.</p>
            </div>
            <div id="job_2">
                <h3>Computer Systems Specialist</h3>
                <h4>Imperial Western Products</h4>
                <p>August 20</p>
                <p class="resume_info"></p>
                <p class="resume_info"></p>
                <p class="resume_info"></p>

            </div>
            <div id="job_3">
                <h3>Acounting And Admininistration Assistant</h3>
                <h4>Imperial Western Products</h4>
                <p>August 20</p>
            </div>
            <div id="job_4">
                <h3>Tax Preparer Intern</h3>
                <h4>Quantax Inc, San Marcos CA</h4>
                <p>August 20</p>
            </div>
        </div>


    <div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

?>