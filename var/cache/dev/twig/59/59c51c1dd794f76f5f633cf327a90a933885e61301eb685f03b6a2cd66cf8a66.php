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
        echo "                    <input type=\"image\" id=\"form_image\">
                    <h4> ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["playerName"]) || array_key_exists("playerName", $context) ? $context["playerName"] : (function () { throw new RuntimeError('Variable "playerName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</h4>
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "image", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "inputfile", "id" => "uploadImage"]]);
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "save", [], "any", false, false, false, 26), 'row', ["attr" => ["class" => "btn"]]);
        echo "
                    <div class=\"col-12 justify-content-center text-center row mt-5\">
                        <h3 class=\"col-12 text-center\">Статистика </h3>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 30, $this->source); })()), "Weight", [], "any", false, false, false, 30) == null)) {
            // line 31
            echo "                                <h5>Килограми: 0кг</h5>
                            ";
        } else {
            // line 33
            echo "                                <h5>Килограми: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 33, $this->source); })()), "Weight", [], "any", false, false, false, 33), "html", null, true);
            echo "кг</h5>
                            ";
        }
        // line 35
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 37, $this->source); })()), "Height", [], "any", false, false, false, 37) == null)) {
            // line 38
            echo "                                <h5>Височина: 0см</h5>
                            ";
        } else {
            // line 40
            echo "                                <h5>Височина: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 40, $this->source); })()), "Height", [], "any", false, false, false, 40), "html", null, true);
            echo "см</h5>
                            ";
        }
        // line 42
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0  mt-4  myBorderPlayerStat-left text-center\">
                            ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 46, $this->source); })()), "Pace", [], "any", false, false, false, 46) == null)) {
            // line 47
            echo "                                <h5>Скорост: 0 km/h</h5>
                            ";
        } else {
            // line 49
            echo "                                <h5>Скорост: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 49, $this->source); })()), "Pace", [], "any", false, false, false, 49), "html", null, true);
            echo " km/h</h5>
                            ";
        }
        // line 51
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 53, $this->source); })()), "LongPass", [], "any", false, false, false, 53) == null)) {
            // line 54
            echo "                                <h5>Дълъг пас: 0</h5>
                            ";
        } else {
            // line 56
            echo "                                <h5>Дълъг пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 56, $this->source); })()), "LongPass", [], "any", false, false, false, 56), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 58
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 62, $this->source); })()), "Relax", [], "any", false, false, false, 62) == null)) {
            // line 63
            echo "                                <h5>Спокойствие на терена: 0</h5>
                            ";
        } else {
            // line 65
            echo "                                <h5>Спокойствие на терена: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 65, $this->source); })()), "Relax", [], "any", false, false, false, 65), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 67
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 69, $this->source); })()), "Fat", [], "any", false, false, false, 69) == null)) {
            // line 70
            echo "                                <h5>Подкожни мазнини: 0%</h5>
                            ";
        } else {
            // line 72
            echo "                                <h5>Подкожни мазнини: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 72, $this->source); })()), "Fat", [], "any", false, false, false, 72), "html", null, true);
            echo "%</h5>
                            ";
        }
        // line 74
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 78, $this->source); })()), "Work", [], "any", false, false, false, 78) == null)) {
            // line 79
            echo "                                <h5>Усърдна работа: 0</h5>
                            ";
        } else {
            // line 81
            echo "                                <h5>Усърдна работа: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 81, $this->source); })()), "Work", [], "any", false, false, false, 81), "html", null, true);
            echo "</h5>

                            ";
        }
        // line 84
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 86, $this->source); })()), "Tacticks", [], "any", false, false, false, 86) == null)) {
            // line 87
            echo "                            <h2>Тактика: 0</h2>
                            ";
        } else {
            // line 89
            echo "                            <h2>Тактика: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 89, $this->source); })()), "Tacticks", [], "any", false, false, false, 89), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 91
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 95, $this->source); })()), "WillPower", [], "any", false, false, false, 95) == null)) {
            // line 96
            echo "                            <h2>Воля: 0</h2>
                            ";
        } else {
            // line 98
            echo "                            <h2>Воля:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 98, $this->source); })()), "WillPower", [], "any", false, false, false, 98), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 100
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 102, $this->source); })()), "Dribble", [], "any", false, false, false, 102) == null)) {
            // line 103
            echo "                                <h2>Дрибъл: 0</h2>
                            ";
        } else {
            // line 105
            echo "                                <h2>Дрибъл:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 105, $this->source); })()), "Dribble", [], "any", false, false, false, 105), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 107
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 111
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 111, $this->source); })()), "Shot", [], "any", false, false, false, 111) == null)) {
            // line 112
            echo "                                <h2>Удар: 0</h2>
                            ";
        } else {
            // line 114
            echo "                                <h2>Удар:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 114, $this->source); })()), "Shot", [], "any", false, false, false, 114), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 116
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 118
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 118, $this->source); })()), "Technique", [], "any", false, false, false, 118) == null)) {
            // line 119
            echo "                                <h2>Техника: 0</h2>
                            ";
        } else {
            // line 121
            echo "                                <h2>Техника:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 121, $this->source); })()), "Technique", [], "any", false, false, false, 121), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 123
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 127
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 127, $this->source); })()), "Pass", [], "any", false, false, false, 127) == null)) {
            // line 128
            echo "                                <h2>Пас: 0</h2>
                            ";
        } else {
            // line 130
            echo "                                <h2>Пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 130, $this->source); })()), "Pass", [], "any", false, false, false, 130), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 132
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 134
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 134, $this->source); })()), "Perspective", [], "any", false, false, false, 134) == null)) {
            // line 135
            echo "                                <h2>Перспектива: 0</h2>
                            ";
        } else {
            // line 137
            echo "                                <h2>Перспектива:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 137, $this->source); })()), "Perspective", [], "any", false, false, false, 137), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 139
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
        return array (  387 => 139,  381 => 137,  377 => 135,  375 => 134,  371 => 132,  365 => 130,  361 => 128,  359 => 127,  353 => 123,  347 => 121,  343 => 119,  341 => 118,  337 => 116,  331 => 114,  327 => 112,  325 => 111,  319 => 107,  313 => 105,  309 => 103,  307 => 102,  303 => 100,  297 => 98,  293 => 96,  291 => 95,  285 => 91,  279 => 89,  275 => 87,  273 => 86,  269 => 84,  262 => 81,  258 => 79,  256 => 78,  250 => 74,  244 => 72,  240 => 70,  238 => 69,  234 => 67,  228 => 65,  224 => 63,  222 => 62,  216 => 58,  210 => 56,  206 => 54,  204 => 53,  200 => 51,  194 => 49,  190 => 47,  188 => 46,  182 => 42,  176 => 40,  172 => 38,  170 => 37,  166 => 35,  160 => 33,  156 => 31,  154 => 30,  147 => 26,  143 => 25,  139 => 24,  136 => 23,  130 => 21,  124 => 19,  122 => 18,  117 => 15,  107 => 14,  95 => 12,  91 => 11,  86 => 9,  82 => 8,  77 => 6,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
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
                    <input type=\"image\" id=\"form_image\">
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
