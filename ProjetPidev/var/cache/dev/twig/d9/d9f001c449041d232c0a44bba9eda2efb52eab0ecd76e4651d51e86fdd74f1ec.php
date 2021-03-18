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

/* templateAccueilProfil.html.twig */
class __TwigTemplate_f98d86fef034336a631a540100001af8ecc894060f710dfd63ed6f459cc9ee96 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateAccueilProfil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateAccueilProfil.html.twig"));

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
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i,800,800i,900,900i"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
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
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/Logo.jpeg"), "html", null, true);
        echo "\" ></a>
            <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"navbar-collapse hk-offcanvas\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">About</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/afficherCategorieSoinMPs/" . (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 68, $this->source); })()))), "html", null, true);
        echo "\">Médecine Parallèle</a>

                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contact</a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"far fa-user\"></i>Mon Compte</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"dropdown-item\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/afficherUser/" . (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 80, $this->source); })()))), "html", null, true);
        echo "\">Profil</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/deconnexion"), "html", null, true);
        echo "\">Se déconnecter</a>
                        </div>
                    </li>
                </ul>
                <span class=\"navbar-text hk-header-social\">
                  <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                  </span>
            </div>
        </div>
    </nav>
</header>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "templateAccueilProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 81,  142 => 80,  127 => 68,  110 => 54,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  43 => 1,);
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
    <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i,800,800i,900,900i') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
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
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">About</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ asset(\"/afficherCategorieSoinMPs/\"~ iduser) }}\">Médecine Parallèle</a>

                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contact</a>
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
                <span class=\"navbar-text hk-header-social\">
                  <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                  </span>
            </div>
        </div>
    </nav>
</header>

", "templateAccueilProfil.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\templateAccueilProfil.html.twig");
    }
}
