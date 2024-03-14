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

/* naritafashion/template/extension/module/bestsellerblock.twig */
class __TwigTemplate_da669ea95eb980574db26e3f23945716ec90f5a8ecb51e07fbe01d0438d70992 extends \Twig\Template
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
        echo "<section class=\"bestsellerblock\">
\t\t<div class=\"container\">    
        <h3 class=\"home-title\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>   
        <div class=\"grid-container\"> 
          ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
              <div class=\"item\" data-countdowntime=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 6);
            echo "\">
                <div class=\"product-thumb\">
                  <div class=\"image\">
                    <a href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
            echo "\">
                      <img src=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 10);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            echo "\" class=\"img-responsive\" />
                      ";
            // line 11
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 11) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 12
                echo "                        <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 12);
                echo "\"/>
                      ";
            }
            // line 14
            echo "                    </a>
                    ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["product"], "discount_percentage", [], "any", false, false, false, 15)) {
                // line 16
                echo "                    <div class=\"percentage-bg\">
                    </div>    
                    <span class=\"percentage-text\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["product"], "discount_percentage", [], "any", false, false, false, 18);
                echo "%</span>
                    ";
            }
            // line 20
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 20)) {
                echo "<span class=\"outstock\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 20);
                echo "</span>";
            }
            // line 21
            echo "                  </div>  
                  <div class=\"product-description\"> 
                      <h4><a href=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
            echo "</a></h4>    
                      ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24)) {
                // line 25
                echo "                        <p class=\"price\">
                          ";
                // line 26
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27);
                    echo "
                          ";
                } else {
                    // line 29
                    echo "                          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29);
                    echo "</span>  
                          ";
                }
                // line 31
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "                          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 32);
                    echo "</span>
                          ";
                }
                // line 34
                echo "                        </p>
                      ";
            }
            // line 35
            echo "   
                      ";
            // line 36
            $context["product_size_options_length"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product_size_options", [], "any", false, false, false, 36));
            // line 37
            echo "                      ";
            if (($context["product_size_options_length"] ?? null)) {
                // line 38
                echo "                        <div class=\"size-details\">
                          <div class=\"size-title\">Size Available:</div>
                          <div class=\"size\">
                            ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "product_size_options", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 42
                    echo "                              <span> ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 42);
                    echo "</span>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                          </div>
                        </div>
                      ";
            }
            // line 47
            echo "                       ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 47)) {
                // line 48
                echo "                      <div class=\"rating\">
                        <div class=\"product-rating\">
                          ";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 50);
                echo "
                        </div>
                        <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star fa-stack-2x ";
                // line 53
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 53) > 0.0)) {
                    echo " yellow ";
                } else {
                    echo " grey ";
                }
                echo "\"></i>
                        </span>
                        <div class=\"total-review\">
                          (";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 56);
                echo " Reviews)
                        </div>
                      </div>    
                      ";
            }
            // line 59
            echo "            
                    </div>
                    ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 61)) {
                echo "<span class=\"outstock-overlay\"></span>";
            }
            // line 62
            echo "                </div>                           
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        
        </div>        
      </div>
</section>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/bestsellerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 64,  218 => 62,  214 => 61,  210 => 59,  203 => 56,  193 => 53,  187 => 50,  183 => 48,  180 => 47,  175 => 44,  166 => 42,  162 => 41,  157 => 38,  154 => 37,  152 => 36,  149 => 35,  145 => 34,  137 => 32,  134 => 31,  126 => 29,  120 => 27,  118 => 26,  115 => 25,  113 => 24,  107 => 23,  103 => 21,  96 => 20,  91 => 18,  87 => 16,  85 => 15,  82 => 14,  72 => 12,  70 => 11,  62 => 10,  58 => 9,  52 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/bestsellerblock.twig", "");
    }
}
