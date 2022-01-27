<?php 
/*** Plantilla para el home CONTÁCTANOS***/    
   
?>
<section class="seccontacto row justify-content-lg-center mb-lg-5 p-lg-0 m-lg-0" id="contactanos">
    
    <div class="col-lg-5 justify-content-between rounded text-light">
        <div class="col-lg-12 mb-lg-3">
            <h1>CONTÁCTANOS</h1>
        </div>
        <div class="mb-lg-3">
            <p>Delaware City, Delaware, EE. UU.</br></p>
        </div>
        <iframe class="col-12" 
            src="https://www.google.com/maps/d/u/0/viewer?msa=0&mid=1I1yuSD3mrM5NuBGRFAKGkGu9VTM&ll=39.57956300000001%2C-75.587482&z=17" 
            width="400" height="300" style="border:0; border-radius: 2px;" allowfullscreen="" loading="lazy">
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