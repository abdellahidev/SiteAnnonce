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
        $__internal_88504bc54e0bd2816cbce195d8c6bc03dbd83512789d74e0e3d74ee45eea41ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88504bc54e0bd2816cbce195d8c6bc03dbd83512789d74e0e3d74ee45eea41ba->enter($__internal_88504bc54e0bd2816cbce195d8c6bc03dbd83512789d74e0e3d74ee45eea41ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Mesannonces:mesannonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88504bc54e0bd2816cbce195d8c6bc03dbd83512789d74e0e3d74ee45eea41ba->leave($__internal_88504bc54e0bd2816cbce195d8c6bc03dbd83512789d74e0e3d74ee45eea41ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d99e256c59ca8d1b0bfbb6caf4bb32e0841b80e68e476d1421c90f81a461c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d99e256c59ca8d1b0bfbb6caf4bb32e0841b80e68e476d1421c90f81a461c5f->enter($__internal_9d99e256c59ca8d1b0bfbb6caf4bb32e0841b80e68e476d1421c90f81a461c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d99e256c59ca8d1b0bfbb6caf4bb32e0841b80e68e476d1421c90f81a461c5f->leave($__internal_9d99e256c59ca8d1b0bfbb6caf4bb32e0841b80e68e476d1421c90f81a461c5f_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_166ee6f9b920c76a8af6f78032136a1e2f53869e9edd7083ad031d4c9e005daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166ee6f9b920c76a8af6f78032136a1e2f53869e9edd7083ad031d4c9e005daf->enter($__internal_166ee6f9b920c76a8af6f78032136a1e2f53869e9edd7083ad031d4c9e005daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_166ee6f9b920c76a8af6f78032136a1e2f53869e9edd7083ad031d4c9e005daf->leave($__internal_166ee6f9b920c76a8af6f78032136a1e2f53869e9edd7083ad031d4c9e005daf_prof);

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
