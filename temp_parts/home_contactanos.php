<?php 
/*** Plantilla para el home CONTÁCTANOS***/    
   
?>
<section class="seccontacto row justify-content-lg-center mb-lg-5 p-lg-0 m-lg-0" id="contactanos">
    
    <div class="col-lg-5 justify-content-between rounded text-light">
        <div class="col-lg-12 mb-lg-3">
            <h1>CONTÁCTANOS</h1>
        </div>
        <div class="mb-lg-3">
            <p>Delaware City, Delaware, EE. UU.</p>
        </div>
        <iframe col-12
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24602.413642950432!2d-75.61814312381495!3d39.57535021508915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c705f4035c601f%3A0x6d0a5fae529e1221!2sDelaware%20City%2C%20Delaware%2C%20EE.%20UU.!5e0!3m2!1ses!2sve!4v1643302101994!5m2!1ses!2sve" 
            width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
    <div class="col-lg-5 text-light mt-lg-5">
        <form method="POST" action="<?php echo get_template_directory_uri().'/temp_parts/contactanos.php'; ?>" validate>
        
            <div class="row">
               
                <div class="form-group col-lg-12 mt-lg-3">
                    <label for="email" class="mb-lg-3">EMAIL:</label>
                    <input type="text" class="form-control mb-lg-3" id="email" name="email" style="border-radius: 10px;">
                </div>
                <div class="form-group col-lg-6 mt-lg-3">
                    <label for="ciud" class="mb-lg-3">CIUDAD:</label>
                    <input type="text" class="form-control mb-lg-3" id="ciudad" name="ciudad" style="border-radius: 10px;">
                </div>
                <div class="form-group col-lg-6 mt-lg-3">
                    <label for="pais" class="mb-lg-3">PAÍS:</label>
                    <input type="text" class="form-control mb-lg-3" id="pais" name="pais" style="border-radius: 10px;">
                </div>
                <div class="form-group col-lg-12 mt-lg-3">
                    <label for="mensaje" class="mb-lg-3">MENSAJE:</label>
                    <textarea name="textarea" rows="5" cols="20" class="form-control mb-lg-3" id="mensaje" style="border-radius: 10px;"></textarea>
                </div>
                <div class="d-lg-flex justify-content-lg-end">
                    <!--button type="submit" class="btn btn-primary">Enviar</button-->
                    <button type="submit" class="btn w-25 btn-submit">Enviar</button>
                </div>
                
            </div>      
        </form>
    </div>
</section>