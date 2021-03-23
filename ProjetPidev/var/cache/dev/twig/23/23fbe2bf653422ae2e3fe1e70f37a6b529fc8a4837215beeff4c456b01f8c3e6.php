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
class __TwigTemplate_7a9ea19ede2bb754526adad854bf884bdcb3e23d8f68a54301434fac9ebe1c5f extends Template
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
        $this->loadTemplate("tempClient.html.twig", "list_produit/AfficheClientListProduit.html.twig", 1)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 1, $this->source); })())]));
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
                <th>Modifier Quantite</th>
                <th>Supprimer quantite</th>




            </tr>
            </thead>
            <tbody>
            <tr ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listProduit"]) || array_key_exists("listProduit", $context) ? $context["listProduit"] : (function () { throw new RuntimeError('Variable "listProduit" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            echo ">


                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "parapharmacie", [], "any", false, false, false, 41), "getNomPara", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["l"], "produit", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 43
                echo "                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "getLienImgP", [], "any", false, false, false, 43))), "html", null, true);
                echo "\"></td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProduit", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getPrixProduit", [], "any", false, false, false, 45), "html", null, true);
                echo " DT</td>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getTva", [], "any", false, false, false, 46), "html", null, true);
                echo " %</td>


                <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "qte", [], "any", false, false, false, 49), "html", null, true);
                echo " pieces</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "tvaTot", [], "any", false, false, false, 50), "html", null, true);
                echo " DT</td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prixTot", [], "any", false, false, false, 51), "html", null, true);
                echo " DT</td>
                <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prixFinale", [], "any", false, false, false, 52), "html", null, true);
                echo " DT</td>
                <td><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierListProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 53), "idpanier" => (isset($context["idpanier"]) || array_key_exists("idpanier", $context) ? $context["idpanier"] : (function () { throw new RuntimeError('Variable "idpanier" does not exist.', 53, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 53, $this->source); })()), "idprod" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\"  class=\"btn btn-block btn-warning\" role=\"button\"  >change quantite</a></td>
                <td><a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteListProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 54), "idpanier" => (isset($context["idpanier"]) || array_key_exists("idpanier", $context) ? $context["idpanier"] : (function () { throw new RuntimeError('Variable "idpanier" does not exist.', 54, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 54, $this->source); })())]), "html", null, true);
                echo "\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>


                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 71, $this->source); })()), "prixTot", [], "any", false, false, false, 71), "html", null, true);
        echo " DT</dd>

                    <dt style=\"color: black\">TVA Totale :</dt>
                    <dd>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 74, $this->source); })()), "tvaTot", [], "any", false, false, false, 74), "html", null, true);
        echo " DT</dd>

                    <dt style=\"color: black\">Prix Totale :</dt>
                    <dd style=\"color: red\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 77, $this->source); })()), "prixFinale", [], "any", false, false, false, 77), "html", null, true);
        echo " DT</dd>

                </dl>

            </div>
        </div>
    </div>



    <!-- /.box-body -->
</div>


";
        // line 91
        $this->loadTemplate("tempFront2SoinMP.html.twig", "list_produit/AfficheClientListProduit.html.twig", 91)->display($context);
        
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
        return array (  197 => 91,  180 => 77,  174 => 74,  168 => 71,  148 => 58,  138 => 54,  134 => 53,  130 => 52,  126 => 51,  122 => 50,  118 => 49,  112 => 46,  108 => 45,  104 => 44,  99 => 43,  95 => 42,  91 => 41,  83 => 38,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempClient.html.twig' with{'iduser':iduser} %}

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
                <th>Modifier Quantite</th>
                <th>Supprimer quantite</th>




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


                <td>{{ l.qte }} pieces</td>
                <td>{{ l.tvaTot }} DT</td>
                <td>{{ l.prixTot}} DT</td>
                <td>{{ l.prixFinale}} DT</td>
                <td><a href=\"{{ path('modifierListProduit',{'id':l.id , 'idpanier':idpanier , 'iduser':iduser, 'idprod':p.id}) }}\"  class=\"btn btn-block btn-warning\" role=\"button\"  >change quantite</a></td>
                <td><a href=\"{{ path('deleteListProduit',{'id':l.id , 'idpanier':idpanier , 'iduser':iduser}) }}\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>


                {% endfor %}
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
