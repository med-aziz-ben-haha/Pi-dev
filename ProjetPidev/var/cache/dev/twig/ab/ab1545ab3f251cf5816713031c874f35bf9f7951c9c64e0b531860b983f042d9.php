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

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"hero-btns\" style=\"margin-top: 10%;\">
                        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjoutProduit", ["id" => (isset($context["idC"]) || array_key_exists("idC", $context) ? $context["idC"] : (function () { throw new RuntimeError('Variable "idC" does not exist.', 11, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 11, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-main\" role=\"button\">Ajouter Produit</a>
                    </div>
                </div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">
                    <div class=\"hero-btns\" style=\"margin-top: 10%;\">
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueilOnlineParapharmacien", ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 17, $this->source); })())]), "html", null, true);
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
                    <th>Image Produit</th>
                    <th>id</th>
                    <th>Nom Produit</th>
                    <th>Description</th>
                    <th>Quantite</th>
                    <th>Prix</th>
                    <th>Modifier Produit</th>
                    <th>Supprimer Produit</th>


                </tr>
                </thead>
                <tbody>
                <tr ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo ">

                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "getLienImgP", [], "any", false, false, false, 47))), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomProduit", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "quantiteProduit", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixProduit", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 53), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 53, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>

                    <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 55), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 55, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>







                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo ">




                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
</section>

";
        // line 76
        $this->loadTemplate("tempFront2SoinMP.html.twig", "produit/ListProd.html.twig", 76)->display($context);
        
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
        return array (  162 => 76,  147 => 63,  132 => 55,  127 => 53,  123 => 52,  119 => 51,  115 => 50,  111 => 49,  107 => 48,  103 => 47,  96 => 45,  65 => 17,  56 => 11,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"box\">
        <div class=\"box-header\">
            <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Produits </h1>

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"hero-btns\" style=\"margin-top: 10%;\">
                        <a href=\"{{ path('AjoutProduit',{'id':idC , 'iduser':iduser} ) }}\" class=\"btn btn-main\" role=\"button\">Ajouter Produit</a>
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
                    <th>Image Produit</th>
                    <th>id</th>
                    <th>Nom Produit</th>
                    <th>Description</th>
                    <th>Quantite</th>
                    <th>Prix</th>
                    <th>Modifier Produit</th>
                    <th>Supprimer Produit</th>


                </tr>
                </thead>
                <tbody>
                <tr {% for p in produit %}>

                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"{{ asset('uploads/' ~ p.getLienImgP)}}\"></td>
                    <td>{{ p.id }}</td>
                    <td>{{ p.nomProduit }}</td>
                    <td>{{ p.description }}</td>
                    <td>{{ p.quantiteProduit }}</td>
                    <td>{{ p.prixProduit }}</td>
                    <td><a href=\"{{ path('modifierProduit',{'id':p.id , 'iduser':iduser}) }}\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>

                    <td><a href=\"{{ path('deleteProduit',{'id':p.id ,'iduser':iduser}) }}\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>







                </tr {% endfor %}>




                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}", "produit/ListProd.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\produit\\ListProd.html.twig");
    }
}
