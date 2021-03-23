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

/* panier/AfficheParapharmacienCommande.html.twig */
class __TwigTemplate_89365f75293e6f84d651015a7977eb8383f5be0f27c4150637e4759de85634ed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/AfficheParapharmacienCommande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/AfficheParapharmacienCommande.html.twig"));

        // line 1
        $this->loadTemplate("tempParapharmacien.html.twig", "panier/AfficheParapharmacienCommande.html.twig", 1)->display($context);
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Les Commandes </h1>
        <div class=\"col-sm-8\"></div>






    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>

                <th>Nom Client</th>
                <th>Prix des produits</th>
                <th>TVA</th>
                <th>Prix totale</th>
                <th>Affiche Panier</th>



            </tr>
            </thead>
            <tbody>
            <tr ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo ">


                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "user", [], "any", false, false, false, 59), "getNom", [], "any", false, false, false, 59), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "user", [], "any", false, false, false, 59), "getPrenom", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixTot", [], "any", false, false, false, 60), "html", null, true);
            echo " DT</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "tvaTot", [], "any", false, false, false, 61), "html", null, true);
            echo " DT</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixFinale", [], "any", false, false, false, 62), "html", null, true);
            echo " DT</td>
                <td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheParapharmacienListProduit", ["idpanier" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 63), "idpara" => twig_get_attribute($this->env, $this->source, (isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-outline-danger\" role=\"button\">Afficher Commande</a></td>

            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo ">
            </tbody>



        </table>
    </div>
    <!-- /.box-body -->
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "panier/AfficheParapharmacienCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 65,  142 => 63,  138 => 62,  134 => 61,  130 => 60,  124 => 59,  116 => 56,  78 => 21,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempParapharmacien.html.twig'  %}




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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Les Commandes </h1>
        <div class=\"col-sm-8\"></div>






    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>

                <th>Nom Client</th>
                <th>Prix des produits</th>
                <th>TVA</th>
                <th>Prix totale</th>
                <th>Affiche Panier</th>



            </tr>
            </thead>
            <tbody>
            <tr {% for p in panier %}>


                <td>{{ p.user.getNom }} {{ p.user.getPrenom }}</td>
                <td>{{ p.prixTot }} DT</td>
                <td>{{ p.tvaTot }} DT</td>
                <td>{{ p.prixFinale}} DT</td>
                <td><a href=\"{{ path('afficheParapharmacienListProduit',{'idpanier':p.id , 'idpara':parapharmacie.id}) }}\" class=\"btn btn-block btn-outline-danger\" role=\"button\">Afficher Commande</a></td>

            </tr {% endfor %}>
            </tbody>



        </table>
    </div>
    <!-- /.box-body -->
</div>", "panier/AfficheParapharmacienCommande.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\panier\\AfficheParapharmacienCommande.html.twig");
    }
}
