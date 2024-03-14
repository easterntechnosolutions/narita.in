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

/* naritafashion/template/extension/module/offersblock.twig */
class __TwigTemplate_91f8da96b043dcd4ac98d6f9fef61ad977a8be7d1ec22b497f966e7765537f78 extends \Twig\Template
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
        echo "<div id=\"offersblock\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"offersblock-inner\" style=\"background: ";
        // line 4
        echo ($context["bg_color"] ?? null);
        echo ";\">
\t\t\t\t<div id=\"typed-strings\">
\t\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            echo " 
\t\t\t\t\t\t<p>";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["offer"], "title", [], "any", false, false, false, 7);
            echo "</p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t\t\t</div>
\t\t\t \t<span id=\"typed\"></span>
\t\t\t \t<div class=\"offer-btn\">
\t                <div class=\"btn-primary\">Use Code : 
\t                <div onclick=\"copy(this)\" class=\"offer_code\">";
        // line 13
        echo ($context["btntitle1"] ?? null);
        echo "</div>
\t            </div>
\t            </div>
\t\t\t</div>
\t\t</div>\t\t
 \t</div>
\t<script type=\"text/javascript\">
\t\tvar typed = new Typed('#typed', {
\t      stringsElement: '#typed-strings',
\t      typeSpeed: 90,
\t      backSpeed: 90,
\t      startDelay: 1000,
\t      showCursor: false,
\t      loop: true,
\t    });

\t    function copy(that){
\t\tvar inp =document.createElement('input');
\t\tdocument.body.appendChild(inp)
\t\tinp.value =that.textContent
\t\tinp.select();
\t\tdocument.execCommand('copy',false);
\t\tinp.remove();
\t\t}
\t</script>
</div>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/offersblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  61 => 9,  53 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/offersblock.twig", "");
    }
}
