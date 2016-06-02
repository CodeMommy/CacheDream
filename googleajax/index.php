<?php
$site = array();
$site['title'] = 'Google Hosted Libraries (Google AJAX) Mirrors';
$site['keywords'] = 'Mirrors of Google Hosted Libraries (Google AJAX),';
$site['description'] = 'Mirrors of Google Hosted Libraries (Google AJAX). ';
?>
<?php include_once('../-include/header.php'); ?>
    <div class="container-fluid">
        
        <div class="well">
            <h2>Mirrors of Google Hosted Libraries (Google AJAX)</h2>
            <p>The Google Hosted Libraries is a stable, reliable, high-speed, globally available content distribution network for the most popular, open-source JavaScript libraries</p>
            <p>
                <a target="_blank" title="Website" href="https://developers.google.com/speed/libraries/">Website</a> -
                <a target="_blank" title="Official" href="http://ajax.googleapis.com/">Official</a>
            </p>
        </div>

        <h3>Mirrors from Official</h3>
        <p>把获取的地址中<code>ajax.googleapis.com</code>替换成<code>cdn.mirrors.shareany.com/googleajax</code></p>
        <p>例如，从Google Hosted Libraries (Google AJAX)获取的地址是：</p>
<pre>
https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js
</pre>
        <p>替换后的地址就是：</p>
<pre>
http://cdn.mirrors.shareany.com/googleajax/ajax/libs/jquery/1.12.4/jquery.min.js
</pre>

        <h3>Mirrors in Mainland China</h3>
        <p>
            <a target="_blank" title="360" href="http://libs.useso.com/">360</a>
        </p>

    </div>
<?php include_once('../-include/footer.php'); ?>