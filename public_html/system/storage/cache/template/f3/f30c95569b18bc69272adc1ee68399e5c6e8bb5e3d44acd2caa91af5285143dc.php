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

/* naritafashion/template/extension/module/careerblock.twig */
class __TwigTemplate_c7c242564bd5595a437ea27c678d57620b8f27bfc65367217288b80f7baa6dae extends \Twig\Template
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
        echo ($context["random_id"] ?? null);
        echo "\" class=\"ishicareerblock\">
\t<div class=\"career\">
\t    <div class=\"career-image col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t        <img src=\"";
        // line 4
        echo ($context["banner1"] ?? null);
        echo "\" alt=\"About-Us\">
\t        <div class=\"openings-content\">
\t            <div class=\"openings-title\">";
        // line 6
        echo ($context["title"] ?? null);
        echo "</div>
\t            <div id=\"openings\" class=\"career-details\">
\t                <div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t\t";
        // line 9
        $context["item"] = 1;
        // line 10
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishitestimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishitestimonial"]) {
            // line 11
            echo "\t\t\t\t\t\t<div class=\"faqblock-container panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\"> 
\t\t\t\t\t\t\t\t<a class=\"text-container ";
            // line 13
            if ((($context["item"] ?? null) == 1)) {
                echo " ";
            } else {
                echo " collapsed ";
            }
            echo "\" data-toggle=\"collapse\" data-target=\"#collapseOne_";
            echo ($context["item"] ?? null);
            echo "\" data-parent=\"#accordion\">
\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 15);
            echo "
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"collapseOne_";
            // line 19
            echo ($context["item"] ?? null);
            echo "\" class=\"subtitle-container panel-collapse collapse ";
            if ((($context["item"] ?? null) == 1)) {
                echo "in";
            }
            echo "\">
\t\t\t\t                <div class=\"panel-body\">
\t\t\t\t                    ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "description", [], "any", false, false, false, 21);
            echo "
\t\t\t\t                </div> 
\t\t\t\t            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 25
            $context["item"] = (($context["item"] ?? null) + 1);
            // line 26
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishitestimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t\t</div>
\t            </div>    
\t        </div>
\t    </div>
\t    <div class=\"career-content col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t        <div class=\"career-title\">";
        // line 32
        echo ($context["subtitle"] ?? null);
        echo "</div>
\t        <div class=\"career-desc\">
\t        \t";
        // line 34
        echo ($context["html"] ?? null);
        echo "
\t        </div>
\t    </div>
\t</div>
</section>\t
";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/careerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  115 => 32,  108 => 27,  102 => 26,  100 => 25,  93 => 21,  84 => 19,  77 => 15,  66 => 13,  62 => 11,  57 => 10,  55 => 9,  49 => 6,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/careerblock.twig", "");
    }
}
