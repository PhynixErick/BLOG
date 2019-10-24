<?php include("header.php");?>
<body>
    <header>
        <div class="flex" style="justify-content: flex-end">
            <div class="col-4 nav-bar flex" style=" flex-basis: 500px">
                <nav class="nav">
                    <h1 id="main-title"></h1>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Archive</a></li>
                        <li><a href="">About me</a></li>
                    </ul>
                </nav>
            </div>
            <div style="width: 55px">
                <div class="div" style="height: auto; background-color:  rgb(233, 233, 233); width: 1px; height:33px;"></div>
            </div>
            <div class="col">
                <div class="div" style="height: auto">
                    <a href="login.php"><i id="user-icon" class="fa fa-user" aria-hidden="true" style=""></i></a>
                </div>
            </div>
        </div>

    </header>
    <div class="flex col-12" style="background-color:#f0f0f0; height: 26px;">
    </div>
    <div class="main">
        <div class="slideshow col-12 flex" style="">
            <div class="slides" style="">
                <!--<input type="radio" name="r" id="r1" checked>
                <input type="radio" name="r" id="r2">-->
                <div class="slide">
                    <img src="https://wallpaperaccess.com/full/508964.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="https:/i.pinimg.com/originals/af/ff/e7/afffe7e59ac30a5e8665da6190ecfa41.jpg" alt="">
                </div>

            </div>

        </div>
        <!--White Bar-->
        <div id="white-space" class="col-12" style="background-color: white; height: 50px;">
        </div>

        <!--
        <div class="" style="display: flex">
            <div classy="col-2"></div>
            <div class="col-7 divisor" style="margin-left: 60px; margin-top: 12px; margin-right: 70px; background-color: silver"></div>
            <div class="col-3"></div>
        </div> -->
        <!--Web Content-->
        <div class="content col-12">
            <!--Left Section-->
            <div id="a-section" class="col-2">
            </div>
            <!--Center Section-->
            <div id="post-section" class="col-7" style="height: auto">
                <div id="posts" class="col-12" style="background-color: white; height: auto">
                    <h1 class="col-12" style="font-size:49px;text-align: left; margin: 30px; margin-left: -2px">Newest Posts</h1>
                    <div id="single-post" style="background-color: #f7f7f7; height: 300px; margin-bottom: 20px;">
                        <div class="post-img col-4" style="height: 300px">
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Section-->
            <div id="c-section" class="col-3">
                <div id="right-menu" class="col-12" style="background-color: white; height: 500px">
                </div>
            </div>
        </div>
    </div>
</body>
<?php include("footer.php");?>