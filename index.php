<?php
$projects = array();

$projects['package'] = array('name' => 'Package', 'projects' => array());
$projects['frontend'] = array('name' => 'Front End', 'projects' => array());
$projects['linux'] = array('name' => 'Linux', 'projects' => array());

array_push($projects['package']['projects'], array('name' => 'Packagist (Composer)', 'url' => '/packagist/', 'about' => 'The PHP Package Repository'));
array_push($projects['package']['projects'], array('name' => 'PIP', 'url' => '/pip/', 'about' => 'Python Package Index'));
array_push($projects['package']['projects'], array('name' => 'NPM', 'url' => '/npm/', 'about' => 'Package Manager for JavaScript'));

array_push($projects['frontend']['projects'], array('name' => 'jQuery', 'url' => '/jquery/', 'about' => 'jQuery is a fast, small, and feature-rich JavaScript library'));
array_push($projects['frontend']['projects'], array('name' => 'Google Fonts', 'url' => '/googlefonts/', 'about' => 'GoogleFonts.com has all the most relevant and up-to-date Google Fonts news and information'));
array_push($projects['frontend']['projects'], array('name' => 'Google Hosted Libraries (Google AJAX)', 'url' => '/googleajax/', 'about' => 'Google Hosted Libraries (Google AJAX)'));
array_push($projects['frontend']['projects'], array('name' => 'Baidu TTS', 'url' => '/baidutts/', 'about' => 'Engine of text to audio from Baidu Fanyi'));
array_push($projects['frontend']['projects'], array('name' => 'Gravatar', 'url' => '/gravatar/', 'about' => 'Globally Recognized Avatar'));

array_push($projects['linux']['projects'], array('name' => 'Ubuntu', 'url' => '/ubuntu/', 'about' => 'Ubuntu is an open source software platform that runs everywhere from the smartphone, the tablet and the PC to the server and the cloud'));
array_push($projects['linux']['projects'], array('name' => 'Deepin', 'url' => '/deepin/', 'about' => '深度操作系统'));
?>
<?php
$site = array();
$site['title'] = '';
$site['keywords'] = '';
$site['description'] = '';
?>
<?php include_once('./include/header.php'); ?>
    <style>
        .navbar {
            border-bottom: none;
            margin-bottom: 0;
        }
        .table{
            margin-bottom: 0;
        }
    </style>
    <div class="container-fluid" style="padding:0;">
        <table class="table table-hover">
            <?php foreach ($projects as $project): ?>
                <tr class="active">
                    <th colspan="2">Mirrors of <?php echo $project['name']; ?></th>
                </tr>
                <?php foreach ($project['projects'] as $value): ?>
                    <tr>
                        <td>
                            <a target="_blank" href="<?php echo $value['url']; ?>"
                               title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>
                        </td>
                        <td>
                            <?php echo $value['about']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </table>
    </div>
<?php include_once('./include/footer.php'); ?>