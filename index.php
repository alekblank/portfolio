<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
      <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    
    
   <title>Portfolio of Alex Cunningham</title>
   <style>
        body {
            background-color: #00bb44;
        }
        .html {
            height: 30px;
            width: 30%;
            background-color: red;
        }
        .javascript {
            height: 30px;
            width: 20%;
            background-color: orange;
        }
        .css {
            height: 30px;
            width: 25%;
            background-color: brown;
        }
        .python {
            height: 30px;
            width: 10%;
            background-color: purple;
        }
        .photo-of-me {
            background-image: url("me.png");
            padding-bottom: 336px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .no-margin {
            margin: 0px;
        }
        #about-me {
            background-color: white;
        }
        #exp {
            background-color: yellow;
            color: white;
        }
        #footer {
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">K9ALK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About me</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">FAQ</a>
                        <a class="dropdown-item" href="#">My Bio</a>
                        <a class="dropdown-item" href="#">My dreams</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    
        <div style="margin-top: 100px;" class="w-100">
            <div class="pt-lg-2 photo-of-me" id="me-image">
        </div>    
        </div>
        <div class="text-center no-margin" id="about-me">
            <h1>Hi, Welcome to my home page!</h1>
            <p class="lead">My name is Alex Cunningham, but I like to be called Alek, and I am an aspired computer scientist.</p><br>
            <p>I have always loved computers because they always made me wonder how they work. I put together a computer myself when I was 6. <br>
            I installed the modem and had it on aol in one day. My parents were astonished.</p><br>
            <p>To learn more about me visit my bio!</p>
        </div>
        
        <div class="no-margin" id="exp">
            <h3>My language experience
            <div id="skills">
               HTML:
               <div class="html">
                    5 years
                </div>
               JavaScript:
               <div class="javascript">
                    2 years
                </div>
                CSS:
                <div class="css">
                    4 years
                </div>
                Python:
                <div class="python">
                    1 year
                </div>
                
                
            </div>
            
        </div>

    <!-- /.container -->
    <div id="footer">©copyright 2019 Alex Cunningham<br><a href="#">Site map</a></div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>    
</html>
