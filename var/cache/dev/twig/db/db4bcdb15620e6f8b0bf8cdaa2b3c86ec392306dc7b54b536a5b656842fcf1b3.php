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

/* coaches/settings/settings.html.twig */
class __TwigTemplate_f6aeb2e2a8b0e15b785adf75f13272cb0558d8fc1e41b3d758d6f0568e7a5978 extends \Twig\Template
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
        // line 2
        return "coaches/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/settings/settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaches/settings/settings.html.twig"));

        $this->parent = $this->loadTemplate("coaches/base.html.twig", "coaches/settings/settings.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 4
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/settingPageStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/hiddenDiv.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"container col-12 row mt-3 mb-4\">
    <div class=\"col-10 mx-auto p-0 m-0\">
        <div class=\"cover-photo-container\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 13, $this->source); })()), "Team", [], "any", false, false, false, 13), "CoverImage", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" alt=\"\" class=\"cover-photo\">
        </div>
        <div class=\"profile-image-container\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 16, $this->source); })()))), "html", null, true);
        echo "\" alt=\"\" class=\"profile-image m-2\">
            <div class=\"name-holder\">
                <h4 class=\"text-center\"> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 18, $this->source); })()), "User", [], "any", false, false, false, 18), "Name", [], "any", false, false, false, 18), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 18, $this->source); })()), "User", [], "any", false, false, false, 18), "FName", [], "any", false, false, false, 18), "html", null, true);
        echo "</h4>
                <h6 class=\"text-center\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 19, $this->source); })()), "TeamPosition", [], "any", false, false, false, 19), "Name", [], "any", false, false, false, 19), "html", null, true);
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
                    <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\"> Град на раждане: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 31, $this->source); })()), "User", [], "any", false, false, false, 31), "City", [], "any", false, false, false, 31), "html", null, true);
        echo "</h5></div>
                    <div class=\"col-12 row p-0 mt-3 ml-1\">
                        <h5 class=\"my-auto\">Националност: ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 33, $this->source); })()), "User", [], "any", false, false, false, 33), "City", [], "any", false, false, false, 33), "Country", [], "any", false, false, false, 33), "Name", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 34, $this->source); })()), "User", [], "any", false, false, false, 34), "City", [], "any", false, false, false, 34), "Country", [], "any", false, false, false, 34), "Image", [], "any", false, false, false, 34))), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"col-12 row p-0 mt-3  ml-1\"><h5  class=\"my-auto\">Телефонене номер: ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 36, $this->source); })()), "User", [], "any", false, false, false, 36), "Phone", [], "any", false, false, false, 36), "html", null, true);
        echo "</h5></div>
                    <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\">Емейл: ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 37, $this->source); })()), "User", [], "any", false, false, false, 37), "Email", [], "any", false, false, false, 37), "html", null, true);
        echo "</h5></div>
                </div>
            </div>
            <div class=\"col-7 m-0 mt-2 information-holder align-content-center p-4 \">
                <div class=\"season-player-stats col-12 m-0 p-0  my-auto align-bottom  text-center row\">
                    <h4 class=\"col-12 text-center\">Статистика за сезона</h4>
                    <div class=\"col-lg-4 my-auto col-md-12 col-sm-12 p-0 m-0 row text-center mt-4 align-content-center chart-container\">
                        <div class=\"information-container p-0 m-0 col-12\">
                            <p>10</p>
                        </div>
                        <div class=\"fat-percent-div col-12\">
                            <h3 class=\"col-12\">
                                <span class=\"label green badge fat-percent-badge\">Победи</span>
                            </h3>
                        </div>
                    </div>
                    <div class=\"col-lg-4 my-auto col-sm-12 col-md-12 p-0 m-0 row mt-2 text-center chart-container\">
                        <div class=\"information-container col-12\">
                            <p class=\"p-0\">5</p>
                        </div>
                        <h3 class=\"col-12\">
                            <span class=\"label bg-warning badge \">Равенства</span>
                        </h3>
                    </div>
                    <div class=\"col-lg-4 my-auto col-sm-12 col-md-12 p-0 m-0 row mt-2 text-center chart-container\">
                        <div class=\"information-container col-12\">
                            <p class=\"p-0\">3</p>
                        </div>
                        <h3 class=\"col-12\">
                            <span class=\"label bg-danger badge \">Равенства</span>
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
        // line 79
        if (((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 79, $this->source); })()) == "0")) {
            // line 80
            echo "                <i class=\"fas fa-user\"></i>
            ";
        } else {
            // line 82
            echo "
            ";
        }
        // line 84
        echo "
            ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_start');
        echo "

            <label for=\"form_image\" class=\"\">   <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 87, $this->source); })()))), "html", null, true);
        echo "\" alt=\"\" class=\"profile_pic img img-responsive full-width\"></label>

            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "image", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "inputfile", "id" => "uploadImage"]]);
        echo "
            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "save", [], "any", false, false, false, 90), 'row', ["attr" => ["class" => "btn"]]);
        echo "
            ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        echo "

        </div>
    </div>
</div>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coach/settingsHiddenDiv.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coaches/settings/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 96,  234 => 91,  230 => 90,  226 => 89,  221 => 87,  216 => 85,  213 => 84,  209 => 82,  205 => 80,  203 => 79,  158 => 37,  154 => 36,  149 => 34,  145 => 33,  140 => 31,  125 => 19,  119 => 18,  114 => 16,  108 => 13,  103 => 10,  93 => 9,  81 => 7,  77 => 6,  73 => 5,  69 => 4,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'coaches/base.html.twig' %}
{% block style %}
{{ parent() }}
    <link href=\"{{ asset(\"mdb/css/mdb.min.css\") }}\" rel=\"stylesheet\">
    <link href=\"{{ asset(\"css/settingPageStyle.css\") }}\" rel=\"stylesheet\">
    <link href=\"{{ asset(\"css/particles/hiddenDiv.css\") }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<div class=\"container col-12 row mt-3 mb-4\">
    <div class=\"col-10 mx-auto p-0 m-0\">
        <div class=\"cover-photo-container\">
            <img src=\"{{ asset(\"images/\"~coach.Team.CoverImage) }}\" alt=\"\" class=\"cover-photo\">
        </div>
        <div class=\"profile-image-container\">
            <img src=\"{{asset(\"images/\" ~ image)}}\" alt=\"\" class=\"profile-image m-2\">
            <div class=\"name-holder\">
                <h4 class=\"text-center\"> {{ coach.User.Name }} {{ coach.User.FName }}</h4>
                <h6 class=\"text-center\">{{ coach.TeamPosition.Name }}</h6>
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
                    <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\"> Град на раждане: {{ coach.User.City }}</h5></div>
                    <div class=\"col-12 row p-0 mt-3 ml-1\">
                        <h5 class=\"my-auto\">Националност: {{ coach.User.City.Country.Name }}</h5>
                        <img src=\"{{ asset(\"images/\"~coach.User.City.Country.Image ) }}\" alt=\"\">
                    </div>
                    <div class=\"col-12 row p-0 mt-3  ml-1\"><h5  class=\"my-auto\">Телефонене номер: {{ coach.User.Phone }}</h5></div>
                    <div class=\"col-12 row p-0 mt-3 ml-1\"><h5  class=\"my-auto\">Емейл: {{ coach.User.Email }}</h5></div>
                </div>
            </div>
            <div class=\"col-7 m-0 mt-2 information-holder align-content-center p-4 \">
                <div class=\"season-player-stats col-12 m-0 p-0  my-auto align-bottom  text-center row\">
                    <h4 class=\"col-12 text-center\">Статистика за сезона</h4>
                    <div class=\"col-lg-4 my-auto col-md-12 col-sm-12 p-0 m-0 row text-center mt-4 align-content-center chart-container\">
                        <div class=\"information-container p-0 m-0 col-12\">
                            <p>10</p>
                        </div>
                        <div class=\"fat-percent-div col-12\">
                            <h3 class=\"col-12\">
                                <span class=\"label green badge fat-percent-badge\">Победи</span>
                            </h3>
                        </div>
                    </div>
                    <div class=\"col-lg-4 my-auto col-sm-12 col-md-12 p-0 m-0 row mt-2 text-center chart-container\">
                        <div class=\"information-container col-12\">
                            <p class=\"p-0\">5</p>
                        </div>
                        <h3 class=\"col-12\">
                            <span class=\"label bg-warning badge \">Равенства</span>
                        </h3>
                    </div>
                    <div class=\"col-lg-4 my-auto col-sm-12 col-md-12 p-0 m-0 row mt-2 text-center chart-container\">
                        <div class=\"information-container col-12\">
                            <p class=\"p-0\">3</p>
                        </div>
                        <h3 class=\"col-12\">
                            <span class=\"label bg-danger badge \">Равенства</span>
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
{% endblock %}", "coaches/settings/settings.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\coaches\\settings\\settings.html.twig");
    }
}
