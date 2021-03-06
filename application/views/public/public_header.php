<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bon Voyage</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?=link_tag('assets/css/bootstrap.min.css'); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic' rel='stylesheet' type='text/css'>
    <style>
        html,body{
            font-family: Lato,sans-serif;
            font-size: large !important;
            background-color: #FDF3E7;
        }
        a{
            font-size: large !important;
        }
        p{
            font-size: 18px;
            color: #3B3738;
            font-weight: 400;
        }
        .pagination li a {
            color: #FDF3E7;!important;
            background-color: #3B3738;!important;
        }
        .pagination li a:hover{
            background-color: #7E8F7C;!important;
            color: #FDF3E7;!important;
        }
        .pagination .active a{
            color: #FDF3E7;!important;
            background-color: #7E8F7C;!important;
            border-color: #3B3738;!important;
        }
        .pagination .active a:hover{
            background-color: #d6dcd6;!important;
            border-color: #d6dcd6;!important;
        }
        .jumbotron p{
            font-weight: 300;
        }
        .btn-default{
            background-color: #3B3738; !important;
            color: #FDF3E7; !important;
        }
        .btn-default:hover , .btn-default:focus{
            background-color: #C63D0F;!important;
            color: #ffffff;!important;
        }
        .btn-primary{
            background-color: #3B3738; !important;
            color: #FDF3E7; !important;
        }
        .btn-primary:hover , .btn-primary:focus{
            background-color: #7E8F7C;!important;
            color: #ffffff;!important;
        }
        input:focus{
            border-color: rgba(229, 103, 23, 0.8);!important;
            box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075) inset, 0 0 8px rgba(229, 103, 23, 0.6);!important;
            outline: 0 none;!important;
        }
        .form-horizontal .control-label{
            font-weight: 400;
        }
        .navbar-brand{
            font-size: 40px !important;
            margin: 10px;
        }
        .navbar-default{
            background-color: #C63D0F;
        }
        .navbar-default .navbar-brand {
            color: #FDF3E7;
        }
        .navbar-default .navbar-nav li a{
            color: #FDF3E7;
        }
        .form-control::-webkit-input-placeholder{
            color: #FDF3E7;
        }
        .form-control::-moz-placeholder{
            color: #FDF3E7;
        }
        .form-control:-ms-input-placeholder{
            color: #FDF3E7;
        }
        .form-control:-moz-placeholder{
            color: #FDF3E7;
        }
        textarea:focus, input:focus {
            box-shadow: 0 2px 0 #3B3738 !important;
            outline: 0 none !important;
        }
        #search_button:focus{
            outline: 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default" style="height: 100px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-uppercase" href="<?= base_url('user');?>"><span><img src='<?= base_url('assets/img/BonVoyageLogo.png');?>' style="height:85px;margin-top:-25px;" ></span> <span style="margin-top:9px;padding-right:5px;">Bon Voyage</span></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?= form_open('user/search',['class'=>'navbar-form navbar-left','role'=>'search']);?>

                <div class="form-group" style="margin-top: 25px;position: relative;">
                    <input type="text" name="query" class="form-control" style="color: #FDF3E7;!important;" placeholder="Search">
                    <button id="search_button" type="submit" style="position:absolute;bottom:4px;right:0px;ackground-color: #FDF3E7;background-color: transparent;border: none;">
                        <span>
                            <i class="fa fa-search" style="color: #FDF3E7;"></i>
                        </span>
                    </button>
                </div>
            <?= form_close(); ?>
            <?= form_error('query',"<p class='navbar-text' style='color: #FDF3E7;'>",'</p>');?>
            <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;margin-right: 30px;">
                <li style="margin-top:9px;">
                    <?= anchor('user','Home'); ?>
                </li>
                <li style="margin-top:9px;">
                    <?php if($this->session->userdata('user_id'))
                        echo anchor('admin/dashboard','Dashboard');
                    else
                    echo anchor('login/signUpForm','Sign Up'); ?>
                </li>
                <li style="margin-top:9px;">
                    <?php if($this->session->userdata('user_id'))
                       echo anchor('login/logout','Logout');
                        else
                            echo anchor('login','Login');
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>