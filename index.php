<?php
if ($_REQUEST['hid_prn'] == 1)
{
$word = $_REQUEST['word'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your English Word Pronunciation : Sanjay Bhowmick</title>
  <meta name="description" content="This is a simple web application for the audio pronunciation of English dictionary words.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Libraries related to pronunciation scripts -->
  <link href="skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
  <script type="text/javascript">
    //<![CDATA[
    $(document).ready(function(){

      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            mp3:"https://ssl.gstatic.com/dictionary/static/sounds/de/0/<?php echo $word;?>.mp3"
          }).jPlayer("play");
        },
        swfPath: "js",
        supplied: "mp3",
        autoplay: "true",
        wmode: "window"
      });
    });
    //]]>
</script>
  <!-- Libraries related to pronunciation scripts -->


  <!-- Google Analytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64047077-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Google Analytics -->
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.sanjaybhowmick.com/hear-the-audio-pronunciation-of-english-dictionary-words-and-learn/">Back to Tutorial</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://www.wavesdream.com/" target="_blank">Website Development</a></li>
      <li><a href="http://www.packoffers.com" target="_blank">Get Latest Deals</a></li>
      <li><a href="http://www.meghpeon.com/" target="_blank">Explore Nature</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="page-header">
      <h1>Simple Word Pronunciation</h1>
   </div>
   <div class="row">

     <div class="col-md-12">
      <div id="jquery_jplayer_1" class="jp-jplayer"></div>
<div id="jp_container_1" class="jp-audio">
  <div class="jp-type-single">
    <div class="jp-gui jp-interface">
      <ul class="jp-controls">
        <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
        <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
        <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
        <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
        <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
        <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
      </ul>
      <div class="jp-progress">
        <div class="jp-seek-bar">
          <div class="jp-play-bar"></div>
        </div>
      </div>
      <div class="jp-volume-bar">
        <div class="jp-volume-bar-value"></div>
      </div>
      <div class="jp-time-holder">
        <div class="jp-current-time"></div>
        <div class="jp-duration"></div>
        <ul class="jp-toggles">
          <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
          <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
        </ul>
      </div>
    </div>
    <div class="jp-title">
      <ul>
        <li>Your Word : <?php echo $word ;?></li>
      </ul>
    </div>
    <div class="jp-no-solution"> <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
  </div>
</div>
<div style="clear:both;"></div>
<div class="title">Type your word inside the box below and click on <i>Pronounce</i> button.</div>
<div class="searchbox">
  <form name="prn" method="post" action="index.php">
    <input type="hidden" name="hid_prn" value="1">
    <p>
      <label for="search word" >
      <input type="text" name="word">
      </label>
      <input type="submit" name="submit" value="Pronounce" class="submit">
    </p>
  </form>
</div>
     </div>

   </div>

   <div class="row">
      <div class="col-md-12">
       <!-- Google Adsense -->  
       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- SB Responsive Image Text -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-7533430201625828"
         data-ad-slot="6526477158"
         data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
        <!-- Google Adsense --> 
     </div>
   </div>
</div>

<footer class="footer">
  <div class="container">
    <p class="text-muted credit">This application is developed by <a href="http://www.sanjaybhowmick.com/" target="_blank">Sanjay Bhowmick</a> and hosted by <a href="http://www.wavesdream.com/" target="_blank">Wavesdream</a>.</p>
  </div>
</footer>

</body>
</html>