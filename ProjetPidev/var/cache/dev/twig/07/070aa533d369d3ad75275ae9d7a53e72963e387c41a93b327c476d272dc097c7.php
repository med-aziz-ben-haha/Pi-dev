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

/* service/index.html.twig */
class __TwigTemplate_bb3482e968effba8c009b9ed9a698672c1a059cb33407034d7179ac6a13efee4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("temp1.html.twig", "service/index.html.twig", 2)->display($context);
        // line 3
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des services </h1>


    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
    <form class=\"form-inline\" style=\"float: right;\">
        <div style=\"float: right\">
            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_show_pdf");
        echo "\">Télécharger PDF</a>
        </div>
        <select class=\"form-control mb-2 mr-sm-2\" id=\"by\" style=\"width:auto; display:inline-block;\">
            <option>id</option>
            <option>nom_centre_medical</option>
            <option>nom_patient</option>
            <option>service</option>
            <option>matricule</option>
        </select>
        <select class=\"form-control mb-2 mr-sm-2\" id=\"order\" style=\"width:auto; display:inline-block;\">
            <option value=\"ASC\">ASC</option>
            <option value=\"DESC\">DESC</option>
        </select>
    </form>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom_centre_medical</th>
                <th>Nom_patient</th>
                <th>Service</th>
                <th>Matricule</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"body\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 61, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 62
            echo "            <tr>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "nomCentreMedical", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "nomPatient", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "matricule", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_show", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_new");
        echo "\">Create new</a>



    <script>
        \$(document).ready(function(){
            \$(\"#order\").change(function(){
                load();
            });
            \$(\"#by\").change(function(){
                load();
            });
        });

        function load() {
            \$.ajax({
                type: \"GET\",
                url: \"/service/search/\" + \$(\"#order\").val()+\"/\"+ \$(\"#by\").val(),
                dataType: \"text\",
                success: function (data) {
                    \$(\"#body\").html(data);
                }
            });
        }
    </script>

";
        // line 107
        $this->loadTemplate("temp2.html.twig", "service/index.html.twig", 107)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "service/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 107,  167 => 81,  162 => 78,  153 => 74,  144 => 70,  140 => 69,  135 => 67,  131 => 66,  127 => 65,  123 => 64,  119 => 63,  116 => 62,  111 => 61,  82 => 35,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des services </h1>


    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
    <form class=\"form-inline\" style=\"float: right;\">
        <div style=\"float: right\">
            <a href=\"{{ path('service_show_pdf') }}\">Télécharger PDF</a>
        </div>
        <select class=\"form-control mb-2 mr-sm-2\" id=\"by\" style=\"width:auto; display:inline-block;\">
            <option>id</option>
            <option>nom_centre_medical</option>
            <option>nom_patient</option>
            <option>service</option>
            <option>matricule</option>
        </select>
        <select class=\"form-control mb-2 mr-sm-2\" id=\"order\" style=\"width:auto; display:inline-block;\">
            <option value=\"ASC\">ASC</option>
            <option value=\"DESC\">DESC</option>
        </select>
    </form>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom_centre_medical</th>
                <th>Nom_patient</th>
                <th>Service</th>
                <th>Matricule</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"body\">
        {% for service in services %}
            <tr>
                <td>{{ service.id }}</td>
                <td>{{ service.nomCentreMedical }}</td>
                <td>{{ service.nomPatient }}</td>
                <td>{{ service.service }}</td>
                <td>{{ service.matricule }}</td>
                <td>
                    <a href=\"{{ path('service_show', {'id': service.id}) }}\">show</a>
                    <a href=\"{{ path('service_edit', {'id': service.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('service_new') }}\">Create new</a>



    <script>
        \$(document).ready(function(){
            \$(\"#order\").change(function(){
                load();
            });
            \$(\"#by\").change(function(){
                load();
            });
        });

        function load() {
            \$.ajax({
                type: \"GET\",
                url: \"/service/search/\" + \$(\"#order\").val()+\"/\"+ \$(\"#by\").val(),
                dataType: \"text\",
                success: function (data) {
                    \$(\"#body\").html(data);
                }
            });
        }
    </script>

{% include 'temp2.html.twig' %}
", "service/index.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\service\\index.html.twig");
    }
}
