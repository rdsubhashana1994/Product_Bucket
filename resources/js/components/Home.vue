<template>
    <div>
        <!--    home page navigation bar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent homepage-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"/>
            </button>
            <router-link class="navbar-brand home-nav-logo" to="/">Product Bucket</router-link>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item mr-4">
                        <router-link class="home-nav-route" to="/addproduct">New Product</router-link>
                    </li>
                    <li class="nav-item mr-4">
                        <router-link class="home-nav-route" to="/bucket">My Bucket</router-link>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item mr-4">
                            <router-link class="home-nav-route" to="/aboutus">About Us</router-link>
                        </li>
                        <li class="nav-item mr-4">
                            <router-link class="home-nav-route" to="/contactus">Contact Us</router-link>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>

        <!--    home page image slider-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../images/slides/laptop.jpg" alt="Second slide">
                </div>
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../../images/slides/headphone.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../images/slides/shoe.jpg" alt="Third slide">
                </div>
            </div>
<!--            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
<!--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                <span class="sr-only">Previous</span>-->
<!--            </a>-->
<!--            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
<!--                <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                <span class="sr-only">Next</span>-->
<!--            </a>-->

        </div>

<!--        <div class="button-div">-->
<!--            <router-link class="button-div-route" to="/bucket">Get Started</router-link>-->
<!--        </div>-->
        <button class="button-div btn btn-info">
            <router-link class="button-div-route" to="/bucket">Get Started</router-link>
        </button>

        <h5 class="title-quote">
            Lorem ipsum dolor sit amet
        </h5>

        <span class="quote">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam eos exercitationem hic modi veritatis?
            Dolores eligendi explicabo vel. Dignissimos, natus nisi quod sed similique tenetur vel. Doloremque inventore
            quidem vero.
        </span>



    </div>
</template>

<style>
    .home-nav-logo {
        color: orange !important;
    }

    .home-nav-route {
        color: #ffed4a !important;
    }

    .homepage-navbar {
        margin-top: -56px !important;
    }

    .carousel {
        margin-top: -56px !important;
        z-index: -1;
    }

    .button-div {
        border: unset !important;
        width: 175px;
        height: 50px;
        border-radius: 30px;
        background-color: orangered;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 20%;
        margin: auto;
    }

    .button-div:hover {
        background-color: orange !important;
    }

    .button-div-route {
        color: white;
        text-decoration: unset !important;
        text-align: center;
        position: absolute;
        left: 0;
        right: 0;
        top: 25%;
        bottom: 0;
        margin: auto;
    }

    .button-div-route:hover {
        color: white !important;
    }

    .quote {
        position: absolute;
        top: 46%;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        color: lightyellow;
        padding-left: 100px;
        padding-right: 100px;
    }

    .title-quote {
        position: absolute;
        top: 60%;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        color: lightyellow;
    }

</style>

<script>

</script>


