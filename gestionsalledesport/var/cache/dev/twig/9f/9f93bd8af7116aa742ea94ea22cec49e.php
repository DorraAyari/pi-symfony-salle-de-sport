<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog/blogdetails.html.twig */
class __TwigTemplate_8397587c6c0c99f3e7afae69f19bc072 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blogdetails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blogdetails.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "blog/blogdetails.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Header End -->

    <!-- Blog Details Hero Section Begin -->
    <section class=\"blog-details-hero set-bg\" data-setbg=\"/front/img/blog/details/details-hero.jpg\">
        <div class=\"container\">
            <div class=\"row\">
            
                <div class=\"col-lg-8 p-0 m-auto\">
                    <div class=\"bh-text\">
                        <h3>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</h3>
                        <ul>
                            <li>by Admin</li>
                            <li>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 19, $this->source); })()), "createdAt", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true);
        echo "</li>
                            
                        </ul>
                    </div>
                </div> 
            
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->

    <!-- Blog Details Section Begin -->
    <section class=\"blog-details-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 p-0 m-auto\">
                    <div class=\"blog-details-text\">
                        <div class=\"blog-details-title\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium. Excepteur
                                sint occaecat cupidatat non proident sculpa .</p>
                            <p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat anim id est laborum.</p>
                            <h5>You Can Buy For Less Than A College Degree</h5>
                            <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur officia deserunt mollit.
                            </p>
                        </div>
                        <div class=\"blog-details-pic\">
                            <div class=\"blog-details-pic-item\">
                                <img src=\"/front/img/blog/details/details-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"blog-details-pic-item\">
                                <img src=\"/front/img/blog/details/details-2.jpg\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"blog-details-desc\">
                            <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class=\"blog-details-quote\">
                            <div class=\"quote-icon\">
                                <img src=\"/front/img/blog/details/quote-left.png\" alt=\"\">
                            </div>
                            <h5>The whole family of tiny legumes, whether red, green, yellow, or black, offers so many
                                possibilities to create an exciting lunch.</h5>
                            <span>MEIKE PETERS</span>
                        </div>
                        <div class=\"blog-details-more-desc\">
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                in. . Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                            <p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit, sed eiusmod tempor incididunt laboris nisi ut
                                aliquip commodo consequat. Class aptent taciti sociosqu ad litora torquent per conubia
                                nostra, per inceptos himenaeos. Mauris vel magna ex. Integer gravida tincidunt accumsan.
                                Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi qui dolorem.</p>
                        </div>
                        
                        <div class=\"blog-details-author\">
                           
                            <div class=\"ba-text\">
                                <h2 style=\"color: white;\">LEAVE A COMMENT</h2>
                                ";
        // line 101
        echo "                                <br>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"comment-option\">
                                    <h5 class=\"co-title\">Comment</h5>
                                    <div class=\"co-item\">
                                   
                                    
                                        <div class=\"co-widget\">
                                            <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-share-square-o\"></i></a>
                                        </div>
                                       ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 115, $this->source); })()), "commentaire", [], "any", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 116
            echo "
                                        <div class=\"co-pic\">
                                            ";
            // line 119
            echo "                                            <h5>Brandon Kelley</h5>
                                            
                                         <p>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "comment", [], "any", false, false, false, 121), "html", null, true);
            echo "</p>
                                        </div>
                                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "
                                        <div class=\"co-text\">
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"leave-comment\">
                                      <div class=\"col-xs2 col-sm3\" id=\"ajout-commentaire\">
\t\t\t\t<h2>Ajouter un commentaire</h2>
\t\t\t\t";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 137, $this->source); })()), 'form_start');
        echo "
\t\t\t\t    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 138, $this->source); })()), "comment", [], "any", false, false, false, 138), 'row');
        echo "
                    <p>Message</p>
                    <div id=\"editor\"></div>
\t\t\t\t";
        // line 141
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 141, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Get In Touch Section Begin -->
    <div class=\"gettouch-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"gt-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->




</body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/blogdetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  220 => 138,  216 => 137,  201 => 124,  192 => 121,  188 => 119,  184 => 116,  180 => 115,  164 => 101,  86 => 19,  80 => 16,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"front/base.html.twig\" %}


{% block body %}

    <!-- Header End -->

    <!-- Blog Details Hero Section Begin -->
    <section class=\"blog-details-hero set-bg\" data-setbg=\"/front/img/blog/details/details-hero.jpg\">
        <div class=\"container\">
            <div class=\"row\">
            
                <div class=\"col-lg-8 p-0 m-auto\">
                    <div class=\"bh-text\">
                        <h3>{{ blog.nom }}</h3>
                        <ul>
                            <li>by Admin</li>
                            <li>{{ blog.createdAt |date('Y-m-d')}}</li>
                            
                        </ul>
                    </div>
                </div> 
            
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->

    <!-- Blog Details Section Begin -->
    <section class=\"blog-details-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 p-0 m-auto\">
                    <div class=\"blog-details-text\">
                        <div class=\"blog-details-title\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium. Excepteur
                                sint occaecat cupidatat non proident sculpa .</p>
                            <p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat anim id est laborum.</p>
                            <h5>You Can Buy For Less Than A College Degree</h5>
                            <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur officia deserunt mollit.
                            </p>
                        </div>
                        <div class=\"blog-details-pic\">
                            <div class=\"blog-details-pic-item\">
                                <img src=\"/front/img/blog/details/details-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"blog-details-pic-item\">
                                <img src=\"/front/img/blog/details/details-2.jpg\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"blog-details-desc\">
                            <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class=\"blog-details-quote\">
                            <div class=\"quote-icon\">
                                <img src=\"/front/img/blog/details/quote-left.png\" alt=\"\">
                            </div>
                            <h5>The whole family of tiny legumes, whether red, green, yellow, or black, offers so many
                                possibilities to create an exciting lunch.</h5>
                            <span>MEIKE PETERS</span>
                        </div>
                        <div class=\"blog-details-more-desc\">
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                in. . Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                            <p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit, sed eiusmod tempor incididunt laboris nisi ut
                                aliquip commodo consequat. Class aptent taciti sociosqu ad litora torquent per conubia
                                nostra, per inceptos himenaeos. Mauris vel magna ex. Integer gravida tincidunt accumsan.
                                Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi qui dolorem.</p>
                        </div>
                        
                        <div class=\"blog-details-author\">
                           
                            <div class=\"ba-text\">
                                <h2 style=\"color: white;\">LEAVE A COMMENT</h2>
                                {# <div class=\"bp-social\">
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                                </div> #}
                                <br>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"comment-option\">
                                    <h5 class=\"co-title\">Comment</h5>
                                    <div class=\"co-item\">
                                   
                                    
                                        <div class=\"co-widget\">
                                            <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-share-square-o\"></i></a>
                                        </div>
                                       {% for commentaire in blog.commentaire %}

                                        <div class=\"co-pic\">
                                            {# <img src=\"/front/img/blog/details/comment-1.jpg\" alt=\"\"> #}
                                            <h5>Brandon Kelley</h5>
                                            
                                         <p>{{commentaire.comment}}</p>
                                        </div>
                                                                                {% endfor %}

                                        <div class=\"co-text\">
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"leave-comment\">
                                      <div class=\"col-xs2 col-sm3\" id=\"ajout-commentaire\">
\t\t\t\t<h2>Ajouter un commentaire</h2>
\t\t\t\t{{ form_start(commentForm) }}
\t\t\t\t    {{ form_row(commentForm.comment) }}
                    <p>Message</p>
                    <div id=\"editor\"></div>
\t\t\t\t{{ form_end(commentForm) }}
\t\t\t</div>
\t\t</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Get In Touch Section Begin -->
    <div class=\"gettouch-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"gt-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->




</body>

{% endblock %}", "blog/blogdetails.html.twig", "C:\\Users\\EMNA\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\blog\\blogdetails.html.twig");
    }
}
