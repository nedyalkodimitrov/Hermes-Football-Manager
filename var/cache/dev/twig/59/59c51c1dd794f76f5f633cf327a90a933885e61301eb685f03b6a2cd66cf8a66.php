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

/* player/settings/settings.html.twig */
class __TwigTemplate_2ae65f17ba3dc86c0e10f823b4fe13e37bf8129759964c019d307ee762601ce1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/settings/settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/settings/settings.html.twig"));

        $this->parent = $this->loadTemplate("player/playerBaseTemplate.html.twig", "player/settings/settings.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/settingsStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/playerStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coachStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        <div class=\" justify-content-center row mt-4 mb-5\">
            <div class=\"col-12 justify-content-center text-center row \">
                <div class=\"text-center information-div\">
                    ";
        // line 18
        if ((((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 18, $this->source); })()) == "0") || ((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 18, $this->source); })()) == null))) {
            // line 19
            echo "                        <label for=\"form_image\" class=\"\">    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"profile_pic\"></label>
                    ";
        } else {
            // line 21
            echo "                        <label for=\"form_image\" class=\"\">   <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 21, $this->source); })()))), "html", null, true);
            echo "\" alt=\"\" class=\"profile_pic\"></label>
                    ";
        }
        // line 23
        echo "                    <h4> ";
        echo twig_escape_filter($this->env, (isset($context["playerName"]) || array_key_exists("playerName", $context) ? $context["playerName"] : (function () { throw new RuntimeError('Variable "playerName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</h4>
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "inputfile", "id" => "uploadImage"]]);
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "save", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "btn"]]);
        echo "
                    <div class=\"col-12 justify-content-center text-center row mt-5\">
                        <h3 class=\"col-12 text-center\">Статистика </h3>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 29, $this->source); })()), "Weight", [], "any", false, false, false, 29) == null)) {
            // line 30
            echo "                                <h5>Килограми: 0кг</h5>
                            ";
        } else {
            // line 32
            echo "                                <h5>Килограми: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 32, $this->source); })()), "Weight", [], "any", false, false, false, 32), "html", null, true);
            echo "кг</h5>
                            ";
        }
        // line 34
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 36, $this->source); })()), "Height", [], "any", false, false, false, 36) == null)) {
            // line 37
            echo "                                <h5>Височина: 0см</h5>
                            ";
        } else {
            // line 39
            echo "                                <h5>Височина: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 39, $this->source); })()), "Height", [], "any", false, false, false, 39), "html", null, true);
            echo "см</h5>
                            ";
        }
        // line 41
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0  mt-4  myBorderPlayerStat-left text-center\">
                            ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 45, $this->source); })()), "Pace", [], "any", false, false, false, 45) == null)) {
            // line 46
            echo "                                <h5>Скорост: 0 km/h</h5>
                            ";
        } else {
            // line 48
            echo "                                <h5>Скорост: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 48, $this->source); })()), "Pace", [], "any", false, false, false, 48), "html", null, true);
            echo " km/h</h5>
                            ";
        }
        // line 50
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 52, $this->source); })()), "LongPass", [], "any", false, false, false, 52) == null)) {
            // line 53
            echo "                                <h5>Дълъг пас: 0</h5>
                            ";
        } else {
            // line 55
            echo "                                <h5>Дълъг пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 55, $this->source); })()), "LongPass", [], "any", false, false, false, 55), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 57
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 61, $this->source); })()), "Relax", [], "any", false, false, false, 61) == null)) {
            // line 62
            echo "                                <h5>Спокойствие на терена: 0</h5>
                            ";
        } else {
            // line 64
            echo "                                <h5>Спокойствие на терена: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 64, $this->source); })()), "Relax", [], "any", false, false, false, 64), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 66
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 68, $this->source); })()), "Fat", [], "any", false, false, false, 68) == null)) {
            // line 69
            echo "                                <h5>Подкожни мазнини: 0%</h5>
                            ";
        } else {
            // line 71
            echo "                                <h5>Подкожни мазнини: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 71, $this->source); })()), "Fat", [], "any", false, false, false, 71), "html", null, true);
            echo "%</h5>
                            ";
        }
        // line 73
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 77, $this->source); })()), "Work", [], "any", false, false, false, 77) == null)) {
            // line 78
            echo "                                <h5>Усърдна работа: 0</h5>
                            ";
        } else {
            // line 80
            echo "                                <h5>Усърдна работа: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 80, $this->source); })()), "Work", [], "any", false, false, false, 80), "html", null, true);
            echo "</h5>

                            ";
        }
        // line 83
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 85, $this->source); })()), "Tacticks", [], "any", false, false, false, 85) == null)) {
            // line 86
            echo "                            <h2>Тактика: 0</h2>
                            ";
        } else {
            // line 88
            echo "                            <h2>Тактика: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 88, $this->source); })()), "Tacticks", [], "any", false, false, false, 88), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 90
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 94, $this->source); })()), "WillPower", [], "any", false, false, false, 94) == null)) {
            // line 95
            echo "                            <h2>Воля: 0</h2>
                            ";
        } else {
            // line 97
            echo "                            <h2>Воля:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 97, $this->source); })()), "WillPower", [], "any", false, false, false, 97), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 99
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 101, $this->source); })()), "Dribble", [], "any", false, false, false, 101) == null)) {
            // line 102
            echo "                                <h2>Дрибъл: 0</h2>
                            ";
        } else {
            // line 104
            echo "                                <h2>Дрибъл:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 104, $this->source); })()), "Dribble", [], "any", false, false, false, 104), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 106
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 110, $this->source); })()), "Shot", [], "any", false, false, false, 110) == null)) {
            // line 111
            echo "                                <h2>Удар: 0</h2>
                            ";
        } else {
            // line 113
            echo "                                <h2>Удар:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 113, $this->source); })()), "Shot", [], "any", false, false, false, 113), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 115
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 117
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 117, $this->source); })()), "Technique", [], "any", false, false, false, 117) == null)) {
            // line 118
            echo "                                <h2>Техника: 0</h2>
                            ";
        } else {
            // line 120
            echo "                                <h2>Техника:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 120, $this->source); })()), "Technique", [], "any", false, false, false, 120), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 122
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 126
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 126, $this->source); })()), "Pass", [], "any", false, false, false, 126) == null)) {
            // line 127
            echo "                                <h2>Пас: 0</h2>
                            ";
        } else {
            // line 129
            echo "                                <h2>Пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 129, $this->source); })()), "Pass", [], "any", false, false, false, 129), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 131
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 133
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 133, $this->source); })()), "Perspective", [], "any", false, false, false, 133) == null)) {
            // line 134
            echo "                                <h2>Перспектива: 0</h2>
                            ";
        } else {
            // line 136
            echo "                                <h2>Перспектива:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 136, $this->source); })()), "Perspective", [], "any", false, false, false, 136), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 138
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
        return "player/settings/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 138,  379 => 136,  375 => 134,  373 => 133,  369 => 131,  363 => 129,  359 => 127,  357 => 126,  351 => 122,  345 => 120,  341 => 118,  339 => 117,  335 => 115,  329 => 113,  325 => 111,  323 => 110,  317 => 106,  311 => 104,  307 => 102,  305 => 101,  301 => 99,  295 => 97,  291 => 95,  289 => 94,  283 => 90,  277 => 88,  273 => 86,  271 => 85,  267 => 83,  260 => 80,  256 => 78,  254 => 77,  248 => 73,  242 => 71,  238 => 69,  236 => 68,  232 => 66,  226 => 64,  222 => 62,  220 => 61,  214 => 57,  208 => 55,  204 => 53,  202 => 52,  198 => 50,  192 => 48,  188 => 46,  186 => 45,  180 => 41,  174 => 39,  170 => 37,  168 => 36,  164 => 34,  158 => 32,  154 => 30,  152 => 29,  145 => 25,  141 => 24,  136 => 23,  130 => 21,  124 => 19,  122 => 18,  117 => 15,  107 => 14,  95 => 12,  91 => 11,  86 => 9,  82 => 8,  77 => 6,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {% extends 'player/playerBaseTemplate.html.twig' %}
    {% block style %}
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
    <link href=\"{{ asset(\"css/settingsStyle.css\") }}\" rel=\"stylesheet\">
    <link href=\"{{ asset(\"css/playerStyle.css\") }}\" rel=\"stylesheet\">

    <link href=\"{{ asset(\"css/coachStyle.css\") }}\" rel=\"stylesheet\">
    <link href=\"{{ asset(\"mdb/css/mdb.min.css\") }}\" rel=\"stylesheet\">

    <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/mdb.min.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/bootstrap.min.js\") }}\"></script>
    {% endblock %}
    {% block body%}
        <div class=\" justify-content-center row mt-4 mb-5\">
            <div class=\"col-12 justify-content-center text-center row \">
                <div class=\"text-center information-div\">
                    {% if image == '0' or image == null  %}
                        <label for=\"form_image\" class=\"\">    <img src=\"{{asset(\"images/user1.png\")}}\" alt=\"\" class=\"profile_pic\"></label>
                    {% else %}
                        <label for=\"form_image\" class=\"\">   <img src=\"{{asset(\"images/\" ~ image)}}\" alt=\"\" class=\"profile_pic\"></label>
                    {% endif %}
                    <h4> {{ playerName }}</h4>
                    {{ form_widget(form.image, {'attr' : {'class' : 'inputfile', 'id' : 'uploadImage'}})  }}
                    {{ form_row(form.save, {'attr' : {'class':'btn'}} ) }}
                    <div class=\"col-12 justify-content-center text-center row mt-5\">
                        <h3 class=\"col-12 text-center\">Статистика </h3>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            {% if player.Weight == null%}
                                <h5>Килограми: 0кг</h5>
                            {% else %}
                                <h5>Килограми: {{ player.Weight }}кг</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            {% if player.Height == null%}
                                <h5>Височина: 0см</h5>
                            {% else %}
                                <h5>Височина: {{ player.Height }}см</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0  mt-4  myBorderPlayerStat-left text-center\">
                            {% if player.Pace == null%}
                                <h5>Скорост: 0 km/h</h5>
                            {% else %}
                                <h5>Скорост: {{ player.Pace }} km/h</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            {% if player.LongPass == null%}
                                <h5>Дълъг пас: 0</h5>
                            {% else %}
                                <h5>Дълъг пас: {{ player.LongPass}}</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            {% if player.Relax == null%}
                                <h5>Спокойствие на терена: 0</h5>
                            {% else %}
                                <h5>Спокойствие на терена: {{ player.Relax}}</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            {% if player.Fat == null%}
                                <h5>Подкожни мазнини: 0%</h5>
                            {% else %}
                                <h5>Подкожни мазнини: {{ player.Fat }}%</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if player.Work == null%}
                                <h5>Усърдна работа: 0</h5>
                            {% else %}
                                <h5>Усърдна работа: {{ player.Work}}</h5>

                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if player.Tacticks == null%}
                            <h2>Тактика: 0</h2>
                            {% else %}
                            <h2>Тактика: {{ player.Tacticks }}</h2>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if player.WillPower == null%}
                            <h2>Воля: 0</h2>
                            {% else %}
                            <h2>Воля:{{ player.WillPower}}</h2>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if player.Dribble == null%}
                                <h2>Дрибъл: 0</h2>
                            {% else %}
                                <h2>Дрибъл:{{ player.Dribble }}</h2>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if player.Shot == null%}
                                <h2>Удар: 0</h2>
                            {% else %}
                                <h2>Удар:{{ player.Shot }}</h2>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if player.Technique == null%}
                                <h2>Техника: 0</h2>
                            {% else %}
                                <h2>Техника:{{ player.Technique }}</h2>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if player.Pass == null%}
                                <h2>Пас: 0</h2>
                            {% else %}
                                <h2>Пас: {{ player.Pass }}</h2>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if player.Perspective == null%}
                                <h2>Перспектива: 0</h2>
                            {% else %}
                                <h2>Перспектива:{{ player.Perspective}}</h2>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}", "player/settings/settings.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\settings\\settings.html.twig");
    }
}
