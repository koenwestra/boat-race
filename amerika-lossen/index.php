
<html>
<?php include '../head.php';?>
  
  <link rel="stylesheet" href="css/reset.css"><link rel="stylesheet" href="css/style.css">

  <body>

  <ul id="slide-out" class="sidenav">
    <li>
      <div class="user-view">
      <h5>Boat-Race</h5>
      <a href="#user"><img class="circle" src="../img/logo.png"></a>
      </div>
          <div id="app">
      <div class="sidebar">
        <section class="cameras">
         
          
        </section>
        <section class="scans">
          <h2>Camera's</h2>
          <ul>
            <li v-if="cameras.length === 0" class="empty">Geen camera's gevonden</li>
            <li v-for="camera in cameras">
              <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active">{{ formatName(camera.name) }}</span>
              <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
                <a @click.stop="selectCamera(camera)">{{ formatName(camera.name) }}</a>
              </span>
            </li>
          </ul>
          <transition-group name="scans" tag="ul">
            <li v-for="scan in scans" :key="scan.date" :title="scan.content">{{ scan.content }}</li>
          </transition-group>
        </section>
      </div>
      
    </div>
    </li>
  </ul>
  
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  <main>
    <div class="col s12 center">
        <p class="info-game">
            Missie uitleg: <br /><br />
            Ga naar Amerika en los de goederen om de missie te voltooien. 
          </p>
        <video class="responsive-video" id="preview" ></video> 
    </div>
     <span id="timer"></span>
    </main>
    <script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
  </body>
  
  
  <?php include '../footer.php';?>
</html>



