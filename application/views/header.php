<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?php echo BT_TITLE ?></title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta property="language" content="en-US"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="keywords" content="<?php echo BT_KEYWORDS ?>"/>
        <meta name="description" content="<?php echo BT_DESCRIPTION ?>"/>
        <meta property="og:title" content="<?php echo BT_TITLE ?>"/>
        <meta property="og:description" content="<?php echo BT_DESCRIPTION ?>"/>
        <meta property="og:image" content="<?php echo BASE_URL ?>res/images/BRANDTALK.jpg"/>
        <link rel="icon" href="//images.gmanews.tv/v3/img/favicon.ico"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300|Open+Sans|Raleway:300|Roboto+Condensed:300" rel="stylesheet">
        <link rel="stylesheet" href="//aphrodite.gmanetwork.com/assets/revamp/css/build/widgets/header_style.css">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>res/css/brandtalk/brandtalk.css">
        <script src="<?php echo BASE_URL ?>res/js/libs/http.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>res/js/third_party/google_analytics.js" type="text/javascript"></script>
    
        <script type="text/javascript">
            var domain_name = "<?php echo DOMAIN_NAME ?>";
            var base_url = "<?php echo BASE_URL ?>";
            var is_live = "<?php echo IS_LIVE ?>";

            var a_t = new Date();

            var m_t = a_t.getMinutes();
            var h_t = a_t.getHours();
            var s_t = a_t.getSeconds();
            var n = s_t % 10;
            var base_url = "<?php echo BASE_URL ?>";
            var data_url = (n % 2 == 0 ? "<?php echo DATA_URL ?>" : "<?php echo DATA2_URL ?>");
        </script>
    </head>
    <body>

<div class="header-wrapper">
    <div class="portal-header-v2" data-mode="portal"></div>
    </div>
    <script>
        var BASE_URL = domain_name;
    </script>
    <style>
        .hdr-container{
            position: relative !important;
        }
        .header-wrapper{
            height: auto; 
        }
        .header-wrapper .hdr-top-wrapper {
            border-bottom-width: 3px;
        }
        .hdr-links{
                overflow: auto;
            position: absolute;
            width: 100%;
            left: -1px;
        }
    </style>
    <script src="//aphrodite.gmanetwork.com/assets/revamp/js/build/widgets/header.js" async></script>
        <div class="wrapper">
      <div class="container">
                <header>
                </header>