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


            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"hero-btns\" style=\"margin-top: 10%;\">
                        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjoutCategorie", ["id" => (isset($context["idA"]) || array_key_exists("idA", $context) ? $context["idA"] : (function () { throw new RuntimeError('Variable "idA" does not exist.', 12, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 12, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-main\" role=\"button\">Ajouter Categorie</a>
                    </div>
                </div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">
                    <div class=\"hero-btns\" style=\"margin-top: 10%;\">
                        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueilOnlineParapharmacien", ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 18, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-main\" role=\"button\">Retour a mon Parapharmacie</a>
                    </div>
                </div>

            </div>


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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo ">

                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["c"], "getLienImgCat", [], "any", false, false, false, 45))), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "categorie", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierCategorie", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 48), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 48, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                    <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCategorie", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 49), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 49, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>








                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo ">




                </tbody>

            </table>
        </div>

        <!-- /.box-body -->
    </div>
</section>

";
        // line 72
        $this->loadTemplate("tempFront2SoinMP.html.twig", "categorie_produit/ListCategorie.html.twig", 72)->display($context);
        
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
        return array (  149 => 72,  133 => 58,  117 => 49,  113 => 48,  109 => 47,  105 => 46,  101 => 45,  94 => 43,  66 => 18,  57 => 12,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"box\">
        <div class=\"box-header\">
            <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Categories </h1>


            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"hero-btns\" style=\"margin-top: 10%;\">
                        <a href=\"{{ path('AjoutCategorie',{'id':idA , 'iduser':iduser} ) }}\" class=\"btn btn-main\" role=\"button\">Ajouter Categorie</a>
                    </div>
                </div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">
                    <div class=\"hero-btns\" style=\"margin-top: 10%;\">
                        <a href=\"{{ path('accueilOnlineParapharmacien',{'iduser':iduser}  ) }}\" class=\"btn btn-main\" role=\"button\">Retour a mon Parapharmacie</a>
                    </div>
                </div>

            </div>


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
                    <td><a href=\"{{ path('modifierCategorie',{'id':c.id , 'iduser':iduser}) }}\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                    <td><a href=\"{{ path('deleteCategorie',{'id':c.id , 'iduser':iduser}) }}\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>








                </tr {% endfor %}>




                </tbody>

            </table>
        </div>

        <!-- /.box-body -->
    </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}", "categorie_produit/ListCategorie.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\categorie_produit\\ListCategorie.html.twig");
    }
}
