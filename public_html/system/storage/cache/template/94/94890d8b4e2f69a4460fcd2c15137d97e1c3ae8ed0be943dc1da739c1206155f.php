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
class __TwigTemplate_8ae2aa62d299ccea6e940283d294ea4f8cd1b1341912f80f483c99c535a3040b extends \Twig\Template
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
                  ";
            // line 68
            echo "                  ";
            // line 69
            echo "                  ";
            // line 70
            echo "                                <button type=\"button\" id=\"sub\" class=\"sub\">-</button>
                              <input type=\"number\" min=\"1\" name=\"quantity[";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 71);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 71);
            echo "\" size=\"1\" class=\"form-control quantity";
            echo ($context["i"] ?? null);
            echo "\" />
                              <button type=\"button\" id=\"add\" class=\"add\">+</button>
                              <script type=\"text/javascript\">
                                  setTimeout( function(){
                                      \$('.quantity";
            // line 75
            echo ($context["i"] ?? null);
            echo "').on(\"change keyup paste\", function () {
                                      if(\$(this).val() != '') {
                                        \$('.update";
            // line 77
            echo ($context["i"] ?? null);
            echo "').trigger('click');
                                      }
                                      });
                                  },1000);
                            </script>
                            </div>
                          </div>
                            <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 84
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary update";
            echo ($context["i"] ?? null);
            echo " hide\"><i class=\"fa fa-refresh\"></i></button>
                            
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 86
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"remove-btn\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 86);
            echo "');\">";
            echo ($context["text_remove"] ?? null);
            echo "</button>

                          ";
            // line 88
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 88)) {
                echo " <br />
                          <span class=\"label label-info\">";
                // line 89
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 89);
                echo "</small> ";
            }
            // line 90
            echo "                        </div>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        // line 98
        if (($context["modules"] ?? null)) {
            // line 99
            echo "                    <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
                    <p>";
            // line 100
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
                  </div> -->
                  <div class=\"panel-group\" id=\"accordion\"> ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 103
                echo "                    ";
                echo $context["module"];
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo " 
                  </div>
                  ";
        }
        // line 107
        echo "                <div class=\"priceinner\">
                  <div class=\"price-title\">";
        // line 108
        echo ($context["text_pricedetails"] ?? null);
        echo "</div>
                  ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 110
            echo "                  <div class=\"pricedetail\">
                    <div class=\"price-text\">";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 111);
            echo "</div>
                    <div class=\"total-amount\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 112);
            echo "</div>
                  </div>  
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                </div>
                <div class=\"buttons clearfix\">
                  <a href=\"";
        // line 117
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a>
                </div>
                ";
        // line 119
        if (($context["logged"] ?? null)) {
            // line 120
            echo "                  <div></div>
                ";
        } else {
            // line 122
            echo "                <div class=\"login-details\">
                    <div class=\"login-text\">";
            // line 123
            echo ($context["text_or"] ?? null);
            echo "</div>
                    <div class=\"login-reg\">
                        <a href=\"";
            // line 125
            echo ($context["login1"] ?? null);
            echo "\" class=\"btn btn-default login-btn\">";
            echo ($context["text_logins"] ?? null);
            echo " </a>
                        <a href=\"";
            // line 126
            echo ($context["register1"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["text_reg"] ?? null);
            echo "</a>
                    </div>
                </div>    
                ";
        }
        // line 130
        echo "            </div>   
            ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 132
            echo "            <tr>
              <td class=\"text-left\">";
            // line 133
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 133);
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 138
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 138);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 140);
            echo "</td>
              <td class=\"text-right\">";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 141);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "        </div>
      </form>
      ";
        // line 146
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 147
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 149
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
        return array (  454 => 149,  449 => 147,  444 => 146,  440 => 144,  431 => 141,  427 => 140,  420 => 138,  412 => 133,  409 => 132,  405 => 131,  402 => 130,  393 => 126,  387 => 125,  382 => 123,  379 => 122,  375 => 120,  373 => 119,  366 => 117,  362 => 115,  353 => 112,  349 => 111,  346 => 110,  342 => 109,  338 => 108,  335 => 107,  330 => 104,  321 => 103,  317 => 102,  312 => 100,  307 => 99,  305 => 98,  294 => 93,  286 => 90,  280 => 89,  276 => 88,  267 => 86,  260 => 84,  250 => 77,  245 => 75,  234 => 71,  231 => 70,  229 => 69,  227 => 68,  222 => 65,  219 => 64,  216 => 63,  207 => 60,  203 => 59,  195 => 57,  192 => 56,  186 => 53,  182 => 52,  176 => 51,  172 => 49,  161 => 47,  157 => 46,  153 => 44,  149 => 43,  141 => 39,  133 => 35,  130 => 34,  122 => 30,  119 => 29,  111 => 25,  109 => 24,  105 => 22,  94 => 20,  90 => 19,  86 => 17,  80 => 15,  78 => 14,  74 => 13,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/checkout/cart.twig", "");
    }
}
