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

/* naritafashion/template/information/blogger.twig */
class __TwigTemplate_da3967bbb0c61bd6e9c37e893b985f78e7848caf7188595553cdb6bc3738c91a extends \Twig\Template
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
<div class=\"container wrapper_container\">
  <div class=\"row\">
  \t";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6 column_left";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9 column_center";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12 column_full";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " single-blog\">";
        echo ($context["content_top"] ?? null);
        echo "

\t\t<div class=\"breadcrumb-container\">
\t\t  <h1 class=\"page-title\">";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t  <ul class=\"breadcrumb\">
\t\t    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "\t\t    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a></li>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t  </ul>
\t\t</div>
      ";
        // line 22
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["blogs"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["image"] ?? null) : null)) {
            echo " 
  \t\t<div class=\"blog-img\">
  \t\t\t<img src=\"";
            // line 24
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["blogs"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["image"] ?? null) : null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"img-responsive\" />
  \t\t</div>
\t  ";
        }
        // line 27
        echo "\t  <div class=\"blog-date\">";
        echo ($context["date"] ?? null);
        echo "</div>
      <div class=\"page-item-title\">
      \t<h1>";
        // line 29
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      </div>
\t  <div class=\"blog-desc\"> ";
        // line 31
        echo ($context["description"] ?? null);
        echo " </div>
      ";
        // line 32
        if (($context["success"] ?? null)) {
            echo " 
      \t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 33
            echo ($context["success"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
      ";
        }
        // line 35
        echo "      <div class=\"smartblogcomments\">
\t      ";
        // line 36
        if (($context["blog_comments"] ?? null)) {
            echo " 
\t      \t\t<div class=\"reply-title\">";
            // line 37
            echo ($context["text_your_comments"] ?? null);
            echo "</div>
\t\t        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blog_comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog_comment"]) {
                echo " 
\t\t\t        <div class=\"view-comment\">
        \t\t\t\t<div class=\"user_icon\"><i class=\"fa fa-user-o\"></i></div>
        \t\t\t\t<div class=\"user_list\">
        \t\t\t\t\t<div class=\"name\">";
                // line 42
                echo ($context["entry_author"] ?? null);
                echo " : ";
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "author", [], "any", false, false, false, 42);
                echo "</div>
        \t\t\t\t\t<div class=\"date\">";
                // line 43
                echo ($context["text_date_added"] ?? null);
                echo " : ";
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "date_added", [], "any", false, false, false, 43);
                echo "</div>
        \t\t\t\t\t<div class=\"comment-text\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "comment", [], "any", false, false, false, 44);
                echo "</div>
        \t\t\t\t</div>
\t\t\t        </div>
\t\t      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo " 
\t      ";
        }
        // line 49
        echo "\t  </div>
      ";
        // line 50
        if (($context["allow_comments"] ?? null)) {
            // line 51
            echo "\t  <div class=\"block-title\"><div class=\"reply-title\">";
            echo ($context["button_comment_add"] ?? null);
            echo "</div></div>
      <div class=\"panel panel-default\" id=\"add-comment\">
        ";
            // line 53
            if ((($context["login_required"] ?? null) &&  !($context["is_logged"] ?? null))) {
                echo " 
        \t<h4 class=\"text-center\">";
                // line 54
                echo ($context["text_login_required"] ?? null);
                echo "</h4>
        ";
            } else {
                // line 55
                echo " 
\t        <form action=\"";
                // line 56
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t          <div class=\"form-group required\">
\t            <label class=\"col-sm-3 control-label\" for=\"input-author\">";
                // line 58
                echo ($context["entry_author"] ?? null);
                echo "</label>
\t            <div class=\"col-sm-9\">
\t              <input type=\"text\" name=\"author\" value=\"";
                // line 60
                echo ($context["author"] ?? null);
                echo "\" id=\"input-author\" placeholder=\"";
                echo ($context["entry_author"] ?? null);
                echo "\" class=\"form-control\" />
\t              ";
                // line 61
                if (($context["error_author"] ?? null)) {
                    echo " 
\t              <div class=\"text-danger\">";
                    // line 62
                    echo ($context["error_author"] ?? null);
                    echo "</div>
\t              ";
                }
                // line 63
                echo " 
\t            </div>
\t          </div>
\t          <div class=\"form-group required\">
\t            <label class=\"col-sm-3 control-label\" for=\"input-email\">";
                // line 67
                echo ($context["entry_email"] ?? null);
                echo "</label>
\t            <div class=\"col-sm-9\">
\t              <input type=\"text\" name=\"email\" value=\"";
                // line 69
                echo ($context["email"] ?? null);
                echo "\" id=\"input-email\" placeholder=\"";
                echo ($context["entry_email"] ?? null);
                echo "\" class=\"form-control\" />
\t              ";
                // line 70
                if (($context["error_email"] ?? null)) {
                    echo " 
\t              <div class=\"text-danger\">";
                    // line 71
                    echo ($context["error_email"] ?? null);
                    echo "</div>
\t              ";
                }
                // line 72
                echo " 
\t            </div>
\t          </div>
\t          <div class=\"form-group\">
\t            <label class=\"col-sm-3 control-label\" for=\"input-comment\">";
                // line 76
                echo ($context["entry_comment"] ?? null);
                echo "</label>
\t            <div class=\"col-sm-9\">
\t              <textarea name=\"comment\" rows=\"10\" id=\"input-comment\" class=\"form-control\" />";
                // line 78
                echo ($context["comment"] ?? null);
                echo "</textarea>
\t              ";
                // line 79
                if (($context["error_comment"] ?? null)) {
                    echo " 
\t              <div class=\"text-danger\">";
                    // line 80
                    echo ($context["error_comment"] ?? null);
                    echo "</div>
\t              ";
                }
                // line 81
                echo " 
\t            </div>
\t          </div>
\t          ";
                // line 84
                echo ($context["captcha"] ?? null);
                echo " 
\t          <input type=\"hidden\" name=\"auto_approve\" value=\"";
                // line 85
                echo ($context["auto_approve"] ?? null);
                echo "\" />
\t\t\t  <div class=\"col-sm-3\"></div>
\t          <div class=\"col-sm-10 submit-btn buttons text-left\">
\t\t\t  \t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
                // line 88
                echo ($context["button_submit"] ?? null);
                echo "\" title=\"";
                echo ($context["button_submit"] ?? null);
                echo "\" />
\t\t\t  </div>
\t        </form>
        ";
            }
            // line 92
            echo "      </div>
      <div class=\"buttons text-right\"></div>
      
     ";
        }
        // line 96
        echo "    ";
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  ";
        // line 97
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 99
        echo ($context["footer"] ?? null);
        echo "
<style>
    .single-blog .blog-img img {
        
        margin: 0 auto;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/information/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 99,  319 => 97,  313 => 96,  307 => 92,  298 => 88,  292 => 85,  288 => 84,  283 => 81,  278 => 80,  274 => 79,  270 => 78,  265 => 76,  259 => 72,  254 => 71,  250 => 70,  244 => 69,  239 => 67,  233 => 63,  228 => 62,  224 => 61,  218 => 60,  213 => 58,  208 => 56,  205 => 55,  200 => 54,  196 => 53,  190 => 51,  188 => 50,  185 => 49,  181 => 47,  171 => 44,  165 => 43,  159 => 42,  150 => 38,  146 => 37,  142 => 36,  139 => 35,  134 => 33,  130 => 32,  126 => 31,  121 => 29,  115 => 27,  105 => 24,  100 => 22,  96 => 20,  85 => 18,  81 => 17,  76 => 15,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/information/blogger.twig", "");
    }
}
