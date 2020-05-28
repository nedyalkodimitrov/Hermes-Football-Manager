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

/* player/settings/newSettingPage.html.twig */
class __TwigTemplate_73dc8175e2c787270b3aee52859042ab4bed832ba8432655f36c44ce30108134 extends \Twig\Template
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
        return "player/playerBaseTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/settings/newSettingPage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/settings/newSettingPage.html.twig"));

        $this->parent = $this->loadTemplate("player/playerBaseTemplate.html.twig", "player/settings/newSettingPage.html.twig", 1);
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
        echo "        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/playerStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/settingsStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coachStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/playerVisitCard.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coach/playerStatPageStyle.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/settingPageStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/hiddenDiv.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "        <div class=\"col-10 mb-5 mt-3 mx-auto p-0 m-0\">
            <div class=\"cover-photo-container\">
                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 19, $this->source); })()), "Team", [], "any", false, false, false, 19), "CoverImage", [], "any", false, false, false, 19))), "html", null, true);
        echo "\" alt=\"\" class=\"cover-photo\">
            </div>
            <div class=\"profile-image-container\">
                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 22, $this->source); })()))), "html", null, true);
        echo "\" alt=\"\" class=\"profile-image m-2\">
                <div class=\"name-holder\">
                    <h4 class=\"text-center\"> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 24, $this->source); })()), "User", [], "any", false, false, false, 24), "Name", [], "any", false, false, false, 24), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 24, $this->source); })()), "User", [], "any", false, false, false, 24), "FName", [], "any", false, false, false, 24), "html", null, true);
        echo "</h4>
                    <h6 class=\"text-center\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 25, $this->source); })()), "Position", [], "any", false, false, false, 25), "Name", [], "any", false, false, false, 25), "html", null, true);
        echo "</h6>
                </div>
                <div class=\"edit-button-holder\">
                    <button class=\" edit-settings\" id=\"edit-settings\"><i class=\"fas fa-pen edit-settings\"></i></button>
                </div>
            </div>

            <div class=\"container col-12 m-0 justify-content-between p-0 row\">
                <div class=\"col-5 m-0 p-0\">
                    <div class=\"col-11 m-0  mt-2 information-holder p-4 \">
                        <div class=\"col-12 m-0 row p-0   text-center \"><h4 class=\"text-center my-auto mx-auto\">Информация за играча</h4></div>
                        <hr class=\"col-8 mx-auto\">
                        <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\">Килограми: ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 37, $this->source); })()), "Weight", [], "any", false, false, false, 37), "html", null, true);
        echo "</h5></div>
                        <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\">Височина: ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerStats"]) || array_key_exists("playerStats", $context) ? $context["playerStats"] : (function () { throw new RuntimeError('Variable "playerStats" does not exist.', 38, $this->source); })()), "Height", [], "any", false, false, false, 38), "html", null, true);
        echo "</h5></div>
                        <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\"> Град на раждане: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 39, $this->source); })()), "User", [], "any", false, false, false, 39), "City", [], "any", false, false, false, 39), "html", null, true);
        echo "</h5></div>
                        <div class=\"col-12 row p-0 mt-3 ml-1\">
                            <h5 class=\"my-auto\">Националност: ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 41, $this->source); })()), "User", [], "any", false, false, false, 41), "City", [], "any", false, false, false, 41), "Country", [], "any", false, false, false, 41), "Name", [], "any", false, false, false, 41), "html", null, true);
        echo "</h5>
                            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 42, $this->source); })()), "User", [], "any", false, false, false, 42), "City", [], "any", false, false, false, 42), "Country", [], "any", false, false, false, 42), "Image", [], "any", false, false, false, 42))), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"col-12 row p-0 mt-3  ml-1\"><h5  class=\"my-auto\">Телефонене номер: ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 44, $this->source); })()), "User", [], "any", false, false, false, 44), "Phone", [], "any", false, false, false, 44), "html", null, true);
        echo "</h5></div>
                        <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\">Емейл: ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 45, $this->source); })()), "User", [], "any", false, false, false, 45), "Email", [], "any", false, false, false, 45), "html", null, true);
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


        <div class=\"row hidden-container\">
            <div class=\"col-12 justify-content-center row hidden-div\">
                <div class=\"text-center information-div\">
                    ";
        // line 88
        if (((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 88, $this->source); })()) == "0")) {
            // line 89
            echo "                        <i class=\"fas fa-user\"></i>
                    ";
        } else {
            // line 91
            echo "
                    ";
        }
        // line 93
        echo "
                    ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_start');
        echo "

                    <label for=\"form_image\" class=\"\">   <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 96, $this->source); })()))), "html", null, true);
        echo "\" alt=\"\" class=\"profile_pic img img-responsive full-width\"></label>

                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "image", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "inputfile", "id" => "uploadImage"]]);
        echo "
                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "save", [], "any", false, false, false, 99), 'row', ["attr" => ["class" => "btn"]]);
        echo "
                    ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
        echo "

                </div>
            </div>
        </div>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coach/settingsHiddenDiv.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "player/settings/newSettingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 105,  270 => 100,  266 => 99,  262 => 98,  257 => 96,  252 => 94,  249 => 93,  245 => 91,  241 => 89,  239 => 88,  193 => 45,  189 => 44,  184 => 42,  180 => 41,  175 => 39,  171 => 38,  167 => 37,  152 => 25,  146 => 24,  141 => 22,  135 => 19,  131 => 17,  121 => 16,  109 => 14,  105 => 13,  101 => 12,  97 => 11,  93 => 10,  89 => 9,  85 => 8,  81 => 7,  77 => 6,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'player/playerBaseTemplate.html.twig' %}
    {% block style %}
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
        <link href=\"{{ asset(\"css/playerStyle.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{ asset(\"css/settingsStyle.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{ asset(\"css/coachStyle.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{ asset(\"mdb/css/mdb.min.css\") }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"css/playerVisitCard.css\") }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"css/coach/playerStatPageStyle.css\") }}\">
        <link href=\"{{ asset(\"css/settingPageStyle.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{ asset(\"css/particles/hiddenDiv.css\") }}\" rel=\"stylesheet\">
        <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/mdb.min.js\") }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/bootstrap.min.js\") }}\"></script>
    {% endblock %}
    {% block body%}
        <div class=\"col-10 mb-5 mt-3 mx-auto p-0 m-0\">
            <div class=\"cover-photo-container\">
                <img src=\"{{ asset(\"images/\"~player.Team.CoverImage) }}\" alt=\"\" class=\"cover-photo\">
            </div>
            <div class=\"profile-image-container\">
                <img src=\"{{asset(\"images/\" ~ image)}}\" alt=\"\" class=\"profile-image m-2\">
                <div class=\"name-holder\">
                    <h4 class=\"text-center\"> {{ player.User.Name }} {{ player.User.FName }}</h4>
                    <h6 class=\"text-center\">{{ player.Position.Name }}</h6>
                </div>
                <div class=\"edit-button-holder\">
                    <button class=\" edit-settings\" id=\"edit-settings\"><i class=\"fas fa-pen edit-settings\"></i></button>
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


        <div class=\"row hidden-container\">
            <div class=\"col-12 justify-content-center row hidden-div\">
                <div class=\"text-center information-div\">
                    {% if image == '0'%}
                        <i class=\"fas fa-user\"></i>
                    {% else %}

                    {% endif %}

                    {{ form_start(form) }}

                    <label for=\"form_image\" class=\"\">   <img src=\"{{asset(\"images/\" ~ image)}}\" alt=\"\" class=\"profile_pic img img-responsive full-width\"></label>

                    {{ form_widget(form.image, {'attr' : {'class' : 'inputfile', 'id' : 'uploadImage'}})  }}
                    {{ form_row(form.save, {'attr' : {'class':'btn'}} ) }}
                    {{ form_end(form) }}

                </div>
            </div>
        </div>
        <script src=\"{{ asset('js/coach/settingsHiddenDiv.js') }}\"></script>

    {% endblock %}", "player/settings/newSettingPage.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\settings\\newSettingPage.html.twig");
    }
}
