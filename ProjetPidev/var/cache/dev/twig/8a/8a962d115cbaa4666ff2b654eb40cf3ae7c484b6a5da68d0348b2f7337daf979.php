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

/* typereclamation/listtypereclamation.html.twig */
class __TwigTemplate_c0cecc970b9e4b5ef7abd267da76366c454c395a7f3adafd12de0c0eb6c8c218 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "typereclamation/listtypereclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "typereclamation/listtypereclamation.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "typereclamation/listtypereclamation.html.twig", 1)->display($context);
        // line 2
        echo "<style>
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des types de reclamations </h1>
        <form action=\"  ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutertypereclamation");
        echo "  \"><button>Ajouter</button></form>

    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>

                <th>Id</th>

                <th>type reclamation</th>
                <th>Supprimer</th>
                <th>modifier</th>
            </tr>
            </thead>
            <tbody>

            <form method=\"post\" action=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherchetype");
        echo "\">
                <label>Rechercher</label>
                <input type=\"text\" name=\"search\"><input type=\"submit\" value=\"Recherche\">
            </form>

            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listtypereclamation"]) || array_key_exists("listtypereclamation", $context) ? $context["listtypereclamation"] : (function () { throw new RuntimeError('Variable "listtypereclamation" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["C"]) {
            // line 51
            echo "                <tr>

                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["C"], "typeReclamation", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>

                    <td><form action=\" ";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimertypereclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo " \"><button>Supprimer</button></form></td>
                    <td><form action=\" ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifiertypereclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo " \"><button>modifier</button></form></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['C'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "


            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 69
        $this->loadTemplate("temp2.html.twig", "typereclamation/listtypereclamation.html.twig", 69)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "typereclamation/listtypereclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 69,  131 => 60,  122 => 57,  118 => 56,  113 => 54,  109 => 53,  105 => 51,  101 => 50,  93 => 45,  72 => 27,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des types de reclamations </h1>
        <form action=\"  {{path('ajoutertypereclamation')}}  \"><button>Ajouter</button></form>

    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>

                <th>Id</th>

                <th>type reclamation</th>
                <th>Supprimer</th>
                <th>modifier</th>
            </tr>
            </thead>
            <tbody>

            <form method=\"post\" action=\"{{ path ('recherchetype') }}\">
                <label>Rechercher</label>
                <input type=\"text\" name=\"search\"><input type=\"submit\" value=\"Recherche\">
            </form>

            {% for C in listtypereclamation %}
                <tr>

                    <td>{{ C.id }}</td>
                    <td>{{ C.typeReclamation }}</td>

                    <td><form action=\" {{path('supprimertypereclamation',{id:C.id})}} \"><button>Supprimer</button></form></td>
                    <td><form action=\" {{path('modifiertypereclamation',{id:C.id})}} \"><button>modifier</button></form></td>
                </tr>
            {% endfor %}



            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
{% include 'temp2.html.twig' %}", "typereclamation/listtypereclamation.html.twig", "C:\\Users\\eya\\Desktop\\Pi-dev\\ProjetPidev\\templates\\typereclamation\\listtypereclamation.html.twig");
    }
}
