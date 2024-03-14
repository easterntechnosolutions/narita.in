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

/* naritafashion/template/extension/module/discountblock.twig */
class __TwigTemplate_6d092a0acb3e34d79220ea1c2bedfaf403c8df8e0a4dfab2486fcc06505dec95 extends \Twig\Template
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
        echo "<section class=\"discountblock clearfix\">
    <div class=\"container\">
        <div class=\"discount-bg\" style=\"background: ";
        // line 3
        echo ($context["bg_color"] ?? null);
        echo ";\">
            <div class=\"discount-image col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                <img src=\"";
        // line 5
        echo ($context["bgimage"] ?? null);
        echo "\" alt=\"Discount-Image\">
            </div>
            <div class=\"discount-detail col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                <div class=\"title\">";
        // line 8
        echo ($context["title1"] ?? null);
        echo "</div>
            </div>
            <div class=\"discount-btn col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                <a href=\"";
        // line 11
        echo ($context["banner1_link"] ?? null);
        echo "\" class=\"btn-primary\">";
        echo ($context["btntitle1"] ?? null);
        echo "</a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/discountblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  52 => 8,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/discountblock.twig", "");
    }
}
