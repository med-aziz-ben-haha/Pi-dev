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

/* user/inscriptionVerif.html.twig */
class __TwigTemplate_557acf112cb498129cab1d7c54dbc386d7ba56e2a199fcf60a141ddb673cd910 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inscriptionVerif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inscriptionVerif.html.twig"));

        // line 1
        $this->loadTemplate("tempFrontAccueil1.html.twig", "user/inscriptionVerif.html.twig", 1)->display($context);
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 3
            echo "    <div class=\"alert alert-success\" style=\"background-color: #e79595; color:black;\">
        ";
            // line 4
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
<div style =\"margin-left: 28%; margin-right: 28%;  border: solid 1px #EA3D48; padding:2%; border-radius: 30px; margin-bottom: 25px \">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formverif"]) || array_key_exists("formverif", $context) ? $context["formverif"] : (function () { throw new RuntimeError('Variable "formverif" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<h1 style =\"margin-bottom: 2%; text-align: center; color: #EA3D48 ;  \" > Verification  </h1>

";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formverif"]) || array_key_exists("formverif", $context) ? $context["formverif"] : (function () { throw new RuntimeError('Variable "formverif" does not exist.', 12, $this->source); })()), "verif", [], "any", false, false, false, 12), 'label', ["label" => "inserer le code verification"]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formverif"]) || array_key_exists("formverif", $context) ? $context["formverif"] : (function () { throw new RuntimeError('Variable "formverif" does not exist.', 13, $this->source); })()), "verif", [], "any", false, false, false, 13), 'widget');
        echo "
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formverif"]) || array_key_exists("formverif", $context) ? $context["formverif"] : (function () { throw new RuntimeError('Variable "formverif" does not exist.', 14, $this->source); })()), 'form_end');
        echo "


</div>







";
        // line 25
        $this->loadTemplate("tempFrontAccueil2.html.twig", "user/inscriptionVerif.html.twig", 25)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/inscriptionVerif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  79 => 14,  75 => 13,  71 => 12,  65 => 9,  61 => 7,  52 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFrontAccueil1.html.twig' %}
{% for message in app.flashes('message') %}
    <div class=\"alert alert-success\" style=\"background-color: #e79595; color:black;\">
        {{ message }}
    </div>
{% endfor %}

<div style =\"margin-left: 28%; margin-right: 28%;  border: solid 1px #EA3D48; padding:2%; border-radius: 30px; margin-bottom: 25px \">
    {{ form_start(formverif,{'attr': {'novalidate': 'novalidate'}} ) }}
<h1 style =\"margin-bottom: 2%; text-align: center; color: #EA3D48 ;  \" > Verification  </h1>

{{ form_label(formverif.verif,\"inserer le code verification\") }}
    {{ form_widget(formverif.verif) }}
{{ form_end(formverif) }}


</div>







{% include 'tempFrontAccueil2.html.twig' %}", "user/inscriptionVerif.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\user\\inscriptionVerif.html.twig");
    }
}
