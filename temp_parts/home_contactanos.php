<?php 
/*** Plantilla para el home CONTÁCTANOS***/    
   
?>
<section class="seccontacto row justify-content-lg-center" id="seccontacto">
    
    <div class="col-lg-5 row justify-content-between rounded p-lg-3">
        <div class="col-lg-12">
            CONTÁCTANOS
        </div>
        <div>
            <p>C/ wisi enim ad minim veniam, 23 </br>23654</p>
        </div>
        <iframe class="" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30493167.385562003!2d-87.76528053486774!3d21.100184828668755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1svenezuela!5e0!3m2!1ses-419!2sve!4v1639670629018!5m2!1ses-419!2sve" 
            width="400" height="300" style="border:0; border-radius: 40px;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
    <div class="col-lg-5 p-lg-3">
        <form role="form" method="POST" action="">
            <div class="row">
                <div class="form-group col-lg-12">
                    <label for="email">NOMBRE:</label>
                    <input type="text" class="form-control mt-lg-3 mb-lg-3" id="nombre" style="border-radius: 10px;">
                </div>
                <div class="form-group col-lg-12">
                    <label for="email">EMAIL:</label>
                    <input type="email" class="form-control mt-lg-3 mb-lg-3" id="email" style="border-radius: 10px;">
                </div>
                <div class="form-group col-lg-4">
                    <label for="tel">TELÉFONO:</label>
                    <input type="tel" class="form-control mt-lg-3 mb-lg-3" id="tel" style="border-radius: 10px;">
                </div>
                <div class="form-group col-lg-4">
                    <label for="ciud">CIUDAD:</label>
                    <input type="text" class="form-control mt-lg-3 mb-lg-3" id="ciudad" style="border-radius: 10px;">
                </div>
                <div class="form-group col-lg-4">
                    <label for="ciu">PAÍS:</label>
                    <input type="text" class="form-control mt-lg-3 mb-lg-3" id="pais" style="border-radius: 10px;">
                </div>
                <div class="form-group col-lg-12">
                    <label for="ciu">MENSAJE:</label>
                    <textarea name="textarea" rows="3" cols="20" class="form-control mt-lg-3 mb-lg-3" id="mensaje" style="border-radius: 10px;"></textarea>
                </div>
                <!--button type="submit" class="btn btn-info">Submit</button-->
            </div>      
        </form>
    </div>
</section>