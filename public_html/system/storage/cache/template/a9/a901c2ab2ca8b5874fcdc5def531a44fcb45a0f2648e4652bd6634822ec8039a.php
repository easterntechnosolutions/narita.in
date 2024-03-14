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

/* naritafashion/template/extension/module/fivebannerblock.twig */
class __TwigTemplate_301f5cb19b9f5709fa9aad36ef0abfd4c67ea2e181fde619c3f7a4c37e9b1a5b extends \Twig\Template
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
        echo "<section class=\"fivebannerblock\">
  <div class=\"container\"> 
    <div class=\"row\">
          <h3 class=\"home-title\">";
        // line 4
        echo ($context["title"] ?? null);
        echo "</h3>
          <div class=\"banner-left col-lg-6 col-md-6 col-sm-12 col-xs-12\">
              <div class=\"bannerblock1 bannerblock col-sm-12 col-md-12 col-xs-12\">
                <a href=\"";
        // line 7
        echo ($context["banner1_link"] ?? null);
        echo "\">
                  <img src=\"";
        // line 8
        echo ($context["banner1_image"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 8);
        echo "\" class=\"img-responsive\" />
                  <div class=\"banner-data\">
                    <div class=\"banner-title1\">";
        // line 10
        echo ($context["banner1_title"] ?? null);
        echo "</div>
                    <div class=\"banner-title\">";
        // line 11
        echo ($context["banner1_title"] ?? null);
        echo "</div>
                    <div class=\"banner-title3\">";
        // line 12
        echo ($context["banner1_title"] ?? null);
        echo "</div>
                    <div class=\"banner-btn\">";
        // line 13
        echo ($context["banner1_btn"] ?? null);
        echo "</div>
                  </div>
                  <h3 class=\"blocks-title\">";
        // line 15
        echo ($context["categorytitle1"] ?? null);
        echo "</h3>
                </a>  
              </div> 
          </div>
          <div class=\"banner-right col-lg-6 col-md-6 col-sm-12 col-xs-12\">

              <div class=\"bannerblock2 bannerblock col-lg-6 col-sm-6 col-md-6 col-xs-6\">
                <a href=\"";
        // line 22
        echo ($context["banner2_link"] ?? null);
        echo "\">
                  <img src=\"";
        // line 23
        echo ($context["banner2_image"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 23);
        echo "\" class=\"img-responsive\" />
                  <div class=\"banner-data\">
                    <div class=\"banner-title\">";
        // line 25
        echo ($context["banner2_title"] ?? null);
        echo "</div>
                  </div>
                </a>  
              </div>
              <div class=\"bannerblock3 bannerblock col-lg-6 col-sm-6 col-md-6 col-xs-6\">
                <a href=\"";
        // line 30
        echo ($context["banner3_link"] ?? null);
        echo "\">
                  <img src=\"";
        // line 31
        echo ($context["banner3_image"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 31);
        echo "\" class=\"img-responsive\" />
                  <div class=\"banner-data\">
                    <div class=\"banner-title\">";
        // line 33
        echo ($context["banner3_title"] ?? null);
        echo "</div>
                  </div>
                </a>  
              </div>
               <div class=\"bannerblock4 bannerblock col-lg-6 col-sm-6 col-md-6 col-xs-6\"> 
                  <a href=\"";
        // line 38
        echo ($context["banner4_link"] ?? null);
        echo "\">
                    <img src=\"";
        // line 39
        echo ($context["banner4_image"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 39);
        echo "\" class=\"img-responsive\" />
                    <div class=\"banner-data\">
                      <div class=\"banner-title\">";
        // line 41
        echo ($context["banner4_title"] ?? null);
        echo "</div>
                    </div>
                  </a>  
               </div>
               <div class=\"bannerblock5 bannerblock col-lg-6 col-sm-6 col-md-6 col-xs-6\"> 
                  <a href=\"";
        // line 46
        echo ($context["banner5_link"] ?? null);
        echo "\">
                    <img src=\"";
        // line 47
        echo ($context["banner5_image"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 47);
        echo "\" class=\"img-responsive\" />
                    <div class=\"banner-data\">
                      <div class=\"banner-title\">";
        // line 49
        echo ($context["banner5_title"] ?? null);
        echo "</div>
                    </div>
                  </a>  
               </div>
          </div>
  </div>
  </div>
</section>     ";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/fivebannerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 49,  147 => 47,  143 => 46,  135 => 41,  128 => 39,  124 => 38,  116 => 33,  109 => 31,  105 => 30,  97 => 25,  90 => 23,  86 => 22,  76 => 15,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  52 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/fivebannerblock.twig", "");
    }
}
