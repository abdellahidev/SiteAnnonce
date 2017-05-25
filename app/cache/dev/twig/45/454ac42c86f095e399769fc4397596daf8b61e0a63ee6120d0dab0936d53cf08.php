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
        $__internal_cf20e52c907d1e76e7d67b38b07a9f2b275554971cfd5b6ad74df9ba6ca847ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf20e52c907d1e76e7d67b38b07a9f2b275554971cfd5b6ad74df9ba6ca847ec->enter($__internal_cf20e52c907d1e76e7d67b38b07a9f2b275554971cfd5b6ad74df9ba6ca847ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Contact:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf20e52c907d1e76e7d67b38b07a9f2b275554971cfd5b6ad74df9ba6ca847ec->leave($__internal_cf20e52c907d1e76e7d67b38b07a9f2b275554971cfd5b6ad74df9ba6ca847ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dd5d8ebf1777f295712c938d8ed1e555c5f6846954120a02457ed31db07e7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd5d8ebf1777f295712c938d8ed1e555c5f6846954120a02457ed31db07e7b0->enter($__internal_7dd5d8ebf1777f295712c938d8ed1e555c5f6846954120a02457ed31db07e7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7dd5d8ebf1777f295712c938d8ed1e555c5f6846954120a02457ed31db07e7b0->leave($__internal_7dd5d8ebf1777f295712c938d8ed1e555c5f6846954120a02457ed31db07e7b0_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_197c7a12be987648a2e1cd3f9fad5c57614a5bd5c9094b34f0b2919fb9078cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197c7a12be987648a2e1cd3f9fad5c57614a5bd5c9094b34f0b2919fb9078cf4->enter($__internal_197c7a12be987648a2e1cd3f9fad5c57614a5bd5c9094b34f0b2919fb9078cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_197c7a12be987648a2e1cd3f9fad5c57614a5bd5c9094b34f0b2919fb9078cf4->leave($__internal_197c7a12be987648a2e1cd3f9fad5c57614a5bd5c9094b34f0b2919fb9078cf4_prof);

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
