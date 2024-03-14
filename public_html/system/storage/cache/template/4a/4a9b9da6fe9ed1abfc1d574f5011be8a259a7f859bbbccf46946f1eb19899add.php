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

/* naritafashion/template/account/account.twig */
class __TwigTemplate_8338d3965bc070cfeac67159d501e18208096ac21ed4a44f35db76a9fd03f37a extends \Twig\Template
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
<div id=\"account-account\" class=\"container wrapper_container\">
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
            echo "        <li><a href=\"";
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
        echo "      </ul>
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
        echo "  <div class=\"row\">";
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
      <div class=\"a-link-list\">
        <div class=\"a-link-heading\"><h2>";
        // line 24
        echo ($context["text_my_account"] ?? null);
        echo "</h2></div>
        <div class=\"a-link-content\">
          <ul class=\"list-unstyled\">
            <li><a href=\"";
        // line 27
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 28
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 29
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 30
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      ";
        // line 34
        if (($context["credit_cards"] ?? null)) {
            // line 35
            echo "      <div class=\"a-link-list\">
        <div class=\"a-link-heading\"><h2>";
            // line 36
            echo ($context["text_credit_card"] ?? null);
            echo "</h2></div>
        <div class=\"a-link-content\">
          <ul class=\"list-unstyled\">
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 40
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 40);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 40);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "          </ul>
        </div>
      </div>
      ";
        }
        // line 46
        echo "      <div class=\"a-link-list\">
        <div class=\"a-link-heading\"><h2>";
        // line 47
        echo ($context["text_my_orders"] ?? null);
        echo "</h2></div>
        <div class=\"a-link-content\">
          <ul class=\"list-unstyled\">
            <li><a href=\"";
        // line 50
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 51
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
            ";
        // line 52
        if (($context["reward"] ?? null)) {
            // line 53
            echo "            <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
            ";
        }
        // line 55
        echo "            <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 56
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 57
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      <div class=\"a-link-list\">
        <div class=\"a-link-heading\"><h2>";
        // line 62
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2></div>
        <div class=\"a-link-content\">
          <ul class=\"list-unstyled\">
            ";
        // line 65
        if ( !($context["tracking"] ?? null)) {
            // line 66
            echo "            <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 68
            echo "            <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 69
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
            ";
        }
        // line 71
        echo "          </ul>
        </div>
      </div>
      <div class=\"a-link-list\">
        <div class=\"a-link-heading\"><h2>";
        // line 75
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2></div>
        <div class=\"a-link-content\">
          <ul class=\"list-unstyled\">
            <li><a href=\"";
        // line 78
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      ";
        // line 82
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 83
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 85
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "naritafashion/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 85,  283 => 83,  278 => 82,  269 => 78,  263 => 75,  257 => 71,  250 => 69,  243 => 68,  235 => 66,  233 => 65,  227 => 62,  217 => 57,  211 => 56,  204 => 55,  196 => 53,  194 => 52,  188 => 51,  182 => 50,  176 => 47,  173 => 46,  167 => 42,  156 => 40,  152 => 39,  146 => 36,  143 => 35,  141 => 34,  132 => 30,  126 => 29,  120 => 28,  114 => 27,  108 => 24,  100 => 22,  97 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  80 => 15,  75 => 14,  69 => 12,  67 => 11,  63 => 9,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/account/account.twig", "");
    }
}
