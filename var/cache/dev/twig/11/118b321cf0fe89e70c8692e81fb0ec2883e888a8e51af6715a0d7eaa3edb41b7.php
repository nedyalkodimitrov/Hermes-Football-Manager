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

/* superAdmin/teams.html.twig */
class __TwigTemplate_99437e6a5e373c5a5642f2b0503303851b16b2c37b15dc04261639c25536d479 extends \Twig\Template
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
        return "superAdmin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/teams.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superAdmin/teams.html.twig"));

        $this->parent = $this->loadTemplate("superAdmin/base.html.twig", "superAdmin/teams.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"  ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/matchCard.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"col-12 row justify-content-center mx-auto max-resolution mt-5\">
        <div class=\"col-lg-11 col-md-7 col-sm-11 col-10   row pb-3\">
            <div class=\"col-12\">
                <h2>Отбори</h2>
            </div>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 14
            echo "                <div class=\"col-lg-3 col-sm-11 row m-0 \">
                    <div class=\"col-lg-12  col-sm-9 col-md-6 country-container text-center mt-3 mx-auto\">
                        <a href=\"\" class=\"m-0\">
                            ";
            // line 17
            if (((twig_get_attribute($this->env, $this->source, $context["team"], "Image", [], "any", false, false, false, 17) == null) || (twig_get_attribute($this->env, $this->source, $context["team"], "Image", [], "any", false, false, false, 17) == ""))) {
                // line 18
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/football-logo.jpg"), "html", null, true);
                echo "\" alt=\"\" class=\"country-img m-0\">
                                ";
            } else {
                // line 20
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["team"], "Image", [], "any", false, false, false, 20))), "html", null, true);
                echo "\" alt=\"\" class=\"country-img m-0\">
                            ";
            }
            // line 22
            echo "
                            <h4 class=\"country-text mt-2 mb-2 ml-2 color-black text-left\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Name", [], "any", false, false, false, 23), "html", null, true);
            echo "</h4>
                        </a>
";
            // line 26
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            <div class=\"division-futures-holder\">
                <div class=\"add-circle-container  row \" id=\"add-container\">
                    <div class=\"add-circle\" id=\"player- \">
                        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-circle-default \" >
                    </div>
                </div>
";
        // line 46
        echo "            </div>
        </div>
    </div>
    <div class=\"table-container justify-content-center max-resolution col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-4 mt-md-4 mt-sm-5 mt-5 row \">
        <div class=\"table col-11  mh-25\" id=\"teamLeadership-container \">
            <div class=\"col-12 mt-4 mb-4\">
                <h2>Класиране на отборите</h2>
            </div>
            ";
        // line 54
        if ((isset($context["hasTeam"]) || array_key_exists("hasTeam", $context) ? $context["hasTeam"] : (function () { throw new RuntimeError('Variable "hasTeam" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "                <table class=\"table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0;\">
                    <tr class=\"row col-12 p-0 m-0 table-color\">
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
            // line 67
            $context["rowNum"] = 1;
            // line 68
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["standingTeams"]) || array_key_exists("standingTeams", $context) ? $context["standingTeams"] : (function () { throw new RuntimeError('Variable "standingTeams" does not exist.', 68, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 69
                echo "                            <tr class=\"teamTable row col-12 p-0 m-0\">
                                <th  class=\"col-1 justify-content-end\"> ";
                // line 70
                echo twig_escape_filter($this->env, (isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 70, $this->source); })()), "html", null, true);
                echo "</th>
                                <th class=\"col-4\"> ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 71), "html", null, true);
                echo "</th>
                                <th class=\"col-1\"> ";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "playedGames", [], "any", false, false, false, 72), "html", null, true);
                echo "</th>
                                <th class=\"col-1\"> ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "wins", [], "any", false, false, false, 73), "html", null, true);
                echo "</th>
                                <th class=\"col-1\"> ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "drawsGames", [], "any", false, false, false, 74), "html", null, true);
                echo "</th>
                                <th class=\"col-1\"> ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "lostGames", [], "any", false, false, false, 75), "html", null, true);
                echo "</th>
                                <th class=\"col-1\"> ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Goals", [], "any", false, false, false, 76), "html", null, true);
                echo "</th>
                                <th class=\"col-1\"> ";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "GoalsInTheTeamDoor", [], "any", false, false, false, 77), "html", null, true);
                echo "</th>
                                <th class=\"col-1\">";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "points", [], "any", false, false, false, 78), "html", null, true);
                echo "</th>
                            </tr>

                        ";
                // line 81
                $context["rowNum"] = ((isset($context["rowNum"]) || array_key_exists("rowNum", $context) ? $context["rowNum"] : (function () { throw new RuntimeError('Variable "rowNum" does not exist.', 81, $this->source); })()) + 1);
                // line 82
                echo "                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 83
                echo "                        <li><em>Вие нямате отбор</em></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                </table>
            ";
        } else {
            // line 87
            echo "                <h1>Вие нямате отбор</h1>
            ";
        }
        // line 89
        echo "        </div>
    </div>


    <div class=\"col-12 col-lg-12 p-0 mt-4 row justify-content-center mx-auto max-resolution\">
       <div class=\"col-lg-11 col-md-7 p-0 col-sm-11 col-10 justify-content-around  row pb-3\">
           <div class=\"col-12 mt-2 mb-3\">
               <h2>Мачове в първенството</h2>
           </div>
        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 99
            echo "            <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card\">
                <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row\">
                    <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("matchView", ["id" => twig_get_attribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\" class=\"m-0 row col-12\">
                        <div class=\"col-6\">
                            <img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "homeTeam", [], "any", false, false, false, 103), "Image", [], "any", false, false, false, 103))), "html", null, true);
            echo "\" alt=\"\">
                            <h5>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "homeTeam", [], "any", false, false, false, 104), "Name", [], "any", false, false, false, 104), "html", null, true);
            echo "</h5>
                        </div>
                        <div class=\"col-6\">
                            <img src=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "awayTeam", [], "any", false, false, false, 107), "Image", [], "any", false, false, false, 107))), "html", null, true);
            echo "\" alt=\"\" class=\"\" >
                            <h5>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "awayTeam", [], "any", false, false, false, 108), "Name", [], "any", false, false, false, 108), "html", null, true);
            echo "</h5>
                        </div>
                        <div class=\"col-12 justify-content-center mt-2 mb-1\">
                            <h5 class=\"information\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "date", [], "any", false, false, false, 111), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "time", [], "any", false, false, false, 111), "html", null, true);
            echo "</h5>
                        </div>

                    </a>
                    ";
            // line 116
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "       </div>
    </div>

    <div class=\"team-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  team-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h3 class=\"mb-3 col-12 text-center\">Искате ли отборът да бъде изтрит:</h3>
                <button class=\"btn bg-danger\" id=\"no\">Не</button>
                <button class=\"btn btn-green\" id=\"yes\">Да</button>

            </div>
            <span><i class=\"fas fa-times-circle color-black \"></i></span>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  player-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h2 class=\"col-12 text-center mb-3\">Добавяне на отбор</h2>
                <div class=\"input-group mb-4 mt-2 col-lg-11 col-sm-12\">
                    <input class=\"effect-2 bg-gray name\" id=\"name\" inputmask type=\"text\" data-trigger=\"hover\" data-toggle=\"popover\"  data-content=\" \" placeholder=\"Име на отбора...\" id=\"email\" aria-label=\"Email\" >
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-11 col-sm-12\">
                    <input class=\"effect-2 bg-gray phone\" inputmask type=\"text\" data-trigger=\"hover\" data-toggle=\"popover\"  data-content=\"Телефонният номер трябва да е дълъг 10 цифри \" placeholder=\"Телефон...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info\">Създаване на нов отбор</button>

            </div>
            <span><i class=\"fas fa-times-circle color-black \"></i></span>
        </div>
    </div>


    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-lg-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"add-player\" >

            <div class=\"col-lg-8 col-sm-11 row justify-content-around\">
                <h2 class=\"mb-5 col-12 text-center justify-content-center\">Добавяне на  мач отбор</h2>
                <div class=\"input-group mb-3 col-lg-5 col-sm-12\">
                    <select name=\"\" id=\"homeTeam\">
                        ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 160, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 161
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 161), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Name", [], "any", false, false, false, 161), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                    </select>
                </div>

                <div class=\"input-group mb-3 col-lg-5 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"awayTeam\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                        ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 169, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 170
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 170), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Name", [], "any", false, false, false, 170), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                    </select>
                </div>
               
                <div class=\"input-group mb-3 col-lg-5 col-sm-12\">
                    <input type=\"date\" id =\"date\" placeholder=\"Date\">
                </div>
               
                <div class=\"input-group mb-3 col-lg-5 col-sm-12\">
                    <input type=\"time\" id=\"time\" placeholder=\"Time\">
                </div>
               
                <div class=\"col-12 justify-content-center row\">
                    <button class=\"btn bg-mycolor\" id=\"create_match\">Потвърди</button>
                </div>
            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>
    <script>



        \$('.adding-matach').on('click', function () {
            var player = \$(this).children().attr('id');
            \$('.player-status-container').css('visibility', 'visible');
            \$('.player-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('.player-status-div').css('visibility', 'hidden');
            });
        });

        \$('.country-fa-times').on('click', function () {
            var team = \$(this).attr('id');
            \$('.team-status-container').css('visibility', 'visible');
            \$('.team-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#no').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#yes').on('click', function () {
                \$.ajax({
                    method: \"POST\",
                    data: {\"division\" : ";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 221, $this->source); })()), "Id", [], "any", false, false, false, 221), "html", null, true);
        echo " },
                    url: \" app.php/superAdmin/deleteTeam/\" + team,
                })
                    .done(function( msg ) {
                        window.location.href = \"/superAdmin/teams/\" + ";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 225, $this->source); })()), "Id", [], "any", false, false, false, 225), "html", null, true);
        echo ";

                    });
            });
        });

        \$('.phone').inputmask('Regex', {
            regex: \"08([7-9])([0-9]{7})+\",
            alias: \"string\",
            clearIncomplete: true
        });

        \$('#name').inputmask(\"Regex\", {
            regex:\"[A-Z][a-z 1-9]+\" ,
            alias: \"string\",
            clearIncomplete: true
        });


        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var phone = \$('.phone').val();

            var namesChecker = false;
            var  phoneCheker = false;


            if(name.length > 5  ){
                namesChecker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Името трябва да е по-дълgо от 5 символа\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }


            if (phone.length == 10){
                phoneCheker = true;
            }else {
                console.log(phone);
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Телефона трябва да е с дължина от 10 цифри\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }
            if (phoneCheker == true && namesChecker == true){
                \$.ajax({
                    method: \"POST\",
                    data: {\"name\": name, \"phone\": phone, \"division\" : ";
        // line 284
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 284, $this->source); })()), "Id", [], "any", false, false, false, 284), "html", null, true);
        echo " },
                    url: \"";
        // line 285
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("superAdminCreateTeam");
        echo "\",
                })
                    .done(function( msg ) {
                        if(msg == 2){
                            window.location.href = \"app.php/superAdmin/teams/\" + ";
        // line 289
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 289, $this->source); })()), "Id", [], "any", false, false, false, 289), "html", null, true);
        echo ";
                        }else if (msg == 0){
                            iziToast.warning({
                                title: 'Грешни данни',
                                message: \"Вече има такъв телефон в базата данни\",
                                overlay: true,
                                zindex: 999,
                                position: 'center',
                                timeout: 2000,
                            });
                        }
                        console.log(msg);
                    });
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Всички полета трябва да са попълнени\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }
        });

        \$(\"#create_match\").on('click', function () {
            var homeTeam  = \$('#homeTeam').val();
            var awayTeam = \$('#awayTeam').val();
            var date = \$('#date').val();
            var time = \$('#time').val();
            \$.ajax({
                method: \"POST\",
                data: {\"homeTeam\": homeTeam, \"awayTeam\": awayTeam, \"date\" : date, \"time\" : time },
                url: \"";
        // line 323
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createMatch");
        echo "\",
            })
                .done(function( msg ) {
                    console.log(msg);
                });
        });



        \$('.adding-match').on('click', function () {
            \$('.player-status-container').css('visibility', 'visible')
                .css('height', '100vh')
                .css('top', '0%')
                .css('transition', 'ease 0.7s');
            \$('.player-status-div')
                .css('visibility', 'visible')
                .css('transition', ' ease 0.6s')
                .css('top', '50%')
                .css('transform', ' translate(-50%, -50%)');

            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-div')
                    .css('top', '-50%')
                    .css('transform', ' translate(-50%, -100%)')
                    .css('transition', 'ease 1s');

                \$('.player-status-container').css('visibility', 'hidden')
                    .css('height', '0vh')
                    .css('top', '-50%')
                    .css('transition', 'ease 1.1s');
            });
        });

        \$('.adding-match').on('click', function () {
            \$('.player-status-container').css('visibility', 'visible')
                .css('height', '100vh')
                .css('top', '0%')
                .css('transition', 'ease 0.7s');
            \$('.player-status-div')
                .css('visibility', 'visible')
                .css('transition', ' ease 0.6s')
                .css('top', '50%')
                .css('transform', ' translate(-50%, -50%)');

            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-div')
                    .css('top', '-50%')
                    .css('transform', ' translate(-50%, -100%)')
                    .css('transition', 'ease 1s');

                \$('.player-status-container').css('visibility', 'hidden')
                    .css('height', '0vh')
                    .css('top', '-50%')
                    .css('transition', 'ease 1.1s');
            });
        });


    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "superAdmin/teams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 323,  524 => 289,  517 => 285,  513 => 284,  451 => 225,  444 => 221,  393 => 172,  382 => 170,  378 => 169,  370 => 163,  359 => 161,  355 => 160,  312 => 119,  304 => 116,  295 => 111,  289 => 108,  285 => 107,  279 => 104,  275 => 103,  270 => 101,  266 => 99,  262 => 98,  251 => 89,  247 => 87,  243 => 85,  236 => 83,  231 => 82,  229 => 81,  223 => 78,  219 => 77,  215 => 76,  211 => 75,  207 => 74,  203 => 73,  199 => 72,  195 => 71,  191 => 70,  188 => 69,  182 => 68,  180 => 67,  166 => 55,  164 => 54,  154 => 46,  148 => 32,  143 => 29,  135 => 26,  130 => 23,  127 => 22,  121 => 20,  115 => 18,  113 => 17,  108 => 14,  104 => 13,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'superAdmin/base.html.twig' %}
{% block style  %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/particles/matchCard.css\") }}\">
{% endblock %}
{% block body %}

    <div class=\"col-12 row justify-content-center mx-auto max-resolution mt-5\">
        <div class=\"col-lg-11 col-md-7 col-sm-11 col-10   row pb-3\">
            <div class=\"col-12\">
                <h2>Отбори</h2>
            </div>
            {% for team in teams%}
                <div class=\"col-lg-3 col-sm-11 row m-0 \">
                    <div class=\"col-lg-12  col-sm-9 col-md-6 country-container text-center mt-3 mx-auto\">
                        <a href=\"\" class=\"m-0\">
                            {% if team.Image == null or team.Image == \"\" %}
                                <img src=\"{{asset(\"images/football-logo.jpg\" )}}\" alt=\"\" class=\"country-img m-0\">
                                {% else  %}
                                    <img src=\"{{asset(\"images/\" ~ team.Image)}}\" alt=\"\" class=\"country-img m-0\">
                            {% endif %}

                            <h4 class=\"country-text mt-2 mb-2 ml-2 color-black text-left\">{{ team.Name }}</h4>
                        </a>
{#                        <span><i class=\"fas fa-times country-fa-times\" id=\"{{ team.Id }}\"></i></span>#}
                    </div>
                </div>
            {% endfor %}
            <div class=\"division-futures-holder\">
                <div class=\"add-circle-container  row \" id=\"add-container\">
                    <div class=\"add-circle\" id=\"player- \">
                        <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-circle-default \" >
                    </div>
                </div>
{#                <div class=\"division-futures-container\">#}
{#                    <div class=\"division-futures\">#}
{#                      <div class=\"division-futures-button-holder\">#}
{#                          <button class=\"division-futures-button adding-match\" id=\"adding-match\">Добавяне на мачове</button>#}
{#                      </div>#}
{#                        <div class=\"division-futures-button-holder\">#}
{#                        <button class=\"division-futures-button\" id=\"adding-team\">Добавяне на отбор</button>#}
{#                        </div>#}
{#                    </div>#}
{#                    <div class=\"rectangle\"></div>#}
{#                </div>#}
            </div>
        </div>
    </div>
    <div class=\"table-container justify-content-center max-resolution col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-4 mt-md-4 mt-sm-5 mt-5 row \">
        <div class=\"table col-11  mh-25\" id=\"teamLeadership-container \">
            <div class=\"col-12 mt-4 mb-4\">
                <h2>Класиране на отборите</h2>
            </div>
            {% if hasTeam %}
                <table class=\"table-bordered col-12 \"  style=\"margin-bottom: 0; padding:0;\">
                    <tr class=\"row col-12 p-0 m-0 table-color\">
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
                    {% for team in standingTeams %}
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


    <div class=\"col-12 col-lg-12 p-0 mt-4 row justify-content-center mx-auto max-resolution\">
       <div class=\"col-lg-11 col-md-7 p-0 col-sm-11 col-10 justify-content-around  row pb-3\">
           <div class=\"col-12 mt-2 mb-3\">
               <h2>Мачове в първенството</h2>
           </div>
        {% for match in matches %}
            <div class=\"col-lg-4 col-sm-12 row m-0 p-0 match-card\">
                <div class=\"col-lg-12  col-sm-9 col-md-6 text-center mt-3 mx-auto row\">
                    <a href=\"{{ path(\"matchView\", {\"id\" : match.id}) }}\" class=\"m-0 row col-12\">
                        <div class=\"col-6\">
                            <img src=\"{{asset(\"images/\" ~ match.homeTeam.Image)  }}\" alt=\"\">
                            <h5>{{ match.homeTeam.Name }}</h5>
                        </div>
                        <div class=\"col-6\">
                            <img src=\"{{asset(\"images/\" ~ match.awayTeam.Image)  }}\" alt=\"\" class=\"\" >
                            <h5>{{ match.awayTeam.Name }}</h5>
                        </div>
                        <div class=\"col-12 justify-content-center mt-2 mb-1\">
                            <h5 class=\"information\">{{ match.date }} {{ match.time }}</h5>
                        </div>

                    </a>
                    {#                        <span><i class=\"fas fa-times country-fa-times\" id=\"{{ team.Id }}\"></i></span>#}
                </div>
            </div>
        {% endfor %}
       </div>
    </div>

    <div class=\"team-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  team-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h3 class=\"mb-3 col-12 text-center\">Искате ли отборът да бъде изтрит:</h3>
                <button class=\"btn bg-danger\" id=\"no\">Не</button>
                <button class=\"btn btn-green\" id=\"yes\">Да</button>

            </div>
            <span><i class=\"fas fa-times-circle color-black \"></i></span>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  player-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h2 class=\"col-12 text-center mb-3\">Добавяне на отбор</h2>
                <div class=\"input-group mb-4 mt-2 col-lg-11 col-sm-12\">
                    <input class=\"effect-2 bg-gray name\" id=\"name\" inputmask type=\"text\" data-trigger=\"hover\" data-toggle=\"popover\"  data-content=\" \" placeholder=\"Име на отбора...\" id=\"email\" aria-label=\"Email\" >
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-11 col-sm-12\">
                    <input class=\"effect-2 bg-gray phone\" inputmask type=\"text\" data-trigger=\"hover\" data-toggle=\"popover\"  data-content=\"Телефонният номер трябва да е дълъг 10 цифри \" placeholder=\"Телефон...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info\">Създаване на нов отбор</button>

            </div>
            <span><i class=\"fas fa-times-circle color-black \"></i></span>
        </div>
    </div>


    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-lg-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"add-player\" >

            <div class=\"col-lg-8 col-sm-11 row justify-content-around\">
                <h2 class=\"mb-5 col-12 text-center justify-content-center\">Добавяне на  мач отбор</h2>
                <div class=\"input-group mb-3 col-lg-5 col-sm-12\">
                    <select name=\"\" id=\"homeTeam\">
                        {% for team in teams %}
                            <option value=\"{{ team.id }}\">{{ team.Name }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"input-group mb-3 col-lg-5 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"awayTeam\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                        {% for team in teams %}
                            <option value=\"{{ team.id }}\">{{ team.Name }}</option>
                        {% endfor %}
                    </select>
                </div>
               
                <div class=\"input-group mb-3 col-lg-5 col-sm-12\">
                    <input type=\"date\" id =\"date\" placeholder=\"Date\">
                </div>
               
                <div class=\"input-group mb-3 col-lg-5 col-sm-12\">
                    <input type=\"time\" id=\"time\" placeholder=\"Time\">
                </div>
               
                <div class=\"col-12 justify-content-center row\">
                    <button class=\"btn bg-mycolor\" id=\"create_match\">Потвърди</button>
                </div>
            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>
    <script>



        \$('.adding-matach').on('click', function () {
            var player = \$(this).children().attr('id');
            \$('.player-status-container').css('visibility', 'visible');
            \$('.player-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('.player-status-div').css('visibility', 'hidden');
            });
        });

        \$('.country-fa-times').on('click', function () {
            var team = \$(this).attr('id');
            \$('.team-status-container').css('visibility', 'visible');
            \$('.team-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#no').on('click', function () {
                \$('.team-status-container').css('visibility', 'hidden');
                \$('.team-status-div').css('visibility', 'hidden');
            });
            \$('#yes').on('click', function () {
                \$.ajax({
                    method: \"POST\",
                    data: {\"division\" : {{ division.Id }} },
                    url: \" app.php/superAdmin/deleteTeam/\" + team,
                })
                    .done(function( msg ) {
                        window.location.href = \"/superAdmin/teams/\" + {{ division.Id }};

                    });
            });
        });

        \$('.phone').inputmask('Regex', {
            regex: \"08([7-9])([0-9]{7})+\",
            alias: \"string\",
            clearIncomplete: true
        });

        \$('#name').inputmask(\"Regex\", {
            regex:\"[A-Z][a-z 1-9]+\" ,
            alias: \"string\",
            clearIncomplete: true
        });


        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var phone = \$('.phone').val();

            var namesChecker = false;
            var  phoneCheker = false;


            if(name.length > 5  ){
                namesChecker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Името трябва да е по-дълgо от 5 символа\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }


            if (phone.length == 10){
                phoneCheker = true;
            }else {
                console.log(phone);
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Телефона трябва да е с дължина от 10 цифри\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }
            if (phoneCheker == true && namesChecker == true){
                \$.ajax({
                    method: \"POST\",
                    data: {\"name\": name, \"phone\": phone, \"division\" : {{ division.Id }} },
                    url: \"{{ path('superAdminCreateTeam') }}\",
                })
                    .done(function( msg ) {
                        if(msg == 2){
                            window.location.href = \"app.php/superAdmin/teams/\" + {{ division.Id }};
                        }else if (msg == 0){
                            iziToast.warning({
                                title: 'Грешни данни',
                                message: \"Вече има такъв телефон в базата данни\",
                                overlay: true,
                                zindex: 999,
                                position: 'center',
                                timeout: 2000,
                            });
                        }
                        console.log(msg);
                    });
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Всички полета трябва да са попълнени\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });

            }
        });

        \$(\"#create_match\").on('click', function () {
            var homeTeam  = \$('#homeTeam').val();
            var awayTeam = \$('#awayTeam').val();
            var date = \$('#date').val();
            var time = \$('#time').val();
            \$.ajax({
                method: \"POST\",
                data: {\"homeTeam\": homeTeam, \"awayTeam\": awayTeam, \"date\" : date, \"time\" : time },
                url: \"{{ path('createMatch') }}\",
            })
                .done(function( msg ) {
                    console.log(msg);
                });
        });



        \$('.adding-match').on('click', function () {
            \$('.player-status-container').css('visibility', 'visible')
                .css('height', '100vh')
                .css('top', '0%')
                .css('transition', 'ease 0.7s');
            \$('.player-status-div')
                .css('visibility', 'visible')
                .css('transition', ' ease 0.6s')
                .css('top', '50%')
                .css('transform', ' translate(-50%, -50%)');

            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-div')
                    .css('top', '-50%')
                    .css('transform', ' translate(-50%, -100%)')
                    .css('transition', 'ease 1s');

                \$('.player-status-container').css('visibility', 'hidden')
                    .css('height', '0vh')
                    .css('top', '-50%')
                    .css('transition', 'ease 1.1s');
            });
        });

        \$('.adding-match').on('click', function () {
            \$('.player-status-container').css('visibility', 'visible')
                .css('height', '100vh')
                .css('top', '0%')
                .css('transition', 'ease 0.7s');
            \$('.player-status-div')
                .css('visibility', 'visible')
                .css('transition', ' ease 0.6s')
                .css('top', '50%')
                .css('transform', ' translate(-50%, -50%)');

            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-div')
                    .css('top', '-50%')
                    .css('transform', ' translate(-50%, -100%)')
                    .css('transition', 'ease 1s');

                \$('.player-status-container').css('visibility', 'hidden')
                    .css('height', '0vh')
                    .css('top', '-50%')
                    .css('transition', 'ease 1.1s');
            });
        });


    </script>
{% endblock %}", "superAdmin/teams.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\superAdmin\\teams.html.twig");
    }
}
