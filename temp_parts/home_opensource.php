<?php 
/*** Plantilla para el home OPEN SOURCE***/   
$ser = new WP_Query(array('pagename' => 'opensource'));

?>
<div class="sec-opensource p-0 m-0" id="opensource">

    <img src="<?= mesh4all_IMG.'wave-line.png'?>" alt="Mesh4All" 
                class="p-0 m-0 w-100 flipimg flipandrotate180"
                style="z-index:0; height: auto; max-width:100%; position:absolute; z-index:-4">

    <div id="overopensource" class="row col-12 p-0 m-0 ratio ratio-16x9">
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
    </div>
</div>