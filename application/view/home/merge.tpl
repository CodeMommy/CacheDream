{assign var="keywords" value="File Merge Tool,Merge,Compress,CDN,Cross Domain"}
{assign var="description" value="File Merge Tool提供静态文件的合并、压缩和CDN缓存服务。"}
{extends file="../base/base.tpl"}
{block name="body"}
    <div class="container-fluid">
        <div class="well">
            <h2>File Merge Tool</h2>
            <p>
                <span class="label label-primary">Merge</span>
                <span class="label label-primary">Compress</span>
                <span class="label label-primary">CDN</span>
                <span class="label label-primary">Cross Domain</span>
            </p>
            <p>提供静态文件的合并、压缩和CDN缓存服务</p>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Manual</div>
            <div class="panel-body">
                <p>通过传递<code>v</code>和<code>f</code>参数即可使用。</p>
                <p><code>v</code>参数代表缓存版本，您可以通过修改这个参数来实现更新缓存的目的。</p>
                <p><code>f</code>参数代表需要操作文件的URL，用英文分号<code>;</code>隔开。各URL可来自不同的域名，但一定要是相同类型的文件。</p>
                <p>具体使用方法请看如下URL即可明白：</p>
                <p>
                    <a target="_blank" title="GitHub"
                       href="http://cache.shareany.com/?v=1&f=http://www.cachedream.com/static/style/theme.css;http://www.cachedream.com/static/style/index.css">http://cache.shareany.com/?v=1&f=http://www.cachedream.com/static/style/theme.css;http://www.cachedream.com/static/style/index.css</a>
                </p>
                <p>
                    <a target="_blank" title="GitHub"
                       href="http://cache.shareany.com/?v=1&f=http://www.codemommy.com/static/vendor/jquery/1.12.4/jquery-1.12.4.min.js;http://www.codemommy.com/static/vendor/bootstrap/3.3.7/js/bootstrap.min.js">http://cache.shareany.com/?v=1&f=http://www.codemommy.com/static/vendor/jquery/1.12.4/jquery-1.12.4.min.js;http://www.codemommy.com/static/vendor/bootstrap/3.3.7/js/bootstrap.min.js</a>
                </p>
                <p>
                    <a target="_blank" title="GitHub"
                       href="http://cache.shareany.com/?v=1&f=http://www.cachedream.com/static/picture/logo.png">http://cache.shareany.com/?v=1&f=http://www.cachedream.com/static/picture/logo.png</a>
                </p>
            </div>
        </div>
        <div class="alert alert-danger" role="alert">本服务暂未开放，如需测试，请<a href="{$root}about" title="联系我们">联系我们</a>。</div>
    </div>
{/block}