<?php
$site = isset($site) ? $site : array();
$static = '/static';
$static = '//static.shareany.com/product/mirrors';
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        <?php
        if (!empty($site['title'])) {
            echo $site['title'] . ' - ';
        }
        ?>Mirrors.mom - an open source project that provide mirrors service for developers</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ShareAny.com">
    <meta name="keywords" content="<?php echo $site['keywords']; ?>Mirrors,Mirrors.mom">
    <meta name="description" content="<?php echo $site['description']; ?>Mirrors.mom is an open source project that provide mirrors service for developers.">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo $static; ?>/icon/favicon.ico">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $static; ?>/style/theme.css">
</head>

<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/" title="Mirrors.mom">
                <img alt="Mirrors.mom" src="<?php echo $static; ?>/picture/logo.png">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" title="Mirrors.mom">Mirrors.mom</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!--<ul class="nav navbar-nav">-->
            <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
            <!--<li><a href="#">Link</a></li>-->
            <!--<li class="dropdown">-->
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
            <!--<ul class="dropdown-menu">-->
            <!--<li><a href="#">Action</a></li>-->
            <!--<li><a href="#">Another action</a></li>-->
            <!--<li><a href="#">Something else here</a></li>-->
            <!--<li role="separator" class="divider"></li>-->
            <!--<li><a href="#">Separated link</a></li>-->
            <!--<li role="separator" class="divider"></li>-->
            <!--<li><a href="#">One more separated link</a></li>-->
            <!--</ul>-->
            <!--</li>-->
            <!--</ul>-->
            <!--<form class="navbar-form navbar-left" role="search">-->
            <!--<div class="form-group">-->
            <!--<input type="text" class="form-control" placeholder="Search">-->
            <!--</div>-->
            <!--<button type="submit" class="btn btn-default">Submit</button>-->
            <!--</form>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/about/" target="_blank" title="About">About</a></li>
                <!--<li class="dropdown">-->
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                <!--<ul class="dropdown-menu">-->
                <!--<li><a href="#">Action</a></li>-->
                <!--<li><a href="#">Another action</a></li>-->
                <!--<li><a href="#">Something else here</a></li>-->
                <!--<li role="separator" class="divider"></li>-->
                <!--<li><a href="#">Separated link</a></li>-->
                <!--</ul>-->
                <!--</li>-->
            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>