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

/* naritafashion/template/extension/module/categoryblock.twig */
class __TwigTemplate_49a9d3050d131093ceb3e041e88d2e44ffe090748702bb461269bb9790d51896 extends \Twig\Template
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
        echo "<section id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"categoryblock\">
    <div class=\"container\">
        <div class=\"section-header\">    
            <h3 class=\"home-title\">";
        // line 4
        echo ($context["heading"] ?? null);
        echo "</h3>
        </div>
        <div class=\"category-content\">
            <div class=\"category-inner\">
                <div class=\"grid-container\">
                  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            echo "  
                    <div class=\"categoryblock-container\">
                        <div class=\"category-image\">
                            <a href=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "categorylink", [], "any", false, false, false, 12);
            echo "\">
                              <img src=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 13);
            echo "\" alt=\"Category-img\" class=\"img-responsive\" />
                              <span class=\"heading\">";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "categorytitle", [], "any", false, false, false, 14);
            echo "</span>
                            </a>
                        </div>  
                    </div>   
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo " 
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/categoryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  68 => 14,  64 => 13,  60 => 12,  52 => 9,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/categoryblock.twig", "");
    }
}
