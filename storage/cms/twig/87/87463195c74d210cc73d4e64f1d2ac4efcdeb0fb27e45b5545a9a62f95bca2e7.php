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

/* /Users/kekaiwang/Sites/jc_october/themes/demo/pages/economic_calendar_en.htm */
class __TwigTemplate_dfbb62ff138c1cebf9e0fadacec28135b8627df27ea8f036c7c717a02572a846 extends \Twig\Template
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
                        <el-radio-button label=\"Today\"></el-radio-button>
                        <el-radio-button label=\"Tomorrow\"></el-radio-button>
                        <el-radio-button label=\"This Week\"></el-radio-button>
                        <el-radio-button label=\"Next Week\"></el-radio-button>
                    </el-radio-group>
                </el-col>

                <el-col :span=\"12\" style=\"display:flex;justify-content:flex-end;padding-right:40px;\">
                    <el-button type=\"info\" size=\"small\" icon=\"el-icon-search\" plain @click=\"handleShowSearch\">
                        Filters
                    </el-button>
                </el-col>
            </el-row>
        </el-form-item>

        <div v-show=\"showSearch\" class=\"form-left\">
            <el-form-item label=\"Importance\">
                <el-checkbox-group v-model=\"temp.importance\" @change=\"handleChange(2)\">
                    <el-checkbox label=\"High\"></el-checkbox>
                    <el-checkbox label=\"Middle\"></el-checkbox>
                    <el-checkbox label=\"Low\"></el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item label=\"Event Type\">
                <el-checkbox-group v-model=\"temp.event\" @change=\"handleChange(2)\" :min=\"1\">
                    <el-checkbox label=\"Financial Events\"></el-checkbox>
                    <el-checkbox label=\"Economic Data\"></el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item label=\"Current Time\">
                <el-select v-model=\"temp.zone\" placeholder=\"select\" @change=\"handleChange(3)\">
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

            <el-form-item label=\"Country\">
                <el-checkbox :indeterminate=\"isIndeterminate\" v-model=\"checkAll\" @change=\"handleCheckAllChange\">All
                </el-checkbox>
                <el-checkbox-group v-model=\"temp.country\" @change=\"handleCountryChange\" :min=\"1\">
                    <el-checkbox label=\"China\"></el-checkbox>
                    <el-checkbox label=\"Australia\"></el-checkbox>
                    <el-checkbox label=\"United States\"></el-checkbox>
                    <el-checkbox label=\"United Kingdom\"></el-checkbox>
                    <el-checkbox label=\"Japan\"></el-checkbox>
                    <el-checkbox label=\"Italy\"></el-checkbox>
                    <el-checkbox label=\"Germany\"></el-checkbox>
                    <el-checkbox label=\"France\"></el-checkbox>
                    <el-checkbox label=\"European Union\"></el-checkbox>
                    <el-checkbox label=\"Switzerland\"></el-checkbox>
                    <el-checkbox label=\"Canada\"></el-checkbox>
                    <el-checkbox label=\"New Zealand\"></el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item>
                <el-row :gutter=\"20\">
                    <el-col :span=\"4\" :offset=\"16\">
                        <el-button type=\"text\" size=\"small\" icon=\"el-icon-refresh-right\" plain @click=\"handleDefault\">
                            Restore Default Settings
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
                            <span>Latest Release
                                <div class=\"noBold\" v-html=\"props.row.date.slice(0, 10)\">
                                    ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 111), "date", [], "any", false, false, false, 111), "slice", [0 => 0, 1 => 10], "method", false, false, false, 111), "html", null, true);
        echo "</div>
                            </span>
                            <span>Reality
                                <div class=\"arial_14 redFont\"
                                    v-html=\"props.row.reality == '' ? '--' : props.row.reality\">
                                    ";
        // line 116
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 116), "reality", [], "any", false, false, false, 116) == "")) ? (print ("--")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 116), "reality", [], "any", false, false, false, 116), "html", null, true))));
        echo "</div>
                            </span>
                            <span>Forecast
                                <div class=\"arial_14 noBold\"
                                    v-html=\"props.row.forecast == '' ? '--' : props.row.forecast\">
                                    ";
        // line 121
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 121), "forecast", [], "any", false, false, false, 121) == "")) ? (print ("--")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 121), "forecast", [], "any", false, false, false, 121), "html", null, true))));
        echo "</div>
                            </span>
                            <span>Previous
                                <div class=\"arial_14 noBold blackFont\"
                                    v-html=\"props.row.previous == '' ? '--' : props.row.previous\">
                                    ";
        // line 126
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 126), "previous", [], "any", false, false, false, 126) == "")) ? (print ("--")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 126), "previous", [], "any", false, false, false, 126), "html", null, true))));
        echo "</div>
                            </span>
                        </div>
                        <br>
                        <div v-show=\"props.row.overview\">
                            <div class=\"overViewBox event\">
                                <div class=\"left\">
                                    <div v-html=\"props.row.overview\"></div>
                                    <p>Source: <a :href=\"props.row.source_of_report_link\" target=\"_blank\"
                                            style=\"text-decoration: none; cursor: pointer;\"
                                            v-html=\"props.row.source_of_report\">";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 136), "source_of_report", [], "any", false, false, false, 136), "html", null, true);
        echo "</a>
                                    </p>
                                </div>
                                <div class=\"right\">
                                    <div>
                                        <span>Importance:</span>
                                        <span>
                                            <i class=\"el-icon-star-on\" v-for=\"i in [1,2,3]\" :key=\"i\"
                                                :style=\"{color: i<=props.row.importance ? props.row.importance>=3 ? '#48a047' : '#ba9b5b' : '#f0f0f0'}\"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <span>Country:</span>
                                        <span v-html=\"props.row.history_country\">
                                            ";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 150), "history_country", [], "any", false, false, false, 150), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                    <div>
                                        <span>Currency:</span>
                                        <span
                                            v-html=\"props.row.history_currency\">";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "row", [], "any", false, false, false, 156), "history_currency", [], "any", false, false, false, 156), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                            </div>
                        </div>
                        <br>
                    </el-col>
                    <br>
                    <el-col :span=\"12\" v-loading=\"historyLoading\">
                        <div :id=\"`charts-\${props.row.id}`\" style=\"width: 100%;height: 300px;\"></div>
                        <!-- <div class=\"history-data bold\">
                                <span>History:
                                </span>
                            </div>
                            <el-table :data=\"historyData\" stripe style=\"width: 100%\" highlight-current-row
                                v-loading=\"historyLoading\">
                                <el-table-column prop=\"date\" label=\"Release Date\">
                                    <template slot-scope=\"scope\">
                                        <span>";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 175), "date_str", [], "any", false, false, false, 175), "html", null, true);
        echo "</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"reality\" label=\"Actual\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: props.row.importance>=3 ? '#48a047' : ''}\">";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 182), "reality", [], "any", false, false, false, 182), "html", null, true);
        echo "</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"forecast\" label=\"Forecast\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: props.row.importance>=3 ? '#48a047' : ''}\">";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 189), "forecast", [], "any", false, false, false, 189), "html", null, true);
        echo "</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"previous\" label=\"Previous\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\">";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 196), "previous", [], "any", false, false, false, 196), "html", null, true);
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

        <el-table-column prop=\"date\" label=\"Time\">
            <template slot-scope=\"scope\">
                <span v-if=\"temp.time == 'Today' || temp.time == 'Tomorrow'\"
                    :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.date.split(' ')[1]\">";
        // line 215
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 215), "date", [], "any", false, false, false, 215), "split", [0 => " "], "method", false, false, false, 215)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[1] ?? null) : null), "html", null, true);
        echo "</span>
                <span v-else v-html=\"`\${scope.row.date}(\${formatWeekDay(scope.row.date)})`\"></span>
            </template>
        </el-table-column>

        <el-table-column prop=\"country\" label=\"Currency\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.country\">";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 223), "country", [], "any", false, false, false, 223), "html", null, true);
        echo "</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"title\" label=\"Event\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.title\">";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 230), "title", [], "any", false, false, false, 230), "html", null, true);
        echo "</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"importance\" label=\"Importance\">
            <template slot-scope=\"scope\">
                <i class=\"el-icon-star-on\" v-for=\"i in [1,2,3]\" :key=\"i\"
                    :style=\"{color: i<=scope.row.importance ? scope.row.importance>=3 ? '#48a047' : '#ba9b5b' : '#f0f0f0'}\"></i>
            </template>
        </el-table-column>

        <el-table-column prop=\"previous\" label=\"Previous\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.previous\">";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 244), "previous", [], "any", false, false, false, 244), "html", null, true);
        echo "
                    ";
        // line 245
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 245), "unit", [], "any", false, false, false, 245) != "null")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 245), "unit", [], "any", false, false, false, 245), "html", null, true))) : (print ("")));
        echo "</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"forecast\" label=\"Forecast\">
            <template slot-scope=\"scope\">
                <span v-if=\"scope.row.forecast != null\" :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.forecast\">";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 252), "forecast", [], "any", false, false, false, 252), "html", null, true);
        echo "
                    ";
        // line 253
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 253), "unit", [], "any", false, false, false, 253) != "null")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 253), "unit", [], "any", false, false, false, 253), "html", null, true))) : (print ("")));
        echo "</span>
                <span v-else>---</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"reality\" label=\"Actual\">
            <template slot-scope=\"scope\">
                <span v-if=\"scope.row.reality != null\" :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.reality\">";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 261), "reality", [], "any", false, false, false, 261), "html", null, true);
        echo "
                    ";
        // line 262
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 262), "unit", [], "any", false, false, false, 262) != "null")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 262), "unit", [], "any", false, false, false, 262), "html", null, true))) : (print ("")));
        echo "</span>
                <span v-else>---</span>
            </template>
        </el-table-column>
        <!-- <el-table-column prop=\"effect\" label=\"影响\">
                <template slot-scope=\"scope\">
                    <span
                        style=\"color:rgb(59,164,77);border:1px solid rgb(59,164,77);padding:2px 5px\">";
        // line 269
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scope"] ?? null), "row", [], "any", false, false, false, 269), "effect", [], "any", false, false, false, 269), "html", null, true);
        echo "</span>
                </template>
            </el-table-column> -->
    </el-table>

    <div class=\"pages\">
        <el-pagination @current-change=\"handleCurrentChange\" :page-size=\"temp.limit\" background
            layout=\"prev, pager, next, jumper\" :total=\"total\" :current-page.sync=\"nowPage\"></el-pagination>
    </div>
</div>

";
        // line 280
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 281
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/vue.js");
        echo "\"></script>
<script src=\"";
        // line 282
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/element-index.js");
        echo "\"></script>
<script src=\"";
        // line 283
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/echarts.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"/themes/demo/assets/js/economic_calendar_en.js\"></script>
";
        // line 280
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Users/kekaiwang/Sites/jc_october/themes/demo/pages/economic_calendar_en.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 280,  394 => 283,  390 => 282,  385 => 281,  383 => 280,  369 => 269,  359 => 262,  355 => 261,  344 => 253,  340 => 252,  330 => 245,  326 => 244,  309 => 230,  299 => 223,  288 => 215,  266 => 196,  256 => 189,  246 => 182,  236 => 175,  214 => 156,  205 => 150,  188 => 136,  175 => 126,  167 => 121,  159 => 116,  151 => 111,  37 => 1,);
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
                        <el-radio-button label=\"Today\"></el-radio-button>
                        <el-radio-button label=\"Tomorrow\"></el-radio-button>
                        <el-radio-button label=\"This Week\"></el-radio-button>
                        <el-radio-button label=\"Next Week\"></el-radio-button>
                    </el-radio-group>
                </el-col>

                <el-col :span=\"12\" style=\"display:flex;justify-content:flex-end;padding-right:40px;\">
                    <el-button type=\"info\" size=\"small\" icon=\"el-icon-search\" plain @click=\"handleShowSearch\">
                        Filters
                    </el-button>
                </el-col>
            </el-row>
        </el-form-item>

        <div v-show=\"showSearch\" class=\"form-left\">
            <el-form-item label=\"Importance\">
                <el-checkbox-group v-model=\"temp.importance\" @change=\"handleChange(2)\">
                    <el-checkbox label=\"High\"></el-checkbox>
                    <el-checkbox label=\"Middle\"></el-checkbox>
                    <el-checkbox label=\"Low\"></el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item label=\"Event Type\">
                <el-checkbox-group v-model=\"temp.event\" @change=\"handleChange(2)\" :min=\"1\">
                    <el-checkbox label=\"Financial Events\"></el-checkbox>
                    <el-checkbox label=\"Economic Data\"></el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item label=\"Current Time\">
                <el-select v-model=\"temp.zone\" placeholder=\"select\" @change=\"handleChange(3)\">
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

            <el-form-item label=\"Country\">
                <el-checkbox :indeterminate=\"isIndeterminate\" v-model=\"checkAll\" @change=\"handleCheckAllChange\">All
                </el-checkbox>
                <el-checkbox-group v-model=\"temp.country\" @change=\"handleCountryChange\" :min=\"1\">
                    <el-checkbox label=\"China\"></el-checkbox>
                    <el-checkbox label=\"Australia\"></el-checkbox>
                    <el-checkbox label=\"United States\"></el-checkbox>
                    <el-checkbox label=\"United Kingdom\"></el-checkbox>
                    <el-checkbox label=\"Japan\"></el-checkbox>
                    <el-checkbox label=\"Italy\"></el-checkbox>
                    <el-checkbox label=\"Germany\"></el-checkbox>
                    <el-checkbox label=\"France\"></el-checkbox>
                    <el-checkbox label=\"European Union\"></el-checkbox>
                    <el-checkbox label=\"Switzerland\"></el-checkbox>
                    <el-checkbox label=\"Canada\"></el-checkbox>
                    <el-checkbox label=\"New Zealand\"></el-checkbox>
                </el-checkbox-group>
            </el-form-item>

            <el-form-item>
                <el-row :gutter=\"20\">
                    <el-col :span=\"4\" :offset=\"16\">
                        <el-button type=\"text\" size=\"small\" icon=\"el-icon-refresh-right\" plain @click=\"handleDefault\">
                            Restore Default Settings
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
                            <span>Latest Release
                                <div class=\"noBold\" v-html=\"props.row.date.slice(0, 10)\">
                                    {{ props.row.date.slice(0, 10) }}</div>
                            </span>
                            <span>Reality
                                <div class=\"arial_14 redFont\"
                                    v-html=\"props.row.reality == '' ? '--' : props.row.reality\">
                                    {{ props.row.reality == '' ? '--' : props.row.reality }}</div>
                            </span>
                            <span>Forecast
                                <div class=\"arial_14 noBold\"
                                    v-html=\"props.row.forecast == '' ? '--' : props.row.forecast\">
                                    {{ props.row.forecast == '' ? '--' : props.row.forecast }}</div>
                            </span>
                            <span>Previous
                                <div class=\"arial_14 noBold blackFont\"
                                    v-html=\"props.row.previous == '' ? '--' : props.row.previous\">
                                    {{ props.row.previous == '' ? '--' : props.row.previous }}</div>
                            </span>
                        </div>
                        <br>
                        <div v-show=\"props.row.overview\">
                            <div class=\"overViewBox event\">
                                <div class=\"left\">
                                    <div v-html=\"props.row.overview\"></div>
                                    <p>Source: <a :href=\"props.row.source_of_report_link\" target=\"_blank\"
                                            style=\"text-decoration: none; cursor: pointer;\"
                                            v-html=\"props.row.source_of_report\">{{ props.row.source_of_report }}</a>
                                    </p>
                                </div>
                                <div class=\"right\">
                                    <div>
                                        <span>Importance:</span>
                                        <span>
                                            <i class=\"el-icon-star-on\" v-for=\"i in [1,2,3]\" :key=\"i\"
                                                :style=\"{color: i<=props.row.importance ? props.row.importance>=3 ? '#48a047' : '#ba9b5b' : '#f0f0f0'}\"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <span>Country:</span>
                                        <span v-html=\"props.row.history_country\">
                                            {{ props.row.history_country }}
                                        </span>
                                    </div>
                                    <div>
                                        <span>Currency:</span>
                                        <span
                                            v-html=\"props.row.history_currency\">{{ props.row.history_currency }}</span>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                            </div>
                        </div>
                        <br>
                    </el-col>
                    <br>
                    <el-col :span=\"12\" v-loading=\"historyLoading\">
                        <div :id=\"`charts-\${props.row.id}`\" style=\"width: 100%;height: 300px;\"></div>
                        <!-- <div class=\"history-data bold\">
                                <span>History:
                                </span>
                            </div>
                            <el-table :data=\"historyData\" stripe style=\"width: 100%\" highlight-current-row
                                v-loading=\"historyLoading\">
                                <el-table-column prop=\"date\" label=\"Release Date\">
                                    <template slot-scope=\"scope\">
                                        <span>{{ scope.row.date_str }}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"reality\" label=\"Actual\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: props.row.importance>=3 ? '#48a047' : ''}\">{{scope.row.reality}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"forecast\" label=\"Forecast\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: props.row.importance>=3 ? '#48a047' : ''}\">{{scope.row.forecast}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column prop=\"previous\" label=\"Previous\">
                                    <template slot-scope=\"scope\">
                                        <span
                                            :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\">{{scope.row.previous}}</span>
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

        <el-table-column prop=\"date\" label=\"Time\">
            <template slot-scope=\"scope\">
                <span v-if=\"temp.time == 'Today' || temp.time == 'Tomorrow'\"
                    :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.date.split(' ')[1]\">{{scope.row.date.split(' ')[1]}}</span>
                <span v-else v-html=\"`\${scope.row.date}(\${formatWeekDay(scope.row.date)})`\"></span>
            </template>
        </el-table-column>

        <el-table-column prop=\"country\" label=\"Currency\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.country\">{{scope.row.country}}</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"title\" label=\"Event\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.title\">{{scope.row.title}}</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"importance\" label=\"Importance\">
            <template slot-scope=\"scope\">
                <i class=\"el-icon-star-on\" v-for=\"i in [1,2,3]\" :key=\"i\"
                    :style=\"{color: i<=scope.row.importance ? scope.row.importance>=3 ? '#48a047' : '#ba9b5b' : '#f0f0f0'}\"></i>
            </template>
        </el-table-column>

        <el-table-column prop=\"previous\" label=\"Previous\">
            <template slot-scope=\"scope\">
                <span :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.previous\">{{scope.row.previous}}
                    {{scope.row.unit != 'null' ? scope.row.unit:''}}</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"forecast\" label=\"Forecast\">
            <template slot-scope=\"scope\">
                <span v-if=\"scope.row.forecast != null\" :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.forecast\">{{scope.row.forecast}}
                    {{scope.row.unit != 'null' ? scope.row.unit:''}}</span>
                <span v-else>---</span>
            </template>
        </el-table-column>

        <el-table-column prop=\"reality\" label=\"Actual\">
            <template slot-scope=\"scope\">
                <span v-if=\"scope.row.reality != null\" :style=\"{color: scope.row.importance>=3 ? '#48a047' : ''}\"
                    v-html=\"scope.row.reality\">{{scope.row.reality}}
                    {{scope.row.unit != 'null' ? scope.row.unit:''}}</span>
                <span v-else>---</span>
            </template>
        </el-table-column>
        <!-- <el-table-column prop=\"effect\" label=\"影响\">
                <template slot-scope=\"scope\">
                    <span
                        style=\"color:rgb(59,164,77);border:1px solid rgb(59,164,77);padding:2px 5px\">{{ scope.row.effect}}</span>
                </template>
            </el-table-column> -->
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
<script type=\"text/javascript\" src=\"/themes/demo/assets/js/economic_calendar_en.js\"></script>
{% endput %}", "/Users/kekaiwang/Sites/jc_october/themes/demo/pages/economic_calendar_en.htm", "");
    }
}
