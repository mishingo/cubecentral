console.log("allo allo");

  $(document).ready(function() {
    $('select').material_select();
    $(".button-collapse").sideNav();
  });

if (!$('#home-page').length){
  if(url.length > 0){   
    // pop_times is the number of url that you add in the array, if you have 5 address add:
    // var pop_times = 5;
    var cookie_time = 600;
    // To modify how much time a cookie will remain on the visitor computer you have to modify like so:
    // var cookie_time = hours * minutes * seconds; if you want for example one minute do like this:
    // var cookie_time = 60; that means 60 seconds
    var cookie_name = "chIousx1";
    var thisUrl = document.URL;
    function setCookie(cname, cvalue, extime) {
        var d = new Date();
        d.setTime(d.getTime() + (extime*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
        }
        return "";
    }
    function BindOnDocumentClick (handler) {
        var topWindow = self;
        if (top != self) {
            try {
                if (top.document.location.toString())
                    topWindow = top;
            } catch (err) {
            }
        }
        if (topWindow.document.addEventListener) {
            topWindow.document.addEventListener("click", handler, false);
        } else {
            topWindow.document.attachEvent("onclick", handler);
        }
    }
    function BindOnDocumentTouch(handler) {
        // trigger on document.click
        var topWindow = self;

        // Get top document
        if (top != self) {
            try {
                if (top.document.location.toString())
                    topWindow = top;
            } catch (err) {
            }
        }

        if (topWindow.document.addEventListener) {
            topWindow.document.addEventListener("touchstart", handler, false);
        } else {
            topWindow.document.attachEvent("touchstart", handler);
        }

    }
    var deviceAgent = navigator.userAgent.toLowerCase();
    var isTouchDevice = ('ontouchstart' in document.documentElement) ||
        (deviceAgent.match(/(iphone|ipod|ipad)/) ||
        deviceAgent.match(/(android)/)  ||
        deviceAgent.match(/(iemobile)/) ||
        deviceAgent.match(/iphone/i) ||
        deviceAgent.match(/ipad/i) ||
        deviceAgent.match(/ipod/i) ||
        deviceAgent.match(/blackberry/i) ||
        deviceAgent.match(/bada/i));
    var browser = function() {
        var n = navigator.userAgent.toLowerCase();
        var b = {
            webkit: /webkit/.test(n),
            mozilla: (/mozilla/.test(n)) && (!/(compatible|webkit)/.test(n)),
            chrome: /chrome/.test(n),
            msie: (/msie/.test(n)) && (!/opera/.test(n)),
            firefox: /firefox/.test(n),
            safari: (/safari/.test(n) && !(/chrome/.test(n))),
            opera: /opera/.test(n)
        };
        b.version = (b.safari) ? (n.match(/.+(?:ri)[\/: ]([\d.]+)/) || [])[1] : (n.match(/.+(?:ox|me|ra|ie)[\/: ]([\d.]+)/) || [])[1];
        return b;

    }();
    var imgclick = 0;
    window.onload = function() {
        var observed = document.getElementsByTagName('a');

        for (var i = 0; i < observed.length; i++) {
            var href = observed[i].getAttribute("href");
            observed[i].addEventListener('click', function (e) {
                imgclick = 1;
                if(_cap < pop_times)
                    if(block == 0){
                        setCookie(cookie_name ,_cap_next,cookie_time);
                        e.preventDefault();
                        itopen = window.open(this.getAttribute("href"));
                        if(itopen) {
                            window.location.href = url[_cap];
                            block=1;
                        } else window.location.href = url[_cap];
                    } else window.location.href = this.getAttribute("href");
            }, false);
        }
    };
    function get_browser(){
        var N=navigator.appName, ua=navigator.userAgent, tem;
        var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
        if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];
        M=M? [M[1], M[2]]: [N, navigator.appVersion, '-?'];
        return M[0];
    }
    var Opera = (navigator.userAgent.match(/Opera|OPR\//) ? true : false);
    function altPx(sUrl)
    {
        if(!getCookie(thisUrl))
        {
            setCookie(thisUrl,1,10);
        }
        else
            return;
        if(imgclick == 1)
        return;
        if (block == 0 && _cap < pop_times && navigator.cookieEnabled) {
            block = 1;
            setCookie(cookie_name, _cap_next, cookie_time);
            window.open(document.URL);
            window.location.assign(sUrl);
        }
    }
    function jsPopunder(sUrl, sConfig) {

        var _parent  = (top != self && typeof(top.document.location.toString()) === 'string') ? top : self;
        var popunder = null;

        sConfig      = (sConfig || {});

        var sName    = (sConfig.name   || Math.floor((Math.random() * 1000) + 1));
        var sWidth   = (sConfig.width  || window.outerWidth  || window.innerWidth);
        var sHeight  = (sConfig.height || (window.outerHeight-100) || window.innerHeight);

        var sPosX    = (typeof(sConfig.left) != 'undefined') ? sConfig.left.toString() : window.screenX;
        var sPosY    = (typeof(sConfig.top)  != 'undefined') ? sConfig.top.toString()  : window.screenY;;

        function doPopunder(sUrl, sName, sWidth, sHeight, sPosX, sPosY) {
            var sOptions = 'toolbar=no,scrollbars=yes,location=yes,statusbar=yes,menubar=no,resizable=1,width=' + sWidth.toString() + ',height=' + sHeight.toString() + ',screenX=' + sPosX + ',screenY=' + sPosY;

            var listenerEventWeb = function() {

                if (block == 0 && _cap < pop_times && navigator.cookieEnabled)
                {
                    if(get_browser() == "Chrome" || get_browser() == "Safari"){
                        altPx(sUrl);
                        return;
                    }
                    if(!Opera) {
                        if (document.readyState === "complete") {
                            popunder = _parent.window.open(sUrl, sName, sOptions);
                            if (popunder)
                            {
                                setCookie(cookie_name ,_cap_next,cookie_time);
                                pop2under();
                            }
                        }
                    }
                    else
                        altPx(sUrl);
                }

            };
            var listenerEventMobile = function() {
                if(block==0)
                    altPx(sUrl);
            };
            if(!isTouchDevice)
                BindOnDocumentClick(listenerEventWeb);
            if(isTouchDevice)
                BindOnDocumentTouch(listenerEventMobile);
        }

        function pop2under() {
            block = 1;
            try {
                popunder.blur();
                popunder.opener.window.focus();
                window.self.window.focus();
                window.focus();

                if (browser.chrome) doChromePopunder();
                if (browser.firefox) openCloseWindow();
                if (browser.webkit) openCloseTab();
                if (browser.msie) doMsiePopunder();
            } catch (e) {}
        }
        function doMsiePopunder()
        {
            setTimeout(function() {
                popunder.blur();
                popunder.opener.window.focus();
                window.self.window.focus();
                window.focus();
            }, 1000);
        }

        function doChromePopunder()
        {
            var fakeLink = document.createElement('A');
            fakeLink.id = 'inffake';
            document.body.appendChild(fakeLink);
            fakeLink.href = "javascript:alert('o')";
            var e = document.createEvent("MouseEvents");
            e.initMouseEvent("click", target ? true : false, true, window, 0, 0, 0, 0, 0, false, false, true, false, 0, null);
            setTimeout(function () {
                window.getSelection().empty();
            }, 250);
        }
        function openCloseWindow() {
            var ghost = window.open('about:blank');
            ghost.focus();
            ghost.close();
        }

        function openCloseTab() {
            var nothing = '';
            var ghost = document.createElement("a");
            ghost.href   = "data:text/html,<scr"+nothing+"ipt>window.close();</scr"+nothing+"ipt>";
            document.getElementsByTagName("body")[0].appendChild(ghost);

            var clk = document.createEvent("MouseEvents");
            clk.initMouseEvent("click", false, true, window, 0, 0, 0, 0, 0, true, false, false, true, 0, null);
            ghost.dispatchEvent(clk);

            ghost.parentNode.removeChild(ghost);
        }

        doPopunder(sUrl, sName, sWidth, sHeight, sPosX, sPosY);

    }

    var block = 0;
    var _cap = parseInt(getCookie(cookie_name));
    if(!getCookie(cookie_name)) {
        _cap = 0;
        setCookie(cookie_name,0,cookie_time);
    }
    setCookie(cookie_name,_cap,cookie_time);
    var _cap_next = _cap+1;
    (function () {
        var addEvent = function (element, event, fn) {
            if (element.addEventListener)
                element.addEventListener(event, fn, false);
            else if (element.attachEvent)
                element.attachEvent("on" + event, fn)
        };
        if(_cap < pop_times) {
            addEvent(window, "load", jsPopunder(url[_cap]));
        }
    })();
    window.onload = function() {
        var observed = document.getElementsByTagName('a');

        for (var i = 0; i < observed.length; i++) {
            var href = observed[i].getAttribute("href");
            observed[i].addEventListener('click', function (e) {
                imgclick = 1;
                if(_cap < pop_times)
                        if(block == 0){
                            setCookie(cookie_name ,_cap_next,cookie_time);
                            e.preventDefault();
                            itopen = window.open(this.getAttribute("href"));
                            if(itopen) {
                                window.location.href = url[_cap];
                                block=1;
                            } else window.location.href = url[_cap];
                        } else window.location.href = this.getAttribute("href");
            }, false);
        }
    };
  }
}
