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

/* naritafashion/template/common/header.twig */
class __TwigTemplate_1cb549022a98125368e38cc65f3f0bb8141d7a76069c42373abb9485d820ee22 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"format-detection\" content=\"telephone=no\">
<title>";
        // line 13
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 14
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 15
        if (($context["description"] ?? null)) {
            // line 16
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 18
        if (($context["keywords"] ?? null)) {
            // line 19
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 21
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/";
        // line 27
        echo ($context["activetemplate"] ?? null);
        echo "/stylesheet/owl.carousel.min.css\" rel=\"stylesheet\">
<script src=\"catalog/view/theme/";
        // line 28
        echo ($context["activetemplate"] ?? null);
        echo "/javascripts/owl.carousel.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/";
        // line 29
        echo ($context["activetemplate"] ?? null);
        echo "/javascripts/theme.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/theme/";
        // line 30
        echo ($context["activetemplate"] ?? null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\">

<link href=\"//fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap\" rel=\"stylesheet\" />


";
        // line 35
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 36
            echo "  
<link href=\"catalog/view/theme/";
            // line 37
            echo ($context["activetemplate"] ?? null);
            echo "/stylesheet/rtl.css\" rel=\"stylesheet\">
";
        }
        // line 39
        echo "
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 41
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 41);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 41);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 41);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 44
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/support.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 54
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 54);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 54);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 57
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "<script>
\$(document).ready(function(){
    \$(\"div\").click(function(){
        \$(this).toggleClass(\"coupon-heading\");
    });
});
\$(document).ready(function(){
    \$(\"div\").click(function(){
        \$(this).toggleClass(\"voucher-heading\");
    });
});
</script>
<style>
    .quickcheckout-content #login .input-group-btn {
        float: right;
        margin-left: 10px;
    }
    @media (max-width: 991px) {
        .quickcheckout-content #login .input-group-btn {
            margin-left: 0 !important;
            margin-top: 10px;
            float: left;
        }
    }
    .quickcheckout-content #login .input-group-btn {
            margin-left: 18px;
    }
    .quickcheckout-content .quantity .btn-block .input-group-btn .btn-primary {
        background-color: #232323;
        border: 1px solid #232323;
    }
    .quickcheckout-content .quantity .btn-block .input-group-btn .btn-primary:hover {
        background-color: #722e72;
        border: 1px solid #722e72;
    }
    input[type=checkbox] {
        margin: -2px 2px 0;
    }
    #quickcheckoutconfirm .col-sm-6 {
        width: 48%!important;
    }
    .quickcheckout-content textarea {
        border: 1px solid #eee;
        margin-top: 15px;
    }
    .quantity .input-group .form-control[name^=quantity] {
        border: 1px solid #eee;
    }
    .quickcheckout-content #login .input-group {
        display: flex;
        align-items: center;
    }
    @media (max-width: 991px) {
        .quickcheckout-content #login .input-group {
            display: block;
        }
    }
    .quickcheckout-content table {
        margin-bottom: 15px;
        margin-top: 15px;
    }
    .quickcheckout-content br {
        display: none;
    }
    .quickcheckout-content .terms {
        text-align: center;
    }
    #coupon-content .input-group .form-control, #voucher-content .input-group .form-control {
        margin-bottom: 10px;
        margin-top: 0px;
    }
    #coupon-content .input-group-btn .btn-primary,#voucher-content .input-group-btn .btn-primary {
        background-color: #232323;
        border: 1px solid #232323;
    }
    #coupon-content .input-group-btn .btn-primary:hover,#voucher-content .input-group-btn .btn-primary:hover {
        background-color: #722e72;
        border: 1px solid #722e72;
    }
    #terms .quickcheckout-content {
        border: none;
    }
    .quickcheckout-content #coupon-heading:before, .quickcheckout-content #voucher-heading:before {
        position: absolute;
        content: \"\\f107\";
        right: 15px;
        left: auto;
        font-size: 19px;
        font-family: 'FontAwesome';
        color: #ffffff;
        font-weight: 400;
        top: 12px;
    }
    .quickcheckout-content #coupon-heading.coupon-heading:before, .quickcheckout-content #voucher-heading.voucher-heading:before {
        display: none;
    }
    .quickcheckout-content #coupon-heading.coupon-heading:after, .quickcheckout-content #voucher-heading.voucher-heading:after {
        transform: rotateX(175deg);
        position: absolute;
        content: \"\\f107\";
        right: 15px;
        left: auto;
        font-size: 19px;
        font-family: 'FontAwesome';
        color: #ffffff;
        font-weight: 400;
        top: 12px;
    }
    #coupon-heading {
        background: #722e72 !important;
        color: #fff !important;
        font-weight: 500 !important;
        padding: 10px 10px 12px 10px !important;
        margin-bottom: 15px !important;
        position: relative;
    }

    #voucher-heading {
        background: #722e72 !important;
        color: #fff !important;
        font-weight: 500 !important;
        padding: 10px 10px 12px 10px !important;
        margin-bottom: 15px !important;
        position: relative;
    }

    .quickcheckout-heading {
        color: #ffffff !important;
        background: #722e72 !important;
        font-size: 15px !important;
    .quickcheckout-content .col-sm-3,.quickcheckout-content .col-sm-9 {
        width: 100%;
    }
    .quickcheckout-content .input-group {
        width: 90%;
    }
    @media (max-width: 991px) {
        .quickcheckout-content .input-group {
            width: 100%;
        }
    }
</style> 
</head>

<body>
  <main> 
  \t<div id=\"menu_wrapper\"></div>
    <header id=\"header\" class=\"";
        // line 206
        echo ($context["ishome"] ?? null);
        echo "\">
\t\t<div class=\"header-height\">
\t\t\t<div class=\"header-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"mobile-width-left col-sm-4 col-xs-3\">
\t\t\t\t\t\t\t<div id=\"menu-icon\" class=\"menu-icon hidden-md hidden-lg\">
\t\t\t\t\t\t      <div class=\"nav-icon\">
\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t          <symbol id=\"menu\" viewBox=\"0 0 750 750\"><title>menu</title>
\t\t\t\t\t\t              <path d=\"M12.03,84.212h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
\t\t\t\t\t\t              C5.39,60.152,0,65.541,0,72.182C0,78.823,5.39,84.212,12.03,84.212z\"></path>
\t\t\t\t\t\t              <path d=\"M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
\t\t\t\t\t\t                  S379.58,180.455,372.939,180.455z\"></path>
\t\t\t\t\t\t              <path d=\"M372.939,300.758H12.03c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h360.909
\t\t\t\t\t\t              c6.641,0,12.03-5.39,12.03-12.03C384.97,306.147,379.58,300.758,372.939,300.758z\"></path>
\t\t\t\t\t\t          </symbol>
\t\t\t\t\t\t        </svg>
\t\t\t\t\t\t        <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#menu\" x=\"22%\" y=\"25%\"></use></svg>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t    \t\t\t\t\t<div id=\"_mobile_seach_widget\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"desktop-logo col-xs-4 col-sm-4 col-md-2 col-lg-2\">
\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t";
        // line 231
        if (($context["logo"] ?? null)) {
            // line 232
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t";
        } else {
            // line 234
            echo "\t\t\t\t\t\t\t<span style=\"font-size: 20px;line-height: 20px;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 235
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 236
            echo ($context["name"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
        }
        // line 240
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>   
\t\t\t\t\t\t";
        // line 242
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t<div class=\"mobile-width-right col-sm-4 col-xs-4\">
\t    \t\t\t\t\t<div id=\"_mobile_cart\"></div>
\t    \t\t\t\t\t<div id=\"_mobile_user-info\"></div>
\t   \t \t\t\t\t\t<div id=\"_mobile_link_menu\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"desktop-custominfo col-lg-3 col-sm-6 col-md-6\"> \t\t
\t\t\t\t\t\t\t<div id=\"_desktop_seach_widget\">
\t\t\t\t\t\t\t\t<div id=\"search_widget\" class=\"search-widget dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"search-logo hidden-lg hidden-md dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">   
\t\t\t\t\t\t\t\t\t\t        <symbol id=\"magnifying-desktop\" viewBox=\"0 0 1200 1200\"><title>magnifying-desktop</title>
\t\t\t\t\t\t\t\t\t\t          <path d=\"M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
\t\t\t\t\t\t\t\t\t\t               C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
\t\t\t\t\t\t\t\t\t\t               l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
\t\t\t\t\t\t\t\t\t\t               c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
\t\t\t\t\t\t\t\t\t\t               S377.82,467.8,257.493,467.8z\"></path>
\t\t\t\t\t\t\t\t\t\t         </symbol>
\t\t\t\t\t\t\t\t\t\t      </svg>
\t\t\t\t\t\t\t\t\t\t      <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#magnifying-desktop\" x=\"20%\" y=\"22%\"></use></svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<form class=\"dropdown-menu\">";
        // line 263
        echo ($context["search"] ?? null);
        echo "</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"_desktop_user-info\">
\t\t\t\t\t          <div class=\"user-info\">
\t\t\t\t\t            <div class=\"dropdown\">
\t\t\t\t\t\t              <a title=\"";
        // line 269
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t              \t<div class=\"user-logo hidden-sm hidden-xs\">
\t\t\t\t\t\t              \t\t<img src=\"image/catalog/user-icon.png\" alt=\"user-icon\">
\t\t\t\t\t\t              \t</div>
\t\t\t\t\t\t              \t<div class=\"user-logo mobile-logo hidden-lg hidden-md\">
\t\t\t\t\t\t              \t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">          
\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"user-mobile\" viewBox=\"0 0 490 490\"><title>user-desktop</title>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M187.497,152.427H73.974c-38.111,0-69.117,31.006-69.117,69.117v39.928h251.758v-39.928
\t\t\t\t\t\t\t\t\t\t\t\t\t\tC256.614,183.433,225.608,152.427,187.497,152.427z M241.614,246.473H19.856v-24.928c0-29.84,24.277-54.117,54.117-54.117h113.523
\t\t\t\t\t\t\t\t\t\t\t\t\t\tc29.84,0,54.117,24.277,54.117,54.117L241.614,246.473L241.614,246.473z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M130.735,145.326c40.066,0,72.663-32.597,72.663-72.663S170.802,0,130.735,0S58.072,32.596,58.072,72.663
\t\t\t\t\t\t\t\t\t\t\t\t\t\tS90.669,145.326,130.735,145.326z M130.735,15c31.796,0,57.663,25.867,57.663,57.663s-25.867,57.663-57.663,57.663
\t\t\t\t\t\t\t\t\t\t\t\t\t\ts-57.663-25.868-57.663-57.663S98.939,15,130.735,15z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol> 
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#user-mobile\" x=\"22%\" y=\"23%\"></use></svg>
\t\t\t\t\t\t              \t</div>
\t\t\t\t\t\t              </a>
\t\t\t\t\t\t              \t<div class=\"user-content\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"expand-more\">";
        // line 288
        echo ($context["text_account"] ?? null);
        echo "</span> <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-link\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 290
        if (($context["logged"] ?? null)) {
            // line 291
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo " </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 292
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 294
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["login"] ?? null);
            echo "\"><i class=\"fa fa-sign-in\"></i>  ";
            echo ($context["text_login"] ?? null);
            echo " </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 295
            echo ($context["register"] ?? null);
            echo "\"><i class=\"fa fa-user\"></i>  ";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 297
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t              <ul class=\"dropdown-menu\">
\t\t\t\t\t\t                ";
        // line 300
        if (($context["logged"] ?? null)) {
            // line 301
            echo "\t\t\t\t\t\t                <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t                <li><a href=\"";
            // line 302
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t                <li><a href=\"";
            // line 303
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t                <li><a href=\"";
            // line 304
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t                <li><a href=\"";
            // line 305
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t                ";
        } else {
            // line 307
            echo "\t\t\t\t\t\t                <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t                <li><a href=\"";
            // line 308
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t                <li><a href=\"";
            // line 309
            echo ($context["wishlist"] ?? null);
            echo "\" id=\"wishlist-total\" title=\"";
            echo ($context["text_wishlisttitle"] ?? null);
            echo "\"><span class=\"wishlist-text wishlist-total\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</span></a></li>
\t\t\t\t\t\t                ";
        }
        // line 311
        echo "\t\t\t\t\t\t              </ul>             
\t\t\t\t\t            </div>           
\t\t\t\t\t          </div> 
\t\t\t      \t\t\t</div>
\t\t\t\t\t        <div id=\"_desktop_cart\">
\t\t\t\t\t            <div class=\"blockcart\">
\t\t\t\t\t              ";
        // line 317
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t\t            </div>
\t\t\t\t\t        </div>
\t\t        \t\t</div>      
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> 
\t\t</div>
\t\t<div class=\"nav-full-width ";
        // line 325
        echo ($context["ishome"] ?? null);
        echo "\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 328
        echo ($context["headerafter"] ?? null);
        echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </header>
    
    <div id=\"mobile_top_menu_wrapper\" class=\"hidden-lg hidden-md\" style=\"display:none;\">
      \t<div id=\"top_menu_closer\">
\t        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"15px\" height=\"15px\" viewBox=\"0 0 16 16\" enable-background=\"new 0 0 16 16\" xml:space=\"preserve\">  <image id=\"image0\" width=\"16\" height=\"16\" x=\"0\" y=\"0\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAQAAADlauupAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
\t\t\tAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZ
\t\t\tcwAAAGAAAABgAPBrQs8AAAAHdElNRQfmBQUKKyJdcBQmAAAAk0lEQVQ4y2NgoAZQ2n38uMoke3ti
\t\t\t1Sv/d3BQWnD+PMIARRsbZf8XL5ReODkR0qw4ydZWWePlS+UiR0dUVxBhCE7NxBiipGhjg1czukJk
\t\t\tQ7CJEW0IyZqRQ1pZ4+VLZY2XL5X/OzjgUsdEkqnEAoq8QFEg4lNIMJ0Qk5BwWkBKUsZqiNLpc+fw
\t\t\tRRU6UJlkb4+SmSgBAPl3bzbjMveUAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIyLTA1LTA1VDEwOjQz
\t\t\tOjM0KzAwOjAw2j712QAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMi0wNS0wNVQxMDo0MzozNCswMDow
\t\t\tMKtjTWUAAAAASUVORK5CYII=\"></image>
\t\t\t</svg>
\t      </div>
      <div class=\"js-top-menu mobile\" id=\"_mobile_top_menu\"></div>
    </div>
    <div id=\"spin-wrapper\"></div>
\t<div id=\"siteloader\">
\t\t";
        // line 350
        if ((($context["loader"] ?? null) == "loader_1")) {
            // line 351
            echo "\t\t<div class=\"loader loader-1\"></div>
\t\t";
        } elseif ((        // line 352
($context["loader"] ?? null) == "loader_2")) {
            // line 353
            echo "\t\t<div class=\"loader loader-2\">
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t</div>
\t\t";
        } elseif ((        // line 364
($context["loader"] ?? null) == "loader_3")) {
            // line 365
            echo "\t\t<div class=\"loader loader-3\">
\t      <div></div>
\t      <div></div>
\t      <div></div>
\t  \t</div>
\t\t";
        } else {
            // line 371
            echo "\t\t<div class=\"loader loader-4 la-dark la-2x\">
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t</div>
\t\t";
        }
        // line 379
        echo "\t</div>

<!-- ======= Quick view JS ========= -->
<script> 
function quickbox(){
 \tif (\$(window).width() > 767) {
\t\t\$('.quickview-button').magnificPopup({
\t\ttype:'iframe',
\t\tdelegate: 'a',
\t\tpreloader: true,
\t\ttLoading: 'Loading image #%curr%...',
\t\t});    
 \t}  
}
jQuery(document).ready(function() {quickbox();});
jQuery(window).resize(function() {quickbox();});
\$( \"input[name=\\'search\\']\" ).keypress(function( event ) {
\t\$('input[name=\\'search\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=product/search/autocomplete&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(result) {
\t\t\t\t\tvar products = result.products;
\t\t\t\t\t\$('.ajaxishi-search ul li').remove();
\t\t\t\t\t  \$.each(products, function(index,product) {
\t\t\t\t\t\tvar html = '<li>';
\t\t\t\t\t\t\thtml += '<div>';
\t\t\t\t\t\t\thtml += '<a href=\"' + product.url + '\" title=\"' + product.name + '\">';
\t\t\t\t\t\t\thtml += '<div class=\"product-image\"><img alt=\"' + product.name + '\" src=\"' + product.image + '\"></div>';
\t\t\t\t\t\t\thtml += '<div class=\"product-desc\">';
\t\t\t\t\t\t\thtml += '<div class=\"product-name\">' + product.name + '</div>';
\t\t\t\t\t\t\tif (product.special) {
\t                            html += '<div class=\"product-price\"><span class=\"special\">' + product.price + '</span><span class=\"price\">' + product.special + '</span></div>';
\t                        } else {
\t                            html += '<div class=\"product-price\"><span class=\"price\">' + product.price + '</span></div>';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\thtml += '</a>';
\t\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\thtml += '</li>';
\t\t\t\t\t\t\t\$('.ajaxishi-search ul').append(html);
\t\t\t\t\t  });
\t\t\t\t\t  if(encodeURIComponent(request)){
\t\t\t\t\t  \t\t\$('.ajaxishi-search').css('display','block');

\t\t\t\t\t  }else{
\t\t\t\t\t  \t\t\$('.ajaxishi-search').css('display','none');
\t\t\t\t\t  }
\t                return false;
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(product) {
\t\t\t\$('input[name=\\'filter_name\\']').val(product.name);
\t\t}
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  647 => 379,  637 => 371,  629 => 365,  627 => 364,  614 => 353,  612 => 352,  609 => 351,  607 => 350,  582 => 328,  576 => 325,  565 => 317,  557 => 311,  548 => 309,  542 => 308,  535 => 307,  528 => 305,  522 => 304,  516 => 303,  510 => 302,  503 => 301,  501 => 300,  496 => 297,  489 => 295,  482 => 294,  475 => 292,  468 => 291,  466 => 290,  461 => 288,  439 => 269,  430 => 263,  406 => 242,  402 => 240,  395 => 236,  391 => 235,  388 => 234,  376 => 232,  374 => 231,  346 => 206,  197 => 59,  189 => 57,  185 => 56,  174 => 54,  170 => 53,  161 => 46,  152 => 44,  148 => 43,  135 => 41,  131 => 40,  128 => 39,  123 => 37,  120 => 36,  118 => 35,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  90 => 21,  84 => 19,  82 => 18,  76 => 16,  74 => 15,  70 => 14,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/common/header.twig", "");
    }
}
