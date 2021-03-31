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

/* post_front/index.html.twig */
class __TwigTemplate_73009e563b84b4ce78a918801ea701ce949312ab44937028ddbc6102d32ea19a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post_front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post_front/index.html.twig"));

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
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"assets/css/style.css\" rel=\"stylesheet\">
</head>

<body>
<header class=\"hk-header\">
    <nav class=\"navbar navbar-expand-lg fixed-top navbar-light hk-navbar\">
        <div class=\"container\">
            <!--<a class=\"navbar-brand\" href=\"#\"><img src=\"assets/images/brand.png\"></a>-->
            <a class=\"navbar-brand\" href=\"#\"><img style=\"margin-left: 30%; margin-top: 5%; width: 70%; height: 70% ;\" src= \"";
        // line 39
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
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/afficherCategorieSoinMPs"), "html", null, true);
        echo "\">Médecine Parallèle</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/afficherCategoriePostFront"), "html", null, true);
        echo "\">Forums</a>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Services</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"dropdown-item\" href=\"#\">Digital Marketing</a>
                            <a class=\"dropdown-item\" href=\"#\">UI Design</a>
                            <a class=\"dropdown-item\" href=\"#\">Graphics Design</a>
                            <a class=\"dropdown-item\" href=\"#\">Branding</a>
                            <a class=\"dropdown-item\" href=\"#\">WordPress Websites</a>
                            <a class=\"dropdown-item\" href=\"#\">Custom Web Apps</a>
                            <a class=\"dropdown-item\" href=\"#\">App Development</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contact</a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"far fa-user\"></i> My Account</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"dropdown-item\" href=\"#\">Profile</a>
                            <a class=\"dropdown-item\" href=\"#\">Edit Account</a>
                            <a class=\"dropdown-item\" href=\"#\">Logout</a>
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




<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script>document.getElementsByTagName(\"html\")[0].className += \" js\";</script>
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    <title>FAQ Template | CodyHouse</title>
</head>
<body>
<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0&appId=1513227472216178\" nonce=\"vi5xaw5M\"></script>

<header class=\"cd-header flex flex-column flex-center\">
    <div class=\"text-component text-center\">
        <h1></h1>
        <h1></h1>
        <h1>Bienvenue dans votre Forum</h1>

        <!--
        <p>👈 <a class=\"cd-article-link\" href=\"#\">For More</a></p>
        -->
    </div>


    <div class=\"box-header\">
        <div class=\"col-sm-20\">
            <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postt_new");
        echo "\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Nouveau Post</a>
            <a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postt_show_pdf");
        echo "\" class=\"btn btn-outline-danger\" role=\"button\">Télécharger en PDF</a>
        </div>
    </div>



</header>

<section class=\"cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg\">






    <ul class=\"cd-faq__categories\">
        <li><a class=\"cd-faq__category cd-faq__category-selected truncate\" href=\"#basics\">TRENDS</a></li>
        <tr ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriePost"]) || array_key_exists("categoriePost", $context) ? $context["categoriePost"] : (function () { throw new RuntimeError('Variable "categoriePost" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo ">
            <li><a class=\"cd-faq__category truncate\" href=\"#mobile\">";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nomCategoriePost", [], "any", false, false, false, 143), "html", null, true);
            echo "</a></li>
        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo ">


        <!--
                <li><a class=\"cd-faq__category cd-faq__category-selected truncate\" href=\"#basics\">Basics</a></li>
                <li><a class=\"cd-faq__category truncate\" href=\"#mobile\">Mobile</a></li>
                <li><a class=\"cd-faq__category truncate\" href=\"#account\">Account</a></li>
                <li><a class=\"cd-faq__category truncate\" href=\"#payments\">Payments</a></li>
                <li><a class=\"cd-faq__category truncate\" href=\"#privacy\">Privacy</a></li>
                <li><a class=\"cd-faq__category truncate\" href=\"#delivery\">Delivery</a></li>

                -->

    </ul> <!-- cd-faq__categories -->




    <div class=\"cd-faq__items\">
        <ul id=\"basics\" class=\"cd-faq__group\">
            <li class=\"cd-faq__title\"><h2>TRENDS</h2></li>
            <li class=\"cd-faq__item\">



                ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postt"]) || array_key_exists("postt", $context) ? $context["postt"] : (function () { throw new RuntimeError('Variable "postt" does not exist.', 169, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 170
            echo "
                    <ul id=\"";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "categoriePost", [], "any", false, false, false, 171), "nomCategoriePost", [], "any", false, false, false, 171), "html", null, true);
            echo "\" class=\"cd-faq__group\"></ul>

            <ul class=\"cd-faq__title\"><h2>";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "categoriePost", [], "any", false, false, false, 173), "nomCategoriePost", [], "any", false, false, false, 173), "html", null, true);
            echo "</h2></ul>


            <a class=\"cd-faq__trigger\" href=\"#0\"><span>";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "titrePostt", [], "any", false, false, false, 176), "html", null, true);
            echo "</span></a>



            <div class=\"cd-faq__content\">

                    <div class=\"text-component\">
                        <p>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "textePostt", [], "any", false, false, false, 183), "html", null, true);
            echo "</p>
                    </div>

                <td><a href=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postt_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 186)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                <td><a href=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postt_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 187)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>





                </div> <!-- cd-faq__content -->


                    <div class=\"fb-comments\"  data-width=\"100%\" data-heigth=\"100%\" data-numposts=\"\"></div>



                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "            </li>


        </ul> <!-- cd-faq__group -->





        <!-- ********************************************************************************************************* -->

        <tr ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriePost"]) || array_key_exists("categoriePost", $context) ? $context["categoriePost"] : (function () { throw new RuntimeError('Variable "categoriePost" does not exist.', 212, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo ">

            <ul id=\"basics\" class=\"cd-faq__group\">
                <ul id=\"";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nomCategoriePost", [], "any", false, false, false, 215), "html", null, true);
            echo "\" class=\"cd-faq__group\"></ul>

                <li class=\"cd-faq__title\"><h2>";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nomCategoriePost", [], "any", false, false, false, 217), "html", null, true);
            echo "</h2></li>

            </ul> <!-- cd-faq__group -->

        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo ">


        <!-- ********************************************************************************************** -->
































        <!-- cd-faq__group -->
    </div> <!-- cd-faq__items -->

    <a href=\"#0\" class=\"cd-faq__close-panel text-replace\">Close</a>

    <div class=\"cd-faq__overlay\" aria-hidden=\"true\"></div>
</section> <!-- cd-faq -->
<script src=\"assets/js/util.js\"></script> <!-- util functions included in the CodyHouse framework -->
<script src=\"assets/js/main.js\"></script>
</body>
</html>

";
        // line 269
        $this->loadTemplate("tempFront2SoinMP.html.twig", "post_front/index.html.twig", 269)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "post_front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 269,  337 => 221,  326 => 217,  321 => 215,  313 => 212,  300 => 201,  280 => 187,  276 => 186,  270 => 183,  260 => 176,  254 => 173,  249 => 171,  246 => 170,  242 => 169,  215 => 144,  207 => 143,  201 => 142,  181 => 125,  177 => 124,  106 => 56,  99 => 52,  83 => 39,  43 => 1,);
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
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"assets/css/style.css\" rel=\"stylesheet\">
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
                        <a class=\"nav-link\" href=\"{{ asset('/afficherCategorieSoinMPs') }}\">Médecine Parallèle</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ asset('/afficherCategoriePostFront') }}\">Forums</a>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Services</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"dropdown-item\" href=\"#\">Digital Marketing</a>
                            <a class=\"dropdown-item\" href=\"#\">UI Design</a>
                            <a class=\"dropdown-item\" href=\"#\">Graphics Design</a>
                            <a class=\"dropdown-item\" href=\"#\">Branding</a>
                            <a class=\"dropdown-item\" href=\"#\">WordPress Websites</a>
                            <a class=\"dropdown-item\" href=\"#\">Custom Web Apps</a>
                            <a class=\"dropdown-item\" href=\"#\">App Development</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contact</a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"far fa-user\"></i> My Account</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"dropdown-item\" href=\"#\">Profile</a>
                            <a class=\"dropdown-item\" href=\"#\">Edit Account</a>
                            <a class=\"dropdown-item\" href=\"#\">Logout</a>
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




<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <script>document.getElementsByTagName(\"html\")[0].className += \" js\";</script>
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    <title>FAQ Template | CodyHouse</title>
</head>
<body>
<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0&appId=1513227472216178\" nonce=\"vi5xaw5M\"></script>

<header class=\"cd-header flex flex-column flex-center\">
    <div class=\"text-component text-center\">
        <h1></h1>
        <h1></h1>
        <h1>Bienvenue dans votre Forum</h1>

        <!--
        <p>👈 <a class=\"cd-article-link\" href=\"#\">For More</a></p>
        -->
    </div>


    <div class=\"box-header\">
        <div class=\"col-sm-20\">
            <a href=\"{{ path('postt_new') }}\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Nouveau Post</a>
            <a href=\"{{ path('postt_show_pdf') }}\" class=\"btn btn-outline-danger\" role=\"button\">Télécharger en PDF</a>
        </div>
    </div>



</header>

<section class=\"cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg\">






    <ul class=\"cd-faq__categories\">
        <li><a class=\"cd-faq__category cd-faq__category-selected truncate\" href=\"#basics\">TRENDS</a></li>
        <tr {% for c in categoriePost %}>
            <li><a class=\"cd-faq__category truncate\" href=\"#mobile\">{{ c.nomCategoriePost }}</a></li>
        </tr {% endfor %}>


        <!--
                <li><a class=\"cd-faq__category cd-faq__category-selected truncate\" href=\"#basics\">Basics</a></li>
                <li><a class=\"cd-faq__category truncate\" href=\"#mobile\">Mobile</a></li>
                <li><a class=\"cd-faq__category truncate\" href=\"#account\">Account</a></li>
                <li><a class=\"cd-faq__category truncate\" href=\"#payments\">Payments</a></li>
                <li><a class=\"cd-faq__category truncate\" href=\"#privacy\">Privacy</a></li>
                <li><a class=\"cd-faq__category truncate\" href=\"#delivery\">Delivery</a></li>

                -->

    </ul> <!-- cd-faq__categories -->




    <div class=\"cd-faq__items\">
        <ul id=\"basics\" class=\"cd-faq__group\">
            <li class=\"cd-faq__title\"><h2>TRENDS</h2></li>
            <li class=\"cd-faq__item\">



                {% for p in postt %}

                    <ul id=\"{{p.categoriePost.nomCategoriePost}}\" class=\"cd-faq__group\"></ul>

            <ul class=\"cd-faq__title\"><h2>{{ p.categoriePost.nomCategoriePost }}</h2></ul>


            <a class=\"cd-faq__trigger\" href=\"#0\"><span>{{ p.titrePostt }}</span></a>



            <div class=\"cd-faq__content\">

                    <div class=\"text-component\">
                        <p>{{ p.textePostt }}</p>
                    </div>

                <td><a href=\"{{ path(\"postt_edit\",{'id':p.id}) }}\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                <td><a href=\"{{ path(\"postt_delete\",{'id':p.id}) }}\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>





                </div> <!-- cd-faq__content -->


                    <div class=\"fb-comments\"  data-width=\"100%\" data-heigth=\"100%\" data-numposts=\"\"></div>



                {% endfor %}
            </li>


        </ul> <!-- cd-faq__group -->





        <!-- ********************************************************************************************************* -->

        <tr {% for c in categoriePost %}>

            <ul id=\"basics\" class=\"cd-faq__group\">
                <ul id=\"{{c.nomCategoriePost}}\" class=\"cd-faq__group\"></ul>

                <li class=\"cd-faq__title\"><h2>{{ c.nomCategoriePost }}</h2></li>

            </ul> <!-- cd-faq__group -->

        </tr {% endfor %}>


        <!-- ********************************************************************************************** -->
































        <!-- cd-faq__group -->
    </div> <!-- cd-faq__items -->

    <a href=\"#0\" class=\"cd-faq__close-panel text-replace\">Close</a>

    <div class=\"cd-faq__overlay\" aria-hidden=\"true\"></div>
</section> <!-- cd-faq -->
<script src=\"assets/js/util.js\"></script> <!-- util functions included in the CodyHouse framework -->
<script src=\"assets/js/main.js\"></script>
</body>
</html>

{% include 'tempFront2SoinMP.html.twig' %}
", "post_front/index.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\post_front\\index.html.twig");
    }
}
