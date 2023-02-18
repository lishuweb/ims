<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />


    <style type="text/css">
        @charset "UTF-8";
        .center_carousel .slick-track {
            padding: 40px 0;
        }
        .center_carousel .slick-slide:not(.slick-current) {
            filter: blur(7px) grayscale(80%);
            transform: scale(0.6);
            transition: 1000ms;
        }
        .center_carousel .slick-current img {
            animation: swing 3.5s ease-in-out forwards infinite;
        }
        .center_carousel .slick-current .shadow {
            animation: swing-shadow 3.5s ease-in-out forwards infinite;
        }
        .center_carousel .slick-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%) rotate(45deg);
            z-index: 99;
            border: solid 2px #10c1ef;
            width: 40px;
            height: 40px;
            background: transparent;
            text-indent: -999px;
        }
        .center_carousel .slick-arrow:hover {
            cursor: pointer;
        }
        .center_carousel .slick-arrow:after {
            color: #fff;
            display: block;
            font-size: 33px;
            line-height: 40px;
            position: relative;
            text-indent: 0;
            transform: rotate(-45deg);
        }
        .center_carousel .slick-arrow.slick-prev {
            left: 25%;
        }
        .center_carousel .slick-arrow.slick-prev:after {
            content: "‹";
            left: -3px;
            top: -18px;
        }
        .center_carousel .slick-arrow.slick-next {
            right: 25%;
        }
        .center_carousel .slick-arrow.slick-next:after {
            content: "›";
            left: -1px;
            top: -20px;
        }

        .product_wrapper {
            margin: 0 auto;
  /*top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);*/
  position: relative;
  width: 400px;
  height: 600px;
  filter: blur(0px) grayscale(0%);
  transform: scale(1);
}
.product_wrapper .product_container {
    position: relative;
    height: 400px;
    width: 400px;
    transform-style: preserve-3d;
    perspective: 1000;
}
.product_wrapper .product_container .product_3d {
    transform: rotate3d(0, 0, 0, 0deg);
    transition: 700ms;
    height: 100%;
}
.product_wrapper .product_container .product_3d .product_background {
    background: #F2F2F2;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-transform: skew(4deg, 2deg);
    transform: skew(4deg, 2deg);
    transition: 700ms;
}
.product_wrapper .product_container .product_3d .product_background .product_img-3d {
    transform: rotate3d(0, 0, 0, 0deg);
    transition: 700ms;
}
.product_wrapper .product_container .product_3d .product_background .product_img-3d img {
    display: block;
    margin: 40px auto 0;
    max-width: 80%;
    transform: skew(-4deg, -2deg);
    /*transform-origin: 50% 0;*/
}
.product_wrapper .shadow {
    background: rgba(0, 0, 0, 0.3) none repeat scroll 0 0;
    border-radius: 50%;
    bottom: 0;
    filter: blur(6px);
    height: 20px;
    left: 0;
    margin: 0 auto;
    opacity: 0.4;
    position: absolute;
    right: 0;
    width: 145px;
    transform: rotate3d(0, 0, 0, 0deg);
    transition: 700ms;
}
.product_wrapper:hover {
    cursor: pointer;
}
.product_wrapper:hover .product_3d {
    -webkit-transform: rotate3d(1, 4, 4, 4deg);
    transform: rotate3d(1, 4, 4, 4deg);
    /*transform: rotate3d(0, 10, 0, 10deg);*/
}
.product_wrapper:hover .product_3d .product_background {
    background: #dedede;
}
.product_wrapper:hover .product_3d .product_background .product_img-3d {
    transform: rotate3d(0, 14, -4, 14deg);
}
.product_wrapper:hover .shadow {
    transform: rotate3d(0, 7, 0, 7deg);
}

@keyframes swing {
    0%, 100% {
        transform: rotate(1deg);
    }
    50% {
        transform: rotate(-0.5deg);
    }
}
@keyframes swing-shadow {
    0%, 100% {
        left: -10px;
    }
    50% {
        left: 10px;
    }
}
</style>
</head>
<body>

    <div class="center_carousel">
        <div class="product_wrapper">
            <div class="product_container">
                <div class="product_3d">
                    <div class="product_background">
                        <div class="product_img-3d">
                            <img src="https://image.ibb.co/fkd5WF/jakke.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
        </div>
        <div class="product_wrapper">
            <div class="product_container">
                <div class="product_3d">
                    <div class="product_background">
                        <div class="product_img-3d">
                            <img src="https://image.ibb.co/fkd5WF/jakke.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
        </div>
        <div class="product_wrapper">
            <div class="product_container">
                <div class="product_3d">
                    <div class="product_background">
                        <div class="product_img-3d">
                            <img src="https://image.ibb.co/fkd5WF/jakke.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
        </div>
        <div class="product_wrapper">
            <div class="product_container">
                <div class="product_3d">
                    <div class="product_background">
                        <div class="product_img-3d">
                            <img src="https://image.ibb.co/fkd5WF/jakke.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
        </div>
    </div>
    <script type="text/javascript">
        $('.center_carousel').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  variableWidth: true
});
    </script>
</body>
</html>