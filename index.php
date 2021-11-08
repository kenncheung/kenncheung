<!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="true" --><?php
  // we are resolving the site path automatically here, or you can define it explicitly
  //define('__SITE_PATH', (strpos(dirname(__FILE__), $_SERVER['DOCUMENT_ROOT']) == 0)? substr(dirname(__FILE__), strlen($_SERVER['DOCUMENT_ROOT'])) : dirname(__FILE__));
  define('__SITE_PATH', '/zKenneth/work/infoday-2019');  // without trailing slash!

  require_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.__SITE_PATH.DIRECTORY_SEPARATOR.'/includes/common.php');

  $page->startCapture('page_charset');
?>
<meta charset="UTF-8">
<meta name="keywords" content="Lingnan University, arts, Liberal arts">
<meta name="description" content="Lingnan University">
<meta name="viewport" content="viewport-fit=cover">
<?
  $page->endCapture();

  // include css/js to be put in page head
  $page->startCapture('page_head');
?>

<!-- Localized Stylesheet -->
<link href="assets/css/infoday.css?v=1.0" type="text/css" rel="stylesheet" />
<link href="assets/css/horizontal-menu.css?v=1.0" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="assets/js/jscroller2-1.61.js"></script>
<script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.js"></script>
<script type="text/javascript" src="assets/js/jquery.mousewheel.js"></script>
<link href="assets/css/flexslider/flexslider.css" type="text/css" rel="stylesheet" />
<link href="assets/css/tables.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
ByRei_jScroller2.config.refreshtime = 60; // Refreshrate 100m
$(function() {
	$('#photoslide').flexslider({
		animation: "fade",
		slideshow: true,
		controlNav: true
	});
});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126822703-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-126822703-1');
</script>

<!-- InstanceBeginEditable name="head" -->
<meta name="viewport" content="viewport-fit=cover">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='assets/css/YouTube.HD.Thumbnail.css' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="assets/js/froogaloop.js"></script>
<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/js/jQuery.YouTube.HD.Thumbnail.js"></script>
<style>
	
*,:before,:after { box-sizing: border-box; }

html, body { height: 100%; }

.flexslider {
  height: 100%;
  margin: 0;
  padding: 0;
  background: none;
  border: 0;
  overflow: hidden;
  box-shadow: none;
  .flex-viewport { height: 100%; }
  .flex-control-nav { bottom: 20px; }
  .slides {
    height: 100%;
    li { 
      height: 100%;
    }
  }
}

</style>


<?php $page->setTitle('Information Day for Undergraduate Admissions 2019'); ?>
<!-- InstanceEndEditable -->
<?php
  $lnlib->initLib("dropdownmenu");
  $page->endCapture();  // end capture page head

  // start template
  $page->startTemplate();
?>


<!-- Horizontal menu -->
<div id="menu">
<? include($page->localizeFile($page->getConfig('site_file_path')."/includes/menubar.php")); ?>
</div>
<div class="">
  <div class="page-main-breadcrumb">
  <div class="row">
  <div class="col-sm-12">
    <div class="page-main-content ckec">
<!-- InstanceBeginEditable name="EditRegion2" -->

  <div class="row">
  <div class="col-sm-12" style="max-width: 100%">
    <div class="page-main-content ckec">
<!--    <h1>Information Day for Undergraduate Admissions 2019</h1>-->
      <div class="title-container">
          <div class="flex-container">
            <div class="flexslider backdrop" id="photoslide">
              <ul class="slides">
                <li><img src="slideshow/01-infoday-2019.jpg" alt="Information Day for Undergraduate Admissions 2019">
                </li>
				 <li><a href="https://www.ln.edu.hk/arts/animation-and-digital-arts/" target="_blank"><img src="slideshow/02-BA-hons-in-Animation-and-Digital-Arts.jpg" alt="Bachelor of Arts(Hons)in Animation and Digital Arts"></a></li>
				 <li><a href="https://www.ln.edu.hk/cds/ds/" target="_blank"><img src="slideshow/03-BSc-hons-in-data-science.jpg" alt="BSc (Hons) in Data Science"></a></li>
				 <li><a href="https://www.ln.edu.hk/ogeis/global-liberal-arts/" target="_blank"><img src="slideshow/04-BA-hons-in-Global-Liberal-Arts.jpg" alt="BA (Hons) in Global Liberal Arts"></a></li>
				 <li><a href="https://www.ln.edu.hk/cds/ebstream/" target="_blank"><img src="slideshow/05-Business-Admin-hons-eBusiness.jpg" alt="e-Business Stream for Bachelor of Business Administration (Honours)"></a></li>
				 <li><a href="https://www.ln.edu.hk/ugprogrammes/eng/hssmc.html" target="_blank"><img src="slideshow/06-BSc-hons-Health-Social-Services-Management.jpg" alt="Health and Social Services Management Stream for Bachelor of Social Sciences (Honours)"></a></li>
				 <li><a href="https://www.ln.edu.hk/ugprogrammes/eng/ieps.html" target="_blank"><img src="slideshow/07-International-Econ-Politics.jpg" alt="International Economy and Politics Stream for Bachelor of Social Sciences (Honours)"></a></li>
				 <li><a href="https://www.ln.edu.hk/ugprogrammes/eng/cpc.html" target="_blank"><img src="slideshow/08-Psychology-with-counselling.jpg" alt="Discipline Major in Psychology with Counselling Psychology Concentration for Bachelor of Social Sciences (Honours)"></a></li>
              </ul>
            </div>
          </div>
<!--          <div class="text-block">
              <H1><span class="note">Information Day for Undergraduate Admissions</span></H1>
              <H2><span class="note">本科入學資訊日</span></H2>
          </div>-->
      </div>		
		
</div>
</div>

<div class="center">
  <span class="outer-line"></span>
<span class="fa fa-play-circle mid-icon" aria-hidden="true"></span>
  <span class="outer-line"></span>
</div>
	  
<p>&nbsp;</p>
	  
<!-- Flexslider for YouTube Videos -->
	  
  <div id="container" class="">    
    <div id="main2">
      <div class="col-md-6 ">
        <div class="flexslider mainslider">
          <ul class="slides">
            <li>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe title="Students Sharing" class="embed-responsive-item yt-hd-thumbnail" src="https://www.youtube.com/embed/6suERmemUeY?enablejsapi=1"></iframe>
            </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-6">
        <div class="flexslider mainslider2">
          <ul class="slides">
            <li>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe title="Alumi Sharing" class="embed-responsive-item yt-hd-thumbnail" src="https://www.youtube.com/embed/QQ0Vl1XAk9k?enablejsapi=1"></iframe>
            </div>
            </li>
            <li>
            <div class="embed-responsive embed-responsive-16by9"><!-- LEI Video -->
              <iframe title="LEI" class="embed-responsive-item yt-hd-thumbnail" src="https://www.youtube.com/embed/dHAsNNbX-CU?enablejsapi=1"></iframe>
            </div>
            </li>
          </ul>
        </div>
      </div>
		
      <div class="col-md-6">
        <div class="flexslider mainslider3">
          <ul class="slides">
            <li>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe title="Department of History" class="embed-responsive-item yt-hd-thumbnail" src="https://www.youtube.com/embed/aYjNlL5_Boo?enablejsapi=1"></iframe>
            </div>
            </li>
            <li>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe title="Department of Philosophy" class="embed-responsive-item yt-hd-thumbnail" src="https://www.youtube.com/embed/y2LZP-LJLqU?enablejsapi=1"></iframe>
            </div>
            </li>
            <li>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe title="Department of Visual Studies" class="embed-responsive-item yt-hd-thumbnail" src="https://www.youtube.com/embed/-HRduDY2bx4?enablejsapi=1"></iframe>
            </div>
            </li>
		    <li>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe title="BBA (Hons) and BBA (Hons)-Risk and Insurance Management" class="embed-responsive-item yt-hd-thumbnail" src="https://www.youtube.com/embed/yBj_Y2MWzAw?enablejsapi=1"></iframe>
            </div>
            </li>
            <li>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe title="BBA-RIM Programme" class="embed-responsive-item yt-hd-thumbnail" src="https://www.youtube.com/embed/X3yQO9SYUAY?enablejsapi=1"></iframe>
            </div>
            </li>
            <li>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe title="Faculty of Social Sciences" class="embed-responsive-item yt-hd-thumbnail" src="https://www.youtube.com/embed/tXDwGbdqXCA?enablejsapi=1"></iframe>
            </div>
            </li>
          </ul>
        </div>
      </div>     

      <div class="col-md-6">
        <div class="flexslider mainslider4">
          <ul class="slides">
            <li>
            <div class="embed-responsive embed-responsive-16by9">
              <img src="slideshow/new-learning-opportunities.jpg" alt="Information Day for Undergraduate Admissions 2019">
            </div>
            </li>
            <li>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe title="Faculty of Arts" class="embed-responsive-item yt-hd-thumbnail" src="https://www.youtube.com/embed/l0wkvIGDxJg?enablejsapi=1"></iframe>
            </div>
            </li>
          </ul>
        </div>
      </div>
		

    </div>
  </div>

  
<script>
	
$('iframe.yt-hd-thumbnail').youTubeHDThumbnail({
	darkenThumbnail: false
});
	

var slider, slider2, slider3, slider4, // Global slider value to force playing and pausing by direct access of the slider control
canSlide = true; // Global switch to monitor video state

// Load the YouTube API. For some reason it's required to load it like this
var tag = document.createElement('script');
  tag.src = "//www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Setup a callback for the YouTube api to attach video event handlers
window.onYouTubeIframeAPIReady = function(){
  // Iterate through all videos
  $('.flexslider iframe').each(function(){
    // Create a new player pointer; "this" is a DOMElement of the player's iframe
    var player = new YT.Player(this, {
      playerVars: {
        autoplay: 0
      }
    });

    // Watch for changes on the player
    player.addEventListener("onStateChange", function(state){
      switch(state.data)
      {
        // If the user is playing a video, stop the slider
        case YT.PlayerState.PLAYING:
          slider.flexslider("stop");
          canSlide = false;
          break;
        // The video is no longer player, give the go-ahead to start the slider back up
        case YT.PlayerState.ENDED:
        case YT.PlayerState.PAUSED:
          slider.flexslider("play");
          canSlide = true;
          break;
      }
    });

    $(this).data('player', player);
  });
}

// Setup the slider control
slider = $(".mainslider")
  .flexslider({
    animation: "fade",
    easing: "swing",
    slideshowSpeed: 6500,
    animationSpeed: 900,
    pauseOnHover: true,
    pauseOnAction: true,
    touch: true,
    video: true,
    controlNav: true,
    animationLoop: true,
    slideshow: true,
    useCSS: false,
      before: function(){			    		
        if(!canSlide)
          slider.flexslider("stop");
      }
  });

slider2 = $(".mainslider2")
.flexslider({
  animation: "fade",
  easing: "swing",
  slideshowSpeed: 6500,
  animationSpeed: 900,
  pauseOnHover: true,
  pauseOnAction: true,
  touch: true,
  video: true,
  controlNav: true,
  animationLoop: true,
  slideshow: true,
  useCSS: false,
  before: function(){			    		
    if(!canSlide)
      slider2.flexslider("stop");
  }
});
	
	
slider3 = $(".mainslider3")
.flexslider({
  animation: "fade",
  easing: "swing",
  slideshowSpeed: 6500,
  animationSpeed: 900,
  pauseOnHover: true,
  pauseOnAction: true,
  touch: true,
  video: true,
  controlNav: true,
  animationLoop: true,
  slideshow: true,
  useCSS: false,
  before: function(){			    		
    if(!canSlide)
      slider3.flexslider("stop");
  }
});


slider4 = $(".mainslider4")
.flexslider({
  animation: "fade",
  easing: "swing",
  slideshowSpeed: 6500,
  animationSpeed: 900,
  pauseOnHover: true,
  pauseOnAction: true,
  touch: true,
  video: true,
  controlNav: true,
  animationLoop: true,
  slideshow: true,
  useCSS: false,
  before: function(){			    		
    if(!canSlide)
      slider4.flexslider("stop");
  }
});
	

slider.on("click", ".flex-prev, .flex-next", function(){
  canSlide = true;
  $('.flexslider iframe').each(function(){
    $(this).data('player').pauseVideo();
  });
});

slider2.on("click", ".flex-prev, .flex-next", function(){
  canSlide = true;
  $('.flexslider iframe').each(function(){
    $(this).data('player').pauseVideo();
  });
});
	
slider3.on("click", ".flex-prev, .flex-next", function(){
  canSlide = true;
  $('.flexslider iframe').each(function(){
    $(this).data('player').pauseVideo();
  });
});	
	
slider4.on("click", ".flex-prev, .flex-next", function(){
  canSlide = true;
  $('.flexslider iframe').each(function(){
    $(this).data('player').pauseVideo();
  });
});	
	
</script>
  

<p>&nbsp;</p>
	  
<div class="center">
  <span class="outer-line"></span>
  <span class="fa fa-trophy mid-icon" aria-hidden="true"></span>
  <span class="outer-line"></span>
</div>
	  
<p>&nbsp;</p>

<div class="container-fluid">
<div class="row bg no-margin">
    <div class="col-xs-12 col-md-6">
        <div class="col-xs-6 col-md-6">
            <img src="assets/img/div-weather.png" class="" alt="Adverse Weather Arrangement">
        </div>
        <div class="col-xs-6 col-md-6">
            <p class="side-text">Adverse Weather Arrangement</p>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="col-xs-6 col-md-6">
            <img src="assets/img/div-gogreen.png" class="" alt="Go Green">
        </div>
        <div class="col-xs-6 col-md-6">
            <p class="side-text">Let's Go Green Together</p>
        </div>
    </div>
</div>

	</div>
	  
<div class="round_btn">
<button class="transparent_btn blue">download programme leaflet</button>
</div>
	  

<p>&nbsp;</p>
<!-- Add font awesome icons -->
	  
<div class="col-sm-12 center">
<a href="#" ><span class="social fa fa-facebook"></span></a>
<a href="#" ><span class="social fa fa-youtube-play"></span></a>
<a href="#" ><span class="social fa fa-linkedin"></span></a>
<a href="#" ><span class="social fa fa-instagram"></span></a>
<a href="#" ><span class="social fa fa-weibo"></span></a>
<a href="#" ><span class="social fa fa-weixin"></span></a>
<a href="#" ><span class="social fa fa-twitter"></span></a>
<a href="#" ><span class="social fa fa-mobile"></span></a>
</div>

<p>&nbsp;</p>
<!-- Address and Contact Us -->
	
<div class="col-sm-12 no-margin">
<div class="row address">
    <div class="col-xs-12 col-md-6" >
        <h2 class="">Location</h2>
        <br>
        <h2 class="address-text">8 Castle Peak Road, Tuen Mun, NT</h2>
        <br>
    </div>

    <div class="col-xs-12 col-md-6">
        <h2 class="">Contact Us</h2>
        <br>
        <h2 class="address-text">Tel:(852)2616&nbsp;8989</h2>
        <br>
    </div>
</div>
</div>
</div>
		
		
<script>

$(".flexslider").flexslider({
  animation: "slide", 
  slideshow: true,
  touch: true,
  keyboard: true,
  pauseOnHover: true,
  after: function(item){
    console.log(item);
  }
 // animationLoop: false
});

</script>
		
<!-- InstanceEndEditable -->
   </div>
  </div>
</div>
</div>
</div>

<?php
  $page->endTemplate();
?><!-- InstanceEnd -->