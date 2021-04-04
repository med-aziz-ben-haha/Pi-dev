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

/* list_produit/AfficheParapharmacienListProduit.html.twig */
class __TwigTemplate_7a3fd85b71e73ad6dea7a9396e07bcc62690fd692ed9f6be637a7e45caddc15b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list_produit/AfficheParapharmacienListProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list_produit/AfficheParapharmacienListProduit.html.twig"));

        // line 1
        $this->loadTemplate("templateAccueilPara.html.twig", "list_produit/AfficheParapharmacienListProduit.html.twig", 1)->display($context);
        // line 2
        echo "



<h1 style =\"margin-bottom: 2%; text-align:center; color: #EA3D48 ;\" > Espace Parapharmacien  </h1>

<section class=\"hero-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                <div class=\"hero-content\">
                    <h3 style=\" color: #EA3D48; margin-top: 10%;\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 13, $this->source); })()), "nomPara", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
                    <h5>Region:";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 14, $this->source); })()), "region", [], "any", false, false, false, 14), "region", [], "any", false, false, false, 14), "html", null, true);
        echo "</h5>
                    <h5>Adresse:";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 15, $this->source); })()), "adressePara", [], "any", false, false, false, 15), "html", null, true);
        echo "</h5>
                    <h5>Numero Tel:";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 16, $this->source); })()), "telPara", [], "any", false, false, false, 16), "html", null, true);
        echo "</h5>
                </div>
            </div>
            <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                <div class=\"hero-image d-flex align-items-center h-100\">
                    <img src= \"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 21, $this->source); })()), "getLienImageP", [], "any", false, false, false, 21))), "html", null, true);
        echo "\" >
                </div>
            </div>
        </div>
    </div>
</section>

<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Commande </h1>
        <div class=\"col-sm-8\"></div>






    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table  table-striped table-hover\">
            <thead>
            <tr>

                <th>Nom Client</th>
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
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listProduit"]) || array_key_exists("listProduit", $context) ? $context["listProduit"] : (function () { throw new RuntimeError('Variable "listProduit" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            echo ">


                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "user", [], "any", false, false, false, 65), "getNom", [], "any", false, false, false, 65), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "user", [], "any", false, false, false, 65), "getPrenom", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["l"], "produit", [], "any", false, false, false, 66));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 67
                echo "                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "getLienImgP", [], "any", false, false, false, 67))), "html", null, true);
                echo "\"></td>
                    <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProduit", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                    <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getPrixProduit", [], "any", false, false, false, 69), "html", null, true);
                echo " DT</td>
                    <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getTva", [], "any", false, false, false, 70), "html", null, true);
                echo " %</td>


                    <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "qte", [], "any", false, false, false, 73), "html", null, true);
                echo " pieces</td>
                    <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "tvaTot", [], "any", false, false, false, 74), "html", null, true);
                echo " DT</td>
                    <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prixTot", [], "any", false, false, false, 75), "html", null, true);
                echo " DT</td>
                    <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prixFinale", [], "any", false, false, false, 76), "html", null, true);
                echo " DT</td>


                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
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
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 93, $this->source); })()), "prixTot", [], "any", false, false, false, 93), "html", null, true);
        echo " DT</dd>

                    <dt style=\"color: black\">TVA Totale :</dt>
                    <dd>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 96, $this->source); })()), "tvaTot", [], "any", false, false, false, 96), "html", null, true);
        echo " DT</dd>

                    <dt style=\"color: black\">Prix Totale :</dt>
                    <dd style=\"color: red\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 99, $this->source); })()), "prixFinale", [], "any", false, false, false, 99), "html", null, true);
        echo " DT</dd>

                </dl>
                <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listp", ["idpanier" => twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102), "idpara" => twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]), "html", null, true);
        echo "\" class=\"btn btn-block btn-outline-danger\" role=\"button\">Imprimer Commande</a>
            </div>
        </div>
    </div>



    <!-- /.box-body -->
</div>


";
        // line 113
        $this->loadTemplate("tempFront2SoinMP.html.twig", "list_produit/AfficheParapharmacienListProduit.html.twig", 113)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "list_produit/AfficheParapharmacienListProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 113,  219 => 102,  213 => 99,  207 => 96,  201 => 93,  181 => 80,  171 => 76,  167 => 75,  163 => 74,  159 => 73,  153 => 70,  149 => 69,  145 => 68,  140 => 67,  136 => 66,  130 => 65,  122 => 62,  78 => 21,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'templateAccueilPara.html.twig'  %}




<h1 style =\"margin-bottom: 2%; text-align:center; color: #EA3D48 ;\" > Espace Parapharmacien  </h1>

<section class=\"hero-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                <div class=\"hero-content\">
                    <h3 style=\" color: #EA3D48; margin-top: 10%;\">{{ parapharmacie.nomPara }}</h3>
                    <h5>Region:{{ parapharmacie.region.region }}</h5>
                    <h5>Adresse:{{ parapharmacie.adressePara }}</h5>
                    <h5>Numero Tel:{{ parapharmacie.telPara }}</h5>
                </div>
            </div>
            <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                <div class=\"hero-image d-flex align-items-center h-100\">
                    <img src= \"{{ asset('uploads/' ~ parapharmacie.getLienImageP)}}\" >
                </div>
            </div>
        </div>
    </div>
</section>

<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Commande </h1>
        <div class=\"col-sm-8\"></div>






    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table  table-striped table-hover\">
            <thead>
            <tr>

                <th>Nom Client</th>
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


                <td>{{ l.user.getNom }} {{ l.user.getPrenom }}</td>
                {% for p in l.produit %}
                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"{{ asset('uploads/' ~ p.getLienImgP)}}\"></td>
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
                <a href=\"{{ path('listp',{'idpanier':panier.id , 'idpara':parapharmacie.id}) }}\" class=\"btn btn-block btn-outline-danger\" role=\"button\">Imprimer Commande</a>
            </div>
        </div>
    </div>



    <!-- /.box-body -->
</div>


{% include 'tempFront2SoinMP.html.twig' %}", "list_produit/AfficheParapharmacienListProduit.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\list_produit\\AfficheParapharmacienListProduit.html.twig");
    }
}
