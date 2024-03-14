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

/* naritafashion/template/extension/module/blogger.twig */
class __TwigTemplate_55a32fa6863678d3d488a7eb91dff75bc18f19166ab9cd0a8d22ea1c8038f123 extends \Twig\Template
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
        echo "<section class=\"smartblog_block clearfix\">
\t<div class=\"block_content container\">
\t\t<div class=\"row\">
\t\t    <div class=\"section-header\">
\t\t      \t<h2 class=\"home-title\">";
        // line 5
        echo ($context["heading"] ?? null);
        echo "</h2>
\t\t    </div>
\t\t\t<div id=\"smartblog-carousel\" class=\"smartblog-carousel owl-carousel\">
\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo "\t
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"blog_post\">
\t\t\t\t\t\t\t<div class=\"news_module_image_holder\">
\t\t\t\t\t\t\t\t";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 12)) {
                echo " 
\t\t\t\t\t\t\t\t<a href=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 13);
                echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 14);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 16
            echo " 
\t\t\t\t\t\t\t\t<div class=\"date-month\">
\t\t\t\t\t\t\t\t\t<div class=\"date-time\">";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 18);
            echo "</div>
\t\t\t\t\t\t\t\t</div>\t \t\t \t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"blog_content\">
\t\t\t\t\t\t\t\t<h4 class=\"blog_title\"><a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 22);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 22);
            echo "</a> </h4>
\t\t\t\t\t\t\t\t<div class=\"blog-desc\"> ";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 23);
            echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<script type=\"text/javascript\">
\t\t\$('.smartblog_block .owl-carousel').owlCarousel({
\t\t\tloop:true,
\t\t\tnav:true,
\t\t\tdots:";
        // line 35
        echo ($context["dots"] ?? null);
        echo ",
\t\t\trtl: \$('html').attr('dir') == 'rtl'? true : false,
\t\t\tnavText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
\t\t\tautoplay:false, 
\t\t\tresponsive:{
\t\t\t\t0:{
                \titems:1
\t\t\t\t},
\t\t\t\t544:{
\t\t\t\t\titems:1
\t\t\t\t},
\t\t\t\t768:{
\t\t\t\t\titems:2
\t\t\t\t},
\t\t\t\t992:{
\t\t\t\t\titems:2
\t\t\t\t},
\t\t\t\t1200:{
\t\t\t\t\titems:3
\t\t\t\t}
\t\t\t}
\t\t});
\t</script>
</section>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  104 => 28,  93 => 23,  87 => 22,  80 => 18,  76 => 16,  66 => 14,  62 => 13,  58 => 12,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/blogger.twig", "");
    }
}
