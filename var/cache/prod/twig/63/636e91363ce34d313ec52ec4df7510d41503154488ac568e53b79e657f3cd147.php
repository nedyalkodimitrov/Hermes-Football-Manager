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

/* player/settings/newSettingPage.html.twig */
class __TwigTemplate_dbe5b28beee938e6992bd7b65c7b88b94c4b2ae67d49c8c5a3dd1fd923acc37c extends \Twig\Template
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
        // line 1
        return "player/playerBaseTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("player/playerBaseTemplate.html.twig", "player/settings/newSettingPage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/playerStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/settingsStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coachStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        <div class=\" justify-content-center row mt-4 mb-5\">
            <div class=\"col-12 justify-content-center text-center row \">
                <div class=\"text-center information-div row\">
                    <div class=\"update-information-icon-holder\">
                        <i class=\"fas fa-pen update-information-icon\"></i>
                    </div>
                    <div class=\"col-12 row player-visit-container\">
                       <div class=\"col-lg-4 col-sm-12 col-12 p-1 \">
                           ";
        // line 21
        if (((($context["image"] ?? null) == "0") || (($context["image"] ?? null) == null))) {
            // line 22
            echo "                               <label for=\"form_image\" class=\"\">    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer m-2\"></label>

                           ";
        } else {
            // line 25
            echo "                               <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . ($context["image"] ?? null))), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer m-2\">
                           ";
        }
        // line 27
        echo "                           <h4> ";
        echo twig_escape_filter($this->env, ($context["playerName"] ?? null), "html", null, true);
        echo "</h4>
                           <h6>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Position", [], "any", false, false, false, 28), "Name", [], "any", false, false, false, 28), "html", null, true);
        echo "</h6>
                       </div>
                       <div class=\" col-lg-8 col-sm-12 col-12 mx-auto text-center  justify-content-center\">
                           <div class=\"visiting-player-card-text-holder col-12\">
                               <h3 class=\" justify-content-center row\">Визитна карта </h3>
                           </div>
                           <div class=\"col-12 justify-content-center text-center row 0\">
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Team", [], "any", false, false, false, 37) == null)) {
            // line 38
            echo "                                           <h5>Отбор: Няма</h5>
                                       ";
        } else {
            // line 40
            echo "                                           <h5>Отбор: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Team", [], "any", false, false, false, 40), "Name", [], "any", false, false, false, 40), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 42
        echo "                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Отбелязани голове: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       ";
        // line 49
        if (((($context["team"] ?? null) == null) || (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "Division", [], "any", false, false, false, 49) == null))) {
            // line 50
            echo "                                           <h5>Първенство: Няма</h5>
                                       ";
        } else {
            // line 52
            echo "                                           <h5>Първенство: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "Division", [], "any", false, false, false, 52), "Name", [], "any", false, false, false, 52), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 54
        echo "                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Асистенции: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "User", [], "any", false, false, false, 61), "City", [], "any", false, false, false, 61), "Country", [], "any", false, false, false, 61) == null)) {
            // line 62
            echo "                                           <h5>Националност: Не е зададен</h5>
                                       ";
        } else {
            // line 64
            echo "                                           <h5>Националност: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "User", [], "any", false, false, false, 64), "City", [], "any", false, false, false, 64), "Country", [], "any", false, false, false, 64), "Name", [], "any", false, false, false, 64), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 66
        echo "                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Изиграни мачове: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "BirthDay", [], "any", false, false, false, 73) == null)) {
            // line 74
            echo "                                           <h5>Ден на раждане: Не е зададен</h5>
                                       ";
        } else {
            // line 76
            echo "                                           <h5>Ден на раждане: ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "BirthDay", [], "any", false, false, false, 76), "d.m.Y")), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 78
        echo "
                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Отбелязани голове: 0</h5>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
";
        // line 89
        echo "                    <div class=\"col-12 justify-content-center text-center row mt-5\">
                        <h1 class=\"col-12 text-center\">Статистически данни</h1>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 92
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Weight", [], "any", false, false, false, 92) == null)) {
            // line 93
            echo "                                <h2>Килограми: 0кг</h2>
                            ";
        } else {
            // line 95
            echo "                                <h2>Килограми: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Weight", [], "any", false, false, false, 95), "html", null, true);
            echo "кг</h2>
                            ";
        }
        // line 97
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Height", [], "any", false, false, false, 99) == null)) {
            // line 100
            echo "                                <h2>Височина: 0см</h2>
                            ";
        } else {
            // line 102
            echo "                                <h2>Височина: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Height", [], "any", false, false, false, 102), "html", null, true);
            echo "см</h2>
                            ";
        }
        // line 104
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0  mt-4  myBorderPlayerStat-left text-center\">
                            ";
        // line 108
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Pace", [], "any", false, false, false, 108) == null)) {
            // line 109
            echo "                                <h2>Скорост: 0 km/h</h2>
                            ";
        } else {
            // line 111
            echo "                                <h2>Скорост: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Pace", [], "any", false, false, false, 111), "html", null, true);
            echo " km/h</h2>
                            ";
        }
        // line 113
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 115
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "LongPass", [], "any", false, false, false, 115) == null)) {
            // line 116
            echo "                                <h2>Дълъг пас: 0</h2>
                            ";
        } else {
            // line 118
            echo "                                <h2>Дълъг пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "LongPass", [], "any", false, false, false, 118), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 120
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 124
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Relax", [], "any", false, false, false, 124) == null)) {
            // line 125
            echo "                                <h2>Спокойствие на терена: 0</h2>
                            ";
        } else {
            // line 127
            echo "                                <h2>Спокойствие на терена: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Relax", [], "any", false, false, false, 127), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 129
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            ";
        // line 131
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Fat", [], "any", false, false, false, 131) == null)) {
            // line 132
            echo "                                <h2>Подкожни мазнини: 0%</h2>
                            ";
        } else {
            // line 134
            echo "                                <h2>Подкожни мазнини: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Fat", [], "any", false, false, false, 134), "html", null, true);
            echo "%</h2>
                            ";
        }
        // line 136
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 140
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Work", [], "any", false, false, false, 140) == null)) {
            // line 141
            echo "                                <h2>Усърдна работа: 0</h2>
                            ";
        } else {
            // line 143
            echo "                                <h2>Усърдна работа: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Work", [], "any", false, false, false, 143), "html", null, true);
            echo "</h2>

                            ";
        }
        // line 146
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 148
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Tacticks", [], "any", false, false, false, 148) == null)) {
            // line 149
            echo "                                <h2>Тактика: 0</h2>
                            ";
        } else {
            // line 151
            echo "                                <h2>Тактика: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Tacticks", [], "any", false, false, false, 151), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 153
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 157
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "WillPower", [], "any", false, false, false, 157) == null)) {
            // line 158
            echo "                                <h2>Воля: 0</h2>
                            ";
        } else {
            // line 160
            echo "                                <h2>Воля:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "WillPower", [], "any", false, false, false, 160), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 162
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 164
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Dribble", [], "any", false, false, false, 164) == null)) {
            // line 165
            echo "                                <h2>Дрибъл: 0</h2>
                            ";
        } else {
            // line 167
            echo "                                <h2>Дрибъл:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Dribble", [], "any", false, false, false, 167), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 169
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 173
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Shot", [], "any", false, false, false, 173) == null)) {
            // line 174
            echo "                                <h2>Удар: 0</h2>
                            ";
        } else {
            // line 176
            echo "                                <h2>Удар:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Shot", [], "any", false, false, false, 176), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 178
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 180
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Technique", [], "any", false, false, false, 180) == null)) {
            // line 181
            echo "                                <h2>Техника: 0</h2>
                            ";
        } else {
            // line 183
            echo "                                <h2>Техника:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Technique", [], "any", false, false, false, 183), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 185
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 189
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Pass", [], "any", false, false, false, 189) == null)) {
            // line 190
            echo "                                <h2>Пас: 0</h2>
                            ";
        } else {
            // line 192
            echo "                                <h2>Пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Pass", [], "any", false, false, false, 192), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 194
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 196
        if ((twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Perspective", [], "any", false, false, false, 196) == null)) {
            // line 197
            echo "                                <h2>Перспектива: 0</h2>
                            ";
        } else {
            // line 199
            echo "                                <h2>Перспектива:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playerStats"] ?? null), "Perspective", [], "any", false, false, false, 199), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 201
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "player/settings/newSettingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 201,  445 => 199,  441 => 197,  439 => 196,  435 => 194,  429 => 192,  425 => 190,  423 => 189,  417 => 185,  411 => 183,  407 => 181,  405 => 180,  401 => 178,  395 => 176,  391 => 174,  389 => 173,  383 => 169,  377 => 167,  373 => 165,  371 => 164,  367 => 162,  361 => 160,  357 => 158,  355 => 157,  349 => 153,  343 => 151,  339 => 149,  337 => 148,  333 => 146,  326 => 143,  322 => 141,  320 => 140,  314 => 136,  308 => 134,  304 => 132,  302 => 131,  298 => 129,  292 => 127,  288 => 125,  286 => 124,  280 => 120,  274 => 118,  270 => 116,  268 => 115,  264 => 113,  258 => 111,  254 => 109,  252 => 108,  246 => 104,  240 => 102,  236 => 100,  234 => 99,  230 => 97,  224 => 95,  220 => 93,  218 => 92,  213 => 89,  202 => 78,  196 => 76,  192 => 74,  190 => 73,  181 => 66,  175 => 64,  171 => 62,  169 => 61,  160 => 54,  154 => 52,  150 => 50,  148 => 49,  139 => 42,  133 => 40,  129 => 38,  127 => 37,  115 => 28,  110 => 27,  104 => 25,  97 => 22,  95 => 21,  85 => 13,  81 => 12,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "player/settings/newSettingPage.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\settings\\newSettingPage.html.twig");
    }
}
