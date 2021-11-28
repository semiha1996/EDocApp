<?php
//
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
        <title>Register</title>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:300);
        </style>
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form" method="post" action="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="Name" class="form-label">First name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="pass" id="pass" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPass" class="form-label">Confirm password:</label>
                        <input type="password" name="confirm_pass" id="confirmPass" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone number:</label>
                        <input type="phone" name="phone" id="phone" class="form-control" placeholder="Phone number">
                    </div>
                    <div class="mb-3">
                        <label for="personal_info">About you:</label>
                        <textarea id="text" name="personal_info" rows="6" cols="50">
            Personal information...
                        </textarea>
                    </div>
                    <div class="mb-3">
                        Gender:
                        <input type="radio" name="sex" value="male"> Male<br>
                        <input type="radio" name="sex" value="female"> Female<br>
                    </div>
                    <div class="mb-3 form-check">
                        <label for="termsAndConditions" class="form-check-label">Agree with terms and conditions</label>
                        <input type="checkbox" name="t_and_t" id="termsAndConditions">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
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
