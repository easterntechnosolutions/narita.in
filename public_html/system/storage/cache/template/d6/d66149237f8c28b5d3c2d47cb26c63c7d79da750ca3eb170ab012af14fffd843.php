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

/* naritafashion/template/product/category.twig */
class __TwigTemplate_11a2f71d5eb3a17803cc78f32c99c4de291870bf9fa1b4ce47394448e747d70d extends \Twig\Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div class=\"breadcrumb-container\">
  <img src=\"";
        // line 3
        echo ($context["category_image"] ?? null);
        echo "\"/>
  <div class=\"container\">
    <h2 class=\"page-title\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h2>
    <ul class=\"breadcrumb\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
  </div>
</div>
<div id=\"product-category\" class=\"container wrapper_container\">
  <div class=\"row\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 16
            $context["class"] = "col-sm-6 column_left";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9 column_center";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-12 column_full";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"products\">
        ";
        // line 24
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 25
            echo "          <div class=\"category_banner\">
            <div class=\"row\">
              <div class=\"col-sm-12 category-title\">";
            // line 27
            echo ($context["heading_title"] ?? null);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 30
        echo "\t\t\t
        ";
        // line 31
        if (($context["products"] ?? null)) {
            // line 32
            echo "          <div class=\"product-list-top\">
            <div class=\"row\">
              <div class=\"pagination-right\">
                <div class=\"dropdown\">
                  <div class=\"col-md-2 text-right sort-by dropdown-toggle\" id=\"dropdownMenuButton\">
                    <label class=\"control-label \"  for=\"input-sort\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 37
            echo ($context["text_sort"] ?? null);
            echo "</label>
                  </div>
                  <div class=\"col-md-3 text-right sort dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                    <div class=\"\" >
                      <div id=\"input-sort\" onchange=\"location = this.value;\">
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 43
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 43) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 44
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 44);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 44);
                    echo "</a>
                        ";
                } else {
                    // line 45
                    echo "  
                        <a href=\"";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 46);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 46);
                    echo "</a>   
                        ";
                }
                // line 48
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row product-list-js\"> 
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 58
                echo "            <div class=\"product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6\">
              <div class=\"product-container\">
                <div class=\"product-thumb\">
                  <div class=\"image\" data-countdowntime=\"";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 61);
                echo "\">
                    <a href=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 62);
                echo "\">
                      <img src=\"";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 63);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63);
                echo "\" class=\"img-responsive\" />
                      ";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 64) != "")) {
                    // line 65
                    echo "                        <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 65);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 65);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 65);
                    echo "\"/>
                      ";
                }
                // line 67
                echo "                    </a>
                    ";
                // line 68
                if (twig_get_attribute($this->env, $this->source, $context["product"], "discount_percentage", [], "any", false, false, false, 68)) {
                    // line 69
                    echo "                    <div class=\"percentage-bg\">
                    </div>    
                    <span class=\"percentage-text\">";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount_percentage", [], "any", false, false, false, 71);
                    echo "%</span>
                    ";
                }
                // line 73
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 73)) {
                    echo "<span class=\"outstock\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 73);
                    echo "</span>";
                }
                echo " 
                  </div>
                  <div class=\"product-description\"> 
                    <h4><a href=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
                echo "</a></h4> 
                    ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                    <p class=\"price\">
                      ";
                    // line 79
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 79)) {
                        // line 80
                        echo "                      ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80);
                        echo "
                      ";
                    } else {
                        // line 82
                        echo "                      <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 82);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                        echo "</span>  
                      ";
                    }
                    // line 84
                    echo "                      ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 84)) {
                        // line 85
                        echo "                      <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 85);
                        echo "</span>
                      ";
                    }
                    // line 87
                    echo "                    </p>
                    ";
                }
                // line 89
                echo "                    ";
                $context["product_size_options_length"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product_size_options", [], "any", false, false, false, 89));
                // line 90
                echo "                    ";
                if (($context["product_size_options_length"] ?? null)) {
                    // line 91
                    echo "                      <div class=\"size-details\">
                        <div class=\"size-title\">Size Available:</div>
                        <div class=\"size\">
                          ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "product_size_options", [], "any", false, false, false, 94));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 95
                        echo "                            <span> ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 95);
                        echo "</span>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 100
                echo "                     <div class=\"rating\">
                        <div class=\"product-rating\">
                          ";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 102);
                echo "
                        </div>
                        <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star fa-stack-2x ";
                // line 105
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 105) > 0.0)) {
                    echo " yellow ";
                } else {
                    echo " grey ";
                }
                echo "\"></i>
                        </span>
                        <div class=\"total-review\">
                          (";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 108);
                echo " Reviews)
                        </div>
                    </div> 
                  </div> 
                  ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 112)) {
                    echo "<span class=\"outstock-overlay\"></span>";
                }
                // line 113
                echo "                </div>    
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo " 
            ";
        }
        // line 118
        echo "          </div>
          ";
        // line 119
        if ( !($context["products"] ?? null)) {
            // line 120
            echo "      <p class=\"alert alert-info msg\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <!-- <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 122
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div> -->
      ";
        }
        // line 125
        echo "      </div>
      
          ";
        // line 127
        if ((($context["limit"] ?? null) < ($context["ttl"] ?? null))) {
            // line 128
            echo "          <div class=\"row row-pagination-container\">
            <div class=\"col-sm-12 pagination-text-justify\">
              <form action=\"post\">
                <button class=\"btn-load-pagination\" id=\"view-more-button\"><div class=\"btn-primary title-button\">";
            // line 131
            echo ($context["text_viewmore"] ?? null);
            echo "</div><div class=\"load-pagination\">
                    <div class=\"ring-pagination\"></div>
                </div>
                </button>
                <span class=\"hide\" id=\"number-products\">";
            // line 135
            echo ($context["config_catalog_limit"] ?? null);
            echo "</span>
                <input type=\"hidden\" name=\"load-more-botton\" value=\"";
            // line 136
            echo ($context["config_catalog_limit"] ?? null);
            echo "\">
                <input type=\"hidden\" name=\"more-botton-category\" value=\"";
            // line 137
            echo ($context["category_data"] ?? null);
            echo "\">
                <input type=\"hidden\" name=\"more-botton-urlcategory\" value=\"";
            // line 138
            echo ($context["url_category"] ?? null);
            echo "\">
                <input type=\"hidden\" name=\"more-botton-path\" value=\"";
            // line 139
            echo ($context["path"] ?? null);
            echo "\">
                <input type=\"hidden\" name=\"more-botton-sort\" value=\"";
            // line 140
            echo ($context["sort"] ?? null);
            echo "\">
                <input type=\"hidden\" name=\"more-botton-filter\" value=\"";
            // line 141
            echo ($context["filter"] ?? null);
            echo "\">
                <input type=\"hidden\" name=\"more-botton-order\" value=\"";
            // line 142
            echo ($context["order"] ?? null);
            echo "\">
                <input type=\"hidden\" name=\"more-botton-totalproducts\" value=\"";
            // line 143
            echo ($context["ttl"] ?? null);
            echo "\">
                <input type=\"hidden\" name=\"more-botton-step\" id=\"more-step\" value=\"";
            // line 144
            echo ($context["page"] ?? null);
            echo "\">
                <input type=\"hidden\" name=\"type_product\" id=\"type_product\" value=\"category\">
              </form>
            </div>
          </div>
          <div class=\"category-pagination\">
            <div class=\"row\">
              <div class=\"col-sm-12 col-xs-12 text-center\">";
            // line 151
            echo ($context["pagination"] ?? null);
            echo "</div>
            </div>
          </div>

        ";
        }
        // line 156
        echo "      ";
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "

    ";
        // line 158
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 160
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\">
  \$('.category-list .owl-carousel').owlCarousel({
    loop:false,
    nav:true,    
    margin: 30,
    dots: false,      
    rewind: true,
    rtl: \$('html').attr('dir') == 'rtl'? true : false,  
    navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
    responsive:{
          0:{
              items:2
          },
          450:{
              items:3
          },
          767:{
              items:3
          },
          991:{
              items:3
          },
          1200:{
              items:4
          }
      }
  });   
</script>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 160,  455 => 158,  448 => 156,  440 => 151,  430 => 144,  426 => 143,  422 => 142,  418 => 141,  414 => 140,  410 => 139,  406 => 138,  402 => 137,  398 => 136,  394 => 135,  387 => 131,  382 => 128,  380 => 127,  376 => 125,  368 => 122,  362 => 120,  360 => 119,  357 => 118,  353 => 116,  344 => 113,  340 => 112,  333 => 108,  323 => 105,  317 => 102,  313 => 100,  308 => 97,  299 => 95,  295 => 94,  290 => 91,  287 => 90,  284 => 89,  280 => 87,  272 => 85,  269 => 84,  261 => 82,  255 => 80,  253 => 79,  250 => 78,  248 => 77,  242 => 76,  231 => 73,  226 => 71,  222 => 69,  220 => 68,  217 => 67,  207 => 65,  205 => 64,  197 => 63,  193 => 62,  189 => 61,  184 => 58,  180 => 57,  170 => 49,  164 => 48,  157 => 46,  154 => 45,  146 => 44,  143 => 43,  139 => 42,  131 => 37,  124 => 32,  122 => 31,  119 => 30,  112 => 27,  108 => 25,  106 => 24,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  81 => 16,  77 => 15,  73 => 14,  67 => 10,  56 => 8,  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/product/category.twig", "");
    }
}
