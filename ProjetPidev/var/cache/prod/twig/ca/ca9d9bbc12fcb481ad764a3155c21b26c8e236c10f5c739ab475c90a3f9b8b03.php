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

/* post_categorie/listcategoriePost.html.twig */
class __TwigTemplate_6933ef74fc62ebca47d65f7931d8a98d369797247a9dd49fa4b2ea50cde87b57 extends Template
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
        // line 1
        $this->loadTemplate("temp1.html.twig", "post_categorie/listcategoriePost.html.twig", 1)->display($context);
        // line 2
        echo "

<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Categories Post </h1>
        <div class=\"col-sm-8\"></div>

        <div class=\"col-sm-4\"><a href=\"postcategorie/ajouterCategoriePost\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Categorie Post</a></div>


    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Id Categorie Post</th>
                <th>Nom Categorie Post</th>
                <th>Modifier Categorie Post</th>
                <th>Supprimer Categorie Post</th>


            </tr>
            </thead>
            <tbody>
            <tr ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriePost"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo ">
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nomCategoriePost", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierCategoriePost", ["id" => twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCategoriePost", ["id" => twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>



            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo ">




            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>

";
        // line 47
        $this->loadTemplate("temp2.html.twig", "post_categorie/listcategoriePost.html.twig", 47)->display($context);
    }

    public function getTemplateName()
    {
        return "post_categorie/listcategoriePost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 47,  95 => 35,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  66 => 27,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "post_categorie/listcategoriePost.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\post_categorie\\listcategoriePost.html.twig");
    }
}
