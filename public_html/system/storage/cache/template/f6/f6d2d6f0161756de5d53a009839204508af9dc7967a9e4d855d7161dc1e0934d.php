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

/* naritafashion/template/information/blogger_blogs.twig */
class __TwigTemplate_eb73f23896eba95b276c690360d7da74b65b5da8ecb4e2ff7b022479b00757f1 extends \Twig\Template
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
<div class=\"breadcrumb-container\">
  <img src=\"image/catalog/blogbreadcrumb.png\"/>
  <div class=\"container\">
    <h1 class=\"page-title\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
  </div>
</div>
<div class=\"container wrapper_container\">
  <div class=\"row\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 16
            $context["class"] = "col-sm-6 column_left";
            echo " 
    ";
        } elseif ((        // line 17
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 18
            $context["class"] = "col-sm-9 column_center";
            echo " 
    ";
        } else {
            // line 19
            echo " 
    ";
            // line 20
            $context["class"] = "col-sm-12 column_full";
            echo " 
    ";
        }
        // line 21
        echo " 
    <div id=\"content\" class=\"";
        // line 22
        echo ($context["class"] ?? null);
        echo " all-blog\">";
        echo ($context["content_top"] ?? null);
        echo " 
      <h1>";
        // line 23
        echo ($context["text_blogs"] ?? null);
        echo "</h1>
      ";
        // line 24
        if (($context["blogs"] ?? null)) {
            echo " 
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
          <div class=\"sdsarticleCat clearfix row\">
            ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 27)) {
                    echo " 
              ";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
                        echo " 
                <div class=\"blog-content col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                  <a href=\"";
                        // line 30
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 30);
                        echo "\">
                    ";
                        // line 31
                        if (twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 31)) {
                            echo " 
                      <div class=\"blog-left-content articleContent\">
                        <div class=\"blog-image\">
                          <img src=\"";
                            // line 34
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 34);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" class=\"img-responsive\" />
                        </div>
                      </div>
                    ";
                        }
                        // line 37
                        echo " 
                      <div class=\"blog-right-content smartblog-desc\">
                        <div class=\"blog-date-comment\">
                          <div class=\"blog-title\">";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 40);
                        echo "</div>
                          <div class=\"blog-date\">";
                        // line 41
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "date_added", [], "any", false, false, false, 41);
                        echo "</div>
                          <!-- <div class=\"comment-wrapper\">
                            <i class=\"fa fa-comments\"></i> <span class=\"write-comment-count\">";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "total_comments", [], "any", false, false, false, 43);
                        echo " ";
                        echo ($context["entry_comment"] ?? null);
                        echo "</span>
                            <span class=\"write-comment\"> <a href=\"";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 44);
                        echo "\">";
                        echo ($context["text_leave_comment"] ?? null);
                        echo "</a> </span>
                          </div> -->
                        </div>
                        <div class=\"blog-desc\">";
                        // line 47
                        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "description", [], "any", false, false, false, 47), 0, 135);
                        echo " </div>      
                        <div class=\"read-more btn btn-default\">";
                        // line 48
                        echo ($context["text_read_more"] ?? null);
                        echo "</div>  
                      </div>
                  </a>    
                </div>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo " 
            ";
                } else {
                    // line 53
                    echo " 
              <div class=\"panel-body text-center\">";
                    // line 54
                    echo ($context["text_no_blogs"] ?? null);
                    echo "</div>
            ";
                }
                // line 55
                echo " 
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo " 
      ";
        } else {
            // line 58
            echo " 
        <div class=\"panel-body text-center\">";
            // line 59
            echo ($context["text_no_blogs"] ?? null);
            echo "</div>
      ";
        }
        // line 60
        echo " 
      ";
        // line 61
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
  ";
        // line 63
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 65
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "naritafashion/template/information/blogger_blogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 65,  239 => 63,  233 => 61,  230 => 60,  225 => 59,  222 => 58,  218 => 57,  210 => 55,  205 => 54,  202 => 53,  198 => 52,  187 => 48,  183 => 47,  175 => 44,  169 => 43,  164 => 41,  160 => 40,  155 => 37,  144 => 34,  138 => 31,  134 => 30,  127 => 28,  123 => 27,  116 => 25,  112 => 24,  108 => 23,  102 => 22,  99 => 21,  94 => 20,  91 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  64 => 10,  53 => 8,  49 => 7,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/information/blogger_blogs.twig", "");
    }
}
