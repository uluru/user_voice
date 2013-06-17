<?php
class UserVoice extends UserVoiceAppModel {

    public $name = 'UserVoice';
    public $useTable = false;

    public $validate = array(
        'message' => array(
            'notempty' => array(
                'rule'       => array('notempty'),
                'allowEmpty' => false,
                'required'   => true,
                'last'       => true,
                'message'    => 'ご入力ください',
            ),
        )
    );
}
