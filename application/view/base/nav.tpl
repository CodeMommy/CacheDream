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
                {*<li><a href="{$root}#package">Package Repository <span class="sr-only">(current)</span></a></li>*}
                {*<li><a href="{$root}#frontend">Front End <span class="sr-only">(current)</span></a></li>*}
                {*<li><a href="{$root}#linux">Linux <span class="sr-only">(current)</span></a></li>*}
                {*<li><a href="{$root}#link">Other Hosting <span class="sr-only">(current)</span></a></li>*}



                {*<li><a href="#">Link</a></li>*}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Cache <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{$root}#package">Package Repository</a></li>
                        <li><a href="{$root}#frontend">Front End</a></li>
                        <li><a href="{$root}#linux">Linux</a></li>
                        <li><a href="{$root}#link">Other Hosting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{$root}web">Web Static File</a></li>
                        <li><a href="{$root}merge">File Merge Tool</a></li>
                    </ul>
                </li>
                {if $isSearch eq true}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Mirror <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{$root}web/?path=Mirror/BaiduCDN">Baidu</a></li>
                            <li><a href="{$root}web/?path=Mirror/StaticFile.org">StaticFile.org</a></li>
                        </ul>
                    </li>
                {/if}


            </ul>
            {if $isSearch eq true}
                {*<form class="navbar-form navbar-left" role="search">*}
                <div class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Search</div>
                            <input type="text" class="form-control" placeholder="Keyword" id="search_input">
                        </div>
                    </div>
                </div>
                {*<button type="submit" class="btn btn-default">Search</button>*}
                {*</form>*}
            {/if}
            <!--<form class="navbar-form navbar-left" role="search">-->
            <!--<div class="form-group">-->
            <!--<input type="text" class="form-control" placeholder="Search">-->
            <!--</div>-->
            <!--<button type="submit" class="btn btn-default">Submit</button>-->
            <!--</form>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{$root}about" title="About">About</a></li>
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
    </div>
</nav>