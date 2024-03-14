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

/* naritafashion/template/extension/module/featuredcollectionblock.twig */
class __TwigTemplate_ac4ca19f110a1f315614522a9b1111095ee65b529ff5bca367b711d66b72616b extends \Twig\Template
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
        echo "\" class=\"featuredcollectionblock\">
    <div class=\"container\">
        <div class=\"section-header\">    
            <h3 class=\"home-title\">";
        // line 4
        echo ($context["heading"] ?? null);
        echo "</h3>
        </div>
        <div class=\"featured-content\">
            <div class=\"featured-inner\">
                <div class=\"grid-container\">
                  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            echo "  
                    <div class=\"featuredcollectionblock-container\">
                      <div class=\"image-container\"> 
                        <div class=\"item\">
                            <div class=\"featured-image\">
                                <a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "categorylink", [], "any", false, false, false, 14);
            echo "\">
                                  <img src=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 15);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 15);
            echo "\" class=\"img-responsive\" />
                                  
                                  <span class=\"heading\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "categorytitle", [], "any", false, false, false, 17);
            echo "</span>
                                </a>
                            </div>  
                        </div>  
                      </div>   
                    </div>   
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo " 
                </div>
            </div>
        </div>
    </div>
  <!-- <script type=\"text/javascript\">
    \$('#";
        // line 29
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        margin:30,
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        rtl: \$('html').attr('dir') == 'rtl'? true : false,    
        rewind: true,
        responsive:{
            0:{
                items:2,
                margin:15
            },
            501:{
                items:3,
                margin:15
            },
            544:{
                items:3
            },
            768:{
                items:3
            },
            992:{
                items:4
            },
            1200:{
                items:4
            }
        }
    });
  </script> -->
</section>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/featuredcollectionblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  86 => 23,  73 => 17,  66 => 15,  62 => 14,  52 => 9,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/featuredcollectionblock.twig", "");
    }
}
