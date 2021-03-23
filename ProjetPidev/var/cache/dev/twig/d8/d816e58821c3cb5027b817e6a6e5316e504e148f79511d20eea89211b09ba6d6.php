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
class __TwigTemplate_87ebdb41bcbaba5265e95759d3e385f79ce8f6b86b5d52f365b4053e673c006e extends Template
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

</style>
<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion des Soins de Médecine Parallèle </h1>
        <div>";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 27, $this->source); })()), 'form', ["attr" => ["novalidate" => "novalidate"]]);
        echo "</div>
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formtri"]) || array_key_exists("formtri", $context) ? $context["formtri"] : (function () { throw new RuntimeError('Variable "formtri" does not exist.', 28, $this->source); })()), 'form', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

        <form action=\"  ";
        // line 30
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSoinsMP"]) || array_key_exists("listSoinsMP", $context) ? $context["listSoinsMP"] : (function () { throw new RuntimeError('Variable "listSoinsMP" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 50
            echo "                <tr>
                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["S"], "getLienImageSMP", [], "method", false, false, false, 51))), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "titreSoinMP", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "descriptionSoinMP", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "adresseSoinMP", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["S"], "CategorieSoinMP", [], "any", false, false, false, 56), "getLibelleCategorieSoinMP", [], "method", false, false, false, 56), "html", null, true);
            echo "</td>

                    <td><form action=\"   ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierSoinMP", ["id" => twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "  \"><button>Modifier</button></form></td>
                    <td><form action=\" ";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerSoinMP", ["id" => twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo " \"><button>Supprimer</button></form></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "


            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 71
        $this->loadTemplate("temp2.html.twig", "soin_mp/listSoinsMP.html.twig", 71)->display($context);
        
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
        return array (  159 => 71,  148 => 62,  139 => 59,  135 => 58,  130 => 56,  126 => 55,  122 => 54,  118 => 53,  114 => 52,  110 => 51,  107 => 50,  103 => 49,  81 => 30,  76 => 28,  72 => 27,  45 => 2,  43 => 1,);
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion des Soins de Médecine Parallèle </h1>
        <div>{{ form(formSearch,{'attr': {'novalidate': 'novalidate'}}) }}</div>
        {{ form(formtri,{'attr': {'novalidate': 'novalidate'}}) }}

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
{% include 'temp2.html.twig' %}", "soin_mp/listSoinsMP.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\soin_mp\\listSoinsMP.html.twig");
    }
}
