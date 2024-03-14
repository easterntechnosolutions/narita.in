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

/* default/template/extension/quickcheckout/checkout.twig */
class __TwigTemplate_c70c93ef56be6abe2a399dc24d80ae00bc7a47e8337d35a127ee427ac4883701 extends \Twig\Template
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
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            echo "   
    ";
            // line 14
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t  <!-- Start -->
\t  ";
        // line 19
        if (false) {
            // line 20
            echo "\t  <!-- FontAwesome for themes that require it -->
\t  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
\t  ";
        }
        // line 23
        echo "\t  <div id=\"warning-messages\"></div>
\t  <div id=\"success-messages\"></div>
\t  ";
        // line 25
        if (($context["mobile_stylesheet"] ?? null)) {
            // line 26
            echo "\t  <link rel=\"stylesheet\" media=\"screen and (min-width: 701px) and (max-width: 99999px)\" href=\"";
            echo ($context["stylesheet"] ?? null);
            echo "\" />
\t  <link rel=\"stylesheet\" media=\"screen and (min-width: 1px) and (max-width: 700px)\" href=\"";
            // line 27
            echo ($context["mobile_stylesheet"] ?? null);
            echo "\" />
\t  ";
        } else {
            // line 28
            echo "   
\t  <link rel=\"stylesheet\" href=\"";
            // line 29
            echo ($context["stylesheet"] ?? null);
            echo "\" />
\t  ";
        }
        // line 31
        echo "
\t  ";
        // line 32
        if (($context["html_header"] ?? null)) {
            echo " 
\t  ";
            // line 33
            echo ($context["html_header"] ?? null);
            echo " 
\t  ";
        }
        // line 34
        echo " 

\t  <div id=\"quickcheckout-countdown\"></div>

\t  <div id=\"quickcheckoutconfirm\">
\t\t<div id=\"quickcheckout-disable\">
\t\t  ";
        // line 40
        if (( !($context["logged"] ?? null) && ($context["login_module"] ?? null))) {
            echo " 
\t\t  <div class=\"quickcheckoutmid\" id=\"login-box\">
\t\t\t<div id=\"checkout\">
\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-sign-in\"></i> ";
            // line 43
            echo ($context["text_checkout_option"] ?? null);
            echo "</div>
\t\t\t  <div class=\"quickcheckout-content\">";
            // line 44
            echo ($context["login"] ?? null);
            echo "</div>
\t\t\t</div>
\t\t\t<div class=\"or\">";
            // line 46
            echo ($context["text_or"] ?? null);
            echo "</div>
\t\t  </div>
\t\t  ";
        }
        // line 48
        echo " 
\t\t  <div class=\"quickcheckoutleft\">
\t\t\t<div id=\"payment-address\">
\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
        // line 51
        echo (( !($context["logged"] ?? null)) ? (($context["text_checkout_account"] ?? null)) : (($context["text_checkout_payment_address"] ?? null)));
        echo "</div>
\t\t\t  <div class=\"quickcheckout-content\">";
        // line 52
        echo ((($context["guest"] ?? null)) ? (($context["guest"] ?? null)) : (($context["payment_address"] ?? null)));
        echo "</div>
\t\t\t</div>
\t\t\t";
        // line 54
        if (($context["shipping_required"] ?? null)) {
            echo " 
\t\t\t<div id=\"shipping-address\">
\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
            // line 56
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo "</div>
\t\t\t  <div class=\"quickcheckout-content\">";
            // line 57
            echo ((($context["shipping_address"] ?? null)) ? (($context["shipping_address"] ?? null)) : (""));
            echo "</div>
\t\t\t</div>
\t\t\t";
        }
        // line 59
        echo " 
\t\t  </div>
\t\t  <div class=\"quickcheckoutright\">
\t\t\t";
        // line 62
        if (($context["shipping_required"] ?? null)) {
            echo " 
\t\t\t<div id=\"shipping-method\"";
            // line 63
            echo (( !($context["shipping_module"] ?? null)) ? (" style=\"display:none;\"") : (""));
            echo ">
\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-truck\"></i> ";
            // line 64
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "</div>
\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t</div>
\t\t\t";
        }
        // line 68
        echo "\t\t\t<div id=\"payment-method\"";
        echo (( !($context["payment_module"] ?? null)) ? (" style=\"display:none;\"") : (""));
        echo ">
\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-credit-card\"></i> ";
        // line 69
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "</div>
\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t</div>
\t\t  </div>
\t\t  ";
        // line 73
        if ((($context["quickcheckout_layout"] ?? null) == "2")) {
            echo " 
\t\t\t<div class=\"quickcheckoutleft\">
\t\t\t  ";
            // line 75
            if (($context["cart_module"] ?? null)) {
                echo " 
\t\t\t  <div id=\"cart1\">
\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t  </div>
\t\t\t  ";
            }
            // line 80
            echo "\t\t\t</div>
\t\t\t<div style=\"clear:right;\"></div>
\t\t\t<div class=\"quickcheckoutright\">
\t\t\t  ";
            // line 83
            if (((($context["voucher_module"] ?? null) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
                echo " 
\t\t\t  <div id=\"voucher\">
\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                // line 85
                echo ($context["voucher"] ?? null);
                echo "</div>
\t\t\t  </div>
\t\t\t  ";
            }
            // line 88
            echo "\t\t\t</div>
\t\t  ";
        } elseif (((        // line 89
($context["quickcheckout_layout"] ?? null) == "1") || (($context["quickcheckout_layout"] ?? null) == "3"))) {
            // line 90
            echo "\t\t\t";
            if ((((($context["cart_module"] ?? null) || ($context["voucher_module"] ?? null)) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
                // line 91
                echo "\t\t\t<div class=\"quickcheckoutleft extra-width\">
\t\t\t  ";
                // line 92
                if (($context["cart_module"] ?? null)) {
                    // line 93
                    echo "\t\t\t  <div id=\"cart1\">
\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t  </div>
\t\t\t  ";
                }
                // line 97
                echo "\t\t\t  ";
                if (((($context["voucher_module"] ?? null) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
                    // line 98
                    echo "\t\t\t  <div id=\"voucher\">
\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                    // line 99
                    echo ($context["voucher"] ?? null);
                    echo "</div>
\t\t\t  </div>
\t\t\t  ";
                }
                // line 102
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 103
            echo " 
\t\t  ";
        }
        // line 105
        echo "\t\t  <div style=\"clear: both;\"></div>
\t\t</div><!-- Close Quick Checkout Disable Div -->

\t\t<div class=\"quickcheckoutmid\">
\t\t  <div id=\"terms\">
\t\t\t<div class=\"quickcheckout-content text-right\">";
        // line 110
        echo ($context["terms"] ?? null);
        echo "</div>
\t\t  </div>
\t\t</div>
\t  </div><!-- Close QuickCheckoutConfirm div -->

\t  ";
        // line 115
        if (($context["html_footer"] ?? null)) {
            // line 116
            echo "\t  ";
            echo ($context["html_footer"] ?? null);
            echo "
\t  ";
        }
        // line 118
        echo "\t  <!-- End -->
\t";
        // line 119
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  ";
        // line 120
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

";
        // line 123
        if (($context["custom_css"] ?? null)) {
            // line 124
            echo "<style type=\"text/css\">
";
            // line 125
            echo ($context["custom_css"] ?? null);
            echo "
</style>
";
        }
        // line 127
        echo " 
<script type=\"text/javascript\"><!--
";
        // line 129
        if ((($context["countdown"] ?? null) && ($context["countdown_end"] ?? null))) {
            echo " 
\$('#quickcheckout-countdown').countdown({
\ttimezone: ";
            // line 131
            echo ($context["timezone"] ?? null);
            echo " ,
\tuntil: new Date('";
            // line 132
            echo ($context["countdown_end"] ?? null);
            echo "'),
    layout: '";
            // line 133
            echo twig_escape_filter($this->env, ($context["countdown_before"] ?? null));
            echo "<b>";
            echo ($context["countdown_timer"] ?? null);
            echo "</b>{desc}',
    description: '";
            // line 134
            echo twig_escape_filter($this->env, ($context["countdown_after"] ?? null));
            echo "'
});
";
        }
        // line 136
        echo " 
";
        // line 137
        if (($context["load_screen"] ?? null)) {
            echo " 
\$(window).load(function() {
    \$.blockUI({
\t\tmessage: '<h1 style=\"color:#ffffff;\">";
            // line 140
            echo ($context["text_please_wait"] ?? null);
            echo "</h1>',
\t\tcss: {
\t\t\tborder: 'none',
\t\t\tpadding: '15px',
\t\t\tbackgroundColor: '#000000',
\t\t\t'-webkit-border-radius': '10px',
\t\t\t'-moz-border-radius': '10px',
\t\t\t'-khtml-border-radius': '10px',
\t\t\t'border-radius': '10px',
\t\t\topacity: .8,
\t\t\tcolor: '#ffffff'
\t\t}
\t});
\t
\tsetTimeout(function() {
\t\t\$.unblockUI();
\t}, 2000);
});
";
        }
        // line 158
        echo " 

";
        // line 160
        if ( !($context["logged"] ?? null)) {
            // line 161
            echo "\t";
            if (($context["save_data"] ?? null)) {
                // line 162
                echo "\t// Save form data
\t\$(document).on('change', '#payment-address input[type=\\'text\\'], #payment-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=payment',
\t\t\ttype: 'post',
\t\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 173
                if (($context["debug"] ?? null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 177
                echo " 
\t\t});
\t});

\t\$(document).on('change', '#shipping-address input[type=\\'text\\'], #shipping-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=shipping',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'password\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 191
                if (($context["debug"] ?? null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 195
                echo " 
\t\t});
\t});
\t";
            }
            // line 198
            echo " 
\t
\t";
            // line 200
            if (($context["login_module"] ?? null)) {
                echo " 
\t// Login Form Clicked
\t\$(document).on('click', '#button-login', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/login/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#checkout #login :input'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-login').prop('disabled', true);
\t\t\t\t\$('#button-login').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-login').prop('disabled', false);
\t\t\t\t\$('#button-login').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t},
\t\t\t";
                // line 230
                if (($context["debug"] ?? null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 234
                echo " 
\t\t});
\t});
\t";
            }
            // line 237
            echo " 

// Validate Register
function validateRegister() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/register/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 267
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').after('<div class=\"text-danger\">' + json['error']['password'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').after('<div class=\"text-danger\">' + json['error']['confirm'] + '</div>');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 275
            echo " 
\t\t\t\t";
            // line 276
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 284
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 286
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (shipping_address) {
\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t} else {
\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 294
                echo "  
\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 296
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 299
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 303
            echo " 
\t});
}

// Validate Guest Payment Address
function validateGuestAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {\t\t
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 335
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 345
            echo " 
\t\t\t\t";
            // line 346
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 352
            echo " 
\t\t\t} else {
\t\t\t\tvar create_account = \$('#payment-address input[name=\\'create_account\\']:checked').val();

\t\t\t\t";
            // line 356
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 368
                echo "   
\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t\t";
            }
            // line 375
            echo "\t\t\t}
\t\t},
\t\t";
            // line 377
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 381
            echo " 
\t});
}

// Validate Guest Shipping Address
function validateGuestShippingAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest_shipping/validate',
\t\ttype: 'post',
\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address select, #shipping-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 413
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 423
            echo " 
\t\t\t\t";
            // line 424
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 430
            echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
            // line 435
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 439
            echo " 
\t});
}

// Confirm Payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidateGuestAddress();
});
";
        } else {
            // line 452
            echo "   
// Validate Payment Address
function validatePaymentAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_address/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 481
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 491
            echo " 
\t\t\t\t";
            // line 492
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 498
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 500
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\t\tvalidateShippingAddress();
\t\t\t\t";
            } else {
                // line 502
                echo "   
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 505
            echo "\t\t\t}
\t\t},
\t\t";
            // line 507
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 511
            echo " 
\t});
}

";
            // line 515
            if (($context["shipping_required"] ?? null)) {
                echo " 
// Validate Shipping Address
function validateShippingAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/shipping_address/validate',
\t\ttype: 'post',
\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'password\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address select, #shipping-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
                // line 544
                if (($context["text_error"] ?? null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 554
                echo " 
\t\t\t\t";
                // line 555
                if (($context["highlight_error"] ?? null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 561
                echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
                // line 566
                if (($context["debug"] ?? null)) {
                    echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
                }
                // line 570
                echo " 
\t});
}
";
            }
            // line 573
            echo " 

// Confirm payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidatePaymentAddress();
});
";
        }
        // line 584
        echo "// Close if logged php

// Payment Method
function reloadPaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 595
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 598
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 602
        if (($context["load_screen"] ?? null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 604
        echo " 
\t\t},
\t\t";
        // line 606
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 610
        echo " 
\t});
}

function reloadPaymentMethodById(address_id) {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method&address_id=' + address_id,
\t\ttype: 'post',
\t\tdata: \$('#payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 622
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 625
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 629
        if (($context["load_screen"] ?? null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 631
        echo " 
\t\t},
\t\t";
        // line 633
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 637
        echo " 
\t});
}

// Validate Payment Method
function validatePaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-method select, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'checkbox\\']:checked, #payment-method textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tvalidateTerms();
\t\t\t}
\t\t},
\t\t";
        // line 672
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 676
        echo " 
\t});
}

// Shipping Method
";
        // line 681
        if (($context["shipping_required"] ?? null)) {
            echo " 
\tfunction reloadShippingMethod(type) {
\t\tif (type == 'payment') {
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}
\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method',
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 696
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 699
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 703
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 707
            echo " 
\t\t});
\t}

\tfunction reloadShippingMethodById(address_id) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method&address_id=' + address_id,
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea'),
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 719
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 722
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 726
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 730
            echo " 
\t\t});
\t}

\t// Validate Shipping Method
\tfunction validateShippingMethod() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method select, #shipping-method input[type=\\'radio\\']:checked, #shipping-method textarea, #shipping-method input[type=\\'text\\']'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t\t
\t\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t},
\t\t\t";
            // line 765
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 769
            echo " 
\t\t});
\t}
";
        }
        // line 772
        echo " 

// Validate confirm button
function validateTerms() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/terms/validate',
\t\ttype: 'post',
\t\tdata: \$('#terms input[type=\\'checkbox\\']:checked'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tloadConfirm();
\t\t\t}
\t\t},
\t\t";
        // line 805
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 809
        echo " 
\t});
}

// Load confirm
function loadConfirm() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/confirm',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t";
        // line 820
        if (($context["confirmation_page"] ?? null)) {
            echo " 
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\t";
            // line 823
            if (($context["slide_effect"] ?? null)) {
                echo " 
\t\t\t\t\$('#quickcheckoutconfirm').slideUp('slow');
\t\t\t\t";
            } else {
                // line 825
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').html('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 827
            echo " 
\t\t\t
\t\t\t\t";
            // line 829
            if (($context["load_screen"] ?? null)) {
                echo " 
\t\t\t\t\$.blockUI({
\t\t\t\t\tmessage: '<h1 style=\"color:#ffffff;\">";
                // line 831
                echo ($context["text_please_wait"] ?? null);
                echo "</h1>',
\t\t\t\t\tcss: {
\t\t\t\t\t\tborder: 'none',
\t\t\t\t\t\tpadding: '15px',
\t\t\t\t\t\tbackgroundColor: '#000000',
\t\t\t\t\t\t'-webkit-border-radius': '10px',
\t\t\t\t\t\t'-moz-border-radius': '10px',
\t\t\t\t\t\t'-khtml-border-radius': '10px',
\t\t\t\t\t\t'border-radius': '10px',
\t\t\t\t\t\topacity: .8,
\t\t\t\t\t\tcolor: '#ffffff'
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t";
            }
            // line 844
            echo " 
\t\t\t";
        }
        // line 846
        echo "\t\t},
\t\tsuccess: function(html) {
\t\t\t";
        // line 848
        if (($context["confirmation_page"] ?? null)) {
            echo " 
\t\t\t\t";
            // line 849
            if (($context["load_screen"] ?? null)) {
                echo " 
\t\t\t\t\$.unblockUI();
\t\t\t\t";
            }
            // line 851
            echo " 
\t\t\t\t
\t\t\t\t\$('#quickcheckoutconfirm').hide().html(html);
\t\t\t\t
\t\t\t\t";
            // line 855
            if ( !($context["auto_submit"] ?? null)) {
                echo " 
\t\t\t\t\t";
                // line 856
                if (($context["slide_effect"] ?? null)) {
                    echo " 
\t\t\t\t\t\$('#quickcheckoutconfirm').slideDown('slow');
\t\t\t\t\t";
                } else {
                    // line 858
                    echo "   
\t\t\t\t\t\$('#quickcheckoutconfirm').show();
\t\t\t\t\t";
                }
                // line 860
                echo " 
\t\t\t\t";
            } else {
                // line 861
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 864
            echo "\t\t\t";
        } else {
            echo "   
\t\t\t\t\$('#terms .terms').hide();
\t\t\t\t\$('#payment').html(html).slideDown('fast');
\t\t\t\t
\t\t\t\t";
            // line 868
            if (($context["auto_submit"] ?? null)) {
                echo " 
\t\t\t\t\$('#payment').hide().after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 870
            echo " 
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: \$('#terms').offset().top }, 'slow');
\t\t\t\t
\t\t\t\tdisableCheckout();
\t\t\t";
        }
        // line 876
        echo "\t\t},
\t\t";
        // line 877
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 881
        echo " 
\t});
}

// Load cart
";
        // line 886
        if (($context["cart_module"] ?? null)) {
            echo " 
function loadCart() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('.tooltip').remove();
\t\t\t
\t\t\tmoduleLoad(\$('#cart1'), ";
            // line 895
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#cart1'), ";
            // line 898
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t
\t\t\t\$('#cart1 .quickcheckout-content').html(html);
\t\t},
\t\t";
            // line 902
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 906
            echo " 
\t});
}

\t";
            // line 910
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\$(document).ready(function(){
\t\tloadCart();
\t});
\t";
            }
            // line 914
            echo " 
";
        }
        // line 915
        echo " 

";
        // line 917
        if (((($context["voucher_module"] ?? null) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
            echo " 
// Validate Coupon
\$(document).on('click', '#button-coupon', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateCoupon',
\t\ttype: 'post',
\t\tdata: \$('#coupon-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').prop('disabled', true);
\t\t\t\$('#button-coupon').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').prop('disabled', false);
\t\t\t\$('#coupon-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 949
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 953
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 955
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 959
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 961
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 963
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 970
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 976
                echo " 
\t\t\t";
            }
            // line 977
            echo " 
\t\t\t
\t\t\t";
            // line 979
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 981
            echo " 
\t\t},
\t\t";
            // line 983
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 987
            echo " 
\t});
});

\$(document).on('click', '#button-voucher', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateVoucher',
\t\ttype: 'post',
\t\tdata: \$('#voucher-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').prop('disabled', true);
\t\t\t\$('#button-voucher').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').prop('disabled', false);
\t\t\t\$('#voucher-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1021
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1025
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1027
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1031
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1033
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1035
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1042
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1048
                echo " 
\t\t\t";
            }
            // line 1050
            echo "\t\t\t
\t\t\t";
            // line 1051
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1053
            echo " 
\t\t},
\t\t";
            // line 1055
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1059
            echo " 
\t});
});

\$(document).on('click', '#button-reward', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateReward',
\t\ttype: 'post',
\t\tdata: \$('#reward-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').prop('disabled', true);
\t\t\t\$('#button-reward').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').prop('disabled', false);
\t\t\t\$('#reward-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1093
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1097
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1099
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1103
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1105
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1107
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1114
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1120
                echo " 
\t\t\t";
            }
            // line 1122
            echo "\t\t\t
\t\t\t";
            // line 1123
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1125
            echo " 
\t\t},
\t\t";
            // line 1127
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1131
            echo " 
\t});
});
";
        }
        // line 1135
        echo "
";
        // line 1136
        if (($context["shipping_required"] ?? null)) {
            echo " 
\$(document).on('focusout', 'input[name=\\'postcode\\']', function() {
\t";
            // line 1138
            if ( !($context["logged"] ?? null)) {
                echo " 
\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\treloadShippingMethod('payment');
\t} else {
\t\treloadShippingMethod('shipping');
\t}
\t";
            } else {
                // line 1144
                echo "   
\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\treloadShippingMethod('shipping');
\t} else {
\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t}
\t";
            }
            // line 1150
            echo " 
});
";
        }
        // line 1153
        echo "
";
        // line 1154
        if (($context["highlight_error"] ?? null)) {
            echo " 
\t\$(document).on('keydown', 'input', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
\t\$(document).on('change', 'select', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
";
        }
        // line 1165
        echo " 

";
        // line 1167
        if (($context["edit_cart"] ?? null)) {
            echo " 
\$(document).on('click', '.button-update', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update',
\t\ttype: 'post',
\t\tdata: \$('#cart1 :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#cart1 .button-update').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\t";
            // line 1182
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1186
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1188
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1192
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1194
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1196
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1203
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1209
                echo " 
\t\t\t\t";
            }
            // line 1210
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 1212
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1214
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1217
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1221
            echo " 
\t});
});

\$(document).on('click', '.button-remove', function() {
\tvar remove_id = \$(this).attr('data-remove');

\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update&remove=' + remove_id,
\t\ttype: 'get',
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#cart1 .button-remove').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\t";
            // line 1240
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1244
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1246
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1250
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1252
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1254
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1261
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1267
                echo " 
\t\t\t\t";
            }
            // line 1269
            echo "\t\t\t\t
\t\t\t\t";
            // line 1270
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1272
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1275
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1279
            echo " 
\t});

\treturn false;
});
";
        }
        // line 1285
        echo "
\$('.date').datetimepicker({
\tformat: 'YYYY-MM-DD'
});

\$('.time').datetimepicker({
\tformat: 'HH:mm'
});

\$('.datetime').datetimepicker();
//--></script>
";
        // line 1296
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2102 => 1296,  2089 => 1285,  2081 => 1279,  2073 => 1275,  2068 => 1272,  2062 => 1270,  2059 => 1269,  2055 => 1267,  2045 => 1261,  2036 => 1254,  2031 => 1252,  2025 => 1250,  2019 => 1246,  2013 => 1244,  2006 => 1240,  1985 => 1221,  1977 => 1217,  1972 => 1214,  1966 => 1212,  1962 => 1210,  1958 => 1209,  1948 => 1203,  1939 => 1196,  1934 => 1194,  1928 => 1192,  1922 => 1188,  1916 => 1186,  1909 => 1182,  1891 => 1167,  1887 => 1165,  1872 => 1154,  1869 => 1153,  1864 => 1150,  1855 => 1144,  1845 => 1138,  1840 => 1136,  1837 => 1135,  1831 => 1131,  1823 => 1127,  1819 => 1125,  1813 => 1123,  1810 => 1122,  1806 => 1120,  1796 => 1114,  1787 => 1107,  1782 => 1105,  1776 => 1103,  1770 => 1099,  1764 => 1097,  1757 => 1093,  1721 => 1059,  1713 => 1055,  1709 => 1053,  1703 => 1051,  1700 => 1050,  1696 => 1048,  1686 => 1042,  1677 => 1035,  1672 => 1033,  1666 => 1031,  1660 => 1027,  1654 => 1025,  1647 => 1021,  1611 => 987,  1603 => 983,  1599 => 981,  1593 => 979,  1589 => 977,  1585 => 976,  1575 => 970,  1566 => 963,  1561 => 961,  1555 => 959,  1549 => 955,  1543 => 953,  1536 => 949,  1501 => 917,  1497 => 915,  1493 => 914,  1485 => 910,  1479 => 906,  1471 => 902,  1464 => 898,  1458 => 895,  1446 => 886,  1439 => 881,  1431 => 877,  1428 => 876,  1420 => 870,  1414 => 868,  1406 => 864,  1401 => 861,  1397 => 860,  1392 => 858,  1386 => 856,  1382 => 855,  1376 => 851,  1370 => 849,  1366 => 848,  1362 => 846,  1358 => 844,  1341 => 831,  1336 => 829,  1332 => 827,  1327 => 825,  1321 => 823,  1315 => 820,  1302 => 809,  1294 => 805,  1259 => 772,  1253 => 769,  1245 => 765,  1208 => 730,  1200 => 726,  1193 => 722,  1187 => 719,  1173 => 707,  1165 => 703,  1158 => 699,  1152 => 696,  1134 => 681,  1127 => 676,  1119 => 672,  1082 => 637,  1074 => 633,  1070 => 631,  1064 => 629,  1057 => 625,  1051 => 622,  1037 => 610,  1029 => 606,  1025 => 604,  1019 => 602,  1012 => 598,  1006 => 595,  993 => 584,  979 => 573,  973 => 570,  965 => 566,  958 => 561,  948 => 555,  945 => 554,  931 => 544,  899 => 515,  893 => 511,  885 => 507,  881 => 505,  876 => 502,  870 => 500,  866 => 498,  856 => 492,  853 => 491,  839 => 481,  808 => 452,  792 => 439,  784 => 435,  777 => 430,  767 => 424,  764 => 423,  750 => 413,  716 => 381,  708 => 377,  704 => 375,  695 => 368,  679 => 356,  673 => 352,  663 => 346,  660 => 345,  646 => 335,  612 => 303,  604 => 299,  599 => 296,  594 => 294,  582 => 286,  578 => 284,  566 => 276,  563 => 275,  551 => 267,  519 => 237,  513 => 234,  505 => 230,  472 => 200,  468 => 198,  462 => 195,  454 => 191,  438 => 177,  430 => 173,  417 => 162,  414 => 161,  412 => 160,  408 => 158,  386 => 140,  380 => 137,  377 => 136,  371 => 134,  365 => 133,  361 => 132,  357 => 131,  352 => 129,  348 => 127,  342 => 125,  339 => 124,  337 => 123,  331 => 120,  327 => 119,  324 => 118,  318 => 116,  316 => 115,  308 => 110,  301 => 105,  297 => 103,  293 => 102,  287 => 99,  284 => 98,  281 => 97,  275 => 93,  273 => 92,  270 => 91,  267 => 90,  265 => 89,  262 => 88,  256 => 85,  251 => 83,  246 => 80,  238 => 75,  233 => 73,  226 => 69,  221 => 68,  214 => 64,  210 => 63,  206 => 62,  201 => 59,  195 => 57,  191 => 56,  186 => 54,  181 => 52,  177 => 51,  172 => 48,  166 => 46,  161 => 44,  157 => 43,  151 => 40,  143 => 34,  138 => 33,  134 => 32,  131 => 31,  126 => 29,  123 => 28,  118 => 27,  113 => 26,  111 => 25,  107 => 23,  102 => 20,  100 => 19,  95 => 17,  88 => 16,  85 => 15,  83 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  67 => 9,  63 => 8,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/checkout.twig", "");
    }
}
