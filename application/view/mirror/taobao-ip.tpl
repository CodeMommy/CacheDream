{assign var="title" value="Taobao IP Mirrors"}
{assign var="keywords" value="Mirrors of Taobao IP,"}
{assign var="description" value="Mirrors of Taobao IP. "}
{extends file='../base/base.tpl'}
{block name=main}
    <div class="container-fluid">

        <div class="well">
            <h2>Mirrors of Taobao IP</h2>
            <p>Taobao IP</p>
            <p>
                <a target="_blank" title="Website" href="http://ip.taobao.com/">Website</a> -
                <a target="_blank" title="Official" href="http://ip.taobao.com/service/getIpInfo.php?ip=58.213.35.85">Official</a>
            </p>
        </div>

        <h3>Mirrors from Official</h3>
        <p>替换后的地址就是：</p>
        <pre>
http://cdn.mirrors.shareany.com/taobao-ip/58.213.35.85
</pre>
        <p>接口结果是：</p>
        <pre>
{
    "code": 0,
    "data": {
        "country": "中国",
        "country_id": "CN",
        "area": "华东",
        "area_id": "300000",
        "region": "江苏省",
        "region_id": "320000",
        "city": "南京市",
        "city_id": "320100",
        "county": "",
        "county_id": "-1",
        "isp": "电信",
        "isp_id": "100017",
        "ip": "58.213.35.85"
    }
}
</pre>

    </div>
{/block}