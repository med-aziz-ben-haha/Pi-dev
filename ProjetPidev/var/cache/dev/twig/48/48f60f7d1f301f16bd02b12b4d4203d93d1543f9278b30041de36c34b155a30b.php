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

/* parapharmacie/FrontClientPara.html.twig */
class __TwigTemplate_ac754e1ef22b643230c589a3cc70abc8a6fb6930a38e31d6ade776101053dc77 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parapharmacie/FrontClientPara.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parapharmacie/FrontClientPara.html.twig"));

        // line 1
        $this->loadTemplate("tempClient.html.twig", "parapharmacie/FrontClientPara.html.twig", 1)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 1, $this->source); })())]));
        // line 2
        echo "
<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" >Parapharmacie</h2>
            </div>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 10
            echo "                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"service-box text-center\">
                        <div class=\"service-box-icon\"><img style=\"  ;  width:100% ; hight: 100% ;\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "getLienImageP", [], "any", false, false, false, 12))), "html", null, true);
            echo "\"></div>
                        <h3 class=\"service-box-title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomPara", [], "any", false, false, false, 13), "html", null, true);
            echo "</h3>
                        <h5 class=\"service-box-title\">Region: ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "region", [], "any", false, false, false, 14), "region", [], "any", false, false, false, 14), "html", null, true);
            echo "</h5>
                        <h5 class=\"service-box-title\">Adresse: ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "adressePara", [], "any", false, false, false, 15), "html", null, true);
            echo "</h5>
                        <h5 class=\"service-box-title\">Tel°: ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "telPara", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheClienCategorieProd", ["idpara" => twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "method", false, false, false, 17), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 17, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-main-outline mt-2\">Visiter<i class=\"fas fa-chevron-right\"></i></a>


                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        </div>
</section>

";
        // line 27
        $this->loadTemplate("tempFront2SoinMP.html.twig", "parapharmacie/FrontClientPara.html.twig", 27)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "parapharmacie/FrontClientPara.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  94 => 23,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 10,  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempClient.html.twig' with{'iduser':iduser} %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" >Parapharmacie</h2>
            </div>
            {% for p in parapharmacie %}
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"service-box text-center\">
                        <div class=\"service-box-icon\"><img style=\"  ;  width:100% ; hight: 100% ;\" src=\"{{ asset('uploads/' ~ p.getLienImageP)}}\"></div>
                        <h3 class=\"service-box-title\">{{ p.nomPara }}</h3>
                        <h5 class=\"service-box-title\">Region: {{ p.region.region }}</h5>
                        <h5 class=\"service-box-title\">Adresse: {{ p.adressePara }}</h5>
                        <h5 class=\"service-box-title\">Tel°: {{ p.telPara }}</h5>
                        <a href=\"{{ path(\"afficheClienCategorieProd\",{'idpara':p.getId() , 'iduser':iduser } ) }}\" class=\"btn btn-main-outline mt-2\">Visiter<i class=\"fas fa-chevron-right\"></i></a>


                    </div>
                </div>
            {% endfor %}

        </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}", "parapharmacie/FrontClientPara.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\parapharmacie\\FrontClientPara.html.twig");
    }
}
