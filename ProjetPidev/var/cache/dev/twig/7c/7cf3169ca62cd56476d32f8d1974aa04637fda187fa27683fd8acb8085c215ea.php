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

/* ordonnance/listordonnanceuser.html.twig */
class __TwigTemplate_43ad28eb6ac070989386a6b93b6632582e7484d20f7fd4c91705386c54e7d7d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ordonnance/listordonnanceuser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ordonnance/listordonnanceuser.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1MO.html.twig", "ordonnance/listordonnanceuser.html.twig", 1)->display($context);
        // line 2
        echo "
<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"id\">Ordonnances</h2>
            </div>
            <table id=\"example1\" class=\"table table-bordered table-striped\" >
                <tr>
                    <td>id</td>
                    <td> Contenu de l'ordonnance </td>
                    <td> Date du saisi </td>
                    <td> Medicament list </td>
                </tr>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listordonnance"]) || array_key_exists("listordonnance", $context) ? $context["listordonnance"] : (function () { throw new RuntimeError('Variable "listordonnance" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "                    <tr>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ContenuOrd", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "DateOrd", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "medicaments", [], "any", false, false, false, 22)));
            foreach ($context['_seq'] as $context["_key"] => $context["medicament"]) {
                // line 23
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medicament"], "nomMedicament", [], "any", false, false, false, 23), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medicament'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                        </td>

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </table>
        </div>
    </div>
</section>
";
        // line 33
        $this->loadTemplate("tempFront2MO.html.twig", "ordonnance/listordonnanceuser.html.twig", 33)->display($context);
        // line 34
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnance/listordonnanceuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  109 => 33,  103 => 29,  94 => 25,  85 => 23,  81 => 22,  76 => 20,  72 => 19,  68 => 18,  65 => 17,  61 => 16,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1MO.html.twig' %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"id\">Ordonnances</h2>
            </div>
            <table id=\"example1\" class=\"table table-bordered table-striped\" >
                <tr>
                    <td>id</td>
                    <td> Contenu de l'ordonnance </td>
                    <td> Date du saisi </td>
                    <td> Medicament list </td>
                </tr>
                {% for i in listordonnance%}
                    <tr>
                        <td>{{ i.id }}</td>
                        <td>{{ i.ContenuOrd }}</td>
                        <td>{{ i.DateOrd|date(\"d/m/Y\") }}</td>
                        <td>
                            {% for medicament in i.medicaments|length %}
                                {{ medicament.nomMedicament }}
                            {% endfor %}
                        </td>

                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>
</section>
{% include 'tempFront2MO.html.twig' %}


", "ordonnance/listordonnanceuser.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\ordonnance\\listordonnanceuser.html.twig");
    }
}
