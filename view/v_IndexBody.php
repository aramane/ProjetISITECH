<style>


    a.carl{
        text-decoration: none;
        color: black;
        margin-right: 10px;
    }

    a.carl:hover{


        border: 2px  solid rgba(0, 0, 0, 0.52);
        border-radius: 5px;
        text-decoration: none;
        color: #757171;
        margin-right: 10px;

    }


    .v-header{
        height:100vh;
        display:flex;
        align-items:center;
        color:#fff;

    }
    .fullscreen-video-wrap{
        position:absolute;
        top:75;
        left:0;
        width:100%;
        height:92%;
        overflow:hidden;
    }

    .fullscreen-video-wrap video{
        min-height:100%;
        min-width:100%;
    }


    .header-content{
        z-index:2;
    }

    .header-content h1{
        font-size:50px;
        margin-bottom:0;
    }

    .header-overlay{
        height:92%;
        position: absolute;
        top:75;
        left:0;
        width:100%;
        z-index:1;
        background: rgba(0, 0, 0, 0.91);
        opacity:0.85;
    }

    .header-content p{
        font-size:1.5rem;
        display:block;
        padding-bottom:2rem;
    }



</style>


<div class="v-header container">
    <div class="fullscreen-video-wrap">
        <!--  https://www.videvo.net/video/typing-on-computer-white-bg/4475/ -->
        <!-- DO NOT USE THIS VIDEO, I JUST NEEDED A HOSTED VIDEO FOR THIS CODEPEN> USE THE ONE ABOVE -->
        <video src="./media/video/videoIndex.mp4" autoplay="" loop="" type="video/mp4">
        </video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center">
        <h1>Welcome Everyone</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
        <a class="btn">Find Out More</a>
    </div>
</div>

<div class="container" style="text-align: center;">
    <div class="row">


        <a class="carl" href="#">
            <div class="col-sm " style="text-align: center; margin-right: 10px;">
                <img src="./media/img/berline.png" style="height: 100px;">
                <p> <b>Berline</b></p>
            </div>
        </a>

        <a class="carl" href="#">
            <div class="col-sm" style="text-align: center; margin-right: 10px;">
                <img src="./media/img/citadine.png" style="height: 100px;">
                <p><b>Citadine</b></p>
            </div>
        </a>

        <a class="carl" href="#">
            <div class="col-sm" style="text-align: center; margin-right: 10px; ">
                <img src="./media/img/utilitaire.png" style="height: 100px;">
                <p><b>Utilitaire</b></p>
            </div>
        </a>

        <a class="carl" href="#">
            <div class="col-sm" style="text-align: center; margin-right: 10px;">
                <img src="./media/img/suv.png" style="height: 100px;">
                <p> <b>SUV</b></p>
            </div>
        </a>

        <a class="carl" href="#">
            <div class="col-sm" style="text-align: center; margin-right: 10px; ">
                <img src="./media/img/4x4.png" style="height: 100px;">
                <p><b>4 X 4</b></p>
            </div>
        </a>

    </div>
</div>


<div style="height: 500px;">

</div>
