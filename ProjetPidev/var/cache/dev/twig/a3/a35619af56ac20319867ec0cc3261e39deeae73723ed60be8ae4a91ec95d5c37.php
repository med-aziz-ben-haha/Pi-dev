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

/* categorie_soin_mp/listCategoriesSoinMPs.html.twig */
class __TwigTemplate_617161746f73237406344e94a0922787addb3c95e99df5289f47ce5ae2c62dc8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_soin_mp/listCategoriesSoinMPs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_soin_mp/listCategoriesSoinMPs.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "categorie_soin_mp/listCategoriesSoinMPs.html.twig", 1)->display($context);
        // line 2
        echo "
<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"idMP\">Médecine Parallèle</h2>
           </div>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategorieSoinMPs"]) || array_key_exists("listCategorieSoinMPs", $context) ? $context["listCategorieSoinMPs"] : (function () { throw new RuntimeError('Variable "listCategorieSoinMPs" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["CSMP"]) {
            // line 10
            echo "            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><img style=\" padding-right: 2px; padding-left: 2px;  width:80px ; hight: 80px ;\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["CSMP"], "getLienIconeCSMP", [], "method", false, false, false, 12))), "html", null, true);
            echo "\"></div>
                    <h3 class=\"service-box-title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CSMP"], "libelleCategorieSoinMP", [], "any", false, false, false, 13), "html", null, true);
            echo "</h3>
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherSoinMPs", ["id" => twig_get_attribute($this->env, $this->source, $context["CSMP"], "getId", [], "method", false, false, false, 14)]), "html", null, true);
            echo "\" class=\"btn btn-main-outline mt-2\">Visiter<i class=\"fas fa-chevron-right\"></i></a>
            </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CSMP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </div>
</section>

";
        // line 21
        $this->loadTemplate("tempFront2SoinMP.html.twig", "categorie_soin_mp/listCategoriesSoinMPs.html.twig", 21)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "categorie_soin_mp/listCategoriesSoinMPs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  80 => 18,  70 => 14,  66 => 13,  62 => 12,  58 => 10,  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"idMP\">Médecine Parallèle</h2>
           </div>
            {% for CSMP in listCategorieSoinMPs %}
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><img style=\" padding-right: 2px; padding-left: 2px;  width:80px ; hight: 80px ;\" src=\"{{ asset('uploads/' ~ CSMP.getLienIconeCSMP())}}\"></div>
                    <h3 class=\"service-box-title\">{{ CSMP.libelleCategorieSoinMP }}</h3>
                    <a href=\"{{ path(\"afficherSoinMPs\",{'id':CSMP.getId() } ) }}\" class=\"btn btn-main-outline mt-2\">Visiter<i class=\"fas fa-chevron-right\"></i></a>
            </div>
            </div>
            {% endfor %}
        </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}
", "categorie_soin_mp/listCategoriesSoinMPs.html.twig", "C:\\Users\\eya\\Desktop\\Pi-dev\\ProjetPidev\\templates\\categorie_soin_mp\\listCategoriesSoinMPs.html.twig");
    }
}
