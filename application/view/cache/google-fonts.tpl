{assign var="title" value="Google Fonts Mirrors - {$title}"}
{assign var="keywords" value="Mirrors of Google Fonts,"}
{assign var="description" value="Mirrors of Google Fonts. "}
{extends file="../base/base.tpl"}
{block name="body"}
    <div class="container-fluid">

        <div class="well">
            <h2>Mirrors of Google Fonts</h2>
            <p>GoogleFonts.com has all the most relevant and up-to-date Google Fonts news and information</p>
            <p>
                <a target="_blank" title="Website" href="https://www.google.com/fonts/">Website</a> -
                <a target="_blank" title="Official" href="http://fonts.googleapis.com/">Official</a>
            </p>
        </div>

        <h3>Mirrors from 360</h3>
        <p>把获取的字体地址中<code>fonts.googleapis.com</code>替换成<code>cdn.mirrors.shareany.com/google-fonts</code></p>
        <p>例如，从Google Fonts获取的地址是：</p>
        <pre>
https://fonts.googleapis.com/css?family=Montserrat
</pre>
        <p>替换后的地址就是：</p>
        <pre>
http://cdn.mirrors.shareany.com/google-fonts/css?family=Montserrat
</pre>

        <h3>Mirrors in Mainland China</h3>
        <p>
            <a target="_blank" title="360" href="http://libs.useso.com/">360</a>
        </p>

    </div>
{/block}