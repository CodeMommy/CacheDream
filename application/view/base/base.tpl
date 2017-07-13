<!DOCTYPE html>
<html>
<head>
    <title>{$title}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeMommy.com">
    <meta name="keywords" content="{$keywords}Mirrors,CacheDream">
    <meta name="description"
          content="{$description}CacheDream is an open source project that provide mirrors service for developers.">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="{$static}/icon/favicon.ico">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$static}/style/theme.css">
</head>

<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{$root}" title="CacheDream">
                <img alt="CacheDream" src="{$static}/picture/logo.png"
                     style="width:32px; height:32px; margin-top: -6px;">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{$root}" title="CacheDream">CacheDream</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!--                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                <li><a href="{$root}#package">Package Repository <span class="sr-only">(current)</span></a></li>
                <li><a href="{$root}#frontend">Front End <span class="sr-only">(current)</span></a></li>
                <li><a href="{$root}#linux">Linux <span class="sr-only">(current)</span></a></li>
                <li><a href="{$root}#link">Other Hosting <span class="sr-only">(current)</span></a></li>
                <!--            <li><a href="#">Link</a></li>-->
                <!--            <li class="dropdown">-->
                <!--            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                <!--            <ul class="dropdown-menu">-->
                <!--            <li><a href="#">Action</a></li>-->
                <!--            <li><a href="#">Another action</a></li>-->
                <!--            <li><a href="#">Something else here</a></li>-->
                <!--            <li role="separator" class="divider"></li>-->
                <!--            <li><a href="#">Separated link</a></li>-->
                <!--            <li role="separator" class="divider"></li>-->
                <!--            <li><a href="#">One more separated link</a></li>-->
                <!--            </ul>-->
                <!--            </li>-->
            </ul>
            <!--<form class="navbar-form navbar-left" role="search">-->
            <!--<div class="form-group">-->
            <!--<input type="text" class="form-control" placeholder="Search">-->
            <!--</div>-->
            <!--<button type="submit" class="btn btn-default">Submit</button>-->
            <!--</form>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{$root}about" target="_blank" title="About">About</a></li>
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
{block name=main}{/block}
<div>
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</div>
<div class="hide">
    <script type="text/javascript">
        var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cspan id='cnzz_stat_icon_3436819'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/stat.php%3Fid%3D3436819' type='text/javascript'%3E%3C/script%3E"));
    </script>
</div>
</body>
</html>