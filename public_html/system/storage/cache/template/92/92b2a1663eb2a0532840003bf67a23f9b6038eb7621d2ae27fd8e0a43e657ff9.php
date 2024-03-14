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

/* naritafashion/template/extension/module/socialfollow.twig */
class __TwigTemplate_8be71d3559c8e91c88ddb71c23558344bc90c1c2d8bea9c349e58233e82c622f extends \Twig\Template
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
        echo "<div id=\"_desktop_social\" class=\"block-social\">
  <div id=\"social-container\">
    <ul>
      ";
        // line 4
        if (($context["facebook"] ?? null)) {
            // line 5
            echo "        <li><a class=\"facebook\" href=\"";
            echo ($context["facebook"] ?? null);
            echo "\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a></li>
      ";
        }
        // line 7
        echo "      ";
        if (($context["twitter"] ?? null)) {
            // line 8
            echo "        <li><a class=\"twitter\" href=\"";
            echo ($context["twitter"] ?? null);
            echo "\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a></li>
      ";
        }
        // line 10
        echo "      ";
        if (($context["youtube"] ?? null)) {
            // line 11
            echo "        <li><a class=\"youtube\" href=\"";
            echo ($context["youtube"] ?? null);
            echo "\" target=\"_blank\" ><i class=\"fa fa-youtube\"></i></a></li>
      ";
        }
        // line 13
        echo "      ";
        if (($context["gplus"] ?? null)) {
            // line 14
            echo "        <li><a class=\"googleplus\" href=\"";
            echo ($context["gplus"] ?? null);
            echo "\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
      ";
        }
        // line 16
        echo "      ";
        if (($context["rss"] ?? null)) {
            // line 17
            echo "        <li><a class=\"rss\" href=\"";
            echo ($context["rss"] ?? null);
            echo "\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a></li>
      ";
        }
        // line 19
        echo "      ";
        if (($context["pinterest"] ?? null)) {
            // line 20
            echo "        <li><a class=\"pinterest\" href=\"";
            echo ($context["pinterest"] ?? null);
            echo "\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a></li>
      ";
        }
        // line 22
        echo "      ";
        if (($context["vimeo"] ?? null)) {
            // line 23
            echo "        <li><a class=\"vimeo\" href=\"";
            echo ($context["vimeo"] ?? null);
            echo "\" target=\"_blank\" ><i class=\"fa fa-vimeo\"></i></a></li>
      ";
        }
        // line 25
        echo "      ";
        if (($context["instagram"] ?? null)) {
            // line 26
            echo "        <li><a class=\"instagram\" href=\"";
            echo ($context["instagram"] ?? null);
            echo "\" target=\"_blank\" ><i class=\"fa fa-instagram\"></i></a></li>
      ";
        }
        // line 27
        echo "   
    </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/socialfollow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 27,  107 => 26,  104 => 25,  98 => 23,  95 => 22,  89 => 20,  86 => 19,  80 => 17,  77 => 16,  71 => 14,  68 => 13,  62 => 11,  59 => 10,  53 => 8,  50 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/socialfollow.twig", "");
    }
}
