<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script type="text/javascript" src="library/jquery/jquery-3.2.1.slim.min.js"></script>
    <script src="library/bootstrap/js/bootstrap.min.js"></script>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Kamm Herein Friseursalon - Terminevereinbarung</title>
    
    <style type="text/css">
        body {
            background-color: darkgray;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
            font-weight: 300;
        }

        .active a {
            color: white !important;
            background-color: darkgray !important;
        }

        .navbar-brand {
            font-size: 2em;
        }
        
        .center {
            text-align: center;
        }

        .marginTop {
            margin-top: 10px;
        }

        textarea {
            resize: none;
        }
        
        #comment {
            height: 150px;
        }

        .lightgray {
            background-color: lightgray;
        }

        .error {
            color: red;
        }
        
        #le-alert {
            display: none;
        }
        
        /* image resizing for mobile devices */
        img {
            width: 250px;
            height: auto;
        }

        /* sm */
        @media (min-width: 768px) {
            img {
                width: 300px;
            }
        }

        /* md */
        @media (min-width: 992px) {
            img {
                width: 350px;
            }
        }
        
        /* lg */
        @media (min-width: 1200px) {
            img {
                width: 400px;
            }
        }
        
        /* Style the footer */
            .footer {
                background-color: gray;
                padding: 10px;
                text-align: center;
            }
        
        /* Full-width input fields */
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
                from {-webkit-transform: scale(0)} 
                to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom {
                from {transform: scale(0)} 
                to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                   display: block;
                   float: none;
                }
                .cancelbtn {
                   width: 100%;
                }
            }
            
    </style>   
</head>

<body>
    <div class="container center" style="margin-top: 20px; margin-bottom: 20px">
            <img style="max-height:150px;" src="images/logo_black_small.png">
        </div>

        <div class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="glyphicon glyphicon-menu-hamburger" style="font-size: 1.2em"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Home</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav center">
                        <li><a href="gallerie.html">Gallerie</a></li>
                        <li><a href="preisliste.html">Preisliste</a></li>
                        <li><a href="aktuelles.html">Aktuelles</a></li>
                        <li><a href="kontakt.html">Kontakt</a></li>
                        <li><a href="terminvereinbarung.php">Terminvereinbarung</a></li>
                        <li><a href="frisur_konfigurator.html">Frisur Konfigurator</a></li>
                        <li><a href="registrieren.html">Registrieren</a></li>
                        <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
                    </ul>
                </div>
            </div>
        </div>
    
    <div id="id01" class="modal">
              <form class="modal-content animate" action="/action_page.php">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <img src="img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                  <label><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>

                  <label><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>

                  <button type="submit">Login</button>
                  <input type="checkbox" checked="checked"> Remember me
                </div>

                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
              </form>
        </div>

        <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>

    <div class="container">
        <form class="form" role="form" id="validationForm" method="post">
            <div class="form-group marginTop">
                <label for="name">* Name</label>
                <input name="name" id="name" class="form-control" placeholder="Beispiel: Max Mustermann" />
                <span id="errorName" class="error"></span>
            </div>
            
            <div class="form-group">
                <label for="email">* Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Beispiel: mustermann@gmail.com" />
                <span id="errorEmail" class="error"></span>
            </div>

            <div class="form-group">
                <label for="phone">Telefonnummer</label>
                <input name="phone" id="phone" class="form-control" placeholder="Beispiel: +43069912345678" />
                <span id="errorPhone" class="error"></span>
            </div>

            <div class="form-group">
                <label for="comment">* Kommentar</label>
                <textarea name="comment" id="comment" class="form-control"></textarea>
                <span id="errorComment" class="error"></span>
            </div>

            <div id="le-alert" class="alert alert-success fade">
                <button href="#" type="button" class="close">&times;</button>
                <p><strong>Email wurde erfolgreich gesendet!</strong></p>
            </div>

            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-envelope"></span>    senden   
            </button>
        </form>
        <p style="font-size: 1.3em; margin-top: 5px; margin-bot: 0px;">* Pflichtfeld</p>
        <p style="font-size: 1.3em; margin-top: 2px; margin-bot: 2px;"> Bitte beachten Sie, dass die Termine nur mit einer Rückmeldung per
            Email (oder Telefon falls angegeben) gültig ist.</p>
    </div>
    
    <?php
        //Import PHPMailer classes into the global namespace
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
    
        require 'vendor/autoload.php';
        
        if($_POST["name"])
        {
            if($_POST["phone"])
            {
                $number = "Telefonnummer: ".$_POST["phone"]."<br /><br />";
            }
            $mail = new PHPMailer(true);
            try 
            {
                //Server settings
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.easyname.com';                    // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = '111889mail1';                      // SMTP username
                $mail->Password = '28051992';                         // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                
                //Recipients
                $mail->setFrom($_POST["email"], $_POST["name"]);
                $mail->addAddress('office@kammherein.at');
                
                //Content
                $mail->isHTML(true);
                $mail->Subject = 'Terminvereinbarung Webmail';
                $mail->Body    = $number.$_POST["comment"];
                $mail->AltBody = $number.$_POST["comment"];
    
                $mail->send();
                echo "<script language='javascript'> $('#le-alert').show(); </script>";
                echo "<script language='javascript'> $('#le-alert').addClass('in'); </script>";
            }
            catch (Exception $e) {}
         }
    ?>

    <script>
        $("#validationForm").submit(function(event) 
        {
            var error = false;
            
            if($("#name").val().length == 0)
            {
                error = true;
                $("#errorName").html("Geben sie ihre Namen ein!");
            }
            else
            {
                $("#errorName").html("");    
            }
            
            if(!isValidEmailAddress($("#email").val()))
            {
                error = true;
                $("#errorEmail").html("Ungültige Email Addresse!");
            }
            else
            {    
                $("#errorEmail").html("");
            }
            
            if($("#phone").val().length > 0)
            {
                if(!$.isNumeric($("#phone").val()))
                {
                    error = true;
                    $("#errorPhone").html("Geben sie eine gültige Telefonnummer an!");
                }
                else
                {
                    $("#errorPhone").html("");
                }
            }
            else
            {
                $("#errorPhone").html("");
            }

            if($("#comment").val().length == 0)
            {
                error = true;
                $("#errorComment").html("Geben sie die gewünschten Terminen ein!");
            }
            else
            {    
                $("#errorComment").html("");
            }
            
            if(error)
            {
                event.preventDefault();
            }
        });

        $('.close').click(function () 
        {
            $(this).parent().removeClass('in');
            $("#le-alert").hide();
        });
        
        //complex regex to find out if it is a valid email address
        function isValidEmailAddress(emailAddress) 
        {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        }
    </script>
    
    <div class="footer">
          <p>&copy; 2017 kammherein.at</p>
    </div>
</body>
</html>
