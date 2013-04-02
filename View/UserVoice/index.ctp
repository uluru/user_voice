<div id="uservoice_content">
    <p>
        <?php echo __d('user_voice', 'ご意見をお聞かせください。'); ?>
    </p>
    <?php

        echo $this->Form->create(null, array(
            'id' => 'uservoice_form',
            'controller' => 'user_voice',
        ));

        echo $this->Form->input('UserVoice.message', array(
            'type'  => 'textarea',
            'label' => false,
        ));

        echo $this->Form->submit(__d('user_voice', '送信', true));
        echo $this->Form->end();
    ?>
</div>
