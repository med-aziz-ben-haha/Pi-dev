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

/* post/index.html.twig */
class __TwigTemplate_b6763f0ce883a9975225cc1303bd0a9f619b422c6c7489b81537d5f7a8170ac7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["name_site"]) || array_key_exists("name_site", $context) ? $context["name_site"] : (function () { throw new RuntimeError('Variable "name_site" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " - News
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("includes/header.html.twig", "post/index.html.twig", 8)->display($context);
        // line 9
        echo "    <div id=\"main-wrapper\">
        <!-- Page Preloader -->
        <div id=\"preloader\">
            <div id=\"status\">
                <div class=\"status-mes\"></div>
            </div>
        </div>
        <!-- preloader -->

        <div class=\"uc-mobile-menu-pusher\">
            <div class=\"content-wrapper\">







                <section id=\"category_section\" class=\"category_section\">
                    <div class=\"container\">
                        <div class=\"row\">



                            <div class=\"col-md-8\">
                                <div class=\"category_section camera\">

                                    <!-- article_title -->

                                    <div class=\"category_article_wrapper\">
                                        ";
        // line 39
        if ((-1 === twig_compare(0, twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 39, $this->source); })()))))) {
            // line 40
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 41
                echo "                                        <div class=\"row\">
                                            <div class=\"col-md-5\">
                                                <div class=\"top_article_img\">
                                                    <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">
                                                        ";
                // line 45
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["post"], "urlPhoto", [], "any", false, false, false, 45))) {
                    // line 46
                    echo "                                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["post"], "urlPhoto", [], "any", false, false, false, 46)), "600x375"), "html", null, true);
                    echo "\"
                                                                 class=\"post-image rounded img-fluid mr-3\"
                                                                 alt=\"";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 48), "html", null, true);
                    echo "\">
                                                        ";
                }
                // line 50
                echo "                                                    </a>
                                                </div>
                                                <!-- top_article_img -->

                                            </div>
                                            <div class=\"col-md-7\">
                                                ";
                // line 56
                if ((-1 === twig_compare(0, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 56))))) {
                    // line 57
                    echo "
                                ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 58));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 59
                        echo "                                    <span class=\"tag red\">
                                    <a
                                       href=\"";
                        // line 61
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_index_category", ["category" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 61)]), "html", null, true);
                        echo "\">
                                                        ";
                        // line 62
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 62), "html", null, true);
                        echo "
                                                    </a>
                                    </span>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "
                                                ";
                }
                // line 68
                echo "                                                <!-- categories -->


                                                <div class=\"category_article_title\">
                                                    <h2> <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\">
                                                            ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 73), "html", null, true);
                echo "
                                                        </a> </h2>
                                                </div>
                                                <!-- article_title -->

                                                <div class=\"media article_date\">
                                                    ";
                // line 79
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 79), "urlAvatar", [], "any", false, false, false, 79))) {
                    // line 80
                    echo "                                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 80), "urlAvatar", [], "any", false, false, false, 80)), "50x50"), "html", null, true);
                    echo "\"
                                                             class=\"rounded-circle mr-2\"
                                                             alt=\"";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 82), "fullname", [], "any", false, false, false, 82), "html", null, true);
                    echo "\">
                                                    ";
                }
                // line 84
                echo "                                                    <!----show avatar------>
                                                    <div class=\"media-body\">
                                                        <h6 class=\"post-user-name mt-1 mb-1\"> <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\">";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 86), "fullname", [], "any", false, false, false, 86), "html", null, true);
                echo "</i></h6>

                                                        ";
                // line 88
                $this->loadTemplate("includes/published.html.twig", "post/index.html.twig", 88)->display(twig_to_array(["published" => twig_get_attribute($this->env, $this->source, $context["post"], "published", [], "any", false, false, false, 88)]));
                // line 89
                echo "                                                    </div>
                                                </div>
                                                <!----article_date------>
                                                <!-- category_article_wrapper -->

                                                <div class=\"category_article_content\">

                                                    ";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 96), "html", null, true);
                echo "
                                                </div>
                                                <!-- article_description -->


                                            </div>
                                            <!-- col-md-7 -->

                                        </div>
                                        <!-- row -->
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                                        ";
        } else {
            // line 108
            echo "                                            No articles found.
                                        ";
        }
        // line 110
        echo "                                    </div>
                                    <!-- category_article_wrapper -->

                                </div>
                                <!-- Camera News Section -->
                            </div>
                            <!-- Left Section -->




                            <div class=\"col-md-4\">

                                <div class=\"widget reviews m30\">
                                    <div class=\"widget_title widget_red\">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class=\"media\">

                                        <div class=\"media-body\">
                                            ";
        // line 130
        $context["newArray"] = [];
        // line 131
        echo "                                            ";
        if ((-1 === twig_compare(0, twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 131, $this->source); })()))))) {
            // line 132
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 132, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 133
                echo "                                            ";
                if ((-1 === twig_compare(0, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 133))))) {
                    // line 134
                    echo "
                                                ";
                    // line 135
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 135));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 136
                        echo "                                                    ";
                        if (!twig_in_filter($context["category"], (isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 136, $this->source); })()))) {
                            // line 137
                            echo "
                                                        ";
                            // line 138
                            $context["newArray"] = twig_array_merge((isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 138, $this->source); })()), [0 => $context["category"]]);
                            // line 139
                            echo "                                                    ";
                        }
                        // line 140
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "
                                            ";
                }
                // line 143
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                                            ";
        }
        // line 146
        echo "
                                            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 147, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 148
            echo "                                            <h3 class=\"media-heading\">
                                                <a
                                                        href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_index_category", ["category" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\">
                                                    ";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 151), "html", null, true);
            echo "
                                                </a>
                                            </h3>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
                                        </div>

                                    </div>

                                </div>
                                <!-- category list -->

                                <div class=\"widget hidden-xs m30\" >
                                    <div style=\"display: flex;\">
                                        <img class=\"img-responsive\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/right_add1.jpg"), "html", null, true);
        echo "\" alt=\"add_one\">
                                        <img class=\"img-responsive\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/right_add2.jpg"), "html", null, true);
        echo "\" alt=\"add_one\">
                                    </div>
                                    <div style=\"display: flex;\">
                                        <img class=\"img-responsive \" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/right_add3.jpg"), "html", null, true);
        echo "\" alt=\"add_one\">
                                        <img class=\"img-responsive \" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/right_add4.jpg"), "html", null, true);
        echo "\" alt=\"add_one\">
                                    </div>
                                </div>

                                <!-- Advertisement -->


                                <div class=\"widget m30\">
                                    <div class=\"widget_title widget_red\">
                                        <h2>Some info</h2>
                                    </div>
                                    <div class=\"widget_body\"><img class=\"img-responsive left\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/right_add2.jpg"), "html", null, true);
        echo "\"
                                                                  alt=\"Generic placeholder image\">
                                        <h5>
                                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
                                                users after installed base benefits. Dramatically visualize customer directed convergence without</p>

                                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
                                                users after installed base benefits. Dramatically visualize customer directed convergence without
                                                revolutionary ROI.</p>
                                        </h5>
                                    </div>
                                </div>
                                <!-- some info -->





                                <div class=\"widget hidden-xs m30\">
                                    <img class=\"img-responsive widget_img\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/podcast.jpg"), "html", null, true);
        echo "\" alt=\"add_one\">
                                </div>
                                <!--Advertisement-->
                            </div>
                            <!-- Right Section -->

                        </div>
                        <!-- Row -->

                    </div>
                    <!-- Container -->

                </section>
                <!-- Category News Section -->



            </div>
            <!-- #content-wrapper -->

        </div>
        <!-- .offcanvas-pusher -->

        <a href=\"#\" class=\"crunchify-top\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>


        <!-- .uc-mobile-menu -->

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 200,  409 => 181,  395 => 170,  391 => 169,  385 => 166,  381 => 165,  369 => 155,  359 => 151,  355 => 150,  351 => 148,  347 => 147,  344 => 146,  341 => 145,  334 => 143,  330 => 141,  324 => 140,  321 => 139,  319 => 138,  316 => 137,  313 => 136,  309 => 135,  306 => 134,  303 => 133,  298 => 132,  295 => 131,  293 => 130,  271 => 110,  267 => 108,  264 => 107,  247 => 96,  238 => 89,  236 => 88,  231 => 86,  227 => 84,  222 => 82,  216 => 80,  214 => 79,  205 => 73,  201 => 72,  195 => 68,  191 => 66,  181 => 62,  177 => 61,  173 => 59,  169 => 58,  166 => 57,  164 => 56,  156 => 50,  151 => 48,  145 => 46,  143 => 45,  139 => 44,  134 => 41,  129 => 40,  127 => 39,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ name_site }} - News
{% endblock %}

{% block body %}
    {% include 'includes/header.html.twig' %}
    <div id=\"main-wrapper\">
        <!-- Page Preloader -->
        <div id=\"preloader\">
            <div id=\"status\">
                <div class=\"status-mes\"></div>
            </div>
        </div>
        <!-- preloader -->

        <div class=\"uc-mobile-menu-pusher\">
            <div class=\"content-wrapper\">







                <section id=\"category_section\" class=\"category_section\">
                    <div class=\"container\">
                        <div class=\"row\">



                            <div class=\"col-md-8\">
                                <div class=\"category_section camera\">

                                    <!-- article_title -->

                                    <div class=\"category_article_wrapper\">
                                        {% if 0 < posts|length %}
                                        {% for post in posts %}
                                        <div class=\"row\">
                                            <div class=\"col-md-5\">
                                                <div class=\"top_article_img\">
                                                    <a href=\"{{ path('post_detail', {slug: post.slug}) }}\">
                                                        {% if post.urlPhoto is not empty %}
                                                            <img src=\"{{ asset(post.urlPhoto)|imagine_filter('600x375') }}\"
                                                                 class=\"post-image rounded img-fluid mr-3\"
                                                                 alt=\"{{ post.title }}\">
                                                        {% endif %}
                                                    </a>
                                                </div>
                                                <!-- top_article_img -->

                                            </div>
                                            <div class=\"col-md-7\">
                                                {% if 0 < post.categories|length %}

                                {% for category in post.categories %}
                                    <span class=\"tag red\">
                                    <a
                                       href=\"{{ path('post_index_category', {category: category.slug}) }}\">
                                                        {{ category.name }}
                                                    </a>
                                    </span>
                                {% endfor %}

                                                {% endif %}
                                                <!-- categories -->


                                                <div class=\"category_article_title\">
                                                    <h2> <a href=\"{{ path('post_detail', {slug: post.slug}) }}\">
                                                            {{ post.title }}
                                                        </a> </h2>
                                                </div>
                                                <!-- article_title -->

                                                <div class=\"media article_date\">
                                                    {% if post.user.urlAvatar is not empty %}
                                                        <img src=\"{{ asset(post.user.urlAvatar)|imagine_filter('50x50') }}\"
                                                             class=\"rounded-circle mr-2\"
                                                             alt=\"{{ post.user.fullname }}\">
                                                    {% endif %}
                                                    <!----show avatar------>
                                                    <div class=\"media-body\">
                                                        <h6 class=\"post-user-name mt-1 mb-1\"> <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\">{{ post.user.fullname }}</i></h6>

                                                        {% include 'includes/published.html.twig' with {published: post.published} only %}
                                                    </div>
                                                </div>
                                                <!----article_date------>
                                                <!-- category_article_wrapper -->

                                                <div class=\"category_article_content\">

                                                    {{ post.description }}
                                                </div>
                                                <!-- article_description -->


                                            </div>
                                            <!-- col-md-7 -->

                                        </div>
                                        <!-- row -->
                                        {% endfor %}
                                        {% else %}
                                            No articles found.
                                        {% endif %}
                                    </div>
                                    <!-- category_article_wrapper -->

                                </div>
                                <!-- Camera News Section -->
                            </div>
                            <!-- Left Section -->




                            <div class=\"col-md-4\">

                                <div class=\"widget reviews m30\">
                                    <div class=\"widget_title widget_red\">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class=\"media\">

                                        <div class=\"media-body\">
                                            {% set newArray = [] %}
                                            {% if 0 < posts|length %}
                                            {% for post in posts %}
                                            {% if 0 < post.categories|length %}

                                                {% for category in post.categories %}
                                                    {% if category not in newArray %}

                                                        {% set newArray = newArray|merge([category]) %}
                                                    {% endif %}
                                                {% endfor %}

                                            {% endif %}

                                            {% endfor %}
                                            {% endif %}

                                            {% for category in newArray %}
                                            <h3 class=\"media-heading\">
                                                <a
                                                        href=\"{{ path('post_index_category', {category: category.slug}) }}\">
                                                    {{ category.name }}
                                                </a>
                                            </h3>
                                            {% endfor %}

                                        </div>

                                    </div>

                                </div>
                                <!-- category list -->

                                <div class=\"widget hidden-xs m30\" >
                                    <div style=\"display: flex;\">
                                        <img class=\"img-responsive\" src=\"{{ asset (\"images/right_add1.jpg\") }}\" alt=\"add_one\">
                                        <img class=\"img-responsive\" src=\"{{ asset (\"images/right_add2.jpg\") }}\" alt=\"add_one\">
                                    </div>
                                    <div style=\"display: flex;\">
                                        <img class=\"img-responsive \" src=\"{{ asset (\"images/right_add3.jpg\") }}\" alt=\"add_one\">
                                        <img class=\"img-responsive \" src=\"{{ asset (\"images/right_add4.jpg\") }}\" alt=\"add_one\">
                                    </div>
                                </div>

                                <!-- Advertisement -->


                                <div class=\"widget m30\">
                                    <div class=\"widget_title widget_red\">
                                        <h2>Some info</h2>
                                    </div>
                                    <div class=\"widget_body\"><img class=\"img-responsive left\" src=\"{{ asset (\"images/right_add2.jpg\") }}\"
                                                                  alt=\"Generic placeholder image\">
                                        <h5>
                                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
                                                users after installed base benefits. Dramatically visualize customer directed convergence without</p>

                                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
                                                users after installed base benefits. Dramatically visualize customer directed convergence without
                                                revolutionary ROI.</p>
                                        </h5>
                                    </div>
                                </div>
                                <!-- some info -->





                                <div class=\"widget hidden-xs m30\">
                                    <img class=\"img-responsive widget_img\" src=\"{{ asset (\"images/podcast.jpg\") }}\" alt=\"add_one\">
                                </div>
                                <!--Advertisement-->
                            </div>
                            <!-- Right Section -->

                        </div>
                        <!-- Row -->

                    </div>
                    <!-- Container -->

                </section>
                <!-- Category News Section -->



            </div>
            <!-- #content-wrapper -->

        </div>
        <!-- .offcanvas-pusher -->

        <a href=\"#\" class=\"crunchify-top\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>


        <!-- .uc-mobile-menu -->

    </div>


{% endblock %}
", "post/index.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\post\\index.html.twig");
    }
}
