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

/* centre_medical/index.html.twig */
class __TwigTemplate_62680f56777f634ca425ff157ed8ba02d0b3f4d9c54b1b524d0c791cdffe0c7f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "centre_medical/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "centre_medical/index.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "centre_medical/index.html.twig", 1)->display($context);
        // line 2
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
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centre_medicals"]) || array_key_exists("centre_medicals", $context) ? $context["centre_medicals"] : (function () { throw new RuntimeError('Variable "centre_medicals" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["centre_medical"]) {
            // line 47
            echo "            <tr>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["centre_medical"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["centre_medical"], "nomCentreMedical", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["centre_medical"], "adresse", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["centre_medical"], "type", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["centre_medical"], "mail", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["centre_medical"], "numTel", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centre_medical_show", ["id" => twig_get_attribute($this->env, $this->source, $context["centre_medical"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centre_medical_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["centre_medical"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">edit</a>
                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_showByCenter", ["center" => twig_get_attribute($this->env, $this->source, $context["centre_medical"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">services</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre_medical'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centre_medical_new");
        echo "\">Create new</a>
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

";
        // line 87
        $this->loadTemplate("temp2.html.twig", "centre_medical/index.html.twig", 87)->display($context);
        // line 88
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "centre_medical/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 88,  177 => 87,  155 => 68,  150 => 65,  141 => 61,  132 => 57,  128 => 56,  124 => 55,  119 => 53,  115 => 52,  111 => 51,  107 => 50,  103 => 49,  99 => 48,  96 => 47,  91 => 46,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}
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
        {% for centre_medical in centre_medicals %}
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

", "centre_medical/index.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\centre_medical\\index.html.twig");
    }
}
