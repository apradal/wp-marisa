<?php
/**
 * Template Name: Servicios
 */

get_header();
$url = get_site_url();
?>

<div id="content" class="custom-template">

    <div id="image-title" class="servicios">
        <h1 class="title-fade slide-in-top">SERVICIOS</h1>
    </div>

    <div class="servicios-container container">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="servicio-wrapper">
                    <div class="servicio-block-img">
                        <img src="<?php echo $url ?>/wp-content/uploads/2019/03/servicios-terapia-adultos.jpg" alt="">
                    </div>
                    <div class="servicio-block-content">
                        <h4>PSICOTERAPIA ADULTOS</h4>
                        <p>Algunas de las problemáticas que trabajo en terapia son: Depresión. Ansiedad. Fobias y Miedos. Regulación de emociones e impulsividad. Habilidades sociales; conversaciones, hablar en público, asertividad y Saber decir NO. Adicciones. Trastornos de la conducta alimentaria. Trastornos de la personalidad (trastorno límite, trastorno obsesivo compulsivo, etc…) Duelo. Autoestima. Esquizofrenia y otras psicósis.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="servicio-wrapper">
                    <div class="servicio-block-img">
                        <img src="<?php echo $url ?>/wp-content/uploads/2019/03/servicios-terapia-children.jpg" alt="">
                    </div>
                    <div class="servicio-block-content">
                        <h4>PSICOTERAPIA ADOLESCENTES</h4>
                        <p>Algunas de las problemáticas que trabajo en terapia son: Problemas de comportamiento. Regulación de las emociones e impulsividad. Adicciones. Trastornos de la conducta alimentaria. Depresión. Ansiedad. Miedos y Fobias. Habilidades Sociales; conversaciones, hablar en público, asertividad y saber decir NO. Duelo. Autoestima.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="servicio-wrapper">
                    <div class="servicio-block-img">
                        <img src="<?php echo $url ?>/wp-content/uploads/2019/03/servicios-terapia-orientacion.jpg" alt="">
                    </div>
                    <div class="servicio-block-content">
                        <h4>ENTREVISTA INFORMATIVA/SESIÓN ORIENTACIÓN</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="emptySpace90 emptySpace-md30"></div>

        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="servicio-wrapper">
                    <div class="servicio-block-img">
                        <img src="<?php echo $url ?>/wp-content/uploads/2019/03/servicios_periciales.jpg" alt="">
                    </div>
                    <div class="servicio-block-content">
                        <h4>INFORMES PSICOLÓGICOS Y PERICIALES</h4>
                        <p>Realizo informes y valoraciones periciales psicológicas.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="servicio-wrapper">
                    <div class="servicio-block-img">
                        <img src="<?php echo $url ?>/wp-content/uploads/2019/03/servicios-terapia-relajacion.jpg" alt="">
                    </div>
                    <div class="servicio-block-content">
                        <h4>TÉCNICAS DE RELAJACIÓN</h4>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="servicio-wrapper">
                    <div class="servicio-block-img">
                        <img src="<?php echo $url ?>/wp-content/uploads/2019/03/servicios-terapia-dentista.jpg" alt="">
                    </div>
                    <div class="servicio-block-content">
                        <h4>TERAPIA PSICOLÓGICA PARA SUPERAR LA FOBIA AL DENTISTA</h4>
                        <p>Con la colaboración de clínica dental Dra. Chamorro Pons.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-container-contact">
        <div class="container">
            <div class="bg-img-contact">
                <img src="<?php echo $url ?>/wp-content/uploads/2019/02/marisa_bg_small.png" alt=""/>
            </div>
            <div class="bg-info-contact">
                <h2 class="alternative-tittle">"Su problema tiene tratamiento"</h2>
                <h3>RESERVAR CITA </h3>
                <p><i class="fa fa-phone"></i> 876 712 268</p>
                <a href="<?php echo $url ?>/contacto">CONTACTO</a>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
