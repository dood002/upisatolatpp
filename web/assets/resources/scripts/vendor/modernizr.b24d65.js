/* Wed Dec 14 2022 12:54:39 GMT-0500 (Eastern Standard Time) */
/*! modernizr 3.12.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-applicationcache-arrow-audio-backgroundsize-borderimage-borderradius-boxshadow-canvas-canvastext-checked-cssanimations-csscolumns-cssgradients-cssreflections-csstransforms-csstransforms3d-csstransitions-details-flexbox-flexboxlegacy-fontface-generatedcontent-geolocation-hashchange-history-hsla-inlinesvg-input-inputtypes-json-localstorage-multiplebgs-notification-opacity-placeholder-postmessage-rgba-sessionstorage-smil-supports-svg-svgclippaths-target-template-textshadow-texttrackapi_track-time-video-webgl-websockets-websqldatabase-webworkers-addtest-fnbind-printshiv-setclasses-testprop !*/
!function(scriptGlobalObject,window,document,undefined){function is(e,t){return typeof e===t}function testRunner(){var e,t,n,r,o,i,a;for(var s in tests)if(tests.hasOwnProperty(s)){if(e=[],t=tests[s],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(r=is(t.fn,"function")?t.fn():t.fn,o=0;o<e.length;o++)i=e[o],a=i.split("."),1===a.length?Modernizr[a[0]]=r:(Modernizr[a[0]]&&(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean)||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=r),classes.push((r?"":"no-")+a.join("-"))}}function setClasses(e){var t=docElement.className,n=Modernizr._config.classPrefix||"";if(isSVG&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(e.length>0&&(t+=" "+n+e.join(" "+n)),isSVG?docElement.className.baseVal=t:docElement.className=t)}function addTest(e,t){if("object"==typeof e)for(var n in e)hasOwnProp(e,n)&&addTest(n,e[n]);else{e=e.toLowerCase();var r=e.split("."),o=Modernizr[r[0]];if(2===r.length&&(o=o[r[1]]),void 0!==o)return Modernizr;t="function"==typeof t?t():t,1===r.length?Modernizr[r[0]]=t:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=t),setClasses([(t&&!1!==t?"":"no-")+r.join("-")]),Modernizr._trigger(e,t)}return Modernizr}function contains(e,t){return!!~(""+e).indexOf(t)}function createElement(){return"function"!=typeof document.createElement?document.createElement(arguments[0]):isSVG?document.createElementNS.call(document,"http://www.w3.org/2000/svg",arguments[0]):document.createElement.apply(document,arguments)}function getBody(){var e=document.body;return e||(e=createElement(isSVG?"svg":"body"),e.fake=!0),e}function injectElementWithStyles(e,t,n,r){var o,i,a,s,d="modernizr",l=createElement("div"),c=getBody();if(parseInt(n,10))for(;n--;)a=createElement("div"),a.id=r?r[n]:d+(n+1),l.appendChild(a);return o=createElement("style"),o.type="text/css",o.id="s"+d,(c.fake?c:l).appendChild(o),c.appendChild(l),o.styleSheet?o.styleSheet.cssText=e:o.appendChild(document.createTextNode(e)),l.id=d,c.fake&&(c.style.background="",c.style.overflow="hidden",s=docElement.style.overflow,docElement.style.overflow="hidden",docElement.appendChild(c)),i=t(l,e),c.fake&&c.parentNode?(c.parentNode.removeChild(c),docElement.style.overflow=s,docElement.offsetHeight):l.parentNode.removeChild(l),!!i}function domToCSS(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function computedStyle(e,t,n){var r;if("getComputedStyle"in window){r=getComputedStyle.call(window,e,t);var o=window.console;if(null!==r)n&&(r=r.getPropertyValue(n));else if(o){var i=o.error?"error":"log";o[i].call(o,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else r=!t&&e.currentStyle&&e.currentStyle[n];return r}function nativeTestProps(e,t){var n=e.length;if("CSS"in window&&"supports"in window.CSS){for(;n--;)if(window.CSS.supports(domToCSS(e[n]),t))return!0;return!1}if("CSSSupportsRule"in window){for(var r=[];n--;)r.push("("+domToCSS(e[n])+":"+t+")");return r=r.join(" or "),injectElementWithStyles("@supports ("+r+") { #modernizr { position: absolute; } }",function(e){return"absolute"===computedStyle(e,null,"position")})}return undefined}function cssToDOM(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function testProps(e,t,n,r){function o(){a&&(delete mStyle.style,delete mStyle.modElem)}if(r=!is(r,"undefined")&&r,!is(n,"undefined")){var i=nativeTestProps(e,n);if(!is(i,"undefined"))return i}for(var a,s,d,l,c,u=["modernizr","tspan","samp"];!mStyle.style&&u.length;)a=!0,mStyle.modElem=createElement(u.shift()),mStyle.style=mStyle.modElem.style;for(d=e.length,s=0;s<d;s++)if(l=e[s],c=mStyle.style[l],contains(l,"-")&&(l=cssToDOM(l)),mStyle.style[l]!==undefined){if(r||is(n,"undefined"))return o(),"pfx"!==t||l;try{mStyle.style[l]=n}catch(e){}if(mStyle.style[l]!==c)return o(),"pfx"!==t||l}return o(),!1}function fnBind(e,t){return function(){return e.apply(t,arguments)}}function testDOMProps(e,t,n){var r;for(var o in e)if(e[o]in t)return!1===n?e[o]:(r=t[e[o]],is(r,"function")?fnBind(r,n||t):r);return!1}function testPropsAll(e,t,n,r,o){var i=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+cssomPrefixes.join(i+" ")+i).split(" ");return is(t,"string")||is(t,"undefined")?testProps(a,t,r,o):(a=(e+" "+domPrefixes.join(i+" ")+i).split(" "),testDOMProps(a,t,n))}function testAllProps(e,t,n){return testPropsAll(e,undefined,undefined,t,n)}var tests=[],ModernizrProto={_version:"3.12.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){tests.push({name:e,fn:t,options:n})},addAsyncTest:function(e){tests.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=ModernizrProto,Modernizr=new Modernizr;var classes=[],docElement=document.documentElement,isSVG="svg"===docElement.nodeName.toLowerCase(),hasOwnProp;!function(){var e={}.hasOwnProperty;hasOwnProp=is(e,"undefined")||is(e.call,"undefined")?function(e,t){return t in e&&is(e.constructor.prototype[t],"undefined")}:function(t,n){return e.call(t,n)}}(),ModernizrProto._l={},ModernizrProto.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},ModernizrProto._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e;for(e=0;e<n.length;e++)(0,n[e])(t)},0),delete this._l[e]}},Modernizr._q.push(function(){ModernizrProto.addTest=addTest});var html5;isSVG||function(e,t){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=E.elements;return"string"==typeof e?e.split(" "):e}function o(e,t){var n=E.elements;"string"!=typeof n&&(n=n.join(" ")),"string"!=typeof e&&(e=e.join(" ")),E.elements=n+" "+e,l(t)}function i(e){var t=T[e[z]];return t||(t={},M++,e[z]=M,T[M]=t),t}function a(e,n,r){if(n||(n=t),v)return n.createElement(e);r||(r=i(n));var o;return o=r.cache[e]?r.cache[e].cloneNode():w.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),!o.canHaveChildren||y.test(e)||o.tagUrn?o:r.frag.appendChild(o)}function s(e,n){if(e||(e=t),v)return e.createDocumentFragment();n=n||i(e);for(var o=n.frag.cloneNode(),a=0,s=r(),d=s.length;a<d;a++)o.createElement(s[a]);return o}function d(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return E.shivMethods?a(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/[\w\-:]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(E,t.frag)}function l(e){e||(e=t);var r=i(e);return!E.shivCSS||h||r.hasCSS||(r.hasCSS=!!n(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),v||d(e,r),e}function c(e){for(var t,n=e.getElementsByTagName("*"),o=n.length,i=RegExp("^(?:"+r().join("|")+")$","i"),a=[];o--;)t=n[o],i.test(t.nodeName)&&a.push(t.applyElement(u(t)));return a}function u(e){for(var t,n=e.attributes,r=n.length,o=e.ownerDocument.createElement(b+":"+e.nodeName);r--;)t=n[r],t.specified&&o.setAttribute(t.nodeName,t.nodeValue);return o.style.cssText=e.style.cssText,o}function p(e){for(var t,n=e.split("{"),o=n.length,i=RegExp("(^|[\\s,>+~])("+r().join("|")+")(?=[[\\s,>+~#.:]|$)","gi"),a="$1"+b+"\\:$2";o--;)t=n[o]=n[o].split("}"),t[t.length-1]=t[t.length-1].replace(i,a),n[o]=t.join("}");return n.join("{")}function m(e){for(var t=e.length;t--;)e[t].removeNode()}function f(e){function t(){clearTimeout(a._removeSheetTimer),r&&r.removeNode(!0),r=null}var r,o,a=i(e),s=e.namespaces,d=e.parentWindow;return!x||e.printShived?e:(void 0===s[b]&&s.add(b),d.attachEvent("onbeforeprint",function(){t();for(var i,a,s,d=e.styleSheets,l=[],u=d.length,m=Array(u);u--;)m[u]=d[u];for(;s=m.pop();)if(!s.disabled&&S.test(s.media)){try{i=s.imports,a=i.length}catch(e){a=0}for(u=0;u<a;u++)m.push(i[u]);try{l.push(s.cssText)}catch(e){}}l=p(l.reverse().join("")),o=c(e),r=n(e,l)}),d.attachEvent("onafterprint",function(){m(o),clearTimeout(a._removeSheetTimer),a._removeSheetTimer=setTimeout(t,500)}),e.printShived=!0,e)}var h,v,g=e.html5||{},y=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,w=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,z="_html5shiv",M=0,T={};!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",h="hidden"in e,v=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return void 0===e.cloneNode||void 0===e.createDocumentFragment||void 0===e.createElement}()}catch(e){h=!0,v=!0}}();var E={elements:g.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video",version:"3.7.3",shivCSS:!1!==g.shivCSS,supportsUnknownElements:v,shivMethods:!1!==g.shivMethods,type:"default",shivDocument:l,createElement:a,createDocumentFragment:s,addElements:o};e.html5=E,l(t);var S=/^$|\b(?:all|print)\b/,b="html5shiv",x=!v&&function(){var n=t.documentElement;return!(void 0===t.namespaces||void 0===t.parentWindow||void 0===n.applyElement||void 0===n.removeNode||void 0===e.attachEvent)}();E.type+=" print",E.shivPrint=f,f(t),"object"==typeof module&&module.exports&&(module.exports=E)}(void 0!==window?window:this,document);var modElem={elem:createElement("modernizr")};Modernizr._q.push(function(){delete modElem.elem});var mStyle={style:modElem.elem.style};Modernizr._q.unshift(function(){delete mStyle.style});var testProp=ModernizrProto.testProp=function(e,t,n){return testProps([e],undefined,t,n)};Modernizr.addTest("canvas",function(){var e=createElement("canvas");return!(!e.getContext||!e.getContext("2d"))}),Modernizr.addTest("canvastext",function(){return!1!==Modernizr.canvas&&"function"==typeof createElement("canvas").getContext("2d").fillText});var omPrefixes="Moz O ms Webkit",cssomPrefixes=ModernizrProto._config.usePrefixes?omPrefixes.split(" "):[];ModernizrProto._cssomPrefixes=cssomPrefixes;var domPrefixes=ModernizrProto._config.usePrefixes?omPrefixes.toLowerCase().split(" "):[];ModernizrProto._domPrefixes=domPrefixes,ModernizrProto.testAllProps=testPropsAll,ModernizrProto.testAllProps=testAllProps;var newSyntax="CSS"in window&&"supports"in window.CSS,oldSyntax="supportsCSS"in window;Modernizr.addTest("supports",newSyntax||oldSyntax),Modernizr.addTest("csstransforms3d",function(){return!!testAllProps("perspective","1px",!0)}),Modernizr.addTest("flexbox",testAllProps("flexBasis","1px",!0));var prefixes=ModernizrProto._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];ModernizrProto._prefixes=prefixes,Modernizr.addTest("cssgradients",function(){for(var e,t="background-image:",n="",r=0,o=prefixes.length-1;r<o;r++)e=0===r?"to ":"",n+=t+prefixes[r]+"linear-gradient("+e+"left top, #9f9, white);";Modernizr._config.usePrefixes&&(n+=t+"-webkit-gradient(linear,left top,right bottom,from(#9f9),to(white));");var i=createElement("a"),a=i.style;return a.cssText=n,(""+a.backgroundImage).indexOf("gradient")>-1}),Modernizr.addTest("opacity",function(){var e=createElement("a").style;return e.cssText=prefixes.join("opacity:.55;"),/^0.55$/.test(e.opacity)}),Modernizr.addTest("backgroundsize",testAllProps("backgroundSize","100%",!0)),Modernizr.addTest("borderimage",testAllProps("borderImage","url() 1",!0)),Modernizr.addTest("borderradius",testAllProps("borderRadius","0px",!0)),Modernizr.addTest("boxshadow",testAllProps("boxShadow","1px 1px",!0)),Modernizr.addTest("cssanimations",testAllProps("animationName","a",!0)),function(){Modernizr.addTest("csscolumns",function(){var e=!1,t=testAllProps("columnCount");try{e=!!t,e&&(e=new Boolean(e))}catch(e){}return e});for(var e,t,n=["Width","Span","Fill","Gap","Rule","RuleColor","RuleStyle","RuleWidth","BreakBefore","BreakAfter","BreakInside"],r=0;r<n.length;r++)e=n[r].toLowerCase(),t=testAllProps("column"+n[r]),"breakbefore"!==e&&"breakafter"!==e&&"breakinside"!==e||(t=t||testAllProps(n[r])),Modernizr.addTest("csscolumns."+e,t)}(),Modernizr.addTest("cssreflections",testAllProps("boxReflect","above",!0)),Modernizr.addTest("csstransitions",testAllProps("transition","all",!0)),Modernizr.addTest("flexboxlegacy",testAllProps("boxDirection","reverse",!0)),Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&testAllProps("transform","scale(1)",!0)});var hasEvent=function(){function e(e,n){var r;return!!e&&(n&&"string"!=typeof n||(n=createElement(n||"div")),e="on"+e,r=e in n,!r&&t&&(n.setAttribute||(n=createElement("div")),n.setAttribute(e,""),r="function"==typeof n[e],n[e]!==undefined&&(n[e]=undefined),n.removeAttribute(e)),r)}var t=!("onblur"in docElement);return e}();ModernizrProto.hasEvent=hasEvent,Modernizr.addTest("hashchange",function(){return!1!==hasEvent("hashchange",window)&&(document.documentMode===undefined||document.documentMode>7)});var testStyles=ModernizrProto.testStyles=injectElementWithStyles;testStyles('#modernizr{font:0/0 a}#modernizr:after{content:":)";visibility:hidden;font:7px/1 a}',function(e){Modernizr.addTest("generatedcontent",e.offsetHeight>=6)}),Modernizr.addTest("svg",!!document.createElementNS&&!!document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),Modernizr.addTest("inlinesvg",function(){var e=createElement("div");return e.innerHTML="<svg/>","http://www.w3.org/2000/svg"===("undefined"!=typeof SVGRect&&e.firstChild&&e.firstChild.namespaceURI)});var toStringFn={}.toString;Modernizr.addTest("smil",function(){return!!document.createElementNS&&/SVGAnimate/.test(toStringFn.call(document.createElementNS("http://www.w3.org/2000/svg","animate")))}),Modernizr.addTest("svgclippaths",function(){return!!document.createElementNS&&/SVGClipPath/.test(toStringFn.call(document.createElementNS("http://www.w3.org/2000/svg","clipPath")))});var inputElem=createElement("input"),inputattrs="autocomplete autofocus list placeholder max min multiple pattern required step".split(" "),attrs={};Modernizr.input=function(e){for(var t=0,n=e.length;t<n;t++)attrs[e[t]]=!!(e[t]in inputElem);return attrs.list&&(attrs.list=!(!createElement("datalist")||!window.HTMLDataListElement)),attrs}(inputattrs),function(){for(var e,t,n,r=["search","tel","url","email","datetime","date","month","week","time","datetime-local","number","range","color"],o=0;o<r.length;o++)inputElem.setAttribute("type",e=r[o]),n="text"!==inputElem.type&&"style"in inputElem,n&&(inputElem.value="1)",inputElem.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(e)&&inputElem.style.WebkitAppearance!==undefined?(docElement.appendChild(inputElem),t=document.defaultView,n=t.getComputedStyle&&"textfield"!==t.getComputedStyle(inputElem,null).WebkitAppearance&&0!==inputElem.offsetHeight,docElement.removeChild(inputElem)):/^(search|tel)$/.test(e)||(n=/^(url|email)$/.test(e)?inputElem.checkValidity&&!1===inputElem.checkValidity():"1)"!==inputElem.value)),Modernizr.addTest("inputtypes."+e,!!n)}();var unsupportedUserAgent=function(){var e=navigator.userAgent,t=e.match(/w(eb)?osbrowser/gi),n=e.match(/windows phone/gi)&&e.match(/iemobile\/([0-9])+/gi)&&parseFloat(RegExp.$1)>=9;return t||n}();unsupportedUserAgent?Modernizr.addTest("fontface",!1):testStyles('@font-face {font-family:"font";src:url("https://")}',function(e,t){var n=document.getElementById("smodernizr"),r=n.sheet||n.styleSheet,o=r?r.cssRules&&r.cssRules[0]?r.cssRules[0].cssText:r.cssText||"":"",i=/src/i.test(o)&&0===o.indexOf(t.split(" ")[0]);Modernizr.addTest("fontface",i)});var supports=!1;try{supports="WebSocket"in window&&2===window.WebSocket.CLOSING}catch(e){}Modernizr.addTest("websockets",supports),Modernizr.addTest("applicationcache","applicationCache"in window),function(){var e=createElement("audio");Modernizr.addTest("audio",function(){var t=!1;try{t=!!e.canPlayType,t&&(t=new Boolean(t))}catch(e){}return t});try{e.canPlayType&&(Modernizr.addTest("audio.ogg",e.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,"")),Modernizr.addTest("doapp/audio.mp3",e.canPlayType('audio/mpeg; codecs="mp3"').replace(/^no$/,"")),Modernizr.addTest("audio.opus",e.canPlayType('audio/ogg; codecs="opus"')||e.canPlayType('audio/webm; codecs="opus"').replace(/^no$/,"")),Modernizr.addTest("doapp/audio.wav",e.canPlayType('audio/wav; codecs="1"').replace(/^no$/,"")),Modernizr.addTest("audio.m4a",(e.canPlayType("audio/x-m4a;")||e.canPlayType("audio/aac;")).replace(/^no$/,"")))}catch(e){}}(),Modernizr.addTest("geolocation","geolocation"in navigator),Modernizr.addTest("history",function(){var e=navigator.userAgent;return!!e&&((-1===e.indexOf("Android 2.")&&-1===e.indexOf("Android 4.0")||-1===e.indexOf("Mobile Safari")||-1!==e.indexOf("Chrome")||-1!==e.indexOf("Windows Phone")||"file:"===location.protocol)&&(window.history&&"pushState"in window.history))}),Modernizr.addTest("hsla",function(){var e=createElement("a").style;return e.cssText="background-color:hsla(120,40%,100%,.5)",contains(e.backgroundColor,"rgba")||contains(e.backgroundColor,"hsla")}),Modernizr.addTest("localstorage",function(){var e="modernizr";try{return localStorage.setItem(e,e),localStorage.removeItem(e),!0}catch(e){return!1}}),Modernizr.addTest("multiplebgs",function(){var e=createElement("a").style;return e.cssText="background:url(https://),url(https://),red url(https://)",/(url\s*\(.*?){3}/.test(e.background)});var bool=!0;try{window.postMessage({toString:function(){bool=!1}},"*")}catch(e){}Modernizr.addTest("postmessage",new Boolean("postMessage"in window)),Modernizr.addTest("postmessage.structuredclones",bool),Modernizr.addTest("sessionstorage",function(){var e="modernizr";try{return sessionStorage.setItem(e,e),sessionStorage.removeItem(e),!0}catch(e){return!1}}),Modernizr.addTest("textshadow",testProp("textShadow","1px 1px")),Modernizr.addTest("rgba",function(){var e=createElement("a").style;return e.cssText="background-color:rgba(150,255,150,.5)",(""+e.backgroundColor).indexOf("rgba")>-1}),function(){var e=createElement("video");Modernizr.addTest("video",function(){var t=!1;try{t=!!e.canPlayType,t&&(t=new Boolean(t))}catch(e){}return t});try{e.canPlayType&&(Modernizr.addTest("video.ogg",e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,"")),Modernizr.addTest("video.h264",e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,"")),Modernizr.addTest("video.h265",e.canPlayType('video/mp4; codecs="hev1"').replace(/^no$/,"")),Modernizr.addTest("doapp/video.webm",e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,"")),Modernizr.addTest("video.vp9",e.canPlayType('video/webm; codecs="vp9"').replace(/^no$/,"")),Modernizr.addTest("video.hls",e.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/,"")),Modernizr.addTest("video.av1",e.canPlayType('video/mp4; codecs="av01"').replace(/^no$/,"")))}catch(e){}}(),Modernizr.addTest("webgl",function(){return"WebGLRenderingContext"in window}),Modernizr.addTest("websqldatabase","openDatabase"in window),Modernizr.addTest("webworkers","Worker"in window),Modernizr.addTest("target",function(){var e=window.document;if(!("querySelectorAll"in e))return!1;try{return e.querySelectorAll(":target"),!0}catch(e){return!1}}),Modernizr.addTest("time","valueAsDate"in createElement("time")),Modernizr.addTest("texttrackapi","function"==typeof createElement("video").addTextTrack),Modernizr.addTest("track","kind"in createElement("track")),Modernizr.addTest("checked",function(){return testStyles("#modernizr {position:absolute} #modernizr input {margin-left:10px} #modernizr :checked {margin-left:20px;display:block}",function(e){var t=createElement("input");return t.setAttribute("type","checkbox"),t.setAttribute("checked","checked"),e.appendChild(t),20===t.offsetLeft})}),Modernizr.addTest("arrow",function(){try{eval("()=>{}")}catch(e){return!1}return!0}),Modernizr.addTest("json","JSON"in window&&"parse"in JSON&&"stringify"in JSON),Modernizr.addTest("notification",function(){if(!window.Notification||!window.Notification.requestPermission)return!1;if("granted"===window.Notification.permission)return!0;try{new window.Notification("")}catch(e){if("TypeError"===e.name)return!1}return!0}),Modernizr.addTest("placeholder","placeholder"in createElement("input")&&"placeholder"in createElement("textarea")),Modernizr.addTest("details",function(){var e,t=createElement("details");return"open"in t&&(testStyles("#modernizr details{display:block}",function(n){n.appendChild(t),t.innerHTML="<summary>a</summary>b",e=t.offsetHeight,t.open=!0,e=e!==t.offsetHeight}),e)}),Modernizr.addTest("template","content"in createElement("template")),testRunner(),setClasses(classes),delete ModernizrProto.addTest,delete ModernizrProto.addAsyncTest;for(var i=0;i<Modernizr._q.length;i++)Modernizr._q[i]();scriptGlobalObject.Modernizr=Modernizr}(window,window,document);