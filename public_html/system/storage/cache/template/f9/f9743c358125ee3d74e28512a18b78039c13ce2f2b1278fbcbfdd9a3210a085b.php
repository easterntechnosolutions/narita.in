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
class __TwigTemplate_855f8462f212bbdbf14bc5e4ef8ec38129e4ecbf51bd3f4a2e3d069918dec65a extends \Twig\Template
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
            // line 53
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 53)) {
                echo " 
                           <span class=\"text-danger\">***</span> 
                           ";
            }
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
                            <div class=\"product-quantity\">
                                <button type=\"button\" id=\"sub\" class=\"sub\">-</button>
                  <input type=\"text\" name=\"quantity[";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 68);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 68);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control count quantity";
            echo ($context["i"] ?? null);
            echo "\" />
                  <button type=\"button\" id=\"add\" class=\"add\">+</button>
                  
                            ";
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
            echo "                            ";
            // line 79
            echo "                            ";
            // line 80
            echo "                            ";
            // line 81
            echo "                            </div>
                          </div>
                            <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 83
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary update";
            echo ($context["i"] ?? null);
            echo " hide\"><i class=\"fa fa-refresh\"></i></button>
                            
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 85
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"remove-btn\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 85);
            echo "');\">";
            echo ($context["text_remove"] ?? null);
            echo "</button>

                          ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 87)) {
                echo " <br />
                          <span class=\"label label-info\">";
                // line 88
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 88);
                echo "</small> ";
            }
            // line 89
            echo "                        </div>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
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
        // line 97
        if (($context["modules"] ?? null)) {
            // line 98
            echo "                    <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
                    <p>";
            // line 99
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
                  </div> -->
                  <div class=\"panel-group\" id=\"accordion\"> ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 102
                echo "                    ";
                echo $context["module"];
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo " 
                  </div>
                  ";
        }
        // line 106
        echo "                <div class=\"priceinner\">
                  <div class=\"price-title\">";
        // line 107
        echo ($context["text_pricedetails"] ?? null);
        echo "</div>
                  ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 109
            echo "                  <div class=\"pricedetail\">
                    <div class=\"price-text\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 110);
            echo "</div>
                    <div class=\"total-amount\">";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 111);
            echo "</div>
                  </div>  
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                </div>
                <div class=\"buttons clearfix\">
                  <a href=\"";
        // line 116
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a>
                </div>
                ";
        // line 118
        if (($context["logged"] ?? null)) {
            // line 119
            echo "                  <div></div>
                ";
        } else {
            // line 121
            echo "                <div class=\"login-details\">
                    <div class=\"login-text\">";
            // line 122
            echo ($context["text_or"] ?? null);
            echo "</div>
                    <div class=\"login-reg\">
                        <a href=\"";
            // line 124
            echo ($context["login1"] ?? null);
            echo "\" class=\"btn btn-default login-btn\">";
            echo ($context["text_logins"] ?? null);
            echo " </a>
                        <a href=\"";
            // line 125
            echo ($context["register1"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["text_reg"] ?? null);
            echo "</a>
                    </div>
                </div>    
                ";
        }
        // line 129
        echo "            </div>   
            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 131
            echo "            <tr>
              <td class=\"text-left\">";
            // line 132
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 132);
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 137
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 137);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 139);
            echo "</td>
              <td class=\"text-right\">";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 140);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "        </div>
      </form>
      ";
        // line 145
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 146
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 148
        echo ($context["footer"] ?? null);
        echo " 
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
        return array (  454 => 148,  449 => 146,  444 => 145,  440 => 143,  431 => 140,  427 => 139,  420 => 137,  412 => 132,  409 => 131,  405 => 130,  402 => 129,  393 => 125,  387 => 124,  382 => 122,  379 => 121,  375 => 119,  373 => 118,  366 => 116,  362 => 114,  353 => 111,  349 => 110,  346 => 109,  342 => 108,  338 => 107,  335 => 106,  330 => 103,  321 => 102,  317 => 101,  312 => 99,  307 => 98,  305 => 97,  294 => 92,  286 => 89,  280 => 88,  276 => 87,  267 => 85,  260 => 83,  256 => 81,  254 => 80,  252 => 79,  250 => 78,  248 => 77,  246 => 76,  244 => 75,  242 => 74,  240 => 73,  238 => 72,  228 => 68,  222 => 65,  219 => 64,  216 => 63,  207 => 60,  203 => 59,  195 => 57,  192 => 56,  186 => 53,  182 => 52,  176 => 51,  172 => 49,  161 => 47,  157 => 46,  153 => 44,  149 => 43,  141 => 39,  133 => 35,  130 => 34,  122 => 30,  119 => 29,  111 => 25,  109 => 24,  105 => 22,  94 => 20,  90 => 19,  86 => 17,  80 => 15,  78 => 14,  74 => 13,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/checkout/cart.twig", "");
    }
}
