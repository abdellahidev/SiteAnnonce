<?php

/* AccueilBundle:Seconnecter:seconnecter.html.twig */
class __TwigTemplate_71657168466c660df00b9d65309fb92f55916cd1791fe57ff61a1d20dd8cea22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AccueilBundle:Seconnecter:seconnecter.html.twig", 1);
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
        $__internal_31f6045f30c5647eb62399024fef6f866ca8a64a194f9702a4bb9970d3c9488f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f6045f30c5647eb62399024fef6f866ca8a64a194f9702a4bb9970d3c9488f->enter($__internal_31f6045f30c5647eb62399024fef6f866ca8a64a194f9702a4bb9970d3c9488f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Seconnecter:seconnecter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f6045f30c5647eb62399024fef6f866ca8a64a194f9702a4bb9970d3c9488f->leave($__internal_31f6045f30c5647eb62399024fef6f866ca8a64a194f9702a4bb9970d3c9488f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07bf6373f035b1fd92dc7b9b73694e4368b267147b7b132c777ca98ab727f983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bf6373f035b1fd92dc7b9b73694e4368b267147b7b132c777ca98ab727f983->enter($__internal_07bf6373f035b1fd92dc7b9b73694e4368b267147b7b132c777ca98ab727f983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                      Mettre ici pour se connecter
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                      Mettre ici pour se connecter
        </div>
    </div>  
</div>
<!-- end container -->
</section>


";
        
        $__internal_07bf6373f035b1fd92dc7b9b73694e4368b267147b7b132c777ca98ab727f983->leave($__internal_07bf6373f035b1fd92dc7b9b73694e4368b267147b7b132c777ca98ab727f983_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36f1925bccf368e0c0d85592ffeb1b2eea891d821b8c60f36c8bc9d6f21eb140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f1925bccf368e0c0d85592ffeb1b2eea891d821b8c60f36c8bc9d6f21eb140->enter($__internal_36f1925bccf368e0c0d85592ffeb1b2eea891d821b8c60f36c8bc9d6f21eb140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_36f1925bccf368e0c0d85592ffeb1b2eea891d821b8c60f36c8bc9d6f21eb140->leave($__internal_36f1925bccf368e0c0d85592ffeb1b2eea891d821b8c60f36c8bc9d6f21eb140_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Seconnecter:seconnecter.html.twig";
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
                      Mettre ici pour se connecter
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                      Mettre ici pour se connecter
        </div>
    </div>  
</div>
<!-- end container -->
</section>


{% endblock %}

{% block stylesheets %}

{% endblock %}
", "AccueilBundle:Seconnecter:seconnecter.html.twig", "/var/www/html/SiteAnnonce/src/AccueilBundle/Resources/views/Seconnecter/seconnecter.html.twig");
    }
}
