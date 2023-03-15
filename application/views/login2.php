<!doctype html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Easy Fullscreen HTML5 Background Video</title>
  <meta name="keywords" content="css3, html5, js, background video, fullscreen video">
  <meta name="description" content="Super easy to implement HTML5 fullscreen background video library in JavaScript.">

  <style>
    * {
      margin: 0; padding: 0;
    }

    html, body {
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    #container {
      overflow: hidden;
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
    }

    #background_video {
      position: absolute;

      top: 50%; left: 50%;
      transform: translate(-50%, -50%);

      object-fit: cover;
      height: 100%; width: 100%;
    }

    #video_cover {
      position: absolute;

      width: 100%; height: 100%;

      background: url('video_cover.jpeg') no-repeat;
      background-size: cover;
      background-position: center;
    }

    #video_controls {
      position: absolute;
      left: 50%;
      transform: translate(-50%, 0);
    }

    #play img {
      width: 100px;
    }
    #pause img {
      width: 90px;
    }
    #pause {
      display: none;
    }

    @media (min-width: 768px) {
      #video_controls {
        display: none;
      }
    }

    /* Demo page specific styles */

    body {
      text-align: center;
      font-family: 'proxima-nova', Helvetica;
    }

    #container {
      height: 100%;
    }
    
    
    
    
    

    #overlay {
      position: absolute;
      top: 0; right: 0; left: 0; bottom: 0;
      background: rgba(0,0,0,0);
    }

    #main_content {
      z-index: 2;
      position: relative;
      display: inline-block;

      /* Vertical center */
      top: 65%;
      transform: translateY(-80%);
    }
    
    
    
    
    
    
    

    #main_content h1 {
      text-transform: uppercase;
      font-weight: 600;
      font-family: 'proxima-nova-condensed', Helvetica;
      color: #fff;
      font-size: 35px;
    }

    #main_content .sub_head {
      color: rgba(255,255,255,0.5);
      font-size: 18px;
    }

    #main_content .info {
      color: rgba(255,255,255,0.5);
      font-size: 12px;
      margin-top: 10px;
    }

    #links {
      margin-top: 50px;
    }

    #links a {
      border: 2px solid rgba(255,255,255,0.20);
      border-radius: 61px;
      font-size: 12px;
      color: #FFFFFF;
      letter-spacing: 1px;
      text-decoration: none;
      text-transform: uppercase;
      padding: 10px 25px;
      display: inline-block;
      margin-right: 15px;
    }

    #footer {
      position: absolute;
      bottom: 0; left: 0; right: 0;
    }
    #footer a {
      color: rgba(255,255,255,0.5);
      text-decoration: none;
      margin: 10px;
      font-size: 12px;
    }
    #footer a:first-child {
      float: left;
    }
    #footer a:last-child {
      float: right;
    }
  </style>

  <script src="https://use.typekit.net/nlq1kdt.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  
  
  
  
  
  <script>
    function mostrarContrasena() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>
  
  
  
  
  
  
  
  
  
  
  
  
</head>
<body>
  <div id="container">
    <video id="background_video" loop muted></video>
    <div id="video_cover"></div>
    <div id="overlay"></div>

    <div id="video_controls">
      <span id="play">
        <img src="play.png">
      </span>
      <span id="pause">
        <img src="pause.png">
      </span>
    </div>

    <section id="main_content">
      <div id="head">
       
          
            <?php $fattr = array('class' => 'form-signin');
    echo form_open(site_url() . 'main/login/', $fattr);
    ?>


    <div class="form-group has-feedback">



        <div class="form-group">

            <?php
            echo form_input(array(
                'name' => 'email',
                'id' => 'email',
                'placeholder' => 'Correo electrónico',
                'class' => 'form-control',
                'title' => 'Introduce tu Correo Electrónico',
                'value' => set_value('email')));
            ?>

<?php echo form_error('email') ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>




    </div>




    <div class="form-group has-feedback">
        <div class="form-group">
            <?php
            echo form_password(array(
                'name' => 'password',
                'id' => 'password',
                'placeholder' => 'Contraseña',
                'class' => 'form-control',
                'title' => 'Introduce tu Contraseña',
                'value' => set_value('password')));
            ?>
<?php echo form_error('password') ?>
        </div>



        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>

    <input type="checkbox" onclick="mostrarContrasena()" title="Selecciona para mostrar el campo de contraseña en modo texto"> <font color="black">
    Mostrar Contraseña</font>

    <?php if ($recaptcha == 'yes') { ?>
        <div style="text-align:center;" class="form-group">
            <div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
        </div>
        <?php
    }
    echo form_submit(array('value' => 'Ingresar', 'title' => 'Da clic para ingresar al sistema', 'class' => 'btn btn-lg btn-success btn-block'));
    ?>
<?php echo form_close(); ?>
    <br>

    <center>

        <a title="Da clic para recuperar tu contraseña" style="color:#ffffff" href="<?php echo site_url(); ?>main/forgot"> ¿Olvidaste tu contraseña? </a></p></center>
    <br> 

</div>
          
          
          
          
          
          
          
          
         
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
      </div>

      <div id="links">
        <a href="https://github.com/rishabhp/bideo.js">View on Github</a>
        <a href="http://codetheory.in/html5-fullscreen-background-video/">How it works</a>
      </div>
    </section>
  </div>

  <div id="footer">
    <!--<a href="http://twitter.com/_rishabhp">Follow on Twitter</a>

    <a href="https://twitter.com/share" class="twitter-share-button" data-via="_rishabhp">Tweet</a>-->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!--
    <a href="https://www.youtube.com/watch?v=w7JrHIHi8t0" target="_blank">
      Video by shortenit
    </a>
    -->
  </div>

  <script>/**
 * Full Background Video
 *
 * More info on Audio/Video Media Events/Attributes/Methods
 * - https://developer.mozilla.org/en-US/docs/Web/Guide/Events/Media_events
 * - http://www.w3schools.com/tags/ref_av_dom.asp
 */

(function (global) {

  // Define Bideo constructor on the global object
  global.Bideo = function () {

    // Plugin options
    this.opt = null;
    // The Video element
    this.videoEl = null;

    // Approximate Loading Rate
    //
    // The value will be a number like 0.8
    // which means to load 4 seconds of the video
    // it takes 5 seconds. If the number is super low
    // like 0.2 (regular 3g connections) then you can
    // decide whether to play the video or not.
    // This behaviour will be controller with
    // the `acceptableLoadingRate` option.
    this.approxLoadingRate = null;

    // Methods to which `this` will be bound
    this._resize = null;
    this._progress = null;

    // Time at which video is initialized
    this.startTime = null;

    this.onLoadCalled = false;

    // Initialize and setup the video in DOM`
    this.init = function (opt) {
      // If not set then set to an empty object
      this.opt = opt = opt || {};

      var self = this;

      self._resize = self.resize.bind(this);

      // Video element
      self.videoEl = opt.videoEl;

      // Meta data event
      self.videoEl.addEventListener('loadedmetadata', self._resize, false);

      // Fired when enough has been buffered to begin the video
      // self.videoEl.readyState === 4 (HAVE_ENOUGH_DATA)
      self.videoEl.addEventListener('canplay', function () {
        // Play the video when enough has been buffered
        if (!self.opt.isMobile) {
          self.opt.onLoad && self.opt.onLoad();
          if (self.opt.autoplay !== false) self.videoEl.play();
        }
      });

      // If resizing is required (resize video as window/container resizes)
      if (self.opt.resize) {
        global.addEventListener('resize', self._resize, false);
      }

      // Start time of video initialization
      this.startTime = (new Date()).getTime();

      // Create `source` for video
      this.opt.src.forEach(function (srcOb, i, arr) {
        var key
          , val
          , source = document.createElement('source');

        // Set all the attribute key=val supplied in `src` option
        for (key in srcOb) {
          if (srcOb.hasOwnProperty(key)) {
            val = srcOb[key];

            source.setAttribute(key, val);
          }
        }

        self.videoEl.appendChild(source);
      });

      if (self.opt.isMobile) {
        if (self.opt.playButton) {
          self.opt.videoEl.addEventListener('timeupdate', function () {
            if (!self.onLoadCalled) {
              self.opt.onLoad && self.opt.onLoad();
              self.onLoadCalled = true;
            }
          });


          self.opt.playButton.addEventListener('click', function () {
            self.opt.pauseButton.style.display = 'inline-block';
            this.style.display = 'none';

            self.videoEl.play();
          }, false);

          self.opt.pauseButton.addEventListener('click', function () {
            this.style.display = 'none';
            self.opt.playButton.style.display = 'inline-block';

            self.videoEl.pause();
          }, false);
        }
      }

      return;
    }

    // Called once video metadata is available
    //
    // Also called when window/container is resized
    this.resize = function () {
      // IE/Edge still don't support object-fit: cover
      if ('object-fit' in document.body.style) return;

      // Video's intrinsic dimensions
      var w = this.videoEl.videoWidth
        , h = this.videoEl.videoHeight;

      // Intrinsic ratio
      // Will be more than 1 if W > H and less if H > W
      var videoRatio = (w / h).toFixed(2);

      // Get the container DOM element and its styles
      //
      // Also calculate the min dimensions required (this will be
      // the container dimentions)
      var container = this.opt.container
        , containerStyles = global.getComputedStyle(container)
        , minW = parseInt( containerStyles.getPropertyValue('width') )
        , minH = parseInt( containerStyles.getPropertyValue('height') );

      // If !border-box then add paddings to width and height
      if (containerStyles.getPropertyValue('box-sizing') !== 'border-box') {
        var paddingTop = containerStyles.getPropertyValue('padding-top')
          , paddingBottom = containerStyles.getPropertyValue('padding-bottom')
          , paddingLeft = containerStyles.getPropertyValue('padding-left')
          , paddingRight = containerStyles.getPropertyValue('padding-right');

        paddingTop = parseInt(paddingTop);
        paddingBottom = parseInt(paddingBottom);
        paddingLeft = parseInt(paddingLeft);
        paddingRight = parseInt(paddingRight);

        minW += paddingLeft + paddingRight;
        minH += paddingTop + paddingBottom;
      }

      // What's the min:intrinsic dimensions
      //
      // The idea is to get which of the container dimension
      // has a higher value when compared with the equivalents
      // of the video. Imagine a 1200x700 container and
      // 1000x500 video. Then in order to find the right balance
      // and do minimum scaling, we have to find the dimension
      // with higher ratio.
      //
      // Ex: 1200/1000 = 1.2 and 700/500 = 1.4 - So it is best to
      // scale 500 to 700 and then calculate what should be the
      // right width. If we scale 1000 to 1200 then the height
      // will become 600 proportionately.
      var widthRatio = minW / w;
      var heightRatio = minH / h;

      // Whichever ratio is more, the scaling
      // has to be done over that dimension
      if (widthRatio > heightRatio) {
        var new_width = minW;
        var new_height = Math.ceil( new_width / videoRatio );
      }
      else {
        var new_height = minH;
        var new_width = Math.ceil( new_height * videoRatio );
      }

      this.videoEl.style.width = new_width + 'px';
      this.videoEl.style.height = new_height + 'px';
    };

  };

}(window));
</script>
  <script>(function () {

  var bv = new Bideo();
  bv.init({
    // Video element
    videoEl: document.querySelector('#background_video'),

    // Container element
    container: document.querySelector('body'),

    // Resize
    resize: true,

    // autoplay: false,

    isMobile: window.matchMedia('(max-width: 768px)').matches,

    playButton: document.querySelector('#play'),
    pauseButton: document.querySelector('#pause'),

    // Array of objects containing the src and type
    // of different video formats to add
    src: [
      {
        src: '<?php echo base_url(); ?>assets/login/mayo2019.mp4',
        type: 'video/mp4'
      },
      {
        src: 'night.webm',
        type: 'video/webm;codecs="vp8, vorbis"'
      }
    ],

    // What to do once video loads (initial frame)
    onLoad: function () {
      document.querySelector('#video_cover').style.display = 'none';
    }
  });
}());
</script>

  <script>
    if (window.location.host.indexOf('github.io') !== -1 && window.location.protocol !== "https:") {
      window.location.protocol = "https";
    }
  </script>
</body>
</html>
