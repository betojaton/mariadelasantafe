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

/* @Page:C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/pages/01.blog/daring-fireball-link */
class __TwigTemplate_b5d20fba7682b669fe8ee47d4d50d09b8b8dc974b14eb2751241a9f8e49df506 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Page:C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/pages/01.blog/daring-fireball-link"));

        // line 1
        echo "<p>The blog skeleton also supports <strong>Daring Fireball</strong> style link posts.  Simply add a link setting in your page header:</p>
<pre><code>link: http://daringfireball.net</code></pre>
<p>And your blog title becomes a link directly to that link you specified. Easy peasy!</p>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/pages/01.blog/daring-fireball-link";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>The blog skeleton also supports <strong>Daring Fireball</strong> style link posts.  Simply add a link setting in your page header:</p>
<pre><code>link: http://daringfireball.net</code></pre>
<p>And your blog title becomes a link directly to that link you specified. Easy peasy!</p>", "@Page:C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/pages/01.blog/daring-fireball-link", "");
    }
}
