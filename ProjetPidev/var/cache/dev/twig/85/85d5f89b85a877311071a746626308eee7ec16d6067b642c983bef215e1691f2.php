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

/* admin/post/index.html.twig */
class __TwigTemplate_2f1c95a2e698ceedd24801d46441a98baddd4f59caf4fef8e58ea84b8d1292bc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/post/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.posts"), "html", null, true);
        echo "
        </h1>

    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box-danger box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.list"), "html", null, true);
        echo "</h3>

                        <div class=\"box-tools\">
                            <form class=\"form-inline\">

                                <a  class=\"btn btn-xs btn-danger\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_show_pdf");
        echo "\">
                                    <i class=\"fa fa-file-pdf-o\"></i>
                                     Export PDF</a>

                                <div class=\"input-group input-group-sm\" style=\"width: 150px;\">

                                    <input type=\"text\" name=\"q\" class=\"form-control pull-right\" placeholder=\"";
        // line 27
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
        // line 41
        if ((-1 === twig_compare(0, twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 41, $this->source); })()))))) {
            // line 42
            echo "                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table table-hover\">
                                <tr>
                                    <th>ID</th>
                                    <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.form.label.active"), "html", null, true);
            echo "</th>
                                    <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.form.label.title"), "html", null, true);
            echo "</th>
                                    <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.user"), "html", null, true);
            echo "</th>
                                    <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.created"), "html", null, true);
            echo "</th>
                                    <th>";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.actions"), "html", null, true);
            echo "</th>
                                </tr>
                                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 53
                echo "                                    <tr>
                                        <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                                        <td>
                                            ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["post"], "active", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "                                                <i class=\"fa fa-toggle-on\" aria-hidden=\"true\"></i>
                                            ";
                } else {
                    // line 59
                    echo "                                                <i class=\"fa fa-toggle-off\" aria-hidden=\"true\"></i>
                                            ";
                }
                // line 61
                echo "                                        </td>
                                        <td>
                                            <a style=\"color: lightcoral\" href=\"#\"
                                            ";
                // line 65
                echo "                                            >
                                                ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 66), "html", null, true);
                echo "
                                            </a>
                                        </td>
                                        <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 69), "fullName", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                                        <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created", [], "any", false, false, false, 70), "Y/m/d"), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_edit", ["id" => twig_get_attribute($this->env, $this->source,                 // line 73
$context["post"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                // line 74
                echo "\"
                                               class=\"btn btn-xs btn-primary\">
                                                <i class=\"fa fa-edit\"></i> ";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.edit"), "html", null, true);
                echo "
                                            </a>

                                            <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_delete", ["id" => twig_get_attribute($this->env, $this->source,                 // line 80
$context["post"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                // line 81
                echo "\"
                                               class=\"btn btn-xs btn-danger\">
                                                <i class=\"fa fa-trash\"></i> ";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.delete"), "html", null, true);
                echo "
                                            </a>

                                            ";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["post"], "active", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["slug" => twig_get_attribute($this->env, $this->source,                     // line 88
$context["post"], "slug", [], "any", false, false, false, 88)]), "html", null, true);
                    // line 89
                    echo "\"
                                                    class=\"btn btn-xs btn-default\"
                                                    target=\"_blank\">
                                                    <i class=\"fa fa-external-link\"></i> ";
                    // line 92
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.visit_page"), "html", null, true);
                    echo "
                                                </a>
                                            ";
                }
                // line 95
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                            </table>
                        </div>
                        <!-- /.box-body -->

                        <div class=\"box-footer clearfix\">
                            ";
            // line 103
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 103, $this->source); })()));
            echo "
                        </div>
                    ";
        } else {
            // line 106
            echo "                        No posts yet.
                    ";
        }
        // line 108
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
        return "admin/post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 108,  257 => 106,  251 => 103,  244 => 98,  236 => 95,  230 => 92,  225 => 89,  223 => 88,  221 => 87,  219 => 86,  213 => 83,  209 => 81,  207 => 80,  206 => 79,  200 => 76,  196 => 74,  194 => 73,  193 => 72,  188 => 70,  184 => 69,  178 => 66,  175 => 65,  170 => 61,  166 => 59,  162 => 57,  160 => 56,  155 => 54,  152 => 53,  148 => 52,  143 => 50,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  121 => 42,  119 => 41,  102 => 27,  93 => 21,  85 => 16,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    <section class=\"content-header\">
        <h1>
            {{ 'admin.posts'|trans }}
        </h1>

    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box-danger box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">{{ 'app.general.list'|trans }}</h3>

                        <div class=\"box-tools\">
                            <form class=\"form-inline\">

                                <a  class=\"btn btn-xs btn-danger\" href=\"{{ path('post_show_pdf') }}\">
                                    <i class=\"fa fa-file-pdf-o\"></i>
                                     Export PDF</a>

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




                    {% if 0 < posts|length %}
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table table-hover\">
                                <tr>
                                    <th>ID</th>
                                    <th>{{ 'app.general.form.label.active'|trans }}</th>
                                    <th>{{ 'app.general.form.label.title'|trans }}</th>
                                    <th>{{ 'app.general.user'|trans }}</th>
                                    <th>{{ 'app.general.created'|trans }}</th>
                                    <th>{{ 'app.general.actions'|trans }}</th>
                                </tr>
                                {% for post in posts %}
                                    <tr>
                                        <td>{{ post.id }}</td>
                                        <td>
                                            {% if post.active %}
                                                <i class=\"fa fa-toggle-on\" aria-hidden=\"true\"></i>
                                            {% else %}
                                                <i class=\"fa fa-toggle-off\" aria-hidden=\"true\"></i>
                                            {% endif %}
                                        </td>
                                        <td>
                                            <a style=\"color: lightcoral\" href=\"#\"
                                            {# \"{{ path('admin_post_edit', {id: post.id}) }}\"  #}
                                            >
                                                {{ post.title }}
                                            </a>
                                        </td>
                                        <td>{{ post.user.fullName }}</td>
                                        <td>{{ post.created|date(\"Y/m/d\") }}</td>
                                        <td>
                                            <a href=\"{{ path('admin_post_edit', {
                                                id: post.id
                                            }) }}\"
                                               class=\"btn btn-xs btn-primary\">
                                                <i class=\"fa fa-edit\"></i> {{ 'admin.action.edit'|trans }}
                                            </a>

                                            <a href=\"{{ path('admin_post_delete', {
                                                id: post.id
                                            }) }}\"
                                               class=\"btn btn-xs btn-danger\">
                                                <i class=\"fa fa-trash\"></i> {{ 'admin.action.delete'|trans }}
                                            </a>

                                            {% if post.active %}
                                                <a href=\"{{ path('post_detail', {
                                                    slug: post.slug
                                                }) }}\"
                                                    class=\"btn btn-xs btn-default\"
                                                    target=\"_blank\">
                                                    <i class=\"fa fa-external-link\"></i> {{ 'admin.action.visit_page'|trans }}
                                                </a>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </table>
                        </div>
                        <!-- /.box-body -->

                        <div class=\"box-footer clearfix\">
                            {{ knp_pagination_render(posts) }}
                        </div>
                    {% else %}
                        No posts yet.
                    {% endif %}
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
{% endblock %}
", "admin/post/index.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\admin\\post\\index.html.twig");
    }
}
