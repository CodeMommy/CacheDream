{assign var="title" value="Maven Mirrors - "}
{assign var="keywords" value="Mirrors of Maven,"}
{assign var="description" value="Mirrors of Maven. "}
{extends file='../base/base.tpl'}
{block name=main}
    <div class="container-fluid">

        <div class="well">
            <h2>Mirrors of Maven</h2>
            <p>Apache Maven is a software project management and comprehension tool</p>
            <p>
                <a target="_blank" title="Website" href="http://maven.apache.org/">Website</a> -
                <a target="_blank" title="Official" href="http://repo2.maven.org/">Official</a>
            </p>
        </div>

        <h3>Mirrors from Official</h3>
        <pre>
<a target="_blank" href="http://cdn.mirrors.shareany.com/maven/">http://cdn.mirrors.shareany.com/maven/</a>
</pre>
        <p>使用方法：修改<code>settings.xml</code>文件：</p>
        <pre>
&lt;repository>
    &lt;id&gt;nexus-mirrors.mom&lt;/id&gt;
    &lt;name&gt;Nexus Mirrors.mom&lt;/name&gt;
    &lt;url&gt;http://cdn.mirrors.shareany.com/maven/&lt;/url&gt;
    &lt;releases&gt;
        &lt;enabled&gt;true&lt;/enabled&gt;
    &lt;/releases&gt;
    &lt;snapshots&gt;
        &lt;enabled&gt;false&lt;/enabled&gt;
    &lt;/snapshots&gt;
&lt;/repository&gt;
</pre>

        <h3>Mirrors in Mainland China</h3>
        <p><a target="_blank" title="Aliyun" href="http://maven.aliyun.com/nexus/content/groups/public/">Aliyun</a></p>

    </div>
{/block}