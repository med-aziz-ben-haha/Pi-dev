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

/* includes/meta.html.twig */
class __TwigTemplate_97d365887996132228fba2381afec04b5043e4f0071e3777729bee9a5af970b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/meta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/meta.html.twig"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("{#  {%- spaceless %}
    {% set metaPublisher = 'Sa7ti.tn' %}
    {% set metaSiteName = name_site %}
    {% set metaLocaleParts = app.request.locale|split('_') %}
    {% set metaLanguage = metaLocaleParts[0] %}
    {% set metaCountry = metaLocaleParts[1]|default(null) %}
    {% set metaLocale = metaLocaleParts|length == 1 ? metaLanguage : metaLanguage ~ '_' ~ metaCountry|upper %}
    {% set metaUrl = app.request.uri %}

    {# Get meta title.
    {% set metaTitle = metaTitle|default(metaSiteName) %}

    {# Get meta description.
    {% set metaDescription = metaDescription|default('') %}
    {% if metaDescription|trim %}
        {% set metaDescription = metaDescription|length > 320 ? metaDescription|slice(0, 316) ~ ' ...' : metaDescription %}
    {% endif %}

    {# Get meta image.
    {% set metaImage = asset(metaImage|default('/images/Logo.jpg'))|imagine_filter('640x420') %}

    {% set metaBotTags = {
        'revisit-after': '2 days',
    } %}

    {% set metaDefaultTags = {
        'language': metaLanguage,
        'publisher': metaPublisher,
        'author': metaSiteName,
        'copyright': metaSiteName,
        'audience': 'all',
        'distribution': 'global',
        'image': metaImage,
    } %}

    {% set metaDCTags = {
        'DC.Title': metaTitle,
        'DC.Publisher': metaPublisher,
        'DC.Copyright': metaSiteName,
    } %}

    {% set metaTwitterTags = {
        'twitter:card': 'summary',
        'twitter:url': metaUrl,
        'twitter:title': metaTitle,
        'twitter:description': metaDescription,
        'twitter:image': metaImage,
    } %}

    {% set ogMetaTags = {
        'og:site_name': metaSiteName,
        'og:url': metaUrl,
        'og:title': metaTitle,
        'og:image': metaImage,
        'og:type': 'website',
        'og:description': metaDescription,
        'og:locale': metaLocale
    } %}
{% endspaceless -%}

{% block title %}
        <title>{{ metaTitle }}</title>
{%- endblock -%}

{%- block description -%}
    {%- if metaDescription -%}
        <meta name=\"description\" content=\"{{ metaDescription }}\"/>
    {%- endif -%}
{%- endblock -%}

{# Meta Bot Tags
{% block metaBotTags %}
    {% for property, value in metaBotTags if value %}
        <meta name=\"{{ property }}\" content=\"{{ value }}\"/>
    {% endfor %}
{% endblock %}

{# Meta Default Tags
{% block metaDefaultTags %}
    {% for property, value in metaDefaultTags if value %}
        <meta name=\"{{ property }}\" content=\"{{ value }}\"/>
    {% endfor %}
{% endblock %}

{# Meta DC Tags
{% block metaDCTags %}
    {% for property, value in metaDCTags if value %}
        <meta name=\"{{ property }}\" content=\"{{ value }}\"/>
    {% endfor %}
{% endblock %}

{# Meta Twitter Tags
{% block metaTwitterTags %}
    {% for property, value in metaTwitterTags if value %}
        <meta name=\"{{ property }}\" content=\"{{ value }}\"/>
    {% endfor %}
{% endblock %}

{# Meta OG Tags
{% block ogMetaTags %}
    {% for property, value in ogMetaTags if value %}
        <meta property=\"{{ property }}\" content=\"{{ value }}\"/>
    {% endfor %}
{% endblock %}

{# Google gtag
{% if setting().googleGtagId is defined and setting().googleGtagId is not empty %}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id={{ setting().googleGtagId }}\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ setting().googleGtagId }}');
    </script>
{%- endif -%}
#}
", "includes/meta.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\includes\\meta.html.twig");
    }
}
