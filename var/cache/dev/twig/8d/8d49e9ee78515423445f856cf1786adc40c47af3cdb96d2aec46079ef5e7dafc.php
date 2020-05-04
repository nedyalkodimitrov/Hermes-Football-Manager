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
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        <div class=\"container col-12 row m-0 p-0\">
            <div class=\"col-12 mx-auto m-0 p-0 \">
                <div>
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 16, $this->source); })()), "Team", [], "any", false, false, false, 16), "coverimage", [], "any", false, false, false, 16))), "html", null, true);
        echo "\" alt=\"\">

                </div>
                
            </div>
        </div>

<p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 23, $this->source); })()), "Team", [], "any", false, false, false, 23), "CoverImage", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>

asdasdas


        <div class=\" justify-content-center row mt-4 mb-5\">
            <div class=\"col-12 justify-content-center text-center row \">
                <div class=\"text-center information-div row\">
                    <div class=\"update-information-icon-holder\">
                        <i class=\"fas fa-pen update-information-icon\"></i>
                    </div>
                    <div class=\"col-12 row player-visit-container\">
                       <div class=\"col-lg-4 col-sm-12 col-12 p-1 \">
                           ";
        // line 36
        if ((((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 36, $this->source); })()) == "0") || ((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 36, $this->source); })()) == null))) {
            // line 37
            echo "                               <label for=\"form_image\" class=\"\">    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer m-2\"></label>

                           ";
        } else {
            // line 40
            echo "                               <label for=\"form_image\" class=\"\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 40, $this->source); })()))), "html", null, true);
            echo "\" alt=\"\" class=\"profile-pic-changer m-2\"></label>
                           ";
        }
        // line 43
        echo "                           ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "image", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "inputfile", "id" => "uploadImage"]]);
        echo "
                           ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "save", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "btn"]]);
        echo "
                           <h4> ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["playerName"]) || array_key_exists("playerName", $context) ? $context["playerName"] : (function () { throw new RuntimeError('Variable "playerName" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "</h4>
                           <h6>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 46, $this->source); })()), "Position", [], "any", false, false, false, 46), "Name", [], "any", false, false, false, 46), "html", null, true);
        echo "</h6>

                       </div>
                       <div class=\" col-lg-8 col-sm-12 col-12 mx-auto text-center  justify-content-center\">
                           <div class=\"visiting-player-card-text-holder col-12\">
                               <h3 class=\" justify-content-center row\">Визитна карта </h3>
                           </div>
                           <div class=\"col-12 justify-content-center text-center row 0\">
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 56, $this->source); })()), "Team", [], "any", false, false, false, 56) == null)) {
            // line 57
            echo "                                           <h5>Отбор: Няма</h5>
                                       ";
        } else {
            // line 59
            echo "                                           <h5>Отбор: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 59, $this->source); })()), "Team", [], "any", false, false, false, 59), "Name", [], "any", false, false, false, 59), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 61
        echo "                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Отбелязани голове: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       ";
        // line 68
        if ((((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 68, $this->source); })()) == null) || (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 68, $this->source); })()), "Division", [], "any", false, false, false, 68) == null))) {
            // line 69
            echo "                                           <h5>Първенство: Няма</h5>
                                       ";
        } else {
            // line 71
            echo "                                           <h5>Първенство: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 71, $this->source); })()), "Division", [], "any", false, false, false, 71), "Name", [], "any", false, false, false, 71), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 73
        echo "                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Асистенции: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 80, $this->source); })()), "User", [], "any", false, false, false, 80), "City", [], "any", false, false, false, 80), "Country", [], "any", false, false, false, 80) == null)) {
            // line 81
            echo "                                           <h5>Националност: Не е зададен</h5>
                                       ";
        } else {
            // line 83
            echo "                                           <h5>Националност: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 83, $this->source); })()), "User", [], "any", false, false, false, 83), "City", [], "any", false, false, false, 83), "Country", [], "any", false, false, false, 83), "Name", [], "any", false, false, false, 83), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 85
        echo "                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Изиграни мачове: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       ";
        // line 92
        if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 92, $this->source); })()), "BirthDay", [], "any", false, false, false, 92) == null)) {
            // line 93
            echo "                                           <h5>Ден на раждане: Не е зададен</h5>
                                       ";
        } else {
            // line 95
            echo "                                           <h5>Ден на раждане: ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 95, $this->source); })()), "BirthDay", [], "any", false, false, false, 95), "d.m.Y")), "html", null, true);
            echo "</h5>
                                       ";
        }
        // line 97
        echo "
                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Отбелязани голове: 0</h5>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
";
        // line 108
        echo "                </div>
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
        return array (  273 => 108,  262 => 97,  256 => 95,  252 => 93,  250 => 92,  241 => 85,  235 => 83,  231 => 81,  229 => 80,  220 => 73,  214 => 71,  210 => 69,  208 => 68,  199 => 61,  193 => 59,  189 => 57,  187 => 56,  174 => 46,  170 => 45,  166 => 44,  161 => 43,  155 => 40,  148 => 37,  146 => 36,  130 => 23,  120 => 16,  115 => 13,  105 => 12,  93 => 10,  89 => 9,  85 => 8,  81 => 7,  77 => 6,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
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
        <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/mdb.min.js\") }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/bootstrap.min.js\") }}\"></script>
    {% endblock %}
    {% block body%}
        <div class=\"container col-12 row m-0 p-0\">
            <div class=\"col-12 mx-auto m-0 p-0 \">
                <div>
                    <img src=\"{{ asset(\"images/\"~player.Team.coverimage) }}\" alt=\"\">

                </div>
                
            </div>
        </div>

<p>{{ player.Team.CoverImage }}</p>

asdasdas


        <div class=\" justify-content-center row mt-4 mb-5\">
            <div class=\"col-12 justify-content-center text-center row \">
                <div class=\"text-center information-div row\">
                    <div class=\"update-information-icon-holder\">
                        <i class=\"fas fa-pen update-information-icon\"></i>
                    </div>
                    <div class=\"col-12 row player-visit-container\">
                       <div class=\"col-lg-4 col-sm-12 col-12 p-1 \">
                           {% if image == '0' or image == null  %}
                               <label for=\"form_image\" class=\"\">    <img src=\"{{asset(\"images/user1.png\")}}\" alt=\"\" class=\"profile-pic-changer m-2\"></label>

                           {% else %}
                               <label for=\"form_image\" class=\"\"><img src=\"{{asset(\"images/\" ~ image)}}\" alt=\"\" class=\"profile-pic-changer m-2\"></label>
                           {% endif %}
{#                           <input type=\"file\" id=\"form_image\">#}
                           {{ form_widget(form.image, {'attr' : {'class' : 'inputfile', 'id' : 'uploadImage'}})  }}
                           {{ form_row(form.save, {'attr' : {'class':'btn'}} ) }}
                           <h4> {{ playerName }}</h4>
                           <h6>{{ player.Position.Name }}</h6>

                       </div>
                       <div class=\" col-lg-8 col-sm-12 col-12 mx-auto text-center  justify-content-center\">
                           <div class=\"visiting-player-card-text-holder col-12\">
                               <h3 class=\" justify-content-center row\">Визитна карта </h3>
                           </div>
                           <div class=\"col-12 justify-content-center text-center row 0\">
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       {% if player.Team == null%}
                                           <h5>Отбор: Няма</h5>
                                       {% else %}
                                           <h5>Отбор: {{ player.Team.Name }}</h5>
                                       {% endif %}
                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Отбелязани голове: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       {% if team == null or team.Division == null%}
                                           <h5>Първенство: Няма</h5>
                                       {% else %}
                                           <h5>Първенство: {{ team.Division.Name }}</h5>
                                       {% endif %}
                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Асистенции: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       {% if player.User.City.Country == null%}
                                           <h5>Националност: Не е зададен</h5>
                                       {% else %}
                                           <h5>Националност: {{ player.User.City.Country.Name }}</h5>
                                       {% endif %}
                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Изиграни мачове: 0</h5>
                                   </div>
                               </div>
                               <div class=\"col-lg-12 col-sm-4 col-md-6  mt-4 row\">
                                   <div class=\"col-lg-6 col-sm-4 col-md-6   text-left align-top\">
                                       {% if player.BirthDay == null%}
                                           <h5>Ден на раждане: Не е зададен</h5>
                                       {% else %}
                                           <h5>Ден на раждане: {{ player.BirthDay |date(\"d.m.Y\")|join }}</h5>
                                       {% endif %}

                                   </div>
                                   <div class=\"col-lg-6 col-sm-4 col-md-6 text-left align-top\">
                                           <h5>Отбелязани голове: 0</h5>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
{#                    {{ form_widget(formPlayer.image, {'attr' : {'class' : 'inputfile', 'id' : 'uploadImage'}})  }}#}
{#                    {{ form_row(formPlayer.save, {'attr' : {'class':'btn'}} ) }}#}
                </div>
    {% endblock %}", "player/settings/newSettingPage.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\player\\settings\\newSettingPage.html.twig");
    }
}
