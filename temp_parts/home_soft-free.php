<?php 
/*** Plantilla para el home SOFT-FREE***/   
$posts_slide = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'soft-free',
    'order'      => 'DESC',
    ));
$i=0;
$e=0;
?>
<section class="row soft-free mb-lg-5 p-0 m-0">
  <div class="col-lg-12">
    <!--?php
    if ($posts_slide->have_posts()){
          while($posts_slide->have_posts()) : $posts_slide->the_post();?>
          <div class="col-lg-5 mt-lg-5 d-flex justify-content-lg-center">
            <h1 class="text-uppercase">soft-free</h1>
          </div>
        </div>
        <div class="col-lg-5 d-flex justify-content-lg-end p-lg-0 m-lg-0">
          <div class="col-lg-12 d-flex justify-content-lg-end p-lg-0 m-lg-0">
            <//?php $img_url = get_the_post_thumbnail_url(get_the_ID(),''); ?>
            <img class="d-block" src="<?= $img_url?>" 
                style="width: 8vw;">
          </div>
        </div>

        <div class="soft-free-nav col-lg-7 justify-content-lg-end p-lg-0 m-lg-0">
          <div class="container col-lg-12 p-lg-0 m-lg-0">
            <nav class="nav nav-pills mt-5">
              <a class="nav-link" data-toggle="pill" href="#localización">Localización</a>
              <a class="nav-link" data-toggle="pill" href="#tiempo">Tiempo</a>
              <a class="nav-link" data-toggle="pill" href="#crypto">Crypto</a>
              <a class="nav-link" data-toggle="pill" href="#wifi">Wifi</a>
              <a class="nav-link active" data-toggle="pill" href="#movil">Móvil</a>
              <a class="nav-link" data-toggle="pill" href="#red">Red</a>
            </nav>
          </div>

          <div class="tab-content border-0 col-lg-12 p-lg-0 mt-lg-5">
            <div id="localización" class="tab-pane fade">
              <p> <?php the_content(); ?> </p>
            </div>
          </div>


        <//?php $i++; endwhile; wp_reset_postdata();
        }else{ ?-->
      <div class="col-lg-5 mt-lg-5 d-flex justify-content-lg-center">
            <h1 class="text-uppercase">soft-free</h1>
          </div>
        </div>
        <div class="col-lg-5 d-flex justify-content-lg-end p-lg-0 m-lg-0">
          <div class="col-lg-12 d-flex justify-content-lg-end p-lg-0 m-lg-0">
            <img src="<?php echo get_template_directory_uri() . '/img/móvil.png'; ?>">
          </div>
        </div>

        <div class="soft-free-nav col-lg-7 justify-content-lg-end p-lg-0 m-lg-0">
          <div class="container col-lg-12 p-lg-0 m-lg-0">
            <nav class="nav nav-pills mt-5">
              <a class="nav-link" data-toggle="pill" href="#localización">Localización</a>
              <a class="nav-link" data-toggle="pill" href="#tiempo">Tiempo</a>
              <a class="nav-link" data-toggle="pill" href="#crypto">Crypto</a>
              <a class="nav-link" data-toggle="pill" href="#wifi">Wifi</a>
              <a class="nav-link active" data-toggle="pill" href="#movil">Móvil</a>
              <a class="nav-link" data-toggle="pill" href="#red">Red</a>
            </nav>
          </div>

          <div class="tab-content border-0 col-lg-12 p-lg-0 mt-lg-5">
            <div id="localización" class="tab-pane fade">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
                Ut sit amet mauris in justo tristique porttitor. </br></br>
                Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>

            <div id="tiempo" class="tab-pane fade">
              <p>Pellentesque condimentum, sem in lobortis consectetur, orci sapien pharetra libero, quis convallis velit odio et nunc.
              Vestibulum bibendum gravida metus at tempus. Morbi ultrices lectus eget ipsum laoreet pretium.</br></br> 
              Sed pulvinar sagittis nulla eu mattis.
            </p>
            </div>

            <div id="crypto" class="tab-pane fade">
              <p>Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus.</br></br>
                Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada.
              </p>
            </div>

            <div id="movil" class="tab-pane fade show active">
              <p>Sed accumsan orci a tristique ultrices. Vivamus viverra tempor sem, eget mattis ex aliquet at. Nulla mollis ac metus vel hendrerit.
              Donec justo elit, viverra eu semper in, malesuada in arcu. Mauris id molestie turpis.</br></br>
              Nullam tristique enim tortor, ut vulputate felis vestibulum eu.
              </p>
            </div>

            <div id="wifi" class="tab-pane fade">
              <p>Praesent neque nisl, scelerisque id neque id, tempus elementum eros. Suspendisse a quam nec nisi suscipit euismod. 
                Nunc ante felis, sollicitudin in justo nec, posuere placerat massa.</br></br>
                Mauris vel arcu vitae felis efficitur cursus. Phasellus accumsan justo eu leo malesuada, vitae rhoncus mi venenatis.
              </p>
            </div>

            <div id="red" class="tab-pane fade">
              <p>Aliquam vitae enim convallis, egestas lorem sit amet, lacinia nisi. Curabitur placerat dui arcu, sed luctus quam posuere vel. 
                Proin a nulla at ante suscipit sollicitudin molestie ac ante.</br></br>
                In porta libero sit amet nibh mattis, eu malesuada leo imperdiet.
              </p>
            </div>
          </div>
             <!--?php } ?-->
    
  </div>
</section>