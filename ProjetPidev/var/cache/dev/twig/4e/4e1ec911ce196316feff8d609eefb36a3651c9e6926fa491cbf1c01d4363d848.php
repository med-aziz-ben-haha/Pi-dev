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

/* list_produit/listp.html.twig */
class __TwigTemplate_838d1c0f9fed4b2da054eed7327f95e87bcd21fbe05392758e2a1aa58c921855 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list_produit/listp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list_produit/listp.html.twig"));

        // line 1
        echo "





<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" align=\"center\" > Commande </h1>
        <div class=\"col-sm-8\"></div>






    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table  table-striped table-hover\">
            <thead>
            <tr>

                <th>Nom Client</th>

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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listProduit"]) || array_key_exists("listProduit", $context) ? $context["listProduit"] : (function () { throw new RuntimeError('Variable "listProduit" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            echo ">


                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "user", [], "any", false, false, false, 44), "getNom", [], "any", false, false, false, 44), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "user", [], "any", false, false, false, 44), "getPrenom", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["l"], "produit", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 46
                echo "
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProduit", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getPrixProduit", [], "any", false, false, false, 48), "html", null, true);
                echo " DT</td>
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getTva", [], "any", false, false, false, 49), "html", null, true);
                echo " %</td>


                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "qte", [], "any", false, false, false, 52), "html", null, true);
                echo " pieces</td>
                    <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "tvaTot", [], "any", false, false, false, 53), "html", null, true);
                echo " DT</td>
                    <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prixTot", [], "any", false, false, false, 54), "html", null, true);
                echo " DT</td>
                    <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prixFinale", [], "any", false, false, false, 55), "html", null, true);
                echo " DT</td>


                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
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
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 72, $this->source); })()), "prixTot", [], "any", false, false, false, 72), "html", null, true);
        echo " DT</dd>

                    <dt style=\"color: black\">TVA Totale :</dt>
                    <dd>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 75, $this->source); })()), "tvaTot", [], "any", false, false, false, 75), "html", null, true);
        echo " DT</dd>

                    <dt style=\"color: black\">Prix Totale :</dt>
                    <dd style=\"color: red\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 78, $this->source); })()), "prixFinale", [], "any", false, false, false, 78), "html", null, true);
        echo " DT</dd>

                </dl>

            </div>
        </div>
    </div>



    <!-- /.box-body -->
</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "list_produit/listp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 78,  168 => 75,  162 => 72,  142 => 59,  132 => 55,  128 => 54,  124 => 53,  120 => 52,  114 => 49,  110 => 48,  106 => 47,  103 => 46,  99 => 45,  93 => 44,  85 => 41,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("





<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" align=\"center\" > Commande </h1>
        <div class=\"col-sm-8\"></div>






    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table  table-striped table-hover\">
            <thead>
            <tr>

                <th>Nom Client</th>

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


                <td>{{ l.user.getNom }} {{ l.user.getPrenom }}</td>
                {% for p in l.produit %}

                    <td>{{p.nomProduit}}</td>
                    <td>{{ p.getPrixProduit}} DT</td>
                    <td>{{ p.getTva}} %</td>


                    <td>{{ l.qte }} pieces</td>
                    <td>{{ l.tvaTot }} DT</td>
                    <td>{{ l.prixTot}} DT</td>
                    <td>{{ l.prixFinale}} DT</td>


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


", "list_produit/listp.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\list_produit\\listp.html.twig");
    }
}
