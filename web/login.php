<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/form-styles.css" type="text/css" rel="stylesheet" media="all">
        <title>Login</title>
      
         <style>
            
        </style>
        
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form" method="post" action="post">

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password:</label>
                        <input type="password" name="pass" id="pass" class="form-control"placeholder="Password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember" class="form-check-label">Remember me</label>
                    </div>
                </form>
                <button>login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
                </form>
            </div>
        </div>
    </body>
    <script>
        $('.message a').click(function () {
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>
</html>