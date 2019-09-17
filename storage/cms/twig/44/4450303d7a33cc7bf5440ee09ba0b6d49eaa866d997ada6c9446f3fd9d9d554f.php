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

/* /Users/kekaiwang/Sites/jc_october/themes/demo/pages/ticker_dark.htm */
class __TwigTemplate_6c791715fc8c0934dda7479a47a7b3fa6d7f63a2ea24fa9ffaac13fe946ae0d3 extends \Twig\Template
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
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/widget.css");
        echo "\" rel=\"stylesheet\">
<div id=\"container\" class=\"dark-marquee\" style=\"border-radius:0;\">
    <ul id=\"widgetContainer\">

    </ul>
</div>

";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 9
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery.kxbdMarquee.js");
        echo "\"></script>
<script src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery.marquee.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"/themes/demo/assets/js/tiker_dark.js\"></script>
";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Users/kekaiwang/Sites/jc_october/themes/demo/pages/ticker_dark.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  55 => 10,  50 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ 'assets/css/widget.css'|theme }}\" rel=\"stylesheet\">
<div id=\"container\" class=\"dark-marquee\" style=\"border-radius:0;\">
    <ul id=\"widgetContainer\">

    </ul>
</div>

{% put scripts %}
<script src=\"{{ 'assets/javascript/jquery.kxbdMarquee.js'|theme }}\"></script>
<script src=\"{{ 'assets/javascript/jquery.marquee.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"/themes/demo/assets/js/tiker_dark.js\"></script>
{% endput %}", "/Users/kekaiwang/Sites/jc_october/themes/demo/pages/ticker_dark.htm", "");
    }
}
