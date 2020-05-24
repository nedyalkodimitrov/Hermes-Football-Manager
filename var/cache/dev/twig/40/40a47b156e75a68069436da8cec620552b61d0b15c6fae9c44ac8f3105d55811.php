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

/* admin/youthTeam.html.twig */
class __TwigTemplate_923121dbae7799d790a8597db9e0a6e2538c4654db0c0084d7c95a94a06d86db extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/youthTeam.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/youthTeam.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/youthTeam.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "     <a class=\"nav-item nav-link ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminHomeAction");
        echo "\">Начална страница </a>
     <a class=\"nav-item nav-link ml-2 \" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manTeam");
        echo "\">Мъжки отбор</a>
     <a class=\"nav-item nav-link ml-2 current-item\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\">Юнушестки отбори</a>
     <a class=\"nav-item nav-link ml-2 \" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\">Програма</a>
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
        echo "    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-center div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Играчи</h2>
                </div>
                ";
        // line 15
        $context["foo"] = 1;
        // line 16
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 17
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 18, $this->source); })()), "html", null, true);
            echo " \">
                            ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 19) == 0)) {
                // line 20
                echo "                                <div class=\"status-green\"></div>
                            ";
            }
            // line 22
            echo "
                            ";
            // line 23
            if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 23) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 23) == " "))) {
                // line 24
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1-white2.png"), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                            ";
            } else {
                // line 26
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 26))), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                            ";
            }
            // line 28
            echo "                            <p class=\"player_name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 28), "Name", [], "any", false, false, false, 28), "html", null, true);
            echo " </p>
                            <p class=\"player-position\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "position", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                            <span><i class=\"fas fa-times country-fa-times players\" id=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "Id", [], "any", false, false, false, 30), "html", null, true);
            echo "\"></i></span>
                        </div>
                    </div>
                    ";
            // line 33
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 33, $this->source); })()) + 1);
            // line 34
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row mr-2\">
                    <div class=\"col-12 player-container add-player justify-content-center text-center\" id=\"player-";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " \">
                        <img src=\"";
        // line 37
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
                    <h2 >Треньори</h2>
                </div>
                ";
        // line 50
        $context["foo"] = 1;
        // line 51
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coache"]) {
            // line 52
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 53, $this->source); })()), "html", null, true);
            echo " \">
                                 ";
            // line 54
            if (((twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 54) == null) || (twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 54) == " "))) {
                // line 55
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1-white2.png"), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                                ";
            } else {
                // line 57
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 57))), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                                ";
            }
            // line 59
            echo "                                <p class=\"player_name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["coache"], "User", [], "any", false, false, false, 59), "Name", [], "any", false, false, false, 59), "html", null, true);
            echo " </p>
                            <span><i class=\"fas fa-times country-fa-times coaches\" id=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coache"], "Id", [], "any", false, false, false, 60), "html", null, true);
            echo "\"></i></span>
                        </div>
                    </div>
                    ";
            // line 63
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 63, $this->source); })()) + 1);
            // line 64
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-coach justify-content-center text-center\" id=\"player-";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 66, $this->source); })()), "html", null, true);
        echo " \">
                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-player-img\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"team-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  team-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h3 class=\"mb-3 col-12 text-center\">Искате ли да изтриете записа:</h3>
                <button class=\"btn bg-danger\" id=\"no\">Не</button>
                <button class=\"btn btn-green\" id=\"yes\">Да</button>
            </div>
            <span><i class=\"fas fa-times-circle color-black \"></i></span>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center \">
        <div class=\"col-9  player-status-div   justify-content-center\" id=\"add-player\" >
            <div class=\"container col-12 row justify-content-center search-container-holder\">
                <div class=\"search-container mt-3  justify-content-center\">
                    <div class=\"search-box full-sized-search-box\">
                        <input type=\"text\" placeholder=\"Ивайло Колев\" class=\"search-text\" id=\"search\">
                        <button  class=\"search-button\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"container col-12 p-0 mx-auto row\">
                <div class=\"playerSearchResult col-12 p-0  \">
                </div>
            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>
    <div class=\"coach-status-container row justify-content-center \">
        <div class=\"col-9 coach-status-div row justify-content-center\" id=\"add-coach\" >
                <div class=\"container col-12 row justify-content-center search-container-holder\">
                    <div class=\"search-container mt-3  justify-content-center\">
                        <div class=\"search-box full-sized-search-box\">
                            <input type=\"text\" placeholder=\"Ивайло Колев\" class=\"search-text\" id=\"search\">
                            <button  class=\"search-button\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"container col-12 p-0 mx-auto row\">
                    <div class=\"playerSearchResult col-12 p-0  \">
                    </div>
                </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
     </div>
    </div>
    <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin/searchPlayer.js"), "html", null, true);
        echo "\"></script>

    <script>

        \$('.add-player').on('click', function () {
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

        \$('.add-coach').on('click', function () {
            \$('.coach-status-container').css('visibility', 'visible')
                .css('height', '100vh')
                .css('top', '0%')
                .css('transition', 'ease 0.7s');
            \$('.coach-status-div')
                .css('visibility', 'visible')
                .css('transition', ' ease 0.6s')
                .css('top', '50%')
                .css('transform', ' translate(-50%, -50%)');

            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.coach-status-div')
                    .css('top', '-50%')
                    .css('transform', ' translate(-50%, -100%)')
                    .css('transition', 'ease 1s');

                \$('.coach-status-container').css('visibility', 'hidden')
                    .css('height', '0vh')
                    .css('top', '-50%')
                    .css('transition', 'ease 1.1s');
            });
        });

        function SendRequestToPlayer (value) {
            \$.ajax({
                method: \"POST\",
                data: {\"playerInfo\": value, \"team\" : \"Ludogorets19\"},
                url: \"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sendRequestToPlayer");
        echo "\",
            })
                .done(function (data) {

                    console.log(data)
                });
        }






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

                    url: \" app.php/admin/deletePlayer/\" + player,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin/youthTeams\";

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

                    url: \" app.php/admin/deleteCoache/\" + coache,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin/youthTeams\";

                    });
            });
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

            \$('#position').val(0);
            \$('.name').val('');
            \$('.fName').val('');
            \$('.phone').val('');

            \$.ajax({
                method: \"POST\",
                data: {\"appbundle_users[name]\": name, \"appbundle_users[fName]\": fName, \"position\": position, \"appbundle_players[phone]\": phone},
                url: \"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeam", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 267, $this->source); })())]), "html", null, true);
        echo "\",
            })
                .done(function( msg ) {
                    console.log(msg);
                    console.log(name);console.log(fName);console.log(position);console.log(phone);

                });
        });

        \$('#send-info-coache').on('click', function () {
            var name = \$('.coacheName').val();
            var fName = \$('.coacheFName').val();
            var coachePosition = \$('#coachePosition').val();
            var phone = \$('.coachePhone').val();
            console.log(name);console.log(fName);console.log(coachePosition);console.log(phone);

            \$.ajax({
                method: \"POST\",
                data: {\"appbundle_users[name]\": name, \"appbundle_users[fName]\": fName, \"position\": coachePosition, \"appbundle_coaches[phone]\": phone},
                url: \"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeam", ["id" => (isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 286, $this->source); })())]), "html", null, true);
        echo "\",
            })
                .done(function( msg ) {


                    if (msg = 2) {
                        \$('#coachePosition').val(0);
                        \$('.name').val('');
                        \$('.fName').val('');
                        \$('.phone').val('');
                    }else if (msg = 1){
                        \$('.phone').val('');
                    }else if(msg = 0){
                        \$('#position').val(0);
                    }else{

                    }

                });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/youthTeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 286,  458 => 267,  369 => 181,  306 => 121,  249 => 67,  245 => 66,  242 => 65,  236 => 64,  234 => 63,  228 => 60,  223 => 59,  217 => 57,  211 => 55,  209 => 54,  205 => 53,  202 => 52,  197 => 51,  195 => 50,  179 => 37,  175 => 36,  172 => 35,  166 => 34,  164 => 33,  158 => 30,  154 => 29,  149 => 28,  143 => 26,  137 => 24,  135 => 23,  132 => 22,  128 => 20,  126 => 19,  122 => 18,  119 => 17,  114 => 16,  112 => 15,  104 => 9,  94 => 8,  82 => 6,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
 {% block nav %}
     <a class=\"nav-item nav-link ml-2\" href=\"{{ path(\"adminHomeAction\") }}\">Начална страница </a>
     <a class=\"nav-item nav-link ml-2 \" href=\"{{ path(\"manTeam\") }}\">Мъжки отбор</a>
     <a class=\"nav-item nav-link ml-2 current-item\" href=\"{{ path(\"youthTeams\") }}\">Юнушестки отбори</a>
     <a class=\"nav-item nav-link ml-2 \" href=\"{{ path(\"youthTeams\") }}\">Програма</a>
 {% endblock  %}
{%  block body %}
    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-center div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Играчи</h2>
                </div>
                {% set foo = 1 %}
                {% for player in players %}
                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                            {%   if  player.Status == 0 %}
                                <div class=\"status-green\"></div>
                            {%  endif %}

                            {% if player.Image == null or player.Image == ' ' %}
                                <img src=\"{{asset('images/user1-white2.png')}}\" alt=\"\" class=\"player_img\">
                            {% else %}
                                <img src=\"{{asset('images/'~ player.Image )}}\" alt=\"\" class=\"player_img\">
                            {% endif %}
                            <p class=\"player_name\">{{ player.User.Name }} </p>
                            <p class=\"player-position\">{{ player.position.name }}</p>
                            <span><i class=\"fas fa-times country-fa-times players\" id=\"{{ player.Id }}\"></i></span>
                        </div>
                    </div>
                    {% set foo = foo + 1 %}
                {% endfor %}
                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row mr-2\">
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
                    <h2 >Треньори</h2>
                </div>
                {% set foo = 1 %}
                {% for coache in coaches%}
                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-{{  foo }} \">
                                 {% if coache.Image == null or coache.Image == ' ' %}
                                    <img src=\"{{asset('images/user1-white2.png')}}\" alt=\"\" class=\"player_img\">
                                {% else %}
                                    <img src=\"{{asset('images/'~ coache.Image )}}\" alt=\"\" class=\"player_img\">
                                {% endif %}
                                <p class=\"player_name\">{{ coache.User.Name }} </p>
                            <span><i class=\"fas fa-times country-fa-times coaches\" id=\"{{ coache.Id }}\"></i></span>
                        </div>
                    </div>
                    {% set foo = foo + 1 %}
                {% endfor %}
                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-coach justify-content-center text-center\" id=\"player-{{  foo }} \">
                        <img src=\"{{ asset('images/plus .png') }}\" alt=\"\" class=\"add-player-img\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"team-status-container row justify-content-center align-items-center\">
        <div class=\"col-9  team-status-div row align-items-center justify-content-center\" id=\"add-player\" >
            <div class=\"col-8 row justify-content-center\">
                <h3 class=\"mb-3 col-12 text-center\">Искате ли да изтриете записа:</h3>
                <button class=\"btn bg-danger\" id=\"no\">Не</button>
                <button class=\"btn btn-green\" id=\"yes\">Да</button>
            </div>
            <span><i class=\"fas fa-times-circle color-black \"></i></span>
        </div>
    </div>
    <div class=\"player-status-container row justify-content-center \">
        <div class=\"col-9  player-status-div   justify-content-center\" id=\"add-player\" >
            <div class=\"container col-12 row justify-content-center search-container-holder\">
                <div class=\"search-container mt-3  justify-content-center\">
                    <div class=\"search-box full-sized-search-box\">
                        <input type=\"text\" placeholder=\"Ивайло Колев\" class=\"search-text\" id=\"search\">
                        <button  class=\"search-button\">
                            <i class=\"fas fa-search\"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"container col-12 p-0 mx-auto row\">
                <div class=\"playerSearchResult col-12 p-0  \">
                </div>
            </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>
    <div class=\"coach-status-container row justify-content-center \">
        <div class=\"col-9 coach-status-div row justify-content-center\" id=\"add-coach\" >
                <div class=\"container col-12 row justify-content-center search-container-holder\">
                    <div class=\"search-container mt-3  justify-content-center\">
                        <div class=\"search-box full-sized-search-box\">
                            <input type=\"text\" placeholder=\"Ивайло Колев\" class=\"search-text\" id=\"search\">
                            <button  class=\"search-button\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"container col-12 p-0 mx-auto row\">
                    <div class=\"playerSearchResult col-12 p-0  \">
                    </div>
                </div>
            <span><i class=\"fas fa-times-circle\"></i></span>
     </div>
    </div>
    <script type=\"text/javascript\" src=\"{{  asset(\"js/admin/searchPlayer.js\")}}\"></script>

    <script>

        \$('.add-player').on('click', function () {
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

        \$('.add-coach').on('click', function () {
            \$('.coach-status-container').css('visibility', 'visible')
                .css('height', '100vh')
                .css('top', '0%')
                .css('transition', 'ease 0.7s');
            \$('.coach-status-div')
                .css('visibility', 'visible')
                .css('transition', ' ease 0.6s')
                .css('top', '50%')
                .css('transform', ' translate(-50%, -50%)');

            \$('#treatment_info').css('visibility', 'visible');

            \$('.fa-times-circle').on('click', function () {
                \$('.coach-status-div')
                    .css('top', '-50%')
                    .css('transform', ' translate(-50%, -100%)')
                    .css('transition', 'ease 1s');

                \$('.coach-status-container').css('visibility', 'hidden')
                    .css('height', '0vh')
                    .css('top', '-50%')
                    .css('transition', 'ease 1.1s');
            });
        });

        function SendRequestToPlayer (value) {
            \$.ajax({
                method: \"POST\",
                data: {\"playerInfo\": value, \"team\" : \"Ludogorets19\"},
                url: \"{{ path(\"sendRequestToPlayer\") }}\",
            })
                .done(function (data) {

                    console.log(data)
                });
        }






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

                    url: \" app.php/admin/deletePlayer/\" + player,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin/youthTeams\";

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

                    url: \" app.php/admin/deleteCoache/\" + coache,
                })
                    .done(function( msg ) {
                        window.location.href = \"app.php/admin/youthTeams\";

                    });
            });
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

            \$('#position').val(0);
            \$('.name').val('');
            \$('.fName').val('');
            \$('.phone').val('');

            \$.ajax({
                method: \"POST\",
                data: {\"appbundle_users[name]\": name, \"appbundle_users[fName]\": fName, \"position\": position, \"appbundle_players[phone]\": phone},
                url: \"{{ path('youthTeam',{id : teamId}) }}\",
            })
                .done(function( msg ) {
                    console.log(msg);
                    console.log(name);console.log(fName);console.log(position);console.log(phone);

                });
        });

        \$('#send-info-coache').on('click', function () {
            var name = \$('.coacheName').val();
            var fName = \$('.coacheFName').val();
            var coachePosition = \$('#coachePosition').val();
            var phone = \$('.coachePhone').val();
            console.log(name);console.log(fName);console.log(coachePosition);console.log(phone);

            \$.ajax({
                method: \"POST\",
                data: {\"appbundle_users[name]\": name, \"appbundle_users[fName]\": fName, \"position\": coachePosition, \"appbundle_coaches[phone]\": phone},
                url: \"{{ path('youthTeam',{id : teamId}) }}\",
            })
                .done(function( msg ) {


                    if (msg = 2) {
                        \$('#coachePosition').val(0);
                        \$('.name').val('');
                        \$('.fName').val('');
                        \$('.phone').val('');
                    }else if (msg = 1){
                        \$('.phone').val('');
                    }else if(msg = 0){
                        \$('#position').val(0);
                    }else{

                    }

                });
        });
    </script>
{% endblock %}", "admin/youthTeam.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\admin\\youthTeam.html.twig");
    }
}