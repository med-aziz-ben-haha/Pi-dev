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
class __TwigTemplate_423be802c7567cee8d70d68a4dd697eb3e8cd1217f197a44a1db939bcecaf61c extends Template
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


";
        // line 4
        $this->loadTemplate("tempFront1SoinMP.html.twig", "soin_mp/DetailSoinMPSnote.html.twig", 4)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 4, $this->source); })())]));
        // line 5
        echo "
<section class=\"feature-box-section hk-section section-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h2 class=\"mb-3 feature-box-title\" style=\"font-size:270%; color:#ee5057;\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 10, $this->source); })()), "titreSoinMP", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
                <div class=\"  align-items-center h-100\" style=\"width:120% !important; margin-top:15%;\">
                    <img  style=\"width:75% !important;\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 12, $this->source); })()), "getlienImageSMP", [], "method", false, false, false, 12))), "html", null, true);
        echo "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"feature-box\" style=\"font-size:100%;\">
                    <!--span class=\"feature-box-pre text-uppercase\">Community Supported</span-->
                    <div style=\"margin-left:55%;\">
                        ";
        // line 19
        $this->loadTemplate("soin_mp/moyenne.html.twig", "soin_mp/DetailSoinMPSnote.html.twig", 19)->display(twig_array_merge($context, ["moyenne" => (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 19, $this->source); })())]));
        // line 20
        echo "                    </div>
                    <p>Description:</p>
                    <p>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 22, $this->source); })()), "descriptionSoinMP", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                    <p>Adresse:</p>
                    <p>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 24, $this->source); })()), "adresseSoinMP", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
                    ";
        // line 25
        $this->loadTemplate("soin_mp/stars.html.twig", "soin_mp/DetailSoinMPSnote.html.twig", 25)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 25, $this->source); })()), "id" => twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "aviss" => (isset($context["aviss"]) || array_key_exists("aviss", $context) ? $context["aviss"] : (function () { throw new RuntimeError('Variable "aviss" does not exist.', 25, $this->source); })())]));
        // line 26
        echo "                    <div style=\"margin-left:15%; margin-top:2%;\">
                        <span class=\"b\"><p style=\"font-weight:bold; font-size:130%;\">Note Aide</p></span>

                        <span class=\"b\" >";
        // line 29
        $this->loadTemplate("soin_mp/moyenne.html.twig", "soin_mp/DetailSoinMPSnote.html.twig", 29)->display(twig_array_merge($context, ["moyenne" => (isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 29, $this->source); })())]));
        echo "</span>
                    </div>
                    <form action=\" ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 31, $this->source); })())]), "html", null, true);
        echo " \">
                        <button
                                    style=\"color: #FFFFFF;
                                    background-color: #ee5057;
                                    border-color: #ee5057;
                                    border-radius: 6px;
                                    padding: 8px;
                                    font-size:18px;
                                    margin-left:81.5%;\">Imprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 47
        $this->loadTemplate("tempFront2SoinMP.html.twig", "soin_mp/DetailSoinMPSnote.html.twig", 47)->display($context);
        // line 48
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
        return array (  120 => 48,  118 => 47,  99 => 31,  94 => 29,  89 => 26,  87 => 25,  83 => 24,  78 => 22,  74 => 20,  72 => 19,  62 => 12,  57 => 10,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


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
                    <form action=\" {{path('impression',{'id':DetailSoinMPs.id,'iduser':iduser})}} \">
                        <button
                                    style=\"color: #FFFFFF;
                                    background-color: #ee5057;
                                    border-color: #ee5057;
                                    border-radius: 6px;
                                    padding: 8px;
                                    font-size:18px;
                                    margin-left:81.5%;\">Imprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{% include 'tempFront2SoinMP.html.twig' %}








", "soin_mp/DetailSoinMPSnote.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\DetailSoinMPSnote.html.twig");
    }
}
