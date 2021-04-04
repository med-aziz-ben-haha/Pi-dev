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

/* includes/admin/modal-post-gallery.html.twig */
class __TwigTemplate_b7344f17c978dd15fd3b3de09e7f755c0ec90c1f72d31dc17a68c25050d8d7a8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/modal-post-gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/modal-post-gallery.html.twig"));

        // line 1
        echo "<div class=\"modal fade js-modal-post-gallery\">
  <div class=\"modal-dialog modal-lg modal-dialog-post-gallery\">
    <div class=\"modal-content modal-content-post-gallery\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>

        <h4 class=\"modal-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.general.gallery"), "html", null, true);
        echo "</h4>
      </div>

      <div class=\"modal-body modal-body-post-gallery js-modal-body-post-gallery\">
        <div class=\"modal-post-gallery-content\">
          <div class=\"row js-modal-post-gallery-content\">
            <div class=\"col-xs-12 col-sm-6 col-md-2 modal-post-gallery-file is-copy js-modal-post-gallery-file\">
              <div class=\"thumbnail modal-post-gallery-file-thumbnail\">
                <input type=\"checkbox\"
                       name=\"modalPostGalleryImage[]\"
                       class=\"modal-post-gallery-file-checkbox js-modal-post-gallery-file-checkbox\">

                <label class=\"modal-post-gallery-file-label js-modal-post-gallery-file-label\">
                  <img src=\"https://dummyimage.com/600x400/d1d1d1/ffffff\"
                       alt=\"...\"
                       class=\"img-responsive js-modal-post-gallery-file-img\"/>
                </label>
              </div>
            </div>
          </div>

          <div class=\"modal-body-post-gallery-loading js-modal-body-post-gallery-loading\">
            ";
        // line 32
        echo "          </div>
        </div>
      </div>

      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-danger js-modal-close\" data-dismiss=\"modal\">
          ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.close"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/admin/modal-post-gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  78 => 32,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade js-modal-post-gallery\">
  <div class=\"modal-dialog modal-lg modal-dialog-post-gallery\">
    <div class=\"modal-content modal-content-post-gallery\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>

        <h4 class=\"modal-title\">{{ 'app.general.gallery'|trans }}</h4>
      </div>

      <div class=\"modal-body modal-body-post-gallery js-modal-body-post-gallery\">
        <div class=\"modal-post-gallery-content\">
          <div class=\"row js-modal-post-gallery-content\">
            <div class=\"col-xs-12 col-sm-6 col-md-2 modal-post-gallery-file is-copy js-modal-post-gallery-file\">
              <div class=\"thumbnail modal-post-gallery-file-thumbnail\">
                <input type=\"checkbox\"
                       name=\"modalPostGalleryImage[]\"
                       class=\"modal-post-gallery-file-checkbox js-modal-post-gallery-file-checkbox\">

                <label class=\"modal-post-gallery-file-label js-modal-post-gallery-file-label\">
                  <img src=\"https://dummyimage.com/600x400/d1d1d1/ffffff\"
                       alt=\"...\"
                       class=\"img-responsive js-modal-post-gallery-file-img\"/>
                </label>
              </div>
            </div>
          </div>

          <div class=\"modal-body-post-gallery-loading js-modal-body-post-gallery-loading\">
            {# JS to show loading img. #}
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
<!-- /.modal -->", "includes/admin/modal-post-gallery.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\includes\\admin\\modal-post-gallery.html.twig");
    }
}
