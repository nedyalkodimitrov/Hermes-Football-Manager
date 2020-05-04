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

/* coaches/playerStat.html.twig */
class __TwigTemplate_1345ec0cad09e66f8dd0fefc0f2fca1086126e66b87dc1b9c0c73f2a844351f3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "coaches/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/playerStat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/playerStat.html.twig"));

        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/playerStat.html.twig", 1);
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
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/playerVisitCard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coach/playerStatPageStyle.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 9
        echo "    <a class=\"nav-item nav-link  ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coacheViewAction");
        echo "\">Начална страница</a>
    <a class=\"nav-item nav-link current-item ml-2\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingView");
        echo "\">Тренировки</a>
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
        echo "
    <div class=\"container col-12 row mt-3\">
        <div class=\"col-10 mx-auto p-0 m-0\">
           <div class=\"cover-photo-container\">
               <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 17, $this->source); })()), "Team", [], "any", false, false, false, 17), "CoverImage", [], "any", false, false, false, 17))), "html", null, true);
        echo "\" alt=\"\" class=\"cover-photo\">
           </div>
            <div class=\"profile-image-container\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 20, $this->source); })()))), "html", null, true);
        echo "\" alt=\"\" class=\"profile-image m-2\">
                <div class=\"name-holder\">
                    <h4 class=\"text-center\"> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 22, $this->source); })()), "User", [], "any", false, false, false, 22), "Name", [], "any", false, false, false, 22), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 22, $this->source); })()), "User", [], "any", false, false, false, 22), "FName", [], "any", false, false, false, 22), "html", null, true);
        echo "</h4>
                    <h6 class=\"text-center\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 23, $this->source); })()), "Position", [], "any", false, false, false, 23), "Name", [], "any", false, false, false, 23), "html", null, true);
        echo "</h6>
                </div>
            </div>

            <div class=\"container col-12 m-0 justify-content-between p-0 row\">
             <div class=\"col-5 m-0 p-0\">
                 <div class=\"col-11 m-0  mt-2 information-holder p-4 \">
                     <div class=\"col-12 m-0 row p-0   text-center \"><h4 class=\"text-center my-auto mx-auto\">Информация за играча</h4></div>
                     <hr class=\"col-8 mx-auto\">
                     <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\">Килограми: ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 32, $this->source); })()), "Weight", [], "any", false, false, false, 32), "html", null, true);
        echo "</h5></div>
                     <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\">Височина: ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 33, $this->source); })()), "Height", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5></div>
                     <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\"> Град на раждане: ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 34, $this->source); })()), "User", [], "any", false, false, false, 34), "City", [], "any", false, false, false, 34), "html", null, true);
        echo "</h5></div>
                     <div class=\"col-12 row p-0 mt-3 ml-1\">
                         <h5 class=\"my-auto\">Националност: ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 36, $this->source); })()), "User", [], "any", false, false, false, 36), "City", [], "any", false, false, false, 36), "Country", [], "any", false, false, false, 36), "Name", [], "any", false, false, false, 36), "html", null, true);
        echo "</h5>
                         <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 37, $this->source); })()), "User", [], "any", false, false, false, 37), "City", [], "any", false, false, false, 37), "Country", [], "any", false, false, false, 37), "Image", [], "any", false, false, false, 37))), "html", null, true);
        echo "\" alt=\"\">
                     </div>
                     <div class=\"col-12 row p-0 mt-3  ml-1\"><h5  class=\"my-auto\">Телефонене номер: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 39, $this->source); })()), "User", [], "any", false, false, false, 39), "Phone", [], "any", false, false, false, 39), "html", null, true);
        echo "</h5></div>
                     <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\">Емейл: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 40, $this->source); })()), "User", [], "any", false, false, false, 40), "Email", [], "any", false, false, false, 40), "html", null, true);
        echo "</h5></div>
                 </div>
             </div>
                <div class=\"col-7 m-0 mt-2  information-holder p-4 \">
                    <div class=\"season-player-stats col-12 m-0 p-0  my-ayto  text-center row\">
                        <h4 class=\"col-12 text-center\">Статистика за сезона</h4>
                        <div class=\"col-lg-4 my-auto col-md-12 col-sm-12 text-center  align-content-center chart-container \">
                            <div class=\"information-container p-0 m-0 \">
                                <p>14</p>
                            </div>
                            <div class=\"fat-percent-div\">
                                <h3>
                                    <span class=\"label green badge fat-percent-badge\">Вкарани голове</span>
                                </h3>
                            </div>
                        </div>
                        <div class=\"col-lg-4 my-auto col-sm-12 col-md-12 mt-2 text-center chart-container\">
                            <div class=\"information-container\">
                                <p>5</p>
                            </div>
                            <h3>
                                <span class=\"label green badge \">Асистенции</span>
                            </h3>
                        </div>
                        <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center  chart-container\">
                            <div class=\"information-container\">
                                <p>25</p>
                            </div>
                            <div class=\"fat-percent-div\">
                                <h3>
                                    <span class=\"green badge fat-percent-badge  label\">Изиграни мача</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-10 mt-4 row container stat-container mx-auto m-0 p-4 \">
            <h3 class=\"col-12  mt-3 text-center\">Статиситики от треньора</h3>
            <div class=\"col-12 mt-3 pt-3\">
                <div class=\"col-12 justify-content-around summarizing-results\">
              <span class=\"min-chart status-from-coach-chart\" id=\"chart-sales\" data-percent=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 82, $this->source); })()), "stats", [], "any", false, false, false, 82), "statusFromCoaches", [], "any", false, false, false, 82), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
              </span>
                    <h5 class=\"text-center mt-2\">Обобщен резултат</h5>
                </div>
            </div>
            <div class=\"container col-12   mx-auto p-0 m-0 row mt-5\">
                <div class=\"col-12 m-0 p-0 row justify-content-around\">
                    <div class=\"col-2 p-0 \">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 91
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 91, $this->source); })()), "stats", [], "any", false, false, false, 91), "pace", [], "any", false, false, false, 91) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Скорост</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 97
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 97, $this->source); })()), "stats", [], "any", false, false, false, 97), "technique", [], "any", false, false, false, 97) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Техника</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 103
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 103, $this->source); })()), "stats", [], "any", false, false, false, 103), "shot", [], "any", false, false, false, 103) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Удар</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 109
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 109, $this->source); })()), "stats", [], "any", false, false, false, 109), "dribble", [], "any", false, false, false, 109) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Дрибъл</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 115
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 115, $this->source); })()), "stats", [], "any", false, false, false, 115), "tacticks", [], "any", false, false, false, 115) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Тактика</h5>
                    </div>
                </div>
            </div>
            <div class=\"container col-12 mx-auto p-0 m-0 row mt-5\">

                <div class=\"col-12 m-0 p-0 row justify-content-around\">
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 126, $this->source); })()), "stats", [], "any", false, false, false, 126), "pass", [], "any", false, false, false, 126), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Пас</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 132
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 132, $this->source); })()), "stats", [], "any", false, false, false, 132), "longPass", [], "any", false, false, false, 132) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Дълъг пас</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 138
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 138, $this->source); })()), "stats", [], "any", false, false, false, 138), "relax", [], "any", false, false, false, 138) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Спокойствие на терена</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 144
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 144, $this->source); })()), "stats", [], "any", false, false, false, 144), "willpower", [], "any", false, false, false, 144) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Воля</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"";
        // line 150
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 150, $this->source); })()), "stats", [], "any", false, false, false, 150), "perspective", [], "any", false, false, false, 150) * 10), "html", null, true);
        echo "\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Перспектива</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr class=\"col-8 mx-auto\">


    <div class=\" justify-content-center row mt-4 mb-5\">
        <div class=\"col-12 justify-content-center text-center row \">
            <div class=\"text-center information-div row\">
                <div class=\"col-12 row player-visit-container\">
                    <div class=\"col-lg-4 col-sm-12 col-12 p-1 \">
                        ";
        // line 168
        if ((((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 168, $this->source); })()) == "0") || ((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 168, $this->source); })()) == null))) {
            // line 169
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer  m-2\">
                        ";
        } else {
            // line 171
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 171, $this->source); })()))), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer m-2\">
                        ";
        }
        // line 173
        echo "                        <h4> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 173, $this->source); })()), "User", [], "any", false, false, false, 173), "Name", [], "any", false, false, false, 173), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 173, $this->source); })()), "User", [], "any", false, false, false, 173), "FName", [], "any", false, false, false, 173), "html", null, true);
        echo "</h4>
                        <h6>";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 174, $this->source); })()), "Position", [], "any", false, false, false, 174), "Name", [], "any", false, false, false, 174), "html", null, true);
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
        // line 183
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 183, $this->source); })()), "Team", [], "any", false, false, false, 183) == null)) {
            // line 184
            echo "                                        <h5>Отбор: Няма</h5>
                                    ";
        } else {
            // line 186
            echo "                                        <h5>Отбор: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 186, $this->source); })()), "Team", [], "any", false, false, false, 186), "Name", [], "any", false, false, false, 186), "html", null, true);
            echo "</h5>
                                    ";
        }
        // line 188
        echo "                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Отбелязани голове: 0</h5>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    ";
        // line 195
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 195, $this->source); })()), "team", [], "any", false, false, false, 195), "Division", [], "any", false, false, false, 195) == null)) {
            // line 196
            echo "                                        <h5>Първенство: Няма</h5>
                                    ";
        } else {
            // line 198
            echo "                                        <h5>Първенство: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 198, $this->source); })()), "team", [], "any", false, false, false, 198), "Division", [], "any", false, false, false, 198), "Name", [], "any", false, false, false, 198), "html", null, true);
            echo "</h5>
                                    ";
        }
        // line 200
        echo "                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Асистенции: 0</h5>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    ";
        // line 207
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 207, $this->source); })()), "User", [], "any", false, false, false, 207), "City", [], "any", false, false, false, 207) == null)) {
            // line 208
            echo "                                        <h5>Националност: Не е зададен</h5>
                                    ";
        } else {
            // line 210
            echo "                                        <h5>Националност: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 210, $this->source); })()), "User", [], "any", false, false, false, 210), "City", [], "any", false, false, false, 210), "Country", [], "any", false, false, false, 210), "Name", [], "any", false, false, false, 210), "html", null, true);
            echo "</h5>
                                    ";
        }
        // line 212
        echo "                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Изиграни мачове: 0</h5>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    ";
        // line 219
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 219, $this->source); })()), "BirthDay", [], "any", false, false, false, 219) == null)) {
            // line 220
            echo "                                        <h5>Ден на раждане: Не е зададен</h5>
                                    ";
        } else {
            // line 222
            echo "                                        <h5>Ден на раждане: ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 222, $this->source); })()), "BirthDay", [], "any", false, false, false, 222), "d.m.Y")), "html", null, true);
            echo "</h5>
                                    ";
        }
        // line 224
        echo "
                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Отбелязани голове: 0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 player-visit-container mt-3\">
                    <div class=\"col-12 justify-content-center text-center row   \">
                        <h4 class=\"col-12 text-center\">Статистически данни</h4>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 237
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 237, $this->source); })()), "Weight", [], "any", false, false, false, 237) == null)) {
            // line 238
            echo "                                <h5>Килограми: 0кг</h5>
                            ";
        } else {
            // line 240
            echo "                                <h5>Килограми: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 240, $this->source); })()), "Weight", [], "any", false, false, false, 240), "html", null, true);
            echo "кг</h5>
                            ";
        }
        // line 242
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            ";
        // line 244
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 244, $this->source); })()), "Height", [], "any", false, false, false, 244) == null)) {
            // line 245
            echo "                                <h5>Височина: 0см</h5>
                            ";
        } else {
            // line 247
            echo "                                <h5>Височина: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 247, $this->source); })()), "Height", [], "any", false, false, false, 247), "html", null, true);
            echo "см</h5>
                            ";
        }
        // line 249
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0  mt-4  myBorderPlayerStat-left text-center\">
                            ";
        // line 253
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 253, $this->source); })()), "Pace", [], "any", false, false, false, 253) == null)) {
            // line 254
            echo "                                <h5>Скорост: 0 km/h</h5>
                            ";
        } else {
            // line 256
            echo "                                <h5>Скорост: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 256, $this->source); })()), "Pace", [], "any", false, false, false, 256), "html", null, true);
            echo " km/h</h5>
                            ";
        }
        // line 258
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 260
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 260, $this->source); })()), "LongPass", [], "any", false, false, false, 260) == null)) {
            // line 261
            echo "                                <h5>Дълъг пас: 0</h5>
                            ";
        } else {
            // line 263
            echo "                                <h5>Дълъг пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 263, $this->source); })()), "LongPass", [], "any", false, false, false, 263), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 265
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            ";
        // line 269
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 269, $this->source); })()), "Relax", [], "any", false, false, false, 269) == null)) {
            // line 270
            echo "                                <h5>Спокойствие на терена: 0</h5>
                            ";
        } else {
            // line 272
            echo "                                <h5>Спокойствие на терена: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 272, $this->source); })()), "Relax", [], "any", false, false, false, 272), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 274
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            ";
        // line 276
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 276, $this->source); })()), "Fat", [], "any", false, false, false, 276) == null)) {
            // line 277
            echo "                                <h5>Подкожни мазнини: 0%</h5>
                            ";
        } else {
            // line 279
            echo "                                <h5>Подкожни мазнини: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 279, $this->source); })()), "Fat", [], "any", false, false, false, 279), "html", null, true);
            echo "%</h5>
                            ";
        }
        // line 281
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 285
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 285, $this->source); })()), "Work", [], "any", false, false, false, 285) == null)) {
            // line 286
            echo "                                <h5>Усърдна работа: 0</h5>
                            ";
        } else {
            // line 288
            echo "                                <h5>Усърдна работа: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 288, $this->source); })()), "Work", [], "any", false, false, false, 288), "html", null, true);
            echo "</h5>

                            ";
        }
        // line 291
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 293
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 293, $this->source); })()), "Tacticks", [], "any", false, false, false, 293) == null)) {
            // line 294
            echo "                                <h5>Тактика: 0</h5>
                            ";
        } else {
            // line 296
            echo "                                <h5>Тактика: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 296, $this->source); })()), "Tacticks", [], "any", false, false, false, 296), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 298
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 302
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 302, $this->source); })()), "WillPower", [], "any", false, false, false, 302) == null)) {
            // line 303
            echo "                                <h5>Воля: 0</h5>
                            ";
        } else {
            // line 305
            echo "                                <h5>Воля:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 305, $this->source); })()), "WillPower", [], "any", false, false, false, 305), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 307
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 309
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 309, $this->source); })()), "Dribble", [], "any", false, false, false, 309) == null)) {
            // line 310
            echo "                                <h5>Дрибъл: 0</h5>
                            ";
        } else {
            // line 312
            echo "                                <h5>Дрибъл:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 312, $this->source); })()), "Dribble", [], "any", false, false, false, 312), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 314
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 318
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 318, $this->source); })()), "Shot", [], "any", false, false, false, 318) == null)) {
            // line 319
            echo "                                <h5>Удар: 0</h5>
                            ";
        } else {
            // line 321
            echo "                                <h5>Удар:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 321, $this->source); })()), "Shot", [], "any", false, false, false, 321), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 323
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 325
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 325, $this->source); })()), "Technique", [], "any", false, false, false, 325) == null)) {
            // line 326
            echo "                                <h5>Техника: 0</h5>
                            ";
        } else {
            // line 328
            echo "                                <h5>Техника:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 328, $this->source); })()), "Technique", [], "any", false, false, false, 328), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 330
        echo "                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 334
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 334, $this->source); })()), "Pass", [], "any", false, false, false, 334) == null)) {
            // line 335
            echo "                                <h5>Пас: 0</h5>
                            ";
        } else {
            // line 337
            echo "                                <h5>Пас: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 337, $this->source); })()), "Pass", [], "any", false, false, false, 337), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 339
        echo "                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            ";
        // line 341
        if ((twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 341, $this->source); })()), "Perspective", [], "any", false, false, false, 341) == null)) {
            // line 342
            echo "                                <h5>Перспектива: 0</h5>
                            ";
        } else {
            // line 344
            echo "                                <h5>Перспектива:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 344, $this->source); })()), "Perspective", [], "any", false, false, false, 344), "html", null, true);
            echo "</h5>
                            ";
        }
        // line 346
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"container col-12 \">
        <div class=\"row   justify-content-center  \">
            <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                <h2 class=\"d-inline-block\">Дълъг пас: <span id=\"stat-1\"></span> </h2>
                <div class=\"slidecontainer \">
                  <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 357
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 357, $this->source); })()), "longPass", [], "any", false, false, false, 357), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-1\">
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                <h2 class=\"d-inline-block\">Спокойствие на терена <span id=\"stat-2\"></span> </h2>
                <div class=\"slidecontainer \">
                  <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 363
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 363, $this->source); })()), "Relax", [], "any", false, false, false, 363), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-2\">
                </div>
            </div>
        </div>
    </div>
        <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5  text-center\">
                    <h2 class=\"d-inline-block\">Усърдна работа: <span id=\"stat-3\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 373
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 373, $this->source); })()), "Work", [], "any", false, false, false, 373), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-3\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Тактика: <span id=\"stat-4\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 379
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 379, $this->source); })()), "Tacticks", [], "any", false, false, false, 379), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-4\">
                    </div>
                </div>
            </div>
        </div>
        <div id=\"container col-12\">
            <div class=\"row  justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Воля: <span id=\"stat-5\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 389
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 389, $this->source); })()), "willPower", [], "any", false, false, false, 389), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-5\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Дрибъл: <span id=\"stat-6\"></span> </h2>
                    <div class=\"slidecontainer \">
                        <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 396
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 396, $this->source); })()), "dribble", [], "any", false, false, false, 396), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-6\">
                    </div>
                </div>

            </div>
        </div>
    <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Удар: <span id=\"stat-7\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 407
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 407, $this->source); })()), "shot", [], "any", false, false, false, 407), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-7\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Техника: <span id=\"stat-8\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 413
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 413, $this->source); })()), "Technique", [], "any", false, false, false, 413), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-8\">
                    </div>
                </div>
            </div>
        </div>
        <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                    <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                        <h2 class=\"d-inline-block\">Перспектива: <span id=\"stat-9\"></span> </h2>
                        <div class=\"slidecontainer \">
                          <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 423
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 423, $this->source); })()), "perspective", [], "any", false, false, false, 423), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-9\">
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                        <h2 class=\"d-inline-block\">Пас: <span id=\"stat-10\"></span> </h2>
                        <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"";
        // line 429
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 429, $this->source); })()), "pass", [], "any", false, false, false, 429), "html", null, true);
        echo "\" class=\"slider\" id=\"myRange-10\">
                    </div>
                </div>
            </div>

    <div class=\"col-12 mt-5 text-center justify-content-center row\">
        <button class=\"btn btn-green col-2\"><i class=\"fas fa-check\"></i></button>
    </div>

    <script>
        var slider = document.getElementById(\"myRange-1\");
        var output = document.getElementById(\"stat-1\");
        var slider2 = document.getElementById(\"myRange-2\");
        var output2 = document.getElementById(\"stat-2\");
        var slider3 = document.getElementById(\"myRange-3\");
        var output3 = document.getElementById(\"stat-3\");
        var slider4 = document.getElementById(\"myRange-4\");
        var output4 = document.getElementById(\"stat-4\");
        var slider5 = document.getElementById(\"myRange-5\");
        var output5 = document.getElementById(\"stat-5\");
        var slider6 = document.getElementById(\"myRange-6\");
        var output6 = document.getElementById(\"stat-6\");
        var slider7 = document.getElementById(\"myRange-7\");
        var output7 = document.getElementById(\"stat-7\");
        var slider8 = document.getElementById(\"myRange-8\");
        var output8 = document.getElementById(\"stat-8\");
        var slider9 = document.getElementById(\"myRange-9\");
        var output9 = document.getElementById(\"stat-9\");
        var slider10 = document.getElementById(\"myRange-10\");
        var output10 = document.getElementById(\"stat-10\");

        output.innerHTML = slider.value;
        output2.innerHTML = slider2.value;
        output3.innerHTML = slider3.value;
        output4.innerHTML = slider4.value;
        output5.innerHTML = slider5.value;
        output6.innerHTML = slider6.value;
        output7.innerHTML = slider7.value;
        output8.innerHTML = slider8.value;
        output9.innerHTML = slider9.value;
        output10.innerHTML = slider10.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
        slider2.oninput = function() {
            output2.innerHTML = this.value;
        }
        slider3.oninput = function() {
            output3.innerHTML = this.value;
        }
        slider4.oninput = function() {
            output4.innerHTML = this.value;
        }
        slider5.oninput = function() {
            output5.innerHTML = this.value;
        }

        slider6.oninput = function() {
            output6.innerHTML = this.value;
        }
        slider7.oninput = function() {
            output7.innerHTML = this.value;
        }
        slider8.oninput = function() {
            output8.innerHTML = this.value;
        }
        slider9.oninput = function() {
            output9.innerHTML = this.value;
        }
        slider10.oninput = function() {
            output10.innerHTML = this.value;
        }

        var all = parseInt(slider.value) + parseInt(slider2.value) +parseInt(slider3.value) + parseInt(slider4.value)
            + parseInt(slider5.value) + parseInt(slider6.value) + parseInt(slider7.value) + parseInt(slider8.value)
            +parseInt(slider9.value) + parseInt(slider10.value);

        \$('.btn-green').on(\"click\", function () {
            if (\$(\"#fat\").val() > 40 || \$(\"#pace\").val() > 47 || \$(\"#weight\").val() > 120 || 0 || \$(\"#height\").val()){

                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Подкожните мазнини трябва да са под 40%, скороста под 47 km/h, килограмите под 120кг, а височината под 210см\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 8000,
                });

            }else
            {
                \$.ajax({

                    method: \"POST\",
                    data: {
                        \"longPass\": slider.value, \"relax\": slider2.value,
                        \"workHard\": slider3.value, \"tacktick\": slider4.value,
                        \"willPower\": slider5.value, \"dribble\": slider6.value,
                        \"shot\": slider7.value, \"technique\": slider8.value, \"pass\": slider9.value,
                        \"perspective\": slider10.value, \"all\": all * 10,
                        \"fat\": \$(\"#fat\").val(), \"pace\": \$(\"#pace\").val(),
                        \"weight\": \$(\"#weight\").val(), \"height\": \$(\"#height\").val(),

                    },
                    url: \"";
        // line 534
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerStats", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 534, $this->source); })()), "Id", [], "any", false, false, false, 534)]), "html", null, true);
        echo "\",
                })
                    .done(function (msg) {
                        window.location.href = \"/coache/training/\";
                        console.log(msg);
                        console.log(slider.value);

                    });
            }
        });



    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coaches/playerStat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  930 => 534,  822 => 429,  813 => 423,  800 => 413,  791 => 407,  777 => 396,  767 => 389,  754 => 379,  745 => 373,  732 => 363,  723 => 357,  710 => 346,  704 => 344,  700 => 342,  698 => 341,  694 => 339,  688 => 337,  684 => 335,  682 => 334,  676 => 330,  670 => 328,  666 => 326,  664 => 325,  660 => 323,  654 => 321,  650 => 319,  648 => 318,  642 => 314,  636 => 312,  632 => 310,  630 => 309,  626 => 307,  620 => 305,  616 => 303,  614 => 302,  608 => 298,  602 => 296,  598 => 294,  596 => 293,  592 => 291,  585 => 288,  581 => 286,  579 => 285,  573 => 281,  567 => 279,  563 => 277,  561 => 276,  557 => 274,  551 => 272,  547 => 270,  545 => 269,  539 => 265,  533 => 263,  529 => 261,  527 => 260,  523 => 258,  517 => 256,  513 => 254,  511 => 253,  505 => 249,  499 => 247,  495 => 245,  493 => 244,  489 => 242,  483 => 240,  479 => 238,  477 => 237,  462 => 224,  456 => 222,  452 => 220,  450 => 219,  441 => 212,  435 => 210,  431 => 208,  429 => 207,  420 => 200,  414 => 198,  410 => 196,  408 => 195,  399 => 188,  393 => 186,  389 => 184,  387 => 183,  375 => 174,  368 => 173,  362 => 171,  356 => 169,  354 => 168,  333 => 150,  324 => 144,  315 => 138,  306 => 132,  297 => 126,  283 => 115,  274 => 109,  265 => 103,  256 => 97,  247 => 91,  235 => 82,  190 => 40,  186 => 39,  181 => 37,  177 => 36,  172 => 34,  168 => 33,  164 => 32,  152 => 23,  146 => 22,  141 => 20,  135 => 17,  129 => 13,  119 => 12,  107 => 10,  102 => 9,  92 => 8,  79 => 5,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coaches/base.html.twig' %}
{% block style %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/playerVisitCard.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/coach/playerStatPageStyle.css\") }}\">

{% endblock %}
{% block nav %}
    <a class=\"nav-item nav-link  ml-2\" href=\"{{ path('coacheViewAction') }}\">Начална страница</a>
    <a class=\"nav-item nav-link current-item ml-2\" href=\"{{ path(\"trainingView\") }}\">Тренировки</a>
{% endblock %}
{% block body %}

    <div class=\"container col-12 row mt-3\">
        <div class=\"col-10 mx-auto p-0 m-0\">
           <div class=\"cover-photo-container\">
               <img src=\"{{ asset(\"images/\"~player.Team.CoverImage) }}\" alt=\"\" class=\"cover-photo\">
           </div>
            <div class=\"profile-image-container\">
                <img src=\"{{asset(\"images/\" ~ image)}}\" alt=\"\" class=\"profile-image m-2\">
                <div class=\"name-holder\">
                    <h4 class=\"text-center\"> {{ player.User.Name }} {{ player.User.FName }}</h4>
                    <h6 class=\"text-center\">{{ player.Position.Name }}</h6>
                </div>
            </div>

            <div class=\"container col-12 m-0 justify-content-between p-0 row\">
             <div class=\"col-5 m-0 p-0\">
                 <div class=\"col-11 m-0  mt-2 information-holder p-4 \">
                     <div class=\"col-12 m-0 row p-0   text-center \"><h4 class=\"text-center my-auto mx-auto\">Информация за играча</h4></div>
                     <hr class=\"col-8 mx-auto\">
                     <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\">Килограми: {{ playerStats.Weight }}</h5></div>
                     <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\">Височина: {{ playerStats.Height }}</h5></div>
                     <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\"> Град на раждане: {{ player.User.City }}</h5></div>
                     <div class=\"col-12 row p-0 mt-3 ml-1\">
                         <h5 class=\"my-auto\">Националност: {{ player.User.City.Country.Name }}</h5>
                         <img src=\"{{ asset(\"images/\"~player.User.City.Country.Image ) }}\" alt=\"\">
                     </div>
                     <div class=\"col-12 row p-0 mt-3  ml-1\"><h5  class=\"my-auto\">Телефонене номер: {{ player.User.Phone }}</h5></div>
                     <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\">Емейл: {{ player.User.Email }}</h5></div>
                 </div>
             </div>
                <div class=\"col-7 m-0 mt-2  information-holder p-4 \">
                    <div class=\"season-player-stats col-12 m-0 p-0  my-ayto  text-center row\">
                        <h4 class=\"col-12 text-center\">Статистика за сезона</h4>
                        <div class=\"col-lg-4 my-auto col-md-12 col-sm-12 text-center  align-content-center chart-container \">
                            <div class=\"information-container p-0 m-0 \">
                                <p>14</p>
                            </div>
                            <div class=\"fat-percent-div\">
                                <h3>
                                    <span class=\"label green badge fat-percent-badge\">Вкарани голове</span>
                                </h3>
                            </div>
                        </div>
                        <div class=\"col-lg-4 my-auto col-sm-12 col-md-12 mt-2 text-center chart-container\">
                            <div class=\"information-container\">
                                <p>5</p>
                            </div>
                            <h3>
                                <span class=\"label green badge \">Асистенции</span>
                            </h3>
                        </div>
                        <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center  chart-container\">
                            <div class=\"information-container\">
                                <p>25</p>
                            </div>
                            <div class=\"fat-percent-div\">
                                <h3>
                                    <span class=\"green badge fat-percent-badge  label\">Изиграни мача</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-10 mt-4 row container stat-container mx-auto m-0 p-4 \">
            <h3 class=\"col-12  mt-3 text-center\">Статиситики от треньора</h3>
            <div class=\"col-12 mt-3 pt-3\">
                <div class=\"col-12 justify-content-around summarizing-results\">
              <span class=\"min-chart status-from-coach-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.statusFromCoaches  }}\">
                        <span class=\"chart-text percent\"></span>
              </span>
                    <h5 class=\"text-center mt-2\">Обобщен резултат</h5>
                </div>
            </div>
            <div class=\"container col-12   mx-auto p-0 m-0 row mt-5\">
                <div class=\"col-12 m-0 p-0 row justify-content-around\">
                    <div class=\"col-2 p-0 \">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.pace *10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Скорост</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.technique * 10 }}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Техника</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.shot * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Удар</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.dribble * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Дрибъл</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.tacticks * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Тактика</h5>
                    </div>
                </div>
            </div>
            <div class=\"container col-12 mx-auto p-0 m-0 row mt-5\">

                <div class=\"col-12 m-0 p-0 row justify-content-around\">
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.pass }}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Пас</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.longPass * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Дълъг пас</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.relax * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Спокойствие на терена</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.willpower * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Воля</h5>
                    </div>
                    <div class=\"col-2 p-0\">
                  <span class=\"min-chart\" id=\"chart-sales\" data-percent=\"{{ player.stats.perspective * 10}}\">
                        <span class=\"chart-text percent\"></span>
                  </span>
                        <h5 class=\"text-center mt-2\">Перспектива</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr class=\"col-8 mx-auto\">


    <div class=\" justify-content-center row mt-4 mb-5\">
        <div class=\"col-12 justify-content-center text-center row \">
            <div class=\"text-center information-div row\">
                <div class=\"col-12 row player-visit-container\">
                    <div class=\"col-lg-4 col-sm-12 col-12 p-1 \">
                        {% if image == '0' or image == null  %}
                            <img src=\"{{asset(\"images/user1.png\")}}\" alt=\"\" class=\"profile-pic-changer  m-2\">
                        {% else %}
                            <img src=\"{{asset(\"images/\" ~ image)}}\" alt=\"\" class=\"profile-pic-changer m-2\">
                        {% endif %}
                        <h4> {{ player.User.Name }} {{ player.User.FName }}</h4>
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
                                    {% if player.team.Division == null%}
                                        <h5>Първенство: Няма</h5>
                                    {% else %}
                                        <h5>Първенство: {{ player.team.Division.Name }}</h5>
                                    {% endif %}
                                </div>
                                <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                    <h5>Асистенции: 0</h5>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                    {% if player.User.City == null%}
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
                <div class=\"col-12 player-visit-container mt-3\">
                    <div class=\"col-12 justify-content-center text-center row   \">
                        <h4 class=\"col-12 text-center\">Статистически данни</h4>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Weight == null%}
                                <h5>Килограми: 0кг</h5>
                            {% else %}
                                <h5>Килограми: {{ playerStats.Weight }}кг</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3  ml-lg-4 ml-md-4 ml-sm-0 mt-4   myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Height == null%}
                                <h5>Височина: 0см</h5>
                            {% else %}
                                <h5>Височина: {{ playerStats.Height }}см</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0  mt-4  myBorderPlayerStat-left text-center\">
                            {% if playerStats.Pace == null%}
                                <h5>Скорост: 0 km/h</h5>
                            {% else %}
                                <h5>Скорост: {{ playerStats.Pace }} km/h</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            {% if playerStats.LongPass == null%}
                                <h5>Дълъг пас: 0</h5>
                            {% else %}
                                <h5>Дълъг пас: {{ playerStats.LongPass}}</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-3 mr-lg-4 mr-md-4 mr-sm-0 mt-4  myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Relax == null%}
                                <h5>Спокойствие на терена: 0</h5>
                            {% else %}
                                <h5>Спокойствие на терена: {{ playerStats.Relax}}</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-3 ml-lg-4 ml-md-4 ml-sm-0 mt-4    myBorderPlayerStat-left text-center\">
                            {% if playerStats.Fat == null%}
                                <h5>Подкожни мазнини: 0%</h5>
                            {% else %}
                                <h5>Подкожни мазнини: {{ playerStats.Fat }}%</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Work == null%}
                                <h5>Усърдна работа: 0</h5>
                            {% else %}
                                <h5>Усърдна работа: {{ playerStats.Work}}</h5>

                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Tacticks == null%}
                                <h5>Тактика: 0</h5>
                            {% else %}
                                <h5>Тактика: {{ playerStats.Tacticks }}</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.WillPower == null%}
                                <h5>Воля: 0</h5>
                            {% else %}
                                <h5>Воля:{{ playerStats.WillPower}}</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Dribble == null%}
                                <h5>Дрибъл: 0</h5>
                            {% else %}
                                <h5>Дрибъл:{{ playerStats.Dribble }}</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Shot == null%}
                                <h5>Удар: 0</h5>
                            {% else %}
                                <h5>Удар:{{ playerStats.Shot }}</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Technique == null%}
                                <h5>Техника: 0</h5>
                            {% else %}
                                <h5>Техника:{{ playerStats.Technique }}</h5>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-12 justify-content-center text-center row\">
                        <div class=\"col-lg-3 col-sm-4 col-md-4 mr-lg-4 mr-md-4 mr-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Pass == null%}
                                <h5>Пас: 0</h5>
                            {% else %}
                                <h5>Пас: {{ playerStats.Pass }}</h5>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-3 col-sm-4 col-md-4 ml-lg-4 ml-md-4 ml-sm-0 mt-4 myBorderPlayerStat-left  text-center\">
                            {% if playerStats.Perspective == null%}
                                <h5>Перспектива: 0</h5>
                            {% else %}
                                <h5>Перспектива:{{ playerStats.Perspective}}</h5>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"container col-12 \">
        <div class=\"row   justify-content-center  \">
            <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                <h2 class=\"d-inline-block\">Дълъг пас: <span id=\"stat-1\"></span> </h2>
                <div class=\"slidecontainer \">
                  <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.longPass }}\" class=\"slider\" id=\"myRange-1\">
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                <h2 class=\"d-inline-block\">Спокойствие на терена <span id=\"stat-2\"></span> </h2>
                <div class=\"slidecontainer \">
                  <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.Relax }}\" class=\"slider\" id=\"myRange-2\">
                </div>
            </div>
        </div>
    </div>
        <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5  text-center\">
                    <h2 class=\"d-inline-block\">Усърдна работа: <span id=\"stat-3\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.Work }}\" class=\"slider\" id=\"myRange-3\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Тактика: <span id=\"stat-4\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.Tacticks }}\" class=\"slider\" id=\"myRange-4\">
                    </div>
                </div>
            </div>
        </div>
        <div id=\"container col-12\">
            <div class=\"row  justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Воля: <span id=\"stat-5\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.willPower }}\" class=\"slider\" id=\"myRange-5\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Дрибъл: <span id=\"stat-6\"></span> </h2>
                    <div class=\"slidecontainer \">
                        <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.dribble }}\" class=\"slider\" id=\"myRange-6\">
                    </div>
                </div>

            </div>
        </div>
    <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Удар: <span id=\"stat-7\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.shot }}\" class=\"slider\" id=\"myRange-7\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                    <h2 class=\"d-inline-block\">Техника: <span id=\"stat-8\"></span> </h2>
                    <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.Technique }}\" class=\"slider\" id=\"myRange-8\">
                    </div>
                </div>
            </div>
        </div>
        <div id=\"container col-12\">
            <div class=\"row   justify-content-center\">
                    <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                        <h2 class=\"d-inline-block\">Перспектива: <span id=\"stat-9\"></span> </h2>
                        <div class=\"slidecontainer \">
                          <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.perspective }}\" class=\"slider\" id=\"myRange-9\">
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-4 col-md-3 mt-5 text-center\">
                        <h2 class=\"d-inline-block\">Пас: <span id=\"stat-10\"></span> </h2>
                        <div class=\"slidecontainer \">
                      <input type=\"range\" min=\"0\" max=\"10\" value=\"{{ playerStats.pass }}\" class=\"slider\" id=\"myRange-10\">
                    </div>
                </div>
            </div>

    <div class=\"col-12 mt-5 text-center justify-content-center row\">
        <button class=\"btn btn-green col-2\"><i class=\"fas fa-check\"></i></button>
    </div>

    <script>
        var slider = document.getElementById(\"myRange-1\");
        var output = document.getElementById(\"stat-1\");
        var slider2 = document.getElementById(\"myRange-2\");
        var output2 = document.getElementById(\"stat-2\");
        var slider3 = document.getElementById(\"myRange-3\");
        var output3 = document.getElementById(\"stat-3\");
        var slider4 = document.getElementById(\"myRange-4\");
        var output4 = document.getElementById(\"stat-4\");
        var slider5 = document.getElementById(\"myRange-5\");
        var output5 = document.getElementById(\"stat-5\");
        var slider6 = document.getElementById(\"myRange-6\");
        var output6 = document.getElementById(\"stat-6\");
        var slider7 = document.getElementById(\"myRange-7\");
        var output7 = document.getElementById(\"stat-7\");
        var slider8 = document.getElementById(\"myRange-8\");
        var output8 = document.getElementById(\"stat-8\");
        var slider9 = document.getElementById(\"myRange-9\");
        var output9 = document.getElementById(\"stat-9\");
        var slider10 = document.getElementById(\"myRange-10\");
        var output10 = document.getElementById(\"stat-10\");

        output.innerHTML = slider.value;
        output2.innerHTML = slider2.value;
        output3.innerHTML = slider3.value;
        output4.innerHTML = slider4.value;
        output5.innerHTML = slider5.value;
        output6.innerHTML = slider6.value;
        output7.innerHTML = slider7.value;
        output8.innerHTML = slider8.value;
        output9.innerHTML = slider9.value;
        output10.innerHTML = slider10.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
        slider2.oninput = function() {
            output2.innerHTML = this.value;
        }
        slider3.oninput = function() {
            output3.innerHTML = this.value;
        }
        slider4.oninput = function() {
            output4.innerHTML = this.value;
        }
        slider5.oninput = function() {
            output5.innerHTML = this.value;
        }

        slider6.oninput = function() {
            output6.innerHTML = this.value;
        }
        slider7.oninput = function() {
            output7.innerHTML = this.value;
        }
        slider8.oninput = function() {
            output8.innerHTML = this.value;
        }
        slider9.oninput = function() {
            output9.innerHTML = this.value;
        }
        slider10.oninput = function() {
            output10.innerHTML = this.value;
        }

        var all = parseInt(slider.value) + parseInt(slider2.value) +parseInt(slider3.value) + parseInt(slider4.value)
            + parseInt(slider5.value) + parseInt(slider6.value) + parseInt(slider7.value) + parseInt(slider8.value)
            +parseInt(slider9.value) + parseInt(slider10.value);

        \$('.btn-green').on(\"click\", function () {
            if (\$(\"#fat\").val() > 40 || \$(\"#pace\").val() > 47 || \$(\"#weight\").val() > 120 || 0 || \$(\"#height\").val()){

                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Подкожните мазнини трябва да са под 40%, скороста под 47 km/h, килограмите под 120кг, а височината под 210см\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 8000,
                });

            }else
            {
                \$.ajax({

                    method: \"POST\",
                    data: {
                        \"longPass\": slider.value, \"relax\": slider2.value,
                        \"workHard\": slider3.value, \"tacktick\": slider4.value,
                        \"willPower\": slider5.value, \"dribble\": slider6.value,
                        \"shot\": slider7.value, \"technique\": slider8.value, \"pass\": slider9.value,
                        \"perspective\": slider10.value, \"all\": all * 10,
                        \"fat\": \$(\"#fat\").val(), \"pace\": \$(\"#pace\").val(),
                        \"weight\": \$(\"#weight\").val(), \"height\": \$(\"#height\").val(),

                    },
                    url: \"{{ path('playerStats', {id: player.Id}) }}\",
                })
                    .done(function (msg) {
                        window.location.href = \"/coache/training/\";
                        console.log(msg);
                        console.log(slider.value);

                    });
            }
        });



    </script>

{% endblock %}", "coaches/playerStat.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\playerStat.html.twig");
    }
}
