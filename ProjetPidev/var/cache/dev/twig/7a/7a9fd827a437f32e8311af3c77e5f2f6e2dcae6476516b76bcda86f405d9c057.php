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

/* includes/admin/scripts/ckeditor.html.twig */
class __TwigTemplate_e940a4631dd457559543c233f6134693335decab0477142c6575fbc27eca7f84 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/scripts/ckeditor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/scripts/ckeditor.html.twig"));

        // line 1
        echo "<script src=\"https://cdn.ckeditor.com/4.14.0/standard-all/ckeditor.js\"></script>
<script>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ids"]) || array_key_exists("ids", $context) ? $context["ids"] : (function () { throw new RuntimeError('Variable "ids" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 4
            echo "        CKEDITOR.replace('";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "', {
            height: 500,
            format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div',
            extraPlugins: 'autoembed,embedsemantic,image2,mathjax,codesnippet,justify',
            codeSnippet_theme: 'tomorrow-night',
            allowedContent: true
        });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/admin/scripts/ckeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://cdn.ckeditor.com/4.14.0/standard-all/ckeditor.js\"></script>
<script>
    {% for id in ids %}
        CKEDITOR.replace('{{ id }}', {
            height: 500,
            format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div',
            extraPlugins: 'autoembed,embedsemantic,image2,mathjax,codesnippet,justify',
            codeSnippet_theme: 'tomorrow-night',
            allowedContent: true
        });
    {% endfor %}
</script>", "includes/admin/scripts/ckeditor.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\includes\\admin\\scripts\\ckeditor.html.twig");
    }
}
