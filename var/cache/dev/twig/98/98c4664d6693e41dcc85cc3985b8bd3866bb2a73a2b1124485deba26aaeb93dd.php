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

/* menu.html.twig */
class __TwigTemplate_37647c496adac93234745710d8fb03dcc05ff635755413bf74fdaf496249ee1c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
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
  </nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
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
  </nav>", "menu.html.twig", "C:\\xampp\\htdocs\\viajesRandom\\templates\\menu.html.twig");
    }
}
