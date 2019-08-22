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

/* footer.html.twig */
class __TwigTemplate_5f6dfbf71724640e1bb860ceebe5833655650efb4b1f5690f1b4960e7aab64ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<div class=\"card  bg-dark card-body\" style=\"min-width: 100%;  position: ; bottom: 0;\">
  
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
        </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card  bg-dark card-body\" style=\"min-width: 100%;  position: ; bottom: 0;\">
  
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
        </div>", "footer.html.twig", "C:\\xampp\\htdocs\\viajesRandom\\templates\\footer.html.twig");
    }
}
