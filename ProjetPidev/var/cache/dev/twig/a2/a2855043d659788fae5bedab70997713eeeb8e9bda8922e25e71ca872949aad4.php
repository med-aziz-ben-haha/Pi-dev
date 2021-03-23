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

/* user/inscriptionParapharmacien.html.twig */
class __TwigTemplate_d2abafb69ef93b7aa57360ea1bbc7d77adbe7b946a5611ef76f43ab2794edbd9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inscriptionParapharmacien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inscriptionParapharmacien.html.twig"));

        // line 1
        $this->loadTemplate("tempFrontAccueil1.html.twig", "user/inscriptionParapharmacien.html.twig", 1)->display($context);
        // line 2
        echo "<div style =\"margin-left: 28%; margin-right: 28%;  border: solid 1px #EA3D48; padding:2%; border-radius: 30px; margin-bottom: 25px \">


    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #EA3D48 ;  \" > S'inscrire  </h1>

    ";
        // line 9
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 9, $this->source); })()), "login", [], "any", false, false, false, 9), 'label', ["label" => "Login"]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 10, $this->source); })()), "login", [], "any", false, false, false, 10), 'widget');
        echo "

    ";
        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 13, $this->source); })()), "mdp", [], "any", false, false, false, 13), 'label', ["label" => "Mot de passe"]);
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 14, $this->source); })()), "mdp", [], "any", false, false, false, 14), 'widget');
        echo "

    ";
        // line 17
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'label', ["label" => "Email "]);
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'widget');
        echo "

    ";
        // line 21
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'label', ["label" => "Nom"]);
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'widget');
        echo "

    ";
        // line 25
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'label', ["label" => "Prénom"]);
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), 'widget');
        echo "

    ";
        // line 29
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 29, $this->source); })()), "adresseUser", [], "any", false, false, false, 29), 'label', ["label" => "Adresse"]);
        echo "
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 30, $this->source); })()), "adresseUser", [], "any", false, false, false, 30), 'widget');
        echo "

    ";
        // line 33
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 33, $this->source); })()), "telephone", [], "any", false, false, false, 33), 'label', ["label" => "Telephone "]);
        echo "
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 34, $this->source); })()), "telephone", [], "any", false, false, false, 34), 'widget');
        echo "

    ";
        // line 37
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 37, $this->source); })()), "sexe", [], "any", false, false, false, 37), 'label', ["label" => "Sexe"]);
        echo "
    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 38, $this->source); })()), "sexe", [], "any", false, false, false, 38), 'widget');
        echo "

    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInscription"]) || array_key_exists("formInscription", $context) ? $context["formInscription"] : (function () { throw new RuntimeError('Variable "formInscription" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
</div>
";
        // line 42
        $this->loadTemplate("tempFrontAccueil2.html.twig", "user/inscriptionParapharmacien.html.twig", 42)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/inscriptionParapharmacien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  136 => 40,  131 => 38,  126 => 37,  121 => 34,  116 => 33,  111 => 30,  106 => 29,  101 => 26,  96 => 25,  91 => 22,  86 => 21,  81 => 18,  76 => 17,  71 => 14,  66 => 13,  61 => 10,  56 => 9,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFrontAccueil1.html.twig' %}
<div style =\"margin-left: 28%; margin-right: 28%;  border: solid 1px #EA3D48; padding:2%; border-radius: 30px; margin-bottom: 25px \">


    {{ form_start(formInscription,{'attr': {'novalidate': 'novalidate'}} ) }}
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #EA3D48 ;  \" > S'inscrire  </h1>

    {# { form_errors(formInscription.login) }#}
    {{ form_label(formInscription.login,\"Login\") }}
    {{ form_widget(formInscription.login) }}

    {# { form_errors(formInscription.mdp)}#}
    {{ form_label(formInscription.mdp,\"Mot de passe\") }}
    {{ form_widget(formInscription.mdp)}}

    {# { form_errors(formInscription.email)}#}
    {{ form_label(formInscription.email,\"Email \") }}
    {{ form_widget(formInscription.email)}}

    {# { form_errors(formInscription.nom)}#}
    {{ form_label(formInscription.nom,\"Nom\") }}
    {{ form_widget(formInscription.nom)}}

    {# { form_errors(formInscription.prenom) }#}
    {{ form_label(formInscription.prenom,\"Prénom\") }}
    {{ form_widget(formInscription.prenom) }}

    {# { form_errors(formInscription.adresseUser)}#}
    {{ form_label(formInscription.adresseUser,\"Adresse\") }}
    {{ form_widget(formInscription.adresseUser)}}

    {# { form_errors(formInscription.telephone)}#}
    {{ form_label(formInscription.telephone,\"Telephone \") }}
    {{ form_widget(formInscription.telephone)}}

    {# { form_errors(formInscription.sexe)}#}
    {{ form_label(formInscription.sexe,\"Sexe\") }}
    {{ form_widget(formInscription.sexe)}}

    {{ form_end(formInscription) }}
</div>
{% include 'tempFrontAccueil2.html.twig' %}", "user/inscriptionParapharmacien.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\user\\inscriptionParapharmacien.html.twig");
    }
}
