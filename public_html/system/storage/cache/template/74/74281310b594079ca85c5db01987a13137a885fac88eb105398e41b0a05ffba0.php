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

/* extension/module/slider.twig */
class __TwigTemplate_b08697015f0275e9817ad946279970ede32f9b3fd190bc0ef580c3798a0050c2 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-ishislider\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ishislider\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required\">
              <div class=\"col-sm-6\">
                <label class=\"col-sm-4 control-label\" for=\"input-width\">";
        // line 39
        echo ($context["entry_width"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  <input type=\"text\" name=\"width\" value=\"";
        // line 41
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                  ";
        // line 42
        if (($context["error_width"] ?? null)) {
            // line 43
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                  ";
        }
        // line 45
        echo "                </div>
              </div>
              <div class=\"col-sm-6\">
                <label class=\"col-sm-4 control-label\" for=\"input-height\">";
        // line 48
        echo ($context["entry_height"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  <input type=\"text\" name=\"height\" value=\"";
        // line 50
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                  ";
        // line 51
        if (($context["error_height"] ?? null)) {
            // line 52
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                  ";
        }
        // line 54
        echo "                </div>
              </div>
          </div>
\t\t 
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 59
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 62
        if (($context["status"] ?? null)) {
            // line 63
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 64
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 66
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 67
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 69
        echo "              </select>
            </div>
          </div>
\t\t  <h3>";
        // line 72
        echo ($context["entry_carousel"] ?? null);
        echo "</h3><hr/>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplay\">";
        // line 75
        echo ($context["text_autoplay"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t";
        // line 78
        if (($context["autoplay"] ?? null)) {
            // line 79
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t\t  <span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t</div>
            </div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-navigation\">";
        // line 92
        echo ($context["text_navigation"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t";
        // line 95
        if (($context["navigation"] ?? null)) {
            // line 96
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"navigation\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-navigation\" />
\t\t\t\t\t\t\t";
        } else {
            // line 98
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"navigation\" value=\"1\" class=\"primary\" id=\"input-navigation\" />
\t\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t\t  <span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-navigation-style\">";
        // line 105
        echo ($context["text_navigation_style"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t  <select name=\"navigation_style\" id=\"input-navigation-style\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"ishi-style-nav1\" ";
        // line 108
        if ((($context["navigation_style"] ?? null) == "ishi-style-nav1")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_nav1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-style-nav2\" ";
        // line 109
        if ((($context["navigation_style"] ?? null) == "ishi-style-nav2")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_nav2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-style-nav3\" ";
        // line 110
        if ((($context["navigation_style"] ?? null) == "ishi-style-nav3")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_nav3"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-style-nav4\" ";
        // line 111
        if ((($context["navigation_style"] ?? null) == "ishi-style-nav4")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_nav4"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-style-nav5\" ";
        // line 112
        if ((($context["navigation_style"] ?? null) == "ishi-style-nav5")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_nav5"] ?? null);
        echo "</option>
\t\t\t\t\t  </select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dot\">";
        // line 119
        echo ($context["text_dot"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t";
        // line 122
        if (($context["dot"] ?? null)) {
            // line 123
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"dot\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-dot\" />
\t\t\t\t\t\t\t";
        } else {
            // line 125
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"dot\" value=\"1\" class=\"primary\" id=\"input-dot\" />
\t\t\t\t\t\t\t";
        }
        // line 127
        echo "\t\t\t\t\t\t  <span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dot-style\">";
        // line 132
        echo ($context["text_dot_style"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<select name=\"dot_style\" id=\"input-dot-style\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"ishi-style-dot1\" ";
        // line 135
        if ((($context["dot_style"] ?? null) == "ishi-style-dot1")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_dot1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-style-dot2\" ";
        // line 136
        if ((($context["dot_style"] ?? null) == "ishi-style-dot2")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_dot2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-style-dot3\" ";
        // line 137
        if ((($context["dot_style"] ?? null) == "ishi-style-dot3")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_dot3"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-style-dot4\" ";
        // line 138
        if ((($context["dot_style"] ?? null) == "ishi-style-dot4")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_dot4"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-style-dot5\" ";
        // line 139
        if ((($context["dot_style"] ?? null) == "ishi-style-dot5")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_dot5"] ?? null);
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
          <br />
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 147
            echo "            <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 147);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 147);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 147);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 147);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 147);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "          </ul>
          <div class=\"tab-content\">
            ";
        // line 151
        $context["image_row"] = 0;
        // line 152
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 153
            echo "            <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
            echo "\">
              <table id=\"images";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154);
            echo "\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-left\">";
            // line 157
            echo ($context["entry_title"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 158
            echo ($context["entry_subtitle"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 159
            echo ($context["entry_btntext"] ?? null);
            echo " </td>
                    <td class=\"text-left\">";
            // line 160
            echo ($context["entry_textcolor"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 161
            echo ($context["entry_link"] ?? null);
            echo "</td>
                    <td class=\"text-center\">";
            // line 162
            echo ($context["entry_image"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 163
            echo ($context["entry_textalignment"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 164
            echo ($context["entry_textposition"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 165
            echo ($context["entry_sort_order"] ?? null);
            echo "</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 170
            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["ishi_images"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 170)] ?? null) : null)) {
                // line 171
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["ishi_images"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 171)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ishi_image"]) {
                    // line 172
                    echo "                  <tr id=\"image-row";
                    echo ($context["image_row"] ?? null);
                    echo "\">
                    <td class=\"text-left\">
                      <input type=\"text\" name=\"ishi_image[";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 174);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "title", [], "any", false, false, false, 174);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
                      ";
                    // line 175
                    if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 175)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 176
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 176)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 178
                    echo "                    </td>
                    <td class=\"text-left\">
                      <input type=\"text\" name=\"ishi_image[";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][subtitle]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "subtitle", [], "any", false, false, false, 180);
                    echo "\" placeholder=\"";
                    echo ($context["entry_subtitle"] ?? null);
                    echo "\" class=\"form-control\" />
                      ";
                    // line 181
                    if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 181)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 182
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 182)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 184
                    echo "                    </td>
                    <td class=\"text-left\">
                      <input type=\"text\" name=\"ishi_image[";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 186);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][btntext]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "btntext", [], "any", false, false, false, 186);
                    echo "\" placeholder=\"";
                    echo ($context["entry_btntext"] ?? null);
                    echo "\" class=\"form-control\" />
                      ";
                    // line 187
                    if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_ishi_image"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 187)] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 188
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 188)] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 190
                    echo "                    </td>
                    <td class=\"text-left\">
                      <input type=\"text\" name=\"ishi_image[";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 192);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][textcolor]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "textcolor", [], "any", false, false, false, 192);
                    echo "\" placeholder=\"";
                    echo ($context["entry_textcolor"] ?? null);
                    echo "\"  data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/>
                      ";
                    // line 193
                    if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 193)] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 194
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["error_ishi_image"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 194)] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 196
                    echo "                    </td>
                    <td class=\"text-left\"><input type=\"text\" name=\"ishi_image[";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 197);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][link]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "link", [], "any", false, false, false, 197);
                    echo "\" placeholder=\"";
                    echo ($context["entry_link"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                    <td class=\"text-center\"><a href=\"\" id=\"thumb-image";
                    // line 198
                    echo ($context["image_row"] ?? null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "thumb", [], "any", false, false, false, 198);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" /></a>
                      <input type=\"hidden\" name=\"ishi_image[";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 199);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "image", [], "any", false, false, false, 199);
                    echo "\" id=\"input-image";
                    echo ($context["image_row"] ?? null);
                    echo "\" /></td>
                      <td class=\"text-left\">
                      <select name=\"ishi_image[";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 201);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][textalignment]\">
                        <option ";
                    // line 202
                    if ((twig_get_attribute($this->env, $this->source, $context["ishi_image"], "textalignment", [], "any", false, false, false, 202) == "left")) {
                        echo " selected ";
                    }
                    echo " value=\"left\">Left</option> 
                        <option ";
                    // line 203
                    if ((twig_get_attribute($this->env, $this->source, $context["ishi_image"], "textalignment", [], "any", false, false, false, 203) == "right")) {
                        echo " selected ";
                    }
                    echo " value=\"right\">Right</option> 
                        <option ";
                    // line 204
                    if ((twig_get_attribute($this->env, $this->source, $context["ishi_image"], "textalignment", [], "any", false, false, false, 204) == "center")) {
                        echo " selected ";
                    }
                    echo " value=\"center\">Center</option>
                      </select>
                      ";
                    // line 206
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 206)] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 207
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 207)] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 209
                    echo "                    </td>
                    <td class=\"text-left\">
                      <select name=\"ishi_image[";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 211);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][textposition]\" >
                        <option ";
                    // line 212
                    if ((twig_get_attribute($this->env, $this->source, $context["ishi_image"], "textposition", [], "any", false, false, false, 212) == "slider-content-left")) {
                        echo " selected ";
                    }
                    echo " value=\"slider-content-left\">Left</option> 
                        <option ";
                    // line 213
                    if ((twig_get_attribute($this->env, $this->source, $context["ishi_image"], "textposition", [], "any", false, false, false, 213) == "slider-content-right")) {
                        echo " selected ";
                    }
                    echo " value=\"slider-content-right\">Right</option> 
                      </select>
                      ";
                    // line 215
                    if ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_ishi_image"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 215)] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 216
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 216)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 218
                    echo "                    </td>
                    <td class=\"text-right\"><input type=\"text\" name=\"ishi_image[";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 219);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][sort_order]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishi_image"], "sort_order", [], "any", false, false, false, 219);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sort_order"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
                    // line 220
                    echo ($context["image_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
                    // line 222
                    $context["image_row"] = (($context["image_row"] ?? null) + 1);
                    // line 223
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "                  ";
            }
            // line 225
            echo "                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"9\"></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"addImage('";
            // line 229
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 229);
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_banner_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                  </tr>
                </tfoot>
              </table>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "          </div>
        </form>
      </div>
    </div>
  </div>
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
  <script type=\"text/javascript\"><!--
var image_row = ";
        // line 315
        echo ($context["image_row"] ?? null);
        echo ";
function addImage(language_id) {
\thtml  = '<tr id=\"image-row' + image_row + '\">';
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"ishi_image[' + language_id + '][' + image_row + '][title]\" value=\"\" placeholder=\"";
        // line 318
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"ishi_image[' + language_id + '][' + image_row + '][subtitle]\" value=\"\" placeholder=\"";
        // line 319
        echo ($context["entry_subtitle"] ?? null);
        echo "\" class=\"form-control\" /></td>';  
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"ishi_image[' + language_id + '][' + image_row + '][btntext]\" value=\"\" placeholder=\"";
        // line 320
        echo ($context["entry_btntext"] ?? null);
        echo "\" class=\"form-control\" /></td>'; 
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"ishi_image[' + language_id + '][' + image_row + '][textcolor]\" value=\"\" placeholder=\"";
        // line 321
        echo ($context["entry_textcolor"] ?? null);
        echo "\" class=\"form-control themecolor\" data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"ishi_image[' + language_id + '][' + image_row + '][link]\" value=\"\" placeholder=\"";
        // line 322
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
\thtml += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + image_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 323
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"ishi_image[' + language_id + '][' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
    html += '  <td class=\"text-left\"><select name=\"ishi_image[' + language_id + '][' + image_row + '][textalignment]\"><option value=\"left\">Left</option> <option value=\"right\">Right</option> <option value=\"center\">Center</option> /select></td>';  
  html += '  <td class=\"text-left\"><select name=\"ishi_image[' + language_id + '][' + image_row + '][textposition]\"><option value=\"left\">Left</option> <option value=\"right\">Right</option> <option value=\"center\">Center</option> /select></td>'; 
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"ishi_image[' + language_id + '][' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 326
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 327
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#images' + language_id + ' tbody').append(html);

         \$('.themecolor').each( function() {
        \$(this).minicolors({
          control: \$(this).attr('data-control') || 'hue',
          defaultValue: \$(this).attr('data-defaultValue') || '',
          format: \$(this).attr('data-format') || 'hex',
          keywords: \$(this).attr('data-keywords') || '',
          inline: \$(this).attr('data-inline') === 'true',
          letterCase: \$(this).attr('data-letterCase') || 'lowercase',
          opacity: \$(this).attr('data-opacity'),
          position: \$(this).attr('data-position') || 'bottom',
          swatches: \$(this).attr('data-swatches') ? \$(this).attr('data-swatches').split('|') : [],
          change: function(value, opacity) {
            if( !value ) return;
            if( opacity ) value += ', ' + opacity;
            if( typeof console === 'object' ) {
              console.log(value);
            }
          },
          theme: 'bootstrap',
      change: function(hex, opacity) {
        jQuery('.panel .mail-preview iframe').contents().find(jQuery(this).attr('data-target')).css(jQuery(this).attr('data-property'), hex);
      }
        });

      });
\t
\timage_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script> 


  <script type=\"text/javascript\">
    \$(document).ready( function() {
      \$('.themecolor').each( function() {
        \$(this).minicolors({
          control: \$(this).attr('data-control') || 'hue',
          defaultValue: \$(this).attr('data-defaultValue') || '',
          format: \$(this).attr('data-format') || 'hex',
          keywords: \$(this).attr('data-keywords') || '',
          inline: \$(this).attr('data-inline') === 'true',
          letterCase: \$(this).attr('data-letterCase') || 'lowercase',
          opacity: \$(this).attr('data-opacity'),
          position: \$(this).attr('data-position') || 'bottom',
          swatches: \$(this).attr('data-swatches') ? \$(this).attr('data-swatches').split('|') : [],
          change: function(value, opacity) {
            if( !value ) return;
            if( opacity ) value += ', ' + opacity;
            if( typeof console === 'object' ) {
              console.log(value);
            }
          },
          theme: 'bootstrap',
      change: function(hex, opacity) {
        jQuery('.panel .mail-preview iframe').contents().find(jQuery(this).attr('data-target')).css(jQuery(this).attr('data-property'), hex);
      }
        });

      });
    });
  </script>
  <link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.min.js\"></script> 
</div>
";
        // line 398
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  919 => 398,  845 => 327,  841 => 326,  833 => 323,  829 => 322,  825 => 321,  821 => 320,  817 => 319,  813 => 318,  807 => 315,  725 => 235,  711 => 229,  705 => 225,  702 => 224,  696 => 223,  694 => 222,  687 => 220,  677 => 219,  674 => 218,  668 => 216,  666 => 215,  659 => 213,  653 => 212,  647 => 211,  643 => 209,  637 => 207,  635 => 206,  628 => 204,  622 => 203,  616 => 202,  610 => 201,  599 => 199,  591 => 198,  581 => 197,  578 => 196,  572 => 194,  570 => 193,  560 => 192,  556 => 190,  550 => 188,  548 => 187,  538 => 186,  534 => 184,  528 => 182,  526 => 181,  516 => 180,  512 => 178,  506 => 176,  504 => 175,  494 => 174,  488 => 172,  483 => 171,  481 => 170,  473 => 165,  469 => 164,  465 => 163,  461 => 162,  457 => 161,  453 => 160,  449 => 159,  445 => 158,  441 => 157,  435 => 154,  430 => 153,  425 => 152,  423 => 151,  419 => 149,  402 => 147,  398 => 146,  384 => 139,  376 => 138,  368 => 137,  360 => 136,  352 => 135,  346 => 132,  339 => 127,  335 => 125,  331 => 123,  329 => 122,  323 => 119,  309 => 112,  301 => 111,  293 => 110,  285 => 109,  277 => 108,  271 => 105,  264 => 100,  260 => 98,  256 => 96,  254 => 95,  248 => 92,  237 => 83,  233 => 81,  229 => 79,  227 => 78,  221 => 75,  215 => 72,  210 => 69,  205 => 67,  200 => 66,  195 => 64,  190 => 63,  188 => 62,  182 => 59,  175 => 54,  169 => 52,  167 => 51,  161 => 50,  156 => 48,  151 => 45,  145 => 43,  143 => 42,  137 => 41,  132 => 39,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/slider.twig", "");
    }
}
