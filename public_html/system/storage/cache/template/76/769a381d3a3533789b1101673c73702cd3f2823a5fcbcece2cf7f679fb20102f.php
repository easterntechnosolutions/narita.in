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

/* naritafashion/template/extension/module/slider.twig */
class __TwigTemplate_022f3a171cad6ad8735ba7f3590a2fe42c2113c5866572b01de4fa6a2f1900bc extends \Twig\Template
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
        echo "\" class=\"slider\">
  <div class=\"slider-inner\">
    <div class=\"owl-carousel\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_sliderimages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_sliderimage"]) {
            // line 5
            echo "        <div class=\"item\">
            <a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "link", [], "any", false, false, false, 6);
            echo "\" class=\"slideshow__link\">
              <img src=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "image", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 7);
            echo "\" class=\"img-responsive\" />
                <div class=\"container\">
                  <div class=\"slider-content col-lg-5 col-md-5 col-sm-5 col-xs-6 ";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "textposition", [], "any", false, false, false, 9);
            echo "\" style=\"text-align:";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "textalignment", [], "any", false, false, false, 9);
            echo "\">
                      <div class=\"slider-inner\">
                        ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 11)) {
                // line 12
                echo "                          <div class=\"main-title\" style=\"color: ";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "textcolor", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 12);
                echo "</div>
                        ";
            }
            // line 14
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "subtitle", [], "any", false, false, false, 14)) {
                // line 15
                echo "                          <div class=\"sub-title\" style=\"color:";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "textcolor", [], "any", false, false, false, 15);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "subtitle", [], "any", false, false, false, 15);
                echo "</div>
                        ";
            }
            // line 17
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "btntext", [], "any", false, false, false, 17)) {
                // line 18
                echo "                          <div class=\"slider-btn\"><span class=\"btn-primary btn\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "btntext", [], "any", false, false, false, 18);
                echo "</span></div>
                        ";
            }
            // line 20
            echo "                      </div>
                  </div>
                </div>
            </a>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_sliderimage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo " 
    </div>
  </div>
  <script type=\"text/javascript\">
    \$('#";
        // line 29
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:true,
        nav:";
        // line 31
        echo ($context["navigation"] ?? null);
        echo ",
        dots:";
        // line 32
        echo ($context["dot"] ?? null);
        echo ",
        autoplay:";
        // line 33
        echo ($context["autoplay"] ?? null);
        echo ",
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        animateOut: 'fadeOut',
        dotsClass: 'owl-dots ";
        // line 36
        echo ($context["dot_style"] ?? null);
        echo "',
        navClass: [\"owl-prev ";
        // line 37
        echo ($context["navigation_style"] ?? null);
        echo "\",\"owl-next ";
        echo ($context["navigation_style"] ?? null);
        echo "\"],
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        responsive:{
            0:{
                items:1
            }
        }
    });
  </script>
</section>
<div id=\"_mobile_servicesblock\"></div>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 37,  135 => 36,  129 => 33,  125 => 32,  121 => 31,  116 => 29,  110 => 25,  99 => 20,  93 => 18,  90 => 17,  82 => 15,  79 => 14,  71 => 12,  69 => 11,  62 => 9,  55 => 7,  51 => 6,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/slider.twig", "");
    }
}
