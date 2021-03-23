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

/* panier/AfficheClientPanier.html.twig */
class __TwigTemplate_177b7ba3471870963e69f2ba93d1861619b9e2efa0722430342cb99a0f50fc37 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/AfficheClientPanier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/AfficheClientPanier.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "panier/AfficheClientPanier.html.twig", 1)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 1, $this->source); })())]));
        // line 2
        echo "
<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Vos Paniers </h1>
        <div class=\"col-sm-8\"></div>






    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>

                <th>Nom Parapharmacie</th>
                <th>Prix des produits</th>
                <th>TVA</th>
                <th>Prix totale</th>
                <th>Affiche Panier</th>



            </tr>
            </thead>
            <tbody>
            <tr ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo ">


                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "parapharmacie", [], "any", false, false, false, 34), "getNomPara", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixTot", [], "any", false, false, false, 35), "html", null, true);
            echo " DT</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "tvaTot", [], "any", false, false, false, 36), "html", null, true);
            echo " DT</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixFinale", [], "any", false, false, false, 37), "html", null, true);
            echo " DT</td>
                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheClienListProduit", ["idpanier" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 38), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 38, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-block btn-outline-danger\" role=\"button\">Afficher Panier</a></td>

            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo ">
                </tbody>



        </table>
    </div>
    <!-- /.box-body -->
</div>

";
        // line 50
        $this->loadTemplate("tempFront2SoinMP.html.twig", "panier/AfficheClientPanier.html.twig", 50)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "panier/AfficheClientPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  109 => 40,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  84 => 34,  76 => 31,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' with{'iduser':iduser} %}

<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Vos Paniers </h1>
        <div class=\"col-sm-8\"></div>






    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>

                <th>Nom Parapharmacie</th>
                <th>Prix des produits</th>
                <th>TVA</th>
                <th>Prix totale</th>
                <th>Affiche Panier</th>



            </tr>
            </thead>
            <tbody>
            <tr {% for p in panier %}>


                <td>{{ p.parapharmacie.getNomPara }}</td>
                <td>{{ p.prixTot }} DT</td>
                <td>{{ p.tvaTot }} DT</td>
                <td>{{ p.prixFinale}} DT</td>
                <td><a href=\"{{ path('afficheClienListProduit',{'idpanier':p.id , 'iduser':iduser}) }}\" class=\"btn btn-block btn-outline-danger\" role=\"button\">Afficher Panier</a></td>

            </tr {% endfor %}>
                </tbody>



        </table>
    </div>
    <!-- /.box-body -->
</div>

{% include 'tempFront2SoinMP.html.twig' %}", "panier/AfficheClientPanier.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\panier\\AfficheClientPanier.html.twig");
    }
}
