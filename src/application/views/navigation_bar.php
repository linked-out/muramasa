<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
    <style>

        body {
            min-height: 100vh;
            background: rgb(245, 245, 245);
        }

        .navbar {
            padding-left: 20%;
            padding-right: 20%;
            padding-top: 0.1px;
        }

        .linkedin-blue {
            background: #283e4a;
        }

        .linkedin-grey {
        }

        .navbar-item {
            padding: .05rem .75rem;
        }

        .card {
            margin-bottom: 20px;
        }

        .profile-pic {
            max-height: 1.45rem;
            display: block;
            border-radius: 50%;
            border: solid 1px white;
        }

        .profile-pic-lg {
            border-radius: 50%;
        }

        .fa-2-5 {
            margin-bottom: 5px;
        }

        .nav-active {
            border-bottom: solid white 5px;
        }

    </style>
</head>

<body>
    <nav class="navbar is-fixed-top linkedin-blue">
        <div class="navbar-brand">
            <a class="navbar-item" href="<?php echo base_url('home') ?>">
                <i class="is-white fab fa-linkedin fa-2x has-text-white"></i>
            </a>
        </div>

        <div id="" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item" href="https://bulma.io/">
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" type="text" placeholder="Search">
                        <span class="icon is-small is-left">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="nav-active navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="has-text-white" href="<?php echo base_url('home') ?>">
                                <i class="fas fa-home fa-2-5" style="display: block; text-align: center"></i>
                                <small style="text-align: center">Home</small>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="has-text-grey-lighter" href="<?php echo base_url('network') ?>">
                                <i class="fas fa-user-friends fa-2-5" style="display: block; text-align: center"></i>
                                <small style="text-align: center">Jaringan Saya</small>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="has-text-grey-lighter" href="<?php echo base_url('notif') ?>">
                                <i class="fas fa-bell fa-2-5" style="display: block; text-align: center"></i>
                                <small style="text-align: center">Notifikasi</small>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="has-text-grey-lighter" href="<?php echo base_url('profile') ?>">
                                <img src="https://avatars1.githubusercontent.com/u/24368528?s=400&v=4" alt="" class="profile-pic">
                                <small style="text-align: center">Saya</small>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>

