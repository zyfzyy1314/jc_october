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

/* /Users/kekaiwang/Sites/jc_october/themes/demo/partials/site/header.htm */
class __TwigTemplate_8e964bd9cc7cf066c85f90835d8b09885e39c955ddd5e3ec5650d4f115ad913d extends \Twig\Template
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
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Financial news</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == "ticker")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ticker");
        echo "\">
                        行情报价
                    </a>
                </li>

                <li class=\"";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22) == "ticker_dark")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ticker_dark");
        echo "\">
                        行情报价(暗色)
                    </a>
                </li>

                <li class=\"";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28) == "news")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news");
        echo "\">
                        新闻快讯
                    </a>
                </li>

                <li class=\"";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) == "news_en")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news_en");
        echo "\">
                        新闻快讯(英文)
                    </a>
                </li>

                <li class=\"";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40) == "economic_calendar")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("economic_calendar");
        echo "\">
                        财经日历
                    </a>
                </li>

                <li class=\"";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46) == "economic_calendar_en")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("economic_calendar_en");
        echo "\">
                        财经日历(英文)
                    </a>
                </li>

                <li class=\"";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52) == "home")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                        Basic concepts
                    </a>
                </li>
                <!-- <li class=\"";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57) == "ajax")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">
                        AJAX framework
                    </a>
                </li>
                <li class=\"";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62) == "plugins")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">Plugin
                        components
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/kekaiwang/Sites/jc_october/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 63,  167 => 62,  160 => 58,  154 => 57,  147 => 53,  141 => 52,  133 => 47,  127 => 46,  119 => 41,  113 => 40,  105 => 35,  99 => 34,  91 => 29,  85 => 28,  77 => 23,  71 => 22,  63 => 17,  57 => 16,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Financial news</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'ticker' %}active{% endif %}\">
                    <a href=\"{{ 'ticker'|page }}\">
                        行情报价
                    </a>
                </li>

                <li class=\"{% if this.page.id == 'ticker_dark' %}active{% endif %}\">
                    <a href=\"{{ 'ticker_dark'|page }}\">
                        行情报价(暗色)
                    </a>
                </li>

                <li class=\"{% if this.page.id == 'news' %}active{% endif %}\">
                    <a href=\"{{ 'news'|page }}\">
                        新闻快讯
                    </a>
                </li>

                <li class=\"{% if this.page.id == 'news_en' %}active{% endif %}\">
                    <a href=\"{{ 'news_en'|page }}\">
                        新闻快讯(英文)
                    </a>
                </li>

                <li class=\"{% if this.page.id == 'economic_calendar' %}active{% endif %}\">
                    <a href=\"{{ 'economic_calendar'|page }}\">
                        财经日历
                    </a>
                </li>

                <li class=\"{% if this.page.id == 'economic_calendar_en' %}active{% endif %}\">
                    <a href=\"{{ 'economic_calendar_en'|page }}\">
                        财经日历(英文)
                    </a>
                </li>

                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\">
                    <a href=\"{{ 'home'|page }}\">
                        Basic concepts
                    </a>
                </li>
                <!-- <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\">
                    <a href=\"{{ 'ajax'|page }}\">
                        AJAX framework
                    </a>
                </li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\">
                    <a href=\"{{ 'plugins'|page }}\">Plugin
                        components
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>", "/Users/kekaiwang/Sites/jc_october/themes/demo/partials/site/header.htm", "");
    }
}
