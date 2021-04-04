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

/* includes/footer.html.twig */
class __TwigTemplate_dc45f5835c616a865ceda8db7b57315792686f417221260b2358d3824668d7bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        // line 1
        echo "<!-- Footer -->

<hr>
";
        // line 16
        echo "<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 col-lg-4\">
        <div class=\"footer-col\">
          <h3 class=\"footer-title\">About</h3>
          <p class=\"mb-0\">Un doute, une inquiétude, besoin d’un conseil santé ? Sa7ti.TN c’est la solution</p>
        </div>
      </div>
      <div class=\"col-md-3 col-lg-2\">
        <div class=\"footer-col\">

        </div>
      </div>
      <div class=\"col-md-3 col-lg-2\">
        <div class=\"footer-col\">

        </div>
      </div>
      <div class=\"col-md-6 col-lg-4\">
        <div class=\"footer-col\">
          <h3 class=\"footer-title\">Contact</h3>
          <p><a href=\"tel:+14336331111\"><i class=\"fas fa-phone mr-2\"></i> +216 00000000</a> </p>
          <p class=\"mb-0\"><a href=\"mailto:contact@angrystudio.com\"><i class=\"far fa-envelope mr-2\"></i>sahtitnpidev@gmail.com</a> </p>
        </div>
      </div>
    </div>
    <div class=\"row footer-credits\">
      <div class=\"col-lg-8 col-md-10 mx-auto\">

        <p class=\"copyright text-muted\">Copyright &copy; RunTime Terror 2021</p>
      </div>
    </div>
  </div>
</footer>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.2.1.slim.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://kit.fontawesome.com/9b697a719a.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
<script>
  \$(function () {
    'use strict'

    \$('[data-toggle=\"offcanvas\"]').on('click', function () {
      \$('.hk-offcanvas').toggleClass('open')
    })
  })
</script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 55,  97 => 54,  93 => 53,  89 => 52,  85 => 51,  48 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->

<hr>
{#
<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-10 mx-auto\">

        <p class=\"copyright text-muted\">Copyright &copy; RunTime Terror 2021</p>
      </div>
    </div>
  </div>
</footer>
#}
<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 col-lg-4\">
        <div class=\"footer-col\">
          <h3 class=\"footer-title\">About</h3>
          <p class=\"mb-0\">Un doute, une inquiétude, besoin d’un conseil santé ? Sa7ti.TN c’est la solution</p>
        </div>
      </div>
      <div class=\"col-md-3 col-lg-2\">
        <div class=\"footer-col\">

        </div>
      </div>
      <div class=\"col-md-3 col-lg-2\">
        <div class=\"footer-col\">

        </div>
      </div>
      <div class=\"col-md-6 col-lg-4\">
        <div class=\"footer-col\">
          <h3 class=\"footer-title\">Contact</h3>
          <p><a href=\"tel:+14336331111\"><i class=\"fas fa-phone mr-2\"></i> +216 00000000</a> </p>
          <p class=\"mb-0\"><a href=\"mailto:contact@angrystudio.com\"><i class=\"far fa-envelope mr-2\"></i>sahtitnpidev@gmail.com</a> </p>
        </div>
      </div>
    </div>
    <div class=\"row footer-credits\">
      <div class=\"col-lg-8 col-md-10 mx-auto\">

        <p class=\"copyright text-muted\">Copyright &copy; RunTime Terror 2021</p>
      </div>
    </div>
  </div>
</footer>
<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('https://code.jquery.com/jquery-3.2.1.slim.min.js') }}\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('https://kit.fontawesome.com/9b697a719a.js') }}\" crossorigin=\"anonymous\"></script>
<script>
  \$(function () {
    'use strict'

    \$('[data-toggle=\"offcanvas\"]').on('click', function () {
      \$('.hk-offcanvas').toggleClass('open')
    })
  })
</script>

", "includes/footer.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\includes\\footer.html.twig");
    }
}
