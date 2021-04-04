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

/* user/choixTypeinscription.html.twig */
class __TwigTemplate_fe4a9dce8cda3125c21a6a54fb0f30a21df039f50375adc181f57047d91c0695 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/choixTypeinscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/choixTypeinscription.html.twig"));

        // line 1
        $this->loadTemplate("tempFrontAccueil1.html.twig", "user/choixTypeinscription.html.twig", 1)->display($context);
        // line 2
        echo "<style> .btn-primary {
                background-color: #EA3D48 !important;
                border-color: #EA3D48 !important;
                border-radius: 30px;
                margin-top:3% !important;
                width:400px;
                padding-top:2px;
                padding-bottom:2px;
                margin:2% !important;

        }
        .btn-primary:hover {
                opacity: 0.8;
                background-color: #EA3D48 !important;
                border-color: #EA3D48 !important;
                border-radius: 30px;
                margin-top:3% !important;
                width:400px;
                padding-top:2px;
                padding-bottom:2px;
                margin:2% !important;
        }
        .btn-primary:active {
                background-color: #EA3D48 !important;
                border-color: #EA3D48 !important;
                border-radius: 30px;
                margin-top:3% !important;
                width:400px;
                padding-top:2px;
                padding-bottom:2px;
                margin:2% !important;
        }
</style>
<div style =\"margin-left: 28%; margin-right: 28%;  border: solid 1px #EA3D48; padding:2%; border-radius: 30px; margin-bottom: 25px \">
    <center>
        <form action=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\"><button class=\"btn-primary\" >S'inscrire</button><br></form>
        <form action=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscriptionMed");
        echo "\"><button class=\"btn-primary\" >S'inscrire en tant que médecin</button><br></form>
        <form action=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscriptionPharmacien");
        echo "\"><button class=\"btn-primary\" >S'inscrire en tant que pharmacien</button><br></form>
        <form action=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscriptionParapharmacien");
        echo "\"><button class=\"btn-primary\">S'inscrire en tant que parapharmacien</button></form>
    </center>
    </div>
";
        // line 43
        $this->loadTemplate("tempFrontAccueil2.html.twig", "user/choixTypeinscription.html.twig", 43)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/choixTypeinscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 43,  94 => 40,  90 => 39,  86 => 38,  82 => 37,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFrontAccueil1.html.twig' %}
<style> .btn-primary {
                background-color: #EA3D48 !important;
                border-color: #EA3D48 !important;
                border-radius: 30px;
                margin-top:3% !important;
                width:400px;
                padding-top:2px;
                padding-bottom:2px;
                margin:2% !important;

        }
        .btn-primary:hover {
                opacity: 0.8;
                background-color: #EA3D48 !important;
                border-color: #EA3D48 !important;
                border-radius: 30px;
                margin-top:3% !important;
                width:400px;
                padding-top:2px;
                padding-bottom:2px;
                margin:2% !important;
        }
        .btn-primary:active {
                background-color: #EA3D48 !important;
                border-color: #EA3D48 !important;
                border-radius: 30px;
                margin-top:3% !important;
                width:400px;
                padding-top:2px;
                padding-bottom:2px;
                margin:2% !important;
        }
</style>
<div style =\"margin-left: 28%; margin-right: 28%;  border: solid 1px #EA3D48; padding:2%; border-radius: 30px; margin-bottom: 25px \">
    <center>
        <form action=\"{{ path('inscription') }}\"><button class=\"btn-primary\" >S'inscrire</button><br></form>
        <form action=\"{{ path('inscriptionMed') }}\"><button class=\"btn-primary\" >S'inscrire en tant que médecin</button><br></form>
        <form action=\"{{ path('inscriptionPharmacien') }}\"><button class=\"btn-primary\" >S'inscrire en tant que pharmacien</button><br></form>
        <form action=\"{{ path('inscriptionParapharmacien') }}\"><button class=\"btn-primary\">S'inscrire en tant que parapharmacien</button></form>
    </center>
    </div>
{% include 'tempFrontAccueil2.html.twig' %}", "user/choixTypeinscription.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\user\\choixTypeinscription.html.twig");
    }
}
