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

/* admin/home.html.twig */
class __TwigTemplate_edfcc50dbff065241ae228531fca8c58e331fd75ff45eb574f31b488757a9d4e extends \Twig\Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/home.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/hiddenFormStyle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"container\">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9  main-charts-container row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-4  mb-5 information-charts-text\">Основни характеристики</h4>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container \">
                        <p>15</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Играча в отбора</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12 col-md-12 mt-2 text-center chart-container\">
                    <div class=\"information-container\">
                        <p>1</p>
                    </div>
                    <h3>
                        <span class=\"label green badge \">Временно класиране</span>
                    </h3>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center  chart-container\">
                    <div class=\"information-container\">
                        <p>EfBet Cup</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"green badge fat-percent-badge  label\">Първенство</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-center div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Играчи  </h2>
                </div>
                ";
        // line 51
        $context["foo"] = 1;
        // line 52
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 53
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 54, $this->source); })()), "html", null, true);
            echo " \">
                            ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 55) == 0)) {
                // line 56
                echo "                                <div class=\"status-green\"></div>
                                ";
            } else {
                // line 58
                echo "                                <div class=\"status-red\"></div>
                            ";
            }
            // line 60
            echo "
                            ";
            // line 61
            if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 61) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 61) == " "))) {
                // line 62
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                echo "\" alt=\"\" class=\"player-img\">
                            ";
            } else {
                // line 64
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 64))), "html", null, true);
                echo "\" alt=\"\" class=\"player-img\">
                            ";
            }
            // line 66
            echo "                            <p class=\"player-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 66), "Name", [], "any", false, false, false, 66), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 66), "FName", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
                            <span><i class=\"fas fa-times country-fa-times players\" id=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "Id", [], "any", false, false, false, 67), "html", null, true);
            echo "\"></i></span>
                        </div>
                    </div>
                    ";
            // line 70
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 70, $this->source); })()) + 1);
            // line 71
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-player justify-content-center text-center\" id=\"player-";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 73, $this->source); })()), "html", null, true);
        echo " \">

                        <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-player-img\">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-center div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2>Треньри  </h2>
                </div>
                ";
        // line 89
        $context["foo"] = 1;
        // line 90
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coache"]) {
            // line 91
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 mt-2 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 92, $this->source); })()), "html", null, true);
            echo " \">


                                ";
            // line 95
            if (((twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 95) == null) || (twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 95) == " "))) {
                // line 96
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1-white2.png"), "html", null, true);
                echo "\" alt=\"\" class=\"player-img\">
                                ";
            } else {
                // line 98
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 98))), "html", null, true);
                echo "\" alt=\"\" class=\"image\">
                                ";
            }
            // line 100
            echo "
                                <p class=\"player-name\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["coache"], "User", [], "any", false, false, false, 101), "Name", [], "any", false, false, false, 101), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["coache"], "User", [], "any", false, false, false, 101), "FName", [], "any", false, false, false, 101), "html", null, true);
            echo " </p>

                            <span><i class=\"fas fa-times country-fa-times coaches\" id=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coache"], "Id", [], "any", false, false, false, 103), "html", null, true);
            echo "\"></i></span>
                        </div>
                    </div>
                    ";
            // line 106
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 106, $this->source); })()) + 1);
            // line 107
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-coache justify-content-center text-center\" id=\"player-";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 109, $this->source); })()), "html", null, true);
        echo " \">

                        <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-player-img\">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"player-status-div col-9  team-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h3 class=\"mb-3 col-12 text-center\">Искате ли да изтриете записа:</h3>
                <button class=\"btn bg-danger\" id=\"no\">Не</button>
                <button class=\"btn btn-green\" id=\"yes\">Да</button>

            </div>
            <span><i class=\"fas fa-times-circle color-black \"></i></span>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  player-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h1 class=\"col-12 text-center\">Добавяне на играчи</h1>
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray name\" type=\"text\"  placeholder=\"Име...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2  bg-gray fName\" type=\"text\" placeholder=\"Фамилия...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"position\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Позиция </option>
                        <option value=\"1\" class=\"bg-gray\">Вратар(GK)</option>
                        <option value=\"2\" class=\"bg-gray\">Нападател(ST)</option>
                        <option value=\"3\" class=\"bg-gray\">Контузен</option>
                    </select>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray phone\" inputmask type=\"text\" placeholder=\"Телефон...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info\">Потвърди</button>

            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>

    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-lg-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"add-coache\" >
            <div class=\"col-lg-8 col-sm-11 row justify-content-center\">
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray coacheName\" type=\"text\"  placeholder=\"Име...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2  bg-gray coacheFName\" type=\"text\" placeholder=\"Фамилия...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"coachePosition\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                        <option value=\"1\" class=\"bg-gray\">Главен(GK)</option>
                        <option value=\"2\" class=\"bg-gray\">Помощник(ST)</option>
                        <option value=\"3\" class=\"bg-gray\">Контузен</option>
                    </select>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray coachePhone\" inputmask type=\"text\" placeholder=\"Телефон...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info-coache\">Потвърди</button>

            </div>


            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>


    <script>
        \$('.add-player').on('click', function () {
            var player = \$(this).children().attr('id');
            \$('.player-status-container').css('visibility', 'visible');
            \$('.player-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('.player-status-div').css('visibility', 'hidden');
            });
        });


        \$('.add-coache').on('click', function () {
            var player = \$(this).children().attr('id');
            \$('.coache-status-container').css('visibility', 'visible');
            \$('.coache-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.coache-status-container').css('visibility', 'hidden');
                \$('.coache-status-div').css('visibility', 'hidden');
            });
        });


        \$('.players').on('click', function () {
            var player = \$(this).attr('id');
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
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 234, $this->source); })()), "Id", [], "any", false, false, false, 234), "html", null, true);
        echo " },
                    url: \" app.php/admin/deletePlayer/\" + player,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin\";

                    });
            });
        });

        \$('.coaches').on('click', function () {
            var coache = \$(this).attr('id');
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
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 260, $this->source); })()), "Id", [], "any", false, false, false, 260), "html", null, true);
        echo " },
                    url: \" app.php/admin/deleteCoache/\" + coache,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin\";

                    });
            });
        });
        \$('.phone').inputmask('Regex', {
            regex: \"08([7-9])([0-9]{7})+\",
            alias: \"string\",
            clearIncomplete: true
        });
        \$(\".name\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });
        \$(\".fName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });

        \$('.cochePhone').inputmask('Regex', {
            regex: \"08([7-9])([0-9]{7})+\",
            alias: \"string\",
            clearIncomplete: true
        });
        \$(\".coacheName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });
        \$(\".coacheFName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });

        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var fName = \$('.fName').val();
            var position = \$('#position').val();
            var phone = \$('.phone').val();
            console.log(name);
            console.log(fName);
            console.log(position);
            console.log(phone);
            var namesChecker = true;
            var positionCheker = true;
            var  phoneCheker = true;
            // if(name >= 3 && fName >= 3){
            //     namesChecker = true;
            // }else {
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Не може името и фамилията да съдържат по малко от 3 символа\",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            // if(position != 0){
            //     positionCheker = true;
            // }else{
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Моля изберете позиция, на която играча ще играе\",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            //
            // if (phone == 10 ){
            //     phoneCheker = true;
            // }else{
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Телефона трябва да съдържа 10 цифри \",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            //

            if(namesChecker == true && positionCheker == true && phoneCheker == true) {
                \$.ajax({
                    method: \"POST\",
                    data: {
                        \"appbundle_users[name]\": name,
                        \"appbundle_users[fName]\": fName,
                        \"position\": position,
                        \"appbundle_players[phone]\": phone
                    },
                    url: \"/admin\",
                })
                    .done(function (msg) {
                        if (msg == 1) {
                            window.location.href = \"app.php/admin\";
                        }
                        console.log(msg);

                    });
                }
            });



        \$('#send-info-coache').on('click', function () {
            var name = \$('.coacheName').val();
            var fName = \$('.coacheFName').val();
            var coachePosition = \$('#coachePosition').val();
            var phone = \$('.coachePhone').val();

            var namesChecker = false;
            var positionCheker = false;
            var  phoneCheker = false

            if(name >= 3 && fName >= 3){
                namesChecker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Неможе името и фамилията да съдържат по малко от 3 символа\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }
            if(position != 0){
                positionCheker = true;
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Моля изберете позиция, на която играча ще играе\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }

            if (phone == 10 ){
                phoneCheker = true;
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Телефона трябва да съдържа 10 цифри \",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }


            if(namesChecker == true && positionCheker == true && phoneCheker == true) {

                \$.ajax({
                    method: \"POST\",
                    data: {
                        \"appbundle_users[name]\": name,
                        \"appbundle_users[fName]\": fName,
                        \"position\": coachePosition,
                        \"appbundle_coaches[phone]\": phone
                    },
                    url: \"/admin\",
                })
                    .done(function (msg) {
                        if (msg == 1) {
                            window.location.href = \"app.php/admin\";
                        }

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
        return "admin/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 260,  414 => 234,  288 => 111,  283 => 109,  280 => 108,  274 => 107,  272 => 106,  266 => 103,  259 => 101,  256 => 100,  250 => 98,  244 => 96,  242 => 95,  236 => 92,  233 => 91,  228 => 90,  226 => 89,  209 => 75,  204 => 73,  201 => 72,  195 => 71,  193 => 70,  187 => 67,  180 => 66,  174 => 64,  168 => 62,  166 => 61,  163 => 60,  159 => 58,  155 => 56,  153 => 55,  149 => 54,  146 => 53,  141 => 52,  139 => 51,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{%  block style %}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/particles/hiddenFormStyle.css\") }}\">
{% endblock %}
{%  block body %}
    <div id=\"container\">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-9  main-charts-container row pb-3\">
                <div class=\"col-12 text-center\">
                    <h4 class=\"mt-4  mb-5 information-charts-text\">Основни характеристики</h4>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center chart-container \">
                    <div class=\"information-container \">
                        <p>15</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"label green badge fat-percent-badge\">Играча в отбора</span>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12 col-md-12 mt-2 text-center chart-container\">
                    <div class=\"information-container\">
                        <p>1</p>
                    </div>
                    <h3>
                        <span class=\"label green badge \">Временно класиране</span>
                    </h3>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12 text-center align-content-center  chart-container\">
                    <div class=\"information-container\">
                        <p>EfBet Cup</p>
                    </div>
                    <div class=\"fat-percent-div\">
                        <h3>
                            <span class=\"green badge fat-percent-badge  label\">Първенство</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-center div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Играчи  </h2>
                </div>
                {% set foo = 1 %}
                {% for player in players %}
                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                            {%   if  player.Status == 0 %}
                                <div class=\"status-green\"></div>
                                {% else %}
                                <div class=\"status-red\"></div>
                            {%  endif %}

                            {% if player.Image == null or player.Image == ' ' %}
                                <img src=\"{{asset('images/user-image.png')}}\" alt=\"\" class=\"player-img\">
                            {% else %}
                                <img src=\"{{asset('images/'~ player.Image )}}\" alt=\"\" class=\"player-img\">
                            {% endif %}
                            <p class=\"player-name\">{{ player.User.Name }} {{ player.User.FName }}</p>
                            <span><i class=\"fas fa-times country-fa-times players\" id=\"{{ player.Id }}\"></i></span>
                        </div>
                    </div>
                    {% set foo = foo + 1 %}
                {% endfor %}
                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-player justify-content-center text-center\" id=\"player-{{  foo }} \">

                        <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-player-img\">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-center div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2>Треньри  </h2>
                </div>
                {% set foo = 1 %}
                {% for coache in coaches%}
                    <div class=\"col-lg-3 col-sm-12 col-md-12 mt-2 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">


                                {% if coache.Image == null or coache.Image == ' ' %}
                                    <img src=\"{{asset('images/user1-white2.png')}}\" alt=\"\" class=\"player-img\">
                                {% else %}
                                    <img src=\"{{asset('images/'~ coache.Image )}}\" alt=\"\" class=\"image\">
                                {% endif %}

                                <p class=\"player-name\">{{ coache.User.Name }} {{ coache.User.FName }} </p>

                            <span><i class=\"fas fa-times country-fa-times coaches\" id=\"{{ coache.Id }}\"></i></span>
                        </div>
                    </div>
                    {% set foo = foo + 1 %}
                {% endfor %}
                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-coache justify-content-center text-center\" id=\"player-{{  foo }} \">

                        <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-player-img\">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"player-status-div col-9  team-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h3 class=\"mb-3 col-12 text-center\">Искате ли да изтриете записа:</h3>
                <button class=\"btn bg-danger\" id=\"no\">Не</button>
                <button class=\"btn btn-green\" id=\"yes\">Да</button>

            </div>
            <span><i class=\"fas fa-times-circle color-black \"></i></span>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  player-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h1 class=\"col-12 text-center\">Добавяне на играчи</h1>
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray name\" type=\"text\"  placeholder=\"Име...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2  bg-gray fName\" type=\"text\" placeholder=\"Фамилия...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"position\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Позиция </option>
                        <option value=\"1\" class=\"bg-gray\">Вратар(GK)</option>
                        <option value=\"2\" class=\"bg-gray\">Нападател(ST)</option>
                        <option value=\"3\" class=\"bg-gray\">Контузен</option>
                    </select>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray phone\" inputmask type=\"text\" placeholder=\"Телефон...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info\">Потвърди</button>

            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>

    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-lg-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"add-coache\" >
            <div class=\"col-lg-8 col-sm-11 row justify-content-center\">
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray coacheName\" type=\"text\"  placeholder=\"Име...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2  bg-gray coacheFName\" type=\"text\" placeholder=\"Фамилия...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <div class=\"input-group mb-3 col-lg-6 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"coachePosition\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                        <option value=\"1\" class=\"bg-gray\">Главен(GK)</option>
                        <option value=\"2\" class=\"bg-gray\">Помощник(ST)</option>
                        <option value=\"3\" class=\"bg-gray\">Контузен</option>
                    </select>
                </div>
                <div class=\"input-group mb-4 mt-2 col-lg-6 col-sm-12\">
                    <input class=\"effect-2 bg-gray coachePhone\" inputmask type=\"text\" placeholder=\"Телефон...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>
                <button class=\"btn bg-mycolor\" id=\"send-info-coache\">Потвърди</button>

            </div>


            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>


    <script>
        \$('.add-player').on('click', function () {
            var player = \$(this).children().attr('id');
            \$('.player-status-container').css('visibility', 'visible');
            \$('.player-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.player-status-container').css('visibility', 'hidden');
                \$('.player-status-div').css('visibility', 'hidden');
            });
        });


        \$('.add-coache').on('click', function () {
            var player = \$(this).children().attr('id');
            \$('.coache-status-container').css('visibility', 'visible');
            \$('.coache-status-div').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.coache-status-container').css('visibility', 'hidden');
                \$('.coache-status-div').css('visibility', 'hidden');
            });
        });


        \$('.players').on('click', function () {
            var player = \$(this).attr('id');
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
                    url: \" app.php/admin/deletePlayer/\" + player,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin\";

                    });
            });
        });

        \$('.coaches').on('click', function () {
            var coache = \$(this).attr('id');
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
                    url: \" app.php/admin/deleteCoache/\" + coache,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin\";

                    });
            });
        });
        \$('.phone').inputmask('Regex', {
            regex: \"08([7-9])([0-9]{7})+\",
            alias: \"string\",
            clearIncomplete: true
        });
        \$(\".name\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });
        \$(\".fName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });

        \$('.cochePhone').inputmask('Regex', {
            regex: \"08([7-9])([0-9]{7})+\",
            alias: \"string\",
            clearIncomplete: true
        });
        \$(\".coacheName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });
        \$(\".coacheFName\").inputmask(\"Regex\", {
            regex:'[А-Я][а-я]+' ,
            alias: \"datetime\",
            clearIncomplete: true
        });

        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var fName = \$('.fName').val();
            var position = \$('#position').val();
            var phone = \$('.phone').val();
            console.log(name);
            console.log(fName);
            console.log(position);
            console.log(phone);
            var namesChecker = true;
            var positionCheker = true;
            var  phoneCheker = true;
            // if(name >= 3 && fName >= 3){
            //     namesChecker = true;
            // }else {
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Не може името и фамилията да съдържат по малко от 3 символа\",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            // if(position != 0){
            //     positionCheker = true;
            // }else{
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Моля изберете позиция, на която играча ще играе\",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            //
            // if (phone == 10 ){
            //     phoneCheker = true;
            // }else{
            //     iziToast.warning({
            //         title: 'Грешни данни',
            //         message: \"Телефона трябва да съдържа 10 цифри \",
            //         overlay: true,
            //         zindex: 999,
            //         position: 'center',
            //         timeout: 2000,
            //     });
            // }
            //

            if(namesChecker == true && positionCheker == true && phoneCheker == true) {
                \$.ajax({
                    method: \"POST\",
                    data: {
                        \"appbundle_users[name]\": name,
                        \"appbundle_users[fName]\": fName,
                        \"position\": position,
                        \"appbundle_players[phone]\": phone
                    },
                    url: \"/admin\",
                })
                    .done(function (msg) {
                        if (msg == 1) {
                            window.location.href = \"app.php/admin\";
                        }
                        console.log(msg);

                    });
                }
            });



        \$('#send-info-coache').on('click', function () {
            var name = \$('.coacheName').val();
            var fName = \$('.coacheFName').val();
            var coachePosition = \$('#coachePosition').val();
            var phone = \$('.coachePhone').val();

            var namesChecker = false;
            var positionCheker = false;
            var  phoneCheker = false

            if(name >= 3 && fName >= 3){
                namesChecker = true;
            }else {
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Неможе името и фамилията да съдържат по малко от 3 символа\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }
            if(position != 0){
                positionCheker = true;
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Моля изберете позиция, на която играча ще играе\",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }

            if (phone == 10 ){
                phoneCheker = true;
            }else{
                iziToast.warning({
                    title: 'Грешни данни',
                    message: \"Телефона трябва да съдържа 10 цифри \",
                    overlay: true,
                    zindex: 999,
                    position: 'center',
                    timeout: 2000,
                });
            }


            if(namesChecker == true && positionCheker == true && phoneCheker == true) {

                \$.ajax({
                    method: \"POST\",
                    data: {
                        \"appbundle_users[name]\": name,
                        \"appbundle_users[fName]\": fName,
                        \"position\": coachePosition,
                        \"appbundle_coaches[phone]\": phone
                    },
                    url: \"/admin\",
                })
                    .done(function (msg) {
                        if (msg == 1) {
                            window.location.href = \"app.php/admin\";
                        }

                    });
            }
        });


    </script>
{% endblock %}", "admin/home.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\admin\\home.html.twig");
    }
}
