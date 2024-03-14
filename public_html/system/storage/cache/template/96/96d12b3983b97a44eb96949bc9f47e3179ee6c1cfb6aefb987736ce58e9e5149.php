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

/* naritafashion/template/extension/module/instagramblock.twig */
class __TwigTemplate_e2aa7eff1691844b637b4b7a2b9da45281e45a4cdd9ba914e049abfa68e5e6c1 extends \Twig\Template
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
        echo "<section class=\"instagramblock clearfix\">
    <div class=\"container\">
            <div class=\"home-title\">
                <a href=\"https://www.instagram.com/";
        // line 4
        echo ($context["username"] ?? null);
        echo "\" target=\"_blank\" rel=\"nofollow\">    
                ";
        // line 5
        echo ($context["title"] ?? null);
        echo "
                </a>
            </div>
        <div class=\"instagramblock\">
            <div id=\"instagram-carousel\" class=\"grid-container\">
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        jQuery(document).ready(function (\$) {
            var userFeed = new Instafeed({
                get: 'user',
                target: \"instagram-carousel\",
                userId: '";
        // line 18
        echo ($context["userid"] ?? null);
        echo "',
                accessToken: '";
        // line 19
        echo ($context["accesstoken"] ?? null);
        echo "',
                resolution: 'standard_resolution',
                sortBy: '";
        // line 21
        echo ($context["sortby"] ?? null);
        echo "',
                limit: 3,
                template:'<div class=\"item\"><a href=";
        // line 23
        echo "{{link";
        echo "}} target=\"_blank\" id=";
        echo "{{id";
        echo "}}><img src=";
        echo "{{image";
        echo "}} /><span class=\"instagram\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></span></a><div class=\"text-container\"><span class=\"likes\"></span><span class=\"comments\"></span></div></div>',
                links: false,
                after: function(){
                    // \$('#instagram-carousel.owl-carousel').owlCarousel({
                    //     loop:true,
                    //     dots:false,
                    //     nav:false,
                    //     autoplay:false,
                    //     margin:30,
                    //     autoplayTimeout:5000,
                    //     smartSpeed: 2500,
                    //     rtl: \$('html').attr('dir') == 'rtl'? true : false,
                    //     autoplay:true,
                    //     responsive:{
                    //         0:{
                    //             items:2,
                    //             margin:15
                    //         },
                    //         544:{
                    //             items:2
                    //         },
                    //         768:{
                    //             items:3
                    //         },
                    //         992:{
                    //             items:4
                    //         },
                    //         1200: {
                    //             items:3
                    //         },
                    //         1500: {
                    //             items:3
                    //         }
                    //     }
                    // });
                    insertDummyData();
                    resizeInstagramTitle();
                }
            });
            userFeed.run();
        });
        function niceNumberDisplay(num) {
            var n = parseFloat(num);
            if(n > 1000000) {
                return Math.round(n / 1000000) + 'm';
            } else if(n > 1000) {
                return Math.round(n / 1000) + 'k';
            } else {
                return n.toFixed(0);
            }
        }
        function resizeInstagramTitle() {
            \$('.instagramblock .home-title.special').css('width',\$('#instagram-carousel .owl-item').css('width'));
        }
    </script>
</section> 
";
    }

    public function getTemplateName()
    {
        return "naritafashion/template/extension/module/instagramblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  71 => 21,  66 => 19,  62 => 18,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "naritafashion/template/extension/module/instagramblock.twig", "");
    }
}
