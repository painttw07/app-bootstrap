<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/dog.png" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/styles.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Yomogi&display=swap');</style>
    <title>Alura - app bootstrap</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="mobile-container">
        <div class="topnav">
       <!-- <a href="#home" class="active">Logo</a><-->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <div id="myLinks">
                <a href="#">Home</a>
                <a href="#about-us">Us</a>
                <a href="#projects">Projects</a>
                <a href="#contact-us">Contact</a>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</body>
<!--<nav class="navbar navbar-expand-lg navbar-light">
    <div class="col-12">
        <div class="col-sm-8 col-xs-8 col-lg-8"></div>
        <div class="col-sm-4 col-xs-4 col-lg-4">
            <ul class="navbar-nav">
                <div class="col-xs-1 col-lg-1" style="margin:0px 10px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                </div>
                <div class="col-xs-1 col-lg-1" style="margin:0px 10px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                </div>
                <div class="col-xs-1 col-lg-1" style="margin:0px 10px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us">Contact</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>
<-->