<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootsnav.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
<script type="text/javascript" src="js/hamburger-menu.js"></script>
<script type="text/javascript" src="js/theme-vendors.min.js"></script>
<!-- revolution -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
<!-- setting -->
<script type="text/javascript" src="js/main.js"></script>
<script>
    function googleTranslate() {
        $(document).on('click', '.js-translate-box .js-translate-lang', function () {
            var $obj = $(this);
            var $holder = $obj.closest('.js-translate-box');

            var $base_lang = $holder.attr('data-main-transalte');
            var $translate_lang = $obj.attr('data-transalte');

            doGTranslate($base_lang, $translate_lang);
            $holder.find('.js-translate-selected').html($obj.html());
            $holder.find('.js-translate-list .active').removeClass('active');
            $obj.addClass('active');
        });
        function googleTranslateElementInit2() {
            new google.translate.TranslateElement({pageLanguage: 'sr', autoDisplay: false}, 'google_translate_element2');
        }
        function GTranslateFireEvent(element, event) {
            try {
                if (document.createEventObject) {
                    var evt = document.createEventObject();
                    element.fireEvent('on' + event, evt)
                } else {
                    var evt = document.createEvent('HTMLEvents');
                    evt.initEvent(event, true, true);
                    element.dispatchEvent(evt)
                }
            } catch (e) {
            }
        }
        function GTranslateGetCurrentLang() {
            var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
            return keyValue ? keyValue[2].split('/')[2] : null;
        }
        function doGTranslate($base_lang, $translate_lang) {
            if (!$base_lang || !$translate_lang) {
                console.log('No all translate data send!');
                return;
            }

            if (GTranslateGetCurrentLang() == null && $translate_lang == $base_lang)
                return;
            if (typeof ga != 'undefined') {
                ga('send', 'event', 'GTranslate', $translate_lang, location.hostname + location.pathname + location.search);
            } else {
                if (typeof _gaq != 'undefined')
                    _gaq.push(['_trackEvent', 'GTranslate', $translate_lang, location.hostname + location.pathname + location.search]);
            }
            var teCombo;
            var sel = document.getElementsByTagName('select');
            for (var i = 0; i < sel.length; i++) {
                if (/goog-te-combo/.test(sel[i].className)) {
                    teCombo = sel[i];
                    break;
                }
            }
            if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) {
                setTimeout(function () {
                    doGTranslate($base_lang, $translate_lang);
                }, 500);
            } else {
                teCombo.value = $translate_lang;
                GTranslateFireEvent(teCombo, 'change');
                GTranslateFireEvent(teCombo, 'change')
            }
        }
        // Glodal function
        window.googleTranslateElementInit2 = function () {
            googleTranslateElementInit2();
        }
    }
    $(document).ready(function () {
        googleTranslate();
    });
</script>