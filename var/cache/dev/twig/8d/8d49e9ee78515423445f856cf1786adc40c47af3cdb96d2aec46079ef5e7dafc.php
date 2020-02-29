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
class __TwigTemplate_73dc8175e2c787270b3aee52859042ab4bed832ba8432655f36c44ce30108134 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/settings/newSettingPage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/settings/newSettingPage.html.twig"));

        $this->parent = $this->loadTemplate("player/playerBaseTemplate.html.twig", "player/settings/newSettingPage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        if ((((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 21, $this->source); })()) == "0") || ((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 21, $this->source); })()) == null))) {
            // line 22
            echo "                               <label for=\"form_image\" class=\"\">    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer m-2\"></label>

                           ";
        } else {
            // line 25
            echo "                               <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 25, $this->source); })()))), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer m-2\">
                           ";
        }
        // line 27
        echo "                           <h4> ";
        echo twig_escape_filter($this->env, (isset($context["playerName"]) || array_key_exists("playerName", $context) ? $context["playerName"] : (function () { throw new RuntimeError('Variable "playerName" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</h4>
                           <h6>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 28, $this->source); })()), "Position", [], "any", false, false, false, 28), "Name", [], "any", false, false, false, 28), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 37, $this->source); })()), "Team", [], "any", false, false, false, 37) == null)) {
            // line 38
            echo "                                           <h5>Отбор: Няма</h5>
                                       ";
        } else {
            // line 40
            echo "                                           <h5>Отбор: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 40, $this->source); })()), "Team", [], "any", false, false, false, 40), "Name", [], "any", false, false, false, 40), "html", null, true);
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
        if ((((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 49, $this->source); })()) == null) || (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 49, $this->source); })()), "Division", [], "any", false, false, false, 49) == null))) {
            // line 50
            echo "                                           <h5>Първенство: Няма</h5>
                                       ";
        } else {
            // line 52
            echo "                                           <h5>Първенство: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 52, $this->source); })()), "Division", [], "any", false, false, false, 52), "Name", [], "any", false, false, false, 52), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 61, $this->source); })()), "User", [], "any", false, false, false, 61), "City", [], "any", false, false, false, 61), "Country", [], "any", false, false, false, 61) == null)) {
            // line 62
            echo "                                           <h5>Националност: Не е зададен</h5>
                                       ";
        } else {
            // line 64
            echo "                                           <h5>Националност: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 64, $this->source); })()), "User", [], "any", false, false, false, 64), "City", [], "any", false, false, false, 64), "Country", [], "any", false, false, false, 64), "Name", [], "any", false, false, false, 64), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 73, $this->source); })()), "BirthDay", [], "any", false, false, false, 73) == null)) {
            // line 74
            echo "                                           <h5>Ден на раждане: Не е зададен</h5>
                                       ";
        } else {
            // line 76
            echo "                                           <h5>Ден на раждане: ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 76, $this->source); })()), "BirthDay", [], "any", false, false, false, 76), "d.m.Y")), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 92, $this->source); })()), "Weight", [], "any", false, false, false, 92) == null)) {
            // line 93
            echo "                                <h2>Килограми: 0кг</h2>
                            ";
        } else {
            // line 95
            echo "                                <h2>Килограми: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 95, $this->source); })()), "Weight", [], "any", false, false, false, 95), "html", null, true);
            echo "кг</h2>
                            ";
        }
        // line 97
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 99, $this->source); })()), "Height", [], "any", false, false, false, 99) == null)) {
            // line 100
            echo "                                <h2>Височина: 0см</h2>
                            ";
        } else {
            // line 102
            echo "                                <h2>Височина: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 102, $this->source); })()), "Height", [], "any", false, false, false, 102), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 108, $this->source); })()), "Pace", [], "any", false, false, false, 108) == null)) {
            // line 109
            echo "                                <h2>Скорост: 0 km/h</h2>
                            ";
        } else {
            // line 111
            echo "                                <h2>Скорост: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 111, $this->source); })()), "Pace", [], "any", false, false, false, 111), "html", null, true);
            echo " km/h</h2>
                            ";
        }
        // line 113
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 115
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 115, $this->source); })()), "LongPass", [], "any", false, false, false, 115) == null)) {
            // line 116
            echo "                                <h2>Дълъг пас: 0</h2>
                            ";
        } else {
            // line 118
            echo "                                <h2>Дълъг пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 118, $this->source); })()), "LongPass", [], "any", false, false, false, 118), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 124, $this->source); })()), "Relax", [], "any", false, false, false, 124) == null)) {
            // line 125
            echo "                                <h2>Спокойствие на терена: 0</h2>
                            ";
        } else {
            // line 127
            echo "                                <h2>Спокойствие на терена: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 127, $this->source); })()), "Relax", [], "any", false, false, false, 127), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 129
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            ";
        // line 131
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 131, $this->source); })()), "Fat", [], "any", false, false, false, 131) == null)) {
            // line 132
            echo "                                <h2>Подкожни мазнини: 0%</h2>
                            ";
        } else {
            // line 134
            echo "                                <h2>Подкожни мазнини: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 134, $this->source); })()), "Fat", [], "any", false, false, false, 134), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 140, $this->source); })()), "Work", [], "any", false, false, false, 140) == null)) {
            // line 141
            echo "                                <h2>Усърдна работа: 0</h2>
                            ";
        } else {
            // line 143
            echo "                                <h2>Усърдна работа: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 143, $this->source); })()), "Work", [], "any", false, false, false, 143), "html", null, true);
            echo "</h2>

                            ";
        }
        // line 146
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 148
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 148, $this->source); })()), "Tacticks", [], "any", false, false, false, 148) == null)) {
            // line 149
            echo "                                <h2>Тактика: 0</h2>
                            ";
        } else {
            // line 151
            echo "                                <h2>Тактика: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 151, $this->source); })()), "Tacticks", [], "any", false, false, false, 151), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 157, $this->source); })()), "WillPower", [], "any", false, false, false, 157) == null)) {
            // line 158
            echo "                                <h2>Воля: 0</h2>
                            ";
        } else {
            // line 160
            echo "                                <h2>Воля:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 160, $this->source); })()), "WillPower", [], "any", false, false, false, 160), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 162
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 164
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 164, $this->source); })()), "Dribble", [], "any", false, false, false, 164) == null)) {
            // line 165
            echo "                                <h2>Дрибъл: 0</h2>
                            ";
        } else {
            // line 167
            echo "                                <h2>Дрибъл:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 167, $this->source); })()), "Dribble", [], "any", false, false, false, 167), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 173, $this->source); })()), "Shot", [], "any", false, false, false, 173) == null)) {
            // line 174
            echo "                                <h2>Удар: 0</h2>
                            ";
        } else {
            // line 176
            echo "                                <h2>Удар:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 176, $this->source); })()), "Shot", [], "any", false, false, false, 176), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 178
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 180
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 180, $this->source); })()), "Technique", [], "any", false, false, false, 180) == null)) {
            // line 181
            echo "                                <h2>Техника: 0</h2>
                            ";
        } else {
            // line 183
            echo "                                <h2>Техника:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 183, $this->source); })()), "Technique", [], "any", false, false, false, 183), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 189, $this->source); })()), "Pass", [], "any", false, false, false, 189) == null)) {
            // line 190
            echo "                                <h2>Пас: 0</h2>
                            ";
        } else {
            // line 192
            echo "                                <h2>Пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 192, $this->source); })()), "Pass", [], "any", false, false, false, 192), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 194
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 196
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 196, $this->source); })()), "Perspective", [], "any", false, false, false, 196) == null)) {
            // line 197
            echo "                                <h2>Перспектива: 0</h2>
                            ";
        } else {
            // line 199
            echo "                                <h2>Перспектива:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 199, $this->source); })()), "Perspective", [], "any", false, false, false, 199), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  481 => 201,  475 => 199,  471 => 197,  469 => 196,  465 => 194,  459 => 192,  455 => 190,  453 => 189,  447 => 185,  441 => 183,  437 => 181,  435 => 180,  431 => 178,  425 => 176,  421 => 174,  419 => 173,  413 => 169,  407 => 167,  403 => 165,  401 => 164,  397 => 162,  391 => 160,  387 => 158,  385 => 157,  379 => 153,  373 => 151,  369 => 149,  367 => 148,  363 => 146,  356 => 143,  352 => 141,  350 => 140,  344 => 136,  338 => 134,  334 => 132,  332 => 131,  328 => 129,  322 => 127,  318 => 125,  316 => 124,  310 => 120,  304 => 118,  300 => 116,  298 => 115,  294 => 113,  288 => 111,  284 => 109,  282 => 108,  276 => 104,  270 => 102,  266 => 100,  264 => 99,  260 => 97,  254 => 95,  250 => 93,  248 => 92,  243 => 89,  232 => 78,  226 => 76,  222 => 74,  220 => 73,  211 => 66,  205 => 64,  201 => 62,  199 => 61,  190 => 54,  184 => 52,  180 => 50,  178 => 49,  169 => 42,  163 => 40,  159 => 38,  157 => 37,  145 => 28,  140 => 27,  134 => 25,  127 => 22,  125 => 21,  115 => 13,  105 => 12,  93 => 10,  89 => 9,  85 => 8,  81 => 7,  77 => 6,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'player/playerBaseTemplate.html.twig' %}
    {% block style %}
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
        <link href=\"{{ asset(\"css/playerStyle.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{ asset(\"css/settingsStyle.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{ asset(\"css/coachStyle.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{ asset(\"mdb/css/mdb.min.css\") }}\" rel=\"stylesheet\">
        <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/mdb.min.js\") }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/bootstrap.min.js\") }}\"></script>
    {% endblock %}
    {% block body%}
        <div class=\" justify-content-center row mt-4 mb-5\">
            <div class=\"col-12 justify-content-center text-center row \">
                <div class=\"text-center information-div row\">
                    <div class=\"update-information-icon-holder\">
                        <i class=\"fas fa-pen update-information-icon\"></i>
                    </div>
                    <div class=\"col-12 row player-visit-container\">
                       <div class=\"col-lg-4 col-sm-12 col-12 p-1 \">
                           {% if image == '0' or image == null  %}
                               <label for=\"form_image\" class=\"\">    <img src=\"{{asset(\"images/user1.png\")}}\" alt=\"\" class=\"profile-pic-changer m-2\"></label>

                           {% else %}
                               <img src=\"{{asset(\"images/\" ~ image)}}\" alt=\"\" class=\"profile-pic-changer m-2\">
                           {% endif %}
                           <h4> {{ playerName }}</h4>
                           <h6>{{ player.Position.Name }}</h6>
                       </div>
                       <div class=\" col-lg-8 col-sm-12 col-12 mx-auto text-center  justify-content-center\">
                           <div class=\"visiting-player-card-text-holder col-12\">
                               <h3 class=\" justify-content-center row\">Визитна карта </h3>
                           </div>
                           <div class=\"col-12 justify-content-center text-center row 0\">
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       {% if player.Team == null%}
                                           <h5>Отбор: Няма</h5>
                                       {% else %}
                                           <h5>Отбор: {{ player.Team.Name }}</h5>
                                       {% endif %}
                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Отбелязани голове: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       {% if team == null or team.Division == null%}
                                           <h5>Първенство: Няма</h5>
                                       {% else %}
                                           <h5>Първенство: {{ team.Division.Name }}</h5>
                                       {% endif %}
                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Асистенции: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       {% if player.User.City.Country == null%}
                                           <h5>Националност: Не е зададен</h5>
                                       {% else %}
                                           <h5>Националност: {{ player.User.City.Country.Name }}</h5>
                                       {% endif %}
                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Изиграни мачове: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       {% if player.BirthDay == null%}
                                           <h5>Ден на раждане: Не е зададен</h5>
                                       {% else %}
                                           <h5>Ден на раждане: {{ player.BirthDay |date(\"d.m.Y\")|join }}</h5>
                                       {% endif %}

                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Отбелязани голове: 0</h5>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
{#                    {{ form_widget(formPlayer.image, {'attr' : {'class' : 'inputfile', 'id' : 'uploadImage'}})  }}#}
{#                    {{ form_row(formPlayer.save, {'attr' : {'class':'btn'}} ) }}#}
                    <div class=\"col-12 justify-content-center text-center row mt-5\">
                        <h1 class=\"col-12 text-center\">Статистически данни</h1>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Weight == null%}
                                <h2>Килограми: 0кг</h2>
                            {% else %}
                                <h2>Килограми: {{ playerStats.Weight }}кг</h2>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Height == null%}
                                <h2>Височина: 0см</h2>
                            {% else %}
                                <h2>Височина: {{ playerStats.Height }}см</h2>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0  mt-4  myBorderPlayerStat-left text-center\">
                            {% if playerStats.Pace == null%}
                                <h2>Скорост: 0 km/h</h2>
                            {% else %}
                                <h2>Скорост: {{ playerStats.Pace }} km/h</h2>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            {% if playerStats.LongPass == null%}
                                <h2>Дълъг пас: 0</h2>
                            {% else %}
                                <h2>Дълъг пас: {{ playerStats.LongPass}}</h2>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Relax == null%}
                                <h2>Спокойствие на терена: 0</h2>
                            {% else %}
                                <h2>Спокойствие на терена: {{ playerStats.Relax}}</h2>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            {% if playerStats.Fat == null%}
                                <h2>Подкожни мазнини: 0%</h2>
                            {% else %}
                                <h2>Подкожни мазнини: {{ playerStats.Fat }}%</h2>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Work == null%}
                                <h2>Усърдна работа: 0</h2>
                            {% else %}
                                <h2>Усърдна работа: {{ playerStats.Work}}</h2>

                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Tacticks == null%}
                                <h2>Тактика: 0</h2>
                            {% else %}
                                <h2>Тактика: {{ playerStats.Tacticks }}</h2>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.WillPower == null%}
                                <h2>Воля: 0</h2>
                            {% else %}
                                <h2>Воля:{{ playerStats.WillPower}}</h2>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Dribble == null%}
                                <h2>Дрибъл: 0</h2>
                            {% else %}
                                <h2>Дрибъл:{{ playerStats.Dribble }}</h2>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Shot == null%}
                                <h2>Удар: 0</h2>
                            {% else %}
                                <h2>Удар:{{ playerStats.Shot }}</h2>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Technique == null%}
                                <h2>Техника: 0</h2>
                            {% else %}
                                <h2>Техника:{{ playerStats.Technique }}</h2>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Pass == null%}
                                <h2>Пас: 0</h2>
                            {% else %}
                                <h2>Пас: {{ playerStats.Pass }}</h2>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Perspective == null%}
                                <h2>Перспектива: 0</h2>
                            {% else %}
                                <h2>Перспектива:{{ playerStats.Perspective}}</h2>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}", "player/settings/newSettingPage.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\settings\\newSettingPage.html.twig");
    }
}
