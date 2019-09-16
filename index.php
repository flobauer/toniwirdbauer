<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flo+Toni</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Amatic+SC" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <script type="text/javascript">
        /*! modernizr 3.3.1 (Custom Build) | MIT *
         * https://modernizr.com/download/?-objectfit-setclasses !*/
        !function(e,n,t){function r(e,n){return typeof e===n}function o(){var e,n,t,o,i,s,a;for(var f in g)if(g.hasOwnProperty(f)){if(e=[],n=g[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=r(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)s=e[i],a=s.split("."),1===a.length?Modernizr[a[0]]=o:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=o),y.push((o?"":"no-")+a.join("-"))}}function i(e){var n=_.className,t=Modernizr._config.classPrefix||"";if(w&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),w?_.className.baseVal=n:_.className=n)}function s(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function a(e,n){return!!~(""+e).indexOf(n)}function f(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):w?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function l(e,n){return function(){return e.apply(n,arguments)}}function u(e,n,t){var o;for(var i in e)if(e[i]in n)return t===!1?e[i]:(o=n[e[i]],r(o,"function")?l(o,t||n):o);return!1}function p(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function d(){var e=n.body;return e||(e=f(w?"svg":"body"),e.fake=!0),e}function c(e,t,r,o){var i,s,a,l,u="modernizr",p=f("div"),c=d();if(parseInt(r,10))for(;r--;)a=f("div"),a.id=o?o[r]:u+(r+1),p.appendChild(a);return i=f("style"),i.type="text/css",i.id="s"+u,(c.fake?c:p).appendChild(i),c.appendChild(p),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(n.createTextNode(e)),p.id=u,c.fake&&(c.style.background="",c.style.overflow="hidden",l=_.style.overflow,_.style.overflow="hidden",_.appendChild(c)),s=t(p,e),c.fake?(c.parentNode.removeChild(c),_.style.overflow=l,_.offsetHeight):p.parentNode.removeChild(p),!!s}function m(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(p(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+p(n[o])+":"+r+")");return i=i.join(" or "),c("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function v(e,n,o,i){function l(){p&&(delete z.style,delete z.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var u=m(e,o);if(!r(u,"undefined"))return u}for(var p,d,c,v,h,y=["modernizr","tspan","samp"];!z.style&&y.length;)p=!0,z.modElem=f(y.shift()),z.style=z.modElem.style;for(c=e.length,d=0;c>d;d++)if(v=e[d],h=z.style[v],a(v,"-")&&(v=s(v)),z.style[v]!==t){if(i||r(o,"undefined"))return l(),"pfx"==n?v:!0;try{z.style[v]=o}catch(g){}if(z.style[v]!=h)return l(),"pfx"==n?v:!0}return l(),!1}function h(e,n,t,o,i){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+S.join(s+" ")+s).split(" ");return r(n,"string")||r(n,"undefined")?v(a,n,o,i):(a=(e+" "+E.join(s+" ")+s).split(" "),u(a,n,t))}var y=[],g=[],C={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){g.push({name:e,fn:n,options:t})},addAsyncTest:function(e){g.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=C,Modernizr=new Modernizr;var _=n.documentElement,w="svg"===_.nodeName.toLowerCase(),x="Moz O ms Webkit",S=C._config.usePrefixes?x.split(" "):[];C._cssomPrefixes=S;var b=function(n){var r,o=prefixes.length,i=e.CSSRule;if("undefined"==typeof i)return t;if(!n)return!1;if(n=n.replace(/^@/,""),r=n.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+n;for(var s=0;o>s;s++){var a=prefixes[s],f=a.toUpperCase()+"_"+r;if(f in i)return"@-"+a.toLowerCase()+"-"+n}return!1};C.atRule=b;var E=C._config.usePrefixes?x.toLowerCase().split(" "):[];C._domPrefixes=E;var j={elem:f("modernizr")};Modernizr._q.push(function(){delete j.elem});var z={style:j.elem.style};Modernizr._q.unshift(function(){delete z.style}),C.testAllProps=h;var N=C.prefixed=function(e,n,t){return 0===e.indexOf("@")?b(e):(-1!=e.indexOf("-")&&(e=s(e)),n?h(e,n,t):h(e,"pfx"))};Modernizr.addTest("objectfit",!!N("objectFit"),{aliases:["object-fit"]}),o(),i(y),delete C.addTest,delete C.addAsyncTest;for(var P=0;P<Modernizr._q.length;P++)Modernizr._q[P]();e.Modernizr=Modernizr}(window,document);
    </script>
</head>
<body>
<?php
    require_once('content.php');
?>

    <div class="testfield">
      <div class="flyout-wrap">
        <div class="flyout-btn" title="Toggle">
            <a href="#">
                <span>Menu</span>
            </a>
        </div>
        <ul class="flyout flyout-init">
            <li data-menuanchor="first"><a href="#first"><span>Home</span></a></li>
            <li data-menuanchor="second"><a href="#second"><span>Location</span></a></li>
            <li data-menuanchor="third"><a href="#third"><span>Ablauf</span></a></li>
            <li data-menuanchor="fourth"><a href="#fourth"><span>Orga</span></a></li>
            <li data-menuanchor="fifth"><a href="#fifth"><span>Info</span></a></li>
        </ul><!-- .flyout -->
      </div><!-- .flyout-wrap -->
    </div><!-- #testfield -->
    
    <!-- Weird -->
    <div class="container hidden-sm hidden-md hidden-lg">
        
        <?php foreach($contents as $key => $content): ?>
            <?php
                switch($key+1) {
                    case 1: 
                        $ind = 'first';
                    break;
                    case 2: 
                        $ind = 'second';
                    break;
                    case 3: 
                        $ind = 'third';
                    break;
                    case 4: 
                        $ind = 'fourth';
                    break;
                    case 5: 
                        $ind = 'fifth';
                    break;
                }

                if(strlen($content['left']) > strlen($content['right']))
                    $output = $content['right'].$content['left'];
                else
                    $output = $content['left'].$content['right'];
            ?>
            <div id="<?php echo $ind; ?>-whysosad" class="momosection">
                <?php echo $output; ?>
            </div>
        <?php endforeach; ?>
        
    </div>
    <div id="multiscroll" class="text-center hidden-xs">
        <div class="ms-left">
        <?php foreach($contents as $key => $content): ?>
            <div class="ms-section" id="left<?php echo $key+1; ?>">
                <?php echo $content['left']; ?>
            </div>
        <?php endforeach; ?>
        </div>
        <div class="ms-right">
        <?php foreach($contents as $key => $content): ?>
            <div class="ms-section" id="right<?php echo $key+1; ?>">
                <?php echo $content['right']; ?>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- This following line is needed in case of using the default easing option or when using another
     one rather than "linear" or "swing". You can also add the full jQuery UI instead of this file if you prefer -->
    <script src="js/jquery.easings.min.js"></script>
    <script type="text/javascript" src="js/jquery.multiscroll.js"></script>
    <script>

    $flyout = $('.flyout');
    $btn = $('.flyout-btn');
    $form = $('form');

    function multi() {
        if ($(window).width() <= 768) {
            $('#multiscroll').multiscroll.destroy();
            $('html').css('height', 'auto');
            $('html').css('overflowY', 'scroll');
            $('body').css('height', 'auto');
            $('body').css('overflowY', 'scroll');
            $('.testfield').css('position', 'fixed');

            $flyout.find('a').click(function() {
                var href = $(this).attr('href');
                $('html, body').animate({
                    scrollTop: $(href+'-whysosad').offset().top
                }, 200);
            });

            $('a.infolink').click(function() {
                var href = $(this).attr('href');
                $('html, body').animate({
                    scrollTop: $(href+'-whysosad').offset().top
                }, 200);
            });

        } else {
            $('#multiscroll').multiscroll.build();
            $('html').css('height', '100%');
            $('html').css('overflowY', 'hidden');
            $('body').css('height', '100%');
            $('body').css('overflowY', 'hidden');
            $('.testfield').css('position', 'absolute');
        }
    }

    $(document).ready(function() {

        var mutli = $('#multiscroll').multiscroll({
            scrollingSpeed: 700,
            easing: 'easeInQuart',
            sectionsColor: ['#f1e9d2', '#f1e9d2', '#f1e9d2', '#f1e9d2', '#f1e9d2'],
            anchors: ['first', 'second', 'third', 'fourth', 'fifth', 'sixth'],
            menu: '#menu',
            navigation: false,
            navigationPosition: 'right',
            navigationColor: '#000',
            navigationTooltips: [],
            loopBottom: false,
            loopTop: false,
            css3: false,
            paddingTop: '0',
            paddingBottom: '0',
            normalScrollElements: null,
            keyboardScrolling: true,
            touchSensitivity: 5,

            // Custom selectors
            sectionSelector: '.ms-section',
            leftSelector: '.ms-left',
            rightSelector: '.ms-right',

            //events
            onLeave: function(index, nextIndex, direction){},
            afterLoad: function(anchorLink, index){},
            afterRender: function(){},
            afterResize: function(){},
        });
            
        // check when page load
        multi(multi); 

        $(window).resize(function(){
            multi(multi); 
        });

        if ( ! Modernizr.objectfit ) {
            console.log('objectfit geht ned');
          $('.ms-section img').each(function () {
            console.log(this);
            
            var $container = $(this).parent();
            var imgUrl = $container.find('img').prop('src');

            if (imgUrl) {
              $container
                .css('backgroundImage', 'url(' + imgUrl + ')')
                .addClass('compat-object-fit');
            }  
          });
        }

        $btn.find('a').click(function (e) {
            e.preventDefault();
            $btn.toggleClass('btn-rotate');
            $flyout.find('a').removeClass();

            if(!$flyout.hasClass('flyout-init')) {

                if($flyout.hasClass('expand'))
                    $flyout.delay(300).fadeOut();
                else
                    $flyout.fadeIn();
            }

            return $flyout.removeClass('flyout-init fade').toggleClass('expand');
        });

        $flyout.find('a').click(function () {
            $btn.toggleClass('btn-rotate');
            $flyout.removeClass('expand').addClass('fade');
            return $(this).addClass('clicked');
        });

        $form.on('submit', function(e){
            e.preventDefault();

            var container = $(this).parent();
            $.ajax({
               type: "POST",
               url: 'ping.php',
               data: $(this).serialize(), // serializes the form's elements.
               success: function(data)
               {
                    if(parseInt(data) == 1) {
                        container.html('<div class="panel panel-success text-center">Thank you</div>');
                    }
               }
            });
        });
    });
    </script>
</body>
</html>
