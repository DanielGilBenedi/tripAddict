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

/* packages/index.html.twig */
class __TwigTemplate_42ea2d9d77e9efa64d5adefffaec5b9585ed2fbe6849b5cb7d2eb4594351ae3b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "packages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "packages/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "packages/index.html.twig", 1);
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

        echo "Hello TAController!";
        
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
        echo "<div class=\"card-group\">
        <h6 class=\"card-title\">grupo de paquetes 1</h6>
        <div class=\"card\">
          <img src=\"../otros\\Imagenes\\Hoteles\\02-Buhardilla-Calle.jpg\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">paquete 1 </h5>
            <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class=\"card\">
          <img src=\"../otros\\Imagenes\\Hoteles\\02-Buhardilla-Calle.jpg\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">paquete 2 </h5>
            <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class=\"card\">
          <img src=\"../otros\\Imagenes\\Hoteles\\02-Buhardilla-Calle.jpg\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">paquete 3 </h5>
            <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "packages/index.html.twig";
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

{% block title %}Hello TAController!{% endblock %}

{% block body %}
<div class=\"card-group\">
        <h6 class=\"card-title\">grupo de paquetes 1</h6>
        <div class=\"card\">
          <img src=\"../otros\\Imagenes\\Hoteles\\02-Buhardilla-Calle.jpg\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">paquete 1 </h5>
            <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class=\"card\">
          <img src=\"../otros\\Imagenes\\Hoteles\\02-Buhardilla-Calle.jpg\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">paquete 2 </h5>
            <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class=\"card\">
          <img src=\"../otros\\Imagenes\\Hoteles\\02-Buhardilla-Calle.jpg\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">paquete 3 </h5>
            <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
{% endblock %}", "packages/index.html.twig", "C:\\xampp\\htdocs\\tripAddict2\\templates\\packages\\index.html.twig");
    }
}
