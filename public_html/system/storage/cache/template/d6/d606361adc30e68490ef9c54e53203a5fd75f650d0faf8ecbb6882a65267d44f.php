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

/* extension/module/managepincode.twig */
class __TwigTemplate_36dc4e843d275599050fcfe732b9ad032cd4f082b0473027e2fc9398a7d773bf extends \Twig\Template
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
        echo ($context["download_pincode"] ?? null);
        echo "\">
\t\t\t\t\t<button data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_download_pincode"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i>&nbsp; ";
        echo ($context["button_download_pincode"] ?? null);
        echo "</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t    <h1>Manage Pincodes</h1>
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
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> Manage Pincodes</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 40
        echo ($context["filter_action"] ?? null);
        echo "\" method=\"get\" enctype=\"multipart/form-data\" id=\"filter_forms\">
\t\t\t\t\t<input type=\"hidden\" name=\"route\" value=\"extension/module/managepincode\" />
\t\t\t\t\t<input type=\"hidden\" name=\"user_token\" value=\"";
        // line 42
        echo ($context["user_token"] ?? null);
        echo "\" />
\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-district\">";
        // line 47
        echo ($context["column_district"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_district\" value=\"";
        // line 48
        echo ($context["filter_district"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_district"] ?? null);
        echo "\" id=\"input-district\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-pin\">";
        // line 53
        echo ($context["column_pin"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_pin\" value=\"";
        // line 54
        echo ($context["filter_pin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["column_pin"] ?? null);
        echo "\" id=\"input-pin\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
        // line 61
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"";
        // line 64
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
\t\t\t\t<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-mpblogcategory\">
\t\t\t\t\t  <div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t";
        // line 81
        if ((($context["sort"] ?? null) == "pincode_id")) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_pincode_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_pincode_id"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 84
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_pincode_id"] ?? null);
            echo "\">";
            echo ($context["column_pincode_id"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 87
        echo ($context["column_district"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 88
        echo ($context["column_pin"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 89
        echo ($context["column_pre_paid"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 90
        echo ($context["column_cash"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 91
        echo ($context["column_pickup"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 92
        echo ($context["column_cod"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 93
        echo ($context["column_state_code"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t\t";
        // line 97
        if (($context["delhiveryLastmile_managePincode"] ?? null)) {
            // line 98
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["delhiveryLastmile_managePincode"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manage_pincode"]) {
                // line 99
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["manage_pincode"], "pincode_id", [], "any", false, false, false, 100);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["manage_pincode"], "district", [], "any", false, false, false, 101);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["manage_pincode"], "pin", [], "any", false, false, false, 102);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["manage_pincode"], "pre_paid", [], "any", false, false, false, 103);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["manage_pincode"], "cash", [], "any", false, false, false, 104);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["manage_pincode"], "pickup", [], "any", false, false, false, 105);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["manage_pincode"], "cod", [], "any", false, false, false, 106);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["manage_pincode"], "state_code", [], "any", false, false, false, 107);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manage_pincode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 111
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t  <td class=\"text-center\" colspan=\"8\">";
            // line 112
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t  </div>
\t\t\t\t\t</form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 120
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 121
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

</div>

";
        // line 131
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/managepincode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 131,  308 => 121,  304 => 120,  297 => 115,  291 => 112,  288 => 111,  285 => 110,  276 => 107,  272 => 106,  268 => 105,  264 => 104,  260 => 103,  256 => 102,  252 => 101,  248 => 100,  245 => 99,  240 => 98,  238 => 97,  231 => 93,  227 => 92,  223 => 91,  219 => 90,  215 => 89,  211 => 88,  207 => 87,  204 => 86,  196 => 84,  186 => 82,  184 => 81,  164 => 64,  158 => 61,  146 => 54,  142 => 53,  132 => 48,  128 => 47,  120 => 42,  115 => 40,  105 => 32,  97 => 28,  94 => 27,  86 => 23,  84 => 22,  77 => 17,  66 => 15,  62 => 14,  52 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/managepincode.twig", "");
    }
}
