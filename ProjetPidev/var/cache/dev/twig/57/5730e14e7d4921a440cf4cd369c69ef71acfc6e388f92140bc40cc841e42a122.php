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

/* admin/media/edit.html.twig */
class __TwigTemplate_b6852300a33b1b3f21ecf23e3e3a4a04f8590f97eb6d5b751c8dae9280cd4cbd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headerNavbar' => [$this, 'block_headerNavbar'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/media/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/media/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/media/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_headerNavbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerNavbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerNavbar"));

        // line 4
        echo "    <li";
        echo (((0 === twig_compare((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 4, $this->source); })()), "admin_media_edit"))) ? (" class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_media_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mediaForm"]) || array_key_exists("mediaForm", $context) ? $context["mediaForm"] : (function () { throw new RuntimeError('Variable "mediaForm" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "data", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5)]), "html", null, true);
        echo "\">
            <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.general"), "html", null, true);
        echo "</span>
        </a>
    </li>

    <li";
        // line 11
        echo (((0 === twig_compare((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 11, $this->source); })()), "admin_media_data_edit"))) ? (" class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_media_data_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mediaForm"]) || array_key_exists("mediaForm", $context) ? $context["mediaForm"] : (function () { throw new RuntimeError('Variable "mediaForm" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">
            <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.data"), "html", null, true);
        echo "</span>
        </a>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <section class=\"content-header\">
        <h1>
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.medias.edit_data"), "html", null, true);
        echo "
        </h1>

    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"box box-danger\">
                    ";
        // line 32
        if (((0 === twig_compare("image", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mediaForm"]) || array_key_exists("mediaForm", $context) ? $context["mediaForm"] : (function () { throw new RuntimeError('Variable "mediaForm" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "data", [], "any", false, false, false, 32), "type", [], "any", false, false, false, 32), "slug", [], "any", false, false, false, 32))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["mediaForm"]) || array_key_exists("mediaForm", $context) ? $context["mediaForm"] : (function () { throw new RuntimeError('Variable "mediaForm" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "data", [], "any", false, false, false, 33), "file", [], "any", false, false, false, 33)))) {
            // line 35
            echo "                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.image"), "html", null, true);
            echo "</h3>
                    </div>

                    <div class=\"box-body\">
                        <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mediaForm"]) || array_key_exists("mediaForm", $context) ? $context["mediaForm"] : (function () { throw new RuntimeError('Variable "mediaForm" does not exist.', 40, $this->source); })()), "vars", [], "any", false, false, false, 40), "data", [], "any", false, false, false, 40), "file", [], "any", false, false, false, 40)), "480x480"), "html", null, true);
            echo "\"
                             class=\"img-responsive\"
                             alt=\"\">
                    </div>
                    ";
        }
        // line 45
        echo "                </div>
                <!-- /.box -->
            </div>

            <div class=\"col-md-8\">
                ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["mediaForm"]) || array_key_exists("mediaForm", $context) ? $context["mediaForm"] : (function () { throw new RuntimeError('Variable "mediaForm" does not exist.', 50, $this->source); })()), 'form_start');
        echo "
                    <div class=\"box box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.basic_information"), "html", null, true);
        echo "</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["mediaForm"]) || array_key_exists("mediaForm", $context) ? $context["mediaForm"] : (function () { throw new RuntimeError('Variable "mediaForm" does not exist.', 59, $this->source); })()), "title", [], "any", false, false, false, 59), 'row');
        echo "
                                </div>

                                <div class=\"col-md-6\">
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["mediaForm"]) || array_key_exists("mediaForm", $context) ? $context["mediaForm"] : (function () { throw new RuntimeError('Variable "mediaForm" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["mediaForm"]) || array_key_exists("mediaForm", $context) ? $context["mediaForm"] : (function () { throw new RuntimeError('Variable "mediaForm" does not exist.', 67, $this->source); })()), "created", [], "any", false, false, false, 67), 'row');
        echo "
                                </div>
                            </div>
                        </div>

                        <div class=\"box-footer\">
                            <button type=\"submit\" class=\"btn btn-danger\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.data_medias.form.button.save_data"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["mediaForm"]) || array_key_exists("mediaForm", $context) ? $context["mediaForm"] : (function () { throw new RuntimeError('Variable "mediaForm" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/media/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 76,  202 => 73,  193 => 67,  186 => 63,  179 => 59,  170 => 53,  164 => 50,  157 => 45,  149 => 40,  142 => 36,  139 => 35,  137 => 33,  136 => 32,  123 => 22,  119 => 20,  109 => 19,  95 => 14,  90 => 12,  86 => 11,  79 => 7,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block headerNavbar %}
    <li{{ route_name == 'admin_media_edit' ? ' class=\"active\"':'' }}>
        <a href=\"{{ path('admin_media_edit', { id: mediaForm.vars.data.id }) }}\">
            <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
            <span>{{ 'app.general.general'|trans }}</span>
        </a>
    </li>

    <li{{ route_name  == 'admin_media_data_edit' ? ' class=\"active\"':'' }}>
        <a href=\"{{ path('admin_media_data_edit', { id: mediaForm.vars.data.id }) }}\">
            <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>
            <span>{{ 'app.general.data'|trans }}</span>
        </a>
    </li>
{% endblock %}

{% block body %}
    <section class=\"content-header\">
        <h1>
            {{ 'admin.medias.edit_data'|trans }}
        </h1>

    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"box box-danger\">
                    {% if 'image' == mediaForm.vars.data.type.slug and
                        mediaForm.vars.data.file is not empty
                    %}
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">{{ 'app.general.image'|trans }}</h3>
                    </div>

                    <div class=\"box-body\">
                        <img src=\"{{ asset(mediaForm.vars.data.file)|imagine_filter('480x480') }}\"
                             class=\"img-responsive\"
                             alt=\"\">
                    </div>
                    {% endif %}
                </div>
                <!-- /.box -->
            </div>

            <div class=\"col-md-8\">
                {{ form_start(mediaForm) }}
                    <div class=\"box box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">{{ 'app.general.basic_information'|trans }}</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    {{ form_row(mediaForm.title) }}
                                </div>

                                <div class=\"col-md-6\">
                                    {{ form_row(mediaForm.user) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(mediaForm.created) }}
                                </div>
                            </div>
                        </div>

                        <div class=\"box-footer\">
                            <button type=\"submit\" class=\"btn btn-danger\">{{ 'admin.data_medias.form.button.save_data'|trans }}</button>
                        </div>
                    </div>
                {{ form_end(mediaForm) }}
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
{% endblock %}
", "admin/media/edit.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\admin\\media\\edit.html.twig");
    }
}
