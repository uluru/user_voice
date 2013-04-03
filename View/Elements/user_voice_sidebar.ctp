<div id="uservoice_sidebar">
    <div id="uservoice_handle"><p>ご意見 ご提案</p></div>
    <div id="uservoice_voice">
        <iframe id="uservoice_iframe" src="<?php echo $this->Html->url(array(
        'controller' => 'user_voice',
        'action' => 'index/' . $controller . '/' . $action,
        'plugin' => 'user_voice')); ?>"></iframe>
    </div>
</div>