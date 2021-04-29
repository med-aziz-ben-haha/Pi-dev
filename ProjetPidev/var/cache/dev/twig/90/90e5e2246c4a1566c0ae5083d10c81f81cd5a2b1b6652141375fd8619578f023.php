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

/* centre_medical/show.html.twig */
class __TwigTemplate_99759be0f5bb48122cb041f76439d9b1f8e16653ff55345dd1ca2c47b139c969 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "centre_medical/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "centre_medical/show.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "centre_medical/show.html.twig", 1)->display($context);
        // line 2
        echo "
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centre_medical"]) || array_key_exists("centre_medical", $context) ? $context["centre_medical"] : (function () { throw new RuntimeError('Variable "centre_medical" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom_centre_medical</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centre_medical"]) || array_key_exists("centre_medical", $context) ? $context["centre_medical"] : (function () { throw new RuntimeError('Variable "centre_medical" does not exist.', 11, $this->source); })()), "nomCentreMedical", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centre_medical"]) || array_key_exists("centre_medical", $context) ? $context["centre_medical"] : (function () { throw new RuntimeError('Variable "centre_medical" does not exist.', 15, $this->source); })()), "adresse", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centre_medical"]) || array_key_exists("centre_medical", $context) ? $context["centre_medical"] : (function () { throw new RuntimeError('Variable "centre_medical" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centre_medical"]) || array_key_exists("centre_medical", $context) ? $context["centre_medical"] : (function () { throw new RuntimeError('Variable "centre_medical" does not exist.', 23, $this->source); })()), "mail", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NumTel</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centre_medical"]) || array_key_exists("centre_medical", $context) ? $context["centre_medical"] : (function () { throw new RuntimeError('Variable "centre_medical" does not exist.', 27, $this->source); })()), "numTel", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centre_medical_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("centre_medical_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["centre_medical"]) || array_key_exists("centre_medical", $context) ? $context["centre_medical"] : (function () { throw new RuntimeError('Variable "centre_medical" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 36
        echo twig_include($this->env, $context, "centre_medical/_delete_form.html.twig");
        echo "

";
        // line 38
        $this->loadTemplate("temp2.html.twig", "centre_medical/show.html.twig", 38)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "centre_medical/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  105 => 36,  100 => 34,  95 => 32,  87 => 27,  80 => 23,  73 => 19,  66 => 15,  59 => 11,  52 => 7,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ centre_medical.id }}</td>
            </tr>
            <tr>
                <th>Nom_centre_medical</th>
                <td>{{ centre_medical.nomCentreMedical }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ centre_medical.adresse }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ centre_medical.type }}</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>{{ centre_medical.mail }}</td>
            </tr>
            <tr>
                <th>NumTel</th>
                <td>{{ centre_medical.numTel }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('centre_medical_index') }}\">back to list</a>

    <a href=\"{{ path('centre_medical_edit', {'id': centre_medical.id}) }}\">edit</a>

    {{ include('centre_medical/_delete_form.html.twig') }}

{% include 'temp2.html.twig' %}
", "centre_medical/show.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\centre_medical\\show.html.twig");
    }
}
