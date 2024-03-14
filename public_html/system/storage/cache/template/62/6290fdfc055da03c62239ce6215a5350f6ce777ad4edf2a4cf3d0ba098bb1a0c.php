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

/* naritafashion/template/common/cart.twig */
class __TwigTemplate_9f16b868a28f3ce4a6d4e563093290997869c28ccc999afcbe593befba977938 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg\" >
      <a href=\"";
        // line 3
        echo ($context["cart"] ?? null);
        echo "\" class=\"cart-link\">
        <span class=\"cart-img hidden-xs hidden-sm\">
           <img src=\"image/catalog/cart-icon.png\" alt=\"cart-icon\">
        </span>
        <span class=\"cart-img hidden-lg hidden-md mobile-logo\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">          
              <symbol id=\"cart-responsive\" viewBox=\"0 0 510 510\"><title>cart-responsive</title>
                  <path d=\"M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6
                  v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4
                  C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4
                  C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z
                   M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4
                  L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2
                  V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2
                  H270l22.4,209.2H30z\"></path>
              </symbol>
          </svg>
          <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#cart-responsive\" x=\"13%\" y=\"13%\"></use></svg>
        </span>
        <span class=\"cart-content\">
          <span class=\"cart-name\">";
        // line 23
        echo ($context["text_name"] ?? null);
        echo "</span>
          <span class=\"cart-products-count\">";
        // line 24
        echo ($context["text_items_small"] ?? null);
        echo "</span>
        </span>
      </a>
  </button>
</div>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  67 => 23,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/common/cart.twig", "");
    }
}
