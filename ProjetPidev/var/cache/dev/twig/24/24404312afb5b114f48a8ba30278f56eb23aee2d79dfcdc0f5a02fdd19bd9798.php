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

/* soin_mp/mypdf.html.twig */
class __TwigTemplate_3d7862ca4c4dc7d71ce9eecb0f1b1db8e3def9bea8222012095ba380f37d0c34 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/mypdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/mypdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <style>
        table, td, th {
            border: 1px solid black;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        .titles{
            text-align: left;
        }
    </style>
</head>
<body>

<h1 style=\"text-align: center; margin-bottom: 5%; color:#EA3D48;\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["soin"]) || array_key_exists("soin", $context) ? $context["soin"] : (function () { throw new RuntimeError('Variable "soin" does not exist.', 19, $this->source); })()), "titreSoinMP", [], "any", false, false, false, 19), "html", null, true);
        echo "</h1>
<table>
    <tr>
        <th class=\"titles\">Categorie</th>
        <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["soin"]) || array_key_exists("soin", $context) ? $context["soin"] : (function () { throw new RuntimeError('Variable "soin" does not exist.', 23, $this->source); })()), "getCategorieSoinMP", [], "method", false, false, false, 23), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th class=\"titles\">Description</th>
        <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["soin"]) || array_key_exists("soin", $context) ? $context["soin"] : (function () { throw new RuntimeError('Variable "soin" does not exist.', 27, $this->source); })()), "descriptionSoinMP", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th class=\"titles\">Adresse</th>
        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["soin"]) || array_key_exists("soin", $context) ? $context["soin"] : (function () { throw new RuntimeError('Variable "soin" does not exist.', 31, $this->source); })()), "adresseSoinMP", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
    </tr>
</table>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "soin_mp/mypdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  77 => 27,  70 => 23,  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <style>
        table, td, th {
            border: 1px solid black;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        .titles{
            text-align: left;
        }
    </style>
</head>
<body>

<h1 style=\"text-align: center; margin-bottom: 5%; color:#EA3D48;\">{{ soin.titreSoinMP }}</h1>
<table>
    <tr>
        <th class=\"titles\">Categorie</th>
        <td>{{ soin.getCategorieSoinMP()}}</td>
    </tr>
    <tr>
        <th class=\"titles\">Description</th>
        <td>{{ soin.descriptionSoinMP}}</td>
    </tr>
    <tr>
        <th class=\"titles\">Adresse</th>
        <td>{{ soin.adresseSoinMP}}</td>
    </tr>
</table>

</body>
</html>
", "soin_mp/mypdf.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\mypdf.html.twig");
    }
}
