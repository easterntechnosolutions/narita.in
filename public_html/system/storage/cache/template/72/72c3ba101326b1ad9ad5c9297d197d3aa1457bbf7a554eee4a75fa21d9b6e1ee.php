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

/* naritafashion/template/account/return_info.twig */
class __TwigTemplate_18bf48847949f699c00e3f4e56624ce701a9a9cd58cb80aa44bb32b4777b3f26 extends \Twig\Template
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
<div id=\"account-return\" class=\"container wrapper_container\">
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
  <div class=\"row\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6 column_left";
            // line 14
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9 column_center";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12 column_full";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 23
        echo ($context["text_return_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\"><b>";
        // line 28
        echo ($context["text_return_id"] ?? null);
        echo "</b> #";
        echo ($context["return_id"] ?? null);
        echo "<br />
              <b>";
        // line 29
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\"><b>";
        // line 30
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "<br />
              <b>";
        // line 31
        echo ($context["text_date_ordered"] ?? null);
        echo "</b> ";
        echo ($context["date_ordered"] ?? null);
        echo "</td>
          </tr>
        </tbody>
      </table>
      <h3>";
        // line 35
        echo ($context["text_product"] ?? null);
        echo "</h3>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 40
        echo ($context["column_product"] ?? null);
        echo "</td>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 41
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\" style=\"width: 33.3%;\">";
        // line 42
        echo ($context["column_quantity"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 47
        echo ($context["product"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 48
        echo ($context["model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 49
        echo ($context["quantity"] ?? null);
        echo "</td>
            </tr>
          </tbody>
        </table>
      </div>
      <h3>";
        // line 54
        echo ($context["text_reason"] ?? null);
        echo "</h3>
      <div class=\"table-responsive\">
        <table class=\"list table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 59
        echo ($context["column_reason"] ?? null);
        echo "</td>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 60
        echo ($context["column_opened"] ?? null);
        echo "</td>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 61
        echo ($context["column_action"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 66
        echo ($context["reason"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 67
        echo ($context["opened"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 68
        echo ($context["action"] ?? null);
        echo "</td>
            </tr>
          </tbody>
        </table>
      </div>
      ";
        // line 73
        if (($context["comment"] ?? null)) {
            // line 74
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
            // line 78
            echo ($context["text_comment"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
            // line 83
            echo ($context["comment"] ?? null);
            echo "</td>
            </tr>
          </tbody>
        </table>
      </div>
      ";
        }
        // line 89
        echo "      <h3>";
        echo ($context["text_history"] ?? null);
        echo "</h3>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 94
        echo ($context["column_date_added"] ?? null);
        echo "</td>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 95
        echo ($context["column_status"] ?? null);
        echo "</td>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 96
        echo ($context["column_comment"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
        // line 101
        if (($context["histories"] ?? null)) {
            // line 102
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 103
                echo "          <tr>
            <td class=\"text-left\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 104);
                echo "</td>
            <td class=\"text-left\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 105);
                echo "</td>
            <td class=\"text-left\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 106);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "          ";
        } else {
            // line 110
            echo "          <tr>
            <td colspan=\"3\" class=\"text-center\">";
            // line 111
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
          ";
        }
        // line 114
        echo "            </tbody>
          
        </table>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 119
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 121
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 122
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 124
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/account/return_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 124,  324 => 122,  319 => 121,  312 => 119,  305 => 114,  299 => 111,  296 => 110,  293 => 109,  284 => 106,  280 => 105,  276 => 104,  273 => 103,  268 => 102,  266 => 101,  258 => 96,  254 => 95,  250 => 94,  241 => 89,  232 => 83,  224 => 78,  218 => 74,  216 => 73,  208 => 68,  204 => 67,  200 => 66,  192 => 61,  188 => 60,  184 => 59,  176 => 54,  168 => 49,  164 => 48,  160 => 47,  152 => 42,  148 => 41,  144 => 40,  136 => 35,  127 => 31,  121 => 30,  115 => 29,  109 => 28,  101 => 23,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  71 => 12,  67 => 11,  63 => 9,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/account/return_info.twig", "");
    }
}
