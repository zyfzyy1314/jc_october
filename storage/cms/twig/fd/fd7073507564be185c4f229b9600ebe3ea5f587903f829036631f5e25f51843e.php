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

/* /Users/kekaiwang/Sites/jc_october/themes/demo/pages/economic_calendar.htm */
class __TwigTemplate_e856d43b5e1a22f11f4cca3087315033a5c80df6f6c039ace4eed2c7719b6007 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/economic.css");
        echo "\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://unpkg.com/element-ui/lib/theme-chalk/index.css\">

<div class=\"market\" id=\"app\">
    <el-form ref=\"temp\" :model=\"temp\" label-position=\"left\" label-width=\"150px\" style=\"margin-top: 50px;\">
        <el-form-item class=\"show-margin\">
            <el-row :gutter=\"20\" style=\"margin-left: 0px;\">
                <el-col :span=\"12\">
                    <el-radio-group v-model=\"temp.time\" size=\"small\" @change=\"handleChange(1)\">
                        <el-radio-button label=\"今天\"></el-radio-button>
                        <el-radio-button label=\"明天\"></el-radio-button>
                        <el-radio-button label=\"这周\"></el-radio-button>
                        <el-radio-button label=\"下周\"></el-radio-button>
                    </el-radio-group>
                </el-col>

                <el-col :span=\"12\" style=\"display:flex;justify-content:flex-end;padding-right:40px;\">
                    <el-button type=\"info\" size=\"small\" icon=\"el-icon-search\" plain @click=\"handleShowSearch\">筛选
                    </el-button>
                </el-col>
            </el-row>
        </el-form-item>

        <div v-show=\"showSearch\" class=\"form-left\">
            <el-form-item label=\"重要性\">
                <el-checkbox-group v-model=\"temp.importance\" @change=\"handleChange(2)\">
                    <el-checkbox label=\"高\"> </el-checkbox>
                    <el-checkbox label=\"中\"> </el-checkbox>
                    <el-checkbox label=\"低\"> </el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item label=\"事件类型\">
                <el-checkbox-group v-model=\"temp.event\" @change=\"handleChange(4)\" :min=\"1\">
                    <el-checkbox label=\"财经事件\"></el-checkbox>
                    <el-checkbox label=\"财经数据\"></el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item label=\"您所在的时区\">
                <el-select v-model=\"temp.zone\" placeholder=\"请选择活动区域\" @change=\"handleChange(3)\">
                    <el-option label=\"(GMT-11:00) Midway Island, Samoa\" value=\"-11\"></el-option>
                    <el-option label=\"(GMT-10:00) Hawaii-Aleutian\" value=\"-10\"></el-option>
                    <el-option label=\"(GMT-09:00) Gambier Islands\" value=\"-9\"></el-option>
                    <el-option label=\"(GMT-08:00) Tijuana, Baja California\" value=\"-8\"></el-option>
                    <el-option label=\"(GMT-07:00) Mountain Time (US &amp; Canada)\" value=\"-7\"></el-option>
                    <el-option label=\"(GMT-06:00) Saskatchewan, Central America\" value=\"-6\"></el-option>
                    <el-option label=\"(GMT-05:00) Guadalajara, Mexico City, Monterrey\" value=\"-5\"></el-option>
                    <el-option label=\"(GMT-04:00) La Paz\" value=\"-4\"></el-option>
                    <el-option label=\"(GMT-03:00) UTC-3\" value=\"-3\"></el-option>
                    <el-option label=\"(GMT-02:00) Mid-Atlantic\" value=\"-2\"></el-option>
                    <el-option label=\"(GMT-01:00) Azores\" value=\"-1\"></el-option>
                    <el-option label=\"(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London\" value=\"0\">
                    </el-option>
                    <el-option label=\"(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna\" value=\"1\">
                    </el-option>
                    <el-option label=\"(GMT+02:00) Beirut\" value=\"2\"></el-option>
                    <el-option label=\"(GMT+03:00) Minsk\" value=\"3\"></el-option>
                    <el-option label=\"(GMT+04:00) Abu Dhabi, Muscat\" value=\"4\"></el-option>
                    <el-option label=\"(GMT+05:00) Ekaterinburg\" value=\"5\"></el-option>
                    <el-option label=\"(GMT+06:00) Astana, Dhaka\" value=\"6\"></el-option>
                    <el-option label=\"(GMT+07:00) Bangkok, Hanoi, Jakarta\" value=\"7\"></el-option>
                    <el-option label=\"(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi\" value=\"8\"></el-option>
                    <el-option label=\"(GMT+09:00) Osaka, Sapporo, Tokyo\" value=\"9\"></el-option>
                    <el-option label=\"(GMT+10:00) Brisbane\" value=\"+10\"></el-option>
                    <el-option label=\"(GMT+11:00) Solomon Is., New Caledonia\" value=\"11\"></el-option>
                </el-select>
            </el-form-item>

            <el-form-item label=\"国家\">
                <el-checkbox :indeterminate=\"isIndeterminate\" v-model=\"checkAll\" @change=\"handleCheckAllChange\">全选
                </el-checkbox>
                <el-checkbox-group v-model=\"temp.country\" @change=\"handleCountryChange\" :min=\"1\">
                    <el-checkbox label=\"中国\"></el-checkbox>
                    <el-checkbox label=\"澳大利亚\"></el-checkbox>
                    <el-checkbox label=\"美国\"></el-checkbox>
                    <el-checkbox label=\"英国\"></el-checkbox>
                    <el-checkbox label=\"日本\"></el-checkbox>
                    <el-checkbox label=\"意大利\"></el-checkbox>
                    <el-checkbox label=\"德国\"></el-checkbox>
                    <el-checkbox label=\"法国\"></el-checkbox>
                    <el-checkbox label=\"欧元区\"></el-checkbox>
                    <el-checkbox label=\"瑞士\"></el-checkbox>
                    <el-checkbox label=\"加拿大\"></el-checkbox>
                    <el-checkbox label=\"新西兰\"></el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item>
                <el-row :gutter=\"20\">
                    <el-col :span=\"4\" :offset=\"16\">
                        <el-button type=\"text\" size=\"small\" icon=\"el-icon-refresh-right\" plain @click=\"handleDefault\">
                            恢复默认设置
                        </el-button>
                    </el-col>
                </el-row>
            </el-form-item>
        </div>
    </el-form>

    <el-table :data=\"tableData\" stripe style=\"width: 100%\" highlight-current-row v-loading=\"listLoading\"
        @expand-change=\"rowExpand\">
        <el-table-column type=\"expand\">
            <template slot-scope=\"props\">
                <el-row :gutter=\"20\">
                    <el-col :span=\"12\">
                        <div class=\"releaseInfo bold\">
                            <span>最新发布
                                <div class=\"noBold\" v-html=\"props.row.date.slice(0, 10)\">
                                    ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 110), "date", [], "any", false, false, false, 110), "slice", [0 => 0, 1 => 10], "method", false, false, false, 110), "html", null, true);
        echo "</div>
                            </span>
                            <span>今值
                                <div class=\"arial_14 redFont\"
                                    v-html=\"props.row.reality == '' ? '--' : props.row.reality\">
                                    ";
        // line 115
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 115), "reality", [], "any", false, false, false, 115) == "")) ? (print ("--")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 115), "reality", [], "any", false, false, false, 115), "html", null, true))));
        echo "</div>
                            </span>
                            <span>预测值
                                <div class=\"arial_14 noBold\"
                                    v-html=\"props.row.forecast == '' ? '--' : props.row.forecast\">
                                    ";
        // line 120
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 120), "forecast", [], "any", false, false, false, 120) == "")) ? (print ("--")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 120), "forecast", [], "any", false, false, false, 120), "html", null, true))));
        echo "</div>
                            </span>
                            <span>前值
                                <div class=\"arial_14 noBold blackFont\"
                                    v-html=\"props.row.previous == '' ? '--' : props.row.previous\">
                                    ";
        // line 125
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 125), "previous", [], "any", false, false, false, 125) == "")) ? (print ("--")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 125), "previous", [], "any", false, false, false, 125), "html", null, true))));
        echo "</div>
                            </span>
                        </div>
                        <br>
                        <div class=\"overViewBox event\" v-show=\"props.row.overview\">
                            <div class=\"left\">
                                <div v-html=\"props.row.overview\"></div>
                                <p>来源：<a :href=\"props.row.source_of_report_link\" target=\"_blank\"
                                        style=\"text-decoration: none; cursor: pointer;\"
                                        v-html=\"props.row.source_of_report\">";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 134), "source_of_report", [], "any", false, false, false, 134), "html", null, true);
        echo "</a>
                                </p>
                            </div>
                            <div class=\"right\">
                                <div>
                                    <span>重要性:</span>
                                    <span>
                                        <i class=\"el-icon-star-on\" v-for=\"i in [1,2,3]\" :key=\"i\"
                                            :style=\"{color: i<=props.row.importance ? props.row.importance>=3 ? '#E32828' : '#ba9b5b' : '#f0f0f0'}\"></i>
                                    </span>
                                </div>
                                <div>
                                    <span>国家及地区:</span>
                                    <span v-html=\"props.row.history_country\">
                                        ";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 148), "history_country", [], "any", false, false, false, 148), "html", null, true);
        echo "
                                    </span>
                                </div>
                                <div>
                                    <span>货币:</span>
                                    <span v-html=\"props.row.history_currency\">";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 153), "history_currency", [], "any", false, false, false, 153), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                    </el-col>

                    <el-col :span=\"12\" v-loading=\"historyLoading\">
                        <div :id=\"`charts-\${props.row.id}`\" style=\"width: 100%;height: 300px;\"></div>
                        <!-- <div class=\"history-data bold\">
                                <span>历史数据：
                                </span>
                            </div>
                            <el-table :data=\"historyData\" stripe style=\"width: 100%\" highlight-current-row
                                v-loading=\"historyLoading\">
                                <el-table-column prop=\"date\" label=\"发布时间\">
                                    <template slot-scope=\"scope\">
                                        <span>";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 170), "date_str", [], "any", false, false, false, 170), "html", null, true);
        echo "</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"reality\" label=\"今值\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: props.row.importance>=3 ? '#E32828' : ''}\">";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 177), "reality", [], "any", false, false, false, 177), "html", null, true);
        echo "</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"forecast\" label=\"预测值\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: props.row.importance>=3 ? '#E32828' : ''}\">";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 184), "forecast", [], "any", false, false, false, 184), "html", null, true);
        echo "</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"previous\" label=\"前值\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: scope.row.importance>=3 ? '#E32828' : ''}\">";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 191), "previous", [], "any", false, false, false, 191), "html", null, true);
        echo "</span>
                                    </template>
                                </el-table-column>
                            </el-table>

                            <div class=\"pages\">
                                <el-pagination @current-change=\"handleHistoryChange\" :page-size=\"historyTemp.limit\"
                                    background layout=\"prev, pager, next, jumper\" :total=\"historyTotal\"
                                    :current-page.sync=\"historyTemp.page\"></el-pagination>
                            </div> -->
                    </el-col>
                </el-row>
            </template>
        </el-table-column>

        <el-table-column prop=\"date\" label=\"时间\" width=\"180px\">
            <template slot-scope=\"scope\">
                <span v-if=\"temp.time == '今天' || temp.time == '明天'\"
                    :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.date.split(' ')[1]\">";
        // line 210
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 210), "date", [], "any", false, false, false, 210), "split", [0 => " "], "method", false, false, false, 210)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[1] ?? null) : null), "html", null, true);
        echo "</span>
                <span v-else v-html=\"`\${scope.row.date}(\${formatWeekDay(scope.row.date)})`\"></span>
            </template>
        </el-table-column>

        <el-table-column prop=\"country\" label=\"国/区\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.country\">";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 218), "country", [], "any", false, false, false, 218), "html", null, true);
        echo "</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"title\" label=\"事件\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.title\">";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 225), "title", [], "any", false, false, false, 225), "html", null, true);
        echo "</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"importance\" label=\"重要性\">
            <template slot-scope=\"scope\">
                <i class=\"el-icon-star-on\" v-for=\"i in [1,2,3]\" :key=\"i\"
                    :style=\"{color: i<=scope.row.importance ? '#ba9b5b' : '#f0f0f0'}\"></i>
            </template>
        </el-table-column>

        <el-table-column prop=\"previous\" label=\"前值\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.previous\">";
        // line 239
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 239), "previous", [], "any", false, false, false, 239), "html", null, true);
        echo "
                    ";
        // line 240
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 240), "unit", [], "any", false, false, false, 240) != "null")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 240), "unit", [], "any", false, false, false, 240), "html", null, true))) : (print ("")));
        echo "</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"forecast\" label=\"预测值\">
            <template slot-scope=\"scope\">
                <span v-if=\"scope.row.forecast != null\" :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.forecast\">";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 247), "forecast", [], "any", false, false, false, 247), "html", null, true);
        echo "
                    ";
        // line 248
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 248), "unit", [], "any", false, false, false, 248) != "null")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 248), "unit", [], "any", false, false, false, 248), "html", null, true))) : (print ("")));
        echo "</span>
                <span v-else>---</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"reality\" label=\"公布值\">
            <template slot-scope=\"scope\">
                <span v-if=\"scope.row.reality != null\" :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.reality\">";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 256), "reality", [], "any", false, false, false, 256), "html", null, true);
        echo "
                    ";
        // line 257
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 257), "unit", [], "any", false, false, false, 257) != "null")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 257), "unit", [], "any", false, false, false, 257), "html", null, true))) : (print ("")));
        echo "</span>
                <span v-else>---</span>
            </template>
        </el-table-column>
    </el-table>

    <div class=\"pages\">
        <el-pagination @current-change=\"handleCurrentChange\" :page-size=\"temp.limit\" background
            layout=\"prev, pager, next, jumper\" :total=\"total\" :current-page.sync=\"nowPage\"></el-pagination>
    </div>
</div>

";
        // line 269
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 270
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/vue.js");
        echo "\"></script>
<script src=\"";
        // line 271
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/element-index.js");
        echo "\"></script>
<script src=\"";
        // line 272
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/echarts.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"/themes/demo/assets/js/economic_calendar.js\"></script>
";
        // line 269
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Users/kekaiwang/Sites/jc_october/themes/demo/pages/economic_calendar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 269,  380 => 272,  376 => 271,  371 => 270,  369 => 269,  354 => 257,  350 => 256,  339 => 248,  335 => 247,  325 => 240,  321 => 239,  304 => 225,  294 => 218,  283 => 210,  261 => 191,  251 => 184,  241 => 177,  231 => 170,  211 => 153,  203 => 148,  186 => 134,  174 => 125,  166 => 120,  158 => 115,  150 => 110,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ 'assets/css/economic.css'|theme }}\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://unpkg.com/element-ui/lib/theme-chalk/index.css\">

<div class=\"market\" id=\"app\">
    <el-form ref=\"temp\" :model=\"temp\" label-position=\"left\" label-width=\"150px\" style=\"margin-top: 50px;\">
        <el-form-item class=\"show-margin\">
            <el-row :gutter=\"20\" style=\"margin-left: 0px;\">
                <el-col :span=\"12\">
                    <el-radio-group v-model=\"temp.time\" size=\"small\" @change=\"handleChange(1)\">
                        <el-radio-button label=\"今天\"></el-radio-button>
                        <el-radio-button label=\"明天\"></el-radio-button>
                        <el-radio-button label=\"这周\"></el-radio-button>
                        <el-radio-button label=\"下周\"></el-radio-button>
                    </el-radio-group>
                </el-col>

                <el-col :span=\"12\" style=\"display:flex;justify-content:flex-end;padding-right:40px;\">
                    <el-button type=\"info\" size=\"small\" icon=\"el-icon-search\" plain @click=\"handleShowSearch\">筛选
                    </el-button>
                </el-col>
            </el-row>
        </el-form-item>

        <div v-show=\"showSearch\" class=\"form-left\">
            <el-form-item label=\"重要性\">
                <el-checkbox-group v-model=\"temp.importance\" @change=\"handleChange(2)\">
                    <el-checkbox label=\"高\"> </el-checkbox>
                    <el-checkbox label=\"中\"> </el-checkbox>
                    <el-checkbox label=\"低\"> </el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item label=\"事件类型\">
                <el-checkbox-group v-model=\"temp.event\" @change=\"handleChange(4)\" :min=\"1\">
                    <el-checkbox label=\"财经事件\"></el-checkbox>
                    <el-checkbox label=\"财经数据\"></el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item label=\"您所在的时区\">
                <el-select v-model=\"temp.zone\" placeholder=\"请选择活动区域\" @change=\"handleChange(3)\">
                    <el-option label=\"(GMT-11:00) Midway Island, Samoa\" value=\"-11\"></el-option>
                    <el-option label=\"(GMT-10:00) Hawaii-Aleutian\" value=\"-10\"></el-option>
                    <el-option label=\"(GMT-09:00) Gambier Islands\" value=\"-9\"></el-option>
                    <el-option label=\"(GMT-08:00) Tijuana, Baja California\" value=\"-8\"></el-option>
                    <el-option label=\"(GMT-07:00) Mountain Time (US &amp; Canada)\" value=\"-7\"></el-option>
                    <el-option label=\"(GMT-06:00) Saskatchewan, Central America\" value=\"-6\"></el-option>
                    <el-option label=\"(GMT-05:00) Guadalajara, Mexico City, Monterrey\" value=\"-5\"></el-option>
                    <el-option label=\"(GMT-04:00) La Paz\" value=\"-4\"></el-option>
                    <el-option label=\"(GMT-03:00) UTC-3\" value=\"-3\"></el-option>
                    <el-option label=\"(GMT-02:00) Mid-Atlantic\" value=\"-2\"></el-option>
                    <el-option label=\"(GMT-01:00) Azores\" value=\"-1\"></el-option>
                    <el-option label=\"(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London\" value=\"0\">
                    </el-option>
                    <el-option label=\"(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna\" value=\"1\">
                    </el-option>
                    <el-option label=\"(GMT+02:00) Beirut\" value=\"2\"></el-option>
                    <el-option label=\"(GMT+03:00) Minsk\" value=\"3\"></el-option>
                    <el-option label=\"(GMT+04:00) Abu Dhabi, Muscat\" value=\"4\"></el-option>
                    <el-option label=\"(GMT+05:00) Ekaterinburg\" value=\"5\"></el-option>
                    <el-option label=\"(GMT+06:00) Astana, Dhaka\" value=\"6\"></el-option>
                    <el-option label=\"(GMT+07:00) Bangkok, Hanoi, Jakarta\" value=\"7\"></el-option>
                    <el-option label=\"(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi\" value=\"8\"></el-option>
                    <el-option label=\"(GMT+09:00) Osaka, Sapporo, Tokyo\" value=\"9\"></el-option>
                    <el-option label=\"(GMT+10:00) Brisbane\" value=\"+10\"></el-option>
                    <el-option label=\"(GMT+11:00) Solomon Is., New Caledonia\" value=\"11\"></el-option>
                </el-select>
            </el-form-item>

            <el-form-item label=\"国家\">
                <el-checkbox :indeterminate=\"isIndeterminate\" v-model=\"checkAll\" @change=\"handleCheckAllChange\">全选
                </el-checkbox>
                <el-checkbox-group v-model=\"temp.country\" @change=\"handleCountryChange\" :min=\"1\">
                    <el-checkbox label=\"中国\"></el-checkbox>
                    <el-checkbox label=\"澳大利亚\"></el-checkbox>
                    <el-checkbox label=\"美国\"></el-checkbox>
                    <el-checkbox label=\"英国\"></el-checkbox>
                    <el-checkbox label=\"日本\"></el-checkbox>
                    <el-checkbox label=\"意大利\"></el-checkbox>
                    <el-checkbox label=\"德国\"></el-checkbox>
                    <el-checkbox label=\"法国\"></el-checkbox>
                    <el-checkbox label=\"欧元区\"></el-checkbox>
                    <el-checkbox label=\"瑞士\"></el-checkbox>
                    <el-checkbox label=\"加拿大\"></el-checkbox>
                    <el-checkbox label=\"新西兰\"></el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item>
                <el-row :gutter=\"20\">
                    <el-col :span=\"4\" :offset=\"16\">
                        <el-button type=\"text\" size=\"small\" icon=\"el-icon-refresh-right\" plain @click=\"handleDefault\">
                            恢复默认设置
                        </el-button>
                    </el-col>
                </el-row>
            </el-form-item>
        </div>
    </el-form>

    <el-table :data=\"tableData\" stripe style=\"width: 100%\" highlight-current-row v-loading=\"listLoading\"
        @expand-change=\"rowExpand\">
        <el-table-column type=\"expand\">
            <template slot-scope=\"props\">
                <el-row :gutter=\"20\">
                    <el-col :span=\"12\">
                        <div class=\"releaseInfo bold\">
                            <span>最新发布
                                <div class=\"noBold\" v-html=\"props.row.date.slice(0, 10)\">
                                    {{ props.row.date.slice(0, 10) }}</div>
                            </span>
                            <span>今值
                                <div class=\"arial_14 redFont\"
                                    v-html=\"props.row.reality == '' ? '--' : props.row.reality\">
                                    {{ props.row.reality == '' ? '--' : props.row.reality }}</div>
                            </span>
                            <span>预测值
                                <div class=\"arial_14 noBold\"
                                    v-html=\"props.row.forecast == '' ? '--' : props.row.forecast\">
                                    {{ props.row.forecast == '' ? '--' : props.row.forecast }}</div>
                            </span>
                            <span>前值
                                <div class=\"arial_14 noBold blackFont\"
                                    v-html=\"props.row.previous == '' ? '--' : props.row.previous\">
                                    {{ props.row.previous == '' ? '--' : props.row.previous }}</div>
                            </span>
                        </div>
                        <br>
                        <div class=\"overViewBox event\" v-show=\"props.row.overview\">
                            <div class=\"left\">
                                <div v-html=\"props.row.overview\"></div>
                                <p>来源：<a :href=\"props.row.source_of_report_link\" target=\"_blank\"
                                        style=\"text-decoration: none; cursor: pointer;\"
                                        v-html=\"props.row.source_of_report\">{{ props.row.source_of_report }}</a>
                                </p>
                            </div>
                            <div class=\"right\">
                                <div>
                                    <span>重要性:</span>
                                    <span>
                                        <i class=\"el-icon-star-on\" v-for=\"i in [1,2,3]\" :key=\"i\"
                                            :style=\"{color: i<=props.row.importance ? props.row.importance>=3 ? '#E32828' : '#ba9b5b' : '#f0f0f0'}\"></i>
                                    </span>
                                </div>
                                <div>
                                    <span>国家及地区:</span>
                                    <span v-html=\"props.row.history_country\">
                                        {{ props.row.history_country }}
                                    </span>
                                </div>
                                <div>
                                    <span>货币:</span>
                                    <span v-html=\"props.row.history_currency\">{{ props.row.history_currency }}</span>
                                </div>
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                    </el-col>

                    <el-col :span=\"12\" v-loading=\"historyLoading\">
                        <div :id=\"`charts-\${props.row.id}`\" style=\"width: 100%;height: 300px;\"></div>
                        <!-- <div class=\"history-data bold\">
                                <span>历史数据：
                                </span>
                            </div>
                            <el-table :data=\"historyData\" stripe style=\"width: 100%\" highlight-current-row
                                v-loading=\"historyLoading\">
                                <el-table-column prop=\"date\" label=\"发布时间\">
                                    <template slot-scope=\"scope\">
                                        <span>{{ scope.row.date_str }}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"reality\" label=\"今值\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: props.row.importance>=3 ? '#E32828' : ''}\">{{scope.row.reality}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"forecast\" label=\"预测值\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: props.row.importance>=3 ? '#E32828' : ''}\">{{scope.row.forecast}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"previous\" label=\"前值\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: scope.row.importance>=3 ? '#E32828' : ''}\">{{scope.row.previous}}</span>
                                    </template>
                                </el-table-column>
                            </el-table>

                            <div class=\"pages\">
                                <el-pagination @current-change=\"handleHistoryChange\" :page-size=\"historyTemp.limit\"
                                    background layout=\"prev, pager, next, jumper\" :total=\"historyTotal\"
                                    :current-page.sync=\"historyTemp.page\"></el-pagination>
                            </div> -->
                    </el-col>
                </el-row>
            </template>
        </el-table-column>

        <el-table-column prop=\"date\" label=\"时间\" width=\"180px\">
            <template slot-scope=\"scope\">
                <span v-if=\"temp.time == '今天' || temp.time == '明天'\"
                    :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.date.split(' ')[1]\">{{scope.row.date.split(' ')[1]}}</span>
                <span v-else v-html=\"`\${scope.row.date}(\${formatWeekDay(scope.row.date)})`\"></span>
            </template>
        </el-table-column>

        <el-table-column prop=\"country\" label=\"国/区\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.country\">{{scope.row.country}}</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"title\" label=\"事件\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.title\">{{scope.row.title}}</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"importance\" label=\"重要性\">
            <template slot-scope=\"scope\">
                <i class=\"el-icon-star-on\" v-for=\"i in [1,2,3]\" :key=\"i\"
                    :style=\"{color: i<=scope.row.importance ? '#ba9b5b' : '#f0f0f0'}\"></i>
            </template>
        </el-table-column>

        <el-table-column prop=\"previous\" label=\"前值\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.previous\">{{scope.row.previous}}
                    {{scope.row.unit != 'null' ? scope.row.unit:''}}</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"forecast\" label=\"预测值\">
            <template slot-scope=\"scope\">
                <span v-if=\"scope.row.forecast != null\" :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.forecast\">{{scope.row.forecast}}
                    {{scope.row.unit != 'null' ? scope.row.unit:''}}</span>
                <span v-else>---</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"reality\" label=\"公布值\">
            <template slot-scope=\"scope\">
                <span v-if=\"scope.row.reality != null\" :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.reality\">{{scope.row.reality}}
                    {{scope.row.unit != 'null' ? scope.row.unit:''}}</span>
                <span v-else>---</span>
            </template>
        </el-table-column>
    </el-table>

    <div class=\"pages\">
        <el-pagination @current-change=\"handleCurrentChange\" :page-size=\"temp.limit\" background
            layout=\"prev, pager, next, jumper\" :total=\"total\" :current-page.sync=\"nowPage\"></el-pagination>
    </div>
</div>

{% put scripts %}
<script src=\"{{ 'assets/javascript/vue.js'|theme }}\"></script>
<script src=\"{{ 'assets/javascript/element-index.js'|theme }}\"></script>
<script src=\"{{ 'assets/javascript/echarts.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"/themes/demo/assets/js/economic_calendar.js\"></script>
{% endput %}", "/Users/kekaiwang/Sites/jc_october/themes/demo/pages/economic_calendar.htm", "");
    }
}
