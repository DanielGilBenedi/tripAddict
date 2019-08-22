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

/* paquetesgrupo/index.html.twig */
class __TwigTemplate_50efcada8b460e5427a5e6fcb0d20664e9c8f78fd1fa4b6a643e9c581d3e3506 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paquetesgrupo/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paquetesgrupo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paquetesgrupo/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PaquetesgrupoController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"carouselExampleControls\" class=\"carousel slide w-80\" data-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
        <div class=\"card\">
            <img src=\"..\\otros\\Imagenes\\Casa rural\\tarjeta2.PNG\" class=\"card-img-top\" alt=\"...\">
            <div class=\"card-body\">
            <h5 class=\"card-title\">Basico</h5>
            <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
            </div>
            
        </div>
    </div>
    <div class=\"carousel-item\">
        <div class=\"card\">
    <img src=\"..\\otros\\Imagenes\\Casa rural\\tarjeta3.PNG\" class=\"card-img-top\" alt=\"...\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">Estandar</h5>
      <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
    </div>
  </div>
      
    </div>
    <div class=\"carousel-item\">
        <div class=\"card\">
    <img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH8H4u_uHKMHQwUxz0KFniSc-EUASER9uv92tZ4xN1duPTI6BaqA\" class=\"card-img-top\" alt=\"...\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">Premium</h5>
      <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
    </div>
  </div>

    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "paquetesgrupo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PaquetesgrupoController!{% endblock %}

{% block body %}
<div id=\"carouselExampleControls\" class=\"carousel slide w-80\" data-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
        <div class=\"card\">
            <img src=\"..\\otros\\Imagenes\\Casa rural\\tarjeta2.PNG\" class=\"card-img-top\" alt=\"...\">
            <div class=\"card-body\">
            <h5 class=\"card-title\">Basico</h5>
            <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
            </div>
            
        </div>
    </div>
    <div class=\"carousel-item\">
        <div class=\"card\">
    <img src=\"..\\otros\\Imagenes\\Casa rural\\tarjeta3.PNG\" class=\"card-img-top\" alt=\"...\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">Estandar</h5>
      <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
    </div>
  </div>
      
    </div>
    <div class=\"carousel-item\">
        <div class=\"card\">
    <img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH8H4u_uHKMHQwUxz0KFniSc-EUASER9uv92tZ4xN1duPTI6BaqA\" class=\"card-img-top\" alt=\"...\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">Premium</h5>
      <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
    </div>
  </div>

    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>


{% endblock %}
", "paquetesgrupo/index.html.twig", "C:\\xampp\\htdocs\\proyectoviajes\\templates\\paquetesgrupo\\index.html.twig");
    }
}
