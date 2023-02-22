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

/* prodduit/index.html.twig */
class __TwigTemplate_666fde933459cdd2749bf156935f93c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prodduit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prodduit/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"frontproduit/assets/favicon.ico\" />
        <!-- Bootstrap icons-->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\" rel=\"stylesheet\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"frontproduit/css/styles.css\" rel=\"stylesheet\" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container px-4 px-lg-5\">
                <a class=\"navbar-brand\" href=\"#!\">Start Bootstrap</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4\">
                        <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"#!\">Home</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#!\">About</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Shop</a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#!\">All Products</a></li>
                                <li><hr class=\"dropdown-divider\" /></li>
                                <li><a class=\"dropdown-item\" href=\"#!\">Popular Items</a></li>
                                <li><a class=\"dropdown-item\" href=\"#!\">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"d-flex\">
                        <button class=\"btn btn-outline-dark\" type=\"submit\">
                            <i class=\"bi-cart-fill me-1\"></i>
                            Cart
                            <span class=\"badge bg-dark text-white ms-1 rounded-pill\">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class=\"bg-dark py-5\">
            <div class=\"container px-4 px-lg-5 my-5\">
                <div class=\"text-center text-white\">
                    <h1 class=\"display-4 fw-bolder\">Shop in style</h1>
                    <p class=\"lead fw-normal text-white-50 mb-0\">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class=\"py-5\">
            <div class=\"container px-4 px-lg-5 mt-5\">
                <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center\">
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Fancy Product</h5>
                                    <!-- Product price-->
                                    \$40.00 - \$80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$20.00</span>
                                    \$18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$50.00</span>
                                    \$25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    \$40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$50.00</span>
                                    \$25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Fancy Product</h5>
                                    <!-- Product price-->
                                    \$120.00 - \$280.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$20.00</span>
                                    \$18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    \$40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class=\"py-5 bg-dark\">
            <div class=\"container\"><p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"frontproduit/js/scripts.js\"></script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "prodduit/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"frontproduit/assets/favicon.ico\" />
        <!-- Bootstrap icons-->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\" rel=\"stylesheet\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"frontproduit/css/styles.css\" rel=\"stylesheet\" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container px-4 px-lg-5\">
                <a class=\"navbar-brand\" href=\"#!\">Start Bootstrap</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4\">
                        <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"#!\">Home</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#!\">About</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Shop</a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item\" href=\"#!\">All Products</a></li>
                                <li><hr class=\"dropdown-divider\" /></li>
                                <li><a class=\"dropdown-item\" href=\"#!\">Popular Items</a></li>
                                <li><a class=\"dropdown-item\" href=\"#!\">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"d-flex\">
                        <button class=\"btn btn-outline-dark\" type=\"submit\">
                            <i class=\"bi-cart-fill me-1\"></i>
                            Cart
                            <span class=\"badge bg-dark text-white ms-1 rounded-pill\">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class=\"bg-dark py-5\">
            <div class=\"container px-4 px-lg-5 my-5\">
                <div class=\"text-center text-white\">
                    <h1 class=\"display-4 fw-bolder\">Shop in style</h1>
                    <p class=\"lead fw-normal text-white-50 mb-0\">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class=\"py-5\">
            <div class=\"container px-4 px-lg-5 mt-5\">
                <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center\">
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Fancy Product</h5>
                                    <!-- Product price-->
                                    \$40.00 - \$80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$20.00</span>
                                    \$18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$50.00</span>
                                    \$25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    \$40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$50.00</span>
                                    \$25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Fancy Product</h5>
                                    <!-- Product price-->
                                    \$120.00 - \$280.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Sale badge-->
                            <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class=\"text-muted text-decoration-line-through\">\$20.00</span>
                                    \$18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col mb-5\">
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" src=\"https://dummyimage.com/450x300/dee2e6/6c757d.jpg\" alt=\"...\" />
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class=\"d-flex justify-content-center small text-warning mb-2\">
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                        <div class=\"bi-star-fill\"></div>
                                    </div>
                                    <!-- Product price-->
                                    \$40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class=\"py-5 bg-dark\">
            <div class=\"container\"><p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"frontproduit/js/scripts.js\"></script>
    </body>
</html>
", "prodduit/index.html.twig", "C:\\Users\\Lenovo\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\prodduit\\index.html.twig");
    }
}
