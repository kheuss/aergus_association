<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3e583ebeded511c0f095b3322b1b5e839569c26824d0e638f1c7a0054af90afc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7f8096cac688c5be40c775c2ff84974d3eddf50abadce1c8b2e23be46d4ccd7 = $this->env->getExtension("native_profiler");
        $__internal_d7f8096cac688c5be40c775c2ff84974d3eddf50abadce1c8b2e23be46d4ccd7->enter($__internal_d7f8096cac688c5be40c775c2ff84974d3eddf50abadce1c8b2e23be46d4ccd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7f8096cac688c5be40c775c2ff84974d3eddf50abadce1c8b2e23be46d4ccd7->leave($__internal_d7f8096cac688c5be40c775c2ff84974d3eddf50abadce1c8b2e23be46d4ccd7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e03fb1c347f46a54b4542d03cff54f8e80b3b772f530ff36a5fb0eb10302423 = $this->env->getExtension("native_profiler");
        $__internal_2e03fb1c347f46a54b4542d03cff54f8e80b3b772f530ff36a5fb0eb10302423->enter($__internal_2e03fb1c347f46a54b4542d03cff54f8e80b3b772f530ff36a5fb0eb10302423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2e03fb1c347f46a54b4542d03cff54f8e80b3b772f530ff36a5fb0eb10302423->leave($__internal_2e03fb1c347f46a54b4542d03cff54f8e80b3b772f530ff36a5fb0eb10302423_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c798b8f90f218254eea4a744a48dff684ad4848710f61ecdec61862aea261e3d = $this->env->getExtension("native_profiler");
        $__internal_c798b8f90f218254eea4a744a48dff684ad4848710f61ecdec61862aea261e3d->enter($__internal_c798b8f90f218254eea4a744a48dff684ad4848710f61ecdec61862aea261e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c798b8f90f218254eea4a744a48dff684ad4848710f61ecdec61862aea261e3d->leave($__internal_c798b8f90f218254eea4a744a48dff684ad4848710f61ecdec61862aea261e3d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1d65b1e9b38fdc6ba8e59eff0876675c4d45cdad48b100d12fee76a17f8221b = $this->env->getExtension("native_profiler");
        $__internal_b1d65b1e9b38fdc6ba8e59eff0876675c4d45cdad48b100d12fee76a17f8221b->enter($__internal_b1d65b1e9b38fdc6ba8e59eff0876675c4d45cdad48b100d12fee76a17f8221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b1d65b1e9b38fdc6ba8e59eff0876675c4d45cdad48b100d12fee76a17f8221b->leave($__internal_b1d65b1e9b38fdc6ba8e59eff0876675c4d45cdad48b100d12fee76a17f8221b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
