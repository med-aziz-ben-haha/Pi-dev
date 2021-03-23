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

/* user/ListPatients.html.twig */
class __TwigTemplate_28faba4ee4392954abbb1f0068cc5a27041dc24bf7bc43e1f2044835290fcd34 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/ListPatients.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/ListPatients.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("temp1.html.twig", "user/ListPatients.html.twig", 2)->display($context);
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion des patients</h1>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Sexe</th>
                <th>Supprimer</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPatients"]) || array_key_exists("listPatients", $context) ? $context["listPatients"] : (function () { throw new RuntimeError('Variable "listPatients" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["P"]) {
            // line 48
            echo "
            <tr>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "login", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "nom", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "prenom", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "email", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "adresseUser", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "telephone", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["P"], "sexe", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td><form action=\" ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerPatient", ["id" => twig_get_attribute($this->env, $this->source, $context["P"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo " \"><button>Supprimer</button></form></td>
            </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['P'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 68
        $this->loadTemplate("temp2.html.twig", "user/ListPatients.html.twig", 68)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/ListPatients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 68,  144 => 62,  134 => 58,  130 => 57,  126 => 56,  122 => 55,  118 => 54,  114 => 53,  110 => 52,  106 => 51,  102 => 50,  98 => 48,  94 => 47,  48 => 3,  46 => 2,  43 => 1,);
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion des patients</h1>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Sexe</th>
                <th>Supprimer</th>

            </tr>
            </thead>
            <tbody>
            {% for P in listPatients %}

            <tr>
                <td>{{P.id}}</td>
                <td>{{P.login}}</td>
                <td>{{P.nom}}</td>
                <td>{{P.prenom}}</td>
                <td>{{P.email}}</td>
                <td>{{P.adresseUser}}</td>
                <td>{{P.telephone}}</td>
                <td>{{P.sexe}}</td>
                <td><form action=\" {{path('supprimerPatient',{id:P.id})}} \"><button>Supprimer</button></form></td>
            </tr>

            {% endfor %}
            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
{% include 'temp2.html.twig' %}
", "user/ListPatients.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\user\\ListPatients.html.twig");
    }
}
