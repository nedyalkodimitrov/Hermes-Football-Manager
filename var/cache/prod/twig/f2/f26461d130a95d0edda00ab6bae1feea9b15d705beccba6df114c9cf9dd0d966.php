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
class __TwigTemplate_2ced030f949e58ca518bdc5b0a8e3b3c1adb351e2dc2ab0f7e5564941a76300d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("player/playerBaseTemplate.html.twig", "player/settings/settings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        <div class=\" justify-content-center row mt-4 mb-5\">
            <div class=\"col-12 justify-content-center text-center row \">
                <div class=\"text-center information-div\">
                    ";
        // line 18
        if (((($context["image"] ?? null) == "0") || (($context["image"] ?? null) == null))) {
            // line 19
            echo "                        <label for=\"form_image\" class=\"\">    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"profile_pic\"></label>
                    ";
        } else {
            // line 21
            echo "                        <label for=\"form_image\" class=\"\">   <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . ($context["image"] ?? null))), "html", null, true);
            echo "\" alt=\"\" class=\"profile_pic\"></label>
                    ";
        }
        // line 23
        echo "                    <h4> ";
        echo twig_escape_filter($this->env, ($context["playerName"] ?? null), "html", null, true);
        echo "</h4>
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "inputfile", "id" => "uploadImage"]]);
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "btn"]]);
        echo "
                    <div class=\"col-12 justify-content-center text-center row mt-5\">
                        <h3 class=\"col-12 text-center\">Статистика </h3>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Weight", [], "any", false, false, false, 29) == null)) {
            // line 30
            echo "                                <h5>Килограми: 0кг</h5>
                            ";
        } else {
            // line 32
            echo "                                <h5>Килограми: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Weight", [], "any", false, false, false, 32), "html", null, true);
            echo "кг</h5>
                            ";
        }
        // line 34
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Height", [], "any", false, false, false, 36) == null)) {
            // line 37
            echo "                                <h5>Височина: 0см</h5>
                            ";
        } else {
            // line 39
            echo "                                <h5>Височина: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Height", [], "any", false, false, false, 39), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Pace", [], "any", false, false, false, 45) == null)) {
            // line 46
            echo "                                <h5>Скорост: 0 km/h</h5>
                            ";
        } else {
            // line 48
            echo "                                <h5>Скорост: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Pace", [], "any", false, false, false, 48), "html", null, true);
            echo " km/h</h5>
                            ";
        }
        // line 50
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "LongPass", [], "any", false, false, false, 52) == null)) {
            // line 53
            echo "                                <h5>Дълъг пас: 0</h5>
                            ";
        } else {
            // line 55
            echo "                                <h5>Дълъг пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "LongPass", [], "any", false, false, false, 55), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Relax", [], "any", false, false, false, 61) == null)) {
            // line 62
            echo "                                <h5>Спокойствие на терена: 0</h5>
                            ";
        } else {
            // line 64
            echo "                                <h5>Спокойствие на терена: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Relax", [], "any", false, false, false, 64), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 66
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Fat", [], "any", false, false, false, 68) == null)) {
            // line 69
            echo "                                <h5>Подкожни мазнини: 0%</h5>
                            ";
        } else {
            // line 71
            echo "                                <h5>Подкожни мазнини: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Fat", [], "any", false, false, false, 71), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Work", [], "any", false, false, false, 77) == null)) {
            // line 78
            echo "                                <h5>Усърдна работа: 0</h5>
                            ";
        } else {
            // line 80
            echo "                                <h5>Усърдна работа: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Work", [], "any", false, false, false, 80), "html", null, true);
            echo "</h5>

                            ";
        }
        // line 83
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Tacticks", [], "any", false, false, false, 85) == null)) {
            // line 86
            echo "                            <h2>Тактика: 0</h2>
                            ";
        } else {
            // line 88
            echo "                            <h2>Тактика: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Tacticks", [], "any", false, false, false, 88), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "WillPower", [], "any", false, false, false, 94) == null)) {
            // line 95
            echo "                            <h2>Воля: 0</h2>
                            ";
        } else {
            // line 97
            echo "                            <h2>Воля:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "WillPower", [], "any", false, false, false, 97), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 99
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Dribble", [], "any", false, false, false, 101) == null)) {
            // line 102
            echo "                                <h2>Дрибъл: 0</h2>
                            ";
        } else {
            // line 104
            echo "                                <h2>Дрибъл:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Dribble", [], "any", false, false, false, 104), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Shot", [], "any", false, false, false, 110) == null)) {
            // line 111
            echo "                                <h2>Удар: 0</h2>
                            ";
        } else {
            // line 113
            echo "                                <h2>Удар:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Shot", [], "any", false, false, false, 113), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 115
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 117
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Technique", [], "any", false, false, false, 117) == null)) {
            // line 118
            echo "                                <h2>Техника: 0</h2>
                            ";
        } else {
            // line 120
            echo "                                <h2>Техника:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Technique", [], "any", false, false, false, 120), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Pass", [], "any", false, false, false, 126) == null)) {
            // line 127
            echo "                                <h2>Пас: 0</h2>
                            ";
        } else {
            // line 129
            echo "                                <h2>Пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Pass", [], "any", false, false, false, 129), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 131
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 133
        if ((twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Perspective", [], "any", false, false, false, 133) == null)) {
            // line 134
            echo "                                <h2>Перспектива: 0</h2>
                            ";
        } else {
            // line 136
            echo "                                <h2>Перспектива:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "Perspective", [], "any", false, false, false, 136), "html", null, true);
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
        return array (  355 => 138,  349 => 136,  345 => 134,  343 => 133,  339 => 131,  333 => 129,  329 => 127,  327 => 126,  321 => 122,  315 => 120,  311 => 118,  309 => 117,  305 => 115,  299 => 113,  295 => 111,  293 => 110,  287 => 106,  281 => 104,  277 => 102,  275 => 101,  271 => 99,  265 => 97,  261 => 95,  259 => 94,  253 => 90,  247 => 88,  243 => 86,  241 => 85,  237 => 83,  230 => 80,  226 => 78,  224 => 77,  218 => 73,  212 => 71,  208 => 69,  206 => 68,  202 => 66,  196 => 64,  192 => 62,  190 => 61,  184 => 57,  178 => 55,  174 => 53,  172 => 52,  168 => 50,  162 => 48,  158 => 46,  156 => 45,  150 => 41,  144 => 39,  140 => 37,  138 => 36,  134 => 34,  128 => 32,  124 => 30,  122 => 29,  115 => 25,  111 => 24,  106 => 23,  100 => 21,  94 => 19,  92 => 18,  87 => 15,  83 => 14,  77 => 12,  73 => 11,  68 => 9,  64 => 8,  59 => 6,  55 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "player/settings/settings.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\settings\\settings.html.twig");
    }
}
