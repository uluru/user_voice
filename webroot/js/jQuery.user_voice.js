(function() {
    $(function() {

        var $userVoiceVoice = $('#uservoice_voice');
        var $userVoiceIframe = $('#uservoice_iframe');
        var $userVoiceHandle = $('#uservoice_handle');

        $userVoiceHandle.click(function() {
            if ($userVoiceIframe.css('display') !== 'none') {
                $userVoiceIframe.hide();
            }
            $userVoiceVoice.animate({
                width: "toggle"
            }, 'fast', function() {
                $userVoiceIframe.show();
            });
        });
    });
}).call(this);

