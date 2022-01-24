<?php 
/*** Plantilla para el home NOSOTROS***/   
$ser = new WP_Query(array('pagename' => 'nosotros'));


/*
style="background: url('<?= mesh4all_IMG.'mesh-02-hd2.png'?>') no-repeat; height:100%;"
  ratio rato-16x9
*/
?>


<div class="sec-nosotros p-0 m-0" id="nosotros">
    <!-- border transparente arriba -->
    <img src="<?= mesh4all_IMG.'borde-black-transp.png'?>" alt="Mesh4All" 
                class="p-0 m-0 rotateimg180"
                style="z-index:-5; height:auto; max-width:100%; position:absolute;">

    <img src="<?= mesh4all_IMG.'nosotros-meshback-v2.png'?>" alt="Mesh4All" 
                class="p-0 m-0 w-100"
                style="height: auto; max-width:100%; position:absolute; z-index:-4">

    <div id="overnosotros" class="row col-12 p-0 m-0 ratio ratio-16x9"
        >
        <?php 
        if ($ser->have_posts()){
            while ($ser->have_posts()) : $ser->the_post();?>
                
                <div class="row p-0 m-0">
                    <div class="col-lg-8 row p-0 m-0">
                        <div class="col-2 p-0 m-0">
                            &nbsp;
                        </div>
                        <div class="col-10 p-0 m-0 ">
                            <h1 class="pt-5"><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="col-lg-12 h-25">
                                &nbsp;
                            </div>
                            <div class="col-lg-12 ">
                                <?php
                                    $img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                ?>
                                <img class="d-block" 
                                    src="<?= $img_url?>" 
                                    style="width: 8vw;"
                                    alt="Mesh4All Logo">
                            </div>
                            <div class="col-lg-12 mt-lg-5 pt-lg-3">
                                <?php the_content(); ?>
                            </div>  
                    </div>
                </div>

            <?php 
            endwhile; 
            wp_reset_postdata();
        }else{
            ?>
            <div class="row p-0 m-0" id="areaContent">
                <div class="col-lg-12 row p-0 m-0 h-25">
                    &nbsp;
                </div>
                <div class="col-lg-12 row p-0 m-0 h-75">
                    
                    <div class="row p-0 m-0 w-50">
                        <div class="p-0 m-0 h-50 w-50 d-flex align-items-end ">
                            
                            <div class="w-100 h-50 p-0 m-0 d-flex flex-row ">
                                <!-- VISION -->
                                <div class="col-4 m-0 p-0">&nbsp;</div>
                                <div class="col-8 m-0 p-0 
                                            d-flex align-items-center px-4 pt-3
                                           "><a class="linkContent" 
                                                data-toggle="collapse" 
                                                data-parent="#areaContent"
                                                href="#conteVision" 
                                                role="button" aria-expanded="false" 
                                                aria-controls="conteMision">Visión</a></div>
                            </div>

                        </div>

                        <div class="h-50 w-50 pt-3 px-4">
                            <!-- MISION -->
                            <a class="linkContent" 
                                data-toggle="collapse" 
                                data-parent="#areaContent"
                                href="#conteMision" 
                                role="button" aria-expanded="true" 
                                aria-controls="conteMision"
                                onClick="">Misión</a>
                        </div>

                        <div class="h-25 w-100 d-flex flex-row p-0 m-0"
                             style="height: 28%;">        
                            <div class="col-6 m-0 p-0">&nbsp;</div>
                            <div class="col-6 m-0 p-0 px-3
                                        d-flex align-items-end
                                        "><a class="linkContent" 
                                                data-toggle="collapse" 
                                                data-parent="#areaContent"
                                                href="#conteValores" 
                                                role="button" aria-expanded="true" 
                                                aria-controls="conteValores"
                                                onClick="">Valores</a> <!-- VALORES --></div>
                            
                        </div>
                        <div class="w-100" style="height: 22%;">
                            &nbsp;
                        </div>
                    </div>

                    <div class="p-0 m-0 w-50 row" >
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-8 h-100">
                            <div style="height:17%;">
                                &nbsp;
                            </div>
                            <div class="px-4 pt-5 collapse show multi-collapse
                                        conteNosotros" id="conteMision">
                                <h5>Misión</h5>
                                <p>
                                Sed diam nonummy nibh euismod<br>
                                tincidunt ut laoreet dolore magna.<br>
                                Ut wisi enim ad minim veniam. Sed<br>
                                diam nonummy nibh euismod<br>
                                tincidunt ut laoreet dolore magna.<br>
                                Ut wisi enim ad minim veniam.
                                </p>
                            </div>
                            <div class="px-4 pt-5 collapse multi-collapse
                                        conteNosotros" id="conteVision">
                                <h5>Visión</h5>
                                <p>
                                Sed diam nonummy nibh euismod<br>
                                tincidunt ut laoreet dolore magna.<br>
                                Ut wisi enim ad minim veniam. Sed<br>
                                diam nonummy nibh euismod<br>
                                tincidunt ut laoreet dolore magna.<br>
                                Ut wisi enim ad minim veniam.
                                </p>
                            </div>
                            <div class="px-4 pt-5 collapse multi-collapse
                                        conteNosotros" id="conteValores">
                                <h5>Valores</h5>
                                <p>
                                Sed diam nonummy nibh euismod<br>
                                tincidunt ut laoreet dolore magna.<br>
                                Ut wisi enim ad minim veniam. Sed<br>
                                diam nonummy nibh euismod<br>
                                tincidunt ut laoreet dolore magna.<br>
                                Ut wisi enim ad minim veniam.
                                </p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!--div class="row p-0 m-0">
                <div class="col-lg-8 row p-0 m-0">
                    <div class="col-2 p-0 m-0">
                        &nbsp;
                    </div>
                    <div class="col-10 p-0 m-0 ">
                        <h1 class="pt-5">NOSOTROS</h1>
                    </div>
                </div>
                <div class="col-lg-4 row">
                        <div class="col-lg-12 h-25">
                            &nbsp;
                        </div>
                        <div class="col-lg-12 ">
                            <img class="d-block" 
                                src="<?= mesh4all_IMG.'mesh4all-nosotros.png'?>" 
                                style="width: 8vw;"
                                alt="Mesh4All Logo">
                        </div>
                        <div class="col-lg-12 mt-lg-5 pt-lg-3 pr-lg-3">
                            <p>
                                Lorem ipsum dolor sit amet,<br>
                                consectetur adipiscing elit.
                            </p>
                            <p>
                                Sed auctor faucibus quam, <br>
                                ac egestas ex lobortis vitae. <br>
                                Interdum et malesuada fames ac <br>
                                ante ipsum primis in faucibus. <br>
                                Aenean urna purus, consequat ut <br>
                                leo in, laoreet feugiat ligula.
                            </p>
                        </div>  
                </div>
            </div-->
            <?php
        }
        ?>
    </div>
</div>

<script>
    var links = document.getElementsByClassName('linkContent');

    for (var i = 0 ; i < links.length; i++) {
        links[i].addEventListener('click' , hideText , false ) ; 
    }

    function hideText(){
        jQuery('.collapse').collapse('hide');
    }
</script>