<style>
.container {
width: 600px;
height: 335px;
margin: 0 auto;
position:relative;
}

.nav {
width: 500px;
height: 35px;
margin-left: 1px;
}

.previous {
float:left;
position:absolute;
left: 0;
margin: 50px 0 0 10px;
}

.next {
    position: absolute;
    right: 0;
    margin: 50px 10px 0 0;
    float: right;
}

.tab {
float: left;
height: 35px;
padding-left: 7px;
padding-right: 7px;
text-align: center;
line-height: 35px;
border: 1px solid #777777;
border-bottom: none;
margin-left: -1px;

-moz-border-radius-topleft: 5px;
-moz-border-radius-topright: 5px;
-moz-border-radius-bottomright: 0px;
-moz-border-radius-bottomleft: 0px;
-webkit-border-radius: 5px 5px 0px 0px;
border-radius: 5px 5px 0px 0px;
}

.tab:hover {
background: #eeeeee;
}

.tab.active {
    background: #eee;
}

a {
text-decoration: none;
color: #555555;
display: block;
width: 100%;
height: 100%;
}

a:hover {
color: #333333;
}

.main {
width: 600px;
height: 300px;

border: 1px solid #777777;

-moz-border-radius-topleft: 0px;
-moz-border-radius-topright: 5px;
-moz-border-radius-bottomright: 5px;
-moz-border-radius-bottomleft: 5px;
-webkit-border-radius: 0px 5px 5px 5px;
border-radius: 0px 5px 5px 5px;

overflow: hidden;
}

.content {
width: 500px;
height: 300px;
font-family: arial;
font-size: 14px;
line-height: 21px;
overflow:hidden;
float: left;
margin: 0 50px;
}


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$ = jQuery;
$(document).ready(function() {

    var height = 300,
        width = 600,

        slides = 5,
            
        tabs = $('.tab'),
        contentNum = 1;
    
    $('.main_inner').css({
        width: slides * width
    });

    $('a.tab_link').click(function() {

        tabs.filter('.active').removeClass('active');
        $(this).parent().addClass('active');
        
        // make sure contentNum is a number and not a string
        contentNum = parseInt( $(this).attr('rel'), 10 );

        $('.main_inner').animate({
            marginLeft: '-' + (width * contentNum - width)
        }, 600);

        return false;

    });

    $('.previous a').click(function(){
        if (contentNum > 1) {
            // find previous tab, trigger a click on the link
            // subtract 2 because eq() uses zero based index
            tabs.eq(contentNum - 2).find('a').trigger('click');
        }
        return false;
    });
    
    $('.next a').click(function(){
        if (contentNum < slides) {
            // find previous tab, trigger a click on the link
            // contentNum doesn't need + 1 because it is +1 relative to eq()
            // which is a zero based index
            tabs.eq(contentNum).find('a').trigger('click');
        }
        return false;
    });
    
});
</script>
<div class="container">
    <div class="nav" style="display:none;">
        <div class="tab active"><a class="tab_link" id="tab_1" href="#content1" rel="1">Content 1</a></div>
        <div class="tab"><a class="tab_link" id="tab_2" href="#content2" rel="2">Content 2</a></div>
        <div class="tab"><a class="tab_link" id="tab_3" href="#content3" rel="3">Content 3</a></div>
        <div class="tab"><a class="tab_link" id="tab_4" href="#content3" rel="4">Content 4</a></div>
        <div class="tab"><a class="tab_link" id="tab_5" href="#content3" rel="5">Content 5</a></div>
    </div>
    <div class="previous"><a href="#">Prev</a></div>
    <div class="next"><a href="#">Next</a></div>
    <div class="main">
        <div class="main_inner">
            <div class="content" id="content1">
                <p>This is content 1. Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.</p>
            </div>
            <div class="content" id="content2">
                <p>This is content 2.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.</p>
            </div>
            <div class="content" id="content3">
                <p>This is content 3.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.</p>
            </div>
            <div class="content" id="content4">
                <p>This is content 4.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.</p>
            </div>
            <div class="content" id="content5">
                <p>This is content 5.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.  Lorem ipsum dolor sit amet, consectur amet ipsum amet.</p>
            </div>   
        </div>
    </div>
    
</div>
