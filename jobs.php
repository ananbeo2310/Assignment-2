<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Assignment 01 - Simple Static Web Site">
    <meta name="author" content="Group 01">
    <link rel="icon" href="./styles/images/icon2.png">
    <link rel="stylesheet" href="styles/jobs.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Position Descriptions Page</title>
</head>

<body>
    <div>
        <div class="navi">
            <a href="index.html"><img src="./styles/images/logo.png" alt="logo" class="logo"></a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="jobs.html" class="active">Description</a></li>
                <li><a href="apply.html">Application</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="enhancements.html">Enhancements</a></li>
            </ul>
        </nav>
    </div>

    <h1 class="title">Position Description</h1>

    <div class="Position-Description">
        <div id="checkbox">
            <input type="checkbox" id="quote-toggle">
            <label for="quote-toggle" id="quote-button"><span id="quote-label">&hearts;</span></label>

            <aside id="quote" class="quote">
                <span class="italic-text">"Technology is best when it brings people together."</span><br>
                <span id="author">__Matt Mullenweg__</span>
            </aside>
        </div>

        <img src="./images/webdev.jpg" alt="web developer" class="images">


        <div>
            <section class="flex-container">
                <h2 id="SD">Software Developer</h2>

                <div class="text-right" id="SD-object">
                    <div>
                        <p><span class="bold-text">Reference Number:</span> 10026</p>

                        <p class="bold-text">Brief Description of the Position:</p>
                        <p>The Software Developer will be involved in the development and maintenance of the company's
                            software
                            applications.</p>
                        <p><span class="bold-text">Salary Range:</span> 20,000,000 - 30,000,000 VND/month</p>
                        <p><span class="bold-text">Reporting Line of the Successful Candidate: </span>Technical Staff
                        </p>


                        <p class="bold-text">Mandatory Requirements:</p>
                        <ol>
                            <li>At least 3 years of experience in software development.</li>
                            <li>Proficient in Java and SQL programming languages.</li>
                            <li>Understanding of software development principles.</li>
                            <li>Ability to work independently and in a team.</li>
                        </ol>

                    </div>

                </div>
                <a href="apply.html" class="button" id="button1">Apply now</a>

            </section>
        </div>




        <img src="images/robotics.jpg" alt="AI" class="images">

        <div>
            <section class="flex-container">
                <h2 id="RB">Robotic</h2>

                <div class="text-right" id="RB-object">
                    <p><span class="bold-text">Reference Number:</span> 10006</p>

                    <p class="bold-text">Brief Description of the Position:</p>
                    <p>The Robotics Engineer will play a crucial role in developing cutting-edge robotics systems and
                        technologies. They will be responsible for designing, implementing, and maintaining robotic
                        systems
                        for various applications. This position requires a deep understanding of robotics principles,
                        algorithms, and programming languages.</p>
                    <p><span class="bold-text">Salary Range:</span> 40,000,000 - 45,000,000 VND/month</p>
                    <p><span class="bold-text">Reporting Line:</span> Robotics Engineering Staff</p>

                    <p class="bold-text">Mandatory Requirements:</p>
                    <ol>
                        <li>Bachelor's or Master's degree in Robotics, Computer Science, or related field.</li>
                        <li>Proven experience in robotics system design and development.</li>
                        <li>Proficiency in programming languages used in robotics.</li>
                        <li>Strong knowledge of robotics principles and sensor integration.</li>
                    </ol>

                </div>
                <a href="apply.html" class="button" id="button2">Apply now</a>

            </section>
        </div>


        <img src="images/gamedev.webp" alt="Game developer" class="images" id="image3">

        <div>
            <section class="flex-container">
                <h2 id="GD">Game Developer</h2><br>

                <div class="text-right" id="section3">
                    <p><span class="bold-text">Reference Number:</span> 10007</p>

                    <p class="bold-text">Brief Description of the Position:</p>
                    <p>Game programmers will be responsible for designing, implementing and testing game features,
                        ensuring
                        quality and the best player experience.</p>
                    <p><span class="bold-text">Salary Range:</span> 15,000,000 - 20,000,000 VND/month</p>
                    <p><span class="bold-text">Reporting Line:</span> Technical staff</p>


                    <p class="bold-text">Mandatory Requirements:</p>
                    <ol>
                        <li>At least 3 years of experience in software development.</li>
                        <li>Proficient in programming languages such as C++, C#, or Java.</li>
                        <li>Understanding of software development principles.</li>
                        <li>Able to work independently and in a group.</li>
                    </ol>


                </div>
                <a href="apply.html" class="button" id="button3">Apply now</a>

            </section>
        </div>
        <div class="NOTE">
            <h3 id="important">Some <span class="second">important notes </span> when <span class="third">working</span>:</h3>
            <ul id="note">
                <li>Determine the target: First, set a clear goal for your work and make a plan to achieve it. This
                    helps focus and organize work effectively.</li>
                <li>Time management: Time management skills are very important. Prioritize important and essential work,
                    set deadlines, and use time management tools to help you complete work efficiently.</li>
                <li>Effective communication: Communication is an important factor in the work environment. Listen and
                    understand other people's opinions, communicate information clearly, and build good working
                    relationships with colleagues and superiors.</li>
                <li>Collaboration and teamwork: Collaborate and work effectively as a team. Share information, opinions
                    and skills with colleagues to achieve better results and promote common development.</li>
            </ul>
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