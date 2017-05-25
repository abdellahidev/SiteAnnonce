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
        $__internal_a54617c7bfdb04789b66ceedf5560ef71c9599ec2801628a264d5f394b08dccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54617c7bfdb04789b66ceedf5560ef71c9599ec2801628a264d5f394b08dccb->enter($__internal_a54617c7bfdb04789b66ceedf5560ef71c9599ec2801628a264d5f394b08dccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Mesannonces:mesannonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a54617c7bfdb04789b66ceedf5560ef71c9599ec2801628a264d5f394b08dccb->leave($__internal_a54617c7bfdb04789b66ceedf5560ef71c9599ec2801628a264d5f394b08dccb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cf8cf71b3181cdc1c4fd7709ce1bc4ce1530650821d73b9297bb71c8ad456a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf8cf71b3181cdc1c4fd7709ce1bc4ce1530650821d73b9297bb71c8ad456a4->enter($__internal_2cf8cf71b3181cdc1c4fd7709ce1bc4ce1530650821d73b9297bb71c8ad456a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2cf8cf71b3181cdc1c4fd7709ce1bc4ce1530650821d73b9297bb71c8ad456a4->leave($__internal_2cf8cf71b3181cdc1c4fd7709ce1bc4ce1530650821d73b9297bb71c8ad456a4_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_744e3d243351f7f4140c93dbb654154c3eb8795dc5c22802fea80bf0699e440c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744e3d243351f7f4140c93dbb654154c3eb8795dc5c22802fea80bf0699e440c->enter($__internal_744e3d243351f7f4140c93dbb654154c3eb8795dc5c22802fea80bf0699e440c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_744e3d243351f7f4140c93dbb654154c3eb8795dc5c22802fea80bf0699e440c->leave($__internal_744e3d243351f7f4140c93dbb654154c3eb8795dc5c22802fea80bf0699e440c_prof);

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
