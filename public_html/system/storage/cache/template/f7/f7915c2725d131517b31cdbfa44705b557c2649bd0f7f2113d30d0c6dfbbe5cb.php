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

/* naritafashion/template/account/address_list.twig */
class __TwigTemplate_4ce4892cbdd6c02d387f304040ef27d06006e0794fd4da212211a35d182fefbf extends \Twig\Template
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
<div id=\"account-address\" class=\"container wrapper_container\">
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
    ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 14
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 17
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-6 column_left";
            // line 20
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-9 column_center";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12 column_full";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 26
        if (($context["addresses"] ?? null)) {
            // line 27
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 30
                echo "               <form  action=\"";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 30);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-address-";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "address_id", [], "any", false, false, false, 30);
                echo "\">
                <tr>
                  <td class=\"text-left\">
                     ";
                // line 33
                if (($context["address_type"] ?? null)) {
                    // line 34
                    echo "                      <div class=\"status\">
                        ";
                    // line 35
                    echo ($context["entry_address_type0"] ?? null);
                    echo "
                      </div>
                      ";
                } else {
                    // line 38
                    echo "                      <div class=\"status\">
                        ";
                    // line 39
                    echo ($context["entry_address_type1"] ?? null);
                    echo "
                      </div>
                    ";
                }
                // line 42
                echo "                    ";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "address", [], "any", false, false, false, 42);
                echo "
                    <div class=\"btninfo\">
                      <a href=\"";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["result"], "update", [], "any", false, false, false, 44);
                echo "\" class=\"btn btn-info\">";
                echo ($context["button_edit"] ?? null);
                echo "</a> 
                      <a href = \"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 45);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\" onclick=\"return confirm('";
                echo ($context["text_confirm"] ?? null);
                echo "')\">";
                echo ($context["button_delete"] ?? null);
                echo "</a>
                    </div>
                  </td>
                </tr>
              </form>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </table>
      </div>
      ";
        } else {
            // line 54
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 56
        echo "      <div class=\"buttons clearfix\">
        
        <div class=\"pull-left\"><a href=\"";
        // line 58
        echo ($context["add"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_new_address"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 59
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div> 
      </div>
      ";
        // line 61
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 62
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 64
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "naritafashion/template/account/address_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 64,  218 => 62,  213 => 61,  206 => 59,  200 => 58,  196 => 56,  190 => 54,  185 => 51,  167 => 45,  161 => 44,  155 => 42,  149 => 39,  146 => 38,  140 => 35,  137 => 34,  135 => 33,  126 => 30,  122 => 29,  118 => 27,  116 => 26,  109 => 25,  106 => 24,  103 => 23,  100 => 22,  97 => 21,  94 => 20,  91 => 19,  89 => 18,  84 => 17,  78 => 15,  75 => 14,  69 => 12,  67 => 11,  63 => 9,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/account/address_list.twig", "");
    }
}
