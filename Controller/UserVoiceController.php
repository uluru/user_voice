<?php
/*
                  #   #   #     #   #   ####    #   #
                  #   #   #     #   #   #   #   #   #
                  #   #   #     #   #   ####    #   #
                  #   #   #     #   #   #   #   #   #
                   ###    ####   ###    #   #    ###

             Copyright 2012 ULURU.CO.,LTD. All Rights Reserved.

*/
App::uses('CakeEmail', 'Network/Email');

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
    public $components = array('Email');
    public $layout = 'UserVoice.user_voice';

    public function beforeFilter()
    {
        if (class_exists('Auth')) {
            $this->Auth->allow('*');
        }
    }

    public function index($controller = null, $action = null)
    {
        $this->pageTitle = __('ご意見・ご提案', true);

        if ($this->request->is('post')) {

            $this->UserVoiceModel = ClassRegistry::init('UserVoice.UserVoice');
            $this->UserVoiceModel->set($this->request->data);
            if ($this->UserVoiceModel->validates()) {

                // ユーザーエージェントをセットする
                $this->request->data['UserVoice']['user_agent'] = env('HTTP_USER_AGENT');

                // メールを送信する
                $email = new CakeEmail();
                $result = $email->config('user_voice')
                    ->viewVars(
                        array(
                            'data' => $this->request->data,
                            'controller' => $controller,
                            'action' => $action,
                        )
                    )
                    ->send();

                if ($result) {
                    $this->redirect(
                        array(
                            'action' => 'done'
                        )
                    );
                }

                $this->Session->setFlash(__('送信に失敗しました。時間を置いてもう一度送信してください。'));
            }
        }
    }

    public function done()
    {
    }

}

/* vim: set et ts=4 sts=4 sw=4 fenc=utf-8 ff=unix : */
