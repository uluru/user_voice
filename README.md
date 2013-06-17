user_voice
==========

CakePHP user_voice plugin. For 1.3.x

Setup
------

app/app_controller.php

<?php
class AppController extends Controller {
    public $components = array('UserVoice.UserVoiceSidebar');
}

app/Config/email.php

    $ cp user_voice/config/email.php.sample app/config/email.php

License
------
Licensed under The MIT License. Redistributions of files must retain the above copyright notice.

Copyright 2012 [ULURU.CO.,LTD.](http://www.uluru.biz/), https://github.com/uluru
