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
class __TwigTemplate_4874443667c201dce37e3ea2378ee45ed6e2a9fbe6d5402d9698975ca7f16157 extends Template
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
                    <td> Medecin </td>
                    <td> Contenu de l'ordonnance </td>
                    <td> Date du saisi </td>
                    <td> Medicament list </td>

                </tr>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listordonnance"]) || array_key_exists("listordonnance", $context) ? $context["listordonnance"] : (function () { throw new RuntimeError('Variable "listordonnance" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                    <tr>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                        <td> ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "Medecin", [], "any", false, false, false, 21), "getNom", [], "method", false, false, false, 21), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ContenuOrd", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "DateOrd", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["i"], "medicament", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["medicament"]) {
                // line 26
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medicament"], "nomMedicament", [], "any", false, false, false, 26), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medicament'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                        </td>


                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
            </table>
        </div>
    </div>
    <div style=\"margin-left:1%; margin-top: 5%;\">";
        // line 37
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["listordonnance"]) || array_key_exists("listordonnance", $context) ? $context["listordonnance"] : (function () { throw new RuntimeError('Variable "listordonnance" does not exist.', 37, $this->source); })()));
        echo "</div>
</section>
";
        // line 39
        $this->loadTemplate("tempFront2MO.html.twig", "ordonnance/listordonnanceuser.html.twig", 39)->display($context);
        // line 40
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
        return array (  123 => 40,  121 => 39,  116 => 37,  110 => 33,  100 => 28,  91 => 26,  87 => 25,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  67 => 19,  63 => 18,  45 => 2,  43 => 1,);
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
                    <td> Medecin </td>
                    <td> Contenu de l'ordonnance </td>
                    <td> Date du saisi </td>
                    <td> Medicament list </td>

                </tr>
                {% for i in listordonnance%}
                    <tr>
                        <td>{{ i.id }}</td>
                        <td> {{ i.Medecin.getNom() }}</td>
                        <td>{{ i.ContenuOrd }}</td>
                        <td>{{ i.DateOrd|date(\"d/m/Y\") }}</td>
                        <td>
                            {% for medicament in i.medicament %}
                                {{ medicament.nomMedicament }}
                            {% endfor %}
                        </td>


                    </tr>
                {% endfor %}

            </table>
        </div>
    </div>
    <div style=\"margin-left:1%; margin-top: 5%;\">{{ knp_pagination_render(listordonnance) }}</div>
</section>
{% include 'tempFront2MO.html.twig' %}


", "ordonnance/listordonnanceuser.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\ordonnance\\listordonnanceuser.html.twig");
    }
}
