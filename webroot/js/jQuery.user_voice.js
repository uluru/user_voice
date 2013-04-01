(function() {
    $(function() {

        var $userVoiceIframe = $('#user_voice_iframe');
        var $userVoiceHandle = $('#user_voice_handle');
        $userVoiceHandle.click(function() {
            $userVoiceIframe.animate({
                width: "toggle"
            }, 'fast');
        });

        $("#user_voice_iframe").hide();
    });
}).call(this);

