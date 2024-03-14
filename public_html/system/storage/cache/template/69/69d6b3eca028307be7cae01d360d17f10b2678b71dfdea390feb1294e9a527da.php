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

/* default/template/extension/quickcheckout/shipping_method.twig */
class __TwigTemplate_a8c3cf2678ea7c3be5e5d5b642d4ed7a7ff5eb46b3e8462d02e5a109aba3054e extends \Twig\Template
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
        if (($context["error_warning"] ?? null)) {
            echo " 
<div class=\"alert alert-danger\">";
            // line 2
            echo ($context["error_warning"] ?? null);
            echo "</div>
";
        }
        // line 3
        echo " 
";
        // line 4
        if (($context["shipping_methods"] ?? null)) {
            // line 5
            echo "<p>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</p>
";
            // line 6
            if (($context["shipping"] ?? null)) {
                // line 7
                echo "<table class=\"table table-hover table-striped\">
  ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["shipping_method"]) {
                    // line 9
                    echo "  <tr>
    <td colspan=\"3\">
\t  ";
                    // line 11
                    if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["shipping_logo"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                        echo " 
\t  <img src=\"";
                        // line 12
                        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["shipping_logo"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 12);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 12);
                        echo "\" />
\t  ";
                    } else {
                        // line 13
                        echo "   
\t  <b>";
                        // line 14
                        echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 14);
                        echo "</b>
\t  ";
                    }
                    // line 15
                    echo " 
\t</td>
  </tr>
  ";
                    // line 18
                    if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 18)) {
                        echo " 
  ";
                        // line 19
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 19));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            echo " 
  <tr>
    <td>";
                            // line 21
                            if ((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 21) == ($context["code"] ?? null))) {
                                echo " 
      <input type=\"radio\" name=\"shipping_method\" value=\"";
                                // line 22
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 22);
                                echo "\" id=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 22);
                                echo "\" checked=\"checked\" />
      ";
                            } else {
                                // line 23
                                echo "   
      <input type=\"radio\" name=\"shipping_method\" value=\"";
                                // line 24
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 24);
                                echo "\" id=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 24);
                                echo "\" />
      ";
                            }
                            // line 25
                            echo "</td>
    <td><label for=\"";
                            // line 26
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 26);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 26);
                            echo "</label></td>
    <td style=\"text-align: right;\"><label for=\"";
                            // line 27
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 27);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 27);
                            echo "</label></td>
  </tr>
  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 30
                        echo "  ";
                    } else {
                        echo "   
  <tr>
    <td colspan=\"3\"><div class=\"error\">";
                        // line 32
                        echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 32);
                        echo "</div></td>
  </tr>
  ";
                    }
                    // line 35
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "</table>
";
            } else {
                // line 37
                echo "   
  <select class=\"form-control\" name=\"shipping_method\">
    ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                    echo " 
      ";
                    // line 40
                    if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 40)) {
                        echo " 
\t\t";
                        // line 41
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 41));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            echo " 
\t\t  ";
                            // line 42
                            if ((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 42) == ($context["code"] ?? null))) {
                                echo " 
\t\t    ";
                                // line 43
                                $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 43);
                                // line 44
                                echo "\t\t\t";
                                $context["exists"] = true;
                                echo " 
\t\t\t<option value=\"";
                                // line 45
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 45);
                                echo "\" selected=\"selected\">
\t\t  ";
                            } else {
                                // line 46
                                echo "   
\t\t\t<option value=\"";
                                // line 47
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 47);
                                echo "\">
\t\t  ";
                            }
                            // line 48
                            echo " 
\t\t  ";
                            // line 49
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 49);
                            echo "&nbsp;&nbsp;(";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 49);
                            echo ")</option>
\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "\t  ";
                    }
                    // line 52
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "  </select><br />
";
            }
            // line 55
            echo "<br />
";
        }
        // line 57
        if ((($context["delivery"] ?? null) && (( !($context["delivery_delivery_time"] ?? null) || (($context["delivery_delivery_time"] ?? null) == "1")) || (($context["delivery_delivery_time"] ?? null) == "3")))) {
            echo " 
<div";
            // line 58
            echo ((($context["delivery_required"] ?? null)) ? (" class=\"required\"") : (""));
            echo ">
  <label class=\"control-label\"><strong>";
            // line 59
            echo ($context["text_delivery"] ?? null);
            echo "</strong></label>
  ";
            // line 60
            if ((($context["delivery_delivery_time"] ?? null) == "1")) {
                echo " 
  <input type=\"text\" name=\"delivery_date\" value=\"";
                // line 61
                echo ($context["delivery_date"] ?? null);
                echo "\" class=\"form-control date\" readonly=\"true\" style=\"background:#ffffff;\" />
  ";
            } else {
                // line 62
                echo "  
  <input type=\"text\" name=\"delivery_date\" value=\"";
                // line 63
                echo ($context["delivery_date"] ?? null);
                echo "\" class=\"form-control date\" readonly=\"true\" style=\"background:#ffffff;\" />
  ";
            }
            // line 64
            echo " 
  ";
            // line 65
            if ((($context["delivery_delivery_time"] ?? null) == "3")) {
                echo "<br />
    <select name=\"delivery_time\" class=\"form-control\">";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["delivery_times"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["quickcheckout_delivery_time"]) {
                    // line 67
                    echo "    ";
                    if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["quickcheckout_delivery_time"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null)) {
                        echo " 
      ";
                        // line 68
                        if ((($context["delivery_time"] ?? null) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["quickcheckout_delivery_time"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null))) {
                            echo " 
\t  <option value=\"";
                            // line 69
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["quickcheckout_delivery_time"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                            echo "\" selected=\"selected\">";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["quickcheckout_delivery_time"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null);
                            echo "</option>
\t  ";
                        } else {
                            // line 70
                            echo "   
\t  <option value=\"";
                            // line 71
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["quickcheckout_delivery_time"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null);
                            echo "\">";
                            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["quickcheckout_delivery_time"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null);
                            echo "</option>
      ";
                        }
                        // line 72
                        echo " 
\t";
                    }
                    // line 73
                    echo " 
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickcheckout_delivery_time'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "</select>
  ";
            }
            // line 76
            echo "</div>
";
        } elseif ((        // line 77
($context["delivery_delivery_time"] ?? null) && (($context["delivery_delivery_time"] ?? null) == "2"))) {
            echo " 
  <input type=\"text\" name=\"delivery_date\" value=\"\" class=\"hide\" />
  <select name=\"delivery_time\" class=\"hide\"><option value=\"\"></option></select>
  <strong>";
            // line 80
            echo ($context["text_estimated_delivery"] ?? null);
            echo "</strong><br />
  ";
            // line 81
            echo ($context["estimated_delivery"] ?? null);
            echo "<br />
  ";
            // line 82
            echo ($context["estimated_delivery_time"] ?? null);
            echo " 
";
        } else {
            // line 83
            echo "   
  <input type=\"text\" name=\"delivery_date\" value=\"\" class=\"hide\" />
  <select name=\"delivery_time\" class=\"hide\"><option value=\"\"></option></select>
";
        }
        // line 87
        echo "
<script type=\"text/javascript\"><!--
\$('#shipping-method input[name=\\'shipping_method\\'], #shipping-method select[name=\\'shipping_method\\']').on('change', function() {
\t";
        // line 90
        if ( !($context["logged"] ?? null)) {
            echo " 
\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}

\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method/set',
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tsuccess: function(html) {
\t\t\t\t";
            // line 104
            if (($context["cart"] ?? null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 106
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 108
            if (($context["shipping_reload"] ?? null)) {
                echo " 
\t\t\t\treloadPaymentMethod();
\t\t\t\t";
            }
            // line 110
            echo " 
\t\t\t},
\t\t\t";
            // line 112
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 116
            echo " 
\t\t});
\t";
        } else {
            // line 118
            echo "   
\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/shipping_method/set';
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/shipping_method/set&address_id=' + \$('#shipping-address select[name=\\'address_id\\']').val();
\t\t\tvar post_data = \$('#shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}
\t\t
\t\t\$.ajax({
\t\t\turl: url,
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tsuccess: function(html) {
\t\t\t\t";
            // line 134
            if (($context["cart"] ?? null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 136
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 138
            if (($context["shipping_reload"] ?? null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
            }
            // line 144
            echo " 
\t\t\t},
\t\t\t";
            // line 146
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 150
            echo " 
\t\t});
\t";
        }
        // line 153
        echo "});

\$(document).ready(function() {
\t\$('#shipping-method input[name=\\'shipping_method\\']:checked, #shipping-method select[name=\\'shipping_method\\']').trigger('change');
});

";
        // line 159
        if ((($context["delivery"] ?? null) && (($context["delivery_delivery_time"] ?? null) == "1"))) {
            echo " 
\$(document).ready(function() {
\t\$('input[name=\\'delivery_date\\']').datetimepicker({
\t\tformat: 'YYYY-MM-DD HH:mm',
\t\tminDate: '";
            // line 163
            echo ($context["delivery_min"] ?? null);
            echo "',
\t\tmaxDate: '";
            // line 164
            echo ($context["delivery_max"] ?? null);
            echo "',
\t\tdisabledDates: [";
            // line 165
            echo ($context["delivery_unavailable"] ?? null);
            echo "],
\t\tenabledHours: [";
            // line 166
            echo ($context["hours"] ?? null);
            echo "],
\t\tignoreReadonly: true,
\t\t";
            // line 168
            if ((($context["delivery_days_of_week"] ?? null) != "")) {
                echo " 
\t\tdaysOfWeekDisabled: [";
                // line 169
                echo ($context["delivery_days_of_week"] ?? null);
                echo "]
\t\t";
            }
            // line 170
            echo " 
\t});
});
";
        } elseif ((        // line 173
($context["delivery"] ?? null) && ((($context["delivery_delivery_time"] ?? null) == "3") || (($context["delivery_delivery_time"] ?? null) == "0")))) {
            echo " 
\t\$('input[name=\\'delivery_date\\']').datetimepicker({
\t\tformat: 'YYYY-MM-DD',
\t\tminDate: '";
            // line 176
            echo ($context["delivery_min"] ?? null);
            echo "',
\t\tmaxDate: '";
            // line 177
            echo ($context["delivery_max"] ?? null);
            echo "',
\t\tdisabledDates: [";
            // line 178
            echo ($context["delivery_unavailable"] ?? null);
            echo "],
\t\tignoreReadonly: true,
\t\t";
            // line 180
            if ((($context["delivery_days_of_week"] ?? null) != "")) {
                echo " 
\t\tdaysOfWeekDisabled: [";
                // line 181
                echo ($context["delivery_days_of_week"] ?? null);
                echo "]
\t\t";
            }
            // line 182
            echo " 
\t});
";
        }
        // line 185
        echo "//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 185,  536 => 182,  531 => 181,  527 => 180,  522 => 178,  518 => 177,  514 => 176,  508 => 173,  503 => 170,  498 => 169,  494 => 168,  489 => 166,  485 => 165,  481 => 164,  477 => 163,  470 => 159,  462 => 153,  457 => 150,  449 => 146,  445 => 144,  435 => 138,  431 => 136,  425 => 134,  407 => 118,  402 => 116,  394 => 112,  390 => 110,  384 => 108,  380 => 106,  374 => 104,  357 => 90,  352 => 87,  346 => 83,  341 => 82,  337 => 81,  333 => 80,  327 => 77,  324 => 76,  320 => 74,  313 => 73,  309 => 72,  302 => 71,  299 => 70,  292 => 69,  288 => 68,  283 => 67,  279 => 66,  275 => 65,  272 => 64,  267 => 63,  264 => 62,  259 => 61,  255 => 60,  251 => 59,  247 => 58,  243 => 57,  239 => 55,  235 => 53,  229 => 52,  226 => 51,  216 => 49,  213 => 48,  208 => 47,  205 => 46,  200 => 45,  195 => 44,  193 => 43,  189 => 42,  183 => 41,  179 => 40,  173 => 39,  169 => 37,  165 => 36,  159 => 35,  153 => 32,  147 => 30,  136 => 27,  130 => 26,  127 => 25,  120 => 24,  117 => 23,  110 => 22,  106 => 21,  99 => 19,  95 => 18,  90 => 15,  85 => 14,  82 => 13,  73 => 12,  69 => 11,  65 => 9,  61 => 8,  58 => 7,  56 => 6,  51 => 5,  49 => 4,  46 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/shipping_method.twig", "");
    }
}
