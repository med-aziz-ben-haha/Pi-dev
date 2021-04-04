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

/* includes/admin/footer.html.twig */
class __TwigTemplate_c6675b7824231bce4bc12c018c26c72bfc2ebc0b76ede5917cb97e4211a14653 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/footer.html.twig"));

        // line 1
        echo "<!-- /.content-wrapper -->
<footer class=\"main-footer\">
  <div class=\"pull-right hidden-xs\">
    <b>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.footer.version"), "html", null, true);
        echo "</b> ";
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "

    <a href=\"https://github.com/med-aziz-ben-haha/Pi-dev\"
       target=\"_blank\"
       class=\"main-footer-github-link\">
      <i class=\"fa fa-github\" aria-hidden=\"true\"></i>
    </a>
  </div>

  <strong>
    Copyright &copy; 2019 - ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
    <a href=\"#\" target=\"_blank\">Sa7ti.tn</a>.
  </strong>

  ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.footer.all_rights_reserved"), "html", null, true);
        echo "
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/admin/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  63 => 14,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- /.content-wrapper -->
<footer class=\"main-footer\">
  <div class=\"pull-right hidden-xs\">
    <b>{{ 'admin.footer.version'|trans }}</b> {{ version }}

    <a href=\"https://github.com/med-aziz-ben-haha/Pi-dev\"
       target=\"_blank\"
       class=\"main-footer-github-link\">
      <i class=\"fa fa-github\" aria-hidden=\"true\"></i>
    </a>
  </div>

  <strong>
    Copyright &copy; 2019 - {{ \"now\"|date(\"Y\") }}
    <a href=\"#\" target=\"_blank\">Sa7ti.tn</a>.
  </strong>

  {{ 'admin.footer.all_rights_reserved'|trans }}
</footer>", "includes/admin/footer.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\includes\\admin\\footer.html.twig");
    }
}
