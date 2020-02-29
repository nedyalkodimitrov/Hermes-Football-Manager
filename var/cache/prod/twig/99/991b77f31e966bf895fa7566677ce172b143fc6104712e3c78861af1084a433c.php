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

/* coaches/trainings/training.html.twig */
class __TwigTemplate_63d02b55c17d4905e268012d4c932150ad5c6c7e71f8525a284adfd8babdc4ca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
            'style' => [$this, 'block_style'],
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
        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/trainings/training.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <a class=\"nav-item nav-link  ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coacheViewAction");
        echo "\">Начална страница</a>
    <a class=\"nav-item nav-link current-item ml-2\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingView");
        echo "\">Тренировки</a>
";
    }

    // line 6
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"  ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/hiddenFormStyle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/searchEngine.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coach/trainingPageStyle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/searchResultsTable.css"), "html", null, true);
        echo "\">
";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <div class=\"col-12 row justify-content-center mx-auto\">
        <div class=\"col-lg-10 col-sm-11 row m-0 text-center justify-content-center\">
            <div class=\"col-lg-8 col-sm-12 m-0 text-center justify-content-center\">
                <div class=\"create-training-container\">
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingCalendarActionView");
        echo "\" class=\"create-training-a-container\">
                        <p class=\"create-training-p\">Създаване на седмична програма </p>
                        <div class=\"create-training-image-container\">
                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/footballGrass.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"create-training-image\">
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <hr class=\"col-lg-11 col-sm-10 mx-auto \">

    <div id=\"container\">
        <div class=\"row mt-5 justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 coach-player-adding-container row pb-3\">
                ";
        // line 35
        if ((($context["players"] ?? null) == null)) {
            // line 36
            echo "                    <h1 class=\"col-12 text-center mt-4 mb-2\">0 Играчи</h1>
                ";
        } else {
            // line 38
            echo "                    <h1 class=\"col-12 text-center mt-4 mb-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["players"] ?? null), "count", [], "any", false, false, false, 38), "html", null, true);
            echo " Играчи</h1>
                ";
        }
        // line 40
        echo "
                ";
        // line 41
        $context["foo"] = 1;
        // line 42
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 43
            echo "                    <div class=\"col-lg-3 col-sm-12 ml-2 col-md-12 justify-content-center row mb-sm-2\">
                        <div class=\"col-12 player-container \" id=\"player-";
            // line 44
            echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
            echo " \">
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerAction", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">
                                ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "Status", [], "any", false, false, false, 46) == 0)) {
                // line 47
                echo "                                    <div class=\"status-green\"></div>
                                ";
            } else {
                // line 49
                echo "                                    <div class=\"status-red\"></div>
                                ";
            }
            // line 51
            echo "
                                ";
            // line 52
            if (((twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 52) == null) || (twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 52) == " "))) {
                // line 53
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-image.png"), "html", null, true);
                echo "\" alt=\"\" class=\"player-img\">
                                ";
            } else {
                // line 55
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 55))), "html", null, true);
                echo "\" alt=\"\" class=\"player-img\">
                                ";
            }
            // line 57
            echo "
                                <p class=\"player-name\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 58), "Name", [], "any", false, false, false, 58), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 58), "FName", [], "any", false, false, false, 58), "html", null, true);
            echo " </p>
                            </a>
                        </div>
                    </div>

                    ";
            // line 63
            $context["foo"] = (($context["foo"] ?? null) + 1);
            // line 64
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                <div class=\"col-lg-3 col-sm-12 col-md-12 ml-2 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-player-container justify-content-center text-center\" id=\"player-";
        // line 66
        echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
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
    <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coach/searchPlayers.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coach/sendRequestToPlayer.js"), "html", null, true);
        echo "\"></script>

    <script>
       function Click (value) {



           \$.ajax({
               method: \"POST\",
               data: {\"playerInfo\": value},
               url: \"sendPlayerRequest/\"+value,
           })
               .done(function (data) {

                   console.log(value)
               });
               };

    </script>

";
        // line 130
        echo "

";
        // line 142
        echo "
";
        // line 144
        echo "
";
        // line 148
        echo "

";
        // line 163
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/hidingDiv.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "coaches/trainings/training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 164,  283 => 163,  279 => 148,  276 => 144,  273 => 142,  269 => 130,  246 => 94,  242 => 93,  238 => 92,  210 => 67,  206 => 66,  203 => 65,  197 => 64,  195 => 63,  185 => 58,  182 => 57,  176 => 55,  170 => 53,  168 => 52,  165 => 51,  161 => 49,  157 => 47,  155 => 46,  151 => 45,  147 => 44,  144 => 43,  139 => 42,  137 => 41,  134 => 40,  128 => 38,  124 => 36,  122 => 35,  106 => 22,  100 => 19,  94 => 15,  90 => 14,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  67 => 7,  63 => 6,  57 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coaches/trainings/training.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\trainings\\training.html.twig");
    }
}
