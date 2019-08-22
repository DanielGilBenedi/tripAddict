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

/* base.html.twig */
class __TwigTemplate_10b434e73ca82793871a28dc0717603fb8f004872297e1ac14c13ea38af294b9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>TripAddict</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf\" crossorigin=\"anonymous\">
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>   
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand \" href=\"#\"><img src=\"images/Logo/logo_tripAddict_blanco.png\" style=\"width:70px\"/></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Inicio <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Viaje Sorpresa</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Contacto</a>
        </li>
        
      </ul>
  
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-shopping-cart fa-lg\" aria-hidden=\"true\"></i></a>
        </li>
  
        <!--inicio DROPDOWN-->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user fa-lg\" aria-hidden=\"true\"> </i> Usuario</a>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"#\">Mi cuenta</a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item\" href=\"#\">Mis packs</a>
              
            </div>
        </li>
        
        <!--final DROPDOWN-->
  
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power-off fa-lg\" aria-hidden=\"true\"></i></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Iniciar sesión</a>
        </li>
        
      </ul>
      
    </div>
  </nav>
  <main role=\"main\">
    ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "    <div class=\"card  bg-dark card-body\" style=\"min-width: 100%;  position: ; bottom: 0;\">
  
        <div class=\"card-body font-weight-bold\">
        <div class=\"d-flex justify-content-center\">
      
          <div class=\"col-md-3 col-sm-12 text-sm-left \">
              <h5 class=\"card-title \">Ayuda y servicios</h5>
            <div class='links  text-left '>
            <h6><a href='#'class=\"card-text text-primary  \" >Ayuda y contacto</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\">¿Como funciona?</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\">Condiciones generales</a><br/></h6>
            </div>
          </div>
      
          <div class=\"col-md-3 col-sm-12 text-left\">
            <h5 class=\"card-title\">Empresa</h5>
            <h6><a href='#'class=\"card-text text-primary\">¿Quienes somos?</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\">Politica de privacidad</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\">Nuestro compromiso</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\">Contacto</a><br/></h6>
          </div>
      
          <div class=\"col-md-3 col-sm-12 text-left\">
            <h5 class=\"card-title\">Redes sociales</h5>
            <h6><a href='#'class=\"card-text text-primary\"><i class=\"fa fa-whatsapp\" style='width: 14px'></i>   +34 673409986</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\"><i class=\"fa fa-twitter\" style='width: 14px'></i>    @tripAddict</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\"><i class=\"fa fa-facebook\" style='width: 14px'></i>   tripAddict</a><br/></h6>
          </div>
        </div>
  </main>
   
  
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
       
        ";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 105
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
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

    // line 66
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

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 103,  228 => 102,  210 => 66,  192 => 13,  173 => 5,  161 => 105,  159 => 102,  122 => 67,  120 => 66,  66 => 14,  64 => 13,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>

        <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>TripAddict</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf\" crossorigin=\"anonymous\">
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        {% block stylesheets %}{% endblock %}
    </head>   
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand \" href=\"#\"><img src=\"images/Logo/logo_tripAddict_blanco.png\" style=\"width:70px\"/></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Inicio <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Viaje Sorpresa</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Contacto</a>
        </li>
        
      </ul>
  
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-shopping-cart fa-lg\" aria-hidden=\"true\"></i></a>
        </li>
  
        <!--inicio DROPDOWN-->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user fa-lg\" aria-hidden=\"true\"> </i> Usuario</a>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"#\">Mi cuenta</a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item\" href=\"#\">Mis packs</a>
              
            </div>
        </li>
        
        <!--final DROPDOWN-->
  
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power-off fa-lg\" aria-hidden=\"true\"></i></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Iniciar sesión</a>
        </li>
        
      </ul>
      
    </div>
  </nav>
  <main role=\"main\">
    {% block body %}{% endblock %}
    <div class=\"card  bg-dark card-body\" style=\"min-width: 100%;  position: ; bottom: 0;\">
  
        <div class=\"card-body font-weight-bold\">
        <div class=\"d-flex justify-content-center\">
      
          <div class=\"col-md-3 col-sm-12 text-sm-left \">
              <h5 class=\"card-title \">Ayuda y servicios</h5>
            <div class='links  text-left '>
            <h6><a href='#'class=\"card-text text-primary  \" >Ayuda y contacto</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\">¿Como funciona?</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\">Condiciones generales</a><br/></h6>
            </div>
          </div>
      
          <div class=\"col-md-3 col-sm-12 text-left\">
            <h5 class=\"card-title\">Empresa</h5>
            <h6><a href='#'class=\"card-text text-primary\">¿Quienes somos?</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\">Politica de privacidad</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\">Nuestro compromiso</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\">Contacto</a><br/></h6>
          </div>
      
          <div class=\"col-md-3 col-sm-12 text-left\">
            <h5 class=\"card-title\">Redes sociales</h5>
            <h6><a href='#'class=\"card-text text-primary\"><i class=\"fa fa-whatsapp\" style='width: 14px'></i>   +34 673409986</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\"><i class=\"fa fa-twitter\" style='width: 14px'></i>    @tripAddict</a><br/></h6>
            <h6><a href='#'class=\"card-text text-primary\"><i class=\"fa fa-facebook\" style='width: 14px'></i>   tripAddict</a><br/></h6>
          </div>
        </div>
  </main>
   
  
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
       
        {% block javascripts %}
        
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\proyectoviajes\\templates\\base.html.twig");
    }
}
