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

/* admin/category/index.html.twig */
class __TwigTemplate_3504eecaf231b5dcf25dbca65fadc238842414b084cf38a979b193a3d644df9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.categories"), "html", null, true);
        echo "
        </h1>

    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box box-danger\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.list"), "html", null, true);
        echo "</h3>

                        <div class=\"box-tools\">
                            <form class=\"form-inline\">
                                <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                    <input type=\"text\" name=\"q\" class=\"form-control pull-right\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.search"), "html", null, true);
        echo "\">

                                    <div class=\"input-group-btn\">
                                        <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.box-header -->

                    ";
        // line 32
        if ((-1 === twig_compare(0, twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 32, $this->source); })()))))) {
            // line 33
            echo "                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table table-hover\">
                                <tr>
                                    <th>ID</th>
                                    <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.form.label.name"), "html", null, true);
            echo "</th>
                                    <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.created"), "html", null, true);
            echo "</th>
                                    <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.actions"), "html", null, true);
            echo "</th>
                                </tr>
                                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 42
                echo "                                    <tr>
                                        <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                                        <td>
                                            <a style=\"color: lightcoral\" href= \"#\"
                                           ";
                // line 47
                echo "
                                            >
                                                ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49), "html", null, true);
                echo "
                                            </a>
                                        </td>
                                        <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "created", [], "any", false, false, false, 52), "Y/m/d"), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_edit", ["id" => twig_get_attribute($this->env, $this->source,                 // line 55
$context["category"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                // line 56
                echo "\"
                                               class=\"btn btn-xs btn-primary\">
                                                <i class=\"fa fa-edit\"></i> ";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.edit"), "html", null, true);
                echo "
                                            </a>

                                            <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_delete", ["id" => twig_get_attribute($this->env, $this->source,                 // line 62
$context["category"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                // line 63
                echo "\"
                                               class=\"btn btn-xs btn-danger\">
                                                <i class=\"fa fa-trash\"></i> ";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.delete"), "html", null, true);
                echo "
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                            </table>
                        </div>
                        <!-- /.box-body -->

                        <div class=\"box-footer clearfix\">
                            ";
            // line 75
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 75, $this->source); })()));
            echo "
                        </div>
                    ";
        } else {
            // line 78
            echo "                        Por enquanto nenhum.
                    ";
        }
        // line 80
        echo "                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 80,  200 => 78,  194 => 75,  187 => 70,  176 => 65,  172 => 63,  170 => 62,  169 => 61,  163 => 58,  159 => 56,  157 => 55,  156 => 54,  151 => 52,  145 => 49,  141 => 47,  135 => 43,  132 => 42,  128 => 41,  123 => 39,  119 => 38,  115 => 37,  109 => 33,  107 => 32,  93 => 21,  85 => 16,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    <section class=\"content-header\">
        <h1>
            {{ 'admin.categories'|trans }}
        </h1>

    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box box-danger\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">{{ 'app.general.list'|trans }}</h3>

                        <div class=\"box-tools\">
                            <form class=\"form-inline\">
                                <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                    <input type=\"text\" name=\"q\" class=\"form-control pull-right\" placeholder=\"{{ 'app.general.search'|trans }}\">

                                    <div class=\"input-group-btn\">
                                        <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.box-header -->

                    {% if 0 < categories|length %}
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table table-hover\">
                                <tr>
                                    <th>ID</th>
                                    <th>{{ 'app.general.form.label.name'|trans }}</th>
                                    <th>{{ 'app.general.created'|trans }}</th>
                                    <th>{{ 'app.general.actions'|trans }}</th>
                                </tr>
                                {% for category in categories %}
                                    <tr>
                                        <td>{{ category.id }}</td>
                                        <td>
                                            <a style=\"color: lightcoral\" href= \"#\"
                                           {#  \"{{ path('admin_category_edit', { id: category.id}) }}\" #}

                                            >
                                                {{ category.name }}
                                            </a>
                                        </td>
                                        <td>{{ category.created|date(\"Y/m/d\") }}</td>
                                        <td>
                                            <a href=\"{{ path('admin_category_edit', {
                                                id: category.id
                                            }) }}\"
                                               class=\"btn btn-xs btn-primary\">
                                                <i class=\"fa fa-edit\"></i> {{ 'admin.action.edit'|trans }}
                                            </a>

                                            <a href=\"{{ path('admin_category_delete', {
                                                id: category.id
                                            }) }}\"
                                               class=\"btn btn-xs btn-danger\">
                                                <i class=\"fa fa-trash\"></i> {{ 'admin.action.delete'|trans }}
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </table>
                        </div>
                        <!-- /.box-body -->

                        <div class=\"box-footer clearfix\">
                            {{ knp_pagination_render(categories) }}
                        </div>
                    {% else %}
                        Por enquanto nenhum.
                    {% endif %}
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
{% endblock %}", "admin/category/index.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\admin\\category\\index.html.twig");
    }
}
