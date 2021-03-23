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

/* produit/BackListProduit.html.twig */
class __TwigTemplate_2a4cdd2550bb5c01d697507818a5bfc46067ba0d04ca14b8e51fa708f8e48a69 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/BackListProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/BackListProduit.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "produit/BackListProduit.html.twig", 1)->display($context);
        // line 2
        echo "



<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > List Des Produits </h1>
        <div class=\"col-sm-8\"></div>




    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Image Produit</th>
                <th>id</th>
                <th>Nom Produit</th>
                <th>Prix Unitaire</th>
                <th>Quantite Produit</th>
                <th>TVA</th>
                <th>Description</th>


            </tr>
            </thead>
            <tbody id=\"all\">
            <tr ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo ">
                <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "getLienImgP", [], "any", false, false, false, 33))), "html", null, true);
            echo "\"></td>

                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProduit", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixProduit", [], "any", false, false, false, 37), "html", null, true);
            echo " DT</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "quantiteProduit", [], "any", false, false, false, 38), "html", null, true);
            echo " pieces</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "tva", [], "any", false, false, false, 39), "html", null, true);
            echo " %</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>


            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo ">




            </tbody>
            <tbody id=\"search\">

            </tbody>

        </table>
    </div>
    <div class=\"navigation\">
        ";
        // line 56
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 56, $this->source); })()));
        echo "
    </div>

    <!-- /.box-body -->
</div>



";
        // line 64
        $this->loadTemplate("temp2.html.twig", "produit/BackListProduit.html.twig", 64)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/BackListProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 64,  133 => 56,  118 => 43,  108 => 40,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  83 => 33,  77 => 32,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}




<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > List Des Produits </h1>
        <div class=\"col-sm-8\"></div>




    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Image Produit</th>
                <th>id</th>
                <th>Nom Produit</th>
                <th>Prix Unitaire</th>
                <th>Quantite Produit</th>
                <th>TVA</th>
                <th>Description</th>


            </tr>
            </thead>
            <tbody id=\"all\">
            <tr {% for p in produit %}>
                <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"{{ asset('uploads/' ~ p.getLienImgP)}}\"></td>

                <td>{{ p.id }}</td>
                <td>{{ p.nomProduit }}</td>
                <td>{{ p.prixProduit }} DT</td>
                <td>{{ p.quantiteProduit}} pieces</td>
                <td>{{ p.tva }} %</td>
                <td>{{ p.description }}</td>


            </tr {% endfor %}>




            </tbody>
            <tbody id=\"search\">

            </tbody>

        </table>
    </div>
    <div class=\"navigation\">
        {{ knp_pagination_render(produit) }}
    </div>

    <!-- /.box-body -->
</div>



{% include 'temp2.html.twig' %}", "produit/BackListProduit.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\produit\\BackListProduit.html.twig");
    }
}
