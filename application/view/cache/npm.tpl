{assign var="title" value="NPM Mirrors - {$title}"}
{assign var="keywords" value="Mirrors of NPM,"}
{assign var="description" value="Mirrors of NPM. "}
{extends file='../base/base.tpl'}
{block name=main}
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
npm install gulp --registry=http://cdn.mirrors.shareany.com/npm
</pre>

        <h3>Mirrors in Mainland China</h3>
        <p>
            <a target="_blank" title="Taobao" href="https://npm.taobao.org/">Taobao</a>
        </p>

    </div>
{/block}