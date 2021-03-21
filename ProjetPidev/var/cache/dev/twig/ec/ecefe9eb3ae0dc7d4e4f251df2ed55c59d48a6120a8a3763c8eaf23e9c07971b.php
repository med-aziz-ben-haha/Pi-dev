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

/* soin_mp/modifierSoinMP.html.twig */
class __TwigTemplate_dd5b2ea1b2c39bccf082f4781b8d84e6acb72236c6d4cd2b6c2574a9eabaaf29 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/modifierSoinMP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/modifierSoinMP.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "soin_mp/modifierSoinMP.html.twig", 1)->display($context);
        // line 2
        echo "<div style =\"margin-left: 1%; padding-top: 5%\">

    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formModifierSoinMP"]) || array_key_exists("formModifierSoinMP", $context) ? $context["formModifierSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierSoinMP" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Modifier Soin Médecine Parallèle  </h1>
    ";
        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierSoinMP"]) || array_key_exists("formModifierSoinMP", $context) ? $context["formModifierSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierSoinMP" does not exist.', 8, $this->source); })()), "titreSoinMP", [], "any", false, false, false, 8), 'label', ["label" => "Titre"]);
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierSoinMP"]) || array_key_exists("formModifierSoinMP", $context) ? $context["formModifierSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierSoinMP" does not exist.', 9, $this->source); })()), "titreSoinMP", [], "any", false, false, false, 9), 'widget');
        echo "

    ";
        // line 12
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierSoinMP"]) || array_key_exists("formModifierSoinMP", $context) ? $context["formModifierSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierSoinMP" does not exist.', 12, $this->source); })()), "descriptionSoinMP", [], "any", false, false, false, 12), 'label', ["label" => "Description"]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierSoinMP"]) || array_key_exists("formModifierSoinMP", $context) ? $context["formModifierSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierSoinMP" does not exist.', 13, $this->source); })()), "descriptionSoinMP", [], "any", false, false, false, 13), 'widget');
        echo "

    ";
        // line 16
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierSoinMP"]) || array_key_exists("formModifierSoinMP", $context) ? $context["formModifierSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierSoinMP" does not exist.', 16, $this->source); })()), "adresseSoinMP", [], "any", false, false, false, 16), 'label', ["label" => "Adresse"]);
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierSoinMP"]) || array_key_exists("formModifierSoinMP", $context) ? $context["formModifierSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierSoinMP" does not exist.', 17, $this->source); })()), "adresseSoinMP", [], "any", false, false, false, 17), 'widget');
        echo "

    ";
        // line 20
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierSoinMP"]) || array_key_exists("formModifierSoinMP", $context) ? $context["formModifierSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierSoinMP" does not exist.', 20, $this->source); })()), "CategorieSoinMP", [], "any", false, false, false, 20), 'label', ["label" => "Catégorie"]);
        echo "
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierSoinMP"]) || array_key_exists("formModifierSoinMP", $context) ? $context["formModifierSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierSoinMP" does not exist.', 21, $this->source); })()), "CategorieSoinMP", [], "any", false, false, false, 21), 'widget');
        echo "

    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formModifierSoinMP"]) || array_key_exists("formModifierSoinMP", $context) ? $context["formModifierSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierSoinMP" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
</div>
";
        // line 25
        $this->loadTemplate("temp2.html.twig", "soin_mp/modifierSoinMP.html.twig", 25)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "soin_mp/modifierSoinMP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  95 => 23,  90 => 21,  85 => 20,  80 => 17,  75 => 16,  70 => 13,  65 => 12,  60 => 9,  55 => 8,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}
<div style =\"margin-left: 1%; padding-top: 5%\">

    {{ form_start(formModifierSoinMP,{'attr': {'novalidate': 'novalidate'}} ) }}

    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Modifier Soin Médecine Parallèle  </h1>
    {# { form_errors(formModifierSoinMP.titreSoinMP) }#}
    {{ form_label(formModifierSoinMP.titreSoinMP,\"Titre\") }}
    {{ form_widget(formModifierSoinMP.titreSoinMP) }}

    {# { form_errors(formModifierSoinMP.descriptionSoinMP)}#}
    {{ form_label(formModifierSoinMP.descriptionSoinMP,\"Description\") }}
    {{ form_widget(formModifierSoinMP.descriptionSoinMP)}}

    {# { form_errors(formModifierSoinMP.adresseSoinMP)}#}
    {{ form_label(formModifierSoinMP.adresseSoinMP,\"Adresse\") }}
    {{ form_widget(formModifierSoinMP.adresseSoinMP)}}

    {# { form_errors(formModifierSoinMP.CategorieSoinMP)}#}
    {{ form_label(formModifierSoinMP.CategorieSoinMP,\"Catégorie\") }}
    {{ form_widget(formModifierSoinMP.CategorieSoinMP)}}

    {{ form_end(formModifierSoinMP) }}
</div>
{% include 'temp2.html.twig' %}", "soin_mp/modifierSoinMP.html.twig", "C:\\Users\\eya\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\modifierSoinMP.html.twig");
    }
}
