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

/* player/playerBaseTemplate.html.twig */
class __TwigTemplate_cb63dbfa05f572fc800350fd8037fa385aed289e853ab9d17921f088702e7770 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'navLinks' => [$this, 'block_navLinks'],
            'navContent' => [$this, 'block_navContent'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "player/playerBaseTemplate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <link rel=\"stylesheet\" href=\"  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/player/playerStyle.css"), "html", null, true);
        echo "    \">
    <link rel=\"stylesheet\" href=\"  ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coachStyle.css"), "html", null, true);
        echo "    \">
";
    }

    // line 6
    public function block_navLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <a class=\"current-item ml-2 navbar-link\" href=\"#\">Начална страница </a>
    <a class=\"ml-2 na navbar-link\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playerTraining");
        echo "\">Тренировки</a>
";
    }

    // line 10
    public function block_navContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div class=\" mt-md-2 mt-sm-2 row text-sm-left text-md-left col-sm-6 col-md-6 justify-content-sm-left justify-content-md-left\">
        <p class=\"nav-username \">";
        // line 12
        echo twig_escape_filter($this->env, ($context["playerName"] ?? null), "html", null, true);
        echo " </p>
        <div class=\"\">
            ";
        // line 14
        if (((($context["profile_img"] ?? null) == "") || (($context["profile_img"] ?? null) == null))) {
            // line 15
            echo "                <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_settings");
            echo "\" class=\"profile_pic_a \"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"user-nav-profile-img\"></a>
            ";
        } else {
            // line 17
            echo "                <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_settings");
            echo "\" class=\"profile_pic_a \"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . ($context["profile_img"] ?? null))), "html", null, true);
            echo "\" alt=\"\" class=\"user-nav-profile-img\"></a>
            ";
        }
        // line 19
        echo "        </div>
        <p class=\"user_name2 pl-lg-2 pl-sm-2 \">";
        // line 20
        echo twig_escape_filter($this->env, ($context["playerName"] ?? null), "html", null, true);
        echo " </p>
    </div>
";
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "player/playerBaseTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 23,  110 => 20,  107 => 19,  99 => 17,  91 => 15,  89 => 14,  84 => 12,  81 => 11,  77 => 10,  71 => 8,  68 => 7,  64 => 6,  58 => 4,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "player/playerBaseTemplate.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\playerBaseTemplate.html.twig");
    }
}
