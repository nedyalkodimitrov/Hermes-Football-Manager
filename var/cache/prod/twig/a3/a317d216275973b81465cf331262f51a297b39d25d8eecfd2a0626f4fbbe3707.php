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
class __TwigTemplate_f978b66b10238afe34ef16901b2a3d98465c4d8808cb9b4fe3b076151e428c14 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/youthTeam.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "     <a class=\"nav-item nav-link   ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminHomeAction");
        echo "\">Начална страница </a>
     <a class=\"nav-item nav-link ml-2 current-item\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\">Юнушестки отбори</a>
 ";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-center div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Играчи</h2>
                </div>
                ";
        // line 13
        $context["foo"] = 1;
        // line 14
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 15
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-";
            // line 16
            echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
            echo " \">
                            ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 17) == 0)) {
                // line 18
                echo "                                <div class=\"status-green\"></div>
                            ";
            }
            // line 20
            echo "
                            ";
            // line 21
            if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 21) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 21) == " "))) {
                // line 22
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1-white2.png"), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                            ";
            } else {
                // line 24
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 24))), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                            ";
            }
            // line 26
            echo "                            <p class=\"player_name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 26), "Name", [], "any", false, false, false, 26), "html", null, true);
            echo " </p>
                            <p class=\"player-position\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "position", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                            <span><i class=\"fas fa-times country-fa-times players\" id=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "Id", [], "any", false, false, false, 28), "html", null, true);
            echo "\"></i></span>
                        </div>
                    </div>
                    ";
            // line 31
            $context["foo"] = (($context["foo"] ?? null) + 1);
            // line 32
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row mr-2\">
                    <div class=\"col-12 player-container add-player justify-content-center text-center\" id=\"player-";
        // line 34
        echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
        echo " \">
                        <img src=\"";
        // line 35
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
        // line 48
        $context["foo"] = 1;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coaches"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["coache"]) {
            // line 50
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-";
            // line 51
            echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
            echo " \">
                                 ";
            // line 52
            if (((twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 52) == null) || (twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 52) == " "))) {
                // line 53
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1-white2.png"), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                                ";
            } else {
                // line 55
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 55))), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                                ";
            }
            // line 57
            echo "                                <p class=\"player_name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["coache"], "User", [], "any", false, false, false, 57), "Name", [], "any", false, false, false, 57), "html", null, true);
            echo " </p>
                            <span><i class=\"fas fa-times country-fa-times coaches\" id=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coache"], "Id", [], "any", false, false, false, 58), "html", null, true);
            echo "\"></i></span>
                        </div>
                    </div>
                    ";
            // line 61
            $context["foo"] = (($context["foo"] ?? null) + 1);
            // line 62
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-coach justify-content-center text-center\" id=\"player-";
        // line 64
        echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
        echo " \">
                        <img src=\"";
        // line 65
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
        // line 119
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
        // line 179
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
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeam", ["id" => ($context["teamId"] ?? null)]), "html", null, true);
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
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeam", ["id" => ($context["teamId"] ?? null)]), "html", null, true);
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
        return array (  442 => 284,  420 => 265,  331 => 179,  268 => 119,  211 => 65,  207 => 64,  204 => 63,  198 => 62,  196 => 61,  190 => 58,  185 => 57,  179 => 55,  173 => 53,  171 => 52,  167 => 51,  164 => 50,  159 => 49,  157 => 48,  141 => 35,  137 => 34,  134 => 33,  128 => 32,  126 => 31,  120 => 28,  116 => 27,  111 => 26,  105 => 24,  99 => 22,  97 => 21,  94 => 20,  90 => 18,  88 => 17,  84 => 16,  81 => 15,  76 => 14,  74 => 13,  66 => 7,  62 => 6,  56 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/youthTeam.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\admin\\youthTeam.html.twig");
    }
}
