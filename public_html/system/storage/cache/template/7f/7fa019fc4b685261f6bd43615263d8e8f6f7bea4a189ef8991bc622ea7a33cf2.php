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

/* naritafashion/template/error/not_found.twig */
class __TwigTemplate_c957f7edc8fb02fe1cb90cba63c09a8fc5bbd134cfb7851a5edc357c6f2c3595 extends \Twig\Template
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
<div id=\"error-not-found\" class=\"container wrapper_container\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6 column_left";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9 column_center";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12 column_full";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <p class=\"text-center\">";
        // line 12
        echo ($context["text_error"] ?? null);
        echo "</p>
      ";
        // line 14
        echo "      ";
        // line 15
        echo "      ";
        // line 16
        echo "      ";
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 17
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 19
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  87 => 17,  81 => 16,  79 => 15,  77 => 14,  73 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/error/not_found.twig", "");
    }
}
