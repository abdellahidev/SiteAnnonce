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
        $__internal_f014a4fc186a0217c7d52fb0b04685786348414c2c8ae2d7e618f86d661f33bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f014a4fc186a0217c7d52fb0b04685786348414c2c8ae2d7e618f86d661f33bd->enter($__internal_f014a4fc186a0217c7d52fb0b04685786348414c2c8ae2d7e618f86d661f33bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Seconnecter:seconnecter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f014a4fc186a0217c7d52fb0b04685786348414c2c8ae2d7e618f86d661f33bd->leave($__internal_f014a4fc186a0217c7d52fb0b04685786348414c2c8ae2d7e618f86d661f33bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b6db0aade60e5fd837cb8064413b4be9d338f0cdd9e3fb86216c6b0d9a56848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6db0aade60e5fd837cb8064413b4be9d338f0cdd9e3fb86216c6b0d9a56848->enter($__internal_7b6db0aade60e5fd837cb8064413b4be9d338f0cdd9e3fb86216c6b0d9a56848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b6db0aade60e5fd837cb8064413b4be9d338f0cdd9e3fb86216c6b0d9a56848->leave($__internal_7b6db0aade60e5fd837cb8064413b4be9d338f0cdd9e3fb86216c6b0d9a56848_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4749ecd02f6042e8edb53da7ad65bb315546f270bf93c1ac3ad746734380f56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4749ecd02f6042e8edb53da7ad65bb315546f270bf93c1ac3ad746734380f56b->enter($__internal_4749ecd02f6042e8edb53da7ad65bb315546f270bf93c1ac3ad746734380f56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_4749ecd02f6042e8edb53da7ad65bb315546f270bf93c1ac3ad746734380f56b->leave($__internal_4749ecd02f6042e8edb53da7ad65bb315546f270bf93c1ac3ad746734380f56b_prof);

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
