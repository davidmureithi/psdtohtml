
<body style="padding:0px; margin:0px; background-color:#fff;font-family:Arial, sans-serif">

<script type="text/javascript" src="slide/js/jssor.slider.min.js"></script>
<script>
    jssor_1_slider_init = function() {

        var jssor_1_options = {
            $AutoPlay: true,
            $SlideWidth: 600,
            $Cols: 2,
            $Align: 100,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 800);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        //responsive code end
    };
</script>

<style>
    .jssorb01 {
        position: absolute;
    }
    .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
        position: absolute;
        /* size of bullet elment */
        width: 12px;
        height: 12px;
        filter: alpha(opacity=70);
        opacity: .7;
        overflow: hidden;
        cursor: pointer;
        border: #000 1px solid;
    }
    .jssorb01 div { background-color: gray; }
    .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
    .jssorb01 .av { background-color: #fff; }
    .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
    
    .jssora13l, .jssora13r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 40px;
        height: 50px;
        cursor: pointer;
        background: url('img/a13.png') no-repeat;
        overflow: hidden;
    }
    .jssora13l { background-position: -10px -35px; }
    .jssora13r { background-position: -70px -35px; }
    .jssora13l:hover { background-position: -130px -35px; }
    .jssora13r:hover { background-position: -190px -35px; }
    .jssora13l.jssora13ldn { background-position: -250px -35px; }
    .jssora13r.jssora13rdn { background-position: -310px -35px; }
</style>


<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 300px; overflow: hidden; visibility: hidden;">
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 300px; overflow: hidden;">
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="slide/img/002.jpg" />
        </div>
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="slide/img/003.jpg" />
        </div>
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="slide/img/004.jpg" />
        </div>
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="slide/img/005.jpg" />
        </div>
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="slide/img/006.jpg" />
        </div>
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="slide/img/007.jpg" />
        </div>
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="slide/img/008.jpg" />
        </div>
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="slide/img/009.jpg" />
        </div>
        <a data-u="add" href="http://www.jssor.com" style="display:none">Jssor Slider</a>

    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;" data-autocenter="1">
        <div data-u="prototype" style="width:12px;height:12px;"></div>
    </div>
    <!-- Arrow Navigator -->
    <span data-u="arrowleft" class="jssora13l" style="top:0px;left:30px;width:40px;height:50px;" data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora13r" style="top:0px;right:30px;width:40px;height:50px;" data-autocenter="2"></span>
</div>
<script>
    jssor_1_slider_init();
</script>

</body>
</html>
