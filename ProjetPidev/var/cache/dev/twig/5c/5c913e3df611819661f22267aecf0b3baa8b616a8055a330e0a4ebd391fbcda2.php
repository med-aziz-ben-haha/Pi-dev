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

/* admin/post/add.html.twig */
class __TwigTemplate_2ea7a72c723b379068e7e2515c3c30f005e203028eecaf307a0442319f4c8651 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post/add.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/post/add.html.twig", 1);
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
        echo "    ";
        $context["csrfTokenMedia"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("media");
        // line 5
        echo "
    <section class=\"content-header\">
        <h1>
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.posts.add_new_post"), "html", null, true);
        echo "
        </h1>

    </section>

  ";
        // line 17
        echo "    <!-- Main content -->
    <section  class=\"content\">
        <div class=\"row\">
            <!-- left column -->
            <div class=\"col-md-12\">
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 23
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 23, $this->source); })()), "slug", [], "any", false, false, false, 23), "setRendered", [], "method", false, false, false, 23);
        // line 24
        echo "
                    <div class=\"box box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Template</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 33, $this->source); })()), "template", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "js-post-template"]]);
        // line 38
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"box box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.basic_information"), "html", null, true);
        echo "</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-12 post-gallery-content js-post-gallery-content\">
                                    <button type=\"button\"
                                            class=\"btn btn-primary js-post-gallery-add\"
                                            data-toggle=\"modal\"
                                            data-target=\".js-modal-post-gallery\">
                                        <i class=\"fa fa-picture-o\"></i> ";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.posts.form.button.add_images_to_gallery"), "html", null, true);
        echo "
                                    </button>

                                    <div class=\"row post-gallery-images-selected js-post-gallery-images-selected\">
                                        <div class=\"col-sm-6 col-md-3 post-gallery-images-selected-file is-copy js-post-gallery-images-selected-file\"
                                             data-media-id=\"\">
                                            <div class=\"thumbnail\">
                                                <img src=\"https://dummyimage.com/600x400/d1d1d1/ffffff\"
                                                     alt=\"...\"
                                                     class=\"img-responsive js-post-gallery-images-selected-file-img\"/>

                                                <div class=\"caption\">
                                                    <p>
                                                        <button type=\"button\"
                                                                class=\"btn btn-danger btn-xs js-post-gallery-images-selected-file-delete\">
                                                            <i class=\"fa fa-trash\"></i> ";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.delete"), "html", null, true);
        echo "
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 79, $this->source); })()), "images", [], "any", false, false, false, 79), 'row', ["attr" => ["class" => "js-input-gallery-images"]]);
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 83, $this->source); })()), "active", [], "any", false, false, false, 83), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 87, $this->source); })()), "title", [], "any", false, false, false, 87), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 91, $this->source); })()), "description", [], "any", false, false, false, 91), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 95, $this->source); })()), "text", [], "any", false, false, false, 95), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 99, $this->source); })()), "imageFile", [], "any", false, false, false, 99), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 103, $this->source); })()), "headerImageFile", [], "any", false, false, false, 103), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 107, $this->source); })()), "categories", [], "any", false, false, false, 107), 'row');
        echo "
                                </div>

                                <div class=\"col-md-6\">
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 115, $this->source); })()), "highlight", [], "any", false, false, false, 115), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 119, $this->source); })()), "published", [], "any", false, false, false, 119), 'row');
        echo "
                                </div>
                            </div>
                        </div>

                        <div class=\"box-footer\">
                            <button type=\"submit\" class=\"btn btn-danger\">";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.posts.form.button.save_post"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 128, $this->source); })()), 'form_end');
        echo "
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->

        ";
        // line 135
        $this->loadTemplate("includes/admin/modal-post-gallery.html.twig", "admin/post/add.html.twig", 135)->display($context);
        // line 136
        echo "    </section>
    <!-- /.content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 141
        $this->loadTemplate("includes/admin/scripts/ckeditor.html.twig", "admin/post/add.html.twig", 141)->display(twig_to_array(["ids" => [0 => "post_text"]]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/post/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 141,  272 => 140,  260 => 136,  258 => 135,  248 => 128,  242 => 125,  233 => 119,  226 => 115,  219 => 111,  212 => 107,  205 => 103,  198 => 99,  191 => 95,  184 => 91,  177 => 87,  170 => 83,  163 => 79,  152 => 71,  134 => 56,  121 => 46,  111 => 38,  109 => 33,  98 => 24,  96 => 23,  92 => 22,  85 => 17,  77 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    {% set csrfTokenMedia = csrf_token('media') %}

    <section class=\"content-header\">
        <h1>
            {{ 'admin.posts.add_new_post'|trans }}
        </h1>

    </section>

  {#  {% set postComponent = register_component('post', {
        csrfTokenMedia: csrfTokenMedia,
    }) %}
  id=\"{{ postComponent }}\"#}
    <!-- Main content -->
    <section  class=\"content\">
        <div class=\"row\">
            <!-- left column -->
            <div class=\"col-md-12\">
                {{ form_start(postForm) }}
                    {% do postForm.slug.setRendered() %}

                    <div class=\"box box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Template</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    {{ form_row(postForm.template, {
                                            'attr': {
                                                'class': 'js-post-template'
                                            }
                                        })
                                    }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"box box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">{{ 'app.general.basic_information'|trans }}</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-12 post-gallery-content js-post-gallery-content\">
                                    <button type=\"button\"
                                            class=\"btn btn-primary js-post-gallery-add\"
                                            data-toggle=\"modal\"
                                            data-target=\".js-modal-post-gallery\">
                                        <i class=\"fa fa-picture-o\"></i> {{ 'admin.posts.form.button.add_images_to_gallery'|trans }}
                                    </button>

                                    <div class=\"row post-gallery-images-selected js-post-gallery-images-selected\">
                                        <div class=\"col-sm-6 col-md-3 post-gallery-images-selected-file is-copy js-post-gallery-images-selected-file\"
                                             data-media-id=\"\">
                                            <div class=\"thumbnail\">
                                                <img src=\"https://dummyimage.com/600x400/d1d1d1/ffffff\"
                                                     alt=\"...\"
                                                     class=\"img-responsive js-post-gallery-images-selected-file-img\"/>

                                                <div class=\"caption\">
                                                    <p>
                                                        <button type=\"button\"
                                                                class=\"btn btn-danger btn-xs js-post-gallery-images-selected-file-delete\">
                                                            <i class=\"fa fa-trash\"></i> {{ 'admin.action.delete'|trans }}
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{ form_row(postForm.images, {'attr': {'class': 'js-input-gallery-images'}}) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.active) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.title) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.description) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.text) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.imageFile) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.headerImageFile) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.categories) }}
                                </div>

                                <div class=\"col-md-6\">
                                    {{ form_row(postForm.user) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.highlight) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.published) }}
                                </div>
                            </div>
                        </div>

                        <div class=\"box-footer\">
                            <button type=\"submit\" class=\"btn btn-danger\">{{ 'admin.posts.form.button.save_post'|trans }}</button>
                        </div>
                    </div>
                {{ form_end(postForm) }}
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->

        {% include 'includes/admin/modal-post-gallery.html.twig' %}
    </section>
    <!-- /.content -->
{% endblock %}

{% block scripts %}
    {%- include \"includes/admin/scripts/ckeditor.html.twig\" with {'ids': ['post_text']} only %}
{% endblock %}
", "admin/post/add.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\admin\\post\\add.html.twig");
    }
}
