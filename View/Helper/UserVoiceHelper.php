<?php

App::uses('AppHelper', 'View/Helper');

class UserVoiceHelper extends AppHelper {

    public $helpers = array('Html');

    public function afterLayout()
    {
        $view = $this->_View;
        $head = '';
        if (isset($view->viewVars['userVoice.css']) &&
            !empty($view->viewVars['userVoice.css'])) {
            $head .= $this->Html->css($view->viewVars['userVoice.css']);
        }

        if (isset($view->viewVars['userVoice.javascript'])) {
            foreach ($view->viewVars as $script) {
                $head .= $this->Html->script($script);
            }
        }

        if (preg_match('#</head>#', $view->output)) {
            $view->output = preg_replace('#</head>#', $head . "\n</head>", $view->output, 1);
        }
    }
}
