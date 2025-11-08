<?php
/* 
Template Name: Landing Personal 
Description: Página principal personalizada para el portfolio.
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Fernández Ruz - Portfolio Profesional</title>

    <!-- ENLAZAR CSS DEL TEMA -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header-container">
            <div class="profile-section">
                <img src="img/Captura de pantalla 2023-10-29 143042 (1).png" alt="Pedro Fernández Ruz" class="profile-image">
                <h1>Pedro Fernández Ruz</h1>
            </div>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+34622642004">+34 622 642 004</a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:pedro111.fernandez.ruz@gmail.com">pedro111.fernandez.ruz@gmail.com</a>
                </div>
                <div class="contact-item">
                    <i class="fab fa-linkedin"></i>
                    <a href="https://www.linkedin.com/in/pedro-fernández-ruz" target="_blank">LinkedIn</a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-location-dot"></i>
                    <span>Madrid</span>
                </div>
                <div class="cv-download">
                    <a href="assets/CV Pedro Fernández Ruz.pdf" download class="cv-button">
                        <i class="fas fa-file-pdf"></i>
                        Ver CV
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="education-section">
            <h2 class="section-title">Formación Académica</h2>
            <div class="education-container">
                <div class="education-card">
                    <div class="education-logo">
                        <img src="img/ESIC.png" alt="ESIC Business and Marketing School">
                    </div>
                    <div class="education-details">
                        <h3>Grado Superior Marketing y Publicidad</h3>
                        <h4>ESIC Business and Marketing School</h4>
                        <p class="education-period">2022 - 2024</p>
                        <button class="toggle-content" onclick="toggleContent('esic-content')">
                            <span>Resumen de lo que aprendí en ESIC</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div id="esic-content" class="collapsible-content">
                            <div class="content-inner">
                                <p>En ESIC, en el Grado Superior de Marketing y Publicidad, lo que aprendí de verdad fue:</p>
                                
                                <p><strong>Terminología básica del sector:</strong> target, segmentación, briefing, KPI, posicionamiento, insight, buyer persona… y cómo aplicarlos sin teoría inútil.</p>
                                
                                <p><strong>Office a nivel práctico:</strong></p>
                                <ul>
                                    <li><strong>Excel:</strong> tablas, filtros, gráficos, fórmulas básicas y ordenar datos para análisis rápidos.</li>
                                    <li><strong>PowerPoint:</strong> presentar ideas de forma clara, maquetar, jerarquía visual y preparar propuestas.</li>
                                </ul>
                                
                                <p><strong>Branding:</strong> qué es una marca, cómo se construye y cómo mantener coherencia visual y verbal.</p>
                                
                                <p><strong>Adobe</strong> (Photoshop, Illustrator, Premiere): creación de posts, creatividades, banners y vídeos básicos. Recortar, ajustar, diseñar piezas simples y preparar material para redes o campañas.</p>
                                
                                <p><strong>Investigación de mercado:</strong> encuestas, datos, conclusiones útiles y cómo justificar decisiones.</p>
                                
                                <p><strong>Planificación de campañas:</strong> estructura de un briefing, objetivos, elección de medios y lógica detrás de cada acción.</p>
                                
                                <p><strong>Presentación y trabajo bajo presión:</strong> exponer, defender ideas y entregar proyectos en tiempos ajustados.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="education-card">
                    <div class="education-logo">
                        <img src="img/mioti-talento-digital_0.png" alt="MIOTI">
                    </div>
                    <div class="education-details">
                        <h3>Máster en Marketing Digital y Analítica</h3>
                        <h4>MIOTI</h4>
                        <p class="education-period">2024 - 2025</p>
                        <button class="toggle-content" onclick="toggleContent('mioti-content')">
                            <span>Resumen de lo que aprendí en MIOTI</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div id="mioti-content" class="collapsible-content">
                            <div class="content-inner">
                                <p>En MIOTI, lo que aprendí de verdad fue:</p>
                                
                                <p><strong>Mentalidad data-driven:</strong> ahí me introdujeron a lo que significa trabajar guiado por datos. Entendí cómo leer patrones, cómo interpretar métricas sin sacar conclusiones rápidas y cómo usar esa información para justificar decisiones de marketing, diseño o estrategia. En resumen: primero datos, luego decisiones.</p>
                                
                                <p><strong>Herramientas digitales</strong> que usamos en casos prácticos que simulaban casos reales:</p>
                                
                                <ul>
                                    <li><strong>GA4</strong> para analizar tráfico, embudos y conversiones.</li>
                                    <li><strong>Google Ads</strong> para montar y optimizar campañas, pujas y keywords.</li>
                                    <li><strong>Power BI</strong> para dashboards y análisis visual claro.</li>
                                    <li><strong>LinkedIn Ads y Meta Ads</strong> para segmentación avanzada y optimización de rendimiento.</li>
                                    <li><strong>Figma</strong> para prototipos y diseño funcional.</li>
                                    <li><strong>WordPress</strong> para crear y ajustar páginas.</li>
                                    <li><strong>HubSpot</strong> para CRM, automatizaciones y seguimiento de leads.</li>
                                </ul>
                                
                                <p><strong>Rendimiento de campañas y métricas concretas:</strong> aprendí a interpretar CTR, CPC, CPA, ROAS, tasa de conversión, impresiones, alcance, frecuencia, CTA, y a entender qué significa cada una para saber si una campaña funciona o está quemando presupuesto.</p>
                                
                                <p><strong>Terminología web esencial:</strong> entendí qué es un dominio, qué es el alojamiento, cómo funcionan los DNS, qué es un CMS y cómo encajan para que una web exista y se gestione bien.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="experience-section">
            <h2 class="section-title">Experiencia Laboral</h2>
            <div class="experience-container">
                <div class="experience-card">
                    <div class="experience-header">
                        <h3>SEO en Memba Consultoría SEO y SEM</h3>
                        <span class="experience-period">Mayo 2025 - Actualidad</span>
                    </div>
                    <div class="experience-content">
                        <p>Aquí me encuentro aprendiendo a diario sobre el SEO on page y off page de las empresas con nuestros clientes.</p>
                        <ul>
                            <li>Manejo de Ahrefs y Google Search Console para análisis de insights y toma de decisiones</li>
                            <li>Keyword Research y planificación de contenidos</li>
                            <li>Creación de reporte en GA4 de vistas que llegan a tu web a través de IA y en que páginas aterrizan</li>
                            <li>Calendarios de artículos y redacción en Wordpress</li>
                            <li>Análisis de tendencias de búsqueda con Google Trends en mercados angloparlantes</li>
                            <li>Creación de informes mensuales SEO integrando datos de múltiples fuentes (Ahrefs, Analytics, Search Console)</li>
                            <li>Análisis de competencia digital en orgánico e implementación de mejores prácticas</li>
                            <li>Research de consultas longtail por las que generas impresiones</li>
                            <li>Optimización técnica SEO:
                                <ul>
                                    <li>Pruning de URLs con alta tasa de rebote</li>
                                    <li>Gestión de redirecciones 404</li>
                                    <li>Optimización de imágenes</li>
                                    <li>Optimización para búsquedas en IA generativa</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="experience-card">
                    <div class="experience-header">
                        <h3>Prácticas en Wolair</h3>
                        <span class="experience-period">Marzo - Junio 2024</span>
                        <span class="experience-subtitle">Prácticas asociadas a ESIC</span>
                    </div>
                    <div class="experience-content">
                        <ul>
                            <li>Traducción de web con Wordpress</li>
                            <li>Desarrollo de tablas Excel para medición de contenidos</li>
                            <li>Creación de videos cortos para la web utilizando CapCut</li>
                            <li>Edición básica de imágenes con Photoshop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="tools-section">
            <h2 class="section-title">Herramientas</h2>
            <div class="carousel-container">
                <button class="carousel-button prev" onclick="moveCarousel(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <div class="carousel-wrapper">
                    <div class="carousel">
                        <!-- Primer conjunto de elementos -->
                        <div class="carousel-item">
                            <img src="img/Ahrefs-Logo.png" alt="Ahrefs">
                            <span class="tool-name">Ahrefs</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/search-console-icon-2025-1.svg" alt="Search Console">
                            <span class="tool-name">Search Console</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Logo_Google_Analytics.svg.png" alt="Google Analytics">
                            <span class="tool-name">Google Analytics</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Wordpress-Logo.svg.png" alt="WordPress">
                            <span class="tool-name">WordPress</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/pfo-google-trends-logo.png" alt="Google Trends">
                            <span class="tool-name">Google Trends</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Google_Ads_logo.svg.png" alt="Google Ads">
                            <span class="tool-name">Google Ads</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/LinkedIn-Ads.png" alt="LinkedIn Ads">
                            <span class="tool-name">LinkedIn Ads</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/New_Power_BI_Logo.svg.png" alt="Power BI">
                            <span class="tool-name">Power BI</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Microsoft_Office_Excel_(2025–present).svg.png" alt="Excel">
                            <span class="tool-name">Excel</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Notion_app_logo.png" alt="Notion">
                            <span class="tool-name">Notion</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Canva_Logo.svg.png" alt="Canva">
                            <span class="tool-name">Canva</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Adobe_Premiere_Pro_CC_icon.svg.png" alt="Adobe Premiere">
                            <span class="tool-name">Premiere</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Adobe_Photoshop_CC_icon.svg.png" alt="Adobe Photoshop">
                            <span class="tool-name">Photoshop</span>
                        </div>
                        
                        <!-- Duplicado para efecto infinito -->
                        <div class="carousel-item">
                            <img src="img/Ahrefs-Logo.png" alt="Ahrefs">
                            <span class="tool-name">Ahrefs</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/search-console-icon-2025-1.svg" alt="Search Console">
                            <span class="tool-name">Search Console</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Logo_Google_Analytics.svg.png" alt="Google Analytics">
                            <span class="tool-name">Google Analytics</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Wordpress-Logo.svg.png" alt="WordPress">
                            <span class="tool-name">WordPress</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/pfo-google-trends-logo.png" alt="Google Trends">
                            <span class="tool-name">Google Trends</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Google_Ads_logo.svg.png" alt="Google Ads">
                            <span class="tool-name">Google Ads</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/LinkedIn-Ads.png" alt="LinkedIn Ads">
                            <span class="tool-name">LinkedIn Ads</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/New_Power_BI_Logo.svg.png" alt="Power BI">
                            <span class="tool-name">Power BI</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Microsoft_Office_Excel_(2025–present).svg.png" alt="Excel">
                            <span class="tool-name">Excel</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Notion_app_logo.png" alt="Notion">
                            <span class="tool-name">Notion</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Canva_Logo.svg.png" alt="Canva">
                            <span class="tool-name">Canva</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Adobe_Premiere_Pro_CC_icon.svg.png" alt="Adobe Premiere">
                            <span class="tool-name">Premiere</span>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Adobe_Photoshop_CC_icon.svg.png" alt="Adobe Photoshop">
                            <span class="tool-name">Photoshop</span>
                        </div>
                    </div>
                </div>

                <button class="carousel-button next" onclick="moveCarousel(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>

        <section class="languages-section">
            <h2 class="section-title">Idiomas</h2>
            <div class="languages-container">
                <div class="language-card">
                    <div class="language-content">
                        <div class="language-info">
                            <h3>Español</h3>
                            <span class="language-level native">Nativo</span>
                        </div>
                    </div>
                </div>

                <div class="language-card">
                    <div class="language-content">
                        <div class="language-info">
                            <h3>Inglés</h3>
                            <span class="language-level">B2 Certificado</span>
                            <div class="certificate-logo">
                                <img src="img/CAE-AEC-LOGO.png" alt="Cambridge Assessment English Certified" class="cambridge-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php wp_footer(); ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/script.js"></script>
</body>
</html>