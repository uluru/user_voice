ユーザーからのご意見ご提案が届きました。

[内容]
<?php echo $data['UserVoice']['message'] . "\n"; ?>

[ユーザー情報]
    User Agent  : <?php echo $data['UserVoice']['user_agent'] . "\n"; ?>
    Controller  : <?php echo $controller . "\n"; ?>
    Action      : <?php echo $action . "\n"; ?>
    日時        : <?php echo date('Y-m-d H:i:s'); ?>
