<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LinkedOut | Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"> 
    <style>
        * {
            text-align: center;
            color: #333;
        } 

        body {
            padding: 30px;
            margin: 0;
            height: 100vh;
            background: linear-gradient(45deg, rgba(32,124,229,1) 0%, rgba(73,155,234,1) 100%);
        }

        input, .input, .button {
            width: 300px;
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

        .logo, .fa-linkedin {
            color: white;
        }

        .form-container {
            padding: 10px;
            background: #eee;
            width: 350px;
        }
    </style>
</head>
<body>
    <div class="container is-fluid">
        <h2 class="logo title is-3">LinkedOut <i class="has-text-white fa-2x fab fa-linkedin"></i></h2>
        <h3 class="has-text-white title is-4">Make the most of your professional life</h3>
        <div class="form-container container">
            <form action="" class="form">
                <div class="field">
                    <input class="input" type="text" placeholder="First Name">
                </div>
                <div class="field">
                    <input class="input" type="text" placeholder="Last Name">
                </div>
                <div class="field">
                    <input class="input" type="email" placeholder="Email">
                </div>
                <div class="field">
                    <input class="input" type="password" placeholder="Password">
                </div>
                <div class="field">
                    <input class="is-link button" type="submit" value="Sign In">
                </div>
            </form>
            <span>Already on LinkedIn?<a href="" class="is-link">&nbsp; Sign In</a></span>
        </div>
    </div>

</body>
</html>