<?php 
/*** Plantilla para el home CONTÁCTANOS***/    
   
?>
<section class="seccontacto row justify-content-lg-center mb-lg-5 p-lg-0 m-lg-0" id="contactanos">
    
    <div class="col-lg-5 row justify-content-between rounded text-light">
        <div class="col-lg-12 mb-lg-3">
            <h1>CONTÁCTANOS</h1>
        </div>
        <div class="mb-lg-3">
            <p>C/ wisi enim ad minim veniam, 23 </br>23654</p>
        </div>
        <iframe class="" 
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30493167.385562003!2d-87.76528053486774!3d21.100184828668755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1svenezuela!5e0!3m2!1ses-419!2sve!4v1639670629018!5m2!1ses-419!2sve" 
            width="400" height="300" style="border:0; border-radius: 40px;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
    <div class="col-lg-5 text-light mt-lg-5">
        <form role="form" method="POST" action="">
            <div class="row">
                <!--div class="form-group col-lg-12 mt-lg-3">
                    <label for="email">NOMBRE:</label>
                    <input type="text" class="form-control mb-lg-3" id="nombre" style="border-radius: 10px;">
                </div-->
                <div class="form-group col-lg-12 mt-lg-3">
                    <label for="email" class="mb-lg-3">EMAIL:</label>
                    <input type="email" class="form-control mb-lg-3" id="email" style="border-radius: 10px;">
                </div>
                <!--div class="form-group col-lg-4 mt-lg-3">
                    <label for="tel">TELÉFONO:</label>
                    <input type="tel" class="form-control mb-lg-3" id="tel" style="border-radius: 10px;">
                </div-->
                <div class="form-group col-lg-6 mt-lg-3">
                    <label for="ciud" class="mb-lg-3">CIUDAD:</label>
                    <input type="text" class="form-control mb-lg-3" id="ciudad" style="border-radius: 10px;">
                </div>
                <div class="form-group col-lg-6 mt-lg-3">
                    <label for="ciu" class="mb-lg-3">PAÍS:</label>
                    <input type="text" class="form-control mb-lg-3" id="pais" style="border-radius: 10px;">
                </div>
                <div class="form-group col-lg-12 mt-lg-3">
                    <label for="ciu" class="mb-lg-3">MENSAJE:</label>
                    <textarea name="textarea" rows="5" cols="20" class="form-control mb-lg-3" id="mensaje" style="border-radius: 10px;"></textarea>
                </div>
                <!--button type="submit" class="btn btn-info">Submit</button-->
            </div>      
        </form>
    </div>
</section>