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

/* extension/module/quickcheckout.twig */
class __TwigTemplate_72b0fcc8225a24f3511834b770711a4b3b497fd99e7249f1c01f8b09abc014a8 extends \Twig\Template
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
        echo " ";
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
        <a onclick=\"\$('#form').attr('action', '";
        // line 7
        echo ($context["continue"] ?? null);
        echo "');\$('#form').submit();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-check\"></i></a>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["success"] ?? null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>";
            // line 19
            echo ($context["success"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo " 
\t";
        // line 23
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            // line 24
            echo ($context["error_warning"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo " 
\t<div class=\"alert alert-info\">
\t  ";
        // line 29
        echo ($context["entry_store"] ?? null);
        echo " 
\t  <select onchange=\"store();\" name=\"store_id\">
\t\t<option value=\"0\"";
        // line 31
        echo (((($context["store_id"] ?? null) == "0")) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_default_store"] ?? null);
        echo "</option>
\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo " 
\t\t<option value=\"";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 33);
            echo "\"";
            echo (((($context["store_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 33))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 33);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " 
\t  </select>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 39
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 42
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
\t\t  <ul class=\"nav nav-tabs\">
\t\t\t<li class=\"active\"><a href=\"#tab-home\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 44
        echo ($context["tab_home"] ?? null);
        echo "\" class=\"fa fa-home\"></i></a></li>
\t\t\t<li><a href=\"#tab-general\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 45
        echo ($context["tab_general"] ?? null);
        echo "\" class=\"fa fa-gear\"></i></a></li>
\t\t\t<li><a href=\"#tab-design\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 46
        echo ($context["tab_design"] ?? null);
        echo "\" class=\"fa fa-television\"></i></a></li>
\t\t\t<li><a href=\"#tab-field\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 47
        echo ($context["tab_field"] ?? null);
        echo "\" class=\"fa fa-bars\"></i></a></li>
\t\t\t<li><a href=\"#tab-module\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 48
        echo ($context["tab_module"] ?? null);
        echo "\" class=\"fa fa-puzzle-piece\"></i></a></li>
\t\t\t<li><a href=\"#tab-payment\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 49
        echo ($context["tab_payment"] ?? null);
        echo "\" class=\"fa fa-credit-card\"></i></a></li>
\t\t\t<li><a href=\"#tab-shipping\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 50
        echo ($context["tab_shipping"] ?? null);
        echo "\" class=\"fa fa-ship\"></i></a></li>
\t\t\t<li><a href=\"#tab-survey\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 51
        echo ($context["tab_survey"] ?? null);
        echo "\" class=\"fa fa-edit\"></i></a></li>
\t\t\t<li><a href=\"#tab-delivery\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 52
        echo ($context["tab_delivery"] ?? null);
        echo "\" class=\"fa fa-truck\"></i></a></li>
\t\t\t<li><a href=\"#tab-countdown\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 53
        echo ($context["tab_countdown"] ?? null);
        echo "\" class=\"fa fa-clock-o\"></i></a></li>
\t\t\t<li><a href=\"#tab-analytics\" data-toggle=\"tab\"><i data-toggle=\"tooltip\" title=\"";
        // line 54
        echo ($context["tab_analytics"] ?? null);
        echo "\" class=\"fa fa-line-chart\"></i></a></li>
\t\t\t";
        // line 55
        echo ($context["about"] ?? null);
        echo "
\t\t  </ul>
\t\t  <div class=\"tab-content\">
\t\t\t<div class=\"tab-pane active\" id=\"tab-home\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t  <a href=\"#tab-general\" data-toggle=\"tab\" onclick=\"show('#tab-general');\"><i title=\"";
        // line 61
        echo ($context["text_general"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"fa fa-gear fa-5x fa-fw\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t  <a href=\"#tab-design\" data-toggle=\"tab\" onclick=\"show('#tab-design');\"><i title=\"";
        // line 64
        echo ($context["text_design"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"fa fa-television fa-5x fa-fw\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t  <a href=\"#tab-field\" data-toggle=\"tab\" onclick=\"show('#tab-field')\"><i title=\"";
        // line 67
        echo ($context["text_field"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"fa fa-bars fa-5x fa-fw\"></i></a>
\t\t\t\t</div>
\t\t\t  </div><br />
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t  <a href=\"#tab-module\" data-toggle=\"tab\" onclick=\"show('#tab-module')\"><i title=\"";
        // line 72
        echo ($context["text_module_home"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"fa fa-puzzle-piece fa-5x fa-fw\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t  <a href=\"#tab-payment\" data-toggle=\"tab\" onclick=\"show('#tab-payment')\"><i title=\"";
        // line 75
        echo ($context["text_payment"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"fa fa-credit-card fa-5x fa-fw\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t  <a href=\"#tab-shipping\" data-toggle=\"tab\" onclick=\"show('#tab-shipping')\"><i title=\"";
        // line 78
        echo ($context["text_shipping"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"fa fa-ship fa-5x fa-fw\"></i></a>
\t\t\t\t</div>
\t\t\t  </div><br />
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"col-xs-4 text-center\">
\t\t\t\t  <a href=\"#tab-survey\" data-toggle=\"tab\" onclick=\"show('#tab-survey')\"><i title=\"";
        // line 83
        echo ($context["text_survey"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"fa fa-edit fa-5x fa-fw\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t  <a href=\"#tab-delivery\" data-toggle=\"tab\" onclick=\"show('#tab-delivery')\"><i title=\"";
        // line 86
        echo ($context["text_delivery"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"fa fa-truck fa-5x fa-fw\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t  <a href=\"#tab-countdown\" data-toggle=\"tab\" onclick=\"show('#tab-countdown')\"><i title=\"";
        // line 89
        echo ($context["text_countdown"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"fa fa-clock-o fa-5x fa-fw\"></i></a>
\t\t\t\t</div>
\t\t\t  </div><br />
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"col-xs-4 text-center\">
\t\t\t\t  <a href=\"#tab-analytics\" data-toggle=\"tab\" onclick=\"show('#tab-analytics')\"><i title=\"";
        // line 94
        echo ($context["text_analytics"] ?? null);
        echo "\" data-toggle=\"tooltip\" class=\"fa fa-line-chart fa-5x fa-fw\"></i></a>
\t\t\t\t</div>
\t\t\t    <div class=\"col-xs-4 text-center\">
\t\t\t\t  <a href=\"#tab-about\" data-toggle=\"tab\" onclick=\"show('#tab-about')\"><i title=\"About Quick Checkout\" data-toggle=\"tooltip\" class=\"fa fa-question-circle fa-5x fa-fw\"></i></a>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
            <div class=\"tab-pane\" id=\"tab-general\">
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-status\"><span title=\"";
        // line 104
        echo ($context["help_status"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_status"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 107
        echo ((($context["quickcheckout_status"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 108
        echo ((($context["quickcheckout_status"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-minimum-order\"><span title=\"";
        // line 113
        echo ($context["help_minimum_order"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_minimum_order"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_minimum_order\" value=\"";
        // line 115
        echo ($context["quickcheckout_minimum_order"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-debug\"><span title=\"";
        // line 121
        echo ($context["help_debug"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_debug"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_debug\" id=\"input-debug\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 124
        echo ((($context["quickcheckout_debug"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 125
        echo ((($context["quickcheckout_debug"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-confirmation-page\"><span title=\"";
        // line 130
        echo ($context["help_confirmation_page"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_confirmation_page"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_confirmation_page\" id=\"input-confirmation-page\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 133
        echo ((($context["quickcheckout_confirmation_page"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 134
        echo ((($context["quickcheckout_confirmation_page"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-save-data\"><span title=\"";
        // line 141
        echo ($context["help_save_data"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_save_data"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_save_data\" id=\"input-save-data\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 144
        echo ((($context["quickcheckout_save_data"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 145
        echo ((($context["quickcheckout_save_data"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-edit-cart\"><span title=\"";
        // line 150
        echo ($context["help_edit_cart"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_edit_cart"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_edit_cart\" id=\"input-edit-cart\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 153
        echo ((($context["quickcheckout_edit_cart"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 154
        echo ((($context["quickcheckout_edit_cart"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-highlight-error\"><span title=\"";
        // line 161
        echo ($context["help_highlight_error"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_highlight_error"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_highlight_error\" id=\"input-highlight-error\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 164
        echo ((($context["quickcheckout_highlight_error"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 165
        echo ((($context["quickcheckout_highlight_error"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-text-error\"><span title=\"";
        // line 170
        echo ($context["help_text_error"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_text_error"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_text_error\" id=\"input-text-error\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 173
        echo ((($context["quickcheckout_text_error"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 174
        echo ((($context["quickcheckout_text_error"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-auto-submit\"><span title=\"";
        // line 181
        echo ($context["help_auto_submit"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_auto_submit"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_auto_submit\" id=\"input-auto-submit\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 184
        echo ((($context["quickcheckout_auto_submit"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 185
        echo ((($context["quickcheckout_auto_submit"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-payment-target\"><span title=\"";
        // line 190
        echo ($context["help_payment_target"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_payment_target"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t    <input type=\"text\" name=\"quickcheckout_payment_target\" id=\"input-payment-target\" class=\"form-control\" value=\"";
        // line 192
        echo ($context["quickcheckout_payment_target"] ?? null);
        echo "\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-proceed-button-text\"><span title=\"";
        // line 198
        echo ($context["help_proceed_button_text"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_proceed_button_text"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 202
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 202);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 202);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 202);
            echo "\" /></span>
\t\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_proceed_button_text[";
            // line 203
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 203);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["quickcheckout_proceed_button_text"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 203)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo " 
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-design\">
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-load-screen\"><span title=\"";
        // line 213
        echo ($context["help_load_screen"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_load_screen"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_load_screen\" id=\"input-load-screen\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 216
        echo ((($context["quickcheckout_load_screen"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 217
        echo ((($context["quickcheckout_load_screen"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-loading-display\"><span title=\"";
        // line 222
        echo ($context["help_loading_display"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_loading_display"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_loading_display\" id=\"input-loading-display\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 225
        echo ((($context["quickcheckout_loading_display"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_spinner"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 226
        echo ((($context["quickcheckout_loading_display"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_overlay"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-layout\"><span title=\"";
        // line 233
        echo ($context["help_layout"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_layout"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_layout\" id=\"input-layout\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 236
        echo (((($context["quickcheckout_layout"] ?? null) == "1")) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_one_column"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"2\"";
        // line 237
        echo (((($context["quickcheckout_layout"] ?? null) == "2")) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_two_column"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"3\"";
        // line 238
        echo (((($context["quickcheckout_layout"] ?? null) == "3")) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_three_column"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-responsive\"><span title=\"";
        // line 243
        echo ($context["help_responsive"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_responsive"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_responsive\" id=\"input-responsive\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 246
        echo ((($context["quickcheckout_responsive"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 247
        echo ((($context["quickcheckout_responsive"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-slide-effect\"><span title=\"";
        // line 254
        echo ($context["help_slide_effect"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_slide_effect"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_slide_effect\" id=\"input-slide-effect\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 257
        echo ((($context["quickcheckout_slide_effect"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 258
        echo ((($context["quickcheckout_slide_effect"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-custom-css\">";
        // line 263
        echo ($context["entry_custom_css"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t    <textarea name=\"quickcheckout_custom_css\" id=\"input-custom-css\" class=\"form-control\" rows=\"5\">";
        // line 265
        echo ($context["quickcheckout_custom_css"] ?? null);
        echo "</textarea>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane table-responsive\" id=\"tab-field\">
\t\t\t  <table class=\"table table-bordered table-hover table-striped\">
\t\t\t\t<tr>
\t\t\t\t  <td></td>
\t\t\t\t  <td class=\"text-center\">";
        // line 274
        echo ($context["text_display"] ?? null);
        echo "</td>
\t\t\t\t  <td class=\"text-center\">";
        // line 275
        echo ($context["text_required"] ?? null);
        echo "</td>
\t\t\t\t  <td>";
        // line 276
        echo ($context["text_default"] ?? null);
        echo "</td>
\t\t\t\t  <td>";
        // line 277
        echo ($context["text_placeholder"] ?? null);
        echo "</td>
\t\t\t\t  <td>";
        // line 278
        echo ($context["text_sort_order"] ?? null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            echo " 
\t\t\t\t  ";
            // line 281
            if (($context["field"] == "country")) {
                echo " 
\t\t\t\t  <tr>
\t\t\t\t\t<td>";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context, ("entry_field_" . $context["field"]), [], "any", false, false, false, 283);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 284
                echo $context["field"];
                echo "[display]\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 284), "display", [], "any", false, false, false, 284)) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 285
                echo $context["field"];
                echo "[required]\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 285), "required", [], "any", false, false, false, 285)) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td><select name=\"quickcheckout_field_";
                // line 286
                echo $context["field"];
                echo "[default]\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">";
                // line 287
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t";
                // line 288
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    echo " 
\t\t\t\t\t\t  ";
                    // line 289
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 289), "default", [], "any", false, false, false, 289) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 289), "default", [], "any", false, false, false, 289) == twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 289)))) {
                        // line 290
                        echo "\t\t\t\t\t\t  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 290);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 290);
                        echo "</option>
\t\t\t\t\t\t  ";
                    } else {
                        // line 291
                        echo "   
\t\t\t\t\t\t  <option value=\"";
                        // line 292
                        echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 292);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 292);
                        echo "</option>
\t\t\t\t\t\t  ";
                    }
                    // line 294
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 295
                echo "\t\t\t\t\t  </select></td>
\t\t\t\t\t<td class=\"text-center\">NA</td>
\t\t\t\t\t<td><input type=\"text\" name=\"quickcheckout_field_";
                // line 297
                echo $context["field"];
                echo "[sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 297), "sort_order", [], "any", false, false, false, 297);
                echo "\" class=\"form-control\" /></td>
\t\t\t\t  </tr>
\t\t\t\t  ";
            } elseif ((            // line 299
$context["field"] == "zone")) {
                echo " 
\t\t\t\t  <tr>
\t\t\t\t\t<td>";
                // line 301
                echo twig_get_attribute($this->env, $this->source, $context, ("entry_field_" . $context["field"]), [], "any", false, false, false, 301);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 302
                echo $context["field"];
                echo "[display]\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 302), "display", [], "any", false, false, false, 302)) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 303
                echo $context["field"];
                echo "[required]\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 303), "required", [], "any", false, false, false, 303)) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td><select name=\"quickcheckout_field_";
                // line 304
                echo $context["field"];
                echo "[default]\" class=\"form-control\"></select></td>
\t\t\t\t\t<td class=\"text-center\">NA</td>
\t\t\t\t\t<td><input type=\"text\" name=\"quickcheckout_field_";
                // line 306
                echo $context["field"];
                echo "[sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 306), "sort_order", [], "any", false, false, false, 306);
                echo "\" class=\"form-control\" /></td>
\t\t\t\t  </tr>
\t\t\t\t  ";
            } elseif ((            // line 308
$context["field"] == "customer_group")) {
                // line 309
                echo "\t\t\t\t  <tr>
\t\t\t\t\t<td>";
                // line 310
                echo twig_get_attribute($this->env, $this->source, $context, ("entry_field_" . $context["field"]), [], "any", false, false, false, 310);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 311
                echo $context["field"];
                echo "[display]\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 311), "display", [], "any", false, false, false, 311)) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\">NA</td>
\t\t\t\t\t<td class=\"text-center\">NA</td>
\t\t\t\t\t<td class=\"text-center\">NA</td>
\t\t\t\t\t<td><input type=\"text\" name=\"quickcheckout_field_";
                // line 315
                echo $context["field"];
                echo "[sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 315), "sort_order", [], "any", false, false, false, 315);
                echo "\" class=\"form-control\" /></td>
\t\t\t\t  </tr>
\t\t\t\t   ";
            } elseif (((            // line 317
$context["field"] == "register") || ($context["field"] == "newsletter"))) {
                echo " 
\t\t\t\t  <tr>
\t\t\t\t\t<td>";
                // line 319
                echo twig_get_attribute($this->env, $this->source, $context, ("entry_field_" . $context["field"]), [], "any", false, false, false, 319);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 320
                echo $context["field"];
                echo "[display]\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 320), "display", [], "any", false, false, false, 320)) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 321
                echo $context["field"];
                echo "[required]\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 321), "required", [], "any", false, false, false, 321)) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 322
                echo $context["field"];
                echo "[default]\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 322), "default", [], "any", false, false, false, 322)) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t<td class=\"text-center\">NA</td>
\t\t\t\t\t<td><input type=\"text\" name=\"quickcheckout_field_";
                // line 324
                echo $context["field"];
                echo "[sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 324), "sort_order", [], "any", false, false, false, 324);
                echo "\" class=\"form-control\" /></td>
\t\t\t\t  </tr>
\t\t\t\t  ";
            } else {
                // line 326
                echo "   
\t\t\t\t  <tr>
\t\t\t\t\t<td>";
                // line 328
                echo twig_get_attribute($this->env, $this->source, $context, ("entry_field_" . $context["field"]), [], "any", false, false, false, 328);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                // line 329
                echo $context["field"];
                echo "[display]\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 329), "display", [], "any", false, false, false, 329)) ? (" checked") : (""));
                echo " /></td>
\t\t\t\t\t";
                // line 330
                if (($context["field"] == "postcode")) {
                    echo " 
\t\t\t\t\t<td class=\"text-center\">NA</td>
\t\t\t\t\t";
                } else {
                    // line 332
                    echo "   
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"quickcheckout_field_";
                    // line 333
                    echo $context["field"];
                    echo "[required]\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 333), "required", [], "any", false, false, false, 333)) ? (" checked") : (""));
                    echo " /></td>
\t\t\t\t\t";
                }
                // line 335
                echo "\t\t\t\t\t<td>
\t\t\t\t\t  ";
                // line 336
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t    <span class=\"input-group-addon\"><img src=\"language/";
                    // line 338
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 338);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 338);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 338);
                    echo "\" /></span>
\t\t\t\t\t    <input type=\"text\" name=\"quickcheckout_field_";
                    // line 339
                    echo $context["field"];
                    echo "[default][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 339);
                    echo "]\" value=\"";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 339), "default", [], "any", false, false, false, 339)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 339)] ?? null) : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 342
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t  ";
                // line 344
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t    <span class=\"input-group-addon\"><img src=\"language/";
                    // line 346
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 346);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 346);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 346);
                    echo "\" /></span>
\t\t\t\t\t    <input type=\"text\" name=\"quickcheckout_field_";
                    // line 347
                    echo $context["field"];
                    echo "[placeholder][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 347);
                    echo "]\" value=\"";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 347), "placeholder", [], "any", false, false, false, 347)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 347)] ?? null) : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 350
                echo "\t\t\t\t\t</td>
\t\t\t\t\t";
                // line 351
                if (($context["field"] == "comment")) {
                    echo " 
\t\t\t\t\t<td class=\"text-center\">NA</td>
\t\t\t\t\t";
                } else {
                    // line 353
                    echo "   
\t\t\t\t\t<td><input type=\"text\" name=\"quickcheckout_field_";
                    // line 354
                    echo $context["field"];
                    echo "[sort_order]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("quickcheckout_field_" . $context["field"]), [], "any", false, false, false, 354), "sort_order", [], "any", false, false, false, 354);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t    ";
                }
                // line 356
                echo "\t\t\t\t  </tr>
\t\t\t\t  ";
            }
            // line 358
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 359
        echo "\t\t\t  </table>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-module\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-coupon\"><span title=\"";
        // line 364
        echo ($context["help_coupon"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_coupon"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_coupon\" id=\"input-coupon\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 367
        echo ((($context["quickcheckout_coupon"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 368
        echo ((($context["quickcheckout_coupon"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-voucher\"><span title=\"";
        // line 373
        echo ($context["help_voucher"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_voucher"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_voucher\" id=\"input-voucher\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 376
        echo ((($context["quickcheckout_voucher"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 377
        echo ((($context["quickcheckout_voucher"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-reward\"><span title=\"";
        // line 384
        echo ($context["help_reward"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_reward"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_reward\" id=\"input-reward\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 387
        echo ((($context["quickcheckout_reward"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 388
        echo ((($context["quickcheckout_reward"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-cart\"><span title=\"";
        // line 393
        echo ($context["help_cart"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_cart"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_cart\" id=\"input-cart\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 396
        echo ((($context["quickcheckout_cart"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 397
        echo ((($context["quickcheckout_cart"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-login-module\"><span title=\"";
        // line 404
        echo ($context["help_login_module"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_login_module"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_login_module\" id=\"input-login-module\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 407
        echo ((($context["quickcheckout_login_module"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 408
        echo ((($context["quickcheckout_login_module"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-html-header\"><span title=\"";
        // line 415
        echo ($context["help_html_header"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_html_header"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 419
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 419);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 419);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 419);
            echo "\" /></span>
\t\t\t\t\t\t<textarea name=\"quickcheckout_html_header[";
            // line 420
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 420);
            echo "]\" rows=\"7\" cols=\"30\" class=\"form-control\">";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["quickcheckout_html_header"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 420)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 422
        echo " 
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-html-footer\"><span title=\"";
        // line 426
        echo ($context["help_html_footer"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_html_footer"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 428
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 430
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 430);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 430);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 430);
            echo "\" /></span>
\t\t\t\t\t\t<textarea name=\"quickcheckout_html_footer[";
            // line 431
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 431);
            echo "]\" rows=\"7\" cols=\"30\" class=\"form-control\">";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["quickcheckout_html_footer"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 431)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 433
        echo " 
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-payment\">
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-payment-module\"><span title=\"";
        // line 441
        echo ($context["help_payment_module"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_payment_module"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_payment_module\" id=\"input-payment-module\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 444
        echo ((($context["quickcheckout_payment_module"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 445
        echo ((($context["quickcheckout_payment_module"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-payment-reload\"><span title=\"";
        // line 450
        echo ($context["help_payment_reload"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_payment_reload"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_payment_reload\" id=\"input-payment-reload\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 453
        echo ((($context["quickcheckout_payment_reload"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 454
        echo ((($context["quickcheckout_payment_reload"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-payment\"><span title=\"";
        // line 461
        echo ($context["help_payment"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_payment"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_payment\" id=\"input-payment\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 464
        echo ((($context["quickcheckout_payment"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_radio_type"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 465
        echo ((($context["quickcheckout_payment"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_select_type"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-payment-default\"><span title=\"";
        // line 470
        echo ($context["help_payment_default"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_payment_default"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_payment_default\" id=\"input-payment-default\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 473
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_module"]) {
            echo " 
\t\t\t\t\t  <option value=\"";
            // line 474
            echo twig_get_attribute($this->env, $this->source, $context["payment_module"], "code", [], "any", false, false, false, 474);
            echo "\"";
            echo (((($context["quickcheckout_payment_default"] ?? null) == twig_get_attribute($this->env, $this->source, $context["payment_module"], "code", [], "any", false, false, false, 474))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["payment_module"], "name", [], "any", false, false, false, 474);
            echo "</option>
\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 475
        echo " 
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <table class=\"table table-bordered table-striped table-hover\">
\t\t\t    <tr>
\t\t\t\t  <th></th>
\t\t\t\t  <th><span title=\"";
        // line 483
        echo ($context["help_payment_logo"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_payment_logo"] ?? null);
        echo " <i class=\"fa fa-question-circle\"></i></span></th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_module"]) {
            // line 486
            echo "\t\t\t\t<tr>
\t\t\t\t  <td>";
            // line 487
            echo twig_get_attribute($this->env, $this->source, $context["payment_module"], "name", [], "any", false, false, false, 487);
            echo "</td>
\t\t\t\t  <td><input type=\"text\" name=\"quickcheckout_payment_logo[";
            // line 488
            echo twig_get_attribute($this->env, $this->source, $context["payment_module"], "code", [], "any", false, false, false, 488);
            echo "]\" value=\"";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["quickcheckout_payment_logo"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["payment_module"], "code", [], "any", false, false, false, 488)] ?? null) : null);
            echo "\" class=\"form-control\" /></td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 490
        echo " 
\t\t\t\t<tr>
\t\t\t\t  <td colspan=\"2\" class=\"text-center\">";
        // line 492
        echo ($context["help_display_more"] ?? null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t  </table>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-shipping\">
\t\t\t  <div class=\"row\">
\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-shipping-module\"><span title=\"";
        // line 499
        echo ($context["help_shipping_module"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_shipping_module"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_shipping_module\" id=\"input-shipping-module\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 502
        echo ((($context["quickcheckout_shipping_module"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 503
        echo ((($context["quickcheckout_shipping_module"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-shipping-reload\"><span title=\"";
        // line 508
        echo ($context["help_shipping_reload"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_shipping_reload"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_shipping_reload\" id=\"input-shipping-reload\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 511
        echo ((($context["quickcheckout_shipping_reload"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 512
        echo ((($context["quickcheckout_shipping_reload"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-shipping\"><span title=\"";
        // line 519
        echo ($context["help_shipping"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_shipping"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_shipping\" id=\"input-shipping\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 522
        echo ((($context["quickcheckout_shipping"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_radio_type"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 523
        echo ((($context["quickcheckout_shipping"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_select_type"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-shipping-default\"><span title=\"";
        // line 528
        echo ($context["help_shipping_default"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_shipping_default"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_shipping_default\" id=\"input-shipping-default\" class=\"form-control\">
\t\t\t\t\t  ";
        // line 531
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_module"]) {
            echo " 
\t\t\t\t\t  <option value=\"";
            // line 532
            echo twig_get_attribute($this->env, $this->source, $context["shipping_module"], "code", [], "any", false, false, false, 532);
            echo "\"";
            echo (((($context["quickcheckout_shipping_default"] ?? null) == twig_get_attribute($this->env, $this->source, $context["shipping_module"], "code", [], "any", false, false, false, 532))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["shipping_module"], "name", [], "any", false, false, false, 532);
            echo "</option>
\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        echo " 
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <table class=\"table table-bordered table-striped table-hover\">
\t\t\t    <tr>
\t\t\t\t  <th></th>
\t\t\t\t  <th><span title=\"";
        // line 541
        echo ($context["help_shipping_logo"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_shipping_logo"] ?? null);
        echo " <i class=\"fa fa-question-circle\"></i></span></th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 543
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_module"]) {
            echo " 
\t\t\t\t<tr>
\t\t\t\t  <td>";
            // line 545
            echo twig_get_attribute($this->env, $this->source, $context["shipping_module"], "name", [], "any", false, false, false, 545);
            echo "</td>
\t\t\t\t  <td><input type=\"text\" name=\"quickcheckout_shipping_logo[";
            // line 546
            echo twig_get_attribute($this->env, $this->source, $context["shipping_module"], "code", [], "any", false, false, false, 546);
            echo "]\" value=\"";
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["quickcheckout_shipping_logo"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["shipping_module"], "code", [], "any", false, false, false, 546)] ?? null) : null);
            echo "\" class=\"form-control\" /></td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 548
        echo " 
\t\t\t\t<tr>
\t\t\t\t  <td colspan=\"2\" class=\"text-center\">";
        // line 550
        echo ($context["help_display_more"] ?? null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t  </table>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-survey\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-survey\">";
        // line 557
        echo ($context["entry_survey"] ?? null);
        echo "</label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_survey\" id=\"input-survey\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 560
        echo ((($context["quickcheckout_survey"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 561
        echo ((($context["quickcheckout_survey"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-survey-required\"><span title=\"";
        // line 566
        echo ($context["help_survey_required"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_survey_required"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_survey_required\" id=\"input-survey-required\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 569
        echo ((($context["quickcheckout_survey_required"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 570
        echo ((($context["quickcheckout_survey_required"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-survey-text\"><span title=\"";
        // line 577
        echo ($context["help_survey_text"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_survey_text"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 579
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 581
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 581);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 581);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 581);
            echo "\" /></span>
\t\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_survey_text[";
            // line 582
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 582);
            echo "]\" value=\"";
            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["quickcheckout_survey_text"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 582)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 584
        echo " 
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-survey-type\"><span title=\"";
        // line 588
        echo ($context["help_survey_type"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_survey_type"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_survey_type\" id=\"input-survey-type\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 591
        echo ((($context["quickcheckout_survey_type"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_select_type"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 592
        echo ((($context["quickcheckout_survey_type"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_text_type"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"table-responsive\">
\t\t\t\t<table id=\"survey-answer\" class=\"table table-hover table-bordered\">
\t\t\t\t  <thead>
\t\t\t\t  <tr>
\t\t\t\t\t<td class=\"text-left\" colspan=\"2\">";
        // line 601
        echo ($context["entry_survey_answer"] ?? null);
        echo "</td>
\t\t\t\t  </tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t  ";
        // line 605
        $context["survey_answer_row"] = 0;
        // line 606
        echo "\t\t\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quickcheckout_survey_answers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["survey_answer"]) {
            echo " 
\t\t\t\t  <tr id=\"survey-answer-";
            // line 607
            echo ($context["survey_answer_row"] ?? null);
            echo "\">
\t\t\t\t\t<td class=\"text-left\">";
            // line 608
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 609
                echo "\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 610
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 610);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 610);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 610);
                echo "\" /></span>
\t\t\t\t\t\t<input type=\"text-text\" name=\"quickcheckout_survey_answers[";
                // line 611
                echo ($context["survey_answer_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 611);
                echo "]\" value=\"";
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["survey_answer"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 611)] ?? null) : null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 613
            echo "</td>
\t\t\t\t\t<td class=\"text-right\"><a class=\"btn btn-danger\" onClick=\"\$('#survey-answer-";
            // line 614
            echo ($context["survey_answer_row"] ?? null);
            echo "').remove();\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t\t\t";
            // line 615
            $context["survey_answer_row"] = (($context["survey_answer_row"] ?? null) + 1);
            echo " 
\t\t\t\t  </tr>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey_answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 617
        echo " 
\t\t\t\t  </tbody>
\t\t\t\t  <tfoot>
\t\t\t\t  <tr>
\t\t\t\t\t<td class=\"text-right\" colspan=\"2\"><a class=\"btn btn-success\" onClick=\"addAnswer();\">";
        // line 621
        echo ($context["button_add"] ?? null);
        echo "</a></td>
\t\t\t\t  </tr>
\t\t\t\t  </tfoot>
\t\t\t\t</table>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-delivery\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery\"><span title=\"";
        // line 630
        echo ($context["help_delivery"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_delivery"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_delivery\" id=\"input-delivery\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 633
        echo ((($context["quickcheckout_delivery"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 634
        echo ((($context["quickcheckout_delivery"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-time\"><span title=\"";
        // line 639
        echo ($context["help_delivery_time"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_delivery_time"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_delivery_time\" id=\"input-delivery-time\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 642
        echo (((($context["quickcheckout_delivery_time"] ?? null) == 1)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_choose"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"2\"";
        // line 643
        echo (((($context["quickcheckout_delivery_time"] ?? null) == 2)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_estimate"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"3\"";
        // line 644
        echo (((($context["quickcheckout_delivery_time"] ?? null) == 3)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_select_type"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 645
        echo (((($context["quickcheckout_delivery_time"] ?? null) == 0)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-required\"><span title=\"";
        // line 652
        echo ($context["help_delivery_required"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_delivery_required"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_delivery_required\" id=\"input-delivery-required\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 655
        echo ((($context["quickcheckout_delivery_required"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 656
        echo ((($context["quickcheckout_delivery_required"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-unavailable\"><span title=\"";
        // line 661
        echo ($context["help_delivery_unavailable"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_delivery_unavailable"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<textarea name=\"quickcheckout_delivery_unavailable\" rows=\"5\" class=\"form-control\">";
        // line 663
        echo ($context["quickcheckout_delivery_unavailable"] ?? null);
        echo "</textarea>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-min\"><span title=\"";
        // line 669
        echo ($context["help_delivery_min"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_delivery_min"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_min\" value=\"";
        // line 671
        echo ($context["quickcheckout_delivery_min"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-max\"><span title=\"";
        // line 675
        echo ($context["help_delivery_max"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_delivery_max"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_max\" value=\"";
        // line 677
        echo ($context["quickcheckout_delivery_max"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-min-hour\"><span title=\"";
        // line 683
        echo ($context["help_delivery_min_hour"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_delivery_min_hour"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_min_hour\" value=\"";
        // line 685
        echo ($context["quickcheckout_delivery_min_hour"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-max-hour\"><span title=\"";
        // line 689
        echo ($context["help_delivery_max_hour"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_delivery_max_hour"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_max_hour\" value=\"";
        // line 691
        echo ($context["quickcheckout_delivery_max_hour"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-delivery-days-of-week\"><span title=\"";
        // line 697
        echo ($context["help_delivery_days_of_week"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_delivery_days_of_week"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_days_of_week\" value=\"";
        // line 699
        echo ($context["quickcheckout_delivery_days_of_week"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"table-responsive\">
\t\t\t\t<table id=\"delivery-time\" class=\"table table-bordered table-hover\">
\t\t\t\t  <thead>
\t\t\t\t  <tr>
\t\t\t\t\t<td class=\"text-left\" colspan=\"2\">";
        // line 707
        echo ($context["entry_delivery_times"] ?? null);
        echo "</td>
\t\t\t\t  </tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t  ";
        // line 711
        $context["delivery_time_row"] = 0;
        // line 712
        echo "\t\t\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quickcheckout_delivery_times"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["delivery_time"]) {
            echo " 
\t\t\t\t  <tr id=\"delivery-time-";
            // line 713
            echo ($context["delivery_time_row"] ?? null);
            echo "\">
\t\t\t\t    <td class=\"text-left\">";
            // line 714
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 716
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 716);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 716);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 716);
                echo "\" /></span>
\t\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_delivery_times[";
                // line 717
                echo ($context["delivery_time_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 717);
                echo "]\" value=\"";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["delivery_time"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 717)] ?? null) : null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t  </div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 719
            echo "</td>
\t\t\t\t\t<td class=\"text-right\"><a class=\"btn btn-danger\" onClick=\"\$('#delivery-time-";
            // line 720
            echo ($context["delivery_time_row"] ?? null);
            echo "').remove();\">";
            echo ($context["button_remove"] ?? null);
            echo "</a></td>
\t\t\t\t\t";
            // line 721
            $context["delivery_time_row"] = (($context["delivery_time_row"] ?? null) + 1);
            echo " 
\t\t\t\t  </tr>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery_time'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 723
        echo " 
\t\t\t\t  </tbody>
\t\t\t\t  <tfoot>
\t\t\t\t  <tr>
\t\t\t\t    <td class=\"text-right\" colspan=\"2\"><a class=\"btn btn-success\" onClick=\"addTime();\">";
        // line 727
        echo ($context["button_add"] ?? null);
        echo "</a></td>
\t\t\t\t  </tr>
\t\t\t\t  </tfoot>
\t\t\t\t</table>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-countdown\">
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-countdown\"><span title=\"";
        // line 736
        echo ($context["help_countdown"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_countdown"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_countdown\" id=\"input-countdown\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 739
        echo ((($context["quickcheckout_countdown"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 740
        echo ((($context["quickcheckout_countdown"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-countdown-start\"><span title=\"";
        // line 745
        echo ($context["help_countdown_start"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_countdown_start"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<select name=\"quickcheckout_countdown_start\" id=\"input-countdown-start\" class=\"form-control\">
\t\t\t\t\t  <option value=\"1\"";
        // line 748
        echo ((($context["quickcheckout_countdown_start"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_day"] ?? null);
        echo "</option>
\t\t\t\t\t  <option value=\"0\"";
        // line 749
        echo ((($context["quickcheckout_countdown_start"] ?? null)) ? ("") : (" selected=\"selected\""));
        echo ">";
        echo ($context["text_specific"] ?? null);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\" id=\"countdown-date\">
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-countdown-date-start\"><span title=\"";
        // line 756
        echo ($context["help_countdown_date_start"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_countdown_date_start"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_countdown_date_start\" value=\"";
        // line 758
        echo ($context["quickcheckout_countdown_date_start"] ?? null);
        echo "\" class=\"date form-control\" data-date-format=\"YYYY-MM-DD HH:mm:ss\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t  <label class=\"col-sm-4 control-label\" for=\"input-countdown-date-end\"><span title=\"";
        // line 762
        echo ($context["help_countdown_date_end"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_countdown_date_end"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_countdown_date_end\" value=\"";
        // line 764
        echo ($context["quickcheckout_countdown_date_end"] ?? null);
        echo "\" class=\"date form-control\" data-date-format=\"YYYY-MM-DD HH:mm:ss\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\" id=\"countdown-time\">
\t\t\t\t<div class=\"form-group col-sm-12\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-countdown-time\"><span title=\"";
        // line 770
        echo ($context["help_countdown_time"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_countdown_time"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" name=\"quickcheckout_countdown_time\" value=\"";
        // line 772
        echo ($context["quickcheckout_countdown_time"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"form-group col-sm-12\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-countdown-text\"><span title=\"";
        // line 778
        echo ($context["help_countdown_text"] ?? null);
        echo "\" data-toggle=\"tooltip\">";
        echo ($context["entry_countdown_text"] ?? null);
        echo "</span></label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t";
        // line 780
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t    <span class=\"input-group-addon\"><img src=\"language/";
            // line 782
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 782);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 782);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 782);
            echo "\" /></span>
\t\t\t\t\t\t<textarea name=\"quickcheckout_countdown_text[";
            // line 783
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 783);
            echo "]\" class=\"form-control\" rows=\"5\">";
            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["quickcheckout_countdown_text"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 783)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 785
        echo " 
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane text-center\" id=\"tab-analytics\">
\t\t\t  ";
        // line 791
        if (($context["analytics"] ?? null)) {
            echo " 
\t\t\t  <a href=\"";
            // line 792
            echo ($context["analytics"] ?? null);
            echo "\" class=\"btn btn-lg btn-success\">Recover Abandoned Cart</a>
\t\t\t  ";
        } else {
            // line 793
            echo "   
\t\t\t  <p>";
            // line 794
            echo ($context["text_purchase_analytics"] ?? null);
            echo "</p>
\t\t\t  <a href=\"https://www.marketinsg.com/recover-abandoned-carts\" class=\"btn btn-lg btn-warning\" target=\"_blank\">More Information</a>
\t\t\t  ";
        }
        // line 797
        echo "\t\t\t</div>
\t\t\t";
        // line 798
        echo ($context["tab"] ?? null);
        echo "
\t\t  </div>
\t\t</form>
      </div>
    </div>
  </div>
</div>
<style type=\"text/css\">
.form-group + .form-group {
\tborder: none;
}
</style>
<script type=\"text/javascript\"><!--
function show(element) {
\t\$(element).tab('show');
\t
\t\$('a[href=\\'' + element + '\\']').parent('li').siblings().removeClass('active');
\t
\t\$('a[href=\\'' + element + '\\']').parent('li').addClass('active');
\t
\treturn false;
}

\$(document).ready(function() {
\t\$('.date').datetimepicker();
});

\$('select[name=\\'quickcheckout_field_country[default]\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/quickcheckout/country";
        // line 827
        echo ($context["equotix_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',\t\t
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 830
        echo ($context["text_select"] ?? null);
        echo "</option>';
\t\t\t
\t\t\tif (json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
        \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
\t    \t\t\t
\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 836
        echo twig_get_attribute($this->env, $this->source, ($context["quickcheckout_field_zone"] ?? null), "default", [], "any", false, false, false, 836);
        echo "') {
\t      \t\t\t\thtml += ' selected=\"selected\"';
\t    \t\t\t}
\t
\t    \t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 843
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}
\t\t\t
\t\t\t\$('select[name=\\'quickcheckout_field_zone[default]\\']').html(html);
\t\t}
\t});
});

\$('select[name=\\'quickcheckout_field_country[default]\\']').trigger('change');

\$('select[name=\\'quickcheckout_countdown_start\\']').change(function() {
\tif (\$('select[name=\\'quickcheckout_countdown_start\\']').val() == '1') {
\t\t\$('#countdown-time').fadeIn();
\t\t\$('#countdown-date').fadeOut();
\t} else {
\t\t\$('#countdown-date').fadeIn();
\t\t\$('#countdown-time').fadeOut();
\t}
});

\$('select[name=\\'quickcheckout_countdown_start\\']').trigger('change');

\$('select[name=\\'quickcheckout_survey_type\\']').change(function() {
\tif (\$('select[name=\\'quickcheckout_survey_type\\']').val() == '1') {
\t\t\$('#survey-answer').fadeIn();
\t} else {
\t\t\$('#survey-answer').fadeOut();
\t}
});

\$('select[name=\\'quickcheckout_survey_type\\']').trigger('change');

var survey_answer_row = ";
        // line 875
        echo ($context["survey_answer_row"] ?? null);
        echo " ;

function addAnswer() {
\thtml  = '<tr id=\"survey-answer-' + survey_answer_row + '\">';
\thtml += '  <td class=\"left\">';
\t";
        // line 880
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\thtml += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            // line 881
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 881);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 881);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 881);
            echo "\" /></span>';
\thtml += '<input type=\"text-text\" name=\"quickcheckout_survey_answers[' + survey_answer_row + '][";
            // line 882
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 882);
            echo "]\" value=\"\" class=\"form-control\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 884
        echo " 
\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><a class=\"btn btn-danger\" onClick=\"\$(\\'#survey-answer-' + survey_answer_row + '\\').remove();\">";
        // line 886
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\thtml += '</tr>';
\t
\t\$('#survey-answer tbody').append(html);
\t
\tsurvey_answer_row++;
}

\$('select[name=\\'quickcheckout_delivery_time\\']').change(function() {
\tif (\$('select[name=\\'quickcheckout_delivery_time\\']').val() == '3') {
\t\t\$('#delivery-time').fadeIn();
\t} else {
\t\t\$('#delivery-time').fadeOut();
\t}
});

\$('select[name=\\'quickcheckout_delivery_time\\']').trigger('change');

var delivery_time_row = ";
        // line 904
        echo ($context["delivery_time_row"] ?? null);
        echo " ;

function addTime() {
\thtml  = '<tr id=\"delivery-time-' + delivery_time_row + '\">';
\thtml += '  <td class=\"left\">';
\t";
        // line 909
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\thtml += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            // line 910
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 910);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 910);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 910);
            echo "\" /></span>';
\thtml += '<input type=\"text\" name=\"quickcheckout_delivery_times[' + delivery_time_row + '][";
            // line 911
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 911);
            echo "]\" value=\"\" class=\"form-control\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 913
        echo " 
\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><a class=\"btn btn-danger\" onClick=\"\$(\\'#delivery-time-' + delivery_time_row + '\\').remove();\">";
        // line 915
        echo ($context["button_remove"] ?? null);
        echo "</a></td>';
\thtml += '</tr>';
\t
\t\$('#delivery-time tbody').append(html);
\t
\tdelivery_time_row++;
}

function store() {
\tlocation = 'index.php?route=extension/module/quickcheckout";
        // line 924
        echo ($context["equotix_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\']').val();
}
//--></script>
";
        // line 927
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/quickcheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2371 => 927,  2365 => 924,  2353 => 915,  2349 => 913,  2340 => 911,  2332 => 910,  2326 => 909,  2318 => 904,  2297 => 886,  2293 => 884,  2284 => 882,  2276 => 881,  2270 => 880,  2262 => 875,  2227 => 843,  2217 => 836,  2208 => 830,  2202 => 827,  2170 => 798,  2167 => 797,  2161 => 794,  2158 => 793,  2153 => 792,  2149 => 791,  2141 => 785,  2130 => 783,  2122 => 782,  2115 => 780,  2108 => 778,  2099 => 772,  2092 => 770,  2083 => 764,  2076 => 762,  2069 => 758,  2062 => 756,  2050 => 749,  2044 => 748,  2036 => 745,  2026 => 740,  2020 => 739,  2012 => 736,  2000 => 727,  1994 => 723,  1985 => 721,  1979 => 720,  1976 => 719,  1963 => 717,  1955 => 716,  1948 => 714,  1944 => 713,  1937 => 712,  1935 => 711,  1928 => 707,  1917 => 699,  1910 => 697,  1901 => 691,  1894 => 689,  1887 => 685,  1880 => 683,  1871 => 677,  1864 => 675,  1857 => 671,  1850 => 669,  1841 => 663,  1834 => 661,  1824 => 656,  1818 => 655,  1810 => 652,  1798 => 645,  1792 => 644,  1786 => 643,  1780 => 642,  1772 => 639,  1762 => 634,  1756 => 633,  1748 => 630,  1736 => 621,  1730 => 617,  1721 => 615,  1715 => 614,  1712 => 613,  1699 => 611,  1691 => 610,  1688 => 609,  1684 => 608,  1680 => 607,  1673 => 606,  1671 => 605,  1664 => 601,  1650 => 592,  1644 => 591,  1636 => 588,  1630 => 584,  1619 => 582,  1611 => 581,  1604 => 579,  1597 => 577,  1585 => 570,  1579 => 569,  1571 => 566,  1561 => 561,  1555 => 560,  1549 => 557,  1539 => 550,  1535 => 548,  1524 => 546,  1520 => 545,  1513 => 543,  1506 => 541,  1496 => 533,  1484 => 532,  1478 => 531,  1470 => 528,  1460 => 523,  1454 => 522,  1446 => 519,  1434 => 512,  1428 => 511,  1420 => 508,  1410 => 503,  1404 => 502,  1396 => 499,  1386 => 492,  1382 => 490,  1371 => 488,  1367 => 487,  1364 => 486,  1360 => 485,  1353 => 483,  1343 => 475,  1331 => 474,  1325 => 473,  1317 => 470,  1307 => 465,  1301 => 464,  1293 => 461,  1281 => 454,  1275 => 453,  1267 => 450,  1257 => 445,  1251 => 444,  1243 => 441,  1233 => 433,  1222 => 431,  1214 => 430,  1207 => 428,  1200 => 426,  1194 => 422,  1183 => 420,  1175 => 419,  1168 => 417,  1161 => 415,  1149 => 408,  1143 => 407,  1135 => 404,  1123 => 397,  1117 => 396,  1109 => 393,  1099 => 388,  1093 => 387,  1085 => 384,  1073 => 377,  1067 => 376,  1059 => 373,  1049 => 368,  1043 => 367,  1035 => 364,  1028 => 359,  1022 => 358,  1018 => 356,  1011 => 354,  1008 => 353,  1002 => 351,  999 => 350,  986 => 347,  978 => 346,  971 => 344,  967 => 342,  954 => 339,  946 => 338,  939 => 336,  936 => 335,  929 => 333,  926 => 332,  920 => 330,  914 => 329,  910 => 328,  906 => 326,  898 => 324,  891 => 322,  885 => 321,  879 => 320,  875 => 319,  870 => 317,  863 => 315,  854 => 311,  850 => 310,  847 => 309,  845 => 308,  838 => 306,  833 => 304,  827 => 303,  821 => 302,  817 => 301,  812 => 299,  805 => 297,  801 => 295,  795 => 294,  788 => 292,  785 => 291,  777 => 290,  775 => 289,  769 => 288,  765 => 287,  761 => 286,  755 => 285,  749 => 284,  745 => 283,  740 => 281,  734 => 280,  729 => 278,  725 => 277,  721 => 276,  717 => 275,  713 => 274,  701 => 265,  696 => 263,  686 => 258,  680 => 257,  672 => 254,  660 => 247,  654 => 246,  646 => 243,  636 => 238,  630 => 237,  624 => 236,  616 => 233,  604 => 226,  598 => 225,  590 => 222,  580 => 217,  574 => 216,  566 => 213,  556 => 205,  545 => 203,  537 => 202,  530 => 200,  523 => 198,  514 => 192,  507 => 190,  497 => 185,  491 => 184,  483 => 181,  471 => 174,  465 => 173,  457 => 170,  447 => 165,  441 => 164,  433 => 161,  421 => 154,  415 => 153,  407 => 150,  397 => 145,  391 => 144,  383 => 141,  371 => 134,  365 => 133,  357 => 130,  347 => 125,  341 => 124,  333 => 121,  324 => 115,  317 => 113,  307 => 108,  301 => 107,  293 => 104,  280 => 94,  272 => 89,  266 => 86,  260 => 83,  252 => 78,  246 => 75,  240 => 72,  232 => 67,  226 => 64,  220 => 61,  211 => 55,  207 => 54,  203 => 53,  199 => 52,  195 => 51,  191 => 50,  187 => 49,  183 => 48,  179 => 47,  175 => 46,  171 => 45,  167 => 44,  162 => 42,  156 => 39,  149 => 34,  137 => 33,  131 => 32,  125 => 31,  120 => 29,  116 => 27,  109 => 24,  105 => 23,  102 => 22,  95 => 19,  91 => 18,  84 => 13,  74 => 12,  68 => 11,  63 => 9,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/quickcheckout.twig", "");
    }
}
