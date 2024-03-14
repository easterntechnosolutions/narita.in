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

/* naritafashion/template/account/order_info.twig */
class __TwigTemplate_684676589801334b484cf59e8a660472b4ac65907aa016f5f9d4a39fe235f860 extends \Twig\Template
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
<div id=\"account-order\" class=\"container wrapper_container\">
    <div class=\"breadcrumb-container\">
    <h1 class=\"page-title\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
  </div>
    ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 16
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 22
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-6 column_left";
            // line 24
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-9 column_center";
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-12 column_full";
            // line 28
            echo "    ";
        }
        // line 29
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <table class=\"table table-bordered table-responsive\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 33
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              ";
        // line 39
        if (($context["invoice_no"] ?? null)) {
            echo " 
                ";
            // line 40
            echo ($context["text_invoice_no"] ?? null);
            echo "
              ";
        }
        // line 41
        echo " 
            </td>
            <td>
              ";
        // line 44
        echo ($context["text_order_id"] ?? null);
        echo "
            </td>
            <td>
              ";
        // line 47
        echo ($context["text_date_added"] ?? null);
        echo " 
            </td>
            <td>
              ";
        // line 50
        if (($context["payment_method"] ?? null)) {
            echo " 
                ";
            // line 51
            echo ($context["text_payment_method"] ?? null);
            echo "
              ";
        }
        // line 53
        echo "            </td>
            <td>  
              ";
        // line 55
        if (($context["shipping_method"] ?? null)) {
            echo " 
                ";
            // line 56
            echo ($context["text_shipping_method"] ?? null);
            echo "
              ";
        }
        // line 58
        echo "            </td>
            <!-- <td>
              ";
        // line 60
        if (($context["histories"] ?? null)) {
            // line 61
            echo "                ";
            echo ($context["column_status"] ?? null);
            echo "
              ";
        }
        // line 62
        echo "  
            </td> -->
          </tr>
          <tr>
            <td>
              ";
        // line 67
        if (($context["invoice_no"] ?? null)) {
            echo " 
                <b>";
            // line 68
            echo ($context["invoice_no"] ?? null);
            echo "</b>
              ";
        }
        // line 69
        echo " 
            </td>
            <td>
                <b>#";
        // line 72
        echo ($context["order_id"] ?? null);
        echo "</b>
            </td>
            <td>
              <b>";
        // line 75
        echo ($context["date_added"] ?? null);
        echo "</b>
            </td>
            <td>
              ";
        // line 78
        if (($context["payment_method"] ?? null)) {
            echo " 
                <b>";
            // line 79
            echo ($context["payment_method"] ?? null);
            echo "</b>
              ";
        }
        // line 81
        echo "            </td>
            <td>  
              ";
        // line 83
        if (($context["shipping_method"] ?? null)) {
            echo " 
                <b>";
            // line 84
            echo ($context["shipping_method"] ?? null);
            echo "</b> 
              ";
        }
        // line 86
        echo "            </td>
            <!-- <td>
              ";
        // line 88
        if (($context["histories"] ?? null)) {
            // line 89
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 90
                echo "                <b> ";
                echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 90);
                echo "</b> 
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "              ";
        } else {
            // line 93
            echo "                ";
            echo ($context["text_no_results"] ?? null);
            echo "
              ";
        }
        // line 95
        echo "            </td> -->
          </tr>
        </tbody>
      </table>
      <div class=\"address-details\">
        <div class=\"row\">
          <div class=\"shipping-address col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
        // line 102
        if (($context["shipping_address"] ?? null)) {
            // line 103
            echo "              <div class=\"shipping-title\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</div>
                ";
            // line 104
            echo ($context["shipping_address"] ?? null);
            echo "
              ";
        }
        // line 105
        echo " 
          </div>
          <div class=\"payment-address col-lg-6 col-md-6 col-sm-6 col-xs-12\">
            <div class=\"address-title\">";
        // line 108
        echo ($context["text_payment_address"] ?? null);
        echo "</div>
              ";
        // line 109
        echo ($context["payment_address"] ?? null);
        echo "
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"table-responsive col-lg-8 col-md-8 col-sm-12 col-xs-12\">
          <table class=\"table table-bordered table-hover\">
            <!-- <thead>
              <tr>
                <td class=\"text-left\">";
        // line 118
        echo ($context["column_name"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 119
        echo ($context["column_model"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 120
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 121
        echo ($context["column_price"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 122
        echo ($context["column_total"] ?? null);
        echo "</td>
                ";
        // line 123
        if (($context["products"] ?? null)) {
            // line 124
            echo "                <td style=\"width: 20px;\"></td>
                ";
        }
        // line 125
        echo " </tr>
            </thead> -->
            <tbody>
            
            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 130
            echo "            <div class=\"order-details\">
              <div class=\"product-name\">";
            // line 131
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 131);
            echo "</div>
              <div class=\"product-price\">";
            // line 132
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 132);
            echo "</div>
              <div class=\"product-size\">
                  ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 135
                echo "                    <div class=\"size-title\">
                      ";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 136);
                echo ":
                    </div>
                    <div class=\"size-name\">
                      ";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 139);
                echo "
                    </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "              </div>
              <div class=\"productquantity\">
                <div class=\"quantity-title\">
                    ";
            // line 145
            echo ($context["text_quantity"] ?? null);
            echo ":
                </div>
                <div class=\"quantity\">
                  ";
            // line 148
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 148);
            echo "
                </div>
              </div>
              <div class=\"order-button\">
                <div class=\"reorder\">
                  ";
            // line 153
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 153)) {
                // line 154
                echo "                  <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 154);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\">
                    ";
                // line 155
                echo ($context["text_reorder"] ?? null);
                echo "
                  </a>
                  ";
            }
            // line 158
            echo "                </div>
                <div class=\"returnorder\">
                  <a href=\"";
            // line 160
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 160);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_return"] ?? null);
            echo "\" class=\"btn btn-danger\">
                    ";
            // line 161
            echo ($context["text_return"] ?? null);
            echo "
                  </a>
                </div>
              </div>
            </div>
            <!-- <tr>
              <td class=\"text-left\">";
            // line 167
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 167);
            echo "</td>
              <td class=\"text-right\"></td>
              <td class=\"text-right\">";
            // line 169
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 169);
            echo "</td>
            </tr> -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "            <div class=\"buttons clearfix\">
              <div class=\"pull-left\"><a href=\"";
        // line 173
        echo ($context["continue1"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["text_continue"] ?? null);
        echo "</a></div>
            </div>
            ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 176
            echo "            <tr>
              <td class=\"text-left\">";
            // line 177
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 177);
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-right\">1</td>
              <td class=\"text-right\">";
            // line 180
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 180);
            echo "</td>
              <td class=\"text-right\">";
            // line 181
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 181);
            echo "</td>
              ";
            // line 182
            if (($context["products"] ?? null)) {
                // line 183
                echo "              <td></td>
              ";
            }
            // line 184
            echo " </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "              </tbody>
            
           <!--  <tfoot>
            
            ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 191
            echo "            <tr>
              <td colspan=\"3\"></td>
              ";
            // line 193
            if (($context["products"] ?? null)) {
                // line 194
                echo "              <td></td>
              ";
            }
            // line 195
            echo " </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "              </tfoot> -->
            
          </table>
        </div>
        <div class=\"pricedetails col-lg-4 col-md-4 col-sm-12 col-xs-12\">
          <div class=\"pricetitle\">";
        // line 202
        echo ($context["text_price"] ?? null);
        echo "</div>
          ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 204
            echo "          <div class=\"price-inner\">
            <div class=\"total-title\">";
            // line 205
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 205);
            echo "</div>
            <div class=\"total-text\">";
            // line 206
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 206);
            echo "</div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "        </div>
      </div>
      ";
        // line 211
        if (($context["comment"] ?? null)) {
            // line 212
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 215
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 220
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 225
        echo "      <!-- ";
        if (($context["histories"] ?? null)) {
            // line 226
            echo "      <h3>";
            echo ($context["text_history"] ?? null);
            echo "</h3>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 230
            echo ($context["column_date_added"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 231
            echo ($context["column_status"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 232
            echo ($context["column_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 237
            if (($context["histories"] ?? null)) {
                // line 238
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 239
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 240);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 241
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 241);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 242);
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 245
                echo "        ";
            } else {
                // line 246
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 247
                echo ($context["text_no_results"] ?? null);
                echo "</td>
        </tr>
        ";
            }
            // line 250
            echo "          </tbody>
        
      </table>
      ";
        }
        // line 253
        echo " -->
      ";
        // line 254
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 255
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 257
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "naritafashion/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 257,  664 => 255,  659 => 254,  656 => 253,  650 => 250,  644 => 247,  641 => 246,  638 => 245,  629 => 242,  625 => 241,  621 => 240,  618 => 239,  613 => 238,  611 => 237,  603 => 232,  599 => 231,  595 => 230,  587 => 226,  584 => 225,  576 => 220,  568 => 215,  563 => 212,  561 => 211,  557 => 209,  548 => 206,  544 => 205,  541 => 204,  537 => 203,  533 => 202,  526 => 197,  519 => 195,  515 => 194,  513 => 193,  509 => 191,  505 => 190,  499 => 186,  492 => 184,  488 => 183,  486 => 182,  482 => 181,  478 => 180,  472 => 177,  469 => 176,  465 => 175,  458 => 173,  455 => 172,  446 => 169,  441 => 167,  432 => 161,  426 => 160,  422 => 158,  416 => 155,  409 => 154,  407 => 153,  399 => 148,  393 => 145,  388 => 142,  379 => 139,  373 => 136,  370 => 135,  366 => 134,  361 => 132,  357 => 131,  354 => 130,  350 => 129,  344 => 125,  340 => 124,  338 => 123,  334 => 122,  330 => 121,  326 => 120,  322 => 119,  318 => 118,  306 => 109,  302 => 108,  297 => 105,  292 => 104,  287 => 103,  285 => 102,  276 => 95,  270 => 93,  267 => 92,  258 => 90,  253 => 89,  251 => 88,  247 => 86,  242 => 84,  238 => 83,  234 => 81,  229 => 79,  225 => 78,  219 => 75,  213 => 72,  208 => 69,  203 => 68,  199 => 67,  192 => 62,  186 => 61,  184 => 60,  180 => 58,  175 => 56,  171 => 55,  167 => 53,  162 => 51,  158 => 50,  152 => 47,  146 => 44,  141 => 41,  136 => 40,  132 => 39,  123 => 33,  113 => 29,  110 => 28,  107 => 27,  104 => 26,  101 => 25,  98 => 24,  95 => 23,  93 => 22,  88 => 21,  80 => 17,  77 => 16,  69 => 12,  67 => 11,  63 => 9,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/account/order_info.twig", "");
    }
}
