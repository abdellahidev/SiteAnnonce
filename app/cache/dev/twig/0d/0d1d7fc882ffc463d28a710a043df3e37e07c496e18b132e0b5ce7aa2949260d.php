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
        $__internal_a4cf7e7a55a2a13ee8a1cc4d27fbbfb4ccee058ee2ca0dcd81825fd3d5600f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cf7e7a55a2a13ee8a1cc4d27fbbfb4ccee058ee2ca0dcd81825fd3d5600f98->enter($__internal_a4cf7e7a55a2a13ee8a1cc4d27fbbfb4ccee058ee2ca0dcd81825fd3d5600f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Deposer:deposer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4cf7e7a55a2a13ee8a1cc4d27fbbfb4ccee058ee2ca0dcd81825fd3d5600f98->leave($__internal_a4cf7e7a55a2a13ee8a1cc4d27fbbfb4ccee058ee2ca0dcd81825fd3d5600f98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15c1e490222d17956b71de6919386ac4077ecfd1b997b5bddf8764768bb2b44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c1e490222d17956b71de6919386ac4077ecfd1b997b5bddf8764768bb2b44e->enter($__internal_15c1e490222d17956b71de6919386ac4077ecfd1b997b5bddf8764768bb2b44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                     Mettre ici le formulaire d'annonce 
        </div>
    </div>  
</div>
<!-- end container -->
</section>


";
        
        $__internal_15c1e490222d17956b71de6919386ac4077ecfd1b997b5bddf8764768bb2b44e->leave($__internal_15c1e490222d17956b71de6919386ac4077ecfd1b997b5bddf8764768bb2b44e_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e3d18136529d6a8ca003b0a7dda82ce4f95a0dfead2f8529efeb32c4f5db918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3d18136529d6a8ca003b0a7dda82ce4f95a0dfead2f8529efeb32c4f5db918->enter($__internal_5e3d18136529d6a8ca003b0a7dda82ce4f95a0dfead2f8529efeb32c4f5db918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_5e3d18136529d6a8ca003b0a7dda82ce4f95a0dfead2f8529efeb32c4f5db918->leave($__internal_5e3d18136529d6a8ca003b0a7dda82ce4f95a0dfead2f8529efeb32c4f5db918_prof);

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
                     Mettre ici le formulaire d'annonce 
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
