<style>
    img.zoom {
        width: 50px;
        height: auto;
        -webkit-transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        -ms-transition: all .2s ease-in-out;
    }

    img.zoom2 {
        width: 100%;
        height: auto;
        -webkit-transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        -ms-transition: all .2s ease-in-out;
    }

    .transition {
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }
    .transition2 {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1);
    }
</style>

<div class="iconos container animated zoomIn" style="margin-top: 4vh">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="margin-bottom: -20px; margin-top:-20px">
                    <a href="https://www.facebook.com/KunturnawiCine"><img src="img/logos/facebook.png" width="50px" alt="" class="zoom"></a>
                    <a href="https://www.instagram.com/kunturnawi/?hl=es-la"><img src="img/logos/insta.png" width="50px" alt="" class="zoom"></a>
                    <a href="https://www.youtube.com/channel/UCplMYDazTGjVJNxukH17EzA"><img src="img/logos/youtube.png" width="50px" alt="" class="zoom"></a>
                    <a href="https://twitter.com/kunturnawicine?lang=es"><img src="img/logos/twitter.png" width="50px" alt="" class="zoom"></a>
                </div>
            </div>
</div>

<script>
    $(document).ready(function(){
        $('.zoom').hover(function() {
            $(this).addClass('transition');
        }, function() {
            $(this).removeClass('transition');
        });
        $('.zoom2').hover(function() {
            $(this).addClass('transition2');
        }, function() {
            $(this).removeClass('transition2');
        });
    });
    </script>
