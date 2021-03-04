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

/* categorie_produit/ListCategorie.html.twig */
class __TwigTemplate_e26afb2a4e1da1a2d4b638c3fa8e854956b9eaf6f7d8d77a8593218b4143bfb4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_produit/ListCategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_produit/ListCategorie.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "categorie_produit/ListCategorie.html.twig", 1)->display($context);
        // line 2
        echo "
<section class=\"services-section hk-section section-bg\" >
    <div class=\"box\">
        <div class=\"box-header\">
            <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Categories </h1>
            <div class=\"col-sm-8\"></div>

            <div class=\"col-sm-4\"><a href=\"/afficheCategorieProd/categorie_produit/AjoutCategorie/{id}\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Produit</a></div>




        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                    <th>Image Categorie</th>
                    <th>id</th>
                    <th>Categorie</th>

                    <th>Modifier Produit</th>
                    <th>Supprimer Produit</th>


                </tr>
                </thead>
                <tbody>
                <tr ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo ">

                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["c"], "getLienImgCat", [], "any", false, false, false, 33))), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "categorie", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCategorie", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                    <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCategorie", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>








                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo ">




                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
</section>

";
        // line 59
        $this->loadTemplate("tempFront2SoinMP.html.twig", "categorie_produit/ListCategorie.html.twig", 59)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "categorie_produit/ListCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 59,  115 => 46,  99 => 37,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  76 => 31,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"box\">
        <div class=\"box-header\">
            <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Categories </h1>
            <div class=\"col-sm-8\"></div>

            <div class=\"col-sm-4\"><a href=\"/afficheCategorieProd/categorie_produit/AjoutCategorie/{id}\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Produit</a></div>




        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                    <th>Image Categorie</th>
                    <th>id</th>
                    <th>Categorie</th>

                    <th>Modifier Produit</th>
                    <th>Supprimer Produit</th>


                </tr>
                </thead>
                <tbody>
                <tr {% for c in categorie %}>

                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"{{ asset('uploads/' ~ c.getLienImgCat)}}\"></td>
                    <td>{{ c.id }}</td>
                    <td>{{ c.categorie }}</td>
                    <td><a href=\"{{ path('deleteCategorie',{'id':c.id}) }}\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                    <td><a href=\"{{ path('deleteCategorie',{'id':c.id}) }}\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>








                </tr {% endfor %}>




                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}", "categorie_produit/ListCategorie.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev\\ProjetPidev\\templates\\categorie_produit\\ListCategorie.html.twig");
    }
}
