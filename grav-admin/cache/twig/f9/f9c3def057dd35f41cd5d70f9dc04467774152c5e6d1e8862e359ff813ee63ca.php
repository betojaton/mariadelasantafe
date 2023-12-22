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

/* partials/userinfo-avatar-credit.html.twig */
class __TwigTemplate_4319673ccddabfb78eecef15857ab605ab69e0cfa761ca2655162990b94bd51a extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/userinfo-avatar-credit.html.twig"));

        // line 1
        echo "<p class=\"avatar\">
";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.AVATAR_BY"), "html", null, true);
        echo "

";
        // line 4
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "accounts", []), "avatar", []) == "gravatar")) {
            // line 5
            echo "<a href=\"https://gravatar.com\" target=\"_blank\" rel=\"noopener noreferrer\">gravatar.com</a>.
";
        } else {
            // line 7
            echo "<a href=\"https://multiavatar.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Multiavatar</a>.
";
        }
        // line 9
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.AVATAR_UPLOAD_OWN"), "html", null, true);
        echo "</p>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/userinfo-avatar-credit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  51 => 9,  47 => 7,  43 => 5,  41 => 4,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"avatar\">
{{ \"PLUGIN_ADMIN.AVATAR_BY\"|t }}

{% if config.system.accounts.avatar == 'gravatar' %}
<a href=\"https://gravatar.com\" target=\"_blank\" rel=\"noopener noreferrer\">gravatar.com</a>.
{% else  %}
<a href=\"https://multiavatar.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Multiavatar</a>.
{% endif %}

{{ \"PLUGIN_ADMIN.AVATAR_UPLOAD_OWN\"|t }}</p>
", "partials/userinfo-avatar-credit.html.twig", "C:\\xampp\\htdocs\\mariadelasantafe_org_ar\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\userinfo-avatar-credit.html.twig");
    }
}
