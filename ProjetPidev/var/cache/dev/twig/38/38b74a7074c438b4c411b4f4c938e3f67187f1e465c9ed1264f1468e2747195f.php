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

/* soin_mp/statsSoinMP.html.twig */
class __TwigTemplate_b360ac1278429b6c54e478c29885d1df142fd3d3c156e96a4077ceba3afb6421 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/statsSoinMP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/statsSoinMP.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "soin_mp/statsSoinMP.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"content\">
    <div>
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;\">Statistiques des Soins Médecine Parallèle </h1>
    </div>
    <div class=\"table-responsive\">
        <div class=\"form-group\">
            <hr class=\"invis\">
            <div class=\"container\">
                <canvas id=\"soinMP\" width=\"400\" height=\"100\"></canvas>
            </div>
        </div>
    </div>
</div>
<script>

    let soinmp = document.querySelector(\"#soinMP\")
    let annGraph = new Chart(soinmp, {
        scaleFontColor: \"black\",
        type: \"line\",
        data: {
            labels: ";
        // line 23
        echo json_encode((isset($context["soinMPs"]) || array_key_exists("soinMPs", $context) ? $context["soinMPs"] : (function () { throw new RuntimeError('Variable "soinMPs" does not exist.', 23, $this->source); })()));
        echo ",
            datasets: [{
                label: \"note\",
                data: ";
        // line 26
        echo json_encode((isset($context["moyennes"]) || array_key_exists("moyennes", $context) ? $context["moyennes"] : (function () { throw new RuntimeError('Variable "moyennes" does not exist.', 26, $this->source); })()));
        echo ",
                backgroundColor: \"rgba(209,20,20,0.8)\",
                pointRadius: 5,
                pointBackgroundColor: \"rgb(209,20,20)\",
                pointBorderColor: \"rgba(255,255,255,0.8)\",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: \"rgb(209,20,20)\",
                pointHitRadius: 20,
                pointBorderWidth: 1,

            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        min: 0,
                        max:5,
                        fontColor: 'black'
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontColor: 'black'
                    }
                }]
            }
        }
    })
</script>

";
        // line 58
        $this->loadTemplate("temp2.html.twig", "soin_mp/statsSoinMP.html.twig", 58)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "soin_mp/statsSoinMP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 58,  74 => 26,  68 => 23,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}

<div class=\"content\">
    <div>
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;\">Statistiques des Soins Médecine Parallèle </h1>
    </div>
    <div class=\"table-responsive\">
        <div class=\"form-group\">
            <hr class=\"invis\">
            <div class=\"container\">
                <canvas id=\"soinMP\" width=\"400\" height=\"100\"></canvas>
            </div>
        </div>
    </div>
</div>
<script>

    let soinmp = document.querySelector(\"#soinMP\")
    let annGraph = new Chart(soinmp, {
        scaleFontColor: \"black\",
        type: \"line\",
        data: {
            labels: {{ soinMPs|json_encode|raw }},
            datasets: [{
                label: \"note\",
                data: {{ moyennes|json_encode|raw }},
                backgroundColor: \"rgba(209,20,20,0.8)\",
                pointRadius: 5,
                pointBackgroundColor: \"rgb(209,20,20)\",
                pointBorderColor: \"rgba(255,255,255,0.8)\",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: \"rgb(209,20,20)\",
                pointHitRadius: 20,
                pointBorderWidth: 1,

            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        min: 0,
                        max:5,
                        fontColor: 'black'
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontColor: 'black'
                    }
                }]
            }
        }
    })
</script>

{% include 'temp2.html.twig' %}", "soin_mp/statsSoinMP.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\statsSoinMP.html.twig");
    }
}
