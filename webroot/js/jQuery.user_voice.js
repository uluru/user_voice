(function ($) {
    jQuery.user_voice = function() {

        var domain = location.hostname;
        var framesrc = 'http://' + domain + '/user_voice/';

        $userVoiceDiv    = $('<div>').attr('id', 'user_voice');
        $userVoiceHandle = $('<div>').attr('id', 'user_voice_handle');
        $userVoiceHandle.append($('<p>').text('ご意見 ご提案'));

        $userVoiceHandle.click(function() {
            $("#user_voice_iframe").animate({
                width: "toggle"
            }, 'fast');
        });

        $userVoiceIframe = $('<iframe>').attr('src', framesrc)
                                        .attr('id', 'user_voice_iframe')
                                        .attr('scrolling', 'no');

        $userVoiceDiv.append($userVoiceHandle);
        $userVoiceDiv.append($userVoiceIframe);
        $('body').prepend($userVoiceDiv);

        $("#user_voice_iframe").hide();
    };

})(jQuery);

$(document).ready(function() { $.user_voice(); });
