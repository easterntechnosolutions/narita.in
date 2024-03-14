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

/* extension/module/manageawb.twig */
class __TwigTemplate_9bb90d76f1f0d001c2708ebf07424f8be6be35ea44fc570f986aab9726eb6784 extends \Twig\Template
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

\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"";
        // line 8
        echo ($context["download_awb"] ?? null);
        echo "\">
\t\t\t\t\t<button data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_download_awb"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i>&nbsp; ";
        echo ($context["button_download_awb"] ?? null);
        echo "</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t    <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t    <ul class=\"breadcrumb\">
\t\t\t  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "\t\t\t  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t    </ul>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 28
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 32
        echo "\t\t
\t\t
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 36
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 39
        echo ($context["filter_action"] ?? null);
        echo "\" method=\"get\" enctype=\"multipart/form-data\" id=\"filter_forms\">
\t\t\t\t\t<input type=\"hidden\" name=\"route\" value=\"extension/module/manageawb\" />
\t\t\t\t\t<input type=\"hidden\" name=\"user_token\" value=\"";
        // line 41
        echo ($context["user_token"] ?? null);
        echo "\" />
\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-awb\">";
        // line 46
        echo ($context["column_awb"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_awb\" value=\"";
        // line 47
        echo ($context["filter_awb"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_awb"] ?? null);
        echo "\" id=\"input-awb\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-shipment_id\">";
        // line 52
        echo ($context["column_shipment_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_shipment_id\" value=\"";
        // line 53
        echo ($context["filter_shipment_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_shipment_id"] ?? null);
        echo "\" id=\"input-shipment_id\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-shipment_to\">";
        // line 58
        echo ($context["column_shipment_to"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_shipment_to\" value=\"";
        // line 59
        echo ($context["filter_shipment_to"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_shipment_to"] ?? null);
        echo "\" id=\"input-shipment_to\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-state\">";
        // line 65
        echo ($context["column_state"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<select name=\"filter_state\" id=\"input-state\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data_state"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manage_state"]) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["filter_state"] ?? null) == twig_get_attribute($this->env, $this->source, $context["manage_state"], "values", [], "any", false, false, false, 69))) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manage_state"], "values", [], "any", false, false, false, 70);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["manage_state"], "label", [], "any", false, false, false, 70);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manage_state"], "values", [], "any", false, false, false, 72);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["manage_state"], "label", [], "any", false, false, false, 72);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manage_state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-status\">";
        // line 80
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data_status"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manage_status"]) {
            // line 84
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["filter_status"] ?? null) == twig_get_attribute($this->env, $this->source, $context["manage_status"], "values", [], "any", false, false, false, 84))) {
                // line 85
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manage_status"], "values", [], "any", false, false, false, 85);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["manage_status"], "values", [], "any", false, false, false, 85);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 87
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manage_status"], "values", [], "any", false, false, false, 87);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["manage_status"], "values", [], "any", false, false, false, 87);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manage_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-status_type\">";
        // line 95
        echo ($context["column_status_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<select name=\"filter_status_type\" id=\"input-status_type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data_status_type"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manage_stype"]) {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["filter_status_type"] ?? null) == twig_get_attribute($this->env, $this->source, $context["manage_stype"], "values", [], "any", false, false, false, 100))) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manage_stype"], "values", [], "any", false, false, false, 101);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["manage_stype"], "values", [], "any", false, false, false, 101);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 103
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manage_stype"], "values", [], "any", false, false, false, 103);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["manage_stype"], "values", [], "any", false, false, false, 103);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manage_stype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-orderid\">";
        // line 112
        echo ($context["column_orderid"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_order_increment_id\" value=\"";
        // line 113
        echo ($context["filter_order_increment_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_orderid"] ?? null);
        echo "\" id=\"input-orderid\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
        // line 120
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"";
        // line 123
        echo ($context["reset_filter"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">Reset Filter</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 134
        echo ($context["massaction"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-manageawbs\" target=\"\">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<select name=\"massactions\" id=\"input-massactions\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Actions</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"submit_manifest\">";
        // line 142
        echo ($context["text_submit_manifest"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"update_awb_status\">";
        // line 143
        echo ($context["text_update_awb_status"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"cancel_package\">";
        // line 144
        echo ($context["text_cancel_package"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"print_shipping_label\">";
        // line 145
        echo ($context["text_print_shipping_label"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3 manifestsLocation\" style=\"display:none;\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<select name=\"manifest_location\" id=\"manifest_location\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Location</option>
\t\t\t\t\t\t\t\t\t\t";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["location_datas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["loct"]) {
            // line 154
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loct"], "values", [], "any", false, false, false, 154);
            echo "\" >";
            echo twig_get_attribute($this->env, $this->source, $context["loct"], "label", [], "any", false, false, false, 154);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-submit\" class=\"btn btn-primary massactionBtn\"><i class=\"fa fa-save\"></i> Submit </button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t  <div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t";
        // line 174
        if ((($context["sort"] ?? null) == "entity_id")) {
            // line 175
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_entity_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_entity_id"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 177
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_entity_id"] ?? null);
            echo "\">";
            echo ($context["column_entity_id"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 179
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 180
        echo ($context["column_awb"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 181
        echo ($context["column_shipment_id"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 182
        echo ($context["column_shipment_to"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 183
        echo ($context["column_state"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 184
        echo ($context["column_status"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 185
        echo ($context["column_status_type"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 186
        echo ($context["column_orderid"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 187
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t\t";
        // line 191
        if (($context["delhiveryLastmile_manageAwb"] ?? null)) {
            // line 192
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["delhiveryLastmile_manageAwb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manage_awb"]) {
                // line 193
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t";
                // line 195
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["manage_awb"], "entity_id", [], "any", false, false, false, 195), ($context["selected"] ?? null))) {
                    // line 196
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manage_awb"], "entity_id", [], "any", false, false, false, 196);
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 198
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manage_awb"], "entity_id", [], "any", false, false, false, 198);
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                }
                // line 200
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 201
                echo twig_get_attribute($this->env, $this->source, $context["manage_awb"], "entity_id", [], "any", false, false, false, 201);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["manage_awb"], "awb", [], "any", false, false, false, 202);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 203
                echo twig_get_attribute($this->env, $this->source, $context["manage_awb"], "shipment_id", [], "any", false, false, false, 203);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["manage_awb"], "shipment_to", [], "any", false, false, false, 204);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["manage_awb"], "state", [], "any", false, false, false, 205);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["manage_awb"], "status", [], "any", false, false, false, 206);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["manage_awb"], "status_type", [], "any", false, false, false, 207);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 208
                echo twig_get_attribute($this->env, $this->source, $context["manage_awb"], "order_increment_id", [], "any", false, false, false, 208);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 210
                echo twig_get_attribute($this->env, $this->source, $context["manage_awb"], "edit", [], "any", false, false, false, 210);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manage_awb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 215
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t  <td class=\"text-center\" colspan=\"10\">";
            // line 216
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 219
        echo "\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t  </div>
\t\t\t\t\t</form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 224
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 225
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- onclick=\"confirm('";
        // line 233
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-mpblogcategory').submit() : false;\" -->
<script type=\"text/javascript\"><!--
\$('#input-massactions').on('change', function() {
if(\$('#input-massactions').val()=='print_shipping_label'){
\t\t\$('#form-manageawbs').attr(\"target\",\"_blank\");
\t}else{
\t\t\$('#form-manageawbs').attr(\"target\",\"\");
\t}
\tif(\$(this).val()=='submit_manifest'){
\t\t\$(\".manifestsLocation\").show();
\t\t\$(\"#manifest_location\").val(\"\");
\t}else{
\t\t\$(\".manifestsLocation\").hide();
\t\t\$(\"#manifest_location\").val(\"\");
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.massactionBtn').on('click', function() {

\t
\tif(\$('#input-massactions').val()=='submit_manifest'){
\t\tif(\$(\"#manifest_location\").val()){
\t\t\t\$('#form-manageawbs').submit();
\t\t}else{
\t\t\talert(\"Please select location.\");
\t\t}
\t}else if(\$('#input-massactions').val()){
\t\t\$('#form-manageawbs').submit();
\t}else{
\t\talert(\"Please select action.\");
\t}
});
//--></script>
";
        // line 267
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/manageawb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 267,  574 => 233,  563 => 225,  559 => 224,  552 => 219,  546 => 216,  543 => 215,  540 => 214,  528 => 210,  523 => 208,  519 => 207,  515 => 206,  511 => 205,  507 => 204,  503 => 203,  499 => 202,  495 => 201,  492 => 200,  486 => 198,  480 => 196,  478 => 195,  474 => 193,  469 => 192,  467 => 191,  460 => 187,  456 => 186,  452 => 185,  448 => 184,  444 => 183,  440 => 182,  436 => 181,  432 => 180,  429 => 179,  421 => 177,  411 => 175,  409 => 174,  389 => 156,  378 => 154,  374 => 153,  363 => 145,  359 => 144,  355 => 143,  351 => 142,  340 => 134,  326 => 123,  320 => 120,  308 => 113,  304 => 112,  296 => 106,  290 => 105,  282 => 103,  274 => 101,  271 => 100,  267 => 99,  260 => 95,  253 => 90,  247 => 89,  239 => 87,  231 => 85,  228 => 84,  224 => 83,  218 => 80,  211 => 75,  205 => 74,  197 => 72,  189 => 70,  186 => 69,  182 => 68,  176 => 65,  165 => 59,  161 => 58,  151 => 53,  147 => 52,  137 => 47,  133 => 46,  125 => 41,  120 => 39,  114 => 36,  108 => 32,  100 => 28,  97 => 27,  89 => 23,  87 => 22,  80 => 17,  69 => 15,  65 => 14,  60 => 12,  52 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/manageawb.twig", "");
    }
}
