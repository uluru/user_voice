user_voice
==========

CakePHP user_voice plugin.

Setup
------

* bootstrap.php

    CakePlugin::load('UserVoice');

* app/Config/email.php

    cp user_voice/Config/email.php.sample app/Config/email.php

* app/View/Layouts/default.ctp

    echo $this->Html->css('UserVoice.uservoice.css');
    echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
    echo $this->Html->script('UserVoice.jQuery.user_voice.js');
    echo $this->Html->scriptBlock(<<<_EOL_
    $(document).ready(function() {
        $.user_voice();
    });
    _EOL_
    );

License
------
Licensed under The MIT License. Redistributions of files must retain the above copyright notice.

Copyright 2012 [ULURU.CO.,LTD.](http://www.uluru.biz/), https://github.com/uluru
