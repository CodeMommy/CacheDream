{assign var="title" value="Ubuntu Mirrors - {$title}"}
{assign var="keywords" value="Mirrors of Ubuntu,"}
{assign var="description" value="Mirrors of Ubuntu. "}
{extends file='../base/base.tpl'}
{block name=main}
    <div class="container-fluid">

        <div class="well">
            <h2>Mirrors of Ubuntu</h2>
            <p>Ubuntu is an open source software platform that runs everywhere from the smartphone, the tablet and the
                PC to
                the server and the cloud</p>
            <p>
                <a target="_blank" title="Website" href="http://www.ubuntu.com/">Website</a> -
                <a target="_blank" title="Official" href="http://ftp.ubuntu.com/ubuntu/">Official</a>
            </p>
        </div>

        <h3>Mirrors from Official</h3>
        <p><a target="_blank" title="Website" href="http://cdn.mirrors.shareany.com/ubuntu/">http://cdn.mirrors.shareany.com/ubuntu/</a>
        </p>

        <h3>Mirrors in Mainland China</h3>
        <p>
            <a target="_blank" title="NetEase" href="http://mirrors.163.com/ubuntu/">NetEase</a> -
            <a target="_blank" title="Sohu" href="http://mirrors.sohu.com/ubuntu/">Sohu</a> -
            <a target="_blank" title="USTC" href="http://mirrors.ustc.edu.cn/ubuntu/">USTC</a>
        </p>

        <h3>Other Mirrors</h3>
        <p><a target="_blank" title="France" href="ftp://ftp.free.fr/mirrors/ftp.ubuntu.com/ubuntu/">France</a></p>

    </div>
{/block}