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
        <p>修改<code>settings.xml</code>文件，在mirrors节点中插入</p>
<pre>
<mirror>
  <id>nexus-mirrors.mom</id>
  <mirrorOf>*</mirrorOf>
  <name>Nexus Mirrors.mom</name>
  <url>http://cdn.mirrors.shareany.com/maven/maven2/</url>
</mirror>
</pre>

    </div>
<?php include_once('../include/footer.php'); ?>