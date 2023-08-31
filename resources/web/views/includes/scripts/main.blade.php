<script src={{ mix('assets/js/jquery.min.js') }}></script>
<script src={{ mix('assets/js/boostrap.min.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('assets/js/app.js') }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111548273-1"></script>
<script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "326edf0f-fb72-4eeb-a200-3ed1898d267a";
    (function() {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-111548273-1');
</script>
<script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 758280,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    $(document).ready(function() {
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
@include('web.include.scripts.maps')
