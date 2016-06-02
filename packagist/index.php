<?php
$site = array();
$site['title'] = 'Mirrors of Packagist (Composer)';
$site['keywords'] = 'Mirrors of Packagist (Composer),';
$site['description'] = 'Mirrors of Packagist (Composer). ';
?>
<?php include_once('../include/header.php'); ?>
    <div class="container-fluid">

        <div class="well">
            <h2>Mirrors of Packagist (Composer)</h2>
            <p>The PHP Package Repository</p>
            <p>
                <a target="_blank" title="Website" href="https://packagist.org/">Website</a> -
                <a target="_blank" title="Official" href="https://packagist.org/">Official</a>
            </p>
        </div>

        <h3>Mirrors from Composer中文网</h3>
        <p>方法一：修改全局配置</p>
<pre>
composer config -g repo.packagist composer http://packagist.cdn.mirrors.shareany.com
</pre>
        <p>方法二：项目根目录执行命令</p>
<pre>
composer config repo.packagist composer http://packagist.cdn.mirrors.shareany.com
</pre>
        <p>方法三：在<code>composer.json</code>的根节点中添加如下代码：</p>
<pre>
"repositories": {
    "packagist": {
        "type": "composer",
        "url": "http://packagist.cdn.mirrors.shareany.com"
    }
}
</pre>

        <h3>Mirrors in Mainland China</h3>
        <p><a target="_blank" title="Composer中文网" href="http://pkg.phpcomposer.com/">Composer中文网</a></p>

    </div>
<?php include_once('../include/footer.php'); ?>