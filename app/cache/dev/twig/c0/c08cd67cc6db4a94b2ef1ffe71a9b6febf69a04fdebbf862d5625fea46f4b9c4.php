<?php

/* AERGUSassociationBundle:AdminRessortissants:modifier.html.twig */
class __TwigTemplate_981967a644310e739cda23ea9460876b02405736bafb19d10cecae9df5cabe76 extends Twig_Template
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
        $__internal_e4a9310e8ff87bf8108295e2bf7ed74db7fa91779f2a8e5d135fc5feac43f3eb = $this->env->getExtension("native_profiler");
        $__internal_e4a9310e8ff87bf8108295e2bf7ed74db7fa91779f2a8e5d135fc5feac43f3eb->enter($__internal_e4a9310e8ff87bf8108295e2bf7ed74db7fa91779f2a8e5d135fc5feac43f3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminRessortissants:modifier.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog modal-lg\">
  \t<div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\">Modifier ce ressortissant</h4>
        </div>
        <div class=\"modal-body\">
         \t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("aergus_association_ressortissant_modifier_confirmer");
        echo "\" method=\"post\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" id=\"ressortissant-modifier\">
\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t<input type=\"submit\" value=\"Mettre à jour\" class=\"ajout-form\">
\t\t\t</form> 
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
        </div>
  \t</div>
</div>
<script>
\t\$(\"document\").ready(function(){
\t\t\$(\"form input.date\").datepicker({
\t\t    dateFormat: 'dd/mm/yy',
\t\t    firstDay:1
\t\t}).attr(\"readonly\",\"readonly\");
\t});
</script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/ressortissants.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_e4a9310e8ff87bf8108295e2bf7ed74db7fa91779f2a8e5d135fc5feac43f3eb->leave($__internal_e4a9310e8ff87bf8108295e2bf7ed74db7fa91779f2a8e5d135fc5feac43f3eb_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminRessortissants:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 27,  41 => 10,  37 => 9,  31 => 8,  22 => 1,);
    }
}
/* <div class="modal-dialog modal-lg">*/
/*   	<div class="modal-content">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*           <h4 class="modal-title">Modifier ce ressortissant</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*          	<form action="{{path('aergus_association_ressortissant_modifier_confirmer')}}" method="post" name="{{id}}" id="ressortissant-modifier">*/
/* 				{{ form_errors(form) }}*/
/* 				{{ form_widget(form) }}*/
/* 				<input type="submit" value="Mettre à jour" class="ajout-form">*/
/* 			</form> */
/*         </div>*/
/*         <div class="modal-footer">*/
/*           <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*         </div>*/
/*   	</div>*/
/* </div>*/
/* <script>*/
/* 	$("document").ready(function(){*/
/* 		$("form input.date").datepicker({*/
/* 		    dateFormat: 'dd/mm/yy',*/
/* 		    firstDay:1*/
/* 		}).attr("readonly","readonly");*/
/* 	});*/
/* </script>*/
/* <script src="{{ asset('assets/js/ajax/ressortissants.js') }}"></script>*/
