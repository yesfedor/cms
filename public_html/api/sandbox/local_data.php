<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>LocalData</title>
        <link rel="shortcut icon" href="/web/file/favicon/main/favicon.ico">

        <link rel="stylesheet" href="https://iny.su/web/vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://iny.su/web/vendor/css/mdb.min.css">
        <link rel="stylesheet" href="https://iny.su/web/css/common.css?version=8">
        <style>
        /* line 4, ../sass/_offline-theme-base.sass */
.offline-ui, .offline-ui *, .offline-ui:before, .offline-ui:after, .offline-ui *:before, .offline-ui *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

/* line 7, ../sass/_offline-theme-base.sass */
.offline-ui {
  display: none;
  position: fixed;
  background: white;
  z-index: 2000;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
}
/* line 17, ../sass/_offline-theme-base.sass */
.offline-ui .offline-ui-content:before {
  display: inline;
}
/* line 20, ../sass/_offline-theme-base.sass */
.offline-ui .offline-ui-retry {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  display: none;
}
/* line 24, ../sass/_offline-theme-base.sass */
.offline-ui .offline-ui-retry:before {
  display: inline;
}
/* line 29, ../sass/_offline-theme-base.sass */
.offline-ui.offline-ui-up.offline-ui-up-5s {
  display: block;
}
/* line 32, ../sass/_offline-theme-base.sass */
.offline-ui.offline-ui-down {
  display: block;
}
/* line 37, ../sass/_offline-theme-base.sass */
.offline-ui.offline-ui-down.offline-ui-waiting .offline-ui-retry {
  display: block;
}
/* line 42, ../sass/_offline-theme-base.sass */
.offline-ui.offline-ui-down.offline-ui-reconnect-failed-2s.offline-ui-waiting .offline-ui-retry {
  display: none;
}

@-webkit-keyframes offline-fadein {
  /* line 6, ../sass/_keyframes.sass */
  0% {
    opacity: 0;
  }

  /* line 8, ../sass/_keyframes.sass */
  100% {
    opacity: 1;
  }
}

@-moz-keyframes offline-fadein {
  /* line 6, ../sass/_keyframes.sass */
  0% {
    opacity: 0;
  }

  /* line 8, ../sass/_keyframes.sass */
  100% {
    opacity: 1;
  }
}

@-ms-keyframes offline-fadein {
  /* line 6, ../sass/_keyframes.sass */
  0% {
    opacity: 0;
  }

  /* line 8, ../sass/_keyframes.sass */
  100% {
    opacity: 1;
  }
}

@-o-keyframes offline-fadein {
  /* line 6, ../sass/_keyframes.sass */
  0% {
    opacity: 0;
  }

  /* line 8, ../sass/_keyframes.sass */
  100% {
    opacity: 1;
  }
}

@keyframes offline-fadein {
  /* line 6, ../sass/_keyframes.sass */
  0% {
    opacity: 0;
  }

  /* line 8, ../sass/_keyframes.sass */
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes offline-fadeout-and-hide {
  /* line 20, ../sass/_keyframes.sass */
  0% {
    opacity: 1;
    display: block;
  }

  /* line 23, ../sass/_keyframes.sass */
  99% {
    opacity: 0;
    display: block;
  }

  /* line 26, ../sass/_keyframes.sass */
  100% {
    opacity: 0;
    display: none;
  }
}

@-moz-keyframes offline-fadeout-and-hide {
  /* line 20, ../sass/_keyframes.sass */
  0% {
    opacity: 1;
    display: block;
  }

  /* line 23, ../sass/_keyframes.sass */
  99% {
    opacity: 0;
    display: block;
  }

  /* line 26, ../sass/_keyframes.sass */
  100% {
    opacity: 0;
    display: none;
  }
}

@-ms-keyframes offline-fadeout-and-hide {
  /* line 20, ../sass/_keyframes.sass */
  0% {
    opacity: 1;
    display: block;
  }

  /* line 23, ../sass/_keyframes.sass */
  99% {
    opacity: 0;
    display: block;
  }

  /* line 26, ../sass/_keyframes.sass */
  100% {
    opacity: 0;
    display: none;
  }
}

@-o-keyframes offline-fadeout-and-hide {
  /* line 20, ../sass/_keyframes.sass */
  0% {
    opacity: 1;
    display: block;
  }

  /* line 23, ../sass/_keyframes.sass */
  99% {
    opacity: 0;
    display: block;
  }

  /* line 26, ../sass/_keyframes.sass */
  100% {
    opacity: 0;
    display: none;
  }
}

@keyframes offline-fadeout-and-hide {
  /* line 20, ../sass/_keyframes.sass */
  0% {
    opacity: 1;
    display: block;
  }

  /* line 23, ../sass/_keyframes.sass */
  99% {
    opacity: 0;
    display: block;
  }

  /* line 26, ../sass/_keyframes.sass */
  100% {
    opacity: 0;
    display: none;
  }
}

@-webkit-keyframes offline-rotation {
  /* line 64, ../sass/_keyframes.sass */
  0% {
    transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
  }

  /* line 66, ../sass/_keyframes.sass */
  100% {
    transform: rotate(359deg);
    -webkit-transform: rotate(359deg);
    -moz-transform: rotate(359deg);
    -ms-transform: rotate(359deg);
    -o-transform: rotate(359deg);
  }
}

@-moz-keyframes offline-rotation {
  /* line 64, ../sass/_keyframes.sass */
  0% {
    transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
  }

  /* line 66, ../sass/_keyframes.sass */
  100% {
    transform: rotate(359deg);
    -webkit-transform: rotate(359deg);
    -moz-transform: rotate(359deg);
    -ms-transform: rotate(359deg);
    -o-transform: rotate(359deg);
  }
}

@-ms-keyframes offline-rotation {
  /* line 64, ../sass/_keyframes.sass */
  0% {
    transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
  }

  /* line 66, ../sass/_keyframes.sass */
  100% {
    transform: rotate(359deg);
    -webkit-transform: rotate(359deg);
    -moz-transform: rotate(359deg);
    -ms-transform: rotate(359deg);
    -o-transform: rotate(359deg);
  }
}

@-o-keyframes offline-rotation {
  /* line 64, ../sass/_keyframes.sass */
  0% {
    transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
  }

  /* line 66, ../sass/_keyframes.sass */
  100% {
    transform: rotate(359deg);
    -webkit-transform: rotate(359deg);
    -moz-transform: rotate(359deg);
    -ms-transform: rotate(359deg);
    -o-transform: rotate(359deg);
  }
}

@keyframes offline-rotation {
  /* line 64, ../sass/_keyframes.sass */
  0% {
    transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
  }

  /* line 66, ../sass/_keyframes.sass */
  100% {
    transform: rotate(359deg);
    -webkit-transform: rotate(359deg);
    -moz-transform: rotate(359deg);
    -ms-transform: rotate(359deg);
    -o-transform: rotate(359deg);
  }
}

/* line 21, ../sass/offline-theme-default.sass */
.offline-ui {
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
  font-family: "Helvetica Neue", sans-serif;
  padding: 1em;
  top: 1em;
  width: 38em;
  max-width: 100%;
  overflow: hidden;
}
@media (max-width: 38em) {
  /* line 21, ../sass/offline-theme-default.sass */
  .offline-ui {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
    border-radius: 0;
    top: 0;
  }
}
/* line 34, ../sass/offline-theme-default.sass */
.offline-ui .offline-ui-content:before {
  line-height: 1.25em;
}
/* line 37, ../sass/offline-theme-default.sass */
.offline-ui .offline-ui-retry {
  position: absolute;
  right: 3em;
  top: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.1);
  text-decoration: none;
  color: inherit;
  line-height: 3.5em;
  height: 3.5em;
  margin: auto;
  padding: 0 1em;
}
/* line 50, ../sass/offline-theme-default.sass */
.offline-ui.offline-ui-up {
  -webkit-animation: offline-fadeout-and-hide forwards 0.5s 2s;
  -moz-animation: offline-fadeout-and-hide forwards 0.5s 2s;
  -ms-animation: offline-fadeout-and-hide forwards 0.5s 2s;
  -o-animation: offline-fadeout-and-hide forwards 0.5s 2s;
  animation: offline-fadeout-and-hide forwards 0.5s 2s;
  -webkit-backface-visibility: hidden;
  background: #d6e9c6;
  color: #468847;
}
/* line 55, ../sass/offline-theme-default.sass */
.offline-ui.offline-ui-down {
  -webkit-animation: offline-fadein 0.5s;
  -moz-animation: offline-fadein 0.5s;
  -ms-animation: offline-fadein 0.5s;
  -o-animation: offline-fadein 0.5s;
  animation: offline-fadein 0.5s;
  -webkit-backface-visibility: hidden;
  background: #ec8787;
  color: #551313;
}
/* line 60, ../sass/offline-theme-default.sass */
.offline-ui.offline-ui-down.offline-ui-connecting, .offline-ui.offline-ui-down.offline-ui-waiting {
  background: #f8ecad;
  color: #7c6d1f;
  padding-right: 3em;
}
/* line 65, ../sass/offline-theme-default.sass */
.offline-ui.offline-ui-down.offline-ui-connecting:after, .offline-ui.offline-ui-down.offline-ui-waiting:after {
  -webkit-animation: offline-rotation 0.7s linear infinite;
  -moz-animation: offline-rotation 0.7s linear infinite;
  -ms-animation: offline-rotation 0.7s linear infinite;
  -o-animation: offline-rotation 0.7s linear infinite;
  animation: offline-rotation 0.7s linear infinite;
  -webkit-backface-visibility: hidden;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  content: " ";
  display: block;
  position: absolute;
  right: 1em;
  top: 0;
  bottom: 0;
  margin: auto;
  height: 1em;
  width: 1em;
  border: 2px solid rgba(0, 0, 0, 0);
  border-top-color: #7c6d1f;
  border-left-color: #7c6d1f;
  opacity: 0.7;
}
/* line 82, ../sass/offline-theme-default.sass */
.offline-ui.offline-ui-down.offline-ui-waiting {
  padding-right: 11em;
}
/* line 85, ../sass/offline-theme-default.sass */
.offline-ui.offline-ui-down.offline-ui-waiting.offline-ui-reconnect-failed-2s {
  padding-right: 0;
}
        </style>
    </head>
    <body>
        <app id="app">
            <header class="fixed-top">
                <nav class="navbar navbar-dark primary-color z-depth-0">
                    <div class="container">
                        <a class="navbar-brand" href="#">INY LocalData</a>
                    </div>
                </nav>
            </header>
            <main id="warp">
                <div class="container my-5">
                    <div class="row">
                        <div class="col-12 white border rounded border-primary text-center my-5 px-0 py-0">
                            <div class="row">
                                <div class="col-12 px-5">
                                    <h1 class="text-primary my-3 py-0">LocalData</h1>
                                </div>
                                <div class="col-12"><hr class="w-100 my-0 py-0 border-primary"></div>
                                <div id="warp-login" class="col-12 my-2 px-5 text-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="text-primary my-2">Авторизуйтесь</h3>
                                        </div>
                                        <div class="md-form md-outline col-10 offset-1 text-center">
                                            <input type="text" id="app-login" class="form-control">
                                            <label for="app-login" class="ml-3">Логин</label>
                                        </div>
                                        <div class="md-form md-outline col-10 offset-1 text-center">
                                            <input type="text" id="app-password" class="form-control">
                                            <label for="app-password" class="ml-3">Пароль</label>
                                        </div>
                                        <div class="col-10 offset-1 text-center">
                                            <button onclick="app.auth.login();" class="btn btn-rounded btn-primary">Войти</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="warp-board" class="col-12 px-5 text-center">
                                    <div class="col-12">
                                        <h3 class="text-primary my-3">С возвращением, Фёдор</h3>
                                        <hr class="w-100">
                                    </div>
                                    <div class="col-12 text-center">
                                        <h5 class="black-text my-3">
                                            <span class="d-block">Аккаунт от <a href="https://hosting.timeweb.ru" target="_blank" rel="noopener noreferrer">TimeWeb</a></span>
                                            <span class="d-block text-left">Логин: cc38255</span>
                                            <span class="d-block text-left">Пароль: qwe486982lFg</span>
                                            <hr class="w-100">
                                            <span class="d-block">Аккаунт от <a href="https://vh130.timeweb.ru/pma/index.php" target="_blank" rel="noopener noreferrer">MySQL</a></span>
                                            <span class="d-block text-left">Логин: cc38255_root</span>
                                            <span class="d-block text-left">Пароль: asd486982asd</span>
                                            <hr class="w-100">
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-12"><hr class="w-100 my-0 py-0 border-primary"></div>
                                <div class="col-12 my-2 px-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="page-footer font-small primary-color z-depth-0">
                <div class="footer-copyright text-center py-3">
                    © 2018 Copyright: <a target="_blank" href="https://iny.su/landings/yesfedor">INY.SU</a>
                </div>
            </footer>
        </app>

        <script>
(function(){var a,b,c,d,e,f,g;d=function(a,b){var c,d,e,f;e=[];for(d in b.prototype)try{f=b.prototype[d],null==a[d]&&"function"!=typeof f?e.push(a[d]=f):e.push(void 0)}catch(g){c=g}return e},a={},null==a.options&&(a.options={}),c={checks:{xhr:{url:function(){return"/favicon.ico?_="+Math.floor(1e9*Math.random())},timeout:5e3},image:{url:function(){return"/favicon.ico?_="+Math.floor(1e9*Math.random())}},active:"xhr"},checkOnLoad:!1,interceptRequests:!0,reconnect:!0},e=function(a,b){var c,d,e,f,g,h;for(c=a,h=b.split("."),d=e=0,f=h.length;f>e&&(g=h[d],c=c[g],"object"==typeof c);d=++e);return d===h.length-1?c:void 0},a.getOption=function(b){var d,f;return f=null!=(d=e(a.options,b))?d:e(c,b),"function"==typeof f?f():f},"function"==typeof window.addEventListener&&window.addEventListener("online",function(){return setTimeout(a.confirmUp,100)},!1),"function"==typeof window.addEventListener&&window.addEventListener("offline",function(){return a.confirmDown()},!1),a.state="up",a.markUp=function(){return a.trigger("confirmed-up"),"up"!==a.state?(a.state="up",a.trigger("up")):void 0},a.markDown=function(){return a.trigger("confirmed-down"),"down"!==a.state?(a.state="down",a.trigger("down")):void 0},f={},a.on=function(b,c,d){var e,g,h,i,j;if(g=b.split(" "),g.length>1){for(j=[],h=0,i=g.length;i>h;h++)e=g[h],j.push(a.on(e,c,d));return j}return null==f[b]&&(f[b]=[]),f[b].push([d,c])},a.off=function(a,b){var c,d,e,g,h;if(null!=f[a]){if(b){for(e=0,h=[];e<f[a].length;)g=f[a][e],d=g[0],c=g[1],c===b?h.push(f[a].splice(e,1)):h.push(e++);return h}return f[a]=[]}},a.trigger=function(a){var b,c,d,e,g,h,i;if(null!=f[a]){for(g=f[a],i=[],d=0,e=g.length;e>d;d++)h=g[d],b=h[0],c=h[1],i.push(c.call(b));return i}},b=function(a,b,c){var d,e,f,g,h;return h=function(){return a.status&&a.status<12e3?b():c()},null===a.onprogress?(d=a.onerror,a.onerror=function(){return c(),"function"==typeof d?d.apply(null,arguments):void 0},g=a.ontimeout,a.ontimeout=function(){return c(),"function"==typeof g?g.apply(null,arguments):void 0},e=a.onload,a.onload=function(){return h(),"function"==typeof e?e.apply(null,arguments):void 0}):(f=a.onreadystatechange,a.onreadystatechange=function(){return 4===a.readyState?h():0===a.readyState&&c(),"function"==typeof f?f.apply(null,arguments):void 0})},a.checks={},a.checks.xhr=function(){var c,d;d=new XMLHttpRequest,d.offline=!1,d.open("HEAD",a.getOption("checks.xhr.url"),!0),null!=d.timeout&&(d.timeout=a.getOption("checks.xhr.timeout")),b(d,a.markUp,a.markDown);try{d.send()}catch(e){c=e,a.markDown()}return d},a.checks.image=function(){var b;return b=document.createElement("img"),b.onerror=a.markDown,b.onload=a.markUp,void(b.src=a.getOption("checks.image.url"))},a.checks.down=a.markDown,a.checks.up=a.markUp,a.check=function(){return a.trigger("checking"),a.checks[a.getOption("checks.active")]()},a.confirmUp=a.confirmDown=a.check,a.onXHR=function(a){var b,c,e;return e=function(b,c){var d;return d=b.open,b.open=function(e,f,g,h,i){return a({type:e,url:f,async:g,flags:c,user:h,password:i,xhr:b}),d.apply(b,arguments)}},c=window.XMLHttpRequest,window.XMLHttpRequest=function(a){var b,d,f;return f=new c(a),e(f,a),d=f.setRequestHeader,f.headers={},f.setRequestHeader=function(a,b){return f.headers[a]=b,d.call(f,a,b)},b=f.overrideMimeType,f.overrideMimeType=function(a){return f.mimeType=a,b.call(f,a)},f},d(window.XMLHttpRequest,c),null!=window.XDomainRequest?(b=window.XDomainRequest,window.XDomainRequest=function(){var a;return a=new b,e(a),a},d(window.XDomainRequest,b)):void 0},g=function(){return a.getOption("interceptRequests")&&a.onXHR(function(c){var d;return d=c.xhr,d.offline!==!1?b(d,a.markUp,a.confirmDown):void 0}),a.getOption("checkOnLoad")?a.check():void 0},setTimeout(g,0),window.Offline=a}).call(this),function(){var a,b,c,d,e,f,g,h,i;if(!window.Offline)throw new Error("Offline Reconnect brought in without offline.js");d=Offline.reconnect={},f=null,e=function(){var a;return null!=d.state&&"inactive"!==d.state&&Offline.trigger("reconnect:stopped"),d.state="inactive",d.remaining=d.delay=null!=(a=Offline.getOption("reconnect.initialDelay"))?a:3},b=function(){var a,b;return a=null!=(b=Offline.getOption("reconnect.delay"))?b:Math.min(Math.ceil(1.5*d.delay),3600),d.remaining=d.delay=a},g=function(){return"connecting"!==d.state?(d.remaining-=1,Offline.trigger("reconnect:tick"),0===d.remaining?h():void 0):void 0},h=function(){return"waiting"===d.state?(Offline.trigger("reconnect:connecting"),d.state="connecting",Offline.check()):void 0},a=function(){return Offline.getOption("reconnect")?(e(),d.state="waiting",Offline.trigger("reconnect:started"),f=setInterval(g,1e3)):void 0},i=function(){return null!=f&&clearInterval(f),e()},c=function(){return Offline.getOption("reconnect")&&"connecting"===d.state?(Offline.trigger("reconnect:failure"),d.state="waiting",b()):void 0},d.tryNow=h,e(),Offline.on("down",a),Offline.on("confirmed-down",c),Offline.on("up",i)}.call(this),function(){var a,b,c,d,e,f;if(!window.Offline)throw new Error("Requests module brought in without offline.js");c=[],f=!1,d=function(a){return Offline.trigger("requests:capture"),"down"!==Offline.state&&(f=!0),c.push(a)},e=function(a){var b,c,d,e,f,g,h,i,j;j=a.xhr,g=a.url,f=a.type,h=a.user,d=a.password,b=a.body,j.abort(),j.open(f,g,!0,h,d),e=j.headers;for(c in e)i=e[c],j.setRequestHeader(c,i);return j.mimeType&&j.overrideMimeType(j.mimeType),j.send(b)},a=function(){return c=[]},b=function(){var b,d,f,g,h,i;for(Offline.trigger("requests:flush"),h={},b=0,f=c.length;f>b;b++)g=c[b],i=g.url.replace(/(\?|&)_=[0-9]+/,function(a,b){return"?"===b?b:""}),h[g.type.toUpperCase()+" - "+i]=g;for(d in h)g=h[d],e(g);return a()},setTimeout(function(){return Offline.getOption("requests")!==!1?(Offline.on("confirmed-up",function(){return f?(f=!1,a()):void 0}),Offline.on("up",b),Offline.on("down",function(){return f=!1}),Offline.onXHR(function(a){var b,c,e,f,g;return g=a.xhr,e=a.async,g.offline!==!1&&(f=function(){return d(a)},c=g.send,g.send=function(b){return a.body=b,c.apply(g,arguments)},e)?null===g.onprogress?(g.addEventListener("error",f,!1),g.addEventListener("timeout",f,!1)):(b=g.onreadystatechange,g.onreadystatechange=function(){return 0===g.readyState?f():4===g.readyState&&(0===g.status||g.status>=12e3)&&f(),"function"==typeof b?b.apply(null,arguments):void 0}):void 0}),Offline.requests={flush:b,clear:a}):void 0},0)}.call(this),function(){var a,b,c,d,e;if(!Offline)throw new Error("Offline simulate brought in without offline.js");for(d=["up","down"],b=0,c=d.length;c>b;b++)e=d[b],(document.querySelector("script[data-simulate='"+e+"']")||localStorage.OFFLINE_SIMULATE===e)&&(null==Offline.options&&(Offline.options={}),null==(a=Offline.options).checks&&(a.checks={}),Offline.options.checks.active=e)}.call(this),function(){var a,b,c,d,e,f,g,h,i,j,k,l,m;if(!window.Offline)throw new Error("Offline UI brought in without offline.js");b='<div class="offline-ui"><div class="offline-ui-content"></div></div>',a='<a href class="offline-ui-retry"></a>',f=function(a){var b;return b=document.createElement("div"),b.innerHTML=a,b.children[0]},g=e=null,d=function(a){return k(a),g.className+=" "+a},k=function(a){return g.className=g.className.replace(new RegExp("(^| )"+a.split(" ").join("|")+"( |$)","gi")," ")},i={},h=function(a,b){return d(a),null!=i[a]&&clearTimeout(i[a]),i[a]=setTimeout(function(){return k(a),delete i[a]},1e3*b)},m=function(a){var b,c,d,e;d={day:86400,hour:3600,minute:60,second:1};for(c in d)if(b=d[c],a>=b)return e=Math.floor(a/b),[e,c];return["now",""]},l=function(){var c,h;return g=f(b),document.body.appendChild(g),null!=Offline.reconnect&&Offline.getOption("reconnect")&&(g.appendChild(f(a)),c=g.querySelector(".offline-ui-retry"),h=function(a){return a.preventDefault(),Offline.reconnect.tryNow()},null!=c.addEventListener?c.addEventListener("click",h,!1):c.attachEvent("click",h)),d("offline-ui-"+Offline.state),e=g.querySelector(".offline-ui-content")},j=function(){return l(),Offline.on("up",function(){return k("offline-ui-down"),d("offline-ui-up"),h("offline-ui-up-2s",2),h("offline-ui-up-5s",5)}),Offline.on("down",function(){return k("offline-ui-up"),d("offline-ui-down"),h("offline-ui-down-2s",2),h("offline-ui-down-5s",5)}),Offline.on("reconnect:connecting",function(){return d("offline-ui-connecting"),k("offline-ui-waiting")}),Offline.on("reconnect:tick",function(){var a,b,c;return d("offline-ui-waiting"),k("offline-ui-connecting"),a=m(Offline.reconnect.remaining),b=a[0],c=a[1],e.setAttribute("data-retry-in-value",b),e.setAttribute("data-retry-in-unit",c)}),Offline.on("reconnect:stopped",function(){return k("offline-ui-connecting offline-ui-waiting"),e.setAttribute("data-retry-in-value",null),e.setAttribute("data-retry-in-unit",null)}),Offline.on("reconnect:failure",function(){return h("offline-ui-reconnect-failed-2s",2),h("offline-ui-reconnect-failed-5s",5)}),Offline.on("reconnect:success",function(){return h("offline-ui-reconnect-succeeded-2s",2),h("offline-ui-reconnect-succeeded-5s",5)})},"complete"===document.readyState?j():null!=document.addEventListener?document.addEventListener("DOMContentLoaded",j,!1):(c=document.onreadystatechange,document.onreadystatechange=function(){return"complete"===document.readyState&&j(),"function"==typeof c?c.apply(null,arguments):void 0})}.call(this);
        </script>
        <script src="https://iny.su/web/vendor/js/jquery.js"></script>
        <script src="https://iny.su/web/vendor/js/bootstrap.min.js"></script>
        <script src="https://iny.su/web/vendor/js/popper.min.js"></script>
        <script src="https://iny.su/web/vendor/js/icon.js"></script>
        <script src="https://iny.su/web/vendor/js/mdb.min.js"></script>
        <script>
            app = {
                init() {
                    // wrap
                    $('#warp-login').show()
                    $('#warp-board').hide()
                },
                auth: {
                    login() {
                        userLogin = $('#app-login').val()
                        userPassword = $('#app-password').val()

                        if (userLogin != "" && userPassword != "") {
                            if (userLogin == 'yesfedor') {
                                if (userPassword == 'qwerty') {
                                    $('#warp-login').hide()
                                    $('#warp-board').show()
                                    
                                    toastr.success('Успешно')
                                }
                            } else toastr.warning('Логин введен не верно')
                        } else toastr.warning('Заполните все поля')
                    }
                }
            }

            app.init()
        </script>
    </body>
</html>