<?php

/* base.html.twig */
class __TwigTemplate_7bc47cc0126fc8ebc89da3373bc9ae8509ee059cd973967e982fc1cbd928a740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4772a6a1f405c1c2e650a181a81546195375f267c0eaba3764c0306cef21b69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4772a6a1f405c1c2e650a181a81546195375f267c0eaba3764c0306cef21b69b->enter($__internal_4772a6a1f405c1c2e650a181a81546195375f267c0eaba3764c0306cef21b69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/css/bootstrap-responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/color/default.css"), "html", null, true);
        echo "\">
</head>

<body>
    <div class=\"navbar-wrapper\">
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <!-- Responsive navbar -->
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
                    </a>
                    <h1 class=\"brand\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">SiteAnonnce</a></h1>
                    <!-- navigation -->
                    <nav class=\"pull-right nav-collapse collapse\">
                    <ul id=\"menu-main\" class=\"nav\">
                        <li><a title=\"team\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Acueil</a></li>
                        <li><a title=\"services\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deposer");
        echo "\">Déposer une annonce</a></li>
                        <li><a title=\"works\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offres");
        echo "\">Offres</a></li>
                        <li><a title=\"blog\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demandes");
        echo "\">Demandes</a></li>
                         <li><a title=\"blog\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesannonces");
        echo "\">Mes Annonce</a></li>
                        <li><a title=\"contact\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
                        <li><a title=\"blog\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("seconnecter");
        echo "\">Seconnecter</a></li>
                      <!--  <li><a href=\"page.html\">Page</a></li>-->
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "
</section>
<footer>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span6 offset3\">
            <ul class=\"social-networks\">
                <li><a href=\"#\"><i class=\"icon-circled icon-bgdark icon-instagram icon-2x\"></i></a></li>
                <li><a href=\"#\"><i class=\"icon-circled icon-bgdark icon-twitter icon-2x\"></i></a></li>
                <li><a href=\"#\"><i class=\"icon-circled icon-bgdark icon-dribbble icon-2x\"></i></a></li>
                <li><a href=\"#\"><i class=\"icon-circled icon-bgdark icon-pinterest icon-2x\"></i></a></li>
            </ul>
            <p class=\"copyright\">
                &copy; Maxim Theme. All rights reserved.
                <div class=\"credits\">
                    <!-- 
                        All the links in the footer should remain intact. 
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maxim
                    -->
                    <a href=\"https://bootstrapmade.com/\">Free Bootstrap Themes</a> by BootstrapMade.com
                </div>
            </p>
        </div>
    </div>
</div>
<!-- ./container -->
</footer>
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.scrollTo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.nav.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.localscroll-1.2.7-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/isotope.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/inview.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/animate.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/validate.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/custom.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_4772a6a1f405c1c2e650a181a81546195375f267c0eaba3764c0306cef21b69b->leave($__internal_4772a6a1f405c1c2e650a181a81546195375f267c0eaba3764c0306cef21b69b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c335dd1269ed2fa5c645897a66de0f3bbc106af89d7fd09803e3777c28b35227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c335dd1269ed2fa5c645897a66de0f3bbc106af89d7fd09803e3777c28b35227->enter($__internal_c335dd1269ed2fa5c645897a66de0f3bbc106af89d7fd09803e3777c28b35227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue, dans notre site d'annonce";
        
        $__internal_c335dd1269ed2fa5c645897a66de0f3bbc106af89d7fd09803e3777c28b35227->leave($__internal_c335dd1269ed2fa5c645897a66de0f3bbc106af89d7fd09803e3777c28b35227_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3958d8c03229c5cba99a0c458b65760356dce0caa699271a1d225041df6ba879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3958d8c03229c5cba99a0c458b65760356dce0caa699271a1d225041df6ba879->enter($__internal_3958d8c03229c5cba99a0c458b65760356dce0caa699271a1d225041df6ba879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3958d8c03229c5cba99a0c458b65760356dce0caa699271a1d225041df6ba879->leave($__internal_3958d8c03229c5cba99a0c458b65760356dce0caa699271a1d225041df6ba879_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fd9b0b46355c35d97b43d6dbac982c63ce0bc4d3358af07fd51d5ed8439c463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd9b0b46355c35d97b43d6dbac982c63ce0bc4d3358af07fd51d5ed8439c463->enter($__internal_3fd9b0b46355c35d97b43d6dbac982c63ce0bc4d3358af07fd51d5ed8439c463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3fd9b0b46355c35d97b43d6dbac982c63ce0bc4d3358af07fd51d5ed8439c463->leave($__internal_3fd9b0b46355c35d97b43d6dbac982c63ce0bc4d3358af07fd51d5ed8439c463_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9314a57cfedab0fdb36e48ef4fe0ecc71f5410877007f9fb93fef344b64864d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9314a57cfedab0fdb36e48ef4fe0ecc71f5410877007f9fb93fef344b64864d->enter($__internal_b9314a57cfedab0fdb36e48ef4fe0ecc71f5410877007f9fb93fef344b64864d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b9314a57cfedab0fdb36e48ef4fe0ecc71f5410877007f9fb93fef344b64864d->leave($__internal_b9314a57cfedab0fdb36e48ef4fe0ecc71f5410877007f9fb93fef344b64864d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 39,  217 => 38,  206 => 6,  194 => 5,  183 => 80,  179 => 79,  175 => 78,  171 => 77,  167 => 76,  163 => 75,  159 => 74,  155 => 73,  151 => 72,  147 => 71,  143 => 70,  139 => 69,  108 => 40,  105 => 39,  103 => 38,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  61 => 20,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Bienvenue, dans notre site d'annonce{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/css/bootstrap-responsive.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/css/style.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/color/default.css') }}\">
</head>

<body>
    <div class=\"navbar-wrapper\">
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <!-- Responsive navbar -->
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
                    </a>
                    <h1 class=\"brand\"><a href=\"{{ path('accueil') }}\">SiteAnonnce</a></h1>
                    <!-- navigation -->
                    <nav class=\"pull-right nav-collapse collapse\">
                    <ul id=\"menu-main\" class=\"nav\">
                        <li><a title=\"team\" href=\"{{ path('accueil') }}\">Acueil</a></li>
                        <li><a title=\"services\" href=\"{{ path('deposer') }}\">Déposer une annonce</a></li>
                        <li><a title=\"works\" href=\"{{ path('offres') }}\">Offres</a></li>
                        <li><a title=\"blog\" href=\"{{ path('demandes') }}\">Demandes</a></li>
                         <li><a title=\"blog\" href=\"{{ path('mesannonces') }}\">Mes Annonce</a></li>
                        <li><a title=\"contact\" href=\"{{ path('contact') }}\">Contact</a></li>
                        <li><a title=\"blog\" href=\"{{ path('seconnecter') }}\">Seconnecter</a></li>
                      <!--  <li><a href=\"page.html\">Page</a></li>-->
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}

</section>
<footer>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span6 offset3\">
            <ul class=\"social-networks\">
                <li><a href=\"#\"><i class=\"icon-circled icon-bgdark icon-instagram icon-2x\"></i></a></li>
                <li><a href=\"#\"><i class=\"icon-circled icon-bgdark icon-twitter icon-2x\"></i></a></li>
                <li><a href=\"#\"><i class=\"icon-circled icon-bgdark icon-dribbble icon-2x\"></i></a></li>
                <li><a href=\"#\"><i class=\"icon-circled icon-bgdark icon-pinterest icon-2x\"></i></a></li>
            </ul>
            <p class=\"copyright\">
                &copy; Maxim Theme. All rights reserved.
                <div class=\"credits\">
                    <!-- 
                        All the links in the footer should remain intact. 
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maxim
                    -->
                    <a href=\"https://bootstrapmade.com/\">Free Bootstrap Themes</a> by BootstrapMade.com
                </div>
            </p>
        </div>
    </div>
</div>
<!-- ./container -->
</footer>
        <script src=\"{{ asset('assets/vendor/js/jquery.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/jquery.scrollTo.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/jquery.nav.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/jquery.localscroll-1.2.7-min.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/bootstrap.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/jquery.prettyPhoto.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/isotope.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/jquery.flexslider.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/inview.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/animate.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/validate.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/js/custom.js') }}\"></script>
    </body>
</html>
", "base.html.twig", "/var/www/html/SiteAnnonce/app/Resources/views/base.html.twig");
    }
}
