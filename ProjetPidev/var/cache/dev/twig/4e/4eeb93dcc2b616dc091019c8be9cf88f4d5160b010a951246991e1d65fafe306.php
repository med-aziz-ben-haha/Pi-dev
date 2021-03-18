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

/* user/statsUser.html.twig */
class __TwigTemplate_cca629452ab634b14d8e0d140dc7dbc86e0acecfa3a2f0b09ce5dacf98e529d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/statsUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/statsUser.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "user/statsUser.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"content\">
    <div>
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;\">Statistiques des types des Utilisateurs </h1>
    </div>
    <div class=\"table-responsive\">
        <div class=\"form-group\">
            <hr class=\"invis\">
            <div class=\"container\">
                <canvas id=\"user\" width=\"400\" height=\"100\"></canvas>
            </div>
        </div>
    </div>
</div>
<script>

    let user = document.querySelector(\"#user\")
    let annGraph = new Chart(user, {
        scaleFontColor: \"black\",
        type: \"doughnut\",
        data: {
            labels: ";
        // line 23
        echo json_encode((isset($context["usersss"]) || array_key_exists("usersss", $context) ? $context["usersss"] : (function () { throw new RuntimeError('Variable "usersss" does not exist.', 23, $this->source); })()));
        echo ",
            datasets: [{
                data: ";
        // line 25
        echo json_encode((isset($context["userss"]) || array_key_exists("userss", $context) ? $context["userss"] : (function () { throw new RuntimeError('Variable "userss" does not exist.', 25, $this->source); })()));
        echo ",
                backgroundColor: ['#d11414', '#3366CC', '#FF9900', '#109618'],
            }]
        },
        options: {
            width: 80,
            text: {
                display: true,
                color: '#f6f6f6',
            },
    }})
</script>

";
        // line 38
        $this->loadTemplate("temp2.html.twig", "user/statsUser.html.twig", 38)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/statsUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  73 => 25,  68 => 23,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}

<div class=\"content\">
    <div>
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;\">Statistiques des types des Utilisateurs </h1>
    </div>
    <div class=\"table-responsive\">
        <div class=\"form-group\">
            <hr class=\"invis\">
            <div class=\"container\">
                <canvas id=\"user\" width=\"400\" height=\"100\"></canvas>
            </div>
        </div>
    </div>
</div>
<script>

    let user = document.querySelector(\"#user\")
    let annGraph = new Chart(user, {
        scaleFontColor: \"black\",
        type: \"doughnut\",
        data: {
            labels: {{ usersss|json_encode|raw }},
            datasets: [{
                data: {{ userss|json_encode|raw }},
                backgroundColor: ['#d11414', '#3366CC', '#FF9900', '#109618'],
            }]
        },
        options: {
            width: 80,
            text: {
                display: true,
                color: '#f6f6f6',
            },
    }})
</script>

{% include 'temp2.html.twig' %}", "user/statsUser.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\user\\statsUser.html.twig");
    }
}
