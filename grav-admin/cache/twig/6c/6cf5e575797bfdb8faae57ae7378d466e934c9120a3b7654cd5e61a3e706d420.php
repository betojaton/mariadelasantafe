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

/* @Page:C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/pages/footer */
class __TwigTemplate_12d736344492b3e17786b003a6d25e52a11a3bff3c20d81a542d2750f2defda1 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Page:C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/pages/footer"));

        // line 1
        echo "<p>Built with <a href=\"http://getgrav.org\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Grav CMS</a><br />
<a href=\"http://learn.hibbittsdesign.org/openpublishingspace\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Open Publishing Space</a> package by <a href=\"http://hibbittsdesign.org\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">hibbittsdesign.org</a>  </p>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/pages/footer";
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
        return new Source("<p>Built with <a href=\"http://getgrav.org\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Grav CMS</a><br />
<a href=\"http://learn.hibbittsdesign.org/openpublishingspace\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">Open Publishing Space</a> package by <a href=\"http://hibbittsdesign.org\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" class=\"external-link no-image\">hibbittsdesign.org</a>  </p>", "@Page:C:/xampp/htdocs/mariadelasantafe_org_ar/grav-admin/user/pages/footer", "");
    }
}
