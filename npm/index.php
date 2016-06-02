<?php
$site = array();
$site['title'] = 'NPM Mirrors';
$site['keywords'] = 'Mirrors of NPM,';
$site['description'] = 'Mirrors of NPM. ';
?>
<?php include_once('../include/header.php'); ?>
    <div class="container-fluid">
        
        <div class="well">
            <h2>Mirrors of NPM</h2>
            <p>Package Manager for JavaScript</p>
            <p>
                <a target="_blank" title="Website" href="https://www.npmjs.com/">Website</a> -
                <a target="_blank" title="Official" href="https://r.cnpmjs.org/">Official</a>
            </p>
        </div>

        <h3>Mirrors from Official</h3>
<pre>
镜像地址：http://cdn.mirrors.shareany.com/npm/
</pre>
        <p>方法一：手动指定镜像地址</p>
<pre>
npm install -g cnpm --registry=http://cdn.mirrors.shareany.com/npm
</pre>

        <h3>Mirrors in Mainland China</h3>
        <p>
            <a target="_blank" title="Taobao" href="https://npm.taobao.org/">Taobao</a>
        </p>

    </div>
<?php include_once('../include/footer.php'); ?>