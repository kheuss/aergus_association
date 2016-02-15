<?php

/* AERGUSassociationBundle:AdminOrientation:modifierUfr.html.twig */
class __TwigTemplate_165769312cddba887080aa2faa9473f3d7767ba81d181ddea5ecc5b9e6ac71a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1a18acdaf2e6ced2f89713916d385be7d3fd1fb2fe856371e7c48badd08f699 = $this->env->getExtension("native_profiler");
        $__internal_e1a18acdaf2e6ced2f89713916d385be7d3fd1fb2fe856371e7c48badd08f699->enter($__internal_e1a18acdaf2e6ced2f89713916d385be7d3fd1fb2fe856371e7c48badd08f699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminOrientation:modifierUfr.html.twig"));

        // line 1
        echo "<div class=\"error\" style=\"color:\"></div>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ufr_modifier", array("libelle" => $this->getAttribute((isset($context["ufr"]) ? $context["ufr"] : $this->getContext($context, "ufr")), "libelle", array()))), "html", null, true);
        echo "\" method=\"post\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ufr"]) ? $context["ufr"] : $this->getContext($context, "ufr")), "id", array()), "html", null, true);
        echo "\" id=\"ufr-modifier\">
\t<div id=\"aergus_ufr_modif_form\">
\t\t<div>
\t\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'label');
        echo "
\t\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'errors');
        echo "
\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget', array("attr" => array("class" => "libelle-modifier")));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomComplet", array()), 'label');
        echo "
\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomComplet", array()), 'errors');
        echo "
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomComplet", array()), 'widget', array("attr" => array("class" => "nomComplet-modifier")));
        echo "
\t\t</div>
\t</div>
\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<input type=\"submit\" value=\"Modifier\" class=\"ajout-form\">
</form>
<button class=\"annuler\">Annuler</button> 

<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/section_ufr.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_e1a18acdaf2e6ced2f89713916d385be7d3fd1fb2fe856371e7c48badd08f699->leave($__internal_e1a18acdaf2e6ced2f89713916d385be7d3fd1fb2fe856371e7c48badd08f699_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminOrientation:modifierUfr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  61 => 15,  55 => 12,  51 => 11,  47 => 10,  41 => 7,  37 => 6,  33 => 5,  25 => 2,  22 => 1,);
    }
}
/* <div class="error" style="color:"></div>*/
/* <form action="{{path('aergus_association_ufr_modifier',{'libelle': ufr.libelle})}}" method="post" name="{{ufr.id}}" id="ufr-modifier">*/
/* 	<div id="aergus_ufr_modif_form">*/
/* 		<div>*/
/* 			{{ form_label(form.libelle)}}*/
/* 			{{ form_errors(form.libelle)}}*/
/* 			{{ form_widget(form.libelle, {'attr': {'class': 'libelle-modifier'}}) }}*/
/* 		</div>*/
/* 		<div>*/
/* 			{{ form_label(form.nomComplet)}}*/
/* 			{{ form_errors(form.nomComplet)}}*/
/* 			{{ form_widget(form.nomComplet, {'attr': {'class': 'nomComplet-modifier'}}) }}*/
/* 		</div>*/
/* 	</div>*/
/* 	{{ form_widget(form)}}*/
/* 	<input type="submit" value="Modifier" class="ajout-form">*/
/* </form>*/
/* <button class="annuler">Annuler</button> */
/* */
/* <script src="{{ asset('assets/js/ajax/section_ufr.js') }}"></script>*/
