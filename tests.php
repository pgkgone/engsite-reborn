<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="css/styles3.css" >
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<div class="pdf_link" >
    <?php include ("php/pdf_link.php")?>
</div>
<nav>
    <div class="nav-wrapper">
        <a href="https://sfedu.ru/" class="brand-logo"><img src="logo.png" width="65vw" height="65vw"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down valign-wrapper">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.php">About</a></li>
        </ul>		<div class="pdf-header right hide-on-med-and-up valign-wrapper">			<ul id="nav-mobile" class="valign-wrapper right">				<li><a class="pdf-header-link" href="index.html" style="font-size: 2rem; font-family: Roboto Black;">PDF</a></li>			</ul>		</div>
    </div>
</nav>

<div class="content">
    <div class="centerblock">
        <div class="grid-wrapper-right-two-thirds">
            <?php include ("php/menu.php")?>
            <div style="position: relative;width: 80%;margin-left: 5%;">
                <?php include ("php/beautyTitle.php")?>
                <div class="post">
                   <?php include ("php/tasker.php")?>
                </div>
                <?php include ("php/video.php")?>
                <?php include ("php/texter.php")?>
                <?php include ("php/createButtons.php")?>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text"></h5>
                <p class="grey-text text-lighten-4">????.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="https://vk.com/null.pointer.exception">Sergei Chamkin</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://vk.com/vanyamakarov">Ivan Makarov</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">2019 All rights reserved</div>
    </div>
</footer>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/chekers.js"></script>
</body>
</html>