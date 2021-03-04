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

/* reclamation/listreclamation.html.twig */
class __TwigTemplate_baccaa2b2bbdee5a0ecaa9818dd19f984d6fdfea7a25ea1458763f14eac65fc6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/listreclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/listreclamation.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "reclamation/listreclamation.html.twig", 1)->display($context);
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des reclamations </h1>


    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>

                <th>Id</th>
                <th>Description</th>
                <th>user</th>
                <th>type reclamation</th>
                <th>repondre</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listreclamation"]) || array_key_exists("listreclamation", $context) ? $context["listreclamation"] : (function () { throw new RuntimeError('Variable "listreclamation" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 47
            echo "                <tr>

                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "descriptionReclamation", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["S"], "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["S"], "typeReclamation", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td>                       </td>
                    <td><form action=\" ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerreclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo " \"><button>Supprimer</button></form></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "


            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 66
        $this->loadTemplate("temp2.html.twig", "reclamation/listreclamation.html.twig", 66)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/listreclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 66,  125 => 57,  116 => 54,  111 => 52,  107 => 51,  103 => 50,  99 => 49,  95 => 47,  91 => 46,  45 => 2,  43 => 1,);
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des reclamations </h1>


    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>

                <th>Id</th>
                <th>Description</th>
                <th>user</th>
                <th>type reclamation</th>
                <th>repondre</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>

            {% for S in listreclamation %}
                <tr>

                    <td>{{ S.id }}</td>
                    <td>{{ S.descriptionReclamation }}</td>
                    <td>{{ S.user.id }}</td>
                    <td>{{ S.typeReclamation.id }}</td>
                    <td>                       </td>
                    <td><form action=\" {{path('supprimerreclamation',{id:S.id})}} \"><button>Supprimer</button></form></td>
                </tr>
            {% endfor %}



            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
{% include 'temp2.html.twig' %}", "reclamation/listreclamation.html.twig", "C:\\Users\\eya\\Desktop\\Pi-dev\\ProjetPidev\\templates\\reclamation\\listreclamation.html.twig");
    }
}
