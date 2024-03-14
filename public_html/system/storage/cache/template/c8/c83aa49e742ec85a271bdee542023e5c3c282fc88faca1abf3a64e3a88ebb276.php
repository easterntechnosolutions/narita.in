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

/* naritafashion/template/checkout/cart.twig */
class __TwigTemplate_1617cb030510c86d2b1cab621600f6e63624c8a59bfd230ce20e4b44b6282fba extends \Twig\Template
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
<div id=\"checkout-cart\" class=\"container wrapper_container\">
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
      <div class=\"breadcrumb-container\">
        <h1 class=\"page-title\">";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "
          ";
        // line 14
        if (($context["weight"] ?? null)) {
            // line 15
            echo "          &nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
          ";
        }
        // line 17
        echo "        </h1>
        <ul class=\"breadcrumb\">
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 20);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </ul>
      </div> 
      ";
        // line 24
        if (($context["attention"] ?? null)) {
            // line 25
            echo "      <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 29
        echo "      ";
        if (($context["success"] ?? null)) {
            // line 30
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 34
        echo "      ";
        if (($context["error_warning"] ?? null)) {
            // line 35
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 39
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive\">
            <div class=\"cart-detail col-lg-8 col-md-8 col-sm-12 col-xs-12\">
              <div class=\"row\">
                  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "                    <div class=\"cart-content row\">
                        <div class=\"cartimage col-lg-2 col-md-2 col-sm-12 col-xs-12\">
                          ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 46)) {
                echo " 
                          <a href=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 47);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 47);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                echo "\" class=\"img-thumbnail\" /></a> 
                          ";
            }
            // line 49
            echo "                        </div>
                        <div class=\"cartdetails col-lg-10 col-md-10 col-sm-12 col-xs-12\">
                          <a href=\"";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 51);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
            echo "</a>
                          <div class=\"total-price\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 52);
            echo "</div>
                           ";
            // line 54
            echo "                           ";
            // line 55
            echo "                           ";
            // line 56
            echo "                          ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 56)) {
                // line 57
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 57));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                          <div class=\"size\">
                            <div class=\"size-name\">";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 59);
                    echo ":</div>
                            <div class=\"size-details\">";
                    // line 60
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 60);
                    echo "</div> 
                          </div> 
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                          ";
            }
            // line 64
            echo "                          <div class=\"wrap\">
                            <label class=\"control-label\" for=\"input-quantity\">";
            // line 65
            echo ($context["entry_qty"] ?? null);
            echo "</label>
                            ";
            // line 67
            echo "                            ";
            // line 68
            echo "                            ";
            // line 69
            echo "                            ";
            // line 70
            echo "                            ";
            // line 71
            echo "                            ";
            // line 72
            echo "                            ";
            // line 73
            echo "                            ";
            // line 74
            echo "                            ";
            // line 75
            echo "                            ";
            // line 76
            echo "                            ";
            // line 77
            echo "                            ";
            // line 78
            echo "                            <div class=\"product-quantity\">
                             <button type=\"button\" id=\"sub\" class=\"sub\">-</button>
                              <input type=\"text\" name=\"quantity\" value=\"";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 80);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control count\" />
                              <button type=\"button\" id=\"add\" class=\"add\">+</button>
                            </div> 
                            <script type=\"text/javascript\"><!--
                              \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
                                \$.ajax({
                                  url: 'index.php?route=product/product/getRecurringDescription',
                                  type: 'post',
                                  data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
                                  dataType: 'json',
                                  beforeSend: function() {
                                    \$('#recurring-description').html('');
                                  },
                                  success: function(json) {
                                    \$('.alert-dismissible, .text-danger').remove();
                            
                                    if (json['success']) {
                                      \$('#recurring-description').html(json['success']);
                                    }
                                  }
                                });
                              });
                            //--></script>
                          </div>
                            <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 104
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary update";
            echo ($context["i"] ?? null);
            echo " hide\"><i class=\"fa fa-refresh\"></i></button>
                            
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 106
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"remove-btn\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 106);
            echo "');\">";
            echo ($context["text_remove"] ?? null);
            echo "</button>

                          ";
            // line 108
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 108)) {
                echo " <br />
                          <span class=\"label label-info\">";
                // line 109
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 109);
                echo "</small> ";
            }
            // line 110
            echo "                        </div>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                  <div class=\"pull-left\"><a href=\"";
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 sub-total-table\">
                  <!-- <div class=\"col-md-12\">
                  ";
        // line 118
        if (($context["modules"] ?? null)) {
            // line 119
            echo "                    <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
                    <p>";
            // line 120
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
                  </div> -->
                  <div class=\"panel-group\" id=\"accordion\"> ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 123
                echo "                    ";
                echo $context["module"];
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo " 
                  </div>
                  ";
        }
        // line 127
        echo "                <div class=\"priceinner\">
                  <div class=\"price-title\">";
        // line 128
        echo ($context["text_pricedetails"] ?? null);
        echo "</div>
                  ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 130
            echo "                  <div class=\"pricedetail\">
                    <div class=\"price-text\">";
            // line 131
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 131);
            echo "</div>
                    <div class=\"total-amount\">";
            // line 132
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 132);
            echo "</div>
                  </div>  
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                </div>
                <div class=\"buttons clearfix\">
                  <a href=\"";
        // line 137
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a>
                </div>
                ";
        // line 139
        if (($context["logged"] ?? null)) {
            // line 140
            echo "                  <div></div>
                ";
        } else {
            // line 142
            echo "                <div class=\"login-details\">
                    <div class=\"login-text\">";
            // line 143
            echo ($context["text_or"] ?? null);
            echo "</div>
                    <div class=\"login-reg\">
                        <a href=\"";
            // line 145
            echo ($context["login1"] ?? null);
            echo "\" class=\"btn btn-default login-btn\">";
            echo ($context["text_logins"] ?? null);
            echo " </a>
                        <a href=\"";
            // line 146
            echo ($context["register1"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["text_reg"] ?? null);
            echo "</a>
                    </div>
                </div>    
                ";
        }
        // line 150
        echo "            </div>   
            ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 152
            echo "            <tr>
              <td class=\"text-left\">";
            // line 153
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 153);
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 158
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 158);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 160
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 160);
            echo "</td>
              <td class=\"text-right\">";
            // line 161
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 161);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "        </div>
      </form>
      ";
        // line 166
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 167
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 169
        echo ($context["footer"] ?? null);
        echo " 
<script>

    \$('.add').click(function () {   
      var th = \$(this).closest('.wrap').find('.count');     
      th.val(+th.val() + 1);
    });
    \$('.sub').click(function () {
      var th = \$(this).closest('.wrap').find('.count');     
          if (th.val() > 1) th.val(+th.val() - 1);
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 169,  466 => 167,  461 => 166,  457 => 164,  448 => 161,  444 => 160,  437 => 158,  429 => 153,  426 => 152,  422 => 151,  419 => 150,  410 => 146,  404 => 145,  399 => 143,  396 => 142,  392 => 140,  390 => 139,  383 => 137,  379 => 135,  370 => 132,  366 => 131,  363 => 130,  359 => 129,  355 => 128,  352 => 127,  347 => 124,  338 => 123,  334 => 122,  329 => 120,  324 => 119,  322 => 118,  311 => 113,  303 => 110,  297 => 109,  293 => 108,  284 => 106,  277 => 104,  250 => 80,  246 => 78,  244 => 77,  242 => 76,  240 => 75,  238 => 74,  236 => 73,  234 => 72,  232 => 71,  230 => 70,  228 => 69,  226 => 68,  224 => 67,  220 => 65,  217 => 64,  214 => 63,  205 => 60,  201 => 59,  193 => 57,  190 => 56,  188 => 55,  186 => 54,  182 => 52,  176 => 51,  172 => 49,  161 => 47,  157 => 46,  153 => 44,  149 => 43,  141 => 39,  133 => 35,  130 => 34,  122 => 30,  119 => 29,  111 => 25,  109 => 24,  105 => 22,  94 => 20,  90 => 19,  86 => 17,  80 => 15,  78 => 14,  74 => 13,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/checkout/cart.twig", "");
    }
}
