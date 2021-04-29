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

/* medicament/Medicamentajout.html.twig */
class __TwigTemplate_5986fec0623d8191043f705bbccda1e0cc85abf4188ceb42cc191cec65dc1b41 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicament/Medicamentajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicament/Medicamentajout.html.twig"));

        // line 1
        $this->loadTemplate("templateAccueilPhar.html.twig", "medicament/Medicamentajout.html.twig", 1)->display($context);
        // line 2
        echo "
    <div class=\"container\">

        <div class=\"form-group\">
                ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <h1> Ajout Médicament </h1>
            <div class=\"form-group\">
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 9, $this->source); })()), "nomMedicament", [], "any", false, false, false, 9), 'label', ["label" => "Nom Médicament"]);
        echo "
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 10, $this->source); })()), "nomMedicament", [], "any", false, false, false, 10), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 13, $this->source); })()), "descmedicament", [], "any", false, false, false, 13), 'label', ["label" => "Description du medicament"]);
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 14, $this->source); })()), "descmedicament", [], "any", false, false, false, 14), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 17, $this->source); })()), "dispo", [], "any", false, false, false, 17), 'label', ["label" => "Disponibilité"]);
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 18, $this->source); })()), "dispo", [], "any", false, false, false, 18), 'widget');
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 22, $this->source); })()), "img_medicament", [], "any", false, false, false, 22), 'label', ["label" => "Image du médicament"]);
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 23, $this->source); })()), "img_medicament", [], "any", false, false, false, 23), 'widget');
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 27, $this->source); })()), "dateModif", [], "any", false, false, false, 27), 'label', ["label" => "Date de modification"]);
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 28, $this->source); })()), "dateModif", [], "any", false, false, false, 28), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 31, $this->source); })()), "captchaCode", [], "any", false, false, false, 31), 'label', ["label" => "Are you a robot ?"]);
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 32, $this->source); })()), "captchaCode", [], "any", false, false, false, 32), 'widget');
        echo "
            </div>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Medicamentajout"]) || array_key_exists("Medicamentajout", $context) ? $context["Medicamentajout"] : (function () { throw new RuntimeError('Variable "Medicamentajout" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
            </div>
    </div>
";
        // line 37
        $this->loadTemplate("tempFront2MO.html.twig", "medicament/Medicamentajout.html.twig", 37)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "medicament/Medicamentajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  118 => 34,  113 => 32,  109 => 31,  103 => 28,  99 => 27,  92 => 23,  88 => 22,  81 => 18,  77 => 17,  71 => 14,  67 => 13,  61 => 10,  57 => 9,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'templateAccueilPhar.html.twig'  %}

    <div class=\"container\">

        <div class=\"form-group\">
                {{ form_start( Medicamentajout,{'attr': {'novalidate': 'novalidate'}} ) }}
                <h1> Ajout Médicament </h1>
            <div class=\"form-group\">
                {{ form_label(Medicamentajout.nomMedicament,\"Nom Médicament\") }}
                {{ form_widget(Medicamentajout.nomMedicament) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(Medicamentajout.descmedicament,\"Description du medicament\") }}
                {{ form_widget(Medicamentajout.descmedicament) }}
            </div>
            <div class=\"form-group\">
                {{ form_label( Medicamentajout.dispo , \"Disponibilité\" )}}
                {{ form_widget( Medicamentajout.dispo ) }}
            </div>

            <div class=\"form-group\">
                {{ form_label( Medicamentajout.img_medicament , \"Image du médicament\" )}}
                {{ form_widget( Medicamentajout.img_medicament ) }}
            </div>

            <div class=\"form-group\">
                {{ form_label( Medicamentajout.dateModif, \"Date de modification\" )}}
                {{ form_widget( Medicamentajout.dateModif ) }}
            </div>
            <div class=\"form-group\">
                {{ form_label( Medicamentajout.captchaCode, \"Are you a robot ?\" )}}
                {{ form_widget( Medicamentajout.captchaCode ) }}
            </div>
            {{ form_end(Medicamentajout) }}
            </div>
    </div>
{% include 'tempFront2MO.html.twig' %}", "medicament/Medicamentajout.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\medicament\\Medicamentajout.html.twig");
    }
}
