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

/* sitemap.xml.twig */
class __TwigTemplate_61070a89cfb0c75be6dfebf876ffb31c3ab3875e99b7450f3026df7508cfb763 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap.xml.twig"));

        // line 1
        echo "
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
        xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 8
            echo "        <url>
            <loc>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 9), "html", null, true);
            echo "</loc>

            ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["url"], "lastmod", [], "any", true, true, false, 11)) {
                // line 12
                echo "                <lastmod>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "lastmod", [], "any", false, false, false, 12), "html", null, true);
                echo "</lastmod>
            ";
            }
            // line 14
            echo "
            ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["url"], "changefreq", [], "any", true, true, false, 15)) {
                // line 16
                echo "                <changefreq >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "changefreq", [], "any", false, false, false, 16), "html", null, true);
                echo "</changefreq>
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["url"], "priority", [], "any", true, true, false, 19)) {
                // line 20
                echo "                <priority>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "priority", [], "any", false, false, false, 20), "html", null, true);
                echo "</priority>
            ";
            }
            // line 22
            echo "
        </url>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
</urlset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sitemap.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  93 => 22,  87 => 20,  85 => 19,  82 => 18,  76 => 16,  74 => 15,  71 => 14,  65 => 12,  63 => 11,  58 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
        xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">

    {% for url in urls %}
        <url>
            <loc>{{ url.loc }}</loc>

            {% if url.lastmod is defined %}
                <lastmod>{{ url.lastmod }}</lastmod>
            {% endif %}

            {% if url.changefreq is defined %}
                <changefreq >{{ url.changefreq }}</changefreq>
            {% endif %}

            {% if url.priority is defined %}
                <priority>{{ url.priority }}</priority>
            {% endif %}

        </url>
    {% endfor %}

</urlset>
", "sitemap.xml.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\sitemap.xml.twig");
    }
}
