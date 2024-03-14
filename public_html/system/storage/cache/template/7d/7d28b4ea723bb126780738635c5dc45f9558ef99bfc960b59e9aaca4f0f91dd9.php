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

/* naritafashion/template/extension/module/newslettersubscribe.twig */
class __TwigTemplate_f5fa2d659b87b3320f335f389b933ec7f2e2aa72957fd57cbcd1c419a963030f extends \Twig\Template
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
        echo "<section class=\"block_newsletter footer-block col-lg-3 col-md-3 col-sm-12 col-xs-12\">
\t<div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#boxes\" data-toggle=\"collapse\">
    <span class=\"h3\">";
        // line 3
        echo ($context["heading"] ?? null);
        echo "</span>
    <span class=\"navbar-toggler collapse-icons\">
      <i class=\"fa fa-angle-down add\"></i>
      <i class=\"fa fa-angle-up remove\"></i>
    </span>
  </div>
\t\t<div id=\"boxes\" class=\"collapse footer-dropdown\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h5 class=\"hidden-sm hidden-xs\">";
        // line 11
        echo ($context["heading"] ?? null);
        echo "</h5>
\t\t\t\t\t\t<p class=\"sub-title\">Be the first to know about our new arrivals and exclusive offers.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"\" id=\"dialog\" class=\"window\">
\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t<div id=\"newsletter-container\" class=\"box-content\">
\t\t\t\t\t\t\t\t<div id=\"newsletter\">
\t\t\t\t\t\t\t\t\t<div id=\"frm_subscribe\" class=\"newsletter_form\">
\t\t\t\t\t\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text-email\" placeholder=\"";
        // line 20
        echo ($context["entry_email"] ?? null);
        echo "\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"text-email\" placeholder=\"";
        // line 21
        echo ($context["entry_email"] ?? null);
        echo "\" value=\"\" name=\"subscribe_username\" id=\"subscribe_username\" />
\t\t\t\t\t\t\t\t\t\t\t<div id=\"notification-normal\"></div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"button btn-submit\" onclick=\"email_subscribe()\"><span>";
        // line 23
        echo ($context["entry_button"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t</div>
\t<script type=\"text/javascript\">
\t\tfunction email_subscribe(){
\t\t\t\$.ajax({
\t\t\t\t\ttype: 'post',
\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribe',
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
\t\t\t\t\$('#subscribe_username').val(username);
\t\t\t});
\t\t\t\$('#subscribe_email').change(function() {
\t\t\tvar name= \$(this).val();
\t\t\t\t\t\$('#subscribe_username').val(username);
\t\t\t});
\t\t
\t\t});
\t</script>
\t<style>
\t    .block_newsletter #newsletter-container .newsletter_form .text-email {
\t        text-transform: unset;
\t    }
\t    .block_newsletter .alert-danger, .block_newsletter .alert-success {
\t        margin: 6px 0 0;
\t    }
\t</style>
</section>";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/newslettersubscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  68 => 21,  64 => 20,  52 => 11,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/newslettersubscribe.twig", "");
    }
}
