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

/* admin/coaches.html.twig */
class __TwigTemplate_d40795e66b4224f4c82fda99b5dc1fa3516073cc4d5b6a49e3e7eec4ea85f742 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/coaches.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "     <a class=\"nav-item nav-link  ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminHomeAction");
        echo "\">Начална страница </a>
     <a class=\"nav-item nav-link ml-2 \" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\">Юнушестки отбори</a>

 ";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div id=\"container \">
        <div class=\"row mt-5  justify-content-center\">
            <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-between div-charts row pb-3\">
                <div class=\"col-12 text-center\">
                    <h2 >Основен Отбор</h2>
                </div>
                ";
        // line 14
        $context["foo"] = 1;
        // line 15
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "Coaches", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["coache"]) {
            // line 16
            echo "                    <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                        <div class=\"col-12 player-container \" id=\"player-";
            // line 17
            echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
            echo " \">
                            ";
            // line 18
            if (((twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 18) == null) || (twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 18) == " "))) {
                // line 19
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                            ";
            } else {
                // line 21
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 21))), "html", null, true);
                echo "\" alt=\"\" class=\"player_img\">
                            ";
            }
            // line 23
            echo "                            <p class=\"player_name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["coache"], "UserId", [], "any", false, false, false, 23), "Name", [], "any", false, false, false, 23), "html", null, true);
            echo " </p>
";
            // line 25
            echo "                        </div>
                    </div>
                    ";
            // line 27
            $context["foo"] = (($context["foo"] ?? null) + 1);
            // line 28
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row \">
                    <div class=\"col-12 player-container add-player justify-content-center text-center\" id=\"player-";
        // line 30
        echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
        echo " \">

                        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
        echo "\" alt=\"\" class=\"add-player-img\">

                    </div>
                </div>
            </div>
        </div>
    </div>


    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["youthTeams"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["youthTeam"]) {
            // line 42
            echo "        <div id=\"container \">
            <div class=\"row mt-5  justify-content-center\">
                <div class=\"col-lg-11 col-md-7 col-sm-11 col-10 justify-content-between div-charts row pb-3\">
                    <div class=\"col-12 text-center\">
                        <h2 >";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Name", [], "any", false, false, false, 46), "html", null, true);
            echo "</h2>
                    </div>
                    ";
            // line 48
            $context["foo"] = 1;
            // line 49
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["youthTeam"], "Coaches", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["coache"]) {
                // line 50
                echo "                        <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio row  \" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coache"], "Id", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
                            <div class=\"col-12 player-container \" id=\"player-";
                // line 51
                echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
                echo " \">
                                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coacheAction", ["id" => twig_get_attribute($this->env, $this->source, $context["coache"], "Id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">";
                if (((twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 52) == null) || (twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 52) == " "))) {
                    // line 53
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
                    echo "\" alt=\"\" class=\"player_img\">
                                    ";
                } else {
                    // line 55
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["coache"], "Image", [], "any", false, false, false, 55))), "html", null, true);
                    echo "\" alt=\"\" class=\"player_img\">
                                    ";
                }
                // line 57
                echo "                                    <p class=\"player_name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["coache"], "UserId", [], "any", false, false, false, 57), "Name", [], "any", false, false, false, 57), "html", null, true);
                echo " </p>
                                    ";
                // line 58
                echo "</a>
                            </div>
                        </div>

                        ";
                // line 62
                $context["foo"] = (($context["foo"] ?? null) + 1);
                // line 63
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coache'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "

                        <div class=\"col-lg-3 col-sm-12 col-md-12 justify-content-center player_portfolio-2 row \">
                            <div class=\"col-12 player-container add-player justify-content-center text-center\" id=\"player-";
            // line 67
            echo twig_escape_filter($this->env, ($context["foo"] ?? null), "html", null, true);
            echo " \">

                                <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus .png"), "html", null, true);
            echo "\" alt=\"\" class=\"add-player-img\">

                            </div>
                        </div>
                </div>
            </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['youthTeam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/coaches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 78,  216 => 69,  211 => 67,  206 => 64,  200 => 63,  198 => 62,  192 => 58,  187 => 57,  181 => 55,  175 => 53,  171 => 52,  167 => 51,  162 => 50,  157 => 49,  155 => 48,  150 => 46,  144 => 42,  140 => 41,  128 => 32,  123 => 30,  120 => 29,  114 => 28,  112 => 27,  108 => 25,  103 => 23,  97 => 21,  91 => 19,  89 => 18,  85 => 17,  82 => 16,  77 => 15,  75 => 14,  67 => 8,  63 => 7,  56 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/coaches.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\admin\\coaches.html.twig");
    }
}
