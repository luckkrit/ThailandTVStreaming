<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Streaming TV in Thailand ">
    <title>Thailand Streaming ( THS Project ) : OF.IN.TH</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="images/favicon/android-icon-192x192.png" sizes="192x192"> 
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="css/prism.css" rel="stylesheet">
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- loading -->
    <link href="css/circle.css" rel="stylesheet"> 
    <script type="text/javascript" src="./js/pace.js"></script>
    <!-- Player -->  
    <script type="text/javascript" src="./player/libs/swfobject.js"></script>
    <script type="text/javascript" src="./player/libs/ParsedQueryString.js"></script>
    <script type="text/javascript" src="../../../playlists/streams.js"></script>
    <script type="text/javascript">  
        var player = null;

function loadStream(url) {
  player.setMediaResourceURL(url);
}

function getlink(url) {
  return "index.php?src=" + encodeURIComponent(url) ;
}

function listStreams(list, container) {
  for(var i=0; i<list.length; i++) { var entry = document.createElement("li");
    //entry.innerHTML = "<a href=" + getlink(list[i].file) + ">" +list[i].title+"</a>";
    entry.innerHTML = "<a href='#' onclick='return loadStream(\""+list[i].file+"\")'>"+list[i].title+"</a>";    
    document.getElementById(container).appendChild(entry);
  }
  //loadStream(list[0].file);
}


        function jsbridge(playerId, event, data) {
          if (player == null) {
            player = document.getElementById(playerId);
          }
          switch(event) {
            case "onJavaScriptBridgeCreated":
              listStreams(teststreams,"streamlist");
              break;
             case "timeChange":
             case "timeupdate":
             case "progress":
               break;
             default:
              console.log(event, data);
            }
        }

            // Collect query parameters in an object that we can
            // forward to SWFObject:
            
            var pqs = new ParsedQueryString();
            var parameterNames = pqs.params(false);
            var parameters = {
                src: "http://live.thairath.co.th/trtv/playlist.m3u8",
                //src: "http://localhost:8082/playlists/test_001/stream.m3u8",
                autoPlay: "true",
                verbose: true,
                controlBarAutoHide: "true",
                controlBarPosition: "bottom",
                poster: "images/donate.png",
                javascriptCallbackFunction: "jsbridge",
                plugin_hls: "./bin/release/flashlsOSMF.swf",
                hls_minbufferlength: -1,
                hls_maxbufferlength: 300,
                hls_lowbufferlength: 3,
                hls_seekmode: "KEYFRAME",
                hls_startfromlevel: -1,
                hls_seekfromlevel: -1,
                hls_live_flushurlcache: false,
                hls_info: true,
                hls_debug: false,
                hls_debug2: false,
                hls_warn: true,
                hls_error: true,
                hls_fragmentloadmaxretry : -1,
                hls_manifestloadmaxretry : -1,
                hls_capleveltostage : false,
                hls_maxlevelcappingmode : "downscale"
            };
            
            for (var i = 0; i < parameterNames.length; i++) {
                var parameterName = parameterNames[i];
                parameters[parameterName] = pqs.param(parameterName) ||
                parameters[parameterName];
            }
            
            var wmodeValue = "direct";
            var wmodeOptions = ["direct", "opaque", "transparent", "window"];
            if (parameters.hasOwnProperty("wmode"))
            {
                if (wmodeOptions.indexOf(parameters.wmode) >= 0)
                {
                    wmodeValue = parameters.wmode;
                }                   
                delete parameters.wmode;
            }
            
            // Embed the player SWF:                
            swfobject.embedSWF(
                "GrindPlayer.swf"
                , "GrindPlayer"
                , 850
                , 480
                , "10.1.0"
                , "expressInstall.swf"
                , parameters
                , {
                    allowFullScreen: "true",
                    wmode: wmodeValue
                }
                , {
                    name: "GrindPlayer"
                }
            );
            
        </script>
       
  </head>
    
  <body>
    <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo"><a id="logo-container" href="" class="brand-logo">
            <object id="front-page-logo" type="image/svg+xml" data="res/ths.svg">Your browser does not support SVG</object></a></li>
        <li class="bold"><a href="./" class="waves-effect waves-teal"><i class="mdi-action-home"></i> หน้าหลัก</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="mdi-editor-insert-photo"></i> ทีวีดิจิตอล</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="color.html">Color</a></li>
                  <li><a href="grid.html">Grid</a></li>
                  <li><a href="helpers.html">Helpers</a></li>
                  <li><a href="media-css.html">Media</a></li>
                  <li><a href="sass.html">Sass</a></li>
                  <li><a href="shadow.html">Shadow</a></li>
                  <li><a href="table.html">Table</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="mdi-maps-satellite"></i> ทีวีดาวเทียม</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="badges.html">Badges</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="cards.html">Cards</a></li>
                  <li><a href="collections.html">Collections</a></li>
                  <li><a href="footer.html">Footer</a></li>
                  <li><a href="forms.html">Forms</a></li>
                  <li><a href="icons.html">Icons</a></li>
                  <li><a href="navbar.html">Navbar</a></li>
                  <li><a href="pagination.html">Pagination</a></li>
                  <li><a href="preloader.html">Preloader</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="mdi-maps-flight"></i> ทีวีต่างประเทศ</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="./?src=http://abclive.abcnews.com/i/abc_live4@136330/index_1200_av-b.m3u8">ABC news</a></li>
                  <li><a href="./?src=http://wpc.c1a9.edgecastcdn.net/hls-live/20C1A9/bbc_world/ls_satlink/b_828.m3u8">BBC World News</a></li>
                  <li><a href="./?src=http://cdn3.videos.bloomberg.com/btv/us/master.m3u8?b?b*t$">Bloomberg</a></li>
                  <li><a href="./?src=http://plslive-w.nhk.or.jp/nhkworld/app-mainp/live.m3u8">NHK World</a></li>
                  <li><a href="./?src=http://odna.octoshape.net/f3f5m2v4/cds/smil:ch1_auto.smil/playlist.m3u8">RT</a></li>
                  <li><a href="./?src=http://wpc.c1a9.edgecastcdn.net/hls-live/20C1A9/cnn/ls_satlink/b_528.m3u8">CNN</a></li>
                  <li><a href="./?src=http://wpc.c1a9.edgecastcdn.net/hls-live/20C1A9/cnbc_eu/ls_satlink/b_,264,528,828,.m3u8">CBNC</a></li>
                  <li><a href="./?src=http://hindiabp-lh.akamaihd.net/i/hindiabp1new_1@192103/master.m3u8">ABP</a></li>
                  <li><a href="./?src=http://ibn7_hls-lh.akamaihd.net/i/ibn7_hls_n_1@174951/index_3.m3u8">IBN</a></li>
                  <li><a href="./?src=http://fichd-lh.akamaihd.net/i/NATGEOW_LATAM@304509/index_2000_av-b.m3u8?sd=10&rebase=on?monclovacaliente.m3u8">Nat Geo</a></li>
                  <li><a href="./?src=http://hlsstr03.svc.iptv.rt.ru/hls/CH_C04_NGCHD/variant.m3u8?version=2">Nat Geo HD</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="about.html" class="waves-effect waves-teal"><i class="mdi-maps-directions-walk"></i> เกี่ยวกับ</a></li>
      </ul>
    </header>
    <main>
      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h1 class="header center-on-small-only">ไทยแลนด์ สตรีมมิ่ง โปรเจกต์</h1> 
          <div class='row center'>
            <h4 class ="header col s12 light center">รวดเร็ว ปลอดภัย ไร้โฆษณา</h4>
          </div>
          
        </div>
        <div class="github-commit">
          <div class="container">
            <div class="commit">
              อัปเดตล่าสุด :
              &nbsp;&nbsp;
              <a href="" class="sha"></a>
              &nbsp;&nbsp;
              <span class="date"></span>
              <a id="github-button" href="https://github.com/iLek2428/ThailandTVStreaming" class="btn-flat right grey-text text-lighten-5 waves-effect waves-light hide-on-small-only">Github</a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="section">

          <div class="row">
            <div class="col s12 m8 offset-m2">
              <br>
                
        <div class="video-container">        
                    <div id="GrindPlayer">
                        <p>
                            Alternative content
                        </p>
                    </div>
        </div>    
                            
            </div>
          </div>

 
          
<?php
 
    $channel["abcnews"] = "http://abclive.abcnews.com/i/abc_live4@136330/index_1200_av-b.m3u8";
	$channel["Quagmire"] = "30";
	$channel["Joe"] = "34";
	foreach($channel as $show){
		echo $show." "; // output 32 30 34
	}

?>
</main>
      
<footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
               <h5 class="white-text">ข้อควรทราบ</h5>
                <p class="grey-text text-lighten-4"> เว็บไซต์แห่งนี้เปิดเพื่อการศึกษาระบบการทำงานของ Server, Apache, HTML, HLS, m3u8 format ทางผู้จัดทำไม่มีนโยบายการเรียกเก็บเงินจากผู้ใช้งานแต่อย่างใดทั้งสิ้น ภาพและเสียงเป็นลิขสิทธิ์ของแต่ละสถานี และเมื่อมีการขอความร่วมมือให้ถอดช่องออก จะดำเนินการถอดออกจากเว็บไซต์โดยทันที</p>
              </div>
            
          <div class="col l4 offset-l2 s12" style="overflow: hidden;">
            <h5 class="white-text">Connect</h5>
           <iframe src="https://ghbtns.com/github-btn.html?user=iLek2428&repo=ThailandTVStreaming&type=fork&count=true&size=large" frameborder="0" scrolling="0" width="158px" height="30px"></iframe>

            <br>
            <a href="https://twitter.com/iLek2428" class="twitter-follow-button" data-show-count="true" data-size="large" data-dnt="true">Follow @iLek2428</a>
            <br>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2015 THS Project Theme by <a href="http://materializecss.com/">Materialize</a>
        <a class="grey-text text-lighten-4 right" href="https://creativecommons.org/licenses/by/3.0/th/legalcode">BY License</a>
        </div>
      </div>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="js/jquery.timeago.min.js"></script>  
    <script src="js/prism.js"></script>
    <script src="bin/materialize.js"></script>
    <script src="js/init.js"></script>
    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<script type="text/javascript">
function userSubmit() {
  window.location = getlink(document.getElementById('userInput').value);
}
  </body>
</html>