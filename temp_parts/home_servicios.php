<?php 
/*** Plantilla para el home SERVICIOS***/   
$posts_slide = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'servicios-home',
    'order'      => 'DESC',
    ));
$i=0;
?>
<div class="container-slider p-0 m-0" id="servicios" style="z-index:1;">
    <!-- Contenedor de los Slider -->
    <img src="<?= mesh4all_IMG.'background-line-waveF.png'?>" alt="Mesh4All" 
                class="p-0 m-0 w-100"
                style="z-index:0; height: auto; max-width:100%; position:absolute; z-index:1">

    <div id="miCarousel" 
            class="carousel  row ratio ratio-16x9 p-0 m-0" 
            data-ride="carousel" style="z-index:2;">

        <div class="carousel-inner h-100 p-0 w-100">
        <?php 
        
        if ($posts_slide->have_posts()){
            
            while($posts_slide->have_posts()) : $posts_slide->the_post(); 
                $active = "";
                if ($i ==0){
                    $active = "active";
                } ?>
                <div class="carousel-item col-12 <?=$active?> h-100 p-0 m-0">
                    <div class="row h-100">
                        <div class="col-6">
                            <div class="col-12 row p-0 m-0  w-100 h-25">
                                <div class="col-3">
                                    &nbsp;
                                </div>
                                <div class="col-9 d-flex align-items-center ">
                                    <h1>SERVICIOS</h1>
                                </div>
                            </div>
                            <div class="col-12 row  p-0 m-0  
                                        d-flex align-items-center justify-content-center">
                                <?php
                                    $img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                ?>
                                <img class="d-block w-50" 
                                    src="<?= $img_url?>" 
                                    alt="Mesh4All Control">
                            </div>
                        </div>
                        <div class="col-6 p-0 m-0 ">
                            <div class="col-12 row h-25 p-0 m-0">
                                &nbsp;
                            </div>
                            <div class="col-12 h-100">
                                <div class="col-9 content-services">
                                    <?php the_content(); ?>
                                </div>
                                <div class="col-2">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                $i++; 
            endwhile; 
            wp_reset_postdata();
        }else{
            ?>
            <div class="carousel-item col-12 active h-100 p-0 m-0">
                <div class="row h-100">
                    <div class="col-7">
                        <div class="col-12 row p-0 m-0  w-100 h-25">
                            <div class="col-3">
                                &nbsp;
                            </div>
                            <div class="col-9 d-flex align-items-center ">
                                <h1>SERVICIOS</h1>
                            </div>
                        </div>
                        <div class="col-12 row  p-0 m-0  
                                    d-flex align-items-center justify-content-center">
                            <img class="d-block w-50" 
                                src="<?= mesh4all_IMG.'services/control-red-cutted.png'?>" 
                                alt="Mesh4All Comms Buttons">
                        </div>
                    </div>
                    <div class="col-5 p-0 m-0">
                        <div class="col-12 row h-25 p-0 m-0">
                            &nbsp;
                        </div>
                        <div class="col-12 h-100">
                            <div class="col-10 content-services">
                                <img class="d-block" 
                                    src="<?= mesh4all_IMG.'services/comms-m4a-full.png'?>" 
                                    style="width:25vw;"
                                    alt="Mesh4All Comms"><br>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                                    elit. Suspendisse convallis eu enim ut lacinia. <br>
                                    Cras non risus dapibus, lacinia elit nec, mollis odio. <br>
                                    Morbi ac rutrum leo. Curabitur volutpat urna libero.<br>
                                     ac cursus libero accumsan nec.
                                </p>
                                <div class="col-lg-12 p-0 m-0 "> 
                                    <a href="<?php $urlbtn; ?>" >
                                        <a type="button" 
                                           class="btn-vermas-serv btn pt-lg-2 pb-lg-2 w-25" 
                                           style="background-color:#de172b; color:white;" 
                                           href="<?=$urlbtn;?>">
                                            <?php echo $txtbtn;?>
                                        </a> 
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-12 h-100 p-0 m-0">
                <div class="row h-100">
                    <div class="col-7">
                        <div class="col-12 row p-0 m-0  w-100 h-25">
                            <div class="col-3">
                                &nbsp;
                            </div>
                            <div class="col-9 d-flex align-items-center ">
                                <h1>SERVICIOS</h1>
                            </div>
                        </div>
                        <div class="col-12 row  p-0 m-0  
                                    d-flex align-items-center justify-content-center">
                            <img class="d-block w-50" 
                                src="<?= mesh4all_IMG.'services/control-orange-cutted.png'?>" 
                                alt="Mesh4All IoT Buttons">
                        </div>
                    </div>
                    <div class="col-5 p-0 m-0">
                        <div class="col-12 row h-25 p-0 m-0">
                            &nbsp;
                        </div>
                        <div class="col-12 h-100">
                            <div class="col-10 content-services">
                                <img class="d-block" 
                                    src="<?= mesh4all_IMG.'services/iot-m4a-full.png'?>" 
                                    style="width:25vw;"
                                    alt="Mesh4All IoT"><br>
                                <p>
                                    2do Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                                    elit. Suspendisse convallis eu enim ut lacinia. <br>
                                    Cras non risus dapibus, lacinia elit nec, mollis odio. <br>
                                    Morbi ac rutrum leo. Curabitur volutpat urna libero.<br>
                                     ac cursus libero accumsan nec.
                                </p>
                                <div class="col-lg-12 p-0 m-0 "> 
                                    <a href="<?php $urlbtn; ?>" >
                                        <a type="button" 
                                            class="btn-vermas-serv btn pt-lg-2 pb-lg-2 w-25" 
                                            style="background-color:#f3911c; color:white;" 
                                            href="<?=$urlbtn;?>">
                                            <?php echo $txtbtn;?>
                                        </a> 
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-12 h-100 p-0 m-0">
                <div class="row h-100">
                    <div class="col-7">
                        <div class="col-12 row p-0 m-0  w-100 h-25">
                            <div class="col-3">
                                &nbsp;
                            </div>
                            <div class="col-9 d-flex align-items-center ">
                                <h1>SERVICIOS</h1>
                            </div>
                        </div>
                        <div class="col-12 row  p-0 m-0  
                                    d-flex align-items-center justify-content-center">
                            <img class="d-block w-50" 
                                src="<?= mesh4all_IMG.'services/control-yellow-cutted.png'?>" 
                                alt="Mesh4All Pay Buttons">
                        </div>
                    </div>
                    <div class="col-5 p-0 m-0">
                        <div class="col-12 row h-25 p-0 m-0">
                            &nbsp;
                        </div>
                        <div class="col-12 h-100">
                            <div class="col-10 content-services">
                                <img class="d-block" 
                                    src="<?= mesh4all_IMG.'services/pay-m4a-w-title.png'?>" 
                                    style="width:25vw;"
                                    alt="Mesh4All Pay"><br>
                                <p>
                                    3ro Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                                    elit. Suspendisse convallis eu enim ut lacinia. <br>
                                    Cras non risus dapibus, lacinia elit nec, mollis odio. <br>
                                    Morbi ac rutrum leo. Curabitur volutpat urna libero.<br>
                                     ac cursus libero accumsan nec.
                                </p>
                                <div class="col-lg-12 p-0 m-0 "> 
                                    <a href="<?php $urlbtn; ?>" >
                                        <a type="button" 
                                           class="btn-vermas-serv btn pt-lg-2 pb-lg-2 w-25" 
                                           style="background-color:#f3e600; color:white;"
                                           href="<?=$urlbtn;?>">
                                            <?php echo $txtbtn;?>
                                        </a> 
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-12 h-100 p-0 m-0">
                <div class="row h-100">
                    <div class="col-7">
                        <div class="col-12 row p-0 m-0  w-100 h-25">
                            <div class="col-3">
                                &nbsp;
                            </div>
                            <div class="col-9 d-flex align-items-center ">
                                <h1>SERVICIOS</h1>
                            </div>
                        </div>
                        <div class="col-12 row  p-0 m-0  
                                    d-flex align-items-center justify-content-center">
                            <img class="d-block w-50" 
                                src="<?= mesh4all_IMG.'services/control-green-cutted.png'?>" 
                                alt="Mesh4All AG Buttons">
                        </div>
                    </div>
                    <div class="col-5 p-0 m-0">
                        <div class="col-12 row h-25 p-0 m-0">
                            &nbsp;
                        </div>
                        <div class="col-12 h-100">
                            <div class="col-10 content-services">
                                <img class="d-block" 
                                    src="<?= mesh4all_IMG.'services/ag-m4a-full.png'?>" 
                                    style="width:25vw;"
                                    alt="Mesh4All AG"><br>
                                <p>
                                    4to Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                                    elit. Suspendisse convallis eu enim ut lacinia. <br>
                                    Cras non risus dapibus, lacinia elit nec, mollis odio. <br>
                                    Morbi ac rutrum leo. Curabitur volutpat urna libero.<br>
                                     ac cursus libero accumsan nec.
                                </p>
                                <div class="col-lg-12 p-0 m-0 "> 
                                    <a href="<?php $urlbtn; ?>" >
                                        <a type="button"
                                           class="btn-vermas-serv btn pt-lg-2 pb-lg-2 w-25" 
                                           style="background-color:#00b43e; color:white;"
                                           href="<?=$urlbtn;?>">
                                            <?php echo $txtbtn;?>
                                        </a> 
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-12 h-100 p-0 m-0">
                <div class="row h-100">
                    <div class="col-7">
                        <div class="col-12 row p-0 m-0  w-100 h-25">
                            <div class="col-3">
                                &nbsp;
                            </div>
                            <div class="col-9 d-flex align-items-center ">
                                <h1>SERVICIOS</h1>
                            </div>
                        </div>
                        <div class="col-12 row  p-0 m-0  
                                    d-flex align-items-center justify-content-center">
                            <img class="d-block w-50" 
                                src="<?= mesh4all_IMG.'services/control-blue-cutted.png'?>" 
                                alt="Mesh4All City Buttons">
                        </div>
                    </div>
                    <div class="col-5 p-0 m-0">
                        <div class="col-12 row h-25 p-0 m-0">
                            &nbsp;
                        </div>
                        <div class="col-12 h-100">
                            <div class="col-10 content-services">
                                <img class="d-block" 
                                    src="<?= mesh4all_IMG.'services/city-m4a-w-title.png'?>" 
                                    style="width:25vw;"
                                    alt="Mesh4All City"><br>
                                <p>
                                    5to Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                                    elit. Suspendisse convallis eu enim ut lacinia. <br>
                                    Cras non risus dapibus, lacinia elit nec, mollis odio. <br>
                                    Morbi ac rutrum leo. Curabitur volutpat urna libero.<br>
                                     ac cursus libero accumsan nec.
                                </p>
                                <div class="col-lg-12 p-0 m-0 "> 
                                    <a href="<?php $urlbtn; ?>" >
                                        <a type="button" 
                                           class="btn-vermas-serv btn pt-lg-2 pb-lg-2 w-25" 
                                           style="background-color:#007ac0; color:white;"
                                           href="<?=$urlbtn;?>">
                                            <?php echo $txtbtn;?>
                                        </a> 
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-12 h-100 p-0 m-0">
                <div class="row h-100">
                    <div class="col-7">
                        <div class="col-12 row p-0 m-0  w-100 h-25">
                            <div class="col-3">
                                &nbsp;
                            </div>
                            <div class="col-9 d-flex align-items-center ">
                                <h1>SERVICIOS</h1>
                            </div>
                        </div>
                        <div class="col-12 row  p-0 m-0  
                                    d-flex align-items-center justify-content-center">
                            <img class="d-block w-50" 
                                src="<?= mesh4all_IMG.'services/control-purple-cutted.png'?>" 
                                alt="Mesh4All Hardware Buttons">
                        </div>
                    </div>
                    <div class="col-5 p-0 m-0">
                        <div class="col-12 row h-25 p-0 m-0">
                            &nbsp;
                        </div>
                        <div class="col-12 h-100">
                            <div class="col-10 content-services">
                                <img class="d-block" 
                                    src="<?= mesh4all_IMG.'services/hw-m4a-w-title.png'?>" 
                                    style="width:25vw;"
                                    alt="Mesh4All Hardware"><br>
                                <p>
                                    6to Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                                    elit. Suspendisse convallis eu enim ut lacinia. <br>
                                    Cras non risus dapibus, lacinia elit nec, mollis odio. <br>
                                    Morbi ac rutrum leo. Curabitur volutpat urna libero.<br>
                                     ac cursus libero accumsan nec.
                                </p>
                                <div class="col-lg-12 p-0 m-0 "> 
                                    <a href="<?php $urlbtn; ?>" >
                                        <a type="button" 
                                           class="btn-vermas-serv btn pt-lg-2 pb-lg-2 w-25"  
                                           style="background-color:#a22d89; color:white;"
                                           href="<?=$urlbtn;?>">
                                            <?php echo $txtbtn;?>
                                        </a> 
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--div class="carousel-item h-100">
                <div class="col-7  h-100">
                    <div class="col-12 row p-0 m-0  w-100 h-25">
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-9 d-flex align-items-center ">
                            <h1>SERVICIOS</h1>
                        </div>
                    </div>
                    <div class="col-12 row  p-0 m-0  
                                d-flex align-items-center justify-content-center">
                        <img class="d-block w-50" 
                            src="<?= mesh4all_IMG.'services/control-orange-cutted.png'?>" alt="First slide">
                    </div>
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="col-7  h-100">
                    <div class="col-12 row p-0 m-0  w-100 h-25">
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-9 d-flex align-items-center ">
                            <h1>SERVICIOS</h1>
                        </div>
                    </div>
                    <div class="col-12 row  p-0 m-0  
                                d-flex align-items-center justify-content-center">
                        <img class="d-block w-50" 
                            src="<?= mesh4all_IMG.'services/control-yellow-cutted.png'?>" alt="First slide">
                    </div>
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="col-7  h-100">
                    <div class="col-12 row p-0 m-0  w-100 h-25">
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-9 d-flex align-items-center ">
                            <h1>SERVICIOS</h1>
                        </div>
                    </div>
                    <div class="col-12 row  p-0 m-0  
                                d-flex align-items-center justify-content-center">
                        <img class="d-block w-50" 
                            src="<?= mesh4all_IMG.'services/control-green-cutted.png'?>" alt="First slide">
                    </div>
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="col-7  h-100">
                    <div class="col-12 row p-0 m-0  w-100 h-25">
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-9 d-flex align-items-center ">
                            <h1>SERVICIOS</h1>
                        </div>
                    </div>
                    <div class="col-12 row  p-0 m-0  
                                d-flex align-items-center justify-content-center">
                        <img class="d-block w-50" 
                            src="<?= mesh4all_IMG.'services/control-blue-cutted.png'?>" alt="First slide">
                    </div>
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="col-7  h-100">
                    <div class="col-12 row p-0 m-0  w-100 h-25">
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-9 d-flex align-items-center ">
                            <h1>SERVICIOS</h1>
                        </div>
                    </div>
                    <div class="col-12 row  p-0 m-0  
                                d-flex align-items-center justify-content-center">
                        <img class="d-block w-50" 
                            src="<?= mesh4all_IMG.'services/control-purple-cutted.png'?>" alt="First slide">
                    </div>
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
            </div-->
            
            <?php
        }
        
        ?>
        </div>

        <!-- Controles -->
        <div class="row p-0 m-0">
            <a class="carousel-control-prev p-0 m-0" href="#miCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next p-0 m-0" href="#miCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>