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

/* medicament/listmedicament.html.twig */
class __TwigTemplate_36e3522af195a7bfac01483c005db61254ac6003ba188d8fb759cd514a687f7e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicament/listmedicament.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicament/listmedicament.html.twig"));

        // line 1
        $this->loadTemplate("templateAccueilPhar.html.twig", "medicament/listmedicament.html.twig", 1)->display($context);
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
                <h2 class=\"section-title\" id=\"id\">Gestion des Médicaments</h2>
            </div>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            <table style=\"margin-top: 5% ; margin-bottom: 4% ; margin-left: 16%\">
                    <tr>
                        <td>
                            <form method=\"post\" action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherchemed");
        echo "\">
                                <label>Rechercher</label>
                                <input type=\"text\" name=\"search\"><input class=\"btn-primary\"  type=\"submit\" value=\"Recherche\">
                            </form>
                        </td>
                        <td>
                            <form action=\" ";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trimedicament");
        echo " \"><button  class=\"btn-primary\" >Trier medicament</button></form>
                        </td>
                        <td>
                            <form action=\" ";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Excel");
        echo " \"><button class=\"btn-primary\" >Exporter excel</button></form>
                        </td>
                        <td>
                            <form action=\" ";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PDF");
        echo " \"><button class=\"btn-primary\" >Imprimer</button></form>
                        </td>
                    </tr>
            </table>
                <table id=\"example1\" class=\"table table-bordered table-striped\" >
                    <tr>
                        <td>id</td>
                        <td> Nom du médicament </td>
                        <td> Description du médicament </td>
                        <td> Disponibilité </td>
                        <td> Image du medicament </td>
                        <td> Date de modification </td>
                        <td> Supprimer </td>
                        <td> Edit </td>
                    </tr>
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listmedicament"]) || array_key_exists("listmedicament", $context) ? $context["listmedicament"] : (function () { throw new RuntimeError('Variable "listmedicament" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 63
            echo "                        <tr>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nomMedicament", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                            <td> ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Descmedicament", [], "any", false, false, false, 66), "html", null, true);
            echo " </td>

                            ";
            // line 68
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["i"], "dispo", [], "any", false, false, false, 68), 1))) {
                // line 69
                echo "                                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/available.png"), "html", null, true);
                echo "\" alt=\"Disponible\"></td>
                            ";
            }
            // line 71
            echo "                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["i"], "dispo", [], "any", false, false, false, 71), 0))) {
                // line 72
                echo "                                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/nn available.png"), "html", null, true);
                echo "\" alt=\"Non disponible\"></td>
                            ";
            }
            // line 74
            echo "

                            <td><img style=\" padding-right: 2px; padding-left: 2px;  width:75px ; height: 75px ; \" src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["i"], "getImgMedicament", [], "method", false, false, false, 76))), "html", null, true);
            echo "\" alt=\"Image\"></td>
                            <td> ";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "dateModif", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
            echo " </td>

                            <td><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Medicamentremove", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" >Supprimer</a></td>
                            <td><a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Medicamentmodifier", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" >Editer</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </table>
                <a style=\"font-size: 20px\"; href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Medicamentajout");
        echo "\"><button class=\"btn-primary\" >Ajouter medicament</button></a>
        </div>
    </div>
    <div style=\"margin-left: 37.2%; margin-top: 5%;\">";
        // line 87
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["listmedicament"]) || array_key_exists("listmedicament", $context) ? $context["listmedicament"] : (function () { throw new RuntimeError('Variable "listmedicament" does not exist.', 87, $this->source); })()));
        echo "</div>
</section>

";
        // line 90
        $this->loadTemplate("tempFront2MO.html.twig", "medicament/listmedicament.html.twig", 90)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "medicament/listmedicament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 90,  204 => 87,  198 => 84,  195 => 83,  186 => 80,  182 => 79,  177 => 77,  173 => 76,  169 => 74,  163 => 72,  160 => 71,  154 => 69,  152 => 68,  147 => 66,  143 => 65,  139 => 64,  136 => 63,  132 => 62,  114 => 47,  108 => 44,  102 => 41,  93 => 35,  88 => 32,  79 => 29,  76 => 28,  72 => 27,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'templateAccueilPhar.html.twig'  %}
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
                <h2 class=\"section-title\" id=\"id\">Gestion des Médicaments</h2>
            </div>
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}
            <table style=\"margin-top: 5% ; margin-bottom: 4% ; margin-left: 16%\">
                    <tr>
                        <td>
                            <form method=\"post\" action=\"{{ path ('recherchemed') }}\">
                                <label>Rechercher</label>
                                <input type=\"text\" name=\"search\"><input class=\"btn-primary\"  type=\"submit\" value=\"Recherche\">
                            </form>
                        </td>
                        <td>
                            <form action=\" {{ path('trimedicament') }} \"><button  class=\"btn-primary\" >Trier medicament</button></form>
                        </td>
                        <td>
                            <form action=\" {{ path('Excel') }} \"><button class=\"btn-primary\" >Exporter excel</button></form>
                        </td>
                        <td>
                            <form action=\" {{ path('PDF') }} \"><button class=\"btn-primary\" >Imprimer</button></form>
                        </td>
                    </tr>
            </table>
                <table id=\"example1\" class=\"table table-bordered table-striped\" >
                    <tr>
                        <td>id</td>
                        <td> Nom du médicament </td>
                        <td> Description du médicament </td>
                        <td> Disponibilité </td>
                        <td> Image du medicament </td>
                        <td> Date de modification </td>
                        <td> Supprimer </td>
                        <td> Edit </td>
                    </tr>
                    {% for i in listmedicament %}
                        <tr>
                            <td>{{ i.id }}</td>
                            <td>{{ i.nomMedicament }}</td>
                            <td> {{ i.Descmedicament }} </td>

                            {% if i.dispo == 1 %}
                                <td><img src=\"{{ asset ('bundles/dist/img/available.png') }}\" alt=\"Disponible\"></td>
                            {% endif %}
                            {% if i.dispo == 0 %}
                                <td><img src=\"{{ asset ('bundles/dist/img/nn available.png') }}\" alt=\"Non disponible\"></td>
                            {% endif %}


                            <td><img style=\" padding-right: 2px; padding-left: 2px;  width:75px ; height: 75px ; \" src=\"{{ asset ('uploads/brochures/'~ i.getImgMedicament() ) }}\" alt=\"Image\"></td>
                            <td> {{ i.dateModif|date(\"d/m/Y\") }} </td>

                            <td><a href=\"{{ path('Medicamentremove',{'id':i.id} )}}\" >Supprimer</a></td>
                            <td><a href=\"{{ path('Medicamentmodifier',{'id':i.id} )}}\" >Editer</a></td>
                        </tr>
                    {% endfor %}
                </table>
                <a style=\"font-size: 20px\"; href=\"{{ path('Medicamentajout') }}\"><button class=\"btn-primary\" >Ajouter medicament</button></a>
        </div>
    </div>
    <div style=\"margin-left: 37.2%; margin-top: 5%;\">{{ knp_pagination_render(listmedicament) }}</div>
</section>

{% include 'tempFront2MO.html.twig' %}", "medicament/listmedicament.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\medicament\\listmedicament.html.twig");
    }
}
