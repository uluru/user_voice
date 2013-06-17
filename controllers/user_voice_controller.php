<?php
/*
                  #   #   #     #   #   ####    #   #
                  #   #   #     #   #   #   #   #   #
                  #   #   #     #   #   ####    #   #
                  #   #   #     #   #   #   #   #   #
                   ###    ####   ###    #   #    ###

             Copyright 2012 ULURU.CO.,LTD. All Rights Reserved.

*/

/**
 * Inquiries Controller
 *
 * @package     UserVoicePlugin
 * @subpackage  Controller
 * @since       2012/12/08
 * @author      ANAZAWA Yasuhiro <y_anazawa@uluru.jp>
 * @version     -
 */
class UserVoiceController extends UserVoiceAppController
{
    public $name = 'UserVoice';
    public $components = array('Email', 'RequestHandler');
    public $uses = array('UserVoice.UserVoice');
    public $layout = 'user_voice';

    public function beforeFilter()
    {
        if (class_exists('Auth')) {
            $this->Auth->allow('*');
        }
    }

    public function index($controller = null, $action = null) {
        $this->pageTitle = __d('user_voice', 'ご意見・ご提案', true);

        if ($this->RequestHandler->isPost()) {
            $this->UserVoice->set($this->data);
            if ($this->UserVoice->validates()) {

                $this->data['UserVoice']['user_agent'] = env('HTTP_USER_AGENT');

                Configure::load('email');
                $emailSetting = Configure::read('UserVoice');

                $this->Email->from = $emailSetting['from'];
                $this->Email->to = $emailSetting['to'];
                $this->Email->subject = $emailSetting['subject'];
                $this->Email->sendAs = $emailSetting['sendAs'];
                $this->Email->template = $emailSetting['template'];
                $this->set('data', $this->data);
                $this->set('controller', $controller);
                $this->set('action', $action);
                $result = $this->Email->send();

                if ($result) {
                    $this->redirect(
                        array(
                            'action' => 'done'
                        )
                    );
                }

                $this->Session->setFlash(__d('user_voice', '送信に失敗しました。時間を置いてもう一度送信してください。'));
            }
        }
    }

    public function done()
    {
    }

}

/* vim: set et ts=4 sts=4 sw=4 fenc=utf-8 ff=unix : */
