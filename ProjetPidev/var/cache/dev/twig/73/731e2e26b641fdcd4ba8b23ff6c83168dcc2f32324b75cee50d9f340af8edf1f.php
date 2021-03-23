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
class __TwigTemplate_fc950649a9fa1f1517ade71a1ad47e298d75246048546b42f297d6e9db9adb8e extends Template
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
        $this->loadTemplate("tempClient.html.twig", "produit/AfficheProduit.html.twig", 1)->display($context);
        // line 2
        echo "

<style>
    .dg-addToCartFormGrid { margin-bottom:25px; }
    .dg-addToCartFormGrid svg {
        width: 20px;
        height: 20px;
        vertical-align: middle;
        fill: currentColor;
        display:inline-block;
    // display:none !important;
    }
    .dg-addToCartFormGrid button {
     background: darkred!important;
     color:#FFFFFF !important;
    }
    @media screen and (max-width: 600px) {
        .dg-addToCartFormGrid svg { display:none; }
        .dg-addToCartFormGrid button { font-size:10px; }
    }

.quantity{
    display: flex;
    justify-content: center;
}

.quantity button{
    width: 45px;
    height: 45px;
    border: 1px solid black;
    color: black;
    border-radius: 0;
    background: grey;
}
 .quantity input{
     border: none;
     border-top: 1px solid black;
     border-bottom: 1px solid black;
     text-align: center;
     font-size: 20px;
     color: black;
     font-weight: 300;

 }

    .quantity1{
        display: flex;
        width: 700px;

    }

    .plus-btn{
        width: 70px;
        height: 45px;
        border: 1px solid black;
        color: black;
        border-radius: 0;
        background: grey;
    }
    .minus-btn{
        width: 70px;
        height: 45px;
        border: 1px solid black;
        color: black;
        border-radius: 0;
        background: grey;
    }
    .quantity1 input{
        border: none;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        text-align: center;
        font-size: 20px;
        color: black;
        font-weight: 300;

    }

</style>




<section class=\"hero-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                <div class=\"hero-content\">
                    <h3 style=\" color: #EA3D48; margin-top: 10%;\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 90, $this->source); })()), "nomPara", [], "any", false, false, false, 90), "html", null, true);
        echo "</h3>
                    <h5>Region:";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 91, $this->source); })()), "region", [], "any", false, false, false, 91), "region", [], "any", false, false, false, 91), "html", null, true);
        echo "</h5>
                    <h5>Adresse:";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 92, $this->source); })()), "adressePara", [], "any", false, false, false, 92), "html", null, true);
        echo "</h5>
                    <h5>Numero Tel:";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 93, $this->source); })()), "telPara", [], "any", false, false, false, 93), "html", null, true);
        echo "</h5>
                </div>
            </div>
            <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                <div class=\"hero-image d-flex align-items-center h-100\">
                    <img src= \"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 98, $this->source); })()), "getLienImageP", [], "any", false, false, false, 98))), "html", null, true);
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
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 122
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheClienCategorieProduit", ["idpara" => twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 123, $this->source); })()), "getId", [], "any", false, false, false, 123), "idcat" => twig_get_attribute($this->env, $this->source, $context["c"], "getId", [], "any", false, false, false, 123), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 123, $this->source); })())]), "html", null, true);
            echo "\" style=\"color: white  ; font-family: Arial  ; text-transform: capitalize  \">

                                ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "categorie", [], "any", false, false, false, 125), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
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
                    <img style=\"   width:100%; hight:auto ;\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 159, $this->source); })()), "getLienImgP", [], "any", false, false, false, 159))), "html", null, true);
        echo "\" >
                </div>
                <div class=\"col-md-4\">
                    <h1 class=\"text-danger\" style=\" font-size: 35px;\">";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 162, $this->source); })()), "nomProduit", [], "any", false, false, false, 162), "html", null, true);
        echo "</h1>
                    <h2 style=\"font-size:20px;\">Quantite :";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 163, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 163), "html", null, true);
        echo " piece</h2>
                    <div class=\"text-danger\" style=\"font-weight: bold;font-size:4rem;font-size:34px;\"> Prix :";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 164, $this->source); })()), "prixProduit", [], "any", false, false, false, 164), "html", null, true);
        echo " DT</div>

                    <div class=\"quantity1\">



                        ";
        // line 170
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), 'form_start');
        echo "


                            <button class=\"minus-btn \" type=\"button\"  >-</button>
                            <div style=\"width: 70px\">

                                ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "qte", [], "any", false, false, false, 176), 'widget', ["id" => "qtt"]);
        echo "

                            </div>
                            <button class=\"plus-btn\" type=\"button\" style=\"margin-right: 5px \" >+</button>
                            <button type=\"submit\" id=\"list_produit_ajouter\" name=\"list_produit[ajouter]\" class=\"btn-outline-danger btn\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                                    <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"></path>
                                </svg>Ajouter au panier</button>


                        <input type=\"hidden\" id=\"list_produit__token\" name=\"list_produit[_token]\" value=\"tiBbn6hcxqlG1pILPj0TmpfxPz_42gcyb0OuHStjAyg\">


                    </div>

                    <script>
                        var quantity
                        quantity=document.getElementById(\"qtt\").value;


                        document.querySelector(\".plus-btn\").addEventListener(\"click\", function (){
                            quantity=document.getElementById(\"qtt\").value;
                            if (quantity<";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 198, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 198), "html", null, true);
        echo ")
                                quantity++;
                            document.getElementById(\"qtt\").value=quantity


                        })
                        document.querySelector(\".minus-btn\").addEventListener(\"click\", function (){
                            quantity=document.getElementById(\"qtt\").value;
                            if (quantity>1)
                                quantity--;
                            document.getElementById(\"qtt\").value=quantity


                        })


                    </script>










                </div>


            </div>
        </div>
        <div class=\"container mt-4\">
            <div id=\"tabs\" class=\"htabs\">
                <a href=\"#tab-description\" class=\"selected\" style=\"display: inline;\">Description</a>

            </div>
            <div id=\"tab-description\" class=\"tab-content\" itemprop=\"description\" style=\"display: block;\">

                <p>";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 237, $this->source); })()), "description", [], "any", false, false, false, 237), "html", null, true);
        echo "</p>

            </div>
        </div>


    </div>





</section>

";
        // line 251
        $this->loadTemplate("tempFront2SoinMP.html.twig", "produit/AfficheProduit.html.twig", 251)->display($context);
        
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
        return array (  351 => 251,  334 => 237,  292 => 198,  267 => 176,  258 => 170,  249 => 164,  245 => 163,  241 => 162,  235 => 159,  202 => 128,  193 => 125,  188 => 123,  185 => 122,  181 => 121,  155 => 98,  147 => 93,  143 => 92,  139 => 91,  135 => 90,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempClient.html.twig' %}


<style>
    .dg-addToCartFormGrid { margin-bottom:25px; }
    .dg-addToCartFormGrid svg {
        width: 20px;
        height: 20px;
        vertical-align: middle;
        fill: currentColor;
        display:inline-block;
    // display:none !important;
    }
    .dg-addToCartFormGrid button {
     background: darkred!important;
     color:#FFFFFF !important;
    }
    @media screen and (max-width: 600px) {
        .dg-addToCartFormGrid svg { display:none; }
        .dg-addToCartFormGrid button { font-size:10px; }
    }

.quantity{
    display: flex;
    justify-content: center;
}

.quantity button{
    width: 45px;
    height: 45px;
    border: 1px solid black;
    color: black;
    border-radius: 0;
    background: grey;
}
 .quantity input{
     border: none;
     border-top: 1px solid black;
     border-bottom: 1px solid black;
     text-align: center;
     font-size: 20px;
     color: black;
     font-weight: 300;

 }

    .quantity1{
        display: flex;
        width: 700px;

    }

    .plus-btn{
        width: 70px;
        height: 45px;
        border: 1px solid black;
        color: black;
        border-radius: 0;
        background: grey;
    }
    .minus-btn{
        width: 70px;
        height: 45px;
        border: 1px solid black;
        color: black;
        border-radius: 0;
        background: grey;
    }
    .quantity1 input{
        border: none;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        text-align: center;
        font-size: 20px;
        color: black;
        font-weight: 300;

    }

</style>




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
                    <img style=\"   width:100%; hight:auto ;\" src=\"{{ asset('uploads/' ~ produit.getLienImgP)}}\" >
                </div>
                <div class=\"col-md-4\">
                    <h1 class=\"text-danger\" style=\" font-size: 35px;\">{{produit.nomProduit}}</h1>
                    <h2 style=\"font-size:20px;\">Quantite :{{produit.quantiteProduit}} piece</h2>
                    <div class=\"text-danger\" style=\"font-weight: bold;font-size:4rem;font-size:34px;\"> Prix :{{ produit.prixProduit}} DT</div>

                    <div class=\"quantity1\">



                        {{ form_start(form) }}


                            <button class=\"minus-btn \" type=\"button\"  >-</button>
                            <div style=\"width: 70px\">

                                {{ form_widget(form.qte , { 'id':'qtt'}   ) }}

                            </div>
                            <button class=\"plus-btn\" type=\"button\" style=\"margin-right: 5px \" >+</button>
                            <button type=\"submit\" id=\"list_produit_ajouter\" name=\"list_produit[ajouter]\" class=\"btn-outline-danger btn\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                                    <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"></path>
                                </svg>Ajouter au panier</button>


                        <input type=\"hidden\" id=\"list_produit__token\" name=\"list_produit[_token]\" value=\"tiBbn6hcxqlG1pILPj0TmpfxPz_42gcyb0OuHStjAyg\">


                    </div>

                    <script>
                        var quantity
                        quantity=document.getElementById(\"qtt\").value;


                        document.querySelector(\".plus-btn\").addEventListener(\"click\", function (){
                            quantity=document.getElementById(\"qtt\").value;
                            if (quantity<{{ produit.quantiteProduit }})
                                quantity++;
                            document.getElementById(\"qtt\").value=quantity


                        })
                        document.querySelector(\".minus-btn\").addEventListener(\"click\", function (){
                            quantity=document.getElementById(\"qtt\").value;
                            if (quantity>1)
                                quantity--;
                            document.getElementById(\"qtt\").value=quantity


                        })


                    </script>










                </div>


            </div>
        </div>
        <div class=\"container mt-4\">
            <div id=\"tabs\" class=\"htabs\">
                <a href=\"#tab-description\" class=\"selected\" style=\"display: inline;\">Description</a>

            </div>
            <div id=\"tab-description\" class=\"tab-content\" itemprop=\"description\" style=\"display: block;\">

                <p>{{ produit.description }}</p>

            </div>
        </div>


    </div>





</section>

{% include 'tempFront2SoinMP.html.twig' %}", "produit/AfficheProduit.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\produit\\AfficheProduit.html.twig");
    }
}
