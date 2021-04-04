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

/* soin_mp/ajouterSoinMP.html.twig */
class __TwigTemplate_f41eba8691b82047c7b49e68155dea1d9b064f022c8b16c6d4d510ed7492cb15 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/ajouterSoinMP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/ajouterSoinMP.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "soin_mp/ajouterSoinMP.html.twig", 1)->display($context);
        // line 2
        echo "<div style =\"margin-left: 1%; padding-top: 5%\">


    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAjouterSoinMP"]) || array_key_exists("formAjouterSoinMP", $context) ? $context["formAjouterSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterSoinMP" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Ajouter Soin Médecine Parallèle  </h1>
    ";
        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAjouterSoinMP"]) || array_key_exists("formAjouterSoinMP", $context) ? $context["formAjouterSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterSoinMP" does not exist.', 8, $this->source); })()), "titreSoinMP", [], "any", false, false, false, 8), 'label', ["label" => "Titre"]);
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAjouterSoinMP"]) || array_key_exists("formAjouterSoinMP", $context) ? $context["formAjouterSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterSoinMP" does not exist.', 9, $this->source); })()), "titreSoinMP", [], "any", false, false, false, 9), 'widget');
        echo "

    ";
        // line 12
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAjouterSoinMP"]) || array_key_exists("formAjouterSoinMP", $context) ? $context["formAjouterSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterSoinMP" does not exist.', 12, $this->source); })()), "descriptionSoinMP", [], "any", false, false, false, 12), 'label', ["label" => "Description"]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAjouterSoinMP"]) || array_key_exists("formAjouterSoinMP", $context) ? $context["formAjouterSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterSoinMP" does not exist.', 13, $this->source); })()), "descriptionSoinMP", [], "any", false, false, false, 13), 'widget');
        echo "

    ";
        // line 16
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAjouterSoinMP"]) || array_key_exists("formAjouterSoinMP", $context) ? $context["formAjouterSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterSoinMP" does not exist.', 16, $this->source); })()), "adresseSoinMP", [], "any", false, false, false, 16), 'label', ["label" => "Adresse"]);
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAjouterSoinMP"]) || array_key_exists("formAjouterSoinMP", $context) ? $context["formAjouterSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterSoinMP" does not exist.', 17, $this->source); })()), "adresseSoinMP", [], "any", false, false, false, 17), 'widget');
        echo "

    ";
        // line 20
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAjouterSoinMP"]) || array_key_exists("formAjouterSoinMP", $context) ? $context["formAjouterSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterSoinMP" does not exist.', 20, $this->source); })()), "CategorieSoinMP", [], "any", false, false, false, 20), 'label', ["label" => "Catégorie"]);
        echo "
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAjouterSoinMP"]) || array_key_exists("formAjouterSoinMP", $context) ? $context["formAjouterSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterSoinMP" does not exist.', 21, $this->source); })()), "CategorieSoinMP", [], "any", false, false, false, 21), 'widget');
        echo "

    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAjouterSoinMP"]) || array_key_exists("formAjouterSoinMP", $context) ? $context["formAjouterSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterSoinMP" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
</div>
";
        // line 25
        $this->loadTemplate("temp2.html.twig", "soin_mp/ajouterSoinMP.html.twig", 25)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "soin_mp/ajouterSoinMP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  95 => 23,  90 => 21,  85 => 20,  80 => 17,  75 => 16,  70 => 13,  65 => 12,  60 => 9,  55 => 8,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}
<div style =\"margin-left: 1%; padding-top: 5%\">


    {{ form_start(formAjouterSoinMP,{'attr': {'novalidate': 'novalidate'}} ) }}
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Ajouter Soin Médecine Parallèle  </h1>
    {# { form_errors(formAjouterSoinMP.titreSoinMP) }#}
    {{ form_label(formAjouterSoinMP.titreSoinMP,\"Titre\") }}
    {{ form_widget(formAjouterSoinMP.titreSoinMP) }}

    {# { form_errors(formAjouterSoinMP.descriptionSoinMP)}#}
    {{ form_label(formAjouterSoinMP.descriptionSoinMP,\"Description\") }}
    {{ form_widget(formAjouterSoinMP.descriptionSoinMP)}}

    {# { form_errors(formAjouterSoinMP.adresseSoinMP)}#}
    {{ form_label(formAjouterSoinMP.adresseSoinMP,\"Adresse\") }}
    {{ form_widget(formAjouterSoinMP.adresseSoinMP)}}

    {# { form_errors(formAjouterSoinMP.CategorieSoinMP)}#}
    {{ form_label(formAjouterSoinMP.CategorieSoinMP,\"Catégorie\") }}
    {{ form_widget(formAjouterSoinMP.CategorieSoinMP)}}

    {{ form_end(formAjouterSoinMP) }}
</div>
{% include 'temp2.html.twig' %}", "soin_mp/ajouterSoinMP.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\ajouterSoinMP.html.twig");
    }
}
