<?php

/* AccueilBundle:Mesannonces:mesannonces.html.twig */
class __TwigTemplate_30ff16821c6aaae3b57c5a602f6e1c637d9c9b102e1db1c0cf8a89f8b4a9ad22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AccueilBundle:Mesannonces:mesannonces.html.twig", 1);
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
        $__internal_53c2d35f381754f1357efdb6c47a7bb25b5c063ceded84f3b30fafb5d2dfd7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c2d35f381754f1357efdb6c47a7bb25b5c063ceded84f3b30fafb5d2dfd7ac->enter($__internal_53c2d35f381754f1357efdb6c47a7bb25b5c063ceded84f3b30fafb5d2dfd7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Mesannonces:mesannonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53c2d35f381754f1357efdb6c47a7bb25b5c063ceded84f3b30fafb5d2dfd7ac->leave($__internal_53c2d35f381754f1357efdb6c47a7bb25b5c063ceded84f3b30fafb5d2dfd7ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a0fbae1ea1c97baeac162f895e430bce1a834d1e1d157a2dcfd469fa4cd64a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0fbae1ea1c97baeac162f895e430bce1a834d1e1d157a2dcfd469fa4cd64a6->enter($__internal_8a0fbae1ea1c97baeac162f895e430bce1a834d1e1d157a2dcfd469fa4cd64a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                     Mettre ici les listes des mes annonces
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                     Mettre ici les listes des mes annonces
        </div>
    </div>  
</div>
<!-- end container -->
</section>


";
        
        $__internal_8a0fbae1ea1c97baeac162f895e430bce1a834d1e1d157a2dcfd469fa4cd64a6->leave($__internal_8a0fbae1ea1c97baeac162f895e430bce1a834d1e1d157a2dcfd469fa4cd64a6_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_650b210e82b05c124a8cffcef1007549df49527b096d8bc0b7509965f007b39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650b210e82b05c124a8cffcef1007549df49527b096d8bc0b7509965f007b39a->enter($__internal_650b210e82b05c124a8cffcef1007549df49527b096d8bc0b7509965f007b39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_650b210e82b05c124a8cffcef1007549df49527b096d8bc0b7509965f007b39a->leave($__internal_650b210e82b05c124a8cffcef1007549df49527b096d8bc0b7509965f007b39a_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Mesannonces:mesannonces.html.twig";
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
                     Mettre ici les listes des mes annonces
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                     Mettre ici les listes des mes annonces
        </div>
    </div>  
</div>
<!-- end container -->
</section>


{% endblock %}

{% block stylesheets %}

{% endblock %}
", "AccueilBundle:Mesannonces:mesannonces.html.twig", "/var/www/html/SiteAnnonce/src/AccueilBundle/Resources/views/Mesannonces/mesannonces.html.twig");
    }
}
