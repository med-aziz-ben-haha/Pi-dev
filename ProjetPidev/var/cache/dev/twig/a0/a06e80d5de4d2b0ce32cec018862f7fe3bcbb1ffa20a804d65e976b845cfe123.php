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

/* soin_mp/listSoinsMP.html.twig */
class __TwigTemplate_af44c7f994ef3a5450a5c559983549d1b0552f3207f069ae69ba249e6f819069 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/listSoinsMP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/listSoinsMP.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "soin_mp/listSoinsMP.html.twig", 1)->display($context);
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
  .tri{
      display: inline-block;
  }

</style>
<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion des Soins de Médecine Parallèle </h1>
        <div style =\"margin-left:68%;\">
            <div class=\"tri\">";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formtri"]) || array_key_exists("formtri", $context) ? $context["formtri"] : (function () { throw new RuntimeError('Variable "formtri" does not exist.', 31, $this->source); })()), 'form', ["attr" => ["novalidate" => "novalidate"]]);
        echo "</div>
            <div class=\"tri\">";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formtriDESC"]) || array_key_exists("formtriDESC", $context) ? $context["formtriDESC"] : (function () { throw new RuntimeError('Variable "formtriDESC" does not exist.', 32, $this->source); })()), 'form', ["attr" => ["novalidate" => "novalidate"]]);
        echo "</div>
        </div>
        <div>";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 34, $this->source); })()), 'form', ["attr" => ["novalidate" => "novalidate"]]);
        echo "</div>


        <form action=\"  ";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterSoinMP");
        echo "  \"><button>Ajouter</button></form>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>
                <th>Image</th>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Adresse</th>
                <th>Categorie</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSoinsMP"]) || array_key_exists("listSoinsMP", $context) ? $context["listSoinsMP"] : (function () { throw new RuntimeError('Variable "listSoinsMP" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 57
            echo "                <tr>
                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["S"], "getLienImageSMP", [], "method", false, false, false, 58))), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "titreSoinMP", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "descriptionSoinMP", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "adresseSoinMP", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["S"], "CategorieSoinMP", [], "any", false, false, false, 63), "getLibelleCategorieSoinMP", [], "method", false, false, false, 63), "html", null, true);
            echo "</td>

                    <td><form action=\"   ";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierSoinMP", ["id" => twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "  \"><button>Modifier</button></form></td>
                    <td><form action=\" ";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerSoinMP", ["id" => twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo " \"><button>Supprimer</button></form></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "


            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 78
        $this->loadTemplate("temp2.html.twig", "soin_mp/listSoinsMP.html.twig", 78)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "soin_mp/listSoinsMP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 78,  158 => 69,  149 => 66,  145 => 65,  140 => 63,  136 => 62,  132 => 61,  128 => 60,  124 => 59,  120 => 58,  117 => 57,  113 => 56,  91 => 37,  85 => 34,  80 => 32,  76 => 31,  45 => 2,  43 => 1,);
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
  .tri{
      display: inline-block;
  }

</style>
<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion des Soins de Médecine Parallèle </h1>
        <div style =\"margin-left:68%;\">
            <div class=\"tri\">{{ form(formtri,{'attr': {'novalidate': 'novalidate'}}) }}</div>
            <div class=\"tri\">{{ form(formtriDESC,{'attr': {'novalidate': 'novalidate'}}) }}</div>
        </div>
        <div>{{ form(formSearch,{'attr': {'novalidate': 'novalidate'}}) }}</div>


        <form action=\"  {{path('ajouterSoinMP')}}  \"><button>Ajouter</button></form>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>
                <th>Image</th>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Adresse</th>
                <th>Categorie</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>

            {% for S in listSoinsMP %}
                <tr>
                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"{{ asset('uploads/' ~ S.getLienImageSMP())}}\"></td>
                    <td>{{ S.id }}</td>
                    <td>{{ S.titreSoinMP }}</td>
                    <td>{{ S.descriptionSoinMP}}</td>
                    <td>{{ S.adresseSoinMP}}</td>
                    <td>{{ S.CategorieSoinMP.getLibelleCategorieSoinMP()}}</td>

                    <td><form action=\"   {{path('modifierSoinMP',{id:S.id})}}  \"><button>Modifier</button></form></td>
                    <td><form action=\" {{path('supprimerSoinMP',{id:S.id})}} \"><button>Supprimer</button></form></td>
                </tr>
            {% endfor %}



            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
{% include 'temp2.html.twig' %}", "soin_mp/listSoinsMP.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\listSoinsMP.html.twig");
    }
}
