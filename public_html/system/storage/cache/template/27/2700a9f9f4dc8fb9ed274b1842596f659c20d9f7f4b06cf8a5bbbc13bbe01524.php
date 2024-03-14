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

/* naritafashion/template/extension/module/linklist.twig */
class __TwigTemplate_d5223cefca6895326f214817d6ce23188749e0cbed01c640a2e928a18cb8b15f extends \Twig\Template
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
        echo "<section class=\"linklist_block col-lg-3 col-md-3 col-sm-12 footer-block\">
\t<h5 class=\"hidden-sm hidden-xs\">";
        // line 2
        echo ($context["heading"] ?? null);
        echo "</h5>
\t<div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#block_content\" data-toggle=\"collapse\">
    <span class=\"h3\">";
        // line 4
        echo ($context["heading"] ?? null);
        echo "</span>
    <span class=\"navbar-toggler collapse-icons\">
      <i class=\"fa fa-angle-down add\"></i>
      <i class=\"fa fa-angle-up remove\"></i>
    </span>
  </div>
\t<div id=\"block_content\" class=\"block_content collapse footer-dropdown\">
\t\t<div id=\"linklist-carousel\">
\t\t\t";
        // line 12
        $context["counter"] = 1;
        // line 13
        echo "\t\t    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["linklists"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["linklist"]) {
            echo " 
\t\t\t\t\t<div class=\"item linklist\">
\t\t\t\t\t\t<!-- <div class=\"link-img\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["linklist"], "image", [], "any", false, false, false, 17)) {
                echo " 
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["linklist"], "image", [], "any", false, false, false, 18);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />\t
\t\t\t\t\t\t\t\t";
            }
            // line 19
            echo "\t
\t\t\t\t\t\t\t</a>\t
\t            \t\t</div> -->\t\t\t
\t\t\t\t\t\t<div class=\"linklist-desc\">
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["linklist"], "title", [], "any", false, false, false, 24);
            echo "</a> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <div class=\"link-list\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["linklist"], "description", [], "any", false, false, false, 28);
            echo "
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t</div> \t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t";
            // line 33
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 34
            echo "        \t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 35
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linklist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</div>
\t</div>
</section>
<style>
    #footer .footers-block .about-details-exclusice .home-title {
        font-weight: 500;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/linklist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  108 => 35,  105 => 34,  103 => 33,  95 => 28,  88 => 24,  81 => 19,  72 => 18,  68 => 17,  58 => 13,  56 => 12,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/linklist.twig", "");
    }
}
