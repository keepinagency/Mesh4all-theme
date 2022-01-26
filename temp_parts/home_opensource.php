<?php 
/*** Plantilla para el home OPEN SOURCE***/   
//$ser = new WP_Query(array('pagename' => 'opensource'));

$posts = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'hard-free',
    'order'      => 'DESC',
));

?>
<div class="sec-opensource ratio ratio-16x9 p-0 m-0" id="opensource" style="z-index:1;">

    <img src="<?= mesh4all_IMG.'wave-line.png'?>" alt="Mesh4All" 
                class="p-0 m-0 w-100 flipimg flipandrotate180  "
                style="z-index:0; height: auto; max-width:100%; position:absolute; z-index:-4">
    
    <img src="<?= mesh4all_IMG.'opensource/HF-pic-orange-.png'?>" alt="Mesh4All" 
                class="p-0 m-0 w-100 flipimg flipandrotate180  " id="bgopensource"
                style="z-index:0; height: auto; max-width:100%; position:absolute; z-index:-4">

    <div class="row p-0 m-0" 
        style="background:url('<?= mesh4all_IMG.'opensource/HF-pic-orssange-.png'?>') no-repeat;
               background-size:cover;
               background-position:left; max-height:100%;">
        <div class="col-5 p-0 m-0 h-100 " id="hard-free">
            
            <div class="p-0 m-0 h-100 d-flex flex-row ">
                <div class="col-3 p-0 m-0">
                    &nbsp;
                </div>
                <div class="col-9 p-0 m-0 ">
                    <h1 class="pt-5">OPEN SOURCE</h1>
                    <h5 class="linkContent">HARD-FREE</h5>
                    <!-- CONTENIDO DINÁMICO -->
                <?php
                if ($posts->have_posts()){
                    while($posts->have_posts()) : $posts->the_post(); 
                        $post_tags = get_the_tags();
                        if ( $post_tags ) {
                            //echo $post_tags[0]->name; 
                            $display = "none";
                            if ($post_tags[0]->name == 'orange'){
                                $display = "block";
                            }
                            ?>
                            <div class="pt-5 pb-3 content-hardfree" 
                                style="display:<?= $display ?>;"
                                id="cont-<?=$post_tags[0]->name?>">
                                <?php the_content(); ?>
                            </div>
                        <?php
                        }
                    endwhile;
                }else{

                    ?>
                    <div class="pt-3 pb-3 content-hardfree" style="display:none;" id="cont-yellow">
                    <h2 class="pt-5">Titulo Yellow</h2>
                    Lorem ipsum dolor sit amet, consectetuer<br />
                    adipiscing elit, sed diam nonummy nibh<br />
                    euismod tincidunt ut laoreet dolore<br />
                    magna aliquam erat volutpat. Ut wisi<br />
                    enim ad minim veniam, quis nostrud<br />
                    çexerci tation ullamcorper suscipit<br />
                    lobortis nisl ut aliquip ex ea commodo<br />
                    consequat.
                    </div>
                    <div class="pt-3 pb-3 content-hardfree" id="cont-orange">
                    <h2 class="pt-5">Descarga nuestra app</h2>
                    Lorem ipsum dolor sit amet, consectetuer<br />
                    adipiscing elit, sed diam nonummy nibh<br />
                    euismod tincidunt ut laoreet dolore<br />
                    magna aliquam erat volutpat. Ut wisi<br />
                    enim ad minim veniam, quis nostrud<br />
                    çexerci tation ullamcorper suscipit<br />
                    lobortis nisl ut aliquip ex ea commodo<br />
                    consequat.
                    </div>
                    <div class="pt-3 pb-3 content-hardfree" style="display:none;" id="cont-red">
                    <h2 class="pt-5">Titulo Red</h2>
                    Lorem ipsum dolor sit amet, consectetuer<br />
                    adipiscing elit, sed diam nonummy nibh<br />
                    euismod tincidunt ut laoreet dolore<br />
                    magna aliquam erat volutpat. Ut wisi<br />
                    enim ad minim veniam, quis nostrud<br />
                    çexerci tation ullamcorper suscipit<br />
                    lobortis nisl ut aliquip ex ea commodo<br />
                    consequat.
                    </div>
                    <div class="pt-3 pb-3 content-hardfree" style="display:none;" id="cont-purple">
                    <h2 class="pt-5">Titulo Purple</h2>
                    Lorem ipsum dolor sit amet, consectetuer<br />
                    adipiscing elit, sed diam nonummy nibh<br />
                    euismod tincidunt ut laoreet dolore<br />
                    magna aliquam erat volutpat. Ut wisi<br />
                    enim ad minim veniam, quis nostrud<br />
                    çexerci tation ullamcorper suscipit<br />
                    lobortis nisl ut aliquip ex ea commodo<br />
                    consequat.
                    </div>
                    <div class="pt-3 pb-3 content-hardfree" style="display:none;" id="cont-blue">
                    <h2 class="pt-5">Titulo blue</h2>
                    Lorem ipsum dolor sit amet, consectetuer<br />
                    adipiscing elit, sed diam nonummy nibh<br />
                    euismod tincidunt ut laoreet dolore<br />
                    magna aliquam erat volutpat. Ut wisi<br />
                    enim ad minim veniam, quis nostrud<br />
                    çexerci tation ullamcorper suscipit<br />
                    lobortis nisl ut aliquip ex ea commodo<br />
                    consequat.
                    </div>
                    <div class="pt-3 pb-3 content-hardfree" style="display:none;" id="cont-green">
                    <h2 class="pt-5">Titulo Green</h2>
                    Lorem ipsum dolor sit amet, consectetuer<br />
                    adipiscing elit, sed diam nonummy nibh<br />
                    euismod tincidunt ut laoreet dolore<br />
                    magna aliquam erat volutpat. Ut wisi<br />
                    enim ad minim veniam, quis nostrud<br />
                    çexerci tation ullamcorper suscipit<br />
                    lobortis nisl ut aliquip ex ea commodo<br />
                    consequat.
                    </div>
                    <a type="button" style="width:35%;"
                        class="btn-unete btn btn-light py-2" href="#">
                        Ver mas
                    </a>
                    <?php
                }
                ?>
                </div>
            </div>

        </div>
        <div class="col-7 p-0 m-0 h-100" >
            <div class="col-12 p-0 m-0 h-25">
                &nbsp;
            </div>
            <div class="col-12 h-50 p-0 m-0 d-flex flex-row" >
                <div class="col-7">
                    &nbsp;
                </div>
                <div class="col-5 d-flex align-content-stretch flex-wrap">
                <?php
                if ($posts->have_posts()){
                    while($posts->have_posts()) : $posts->the_post(); 
                        $post_tags = get_the_tags();
                        if ( $post_tags ) {
                            $on = "off";
                            $col = "#ddd";
                            $tagcolor =  $post_tags[0]->name; 
                            $taglink =  $post_tags[1]->name; 
                            if ($tagcolor == 'orange'){
                                $on = "on";
                                $col = "#333";
                            }
                            ?>
                            <div class="col-12 row mb-2">
                                <!--div class="col-2 p-0 m-0 ">
                                    &nbsp;
                                </div-->    
                                <div class="col-12 btnopensource" 
                                    id="<?=$tagcolor?>"
                                    style="background:url('<?= mesh4all_IMG.'opensource/HF-'.$tagcolor.'-'.$on.'-.png'?>') no-repeat;
                                            background-size:contain;
                                            background-position:center;"
                                    onclick="clickbtn(this.id);"
                                    onmouseover="//changeon(this.id);" 
                                    onmouseout="//changeoff(this.id,'<?= mesh4all_IMG.'opensource/HF-'.$tagcolor.'-off-.png'?>');"
                                    alt="Mesh4All Comms Buttons <?=$tagcolor?>">
                                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="color:<?=$col?>; "><?php the_title(); ?></div>
                                </div>
                            </div>
                            <?php
                        }
                    endwhile;
                }else{
                    ?>
                            <div class="col-12 row mb-2">
                                <div class="col-12 btnopensource" 
                                    id="yellow"
                                    style="background:url('<?= mesh4all_IMG.'opensource/HF-yellow-off-.png'?>') no-repeat;
                                            background-size:contain;
                                            background-position:center;"
                                    onclick="clickbtn(this.id);"
                                    alt="Mesh4All Comms Buttons yellow">
                                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" 
                                        style="color:<?=$col?>; ">&nbsp;</div>
                                </div>
                            </div>
                            <div class="col-12 row mb-2">
                                <div class="col-12 btnopensource" 
                                    id="orange"
                                    style="background:url('<?= mesh4all_IMG.'opensource/HF-orange-on-.png'?>') no-repeat;
                                            background-size:contain;
                                            background-position:center;"
                                    onclick="clickbtn(this.id);"
                                    alt="Mesh4All Comms Buttons orange">
                                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" 
                                        style="color:<?=$col?>; ">&nbsp;</div>
                                </div>
                            </div>
                            <div class="col-12 row mb-2">
                                <div class="col-12 btnopensource" 
                                    id="red"
                                    style="background:url('<?= mesh4all_IMG.'opensource/HF-red-off-.png'?>') no-repeat;
                                            background-size:contain;
                                            background-position:center;"
                                    onclick="clickbtn(this.id);"
                                    alt="Mesh4All Comms Buttons red">
                                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" 
                                        style="color:<?=$col?>; ">&nbsp;</div>
                                </div>
                            </div>
                            <div class="col-12 row mb-2">
                                <div class="col-12 btnopensource" 
                                    id="purple"
                                    style="background:url('<?= mesh4all_IMG.'opensource/HF-purple-off-.png'?>') no-repeat;
                                            background-size:contain;
                                            background-position:center;"
                                    onclick="clickbtn(this.id);"
                                    alt="Mesh4All Comms Buttons purple">
                                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" 
                                        style="color:<?=$col?>; ">&nbsp;</div>
                                </div>
                            </div>
                            <div class="col-12 row mb-2">
                                <div class="col-12 btnopensource" 
                                    id="blue"
                                    style="background:url('<?= mesh4all_IMG.'opensource/HF-blue-off-.png'?>') no-repeat;
                                            background-size:contain;
                                            background-position:center;"
                                    onclick="clickbtn(this.id);"
                                    alt="Mesh4All Comms Buttons blue">
                                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" 
                                        style="color:<?=$col?>; ">&nbsp;</div>
                                </div>
                            </div>
                            <div class="col-12 row mb-2">
                                <div class="col-12 btnopensource" 
                                    id="green"
                                    style="background:url('<?= mesh4all_IMG.'opensource/HF-green-off-.png'?>') no-repeat;
                                            background-size:contain;
                                            background-position:center;"
                                    onclick="clickbtn(this.id);"
                                    alt="Mesh4All Comms Buttons green">
                                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" 
                                        style="color:<?=$col?>; ">&nbsp;</div>
                                </div>
                            </div>
                    
                <?php
                }
                ?>
                    <input type="hidden" id="btnopen_sel" value="orange"> 
                </div>
            </div>
            <div class="col-12 p-0 m-0 h-25 ">
                &nbsp;
            </div>
        </div>
    </div>
</div>

<script>
    
    function clickbtn(idele){
        var selant = jQuery("#btnopen_sel").val();
        //document.getElementById(selant).src='<?= mesh4all_IMG.'opensource/HF-'?>'+selant+'-off.png';
        
        //jQuery("#bgopensource").css('background-image','url(<?= mesh4all_IMG.'opensource/HF-pic-'?>'+idele+'-.png)');
        jQuery("#bgopensource").attr('src','<?= mesh4all_IMG.'opensource/HF-pic-'?>'+idele+'-.png');
        
        jQuery("#"+selant).css('background-image','url(<?= mesh4all_IMG.'opensource/HF-'?>'+selant+'-off-.png)');
        jQuery("#"+selant+" div").css('color','white');
        jQuery("#"+idele).css('background-image','url(<?= mesh4all_IMG.'opensource/HF-'?>'+idele+'-on-.png)');
        jQuery("#"+idele+" div").css('color','rgb(30,30,30)');
        
        jQuery("#btnopen_sel").val(idele);
        jQuery("#cont-"+selant).hide();
        jQuery("#cont-"+idele).show();
    }

    function changeon(idele){
        //document.getElementById(idele).src='<?= mesh4all_IMG.'opensource/HF-'?>'+idele+'-on.png';
        jQuery("#"+idele).css('background-image','url(<?= mesh4all_IMG.'opensource/HF-'?>'+idele+'-on-.png)');
        jQuery("#"+idele+" div").css('color','rgb(30,30,30)');
        //jQuery("#bgopensource").css('background-image','url(<?= mesh4all_IMG.'opensource/HF-pic-'?>'+idele+'-.png)');
        jQuery("#bgopensource").attr('src','<?= mesh4all_IMG.'opensource/HF-pic-'?>'+idele+'-.png');
        // bgopensource HF-pic-blue
    }
    function changeoff(idele,srcele){
        //document.getElementById(idele).src='<?= mesh4all_IMG.'opensource/HF-'?>'+idele+'-off.png';
        jQuery("#"+idele).css('background-image','url(<?= mesh4all_IMG.'opensource/HF-'?>'+idele+'-off-.png)');
        jQuery("#"+idele+" div").css('color','white');
        btnsel = jQuery("#btnopen_sel").val();
        if (idele == btnsel){
            //document.getElementById(idele).src='<?= mesh4all_IMG.'opensource/HF-'?>'+idele+'-on.png';
            jQuery("#"+idele).css('background-image','url(<?= mesh4all_IMG.'opensource/HF-'?>'+idele+'-on-.png)');
            jQuery("#"+idele+" div").css('color','rgb(30,30,30)');
        }else{
            //jQuery("#bgopensource").css('background-image','url(<?= mesh4all_IMG.'opensource/HF-pic-'?>'+btnsel+'-.png)');
            jQuery("#bgopensource").attr('src','<?= mesh4all_IMG.'opensource/HF-pic-'?>'+btnsel+'-.png');
        }
        //jQuery("#bgopensource").css('background-image','url(<?= mesh4all_IMG.'opensource/HF-pic-orange.png'?>');
    }
</script>
