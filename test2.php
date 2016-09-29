<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div id="img-grp-wrap">
    <div class="img-wrap">
        <a href="google.com"><img src="http://www.pictures-of-cats.org/images/ragdoll-cat-small-pictures-of-cats.jpg" /></a>
        <a href="google.com"><img src="http://0.tqn.com/d/paganwiccan/1/G/T/1/-/-/BlackCat.jpg" /></a>
        <a href="google.com"><img src="http://2.bp.blogspot.com/-H_iTYn3QQOk/Tfp5aK2vi5I/AAAAAAAAABM/QM45bNOM4HY/s1600/cat-claw.jpg" /></a>
        <a href="google.com"><img src="http://www.pictures-of-cats.org/images/Pixiebob-cat-list-of-cat-breeds-pictures-of-cats.jpg" /></a>
    </div>   
    
    <img src="http://annhowardesign.com/images/arrowright.jpg" class="next" alt="Next"/> 
    <img src="http://annhowardesign.com/images/arrowleft.jpg" class="prev" alt="Previous"/> 
    
</div>


<style type="text/css">
#img-grp-wrap {
    position: relative;
    width: 180px;
    height: 180px;
    margin: 100px auto;
}

.img-wrap {
    position: relative;
    border: 1px solid #CCC;
    width: 180px;
    height: 180px;
}

.img-wrap img {
    position: absolute;
    top: 0;
    left: 0;
    -moz-box-shadow: 1px 1px 4px #CCC;
    padding: 10px;
}

.next, .prev {
    position: absolute;
    cursor: pointer;
    top: 70px;
}

.next {
    right: -40px;
}

.prev {
    left: -40px;
}
</style>
<script type="text/javascript">
jQuery(function($) { 

  $('.img-wrap img:gt(0)').hide();

$('.next').click(function() {
    $('.img-wrap img:first-child').fadeOut().next().fadeIn().end().appendTo('.img-wrap');
});

$('.prev').click(function() {
    $('.img-wrap img:first-child').fadeOut();
    $('.img-wrap img:last-child').prependTo('.img-wrap').fadeOut();
    $('.img-wrap img:first-child').fadeIn();
});

});
</script>