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

/* /Users/kekaiwang/Sites/jc_october/themes/demo/pages/news.htm */
class __TwigTemplate_aac054b2a277fed82e2b943079bdcd72004e4bc4e2a0b43928d037395d28fa08 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/news.css");
        echo "\" rel=\"stylesheet\">

<div class=\"market market-cn\" style=\"width:100%;overflow-x:hidden;\">
    <ul class=\"dateBox\">

    </ul>

    <button type=\"button\" class=\"el-button more gold el-button--primary el-button--small\" id=\"loadMore\">
        <img id=\"loading\" src=\"/themes/demo/assets/css/loading.gif\" style=\"width: 14px; display: none;\" />
        <span>点击加载更多</span>
    </button>
</div>

";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 15
        echo "<script type=\"text/javascript\" src=\"/themes/demo/assets/js/news.js\"></script>
";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Users/kekaiwang/Sites/jc_october/themes/demo/pages/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  56 => 15,  54 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ 'assets/css/news.css'|theme }}\" rel=\"stylesheet\">

<div class=\"market market-cn\" style=\"width:100%;overflow-x:hidden;\">
    <ul class=\"dateBox\">

    </ul>

    <button type=\"button\" class=\"el-button more gold el-button--primary el-button--small\" id=\"loadMore\">
        <img id=\"loading\" src=\"/themes/demo/assets/css/loading.gif\" style=\"width: 14px; display: none;\" />
        <span>点击加载更多</span>
    </button>
</div>

{% put scripts %}
<script type=\"text/javascript\" src=\"/themes/demo/assets/js/news.js\"></script>
{% endput %}", "/Users/kekaiwang/Sites/jc_october/themes/demo/pages/news.htm", "");
    }
}
