<?php
// web/login.php
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Login</title>
    </head>
    <body>
        <div class="col-md-6 offset-md-3">
            <form method="post" action="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password:</label>
                    <input type="password" name="pass" id="pass" class="form-control">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" class="form-check-label">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-3">
                <a href="<?= 'index.php?page=user&action=register'; ?>">Register</a> |
                <a href="#">Forgot password?</a> |
                <a href="<?= 'index.php?page=' . DEFAULT_PAGE . '&action=' . DEFAULT_ACTION; ?>">Home page</a>
            </div>
        </div>
    </body>
</html>