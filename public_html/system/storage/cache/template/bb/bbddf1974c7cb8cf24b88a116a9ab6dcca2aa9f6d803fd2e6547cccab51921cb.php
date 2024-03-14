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

/* extension/module/delhivery_lastmile.twig */
class __TwigTemplate_98778a8552bf4ddb87d53e15e6e48f7ef04c941d87bc4e1e08a91fdeac46d0d0 extends \Twig\Template
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
            <button type=\"submit\" form=\"form-convead\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
            <a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
\t\t    <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t    <ul class=\"breadcrumb\">
\t\t\t  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "\t\t\t  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t    </ul>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t<!-- ";
        // line 20
        if ((($context["curl_exec"] ?? null) == false)) {
            // line 21
            echo "\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t<i class=\"fa fa-check-circle\"></i>
\t\t\t\t";
            // line 23
            echo ($context["curl_disable"] ?? null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 25
        echo " -->
\t\t";
        // line 26
        if (($context["error_warning"] ?? null)) {
            // line 27
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 31
        echo "\t\t";
        if (($context["success_msg"] ?? null)) {
            // line 32
            echo "\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success_msg"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 36
        echo "\t\t
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 39
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 42
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-convead\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 44
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"delhivery_lastmile_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 47
        if (($context["delhivery_lastmile_status"] ?? null)) {
            // line 48
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 49
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 52
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-is_production\">";
        // line 59
        echo ($context["entry_is_production"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"delhivery_lastmile_is_production\" id=\"input-is_production\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 62
        if (($context["delhivery_lastmile_is_production"] ?? null)) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 64
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 67
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-method_name\">";
        // line 73
        echo ($context["entry_method_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_method_name\" id=\"input-method_name\" class=\"form-control\" type=\"text\" value=\"";
        // line 75
        echo ($context["delhivery_lastmile_method_name"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-carrier_title\">";
        // line 80
        echo ($context["entry_carrier_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_carrier_title\" id=\"input-carrier_title\" class=\"form-control\" type=\"text\" value=\"";
        // line 82
        echo ($context["delhivery_lastmile_carrier_title"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-login_id\">";
        // line 87
        echo ($context["entry_login_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_login_id\" id=\"input-login_id\" class=\"form-control\" type=\"text\" value=\"";
        // line 89
        echo ($context["delhivery_lastmile_login_id"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-client_id\">";
        // line 94
        echo ($context["entry_client_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_client_id\" id=\"input-client_id\" class=\"form-control\" type=\"text\" value=\"";
        // line 96
        echo ($context["delhivery_lastmile_client_id"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-license_key\">";
        // line 100
        echo ($context["entry_license_key"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_license_key\" id=\"input-license_key\" class=\"form-control\" type=\"text\" value=\"";
        // line 102
        echo ($context["delhivery_lastmile_license_key"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-auto_manifest\">";
        // line 107
        echo ($context["entry_auto_manifest"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"delhivery_lastmile_auto_manifest\" id=\"input-auto_manifest\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 110
        if (($context["delhivery_lastmile_auto_manifest"] ?? null)) {
            // line 111
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 112
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 114
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 115
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 117
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-debug_mode\">";
        // line 121
        echo ($context["entry_debug_mode"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"delhivery_lastmile_debug_mode\" id=\"input-debug_mode\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 124
        if (($context["delhivery_lastmile_debug_mode"] ?? null)) {
            // line 125
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 126
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 128
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 129
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 131
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-error_message\">";
        // line 137
        echo ($context["entry_error_message"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_error_message\" id=\"input-error_message\" class=\"form-control\" type=\"text\" value=\"";
        // line 139
        echo ($context["delhivery_lastmile_error_message"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t-->
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-cod_method\">";
        // line 144
        echo ($context["entry_cod_method"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_cod_method\" id=\"input-cod_method\" class=\"form-control\" type=\"text\" value=\"";
        // line 146
        echo ($context["delhivery_lastmile_cod_method"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-return_address\">";
        // line 151
        echo ($context["entry_return_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_return_address\" id=\"input-return_address\" class=\"form-control\" type=\"text\" value=\"";
        // line 153
        echo ($context["delhivery_lastmile_return_address"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"entry-store_name\"> Store Name </label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_store_name\" id=\"entry-store_name\" class=\"form-control\" type=\"text\" value=\"";
        // line 160
        echo ($context["delhivery_lastmile_store_name"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-store_address\"> Store Address</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_store_address\" id=\"input-store_address\" class=\"form-control\" type=\"text\" value=\"";
        // line 167
        echo ($context["delhivery_lastmile_store_address"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-gst_no\">";
        // line 172
        echo ($context["entry_gst_no"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_gst_no\" id=\"input-gst_no\" class=\"form-control\" type=\"text\" value=\"";
        // line 174
        echo ($context["delhivery_lastmile_gst_no"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-consignee_tin\">";
        // line 179
        echo ($context["entry_consignee_tin"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_consignee_tin\" id=\"input-consignee_tin\" class=\"form-control\" type=\"text\" value=\"";
        // line 181
        echo ($context["delhivery_lastmile_consignee_tin"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-cst_no\">";
        // line 186
        echo ($context["entry_cst_no"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_cst_no\" id=\"input-cst_no\" class=\"form-control\" type=\"text\" value=\"";
        // line 188
        echo ($context["delhivery_lastmile_cst_no"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sale_tax_form\">";
        // line 193
        echo ($context["entry_sale_tax_form"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_sale_tax_form\" id=\"input-sale_tax_form\" class=\"form-control\" type=\"text\" value=\"";
        // line 195
        echo ($context["delhivery_lastmile_sale_tax_form"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-heavy_shipment\">";
        // line 200
        echo ($context["entry_heavy_shipment"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"delhivery_lastmile_heavy_shipment\" id=\"input-heavy_shipment\" class=\"form-control\" type=\"text\" value=\"";
        // line 202
        echo ($context["delhivery_lastmile_heavy_shipment"] ?? null);
        echo "\">                
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

</div>

";
        // line 214
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/delhivery_lastmile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 214,  456 => 202,  451 => 200,  443 => 195,  438 => 193,  430 => 188,  425 => 186,  417 => 181,  412 => 179,  404 => 174,  399 => 172,  391 => 167,  381 => 160,  371 => 153,  366 => 151,  358 => 146,  353 => 144,  345 => 139,  340 => 137,  332 => 131,  327 => 129,  322 => 128,  317 => 126,  312 => 125,  310 => 124,  304 => 121,  298 => 117,  293 => 115,  288 => 114,  283 => 112,  278 => 111,  276 => 110,  270 => 107,  262 => 102,  257 => 100,  250 => 96,  245 => 94,  237 => 89,  232 => 87,  224 => 82,  219 => 80,  211 => 75,  206 => 73,  200 => 69,  195 => 67,  190 => 66,  185 => 64,  180 => 63,  178 => 62,  172 => 59,  165 => 54,  160 => 52,  155 => 51,  150 => 49,  145 => 48,  143 => 47,  137 => 44,  132 => 42,  126 => 39,  121 => 36,  113 => 32,  110 => 31,  102 => 27,  100 => 26,  97 => 25,  91 => 23,  87 => 21,  85 => 20,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  52 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/delhivery_lastmile.twig", "");
    }
}
