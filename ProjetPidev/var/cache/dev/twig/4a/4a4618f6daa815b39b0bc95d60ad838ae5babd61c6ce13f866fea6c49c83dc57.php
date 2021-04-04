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

/* admin/post/edit.html.twig */
class __TwigTemplate_9f68d1ceb5032d3b808569efda235d4179edb6f87cddf38fd1245171701eefe3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/post/edit.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.posts.edit_post"), "html", null, true);
        echo "
        </h1>

    </section>

    ";
        // line 13
        $context["images"] = [];
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new RuntimeError('Variable "medias" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 15
            echo "        ";
            $context["images"] = twig_array_merge((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 15, $this->source); })()), []);
            // line 17
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    ";
        // line 23
        echo "
    <!-- Main content -->
    <section  class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-9\">
                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
                    <div class=\"box box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Template</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 37, $this->source); })()), "template", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "select-readonly"]]);
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"box box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.basic_information"), "html", null, true);
        echo "</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"row\">
                                ";
        // line 51
        echo "                                ";
        if ((0 === twig_compare("gallery", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 51, $this->source); })()), "vars", [], "any", false, false, false, 51), "data", [], "any", false, false, false, 51), "template", [], "any", false, false, false, 51), "slug", [], "any", false, false, false, 51)))) {
            // line 52
            echo "                                    <div class=\"col-md-12 post-gallery-content js-post-gallery-content is-show\">
                                        <button type=\"button\"
                                                class=\"btn btn-primary js-post-gallery-add\"
                                                data-toggle=\"modal\"
                                                data-target=\".js-modal-post-gallery\">
                                            <i class=\"fa fa-picture-o\"></i> ";
            // line 57
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
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.delete"), "html", null, true);
            echo "
                                                            </button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 80, $this->source); })()), "images", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "js-input-gallery-images"]]);
            echo "
                                    </div>
                                ";
        }
        // line 83
        echo "
                                <div class=\"col-md-12\">
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 85, $this->source); })()), "active", [], "any", false, false, false, 85), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 89, $this->source); })()), "title", [], "any", false, false, false, 89), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    <div class=\"form-group ";
        // line 93
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 93, $this->source); })()), "slug", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "valid", [], "any", false, false, false, 93)) {
            echo "has-error";
        }
        echo "\">
                                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 94, $this->source); })()), "slug", [], "any", false, false, false, 94), 'label');
        echo "
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\">/</span>
                                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 97, $this->source); })()), "slug", [], "any", false, false, false, 97), 'widget');
        echo "
                                            <span class=\"input-group-btn\">
                                                <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 100
(isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 100, $this->source); })()), "vars", [], "any", false, false, false, 100), "data", [], "any", false, false, false, 100), "slug", [], "any", false, false, false, 100)]), "html", null, true);
        // line 101
        echo "\"
                                                   class=\"btn btn-primary\"
                                                   target=\"_blank\"
                                                   type=\"button\">
                                                    <i class=\"fa fa-external-link\"></i> ";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.visit_page"), "html", null, true);
        echo "
                                                </a>
                                            </span>
                                        </div>
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 109, $this->source); })()), "slug", [], "any", false, false, false, 109), 'errors');
        echo "
                                        <small>";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 110, $this->source); })()), "slug", [], "any", false, false, false, 110), 'help');
        echo "</small>
                                    </div>
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 115, $this->source); })()), "slug", [], "any", false, false, false, 115), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 119, $this->source); })()), "description", [], "any", false, false, false, 119), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 123, $this->source); })()), "text", [], "any", false, false, false, 123), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 127, $this->source); })()), "imageFile", [], "any", false, false, false, 127), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 131, $this->source); })()), "headerImageFile", [], "any", false, false, false, 131), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 135, $this->source); })()), "categories", [], "any", false, false, false, 135), 'row');
        echo "
                                </div>

                                <div class=\"col-md-6\">
                                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 143, $this->source); })()), "highlight", [], "any", false, false, false, 143), 'row');
        echo "
                                </div>

                                <div class=\"col-md-12\">
                                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 147, $this->source); })()), "published", [], "any", false, false, false, 147), 'row');
        echo "
                                </div>
                            </div>
                        </div>

                        <div class=\"box-footer\">
                            <button type=\"submit\" class=\"btn btn-danger\">";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.posts.form.button.save_post"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                ";
        // line 156
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 156, $this->source); })()), 'form_end');
        echo "
            </div>

            <div class=\"col-md-3\">
                <div class=\"box box-danger\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.image"), "html", null, true);
        echo "</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 166
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 166, $this->source); })()), "vars", [], "any", false, false, false, 166), "data", [], "any", false, false, false, 166), "urlPhoto", [], "any", false, false, false, 166))) {
            // line 167
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 167, $this->source); })()), "vars", [], "any", false, false, false, 167), "data", [], "any", false, false, false, 167), "urlPhoto", [], "any", false, false, false, 167)), "html", null, true);
            echo "\"
                             class=\"img-responsive\"
                             alt=\"\">
                        ";
        }
        // line 171
        echo "                    </div>
                </div>
                <!-- /.box -->

                <div class=\"box box-danger\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.header_image"), "html", null, true);
        echo "</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 181
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 181, $this->source); })()), "vars", [], "any", false, false, false, 181), "data", [], "any", false, false, false, 181), "headerImage", [], "any", false, false, false, 181))) {
            // line 182
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 182, $this->source); })()), "vars", [], "any", false, false, false, 182), "data", [], "any", false, false, false, 182), "headerImage", [], "any", false, false, false, 182)), "html", null, true);
            echo "\"
                                 class=\"img-responsive\"
                                 alt=\"\">
                        ";
        }
        // line 186
        echo "                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->

        ";
        // line 193
        $this->loadTemplate("includes/admin/modal-post-gallery.html.twig", "admin/post/edit.html.twig", 193)->display($context);
        // line 194
        echo "    </section>
    <!-- /.content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 198
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 199
        $this->loadTemplate("includes/admin/scripts/ckeditor.html.twig", "admin/post/edit.html.twig", 199)->display(twig_to_array(["ids" => [0 => "post_text"]]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/post/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 199,  395 => 198,  383 => 194,  381 => 193,  372 => 186,  364 => 182,  362 => 181,  355 => 177,  347 => 171,  339 => 167,  337 => 166,  330 => 162,  321 => 156,  315 => 153,  306 => 147,  299 => 143,  292 => 139,  285 => 135,  278 => 131,  271 => 127,  264 => 123,  257 => 119,  250 => 115,  242 => 110,  238 => 109,  231 => 105,  225 => 101,  223 => 100,  222 => 99,  217 => 97,  211 => 94,  205 => 93,  198 => 89,  191 => 85,  187 => 83,  181 => 80,  170 => 72,  152 => 57,  145 => 52,  142 => 51,  134 => 45,  123 => 37,  111 => 28,  104 => 23,  101 => 18,  95 => 17,  92 => 15,  87 => 14,  85 => 13,  77 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    {% set csrfTokenMedia = csrf_token('media') %}

    <section class=\"content-header\">
        <h1>
            {{ 'admin.posts.edit_post'|trans }}
        </h1>

    </section>

    {% set images = [] %}
    {% for media in medias %}
        {% set images = images|merge({
        }) %}
    {% endfor %}

    {# {% set postComponent = register_component('post', {
        csrfTokenMedia: csrfTokenMedia,
        medias: medias
    }) %} #}

    <!-- Main content -->
    <section  class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-9\">
                {{ form_start(postForm) }}
                    <div class=\"box box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Template</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    {{ form_row(postForm.template, {'attr': {'class': 'select-readonly'}}) }}
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
                                {# By Gallery, will appear gallery selected. #}
                                {% if 'gallery' == postForm.vars.data.template.slug %}
                                    <div class=\"col-md-12 post-gallery-content js-post-gallery-content is-show\">
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
                                {% endif %}

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.active) }}
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.title) }}
                                </div>

                                <div class=\"col-md-12\">
                                    <div class=\"form-group {% if not postForm.slug.vars.valid %}has-error{% endif %}\">
                                        {{ form_label(postForm.slug) }}
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\">/</span>
                                            {{ form_widget(postForm.slug) }}
                                            <span class=\"input-group-btn\">
                                                <a href=\"{{ path('post_detail', {
                                                    slug: postForm.vars.data.slug
                                                }) }}\"
                                                   class=\"btn btn-primary\"
                                                   target=\"_blank\"
                                                   type=\"button\">
                                                    <i class=\"fa fa-external-link\"></i> {{ 'admin.action.visit_page'|trans }}
                                                </a>
                                            </span>
                                        </div>
                                        {{ form_errors(postForm.slug) }}
                                        <small>{{ form_help(postForm.slug) }}</small>
                                    </div>
                                </div>

                                <div class=\"col-md-12\">
                                    {{ form_row(postForm.slug) }}
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
            </div>

            <div class=\"col-md-3\">
                <div class=\"box box-danger\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">{{ 'app.general.image'|trans }}</h3>
                    </div>

                    <div class=\"box-body\">
                        {% if postForm.vars.data.urlPhoto is not empty %}
                        <img src=\"{{ asset(postForm.vars.data.urlPhoto) }}\"
                             class=\"img-responsive\"
                             alt=\"\">
                        {% endif %}
                    </div>
                </div>
                <!-- /.box -->

                <div class=\"box box-danger\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">{{ 'app.general.header_image'|trans }}</h3>
                    </div>

                    <div class=\"box-body\">
                        {% if postForm.vars.data.headerImage is not empty %}
                            <img src=\"{{ asset(postForm.vars.data.headerImage) }}\"
                                 class=\"img-responsive\"
                                 alt=\"\">
                        {% endif %}
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->

        {% include 'includes/admin/modal-post-gallery.html.twig' %}
    </section>
    <!-- /.content -->
{% endblock %}

{% block scripts %}
    {%- include \"includes/admin/scripts/ckeditor.html.twig\" with {'ids': ['post_text']} only %}
{% endblock %}
", "admin/post/edit.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\admin\\post\\edit.html.twig");
    }
}
