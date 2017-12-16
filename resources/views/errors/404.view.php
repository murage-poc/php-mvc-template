<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="404 Not Found Error">
    <meta name="author" content=<?php echo env("APP_AUTHOR") ?>/>
    <meta name="ROBOTS" content="NOSNIPPET"/>
    <title><?php echo env("APP_NAME") ?>404 Error page</title>
    <!--    Core Bootrsap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
        /* Error Page Inline Styles */
        body {
            padding-top: 40px;
        }
        /* Layout */
        .jumbotron {
            font-size: 21px;
            font-weight: 200;
            line-height: 2.1428571435;
            color: inherit;
            padding: 10px 0;
        }
        /* Everything but the jumbotron gets side spacing for mobile-first views */
        .body-content, {
            padding-left: 15px;
            padding-right: 15px;
        }
        /* Main marketing message and sign up button */
        .jumbotron {
            text-align: center;
            background-color: transparent;
        }
        .jumbotron {
            font-size: 21px;
            padding: 14px 24px;
        }
        /* Colors */
        .green {color:#5cb85c;}
        .red {color:#d9534f;}
    </style>
  
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/index.php">
                MIMIDOTS
            </a>
        </div>

    </div>
    <!-- /.container -->
</nav>

<!-- Error Page Content -->
<div class="container">
    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1><i class="fa fa-frown-o red"></i> 404 Not Found</h1>
        <p class="lead">We couldn't find what you're looking for</p>
        <p>
            <a  href="<?php echo env("APP_URL") ?>"
                 class="btn btn-default btn-lg">
            <span class="green">Take Me To The Homepage</span>
            </a>

        </p>
    </div>
</div>
<div class="container">
    <div class="body-content">
        <div class="row">
            <div class="col-md-6">
                <h2>What happened?</h2>
                <p class="lead">A 404 error status implies that the file or page that you're looking for could not be found.</p>
            </div>
            <div class="col-md-6">
                <h2>What can I do?</h2>
                <p>Please use your browser's back button and check that you're in the right place. If you need immediate assistance, please send us an email instead.</p>
                
            </div>
        </div>
    </div>
</div>
<!-- End Error Page Content -->

</body>
</html>
