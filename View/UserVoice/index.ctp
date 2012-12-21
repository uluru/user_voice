<div id="content">
<p>
    ご意見をお聞かせください。
</p>
<?php

    echo $this->Form->create(null, array(
        'controller' => 'user_voice',
    ));

    echo $this->Form->input('UserVoice.message', array(
        'type'  => 'textarea',
        'label' => false,
    ));

    echo $this->Form->submit(__('送信', true), array('div' => 'btn_red'));
    echo $this->Form->end();
?>
</div>
