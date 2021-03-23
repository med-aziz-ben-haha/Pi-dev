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

/* user/accueilOnlinePharmacien.html.twig */
class __TwigTemplate_7fd9882718731cb2096fa3c84f58d8f925e9ba870120c7f2ab9124facfcf05a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/accueilOnlinePharmacien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/accueilOnlinePharmacien.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "user/accueilOnlinePharmacien.html.twig", 1)->display($context);
        // line 2
        echo "



<h1 style =\"margin-bottom: 2%; text-align:center; color: #EA3D48 ;\" > Espace Pharmacien  </h1>
<a href=\"\" class=\"btn btn-main-outline mt-2\" style =\"margin-bottom: 20%;margin-top: 8%; width:40%; margin-left:30%;\">Ajouter Produit Parapharmaceutique<i class=\"fas fa-chevron-right\"></i></a>

";
        // line 9
        $this->loadTemplate("tempFront2SoinMP.html.twig", "user/accueilOnlinePharmacien.html.twig", 9)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/accueilOnlinePharmacien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig'  %}




<h1 style =\"margin-bottom: 2%; text-align:center; color: #EA3D48 ;\" > Espace Pharmacien  </h1>
<a href=\"\" class=\"btn btn-main-outline mt-2\" style =\"margin-bottom: 20%;margin-top: 8%; width:40%; margin-left:30%;\">Ajouter Produit Parapharmaceutique<i class=\"fas fa-chevron-right\"></i></a>

{% include 'tempFront2SoinMP.html.twig' %}", "user/accueilOnlinePharmacien.html.twig", "C:\\Users\\Emna\\Desktop\\Pi-dev\\ProjetPidev\\templates\\user\\accueilOnlinePharmacien.html.twig");
    }
}
