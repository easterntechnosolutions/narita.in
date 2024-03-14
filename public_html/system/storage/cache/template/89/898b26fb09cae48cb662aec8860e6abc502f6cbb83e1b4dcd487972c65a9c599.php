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

/* naritafashion/template/extension/module/franchiseenquiryblock.twig */
class __TwigTemplate_26a4e0a543588b45d73d8aae15c5403dbd44f20b86e8b7f0dcd31d2d18c01914 extends \Twig\Template
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
        echo "<section class=\"block_newsletter footer-block\">
\t<div class=\"franchise\">
    <div class=\"franchise-content row\">
        <div class=\"franchise-image col-lg-6 col-md-6 col-sm-12 col-xs-12\">
          \t<img src=\"";
        // line 5
        echo ($context["banner1"] ?? null);
        echo "\" alt=\"banner1\" class=\"img-responsive\">
        </div>
        <div class=\"franchise-desc col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        \t<p class=\"sub-title\">";
        // line 8
        echo ($context["subtitle"] ?? null);
        echo "</p>
            <div class=\"franchise-form\">
                <div class=\"franchise-title\">";
        // line 10
        echo ($context["heading"] ?? null);
        echo "</div>
                <div class=\"franchise-subtitle\">";
        // line 11
        echo ($context["note"] ?? null);
        echo "</div>
            </div>
\t\t\t<div id=\"franchise\">
\t\t\t\t<div id=\"frm_subscribe\" class=\"franchise-form\">
\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe\">
\t\t\t\t\t\t<input type=\"text\" class=\"text-email col-lg-6 col-md-6 m-r\" placeholder=\"";
        // line 16
        echo ($context["entry_firstname"] ?? null);
        echo "\" value=\"\" name=\"username\" id=\"username\">
\t\t\t\t\t\t<input type=\"text\" class=\"text-email col-lg-6 col-md-6\" placeholder=\"";
        // line 17
        echo ($context["entry_lastname"] ?? null);
        echo "\" value=\"\" name=\"username\" id=\"username\">
\t\t\t\t\t\t<input type=\"text\" class=\"text-email col-lg-6 col-md-6 m-r\" placeholder=\"";
        // line 18
        echo ($context["entry_email"] ?? null);
        echo "\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email\">
\t\t\t\t\t\t<div id=\"notification-normal\"></div>
\t\t\t\t\t\t<input type=\"phoneNumber\" class=\"number col-lg-6 col-md-6\" placeholder=\"";
        // line 20
        echo ($context["entry_phonenumber"] ?? null);
        echo "\" value=\"\" name=\"phonenumber\" id=\"phonenumber\">
\t\t\t\t\t\t<input type=\"text\" class=\"text-email col-lg-6 col-md-6 m-r\" placeholder=\"";
        // line 21
        echo ($context["entry_natureofbusiness"] ?? null);
        echo "\" value=\"\" name=\"nature_of_business\" id=\"nature_of_business\">
\t\t\t\t\t\t<input type=\"text\" class=\"text-email col-lg-6 col-md-6\" placeholder=\"";
        // line 22
        echo ($context["entry_city"] ?? null);
        echo "\" value=\"\" name=\"city\" id=\"city\">
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t<a class=\"button btn-default\" onclick=\"email_subscribe()\">";
        // line 25
        echo ($context["entry_button"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
        </div>
    </div>
</div>
\t<script type=\"text/javascript\">
\t\tfunction email_subscribe(){
\t\t\t\$.ajax({
\t\t\t\t\ttype: 'post',
\t\t\t\t\turl: 'index.php?route=extension/module/franchiseenquiryblock/subscribe',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tdata:\$(\"#subscribe\").serialize(),
\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\ttry {
\t\t\t\t\t
\t\t\t\t\t\teval(html);
\t\t\t\t\t
\t\t\t\t\t} catch (e) {
\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t}});\t
\t\t}
\t\tfunction email_unsubscribe(){
\t\t\t\$.ajax({
\t\t\t\t\ttype: 'post',
\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tdata:\$(\"#subscribe\").serialize(),
\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\t}
\t\t\t\t\t}}); 
\t\t\t\$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
\t\t}
\t</script>
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$('#subscribe_email').keypress(function(e) {
\t\t\t\tif(e.which == 13) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\temail_subscribe();
\t\t\t\t}
\t\t\t\tvar name= \$(this).val();
\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t});
\t\t\t\$('#subscribe_email').change(function() {
\t\t\tvar name= \$(this).val();
\t\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t});
\t\t
\t\t});
\t\t\$(document).ready(function() {
\t\t\t\$('#username').keypress(function(e) {
\t\t\t\tif(e.which == 13) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\temail_subscribe();
\t\t\t\t}
\t\t\t\tvar name= \$(this).val();
\t\t\t\t\$('#username').val(name);
\t\t\t});
\t\t\t\$('#username').change(function() {
\t\t\tvar name= \$(this).val();
\t\t\t\t\t\$('#username').val(name);
\t\t\t});
\t\t
\t\t});
\t</script>
</section>
<!-- <div class=\"row\">
\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 franchise-inner\">
\t    <input type=\"text\" id=\"fname\" name=\"fname\" placeholder=\"First Name\">
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 franchise-inner\">
\t    <input type=\"text\" id=\"lname\" name=\"lname\" placeholder=\"Last Name\">
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 franchise-inner\">
\t    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\">
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 franchise-inner\">
\t    <input type=\"text\" id=\"pnum\" name=\"pnum\" placeholder=\"Phone Number\">
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 franchise-inner\">
\t    <input type=\"text\" id=\"nature\" name=\"nature\" placeholder=\"Exisiting Nature of Business\">
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 franchise-inner\">
\t    <input type=\"text\" id=\"city\" name=\"city\" placeholder=\"City\">
\t</div>
</div> -->";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/franchiseenquiryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  87 => 22,  83 => 21,  79 => 20,  74 => 18,  70 => 17,  66 => 16,  58 => 11,  54 => 10,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/franchiseenquiryblock.twig", "");
    }
}
