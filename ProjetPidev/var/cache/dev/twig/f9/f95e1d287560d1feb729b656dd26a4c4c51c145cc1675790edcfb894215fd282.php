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

/* soin_mp/moyenne.html.twig */
class __TwigTemplate_e195e18ebd7cef07948cf8d00bcb39a2fbc8bfc4a5bd276fee6cbc7870069041 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/moyenne.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/moyenne.html.twig"));

        // line 1
        if ((0 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 1, $this->source); })()), 0))) {
        }
        // line 3
        if ((-1 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 3, $this->source); })()), 0.5))) {
            // line 4
            echo "    <div>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>

";
        }
        // line 13
        if (((0 <= twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 13, $this->source); })()), 0.5)) && (-1 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 13, $this->source); })()), 1)))) {
            // line 14
            echo "    <div>
        <i class=\"fa fa-star-half-empty\" style=\" font-size:36px; color: orange;\" ></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>

";
        }
        // line 23
        if (((0 <= twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 23, $this->source); })()), 1)) && (-1 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 23, $this->source); })()), 1.5)))) {
            // line 24
            echo "    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>

    </div>

";
        }
        // line 34
        if (((0 <= twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 34, $this->source); })()), 1.5)) && (-1 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 34, $this->source); })()), 2)))) {
            // line 35
            echo "    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-half-empty\" style=\" font-size:36px; color: orange;\" ></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>

    </div>

";
        }
        // line 45
        if (((0 <= twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 45, $this->source); })()), 2)) && (-1 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 45, $this->source); })()), 2.5)))) {
            // line 46
            echo "    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>
";
        }
        // line 54
        if (((0 <= twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 54, $this->source); })()), 2.5)) && (-1 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 54, $this->source); })()), 3)))) {
            // line 55
            echo "    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-half-empty\" style=\" font-size:36px; color: orange;\" ></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>
";
        }
        // line 63
        if (((0 <= twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 63, $this->source); })()), 3)) && (-1 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 63, $this->source); })()), 3.5)))) {
            // line 64
            echo "    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>
";
        }
        // line 72
        if (((0 <= twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 72, $this->source); })()), 3.5)) && (-1 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 72, $this->source); })()), 4)))) {
            // line 73
            echo "    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-half-empty\" style=\" font-size:36px; color: orange;\" ></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>
";
        }
        // line 81
        echo "
";
        // line 82
        if (((0 <= twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 82, $this->source); })()), 4)) && (-1 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 82, $this->source); })()), 4.5)))) {
            // line 83
            echo "    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>
";
        }
        // line 91
        echo "
";
        // line 92
        if (((0 <= twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 92, $this->source); })()), 4.5)) && (-1 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 92, $this->source); })()), 5)))) {
            // line 93
            echo "    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-half-empty\" style=\" font-size:36px; color: orange;\" ></i>
    </div>
";
        }
        // line 101
        if ((0 === twig_compare((isset($context["moyenne"]) || array_key_exists("moyenne", $context) ? $context["moyenne"] : (function () { throw new RuntimeError('Variable "moyenne" does not exist.', 101, $this->source); })()), 5))) {
            // line 102
            echo "    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "soin_mp/moyenne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 102,  178 => 101,  168 => 93,  166 => 92,  163 => 91,  153 => 83,  151 => 82,  148 => 81,  138 => 73,  136 => 72,  126 => 64,  124 => 63,  114 => 55,  112 => 54,  102 => 46,  100 => 45,  88 => 35,  86 => 34,  74 => 24,  72 => 23,  61 => 14,  59 => 13,  48 => 4,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if  moyenne==0  %}
{% endif %}
{% if  moyenne<0.5  %}
    <div>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>

{% endif %}
{% if (moyenne>=0.5) and (moyenne<1)   %}
    <div>
        <i class=\"fa fa-star-half-empty\" style=\" font-size:36px; color: orange;\" ></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>

{% endif %}
{% if (moyenne>=1)and (moyenne<1.5)   %}
    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>

    </div>

{% endif %}
{% if (moyenne>=1.5) and (moyenne<2)  %}
    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-half-empty\" style=\" font-size:36px; color: orange;\" ></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>

    </div>

{% endif %}
{% if (moyenne>=2) and (moyenne<2.5)  %}
    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>
{% endif %}
{% if (moyenne>=2.5) and (moyenne<3)  %}
    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-half-empty\" style=\" font-size:36px; color: orange;\" ></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>
{% endif %}
{% if (moyenne>=3) and (moyenne<3.5)  %}
    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>
{% endif %}
{% if (moyenne>=3.5) and (moyenne<4)  %}
    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-half-empty\" style=\" font-size:36px; color: orange;\" ></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>
{% endif %}

{% if (moyenne>=4) and (moyenne<4.5)  %}
    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-o\" style=\"font-size:36px;color:orange;\"></i>
    </div>
{% endif %}

{% if (moyenne>=4.5) and (moyenne<5)  %}
    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star-half-empty\" style=\" font-size:36px; color: orange;\" ></i>
    </div>
{% endif %}
{% if (moyenne==5)  %}
    <div>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
        <i class=\"fa fa-star checked\" style=\"font-size:36px; color: orange;\"></i>
    </div>
{% endif %}
", "soin_mp/moyenne.html.twig", "C:\\Users\\Emna\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\moyenne.html.twig");
    }
}
