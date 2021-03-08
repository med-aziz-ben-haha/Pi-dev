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

/* soin_mp/listSoinsMPs.html.twig */
class __TwigTemplate_1a98be05aa2ccf52863972a8ac44b929b4c2565b3dbe1c28accf241fd99c6a97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/listSoinsMPs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/listSoinsMPs.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "soin_mp/listSoinsMPs.html.twig", 1)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 1, $this->source); })())]));
        // line 2
        echo "
<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"idMP\">Médecine Parallèle</h2>
                <div style=\"width:80%; margin-left:10%; margin-top:3%;\">";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 8, $this->source); })()), 'form', ["attr" => ["novalidate" => "novalidate"]]);
        echo "</div>
            </div>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSoinsMPs"]) || array_key_exists("listSoinsMPs", $context) ? $context["listSoinsMPs"] : (function () { throw new RuntimeError('Variable "listSoinsMPs" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 11
            echo "                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"service-box text-center\">
                        <div class=\"service-box-icon\"><img style=\" padding-right: 2px; padding-left: 2px;  width:300px ; height: 200px ; \" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["S"], "getLienImageSMP", [], "method", false, false, false, 13))), "html", null, true);
            echo "\"></div>
                        <h3 class=\"service-box-title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "titreSoinMP", [], "any", false, false, false, 14), "html", null, true);
            echo "</h3>
                        <p>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "descriptionSoinMP", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                        <p>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "adresseSoinMP", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
                        <a  href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherDetailSoinMPs", ["id" => twig_get_attribute($this->env, $this->source, $context["S"], "getId", [], "method", false, false, false, 17), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 17, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-main-outline mt-2\">Consulter<i class=\"fas fa-chevron-right\"></i></a>

                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
    </div>
</section>

";
        // line 26
        $this->loadTemplate("tempFront2SoinMP.html.twig", "soin_mp/listSoinsMPs.html.twig", 26)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "soin_mp/listSoinsMPs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  93 => 22,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 11,  58 => 10,  53 => 8,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' with { 'iduser' :iduser } %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"idMP\">Médecine Parallèle</h2>
                <div style=\"width:80%; margin-left:10%; margin-top:3%;\">{{ form(formSearch,{'attr': {'novalidate': 'novalidate'}}) }}</div>
            </div>
            {% for S in listSoinsMPs %}
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"service-box text-center\">
                        <div class=\"service-box-icon\"><img style=\" padding-right: 2px; padding-left: 2px;  width:300px ; height: 200px ; \" src=\"{{ asset('uploads/' ~ S.getLienImageSMP())}}\"></div>
                        <h3 class=\"service-box-title\">{{ S.titreSoinMP }}</h3>
                        <p>{{ S.descriptionSoinMP}}</p>
                        <p>{{ S.adresseSoinMP}}</p>
                        <a  href=\"{{ path(\"afficherDetailSoinMPs\",{'id':S.getId(), 'iduser': iduser } ) }}\" class=\"btn btn-main-outline mt-2\">Consulter<i class=\"fas fa-chevron-right\"></i></a>

                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}
", "soin_mp/listSoinsMPs.html.twig", "C:\\Users\\Emna\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\listSoinsMPs.html.twig");
    }
}
