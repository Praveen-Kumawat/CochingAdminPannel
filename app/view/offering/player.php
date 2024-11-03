  <video
     style="width:100%;height:100vh"
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    data-setup="{}"
    poster="<?=ROOT?>/public/images/thumbnails/<?=$info[0]['thumbnail']?>"
  >
    <source src="<?=ROOT?>public/videos/<?=$info[0]['file']?>" type="video/mp4" />
    <source src="<?=ROOT?>public/videos/demo.webm" type="video/webm" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video>
  
