<?php

/* AccueilBundle:Deposer:deposer.html.twig */
class __TwigTemplate_6d23c65c4bcabe9ae7e74f4efa4de08813aff902071292bf3a90d0234af97110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AccueilBundle:Deposer:deposer.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ddb98b4d1f8b2146cbfd85de39df8dac3f39a4318954eb3381a5e2217a7a665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddb98b4d1f8b2146cbfd85de39df8dac3f39a4318954eb3381a5e2217a7a665->enter($__internal_6ddb98b4d1f8b2146cbfd85de39df8dac3f39a4318954eb3381a5e2217a7a665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Deposer:deposer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ddb98b4d1f8b2146cbfd85de39df8dac3f39a4318954eb3381a5e2217a7a665->leave($__internal_6ddb98b4d1f8b2146cbfd85de39df8dac3f39a4318954eb3381a5e2217a7a665_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7fdde823dda944ff06f07037252118fdb60e22b4fe3ebe60e94902c8656ba65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7fdde823dda944ff06f07037252118fdb60e22b4fe3ebe60e94902c8656ba65->enter($__internal_b7fdde823dda944ff06f07037252118fdb60e22b4fe3ebe60e94902c8656ba65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<!-- spacer section -->
<section class=\"spacer green\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12 aligncenter flyUp\">
            <h2 class=\"pagetitle\"><strong>Formulaire de depots d'annonce</strong></h2>
        </div>
    </div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id=\"maincontent\" class=\"inner\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span6\">
        <h4>Formulaire</h4>
            <div class=\"tabbable\">
                <div class=\"tab-content\">
                     Mettre ici le formulaire d'annonce 
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                     Mettre ici le formulaire c'est bara mamadou seck
        </div>
    </div>  
</div>
<!-- end container -->
</section>


";
        
        $__internal_b7fdde823dda944ff06f07037252118fdb60e22b4fe3ebe60e94902c8656ba65->leave($__internal_b7fdde823dda944ff06f07037252118fdb60e22b4fe3ebe60e94902c8656ba65_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a110abb78dcd67b102b610a032f825a3b3b67b1beec83fedf536ef573ec4e61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a110abb78dcd67b102b610a032f825a3b3b67b1beec83fedf536ef573ec4e61c->enter($__internal_a110abb78dcd67b102b610a032f825a3b3b67b1beec83fedf536ef573ec4e61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_a110abb78dcd67b102b610a032f825a3b3b67b1beec83fedf536ef573ec4e61c->leave($__internal_a110abb78dcd67b102b610a032f825a3b3b67b1beec83fedf536ef573ec4e61c_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Deposer:deposer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 42,  83 => 41,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    
<!-- spacer section -->
<section class=\"spacer green\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12 aligncenter flyUp\">
            <h2 class=\"pagetitle\"><strong>Formulaire de depots d'annonce</strong></h2>
        </div>
    </div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id=\"maincontent\" class=\"inner\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span6\">
        <h4>Formulaire</h4>
            <div class=\"tabbable\">
                <div class=\"tab-content\">
                     Mettre ici le formulaire d'annonce 
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                     Mettre ici le formulaire c'est bara mamadou seck
        </div>
    </div>  
</div>
<!-- end container -->
</section>


{% endblock %}

{% block stylesheets %}

{% endblock %}
", "AccueilBundle:Deposer:deposer.html.twig", "/var/www/html/SiteAnnonce/src/AccueilBundle/Resources/views/Deposer/deposer.html.twig");
    }
}
