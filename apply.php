<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Assignment 01 - Simple Static Web Site">
    <meta name="author" content="Group 01">
    <link rel="icon" href="./styles/images/icon2.png">
    <link rel="stylesheet" href="styles/apply.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Job Application Page</title>
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
                <li><a href="apply.html" class="active">Application</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="enhancements.html">Enhancements</a></li>
              </ul>
        </nav>
    </div>
    
    <h1 class="page-title">Register your interest in our advertised position</h1>

    <article class="applyform">
        <h2 class="form-title">Job Application Form</h2>
        <hr class="hr-applyform">
        <br>
        <form method="post" action="https://mercury.swin.edu.au/it000000/formtest.php">
            <!-- Job Reference Number -->
            <label for="jobReference">Job Reference Number:</label>
            <input type="text" id="jobReference" name="jobReference" pattern="[A-Za-z0-9]{5}" required>
            <br><br>
    
            <!-- First Name -->
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" maxlength="20" required>
    
            <!-- Last Name -->
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" maxlength="20" required>
            <br><br>
    
            <!-- Date of Birth -->
            <label for="birth">Date of Birth:</label>
            <input type="text" id="birth" name="birth" pattern="(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[012])/\d{4}" placeholder="dd/mm/yyyy" required>
            <br><br>
    
            <!-- Gender -->
            <fieldset>
                <legend>Gender:</legend>
                <input type="radio" id="male" name="gender" value="Male" required checked="checked">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female" required>
                <label for="female">Female</label>
                <input type="radio" id="othergender" name="gender" value="Othergender" required>
                <label for="othergender">Other</label>
            </fieldset>
            <br>
    
            <!-- Street Address -->
            <label for="streetAddress">Street Address:</label>
            <input type="text" id="streetAddress" name="streetAddress" maxlength="40" required>
            <br><br>
    
            <!-- Suburb/Town -->
            <label for="suburb">Suburb/Town:</label>
            <input type="text" id="suburb" name="suburb" maxlength="40" required>
            <br><br>
    
            <!-- State -->
            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option value="">Please Select</option>
                <option value="VIC">VIC</option>
                <option value="NSW">NSW</option>
                <option value="QLD">QLD</option>
                <option value="NT">NT</option>
                <option value="WA">WA</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="ACT">ACT</option>
            </select>
            <br><br>
    
            <!-- Postcode -->
            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode" pattern="\d{4}" required>
            <br><br>
    
            <!-- Email Address -->
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
    
            <!-- Phone Number -->
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9 ]{8,12}" required>
            <br><br>
    
            <!-- Skill List -->
            <label for="programming">Skills:</label><br>
            <input type="checkbox" id="programming" name="skills[]" value="Programming" checked="checked">
            <label for="programming">Programming</label><br>

            <input type="checkbox" id="design" name="skills[]" value="Design">
            <label for="design">Design</label><br>

            <input type="checkbox" id="projectManagement" name="skills[]" value="Project management">
            <label for="projectManagement">Project management</label><br>

            <input type="checkbox" id="communication" name="skills[]" value="Communication">
            <label for="communication">Communication</label><br>

            <input type="checkbox" id="teamwork" name="skills[]" value="Teamwork">
            <label for="teamwork">Teamwork</label><br>

            <input type="checkbox" id="customerService" name="skills[]" value="Customer Service">
            <label for="customerService">Customer Service</label><br>

            <input type="checkbox" id="problemsolving" name="skills[]" value="Problem-solving">
            <label for="problemsolving">Problem-solving</label><br>

            <input type="checkbox" id="OtherSkills" name="skills[]" value="Other Skill">
            <label for="OtherSkills">Other skills...</label>
            <br><br>
    
            <!-- Other Skills Textarea -->
            <label for="typeOtherSkills">Other Skills:</label>
            <textarea id="typeOtherSkills" name="otherSkills" rows="4" cols="50"></textarea>
            <br><br>
    
            <!-- Button -->
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </form>
    </article> 
      
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
