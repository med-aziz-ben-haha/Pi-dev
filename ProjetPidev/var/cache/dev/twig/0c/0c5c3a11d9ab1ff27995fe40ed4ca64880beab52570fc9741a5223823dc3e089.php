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

/* service/index_front.html.twig */
class __TwigTemplate_781fb1230a5599e7e1a2b5013ee95f1194a538104206736db41c4faec637ecc6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index_front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index_front.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1CentreMedical.html.twig", "service/index_front.html.twig", 1)->display($context);
        // line 2
        echo "
<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"idMP\">Services</h2>
            </div>
            ";
        // line 10
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 11
            echo "            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\">
                        <img style=\" padding-right: 2px; padding-left: 2px;  width:80px ; hight: 80px ;\" src=\"https://static.thenounproject.com/png/3381233-200.png\"></div>
                    <h3 class=\"service-box-title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 15), "html", null, true);
            echo "</h3>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
</section>

";
        // line 22
        $this->loadTemplate("tempFront2CentreMedical.html.twig", "service/index_front.html.twig", 22)->display($context);
        // line 23
        echo "








";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "service/index_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  80 => 22,  75 => 19,  65 => 15,  59 => 11,  54 => 10,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1CentreMedical.html.twig' %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"idMP\">Services</h2>
            </div>
            {#{% for CSMP in listCategorieSoinMPs %}#}
            {% for service in services %}
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\">
                        <img style=\" padding-right: 2px; padding-left: 2px;  width:80px ; hight: 80px ;\" src=\"https://static.thenounproject.com/png/3381233-200.png\"></div>
                    <h3 class=\"service-box-title\">{{ service.service }}</h3>
                </div>
            </div>
            {% endfor %}
        </div>
</section>

{% include 'tempFront2CentreMedical.html.twig' %}









{#
{% include 'temp1.html.twig' %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<style>
    button {
        color: #FFFFFF;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }
    button:hover {
        color: #FFFFFF;
        opacity: 0.8;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }
    button:active {
        color: #FFFFFF;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }
</style>
<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Centres médicaux </h1>


    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
    <input id=\"searchAjax\">
    <table id=\"example1\" class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom_centre_medical</th>
                <th>Adresse</th>
                <th>Type</th>
                <th>Mail</th>
                <th>NumTel</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"body\">
        {% for centre_medical in centre_medicals %}nomCentreMedical
            <tr>
                <td>{{ centre_medical.id }}</td>
                <td>{{ centre_medical.nomCentreMedical }}</td>
                <td>{{ centre_medical.adresse }}</td>
                <td>{{ centre_medical.type }}</td>
                <td>{{ centre_medical.mail }}</td>
                <td>{{ centre_medical.numTel }}</td>
                <td>
                    <a href=\"{{ path('centre_medical_show', {'id': centre_medical.id}) }}\">show</a>
                    <a href=\"{{ path('centre_medical_edit', {'id': centre_medical.id}) }}\">edit</a>
                    <a href=\"{{ path('service_showByCenter', {'center': centre_medical.id}) }}\">services</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('centre_medical_new') }}\">Create new</a>
    </div>
    <!-- /.box-body -->
</div>
    <script>
        \$(document).ready(function(){
            \$(\"#searchAjax\").change(function(){
                \$.ajax({
                    type: \"GET\",
                    url: \"/centreMedical/search/\" + \$(\"#searchAjax\").val(),
                    dataType: \"text\",
                    success: function (data) {
                        \$(\"#body\").html(data);
                    }
                });
            });
        });
    </script>

{% include 'temp2.html.twig' %}

#}
", "service/index_front.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\service\\index_front.html.twig");
    }
}
