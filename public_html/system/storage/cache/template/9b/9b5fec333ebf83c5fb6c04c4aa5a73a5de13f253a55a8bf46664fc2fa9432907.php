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

/* naritafashion/template/information/contact.twig */
class __TwigTemplate_efd97d50b623bf915b674f4ba931b77a32607c32942b44b2707df9cb86d357c1 extends \Twig\Template
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
<div id=\"information-contact\" class=\"container wrapper_container\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6 column_left";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9 column_center";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12 column_full";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <form action=\"";
        // line 12
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal col-md-6 col-sm-12\">
        <fieldset>
          <h3>";
        // line 14
        echo ($context["text_contact"] ?? null);
        echo "</h3>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 16
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 18
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 19
        if (($context["error_name"] ?? null)) {
            // line 20
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 22
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 control-label\" for=\"input-email\">";
        // line 25
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 27
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 28
        if (($context["error_email"] ?? null)) {
            // line 29
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 31
        echo "            </div>
          </div>
          <div class=\"form-group required mb\">
            <label class=\"col-sm-3 control-label\" for=\"input-enquiry\">";
        // line 34
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 36
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 37
        if (($context["error_enquiry"] ?? null)) {
            // line 38
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 40
        echo "            </div>
          </div>
          ";
        // line 42
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-middle\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 46
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      
      ";
        // line 51
        if (($context["locations"] ?? null)) {
            // line 52
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 55
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 57);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 57);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 59);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 62
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 63);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 63);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 63);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 65
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 65);
                echo "</strong><br />
                  <address>
                  ";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 67);
                echo "
                  </address>
                  ";
                // line 69
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 70));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 72
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 73
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                  ";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 74);
                echo "<br/>
                  <br/>
                  ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 78);
                    echo "
                  ";
                }
                // line 80
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 84);
                    echo "<br />
                  <br />
                  ";
                }
                // line 87
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 89);
                    echo "
                  ";
                }
                // line 91
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "      </div>
      ";
        }
        // line 99
        echo "      <div class=\"panel panel-default contact-location col-md-6 col-sm-12\">
        <div class=\"panel-body\">
          <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>";
        // line 103
        echo ($context["text_location"] ?? null);
        echo "</h3>
                <div class=\"col-sm-12 store-address\"><div class=\"location-title\"><i class=\"fa fa-home\"></i>";
        // line 104
        echo ($context["store"] ?? null);
        echo "</div>
                <address class=\"location-detail\">
                ";
        // line 106
        echo ($context["address"] ?? null);
        echo "
                </address>
              </div>
              <div class=\"col-sm-12 store-contact\">
                <div class=\"location-title\"><i class=\"fa fa-phone\"></i>";
        // line 110
        echo ($context["text_telephone"] ?? null);
        echo "</div>
                <address class=\"location-detail\">";
        // line 111
        echo ($context["telephone"] ?? null);
        echo "</address>
              </div>
              <div class=\"col-sm-12 store-fax\">
                ";
        // line 114
        if (($context["fax"] ?? null)) {
            // line 115
            echo "                <div class=\"location-title\"><i class=\"fa fa-fax\"></i>";
            echo ($context["text_fax"] ?? null);
            echo "</div>
                <address class=\"location-detail\">";
            // line 116
            echo ($context["fax"] ?? null);
            echo "</address>
                ";
        }
        // line 118
        echo "              </div>
              <div class=\"col-sm-12 store-status\">
                ";
        // line 120
        if (($context["open"] ?? null)) {
            // line 121
            echo "                <div class=\"location-title\"><i class=\"fa fa-envelope-open-o\"></i>";
            echo ($context["text_open"] ?? null);
            echo "</div>
                <address class=\"location-detail\">";
            // line 122
            echo ($context["open"] ?? null);
            echo "</address>
                ";
        }
        // line 124
        echo "              </div>
              <div class=\"col-sm-12 store-comment\">
                ";
        // line 126
        if (($context["comment"] ?? null)) {
            // line 127
            echo "                <div class=\"location-title\"><i class=\"fa fa-comment-o\"></i>";
            echo ($context["text_comment"] ?? null);
            echo "</div>
                <address class=\"location-detail\">";
            // line 128
            echo ($context["comment"] ?? null);
            echo "</address>
                ";
        }
        // line 130
        echo "              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"map\">
                ";
        // line 134
        if (($context["geocode"] ?? null)) {
            // line 135
            echo "                <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
                ";
        }
        // line 137
        echo "              </div>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 142
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 143
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<style>
#information-contact .form-horizontal .form-control {
    border: 1px solid #eee;
    padding: 6px;
    margin: 0 0 6px;
}
@media (max-width: 991px) {
    #information-contact .form-horizontal .form-control {
        margin: 5px 0 0px;
    }
}
.mb {
    margin-bottom: 0;
}
#information-contact .contact-location .location-title {
    margin-bottom:10px;
    display: flex;
    align-items: center;
}
#information-contact #content {
    margin-top: 20px;
}
@media (max-width: 991px) {
    #information-contact #content .form-horizontal .buttons {
        margin: 15px 0 25px !important;
    }
}
.pull-middle {
    float: none;
    text-align: center;
}
.contact-location h3 {
    margin-top: 0;
}

#information-contact #content .form-horizontal .buttons {
    margin: 0;
} 
#information-contact #content h3 {
    margin-bottom: 20px;
}
#information-contact .contact-location .location-title i {
        margin: 0px 8px 0px 0;
        top: auto;
}
</style>
";
        // line 191
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "naritafashion/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 191,  402 => 143,  397 => 142,  390 => 137,  380 => 135,  378 => 134,  372 => 130,  367 => 128,  362 => 127,  360 => 126,  356 => 124,  351 => 122,  346 => 121,  344 => 120,  340 => 118,  335 => 116,  330 => 115,  328 => 114,  322 => 111,  318 => 110,  311 => 106,  306 => 104,  302 => 103,  296 => 99,  292 => 97,  281 => 91,  276 => 89,  271 => 88,  268 => 87,  262 => 84,  257 => 83,  255 => 82,  251 => 80,  246 => 78,  241 => 77,  239 => 76,  234 => 74,  230 => 73,  227 => 72,  217 => 70,  215 => 69,  210 => 67,  204 => 65,  194 => 63,  192 => 62,  186 => 59,  179 => 57,  175 => 55,  171 => 54,  165 => 52,  163 => 51,  155 => 46,  148 => 42,  144 => 40,  138 => 38,  136 => 37,  132 => 36,  127 => 34,  122 => 31,  116 => 29,  114 => 28,  110 => 27,  105 => 25,  100 => 22,  94 => 20,  92 => 19,  88 => 18,  83 => 16,  78 => 14,  73 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/information/contact.twig", "");
    }
}
