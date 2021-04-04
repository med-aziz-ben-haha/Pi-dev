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

/* admin/setting/index.html.twig */
class __TwigTemplate_01633a4b706eaae72a88d36f41a0ef41e175b36584a4f0f4262f78d135b0fa82 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/setting/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.settings"), "html", null, true);
        echo "
        </h1>

    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["settingForm"]) || array_key_exists("settingForm", $context) ? $context["settingForm"] : (function () { throw new RuntimeError('Variable "settingForm" does not exist.', 15, $this->source); })()), 'form_start');
        echo "

                <!-- facebook box -->
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Facebook</h3>
                    </div>

                    <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingForm"]) || array_key_exists("settingForm", $context) ? $context["settingForm"] : (function () { throw new RuntimeError('Variable "settingForm" does not exist.', 26, $this->source); })()), "url_facebook", [], "any", false, false, false, 26), 'row');
        echo "
                                </div>

                                <div class=\"col-md-6\">
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingForm"]) || array_key_exists("settingForm", $context) ? $context["settingForm"] : (function () { throw new RuntimeError('Variable "settingForm" does not exist.', 30, $this->source); })()), "app_id_facebook", [], "any", false, false, false, 30), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingForm"]) || array_key_exists("settingForm", $context) ? $context["settingForm"] : (function () { throw new RuntimeError('Variable "settingForm" does not exist.', 34, $this->source); })()), "show_comments_facebook", [], "any", false, false, false, 34), 'row');
        echo "
                                </div>
                            </div>
                        </div>
                </div>

                <!-- basic information box -->
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.basic_information"), "html", null, true);
        echo "</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingForm"]) || array_key_exists("settingForm", $context) ? $context["settingForm"] : (function () { throw new RuntimeError('Variable "settingForm" does not exist.', 49, $this->source); })()), "google_gtag_id", [], "any", false, false, false, 49), 'row');
        echo "
                            </div>

                            <div class=\"col-md-6\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingForm"]) || array_key_exists("settingForm", $context) ? $context["settingForm"] : (function () { throw new RuntimeError('Variable "settingForm" does not exist.', 53, $this->source); })()), "url_instagram", [], "any", false, false, false, 53), 'row');
        echo "
                            </div>

                            <div class=\"col-md-6\">
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingForm"]) || array_key_exists("settingForm", $context) ? $context["settingForm"] : (function () { throw new RuntimeError('Variable "settingForm" does not exist.', 57, $this->source); })()), "url_linkedin", [], "any", false, false, false, 57), 'row');
        echo "
                            </div>

                            <div class=\"col-md-6\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["settingForm"]) || array_key_exists("settingForm", $context) ? $context["settingForm"] : (function () { throw new RuntimeError('Variable "settingForm" does not exist.', 61, $this->source); })()), "url_github", [], "any", false, false, false, 61), 'row');
        echo "
                            </div>
                        </div>
                    </div>

                    <div class=\"box-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.settings.form.button.save_settings"), "html", null, true);
        echo "
                        </button>
                    </div>
                </div>
                <!-- /.box -->

                ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["settingForm"]) || array_key_exists("settingForm", $context) ? $context["settingForm"] : (function () { throw new RuntimeError('Variable "settingForm" does not exist.', 74, $this->source); })()), 'form_end');
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
        return "admin/setting/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 74,  164 => 68,  154 => 61,  147 => 57,  140 => 53,  133 => 49,  124 => 43,  112 => 34,  105 => 30,  98 => 26,  84 => 15,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    <section class=\"content-header\">
        <h1>
            {{ 'admin.settings'|trans }}
        </h1>

    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {{ form_start(settingForm) }}

                <!-- facebook box -->
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Facebook</h3>
                    </div>

                    <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    {{ form_row(settingForm.url_facebook) }}
                                </div>

                                <div class=\"col-md-6\">
                                    {{ form_row(settingForm.app_id_facebook) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(settingForm.show_comments_facebook) }}
                                </div>
                            </div>
                        </div>
                </div>

                <!-- basic information box -->
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">{{ 'app.general.basic_information'|trans }}</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                {{ form_row(settingForm.google_gtag_id) }}
                            </div>

                            <div class=\"col-md-6\">
                                {{ form_row(settingForm.url_instagram) }}
                            </div>

                            <div class=\"col-md-6\">
                                {{ form_row(settingForm.url_linkedin) }}
                            </div>

                            <div class=\"col-md-6\">
                                {{ form_row(settingForm.url_github) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"box-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            {{ 'admin.settings.form.button.save_settings'|trans }}
                        </button>
                    </div>
                </div>
                <!-- /.box -->

                {{ form_end(settingForm) }}
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
{% endblock %}", "admin/setting/index.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\admin\\setting\\index.html.twig");
    }
}
