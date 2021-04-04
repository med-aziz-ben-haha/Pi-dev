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

/* post_front/pdf.html.twig */
class __TwigTemplate_2ff71e2b0c2231371c8def29dedceb29c97d0bc98f69a33c62da4db68e928bb0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post_front/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post_front/pdf.html.twig"));

        // line 1
        echo "<html>

<body>
<center><h1>Liste des Posts</h1></center>
<table class=\"table\">
    <thead>
    <tr style=\"border: solid 1px black;\">
        <th style=\"border: solid 1px black;\">Id</th>
        <th style=\"border: solid 1px black;\" >Titre Post</th>
        <th style=\"border: solid 1px black;\" >Texte Post</th>
        <th style=\"border: solid 1px black;\" >Date Post</th>
    </tr>
    </thead>
    <tbody style=\"border: solid 1px black;\" id=\"body\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postts"]) || array_key_exists("postts", $context) ? $context["postts"] : (function () { throw new RuntimeError('Variable "postts" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            echo "        <tr style=\"border: solid 1px black;\">
            <td style=\"border: solid 1px black;\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
            <td style=\"border: solid 1px black;\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "titrePostt", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
            <td style=\"border: solid 1px black;\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "textePostt", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
            <td style=\"border: solid 1px black;\">";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "datePostt", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
            echo "</td>

        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <tr style=\"border: solid 1px black;\">
            <td style=\"border: solid 1px black;\" colspan=\"6\">no records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </tbody>
</table>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "post_front/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  88 => 24,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  64 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>

<body>
<center><h1>Liste des Posts</h1></center>
<table class=\"table\">
    <thead>
    <tr style=\"border: solid 1px black;\">
        <th style=\"border: solid 1px black;\">Id</th>
        <th style=\"border: solid 1px black;\" >Titre Post</th>
        <th style=\"border: solid 1px black;\" >Texte Post</th>
        <th style=\"border: solid 1px black;\" >Date Post</th>
    </tr>
    </thead>
    <tbody style=\"border: solid 1px black;\" id=\"body\">
    {% for p in postts %}
        <tr style=\"border: solid 1px black;\">
            <td style=\"border: solid 1px black;\">{{ p.id }}</td>
            <td style=\"border: solid 1px black;\">{{ p.titrePostt }}</td>
            <td style=\"border: solid 1px black;\">{{ p.textePostt }}</td>
            <td style=\"border: solid 1px black;\">{{ p.datePostt|date(\"d/m/Y\") }}</td>

        </tr>
    {% else %}
        <tr style=\"border: solid 1px black;\">
            <td style=\"border: solid 1px black;\" colspan=\"6\">no records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>

</body>
</html>", "post_front/pdf.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\post_front\\pdf.html.twig");
    }
}
