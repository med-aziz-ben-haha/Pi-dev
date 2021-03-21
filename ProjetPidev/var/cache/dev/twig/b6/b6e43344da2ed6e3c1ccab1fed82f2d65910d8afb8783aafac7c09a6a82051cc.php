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

/* reclamation/list.html.twig */
class __TwigTemplate_23438121ebd29db0c41585c91b20a903018299a0e058c2e58c0d2fed0c6851fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/list.html.twig"));

        // line 1
        echo "
<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des reclamations </h1>


    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"tableac\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>

                <th>Id</th>
                <th>Description</th>
                <th>user</th>
                <th>type reclamation</th>

            </tr>
            </thead>
            <tbody>

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listreclamation"]) || array_key_exists("listreclamation", $context) ? $context["listreclamation"] : (function () { throw new RuntimeError('Variable "listreclamation" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 24
            echo "                <tr>

                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "descriptionReclamation", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["S"], "user", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["S"], "typeReclamation", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>



                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  71 => 24,  67 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des reclamations </h1>


    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"tableac\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>

                <th>Id</th>
                <th>Description</th>
                <th>user</th>
                <th>type reclamation</th>

            </tr>
            </thead>
            <tbody>

            {% for S in listreclamation %}
                <tr>

                    <td>{{ S.id }}</td>
                    <td>{{ S.descriptionReclamation }}</td>
                    <td>{{ S.user.id }}</td>
                    <td>{{ S.typeReclamation.id }}</td>



                </tr>

            {% endfor %}

            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
", "reclamation/list.html.twig", "C:\\Users\\eya\\Desktop\\Pi-dev\\ProjetPidev\\templates\\reclamation\\list.html.twig");
    }
}
