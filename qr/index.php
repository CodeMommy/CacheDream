<?php
$site = array();
$site['title'] = 'Mirrors of QR Generator';
$site['keywords'] = 'Mirrors of QR Generator,';
$site['description'] = 'Mirrors of QR Generator. ';
?>
<?php include_once('../include/header.php'); ?>
    <div class="container-fluid">
        
        <div class="well">
            <h2>Mirrors of QR Generator</h2>
            <p>QR Code Generator</p>
            <p>
<!--                <a target="_blank" title="Website" href="https://www.npmjs.com/">Website</a> --->
                <a target="_blank" title="Official" href="http://www.mirrors.mom/interface/qr/">Official</a>
            </p>
        </div>

        <h3>Mirrors from Official</h3>
<pre>
镜像地址：http://cdn.mirrors.shareany.com/qr/
</pre>
        <p>例如</p>
<pre>
http://cdn.mirrors.shareany.com/qr/?w=300&h=300&t=http://www.mirrors.mom
</pre>
        <p>生成的二维码：</p>
        <p><img src="http://cdn.mirrors.shareany.com/qr/?w=300&h=300&t=http://www.mirrors.mom" class="img-responsive img-thumbnail" alt="生成的二维码"></p>

    </div>
<?php include_once('../include/footer.php'); ?>