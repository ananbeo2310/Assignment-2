<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Assignment 01 - Simple Static Web Site">
    <meta name="author" content="Group 01">
    <link rel="icon" href="./styles/images/icon2.png">
    <link rel="stylesheet" href="styles/enhance.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Enhancements</title>
</head>
<body>
    <div class = menu>
        <div class="navi">
            <a href="index.html"><img src="./styles/images/logo.png" alt="logo" class="logo"></a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="jobs.html">Description</a></li>
                <li><a href="apply.html">Application</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="enhancements.html" class="active">Enhancements</a></li>
              </ul>
        </nav>
    </div>
    
    <h1 class="page-title">Interactivity and Animation Enhancements</h1>

    <br>

    <div class="main-content">
        <div class="first">
            <ol>
                <li>In our job.html page, we have added an attention-grabbing <a href="jobs.html#button1">Apply now</a> button. This button is not just functional but also visually appealing. Beyond the fundamental requirements of the assignment, this enhancement significantly improves the user experience by making it more attractive to users. The animation adds an enhanced touch to our website.</li>
                <li> I have added a website logo (favicon) to our website using the (link rel="icon") tag, linking to "icon2.png" in the "styles/images" directory. This logo is displayed in the browser's tab and provides a visual representation of your website.</li>
                <li>We also add an interactive button displayed by a <a href = "jobs.html#quote">heart</a> located on the right side of the jobs.html page when the user clicks on it. It will appear as a quote aside.</li>
            </ol>
        </div>
    </div>
    
    <footer>
        <div class="main-footer">
          <hr class="hr-footer">
          <div class="icon-footer">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook-official"></i></a>
            <a href="https://twitter.com/"><i class="fa fa-twitter-square"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
            <a href = "mailto:bachnhswh00470@fpt.edu.vn"><i class="fa fa-google-plus-circle"></i></a>
          </div>
    
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html">Home Page</a></li>
            <li class="list-inline-item"><a href="jobs.html">Position Descriptions</a></li>
            <li class="list-inline-item"><a href="apply.html">Job Applycation</a></li>
            <li class="list-inline-item"><a href="about.html">About Us</a></li>
            <li class="list-inline-item"><a href="enhancements.html">Enhancements</a></li>
          </ul>
        </div>  
    </footer>
</body>
</html>