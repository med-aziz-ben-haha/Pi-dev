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

/* medicament/Front_listmedicament.html.twig */
class __TwigTemplate_bfbe450af2b9144d317addea7150c9c84695413559a4ae4169f59cbff4600f2c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicament/Front_listmedicament.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicament/Front_listmedicament.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1MO.html.twig", "medicament/Front_listmedicament.html.twig", 1)->display($context);
        // line 2
        echo "<style> .btn-primary {
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;

    }
    .btn-primary:hover {
        opacity: 0.8;
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
    }
    .btn-primary:active {
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
    }
</style>
<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"id\">Médicaments</h2>
            </div>
            <table style=\"margin-top: 5% ; margin-left: 16%\">
                <tr>
                    <td>
                        <form  method=\"post\" action=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherchemed2");
        echo "\">
                            <label>Rechercher</label>
                            <input type=\"text\" name=\"search\"><input class=\"btn-primary\"  type=\"submit\" value=\"Recherche\">
                        </form>
                    </td>
                </tr>
            </table>
            <table id=\"example1\" class=\"table table-bordered table-striped\" >
                <tr>
                    <td> Nom du médicament </td>
                    <td> Description du médicament </td>
                    <td> Disponibilité </td>
                    <td> Image du medicament </td>
                    <td> Date de modification </td>
                </tr>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frontlistmedicament"]) || array_key_exists("frontlistmedicament", $context) ? $context["frontlistmedicament"] : (function () { throw new RuntimeError('Variable "frontlistmedicament" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            echo "                    <tr>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nomMedicament", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Descmedicament", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>

                        ";
            // line 49
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["i"], "dispo", [], "any", false, false, false, 49), 1))) {
                // line 50
                echo "                            <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/available.png"), "html", null, true);
                echo "\" alt=\"Disponible\"></td>
                        ";
            }
            // line 52
            echo "
                        ";
            // line 53
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["i"], "dispo", [], "any", false, false, false, 53), 0))) {
                // line 54
                echo "                            <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/nn available.png"), "html", null, true);
                echo "\" alt=\"Non disponible\"></td>
                        ";
            }
            // line 56
            echo "
                        <td><img style=\" padding-right: 2px; padding-left: 2px;  width:75px ; height: 75px ; \" src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["i"], "getImgMedicament", [], "method", false, false, false, 57))), "html", null, true);
            echo "\" alt=\"Image\"></td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "dateModif", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </table>
        </div>
    </div>
    <div style=\"margin-left:1%; margin-top: 5%;\">";
        // line 64
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["frontlistmedicament"]) || array_key_exists("frontlistmedicament", $context) ? $context["frontlistmedicament"] : (function () { throw new RuntimeError('Variable "frontlistmedicament" does not exist.', 64, $this->source); })()));
        echo "</div>
</section>

";
        // line 67
        $this->loadTemplate("tempFront2MO.html.twig", "medicament/Front_listmedicament.html.twig", 67)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "medicament/Front_listmedicament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 67,  148 => 64,  143 => 61,  134 => 58,  130 => 57,  127 => 56,  121 => 54,  119 => 53,  116 => 52,  110 => 50,  108 => 49,  103 => 47,  99 => 46,  96 => 45,  92 => 44,  74 => 29,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1MO.html.twig' %}
<style> .btn-primary {
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;

    }
    .btn-primary:hover {
        opacity: 0.8;
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
    }
    .btn-primary:active {
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
    }
</style>
<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"id\">Médicaments</h2>
            </div>
            <table style=\"margin-top: 5% ; margin-left: 16%\">
                <tr>
                    <td>
                        <form  method=\"post\" action=\"{{ path ('recherchemed2') }}\">
                            <label>Rechercher</label>
                            <input type=\"text\" name=\"search\"><input class=\"btn-primary\"  type=\"submit\" value=\"Recherche\">
                        </form>
                    </td>
                </tr>
            </table>
            <table id=\"example1\" class=\"table table-bordered table-striped\" >
                <tr>
                    <td> Nom du médicament </td>
                    <td> Description du médicament </td>
                    <td> Disponibilité </td>
                    <td> Image du medicament </td>
                    <td> Date de modification </td>
                </tr>
                {% for i in frontlistmedicament %}
                    <tr>
                        <td>{{ i.nomMedicament }}</td>
                        <td>{{ i.Descmedicament }}</td>

                        {% if i.dispo == 1 %}
                            <td><img src=\"{{ asset ('bundles/dist/img/available.png') }}\" alt=\"Disponible\"></td>
                        {% endif %}

                        {% if i.dispo == 0 %}
                            <td><img src=\"{{ asset ('bundles/dist/img/nn available.png') }}\" alt=\"Non disponible\"></td>
                        {% endif %}

                        <td><img style=\" padding-right: 2px; padding-left: 2px;  width:75px ; height: 75px ; \" src=\"{{ asset ('uploads/brochures/'~ i.getImgMedicament() ) }}\" alt=\"Image\"></td>
                        <td>{{ i.dateModif|date(\"d/m/Y\") }}</td>
                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>
    <div style=\"margin-left:1%; margin-top: 5%;\">{{ knp_pagination_render(frontlistmedicament) }}</div>
</section>

{% include 'tempFront2MO.html.twig' %}", "medicament/Front_listmedicament.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\medicament\\Front_listmedicament.html.twig");
    }
}
