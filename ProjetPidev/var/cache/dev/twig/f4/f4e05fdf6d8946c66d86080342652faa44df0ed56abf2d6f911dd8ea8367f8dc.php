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

/* list_produit/AfficheClientListProduit.html.twig */
class __TwigTemplate_77407fe9b97a863bee66e93a98af8a7c0f7744a093303fe2ea8888e81fda2737 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list_produit/AfficheClientListProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list_produit/AfficheClientListProduit.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "list_produit/AfficheClientListProduit.html.twig", 1)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 1, $this->source); })())]));
        // line 2
        echo "
<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Votre Panier </h1>
        <div class=\"col-sm-8\"></div>






    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table  table-striped table-hover\">
            <thead>
            <tr>

                <th>Nom Parapharmacie</th>
                <th>Image Produit</th>
                <th>Nom Produit</th>
                <th>Prix unitaire</th>
                <th>TVA Produit</th>
                <th>Quantite</th>
                <th>TVA Totale</th>
                <th>Prix </th>
                <th>Prix totale</th>




            </tr>
            </thead>
            <tbody>
            <tr ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listProduit"]) || array_key_exists("listProduit", $context) ? $context["listProduit"] : (function () { throw new RuntimeError('Variable "listProduit" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            echo ">


                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "parapharmacie", [], "any", false, false, false, 39), "getNomPara", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["l"], "produit", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 41
                echo "                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "getLienImgP", [], "any", false, false, false, 41))), "html", null, true);
                echo "\"></td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProduit", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getPrixProduit", [], "any", false, false, false, 43), "html", null, true);
                echo " DT</td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getTva", [], "any", false, false, false, 44), "html", null, true);
                echo " %</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "qte", [], "any", false, false, false, 46), "html", null, true);
            echo " pieces</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "tvaTot", [], "any", false, false, false, 47), "html", null, true);
            echo " DT</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prixTot", [], "any", false, false, false, 48), "html", null, true);
            echo " DT</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prixFinale", [], "any", false, false, false, 49), "html", null, true);
            echo " DT</td>

            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo ">
            </tbody>

        </table>

    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10\">
            </div>
            <div class=\"col-2\">
                <dl class=\"dl-horizontal pull-right\">
                    <dt style=\"color: black\">Prix des produits :</dt>
                    <dd>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 64, $this->source); })()), "prixTot", [], "any", false, false, false, 64), "html", null, true);
        echo " DT</dd>

                    <dt style=\"color: black\">TVA Totale :</dt>
                    <dd>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 67, $this->source); })()), "tvaTot", [], "any", false, false, false, 67), "html", null, true);
        echo " DT</dd>

                    <dt style=\"color: black\">Prix Totale :</dt>
                    <dd style=\"color: red\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 70, $this->source); })()), "prixFinale", [], "any", false, false, false, 70), "html", null, true);
        echo " DT</dd>

                </dl>

            </div>
        </div>
    </div>



    <!-- /.box-body -->
</div>


";
        // line 84
        $this->loadTemplate("tempFront2SoinMP.html.twig", "list_produit/AfficheClientListProduit.html.twig", 84)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "list_produit/AfficheClientListProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 84,  167 => 70,  161 => 67,  155 => 64,  140 => 51,  131 => 49,  127 => 48,  123 => 47,  118 => 46,  110 => 44,  106 => 43,  102 => 42,  97 => 41,  93 => 40,  89 => 39,  81 => 36,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' with{'iduser':iduser} %}

<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Votre Panier </h1>
        <div class=\"col-sm-8\"></div>






    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table  table-striped table-hover\">
            <thead>
            <tr>

                <th>Nom Parapharmacie</th>
                <th>Image Produit</th>
                <th>Nom Produit</th>
                <th>Prix unitaire</th>
                <th>TVA Produit</th>
                <th>Quantite</th>
                <th>TVA Totale</th>
                <th>Prix </th>
                <th>Prix totale</th>




            </tr>
            </thead>
            <tbody>
            <tr {% for l in listProduit %}>


                <td>{{ l.parapharmacie.getNomPara }}</td>
                {% for p in l.produit %}
                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"{{ asset('uploads/' ~ p.getLienImgP)}}\"></td>
                    <td>{{p.nomProduit}}</td>
                    <td>{{ p.getPrixProduit}} DT</td>
                    <td>{{ p.getTva}} %</td>
                {% endfor %}
                <td>{{ l.qte }} pieces</td>
                <td>{{ l.tvaTot }} DT</td>
                <td>{{ l.prixTot}} DT</td>
                <td>{{ l.prixFinale}} DT</td>

            </tr {% endfor %}>
            </tbody>

        </table>

    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10\">
            </div>
            <div class=\"col-2\">
                <dl class=\"dl-horizontal pull-right\">
                    <dt style=\"color: black\">Prix des produits :</dt>
                    <dd>{{ panier.prixTot }} DT</dd>

                    <dt style=\"color: black\">TVA Totale :</dt>
                    <dd>{{ panier.tvaTot }} DT</dd>

                    <dt style=\"color: black\">Prix Totale :</dt>
                    <dd style=\"color: red\">{{ panier.prixFinale}} DT</dd>

                </dl>

            </div>
        </div>
    </div>



    <!-- /.box-body -->
</div>


{% include 'tempFront2SoinMP.html.twig' %}", "list_produit/AfficheClientListProduit.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\list_produit\\AfficheClientListProduit.html.twig");
    }
}
