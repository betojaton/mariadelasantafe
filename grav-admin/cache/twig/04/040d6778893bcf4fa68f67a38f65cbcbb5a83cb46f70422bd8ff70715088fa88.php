<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog.html.twig */
class __TwigTemplate_e7b5261720de9173361c6a303f0a2ae96e4f5fb4d5ffee6cdb97b043db45e89e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.html.twig"));

        // line 2
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_breadcrumbs", [], "any", true, true)) {
            // line 6
            $context["show_breadcrumbs"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_breadcrumbs", []);
        } else {
            // line 8
            $context["show_breadcrumbs"] = true;
        }
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_sidebar", [], "any", true, true)) {
            // line 11
            $context["show_sidebar"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_sidebar", []);
        } else {
            // line 13
            $context["show_sidebar"] = true;
        }
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_pagination", [], "any", true, true)) {
            // line 16
            $context["show_pagination"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_pagination", []);
        } else {
            // line 18
            $context["show_pagination"] = true;
        }
        // line 32
        if (( !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "standalone"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bricklayer.css"], "method");
        // line 23
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 28
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/bricklayer.min.js"], "method");
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 33
    public function block_hero($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 34
        echo "        ";
        $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 34)->display(twig_array_merge($context, ["id" => "blog-hero", "content" => $this->getAttribute(($context["page"] ?? null), "content", []), "hero_image" => ($context["blog_image"] ?? null)]));
        // line 35
        echo "    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    <section id=\"body-wrapper\" class=\"section blog-listing\" >
        <section class=\"container bg-light rounded\" ";
        // line 40
        echo ($context["grid_size"] ?? null);
        echo "\" >
<div class=\"sidebar-content recent-posts\">
    <h3>Recent Posts</h3>
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []), "order", [0 => "date", 1 => "desc"], "method"), "slice", [0 => 0, 1 => 5], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 44
            echo "        ";
            $context["bannerimage"] = $this->getAttribute($this->getAttribute($context["p"], "media", []), "banner.jpg", [], "array");
            // line 45
            echo "        <div class=\"recent-post\">
            ";
            // line 46
            if (($context["bannerimage"] ?? null)) {
                // line 47
                echo "                <div class=\"recent-post-image\">";
                echo $this->getAttribute($this->getAttribute(($context["bannerimage"] ?? null), "cropZoom", [0 => 60, 1 => 60], "method"), "quality", [0 => 60], "method");
                echo "</div>
            ";
            } else {
                // line 49
                echo "                <div class=\"recent-post-image\"><img src=\"";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.png");
                echo "\" width=\"60\" height=\"60\"></div>
            ";
            }
            // line 51
            echo "            <div class=\"recent-post-text\">
                <h4><a href=\"";
            // line 52
            echo $this->getAttribute($context["p"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["p"], "title", []);
            echo "</a></h4>
                <p>";
            // line 53
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "M j, Y");
            echo "</p>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</div>
            <h2>Noticias</h2>
            ";
        // line 59
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 60
            echo "                ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 60)->display($context);
            // line 61
            echo "            ";
        }
        // line 62
        echo "
            ";
        // line 63
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 63, "774445095")->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 126
        echo "        </section>

    </section>
    <script>
        //Bricklayer
        ";
        // line 131
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "bricklayer_layout", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bricklayer_layout", []))) {
            // line 132
            echo "            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        ";
        }
        // line 134
        echo "    </script>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 134,  217 => 132,  215 => 131,  208 => 126,  206 => 63,  203 => 62,  200 => 61,  197 => 60,  195 => 59,  191 => 57,  181 => 53,  175 => 52,  172 => 51,  166 => 49,  160 => 47,  158 => 46,  155 => 45,  152 => 44,  148 => 43,  142 => 40,  139 => 39,  133 => 38,  126 => 35,  123 => 34,  117 => 33,  110 => 28,  105 => 27,  99 => 26,  89 => 23,  86 => 22,  80 => 21,  72 => 1,  69 => 32,  66 => 18,  63 => 16,  61 => 15,  58 => 13,  55 => 11,  53 => 10,  50 => 8,  47 => 6,  45 => 5,  43 => 3,  41 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{# revise checks for Blog list page options - hibbittsdesign.org #}
{% if page.header.show_breadcrumbs is defined %}
    {% set show_breadcrumbs = page.header.show_breadcrumbs %}
{% else %}
    {% set show_breadcrumbs = true %}
{% endif %}
{% if page.header.show_sidebar is defined %}
    {% set show_sidebar = page.header.show_sidebar %}
{% else %}
    {% set show_sidebar = true %}
{% endif %}
{% if page.header.show_pagination is defined %}
    {% set show_pagination = page.header.show_pagination %}
{% else %}
    {% set show_pagination = true %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}

{# check content display flag - hibbittsdesign.org #}
{% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) %}
    {% block hero %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
    {% endblock %}
{% endif %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\" >
        <section class=\"container bg-light rounded\" {{ grid_size }}\" >
<div class=\"sidebar-content recent-posts\">
    <h3>Recent Posts</h3>
    {% for p in page.find('/blog').children.order('date', 'desc').slice(0, 5) %}
        {% set bannerimage = p.media['banner.jpg'] %}
        <div class=\"recent-post\">
            {% if bannerimage %}
                <div class=\"recent-post-image\">{{ bannerimage.cropZoom(60,60).quality(60) }}</div>
            {% else %}
                <div class=\"recent-post-image\"><img src=\"{{ url('theme://images/logo.png') }}\" width=\"60\" height=\"60\"></div>
            {% endif %}
            <div class=\"recent-post-text\">
                <h4><a href=\"{{p.url}}\">{{ p.title }}</a></h4>
                <p>{{ p.date|date(\"M j, Y\")}}</p>
            </div>
        </div>
    {% endfor %}
</div>
            <h2>Noticias</h2>
            {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}

            {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

            {# Added support for modular page content - hibbittsdesign.org #}
            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
              <div class=\"bricklayermodulars\">
            {% else %}
              <div>
            {% endif %}
              {% if page.collection('modular_content') is not empty %}
              {% for module in page.collection('modular_content') %}
                {% if (module.content|striptags)|trim %}
                  <p>{{ module.content|raw }}</p>
                {% endif %}
              {% endfor %}
            {% endif %}
            </div>

            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            <div class=\"bricklayer\">
                {% else %}
                <div>
                    {% endif %}

                    {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
                    {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                        {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                    {% endfor %}

                    {# display posts without 'featured' tag - hibbittsdesign.org #}
                    {% for child in collection %}
                        {% if \"featured\" not in child.taxonomy['tag'] %}
                            {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                        {% endif %}
                    {% endfor %}

                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

                <div style=\"text-align:center;\">
                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license) and not (grav.uri.param('onlysummary'))) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}
                </div>

                {% endblock %}

                {# check content display flag - hibbittsdesign.org #}
                {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) %}
                    {% block sidebar %}
                        {% include 'partials/sidebar.html.twig' %}
                    {% endblock %}
                {% endif %}
                {% endembed %}
        </section>

    </section>
    <script>
        //Bricklayer
        {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        {% endif %}
    </script>
{% endblock %}
", "blog.html.twig", "C:\\xampp\\htdocs\\mariadelasantafe_org_ar\\grav-admin\\user\\themes\\quark-open-publishing\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_e7b5261720de9173361c6a303f0a2ae96e4f5fb4d5ffee6cdb97b043db45e89e___774445095 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 63
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.html.twig"));

        // line 120
        if (( !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "standalone"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled"))) {
        }
        // line 63
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "blog.html.twig", 63);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 64
    public function block_item($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 65
        echo "
            ";
        // line 67
        echo "            ";
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "bricklayer_layout", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bricklayer_layout", []))) {
            // line 68
            echo "              <div class=\"bricklayermodulars\">
            ";
        } else {
            // line 70
            echo "              <div>
            ";
        }
        // line 72
        echo "              ";
        if ( !twig_test_empty($this->getAttribute(($context["page"] ?? null), "collection", [0 => "modular_content"], "method"))) {
            // line 73
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [0 => "modular_content"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 74
                echo "                ";
                if (twig_trim_filter(strip_tags($this->getAttribute($context["module"], "content", [])))) {
                    // line 75
                    echo "                  <p>";
                    echo $this->getAttribute($context["module"], "content", []);
                    echo "</p>
                ";
                }
                // line 77
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "            ";
        }
        // line 79
        echo "            </div>

            ";
        // line 81
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "bricklayer_layout", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bricklayer_layout", []))) {
            // line 82
            echo "            <div class=\"bricklayer\">
                ";
        } else {
            // line 84
            echo "                <div>
                    ";
        }
        // line 86
        echo "
                    ";
        // line 88
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["tag" => "featured"]], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 89
            echo "                        ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 89)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 90
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
                    ";
        // line 93
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 94
            echo "                        ";
            if (!twig_in_filter("featured", $this->getAttribute($this->getAttribute($context["child"], "taxonomy", []), "tag", [], "array"))) {
                // line 95
                echo "                            ";
                $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 95)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
                // line 96
                echo "                        ";
            }
            // line 97
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                </div>

                ";
        // line 101
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 102
            echo "                    <div id=\"listing-footer\">
                        ";
            // line 103
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 103)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 104
            echo "                    </div>
                ";
        }
        // line 106
        echo "
                <div style=\"text-align:center;\">
                    ";
        // line 108
        echo " ";
        // line 109
        echo "                    ";
        if ((($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "display_of_git_sync_repo_link") == "page") &&  !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "summaryonly"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method")))) {
            // line 110
            echo "                        <p>";
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "blog.html.twig", 110)->display($context);
            echo "</p>
                    ";
        }
        // line 112
        echo "                    ";
        if ((( !(($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "standalone"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "chromeless.enabled")) && (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_cc_license", [])) &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "onlysummary"], "method")))) {
            // line 113
            echo "                        <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "blog.html.twig", 113)->display($context);
            echo "</p>
                    ";
        }
        // line 115
        echo "                </div>

                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 121
    public function block_sidebar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 122
        echo "                        ";
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 122)->display($context);
        // line 123
        echo "                    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 123,  626 => 122,  620 => 121,  611 => 115,  605 => 113,  602 => 112,  596 => 110,  593 => 109,  591 => 108,  587 => 106,  583 => 104,  581 => 103,  578 => 102,  576 => 101,  571 => 98,  557 => 97,  554 => 96,  551 => 95,  548 => 94,  530 => 93,  527 => 91,  513 => 90,  510 => 89,  492 => 88,  489 => 86,  485 => 84,  481 => 82,  479 => 81,  475 => 79,  472 => 78,  466 => 77,  460 => 75,  457 => 74,  452 => 73,  449 => 72,  445 => 70,  441 => 68,  438 => 67,  435 => 65,  429 => 64,  421 => 63,  418 => 120,  409 => 63,  221 => 134,  217 => 132,  215 => 131,  208 => 126,  206 => 63,  203 => 62,  200 => 61,  197 => 60,  195 => 59,  191 => 57,  181 => 53,  175 => 52,  172 => 51,  166 => 49,  160 => 47,  158 => 46,  155 => 45,  152 => 44,  148 => 43,  142 => 40,  139 => 39,  133 => 38,  126 => 35,  123 => 34,  117 => 33,  110 => 28,  105 => 27,  99 => 26,  89 => 23,  86 => 22,  80 => 21,  72 => 1,  69 => 32,  66 => 18,  63 => 16,  61 => 15,  58 => 13,  55 => 11,  53 => 10,  50 => 8,  47 => 6,  45 => 5,  43 => 3,  41 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{# revise checks for Blog list page options - hibbittsdesign.org #}
{% if page.header.show_breadcrumbs is defined %}
    {% set show_breadcrumbs = page.header.show_breadcrumbs %}
{% else %}
    {% set show_breadcrumbs = true %}
{% endif %}
{% if page.header.show_sidebar is defined %}
    {% set show_sidebar = page.header.show_sidebar %}
{% else %}
    {% set show_sidebar = true %}
{% endif %}
{% if page.header.show_pagination is defined %}
    {% set show_pagination = page.header.show_pagination %}
{% else %}
    {% set show_pagination = true %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}

{# check content display flag - hibbittsdesign.org #}
{% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) %}
    {% block hero %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
    {% endblock %}
{% endif %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\" >
        <section class=\"container bg-light rounded\" {{ grid_size }}\" >
<div class=\"sidebar-content recent-posts\">
    <h3>Recent Posts</h3>
    {% for p in page.find('/blog').children.order('date', 'desc').slice(0, 5) %}
        {% set bannerimage = p.media['banner.jpg'] %}
        <div class=\"recent-post\">
            {% if bannerimage %}
                <div class=\"recent-post-image\">{{ bannerimage.cropZoom(60,60).quality(60) }}</div>
            {% else %}
                <div class=\"recent-post-image\"><img src=\"{{ url('theme://images/logo.png') }}\" width=\"60\" height=\"60\"></div>
            {% endif %}
            <div class=\"recent-post-text\">
                <h4><a href=\"{{p.url}}\">{{ p.title }}</a></h4>
                <p>{{ p.date|date(\"M j, Y\")}}</p>
            </div>
        </div>
    {% endfor %}
</div>
            <h2>Noticias</h2>
            {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}

            {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

            {# Added support for modular page content - hibbittsdesign.org #}
            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
              <div class=\"bricklayermodulars\">
            {% else %}
              <div>
            {% endif %}
              {% if page.collection('modular_content') is not empty %}
              {% for module in page.collection('modular_content') %}
                {% if (module.content|striptags)|trim %}
                  <p>{{ module.content|raw }}</p>
                {% endif %}
              {% endfor %}
            {% endif %}
            </div>

            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            <div class=\"bricklayer\">
                {% else %}
                <div>
                    {% endif %}

                    {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
                    {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                        {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                    {% endfor %}

                    {# display posts without 'featured' tag - hibbittsdesign.org #}
                    {% for child in collection %}
                        {% if \"featured\" not in child.taxonomy['tag'] %}
                            {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                        {% endif %}
                    {% endfor %}

                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

                <div style=\"text-align:center;\">
                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly') or grav.uri.param('onlysummary')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) and (theme_var('cc_license.enabled') and not(page.header.hide_cc_license) and not (grav.uri.param('onlysummary'))) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}
                </div>

                {% endblock %}

                {# check content display flag - hibbittsdesign.org #}
                {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded') or grav.uri.param('standalone')) and not(theme_var('chromeless.enabled')) %}
                    {% block sidebar %}
                        {% include 'partials/sidebar.html.twig' %}
                    {% endblock %}
                {% endif %}
                {% endembed %}
        </section>

    </section>
    <script>
        //Bricklayer
        {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        {% endif %}
    </script>
{% endblock %}
", "blog.html.twig", "C:\\xampp\\htdocs\\mariadelasantafe_org_ar\\grav-admin\\user\\themes\\quark-open-publishing\\templates\\blog.html.twig");
    }
}
