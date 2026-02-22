document.addEventListener('DOMContentLoaded', () => {
    const mobileBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.querySelector('.nav-menu');

    if (mobileBtn) {
        mobileBtn.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click from bubbling to document
            navMenu.classList.toggle('active');
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (navMenu.classList.contains('active') && !navMenu.contains(e.target) && !mobileBtn.contains(e.target)) {
            navMenu.classList.remove('active');
        }
    });

    // Dropdown logic for mobile
    const dropdowns = document.querySelectorAll('.dropdown > a');
    dropdowns.forEach(drop => {
        drop.addEventListener('click', (e) => {
            if (window.innerWidth <= 1024) {
                e.preventDefault();
                e.stopPropagation();
                const parent = drop.parentElement;
                const content = parent.querySelector('.dropdown-content');

                // Close other open dropdowns
                document.querySelectorAll('.dropdown-content').forEach(d => {
                    if (d !== content) d.style.display = 'none';
                });

                // Toggle current
                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            }
        });
    });

    // Close mobile menu when a link is clicked
    const navLinks = document.querySelectorAll('.nav-menu a:not(.dropdown > a)');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 1024) {
                navMenu.classList.remove('active');
            }
        });
    });
});

// Language Switching Logic
const translations = {
    es: {
        nav: {
            home: "INICIO",
            ministry: "EL MINISTERIO",
            mission: "MISIÓN Y VISIÓN",
            org: "ORGANIGRAMA",
            minister: "MINISTRA",
            competence: "COMPETENCIAS",
            entities: "ORGANISMOS ADSCRITOS",
            foundations: "FUNDACIONES Y CORPORACIONES",
            news: "NOTICIAS",
            services: "TRÁMITES Y SERVICIOS",
            rtn: "REGISTRO TURISTICO NACIONAL (RTN)",
            license: "LICENCIAS",
            digital_rtn: "RTN Y LICENCIA DIGITAL",
            routes: "RUTAS TURÍSTICAS",
            cat: "CATEGORIZACIÓN",
            cert: "CERTIFICACIÓN",
            book: "LIBRO OFICIAL",
            plate: "PLACA DE IDENTIFICACIÓN",
            tech: "FACTIBILIDAD TÉCNICA",
            prevention: "PREVENCIÓN DE LC/FT/FPADM",
            guide: "GUÍA TURÍSTICA",
            skip: "Saltar al contenido principal"
        },
        hero: {
            title: "Venezuela para Todos",
            slogan: '"Belleza sin Barreras"',
            subtitle: "Descubre los destinos más espectaculares de nuestra tierra con total accesibilidad y servicios adaptados a tus necesidades.",
            cta: "Ver Destinos",
            voice: "Escuchar"
        },
        info: {
            title: "¿Qué es el Turismo Accesible?",
            desc: "El turismo accesible es aquel que permite la igualdad de oportunidades de todas las personas para desarrollar la actividad turística de una manera segura, cómoda, autónoma y normalizada. Es eliminar barreras para que todos, sin importar su condición física o cognitiva, disfruten de Venezuela.",
            types: {
                physical: "Física o Motora",
                visual: "Visual",
                auditory: "Auditiva",
                cognitive: "Cognitiva"
            },
            more: "Más información en CONAPDIS"
        },
        services: {
            custom: { title: "Viajes a Medida", desc: "Diseñamos tu experiencia personalizada por toda Venezuela." },
            group: { title: "Viajes en Grupo", desc: "Salidas programadas con asistencia técnica especializada." },
            adapted: { title: "Rutas Adaptadas", desc: "Circuitos verificados para movilidad reducida." },
            cruises: { title: "Cruceros y Yates", desc: "Explora nuestras costas y archipiélagos sin barreras." },
            interpreters: { title: "Intérpretes", desc: "Personal capacitado en lenguaje de señas." }
        },
        destinations: {
            title: "Nuestros Destinos Accesibles",
            subtitle: "Seleccionamos los mejores rincones de Venezuela con infraestructura garantizada.",
            canaima: {
                title: "Canaima: La Selva Ancestral",
                desc: "Disfruta de la majestuosidad del Salto Ángel con traslados adaptados y alojamientos de primer nivel en el corazón de la selva."
            },
            morrocoy: {
                title: "Morrocoy: Playas Turquesa",
                desc: "Cayos con pasarelas de madera, sillas anfibias y personal capacitado para que vivas el Caribe venezolano sin límites."
            },
            caracas: {
                title: "Caracas: Cultura y Ciudad",
                desc: "Un recorrido por el centro histórico, el Teleférico Warairarepano y los museos más emblemáticos con accesibilidad total."
            },
            merida: {
                title: "Mérida: Cumbres Nevada",
                desc: "Siente el frío de los Andes en el Teleférico Mucumbarí, el más alto del mundo, totalmente diseñado para accesibilidad universal."
            },
            margarita: {
                title: "Margarita: La Perla del Caribe",
                desc: "Disfruta de hoteles boutique con habitaciones adaptadas y playas con servicios de asistencia para movilidad reducida."
            },
            tovar: {
                title: "Colonia Tovar: Selva y Tradición",
                desc: "Un pedazo de Alemania en el trópico. Rutas gastronómicas y paseos por el pueblo con rampas y accesos nivelados."
            }
        },
        common: { view_itinerary: "Ver Itinerario" },
        testimonials: {
            title: "Experiencias que Inspiran",
            1: {
                text: '"Pensé que nunca podría ver el Salto Ángel de cerca. Gracias al equipo de MINTUR, la logística fue perfecta y pude disfrutar de la maravilla del mundo."',
                role: "Viajero de Caracas"
            },
            2: {
                text: '"La playa en Morrocoy fue una sorpresa increíble. Las sillas anfibias funcionan de maravilla y el personal es extremadamente amable y atento."',
                role: "Turista Internacional"
            },
            3: {
                text: '"Viajar en grupo con Inatur nos dio la seguridad que necesitábamos. Todo el viaje estuvo cronometrado y sin barreras arquitectónicas."',
                role: "Viajero en Familia"
            }
        },
        footer: {
            ministry: "Ministerio Del Poder Popular para el Turismo (Mintur) G-20013132-2",
            address: "Av. Principal de La Floresta con Av. Francisco de Miranda, Complejo Mintur Caracas, Edo.Miranda"
        }
    },
    en: {
        nav: {
            home: "HOME",
            ministry: "THE MINISTRY",
            mission: "MISSION & VISION",
            org: "ORGANIZATIONAL CHART",
            minister: "MINISTER",
            competence: "COMPETENCES",
            entities: "ATTACHED ENTITIES",
            foundations: "FOUNDATIONS & CORPORATIONS",
            news: "NEWS",
            services: "PROCEDURES & SERVICES",
            rtn: "NATIONAL TOURISM REGISTRY (RTN)",
            license: "LICENSES",
            digital_rtn: "RTN & DIGITAL LICENSE",
            routes: "TOURIST ROUTES",
            cat: "CATEGORIZATION",
            cert: "CERTIFICATION",
            book: "OFFICIAL BOOK",
            plate: "IDENTIFICATION PLATE",
            tech: "TECHNICAL FEASIBILITY",
            prevention: "PREVENTION OF ML/FT/FPADM",
            guide: "TOURIST GUIDE",
            skip: "Skip to main content"
        },
        hero: {
            title: "Venezuela for Everyone",
            slogan: '"Beauty without Barriers"',
            subtitle: "Discover the most spectacular destinations of our land with total accessibility and services adapted to your needs.",
            cta: "View Destinations",
            voice: "Listen"
        },
        info: {
            title: "What is Accessible Tourism?",
            desc: "Accessible tourism allows equal opportunities for all people to develop tourist activities in a safe, comfortable, autonomous, and standardized way. It's about removing barriers so everyone, regardless of their physical or cognitive condition, can enjoy Venezuela.",
            types: {
                physical: "Physical or Motor",
                visual: "Visual",
                auditory: "Auditory",
                cognitive: "Cognitive"
            },
            more: "More information at CONAPDIS"
        },
        services: {
            custom: { title: "Custom Trips", desc: "We design your personalized experience throughout Venezuela." },
            group: { title: "Group Trips", desc: "Scheduled departures with specialized technical assistance." },
            adapted: { title: "Adapted Routes", desc: "Verified circuits for persons with reduced mobility." },
            cruises: { title: "Cruises & Yachts", desc: "Explore our coasts and archipelagos without barriers." },
            interpreters: { title: "Interpreters", desc: "Staff trained in sign language." }
        },
        destinations: {
            title: "Our Accessible Destinations",
            subtitle: "We select the best corners of Venezuela with guaranteed infrastructure.",
            canaima: {
                title: "Canaima: The Ancestral Jungle",
                desc: "Enjoy the majesty of Angel Falls with adapted transfers and top-level accommodation in the heart of the jungle."
            },
            morrocoy: {
                title: "Morrocoy: Turquoise Beaches",
                desc: "Cays with wooden walkways, amphibious chairs, and trained staff so you can live the Venezuelan Caribbean without limits."
            },
            caracas: {
                title: "Caracas: Culture & City",
                desc: "A tour of the historic center, the Warairarepano Cable Car, and the most emblematic museums with total accessibility."
            },
            merida: {
                title: "Mérida: Snowy Peaks",
                desc: "Feel the Andean cold at the Mucumbarí Cable Car, the highest in the world, fully designed for universal accessibility."
            },
            margarita: {
                title: "Margarita: The Caribbean Pearl",
                desc: "Enjoy boutique hotels with adapted rooms and beaches with assistance services for reduced mobility."
            },
            tovar: {
                title: "Colonia Tovar: Jungle & Tradition",
                desc: "A piece of Germany in the tropics. Gastronomic routes and town tours with ramps and leveled access."
            }
        },
        common: { view_itinerary: "View Itinerary" },
        testimonials: {
            title: "Inspiring Experiences",
            1: {
                text: '"I thought I could never see Angel Falls up close. Thanks to the MINTUR team, the logistics were perfect and I was able to enjoy the wonder of the world."',
                role: "Traveler from Caracas"
            },
            2: {
                text: '"The beach in Morrocoy was an incredible surprise. The amphibious chairs work wonderfully and the staff is extremely kind and attentive."',
                role: "International Tourist"
            },
            3: {
                text: '"Traveling in a group with Inatur gave us the security we needed. The whole trip was timed and without architectural barriers."',
                role: "Family Traveler"
            }
        },
        footer: {
            ministry: "Ministry of Popular Power for Tourism (Mintur) G-20013132-2",
            address: "Main Ave. of La Floresta with Francisco de Miranda Ave, Mintur Complex Caracas, Miranda State"
        }
    }
};

function changeLanguage(lang) {
    if (!translations[lang]) return;

    // Save preference
    localStorage.setItem('preferredLanguage', lang);
    document.documentElement.lang = lang;

    // Apply translations
    const elements = document.querySelectorAll('[data-i18n]');
    elements.forEach(el => {
        const key = el.getAttribute('data-i18n');
        const keys = key.split('.');
        let value = translations[lang];

        for (const k of keys) {
            if (value && value[k]) {
                value = value[k];
            } else {
                value = null;
                break;
            }
        }

        if (value) {
            el.textContent = value;
        }
    });
}

// Initialize Language and Accessibility on Load
document.addEventListener('DOMContentLoaded', () => {
    const savedLang = localStorage.getItem('preferredLanguage') || 'es';
    changeLanguage(savedLang);

    // Initial Radical Access Check
    if (localStorage.getItem('radicalAccess') === 'enabled') {
        document.body.classList.add('radical-access');
    }

    // Toggle Radical Access
    const toggleBtn = document.getElementById('toggle-contrast');
    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            document.body.classList.toggle('radical-access');
            const isEnabled = document.body.classList.contains('radical-access');
            localStorage.setItem('radicalAccess', isEnabled ? 'enabled' : 'disabled');
        });
    }
});

// Voice-over functionality
function playVoiceOver(sectionId) {
    const lang = document.documentElement.lang || 'es';
    let textToRead = "";

    if (sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            // Get all text from children that have data-i18n or are headings/paragraphs
            const elements = section.querySelectorAll('h1, h2, h3, p, [data-i18n]');
            const texts = Array.from(elements).map(el => el.textContent.trim());
            textToRead = [...new Set(texts)].join(". "); // Remove duplicates and join
        }
    } else {
        // Fallback or default (Hero behavior)
        const title = document.querySelector('[data-i18n="hero.title"]')?.textContent || "";
        const slogan = document.querySelector('[data-i18n="hero.slogan"]')?.textContent || "";
        const subtitle = document.querySelector('[data-i18n="hero.subtitle"]')?.textContent || "";
        textToRead = `${title}. ${slogan}. ${subtitle}`;
    }

    if (!textToRead) return;

    // Stop any current speech
    window.speechSynthesis.cancel();

    const utterance = new SpeechSynthesisUtterance(textToRead);
    utterance.lang = lang === 'es' ? 'es-ES' : 'en-US';
    utterance.rate = 0.9;
    utterance.pitch = 1;

    window.speechSynthesis.speak(utterance);
}
