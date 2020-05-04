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

/* player/index.html.twig */
class __TwigTemplate_a64d81e0bcfbb892f1e89f70597fe18341c746f66a976ec9dc4d240fe7e448aa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "player/playerBaseTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/index.html.twig"));

        $this->parent = $this->loadTemplate("player/playerBaseTemplate.html.twig", "player/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 4
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/searchEngine.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/player/searchTeamBoxStartPageStyle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

    ";
        // line 11
        if (((isset($context["hasTeam"]) || array_key_exists("hasTeam", $context) ? $context["hasTeam"] : (function () { throw new RuntimeError('Variable "hasTeam" does not exist.', 11, $this->source); })()) == false)) {
            // line 12
            echo "
        <div class=\"col-12 text-center container searchTeamBox\">
            <h4>До сега сте нямали отбор и за да продължите напреде вие треябва да си намерите отбор</h4>
            <div class=\"search-container full-sized-search-box mt-4\">
                <div class=\"search-box full-sized-search-box\">
                    <input type=\"text\" placeholder=\"Type to search\" class=\"search-text\" id=\"search\" >
                    <button  class=\"search-button\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>
            <div class=\"requestsFromTeam\"></div>
            <div class=\"teamSearchResult\">
            </div>
        </div>
    ";
        }
        // line 28
        echo "
    <div id=\"container\">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9  main-charts-container row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-1 information-charts-text\">Основни характеристики</h4>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"15\">
                            <span class=\"chart-text percent\"></span>
                        </span>
";
        // line 41
        echo "                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Подкожни мазнини</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12 col-md-12 mt-2 text-center chart-container\">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"20\">
                            <span class=\"chart-text overall\"></span>
                        </span>
                    </div>
                    <h3>
                        <span class=\"label green badge \">Обща оценка</span>
                    </h3>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center  chart-container\">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"102\">
                            <span class=\"chart-text speed\"></span>
                        </span>
";
        // line 64
        echo "                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"green badge fat-percent-badge  label\">Скорост</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"container\" class=\"mv-5 \">
        <div class=\"row mt-5 justify-content-center \">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9 p-0 m-0 row justify-content-between \">
                <div class=\"col-lg-3 col-12 d-lg-inline-block d-md-none d-sm-none water-container p-4   text-center justify-content-center \" >
                    <h5 > Дневен прием на вода</h5>
                    <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/glass-of-water.png"), "html", null, true);
        echo "\" alt=\"\" class=\"water-glass mt-5 col-12\">
                    <div class=\"col-12 row p-3 pb-lg-2 pb-md-2 pb-sm-2 pb-2 m-auto align-items-center\">
                        <button class=\"water-button my-auto water-button-minus p-0 col-4 pr-1 text-right\"><i class=\"fa fa-minus\"> </i></button>
                        <h4 class=\"col-4 my-auto justify-content-center numOfWaterGlasses\">";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["waterGlasses"]) || array_key_exists("waterGlasses", $context) ? $context["waterGlasses"] : (function () { throw new RuntimeError('Variable "waterGlasses" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "</h4>
                        <button class=\"water-button water-button-plus col-4 p-0 text-left\"> <i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>

                <div class=\"table-container col-lg-8 col-md-12 col-sm-12 col-12 ml-md-1 ml-sm-1 mx-0 p-0 mt-lg-0 mt-md-0 mt-sm-5 mt-5 row \">
                    <div class=\"table col-12  mh-25\" id=\"teamLeadership-container \">
                        ";
        // line 90
        if ((isset($context["hasTeam"]) || array_key_exists("hasTeam", $context) ? $context["hasTeam"] : (function () { throw new RuntimeError('Variable "hasTeam" does not exist.', 90, $this->source); })())) {
            // line 91
            echo "                            <table class=\"table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0\">
                                <tr class=\"row col-12 p-0 m-0 bg-success\">
                                    <th class=\"col-1\"></th>
                                    <th class=\"col-4 color-white\">Име</th>
                                    <th class=\"col-1 color-white\">ИМ</th>
                                    <th class=\"col-1 color-white\">П</th>
                                    <th class=\"col-1 color-white\">Р</th>
                                    <th class=\"col-1 color-white\">З</th>
                                    <th class=\"col-1 color-white\">ВГ</th>
                                    <th class=\"col-1 color-white\">ДГ</th>
                                    <th class=\"col-1 color-white\">Т</th>
                                </tr>
                                ";
            // line 103
            $context["rowNum"] = 1;
            // line 104
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 104, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 105
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["myTeam"]) || array_key_exists("myTeam", $context) ? $context["myTeam"] : (function () { throw new RuntimeError('Variable "myTeam" does not exist.', 105, $this->source); })()), "Id", [], "any", false, false, false, 105) == twig_get_attribute($this->env, $this->source, $context["team"], "Id", [], "any", false, false, false, 105))) {
                    // line 106
                    echo "                                        <tr class=\"teamTable row col-12 p-0 m-0 bg-gray\">
                                            <th  class=\"col-1 justify-content-end\"> ";
                    // line 107
                    echo twig_escape_filter($this->env, (isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 107, $this->source); })()), "html", null, true);
                    echo "</th>
                                            <th class=\"col-4\"> ";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 108), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "playedGames", [], "any", false, false, false, 109), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "wins", [], "any", false, false, false, 110), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "drawsGames", [], "any", false, false, false, 111), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "lostGames", [], "any", false, false, false, 112), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Goals", [], "any", false, false, false, 113), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "GoalsInTheTeamDoor", [], "any", false, false, false, 114), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\">";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "points", [], "any", false, false, false, 115), "html", null, true);
                    echo "</th>
                                        </tr>
                                    ";
                } else {
                    // line 118
                    echo "                                        <tr class=\"teamTable row col-12 p-0 m-0\">
                                            <th  class=\"col-1 justify-content-end\"> ";
                    // line 119
                    echo twig_escape_filter($this->env, (isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 119, $this->source); })()), "html", null, true);
                    echo "</th>
                                            <th class=\"col-4\"> ";
                    // line 120
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 120), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 121
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "playedGames", [], "any", false, false, false, 121), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 122
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "wins", [], "any", false, false, false, 122), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "drawsGames", [], "any", false, false, false, 123), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "lostGames", [], "any", false, false, false, 124), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 125
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Goals", [], "any", false, false, false, 125), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\"> ";
                    // line 126
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "GoalsInTheTeamDoor", [], "any", false, false, false, 126), "html", null, true);
                    echo "</th>
                                            <th class=\"col-1\">";
                    // line 127
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "points", [], "any", false, false, false, 127), "html", null, true);
                    echo "</th>
                                        </tr>
                                    ";
                }
                // line 130
                echo "
                                    ";
                // line 131
                $context["rowNum"] = ((isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 131, $this->source); })()) + 1);
                // line 132
                echo "                                 ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 133
                echo "                                     <li><em>Вие нямате отбор</em></li>
                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                            </table>
                        ";
        } else {
            // line 137
            echo "                            <h1>Вие нямате отбор</h1>
                        ";
        }
        // line 139
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10  div-charts row pb-3\">
                <canvas id=\"lineChart\"></canvas>
            </div>
        </div>
    </div>
    <script  src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("easy-pie-chart-master/dist/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/playerScore.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waterGlassesActions.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/searchTeamEngine.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/requestFromTeamTable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/player/acceptTeamRequest.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/player/rejectTeamRequest.js"), "html", null, true);
        echo "\"></script>

    <script>
        var ctxL = document.getElementById(\"lineChart\").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: [ ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allWatersGlasese"]) || array_key_exists("allWatersGlasese", $context) ? $context["allWatersGlasese"] : (function () { throw new RuntimeError('Variable "allWatersGlasese" does not exist.', 166, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["water"]) {
            // line 167
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["water"], "date", [], "any", false, false, false, 167), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['water'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "],
                datasets: [{
                    label: \"Дневен прием на вода\",
                    data: [ ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allWatersGlasese"]) || array_key_exists("allWatersGlasese", $context) ? $context["allWatersGlasese"] : (function () { throw new RuntimeError('Variable "allWatersGlasese" does not exist.', 171, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["water"]) {
            // line 172
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["water"], "WaterGlasses", [], "any", false, false, false, 172), "html", null, true);
            echo ",
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['water'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "],
                    backgroundColor: [
                        'rgba(105, 0, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(200, 99, 132, .7)',
                    ],
                    borderWidth: 2
                }
                ]
            },
            options: {
                responsive: true
            }
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "player/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 173,  407 => 172,  403 => 171,  398 => 168,  389 => 167,  385 => 166,  375 => 159,  371 => 158,  367 => 157,  363 => 156,  359 => 155,  355 => 154,  351 => 153,  347 => 152,  343 => 151,  329 => 139,  325 => 137,  321 => 135,  314 => 133,  309 => 132,  307 => 131,  304 => 130,  298 => 127,  294 => 126,  290 => 125,  286 => 124,  282 => 123,  278 => 122,  274 => 121,  270 => 120,  266 => 119,  263 => 118,  257 => 115,  253 => 114,  249 => 113,  245 => 112,  241 => 111,  237 => 110,  233 => 109,  229 => 108,  225 => 107,  222 => 106,  219 => 105,  213 => 104,  211 => 103,  197 => 91,  195 => 90,  185 => 83,  179 => 80,  161 => 64,  137 => 41,  123 => 28,  105 => 12,  103 => 11,  99 => 9,  89 => 8,  77 => 6,  73 => 5,  69 => 4,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'player/playerBaseTemplate.html.twig' %}
{% block style %}
{{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/particles/searchEngine.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/player/searchTeamBoxStartPageStyle.css\") }}\">
{% endblock %}
{% block body %}


    {% if hasTeam == false %}

        <div class=\"col-12 text-center container searchTeamBox\">
            <h4>До сега сте нямали отбор и за да продължите напреде вие треябва да си намерите отбор</h4>
            <div class=\"search-container full-sized-search-box mt-4\">
                <div class=\"search-box full-sized-search-box\">
                    <input type=\"text\" placeholder=\"Type to search\" class=\"search-text\" id=\"search\" >
                    <button  class=\"search-button\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>
            <div class=\"requestsFromTeam\"></div>
            <div class=\"teamSearchResult\">
            </div>
        </div>
    {% endif %}

    <div id=\"container\">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9  main-charts-container row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-1 information-charts-text\">Основни характеристики</h4>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"15\">
                            <span class=\"chart-text percent\"></span>
                        </span>
{#                        <p>15{{ playerFat }} <i class=\"fa fa-percent \" aria-hidden=\"true\"></i></p>#}
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Подкожни мазнини</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12 col-md-12 mt-2 text-center chart-container\">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"20\">
                            <span class=\"chart-text overall\"></span>
                        </span>
                    </div>
                    <h3>
                        <span class=\"label green badge \">Обща оценка</span>
                    </h3>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center  chart-container\">
                    <div class=\"information-container\">
                        <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"102\">
                            <span class=\"chart-text speed\"></span>
                        </span>
{#                        <p> {{ pace }} km/h </p>#}
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"green badge fat-percent-badge  label\">Скорост</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"container\" class=\"mv-5 \">
        <div class=\"row mt-5 justify-content-center \">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9 p-0 m-0 row justify-content-between \">
                <div class=\"col-lg-3 col-12 d-lg-inline-block d-md-none d-sm-none water-container p-4   text-center justify-content-center \" >
                    <h5 > Дневен прием на вода</h5>
                    <img src=\"{{ asset(\"images/glass-of-water.png\") }}\" alt=\"\" class=\"water-glass mt-5 col-12\">
                    <div class=\"col-12 row p-3 pb-lg-2 pb-md-2 pb-sm-2 pb-2 m-auto align-items-center\">
                        <button class=\"water-button my-auto water-button-minus p-0 col-4 pr-1 text-right\"><i class=\"fa fa-minus\"> </i></button>
                        <h4 class=\"col-4 my-auto justify-content-center numOfWaterGlasses\">{{ waterGlasses }}</h4>
                        <button class=\"water-button water-button-plus col-4 p-0 text-left\"> <i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>

                <div class=\"table-container col-lg-8 col-md-12 col-sm-12 col-12 ml-md-1 ml-sm-1 mx-0 p-0 mt-lg-0 mt-md-0 mt-sm-5 mt-5 row \">
                    <div class=\"table col-12  mh-25\" id=\"teamLeadership-container \">
                        {% if hasTeam %}
                            <table class=\"table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0\">
                                <tr class=\"row col-12 p-0 m-0 bg-success\">
                                    <th class=\"col-1\"></th>
                                    <th class=\"col-4 color-white\">Име</th>
                                    <th class=\"col-1 color-white\">ИМ</th>
                                    <th class=\"col-1 color-white\">П</th>
                                    <th class=\"col-1 color-white\">Р</th>
                                    <th class=\"col-1 color-white\">З</th>
                                    <th class=\"col-1 color-white\">ВГ</th>
                                    <th class=\"col-1 color-white\">ДГ</th>
                                    <th class=\"col-1 color-white\">Т</th>
                                </tr>
                                {% set rowNum = 1 %}
                                {% for team in teams %}
                                    {% if myTeam.Id == team.Id %}
                                        <tr class=\"teamTable row col-12 p-0 m-0 bg-gray\">
                                            <th  class=\"col-1 justify-content-end\"> {{ rowNum }}</th>
                                            <th class=\"col-4\"> {{ team.name }}</th>
                                            <th class=\"col-1\"> {{ team.playedGames }}</th>
                                            <th class=\"col-1\"> {{ team.wins }}</th>
                                            <th class=\"col-1\"> {{ team.drawsGames}}</th>
                                            <th class=\"col-1\"> {{ team.lostGames}}</th>
                                            <th class=\"col-1\"> {{ team.Goals}}</th>
                                            <th class=\"col-1\"> {{ team.GoalsInTheTeamDoor}}</th>
                                            <th class=\"col-1\">{{ team.points }}</th>
                                        </tr>
                                    {% else %}
                                        <tr class=\"teamTable row col-12 p-0 m-0\">
                                            <th  class=\"col-1 justify-content-end\"> {{ rowNum }}</th>
                                            <th class=\"col-4\"> {{ team.name }}</th>
                                            <th class=\"col-1\"> {{ team.playedGames }}</th>
                                            <th class=\"col-1\"> {{ team.wins }}</th>
                                            <th class=\"col-1\"> {{ team.drawsGames}}</th>
                                            <th class=\"col-1\"> {{ team.lostGames}}</th>
                                            <th class=\"col-1\"> {{ team.Goals}}</th>
                                            <th class=\"col-1\"> {{ team.GoalsInTheTeamDoor}}</th>
                                            <th class=\"col-1\">{{ team.points }}</th>
                                        </tr>
                                    {% endif %}

                                    {% set rowNum = rowNum + 1 %}
                                 {% else %}
                                     <li><em>Вие нямате отбор</em></li>
                                 {%  endfor %}
                            </table>
                        {% else %}
                            <h1>Вие нямате отбор</h1>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10  div-charts row pb-3\">
                <canvas id=\"lineChart\"></canvas>
            </div>
        </div>
    </div>
    <script  src=\"{{  asset(\"mdb/js/jquery-3.3.1.min.js\")}}\"></script>
    <script type=\"text/javascript\" src=\"{{  asset(\"easy-pie-chart-master/dist/jquery.easypiechart.js\")}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"js/playerScore.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"js/waterGlassesActions.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/mdb.min.js\") }}\"></script>
    <script src=\"{{ asset(\"js/searchTeamEngine.js\") }}\"></script>
    <script src=\"{{ asset(\"js/requestFromTeamTable.js\") }}\"></script>
    <script src=\"{{ asset(\"js/player/acceptTeamRequest.js\") }}\"></script>
    <script src=\"{{ asset(\"js/player/rejectTeamRequest.js\") }}\"></script>

    <script>
        var ctxL = document.getElementById(\"lineChart\").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: [ {% for water in allWatersGlasese%}
                    \"{{ water.date  }}\",
                    {% endfor %}],
                datasets: [{
                    label: \"Дневен прием на вода\",
                    data: [ {% for water in allWatersGlasese%}
                        {{ water.WaterGlasses }},
                        {% endfor %}],
                    backgroundColor: [
                        'rgba(105, 0, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(200, 99, 132, .7)',
                    ],
                    borderWidth: 2
                }
                ]
            },
            options: {
                responsive: true
            }
        });

    </script>
{% endblock %}
", "player/index.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\index.html.twig");
    }
}
