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

/* partials/socialmedia.html.twig */
class __TwigTemplate_2b56bd09602044373faa160ecee29e406be42de60c3008e3fd5255136dd2012e extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/socialmedia.html.twig"));

        // line 1
        echo "<div class=\"social-pages text-right\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 3
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute($context["page"], "url", []))) {
                // line 4
                echo "\t\t\t<a href=\"";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\" ";
                echo (($this->getAttribute($context["page"], "title", [])) ? ((("title=\"" . $this->getAttribute($context["page"], "title", [])) . "\"")) : (""));
                echo " target=\"_blank\" rel=\"me\" class=\"u-url\"><i class=\"fa fa-2x fa-";
                echo $this->getAttribute($context["page"], "icon", []);
                echo "\"></i></a>
\t\t";
            }
            // line 6
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/socialmedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  53 => 6,  43 => 4,  40 => 3,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"social-pages text-right\">
\t{% for page in social_pages %}
\t\t{% if page.url|length %}
\t\t\t<a href=\"{{ page.url }}\" {{ page.title ? 'title=\"' ~ page.title ~ '\"' }} target=\"_blank\" rel=\"me\" class=\"u-url\"><i class=\"fa fa-2x fa-{{ page.icon }}\"></i></a>
\t\t{% endif %}
\t{% endfor %}
</div>", "partials/socialmedia.html.twig", "C:\\xampp\\htdocs\\mariadelasantafe_org_ar\\grav-admin\\user\\themes\\mytheme\\templates\\partials\\socialmedia.html.twig");
    }
}
