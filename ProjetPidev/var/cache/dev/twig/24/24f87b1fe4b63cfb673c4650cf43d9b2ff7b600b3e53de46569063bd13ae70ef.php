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

/* categorie_produit/AfficheClientCategorie.html.twig */
class __TwigTemplate_92a4b92284990540f45ac159425ff6ad6bddc5db0d769b4296a9c310a7bb33c4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_produit/AfficheClientCategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_produit/AfficheClientCategorie.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "categorie_produit/AfficheClientCategorie.html.twig", 1)->display($context);
        // line 2
        echo "





<section class=\"hero-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                <div class=\"hero-content\">
                    <h3 style=\" color: #EA3D48; margin-top: 10%;\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 13, $this->source); })()), "nomPara", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
                    <h5>Region:";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 14, $this->source); })()), "region", [], "any", false, false, false, 14), "region", [], "any", false, false, false, 14), "html", null, true);
        echo "</h5>
                    <h5>Adresse:";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 15, $this->source); })()), "adressePara", [], "any", false, false, false, 15), "html", null, true);
        echo "</h5>
                    <h5>Numero Tel:";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 16, $this->source); })()), "telPara", [], "any", false, false, false, 16), "html", null, true);
        echo "</h5>
                </div>
            </div>
            <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                <div class=\"hero-image d-flex align-items-center h-100\">
                    <img src= \"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 21, $this->source); })()), "getLienImageP", [], "any", false, false, false, 21))), "html", null, true);
        echo "\" >
                </div>
            </div>
        </div>
    </div>
</section>



<section class=\"services-section hk-section section-bg\" >

    <nav class=\"navbar navbar-static-top text-center\" style=\"background-color: #d1b1b9;\">
        <h1></h1>
        <h3 class=\" \"style=\"color: white ;text-transform: uppercase ; font-family: 'Tempus Sans ITC';  \" >Bienvenue Dans Notre Parapharmacie</h3>
        <h1></h1>
    </nav>
    <nav class=\"navbar navbar-expand-lg \" style=\"background-color: #c00a22\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\" style=\"color: #d1b1b9  ;text-transform: uppercase ;font-family: Raleway ;letter-spacing: 0.6rem\">Nos Catégorie :</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div id=\"classs\" class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">

                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 47
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheClienCategorieProduit", ["idpara" => twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 48, $this->source); })()), "getId", [], "any", false, false, false, 48), "idcat" => twig_get_attribute($this->env, $this->source, $context["c"], "getId", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" style=\"color: white  ; font-family: Arial  ; text-transform: capitalize  \">

                            ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "categorie", [], "any", false, false, false, 50), "html", null, true);
            echo "</a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "

                </ul>




            </div>

        </div>

        <div class=\"input-group navbar-right.\">
            <div class=\"form-outline\">
                <input type=\"search\" id=\"form1\" class=\"form-control\" placeholder=\"Search\" />

            </div>
            <button type=\"button\" class=\"btn btn-primary\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>



    </nav>

    <div class=\"container\">

        <h1>Voir Tous Nos Produit</h1>
        <div class=\"row\">







            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 90
            echo "
                <div class=\"col-3 \">
                    <div class=\"card mb-4 service-box\">

                        <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheProduit", ["idpara" => twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 94, $this->source); })()), "getId", [], "any", false, false, false, 94), "idp" => twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\">

                        <img style=\"   width:100%; hight: auto ;\" src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "getLienImgP", [], "any", false, false, false, 96))), "html", null, true);
            echo "\" >
                        <div class=\"card-body\">


                            <h3 class=\"card-title text-danger\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProduit", [], "any", false, false, false, 100), "html", null, true);
            echo "</h3>

                            <h3 class=\"card-text\">Quantité : ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "quantiteProduit", [], "any", false, false, false, 102), "html", null, true);
            echo "</h3>
                            <h3 class=\"text-danger\" style=\"font-weight: bold ; font-size: 2rem\">Prix : ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixProduit", [], "any", false, false, false, 103), "html", null, true);
            echo " DT</h3>




                        </div>
                        </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
        </div>
    </div>
</section>

";
        // line 118
        $this->loadTemplate("tempFront2SoinMP.html.twig", "categorie_produit/AfficheClientCategorie.html.twig", 118)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "categorie_produit/AfficheClientCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 118,  212 => 113,  196 => 103,  192 => 102,  187 => 100,  180 => 96,  175 => 94,  169 => 90,  165 => 89,  127 => 53,  118 => 50,  113 => 48,  110 => 47,  106 => 46,  78 => 21,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' %}






<section class=\"hero-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                <div class=\"hero-content\">
                    <h3 style=\" color: #EA3D48; margin-top: 10%;\">{{ parapharmacie.nomPara }}</h3>
                    <h5>Region:{{ parapharmacie.region.region }}</h5>
                    <h5>Adresse:{{ parapharmacie.adressePara }}</h5>
                    <h5>Numero Tel:{{ parapharmacie.telPara }}</h5>
                </div>
            </div>
            <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                <div class=\"hero-image d-flex align-items-center h-100\">
                    <img src= \"{{ asset('uploads/' ~ parapharmacie.getLienImageP)}}\" >
                </div>
            </div>
        </div>
    </div>
</section>



<section class=\"services-section hk-section section-bg\" >

    <nav class=\"navbar navbar-static-top text-center\" style=\"background-color: #d1b1b9;\">
        <h1></h1>
        <h3 class=\" \"style=\"color: white ;text-transform: uppercase ; font-family: 'Tempus Sans ITC';  \" >Bienvenue Dans Notre Parapharmacie</h3>
        <h1></h1>
    </nav>
    <nav class=\"navbar navbar-expand-lg \" style=\"background-color: #c00a22\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\" style=\"color: #d1b1b9  ;text-transform: uppercase ;font-family: Raleway ;letter-spacing: 0.6rem\">Nos Catégorie :</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div id=\"classs\" class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">

                    {% for c in categorie %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('afficheClienCategorieProduit',{'idpara':parapharmacie.getId , 'idcat':c.getId}   ) }}\" style=\"color: white  ; font-family: Arial  ; text-transform: capitalize  \">

                            {{ c.categorie }}</a>
                    </li>
                    {% endfor %}


                </ul>




            </div>

        </div>

        <div class=\"input-group navbar-right.\">
            <div class=\"form-outline\">
                <input type=\"search\" id=\"form1\" class=\"form-control\" placeholder=\"Search\" />

            </div>
            <button type=\"button\" class=\"btn btn-primary\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>



    </nav>

    <div class=\"container\">

        <h1>Voir Tous Nos Produit</h1>
        <div class=\"row\">







            {% for p in produit %}

                <div class=\"col-3 \">
                    <div class=\"card mb-4 service-box\">

                        <a href=\"{{ path(\"afficheProduit\",{'idpara':parapharmacie.getId , 'idp':p.getId } ) }}\">

                        <img style=\"   width:100%; hight: auto ;\" src=\"{{ asset('uploads/' ~ p.getLienImgP)}}\" >
                        <div class=\"card-body\">


                            <h3 class=\"card-title text-danger\">{{ p.nomProduit}}</h3>

                            <h3 class=\"card-text\">Quantité : {{ p.quantiteProduit}}</h3>
                            <h3 class=\"text-danger\" style=\"font-weight: bold ; font-size: 2rem\">Prix : {{ p.prixProduit}} DT</h3>




                        </div>
                        </a>
                    </div>
                </div>
            {% endfor %}

        </div>
    </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}", "categorie_produit/AfficheClientCategorie.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\categorie_produit\\AfficheClientCategorie.html.twig");
    }
}
