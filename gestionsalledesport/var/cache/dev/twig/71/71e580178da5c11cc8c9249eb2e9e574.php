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

/* command/command.html.twig */
class __TwigTemplate_e786976539b9aede2ceda8f1acf8fba7 extends Template
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
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "command/command.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "command/command.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "command/command.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"/front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Produit Section Begin -->
    <!-- Section-->
        
        

    <!-- Produit Section End -->


<section class=\"class-timetable-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-title\">
                        <h2>Votre Panier</h2>
                    </div>
                </div>
                
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"class-timetable\">
                    
                    ";
        // line 41
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 41, $this->source); })())) > 0)) {
            // line 42
            echo "                        <table>
                            <thead>
                                <tr>
                                    
                                    <th>Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Totale</th>
                                    <th colspan=\"3\" >Action</th>
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                 ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 59
                echo "                                <tr>

                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        <h5>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), "html", null, true);
                echo "</h5>
                                        
                                    </td>
                                    <td class=\"hover-bg ts-meta\" data-tsmeta=\"fitness\">
                                        
                                        <span>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 67), "prix", [], "any", false, false, false, 67), "html", null, true);
                echo "DT</span>
                                    </td>
                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        
                                        <span>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "qantity", [], "any", false, false, false, 71), "html", null, true);
                echo "</span>
                                    </td>
                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        <h5>";
                // line 74
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 74), "prix", [], "any", false, false, false, 74) * twig_get_attribute($this->env, $this->source, $context["item"], "qantity", [], "any", false, false, false, 74)), "html", null, true);
                echo "</h5>
                                        
                                    </td>
                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        <button type=\"button\" class=\"btn btn-link\">
                                        <a  href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\">
                                                                                        Augmente</a></button>
                                        
                                    </td>
                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        <button type=\"button\" class=\"btn btn-link\">
                                    <a  href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diminuier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\">
                                                                                        Diminuer</a></button>
                                        
                                    </td>
                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        <button type=\"button\"  class=\"btn btn-link\">
                                     <a  href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91)]), "html", null, true);
                echo "\">
                                                                                        Suprimer</a></button>
                                        
                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "  
                            </tbody>
                            <tfoot>
                                        <tr> 
                                        <td colspan=\"3\" class=\"text-right ; table-dark\"\"><h5>Total: </h5></td>
                                         <td class=\"table-dark\" style=\"color:white;\" ><h5>";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 101, $this->source); })()), "html", null, true);
            echo "DT</h5></td>
                                        <td><button type=\"button\" class=\"btn btn-outline-secondary\"><a  href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("command_list");
            echo "\">Commander</button></td>
                                        </tr>
                                                                                                  
                                                                                                  
                                                                                    
                                                                                                  </tfoot>
                        </table>
                        ";
        }
        // line 110
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
 </body>

</html>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "command/command.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 110,  205 => 102,  201 => 101,  194 => 96,  182 => 91,  173 => 85,  164 => 79,  156 => 74,  150 => 71,  143 => 67,  135 => 62,  130 => 59,  126 => 58,  108 => 42,  106 => 41,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}


{% block body %}

<!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"/front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Produit Section Begin -->
    <!-- Section-->
        
        

    <!-- Produit Section End -->


<section class=\"class-timetable-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-title\">
                        <h2>Votre Panier</h2>
                    </div>
                </div>
                
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"class-timetable\">
                    
                    {% if items | length > 0 %}
                        <table>
                            <thead>
                                <tr>
                                    
                                    <th>Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Totale</th>
                                    <th colspan=\"3\" >Action</th>
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                 {% for item in items  %}
                                <tr>

                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        <h5>{{ item.produit.nom }}</h5>
                                        
                                    </td>
                                    <td class=\"hover-bg ts-meta\" data-tsmeta=\"fitness\">
                                        
                                        <span>{{ item.produit.prix }}DT</span>
                                    </td>
                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        
                                        <span>{{ item.qantity }}</span>
                                    </td>
                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        <h5>{{ item.produit.prix * item.qantity }}</h5>
                                        
                                    </td>
                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        <button type=\"button\" class=\"btn btn-link\">
                                        <a  href=\"{{ path('app_add' , {'id': item.produit.id}) }}\">
                                                                                        Augmente</a></button>
                                        
                                    </td>
                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        <button type=\"button\" class=\"btn btn-link\">
                                    <a  href=\"{{ path('app_diminuier' , {'id': item.produit.id}) }}\">
                                                                                        Diminuer</a></button>
                                        
                                    </td>
                                    <td class=\"dark-bg hover-bg ts-meta\" data-tsmeta=\"workout\">
                                        <button type=\"button\"  class=\"btn btn-link\">
                                     <a  href=\"{{ path('app_remove' , {'id': item.produit.id}) }}\">
                                                                                        Suprimer</a></button>
                                        
                                    </td>
                                </tr>
                                {% endfor%}  
                            </tbody>
                            <tfoot>
                                        <tr> 
                                        <td colspan=\"3\" class=\"text-right ; table-dark\"\"><h5>Total: </h5></td>
                                         <td class=\"table-dark\" style=\"color:white;\" ><h5>{{ total }}DT</h5></td>
                                        <td><button type=\"button\" class=\"btn btn-outline-secondary\"><a  href=\"{{ path('command_list') }}\">Commander</button></td>
                                        </tr>
                                                                                                  
                                                                                                  
                                                                                    
                                                                                                  </tfoot>
                        </table>
                        {% endif%}
                    </div>
                </div>
            </div>
        </div>
    </section>
 </body>

</html>


{% endblock %}
", "command/command.html.twig", "C:\\Users\\AA\\PI1\\pi\\gestionsalledesport\\templates\\command\\command.html.twig");
    }
}
