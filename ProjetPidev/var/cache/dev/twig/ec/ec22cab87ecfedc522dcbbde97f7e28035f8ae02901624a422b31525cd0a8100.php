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

/* user/ListMedecins.html.twig */
class __TwigTemplate_74d604d297ccc09e0ab37de93e1df9f2edb35542d6794db6d690be3207075e9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/ListMedecins.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/ListMedecins.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("temp1.html.twig", "user/ListMedecins.html.twig", 2)->display($context);
        // line 3
        echo "<style>
    button {
        color: #FFFFFF;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }
    button:hover {
        color: #FFFFFF;
        opacity: 0.8;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }
    button:active {
        color: #FFFFFF;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }

</style>
<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion des médecins</h1>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Photo de profil</th>
                <th>Id</th>
                <th>Login</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Sexe</th>
                <th>Matricule fiscale</th>
                <th>Spécialité</th>
                <th>Supprimer</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMedecins"]) || array_key_exists("listMedecins", $context) ? $context["listMedecins"] : (function () { throw new RuntimeError('Variable "listMedecins" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["P"]) {
            // line 51
            echo "
                <tr>
                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["P"], "getLienImageUser", [], "method", false, false, false, 53))), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "login", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "nom", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "prenom", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "email", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "adresseUser", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "telephone", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "sexe", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "matriculeFiscale", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "specialite", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                    <td><form action=\" ";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerMedecin", ["id" => twig_get_attribute($this->env, $this->source, $context["P"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo " \"><button>Supprimer</button></form></td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['P'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 74
        $this->loadTemplate("temp2.html.twig", "user/ListMedecins.html.twig", 74)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/ListMedecins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 74,  159 => 68,  149 => 64,  145 => 63,  141 => 62,  137 => 61,  133 => 60,  129 => 59,  125 => 58,  121 => 57,  117 => 56,  113 => 55,  109 => 54,  105 => 53,  101 => 51,  97 => 50,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% include 'temp1.html.twig' %}
<style>
    button {
        color: #FFFFFF;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }
    button:hover {
        color: #FFFFFF;
        opacity: 0.8;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }
    button:active {
        color: #FFFFFF;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }

</style>
<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion des médecins</h1>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Photo de profil</th>
                <th>Id</th>
                <th>Login</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Sexe</th>
                <th>Matricule fiscale</th>
                <th>Spécialité</th>
                <th>Supprimer</th>

            </tr>
            </thead>
            <tbody>
            {% for P in listMedecins %}

                <tr>
                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"{{ asset('uploads/' ~ P.getLienImageUser())}}\"></td>
                    <td>{{P.id}}</td>
                    <td>{{P.login}}</td>
                    <td>{{P.nom}}</td>
                    <td>{{P.prenom}}</td>
                    <td>{{P.email}}</td>
                    <td>{{P.adresseUser}}</td>
                    <td>{{P.telephone}}</td>
                    <td>{{P.sexe}}</td>
                    <td>{{P.matriculeFiscale}}</td>
                    <td>{{P.specialite}}</td>
                    <td><form action=\" {{path('supprimerMedecin',{id:P.id})}} \"><button>Supprimer</button></form></td>
                </tr>

            {% endfor %}
            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
{% include 'temp2.html.twig' %}
", "user/ListMedecins.html.twig", "C:\\Users\\Emna\\Desktop\\Pi-dev\\ProjetPidev\\templates\\user\\ListMedecins.html.twig");
    }
}
