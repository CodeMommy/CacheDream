{assign var="title" value="Gravatar Mirrors"}
{assign var="keywords" value="Mirrors of Gravatar,"}
{assign var="description" value="Mirrors of Gravatar. "}
{extends file='../base/base.tpl'}
{block name=main}
    <div class="container-fluid">

        <div class="well">
            <h2>Mirrors of Gravatar</h2>
            <p>Globally Recognized Avatar</p>
            <p>
                <a target="_blank" title="Website" href="http://www.gravatar.com/">Website</a> -
                <a target="_blank" title="Official" href="http://www.gravatar.com/">Official</a>
            </p>
        </div>

        <h3>Mirrors from Official</h3>
        <p>把获取的头像地址中<code>*.gravatar.com</code>替换成<code>cdn.mirrors.shareany.com/gravatar</code></p>
        <p>例如，原头像地址是：</p>
        <pre>
http://www.gravatar.com/avatar/86a041208140c5e9ad6a2dc72f59e30d
</pre>
        <p>替换后的地址就是：</p>
        <pre>
http://cdn.mirrors.shareany.com/gravatar/avatar/86a041208140c5e9ad6a2dc72f59e30d
</pre>
        <p>头像</p>
        <p><img src="http://cdn.mirrors.shareany.com/gravatar/avatar/86a041208140c5e9ad6a2dc72f59e30d" class="img-responsive img-thumbnail" alt="头像"></p>

        <h3>Mirrors in Mainland China</h3>
        <p>
            <a target="_blank" title="多说"
               href="http://gravatar.duoshuo.com/avatar/86a041208140c5e9ad6a2dc72f59e30d">多说</a> -
            <a target="_blank" title="V2EX"
               href="http://cdn.v2ex.com/gravatar/86a041208140c5e9ad6a2dc72f59e30d">V2EX</a>
        </p>

    </div>
{/block}