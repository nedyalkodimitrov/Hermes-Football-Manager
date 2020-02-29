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

/* admin/teams.html.twig */
class __TwigTemplate_1c5328f904795338c3f6feeb97605469bde0bea3689947abd1ebbba2b7a25235 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/teams.html.twig", 1);
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
     <a class=\"nav-item nav-link current-item ml-2 \" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\">Юнушестки отбори</a>

 ";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"container justify-content-center mx-auto text-center row\">
        <div class=\"col-12 row justify-content-center p-3 justify-content-lg-between\">
        ";
        // line 11
        if (((($context["youthTeams"] ?? null) == null) || (($context["youthTeams"] ?? null) == ""))) {
            // line 12
            echo "

        ";
        } else {
            // line 15
            echo "
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["youthTeams"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["youthTeam"]) {
                // line 17
                echo "
                    <div class=\"col-lg-6 col-sm-9 col-md-9 mt-3 justify-content-center youthTeamCard-wrap row \">
                        <div class=\"col-11  youthTeamCard-container\">
                            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeam", ["id" => twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">
                                    <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/footballWall.jpg"), "html", null, true);
                echo "\" class=\"youthTeamCard-image\" alt=\"\">
                                <div class=\"youthTeamCard-textInformation\">
                                    <h2 class=\"youthTeam-text\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Name", [], "any", false, false, false, 23), "html", null, true);
                echo "</h2>
                                    <h5 class=\"trainer_info\">
                                        Треньори:
                                        ";
                // line 26
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Coaches", [], "any", false, false, false, 26)) == 0)) {
                    // line 27
                    echo "                                            Няма
                                        ";
                } else {
                    // line 29
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Coaches", [], "any", false, false, false, 29)), "html", null, true);
                    echo "

                                        ";
                }
                // line 32
                echo "                                    </h5>
                                    <h5 class=\"player_info\">Играчи: ";
                // line 33
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Players", [], "any", false, false, false, 33)), "html", null, true);
                echo "</h5>
                                </div>
                            </a>
                            <span><i class=\"fas fa-times country-fa-times youthTeam-delete\" id=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Id", [], "any", false, false, false, 36), "html", null, true);
                echo "\"></i></span>
                        </div>
                    </div>


            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['youthTeam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "

        ";
        }
        // line 48
        echo "
";
        // line 51
        echo "        </div>
    </div>

    <div class=\"add-team-circle-container row \">
        <div class=\"add-team-circle\" id=\"player- \">
            <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-team\">

        </div>
    </div>




    <div class=\"player-status-container row justify-content-center align-items-center\">
        <div class=\"col-lg-9 col-sm-10 player-status-div row align-items-center justify-content-center\" id=\"add-player\" >

            <div class=\"col-lg-8 col-sm-11 row justify-content-center\">
                <div class=\"input-group mb-3 col-lg-12 col-sm-12\">
                    <h2 class=\"mb-5 col-12 text-center justify-content-center\">Добавяне на  юнушестки отбор</h2>
                    <input class=\"effect-2 bg-gray name\" type=\"text\"  placeholder=\"Име...\" id=\"email\" aria-label=\"Email\" aria-describedby=\"basic-addon1\" name=\"_username\">
                    <span class=\"focus-border\"></span>
                </div>

                <div class=\"input-group mb-3 col-lg-12 col-sm-12\">
                    <select class=\"form-control select bg-gray col-sm-12 \" id=\"division\" >
                        <option value=\"0\" selected=\"selected\" disabled=\"disabled\" class=\"bg-gray\">Защо няма да може да доидете </option>
                        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["divisions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["division"]) {
            // line 78
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "Id", [], "any", false, false, false, 78), "html", null, true);
            echo "\" selected=\"selected\"  class=\"bg-gray\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "Name", [], "any", false, false, false, 78), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["division"], "Age", [], "any", false, false, false, 78), "html", null, true);
            echo ") </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['division'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                    </select>
                </div>

                <button class=\"btn bg-mycolor\" id=\"send-info\">Потвърди</button>

            </div>


            <span><i class=\"fas fa-times-circle\"></i></span>
        </div>
    </div>
    <script>
        \$('.add-team').on('click', function () {
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



        \$('#send-info').on('click', function () {
            var name = \$('.name').val();
            var division = \$('#division').val();

            if (division != 0 && name.length > 4) {
                \$.ajax({
                    method: \"POST\",
                    data: {\"name\": name, \"division\": division},
                    url: \"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createYouthTeam");
        echo "\",
                })
                    .done(function( msg ) {
                        console.log(msg);
                        window.location.href = \"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\";
                    });

             }else{

            }
        });

        \$('.youthTeam-delete').on('click', function () {
            var id = \$(this).attr('id');
            \$.ajax({
                method: \"POST\",
                url: \"app.php/admin/deleteYouthTeam/\" + id,
            })
                .done(function( msg ) {

                    window.location.href = \"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\";
                });

           });




    </script>
";
    }

    public function getTemplateName()
    {
        return "admin/teams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 148,  252 => 132,  245 => 128,  195 => 80,  182 => 78,  178 => 77,  154 => 56,  147 => 51,  144 => 48,  139 => 42,  127 => 36,  121 => 33,  118 => 32,  111 => 29,  107 => 27,  105 => 26,  99 => 23,  94 => 21,  90 => 20,  85 => 17,  81 => 16,  78 => 15,  73 => 12,  71 => 11,  67 => 9,  63 => 8,  56 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/teams.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\admin\\teams.html.twig");
    }
}
