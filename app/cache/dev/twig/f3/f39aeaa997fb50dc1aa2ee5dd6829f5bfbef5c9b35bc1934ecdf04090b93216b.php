<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_489df5211c779ad5c539e2196b22e59ff41def0a836191ecc2b0d9b635217457 extends Twig_Template
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
        $__internal_d3ae4fb64ace471ae7d994d4bb8764d3666abcf8cc84094fdc32b169a255af6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ae4fb64ace471ae7d994d4bb8764d3666abcf8cc84094fdc32b169a255af6c->enter($__internal_d3ae4fb64ace471ae7d994d4bb8764d3666abcf8cc84094fdc32b169a255af6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3ae4fb64ace471ae7d994d4bb8764d3666abcf8cc84094fdc32b169a255af6c->leave($__internal_d3ae4fb64ace471ae7d994d4bb8764d3666abcf8cc84094fdc32b169a255af6c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bed690b66170443aef94d0efec62c186f6bc4dfddc64b0b72814f92f4043e793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed690b66170443aef94d0efec62c186f6bc4dfddc64b0b72814f92f4043e793->enter($__internal_bed690b66170443aef94d0efec62c186f6bc4dfddc64b0b72814f92f4043e793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bed690b66170443aef94d0efec62c186f6bc4dfddc64b0b72814f92f4043e793->leave($__internal_bed690b66170443aef94d0efec62c186f6bc4dfddc64b0b72814f92f4043e793_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3326be498b03ad57fbca114c5f46ef57956c1fb0b4dcc7f7af995ea5af920a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3326be498b03ad57fbca114c5f46ef57956c1fb0b4dcc7f7af995ea5af920a17->enter($__internal_3326be498b03ad57fbca114c5f46ef57956c1fb0b4dcc7f7af995ea5af920a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3326be498b03ad57fbca114c5f46ef57956c1fb0b4dcc7f7af995ea5af920a17->leave($__internal_3326be498b03ad57fbca114c5f46ef57956c1fb0b4dcc7f7af995ea5af920a17_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ed99a80bb1735d62d808f9182b7e5ac37dc1982bfa45f5efd31a648d5862b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed99a80bb1735d62d808f9182b7e5ac37dc1982bfa45f5efd31a648d5862b84->enter($__internal_5ed99a80bb1735d62d808f9182b7e5ac37dc1982bfa45f5efd31a648d5862b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5ed99a80bb1735d62d808f9182b7e5ac37dc1982bfa45f5efd31a648d5862b84->leave($__internal_5ed99a80bb1735d62d808f9182b7e5ac37dc1982bfa45f5efd31a648d5862b84_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/SiteAnonnce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
