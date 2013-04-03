<?php

App::uses('AppHelper', 'View/Helper');

class UserVoiceHelper extends AppHelper {

    public $helpers = array('Html');

    public function afterLayout()
    {
        $view = $this->_View;
        $head = '';
        $bottom = '';
        if (isset($view->viewVars['userVoice.css']) &&
            !empty($view->viewVars['userVoice.css'])) {
            $head .= $this->Html->css($view->viewVars['userVoice.css']);
        }

        $sidebar = $view->element('UserVoice.user_voice_sidebar', array(
                'controller' => $view->request->controller,
                'action' => $view->request->action,
                'named' => $view->request->named,
                'pass' => $view->request->pass,
            ));
        $bottom .= $sidebar;

        if (isset($view->viewVars['userVoice.javascript'])) {
            foreach ($view->viewVars['userVoice.javascript'] as $script) {
                $bottom .= $this->Html->script($script);
            }
        }

        if (preg_match('#</head>#', $view->output)) {
            $view->output = preg_replace('#</head>#', $head . "\n</head>", $view->output, 1);
        }

        if (preg_match('#</body>#', $view->output)) {
            $view->output = preg_replace('#</body>#', $bottom . "\n</body>", $view->output, 1);
        }
    }
}
