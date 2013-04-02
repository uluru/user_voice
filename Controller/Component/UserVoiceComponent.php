<?php

class UserVoiceComponent extends Component {

    public $settings = array(
        'css' => array(
            'UserVoice.uservoice.css',
        ),
        'javascript' => array(
            '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
            'UserVoice.jQuery.user_voice.js',
        ),
    );

    public function __construct(ComponentCollection $collection, $settings = array())
    {
        parent::__construct($collection, array_merge($this->settings, (array)$settings));
    }

    public function beforeRender(Controller $controller)
    {
        if ($controller->name === 'UserVoice') {
            return;
        }
        $controller->helpers[] = 'UserVoice.UserVoice';

        $controller->set('userVoice.css', $this->settings['css']);
        $controller->set('userVoice.javascript', $this->settings['javascript']);
    }

}
