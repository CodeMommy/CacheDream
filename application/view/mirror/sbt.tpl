{assign var="title" value="SBT Mirrors - "}
{assign var="keywords" value="Mirrors of SBT,"}
{assign var="description" value="Mirrors of SBT. "}
{extends file='../base/base.tpl'}
{block name=main}
    <div class="container-fluid">

        <div class="well">
            <h2>Mirrors of SBT</h2>
            <p>Simple Build Tool</p>
            <p>
                <a target="_blank" title="Website" href="http://www.scala-sbt.org/">Website</a> -
                <a target="_blank" title="Bintray" href="http://dl.bintray.com/content/sbt/sbt-plugin-releases/">Bintray</a> -
                <a target="_blank" title="Typesafe" href="https://dl.bintray.com/typesafe/ivy-releases/">Typesafe</a>
            </p>
        </div>

        <h3>Mirrors from Official</h3>
        <pre>
Bintray：<a href="http://cdn.mirrors.shareany.com/sbt-bintray/" target="_blank" title="SBT Bintray">http://cdn.mirrors.shareany.com/sbt-bintray/</a>
</pre>
        <pre>
Typesafe：<a href="http://cdn.mirrors.shareany.com/sbt-typesafe/" target="_blank" title="SBT Typesafe">http://cdn.mirrors.shareany.com/sbt-typesafe/</a>
</pre>

    </div>
{/block}