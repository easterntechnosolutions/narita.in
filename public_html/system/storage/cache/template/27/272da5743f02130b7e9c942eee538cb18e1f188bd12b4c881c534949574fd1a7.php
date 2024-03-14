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

/* naritafashion/template/extension/module/account.twig */
class __TwigTemplate_fa0033da55e4b08320bb64183bcbe7fa4bfebd8e4481cca7400eb477aa218751 extends \Twig\Template
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
        echo "<div class=\"account-details\">
  <div class=\"list-group\">
    ";
        // line 3
        if ( !($context["logged"] ?? null)) {
            // line 4
            echo "    <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a> 
    <a href=\"";
            // line 5
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a> 
    <a href=\"";
            // line 6
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
    ";
        }
        // line 8
        echo "    <a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["account_active"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
    ";
        // line 9
        if (($context["logged"] ?? null)) {
            // line 10
            echo "    <a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item ";
            echo ($context["edit_active"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a> 
    <a href=\"";
            // line 11
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item ";
            echo ($context["pass_active"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
    ";
        }
        // line 13
        echo "    <a href=\"";
        echo ($context["address"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["address_active"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a> 
    <a href=\"";
        // line 14
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["wishlist_active"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a> 
    <a href=\"";
        // line 15
        echo ($context["order"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["order_active"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a> 
    <!-- <a href=\"";
        // line 16
        echo ($context["download"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["download_active"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a> -->
    <!-- <a href=\"";
        // line 17
        echo ($context["recurring"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["recurring_active"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a>  -->
    <!-- <a href=\"";
        // line 18
        echo ($context["reward"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["reward_active"] ?? null);
        echo "\">";
        echo ($context["text_reward"] ?? null);
        echo "</a> -->
    <a href=\"";
        // line 19
        echo ($context["return"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["return_active"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a> 
    <a href=\"";
        // line 20
        echo ($context["transaction"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["trans_active"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "
    <a href=\"";
        // line 21
        echo ($context["download"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["download_active"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a>
    <a href=\"";
        // line 22
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["news_active"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
    ";
        // line 23
        if (($context["logged"] ?? null)) {
            // line 24
            echo "    <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
    ";
        }
        // line 26
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 26,  175 => 24,  173 => 23,  165 => 22,  157 => 21,  149 => 20,  141 => 19,  133 => 18,  125 => 17,  117 => 16,  109 => 15,  101 => 14,  92 => 13,  83 => 11,  74 => 10,  72 => 9,  63 => 8,  56 => 6,  50 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/account.twig", "");
    }
}
