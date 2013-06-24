<!DOCTYPE html>
<html lang="ja">
    <head>
        <?php echo $this->Html->charset(); ?>
        <?php echo $this->Html->css('UserVoice.uservoice.css'); ?>
    </head>
    <body id="uservoice">
    <?php
        echo $content_for_layout;
    ?>
    </body>
</html>
