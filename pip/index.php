<?php
$site = array();
$site['title'] = 'Mirrors of PIP';
$site['keywords'] = 'Mirrors of PIP,';
$site['description'] = 'Mirrors of PIP. ';
?>
<?php include_once('../include/header.php'); ?>
    <div class="container-fluid">
        
        <div class="well">
            <h2>Mirrors of PIP</h2>
            <p>Python Package Index</p>
            <p>
                <a target="_blank" title="Website" href="https://pypi.python.org/pypi/pip/">Website</a> -
                <a target="_blank" title="Official" href="https://pypi.python.org/pypi/pip/">Official</a>
            </p>
        </div>

        <h3>Mirrors from Douban</h3>
<pre>
镜像地址：http://cdn.mirrors.shareany.com/pypi/
</pre>
        <p>方法一：手动指定镜像地址（注意后面带个simple）</p>
<pre>
pip install web.py -i http://cdn.mirrors.shareany.com/pypi/simple
</pre>
        <p>方法二：全局修改。修改<code>pip.conf</code>或<code>pip.ini</code>文件</p>
<pre>
[global]
index-url = http://cdn.mirrors.shareany.com/pypi/simple
</pre>

        <h3>Mirrors in Mainland China</h3>
        <p>
            <a target="_blank" title="Douban" href="https://pypi.doubanio.com/">Douban</a> -
            <a target="_blank" title="USTC" href="http://pypi.mirrors.ustc.edu.cn/">USTC</a>
        </p>

    </div>
<?php include_once('../include/footer.php'); ?>