<html>
<?php include '../head.php';?>

<body >
  <header>
    <div class="container">
      <a href="/"><img class="logo center-align responsive-img" src="../img/logo.png"/></a>
    </div>
  </header>
  <main>

    <div class="container button-container">
      <div class="row">
        <div class="card blue-grey darken-1 col s10 m8 offset-s1 offset-m2 center">
          <div style="color:#fff">
            <h4>Missie voltooid</h4> <br /><br /> Het losen in Amerika is voltooid. Je hebt de missie succesvol volbracht!
            <br /> Je score is: <span id="score"></span>
            <br /> <br /> Klik hieronder om nog eens te spelen.
          </div>
        </div>
        <div class="col s12 center">
          <a class="waves-effect waves-light btn-large" href="/"><i class="material-icons left">directions_boat</i>Play again</a>
        </div>
      </div>
    </div>
    <span id="timer"></span>
  </main>

  <script type="text/javascript" src="../js/main.js"></script>
  <script type="text/javascript" src="stop.js"></script>
  <?php include '../footer.php';?>
</body>

</html>