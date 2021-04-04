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

/* includes/admin/sidebar-left.html.twig */
class __TwigTemplate_d05216b9be69ce77734bfafcd172ef75eb058f3f25c7c6f4ba907f99727cdfd8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/sidebar-left.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/sidebar-left.html.twig"));

        // line 1
        echo "<!-- Left side column. contains the logo and sidebar -->
<aside class=\"main-sidebar\" style=\"background-color: grey; color:white\">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class=\"sidebar\">
    <!-- Sidebar user panel -->
    <div class=\"user-panel\">
      <div class=\"pull-left image\">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
      </div>
      <div class=\"pull-left info\">
        <p>Emna Besbes</p>
        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
      </div>
    </div>
    ";
        // line 28
        echo "    <!-- sidebar menu: : style can be found in sidebar.less -->













    <ul class=\"sidebar-menu\" data-widget=\"tree\">





      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-dashboard\"></i> <span>Medecine Parallele</span>
          <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"/afficherCategorieSoinMP\"><i class=\"fa fa-circle-o\"></i>Catégories soins</a></li>
          <li><a href=\"/afficherSoinMP\"><i class=\"fa fa-circle-o\"></i>Soins</a></li>
          <li><a href=\"/afficherStatSoinMP\"><i class=\"fa fa-circle-o\"></i> Statistiques</a></li>
        </ul>
      </li>

      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-dashboard\"></i> <span>Reclamations</span>
          <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"/afficherreclamation\"><i class=\"fa fa-circle-o\"></i> Reclamations</a></li>
          <li><a href=\"/affichertypereclamation\"><i class=\"fa fa-circle-o\"></i>Types Reclamations</a></li>
        </ul>
      </li>

      <li><a href=\"/afficheRegions\"><i class=\"fa fa-book\"></i> <span>Regions</span></a></li>
      <li><a href=\"/affichePara\"><i class=\"fa fa-book\"></i> <span>Parapharmacies</span></a></li>
      <li><a href=\"/afficheBackProduit\"><i class=\"fa fa-book\"></i> <span>Produits</span></a></li>

      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-question\" aria-hidden=\"true\"></i> <span>Forums</span>
          <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"/afficherCategoriePost\"><i class=\"fa fa-circle-o\"></i> Catégories posts</a></li>
          <!--<li><a href=\"/afficherDiscussion\"><i class=\"fa fa-circle-o\"></i> Gestion des discussions</a></li>-->

        </ul>
      </li>
      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>Calendar</span>
          <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
        <ul class=\"treeview-menu\">

          <li><a href=\"/calendar\"><i class=\"fa fa-calendar\"></i> Afficher </a></li>
          <li><a href=\"/calendar/new\"><i class=\"fa fa-calendar\"></i> Ajouter </a></li>

        </ul>
      </li>
      <li><a href=\"/centreMedical/\"><i class=\"fa fa-book\"></i> <span>Centres médicaux</span></a></li>


      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-list\"></i> <span>";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.posts"), "html", null, true);
        echo "</span>
          <span class=\"pull-right-container\">
          <i class=\"fa fa-angle-left pull-right\"></i>
        </span>
        </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_add");
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.add"), "html", null, true);
        echo "</a></li>
          <li><a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.list_all"), "html", null, true);
        echo "</a></li>
        </ul>
      </li>
      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-tags\"></i> <span>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.categories"), "html", null, true);
        echo "</span>
          <span class=\"pull-right-container\">
          <i class=\"fa fa-angle-left pull-right\"></i>
        </span>
        </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_add");
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.add"), "html", null, true);
        echo "</a></li>
          <li><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.list_all"), "html", null, true);
        echo "</a></li>
        </ul>
      </li>
      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-picture-o\"></i> <span>";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.medias"), "html", null, true);
        echo "</span>
          <span class=\"pull-right-container\">
          <i class=\"fa fa-angle-left pull-right\"></i>
        </span>
        </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_media_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.action.list_all"), "html", null, true);
        echo "</a></li>
        </ul>
      </li>

";
        // line 138
        echo "    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/admin/sidebar-left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 138,  194 => 129,  185 => 123,  175 => 118,  169 => 117,  160 => 111,  150 => 106,  144 => 105,  135 => 99,  62 => 28,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Left side column. contains the logo and sidebar -->
<aside class=\"main-sidebar\" style=\"background-color: grey; color:white\">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class=\"sidebar\">
    <!-- Sidebar user panel -->
    <div class=\"user-panel\">
      <div class=\"pull-left image\">
        <img src=\"{{ asset('bundles/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
      </div>
      <div class=\"pull-left info\">
        <p>Emna Besbes</p>
        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
      </div>
    </div>
    {#
    <!-- search form -->
    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
      <div class=\"input-group\">
        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
        <span class=\"input-group-btn\">
            <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
            </button>
          </span>
      </div>
    </form>
    <!-- /.search form -->
    #}
    <!-- sidebar menu: : style can be found in sidebar.less -->













    <ul class=\"sidebar-menu\" data-widget=\"tree\">





      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-dashboard\"></i> <span>Medecine Parallele</span>
          <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"/afficherCategorieSoinMP\"><i class=\"fa fa-circle-o\"></i>Catégories soins</a></li>
          <li><a href=\"/afficherSoinMP\"><i class=\"fa fa-circle-o\"></i>Soins</a></li>
          <li><a href=\"/afficherStatSoinMP\"><i class=\"fa fa-circle-o\"></i> Statistiques</a></li>
        </ul>
      </li>

      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-dashboard\"></i> <span>Reclamations</span>
          <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"/afficherreclamation\"><i class=\"fa fa-circle-o\"></i> Reclamations</a></li>
          <li><a href=\"/affichertypereclamation\"><i class=\"fa fa-circle-o\"></i>Types Reclamations</a></li>
        </ul>
      </li>

      <li><a href=\"/afficheRegions\"><i class=\"fa fa-book\"></i> <span>Regions</span></a></li>
      <li><a href=\"/affichePara\"><i class=\"fa fa-book\"></i> <span>Parapharmacies</span></a></li>
      <li><a href=\"/afficheBackProduit\"><i class=\"fa fa-book\"></i> <span>Produits</span></a></li>

      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-question\" aria-hidden=\"true\"></i> <span>Forums</span>
          <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"/afficherCategoriePost\"><i class=\"fa fa-circle-o\"></i> Catégories posts</a></li>
          <!--<li><a href=\"/afficherDiscussion\"><i class=\"fa fa-circle-o\"></i> Gestion des discussions</a></li>-->

        </ul>
      </li>
      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> <span>Calendar</span>
          <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
        <ul class=\"treeview-menu\">

          <li><a href=\"/calendar\"><i class=\"fa fa-calendar\"></i> Afficher </a></li>
          <li><a href=\"/calendar/new\"><i class=\"fa fa-calendar\"></i> Ajouter </a></li>

        </ul>
      </li>
      <li><a href=\"/centreMedical/\"><i class=\"fa fa-book\"></i> <span>Centres médicaux</span></a></li>


      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-list\"></i> <span>{{ 'admin.posts'|trans }}</span>
          <span class=\"pull-right-container\">
          <i class=\"fa fa-angle-left pull-right\"></i>
        </span>
        </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"{{ path('admin_post_add') }}\"><i class=\"fa fa-circle-o\"></i> {{ 'admin.action.add'|trans }}</a></li>
          <li><a href=\"{{ path('admin_post_index') }}\"><i class=\"fa fa-circle-o\"></i> {{ 'admin.action.list_all'|trans }}</a></li>
        </ul>
      </li>
      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-tags\"></i> <span>{{ 'admin.categories'|trans }}</span>
          <span class=\"pull-right-container\">
          <i class=\"fa fa-angle-left pull-right\"></i>
        </span>
        </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"{{ path('admin_category_add') }}\"><i class=\"fa fa-circle-o\"></i> {{ 'admin.action.add'|trans }}</a></li>
          <li><a href=\"{{ path('admin_category_index') }}\"><i class=\"fa fa-circle-o\"></i> {{ 'admin.action.list_all'|trans }}</a></li>
        </ul>
      </li>
      <li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-picture-o\"></i> <span>{{ 'admin.medias'|trans }}</span>
          <span class=\"pull-right-container\">
          <i class=\"fa fa-angle-left pull-right\"></i>
        </span>
        </a>
        <ul class=\"treeview-menu\">
          <li><a href=\"{{ path('admin_media_index') }}\"><i class=\"fa fa-circle-o\"></i> {{ 'admin.action.list_all'|trans }}</a></li>
        </ul>
      </li>

{#
      <li>
        <a href=\"{{ path('admin_setting_index') }}\"><i class=\"fa fa-sliders\"></i> <span>{{ 'admin.settings'|trans }}</span></a>
      </li>
#}
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
", "includes/admin/sidebar-left.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\includes\\admin\\sidebar-left.html.twig");
    }
}
