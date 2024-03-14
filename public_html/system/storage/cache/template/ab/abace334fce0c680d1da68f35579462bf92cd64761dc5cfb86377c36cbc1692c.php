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

/* naritafashion/template/common/footer.twig */
class __TwigTemplate_bdc6cecf1352052dd4d428863af19c4bec652427fc2dd4c6c05b24230c00a3af extends \Twig\Template
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
        echo "<div id=\"_mobile_column_left\" class=\"container\"></div>
<div id=\"_mobile_column_right\" class=\"container\"></div>
<footer id=\"footer\" class=\"";
        // line 3
        echo ($context["ishome"] ?? null);
        echo "\">
<div class=\"footer-container\"> 
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"ishistoreinfoblock col-lg-3 col-md-3 col-sm-12\">
          <h5 class=\"hidden-sm hidden-xs\">";
        // line 8
        echo ($context["text_storeinformation"] ?? null);
        echo "</h5>
          <div id=\"ishistoreinfo-container\" class=\"ishistoreinfo-inner\">
            <div class=\"store-description\">
              <p>";
        // line 11
        echo ($context["storecomment"] ?? null);
        echo "</p>
            </div>
          </div>
          ";
        // line 14
        echo ($context["footerbefore"] ?? null);
        echo "
        </div>
        <div id=\"_mobile_block-contact\" class=\"block-contact clearfix\"></div>
        <section class=\"extras col-lg-3 col-md-3 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 18
        echo ($context["text_extra"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#extras-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 20
        echo ($context["text_extra"] ?? null);
        echo "</span>
                <span class=\"navbar-toggler collapse-icons\">
                  <i class=\"fa fa-angle-down add\"></i>
                  <i class=\"fa fa-angle-up remove\"></i>
                </span>
              </div>
              <div id=\"extras-container\" class=\"collapse footer-dropdown\">
                <ul class=\"list-unstyled\">
                  ";
        // line 28
        if (($context["informations"] ?? null)) {
            echo "  
                       ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 30
                echo "                          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 30);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                  ";
        }
        // line 33
        echo "                  <li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
                </ul>
              </div>
            </section>
            <!-- <section class=\"account col-lg-2 col-md-2 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 38
        echo ($context["text_account"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#account-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 40
        echo ($context["text_account"] ?? null);
        echo "</span>
                <span class=\"navbar-toggler collapse-icons\">
                  <i class=\"fa fa-angle-down add\"></i>
                  <i class=\"fa fa-angle-up remove\"></i>
                </span>
              </div>
              <div id=\"account-container\" class=\"collapse footer-dropdown\">
                <ul class=\"list-unstyled\">
                  <li><a href=\"";
        // line 48
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 49
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 50
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 51
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 52
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 53
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 54
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 55
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 56
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
                </ul>
              </div>
            </section> -->
          ";
        // line 60
        echo ($context["footermiddle"] ?? null);
        echo "
        
    </div>      
  </div>
</div>
<div class=\"footer-middle\">
  <div class=\"container\">
    ";
        // line 67
        echo ($context["footerafter"] ?? null);
        echo "
  </div>
</div>
<div class=\"footer-after\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 col-md-6 col-xs-12\">
        <p class=\"footer-aftertext\">";
        // line 74
        echo ($context["powered"] ?? null);
        echo "</p>
      </div>
      <div class=\"col-lg-6 col-md-6 col-xs-12\">
        <div class=\"footertext\">
          <p>";
        // line 78
        echo ($context["text_footerblock"] ?? null);
        echo "</p>
        </div>
      </div>  
    </div>  
  </div>
</div>
<a id=\"slidetop\" href=\"#\" ></a>
</footer>
";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 87
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 89,  232 => 87,  228 => 86,  217 => 78,  210 => 74,  200 => 67,  190 => 60,  181 => 56,  175 => 55,  169 => 54,  163 => 53,  157 => 52,  151 => 51,  145 => 50,  139 => 49,  133 => 48,  122 => 40,  117 => 38,  106 => 33,  103 => 32,  92 => 30,  88 => 29,  84 => 28,  73 => 20,  68 => 18,  61 => 14,  55 => 11,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/common/footer.twig", "");
    }
}
