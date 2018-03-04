/*
 * send verify sms
 *---------------------------
 * top lan <toplan710@gmail.com>
 * https://github.com/toplan/laravel-sms
 * --------------------------
 * Date 2015/06/08
 */
(function($){
    var phone_res = /^1[34578]\d{9}$/;  
    $.fn.sms = function(options) {
        var self = this;
        var btnOriginContent, timeId;
        var opts = $.extend(true, {}, $.fn.sms.defaults, options);
        self.on('click', function (e) {

            var phone = $('#login-mobile').val();
            if ($.trim(phone).length == 0) {
                $('.validate-info').css({'visibility':'visible'});
                $('.validate-info').html('<i class="tip-status tip-status--opinfo"></i>请输入手机号');
                return false;
            }

            if(phone_res.test(phone)==false){
                $('.validate-info').css({'visibility':'visible'});
                $('.validate-info').html('<i class="tip-status tip-status--opinfo"></i>手机号不正确');
                return false;
            }

            btnOriginContent = self.html() || self.val() || '';
            changeBtn(opts.language.sending, true);
            send();
        });

        function send() {
            var url = getUrl();
            var requestData = getRequestData();
            $.ajax({
                url     : url,
                type    : 'post',
                data    : requestData,
                success : function (data) {
                   if (data.success) {
                       timer(opts.interval);
                   } else {
                       changeBtn(btnOriginContent, false);
                       opts.notify.call(null, data.message, data.type);
                   }
                },
                error   : function(xhr, type){
                    changeBtn(btnOriginContent, false);
                    opts.notify.call(null, opts.language.failed, 'request_failed');
                }
            });
        }

        function getUrl() {
            return opts.requestUrl ||
              '/laravel-sms/' + (opts.voice ? 'voice-verify' : 'verify-code')
        }

        function getRequestData() {
            var requestData = { _token: opts.token || '' };
            var data = $.isPlainObject(opts.requestData) ? opts.requestData : {};
            $.each(data, function (key) {
                if (typeof data[key] === 'function') {
                    requestData[key] = data[key].call(requestData);
                } else {
                    requestData[key] = data[key];
                }
            });
            return requestData;
        }

        function timer(seconds) {
            var btnText = opts.language.resendable;
            btnText = typeof btnText === 'string' ? btnText : '';
            if (seconds < 0) {
                clearTimeout(timeId);
                changeBtn(btnOriginContent, false);
            } else {
                timeId = setTimeout(function() {
                    clearTimeout(timeId);
                    changeBtn(btnText.replace('{{seconds}}', (seconds--) + ''), true);
                    timer(seconds);
                }, 1000);
            }
        }

        function changeBtn(content, disabled) {
            self.html(content);
            self.val(content);
            self.prop('disabled', !!disabled);
        }
    };

    $.fn.sms.defaults = {
        token       : null,
        interval    : 180,
        voice       : false,
        requestUrl  : null,
        requestData : null,
        notify      : function (msg, type) {
            alert(msg);
        },
        language    : {
            sending    : '短信发送中...',
            failed     : '请求失败，请重试',
            resendable : '{{seconds}} 秒后再次发送'
        }
    };
})(window.jQuery || window.Zepto);
