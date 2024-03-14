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

/* naritafashion/template/extension/module/filter.twig */
class __TwigTemplate_1ca80c3c9592dbbbc68531acbdc8a68075968adaddab02ab9468ebd13fb7200c extends \Twig\Template
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
        echo "<div class=\"filterbox\">
  <div class=\"page-title hidden-sm hidden-xs\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#filterbox-container\" data-toggle=\"collapse\">
    <span class=\"page-title\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</span>
    <span class=\"navbar-toggler collapse-icons\">
      <i class=\"fa fa-angle-down add\"></i>
      <i class=\"fa fa-angle-up remove\"></i>
    </span>
  </div>
  <div id=\"filterbox-container\" class=\"collapse data-toggler\">
    <div class=\"list-group-filter\"> 
     
      <div id=\"filter\" class=\"panel-group\" role=\"tab\"> 
         ";
        // line 14
        $context["index"] = 0;
        // line 15
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 16
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\" role=\"tab\" id=\"headingOne";
            // line 17
            echo ($context["index"] ?? null);
            echo "\">
            <a data-toggle=\"collapse\" href=\"#tab-filter";
            // line 18
            echo ($context["index"] ?? null);
            echo "\" data-parent=\"#filter\" aria-expanded=\"";
            if ((($context["index"] ?? null) == 0)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" class=\"list-group-item group-name ";
            if ((($context["index"] ?? null) == 0)) {
                echo " ";
            } else {
                echo "collapsed";
            }
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 18);
            echo "
              <div class=\"plus-icon\">
                <?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>
                    <!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\">
                    <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"14px\" height=\"14px\" viewBox=\"0 0 14 14\" enable-background=\"new 0 0 14 14\" xml:space=\"preserve\">  <image id=\"image0\" width=\"14\" height=\"14\" x=\"0\" y=\"0\"
                        href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAQAAAC1QeVaAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                    AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                    cwAAAHYAAAB2AU57JggAAAAHdElNRQfmCAEJMwPmtnGeAAADuHpUWHRSYXcgcHJvZmlsZSB0eXBl
                    IHhtcAAASImdVluSqzoM/NcqzhJAsiW8nCTA36m6n3f5p1vOJBBIamZChRDbklqtF/L/3//kDz5j
                    aU3sZmtMMfjo5levUXRw9erhzRebVZf1er2uqlhvXrhSw2qZbShzDMVwdvImZYpLQLBaXMpSi+MX
                    Cs0gpGqrLTrYLSa7xOQQ9JnGfNSB//3mSxj3hBaApvhKHHbpG4/jieSpBmtXSpSHhA51KnMdRAlu
                    jVwy18UGnYFnwAUVFtawNppbweXYvWFVLb+64rfiPpqKznnsgqWC+2ihw8uld/cUKHCyainFX1xT
                    yU26N0XBNdgF7qyRH10Cp3RJxJGWG69Eorgr7nM3AERhgfiQkZjgFixwf48CEBAqBEK9JVMNDOHE
                    176PAsLWALFE1YndxoIEH/GmseUZIjyb4HGGKxPwkLwx6V5fVULETggYAEH9Ruele8+DuFcIVoae
                    rsJqVzweFSOfJngCRHCYT4N8D/gd90H86YOc81JmlMBPTEyy5wYK5xNHLEqp4T0k58rlTPteOSs0
                    EHScWatmGqxJMsqV6jujwpzp9mmjMFMqFJEHrTSy+u1QXUeuQLamZSjTqWbroADS2rS9MVFL6b80
                    cK+7rLXBpryPtaAIalYc6j0T/MqyxDPKeKd2dqZMc4/W1cpe7we1FXX+Xm0V1ph3qOMZ5O+qlq47
                    S+DinnU+U10GuvEZTbdmMi6oAeI4UE0GWWs3it+97mjsrUBjf6us+hVmG0uKEmGCNoV+jz7ZCpCj
                    U7DnIEXgjGadPbjIbIcqpmASsmQmgWyqkn4I6dhyRlyMbacZZopNsNY5Ag/o33jCKiCha43G8VCx
                    1phAINvQ+iE6pQJ8DwiYhhaPnvCFYDcw8CSAl0jOGDGGAD0QNoMY75i4OGNlMs6Z2ZXtV5CwaP9A
                    NSXcCu1gE5vTNlfu6BjT1kcnEN22aGUL98FX6SihjmPInQGIZASGyGGOrAZEDEpCkKSO4DDBMgVR
                    zZb4IPg1AraoMJ4zakAX7TkiJCcVwhjjfm4gQxoce3aiC98OvuZH0r0pYyhKHrbH3+TJa5q8ui2f
                    /P7s9h6ARCDYtYP9RqGetZZUJ10f2yd6S4HakZ6XLFVG9DvdkbktH7rj+hP6pdcucLCJl99SbyG/
                    K9FjhcoewQ+p3/RI2XP/e+plz/3HwbTljlLkjQZ6Y8sBfY+Pro/Xu03R5Oz9WGuUk09vZAf1+fb4
                    VL99Zc5x1LdOXtwr3ctwa3/nln/iB7p1W9w/KQAAAFBJREFUGNOtz8ENQFAQBNBHvn5ElPnVowmh
                    IIKrldiTuU1eMpvlmUl91hKwD+2FR8RWkhTj7BmxUQ12cBmxaEBnTWdjZvP3zdfOX6+UDLeINyEa
                    CjYZnU/FAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIyLTA4LTAxVDA5OjUxOjAzKzAwOjAwre30bwAA
                    ACV0RVh0ZGF0ZTptb2RpZnkAMjAyMi0wOC0wMVQwOTo1MTowMyswMDowMNywTNMAAAAASUVORK5C
                    YII=\" />
                    </svg>
              </div>
              <div class=\"minus-icon\">
                <?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>
                <!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\">
                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"14px\" height=\"14px\" viewBox=\"0 0 14 14\" enable-background=\"new 0 0 14 14\" xml:space=\"preserve\">  <image id=\"image0\" width=\"14\" height=\"14\" x=\"0\" y=\"0\"
                    href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAQAAAC1QeVaAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                cwAAAHYAAAB2AU57JggAAAAHdElNRQfmCAEJMw6YBw0jAAADsHpUWHRSYXcgcHJvZmlsZSB0eXBl
                IHhtcAAASImdVluS6joM/NcqzhISyZbi5QBJ/k7V/bzLP90yAwkJ1MyQwhg/pFbrFfn/73/yB5+x
                tCZ2szWmGHx086vXKDq4evXw5ovNqst6vV5XVaw3L1ypYbXMNpQ5hmI4O3mTMsUlcLFaXMpSi+MX
                As1wSdVWW3SwW0x2iclx0Wcq81EH/vebL2HcE2oAmuIrcdilbzyOJ5KnGKxdeaM8buhQpzLXQZTg
                1sglc11s0Bl4BjwQYWENa6O5FTyO3RtW1fKrK34rxtFUdM5jFywVjKOFDi+P3s1ToMDJqqUUfzFN
                JTdp3hQFz2AXmLNGfnQJnNIlEUdqbnwSiWJUjHNXAERhAf+QkZhgFjRwf48CEOAqOEK9JVMNDOHE
                176PAsLWALFE1Ynd+oIEH/GmsuXpIsxNMJ1hygQ8JG9MutdXkbhiJwQMgKB+o/HSredBjBUXK11P
                U6G1Cx6PghFPEywBIhjM2SDfA37Hfbj+tEHOeSkzUuAnKibZcwOB84khFqXU8O6Sc+FyJn0vnBka
                cDrOrFUzDNYkGelK8Z1RYcx0/dRRGCkVgsiDVipZ/XbIriNXIFtTM4TpVLN08ALC2rS9UVFL6b9U
                cM+7zLXBphzHWpAENTOuZfaNemVaYo403omdnSHT3KN1sbKX+0HsiPX3Yqswx7xDHc8gf1e0dNmZ
                Ahf3zPOZ4tLRjXMU3ZrBuCAHiONANRlkrt14/W51R2NvLzTWt8qsX6G2MaV4I0xQplDvUSdbAXJU
                CsJGiMAYzTx7cJHRDlEMwSRkyUgC2RQl/RDCsWWPuEBIs3sxZa3ROfuLZwlGZltBU5hxZsTT18hS
                lZzQJLYAFtpXBAxDi0dN+EKwaxiYCbQlkjNGaCgUUU0qIjq0qZzZhCBA6cYaUFqIFcLDAcUR5A1o
                QrfImR7Q0aett04gum3Ryhbug69y56sBh1kAAzjrfKFBRcYVYwrfRKTkyOifhOm9e2GDhpDerxaw
                RYX2nF4DumjPFiHZqeDGGPd9AxHSYNizEl3ova/+kXRv0hiCkoft8TdxcgiTF7Plk92fzd4DkAg4
                u3aw30jUs9KS4qTLY/lEbSkQO9LykqlKj36nOrI4yofquP6Efum5Cxws4uXX1Lv8LkWPGSp7BD+k
                flMjZc/976mXPfcfG9OWO94ib1TQC1s26Lt/dH283m2SJnvvx1zjPfn0RnYQn2+PT/HbV+ZsR33r
                5MW90rx0t/Z3bvkHhPC6En/f1t0AAAAjSURBVBjTY/zPgBswMQwySUaGAIYoHHJLmRhw++U/45Dy
                JwDoOgVlscWPqgAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMi0wOC0wMVQwOTo1MToxNCswMDowMKTg
                yn8AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjItMDgtMDFUMDk6NTE6MTQrMDA6MDDVvXLDAAAAAElF
                TkSuQmCC\" />
                </svg>
              </div>
            </a>
          </div>
          <div id=\"tab-filter";
            // line 80
            echo ($context["index"] ?? null);
            echo "\" class=\"panel-collapse collapse ";
            if ((($context["index"] ?? null) == 0)) {
                echo " in ";
            }
            echo "\" role=\"tabpanel\" aria-labelledby=\"headingOne\">  
            <div class=\"list-group-item\">
              <div id=\"filter-group";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 82);
            echo "\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 82));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 83
                echo "                <div class=\"checkbox\">
                  <label>";
                // line 84
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 84), ($context["filter_category"] ?? null))) {
                    // line 85
                    echo "                    <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 85);
                    echo "\" checked=\"checked\" />
                    ";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 86);
                    echo "
                    ";
                } else {
                    // line 88
                    echo "                    <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 88);
                    echo "\" />
                    ";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 89);
                    echo "
                    ";
                }
                // line 91
                echo "                  </label>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "              </div>
            </div>
          </div>
        </div>
         ";
            // line 98
            $context["index"] = (($context["index"] ?? null) + 1);
            // line 99
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "      </div>

     
    </div>
    <div class=\"panel-footer text-left\">
      <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 105
        echo ($context["button_filter"] ?? null);
        echo "</button>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tfilter = [];

\t\$('input[name^=\\'filter\\']:checked').each(function(element) {
\t\tfilter.push(this.value);
\t});

\tlocation = '";
        // line 117
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
  

  
});
  \$( \"input[name^=\\'filter\\']\" ).click(function() {
     \$('#button-filter').trigger('click');
  });
//--></script> 
";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 117,  220 => 105,  213 => 100,  207 => 99,  205 => 98,  199 => 94,  191 => 91,  186 => 89,  181 => 88,  176 => 86,  171 => 85,  169 => 84,  166 => 83,  160 => 82,  151 => 80,  72 => 18,  68 => 17,  65 => 16,  60 => 15,  58 => 14,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/filter.twig", "");
    }
}
