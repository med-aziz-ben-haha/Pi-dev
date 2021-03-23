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

/* regions/ListRegions.html.twig */
class __TwigTemplate_0cd8ef6fe5a88e81cd28247357c60cfc87f6cf184d94177b7229a88bdde3dc64 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "regions/ListRegions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "regions/ListRegions.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "regions/ListRegions.html.twig", 1)->display($context);
        // line 2
        echo "



<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Regions </h1>
        <div class=\"col-sm-8\"></div>

        <div class=\"col-sm-4\"><a href=\"regions/AjoutRegion\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Region</a></div>




    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>

                <th>id</th>
                <th>Region</th>
                <th>Modifier Region</th>
                <th>Supprimer Region</th>

            </tr>
            </thead>
            <tbody>
            <tr ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["R"]) {
            echo ">


                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["R"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["R"], "region", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>

                <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierRegion", ["id" => twig_get_attribute($this->env, $this->source, $context["R"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteRegion", ["id" => twig_get_attribute($this->env, $this->source, $context["R"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>



            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['R'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo ">




            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>

";
        // line 54
        $this->loadTemplate("temp2.html.twig", "regions/ListRegions.html.twig", 54)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "regions/ListRegions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  108 => 42,  97 => 38,  93 => 37,  88 => 35,  84 => 34,  76 => 31,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}




<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Regions </h1>
        <div class=\"col-sm-8\"></div>

        <div class=\"col-sm-4\"><a href=\"regions/AjoutRegion\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Region</a></div>




    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>

                <th>id</th>
                <th>Region</th>
                <th>Modifier Region</th>
                <th>Supprimer Region</th>

            </tr>
            </thead>
            <tbody>
            <tr {% for R in region %}>


                <td>{{ R.id }}</td>
                <td>{{ R.region }}</td>

                <td><a href=\"{{ path('modifierRegion',{'id':R.id}) }}\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                <td><a href=\"{{ path('deleteRegion',{'id':R.id}) }}\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>



            </tr {% endfor %}>




            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>

{% include 'temp2.html.twig' %}", "regions/ListRegions.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\regions\\ListRegions.html.twig");
    }
}
