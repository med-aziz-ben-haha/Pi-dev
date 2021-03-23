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

/* user/accueilOnlineParapharmacien.html.twig */
class __TwigTemplate_69ea8b2ce2fc3f43b15295882c8bfb5fe2ed93b1477d0a49a64618499f6e79dc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/accueilOnlineParapharmacien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/accueilOnlineParapharmacien.html.twig"));

        // line 1
        $this->loadTemplate("tempParapharmacien.html.twig", "user/accueilOnlineParapharmacien.html.twig", 1)->display(twig_array_merge($context, ["idpara" => (isset($context["idpara"]) || array_key_exists("idpara", $context) ? $context["idpara"] : (function () { throw new RuntimeError('Variable "idpara" does not exist.', 1, $this->source); })())]));
        // line 2
        echo "



<h1 style =\"margin-bottom: 2%; text-align:center; color: #EA3D48 ;\" > Espace Parapharmacien  </h1>

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

<div class=\"row\">
    <div class=\"col-sm-4\">    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheCategorieProd", ["id" => (isset($context["idpara"]) || array_key_exists("idpara", $context) ? $context["idpara"] : (function () { throw new RuntimeError('Variable "idpara" does not exist.', 29, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 29, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-main-outline mt-2\" style =\"margin-bottom: 20%;margin-top: 8%; width:40%; margin-left:30%;\">Gestion Des Categories<i class=\"fas fa-chevron-right\"></i></a></div>
    <div class=\"col-sm-2\"></div>
    <div class=\"col-sm-4\">    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choixCategorie", ["id" => (isset($context["idpara"]) || array_key_exists("idpara", $context) ? $context["idpara"] : (function () { throw new RuntimeError('Variable "idpara" does not exist.', 31, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 31, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-main-outline mt-2\" style =\"margin-bottom: 20%;margin-top: 8%; width:40%; margin-left:30%;\">Gestion Des Produits<i class=\"fas fa-chevron-right\"></i></a></div>
</div>

";
        // line 34
        $this->loadTemplate("tempFront2SoinMP.html.twig", "user/accueilOnlineParapharmacien.html.twig", 34)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/accueilOnlineParapharmacien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  94 => 31,  89 => 29,  78 => 21,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempParapharmacien.html.twig' with {'idpara':idpara}  %}




<h1 style =\"margin-bottom: 2%; text-align:center; color: #EA3D48 ;\" > Espace Parapharmacien  </h1>

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

<div class=\"row\">
    <div class=\"col-sm-4\">    <a href=\"{{ path(\"afficheCategorieProd\",{ 'id': idpara , 'iduser' : iduser}) }}\" class=\"btn btn-main-outline mt-2\" style =\"margin-bottom: 20%;margin-top: 8%; width:40%; margin-left:30%;\">Gestion Des Categories<i class=\"fas fa-chevron-right\"></i></a></div>
    <div class=\"col-sm-2\"></div>
    <div class=\"col-sm-4\">    <a href=\"{{ path(\"choixCategorie\",{ 'id': idpara , 'iduser' : iduser}) }}\" class=\"btn btn-main-outline mt-2\" style =\"margin-bottom: 20%;margin-top: 8%; width:40%; margin-left:30%;\">Gestion Des Produits<i class=\"fas fa-chevron-right\"></i></a></div>
</div>

{% include 'tempFront2SoinMP.html.twig' %}", "user/accueilOnlineParapharmacien.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\user\\accueilOnlineParapharmacien.html.twig");
    }
}
