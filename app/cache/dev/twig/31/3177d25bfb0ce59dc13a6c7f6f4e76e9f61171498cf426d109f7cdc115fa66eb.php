<?php

/* AccueilBundle:Accueil:accueil.html.twig */
class __TwigTemplate_82f39cdb9affd560d4782fc2370d99b2857459a06517463d097d32abc32aa100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AccueilBundle:Accueil:accueil.html.twig", 1);
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
        $__internal_6fdd97f54323b1bdcae58642d8dde053d58d7b20e8eaa374396ebf00d405b3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdd97f54323b1bdcae58642d8dde053d58d7b20e8eaa374396ebf00d405b3b9->enter($__internal_6fdd97f54323b1bdcae58642d8dde053d58d7b20e8eaa374396ebf00d405b3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fdd97f54323b1bdcae58642d8dde053d58d7b20e8eaa374396ebf00d405b3b9->leave($__internal_6fdd97f54323b1bdcae58642d8dde053d58d7b20e8eaa374396ebf00d405b3b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cdf22ee6bd0e5a5d6d6039d495b183f261777fd78c48b047824dc90927b1c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdf22ee6bd0e5a5d6d6039d495b183f261777fd78c48b047824dc90927b1c5c->enter($__internal_1cdf22ee6bd0e5a5d6d6039d495b183f261777fd78c48b047824dc90927b1c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\tteste
";
        
        $__internal_1cdf22ee6bd0e5a5d6d6039d495b183f261777fd78c48b047824dc90927b1c5c->leave($__internal_1cdf22ee6bd0e5a5d6d6039d495b183f261777fd78c48b047824dc90927b1c5c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f22d2578c4baf85b398b6a7dd531201576e6628d84c179b256265b14b76f7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f22d2578c4baf85b398b6a7dd531201576e6628d84c179b256265b14b76f7e5->enter($__internal_4f22d2578c4baf85b398b6a7dd531201576e6628d84c179b256265b14b76f7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_4f22d2578c4baf85b398b6a7dd531201576e6628d84c179b256265b14b76f7e5->leave($__internal_4f22d2578c4baf85b398b6a7dd531201576e6628d84c179b256265b14b76f7e5_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Accueil:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
\tteste
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "AccueilBundle:Accueil:accueil.html.twig", "/var/www/html/SiteAnonnce/src/AccueilBundle/Resources/views/Accueil/accueil.html.twig");
    }
}
