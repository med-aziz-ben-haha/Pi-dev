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

/* medicament/PDFmedicament.html.twig */
class __TwigTemplate_137fca15c1d9ef1358981685f0cd4d668420eed82143cdc93257cc887e2e141f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicament/PDFmedicament.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicament/PDFmedicament.html.twig"));

        // line 1
        echo "<h1>LISTE DES MEDICAMENT</h1>
<table border=\"1\">
    <tr>
        <td> ID </td>
        <td> Nom du médicament </td>
        <td> Description du médicament </td>
        <td> Disponibilité </td>
        <td> Date de modification </td>
    </tr>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PDFmedicament"]) || array_key_exists("PDFmedicament", $context) ? $context["PDFmedicament"] : (function () { throw new RuntimeError('Variable "PDFmedicament" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "        <tr>
            <td> ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo " </td>
            <td> ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nomMedicament", [], "any", false, false, false, 13), "html", null, true);
            echo " </td>
            <td> ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Descmedicament", [], "any", false, false, false, 14), "html", null, true);
            echo " </td>
            <td> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "dispo", [], "any", false, false, false, 15), "html", null, true);
            echo " </td>
            <td> ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "dateModif", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            echo " </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "medicament/PDFmedicament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>LISTE DES MEDICAMENT</h1>
<table border=\"1\">
    <tr>
        <td> ID </td>
        <td> Nom du médicament </td>
        <td> Description du médicament </td>
        <td> Disponibilité </td>
        <td> Date de modification </td>
    </tr>
    {% for i in PDFmedicament %}
        <tr>
            <td> {{ i.id }} </td>
            <td> {{ i.nomMedicament }} </td>
            <td> {{ i.Descmedicament }} </td>
            <td> {{ i.dispo }} </td>
            <td> {{ i.dateModif|date(\"d/m/Y\") }} </td>
        </tr>
    {% endfor %}
</table>", "medicament/PDFmedicament.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\medicament\\PDFmedicament.html.twig");
    }
}
