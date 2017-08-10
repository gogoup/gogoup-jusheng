<?php if (!defined('THINK_PATH')) exit();?><link href="/webone/Public/banner/css/owl.carousel.css" rel="stylesheet">
<link href="/webone/Public/banner/css/owl.theme.css" rel="stylesheet">
<script src="/webone/Public/banner/js/jquery.min.js"></script>
<script src="/webone/Public/banner/js/owl.carousel.js"></script>
<style>
    img {width:100% ;}
</style>
<div id="owl-demo" class="owl-carousel">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><a class="item"><img src="/webone/Public/<?php echo ($list["b_img"]); ?>" alt="<?php echo ($list["b_alt"]); ?>"  name="<?php echo ($list["b_name"]); ?>" title="<?php echo ($list["b_title"]); ?>"></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<script>


    $(function(){
        var time = 7;    //进度条时间，以秒为单位，越小越快

        var $progressBar, $bar, $elem, isPause, tick, percentTime;

        $('#owl-demo').owlCarousel({
            slideSpeed: 500,
            paginationSpeed: 500,
            singleItem: true,
            afterInit: progressBar,
            afterMove: moved,
            startDragging: pauseOnDragging
        });

        function progressBar(elem){
            $elem = elem;
            buildProgressBar();
            start();
        }

        function buildProgressBar(){
            $progressBar = $('<div>',{
                id:'progressBar'
            });
            $bar = $('<div>',{
                id:'bar'
            });
            $progressBar.append($bar).insertAfter($elem.children().eq(0));
        }

        function start(){
            percentTime = 0;
            isPause = false;
            tick = setInterval(interval, 10);
        }

        function interval(){
            if(isPause === false){
                percentTime += 1 / time;
                $bar.css({
                    width: percentTime+'%'
                });
                if(percentTime >= 100){
                    $elem.trigger('owl.next')
                }
            }
        }

        function pauseOnDragging(){
            isPause = true;
        }

        function moved(){
            clearTimeout(tick);
            start();
        }

        $elem.on('mouseover',function(){
            isPause = true;
        })

        $elem.on('mouseout',function(){
            isPause = false;
        });
    });
</script>