<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LinkedOut | Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"> 
    <style>
        * {
            text-align: center;
            color: #333;
        } 

        input, .input {
            width: 300px;
        }

        .container {
            margin-top: 100px;
        }

        .form {
            margin: 20px;
        }

        footer {
            border-top: solid #666 1px;
            padding: 10px;
            width: 100vw;
            text-align: center;
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container is-fluid">
        <h2 class="title is-6">LinkedOut <i class="has-text-link fa-2x fab fa-linkedin"></i></h2>
        <h3 class="title is-4">Welcome Back</h3>
        <small>Don't miss your next opportunity. Sign in to stay updated on your professional world.</small>
        <form method="POST" action="<?php echo base_url('login/try') ?>" class="form">
            <div class="field">
                <input name="email" required class="input is-medium" type="email" placeholder="Enter your email">
            </div>
            <div class="field">
                <input name="password" required class="input is-medium" type="password" placeholder="Enter your password">
            </div>
            <div class="field">
                <input class="is-link button is-medium" type="submit" value="Sign In">
            </div>
        </form>
        <a href="" class="is-link">Forgot Password?</a><br>
        <span>New to linkedOut? <a href="<?php echo base_url('register') ?>" class="is-link">Join Now</a></span>
    </div>

    <footer>
            <small>Aplikasi ini dikerjakan sendiri oleh <i class="fab fa-github"></i>  <a href="https://github.com/blinfoldking" class="is-link">blinfoldking</a> </small>
    </footer>
</body>
</html>