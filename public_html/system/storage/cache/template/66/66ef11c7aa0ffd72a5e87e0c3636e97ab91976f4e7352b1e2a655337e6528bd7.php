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

/* extension/module/fivebannerblock.twig */
class __TwigTemplate_0301f11398a7884bb4027a1b46ed27e3358b494b672b34bf902fc3de7b2b6937 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"tab-pane\" id=\"tab-design\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-banner\" data-toggle=\"tab\">";
        // line 31
        echo ($context["entry_banner"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 37
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 39
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 40
        if (($context["error_name"] ?? null)) {
            // line 41
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 43
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 46
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            echo "              <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 49);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 49);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 49);
            echo "\" /></span>
                <input type=\"text\" name=\"title[";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50);
            echo "\" />
              </div> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 56
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 59
        if (($context["status"] ?? null)) {
            // line 60
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 61
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 63
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 64
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 66
        echo "              </select>
            </div>
          </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-banner\">
              <h2>Banner 1</h2>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-1\">";
        // line 73
        echo ($context["entry_image"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-image-1\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 75
        echo ($context["ishi_banner1_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["ishi_banner1_placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"ishi_banner1_image\" value=\"";
        // line 76
        echo ($context["ishi_banner1_image"] ?? null);
        echo "\" id=\"input-image-1\" />
                  </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title-1\">";
        // line 80
        echo ($context["entry_title"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"ishi_banner1_title\" value=\"";
        // line 82
        echo ($context["ishi_banner1_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" id=\"input-title-1\"/>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-btn-1\">";
        // line 86
        echo ($context["entry_btn"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"ishi_banner1_btn\" value=\"";
        // line 88
        echo ($context["ishi_banner1_btn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_btn"] ?? null);
        echo "\" class=\"form-control\" id=\"input-btn-1\"/>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 92
        echo ($context["entry_category1"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_label1\" value=\"";
        // line 94
        echo ($context["category_label1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_category1"] ?? null);
        echo "\" id=\"input-category_label1\" class=\"form-control category-selector\" />
                      <input type=\"hidden\" name=\"category1\" value=\"";
        // line 95
        echo ($context["category1"] ?? null);
        echo "\"/>
                      ";
        // line 96
        if (($context["error_category1"] ?? null)) {
            // line 97
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_category1"] ?? null);
            echo "</div>
                      ";
        }
        // line 99
        echo "                    </div>
                  </div>
              <h2>Banner 2</h2>
                  <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-2\">";
        // line 103
        echo ($context["entry_image"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-image-2\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 105
        echo ($context["ishi_banner2_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["ishi_banner2_placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"ishi_banner2_image\" value=\"";
        // line 106
        echo ($context["ishi_banner2_image"] ?? null);
        echo "\" id=\"input-image-2\" />
                  </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title-2\">";
        // line 110
        echo ($context["entry_title"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"ishi_banner2_title\" value=\"";
        // line 112
        echo ($context["ishi_banner2_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" id=\"input-title-2\"/>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 116
        echo ($context["entry_category1"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_label2\" value=\"";
        // line 118
        echo ($context["category_label2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_category1"] ?? null);
        echo "\" id=\"input-category_label2\" class=\"form-control category-selector\" />
                      <input type=\"hidden\" name=\"category2\" value=\"";
        // line 119
        echo ($context["category2"] ?? null);
        echo "\"/>
                      ";
        // line 120
        if (($context["error_category1"] ?? null)) {
            // line 121
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_category1"] ?? null);
            echo "</div>
                      ";
        }
        // line 123
        echo "                    </div>
                  </div>
              <h2>Banner 3</h2>
              <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-3\">";
        // line 127
        echo ($context["entry_image"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-image-3\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 129
        echo ($context["ishi_banner3_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["ishi_banner3_placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"ishi_banner3_image\" value=\"";
        // line 130
        echo ($context["ishi_banner3_image"] ?? null);
        echo "\" id=\"input-image-3\" />
                  </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title-3\">";
        // line 134
        echo ($context["entry_title"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"ishi_banner3_title\" value=\"";
        // line 136
        echo ($context["ishi_banner3_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" id=\"input-title-3\"/>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 140
        echo ($context["entry_category1"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_label3\" value=\"";
        // line 142
        echo ($context["category_label3"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_category1"] ?? null);
        echo "\" id=\"input-category_label3\" class=\"form-control category-selector\" />
                      <input type=\"hidden\" name=\"category3\" value=\"";
        // line 143
        echo ($context["category3"] ?? null);
        echo "\"/>
                      ";
        // line 144
        if (($context["error_category1"] ?? null)) {
            // line 145
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_category1"] ?? null);
            echo "</div>
                      ";
        }
        // line 147
        echo "                    </div>
                  </div>
              <h2>Banner 4</h2>
              <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-4\">";
        // line 151
        echo ($context["entry_image"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-image-4\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 153
        echo ($context["ishi_banner4_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["ishi_banner4_placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"ishi_banner4_image\" value=\"";
        // line 154
        echo ($context["ishi_banner4_image"] ?? null);
        echo "\" id=\"input-image-4\" />
                  </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title-4\">";
        // line 158
        echo ($context["entry_title"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"ishi_banner4_title\" value=\"";
        // line 160
        echo ($context["ishi_banner4_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" id=\"input-title-4\"/>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 164
        echo ($context["entry_category1"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_label4\" value=\"";
        // line 166
        echo ($context["category_label4"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_category1"] ?? null);
        echo "\" id=\"input-category_label4\" class=\"form-control category-selector\" />
                      <input type=\"hidden\" name=\"category4\" value=\"";
        // line 167
        echo ($context["category4"] ?? null);
        echo "\"/>
                      ";
        // line 168
        if (($context["error_category1"] ?? null)) {
            // line 169
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_category1"] ?? null);
            echo "</div>
                      ";
        }
        // line 171
        echo "                    </div>
                  </div>
                  <h2>Banner 5</h2>
                  <div class=\"form-group\">
                     <label class=\"col-sm-2 control-label\" for=\"input-image-5\">";
        // line 175
        echo ($context["entry_image"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <a href=\"\" id=\"thumb-image-5\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 177
        echo ($context["ishi_banner5_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["ishi_banner5_placeholder"] ?? null);
        echo "\" /></a>
                           <input type=\"hidden\" name=\"ishi_banner5_image\" value=\"";
        // line 178
        echo ($context["ishi_banner5_image"] ?? null);
        echo "\" id=\"input-image-5\" />
                        </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title-5\">";
        // line 183
        echo ($context["entry_title"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"ishi_banner5_title\" value=\"";
        // line 185
        echo ($context["ishi_banner5_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" id=\"input-title-5\"/>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 189
        echo ($context["entry_category1"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_label5\" value=\"";
        // line 191
        echo ($context["category_label5"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_category1"] ?? null);
        echo "\" id=\"input-category_label5\" class=\"form-control category-selector\" />
                      <input type=\"hidden\" name=\"category5\" value=\"";
        // line 192
        echo ($context["category5"] ?? null);
        echo "\"/>
                      ";
        // line 193
        if (($context["error_category1"] ?? null)) {
            // line 194
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_category1"] ?? null);
            echo "</div>
                      ";
        }
        // line 196
        echo "                    </div>
                  </div>
            </div>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">

  \$(document).on(\"focus\",\".category-selector\", function(e) {
      \$(this).autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 212
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['category_id']
            }
          }));
        }
      });
    },
    'select': function(item) {      
      \$(this).val(item['label']);
      \$(this).siblings(\"input[type=hidden]\").val(item['value']);
      \$(\"ul.dropdown-menu\").remove();
    }
  });
  });
</script>
<style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: \"\";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input.default:checked + .slider {
  background-color: #444;
}
input.primary:checked + .slider {
  background-color: #2196F3;
}
input.success:checked + .slider {
  background-color: #8bc34a;
}
input.info:checked + .slider {
  background-color: #3de0f5;
}
input.warning:checked + .slider {
  background-color: #FFC107;
}
input.danger:checked + .slider {
  background-color: #f44336;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<script type=\"text/javascript\">
\$('#bannerstab a:first').tab('show');
</script>
";
        // line 309
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/fivebannerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 309,  552 => 212,  534 => 196,  528 => 194,  526 => 193,  522 => 192,  516 => 191,  511 => 189,  502 => 185,  497 => 183,  489 => 178,  483 => 177,  478 => 175,  472 => 171,  466 => 169,  464 => 168,  460 => 167,  454 => 166,  449 => 164,  440 => 160,  435 => 158,  428 => 154,  422 => 153,  417 => 151,  411 => 147,  405 => 145,  403 => 144,  399 => 143,  393 => 142,  388 => 140,  379 => 136,  374 => 134,  367 => 130,  361 => 129,  356 => 127,  350 => 123,  344 => 121,  342 => 120,  338 => 119,  332 => 118,  327 => 116,  318 => 112,  313 => 110,  306 => 106,  300 => 105,  295 => 103,  289 => 99,  283 => 97,  281 => 96,  277 => 95,  271 => 94,  266 => 92,  257 => 88,  252 => 86,  243 => 82,  238 => 80,  231 => 76,  225 => 75,  220 => 73,  211 => 66,  206 => 64,  201 => 63,  196 => 61,  191 => 60,  189 => 59,  183 => 56,  178 => 53,  163 => 50,  154 => 49,  150 => 48,  145 => 46,  140 => 43,  134 => 41,  132 => 40,  126 => 39,  121 => 37,  112 => 31,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/fivebannerblock.twig", "");
    }
}
