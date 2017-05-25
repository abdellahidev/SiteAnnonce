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
        $__internal_e49e2cbd8a13fbf336df5f0539df8ccf91fa4b0b703a423d0132564973bae637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49e2cbd8a13fbf336df5f0539df8ccf91fa4b0b703a423d0132564973bae637->enter($__internal_e49e2cbd8a13fbf336df5f0539df8ccf91fa4b0b703a423d0132564973bae637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Deposer:deposer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e49e2cbd8a13fbf336df5f0539df8ccf91fa4b0b703a423d0132564973bae637->leave($__internal_e49e2cbd8a13fbf336df5f0539df8ccf91fa4b0b703a423d0132564973bae637_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2755110877945d7c7c6b44dc2b83ee12e5bb15deb71acbeca2037a9d2954ae73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2755110877945d7c7c6b44dc2b83ee12e5bb15deb71acbeca2037a9d2954ae73->enter($__internal_2755110877945d7c7c6b44dc2b83ee12e5bb15deb71acbeca2037a9d2954ae73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                     Mettre ici le formulaire d'annonce à tester plus tard biensur dededededed
        </div>
    </div>  
</div>
<!-- end container -->
</section>


";
        
        $__internal_2755110877945d7c7c6b44dc2b83ee12e5bb15deb71acbeca2037a9d2954ae73->leave($__internal_2755110877945d7c7c6b44dc2b83ee12e5bb15deb71acbeca2037a9d2954ae73_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d61b8c12051ff256d6052954f0fbe57ec24605d7421df5a03c808937c6a701d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61b8c12051ff256d6052954f0fbe57ec24605d7421df5a03c808937c6a701d0->enter($__internal_d61b8c12051ff256d6052954f0fbe57ec24605d7421df5a03c808937c6a701d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_d61b8c12051ff256d6052954f0fbe57ec24605d7421df5a03c808937c6a701d0->leave($__internal_d61b8c12051ff256d6052954f0fbe57ec24605d7421df5a03c808937c6a701d0_prof);

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
                     Mettre ici le formulaire d'annonce à tester plus tard biensur dededededed
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
