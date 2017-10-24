<html>
<head>
  <meta charset="UTF-8">
  <title>OddPillars - Tools</title>


  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

  <link rel="stylesheet" type="text/css" href="../style.css" />
  <link rel="stylesheet" type="text/css" href="/tools/styles.css" />

  <link rel="stylesheet" type="text/css" href="https://codingforkids.us/animate.css" />
  <link rel="stylesheet" type="text/css" href="https://codingforkids.us/styles/jquery-ui-1.10.4.custom.min.css"
  <link rel="stylesheet" type="text/css" href="https://www.oddpillars.com/blog/style.css" />

  <!--<link href="https://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet"> -->

  <script src="app.js"></script>


</head>

<body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <script src="https://codingforkids.us/javascript/jquery-ui.js"></script>

<script src="../scripts.js"></script>

<script src="../dist/wow.min.js"></script>
      <script>
       new WOW().init();
     </script>



<!---BEGIN WEBSITE CONTENT------------------------------------------------>

<!--Navigation bar-->

  <?php include "../nav.php"; ?>

<!--end of Navigation bar-->

<!--tools main index-->

<div class="toolspage">
  <div class="septcon clearfix">
    <div class="toolname" id="tooltitle">Septernary Cipher</div>
      <div class="topbox">
        <input required type="text" id="input" placeholder="Word or Phrase" class="word-form" onkeydown = "if (event.keyCode == 13)
                        document.getElementById('submit').click()"    >
        <button class="btn btn-primary" id="submit" style="padding: 10px 24px; font-size: 18px;">Calculate</button>

        <button class="btn btn-danger" id="reset" style="padding: 10px 24px; font-size: 18px;">Reset</button>

      </div>
      <div class="bottombox">
        <div class="wordgiven toolname">WORD GIVEN</div>
        <div class="wordgivennum toolnameb">4254 75551</div>
        <div class="wordgivennum toolnameb">6 5</div>
        <div class="added">
          <b>Total</b><br />
          <b id="total">38</b>
        </div>
        <div class="added">
          <b>Reduced</b><br />
          <b id="reduced">2</b>
        </div>
      </div>

    </div>
  </div>
</div>

<!--end of tools main index-->

<!--Latest Blog-->

<?php include "../latestblog.php"; ?>

<!--End latest Blog-->





<!--Footer-->

<?php include "../footer.php"; ?>

<!--end of Footer-->


<script src="../scroll.js"></script>
<script src="app.js"></script>

</body>
</html>
