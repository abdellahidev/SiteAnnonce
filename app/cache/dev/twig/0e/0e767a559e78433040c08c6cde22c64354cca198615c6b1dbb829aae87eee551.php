<?php

/* base.html.twig */
class __TwigTemplate_475238199ab72c4b2791508376b3fbf4744d135fee56f2c9188cd42df6d7045f extends Twig_Template
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
        $__internal_9087e507854c2224d54cd2a92292d11e64df1305c27254f98842d0c744ea8220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9087e507854c2224d54cd2a92292d11e64df1305c27254f98842d0c744ea8220->enter($__internal_9087e507854c2224d54cd2a92292d11e64df1305c27254f98842d0c744ea8220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    <h1 class=\"brand\"><a href=\"index.html\">SiteAnonnce</a></h1>
                    <!-- navigation -->
                    <nav class=\"pull-right nav-collapse collapse\">
                    <ul id=\"menu-main\" class=\"nav\">
                        <li><a title=\"team\" href=\"#about\">Acueil</a></li>
                        <li><a title=\"services\" href=\"#services\">Déposer une annonce</a></li>
                        <li><a title=\"works\" href=\"#works\">Offres</a></li>
                        <li><a title=\"blog\" href=\"#blog\">Demandes</a></li>
                         <li><a title=\"blog\" href=\"#blog\">Mes Annonce</a></li>
                        <li><a title=\"contact\" href=\"#contact\">Contact</a></li>
                        <li><a title=\"blog\" href=\"#blog\">Seconnecter</a></li>
                      <!--  <li><a href=\"page.html\">Page</a></li>-->
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<!-- Header area -->
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
                                <strong>creative</strong> and passion
                            </p>
                            </li>
                            <li>
                            <p class=\"home-slide-content\">
                                Eat and drink <strong>design</strong>
                            </p>
                            </li>
                            <li>
                            <p class=\"home-slide-content\">
                                We loves <strong>simplicity</strong>
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

        ";
        // line 569
        $this->displayBlock('body', $context, $blocks);
        // line 570
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 571
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.scrollTo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.nav.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.localscroll-1.2.7-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/isotope.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/inview.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/animate.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/validate.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/js/custom.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_9087e507854c2224d54cd2a92292d11e64df1305c27254f98842d0c744ea8220->leave($__internal_9087e507854c2224d54cd2a92292d11e64df1305c27254f98842d0c744ea8220_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d70a1d69591b36cb7ba5dd71ce495a724347aa3471e79930ceba047dcc6fea3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70a1d69591b36cb7ba5dd71ce495a724347aa3471e79930ceba047dcc6fea3d->enter($__internal_d70a1d69591b36cb7ba5dd71ce495a724347aa3471e79930ceba047dcc6fea3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue, dans notre site d'annonce";
        
        $__internal_d70a1d69591b36cb7ba5dd71ce495a724347aa3471e79930ceba047dcc6fea3d->leave($__internal_d70a1d69591b36cb7ba5dd71ce495a724347aa3471e79930ceba047dcc6fea3d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c5ed7afde8988fa26b99b2034540724f5183811c3f5f42bdd3dc5130f04f4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5ed7afde8988fa26b99b2034540724f5183811c3f5f42bdd3dc5130f04f4c7->enter($__internal_1c5ed7afde8988fa26b99b2034540724f5183811c3f5f42bdd3dc5130f04f4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c5ed7afde8988fa26b99b2034540724f5183811c3f5f42bdd3dc5130f04f4c7->leave($__internal_1c5ed7afde8988fa26b99b2034540724f5183811c3f5f42bdd3dc5130f04f4c7_prof);

    }

    // line 569
    public function block_body($context, array $blocks = array())
    {
        $__internal_199e8c10eda53c73b4dbbdda88beb27f0e9cdc25157096b7f9624a5f0c5b7594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199e8c10eda53c73b4dbbdda88beb27f0e9cdc25157096b7f9624a5f0c5b7594->enter($__internal_199e8c10eda53c73b4dbbdda88beb27f0e9cdc25157096b7f9624a5f0c5b7594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_199e8c10eda53c73b4dbbdda88beb27f0e9cdc25157096b7f9624a5f0c5b7594->leave($__internal_199e8c10eda53c73b4dbbdda88beb27f0e9cdc25157096b7f9624a5f0c5b7594_prof);

    }

    // line 570
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17b1450de94da85ccc19eeb0cc9b5d558bcae48679e26ef49268fbd76551ffa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b1450de94da85ccc19eeb0cc9b5d558bcae48679e26ef49268fbd76551ffa2->enter($__internal_17b1450de94da85ccc19eeb0cc9b5d558bcae48679e26ef49268fbd76551ffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_17b1450de94da85ccc19eeb0cc9b5d558bcae48679e26ef49268fbd76551ffa2->leave($__internal_17b1450de94da85ccc19eeb0cc9b5d558bcae48679e26ef49268fbd76551ffa2_prof);

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
        return array (  705 => 570,  694 => 569,  683 => 6,  671 => 5,  660 => 582,  656 => 581,  652 => 580,  648 => 579,  644 => 578,  640 => 577,  636 => 576,  632 => 575,  628 => 574,  624 => 573,  620 => 572,  615 => 571,  612 => 570,  610 => 569,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
                    <h1 class=\"brand\"><a href=\"index.html\">SiteAnonnce</a></h1>
                    <!-- navigation -->
                    <nav class=\"pull-right nav-collapse collapse\">
                    <ul id=\"menu-main\" class=\"nav\">
                        <li><a title=\"team\" href=\"#about\">Acueil</a></li>
                        <li><a title=\"services\" href=\"#services\">Déposer une annonce</a></li>
                        <li><a title=\"works\" href=\"#works\">Offres</a></li>
                        <li><a title=\"blog\" href=\"#blog\">Demandes</a></li>
                         <li><a title=\"blog\" href=\"#blog\">Mes Annonce</a></li>
                        <li><a title=\"contact\" href=\"#contact\">Contact</a></li>
                        <li><a title=\"blog\" href=\"#blog\">Seconnecter</a></li>
                      <!--  <li><a href=\"page.html\">Page</a></li>-->
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<!-- Header area -->
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
                                <strong>creative</strong> and passion
                            </p>
                            </li>
                            <li>
                            <p class=\"home-slide-content\">
                                Eat and drink <strong>design</strong>
                            </p>
                            </li>
                            <li>
                            <p class=\"home-slide-content\">
                                We loves <strong>simplicity</strong>
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

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
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
", "base.html.twig", "/var/www/html/SiteAnonnce/app/Resources/views/base.html.twig");
    }
}
