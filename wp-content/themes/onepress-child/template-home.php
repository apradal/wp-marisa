<?php
/**
 * Template Name: Home
 */

get_header();
$url = get_site_url();
?>

<div id="content" class="custom-template home">

    <div class="slick-slider">
        <div>
            <div class="slide-content">
                <img src="<?php echo $url ?>/wp-content/uploads/custom/slider1.jpg" alt="" id="slide1-img">
                <div class="content">
                    <h2>MARISA HERNÁNDEZ TORRIJO</h2>
                    <p>CONSULTA DE PSICOLOGÍA Nº COLEGIADO A-01857</p>
                    <p class="italic-thin">"PROFESIONALIDAD, EXPERIENCIA Y CONFIANZA"</p>
                    <a href="<?php echo $url ?>/terapia">SOBRE MI</a>
                </div>
            </div>
        </div>
        <div>
            <div class="slide-content">
                <img src="<?php echo $url ?>/wp-content/uploads/custom/slider2.jpg" alt="" id="slide2-img">
                <div class="content">
                    <h2>Psicología Clínica / Forense</h2>
                    <p>Consulta Patologías</p>
                    <a href="<?php echo $url ?>/terapia">PSICOLOGIA</a>
                </div>
            </div>
        </div>
        <div>
            <div class="slide-content">
                <img src="<?php echo $url ?>/wp-content/uploads/custom/slider3.jpeg" alt="" id="slide3-img">
                <div class="content">
                    <h2>Servicios Psicológicos</h2>
                    <p>Todo tipo de soluciones</p>
                    <a href="<?php echo $url ?>/terapia">SERVICIOS</a>
                </div>
            </div>
        </div>
    </div>

    <div class="emptySpace90 emptySpace-md30"></div>

    <div class="container">
        <div class="row block sobre-mi">
            <div class="col-12">
                <h2>SOBRE MÍ</h2>
                <p>Soy <b>Marisa Hernández Torrijo</b>, Licenciada en Psicología Clínica por la por la UNED. Dedico mi carrera profesional a la prevención y tratamiento de trastornos psicológicos, así como a promover la salud mental y el bienestar psicológico. Actualmente, trabajo como psicóloga en Zaragoza, en mi consulta particular, realizando psicoterapia individual tanto con adultos como adolescentes. Además, colaboro con otras entidades y medios de comunicación. En consulta, contamos con el apoyo del Dr. José Carlos Fuertes como psiquiatra consultor y de Rosa Blanca Andrés Graduada en Psicología y Neuropsicóloga.</p>
                <a href="<?php echo $url ?>/sobre-mi">Más sobre mi...</a>
            </div>
        </div>
    </div>

    <div class="emptySpace90 emptySpace-md30"></div>

    <div class="row block alternative-bg">
        <div class="emptySpace90 emptySpace-md30"></div>
        <div class="container servicios">
            <div class="row">
                <div class="col-12">
                    <h2>SERVICIOS QUE OFRECEMOS EN LA CLÍNICA</h2>
                </div>
                <div class="col-xs-12 col-md-3">
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
                <div class="col-xs-12 col-md-3">
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
                <div class="col-xs-12 col-md-3">
                    <div class="servicio-wrapper">
                        <div class="servicio-block-img">
                            <img src="<?php echo $url ?>/wp-content/uploads/2019/03/servicios-terapia-relajacion.jpg" alt="">
                        </div>
                        <div class="servicio-block-content">
                            <h4>TÉCNICAS DE RELAJACIÓN</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="servicio-wrapper">
                        <div class="servicio-block-img">
                            <img src="<?php echo $url ?>/wp-content/uploads/2019/03/servicios-terapia-orientacion.jpg" alt="">
                        </div>
                        <div class="servicio-block-content">
                            <h4>ENTREVISTA INFORMATIVA/SESIÓN ORIENTACIÓN</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 see-more">
                    <a href="<?php echo $url ?>/servicios">Más servicios...</a>
                </div>
            </div>
        </div>
        <div class="emptySpace90 emptySpace-md30"></div>
    </div>

    <div class="emptySpace90 emptySpace-md30"></div>

    <div class="container psicologia-container">
        <div class="row">
            <div class="col-12">
                <h2>PSICOLOGIA CLÍNICA / FORENSE</h2>
            </div>
            <div class="col-xs-12 col-md-6">
                <a href="<?php echo $url ?>/terapia">
                    <div class="psicologia-box left">
                        <h3>CLÍNICA</h3>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-md-6">
                <a href="<?php echo $url ?>/terapia">
                    <div class="psicologia-box right">
                        <h3>FORENSE</h3>
                    </div>
                </a>
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
                <p><i class="fa fa-phone"></i>661 576 176 - 876 712 268</p>
                <a href="<?php echo $url ?>/contacto">CONTACTO</a>
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function(){
            jQuery('.slick-slider').slick({
                autoplay: true,
                arrows: false
            });
        });
    </script>
</div>

<?php get_footer(); ?>