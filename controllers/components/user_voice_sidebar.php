<?php

class UserVoiceSidebarComponent extends Object {

    public $settings = array(
        'css' => array(
            '/user_voice/css/uservoice.css',
        ),
        'javascript' => array(
            '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
            '/user_voice/js/jQuery.user_voice.js',
        ),
    );

    public function __construct($settings = array())
    {
        parent::__construct(array_merge($this->settings, (array)$settings));
    }

    public function beforeRender(&$controller)
    {
        if ($controller->name === 'UserVoice') {
            return;
        }
        $controller->helpers[] = 'UserVoice.UserVoice';

        $controller->set('userVoice.css', $this->settings['css']);
        $controller->set('userVoice.javascript', $this->settings['javascript']);
    }

}
