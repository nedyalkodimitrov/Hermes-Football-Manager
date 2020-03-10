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
            echo "                               <label for=\"form_image\" class=\"\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 25, $this->source); })()))), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer m-2\"></label>
                           ";
        }
        // line 28
        echo "                           ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "image", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "inputfile", "id" => "uploadImage"]]);
        echo "
                           ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "save", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "btn"]]);
        echo "
                           <h4> ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["playerName"]) || array_key_exists("playerName", $context) ? $context["playerName"] : (function () { throw new RuntimeError('Variable "playerName" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</h4>
                           <h6>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 31, $this->source); })()), "Position", [], "any", false, false, false, 31), "Name", [], "any", false, false, false, 31), "html", null, true);
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
        // line 41
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 41, $this->source); })()), "Team", [], "any", false, false, false, 41) == null)) {
            // line 42
            echo "                                           <h5>Отбор: Няма</h5>
                                       ";
        } else {
            // line 44
            echo "                                           <h5>Отбор: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 44, $this->source); })()), "Team", [], "any", false, false, false, 44), "Name", [], "any", false, false, false, 44), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 46
        echo "                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Отбелязани голове: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       ";
        // line 53
        if ((((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 53, $this->source); })()) == null) || (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 53, $this->source); })()), "Division", [], "any", false, false, false, 53) == null))) {
            // line 54
            echo "                                           <h5>Първенство: Няма</h5>
                                       ";
        } else {
            // line 56
            echo "                                           <h5>Първенство: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 56, $this->source); })()), "Division", [], "any", false, false, false, 56), "Name", [], "any", false, false, false, 56), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 58
        echo "                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Асистенции: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 65, $this->source); })()), "User", [], "any", false, false, false, 65), "City", [], "any", false, false, false, 65), "Country", [], "any", false, false, false, 65) == null)) {
            // line 66
            echo "                                           <h5>Националност: Не е зададен</h5>
                                       ";
        } else {
            // line 68
            echo "                                           <h5>Националност: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 68, $this->source); })()), "User", [], "any", false, false, false, 68), "City", [], "any", false, false, false, 68), "Country", [], "any", false, false, false, 68), "Name", [], "any", false, false, false, 68), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 70
        echo "                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Изиграни мачове: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       ";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 77, $this->source); })()), "BirthDay", [], "any", false, false, false, 77) == null)) {
            // line 78
            echo "                                           <h5>Ден на раждане: Не е зададен</h5>
                                       ";
        } else {
            // line 80
            echo "                                           <h5>Ден на раждане: ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 80, $this->source); })()), "BirthDay", [], "any", false, false, false, 80), "d.m.Y")), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 82
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
        // line 93
        echo "                    <div class=\"col-12 justify-content-center text-center row mt-5\">
                        <h1 class=\"col-12 text-center\">Статистически данни</h1>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 96, $this->source); })()), "Weight", [], "any", false, false, false, 96) == null)) {
            // line 97
            echo "                                <h2>Килограми: 0кг</h2>
                            ";
        } else {
            // line 99
            echo "                                <h2>Килограми: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 99, $this->source); })()), "Weight", [], "any", false, false, false, 99), "html", null, true);
            echo "кг</h2>
                            ";
        }
        // line 101
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 103, $this->source); })()), "Height", [], "any", false, false, false, 103) == null)) {
            // line 104
            echo "                                <h2>Височина: 0см</h2>
                            ";
        } else {
            // line 106
            echo "                                <h2>Височина: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 106, $this->source); })()), "Height", [], "any", false, false, false, 106), "html", null, true);
            echo "см</h2>
                            ";
        }
        // line 108
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0  mt-4  myBorderPlayerStat-left text-center\">
                            ";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 112, $this->source); })()), "Pace", [], "any", false, false, false, 112) == null)) {
            // line 113
            echo "                                <h2>Скорост: 0 km/h</h2>
                            ";
        } else {
            // line 115
            echo "                                <h2>Скорост: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 115, $this->source); })()), "Pace", [], "any", false, false, false, 115), "html", null, true);
            echo " km/h</h2>
                            ";
        }
        // line 117
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 119
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 119, $this->source); })()), "LongPass", [], "any", false, false, false, 119) == null)) {
            // line 120
            echo "                                <h2>Дълъг пас: 0</h2>
                            ";
        } else {
            // line 122
            echo "                                <h2>Дълъг пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 122, $this->source); })()), "LongPass", [], "any", false, false, false, 122), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 124
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 128, $this->source); })()), "Relax", [], "any", false, false, false, 128) == null)) {
            // line 129
            echo "                                <h2>Спокойствие на терена: 0</h2>
                            ";
        } else {
            // line 131
            echo "                                <h2>Спокойствие на терена: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 131, $this->source); })()), "Relax", [], "any", false, false, false, 131), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 133
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            ";
        // line 135
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 135, $this->source); })()), "Fat", [], "any", false, false, false, 135) == null)) {
            // line 136
            echo "                                <h2>Подкожни мазнини: 0%</h2>
                            ";
        } else {
            // line 138
            echo "                                <h2>Подкожни мазнини: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 138, $this->source); })()), "Fat", [], "any", false, false, false, 138), "html", null, true);
            echo "%</h2>
                            ";
        }
        // line 140
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 144
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 144, $this->source); })()), "Work", [], "any", false, false, false, 144) == null)) {
            // line 145
            echo "                                <h2>Усърдна работа: 0</h2>
                            ";
        } else {
            // line 147
            echo "                                <h2>Усърдна работа: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 147, $this->source); })()), "Work", [], "any", false, false, false, 147), "html", null, true);
            echo "</h2>

                            ";
        }
        // line 150
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 152
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 152, $this->source); })()), "Tacticks", [], "any", false, false, false, 152) == null)) {
            // line 153
            echo "                                <h2>Тактика: 0</h2>
                            ";
        } else {
            // line 155
            echo "                                <h2>Тактика: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 155, $this->source); })()), "Tacticks", [], "any", false, false, false, 155), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 157
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 161
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 161, $this->source); })()), "WillPower", [], "any", false, false, false, 161) == null)) {
            // line 162
            echo "                                <h2>Воля: 0</h2>
                            ";
        } else {
            // line 164
            echo "                                <h2>Воля:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 164, $this->source); })()), "WillPower", [], "any", false, false, false, 164), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 166
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 168
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 168, $this->source); })()), "Dribble", [], "any", false, false, false, 168) == null)) {
            // line 169
            echo "                                <h2>Дрибъл: 0</h2>
                            ";
        } else {
            // line 171
            echo "                                <h2>Дрибъл:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 171, $this->source); })()), "Dribble", [], "any", false, false, false, 171), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 173
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 177
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 177, $this->source); })()), "Shot", [], "any", false, false, false, 177) == null)) {
            // line 178
            echo "                                <h2>Удар: 0</h2>
                            ";
        } else {
            // line 180
            echo "                                <h2>Удар:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 180, $this->source); })()), "Shot", [], "any", false, false, false, 180), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 182
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 184
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 184, $this->source); })()), "Technique", [], "any", false, false, false, 184) == null)) {
            // line 185
            echo "                                <h2>Техника: 0</h2>
                            ";
        } else {
            // line 187
            echo "                                <h2>Техника:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 187, $this->source); })()), "Technique", [], "any", false, false, false, 187), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 189
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 193
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 193, $this->source); })()), "Pass", [], "any", false, false, false, 193) == null)) {
            // line 194
            echo "                                <h2>Пас: 0</h2>
                            ";
        } else {
            // line 196
            echo "                                <h2>Пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 196, $this->source); })()), "Pass", [], "any", false, false, false, 196), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 198
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 200
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 200, $this->source); })()), "Perspective", [], "any", false, false, false, 200) == null)) {
            // line 201
            echo "                                <h2>Перспектива: 0</h2>
                            ";
        } else {
            // line 203
            echo "                                <h2>Перспектива:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 203, $this->source); })()), "Perspective", [], "any", false, false, false, 203), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 205
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
        return array (  490 => 205,  484 => 203,  480 => 201,  478 => 200,  474 => 198,  468 => 196,  464 => 194,  462 => 193,  456 => 189,  450 => 187,  446 => 185,  444 => 184,  440 => 182,  434 => 180,  430 => 178,  428 => 177,  422 => 173,  416 => 171,  412 => 169,  410 => 168,  406 => 166,  400 => 164,  396 => 162,  394 => 161,  388 => 157,  382 => 155,  378 => 153,  376 => 152,  372 => 150,  365 => 147,  361 => 145,  359 => 144,  353 => 140,  347 => 138,  343 => 136,  341 => 135,  337 => 133,  331 => 131,  327 => 129,  325 => 128,  319 => 124,  313 => 122,  309 => 120,  307 => 119,  303 => 117,  297 => 115,  293 => 113,  291 => 112,  285 => 108,  279 => 106,  275 => 104,  273 => 103,  269 => 101,  263 => 99,  259 => 97,  257 => 96,  252 => 93,  241 => 82,  235 => 80,  231 => 78,  229 => 77,  220 => 70,  214 => 68,  210 => 66,  208 => 65,  199 => 58,  193 => 56,  189 => 54,  187 => 53,  178 => 46,  172 => 44,  168 => 42,  166 => 41,  153 => 31,  149 => 30,  145 => 29,  140 => 28,  134 => 25,  127 => 22,  125 => 21,  115 => 13,  105 => 12,  93 => 10,  89 => 9,  85 => 8,  81 => 7,  77 => 6,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
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
                               <label for=\"form_image\" class=\"\"><img src=\"{{asset(\"images/\" ~ image)}}\" alt=\"\" class=\"profile-pic-changer m-2\"></label>
                           {% endif %}
{#                           <input type=\"file\" id=\"form_image\">#}
                           {{ form_widget(form.image, {'attr' : {'class' : 'inputfile', 'id' : 'uploadImage'}})  }}
                           {{ form_row(form.save, {'attr' : {'class':'btn'}} ) }}
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
