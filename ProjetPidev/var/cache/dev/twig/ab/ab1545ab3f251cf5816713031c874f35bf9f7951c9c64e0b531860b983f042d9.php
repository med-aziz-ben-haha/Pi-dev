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

/* produit/ListProd.html.twig */
class __TwigTemplate_d20f0df5a725a84ef26c496ea696d8a4f72ccc31b51836d510900cbaf64b0411 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/ListProd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/ListProd.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "produit/ListProd.html.twig", 1)->display($context);
        // line 2
        echo "
<section class=\"services-section hk-section section-bg\" >
    <div class=\"box\">
        <div class=\"box-header\">
            <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Produits </h1>
            <div class=\"col-sm-8\"></div>

            <div class=\"col-sm-4\"><a href=\"\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Produit</a></div>




        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                    <th>Image Parapharmacie</th>
                    <th>id</th>
                    <th>Nom Produit</th>
                    <th>Categorie</th>
                    <th>Quantite</th>
                    <th>Prix</th>
                    <th>Modifier Produit</th>
                    <th>Supprimer Produit</th>


                </tr>
                </thead>
                <tbody>
                <tr ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo ">


                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProduit", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProduit", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "quantiteProduit", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixProduit", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>







                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo ">




                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
</section>

";
        // line 62
        $this->loadTemplate("tempFront2SoinMP.html.twig", "produit/ListProd.html.twig", 62)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/ListProd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 62,  121 => 49,  106 => 41,  102 => 40,  98 => 39,  94 => 38,  90 => 37,  86 => 36,  78 => 33,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"box\">
        <div class=\"box-header\">
            <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Produits </h1>
            <div class=\"col-sm-8\"></div>

            <div class=\"col-sm-4\"><a href=\"\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Produit</a></div>




        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                    <th>Image Parapharmacie</th>
                    <th>id</th>
                    <th>Nom Produit</th>
                    <th>Categorie</th>
                    <th>Quantite</th>
                    <th>Prix</th>
                    <th>Modifier Produit</th>
                    <th>Supprimer Produit</th>


                </tr>
                </thead>
                <tbody>
                <tr {% for p in produit %}>


                    <td>{{ p.id }}</td>
                    <td>{{ p.nomProduit }}</td>
                    <td>{{ p.nomProduit }}</td>
                    <td>{{ p.quantiteProduit }}</td>
                    <td>{{ p.prixProduit }}</td>
                    <td><a href=\"{{ path('deleteProduit',{'id':p.id}) }}\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>







                </tr {% endfor %}>




                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}", "produit/ListProd.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev\\ProjetPidev\\templates\\produit\\ListProd.html.twig");
    }
}
