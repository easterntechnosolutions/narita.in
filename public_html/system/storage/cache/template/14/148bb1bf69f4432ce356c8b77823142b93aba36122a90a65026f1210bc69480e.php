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

/* naritafashion/template/common/home.twig */
class __TwigTemplate_33159c57fb13415a6b5c6af9675162c702fd7a639470826b477a112e14d791de extends \Twig\Template
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
        echo "
\t";
        // line 2
        echo ($context["header"] ?? null);
        echo "
\t<div id=\"common-home\">    
\t    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "\t    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "\t    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "\t    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "\t    ";
        } else {
            // line 9
            echo "\t    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "\t    ";
        }
        echo "   
\t\t";
        // line 11
        echo ($context["content_top"] ?? null);
        echo "
    \t";
        // line 12
        echo ($context["content_middle"] ?? null);
        echo "
\t\t";
        // line 13
        echo ($context["content_bottom"] ?? null);
        echo "
\t    ";
        // line 14
        echo ($context["column_left"] ?? null);
        echo " 
\t    ";
        // line 15
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 17
        echo ($context["footer"] ?? null);
        echo "   ";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/common/home.twig", "");
    }
}
