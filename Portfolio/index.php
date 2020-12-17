<?php 
   $message_sent = false;
   if(isset( $_POST['email']) &&  $_POST['email'] != ''){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];
        
        $to = "dsantisree@gmail.com";
        $body = "";
        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";
        
        mail($to, $messageSubject, $body);
        $message_sent = true;
    } 
    else{
        $invalid_class_name = "form-invalid";
    }
   
   }

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SANTI DASARI</title>
        <link rel="shortcut icon" type="image/png" href="favicon.png">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="main.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

    <body>
        <header>
            <a href= "#" class="logo">Santi Dasari</a>
            <div class="toggle"></div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </header>
        <section class="banner" id="home">
            <div class="textBox">
                <h2>Hi!<br><span>I'm Santi Dasari</span> </h2>
                <h3>Full Stack Developer</h3>
                <a href="#about" class="button">About</a>
            </div>
            <div class="headshot">
                <img src="head.png">
            </div>  
        </section>
        <section class="about" id="about">
            <div class="heading">
                <h2>About Me</h2>
            </div>
            <div class="content">
                <div class="contentBox">
                    <p> Hi, I'm a student at The University of Texas at Austin majoring in Computer Science. I am a full stack
                        developer for web and app development, creating innovative and useful products, and have an interest in Systems and 
                        Cybersecurity as well. Outside of classes, I have been involved in Texas Convergent, a club that focuses on the
                        intersection between technolgy and innovation, and I serve as a Nell Dale mentor in Women in Computer Science, 
                        an empowering community for women in the tech field.<br> 
        
                        <br>When I am not coding, you can find me tutoring kids in STEM, staying active by playing Tennis, making new Spotify playlists, 
                        looking for new places to eat, and spending time with friends and family.</p>
                   </div>
            </div>
        </section>
        <section class="work" id="work">
            <div class="heading">
            <h2>Work </h2>
            <p>Projects and Experience</p>
            </div>
            <div class="content">
                <div class="workBox">
                    <img src="FRI_logo_.png">
                    <h2><br>FRI: Autonomous Intelligent Robots</h2>
                    <p>Furthered the research and created an optimized search algorithm for the "Scavenger Hunt" problem, where robots detect the location of objects efficiently 
                        in a dynamic environment based on provided probability models. </p>
                        <br>
                            <a href="FRI_Final_Paper (1).pdf" class="paper" target= _blank >Research Paper</a> 
                </div>
                <div class="workBox">
                    <img src="sleepsafe.png">
                    <h2>SleepSafe</h2>
                    <p> Developed Android app “SleepSafe” which senses if the user is having a seizure in their sleep and can alert emergency services based on net change in motion. Used 
                        Arduino, Python, and Flask. </p>
                </div>
                <div class="workBox">
                    <img src="Frame 2.png">
                    <h2>QuickPick: Food & Fun</h2>
                    <p> Created and developed an iOS app that lets users choose constraints to be given a random restaurant to eat from or an indoor/outdoor activity to do in a chosen area.
                        Used Swift/UIKit and Yelp Fusion API. </p>
                </div>
                <div class="workBox">
                    <img src="GWC_SEO_Logo.png">
                    <h2><br><br>Girls Who Code Mentor</h2>
                    <p> Mentored young girls in an after school club and taught the basics of coding through Scratch, Python, and UI/UX. Worked to create a creative project each year and received 
                        recognition from the national chapter of club. </p>
                </div>
                <div class="workBox">
                    <img src="soundwave.png">
                    <h2>Coming Soon: Playlist Maker</h2>
                    <p> Working on a Chrome extension that would take all of your liked songs on Youtube and automatically place the song in a playlist in Spotify
                        using both Youtube and Spotify's APIs. </p>
                </div>
            </div>
        </section>

        <section class="resume" id="resume">
            <div class="heading">
                <h2>Resume</h2>
            </div>
            <div class="content">
                <embed src="Resume.pdf" type="application/pdf" width="100%" height="1000">
            </div>
        </section>
        <section class ="contact" id="contact"> 
            <div class="heading">
                <h2>Contact</h2>
                <p>Let me get to know you!</p>
            </div>

               <?php 
                 if($message_sent):
                 ?>

                    <h3>Thanks, I'll be in touch.</h3>

                <?php 
                 else:
                 ?>    
                <div class="container">
                    <form action="index.php" method="POST" class="form">
                        <div class="form-group">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" tabindex="1" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Your Email</label>
                            <input  type="email" class="form-control <?= $invalid_class_name ?? "" ?>" id="email" name="email" placeholder="Your Email" tabindex="2" required>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message" tabindex="4"></textarea>
                        </div>
                        <div>
                            <button type="send" class="btn">Send</button>
                        </div>
                    </form>
                </div>
            <?php 
            endif;
                ?>
        </section>
         <script type="text/javascript">
         window.addEventListener('scroll', function(){
             var header = document.querySelector('header');
             header.classList.toggle('sticky', window.scrollY > 0);
         });
        </script>
    </body>
</html>