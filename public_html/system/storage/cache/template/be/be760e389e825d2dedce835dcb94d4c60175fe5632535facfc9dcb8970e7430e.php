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

/* extension/module/managelocation.twig */
class __TwigTemplate_c72676293dc25380c91ee0306c688a7a44bf9c65fbe05ba1d79dc7778f9c4418 extends \Twig\Template
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
        echo ($context["download_location"] ?? null);
        echo "\">
\t\t\t\t\t<button data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_download_location"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i>&nbsp; ";
        echo ($context["button_download_location"] ?? null);
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
        echo ($context["massaction"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-managelocation\">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<select name=\"massactions\" id=\"input-massactions\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">Actions</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"create_pickup_request\">";
        // line 47
        echo ($context["text_create_pickup_request"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"pickupLocation\" style=\"display:none;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"date\" name=\"pickup_date\" placeholder=\"mm/dd/yyyy\" id=\"input-pickup_date\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"hours\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Hrs</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"01\">01</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"02\">02</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"03\">03</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"04\">04</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"05\">05</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"06\">06</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"07\">07</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"08\">08</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"09\">09</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\">12</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"14\">15</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"16\">16</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"18\">18</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"19\">19</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"20\">20</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"21\">21</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"22\">22</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"23\">23</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"minute\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Min</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"15\">15</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"30\">30</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"45\">45</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-primary massactionBtn\"><i class=\"fa fa-save\"></i> Submit </button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t  <div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t";
        // line 113
        if ((($context["sort"] ?? null) == "location_id")) {
            // line 114
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_location_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_location_id"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 116
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_location_id"] ?? null);
            echo "\">";
            echo ($context["column_location_id"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 119
        echo ($context["column_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 120
        echo ($context["column_address"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 121
        echo ($context["column_contact_person"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 122
        echo ($context["column_email"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 123
        echo ($context["column_pin"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 124
        echo ($context["column_state"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 125
        echo ($context["column_expected_package_count"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t\t";
        // line 129
        if (($context["delhiveryLastmile_manageLocation"] ?? null)) {
            // line 130
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["delhiveryLastmile_manageLocation"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manage_location"]) {
                // line 131
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t";
                // line 133
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["manage_location"], "location_id", [], "any", false, false, false, 133), ($context["selected"] ?? null))) {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manage_location"], "location_id", [], "any", false, false, false, 134);
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manage_location"], "location_id", [], "any", false, false, false, 136);
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                }
                // line 138
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["manage_location"], "location_id", [], "any", false, false, false, 139);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["manage_location"], "name", [], "any", false, false, false, 140);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["manage_location"], "address", [], "any", false, false, false, 141);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["manage_location"], "contact_person", [], "any", false, false, false, 142);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["manage_location"], "email", [], "any", false, false, false, 143);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["manage_location"], "pin", [], "any", false, false, false, 144);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["manage_location"], "state", [], "any", false, false, false, 145);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["manage_location"], "expected_package_count", [], "any", false, false, false, 146);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manage_location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 150
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t  <td class=\"text-center\" colspan=\"9\">";
            // line 151
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 154
        echo "\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t  </div>
\t\t\t\t\t</form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 159
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 160
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

</div>
<script type=\"text/javascript\"><!--
\$('#input-massactions').on('change', function() {
\tif(\$(this).val()=='create_pickup_request'){
\t\t\$(\".pickupLocation\").show();
\t}else{
\t\t\$(\".pickupLocation\").hide();
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.massactionBtn').on('click', function() {
\tif(\$('#input-massactions').val()!='create_pickup_request'){
\t\talert(\"Please select Actions.\");
\t}else{
\t\t\$('#form-managelocation').submit();
\t}
});
//--></script>
";
        // line 187
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/managelocation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 187,  342 => 160,  338 => 159,  331 => 154,  325 => 151,  322 => 150,  319 => 149,  310 => 146,  306 => 145,  302 => 144,  298 => 143,  294 => 142,  290 => 141,  286 => 140,  282 => 139,  279 => 138,  273 => 136,  267 => 134,  265 => 133,  261 => 131,  256 => 130,  254 => 129,  247 => 125,  243 => 124,  239 => 123,  235 => 122,  231 => 121,  227 => 120,  223 => 119,  220 => 118,  212 => 116,  202 => 114,  200 => 113,  131 => 47,  120 => 39,  114 => 36,  108 => 32,  100 => 28,  97 => 27,  89 => 23,  87 => 22,  80 => 17,  69 => 15,  65 => 14,  60 => 12,  52 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/managelocation.twig", "");
    }
}
