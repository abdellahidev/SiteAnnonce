<?php

/* AccueilBundle:Demandes:demandes.html.twig */
class __TwigTemplate_cfdac65703c8619d46f508014698774201023c335b82c6a818a5e0164046f6c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AccueilBundle:Demandes:demandes.html.twig", 1);
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
        $__internal_6cce35124a3a182945f86fcf9ade0c27375838c7198c9b92e25440b73a400bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cce35124a3a182945f86fcf9ade0c27375838c7198c9b92e25440b73a400bc5->enter($__internal_6cce35124a3a182945f86fcf9ade0c27375838c7198c9b92e25440b73a400bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Demandes:demandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cce35124a3a182945f86fcf9ade0c27375838c7198c9b92e25440b73a400bc5->leave($__internal_6cce35124a3a182945f86fcf9ade0c27375838c7198c9b92e25440b73a400bc5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26bb8e4a2c773b4ba6a2e98eaa924a5a65644bedc7d001530eb4d21d7a8b333e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bb8e4a2c773b4ba6a2e98eaa924a5a65644bedc7d001530eb4d21d7a8b333e->enter($__internal_26bb8e4a2c773b4ba6a2e98eaa924a5a65644bedc7d001530eb4d21d7a8b333e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                     Mettre ici les listes des demandes
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                     Mettre ici les listes des demandes
        </div>
    </div>  
</div>
<!-- end container -->
</section>


";
        
        $__internal_26bb8e4a2c773b4ba6a2e98eaa924a5a65644bedc7d001530eb4d21d7a8b333e->leave($__internal_26bb8e4a2c773b4ba6a2e98eaa924a5a65644bedc7d001530eb4d21d7a8b333e_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f63e55e790e3f51a2a762f6766a6f395365c947e9527d0f01807b793454bae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f63e55e790e3f51a2a762f6766a6f395365c947e9527d0f01807b793454bae8->enter($__internal_2f63e55e790e3f51a2a762f6766a6f395365c947e9527d0f01807b793454bae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_2f63e55e790e3f51a2a762f6766a6f395365c947e9527d0f01807b793454bae8->leave($__internal_2f63e55e790e3f51a2a762f6766a6f395365c947e9527d0f01807b793454bae8_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Demandes:demandes.html.twig";
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
                     Mettre ici les listes des demandes
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                     Mettre ici les listes des demandes
        </div>
    </div>  
</div>
<!-- end container -->
</section>


{% endblock %}

{% block stylesheets %}

{% endblock %}
", "AccueilBundle:Demandes:demandes.html.twig", "/var/www/html/SiteAnnonce/src/AccueilBundle/Resources/views/Demandes/demandes.html.twig");
    }
}
