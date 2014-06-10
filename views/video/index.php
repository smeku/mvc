<?php // print_r($this->videoLosowe); ?>


<div class="row">
    <div class="col-md-8">
        <div class="video">
            <h3><?php echo $this->video['nazwa']; ?></h3>
        
            <video id="video" class="video-js vjs-default-skin" controls autoplay preload="none" width="720" height="384"
                poster=""
                data-setup="{}">
                <source src="http://<?php echo $this->video['serwer']; ?>/video/<?php echo $this->video['id']; ?>.mp4" type='video/mp4' />
                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
            </video> 
            
            <div class="row">
                <div class="col-md-8">
                     <span>Data dodania: <?php echo $this->video['date']; ?>, dodał: <?php echo $this->video['dodal']; ?></span>
                </div>
                <div class="col-md-4 text-right">
                       <span>Odslon: <?php echo $this->video['odslon']; ?></span>   
                </div>               
            </div> 
         
        </div>
    </div>
    <div class="col-md-4">
        
        <h3>Losowo wybrane:</h3>
        <?php foreach ($this->videoLosowe as $value ): ?>
        
           <div class="row" style="margin-bottom:5px">
                <a href="/video/watch/<?php echo $value['id'] ?>">
                <div class="col-md-5">
                   <img src="http://<?php echo $value['serwer']; ?>/img/<?php echo $value['id']; ?>.jpg" width="150" height="84" />   
                </div>
                <div class="col-md-7">
                     <?php echo $value['nazwa']; ?>
                    <p class="small">odslon: <?php echo $value['odslon']; ?></p>
                </div>    
                </a>    
           </div> 
            
        <?php endforeach; ?>

           
        
    </div>
</div> 

