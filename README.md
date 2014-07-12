user_voice
==========

CakePHP(2.x) user_voice plugin.

Setup
------

app/Config/bootstrap.php

    CakePlugin::load('UserVoice');

app/View/Layouts/default.ctp

    echo $this->Html->css('UserVoice.uservoice.css');
    echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
    echo $this->Html->script('UserVoice.jQuery.user_voice.js');
    echo $this->Html->scriptBlock(<<<_EOL_
    $(document).ready(function() {
        $.user_voice();
    });
    _EOL_
    );

app/Config/email.php

    $ cp user_voice/Config/email.php.sample app/Config/email.php

License
------
Licensed under The MIT License. Redistributions of files must retain the above copyright notice.

Copyright 2012 [ULURU.CO.,LTD.](http://www.uluru.biz/), https://github.com/uluru
