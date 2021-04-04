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

/* ordonnance/listordonnance.html.twig */
class __TwigTemplate_c89b6f63d95f689784cc9986a7ac1af91b13eae6eeeda0c04b37640826452386 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ordonnance/listordonnance.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ordonnance/listordonnance.html.twig"));

        // line 1
        $this->loadTemplate("templateAccueilMed.html.twig", "ordonnance/listordonnance.html.twig", 1)->display($context);
        // line 2
        echo "
<style> .btn-primary {
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;

    }
    .btn-primary:hover {
        opacity: 0.8;
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
    }
    .btn-primary:active {
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
    }
</style>

<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"id\">Ordonnances</h2>

            </div>
            <form action=\" ";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("triordonnance");
        echo " \"><button style=\"font-size: 20px; margin-bottom: 3%;\"; class=\"btn-primary\">Trier ordonnance</button></form>
            <table id=\"example1\" class=\"table table-bordered table-striped\" >
                <tr>
                    <td>id</td>
                    <td> Contenu de l'ordonnance </td>
                    <td> Date du saisi </td>
                    <td> Patient </td>
                    <td> Medicament list </td>
                    <td> Supprimer </td>
                    <td> Edit </td>
                </tr>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listordonnance"]) || array_key_exists("listordonnance", $context) ? $context["listordonnance"] : (function () { throw new RuntimeError('Variable "listordonnance" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 41
            echo "                    <tr>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ContenuOrd", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "DateOrd", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "user", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["i"], "medicament", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["medicament"]) {
                // line 48
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medicament"], "nomMedicament", [], "any", false, false, false, 48), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medicament'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                        </td>
                        <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ordonnanceremove", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">Supprimer</a></td>
                        <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ordonnancemodifier", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Editer</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </table>
            <a style=\"font-size: 20px\"; href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ordonnanceajout");
        echo "\"><button class=\"btn-primary\">Ajouter ordonnance</button></a>

        </div>
    </div>
    <div style=\"margin-left:1%; margin-top: 5%;\">";
        // line 60
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["listordonnance"]) || array_key_exists("listordonnance", $context) ? $context["listordonnance"] : (function () { throw new RuntimeError('Variable "listordonnance" does not exist.', 60, $this->source); })()));
        echo "</div>
</section>

";
        // line 63
        $this->loadTemplate("tempFront2MO.html.twig", "ordonnance/listordonnance.html.twig", 63)->display($context);
        // line 64
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnance/listordonnance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 64,  157 => 63,  151 => 60,  144 => 56,  141 => 55,  132 => 52,  128 => 51,  125 => 50,  116 => 48,  112 => 47,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  92 => 41,  88 => 40,  74 => 29,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'templateAccueilMed.html.twig'  %}

<style> .btn-primary {
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;

    }
    .btn-primary:hover {
        opacity: 0.8;
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
    }
    .btn-primary:active {
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
    }
</style>

<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"id\">Ordonnances</h2>

            </div>
            <form action=\" {{ path('triordonnance') }} \"><button style=\"font-size: 20px; margin-bottom: 3%;\"; class=\"btn-primary\">Trier ordonnance</button></form>
            <table id=\"example1\" class=\"table table-bordered table-striped\" >
                <tr>
                    <td>id</td>
                    <td> Contenu de l'ordonnance </td>
                    <td> Date du saisi </td>
                    <td> Patient </td>
                    <td> Medicament list </td>
                    <td> Supprimer </td>
                    <td> Edit </td>
                </tr>
                {% for i in listordonnance%}
                    <tr>
                        <td>{{ i.id }}</td>
                        <td>{{ i.ContenuOrd }}</td>
                        <td>{{ i.DateOrd|date(\"d/m/Y\") }}</td>
                        <td>{{ i.user}}</td>
                        <td>
                            {% for medicament in i.medicament %}
                                {{ medicament.nomMedicament }}
                            {% endfor %}
                        </td>
                        <td><a href=\"{{ path('Ordonnanceremove',{'id':i.id} )}}\">Supprimer</a></td>
                        <td><a href=\"{{ path('Ordonnancemodifier',{'id':i.id} )}}\">Editer</a></td>
                    </tr>
                {% endfor %}
            </table>
            <a style=\"font-size: 20px\"; href=\"{{ path('Ordonnanceajout') }}\"><button class=\"btn-primary\">Ajouter ordonnance</button></a>

        </div>
    </div>
    <div style=\"margin-left:1%; margin-top: 5%;\">{{ knp_pagination_render(listordonnance) }}</div>
</section>

{% include 'tempFront2MO.html.twig' %}


", "ordonnance/listordonnance.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\ordonnance\\listordonnance.html.twig");
    }
}
