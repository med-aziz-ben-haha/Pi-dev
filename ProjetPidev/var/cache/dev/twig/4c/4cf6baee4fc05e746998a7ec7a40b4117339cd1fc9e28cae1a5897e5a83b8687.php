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

/* reclamation/repondre.html.twig */
class __TwigTemplate_caee0cf3fdde1b0402576f1db8b0170c2ed2c04e4ceb36cc19e0e64a0812aa2b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/repondre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/repondre.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "reclamation/repondre.html.twig", 1)->display($context);
        // line 2
        echo "<style>
    .dropdown button {
        color: #FFFFFF;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
        padding: 8px;
        font-size:18px;
    }
    .dropdown button:hover {
        color: #FFFFFF !important;
        opacity: 0.8 !important;
        background-color: #d11414!important;
        border-color: #d11414!important;
        border-radius: 6px!important;
    }
    .dropdown button:active {
        color: #FFFFFF !important;
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px !important;
    }

    .dropdown button:focus{
        color: #FFFFFF!important;
        background-color: #d11414!important;
        border-color: #d11414!important;
        border-radius: 6px!important;
    }
</style>

<div class=\"dropdown\" >
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ; margin-top:0%!important;\" > Répondre </h1>
<form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("envreponse", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })()), "Method" => "GET"]), "html", null, true);
        echo "\" style=\"margin:10%; margin-top:5%;\">
    <textarea id=\"w3review\" name=\"reponse\" rows=\"6\" cols=\"150\" ></textarea>
    <button type=\"submit\" style=\"margin-left: 87%\">Répondre</button>
</form>
<div>
";
        // line 40
        $this->loadTemplate("temp2.html.twig", "reclamation/repondre.html.twig", 40)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/repondre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 40,  80 => 35,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig'   %}
<style>
    .dropdown button {
        color: #FFFFFF;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
        padding: 8px;
        font-size:18px;
    }
    .dropdown button:hover {
        color: #FFFFFF !important;
        opacity: 0.8 !important;
        background-color: #d11414!important;
        border-color: #d11414!important;
        border-radius: 6px!important;
    }
    .dropdown button:active {
        color: #FFFFFF !important;
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px !important;
    }

    .dropdown button:focus{
        color: #FFFFFF!important;
        background-color: #d11414!important;
        border-color: #d11414!important;
        border-radius: 6px!important;
    }
</style>

<div class=\"dropdown\" >
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ; margin-top:0%!important;\" > Répondre </h1>
<form action=\"{{path('envreponse',{'id':id,'Method':'GET'})}}\" style=\"margin:10%; margin-top:5%;\">
    <textarea id=\"w3review\" name=\"reponse\" rows=\"6\" cols=\"150\" ></textarea>
    <button type=\"submit\" style=\"margin-left: 87%\">Répondre</button>
</form>
<div>
{% include 'temp2.html.twig' %}", "reclamation/repondre.html.twig", "C:\\Users\\eya\\Desktop\\Pi-dev eya\\ProjetPidev\\templates\\reclamation\\repondre.html.twig");
    }
}
