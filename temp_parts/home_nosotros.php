<?php 
/*** Plantilla para el home NOSOTROS***/   
$posts = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'nosotros',
    'order'      => 'DESC',
));
?>


<div class="sec-nosotros p-0 m-0" id="nosotros" style="z-index: 1;">
    <!-- border transparente arriba -->
    <img src="<?= mesh4all_IMG.'borde-black-transp.png'?>" alt="Mesh4All" 
                class="p-0 m-0 rotateimg180"
                style=" height:auto; max-width:100%; position:absolute;z-index:1;">

    <img src="<?= mesh4all_IMG.'nosotros-meshback-v2.png'?>" alt="Mesh4All" 
                class="p-0 m-0 w-100"
                style="height: auto; max-width:100%; position:absolute; z-index:1">

    <div id="overnosotros" class="row col-12 p-0 m-0 ratio ratio-16x9" style="z-index: 2;">
        <div class="row p-0 m-0" id="areaContent">
            <div class="col-lg-12 row p-0 m-0 h-25 ">
                <div class="col-1">
                    &nbsp;
                </div>
                <div class="col-11 d-flex align-items-center ">
                    <h1>NOSOTROS</h1>
                </div>
            </div>
            <div class="col-lg-12 row p-0 m-0 h-75">
                
                <div class="row p-0 m-0 w-50" style="z-index:8;">
                    
                    <!-- VISION -->
                    <div class="p-0 m-0" style="position: absolute; top:27.5%; left: 27%;">
                        
                        <a class="linkContent" 
                            data-toggle="collapse" 
                            data-parent="#areaContent"
                            href="#conteVision" 
                            role="button" aria-expanded="false" 
                            aria-controls="conteMision">Visión</a>
                    </div>

                    <!-- MISION -->
                    <div class="p-0 m-0" style="position: absolute; top:52%; left: 10%">
                        
                        <a class="linkContent" 
                            data-toggle="collapse" 
                            data-parent="#areaContent"
                            href="#conteMision" 
                            role="button" aria-expanded="true" 
                            aria-controls="conteMision"
                            onClick="">Misión</a>
                    </div>
                    
                    <!-- VALORES -->
                    <div class="p-0 m-0" style="position: absolute; top:77%; left: 26.5%">
                        
                        <a class="linkContent" 
                            data-toggle="collapse" 
                            data-parent="#areaContent"
                            href="#conteValores" 
                            role="button" aria-expanded="true" 
                            aria-controls="conteValores"
                            onClick="">Valores</a> 
                        
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
                    <?php
                    if ($posts->have_posts()){
                        while($posts->have_posts()) : $posts->the_post(); 
                            $post_tags = get_the_tags();
                            if ( $post_tags ) {
                                //echo $post_tags[0]->name; 
                                $show = "";
                                $tipo = $post_tags[0]->name;
                                if ($tipo == 'Mision'){
                                    $show = "show";
                                }
                                ?>
                                <div class="col-10 px-4 pt-4 collapse <?=$show?> 
                                            multi-collapse 
                                            conteNosotros" id="conte<?=$tipo?>">
                                    <h5><?php the_title(); ?></h5>
                                    <p class="pr-2">
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                            <?php
                            }
                        endwhile;
                    }else{
                        ?>
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
                        <?php
                    }
                    ?>
                    </div>  
                </div>
            </div>
        </div>
        
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