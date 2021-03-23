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

/* produit/AfficheProduit.html.twig */
class __TwigTemplate_90614fa22778b3256035c125c4ce96f76e603e8f5253ed681d43feaab833251e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/AfficheProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/AfficheProduit.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "produit/AfficheProduit.html.twig", 1)->display($context);
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 45
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheClienCategorieProduit", ["idpara" => twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 46, $this->source); })()), "getId", [], "any", false, false, false, 46), "idcat" => twig_get_attribute($this->env, $this->source, $context["c"], "getId", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" style=\"color: white  ; font-family: Arial  ; text-transform: capitalize  \">

                                ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "categorie", [], "any", false, false, false, 48), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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

    <div class=\"jumbotron\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <img style=\"   width:100%; hight: auto ;\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 80, $this->source); })()), "getLienImgP", [], "any", false, false, false, 80))), "html", null, true);
        echo "\" >
                </div>
                <div class=\"col-md-4\">
                    <h1 class=\"text-danger\" style=\" font-size: 35px;\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 83, $this->source); })()), "nomProduit", [], "any", false, false, false, 83), "html", null, true);
        echo "</h1>
                    <h2 style=\"font-size:20px;\">Quantite :";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 84, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 84), "html", null, true);
        echo " piece</h2>
                    <div class=\"text-danger\" style=\"font-weight: bold;font-size:4rem;font-size:34px;\"> Prix :";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 85, $this->source); })()), "prixProduit", [], "any", false, false, false, 85), "html", null, true);
        echo " DT</div>
                </div>


            </div>
        </div>
        <div class=\"container mt-4\">
            <p style=\"font-size: 20px\"> Description du produit : ";
        // line 92
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 92, $this->source); })()), "description", [], "any", false, false, false, 92), "html", null, true));
        echo "</p>
        </div>
    </div>





</section>

";
        // line 102
        $this->loadTemplate("tempFront2SoinMP.html.twig", "produit/AfficheProduit.html.twig", 102)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/AfficheProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 102,  180 => 92,  170 => 85,  166 => 84,  162 => 83,  156 => 80,  125 => 51,  116 => 48,  111 => 46,  108 => 45,  104 => 44,  78 => 21,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  45 => 2,  43 => 1,);
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

    <div class=\"jumbotron\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <img style=\"   width:100%; hight: auto ;\" src=\"{{ asset('uploads/' ~ produit.getLienImgP)}}\" >
                </div>
                <div class=\"col-md-4\">
                    <h1 class=\"text-danger\" style=\" font-size: 35px;\">{{produit.nomProduit}}</h1>
                    <h2 style=\"font-size:20px;\">Quantite :{{produit.quantiteProduit}} piece</h2>
                    <div class=\"text-danger\" style=\"font-weight: bold;font-size:4rem;font-size:34px;\"> Prix :{{ produit.prixProduit}} DT</div>
                </div>


            </div>
        </div>
        <div class=\"container mt-4\">
            <p style=\"font-size: 20px\"> Description du produit : {{produit.description | nl2br}}</p>
        </div>
    </div>





</section>

{% include 'tempFront2SoinMP.html.twig' %}", "produit/AfficheProduit.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\produit\\AfficheProduit.html.twig");
    }
}
