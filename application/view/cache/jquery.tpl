{assign var="title" value="jQuery Mirrors - {$title}"}
{assign var="keywords" value="Mirrors of jQuery,"}
{assign var="description" value="Mirrors of jQuery. "}
{extends file="../base/base.tpl"}
{block name="body"}
    <div class="container-fluid">

        <div class="well">
            <h2>Mirrors of jQuery</h2>
            <p>jQuery is a fast, small, and feature-rich JavaScript library</p>
            <p>
                <a target="_blank" title="Website" href="http://jquery.com/">Website</a> -
                <a target="_blank" title="Official" href="http://code.jquery.com/">Official</a>
            </p>
        </div>

        <h3>Mirrors from Official</h3>
        <p>把获取的jQuery CDN地址中<code>code.jquery.com</code>替换成<code>cdn.mirrors.shareany.com/jquery</code></p>
        <p>例如，从Google Fonts获取的地址是：</p>
        <pre>
http://code.jquery.com/jquery-1.12.4.min.js
</pre>
        <p>替换后的地址就是：</p>
        <pre>
http://cdn.mirrors.shareany.com/jquery/jquery-1.12.4.min.js
</pre>

        <h3>Mirrors in Mainland China</h3>
        <p>
            <a target="_blank" title="Baidu" href="http://cdn.code.baidu.com/">Baidu</a> -
            <a target="_blank" title="360" href="http://libs.useso.com/js.php?path=jquery">360</a> -
            <a target="_blank" title="StaticFile" href="http://www.staticfile.net/jQuery/">StaticFile</a>
        </p>

        <h3>Other Mirrors</h3>
        <p>
            <a target="_blank" title="Google" href="https://developers.google.com/speed/libraries/#jquery">Google</a> -
            <a target="_blank" title="Microsoft" href="https://www.asp.net/ajax/cdn#jQuery_Releases_on_the_CDN_0">Microsoft</a> -
            <a target="_blank" title="CDNJS" href="https://cdnjs.com/libraries/jquery/">CDNJS</a>
        </p>

    </div>
{/block}