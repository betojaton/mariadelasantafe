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

/* partials/navigation.html.twig */
class __TwigTemplate_6ea59ea4a00fa296b89bfdbcf14c46599813065b6f2daf1b42329a32ffd2e8fa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navigation.html.twig"));

        // line 29
        echo "
";
        // line 30
        $this->loadTemplate("partials/socialmedia.html.twig", "partials/navigation.html.twig", 30)->display($context);
        // line 31
        echo "
<ul ";
        // line 32
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 33
        $context["macros"] = $this;
        // line 34
        echo "    ";
        echo $context["macros"]->getnav_loop(($context["pages"] ?? null), ($context["hide_home_menu_link"] ?? null), ($context["home_alias"] ?? null));
        echo "
    ";
        // line 36
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "displaycustommenus.enabled")) {
            // line 37
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "menu"));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 38
                echo "            <li>
                <a href=\"";
                // line 39
                echo $this->getAttribute($context["mitem"], "url", []);
                echo "\" target=\"";
                echo $this->getAttribute($context["mitem"], "target", []);
                echo "\">
                    ";
                // line 40
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    // line 41
                    echo "                        <i class=\"fa fa-";
                    echo $this->getAttribute($context["mitem"], "icon", []);
                    echo "\"></i>
                    ";
                }
                // line 43
                echo "                    ";
                echo $this->getAttribute($context["mitem"], "text", []);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    ";
        }
        // line 48
        echo "    ";
        // line 49
        echo "    ";
        if ((($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "display_of_git_sync_repo_link") == "menu") || ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "display_of_git_sync_repo_link") == ($context["empty"] ?? null)))) {
            // line 50
            echo "        <li>";
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/navigation.html.twig", 50)->display($context);
            echo "</li>
    ";
        }
        // line 52
        echo "</ul>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 1
    public function getnav_loop($__page__ = null, $__hide_home_menu_link__ = null, $__home_alias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "hide_home_menu_link" => $__hide_home_menu_link__,
            "home_alias" => $__home_alias__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nav_loop"));

            // line 2
            echo "    ";
            $context["macros"] = $this;
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "        ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 5
                echo "        ";
                if (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "dropdown.enabled") && ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0))) {
                    // line 6
                    echo "            <li>
                <a href=\"";
                    // line 7
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo ($context["active_page"] ?? null);
                    echo "\">
                    ";
                    // line 8
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        // line 9
                        echo "                        <i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>
                    ";
                    }
                    // line 11
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
                <ul>
                    ";
                    // line 14
                    echo $context["macros"]->getnav_loop($context["p"]);
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 18
                    echo "            <li>
                <a href=\"";
                    // line 19
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo ($context["active_page"] ?? null);
                    echo "\">
                    ";
                    // line 20
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        // line 21
                        echo "                        <i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>
                    ";
                    }
                    // line 23
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </li>
        ";
                }
                // line 27
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 27,  189 => 23,  183 => 21,  181 => 20,  175 => 19,  172 => 18,  165 => 14,  158 => 11,  152 => 9,  150 => 8,  144 => 7,  141 => 6,  138 => 5,  135 => 4,  130 => 3,  127 => 2,  110 => 1,  102 => 52,  96 => 50,  93 => 49,  91 => 48,  88 => 47,  77 => 43,  71 => 41,  69 => 40,  63 => 39,  60 => 38,  55 => 37,  52 => 36,  47 => 34,  45 => 33,  41 => 32,  38 => 31,  36 => 30,  33 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_loop(page, hide_home_menu_link, home_alias) %}
    {% import _self as macros %}
    {% for p in page.children.visible %}
        {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if theme_var('dropdown.enabled') and p.children.visible.count > 0 %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {% if p.header.icon %}
                        <i class=\"fa fa-{{ p.header.icon }}\"></i>
                    {% endif %}
                    {{ p.menu }}
                </a>
                <ul>
                    {{ macros.nav_loop(p) }}
                </ul>
            </li>
        {% else %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {% if p.header.icon %}
                        <i class=\"fa fa-{{ p.header.icon }}\"></i>
                    {% endif %}
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

{% include 'partials/socialmedia.html.twig' %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {% import _self as macros %}
    {{ macros.nav_loop(pages, hide_home_menu_link, home_alias ) }}
    {# custom menu items check and display - hibbittsdesign.org #}
    {% if theme_var('displaycustommenus.enabled') %}
        {% for mitem in theme_var('menu') %}
            <li>
                <a href=\"{{ mitem.url }}\" target=\"{{ mitem.target }}\">
                    {% if mitem.icon %}
                        <i class=\"fa fa-{{ mitem.icon }}\"></i>
                    {% endif %}
                    {{ mitem.text }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {# check to display git sync link in menu - hibbittsdesign.org #}
    {% if theme_var('display_of_git_sync_repo_link') == 'menu' or theme_var('display_of_git_sync_repo_link') == empty %}
        <li>{% include 'partials/git_sync_repo_link.html.twig' %}</li>
    {% endif %}
</ul>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\mariadelasantafe_org_ar\\grav-admin\\user\\themes\\quark-open-publishing\\templates\\partials\\navigation.html.twig");
    }
}
