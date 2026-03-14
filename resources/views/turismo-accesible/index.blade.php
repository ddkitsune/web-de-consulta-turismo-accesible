<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Accesible Venezuela | Travel Xperience Model</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/xperience.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
</head>

<body>

    <!-- Skip to main content for screen readers -->
    <a href="#main-content" class="skip-link" data-i18n="nav.skip">Saltar al contenido principal</a>

    <!-- Accessibility Floating Menu -->
    <div class="accessibility-menu">
        <button id="toggle-contrast" class="btn-tool" title="Modo Accesibilidad Radical"
            aria-label="Cambiar a modo alto contraste">
            <i class="fas fa-universal-access"></i>
        </button>
    </div>

    <!-- Main Container from index.html -->
    <div class="app-container" id="main-content">

        <!-- Header Logos Section (from index.html) -->
        <header class="main-header">
            <div class="header-left">
                <img src="assets/logo_left.png" alt="Ministerio de Turismo" class="logo-mpp">
                <img src="assets/social_header_bg.png" alt="Redes Sociales" class="logo-social">
            </div>
            <div class="header-right">
                <img src="assets/logo_right.png" alt="Bicentenario" class="logo-bicentenario">
            </div>
        </header>

        <!-- Navbar (from index.html) -->
        <nav class="navbar">
            <div class="navbar-container">
                <!-- Mobile Menu Button -->
                <button class="mobile-menu-btn" aria-label="Menu">
                    <i class="fas fa-bars"></i>
                </button>

                <ul class="nav-menu">
                    <li><a href="index.html" data-i18n="nav.home">INICIO</a></li>

                    <li class="dropdown">
                        <a href="#"><span data-i18n="nav.ministry">EL MINISTERIO</span> <i
                                class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-content">
                            <li><a href="ministerio.html" data-i18n="nav.mission">MISIÓN Y VISIÓN</a></li>
                            <li><a href="ministerio.html" data-i18n="nav.org">ORGANIGRAMA</a></li>
                            <li><a href="ministerio.html" data-i18n="nav.minister">MINISTRA</a></li>
                            <li><a href="ministerio.html" data-i18n="nav.competence">COMPETENCIAS</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#"><span data-i18n="nav.entities">ORGANISMOS ADSCRITOS</span> <i
                                class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-content">
                            <li><a href="#">INATUR</a></li>
                            <li><a href="#">VENTEL</a></li>
                            <li><a href="#">VENETUR</a></li>
                            <li><a href="#">SOGATUR</a></li>
                            <li><a href="#" data-i18n="nav.foundations">FUNDACIONES Y CORPORACIONES</a></li>
                        </ul>
                    </li>

                    <li><a href="#" data-i18n="nav.news">NOTICIAS</a></li>

                    <li class="dropdown">
                        <a href="#"><span data-i18n="nav.services">TRÁMITES Y SERVICIOS</span> <i
                                class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-content">
                            <li><a href="#" data-i18n="nav.rtn">REGISTRO TURISTICO NACIONAL (RTN)</a></li>
                            <li><a href="#" data-i18n="nav.license">LICENCIAS</a></li>
                            <li><a href="#" data-i18n="nav.digital_rtn">RTN Y LICENCIA DIGITAL</a></li>
                            <li><a href="#" data-i18n="nav.routes">RUTAS TURÍSTICAS</a></li>
                            <li><a href="#" data-i18n="nav.cat">CATEGORIZACIÓN</a></li>
                            <li><a href="#" data-i18n="nav.cert">CERTIFICACIÓN</a></li>
                            <li><a href="#" data-i18n="nav.book">LIBRO OFICIAL</a></li>
                            <li><a href="#" data-i18n="nav.plate">PLACA DE IDENTIFICACIÓN</a></li>
                            <li><a href="#" data-i18n="nav.tech">FACTIBILIDAD TÉCNICA</a></li>
                        </ul>
                    </li>

                    <li><a href="#" data-i18n="nav.prevention">PREVENCIÓN DE LC/FT/FPADM</a></li>
                    <li><a href="#" data-i18n="nav.guide">GUÍA TURÍSTICA</a></li>

                    <li class="dropdown">
                        <a href="#"><i class="fas fa-globe"></i> <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-content" style="min-width: 120px;">
                            <li><a href="#" onclick="changeLanguage('es')">ESPAÑOL</a></li>
                            <li><a href="#" onclick="changeLanguage('en')">ENGLISH</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero"
            style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1531279554030-97426613388a?q=80&w=2000&auto=format&fit=crop') center/cover no-repeat;">
            <div class="hero-content">
                <h1 data-i18n="hero.title">Venezuela para Todos</h1>
                <h2 class="slogan" data-i18n="hero.slogan">"Belleza sin Barreras"</h2>
                <p data-i18n="hero.subtitle">Descubre los destinos más espectaculares de nuestra tierra con total
                    accesibilidad y servicios adaptados
                    a tus necesidades.</p>
                <div class="hero-btns">
                    <a href="#destinos" class="btn-reserve" style="background: var(--secondary);"
                        data-i18n="hero.cta">Ver
                        Destinos</a>
                    <button onclick="playVoiceOver()" class="btn-voice" aria-label="Reproducir voz en off">
                        <i class="fas fa-volume-up"></i> <span data-i18n="hero.voice">Escuchar</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Accessibility Info Section -->
        <section class="accessibility-info" id="que-es">
            <div class="info-container">
                <div class="info-text">
                    <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                        <h2 data-i18n="info.title" style="margin-bottom: 0;">¿Qué es el Turismo Accesible?</h2>
                        <button onclick="playVoiceOver('que-es')" class="btn-voice-section"
                            aria-label="Escuchar sección">
                            <i class="fas fa-volume-up"></i>
                        </button>
                    </div>
                    <p data-i18n="info.desc">El turismo accesible es aquel que permite la igualdad de oportunidades de
                        todas las personas para desarrollar la actividad turística de una manera segura, cómoda,
                        autónoma y normalizada. Es eliminar barreras para que todos, sin importar su condición física o
                        cognitiva, disfruten de Venezuela.</p>

                    <div class="disability-types">
                        <div class="type-item">
                            <i class="fas fa-wheelchair"></i>
                            <span data-i18n="info.types.physical">Física o Motora</span>
                        </div>
                        <div class="type-item">
                            <i class="fas fa-eye-slash"></i>
                            <span data-i18n="info.types.visual">Visual</span>
                        </div>
                        <div class="type-item">
                            <i class="fas fa-deaf"></i>
                            <span data-i18n="info.types.auditory">Auditiva</span>
                        </div>
                        <div class="type-item">
                            <i class="fas fa-brain"></i>
                            <span data-i18n="info.types.cognitive">Cognitiva</span>
                        </div>
                    </div>

                    <a href="http://conapdis.gob.ve/wordpress/" target="_blank" class="btn-conapdis">
                        <span data-i18n="info.more">Más información en CONAPDIS</span> <i
                            class="fas fa-external-link-alt"></i>
                    </a>
                </div>
                <div class="info-image">
                    <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?q=80&w=800&auto=format&fit=crop"
                        alt="Accesibilidad Universal">
                </div>
            </div>
        </section>

        <!-- Categories / Services -->
        <section class="services" id="servicios">
            <div style="position: absolute; top: 10px; right: 10px;">
                <button onclick="playVoiceOver('servicios')" class="btn-voice-section" aria-label="Escuchar servicios">
                    <i class="fas fa-volume-up"></i>
                </button>
            </div>
            <div class="service-card">
                <i class="fas fa-map-marked-alt"></i>
                <h3 data-i18n="services.custom.title">Viajes a Medida</h3>
                <p data-i18n="services.custom.desc">Diseñamos tu experiencia personalizada por toda Venezuela.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-users"></i>
                <h3 data-i18n="services.group.title">Viajes en Grupo</h3>
                <p data-i18n="services.group.desc">Salidas programadas con asistencia técnica especializada.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-wheelchair"></i>
                <h3 data-i18n="services.adapted.title">Rutas Adaptadas</h3>
                <p data-i18n="services.adapted.desc">Circuitos verificados para movilidad reducida.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-ship"></i>
                <h3 data-i18n="services.cruises.title">Cruceros y Yates</h3>
                <p data-i18n="services.cruises.desc">Explora nuestras costas y archipiélagos sin barreras.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-circle-user"></i>
                <h3 data-i18n="services.interpreters.title">Iterpretes</h3>
                <p data-i18n="services.interpreters.desc">Personal capacitado en lenguaje de señas.</p>
            </div>
        </section>

        <!-- Featured Destinations -->
        <section class="destinations" id="destinos">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <h2 data-i18n="destinations.title" style="margin-bottom: 0;">Nuestros Destinos Accesibles</h2>
                    <button onclick="playVoiceOver('destinos')" class="btn-voice-section"
                        aria-label="Escuchar destinos">
                        <i class="fas fa-volume-up"></i>
                    </button>
                </div>
                <p data-i18n="destinations.subtitle">Seleccionamos los mejores rincones de Venezuela con infraestructura garantizada.</p>
            </div>

            <!-- Panel de Filtros Interactivo -->
            <div style="background-color: #f8fafc; border-radius: 12px; padding: 20px; margin-bottom: 30px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                <form action="{{ route('home') }}#destinos" method="GET" style="display: flex; flex-wrap: wrap; gap: 15px; align-items: flex-end;">
                    
                    <div style="flex: 1; min-width: 200px;">
                        <label for="search" style="display: block; font-size: 0.875rem; font-weight: 600; color: #475569; margin-bottom: 5px;">Buscar por nombre o descripción:</label>
                        <div style="position: relative;">
                            <i class="fas fa-search" style="position: absolute; left: 12px; top: 12px; color: #94a3b8;"></i>
                            <input type="text" id="search" name="search" value="{{ request('search') }}" placeholder="Ej. Playa, Montaña, Caracas..." style="width: 100%; padding: 10px 10px 10px 35px; border: 1px solid #cbd5e1; border-radius: 6px; outline: none; transition: border-color 0.2s;">
                        </div>
                    </div>

                    <div style="flex: 1; min-width: 200px;">
                        <label for="location_id" style="display: block; font-size: 0.875rem; font-weight: 600; color: #475569; margin-bottom: 5px;">Filtrar por Ubicación:</label>
                        <select id="location_id" name="location_id" style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px; outline: none; background-color: white;">
                            <option value="">Cualquier ubicación</option>
                            @foreach($locations as $location)
                                <option value="{{ $location->id }}" {{ request('location_id') == $location->id ? 'selected' : '' }}>
                                    {{ $location->name }} ({{ $location->state }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div style="flex: 1; min-width: 200px;">
                        <label for="disability_id" style="display: block; font-size: 0.875rem; font-weight: 600; color: #475569; margin-bottom: 5px;">Adaptado para:</label>
                        <select id="disability_id" name="disability_id" style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px; outline: none; background-color: white;">
                            <option value="">Todas las discapacidades</option>
                            @foreach($disabilities as $disability)
                                <option value="{{ $disability->id }}" {{ request('disability_id') == $disability->id ? 'selected' : '' }}>
                                    {{ $disability->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="btn-reserve" style="background: var(--primary); border: none; padding: 12px 24px; cursor: pointer; border-radius: 6px; font-weight: bold;">
                            <i class="fas fa-filter"></i> Filtrar Destinos
                        </button>
                        
                        @if(request()->hasAny(['search', 'location_id', 'disability_id']))
                            <a href="{{ route('home') }}#destinos" style="display: inline-block; margin-left: 10px; color: #ef4444; text-decoration: none; font-size: 0.875rem; font-weight: 600;">
                                <i class="fas fa-times"></i> Limpiar Filtros
                            </a>
                        @endif
                    </div>
                </form>
            </div>

            <div class="destinations-grid">
                @foreach($destinations as $destination)
                <div class="dest-card">
                    <div class="dest-img">
                        @if($destination->image)
                        <img src="{{ str_starts_with($destination->image, 'assets/') ? asset($destination->image) : Storage::url($destination->image) }}" alt="{{ $destination->title }}"
                            style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                        <div style="width: 100%; height: 100%; background-color: #f3f4f6; display: flex; align-items: center; justify-content: center; color: #9ca3af;">
                            Sin Imagen
                        </div>
                        @endif
                    </div>
                    <div class="dest-content">
                        <div class="dest-badges" style="display: flex; justify-content: space-between; align-items: flex-start;">
                            <div>
                                @foreach($destination->disabilities as $disability)
                                <span class="badge" style="background-color: var(--primary); color: white;" title="{{ $disability->name }}">
                                    <i class="{{ $disability->icon }}"></i> <span class="hidden sm:inline">{{ substr($disability->name, 0, 10) }}</span>
                                </span>
                                @endforeach
                            </div>
                            <!-- Botón Inteligente de Voz Individual -->
                            <button onclick="playSpecificVoice('{{ addslashes($destination->title) }}. {{ addslashes($destination->description) }}')" 
                                    class="btn-voice-section" 
                                    style="position: relative; top: 0; right: 0; transform: scale(0.8);"
                                    title="Escuchar información de esta ruta"
                                    aria-label="Escuchar detalle de {{ $destination->title }}">
                                <i class="fas fa-volume-up"></i>
                            </button>
                        </div>
                        <h3>{{ $destination->title }}</h3>
                        <p class="text-sm font-semibold" style="color: var(--secondary);">
                            <i class="fas fa-map-marker-alt"></i> {{ optional($destination->location)->name }} ({{ optional($destination->location)->state }})
                        </p>
                        <p>{{ Str::limit($destination->description, 120) }}</p>
                        <a href="#" class="btn-outline" data-i18n="common.view_itinerary">Ver Detalle</a>
                    </div>
                </div>
                @endforeach
                
                @if($destinations->isEmpty())
                <div style="grid-column: 1 / -1; text-align: center; padding: 2rem;">
                    <p>Actualmente no hay destinos disponibles en nuestro catálogo.</p>
                </div>
                @endif
            </div>
        </section>

        <!-- Interactive Map Section -->
        <section class="interactive-map p-6 bg-white" id="mapa">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <h2 data-i18n="map.title" style="margin-bottom: 0;">Explora en el Mapa</h2>
                    <button onclick="playVoiceOver('mapa')" class="btn-voice-section" aria-label="Escuchar sección mapa">
                        <i class="fas fa-volume-up"></i>
                    </button>
                </div>
                <p data-i18n="map.subtitle" class="mb-4">Ubica geográficamente todos nuestros destinos y planifica tu ruta de viaje accesible.</p>
            </div>
            
            <div id="venezuela-map" style="height: 500px; width: 100%; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); z-index: 1;"></div>
        </section>

        <!-- Testimonials -->
        <section class="testimonials" id="testimonios">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <h2 data-i18n="testimonials.title" style="margin-bottom: 0;">Experiencias que Inspiran</h2>
                    <button onclick="playVoiceOver('testimonios')" class="btn-voice-section"
                        aria-label="Escuchar testimonios">
                        <i class="fas fa-volume-up"></i>
                    </button>
                </div>
            </div>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote"></i>
                    <p data-i18n="testimonials.1.text">"Pensé que nunca podría ver el Salto Ángel de cerca. Gracias al
                        equipo de MINTUR, la logística
                        fue perfecta y pude disfrutar de la maravilla del mundo."</p>
                    <div class="user-info">
                        <div class="user-img" style="background: url('https://i.pravatar.cc/150?u=1') center/cover;">
                        </div>
                        <div>
                            <strong>Andrés R.</strong>
                            <br><small data-i18n="testimonials.1.role">Viajero de Caracas</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote"></i>
                    <p data-i18n="testimonials.2.text">"La playa en Morrocoy fue una sorpresa increíble. Las sillas
                        anfibias funcionan de maravilla y el
                        personal es extremadamente amable y atento."</p>
                    <div class="user-info">
                        <div class="user-img" style="background: url('https://i.pravatar.cc/150?u=2') center/cover;">
                        </div>
                        <div>
                            <strong>Mariana V.</strong>
                            <br><small data-i18n="testimonials.2.role">Turista Internacional</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote"></i>
                    <p data-i18n="testimonials.3.text">"Viajar en grupo con Inatur nos dio la seguridad que
                        necesitábamos. Todo el viaje estuvo
                        cronometrado y sin barreras arquitectónicas."</p>
                    <div class="user-info">
                        <div class="user-img" style="background: url('https://i.pravatar.cc/150?u=3') center/cover;">
                        </div>
                        <div>
                            <strong>Carlos T.</strong>
                            <br><small data-i18n="testimonials.3.role">Viajero en Familia</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer (from index.html) -->
        <footer class="main-footer">
            <div class="footer-content">
                <p data-i18n="footer.ministry">Ministerio Del Poder Popular para el Turismo (Mintur) G-20013132-2</p>
                <p data-i18n="footer.address">Av. Principal de La Floresta con Av. Francisco de Miranda, Complejo Mintur
                    Caracas, Edo.Miranda</p>
            </div>
        </footer>

    </div> <!-- End app-container -->

    <script src="js/script.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        // Smooth scroll mock
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#' && href.startsWith('#')) {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });

        // Inicializar el mapa de Leaflet centrado en Venezuela
        document.addEventListener('DOMContentLoaded', function() {
            // Coordenadas centrales de Venezuela con zoom nivel 5
            var map = L.map('venezuela-map').setView([7.5, -66.1], 5);

            // Agregar la capa de mapa base de OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Definir un icono personalizado para los marcadores de accesibilidad
            var accessibleIcon = L.icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            // Extraer rutas de la base de datos que pasamos por variable de Blade
            var destinations = @json($destinations);

            // Agregar marcadores dinámicos
            destinations.forEach(function(dest) {
                // Solo colocar los que tienen latitud y longitud válida numérica
                if (dest.latitude && dest.longitude && !isNaN(dest.latitude) && !isNaN(dest.longitude)) {
                    // Texto rápido del popup
                    var facilitiesInfo = dest.disabilities.map(function(d){ return d.name; }).join(', ');
                    if(facilitiesInfo == "") facilitiesInfo = "No se especificó accesibilidad específica";

                    // Imagen en el tooltip
                    var imagePath = dest.image ? (dest.image.startsWith('assets/') ? dest.image : '/storage/' + dest.image) : '';
                    var imgHtml = imagePath ? '<img src="' + imagePath + '" style="width:100%; height:90px; object-fit:cover; border-radius:4px; margin-bottom:5px;">' : '';

                    var marker = L.marker([dest.latitude, dest.longitude], {icon: accessibleIcon}).addTo(map);
                    
                    var popupContent = `
                        <div style="width: 200px;">
                            ${imgHtml}
                            <h4 style="margin: 0 0 5px 0; color: #1e40af; font-size: 14px;">${dest.title}</h4>
                            <p style="margin: 0 0 5px 0; font-size: 12px; color: #4b5563;"><i class="fas fa-map-marker-alt"></i> ${dest.location ? dest.location.name : 'Vzla'}</p>
                            <p style="margin: 0; font-size: 11px; font-weight: bold; color: #047857;">Accesible para:</p>
                            <p style="margin: 0; font-size: 11px; color: #374151;">${facilitiesInfo}</p>
                        </div>
                    `;
                    marker.bindPopup(popupContent);
                }
            });
        });
    </script>
</body>

</html>