<!DOCTYPE html>

<html>

<head>

    <title>BLACK STACK-WEB DEVELOPMENT</title>
    <meta charset="utf-8"/>
    <meta name="description" content="BlackStack.co.za is the Web design and development website by web developer Thapelo Sepale from Klerksdorp">
    <meta name="viewport" content="class=device-width, initial-scale=1"/>
    <meta name="keywords" content="Thapelo Sepale,Web development,Klerksdorp,BlackStack.co.za,jt31web,website">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link href="css/all.min.css" rel="stylesheet"/>
</head>

<body>

    <header>

        <!--BANNER-->
        <section class="banner">
            
            <input type="checkbox" id="menu"/>
            <label for="menu">
                
                <h1>
                    <section class="home">
                        <td><a href="index.html"><i class="fas fa-home"></i></a></td>
                    </section>
                    BLACK STACK
                    <section class="message">
                        <td><a href="contact.html"><i class="fas fa-envelope"></i></a></td>
                    </section>
            </h1>
            </label>

            <!-- TOP ICONS-->
                <div id="navigation">
                <section class="one-fifth">
                    <td><a href="html.html"><i class="fab fa-html5"></i></a></td>
                    <p class="icon_text">HTML</p>
                </section>

                <section class="one-fifth">
                    <td><a href="css.html"><i class="fab fa-css3"></i></a></td>
                    <p class="icon_text">CSS</p>
                </section>

                <section class="one-fifth">
                    <td><a href="html.html"><i class="fas fa-code"></i></a></td>
                    <p class="icon_text">JAVASCRIPT</p>
                </section>

                <section class="one-fifth">
                    <td><a href="css.html"><i class="fas fa-search"></i></a></td>
                    <p class="icon_text">SEO</p>
                </section>

                <section class="one-fifth">
                    <td><a href="css.html"><i class="fas fa-database"></i></a></td>
                    <p class="icon_text">PHP/MySQL</p>
                </section>
            </div>
            <!--END OF START ICONS-->

        </section>
        <!--BANNER-->

    </header><br/>
    <!--END OF HEADER-->
    
    <!--CONTENT-->
    <div id="content">

    <!--LEFT contacts-->
    <section class="left side block">

        <section class="contacts">
            <td><a href="https://www.linkedin.com/in/thapelo-sepale-0a685a170/" target="_blank"><i class="fab fa-linkedin"></i></a></td>
        </section>

        <section class="contacts">
            <td><a href="http://www.instagram.com/jt31web" target="_blank"><i class="fab fa-instagram"></i></a></td>
        </section>

    </section>
    <!--END OF left contacts-->


    <!--MAIN content block-->
    <section class="main block">
        <?php
    
    
  
   ## foreach ($_POST['interest[]'] as $interest[]) {
     ##    echo $interest . ", ";
      #   }

    ##############################
    #ESCAPE DATA(SANITIZE)
     function escapeData($data){
        if(function_exists('mysql_real_escape_string')){
            $data = mysql_real_escape_string($data);
            $data = strip_tags($data);
            $data = stripslashes($data);
        } else {
            $data = strip_tags($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = filter_var($data, FILTER_SANITIZE_STRING);
        }
        return $data;
     }
     #################################


    #########################
    #  VALIDATE

    
    #####  NAME CHECK
    #####################
    if (preg_match('%^[A-Za-z\.\'\-\_]{2,30}$%', stripslashes(trim($_POST['contactName'])))) {
         $firstname = escapeData($_POST['contactName']);
     } else {
        $firstname = "<p class='error'>Please enter a valid Name!</p>";
     }
     #####################


    #####   EMAIL CHECK
    ###########################
    if (preg_match('%^[A-Za-z0-9._-]{2,20}+@[A-Za-z0-9._-]+\.[A-Za-z]{2,10}$%', stripslashes(trim($_POST['contactEmail'])))) {
        $email  = escapeData($_POST['contactEmail']);
     } else {
        $email = "<p class='error'>Please enter a valid Email!</p>";
     }
     ############################

     ########## VISITOR CHECK      
     #############################
     if (preg_match("%Developer|Client|Friend%", stripslashes(trim($_POST['contact'])))) {
         $visitor = escapeData($_POST['contact']);
     } else {
        $visitor = "<p class='error'>SELECT CONTACT TYPE: DEV, CLIENT OR FRIEND</p>";
     }
     #############################

    
    ##### POST REPLY CHECK
    #################################
    if (preg_match("%Phone|Email%", stripslashes(trim($_POST['reply'])))) {
        $reply = escapeData($_POST['reply']);
     } else {
        $reply = "<p class='error'>Please enter a valid Name</p>";
     }
     #####################


     ######  MESSAGE CHECK
     ###################################
    if (preg_match('%^[A-Za-z\s\.\,\'\"\-\_\?\!]{2,400}$%', stripslashes($_POST['contactComment']))) {
         $text = escapeData($_POST['contactComment']);
     } else {
        $text = "<p class='error'>YOUR TEXT IS NOT CORRECT!<br>
                DO NOT USE SPECIAL CHARACTERS LIKE #, *, %,$,@,(,),< or> ETC</p>";
     }
     #####################



    #####   MESSAGE TABLE (FOR EMAIL)
     #######################################
    $message ='<h2>E-mail Example</h2>
        <table style="width:100%">
        <tr><td>Sender: '.$firstname.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
       
        <tr><td>Reply by: '.$reply.'</td></tr>
        <tr><td>Visitor type: '.$visitor.'</td></tr>
        <tr><td>Message: '.$text.'</td></tr>
        
    </table>';
    ###################


    
    #####   PRINT TO StdOut(lol)
    ########################
    echo $message . "<br>";
    ################

?>
    </section>
    <!--END OF main content block-->


    <!--RIGHT contacts-->
    <section class=" right side block">

        <section class="contacts">
            <td><a href="Http://www.github.com/JT31WEB" target="_blank"><i class="fab fa-github"></i></a></td>
        </section>

        <section class="contacts">
            <td><a href="http://www.twitter.com/jt31web" target="_blank"><i class="fab fa-twitter"></i></a></td>
        </section>

    </section>
    <!--END OF right contacts-->

    </div>
    <!--END CONTENT-->


    <!--footer-->
    <footer>

            <p class="Copyright">
                Copyright THAPELO SEPALE &copy;<script>document.write(new Date().getFullYear());</script><br>
                This website is made with FONTAWESOME icons!
            </p>
        
    </footer>
    <!--END OF footer-->

</body>

</html>


































