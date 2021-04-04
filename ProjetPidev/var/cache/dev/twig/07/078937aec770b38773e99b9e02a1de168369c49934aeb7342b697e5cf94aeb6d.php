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

/* produit/AfficheClientCategorieProduit.html.twig */
class __TwigTemplate_fd809f988ea5aad6d516ca82de3d915decc6f3d263af688081d77b3baecf7880 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/AfficheClientCategorieProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/AfficheClientCategorieProduit.html.twig"));

        // line 1
        $this->loadTemplate("tempClient.html.twig", "produit/AfficheClientCategorieProduit.html.twig", 1)->display($context);
        // line 2
        echo "

<section class=\"hero-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                <div class=\"hero-content\">
                    <h3 style=\" color: #EA3D48; margin-top: 10%;\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 9, $this->source); })()), "nomPara", [], "any", false, false, false, 9), "html", null, true);
        echo "</h3>
                    <h5>Region:";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 10, $this->source); })()), "region", [], "any", false, false, false, 10), "region", [], "any", false, false, false, 10), "html", null, true);
        echo "</h5>
                    <h5>Adresse:";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 11, $this->source); })()), "adressePara", [], "any", false, false, false, 11), "html", null, true);
        echo "</h5>
                    <h5>Numero Tel:";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 12, $this->source); })()), "telPara", [], "any", false, false, false, 12), "html", null, true);
        echo "</h5>
                </div>
            </div>
            <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                <div class=\"hero-image d-flex align-items-center h-100\">
                    <img src= \"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 17, $this->source); })()), "getLienImageP", [], "any", false, false, false, 17))), "html", null, true);
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 43
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheClienCategorieProduit", ["idpara" => twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 44, $this->source); })()), "getId", [], "any", false, false, false, 44), "idcat" => twig_get_attribute($this->env, $this->source, $context["c"], "getId", [], "any", false, false, false, 44), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 44, $this->source); })())]), "html", null, true);
            echo "\" style=\"color: white  ; font-family: Arial  ; text-transform: capitalize  \">

                                ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "categorie", [], "any", false, false, false, 46), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "

                </ul>




            </div>

        </div>

        <div class=\"input-group navbar-right.\">
            <form method=\"POST\" >

                <input type=\"text\"  name=\"nomProduit\" class=\"form-control\" placeholder=\"Search\" />

                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-search\"></i>
                </button>

            </form>
        </div>



    </nav>

    <div class=\"container\">
        <h1>Voir Tous Nos Produit</h1>

        <div class=\"row flex\">







            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 88
            echo "
                <div class=\"col-3\">
                    <div class=\"card mb-4 \" style=\"background-color: #d1b1b9\">
                        <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheProduit", ["idpara" => twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 91, $this->source); })()), "getId", [], "any", false, false, false, 91), "idp" => twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "any", false, false, false, 91), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 91, $this->source); })())]), "html", null, true);
            echo "\">

                        <img style=\"   width:100%; hight: auto ;\" src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "getLienImgP", [], "any", false, false, false, 93))), "html", null, true);
            echo "\" >
                        <div class=\"card-body\">


                        <h3 class=\"card-title text-danger\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProduit", [], "any", false, false, false, 97), "html", null, true);
            echo "</h3>

                        <h3 class=\"card-text\">Quantité : ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "quantiteProduit", [], "any", false, false, false, 99), "html", null, true);
            echo "</h3>
                        <h3 class=\"text-danger\" style=\"font-weight: bold ; font-size: 2rem\">Prix : ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixProduit", [], "any", false, false, false, 100), "html", null, true);
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
        // line 109
        echo "
        </div>
        <div style=\"margin-left: 37.2%; margin-top: 5%;\">";
        // line 111
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 111, $this->source); })()));
        echo "</div>
    </div>
</section>

";
        // line 115
        $this->loadTemplate("tempFront2SoinMP.html.twig", "produit/AfficheClientCategorieProduit.html.twig", 115)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/AfficheClientCategorieProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 115,  212 => 111,  208 => 109,  193 => 100,  189 => 99,  184 => 97,  177 => 93,  172 => 91,  167 => 88,  163 => 87,  123 => 49,  114 => 46,  109 => 44,  106 => 43,  102 => 42,  74 => 17,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempClient.html.twig' %}


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
                            <a class=\"nav-link\" href=\"{{ path('afficheClienCategorieProduit',{'idpara':parapharmacie.getId , 'idcat':c.getId , 'iduser':iduser}   ) }}\" style=\"color: white  ; font-family: Arial  ; text-transform: capitalize  \">

                                {{ c.categorie }}</a>
                        </li>
                    {% endfor %}


                </ul>




            </div>

        </div>

        <div class=\"input-group navbar-right.\">
            <form method=\"POST\" >

                <input type=\"text\"  name=\"nomProduit\" class=\"form-control\" placeholder=\"Search\" />

                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-search\"></i>
                </button>

            </form>
        </div>



    </nav>

    <div class=\"container\">
        <h1>Voir Tous Nos Produit</h1>

        <div class=\"row flex\">







            {% for p in produit %}

                <div class=\"col-3\">
                    <div class=\"card mb-4 \" style=\"background-color: #d1b1b9\">
                        <a href=\"{{ path(\"afficheProduit\",{'idpara':parapharmacie.getId , 'idp':p.getId, 'iduser':iduser } ) }}\">

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
        <div style=\"margin-left: 37.2%; margin-top: 5%;\">{{ knp_pagination_render(produit) }}</div>
    </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}", "produit/AfficheClientCategorieProduit.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\produit\\AfficheClientCategorieProduit.html.twig");
    }
}
