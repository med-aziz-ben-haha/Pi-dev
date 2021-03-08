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

/* soin_mp/DetailSoinMPSnote.html.twig */
class __TwigTemplate_c14d37d5923c1b4d8fcd91308cc7a1750afcae6c2a0e48b5dec520781a7295a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/DetailSoinMPSnote.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/DetailSoinMPSnote.html.twig"));

        // line 1
        echo "

<!--style>
    button {
        color: #FFFFFF;
        background-color: #ee5057;
        border-color: #ee5057;
        border-radius: 6px;
        padding: 8px;
        font-size:18px;
    }
    button:hover {
        color: #FFFFFF;
        opacity: 0.8;
        background-color: #ee5057;
        border-color: #ee5057;
        border-radius: 6px;
    }
    button:active {
        color: #FFFFFF;
        background-color: #ee5057;
        border-color: #ee5057;
        border-radius: 6px;
    }

</style-->


";
        // line 29
        $this->loadTemplate("tempFront1SoinMP.html.twig", "soin_mp/DetailSoinMPSnote.html.twig", 29)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 29, $this->source); })())]));
        // line 30
        echo "
<section class=\"feature-box-section hk-section section-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h2 class=\"mb-3 feature-box-title\" style=\"font-size:270%; color:#ee5057;\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 35, $this->source); })()), "titreSoinMP", [], "any", false, false, false, 35), "html", null, true);
        echo "</h2>
                <div class=\"  align-items-center h-100\" style=\"width:120% !important; margin-top:15%;\">
                    <img  style=\"width:75% !important;\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 37, $this->source); })()), "getlienImageSMP", [], "method", false, false, false, 37))), "html", null, true);
        echo "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"feature-box\" style=\"font-size:100%;\">
                    <!--span class=\"feature-box-pre text-uppercase\">Community Supported</span-->
                    <div style=\"margin-left:55%;\">
                        ";
        // line 44
        $this->loadTemplate("soin_mp/moyenne.html.twig", "soin_mp/DetailSoinMPSnote.html.twig", 44)->display(twig_array_merge($context, ["moyenne" => (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 44, $this->source); })())]));
        // line 45
        echo "                    </div>
                    <p>Description:</p>
                    <p>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 47, $this->source); })()), "descriptionSoinMP", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                    <p>Adresse:</p>
                    <p>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 49, $this->source); })()), "adresseSoinMP", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
                    ";
        // line 50
        $this->loadTemplate("soin_mp/stars.html.twig", "soin_mp/DetailSoinMPSnote.html.twig", 50)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 50, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "aviss" => (isset($context["aviss"]) || array_key_exists("aviss", $context) ? $context["aviss"] : (function () { throw new RuntimeError('Variable "aviss" does not exist.', 50, $this->source); })())]));
        // line 51
        echo "                    <div style=\"margin-left:15%; margin-top:2%;\">
                        <span class=\"b\"><p style=\"font-weight:bold; font-size:130%;\">Note Aide</p></span>
                        <span class=\"b\" >";
        // line 53
        $this->loadTemplate("soin_mp/moyenne.html.twig", "soin_mp/DetailSoinMPSnote.html.twig", 53)->display(twig_array_merge($context, ["moyenne" => (isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 53, $this->source); })())]));
        echo "</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 60
        $this->loadTemplate("tempFront2SoinMP.html.twig", "soin_mp/DetailSoinMPSnote.html.twig", 60)->display($context);
        // line 61
        echo "







";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "soin_mp/DetailSoinMPSnote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 61,  128 => 60,  118 => 53,  114 => 51,  112 => 50,  108 => 49,  103 => 47,  99 => 45,  97 => 44,  87 => 37,  82 => 35,  75 => 30,  73 => 29,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!--style>
    button {
        color: #FFFFFF;
        background-color: #ee5057;
        border-color: #ee5057;
        border-radius: 6px;
        padding: 8px;
        font-size:18px;
    }
    button:hover {
        color: #FFFFFF;
        opacity: 0.8;
        background-color: #ee5057;
        border-color: #ee5057;
        border-radius: 6px;
    }
    button:active {
        color: #FFFFFF;
        background-color: #ee5057;
        border-color: #ee5057;
        border-radius: 6px;
    }

</style-->


{% include 'tempFront1SoinMP.html.twig' with   { 'iduser': iduser }  %}

<section class=\"feature-box-section hk-section section-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h2 class=\"mb-3 feature-box-title\" style=\"font-size:270%; color:#ee5057;\">{{ DetailSoinMPs.titreSoinMP }}</h2>
                <div class=\"  align-items-center h-100\" style=\"width:120% !important; margin-top:15%;\">
                    <img  style=\"width:75% !important;\" src=\"{{ asset('uploads/'~ DetailSoinMPs.getlienImageSMP())}}\" alt=\"Image\">
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"feature-box\" style=\"font-size:100%;\">
                    <!--span class=\"feature-box-pre text-uppercase\">Community Supported</span-->
                    <div style=\"margin-left:55%;\">
                        {% include 'soin_mp/moyenne.html.twig'  with   {'moyenne' :note}  %}
                    </div>
                    <p>Description:</p>
                    <p>{{ DetailSoinMPs.descriptionSoinMP}}</p>
                    <p>Adresse:</p>
                    <p>{{ DetailSoinMPs.adresseSoinMP}}</p>
                    {% include 'soin_mp/stars.html.twig'  with   { 'iduser': iduser , 'id':DetailSoinMPs.id ,'aviss' :aviss }  %}
                    <div style=\"margin-left:15%; margin-top:2%;\">
                        <span class=\"b\"><p style=\"font-weight:bold; font-size:130%;\">Note Aide</p></span>
                        <span class=\"b\" >{% include 'soin_mp/moyenne.html.twig'  with   {'moyenne' :moyenne}  %}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% include 'tempFront2SoinMP.html.twig' %}








", "soin_mp/DetailSoinMPSnote.html.twig", "C:\\Users\\Emna\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\DetailSoinMPSnote.html.twig");
    }
}
