<div id="user_voice">
    <div id="user_voice_handle"><p>ご意見 ご提案</p></div>
    <iframe id="user_voice_iframe" src="<?php echo $this->Html->url(array(
    'controller' => 'user_voice',
    'action' => 'index/' . $controller . '/' . $action,
    'plugin' => 'user_voice')); ?>"></iframe>
</div>