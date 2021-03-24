<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* tempClient.html.twig */
class __TwigTemplate_ea7976fdea4926f2e6603d5c74f26b60386226450b1b485679bd08e6cbe5f2ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tempClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tempClient.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <title>Sa7ti.Tn - Besoin de soin, Besoin de toi </title>
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <!-- Meta Tags -->
    <meta name=\"description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <!--  Search Engine Tags -->
    <meta itemprop=\"name\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta itemprop=\"description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta itemprop=\"image\" content=\"https://angrystudio.com/featured-image.png\">
    <!-- Facebook OG Meta Tags -->
    <meta property=\"og:url\" content=\"https://angrystudio.com/\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta property=\"og:description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta property=\"og:image\" content=\"https://angrystudio.com/featured-image.png\">
    <!-- Twitter Cards Meta Tags -->
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta name=\"twitter:description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta name=\"twitter:image\" content=\"https://angrystudio.com/featured-image.png\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        echo "\">
    <style> .btn-primary {
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;

        }
        .btn-primary:hover {
            opacity: 0.8;
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;
        }
        .btn-primary:active {
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;
        }
    </style>
</head>
<body>
<header class=\"hk-header\">
    <nav class=\"navbar navbar-expand-lg fixed-top navbar-light hk-navbar\">
        <div class=\"container\">
            <!--<a class=\"navbar-brand\" href=\"#\"><img src=\"assets/images/brand.png\"></a>-->
            <a class=\"navbar-brand\" href=\"#\"><img style=\"margin-left: 30%; margin-top: 5%; width: 70%; height: 70% ;\" src= \"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/Logo.jpeg"), "html", null, true);
        echo "\" ></a>
            <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"navbar-collapse hk-offcanvas\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav mr-auto\">
                    ";
        // line 61
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "role", [], "any", false, false, false, 61), 3))) {
            // line 62
            echo "                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/accueilOnlinePharmacien/" . (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 63, $this->source); })()))), "html", null, true);
            echo "\">Home <span class=\"sr-only\">(current)</span></a>

                        </li>
                    ";
        }
        // line 67
        echo "                    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "role", [], "any", false, false, false, 67), 2))) {
            // line 68
            echo "
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/accueilOnlineMed/" . (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 70, $this->source); })()))), "html", null, true);
            echo "\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                    ";
        }
        // line 73
        echo "
                    ";
        // line 74
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "role", [], "any", false, false, false, 74), 4))) {
            // line 75
            echo "
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/accueilOnlineParapharmacien/" . (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 77, $this->source); })()))), "html", null, true);
            echo "\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "role", [], "any", false, false, false, 81), 1))) {
            // line 82
            echo "
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/accueilOnline/" . (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 84, $this->source); })()))), "html", null, true);
            echo "\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                    ";
        }
        // line 87
        echo "
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/afficherCategorieSoinMPs"), "html", null, true);
        echo "\">Médecine Parallèle</a>

                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Réclamation</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"nav-link\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/ajouterreclamation"), "html", null, true);
        echo "\"> Réclamer</a>
                            <a class=\"nav-link\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/afficherreclamations"), "html", null, true);
        echo "\"> Consulter mes réclamations</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/frontlistmedicament"), "html", null, true);
        echo "\">Medicament</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/listordonnanceuser"), "html", null, true);
        echo "\">Ordonnances</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheFrontClientPara", ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 106, $this->source); })())]), "html", null, true);
        echo "\">Parapharmacie</a>

                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheClienPanier", ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 110, $this->source); })())]), "html", null, true);
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                                <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"></path>
                            </svg>Panier</a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"far fa-user\"></i>Mon Compte</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"dropdown-item\" href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/afficherUser/" . (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 119, $this->source); })()))), "html", null, true);
        echo "\">Profil</a>

                            <a class=\"dropdown-item\" href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/deconnexion"), "html", null, true);
        echo "\">Se déconnecter</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class=\"hero-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                <div class=\"hero-content\">
                    <h3 style=\" color: #EA3D48; margin-top: 10%;\">Besoin de soin, Besoin de toi</h3>
                    <p class=\"hero-subtitle\">Un doute, une inquiétude, besoin d’un conseil santé ? Sa7ti.TN c’est la solution</p>
                    <div class=\"hero-btns\" style=\"margin-top: 10%;\">
                        <a href=\"#\" class=\"btn btn-main\">Contact Us </a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                <div class=\"hero-image d-flex align-items-center h-100\">
                    <img src= \"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/Logo.jpeg"), "html", null, true);
        echo "\" >
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tempClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 143,  232 => 121,  227 => 119,  215 => 110,  208 => 106,  202 => 103,  196 => 100,  189 => 96,  185 => 95,  176 => 89,  172 => 87,  166 => 84,  162 => 82,  160 => 81,  157 => 80,  151 => 77,  147 => 75,  145 => 74,  142 => 73,  136 => 70,  132 => 68,  129 => 67,  122 => 63,  119 => 62,  117 => 61,  108 => 55,  80 => 30,  76 => 29,  72 => 28,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <title>Sa7ti.Tn - Besoin de soin, Besoin de toi </title>
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <!-- Meta Tags -->
    <meta name=\"description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <!--  Search Engine Tags -->
    <meta itemprop=\"name\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta itemprop=\"description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta itemprop=\"image\" content=\"https://angrystudio.com/featured-image.png\">
    <!-- Facebook OG Meta Tags -->
    <meta property=\"og:url\" content=\"https://angrystudio.com/\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta property=\"og:description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta property=\"og:image\" content=\"https://angrystudio.com/featured-image.png\">
    <!-- Twitter Cards Meta Tags -->
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta name=\"twitter:description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta name=\"twitter:image\" content=\"https://angrystudio.com/featured-image.png\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\">
    <style> .btn-primary {
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;

        }
        .btn-primary:hover {
            opacity: 0.8;
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;
        }
        .btn-primary:active {
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;
        }
    </style>
</head>
<body>
<header class=\"hk-header\">
    <nav class=\"navbar navbar-expand-lg fixed-top navbar-light hk-navbar\">
        <div class=\"container\">
            <!--<a class=\"navbar-brand\" href=\"#\"><img src=\"assets/images/brand.png\"></a>-->
            <a class=\"navbar-brand\" href=\"#\"><img style=\"margin-left: 30%; margin-top: 5%; width: 70%; height: 70% ;\" src= \"{{ asset('bundles/dist/img/Logo.jpeg')}}\" ></a>
            <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"navbar-collapse hk-offcanvas\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav mr-auto\">
                    {% if user.role==3 %}
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{asset(\"/accueilOnlinePharmacien/\" ~iduser) }}\">Home <span class=\"sr-only\">(current)</span></a>

                        </li>
                    {%endif%}
                    {% if user.role==2 %}

                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{asset(\"/accueilOnlineMed/\" ~iduser) }}\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                    {%endif%}

                    {% if user.role==4 %}

                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{asset(\"/accueilOnlineParapharmacien/\" ~iduser) }}\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                    {%endif%}

                    {% if user.role==1 %}

                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{asset(\"/accueilOnline/\" ~iduser) }}\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                    {%endif%}

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ asset('/afficherCategorieSoinMPs') }}\">Médecine Parallèle</a>

                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Réclamation</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"nav-link\" href=\"{{ asset(\"/ajouterreclamation\") }}\"> Réclamer</a>
                            <a class=\"nav-link\" href=\"{{ asset(\"/afficherreclamations\") }}\"> Consulter mes réclamations</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ asset(\"/frontlistmedicament\") }}\">Medicament</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ asset(\"/listordonnanceuser\") }}\">Ordonnances</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('afficheFrontClientPara' , {'iduser':iduser})  }}\">Parapharmacie</a>

                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('afficheClienPanier' , {'iduser':iduser})  }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                                <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"></path>
                            </svg>Panier</a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"far fa-user\"></i>Mon Compte</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"dropdown-item\" href=\"{{ asset('/afficherUser/' ~ iduser) }}\">Profil</a>

                            <a class=\"dropdown-item\" href=\"{{ asset ('/deconnexion') }}\">Se déconnecter</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class=\"hero-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                <div class=\"hero-content\">
                    <h3 style=\" color: #EA3D48; margin-top: 10%;\">Besoin de soin, Besoin de toi</h3>
                    <p class=\"hero-subtitle\">Un doute, une inquiétude, besoin d’un conseil santé ? Sa7ti.TN c’est la solution</p>
                    <div class=\"hero-btns\" style=\"margin-top: 10%;\">
                        <a href=\"#\" class=\"btn btn-main\">Contact Us </a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                <div class=\"hero-image d-flex align-items-center h-100\">
                    <img src= \"{{ asset('bundles/dist/img/Logo.jpeg')}}\" >
                </div>
            </div>
        </div>
    </div>
</section>
", "tempClient.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\tempClient.html.twig");
    }
}
