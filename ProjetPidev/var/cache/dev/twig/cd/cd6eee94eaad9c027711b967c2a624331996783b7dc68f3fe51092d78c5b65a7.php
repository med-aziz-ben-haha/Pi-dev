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

/* admin/post/pdf.html.twig */
class __TwigTemplate_ad46d421f2cbd1628a3c94c7bb0f0770d6ab65304f91d0e6f4253f6d947f6ec7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post/pdf.html.twig"));

        // line 1
        echo "<html>

<body>
<center><h1>Liste des Posts</h1></center>
<table class=\"table\" >
    <thead>
    <tr style=\"border: solid 1px black;\">
        <th style=\"border: solid 1px black;\">Title</th>
        <th style=\"border: solid 1px black;\">Description</th>
        <th style=\"border: solid 1px black;\">Content</th>
        <th style=\"border: solid 1px black;\">Created</th>
        <th style=\"border: solid 1px black;\">Published</th>
        <th style=\"border: solid 1px black;\">Active</th>
    </tr>
    </thead>
    <tbody id=\"body\"  style=\"border: solid 1px black;\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["post"], "deleted", [], "any", false, false, false, 18), null))) {
                // line 19
                echo "        <tr style=\"border: solid 1px black;\">
            <td style=\"border: solid 1px black;\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
            <td style=\"border: solid 1px black;\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
            <td style=\"border: solid 1px black;\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "text", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
            <td style=\"border: solid 1px black;\">";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created", [], "any", false, false, false, 23), "Y/m/d"), "html", null, true);
                echo "</td>
            <td style=\"border: solid 1px black;\">";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published", [], "any", false, false, false, 24), "Y/m/d"), "html", null, true);
                echo "</td>

           ";
                // line 26
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["post"], "active", [], "any", false, false, false, 26), 1))) {
                    // line 27
                    echo "                <td style=\"border: solid 1px black;\"> yes </td>
            ";
                } else {
                    // line 29
                    echo "                <td style=\"border: solid 1px black;\"> No </td>
            ";
                }
                // line 31
                echo "

        </tr>

        ";
            }
            // line 36
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </tbody>
</table>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/post/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  109 => 36,  102 => 31,  98 => 29,  94 => 27,  92 => 26,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  68 => 19,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>

<body>
<center><h1>Liste des Posts</h1></center>
<table class=\"table\" >
    <thead>
    <tr style=\"border: solid 1px black;\">
        <th style=\"border: solid 1px black;\">Title</th>
        <th style=\"border: solid 1px black;\">Description</th>
        <th style=\"border: solid 1px black;\">Content</th>
        <th style=\"border: solid 1px black;\">Created</th>
        <th style=\"border: solid 1px black;\">Published</th>
        <th style=\"border: solid 1px black;\">Active</th>
    </tr>
    </thead>
    <tbody id=\"body\"  style=\"border: solid 1px black;\">
    {% for post in posts %}
        {% if post.deleted == null %}
        <tr style=\"border: solid 1px black;\">
            <td style=\"border: solid 1px black;\">{{ post.title }}</td>
            <td style=\"border: solid 1px black;\">{{ post.slug }}</td>
            <td style=\"border: solid 1px black;\">{{ post.text }}</td>
            <td style=\"border: solid 1px black;\">{{ post.created|date(\"Y/m/d\") }}</td>
            <td style=\"border: solid 1px black;\">{{ post.published|date(\"Y/m/d\") }}</td>

           {% if post.active  == 1 %}
                <td style=\"border: solid 1px black;\"> yes </td>
            {% else %}
                <td style=\"border: solid 1px black;\"> No </td>
            {% endif %}


        </tr>

        {% endif %}
    {% endfor %}
    </tbody>
</table>

</body>
</html>", "admin/post/pdf.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\admin\\post\\pdf.html.twig");
    }
}
