<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a8dd5ea4561908ecf392a991c5441843c6bcb7b7f17b91f321b44b35f0aba138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3352cde6a7e1711dd1e52fa0460429356d7853b7afe1f5cd9ca4b850c371c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3352cde6a7e1711dd1e52fa0460429356d7853b7afe1f5cd9ca4b850c371c37->enter($__internal_f3352cde6a7e1711dd1e52fa0460429356d7853b7afe1f5cd9ca4b850c371c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3352cde6a7e1711dd1e52fa0460429356d7853b7afe1f5cd9ca4b850c371c37->leave($__internal_f3352cde6a7e1711dd1e52fa0460429356d7853b7afe1f5cd9ca4b850c371c37_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b68550d19870efcd71fde84f94a70055fab0c7265bced0cd9301527823ca502a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68550d19870efcd71fde84f94a70055fab0c7265bced0cd9301527823ca502a->enter($__internal_b68550d19870efcd71fde84f94a70055fab0c7265bced0cd9301527823ca502a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b68550d19870efcd71fde84f94a70055fab0c7265bced0cd9301527823ca502a->leave($__internal_b68550d19870efcd71fde84f94a70055fab0c7265bced0cd9301527823ca502a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba97fd4cc9eb403c5c17fa2f043af0fbcde51db5b42f8db3d4d85e66a335c1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba97fd4cc9eb403c5c17fa2f043af0fbcde51db5b42f8db3d4d85e66a335c1fb->enter($__internal_ba97fd4cc9eb403c5c17fa2f043af0fbcde51db5b42f8db3d4d85e66a335c1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba97fd4cc9eb403c5c17fa2f043af0fbcde51db5b42f8db3d4d85e66a335c1fb->leave($__internal_ba97fd4cc9eb403c5c17fa2f043af0fbcde51db5b42f8db3d4d85e66a335c1fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c8e6e4d370b949fba7821207eccc61872f8cb518874b9404a0a0ea1af3d746e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8e6e4d370b949fba7821207eccc61872f8cb518874b9404a0a0ea1af3d746e->enter($__internal_6c8e6e4d370b949fba7821207eccc61872f8cb518874b9404a0a0ea1af3d746e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6c8e6e4d370b949fba7821207eccc61872f8cb518874b9404a0a0ea1af3d746e->leave($__internal_6c8e6e4d370b949fba7821207eccc61872f8cb518874b9404a0a0ea1af3d746e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/SiteAnnonce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
