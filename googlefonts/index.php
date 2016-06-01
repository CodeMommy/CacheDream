<?php
$site = array();
$site['title'] = 'Mirrors of Google Fonts';
$site['keywords'] = 'Mirrors of Google Fonts,';
$site['description'] = 'Mirrors of Google Fonts. ';
?>
<?php include_once('../include/header.php'); ?>
    <div class="container-fluid">

        <h2>Mirrors of Google Fonts</h2>
        <p>GoogleFonts.com has all the most relevant and up-to-date Google Fonts news and information</p>
        <p>
            <a target="_blank" title="Website" href="https://www.google.com/fonts/">Website</a> -
            <a target="_blank" title="Official" href="http://fonts.googleapis.com/">Official</a>
        </p>

        <h3>Mirrors from 360</h3>
        <p>把获取的字体地址中<code>fonts.googleapis.com</code>替换成<code>cdn.mirrors.mom/googlefonts</code></p>
        <p>例如，从Google Fonts获取的地址是：</p>
<pre>
https://fonts.googleapis.com/css?family=Montserrat
</pre>
        <p>替换后的地址就是：</p>
<pre>
http://cdn.mirrors.mom/googlefonts/css?family=Montserrat
</pre>

        <h3>Mirrors in Mainland China</h3>
        <p>
            <a target="_blank" title="360" href="http://libs.useso.com/">360</a>
        </p>

    </div>
<?php include_once('../include/footer.php'); ?>