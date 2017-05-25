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
        $__internal_7e7d14204bd4ef042035e00e736dc83215984542e7b946e6365d647df47582b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7d14204bd4ef042035e00e736dc83215984542e7b946e6365d647df47582b7->enter($__internal_7e7d14204bd4ef042035e00e736dc83215984542e7b946e6365d647df47582b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Mesannonces:mesannonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e7d14204bd4ef042035e00e736dc83215984542e7b946e6365d647df47582b7->leave($__internal_7e7d14204bd4ef042035e00e736dc83215984542e7b946e6365d647df47582b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_30feec252940a030efbffc53ef0506692ee264c94aa59efde363bcc89c32f0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30feec252940a030efbffc53ef0506692ee264c94aa59efde363bcc89c32f0bb->enter($__internal_30feec252940a030efbffc53ef0506692ee264c94aa59efde363bcc89c32f0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_30feec252940a030efbffc53ef0506692ee264c94aa59efde363bcc89c32f0bb->leave($__internal_30feec252940a030efbffc53ef0506692ee264c94aa59efde363bcc89c32f0bb_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_008a5f9c3b6ad5608493f07b45b60d6c2dac01b43d1094d628b573b4da087bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008a5f9c3b6ad5608493f07b45b60d6c2dac01b43d1094d628b573b4da087bd3->enter($__internal_008a5f9c3b6ad5608493f07b45b60d6c2dac01b43d1094d628b573b4da087bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_008a5f9c3b6ad5608493f07b45b60d6c2dac01b43d1094d628b573b4da087bd3->leave($__internal_008a5f9c3b6ad5608493f07b45b60d6c2dac01b43d1094d628b573b4da087bd3_prof);

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
