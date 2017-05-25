<?php

/* AccueilBundle:Accueil:accueil.html.twig */
class __TwigTemplate_9134022afcb22f1f39399d138f24097c738445ad43ea9641bdcf7b8cb2699100 extends Twig_Template
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
        $__internal_7cb8e52ecc111bb660d18b6a5aa2e69067e153626463017f44c3293c60eb3d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb8e52ecc111bb660d18b6a5aa2e69067e153626463017f44c3293c60eb3d9c->enter($__internal_7cb8e52ecc111bb660d18b6a5aa2e69067e153626463017f44c3293c60eb3d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb8e52ecc111bb660d18b6a5aa2e69067e153626463017f44c3293c60eb3d9c->leave($__internal_7cb8e52ecc111bb660d18b6a5aa2e69067e153626463017f44c3293c60eb3d9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_976656c03a357c04ebf16d4134fbdbe969e691b78835661f8de03eb159fa056f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976656c03a357c04ebf16d4134fbdbe969e691b78835661f8de03eb159fa056f->enter($__internal_976656c03a357c04ebf16d4134fbdbe969e691b78835661f8de03eb159fa056f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<!-- Header area -->
    <div id=\"header-wrapper\" class=\"header-slider\">
        <header class=\"clearfix\">
        <div class=\"logo\">
            <img src=\"img/logo-image.png\" alt=\"\" />
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <div id=\"main-flexslider\" class=\"flexslider\">
                        <ul class=\"slides\">
                            <li>
                            <p class=\"home-slide-content\">
                                <strong>Bienvenue dans notre site d'annonce</strong>
                            </p>
                            </li>
                            <li>
                            <p class=\"home-slide-content\">
                               Un site simple et efficace pour rechercher <strong>des annoncxes</strong>
                            </p>
                            </li>
                            <li>
                            <p class=\"home-slide-content\">
                                Créer par des jeunes Dévéloppeurs de <strong>France</strong>
                            </p>
                            </li>
                        </ul>
                    </div>
                    <!-- end slider -->
                </div>
            </div>
        </div>
        </header>
    </div>
<!-- spacer section -->
    <section class=\"spacer green\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span6 alignright flyLeft\">
                <blockquote class=\"large\">
                     There's huge space beetween creativity and imagination <cite>Mark Simmons, Nett Media</cite>
                </blockquote>
            </div>
            <div class=\"span6 aligncenter flyRight\">
                <i class=\"icon-coffee icon-10x\"></i>
            </div>
        </div>
    </div>
    </section>
<!-- end spacer section -->
<!-- section: team -->
    <section id=\"about\" class=\"section\">
    <div class=\"container\">
        <h4>Who We Are</h4>
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <div>
                    <h2>We live with <strong>creativity</strong></h2>
                    <p>
                        Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores.
                    </p>
                </div>
            </div>
            <div class=\"span6\">
                <div class=\"aligncenter\">
                    <img src=\"img/icons/creativity.png\" alt=\"\" />
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"span2 offset1 flyIn\">
                <div class=\"people\">
                    <img class=\"team-thumb img-circle\" src=\"img/team/img-1.jpg\" alt=\"\" />
                    <h3>John Doe</h3>
                    <p>
                        Art director
                    </p>
                </div>
            </div>
            <div class=\"span2 flyIn\">
                <div class=\"people\">
                    <img class=\"team-thumb img-circle\" src=\"img/team/img-2.jpg\" alt=\"\" />
                    <h3>Mike Doe</h3>
                    <p>
                        Web developer
                    </p>
                </div>
            </div>
            <div class=\"span2 flyIn\">
                <div class=\"people\">
                    <img class=\"team-thumb img-circle\" src=\"img/team/img-3.jpg\" alt=\"\" />
                    <h3>Neil Doe</h3>
                    <p>
                        Web designer
                    </p>
                </div>
            </div>
            <div class=\"span2 flyIn\">
                <div class=\"people\">
                    <img class=\"team-thumb img-circle\" src=\"img/team/img-4.jpg\" alt=\"\" />
                    <h3>Mark Joe</h3>
                    <p>
                        UI designer
                    </p>
                </div>
            </div>
            <div class=\"span2 flyIn\">
                <div class=\"people\">
                    <img class=\"team-thumb img-circle\" src=\"img/team/img-5.jpg\" alt=\"\" />
                    <h3>Stephen B</h3>
                    <p>
                        Digital imaging
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    </section>
<!-- end section: team -->
<!-- section: services -->
    <section id=\"services\" class=\"section orange\">
    <div class=\"container\">
        <h4>Services</h4>
        <!-- Four columns -->
        <div class=\"row\">
            <div class=\"span3 animated-fast flyIn\">
                <div class=\"service-box\">
                    <img src=\"img/icons/laptop.png\" alt=\"\" />
                    <h2>Web design</h2>
                    <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class=\"span3 animated flyIn\">
                <div class=\"service-box\">
                    <img src=\"img/icons/lab.png\" alt=\"\" />
                    <h2>Web development</h2>
                    <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class=\"span3 animated-fast flyIn\">
                <div class=\"service-box\">
                    <img src=\"img/icons/camera.png\" alt=\"\" />
                    <h2>Photography</h2>
                    <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class=\"span3 animated-slow flyIn\">
                <div class=\"service-box\">
                    <img src=\"img/icons/basket.png\" alt=\"\" />
                    <h2>Ecommerce</h2>
                    <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </section>
<!-- end section: services -->
<!-- section: works -->
    <section id=\"works\" class=\"section\">
    <div class=\"container clearfix\">
        <h4>Our Works</h4>
        <!-- portfolio filter -->
        <div class=\"row\">
            <div id=\"filters\" class=\"span12\">
                <ul class=\"clearfix\">
                    <li><a href=\"#\" data-filter=\"*\" class=\"active\">
                    <h5>All</h5>
                    </a></li>
                    <li><a href=\"#\" data-filter=\".web\">
                    <h5>Web</h5>
                    </a></li>
                    <li><a href=\"#\" data-filter=\".print\">
                    <h5>Print</h5>
                    </a></li>
                    <li><a href=\"#\" data-filter=\".design\">
                    <h5>Design</h5>
                    </a></li>
                    <li><a href=\"#\" data-filter=\".photography\">
                    <h5>Photography</h5>
                    </a></li>
                </ul>
            </div>
            <!-- END PORTFOLIO FILTERING -->
        </div>
        <div class=\"row\">
            <div class=\"span12\">
                <div id=\"portfolio-wrap\">
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid print photography\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/1.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid print design web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/2.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid print design\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/3.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/4.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/5.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/6.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/7.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/8.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/9.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid design web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/10.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                </div>
            </div>
        </div>
    </div>
    </section>
<!-- spacer section -->
    <section class=\"spacer bg3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12 aligncenter flyLeft\">
                <blockquote class=\"large\">
                     We are an established and trusted web agency with a reputation for commitment and high integrity
                </blockquote>
            </div>
            <div class=\"span12 aligncenter flyRight\">
                <i class=\"icon-rocket icon-10x\"></i>
            </div>
        </div>
    </div>
    </section>
<!-- end spacer section -->
<!-- section: blog -->
    <section id=\"blog\" class=\"section\">
    <div class=\"container\">
        <h4>Our Blog</h4>
        <!-- Three columns -->
        <div class=\"row\">
            <div class=\"span3\">
                <div class=\"home-post\">
                    <div class=\"post-image\">
                        <img class=\"max-img\" src=\"img/blog/img1.jpg\" alt=\"\" />
                    </div>
                    <div class=\"post-meta\">
                        <i class=\"icon-file icon-2x\"></i>
                        <span class=\"date\">June 19, 2013</span>
                        <span class=\"tags\"><a href=\"#\">Design</a>, <a href=\"#\">Blog</a></span>
                    </div>
                    <div class=\"entry-content\">
                        <h5><strong><a href=\"#\">New design trends</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                        </p>
                        <a href=\"#\" class=\"more\">Read more</a>
                    </div>
                </div>
            </div>
            <div class=\"span3\">
                <div class=\"home-post\">
                    <div class=\"post-image\">
                        <img class=\"max-img\" src=\"img/blog/img2.jpg\" alt=\"\" />
                    </div>
                    <div class=\"post-meta\">
                        <i class=\"icon-file icon-2x\"></i>
                        <span class=\"date\">June 19, 2013</span>
                        <span class=\"tags\"><a href=\"#\">Design</a>, <a href=\"#\">News</a></span>
                    </div>
                    <div class=\"entry-content\">
                        <h5><strong><a href=\"#\">Retro is great</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                        </p>
                        <a href=\"#\" class=\"more\">Read more</a>
                    </div>
                </div>
            </div>
            <div class=\"span3\">
                <div class=\"home-post\">
                    <div class=\"post-image\">
                        <img class=\"max-img\" src=\"img/blog/img3.jpg\" alt=\"\" />
                    </div>
                    <div class=\"post-meta\">
                        <i class=\"icon-file icon-2x\"></i>
                        <span class=\"date\">June 22, 2013</span>
                        <span class=\"tags\"><a href=\"#\">Design</a>, <a href=\"#\">Tips</a></span>
                    </div>
                    <div class=\"entry-content\">
                        <h5><strong><a href=\"#\">Isometric mockup</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                        </p>
                        <a href=\"#\" class=\"more\">Read more</a>
                    </div>
                </div>
            </div>
            <div class=\"span3\">
                <div class=\"home-post\">
                    <div class=\"post-image\">
                        <img class=\"max-img\" src=\"img/blog/img4.jpg\" alt=\"\" />
                    </div>
                    <div class=\"post-meta\">
                        <i class=\"icon-file icon-2x\"></i>
                        <span class=\"date\">June 27, 2013</span>
                        <span class=\"tags\"><a href=\"#\">News</a>, <a href=\"#\">Tutorial</a></span>
                    </div>
                    <div class=\"entry-content\">
                        <h5><strong><a href=\"#\">Free icon set</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                        </p>
                        <a href=\"#\" class=\"more\">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"blankdivider30\"></div>
        <div class=\"aligncenter\">
            <a href=\"#\" class=\"btn btn-large btn-theme\">More blog post</a>
        </div>
    </div>
    </section>

<!-- end spacer section -->
<!-- section: contact -->
<section id=\"contact\" class=\"section green\">
<div class=\"container\">
    <h4>Get in Touch</h4>
    <p>
         Reque facer nostro et ius, cu persius mnesarchum disputando eam, clita prompta et mel vidisse phaedrum pri et. Facilisis posidonium ex his. Mutat iudico vis in, mea aeque tamquam scripserit an, mea eu ignota viderer probatus. Lorem legere consetetur ei eum. Sumo aeque assentior te eam, pri nominati posidonium consttuam
    </p>
    <div class=\"blankdivider30\">
    </div>
    <div class=\"row\">
        <div class=\"span12\">
            <div class=\"cform\" id=\"contact-form\">
                <div id=\"sendmessage\">Your message has been sent. Thank you!</div>
                <div id=\"errormessage\"></div>
                <form action=\"\" method=\"post\" role=\"form\" class=\"contactForm\">
                    <div class=\"row\">
                        <div class=\"span6\">
                            <div class=\"field your-name form-group\">
                                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                                <div class=\"validation\"></div>
                            </div>
                            <div class=\"field your-email form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                                <div class=\"validation\"></div>
                            </div>
                            <div class=\"field subject form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                <div class=\"validation\"></div>
                            </div>
                        </div>
                        <div class=\"span6\">
                            <div class=\"field message form-group\">
                                <textarea class=\"form-control\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
                                <div class=\"validation\"></div>
                            </div>
                            <input type=\"submit\" value=\"Send message\" class=\"btn btn-theme pull-left\">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- ./span12 -->
    </div>
</div>
";
        
        $__internal_976656c03a357c04ebf16d4134fbdbe969e691b78835661f8de03eb159fa056f->leave($__internal_976656c03a357c04ebf16d4134fbdbe969e691b78835661f8de03eb159fa056f_prof);

    }

    // line 508
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73c00b40945eee1ad550bc8993da05be507557c22bf37812db430a1d51099bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c00b40945eee1ad550bc8993da05be507557c22bf37812db430a1d51099bac->enter($__internal_73c00b40945eee1ad550bc8993da05be507557c22bf37812db430a1d51099bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 509
        echo "
";
        
        $__internal_73c00b40945eee1ad550bc8993da05be507557c22bf37812db430a1d51099bac->leave($__internal_73c00b40945eee1ad550bc8993da05be507557c22bf37812db430a1d51099bac_prof);

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
        return array (  556 => 509,  550 => 508,  41 => 4,  35 => 3,  11 => 1,);
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
\t<!-- Header area -->
    <div id=\"header-wrapper\" class=\"header-slider\">
        <header class=\"clearfix\">
        <div class=\"logo\">
            <img src=\"img/logo-image.png\" alt=\"\" />
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <div id=\"main-flexslider\" class=\"flexslider\">
                        <ul class=\"slides\">
                            <li>
                            <p class=\"home-slide-content\">
                                <strong>Bienvenue dans notre site d'annonce</strong>
                            </p>
                            </li>
                            <li>
                            <p class=\"home-slide-content\">
                               Un site simple et efficace pour rechercher <strong>des annoncxes</strong>
                            </p>
                            </li>
                            <li>
                            <p class=\"home-slide-content\">
                                Créer par des jeunes Dévéloppeurs de <strong>France</strong>
                            </p>
                            </li>
                        </ul>
                    </div>
                    <!-- end slider -->
                </div>
            </div>
        </div>
        </header>
    </div>
<!-- spacer section -->
    <section class=\"spacer green\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span6 alignright flyLeft\">
                <blockquote class=\"large\">
                     There's huge space beetween creativity and imagination <cite>Mark Simmons, Nett Media</cite>
                </blockquote>
            </div>
            <div class=\"span6 aligncenter flyRight\">
                <i class=\"icon-coffee icon-10x\"></i>
            </div>
        </div>
    </div>
    </section>
<!-- end spacer section -->
<!-- section: team -->
    <section id=\"about\" class=\"section\">
    <div class=\"container\">
        <h4>Who We Are</h4>
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <div>
                    <h2>We live with <strong>creativity</strong></h2>
                    <p>
                        Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores.
                    </p>
                </div>
            </div>
            <div class=\"span6\">
                <div class=\"aligncenter\">
                    <img src=\"img/icons/creativity.png\" alt=\"\" />
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"span2 offset1 flyIn\">
                <div class=\"people\">
                    <img class=\"team-thumb img-circle\" src=\"img/team/img-1.jpg\" alt=\"\" />
                    <h3>John Doe</h3>
                    <p>
                        Art director
                    </p>
                </div>
            </div>
            <div class=\"span2 flyIn\">
                <div class=\"people\">
                    <img class=\"team-thumb img-circle\" src=\"img/team/img-2.jpg\" alt=\"\" />
                    <h3>Mike Doe</h3>
                    <p>
                        Web developer
                    </p>
                </div>
            </div>
            <div class=\"span2 flyIn\">
                <div class=\"people\">
                    <img class=\"team-thumb img-circle\" src=\"img/team/img-3.jpg\" alt=\"\" />
                    <h3>Neil Doe</h3>
                    <p>
                        Web designer
                    </p>
                </div>
            </div>
            <div class=\"span2 flyIn\">
                <div class=\"people\">
                    <img class=\"team-thumb img-circle\" src=\"img/team/img-4.jpg\" alt=\"\" />
                    <h3>Mark Joe</h3>
                    <p>
                        UI designer
                    </p>
                </div>
            </div>
            <div class=\"span2 flyIn\">
                <div class=\"people\">
                    <img class=\"team-thumb img-circle\" src=\"img/team/img-5.jpg\" alt=\"\" />
                    <h3>Stephen B</h3>
                    <p>
                        Digital imaging
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    </section>
<!-- end section: team -->
<!-- section: services -->
    <section id=\"services\" class=\"section orange\">
    <div class=\"container\">
        <h4>Services</h4>
        <!-- Four columns -->
        <div class=\"row\">
            <div class=\"span3 animated-fast flyIn\">
                <div class=\"service-box\">
                    <img src=\"img/icons/laptop.png\" alt=\"\" />
                    <h2>Web design</h2>
                    <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class=\"span3 animated flyIn\">
                <div class=\"service-box\">
                    <img src=\"img/icons/lab.png\" alt=\"\" />
                    <h2>Web development</h2>
                    <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class=\"span3 animated-fast flyIn\">
                <div class=\"service-box\">
                    <img src=\"img/icons/camera.png\" alt=\"\" />
                    <h2>Photography</h2>
                    <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class=\"span3 animated-slow flyIn\">
                <div class=\"service-box\">
                    <img src=\"img/icons/basket.png\" alt=\"\" />
                    <h2>Ecommerce</h2>
                    <p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </section>
<!-- end section: services -->
<!-- section: works -->
    <section id=\"works\" class=\"section\">
    <div class=\"container clearfix\">
        <h4>Our Works</h4>
        <!-- portfolio filter -->
        <div class=\"row\">
            <div id=\"filters\" class=\"span12\">
                <ul class=\"clearfix\">
                    <li><a href=\"#\" data-filter=\"*\" class=\"active\">
                    <h5>All</h5>
                    </a></li>
                    <li><a href=\"#\" data-filter=\".web\">
                    <h5>Web</h5>
                    </a></li>
                    <li><a href=\"#\" data-filter=\".print\">
                    <h5>Print</h5>
                    </a></li>
                    <li><a href=\"#\" data-filter=\".design\">
                    <h5>Design</h5>
                    </a></li>
                    <li><a href=\"#\" data-filter=\".photography\">
                    <h5>Photography</h5>
                    </a></li>
                </ul>
            </div>
            <!-- END PORTFOLIO FILTERING -->
        </div>
        <div class=\"row\">
            <div class=\"span12\">
                <div id=\"portfolio-wrap\">
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid print photography\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/1.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid print design web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/2.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid print design\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/3.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/4.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/5.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/6.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/7.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/8.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid photography web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/9.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                    <!-- portfolio item -->
                    <div class=\"portfolio-item grid design web\">
                        <div class=\"portfolio\">
                            <a href=\"img/works/big.jpg\" data-pretty=\"prettyPhoto[gallery1]\" class=\"portfolio-image\">
                            <img src=\"img/works/10.png\" alt=\"\" />
                            <div class=\"portfolio-overlay\">
                                <div class=\"thumb-info\">
                                    <h5>Portfolio name</h5>
                                    <i class=\"icon-plus icon-2x\"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- end portfolio item -->
                </div>
            </div>
        </div>
    </div>
    </section>
<!-- spacer section -->
    <section class=\"spacer bg3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12 aligncenter flyLeft\">
                <blockquote class=\"large\">
                     We are an established and trusted web agency with a reputation for commitment and high integrity
                </blockquote>
            </div>
            <div class=\"span12 aligncenter flyRight\">
                <i class=\"icon-rocket icon-10x\"></i>
            </div>
        </div>
    </div>
    </section>
<!-- end spacer section -->
<!-- section: blog -->
    <section id=\"blog\" class=\"section\">
    <div class=\"container\">
        <h4>Our Blog</h4>
        <!-- Three columns -->
        <div class=\"row\">
            <div class=\"span3\">
                <div class=\"home-post\">
                    <div class=\"post-image\">
                        <img class=\"max-img\" src=\"img/blog/img1.jpg\" alt=\"\" />
                    </div>
                    <div class=\"post-meta\">
                        <i class=\"icon-file icon-2x\"></i>
                        <span class=\"date\">June 19, 2013</span>
                        <span class=\"tags\"><a href=\"#\">Design</a>, <a href=\"#\">Blog</a></span>
                    </div>
                    <div class=\"entry-content\">
                        <h5><strong><a href=\"#\">New design trends</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                        </p>
                        <a href=\"#\" class=\"more\">Read more</a>
                    </div>
                </div>
            </div>
            <div class=\"span3\">
                <div class=\"home-post\">
                    <div class=\"post-image\">
                        <img class=\"max-img\" src=\"img/blog/img2.jpg\" alt=\"\" />
                    </div>
                    <div class=\"post-meta\">
                        <i class=\"icon-file icon-2x\"></i>
                        <span class=\"date\">June 19, 2013</span>
                        <span class=\"tags\"><a href=\"#\">Design</a>, <a href=\"#\">News</a></span>
                    </div>
                    <div class=\"entry-content\">
                        <h5><strong><a href=\"#\">Retro is great</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                        </p>
                        <a href=\"#\" class=\"more\">Read more</a>
                    </div>
                </div>
            </div>
            <div class=\"span3\">
                <div class=\"home-post\">
                    <div class=\"post-image\">
                        <img class=\"max-img\" src=\"img/blog/img3.jpg\" alt=\"\" />
                    </div>
                    <div class=\"post-meta\">
                        <i class=\"icon-file icon-2x\"></i>
                        <span class=\"date\">June 22, 2013</span>
                        <span class=\"tags\"><a href=\"#\">Design</a>, <a href=\"#\">Tips</a></span>
                    </div>
                    <div class=\"entry-content\">
                        <h5><strong><a href=\"#\">Isometric mockup</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                        </p>
                        <a href=\"#\" class=\"more\">Read more</a>
                    </div>
                </div>
            </div>
            <div class=\"span3\">
                <div class=\"home-post\">
                    <div class=\"post-image\">
                        <img class=\"max-img\" src=\"img/blog/img4.jpg\" alt=\"\" />
                    </div>
                    <div class=\"post-meta\">
                        <i class=\"icon-file icon-2x\"></i>
                        <span class=\"date\">June 27, 2013</span>
                        <span class=\"tags\"><a href=\"#\">News</a>, <a href=\"#\">Tutorial</a></span>
                    </div>
                    <div class=\"entry-content\">
                        <h5><strong><a href=\"#\">Free icon set</a></strong></h5>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
                        </p>
                        <a href=\"#\" class=\"more\">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"blankdivider30\"></div>
        <div class=\"aligncenter\">
            <a href=\"#\" class=\"btn btn-large btn-theme\">More blog post</a>
        </div>
    </div>
    </section>

<!-- end spacer section -->
<!-- section: contact -->
<section id=\"contact\" class=\"section green\">
<div class=\"container\">
    <h4>Get in Touch</h4>
    <p>
         Reque facer nostro et ius, cu persius mnesarchum disputando eam, clita prompta et mel vidisse phaedrum pri et. Facilisis posidonium ex his. Mutat iudico vis in, mea aeque tamquam scripserit an, mea eu ignota viderer probatus. Lorem legere consetetur ei eum. Sumo aeque assentior te eam, pri nominati posidonium consttuam
    </p>
    <div class=\"blankdivider30\">
    </div>
    <div class=\"row\">
        <div class=\"span12\">
            <div class=\"cform\" id=\"contact-form\">
                <div id=\"sendmessage\">Your message has been sent. Thank you!</div>
                <div id=\"errormessage\"></div>
                <form action=\"\" method=\"post\" role=\"form\" class=\"contactForm\">
                    <div class=\"row\">
                        <div class=\"span6\">
                            <div class=\"field your-name form-group\">
                                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                                <div class=\"validation\"></div>
                            </div>
                            <div class=\"field your-email form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                                <div class=\"validation\"></div>
                            </div>
                            <div class=\"field subject form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                <div class=\"validation\"></div>
                            </div>
                        </div>
                        <div class=\"span6\">
                            <div class=\"field message form-group\">
                                <textarea class=\"form-control\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
                                <div class=\"validation\"></div>
                            </div>
                            <input type=\"submit\" value=\"Send message\" class=\"btn btn-theme pull-left\">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- ./span12 -->
    </div>
</div>
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "AccueilBundle:Accueil:accueil.html.twig", "/var/www/html/SiteAnnonce/src/AccueilBundle/Resources/views/Accueil/accueil.html.twig");
    }
}
