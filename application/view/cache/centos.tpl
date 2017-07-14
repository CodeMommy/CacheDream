{assign var="title" value="CentOS Mirrors - {$title}"}
{assign var="keywords" value="Mirrors of CentOS,"}
{assign var="description" value="Mirrors of CentOS. "}
{extends file="../base/base.tpl"}
{block name="body"}
    <div class="container-fluid">

        <div class="well">
            <h2>Mirrors of CentOS</h2>
            <p>The CentOS Project is a community-driven free software effort focused on delivering a robust open source ecosystem</p>
            <p>
                <a target="_blank" title="Website" href="https://www.centos.org/">Website</a>
                <!--                --->
                <!--                <a target="_blank" title="Official" href="http://ftp.ubuntu.com/ubuntu/">Official</a>-->
            </p>
        </div>

        <h3>Mirrors from NetEase</h3>
        <p><a target="_blank" title="Website" href="http://cdn.mirrors.shareany.com/centos/">http://cdn.mirrors.shareany.com/centos/</a>
        </p>

        <h3>Mirrors in Mainland China</h3>
        <p>
            <a target="_blank" title="NetEase" href="http://mirrors.163.com/centos/">NetEase</a> -
            <a target="_blank" title="Sohu" href="http://mirrors.sohu.com/centos/">Sohu</a> -
            <a target="_blank" title="USTC" href="http://mirrors.ustc.edu.cn/centos/">USTC</a>
        </p>

        <h3>Other Mirrors</h3>
        <p><a target="_blank" title="Other Mirrors" href="https://www.centos.org/download/mirrors/">Other Mirrors</a></p>

    </div>
{/block}