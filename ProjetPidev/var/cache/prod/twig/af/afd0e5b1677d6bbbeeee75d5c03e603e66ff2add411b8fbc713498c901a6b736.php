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
class __TwigTemplate_cc43f042e6977cc774f89f0cd7d74a3bc2237f3edf4946e2ee6696a984ee522e extends Template
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
        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "soin_mp/listSoinsMPs.html.twig", 1)->display($context);
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
        $context['_seq'] = twig_ensure_traversable(($context["listSoinsMPs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 10
            echo "                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"service-box text-center\">
                        <div class=\"service-box-icon\"><img style=\" padding-right: 2px; padding-left: 2px;  width:300px ; height: 200px ; \" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["S"], "getLienImageSMP", [], "method", false, false, false, 12))), "html", null, true);
            echo "\"></div>
                        <h3 class=\"service-box-title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "titreSoinMP", [], "any", false, false, false, 13), "html", null, true);
            echo "</h3>
                        <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "descriptionSoinMP", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
                        <p>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "adresseSoinMP", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                       <!--a href=\"#\" class=\"btn btn-main-outline mt-2\">Visiter<i class=\"fas fa-chevron-right\"></i></a-->
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>
</section>

";
        // line 24
        $this->loadTemplate("tempFront2SoinMP.html.twig", "soin_mp/listSoinsMPs.html.twig", 24)->display($context);
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
        return array (  85 => 24,  79 => 20,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 10,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "soin_mp/listSoinsMPs.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\listSoinsMPs.html.twig");
    }
}
