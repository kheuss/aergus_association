<?php

/* AERGUSassociationBundle::layout.html.twig */
class __TwigTemplate_f1a68c094ad24cb0aa7eb18b173550e47aeec5cc2cd1685bb4458c1a787b639c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AERGUSassociationBundle::layout.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9930b4bb8f4675ef2687429113df8078f7f27f3cff3f151a0213c2f204a62377 = $this->env->getExtension("native_profiler");
        $__internal_9930b4bb8f4675ef2687429113df8078f7f27f3cff3f151a0213c2f204a62377->enter($__internal_9930b4bb8f4675ef2687429113df8078f7f27f3cff3f151a0213c2f204a62377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9930b4bb8f4675ef2687429113df8078f7f27f3cff3f151a0213c2f204a62377->leave($__internal_9930b4bb8f4675ef2687429113df8078f7f27f3cff3f151a0213c2f204a62377_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_755ce3c40ae557275246b193b221b84c84cd27e408236d32671d4c220ea8a07c = $this->env->getExtension("native_profiler");
        $__internal_755ce3c40ae557275246b193b221b84c84cd27e408236d32671d4c220ea8a07c->enter($__internal_755ce3c40ae557275246b193b221b84c84cd27e408236d32671d4c220ea8a07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/section_ufr.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/ressortissants.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/adresse.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/bureau.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/membre.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_755ce3c40ae557275246b193b221b84c84cd27e408236d32671d4c220ea8a07c->leave($__internal_755ce3c40ae557275246b193b221b84c84cd27e408236d32671d4c220ea8a07c_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 7,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {%extends '::base.html.twig' %}*/
/* */
/* {% block javascripts %}*/
/* 	<script src="{{ asset('assets/js/ajax/section_ufr.js') }}"></script>*/
/* 	<script src="{{ asset('assets/js/ajax/ressortissants.js') }}"></script>*/
/* 	<script src="{{ asset('assets/js/ajax/adresse.js') }}"></script>*/
/* 	<script src="{{ asset('assets/js/ajax/bureau.js') }}"></script>*/
/* 	<script src="{{ asset('assets/js/ajax/membre.js') }}"></script>*/
/* {% endblock %}*/
