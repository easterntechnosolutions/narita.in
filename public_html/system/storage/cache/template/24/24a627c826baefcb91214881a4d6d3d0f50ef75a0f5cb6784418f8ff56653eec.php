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

/* naritafashion/template/extension/module/productservicesblock.twig */
class __TwigTemplate_e1dfcc641e3c41a0b3410869342780849e30d69aec2a6d0fd1dcd7a8dde04534 extends \Twig\Template
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
        echo "<section class=\"productservicesblock clearfix\">
    <div class=\"productservices-inner\">
        <div class=\"productservices\">
            <div class=\"productservices-banner col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                <div class=\"image-inner\">
                    <img src=\"";
        // line 6
        echo ($context["bgimage"] ?? null);
        echo "\" alt=\"productservices-img\" />
                </div>
                <div class=\"productservices-banner-data\">
                    <div class=\"title\">";
        // line 9
        echo ($context["heading"] ?? null);
        echo "</div>
                    <div class=\"subtitle\">";
        // line 10
        echo ($context["subtitle"] ?? null);
        echo "</div>
                </div>
            </div>
            <div class=\"productservices-inner grid-container col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 15
            echo "                    <div class=\"productsservices\">
                            <a href=\"#\">
                                <div class=\"productservice-img\" style=\"background-image: url(";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 17);
            echo ");\">
                                </div>
                                <div class=\"productservice-block\">
                                    <div class=\"productservice-title\">";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 20);
            echo "</div>
                                    <div class=\"productservice-desc\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "desc", [], "any", false, false, false, 21);
            echo "</div>
                                </div>
                            </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/productservicesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  79 => 21,  75 => 20,  69 => 17,  65 => 15,  61 => 14,  54 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/productservicesblock.twig", "");
    }
}
