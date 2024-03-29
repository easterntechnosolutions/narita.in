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

/* naritafashion/template/account/login.twig */
class __TwigTemplate_332218b59aae5f585de904d81aff12317bfc27c92ca7791cbd70488560696ad4 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-login\" class=\"container wrapper_container\">
    <div class=\"breadcrumb-container\">
    <h1 class=\"page-title\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
  </div>
    
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6 column_left";
            // line 15
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9 column_center";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12 column_full";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"breadcrumb-container\">
        <h1 class=\"page-title\">";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <ul class=\"breadcrumb\">
          ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 25
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 25);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 32
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 33
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
            <p>";
        // line 34
        echo ($context["text_register_account"] ?? null);
        echo "</p>
            <a href=\"";
        // line 35
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 39
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 40
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 41
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 43
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 44
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 47
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 48
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 49
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
                ";
        // line 50
        if (($context["success"] ?? null)) {
            // line 51
            echo "                    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
                    ";
        }
        // line 53
        echo "                    ";
        if (($context["error_warning"] ?? null)) {
            // line 54
            echo "                    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
                    ";
        }
        // line 56
        echo "              <input type=\"submit\" value=\"";
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 57
        if (($context["redirect"] ?? null)) {
            // line 58
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 60
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 64
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 65
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 67
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "naritafashion/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 67,  230 => 65,  225 => 64,  219 => 60,  213 => 58,  211 => 57,  206 => 56,  200 => 54,  197 => 53,  191 => 51,  189 => 50,  183 => 49,  177 => 48,  173 => 47,  165 => 44,  161 => 43,  156 => 41,  152 => 40,  148 => 39,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  120 => 27,  109 => 25,  105 => 24,  100 => 22,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  72 => 13,  68 => 12,  63 => 9,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/account/login.twig", "");
    }
}
