<?php

/* AccueilBundle:Contact:contact.html.twig */
class __TwigTemplate_3e2992d2313be02cebf5c69eebbfb4cf1d0e8ed3156f371f85fb6bb3ca275d5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AccueilBundle:Contact:contact.html.twig", 1);
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
        $__internal_3551f3e6fb06968a27891234516487943fb7010ac23f3f3648e7159c3670a37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3551f3e6fb06968a27891234516487943fb7010ac23f3f3648e7159c3670a37e->enter($__internal_3551f3e6fb06968a27891234516487943fb7010ac23f3f3648e7159c3670a37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Contact:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3551f3e6fb06968a27891234516487943fb7010ac23f3f3648e7159c3670a37e->leave($__internal_3551f3e6fb06968a27891234516487943fb7010ac23f3f3648e7159c3670a37e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af778fb8b90910f0146e7ef398e5366c853e4b3320c36f0aa85934ee8f803992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af778fb8b90910f0146e7ef398e5366c853e4b3320c36f0aa85934ee8f803992->enter($__internal_af778fb8b90910f0146e7ef398e5366c853e4b3320c36f0aa85934ee8f803992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                      Mettre ici le formulaire de contact
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                     Mettre ici le formulaire de contact
        </div>
    </div>  
</div>
<!-- end container -->
</section>


";
        
        $__internal_af778fb8b90910f0146e7ef398e5366c853e4b3320c36f0aa85934ee8f803992->leave($__internal_af778fb8b90910f0146e7ef398e5366c853e4b3320c36f0aa85934ee8f803992_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a7ceb3b8936626cc613e685cbb742c4ae826d5539c67bfe0aa01989be89f15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7ceb3b8936626cc613e685cbb742c4ae826d5539c67bfe0aa01989be89f15e->enter($__internal_5a7ceb3b8936626cc613e685cbb742c4ae826d5539c67bfe0aa01989be89f15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_5a7ceb3b8936626cc613e685cbb742c4ae826d5539c67bfe0aa01989be89f15e->leave($__internal_5a7ceb3b8936626cc613e685cbb742c4ae826d5539c67bfe0aa01989be89f15e_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Contact:contact.html.twig";
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
                      Mettre ici le formulaire de contact
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                     Mettre ici le formulaire de contact
        </div>
    </div>  
</div>
<!-- end container -->
</section>


{% endblock %}

{% block stylesheets %}

{% endblock %}
", "AccueilBundle:Contact:contact.html.twig", "/var/www/html/SiteAnnonce/src/AccueilBundle/Resources/views/Contact/contact.html.twig");
    }
}
