<?php

/* AERGUSassociationBundle:AdminOrientation:modifierUfrSection.html.twig */
class __TwigTemplate_1ae96f853ebda537e506602a4fd9133652f66610cc783a5293ef6faa91cfaa21 extends Twig_Template
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
        $__internal_dffd989027940c7aad5936fd5c037e587f74607a530e8c8b51cca2bc06c11e7d = $this->env->getExtension("native_profiler");
        $__internal_dffd989027940c7aad5936fd5c037e587f74607a530e8c8b51cca2bc06c11e7d->enter($__internal_dffd989027940c7aad5936fd5c037e587f74607a530e8c8b51cca2bc06c11e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminOrientation:modifierUfrSection.html.twig"));

        // line 1
        echo "<div class=\"error\" style=\"color:\"></div>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ufr_section_modifier", array("libelle" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "libelle", array()))), "html", null, true);
        echo "\" method=\"post\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id", array()), "html", null, true);
        echo "\" id=\"section-modifier\">
\t<div id=\"aergus_ufr_section_modif_form\">
\t\t<div>
\t\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'label', array("label" => "Section"));
        echo "
\t\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'errors');
        echo "
\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget', array("attr" => array("class" => "libelle-modifier-section")));
        echo "
\t\t</div>
\t</div>
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<input type=\"submit\" value=\"Modifier\" class=\"ajout-form\">
</form>
<button class=\"annuler\">Annuler</button> 

<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/section_ufr.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_dffd989027940c7aad5936fd5c037e587f74607a530e8c8b51cca2bc06c11e7d->leave($__internal_dffd989027940c7aad5936fd5c037e587f74607a530e8c8b51cca2bc06c11e7d_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminOrientation:modifierUfrSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  47 => 10,  41 => 7,  37 => 6,  33 => 5,  25 => 2,  22 => 1,);
    }
}
/* <div class="error" style="color:"></div>*/
/* <form action="{{path('aergus_association_ufr_section_modifier',{'libelle': section.libelle})}}" method="post" name="{{section.id}}" id="section-modifier">*/
/* 	<div id="aergus_ufr_section_modif_form">*/
/* 		<div>*/
/* 			{{ form_label(form.libelle,"Section")}}*/
/* 			{{ form_errors(form.libelle)}}*/
/* 			{{ form_widget(form.libelle, {'attr': {'class': 'libelle-modifier-section'}}) }}*/
/* 		</div>*/
/* 	</div>*/
/* 	{{ form_widget(form)}}*/
/* 	<input type="submit" value="Modifier" class="ajout-form">*/
/* </form>*/
/* <button class="annuler">Annuler</button> */
/* */
/* <script src="{{ asset('assets/js/ajax/section_ufr.js') }}"></script>*/
