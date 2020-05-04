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

/* admin/base.html.twig */
class __TwigTemplate_16896706d524b69aa1a3979da06a444bfab60b37289f66819493252848213811 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        echo "<html >
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/player/playerStyle.css"), "html", null, true);
        echo "\">
    <link rel=\"styeet\" href=\"  ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coach/particles/addingPlayerBoxesStyle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin/adminStyle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/typography.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coach/trainingPageStyle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" hlesheet\" href=\"  ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coachStyle.css"), "html", null, true);
        echo "\">#}
    <link rel=\"stylesheet\" href=\"  ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/navbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/hiddenFormStyle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"  ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/particles/main-information-charts.css"), "html", null, true);
        echo "\">
    <link rel=\"styleshref=\"  ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coach/coachStyle.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap tooltips -->
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("easy-pie-chart-master/dist/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/playerScore.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mdb/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>
    ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "</head>
<body>
<div class=\"p-0 nav-constainer \">
    <nav class=\"navbar navbar-expand-lg navbar-light \">
        <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/HERMES-ICON.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"logo\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav mr-5\">
                ";
        // line 40
        $this->displayBlock('nav', $context, $blocks);
        // line 47
        echo "
            </div>
            <div class=\" \">
                ";
        // line 50
        if ((((isset($context["profile_img"]) || array_key_exists("profile_img", $context) ? $context["profile_img"] : (function () { throw new RuntimeError('Variable "profile_img" does not exist.', 50, $this->source); })()) == "") || ((isset($context["profile_img"]) || array_key_exists("profile_img", $context) ? $context["profile_img"] : (function () { throw new RuntimeError('Variable "profile_img" does not exist.', 50, $this->source); })()) == null))) {
            // line 51
            echo "                    <button class=\"settings-icon\"> <span class=\"mr-3\"><i class=\"fas fa-user\"></i></span></button>
                ";
        } else {
            // line 53
            echo "                    <a href=\"#\" class=\"profile_pic_a \"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . (isset($context["profile_img"]) || array_key_exists("profile_img", $context) ? $context["profile_img"] : (function () { throw new RuntimeError('Variable "profile_img" does not exist.', 53, $this->source); })()))), "html", null, true);
            echo "\" alt=\"\" class=\"user_profile_img\"></a>
                ";
        }
        // line 55
        echo "
            </div>
        </div>
    </nav>
</div>

";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 41
        echo "                    <a class=\"nav-item nav-link  current-item ml-2\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminHomeAction");
        echo "\">Начална страница </a>
                    <a class=\"nav-item nav-link ml-2 \" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manTeam");
        echo "\">Мъжки отбор</a>
                    <a class=\"nav-item nav-link ml-2 \" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\">Юношески отбори</a>
                    <a class=\"nav-item nav-link ml-2 \" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("youthTeams");
        echo "\">Програма</a>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 61,  223 => 44,  219 => 43,  215 => 42,  210 => 41,  200 => 40,  182 => 28,  170 => 62,  168 => 61,  160 => 55,  154 => 53,  150 => 51,  148 => 50,  143 => 47,  141 => 40,  131 => 33,  125 => 29,  123 => 28,  117 => 25,  113 => 24,  108 => 22,  104 => 21,  100 => 20,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html >
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
    <link href=\"{{ asset(\"mdb/css/mdb.min.css\") }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/player/playerStyle.css\") }}\">
    <link rel=\"styeet\" href=\"  {{ asset(\"css/coach/particles/addingPlayerBoxesStyle.css\") }}\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/admin/adminStyle.css\") }}\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/typography.css\") }}\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/coach/trainingPageStyle.css\") }}\">
    <link rel=\"stylesheet\" hlesheet\" href=\"  {{ asset(\"css/coachStyle.css\") }}\">#}
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/particles/navbar.css\") }}\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/particles/hiddenFormStyle.css\") }}\">
    <link rel=\"stylesheet\" href=\"  {{ asset(\"css/particles/main-information-charts.css\") }}\">
    <link rel=\"styleshref=\"  {{ asset(\"css/coach/coachStyle.css\") }}\">
    <!-- Bootstrap tooltips -->
    <script type=\"text/javascript\" src=\"{{  asset(\"mdb/js/jquery-3.3.1.min.js\")}}\"></script>
    <script type=\"text/javascript\" src=\"{{  asset(\"easy-pie-chart-master/dist/jquery.easypiechart.js\")}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"js/playerScore.js\") }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/mdb.min.js\") }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(\"mdb/js/bootstrap.min.js\") }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js\"></script>
    {% block stylesheets %}{% endblock %}
</head>
<body>
<div class=\"p-0 nav-constainer \">
    <nav class=\"navbar navbar-expand-lg navbar-light \">
        <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset(\"images/HERMES-ICON.jpg\") }}\" alt=\"\" class=\"logo\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav mr-5\">
                {% block nav %}
                    <a class=\"nav-item nav-link  current-item ml-2\" href=\"{{ path(\"adminHomeAction\") }}\">Начална страница </a>
                    <a class=\"nav-item nav-link ml-2 \" href=\"{{ path(\"manTeam\") }}\">Мъжки отбор</a>
                    <a class=\"nav-item nav-link ml-2 \" href=\"{{ path(\"youthTeams\") }}\">Юношески отбори</a>
                    <a class=\"nav-item nav-link ml-2 \" href=\"{{ path(\"youthTeams\") }}\">Програма</a>

                {% endblock  %}

            </div>
            <div class=\" \">
                {% if profile_img == ''  or profile_img == null %}
                    <button class=\"settings-icon\"> <span class=\"mr-3\"><i class=\"fas fa-user\"></i></span></button>
                {% else %}
                    <a href=\"#\" class=\"profile_pic_a \"><img src=\"{{asset(\"images/\" ~ profile_img)}}\" alt=\"\" class=\"user_profile_img\"></a>
                {% endif %}

            </div>
        </div>
    </nav>
</div>

{% block body %}{% endblock %}

</body>
</html>", "admin/base.html.twig", "D:\\Develpment\\Symfony\\Hermes2\\templates\\admin\\base.html.twig");
    }
}
