<?php

class UserVoiceComponent extends Component {

    public $css = array(
        'UserVoice.uservoice.css',
    );

    public $javascript = array(
        '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
        'UserVoice.jQuery.user_voice.js',
    );

    public function beforeRender(Controller $controller)
    {
        if ($controller->name === 'UserVoice') {
            return;
        }
        $controller->helpers[] = 'UserVoice.UserVoice';

        $controller->set('userVoice.css', $this->css);
        $controller->set('userVoice.javascript', $this->javascript);
    }

}
