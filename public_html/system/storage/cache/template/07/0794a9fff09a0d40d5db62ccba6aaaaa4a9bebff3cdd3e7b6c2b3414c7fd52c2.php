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

/* naritafashion/template/product/search.twig */
class __TwigTemplate_f69d74a48f033c9f0353f41c8190ebd0d12cca2af5d3f91ddf388ddfc627eb07 extends \Twig\Template
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
<div id=\"product-search\" class=\"container wrapper_container\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6 column_left";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9 column_center";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12 column_full";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"search-criteria\">
        <label class=\"control-label\" for=\"input-search\">";
        // line 13
        echo ($context["entry_search"] ?? null);
        echo "</label>
        <div class=\"row\">
          <div class=\"col-sm-4 search-list\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 16
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
          </div>
          <div class=\"col-sm-4 search-list\">
            <div class=\"select-wrapper\">
              <select name=\"category_id\" class=\"form-control\">
                <option value=\"0\">";
        // line 21
        echo ($context["text_category"] ?? null);
        echo "</option>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 23
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 23) == ($context["category_id"] ?? null))) {
                // line 24
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 24);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 24);
                echo "</option>
                  ";
            } else {
                // line 26
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 26);
                echo "</option>
                  ";
            }
            // line 28
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 29
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 29) == ($context["category_id"] ?? null))) {
                    // line 30
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 30);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 30);
                    echo "</option>
                  ";
                } else {
                    // line 32
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 32);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 32);
                    echo "</option>
                  ";
                }
                // line 34
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 35
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 35) == ($context["category_id"] ?? null))) {
                        // line 36
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 36);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 36);
                        echo "</option>
                  ";
                    } else {
                        // line 38
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 38);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 38);
                        echo "</option>
                  ";
                    }
                    // line 40
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "              </select>
            </div>
          </div>
          <div class=\"col-sm-4 search-list\">
            <label class=\"checkbox-inline\">
              ";
        // line 48
        if (($context["sub_category"] ?? null)) {
            // line 49
            echo "              <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
              ";
        } else {
            // line 51
            echo "              <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
              ";
        }
        // line 53
        echo "              ";
        echo ($context["text_sub_category"] ?? null);
        echo "
            </label>
          </div>
        </div>
        <p>
          <label class=\"checkbox-inline\">
            ";
        // line 59
        if (($context["description"] ?? null)) {
            // line 60
            echo "            <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
            ";
        } else {
            // line 62
            echo "            <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
            ";
        }
        // line 64
        echo "            ";
        echo ($context["entry_description"] ?? null);
        echo "
          </label>
        </p>
        <input type=\"button\" value=\"";
        // line 67
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
      </div>
      <h2>";
        // line 69
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 70
        if (($context["products"] ?? null)) {
            // line 71
            echo "      <div class=\"product-list-top\">
        <div class=\"row\">
          <div class=\"pagination-right\">
            <div class=\"dropdown\">
              <div class=\"col-md-2 text-right sort-by dropdown-toggle\" id=\"dropdownMenuButton\">
                <label class=\"control-label \"  for=\"input-sort\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 76
            echo ($context["text_sort"] ?? null);
            echo "</label>
              </div>
              <div class=\"col-md-3 text-right sort dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                <div class=\"\" >
                  <div id=\"input-sort\" onchange=\"location = this.value;\">
                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 82
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 82) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 83
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 83);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 83);
                    echo "</a>
                    ";
                } else {
                    // line 84
                    echo "  
                    <a href=\"";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 85);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 85);
                    echo "</a>   
                    ";
                }
                // line 87
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
      <div class=\"row product-list-js\"> ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 96
                echo "        <div class=\"product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6\">
          <div class=\"product-container\">
            <div class=\"product-thumb\">
              <div class=\"image\" data-countdowntime=\"";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 99);
                echo "\">
                <a href=\"";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 100);
                echo "\">
                  <img src=\"";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 101);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 101);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 101);
                echo "\" class=\"img-responsive\" />
                  ";
                // line 102
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 102) != "")) {
                    // line 103
                    echo "                    <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 103);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 103);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 103);
                    echo "\"/>
                  ";
                }
                // line 105
                echo "                </a>    
                ";
                // line 106
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 106)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 106);
                    echo "</span>";
                }
                echo " 
              </div> 
              <div class=\"product-description\"> 
                <h4><a href=\"";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 109);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                echo "</a></h4> 
                 ";
                // line 110
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 110)) {
                    // line 111
                    echo "                <p class=\"price\">
                  ";
                    // line 112
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 112)) {
                        // line 113
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 113);
                        echo "
                  ";
                    } else {
                        // line 115
                        echo "                  <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 115);
                        echo "</span><span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 115);
                        echo "</span>  
                  ";
                    }
                    // line 117
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 117)) {
                        // line 118
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 118);
                        echo "</span>
                  ";
                    }
                    // line 120
                    echo "                </p>
                ";
                }
                // line 121
                echo " 
                ";
                // line 122
                $context["product_size_options_length"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product_size_options", [], "any", false, false, false, 122));
                // line 123
                echo "                ";
                if (($context["product_size_options_length"] ?? null)) {
                    // line 124
                    echo "                  <div class=\"size-details\">
                    <div class=\"size-title\">Size Available:</div>
                    <div class=\"size\">
                      ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "product_size_options", [], "any", false, false, false, 127));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 128
                        echo "                        <span> ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 128);
                        echo "</span>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "                    </div>
                  </div>
                ";
                }
                // line 132
                echo "                
                <div class=\"rating\">
                    <div class=\"product-rating\">
                      ";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 135);
                echo "
                    </div>
                    <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-2x ";
                // line 138
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 138) > 0.0)) {
                    echo " yellow ";
                } else {
                    echo " grey ";
                }
                echo "\"></i>
                    </span>
                    <div class=\"total-review\">
                      (";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 141);
                echo " Reviews)
                    </div>
                </div> 
                <p class=\"description\">";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 144);
                echo "</p> 
              </div>
              ";
                // line 146
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 146)) {
                    echo "<span class=\"outstock-overlay\"></span>";
                }
                // line 147
                echo "            </div> 
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo " 
      </div>
      <div class=\"category-pagination\">
        <div class=\"row\">
          <div class=\"col-sm-12 col-xs-12 text-center\">";
            // line 154
            echo ($context["pagination"] ?? null);
            echo "</div>
        </div>
      </div>
      ";
        } else {
            // line 158
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 160
        echo "      ";
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 162
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('#button-search').bind('click', function() {
    url = 'index.php?route=product/search';

    var search = \$('#content input[name=\\'search\\']').prop('value');

    if (search) {
      url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#content select[name=\\'category_id\\']').prop('value');

    if (category_id > 0) {
      url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

    if (sub_category) {
      url += '&sub_category=true';
    }

    var filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

    if (filter_description) {
      url += '&description=true';
    }

    location = url;
  });

  \$('#content input[name=\\'search\\']').bind('keydown', function(e) {
    if (e.keyCode == 13) {
      \$('#button-search').trigger('click');
    }
  });

  \$('select[name=\\'category_id\\']').on('change', function() {
    if (this.value == '0') {
      \$('input[name=\\'sub_category\\']').prop('disabled', true);
    } else {
      \$('input[name=\\'sub_category\\']').prop('disabled', false);
    }
  });

  \$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 212
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "naritafashion/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 212,  487 => 162,  480 => 160,  474 => 158,  467 => 154,  461 => 150,  452 => 147,  448 => 146,  443 => 144,  437 => 141,  427 => 138,  421 => 135,  416 => 132,  411 => 130,  402 => 128,  398 => 127,  393 => 124,  390 => 123,  388 => 122,  385 => 121,  381 => 120,  373 => 118,  370 => 117,  362 => 115,  356 => 113,  354 => 112,  351 => 111,  349 => 110,  343 => 109,  333 => 106,  330 => 105,  320 => 103,  318 => 102,  310 => 101,  306 => 100,  302 => 99,  297 => 96,  293 => 95,  284 => 88,  278 => 87,  271 => 85,  268 => 84,  260 => 83,  257 => 82,  253 => 81,  245 => 76,  238 => 71,  236 => 70,  232 => 69,  227 => 67,  220 => 64,  216 => 62,  212 => 60,  210 => 59,  200 => 53,  196 => 51,  192 => 49,  190 => 48,  183 => 43,  177 => 42,  171 => 41,  165 => 40,  157 => 38,  149 => 36,  146 => 35,  141 => 34,  133 => 32,  125 => 30,  122 => 29,  117 => 28,  109 => 26,  101 => 24,  98 => 23,  94 => 22,  90 => 21,  80 => 16,  74 => 13,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/product/search.twig", "");
    }
}
