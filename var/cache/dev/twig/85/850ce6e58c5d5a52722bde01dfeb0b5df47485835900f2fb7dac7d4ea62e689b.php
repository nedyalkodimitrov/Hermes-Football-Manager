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

/* coaches/matches/match.html.twig */
class __TwigTemplate_29a052a4e9351cb667f9ed1691117654b8b20f22ef1a311266d163a226c230b1 extends \Twig\Template
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
        return "coaches/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/matches/match.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/matches/match.html.twig"));

        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/matches/match.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/matchCard.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/fut-player-card.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"col-12 col-lg-12 p-0 mt-4 row justify-content-center mx-auto max-resolution\">
        <div class=\"col-lg-11 col-md-7 p-0 col-sm-11 col-10 justify-content-around  row pb-3\">
            <div class=\"col-12 mt-2 mb-3\">
                <h2 class=\"col-12 text-center\">Моля иберете играчи за групата за мача </h2>
            </div>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 14
            echo "                <div class=\"wrapper col-lg-3 col-md-6 col-sm-6\">
                    <!-- *** fut-player-card ***-->
                    <div class=\"fut-player-card\" id=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "position", [], "any", false, false, false, 16), "Name", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                        <!-- Player Card Top-->
                        <div class=\"player-card-top\">
                            <div class=\"player-master-info\">
                                <div class=\"player-rating\"><span >";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "stats", [], "any", false, false, false, 20), "statusFromCoaches", [], "any", false, false, false, 20), "html", null, true);
            echo "</span></div>
                                <div class=\"player-position\"><span class=\"position\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "position", [], "any", false, false, false, 21), "Name", [], "any", false, false, false, 21), "html", null, true);
            echo "</span></div>
                                <div class=\"player-nation\"><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "User", [], "any", false, false, false, 22), "City", [], "any", false, false, false, 22), "Country", [], "any", false, false, false, 22), "Image", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" alt=\"Argentina\" draggable=\"false\" /></div>
";
            // line 24
            echo "                            </div>
                            <div class=\"player-picture\"><img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["player"], "Image", [], "any", false, false, false, 25))), "html", null, true);
            echo "\" alt=\"Messi\" draggable=\"false\" />

                            </div>
                        </div>
                        <!-- Player Card Bottom-->
                        <div class=\"player-card-bottom\">
                            <div class=\"player-info\">
                                <!-- Player Name-->
                                <div class=\"player-name\"><span>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "user", [], "any", false, false, false, 33), "fName", [], "any", false, false, false, 33), "html", null, true);
            echo "</span></div>
                                <!-- Player Features-->
                                <div class=\"player-features\">
                                    <div class=\"player-features-col\"><span>
                                            <div class=\"player-feature-value\">97</div><div class=\"player-feature-title\">PAC</div></span><span><div class=\"player-feature-value\">95</div><div class=\"player-feature-title\">SHO</div></span><span><div class=\"player-feature-value\">94</div><div class=\"player-feature-title\">PAS</div></span></div>
                                    <div class=\"player-features-col\"><span><div class=\"player-feature-value\">99</div><div class=\"player-feature-title\">DRI</div></span><span><div class=\"player-feature-value\">35</div><div class=\"player-feature-title\">DEF</div></span><span><div class=\"player-feature-value\">68</div><div class=\"player-feature-title\">PHY</div></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
            <button class=\"sendPlayers btn btn-success  p-4\">Потвърдете изборът си!</button>
        </div>
    </div>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coach/matchEvent.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coaches/matches/match.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 49,  168 => 45,  150 => 33,  139 => 25,  136 => 24,  132 => 22,  128 => 21,  124 => 20,  115 => 16,  111 => 14,  107 => 13,  100 => 8,  90 => 7,  78 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coaches/base.html.twig' %}
{% block style %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/particles/matchCard.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/particles/fut-player-card.css') }}\">
{% endblock %}
{% block body %}
    <div class=\"col-12 col-lg-12 p-0 mt-4 row justify-content-center mx-auto max-resolution\">
        <div class=\"col-lg-11 col-md-7 p-0 col-sm-11 col-10 justify-content-around  row pb-3\">
            <div class=\"col-12 mt-2 mb-3\">
                <h2 class=\"col-12 text-center\">Моля иберете играчи за групата за мача </h2>
            </div>
            {% for player in players %}
                <div class=\"wrapper col-lg-3 col-md-6 col-sm-6\">
                    <!-- *** fut-player-card ***-->
                    <div class=\"fut-player-card\" id=\"{{ player.id }}-{{ player.position.Name }}\">
                        <!-- Player Card Top-->
                        <div class=\"player-card-top\">
                            <div class=\"player-master-info\">
                                <div class=\"player-rating\"><span >{{ player.stats.statusFromCoaches }}</span></div>
                                <div class=\"player-position\"><span class=\"position\">{{ player.position.Name }}</span></div>
                                <div class=\"player-nation\"><img src=\"{{ asset('images/' ~ player.User.City.Country.Image) }}\" alt=\"Argentina\" draggable=\"false\" /></div>
{#                                <div class=\"player-club\"><img src=\"{{ asset('images/' ~ player.Team.Image) }}\" alt=\"Barcelona\" draggable=\"false\" /></div>#}
                            </div>
                            <div class=\"player-picture\"><img src=\"{{ asset('images/' ~ player.Image) }}\" alt=\"Messi\" draggable=\"false\" />

                            </div>
                        </div>
                        <!-- Player Card Bottom-->
                        <div class=\"player-card-bottom\">
                            <div class=\"player-info\">
                                <!-- Player Name-->
                                <div class=\"player-name\"><span>{{ player.user.fName }}</span></div>
                                <!-- Player Features-->
                                <div class=\"player-features\">
                                    <div class=\"player-features-col\"><span>
                                            <div class=\"player-feature-value\">97</div><div class=\"player-feature-title\">PAC</div></span><span><div class=\"player-feature-value\">95</div><div class=\"player-feature-title\">SHO</div></span><span><div class=\"player-feature-value\">94</div><div class=\"player-feature-title\">PAS</div></span></div>
                                    <div class=\"player-features-col\"><span><div class=\"player-feature-value\">99</div><div class=\"player-feature-title\">DRI</div></span><span><div class=\"player-feature-value\">35</div><div class=\"player-feature-title\">DEF</div></span><span><div class=\"player-feature-value\">68</div><div class=\"player-feature-title\">PHY</div></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}

            <button class=\"sendPlayers btn btn-success  p-4\">Потвърдете изборът си!</button>
        </div>
    </div>
    <script src=\"{{ asset(\"js/coach/matchEvent.js\") }}\"></script>
{% endblock %}", "coaches/matches/match.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\matches\\match.html.twig");
    }
}
