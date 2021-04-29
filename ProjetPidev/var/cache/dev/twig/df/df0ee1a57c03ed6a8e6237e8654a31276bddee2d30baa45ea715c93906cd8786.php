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

/* post/blog.html.twig */
class __TwigTemplate_ed95b40f02a5a4a4d8c364db5cb28df8e65840fee0875104e4a6c7d56cc2dad7 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/blog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/blog.html.twig", 1);
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
        $this->loadTemplate("includes/header.html.twig", "post/blog.html.twig", 4)->display($context);
        // line 5
        echo "
    <div id=\"main-wrapper\">


        <div class=\"uc-mobile-menu-pusher\">
            <div class=\"content-wrapper\">


                <section id=\"entity_section\" class=\"entity_section\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <div class=\"entity_wrapper\">
                                    <header>
                                        ";
        // line 19
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19))) {
            // line 20
            echo "                                    <div class=\"entity_title\">
                                        <h1>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</h1>
                                    </div>
                                        ";
        }
        // line 24
        echo "                                    <!-- entity_title -->


                                    <div class=\"entity_meta\" style=\"margin:10px 0;\">
                                      <h4>  <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>  ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "fullname", [], "any", false, false, false, 28), "html", null, true);
        echo "  </i></h4>
                                        ";
        // line 29
        $this->loadTemplate("includes/published.html.twig", "post/blog.html.twig", 29)->display(twig_to_array(["published" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 29, $this->source); })()), "published", [], "any", false, false, false, 29)]));
        // line 30
        echo "                                    </div>
                                    <!-- entity_meta -->




                                    <div class=\"entity_thumb\">
                                        ";
        // line 37
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 37, $this->source); })()), "urlPhoto", [], "any", false, false, false, 37))) {
            // line 38
            echo "                                            <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 38, $this->source); })()), "urlPhoto", [], "any", false, false, false, 38)), "600x375"), "html", null, true);
            echo "\"alt=\"feature-top\">

                                        ";
        }
        // line 41
        echo "                                    </div>
                                    <!-- entity_thumb -->
                                    </header>
                                    <div class=\"entity_content ckeditor\">


                                        <blockquote class=\"pull-left\">
                                            ";
        // line 48
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48))) {
            // line 49
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), "html", null, true);
            echo "
                                            ";
        }
        // line 51
        echo "                                        </blockquote>
                                        ";
        // line 52
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 52, $this->source); })()), "text", [], "any", false, false, false, 52))) {
            // line 53
            echo "                                            ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 53, $this->source); })()), "text", [], "any", false, false, false, 53);
            echo "
                                        ";
        }
        // line 55
        echo "                                    </div>
                                    <!-- entity_content -->

                                    <div class=\"entity_footer\">
                                        ";
        // line 59
        if ((-1 === twig_compare(0, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 59, $this->source); })()), "categories", [], "any", false, false, false, 59))))) {
            // line 60
            echo "
                                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 61, $this->source); })()), "categories", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 62
                echo "
                                        <div class=\"entity_tag\">
                                            <span class=\"blank\"><a   href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_index_category", ["category" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\">
                                                        ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 65), "html", null, true);
                echo "</a></span>
                                        </div>
                                        <!-- entity_tag -->
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "
                                        ";
        }
        // line 71
        echo "
                                    </div>
                                    <!-- entity_footer -->


                                </div>

                                ";
        // line 78
        $this->loadTemplate("includes/see-more-posts.html.twig", "post/blog.html.twig", 78)->display(twig_to_array(["posts" => (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 78, $this->source); })())]));
        // line 79
        echo "




                                <div class=\"readers_comment\">
                                    <div class=\"entity_inner__title header_red\">
                                        <h2>Readers Comments</h2>
                                    </div>
                                    <!-- entity_title -->
                                    ";
        // line 89
        $this->loadTemplate("includes/comments-facebook.html.twig", "post/blog.html.twig", 89)->display($context);
        // line 90
        echo "                                </div>
                                <!--Readers Comment-->


                            </div>
                            <!--Left Section-->

                            <div class=\"col-md-4\">

                                <div class=\"widget reviews m30\">
                                    <div class=\"widget_title widget_red\">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class=\"media\">

                                        <div class=\"media-body\">

                                            ";
        // line 107
        if ((-1 === twig_compare(0, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 107, $this->source); })()), "categories", [], "any", false, false, false, 107))))) {
            // line 108
            echo "
                                                ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 109, $this->source); })()), "categories", [], "any", false, false, false, 109));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 110
                echo "                                            <h3 class=\"media-heading\">
                                    <a
                                            href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_index_category", ["category" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 112)]), "html", null, true);
                echo "\">
                                                        ";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 113), "html", null, true);
                echo "
                                                    </a>
                                            </h3>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "
                                            ";
        }
        // line 119
        echo "
                                        </div>

                                    </div>

                                </div>
                                <!-- category list -->

                                <div class=\"widget hidden-xs m30\" >
                                    <div style=\"display: flex;\">
                                        <img class=\"img-responsive\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/right_add1.jpg"), "html", null, true);
        echo "\" alt=\"add_one\">
                                        <img class=\"img-responsive\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/right_add2.jpg"), "html", null, true);
        echo "\" alt=\"add_one\">
                                    </div>
                                    <div style=\"display: flex;\">
                                        <img class=\"img-responsive \" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/right_add3.jpg"), "html", null, true);
        echo "\" alt=\"add_one\">
                                        <img class=\"img-responsive \" src=\"";
        // line 134
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
        // line 149
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
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/podcast.jpg"), "html", null, true);
        echo "\" alt=\"add_one\">
                                </div>
                                <!--Advertisement-->
                            </div>
                            <!-- Right Section -->

                        </div>
                        <!-- row -->

                    </div>
                    <!-- container -->

                </section>
                <!-- Entity Section Wrapper -->


            </div>
            <!-- #content-wrapper -->

        </div>
        <!-- .offcanvas-pusher -->

        <a href=\"#\" class=\"crunchify-top\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>



    </div>
    <!-- #main-wrapper -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 199
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 200
        echo "    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/highlight.min.js\"></script>
    <script>hljs.initHighlightingOnLoad();</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 200,  375 => 199,  335 => 168,  313 => 149,  295 => 134,  291 => 133,  285 => 130,  281 => 129,  269 => 119,  265 => 117,  255 => 113,  251 => 112,  247 => 110,  243 => 109,  240 => 108,  238 => 107,  219 => 90,  217 => 89,  205 => 79,  203 => 78,  194 => 71,  190 => 69,  180 => 65,  176 => 64,  172 => 62,  168 => 61,  165 => 60,  163 => 59,  157 => 55,  151 => 53,  149 => 52,  146 => 51,  140 => 49,  138 => 48,  129 => 41,  122 => 38,  120 => 37,  111 => 30,  109 => 29,  105 => 28,  99 => 24,  93 => 21,  90 => 20,  88 => 19,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% include 'includes/header.html.twig' %}

    <div id=\"main-wrapper\">


        <div class=\"uc-mobile-menu-pusher\">
            <div class=\"content-wrapper\">


                <section id=\"entity_section\" class=\"entity_section\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <div class=\"entity_wrapper\">
                                    <header>
                                        {% if post.title is not empty %}
                                    <div class=\"entity_title\">
                                        <h1>{{ post.title }}</h1>
                                    </div>
                                        {% endif %}
                                    <!-- entity_title -->


                                    <div class=\"entity_meta\" style=\"margin:10px 0;\">
                                      <h4>  <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>  {{ post.user.fullname }}  </i></h4>
                                        {% include 'includes/published.html.twig' with {published: post.published} only %}
                                    </div>
                                    <!-- entity_meta -->




                                    <div class=\"entity_thumb\">
                                        {% if post.urlPhoto is not empty %}
                                            <img class=\"img-responsive\" src=\"{{ asset(post.urlPhoto)|imagine_filter('600x375') }}\"alt=\"feature-top\">

                                        {% endif %}
                                    </div>
                                    <!-- entity_thumb -->
                                    </header>
                                    <div class=\"entity_content ckeditor\">


                                        <blockquote class=\"pull-left\">
                                            {% if post.description is not empty %}
                                            {{ post.description }}
                                            {% endif %}
                                        </blockquote>
                                        {% if post.text is not empty %}
                                            {{ post.text|raw }}
                                        {% endif %}
                                    </div>
                                    <!-- entity_content -->

                                    <div class=\"entity_footer\">
                                        {% if 0 < post.categories|length %}

                                        {% for category in post.categories %}

                                        <div class=\"entity_tag\">
                                            <span class=\"blank\"><a   href=\"{{ path('post_index_category', {category: category.slug}) }}\">
                                                        {{ category.name }}</a></span>
                                        </div>
                                        <!-- entity_tag -->
                                        {% endfor %}

                                        {% endif %}

                                    </div>
                                    <!-- entity_footer -->


                                </div>

                                {% include 'includes/see-more-posts.html.twig' with {posts: posts} only %}





                                <div class=\"readers_comment\">
                                    <div class=\"entity_inner__title header_red\">
                                        <h2>Readers Comments</h2>
                                    </div>
                                    <!-- entity_title -->
                                    {% include 'includes/comments-facebook.html.twig' %}
                                </div>
                                <!--Readers Comment-->


                            </div>
                            <!--Left Section-->

                            <div class=\"col-md-4\">

                                <div class=\"widget reviews m30\">
                                    <div class=\"widget_title widget_red\">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class=\"media\">

                                        <div class=\"media-body\">

                                            {% if 0 < post.categories|length %}

                                                {% for category in post.categories %}
                                            <h3 class=\"media-heading\">
                                    <a
                                            href=\"{{ path('post_index_category', {category: category.slug}) }}\">
                                                        {{ category.name }}
                                                    </a>
                                            </h3>
                                                {% endfor %}

                                            {% endif %}

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
                        <!-- row -->

                    </div>
                    <!-- container -->

                </section>
                <!-- Entity Section Wrapper -->


            </div>
            <!-- #content-wrapper -->

        </div>
        <!-- .offcanvas-pusher -->

        <a href=\"#\" class=\"crunchify-top\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>



    </div>
    <!-- #main-wrapper -->

{% endblock %}

{% block scripts %}
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/highlight.min.js\"></script>
    <script>hljs.initHighlightingOnLoad();</script>
{% endblock %}
", "post/blog.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\post\\blog.html.twig");
    }
}
