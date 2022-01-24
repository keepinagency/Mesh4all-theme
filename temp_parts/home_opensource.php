<?php 
/*** Plantilla para el home OPEN SOURCE***/   
$ser = new WP_Query(array('pagename' => 'opensource'));

?>
<div class="sec-opensource p-0 m-0" id="opensource">

    <img src="<?= mesh4all_IMG.'wave-line.png'?>" alt="Mesh4All" 
                class="p-0 m-0 w-100 flipimg flipandrotate180"
                style="z-index:0; height: auto; max-width:100%; position:absolute; z-index:-4">

    <div id="miCarousel" 
        class="carousel slide row ratio ratio-16x9 p-0 m-0" 
        data-ride="carousel">
        <div class="carousel-inner h-100 p-0 w-100">
            <div class="carousel-item col-12 active h-100 p-0 m-0">
                <div class="row p-0 m-0 h-100">
                    <div class="col-5 p-0 m-0 h-100 d-flex flex-column ">
                        <div class="p-0 m-0 h-100 d-flex flex-row ">
                            <div class="col-3 p-0 m-0">
                                &nbsp;
                            </div>
                            <div class="col-9 p-0 m-0">
                                <h1 class="pt-5">OPEN SOURCE</h1>
                                <h5 class="linkContent">HARD-FREE</h5>
                                <h2 class="pt-5">Descarga nuestra app</h2>
                                <p class="pt-3 pb-3 content-hardfree">
                                Lorem ipsum dolor sit amet, consectetuer<br />
                                adipiscing elit, sed diam nonummy nibh<br />
                                euismod tincidunt ut laoreet dolore<br />
                                magna aliquam erat volutpat. Ut wisi<br />
                                enim ad minim veniam, quis nostrud<br />
                                çexerci tation ullamcorper suscipit<br />
                                lobortis nisl ut aliquip ex ea commodo<br />
                                consequat.
                                </p>
                                <a type="button" style="width:35%;"
                                   class="btn-unete btn btn-light py-2" href="#">
                                    Ver mas
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-7 p-0 m-0" >
                        <div class="col-12p-0 m-0"
                             style="height:10%;">
                            &nbsp;
                        </div>
                        <div class="col-12 p-0 m-0 d-flex flex-row"
                            style="height:70%;
                                  background:url('<?= mesh4all_IMG.'opensource/HF-pic-orange-wave.png'?>') no-repeat;
                                  background-size:cover;
                                  background-position:left;">
                            <div class="col-7">
                                &nbsp;
                            </div>
                            <div class="col-5 d-flex flex-column m-auto 
                                        px-5">
                                <div class="w-100" >
                                    <img class="d-block w-100 p-2" 
                                        src="<?= mesh4all_IMG.'opensource/HF-yellow-off.png'?>" 
                                        alt="Mesh4All Comms Buttons">
                                </div>
                                <div class="w-100" >
                                    <img class="d-block w-100 p-2" 
                                        src="<?= mesh4all_IMG.'opensource/HF-orange-on.png'?>" 
                                        alt="Mesh4All Comms Buttons">
                                </div>
                                <div class="w-100" >
                                    <img class="d-block w-100 p-2" 
                                        src="<?= mesh4all_IMG.'opensource/HF-red-off.png'?>" 
                                        alt="Mesh4All Comms Buttons">
                                </div>
                                <div class="w-100" >
                                    <img class="d-block w-100 p-2" 
                                        src="<?= mesh4all_IMG.'opensource/HF-purple-off.png'?>" 
                                        alt="Mesh4All Comms Buttons">
                                </div>
                                <div class="w-100" >
                                    <img class="d-block w-100 p-2" 
                                        src="<?= mesh4all_IMG.'opensource/HF-blue-off.png'?>" 
                                        alt="Mesh4All Comms Buttons">
                                </div>
                                <div class="w-100" >
                                    <img class="d-block w-100 p-2" 
                                        src="<?= mesh4all_IMG.'opensource/HF-green-off.png'?>" 
                                        alt="Mesh4All Comms Buttons">
                                </div>
                            </div>
                        </div>
                        
                        <!--div class="col-12 row  p-0 m-0  
                                    d-flex align-items-center justify-content-center">
                            <img class="d-block w-50" 
                                src="<?= mesh4all_IMG.'services/control-red-cutted.png'?>" 
                                alt="Mesh4All Comms Buttons">
                        </div-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--div id="overopensource" class="row col-12 p-0 m-0 ratio ratio-16x9">
        <div class="row h-25 p-0 m-0">
            <div class="col-7">
                <div class="col-12 row p-0 m-0  w-100 h-25">
                    <div class="col-3 p-0 m-0">
                        &nbsp;
                    </div>
                    <div class="col-9 align-items-center p-0 m-0">
                        <p class="pt-4 m-0">
                            <h1 class="pt-5">OPEN SOURCE</h1>
                            <h3>HARD-FREE</h3>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row h-100 p-0 m-0 border border-warning">

        </div>
    </div-->
</div>