<?php
$site = array();
$site['title'] = 'Maven Mirrors';
$site['keywords'] = 'Mirrors of Maven,';
$site['description'] = 'Mirrors of Maven. ';
?>
<?php include_once('../include/header.php'); ?>
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
        <p>修改<code>settings.xml</code>文件，在&lt;mirrors&gt;节点中插入</p>
<pre>
&lt;mirror&gt;
    &lt;id&gt;nexus-mirrors.mom&lt;/id&gt;
    &lt;mirrorOf&gt;*&lt;/mirrorOf&gt;
    &lt;name&gt;Nexus Mirrors.mom&lt;/name&gt;
    &lt;url&gt;http://cdn.mirrors.shareany.com/maven/maven2/&lt;/url&gt;
&lt;/mirror&gt;
</pre>

        <h3>Mirrors in Mainland China</h3>
        <p><a target="_blank" title="Aliyun" href="http://maven.aliyun.com/nexus/content/groups/public/">Aliyun</a></p>

    </div>
<?php include_once('../include/footer.php'); ?>