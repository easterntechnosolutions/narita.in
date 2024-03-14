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

/* naritafashion/template/product/category_view_more.twig */
class __TwigTemplate_f9633bb00902818b09ba6ba632f131d6aa4e9a26971fb4a7058c3219628f4cc6 extends \Twig\Template
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
        echo "\t\t";
        if ((($context["display"] ?? null) == "list")) {
            // line 2
            echo "\t\t\t";
            $context["class"] = "product-list";
            // line 3
            echo "\t\t\t";
            $context["imgclass"] = "col-xs-12 col-sm-4 col-md-4 col-lg-3";
            // line 4
            echo "\t\t\t";
            $context["captionclass"] = "col-xs-12 col-sm-8 col-md-8 col-lg-9";
            // line 5
            echo "\t\t";
        } else {
            // line 6
            echo "\t\t\t";
            $context["class"] = "product-grid col-lg-4 col-md-6 col-sm-6 col-xs-12";
            // line 7
            echo "\t\t\t";
            $context["imgclass"] = "";
            // line 8
            echo "\t\t\t";
            $context["captionclass"] = "";
            // line 9
            echo "\t\t";
        }
        // line 10
        echo "\t\t\t";
        if (($context["products"] ?? null)) {
            // line 11
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "      <div class=\"product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6\">
        <div class=\"product-container\">
          <div class=\"product-thumb\">
            <div class=\"image\" data-countdowntime=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 15);
                echo "\">
              <a href=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                echo "\">
                <img src=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                echo "\" class=\"img-responsive\" />
                ";
                // line 18
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 18) != "")) {
                    // line 19
                    echo "                  <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 19);
                    echo "\"/>
                ";
                }
                // line 21
                echo "              </a>    
               ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 22)) {
                    echo "<span class=\"outstock\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 22);
                    echo "</span>";
                }
                echo " 
            </div>
            <div class=\"product-description\"> 
              <h4><a href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "</a></h4> 
              ";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "              <p class=\"price\">
                ";
                    // line 28
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 28)) {
                        // line 29
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29);
                        echo "
                ";
                    } else {
                        // line 31
                        echo "                <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 31);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31);
                        echo "</span>  
                ";
                    }
                    // line 33
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 33)) {
                        // line 34
                        echo "                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 34);
                        echo "</span>
                ";
                    }
                    // line 36
                    echo "              </p>
              ";
                }
                // line 38
                echo "              ";
                $context["product_size_options_length"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product_size_options", [], "any", false, false, false, 38));
                // line 39
                echo "              ";
                if (($context["product_size_options_length"] ?? null)) {
                    // line 40
                    echo "                <div class=\"size-details\">
                  <div class=\"size-title\">Size Available:</div>
                  <div class=\"size\">
                    ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "product_size_options", [], "any", false, false, false, 43));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 44
                        echo "                      <span> ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 44);
                        echo "</span>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "                  </div>
                </div>
              ";
                }
                // line 49
                echo "               <div class=\"rating\">
                  <div class=\"product-rating\">
                    ";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 51);
                echo "
                  </div>
                  <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-2x ";
                // line 54
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 54) > 0.0)) {
                    echo " yellow ";
                } else {
                    echo " grey ";
                }
                echo "\"></i>
                  </span>
                  <div class=\"total-review\">
                    (";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 57);
                echo " Reviews)
                  </div>
              </div> 
            </div> 
            ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 61)) {
                    echo "<span class=\"outstock-overlay\"></span>";
                }
                echo "  
          </div>
        </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo " 
  ";
        }
        // line 66
        echo " ";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/product/category_view_more.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 66,  229 => 65,  216 => 61,  209 => 57,  199 => 54,  193 => 51,  189 => 49,  184 => 46,  175 => 44,  171 => 43,  166 => 40,  163 => 39,  160 => 38,  156 => 36,  148 => 34,  145 => 33,  137 => 31,  131 => 29,  129 => 28,  126 => 27,  124 => 26,  118 => 25,  108 => 22,  105 => 21,  95 => 19,  93 => 18,  85 => 17,  81 => 16,  77 => 15,  72 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  46 => 4,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/product/category_view_more.twig", "");
    }
}
