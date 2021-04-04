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

/* ordonnance/Ordonnancemodifier.html.twig */
class __TwigTemplate_a1c828ca5dee9056e14d1e583b7c10b79e3b055550f063e4e50a9fd905bb8871 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ordonnance/Ordonnancemodifier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ordonnance/Ordonnancemodifier.html.twig"));

        // line 1
        $this->loadTemplate("templateAccueilMed.html.twig", "ordonnance/Ordonnancemodifier.html.twig", 1)->display($context);
        // line 2
        echo "

<div class=\"container\">
    <div class=\"form-group\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editordonnance"]) || array_key_exists("editordonnance", $context) ? $context["editordonnance"] : (function () { throw new RuntimeError('Variable "editordonnance" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
        <h1> Edit Ordonnance </h1>
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editordonnance"]) || array_key_exists("editordonnance", $context) ? $context["editordonnance"] : (function () { throw new RuntimeError('Variable "editordonnance" does not exist.', 9, $this->source); })()), "contenu_ord", [], "any", false, false, false, 9), 'label', ["label" => "Contenu ordonnance"]);
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editordonnance"]) || array_key_exists("editordonnance", $context) ? $context["editordonnance"] : (function () { throw new RuntimeError('Variable "editordonnance" does not exist.', 10, $this->source); })()), "contenu_ord", [], "any", false, false, false, 10), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editordonnance"]) || array_key_exists("editordonnance", $context) ? $context["editordonnance"] : (function () { throw new RuntimeError('Variable "editordonnance" does not exist.', 13, $this->source); })()), "date_ord", [], "any", false, false, false, 13), 'label', ["label" => "Date de saisie"]);
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editordonnance"]) || array_key_exists("editordonnance", $context) ? $context["editordonnance"] : (function () { throw new RuntimeError('Variable "editordonnance" does not exist.', 14, $this->source); })()), "date_ord", [], "any", false, false, false, 14), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editordonnance"]) || array_key_exists("editordonnance", $context) ? $context["editordonnance"] : (function () { throw new RuntimeError('Variable "editordonnance" does not exist.', 17, $this->source); })()), "medicament", [], "any", false, false, false, 17), 'label', ["label" => "Liste des médicament"]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editordonnance"]) || array_key_exists("editordonnance", $context) ? $context["editordonnance"] : (function () { throw new RuntimeError('Variable "editordonnance" does not exist.', 18, $this->source); })()), "medicament", [], "any", false, false, false, 18), 'widget');
        echo "
        </div>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editordonnance"]) || array_key_exists("editordonnance", $context) ? $context["editordonnance"] : (function () { throw new RuntimeError('Variable "editordonnance" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
        // line 23
        $this->loadTemplate("tempFront2MO.html.twig", "ordonnance/Ordonnancemodifier.html.twig", 23)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnance/Ordonnancemodifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  86 => 20,  81 => 18,  77 => 17,  71 => 14,  67 => 13,  61 => 10,  57 => 9,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'templateAccueilMed.html.twig'  %}


<div class=\"container\">
    <div class=\"form-group\">
        {{ form_start( editordonnance) }}
        <h1> Edit Ordonnance </h1>
        <div class=\"form-group\">
            {{ form_label( editordonnance.contenu_ord,\"Contenu ordonnance\") }}
            {{ form_widget(editordonnance.contenu_ord) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(editordonnance.date_ord,\"Date de saisie\") }}
            {{ form_widget(editordonnance.date_ord) }}
        </div>
        <div class=\"form-group\">
            {{ form_label( editordonnance.medicament, \"Liste des médicament\" )}}
            {{ form_widget( editordonnance.medicament ) }}
        </div>
        {{ form_end(editordonnance) }}
    </div>
</div>
{% include 'tempFront2MO.html.twig' %}", "ordonnance/Ordonnancemodifier.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\ordonnance\\Ordonnancemodifier.html.twig");
    }
}
