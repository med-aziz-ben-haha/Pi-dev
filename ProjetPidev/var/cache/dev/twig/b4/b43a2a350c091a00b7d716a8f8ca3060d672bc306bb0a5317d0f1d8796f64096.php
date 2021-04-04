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

/* soin_mp/DetailSoinMPS.html.twig */
class __TwigTemplate_23367324380250780f56d01a50ef508fab3b539ac07eb1eee1520ad393ec80a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/DetailSoinMPS.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/DetailSoinMPS.html.twig"));

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
        $this->loadTemplate("tempFront1SoinMP.html.twig", "soin_mp/DetailSoinMPS.html.twig", 29)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 29, $this->source); })())]));
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

                        <p>Description:</p>
                        <p>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 45, $this->source); })()), "descriptionSoinMP", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                        <p>Adresse:</p>
                        <p>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DetailSoinMPs"]) || array_key_exists("DetailSoinMPs", $context) ? $context["DetailSoinMPs"] : (function () { throw new RuntimeError('Variable "DetailSoinMPs" does not exist.', 47, $this->source); })()), "adresseSoinMP", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                        <img  src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("" . twig_get_attribute($this->env, $this->source, (isset($context["captcha"]) || array_key_exists("captcha", $context) ? $context["captcha"] : (function () { throw new RuntimeError('Variable "captcha" does not exist.', 48, $this->source); })()), "getLienImageCaptcha", [], "method", false, false, false, 48))), "html", null, true);
        echo "\">
                        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaptcha"]) || array_key_exists("formCaptcha", $context) ? $context["formCaptcha"] : (function () { throw new RuntimeError('Variable "formCaptcha" does not exist.', 49, $this->source); })()), 'form');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 55
        $this->loadTemplate("tempFront2SoinMP.html.twig", "soin_mp/DetailSoinMPS.html.twig", 55)->display($context);
        // line 56
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "soin_mp/DetailSoinMPS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 56,  120 => 55,  111 => 49,  107 => 48,  103 => 47,  98 => 45,  87 => 37,  82 => 35,  75 => 30,  73 => 29,  43 => 1,);
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

                        <p>Description:</p>
                        <p>{{ DetailSoinMPs.descriptionSoinMP}}</p>
                        <p>Adresse:</p>
                        <p>{{ DetailSoinMPs.adresseSoinMP}}</p>
                        <img  src=\"{{ asset('' ~ captcha.getLienImageCaptcha())}}\">
                        {{ form(formCaptcha) }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {% include 'tempFront2SoinMP.html.twig' %}


", "soin_mp/DetailSoinMPS.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\DetailSoinMPS.html.twig");
    }
}
