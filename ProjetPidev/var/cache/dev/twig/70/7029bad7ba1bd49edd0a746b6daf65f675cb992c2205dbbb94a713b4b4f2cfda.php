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

/* includes/see-more-posts.html.twig */
class __TwigTemplate_1e6410aee78fd9a9f8a4b0ce5ed9ca585f5a667a65cac156c71e04d9c7b0abed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/see-more-posts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/see-more-posts.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "  <div class=\"show-more-posts pt-5\">
    <div class=\"container\">

      <div class=\"entity_inner__title header_red\">
        <h2>Related News</h2>
      </div>
      <div class=\"row\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 11
                echo "          <div class=\"col-md-4 col-lg-4 mb-5\">
            <div class=\"card\">
              <div class=\"card-stretched-link-limited\">
                <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\"
                   class=\"stretched-link\"></a>

                ";
                // line 17
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 17))) {
                    // line 18
                    echo "                  <div class=\"card-img-wrapper\">
                    <img src=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 19)), "600x375"), "html", null, true);
                    echo "\"
                         class=\"card-img-top\"
                         alt=\"";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 21), "html", null, true);
                    echo "\">
                  </div>
                ";
                }
                // line 24
                echo "
                <div class=\"card-body px-0\" style=\"margin-top: -10px;\">
                  <h2 class=\"media-heading\"><a href=\"single.html\" target=\"_self\"> ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26), "html", null, true);
                echo "</a></h2>
                </div>
              </div>

              <div class=\"media\" style=\"margin-top: -12px;\">
                ";
                // line 31
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["post"], "userAvatar", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["post"], "userAvatar", [], "any", false, false, false, 32)), "50x50"), "html", null, true);
                    echo "\"
                       class=\"rounded-circle mr-2\"
                       alt=\"";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "userName", [], "any", false, false, false, 34), "html", null, true);
                    echo "\">
                ";
                }
                // line 36
                echo "                <!----show avatar------>
                <div class=\"media-body\" style=\"margin-top: 7px;margin-left: 10px;\">
                  <h5 class=\"post-user-name mt-1 mb-1\"> <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "userName", [], "any", false, false, false, 38), "html", null, true);
                echo "</i></h5>

                  ";
                // line 40
                $this->loadTemplate("includes/published.html.twig", "includes/see-more-posts.html.twig", 40)->display(twig_to_array(["published" => twig_get_attribute($this->env, $this->source, $context["post"], "published", [], "any", false, false, false, 40)]));
                // line 41
                echo "                </div>

              </div>






            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </div>
    </div>
  </div>
";
        }
        // line 57
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/see-more-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 57,  141 => 53,  124 => 41,  122 => 40,  117 => 38,  113 => 36,  108 => 34,  102 => 32,  100 => 31,  92 => 26,  88 => 24,  82 => 21,  77 => 19,  74 => 18,  72 => 17,  66 => 14,  61 => 11,  57 => 10,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if posts %}
  <div class=\"show-more-posts pt-5\">
    <div class=\"container\">

      <div class=\"entity_inner__title header_red\">
        <h2>Related News</h2>
      </div>
      <div class=\"row\">
        {% for post in posts %}
          <div class=\"col-md-4 col-lg-4 mb-5\">
            <div class=\"card\">
              <div class=\"card-stretched-link-limited\">
                <a href=\"{{ path('post_detail', {slug: post.slug}) }}\"
                   class=\"stretched-link\"></a>

                {% if post.image is not empty %}
                  <div class=\"card-img-wrapper\">
                    <img src=\"{{ asset(post.image)|imagine_filter('600x375') }}\"
                         class=\"card-img-top\"
                         alt=\"{{ post.title }}\">
                  </div>
                {% endif %}

                <div class=\"card-body px-0\" style=\"margin-top: -10px;\">
                  <h2 class=\"media-heading\"><a href=\"single.html\" target=\"_self\"> {{ post.title }}</a></h2>
                </div>
              </div>

              <div class=\"media\" style=\"margin-top: -12px;\">
                {% if post.userAvatar is not empty %}
                  <img src=\"{{ asset(post.userAvatar)|imagine_filter('50x50') }}\"
                       class=\"rounded-circle mr-2\"
                       alt=\"{{ post.userName }}\">
                {% endif %}
                <!----show avatar------>
                <div class=\"media-body\" style=\"margin-top: 7px;margin-left: 10px;\">
                  <h5 class=\"post-user-name mt-1 mb-1\"> <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\">{{ post.userName }}</i></h5>

                  {% include 'includes/published.html.twig' with {published: post.published} only %}
                </div>

              </div>






            </div>
          </div>
        {% endfor %}
      </div>
    </div>
  </div>
{% endif %}


", "includes/see-more-posts.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\includes\\see-more-posts.html.twig");
    }
}
