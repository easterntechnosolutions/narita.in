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

/* naritafashion/template/account/order_list.twig */
class __TwigTemplate_70271be3b2236e38c3d9afd480726af49bc192509cabadec2ac694a078e5ba70 extends \Twig\Template
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
  <div class=\"breadcrumb-container\">
    <img src=\"image/catalog/categoryimage.png\">
    <div class=\"container\">
      <h2 class=\"page-title\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      <ul class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      </ul>
    </div>
  </div>
<div id=\"account-order\" class=\"container wrapper_container\">
  <div class=\"row\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6 column_left";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9 column_center";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-12 column_full";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 23
        if (($context["orders"] ?? null)) {
            // line 24
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
          <tbody>
           ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 28
                echo "          <thead>
            <tr>
              <td class=\"text-right\">";
                // line 30
                echo ($context["column_order_id"] ?? null);
                echo "</td>
              <td class=\"text-left\">";
                // line 31
                echo ($context["column_date_added"] ?? null);
                echo "</td>
              <td class=\"text-right\">";
                // line 32
                echo ($context["column_total"] ?? null);
                echo "</td>
              <td class=\"text-left\">";
                // line 33
                echo ($context["column_status"] ?? null);
                echo "</td>
              <td class=\"text-left\">";
                // line 34
                echo ($context["column_customer"] ?? null);
                echo "</td>
              <td class=\"text-right\">";
                // line 35
                echo ($context["column_product"] ?? null);
                echo "</td>
              <td></td>
            </tr>
          </thead>
            <tr>
              <td class=\"text-left\">#";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 40);
                echo "</td>
              <td class=\"text-left\">";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 41);
                echo "</td>
              <td class=\"text-left\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 42);
                echo "</td>
              <td class=\"text-left\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 43);
                echo "</td>
              <td class=\"text-left\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 44);
                echo "</td>
              <td class=\"text-left\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 45);
                echo "</td>
            </tr>
              <tr>
                <td class=\"text-right\">
                  <a href=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 49);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\">ORDER DETAILS</a>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "          </tbody>
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 57
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 58
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 61
            echo "      <div class=\"order-title\">";
            echo ($context["text_noorder"] ?? null);
            echo "</div>
      <p>";
            // line 62
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"pull-left\">
        <a href=\"";
            // line 64
            echo ($context["continue1"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["button_shopping"] ?? null);
            echo "</a>
      </div>
      ";
        }
        // line 67
        echo "      ";
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 68
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 70
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 70,  223 => 68,  217 => 67,  209 => 64,  204 => 62,  199 => 61,  193 => 58,  189 => 57,  183 => 53,  171 => 49,  164 => 45,  160 => 44,  156 => 43,  152 => 42,  148 => 41,  144 => 40,  136 => 35,  132 => 34,  128 => 33,  124 => 32,  120 => 31,  116 => 30,  112 => 28,  108 => 27,  103 => 24,  101 => 23,  94 => 22,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  79 => 17,  76 => 16,  74 => 15,  70 => 14,  64 => 10,  53 => 8,  49 => 7,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/account/order_list.twig", "");
    }
}
