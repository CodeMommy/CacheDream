<?php
$site = array();
$site['title'] = 'Baidu TTS Mirrors';
$site['keywords'] = 'Mirrors of Baidu TTS,';
$site['description'] = 'Mirrors of Baidu TTS. ';
?>
<?php include_once('../include/header.php'); ?>
    <div class="container-fluid">

        <div class="well">
            <h2>Mirrors of Baidu TTS</h2>
            <p>Engine of text to audio from Baidu Fanyi</p>
            <p>
                <a target="_blank" title="Website" href="https://www.baidu.com/">Website</a> -
                <a target="_blank" title="Official Chinese"
                   href="http://tts.baidu.com/text2audio?lan=zh&pid=101&ie=UTF-8&text=镜像">Official Chinese</a> -
                <a target="_blank" title="Official English"
                   href="http://tts.baidu.com/text2audio?lan=en&pid=101&ie=UTF-8&text=Mirrors">Official English</a>
            </p>
        </div>

        <h3>Mirrors from Official</h3>
<pre>
英文“Mirrors”的音频地址：http://cdn.mirrors.shareany.com/baiduttsen/Mirrors
</pre>
        <p>试听</p>
        <p>
            <audio src="http://cdn.mirrors.shareany.com/baiduttsen/Mirrors" controls="controls" preload="preload">
                您的浏览器不支持 audio 标签。
            </audio>
        </p>
<pre>
中文“镜像”的音频地址：http://cdn.mirrors.shareany.com/baiduttszh/镜像
</pre>

        <p>试听</p>
        <p>
            <audio src="http://cdn.mirrors.shareany.com/baiduttszh/镜像" controls="controls" preload="preload">
                您的浏览器不支持 audio 标签。
            </audio>
        </p>

    </div>
<?php include_once('../include/footer.php'); ?>