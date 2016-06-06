<?php
$site = array();
$site['title'] = '';
$site['keywords'] = '';
$site['description'] = '';
?>
<?php $projects = include_once('./projects.php'); ?>
<?php include_once('./template/header.php'); ?>
    <link rel="stylesheet" href="<?php echo $static; ?>/style/index.css?V=<?php echo $staticVersion; ?>">
    <div class="container-fluid" style="padding:0;">
        <table class="table table-hover">
            <?php foreach ($projects as $key=>$project): ?>
                <tr class="active" id="<?php echo $key; ?>">
                    <th colspan="2"><?php echo $project['name']; ?></th>
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
<?php include_once('./template/footer.php'); ?>