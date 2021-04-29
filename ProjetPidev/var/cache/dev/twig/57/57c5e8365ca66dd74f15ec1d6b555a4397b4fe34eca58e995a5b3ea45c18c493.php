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

/* admin/media/index.html.twig */
class __TwigTemplate_d6bb41bca41d85419c4cb51ae841ae18c530c23588dbc7ca1b2b416806f3d3c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/media/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/media/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/media/index.html.twig", 1);
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
        $context["currentFolderId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "get", [0 => "folder"], "method", false, false, false, 4);
        // line 5
        echo "    ";
        $context["csrfToken"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("media");
        // line 6
        echo "
    <section class=\"content-header\">
        <h1>
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.medias"), "html", null, true);
        echo "
        </h1>

    </section>

    <section  class=\"content content-media-index\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box box-danger\">
                    <div class=\"box-header\">
                        ";
        // line 19
        if ((-1 === twig_compare(0, twig_length_filter($this->env, (isset($context["parentFolders"]) || array_key_exists("parentFolders", $context) ? $context["parentFolders"] : (function () { throw new RuntimeError('Variable "parentFolders" does not exist.', 19, $this->source); })()))))) {
            // line 20
            echo "                            <h3 class=\"box-title\">
                                <ol class=\"breadcrumb breadcrumb--without-bg\">
                                    <li>
                                        <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_media_index");
            echo "\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"  style=\"color: tomato\"></i>
                                        </a>
                                    </li>
                                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["parentFolders"]) || array_key_exists("parentFolders", $context) ? $context["parentFolders"] : (function () { throw new RuntimeError('Variable "parentFolders" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 28
                echo "                                        <li>
                                            ";
                // line 29
                if ((0 === twig_compare((isset($context["currentFolderId"]) || array_key_exists("currentFolderId", $context) ? $context["currentFolderId"] : (function () { throw new RuntimeError('Variable "currentFolderId" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["folder"], "id", [], "any", false, false, false, 29)))) {
                    // line 30
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 30), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 32
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_media_index", ["folder" => twig_get_attribute($this->env, $this->source, $context["folder"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                    echo "\">
                                                    ";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 33), "html", null, true);
                    echo "
                                                </a>
                                            ";
                }
                // line 36
                echo "                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                </ol>
                            </h3>
                        ";
        }
        // line 41
        echo "
                        <div class=\"box-tools\">
                            <form class=\"form-inline\">
                                <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                    <input type=\"text\" name=\"q\" class=\"form-control pull-right\" placeholder=\"";
        // line 45
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

                    <div class=\"box-body\">
                        <div class=\"media-index-content\">
                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modal-upload\">
                                ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.medias.form.button.upload_files"), "html", null, true);
        echo " <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                            </button>

                            <button type=\"button\" class=\"btn btn-default js-media-add-folder\">
                                ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.medias.form.button.add_folder"), "html", null, true);
        echo " <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                            </button>

                            ";
        // line 66
        if ((-1 === twig_compare(0, (isset($context["currentFolderId"]) || array_key_exists("currentFolderId", $context) ? $context["currentFolderId"] : (function () { throw new RuntimeError('Variable "currentFolderId" does not exist.', 66, $this->source); })())))) {
            // line 67
            echo "                                <button type=\"button\"
                                        class=\"btn btn-danger js-open-modal-delete-folder\">
                                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.medias.form.button.delete_folder"), "html", null, true);
            echo "
                                </button>
                            ";
        }
        // line 72
        echo "
                            <div class=\"row media-index-add-folder js-content-form-add-folder\">
                                <div class=\"col-sm-6 col-md-4\">
                                    <form class=\"js-form-add-folder\">
                                        ";
        // line 76
        if ((-1 === twig_compare(0, (isset($context["currentFolderId"]) || array_key_exists("currentFolderId", $context) ? $context["currentFolderId"] : (function () { throw new RuntimeError('Variable "currentFolderId" does not exist.', 76, $this->source); })())))) {
            // line 77
            echo "                                            <input type=\"hidden\" name=\"parentId\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["currentFolderId"]) || array_key_exists("currentFolderId", $context) ? $context["currentFolderId"] : (function () { throw new RuntimeError('Variable "currentFolderId" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "\">
                                        ";
        }
        // line 79
        echo "
                                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["csrfToken"]) || array_key_exists("csrfToken", $context) ? $context["csrfToken"] : (function () { throw new RuntimeError('Variable "csrfToken" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.medias.form.placeholder.name_of_folder"), "html", null, true);
        echo "\">

                                            <div class=\"input-group-btn\">
                                                <button type=\"submit\" class=\"btn btn-default\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.save"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class=\"media-index-content\">
                            ";
        // line 94
        if ((-1 === twig_compare(0, twig_length_filter($this->env, (isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 94, $this->source); })()))))) {
            // line 95
            echo "                                <h4 class=\"box-title\">Folders</h4>
                            ";
        }
        // line 97
        echo "
                            <div class=\"row js-media-index-folders\">
                                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 100
            echo "                                    <div class=\"col-xs-6 col-md-2 media-index-folder js-media-index-folder\"
                                         data-id=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "\">
                                        <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_media_index", ["folder" => twig_get_attribute($this->env, $this->source, $context["folder"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\"
                                           class=\"btn btn-app media-index-btn-folder js-media-index-folder-link\">
                                            <!--span class=\"badge bg-yellow\">3</span-->
                                            <i class=\"fa fa-folder\"></i>
                                            <span class=\"js-media-index-folder-name\">
                                                ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 107), "html", null, true);
            echo "
                                            </span>
                                        </a>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                            </div>
                        </div>

                        <div class=\"media-index-content\">
                            ";
        // line 116
        if ((-1 === twig_compare(0, twig_length_filter($this->env, (isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new RuntimeError('Variable "medias" does not exist.', 116, $this->source); })()))))) {
            // line 117
            echo "                                <h4 class=\"box-title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.files"), "html", null, true);
            echo "</h4>
                            ";
        }
        // line 119
        echo "
                            <div class=\"row\">
                                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new RuntimeError('Variable "medias" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 122
            echo "                                    <div class=\"col-xs-12 col-md-3 js-media-file\"
                                         data-id=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 123), "html", null, true);
            echo "\">
                                        <div class=\"thumbnail\">
                                            ";
            // line 125
            $context["image"] = twig_get_attribute($this->env, $this->source, $context["media"], "file", [], "any", false, false, false, 125);
            // line 126
            echo "                                            ";
            $context["fullUrl"] = twig_get_attribute($this->env, $this->source, $context["media"], "file", [], "any", false, false, false, 126);
            // line 127
            echo "
                                            ";
            // line 128
            if ( !twig_get_attribute($this->env, $this->source, $context["media"], "external", [], "any", false, false, false, 128)) {
                // line 129
                echo "                                                ";
                $context["image"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["media"], "file", [], "any", false, false, false, 129)), "300x300");
                // line 130
                echo "                                                ";
                $context["fullUrl"] = (((isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new RuntimeError('Variable "base_url" does not exist.', 130, $this->source); })()) . "/") . twig_get_attribute($this->env, $this->source, $context["media"], "file", [], "any", false, false, false, 130));
                // line 131
                echo "                                            ";
            }
            // line 132
            echo "
                                            <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_media_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 133)]), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 134, $this->source); })()), "html", null, true);
            echo " \"
                                                     alt=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "title", [], "any", false, false, false, 135), "html", null, true);
            echo "\"
                                                     class=\"img-responsive media-index-file-preview\">
                                            </a>

                                            <div class=\"caption\">


                                                <p>
                                                    <button
                                                            class=\"btn btn-xs btn-default\"
                                                            role=\"button\"
                                                            data-text-copy=\"";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["fullUrl"]) || array_key_exists("fullUrl", $context) ? $context["fullUrl"] : (function () { throw new RuntimeError('Variable "fullUrl" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-link\" aria-hidden=\"true\"></i>
                                                        <span class=\"js-text-clipboard\">";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.copy_url"), "html", null, true);
            echo "</span>
                                                    </button>

                                                    <a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_media_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            echo "\"
                                                       class=\"btn btn-xs btn-primary\"
                                                            role=\"button\">
                                                        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
                                                        ";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.edit"), "html", null, true);
            echo "
                                                    </a>

                                                    <button class=\"btn btn-xs btn-danger js-media-file-delete\"
                                                            role=\"button\">
                                                        <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                                        ";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.delete"), "html", null, true);
            echo "
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

        ";
        // line 178
        echo "        <div class=\"col-xs-6 col-md-2 media-index-folder js-media-index-folder copy\">
            <a href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_media_index");
        echo "\"
               class=\"btn btn-app media-index-btn-folder js-media-index-folder-link\">
                <!--span class=\"badge bg-yellow\">3</span-->
                <i class=\"fa fa-folder\"></i>
                <span class=\"js-media-index-folder-name\"></span>
            </a>
        </div>

        <div class=\"modal fade js-modal-delete-folder\" id=\"modal-confirm-delete-folder\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>

                        <h4 class=\"modal-title\">
                            <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> Alert
                        </h4>
                    </div>

                    <div class=\"modal-body\">
                        Do you really delete this folder?<br/>
                        All children folders and files will deleted permanently.
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">
                            <i class=\"fa fa-close\" aria-hidden=\"true\"></i> Cancel
                        </button>

                        <button type=\"button\" class=\"btn btn-success js-delete-folder\">
                            Yes, delete now!
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>

    <div class=\"modal fade js-modal-upload\" id=\"modal-upload\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>

                    <h4 class=\"modal-title\">";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.medias.form.button.upload_files"), "html", null, true);
        echo "</h4>
                </div>

                <div class=\"modal-body\">


                    <div class=\"media-index-upload\">
                        <div class=\"dropzone js-dropzone\">
                        </div>
                    </div>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger js-modal-close\" data-dismiss=\"modal\">
                        ";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.close"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/media/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 244,  454 => 230,  400 => 179,  397 => 178,  386 => 168,  373 => 161,  364 => 155,  357 => 151,  351 => 148,  346 => 146,  332 => 135,  328 => 134,  324 => 133,  321 => 132,  318 => 131,  315 => 130,  312 => 129,  310 => 128,  307 => 127,  304 => 126,  302 => 125,  297 => 123,  294 => 122,  290 => 121,  286 => 119,  280 => 117,  278 => 116,  272 => 112,  261 => 107,  253 => 102,  249 => 101,  246 => 100,  242 => 99,  238 => 97,  234 => 95,  232 => 94,  220 => 85,  214 => 82,  209 => 80,  206 => 79,  200 => 77,  198 => 76,  192 => 72,  186 => 69,  182 => 67,  180 => 66,  174 => 63,  167 => 59,  150 => 45,  144 => 41,  139 => 38,  132 => 36,  126 => 33,  121 => 32,  115 => 30,  113 => 29,  110 => 28,  106 => 27,  99 => 23,  94 => 20,  92 => 19,  79 => 9,  74 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    {% set currentFolderId = app.request.query.get('folder') %}
    {% set csrfToken = csrf_token('media') %}

    <section class=\"content-header\">
        <h1>
            {{ 'admin.medias'|trans }}
        </h1>

    </section>

    <section  class=\"content content-media-index\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box box-danger\">
                    <div class=\"box-header\">
                        {% if 0 < parentFolders|length %}
                            <h3 class=\"box-title\">
                                <ol class=\"breadcrumb breadcrumb--without-bg\">
                                    <li>
                                        <a href=\"{{ path('admin_media_index') }}\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"  style=\"color: tomato\"></i>
                                        </a>
                                    </li>
                                    {% for folder in parentFolders %}
                                        <li>
                                            {% if currentFolderId == folder.id %}
                                                {{ folder.name }}
                                            {% else %}
                                                <a href=\"{{ path('admin_media_index', {folder: folder.id}) }}\">
                                                    {{ folder.name }}
                                                </a>
                                            {% endif %}
                                        </li>
                                    {% endfor %}
                                </ol>
                            </h3>
                        {% endif %}

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

                    <div class=\"box-body\">
                        <div class=\"media-index-content\">
                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modal-upload\">
                                {{ 'admin.medias.form.button.upload_files'|trans }} <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                            </button>

                            <button type=\"button\" class=\"btn btn-default js-media-add-folder\">
                                {{ 'admin.medias.form.button.add_folder'|trans }} <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                            </button>

                            {% if 0 < currentFolderId %}
                                <button type=\"button\"
                                        class=\"btn btn-danger js-open-modal-delete-folder\">
                                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'admin.medias.form.button.delete_folder'|trans }}
                                </button>
                            {% endif %}

                            <div class=\"row media-index-add-folder js-content-form-add-folder\">
                                <div class=\"col-sm-6 col-md-4\">
                                    <form class=\"js-form-add-folder\">
                                        {% if 0 < currentFolderId %}
                                            <input type=\"hidden\" name=\"parentId\" value=\"{{ currentFolderId }}\">
                                        {% endif %}

                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrfToken }}\">
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"{{ 'admin.medias.form.placeholder.name_of_folder'|trans }}\">

                                            <div class=\"input-group-btn\">
                                                <button type=\"submit\" class=\"btn btn-default\">{{ 'admin.action.save'|trans }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class=\"media-index-content\">
                            {% if 0 < folders|length %}
                                <h4 class=\"box-title\">Folders</h4>
                            {% endif %}

                            <div class=\"row js-media-index-folders\">
                                {% for folder in folders %}
                                    <div class=\"col-xs-6 col-md-2 media-index-folder js-media-index-folder\"
                                         data-id=\"{{ folder.id }}\">
                                        <a href=\"{{ path('admin_media_index', {folder: folder.id}) }}\"
                                           class=\"btn btn-app media-index-btn-folder js-media-index-folder-link\">
                                            <!--span class=\"badge bg-yellow\">3</span-->
                                            <i class=\"fa fa-folder\"></i>
                                            <span class=\"js-media-index-folder-name\">
                                                {{ folder.name }}
                                            </span>
                                        </a>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>

                        <div class=\"media-index-content\">
                            {% if 0 < medias|length %}
                                <h4 class=\"box-title\">{{ 'app.general.files'|trans }}</h4>
                            {% endif %}

                            <div class=\"row\">
                                {% for media in medias %}
                                    <div class=\"col-xs-12 col-md-3 js-media-file\"
                                         data-id=\"{{ media.id }}\">
                                        <div class=\"thumbnail\">
                                            {% set image = media.file %}
                                            {% set fullUrl = media.file %}

                                            {% if not media.external %}
                                                {% set image = asset(media.file)|imagine_filter('300x300') %}
                                                {% set fullUrl = base_url ~ '/' ~ media.file %}
                                            {% endif %}

                                            <a href=\"{{ path('admin_media_edit', { id: media.id }) }}\">
                                                <img src=\"{{ image }} \"
                                                     alt=\"{{ media.title }}\"
                                                     class=\"img-responsive media-index-file-preview\">
                                            </a>

                                            <div class=\"caption\">


                                                <p>
                                                    <button
                                                            class=\"btn btn-xs btn-default\"
                                                            role=\"button\"
                                                            data-text-copy=\"{{ fullUrl }}\">
                                                        <i class=\"fa fa-link\" aria-hidden=\"true\"></i>
                                                        <span class=\"js-text-clipboard\">{{ 'app.general.copy_url'|trans }}</span>
                                                    </button>

                                                    <a href=\"{{ path('admin_media_edit', { id: media.id }) }}\"
                                                       class=\"btn btn-xs btn-primary\"
                                                            role=\"button\">
                                                        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
                                                        {{ 'admin.action.edit'|trans }}
                                                    </a>

                                                    <button class=\"btn btn-xs btn-danger js-media-file-delete\"
                                                            role=\"button\">
                                                        <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                                        {{ 'admin.action.delete'|trans }}
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

        {#  Element copy of folder. #}
        <div class=\"col-xs-6 col-md-2 media-index-folder js-media-index-folder copy\">
            <a href=\"{{ path('admin_media_index') }}\"
               class=\"btn btn-app media-index-btn-folder js-media-index-folder-link\">
                <!--span class=\"badge bg-yellow\">3</span-->
                <i class=\"fa fa-folder\"></i>
                <span class=\"js-media-index-folder-name\"></span>
            </a>
        </div>

        <div class=\"modal fade js-modal-delete-folder\" id=\"modal-confirm-delete-folder\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>

                        <h4 class=\"modal-title\">
                            <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> Alert
                        </h4>
                    </div>

                    <div class=\"modal-body\">
                        Do you really delete this folder?<br/>
                        All children folders and files will deleted permanently.
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">
                            <i class=\"fa fa-close\" aria-hidden=\"true\"></i> Cancel
                        </button>

                        <button type=\"button\" class=\"btn btn-success js-delete-folder\">
                            Yes, delete now!
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>

    <div class=\"modal fade js-modal-upload\" id=\"modal-upload\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>

                    <h4 class=\"modal-title\">{{ 'admin.medias.form.button.upload_files'|trans }}</h4>
                </div>

                <div class=\"modal-body\">


                    <div class=\"media-index-upload\">
                        <div class=\"dropzone js-dropzone\">
                        </div>
                    </div>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger js-modal-close\" data-dismiss=\"modal\">
                        {{ 'admin.action.close'|trans }}
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
{% endblock %}
", "admin/media/index.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\admin\\media\\index.html.twig");
    }
}
