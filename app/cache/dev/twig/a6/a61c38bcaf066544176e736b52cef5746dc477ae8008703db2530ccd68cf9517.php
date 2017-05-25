<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b02d89d886d4c28360f788cd899de020825ce73a80090c399185d8d6732a74ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8f4fdfc8c5b50100050c37018ce688841e9b1d4602d6e9eddd67ca5e1a71f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f4fdfc8c5b50100050c37018ce688841e9b1d4602d6e9eddd67ca5e1a71f6f->enter($__internal_a8f4fdfc8c5b50100050c37018ce688841e9b1d4602d6e9eddd67ca5e1a71f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f4fdfc8c5b50100050c37018ce688841e9b1d4602d6e9eddd67ca5e1a71f6f->leave($__internal_a8f4fdfc8c5b50100050c37018ce688841e9b1d4602d6e9eddd67ca5e1a71f6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d55050a1be8deaae4da22d4bf8e52120711c1b0fe7f9747f53685700e9be53b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55050a1be8deaae4da22d4bf8e52120711c1b0fe7f9747f53685700e9be53b0->enter($__internal_d55050a1be8deaae4da22d4bf8e52120711c1b0fe7f9747f53685700e9be53b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d55050a1be8deaae4da22d4bf8e52120711c1b0fe7f9747f53685700e9be53b0->leave($__internal_d55050a1be8deaae4da22d4bf8e52120711c1b0fe7f9747f53685700e9be53b0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b750686aefb882e8819868434f3f8255de9adecb19421c1ad65b1b5ee9c6dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b750686aefb882e8819868434f3f8255de9adecb19421c1ad65b1b5ee9c6dac->enter($__internal_7b750686aefb882e8819868434f3f8255de9adecb19421c1ad65b1b5ee9c6dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b750686aefb882e8819868434f3f8255de9adecb19421c1ad65b1b5ee9c6dac->leave($__internal_7b750686aefb882e8819868434f3f8255de9adecb19421c1ad65b1b5ee9c6dac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d09c2bb0aef56cbac6746c22b475db257225393587782d248c05d3f92dec0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d09c2bb0aef56cbac6746c22b475db257225393587782d248c05d3f92dec0a1->enter($__internal_4d09c2bb0aef56cbac6746c22b475db257225393587782d248c05d3f92dec0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4d09c2bb0aef56cbac6746c22b475db257225393587782d248c05d3f92dec0a1->leave($__internal_4d09c2bb0aef56cbac6746c22b475db257225393587782d248c05d3f92dec0a1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/SiteAnnonce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
