<?php

/* AccueilBundle:Default:index.html.twig */
class __TwigTemplate_cf77aa65654ad19c4a7e27a3f633dcf73bd58770f8ff2e847a99871ac6902c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3503b0f93204430ce597792a8a83e90f342e530042d3657e998633d4e7fcd057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3503b0f93204430ce597792a8a83e90f342e530042d3657e998633d4e7fcd057->enter($__internal_3503b0f93204430ce597792a8a83e90f342e530042d3657e998633d4e7fcd057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Default:index.html.twig"));

        // line 1
        echo "Bonjour camara ";
        
        $__internal_3503b0f93204430ce597792a8a83e90f342e530042d3657e998633d4e7fcd057->leave($__internal_3503b0f93204430ce597792a8a83e90f342e530042d3657e998633d4e7fcd057_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Bonjour camara ", "AccueilBundle:Default:index.html.twig", "/var/www/html/SiteAnonnce/src/AccueilBundle/Resources/views/Default/index.html.twig");
    }
}
