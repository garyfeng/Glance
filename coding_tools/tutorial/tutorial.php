<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Tutorial</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <link rel="stylesheet" href="css/youtube.css" />
  <link rel="stylesheet" href="css/bar.css" />
  <link rel="stylesheet" href="css/button2.css" />
  <link rel="stylesheet" href="https://roc.cs.rochester.edu/LegionJS/LegionTools/LegionJS_Libraries/legion.css" />
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="scripts/vars.js"></script>
  <script src="https://roc.cs.rochester.edu/LegionJS/LegionTools/LegionJS_Libraries/legion.js"></script>
  <script src="scripts/gup.js"></script>

  <script src="scripts/logVisited.js"></script>

  <!--link rel="stylesheet" href="/resources/demos/style.css" /-->

</head>

<body>
<div id="instructions_section">

    <div class="expand"><a href="#" id="instruction_link">Click to hide instructions!</a></div>
<div id="instructions_header">Instructions (Tutorial):</div>
    <div class="content">
      <p> This is a tutorial to introduce you to our task. Once you are able to accuratley complete the tutorial, you will be forwarded to the main task. You will only be asked to complete the tutorial once.</p>
      <p> Mark each time you see <strong id = "action">gesturing towards the ball</strong> in the video.</p>
      <!--p> You can rewind at any time to re-watch for events.</p-->
      <!--p> If there are no events at all, hit <strong> SUBMIT </strong> once the video is finished.</p-->
      <p> Mark each event by clicking the green button when it begins.</p>
      <p>Be as acurate as you can be.</p>

      <p><u>Description of Event:</u> <span id ="description">Man gesturing towards red ball will his hand</span>.</p>
    </div>
</div>

<div id="videoPlayer">
<div id="player"></div>
  <div id = "controls">
    <a class="button" id="play">
      <span id ="but_swi" class="_play">Play</span>
    </a>
    <div style="float:right;"> seconds</div>
    <div id="playTime">0</div>
    <div id="timeSlider"></div>
  </div>
  <script src="scripts/youtube.js"></script>
</div>
  <br/>
  <div id="set-buttons">
    <a class="button" data-state="setStart" id ="toggleButton">Set Start</a>
  </div>
    <br/>
<div id="slider-container"></div>

<script>
var url;
$(document).ready(function(){

<?php
  if($_REQUEST['justTutorial'] == true){
    echo "url = 'https://roc.cs.rochester.edu/LegionJS/LegionTools/Retainer/submitOnly.php?task=videocoding1';";
  }
  else{
    echo "url = 'https://roc.cs.rochester.edu/LegionJS/LegionTools/Retainer/index.php?task=videocoding1';";
  }
?>

  // alert(gup("useRetainer"));
  //url = "https://roc.cs.rochester.edu/convInterface/videocoding/tools/workrouter/index.php?" //bypass retainer
  // garyfeng
  url = "../workrouter/index.php?" //bypass retainer
  // url = "http://roc.cs.rochester.edu/LegionJS/LegionTools/Retainer/index.php?task=videocoding1";
  // url += "&setupId=" + gup("setupId");
  url += "turkSubmitTo=" + gup("turkSubmitTo");
  url += "&workerId=" + gup("workerId");
  url += "&assignmentId=" + gup("assignmentId");
  url += "&hitId=" + gup("hitId");
  url += "&mode=" + gup("mode");
  url += "&lineup=" + gup("lineup");

  $('body').on('click', '.removeButton', function() {
    alert(this);
    $(this).parents("div:first").remove();
  });

});

</script>
<!-- <button id ="addbar">Add a Bar (Enables if all bars are greyed out)</button> -->

<!-- <a class="button" id ="complete">SUBMIT</a> -->


<!--button id ="testb">Test</button-->

<!-- LegionJS -->
  <div id="instructions"></div>
<!-- End LegionJS -->
<div id="continueText">(Please finish watching the video before continuing)</div>


  <script src="scripts/firstbar.js"></script>
  <script src="scripts/barappend.js"></script>
  <script src="scripts/logging.js"></script>
  <!-- // <script src="submitBehavior.js"></script> -->
  <script src="scripts/instructions.js"></script>

</body>
</html>
</body>
</html>
