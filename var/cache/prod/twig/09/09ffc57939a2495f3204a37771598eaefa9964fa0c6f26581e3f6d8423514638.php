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

/* coaches/base.html.twig */
class __TwigTemplate_01f9eb694d10929cb6e916ce796d0dba4f9a5804f0a483e8a95fabab7f072a0a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "coaches/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
    <link rel=\"stylesheet\" href=\"  ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coachStyle.css"), "html", null, true);
        echo "\">


";
    }

    // line 8
    public function block_navLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <a class=\"ml-2 na navbar-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingView");
        echo "\">Тренировки</a>
    <a class=\"ml-2 na navbar-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trainingCalendarActionView");
        echo "\">Тренировки</a>
";
    }

    // line 12
    public function block_navContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        <div class=\"row justify-content-end\">
        <i class=\"far fa-envelope\"></i>
    </div>
    <div class=\"mt-md-2 mt-sm-2 row  col-sm-6 col-md-6  justify-content-end\">
        <p class=\"nav-username \">Иван Драганов</p>
        <div class=\" \">
            ";
        // line 19
        if (((($context["profile_img"] ?? null) == "") || (($context["profile_img"] ?? null) == null))) {
            // line 20
            echo "                <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coache_settings");
            echo "\" class=\"profile_pic_a \"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"user-nav-profile-img\"></a>
            ";
        } else {
            // line 22
            echo "                <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coache_settings");
            echo "\" class=\"profile_pic_a \"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . ($context["profile_img"] ?? null))), "html", null, true);
            echo "\" alt=\"\" class=\"user-nav-profile-img\"></a>
            ";
        }
        // line 24
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "coaches/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  100 => 22,  92 => 20,  90 => 19,  82 => 13,  78 => 12,  72 => 10,  67 => 9,  63 => 8,  55 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coaches/base.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\base.html.twig");
    }
}
