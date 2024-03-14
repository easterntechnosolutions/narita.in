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

/* default/template/extension/quickcheckout/payment_method.twig */
class __TwigTemplate_30bb057127a34819e0491fe26a4923bddc5aab5ffba44bd7bb73cd07a05d8786 extends \Twig\Template
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
        if (($context["payment_methods"] ?? null)) {
            // line 5
            echo "<p>";
            echo ($context["text_payment_method"] ?? null);
            echo "</p>
";
            // line 6
            if (($context["payment"] ?? null)) {
                // line 7
                echo "<table class=\"table table-hover table-striped\">
  ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    echo " 
  <tr>
    <td>";
                    // line 10
                    if ((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 10) == ($context["code"] ?? null))) {
                        echo " 
      <input type=\"radio\" name=\"payment_method\" value=\"";
                        // line 11
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 11);
                        echo "\" id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 11);
                        echo "\" checked=\"checked\" />
      ";
                    } else {
                        // line 12
                        echo "   
      <input type=\"radio\" name=\"payment_method\" value=\"";
                        // line 13
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 13);
                        echo "\" id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 13);
                        echo "\" />
      ";
                    }
                    // line 14
                    echo "</td>
    <td><label for=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 15);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 15);
                    echo "</label></td>
\t";
                    // line 16
                    if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["payment_logo"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 16)] ?? null) : null)) {
                        echo " 
\t<td><img src=\"";
                        // line 17
                        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["payment_logo"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 17)] ?? null) : null);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 17);
                        echo "\" /></td>
\t";
                    } else {
                        // line 19
                        echo "\t<td></td>
\t";
                    }
                    // line 20
                    echo " 
  </tr>
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "</table>
";
            } else {
                // line 24
                echo "   
  <select name=\"payment_method\" class=\"form-control\">
  ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    echo " 
\t";
                    // line 27
                    if ((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 27) == ($context["code"] ?? null))) {
                        echo " 
      <option value=\"";
                        // line 28
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 28);
                        echo "\" selected=\"selected\">
      ";
                    } else {
                        // line 29
                        echo "   
      <option value=\"";
                        // line 30
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 30);
                        echo "\">
      ";
                    }
                    // line 31
                    echo " 
    ";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 32);
                    echo "</option>
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "  </select><br />
";
            }
            // line 36
            echo "<br />
";
        }
        // line 38
        if (($context["survey_survey"] ?? null)) {
            echo " 
<div";
            // line 39
            echo ((($context["survey_required"] ?? null)) ? (" class=\"required\"") : (""));
            echo ">
  <label class=\"control-label\"><strong>";
            // line 40
            echo ($context["text_survey"] ?? null);
            echo "</strong></label>
  ";
            // line 41
            if (($context["survey_type"] ?? null)) {
                echo " 
  <select name=\"survey\" class=\"form-control\">
    <option value=\"\"></option>
    ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["survey_answers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["survey_answer"]) {
                    echo " 
    ";
                    // line 45
                    if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["survey_answer"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null)) {
                        echo " 
\t  ";
                        // line 46
                        if ((($context["survey"] ?? null) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["survey_answer"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null))) {
                            echo " 
      <option value=\"";
                            // line 47
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["survey_answer"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                            echo "\" selected=\"selected\">";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["survey_answer"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null);
                            echo "</option>
      ";
                        } else {
                            // line 48
                            echo "   
\t  <option value=\"";
                            // line 49
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["survey_answer"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null);
                            echo "\">";
                            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["survey_answer"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null);
                            echo "</option>
      ";
                        }
                        // line 50
                        echo " 
\t";
                    }
                    // line 51
                    echo " 
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey_answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "</select><br />
  ";
            } else {
                // line 53
                echo "   
  <textarea name=\"survey\" class=\"form-control\" rows=\"1\">";
                // line 54
                echo ($context["survey"] ?? null);
                echo "</textarea><br /><br />
  ";
            }
            // line 56
            echo "</div>
";
        } else {
            // line 57
            echo "   
<textarea name=\"survey\" class=\"hide\">";
            // line 58
            echo ($context["survey"] ?? null);
            echo "</textarea>
";
        }
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["field_comment"] ?? null), "display", [], "any", false, false, false, 60)) {
            echo " 
<strong>";
            // line 61
            if (twig_get_attribute($this->env, $this->source, ($context["field_comment"] ?? null), "required", [], "any", false, false, false, 61)) {
                echo "<span class=\"required\">*</span> ";
            }
            echo ($context["text_comments"] ?? null);
            echo "</strong>
<textarea name=\"comment\" rows=\"8\" class=\"form-control\" placeholder=\"";
            // line 62
            echo ((twig_get_attribute($this->env, $this->source, ($context["field_comment"] ?? null), "placeholder", [], "any", false, false, false, 62)) ? (twig_get_attribute($this->env, $this->source, ($context["field_comment"] ?? null), "placeholder", [], "any", false, false, false, 62)) : (""));
            echo "\">";
            echo ((($context["comment"] ?? null)) ? (($context["comment"] ?? null)) : (twig_get_attribute($this->env, $this->source, ($context["field_comment"] ?? null), "default", [], "any", false, false, false, 62)));
            echo "</textarea>
";
        } else {
            // line 63
            echo "   
<textarea name=\"comment\" class=\"hide\"></textarea>
";
        }
        // line 66
        echo "
<script type=\"text/javascript\"><!--
\$('#payment-method input[name=\\'payment_method\\'], #payment-method select[name=\\'payment_method\\']').on('change', function() {
\t";
        // line 69
        if ( !($context["logged"] ?? null)) {
            // line 70
            echo "\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/payment_method/set',
\t\t\ttype: 'post',
\t\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tsuccess: function(html) {
\t\t\t\t";
            // line 77
            if ((($context["cart"] ?? null) && ($context["payment_reload"] ?? null))) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 79
            echo " 
\t\t\t},
\t\t\t";
            // line 81
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 85
            echo " 
\t\t});
\t";
        } else {
            // line 87
            echo "   
\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/payment_method/set';
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea');
\t\t} else {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/payment_method/set&address_id=' + \$('#payment-address select[name=\\'address_id\\']').val();
\t\t\tvar post_data = \$('#payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea');
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
            // line 103
            if ((($context["cart"] ?? null) && ($context["payment_reload"] ?? null))) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 105
            echo " 
\t\t\t},
\t\t\t";
            // line 107
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 111
            echo " 
\t\t});
\t";
        }
        // line 114
        echo "});

";
        // line 116
        if (($context["payment_reload"] ?? null)) {
            echo " 
\$(document).ready(function() {
\t\$('#payment-method input[name=\\'payment_method\\']:checked, #payment-method select[name=\\'payment_method\\']').trigger('change');
});
";
        }
        // line 120
        echo " 
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 120,  362 => 116,  358 => 114,  353 => 111,  345 => 107,  341 => 105,  335 => 103,  317 => 87,  312 => 85,  304 => 81,  300 => 79,  294 => 77,  285 => 70,  283 => 69,  278 => 66,  273 => 63,  266 => 62,  259 => 61,  255 => 60,  250 => 58,  247 => 57,  243 => 56,  238 => 54,  235 => 53,  231 => 52,  224 => 51,  220 => 50,  213 => 49,  210 => 48,  203 => 47,  199 => 46,  195 => 45,  189 => 44,  183 => 41,  179 => 40,  175 => 39,  171 => 38,  167 => 36,  163 => 34,  155 => 32,  152 => 31,  147 => 30,  144 => 29,  139 => 28,  135 => 27,  129 => 26,  125 => 24,  121 => 23,  113 => 20,  109 => 19,  102 => 17,  98 => 16,  92 => 15,  89 => 14,  82 => 13,  79 => 12,  72 => 11,  68 => 10,  61 => 8,  58 => 7,  56 => 6,  51 => 5,  49 => 4,  46 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/payment_method.twig", "");
    }
}
