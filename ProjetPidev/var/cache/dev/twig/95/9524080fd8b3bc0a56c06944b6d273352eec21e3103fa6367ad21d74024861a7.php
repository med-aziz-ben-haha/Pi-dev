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

/* reclamation/listreclamations.html.twig */
class __TwigTemplate_53b4fe5972f7314bd665e5dd434d6414cde9e94cd572ba9f86085a4012f73b40 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/listreclamations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/listreclamations.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "reclamation/listreclamations.html.twig", 1)->display($context);
        // line 2
        echo "
<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"id\">Reclamation</h2>
            </div>
            <table id=\"example1\" class=\"table table-bordered table-striped\" >

                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listreclamations"]) || array_key_exists("listreclamations", $context) ? $context["listreclamations"] : (function () { throw new RuntimeError('Variable "listreclamations" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 12
            echo "                    <tr>

                        <th>Description</th>
                        <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "descriptionReclamation", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>

                        <th>Reponse</th>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "reponse", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "



            </table>
        </div>
    </div>
</section>

";
        // line 32
        $this->loadTemplate("tempFront2SoinMP.html.twig", "reclamation/listreclamations.html.twig", 32)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/listreclamations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  82 => 23,  73 => 20,  65 => 15,  60 => 12,  56 => 11,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"id\">Reclamation</h2>
            </div>
            <table id=\"example1\" class=\"table table-bordered table-striped\" >

                {% for S in listreclamations %}
                    <tr>

                        <th>Description</th>
                        <td>{{ S.descriptionReclamation }}</td>
                    </tr>
                    <tr>

                        <th>Reponse</th>
                        <td>{{ S.reponse }}</td>
                    </tr>
                {% endfor %}




            </table>
        </div>
    </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}
", "reclamation/listreclamations.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\reclamation\\listreclamations.html.twig");
    }
}
