<?php

/* AERGUSassociationBundle:AdminRessortissants:afficher.html.twig */
class __TwigTemplate_9302bed38d03fb576f4c41947226d23724746a1c8f24da978b90c13d4d978413 extends Twig_Template
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
        $__internal_e71a844d5534280ec7ecacbf8b40f14f00d281b0fd542bd001ac212d228b9618 = $this->env->getExtension("native_profiler");
        $__internal_e71a844d5534280ec7ecacbf8b40f14f00d281b0fd542bd001ac212d228b9618->enter($__internal_e71a844d5534280ec7ecacbf8b40f14f00d281b0fd542bd001ac212d228b9618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminRessortissants:afficher.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog modal-lg\">
  \t<div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\">Informations</h4>
        </div>
        <div class=\"modal-body\">
        \t<div class=\"information\">
        \t\t
\t        \t<div> 
\t        \t\t<span class=\"libelle\">Prenom : </span> 
\t        \t\t<span class=\"content-libelle\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressortissant"]) ? $context["ressortissant"] : $this->getContext($context, "ressortissant")), "prenom", array()), "html", null, true);
        echo "</span>
\t        \t</div>

\t        \t<div> 
\t        \t\t<span class=\"libelle\">Nom : </span> 
\t        \t\t<span class=\"content-libelle\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressortissant"]) ? $context["ressortissant"] : $this->getContext($context, "ressortissant")), "nom", array()), "html", null, true);
        echo "</span>
\t        \t</div>

\t        \t<div> 
\t        \t\t<span class=\"libelle\">Numero de téléphone: </span> 
\t        \t\t<span class=\"content-libelle\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressortissant"]) ? $context["ressortissant"] : $this->getContext($context, "ressortissant")), "numeroDeTelephone", array()), "html", null, true);
        echo "</span>
\t        \t</div>

\t        \t<div> 
\t        \t\t<span class=\"libelle\">Né le : </span> 
\t        \t\t<span class=\"content-libelle\">";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ressortissant"]) ? $context["ressortissant"] : $this->getContext($context, "ressortissant")), "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
        echo "</span>
\t        \t</div>

\t        \t<div> 
\t        \t\t<span class=\"libelle\">Orienté en : </span> 
\t        \t\t<span class=\"content-libelle\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ressortissant"]) ? $context["ressortissant"] : $this->getContext($context, "ressortissant")), "section", array()), "libelle", array()), "html", null, true);
        echo "</span>
\t        \t</div>
\t\t\t\t
\t\t\t\t<div> 
\t        \t\t<span class=\"libelle\">Ufr: </span> 
\t        \t\t<span class=\"content-libelle\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ufr"]) ? $context["ufr"] : $this->getContext($context, "ufr")), "libelle", array()), "html", null, true);
        echo "</span>
\t        \t</div>

\t        \t<div> 
\t        \t\t<span class=\"libelle\">Bachelier en: </span> 
\t        \t\t<span class=\"content-libelle\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressortissant"]) ? $context["ressortissant"] : $this->getContext($context, "ressortissant")), "anneeVenu", array()), "html", null, true);
        echo "</span>
\t        \t</div>
\t\t\t\t
        \t</div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
        </div>
  \t</div>
</div>";
        
        $__internal_e71a844d5534280ec7ecacbf8b40f14f00d281b0fd542bd001ac212d228b9618->leave($__internal_e71a844d5534280ec7ecacbf8b40f14f00d281b0fd542bd001ac212d228b9618_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminRessortissants:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 42,  75 => 37,  67 => 32,  59 => 27,  51 => 22,  43 => 17,  35 => 12,  22 => 1,);
    }
}
/* <div class="modal-dialog modal-lg">*/
/*   	<div class="modal-content">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*           <h4 class="modal-title">Informations</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*         	<div class="information">*/
/*         		*/
/* 	        	<div> */
/* 	        		<span class="libelle">Prenom : </span> */
/* 	        		<span class="content-libelle">{{ressortissant.prenom}}</span>*/
/* 	        	</div>*/
/* */
/* 	        	<div> */
/* 	        		<span class="libelle">Nom : </span> */
/* 	        		<span class="content-libelle">{{ressortissant.nom}}</span>*/
/* 	        	</div>*/
/* */
/* 	        	<div> */
/* 	        		<span class="libelle">Numero de téléphone: </span> */
/* 	        		<span class="content-libelle">{{ressortissant.numeroDeTelephone}}</span>*/
/* 	        	</div>*/
/* */
/* 	        	<div> */
/* 	        		<span class="libelle">Né le : </span> */
/* 	        		<span class="content-libelle">{{ressortissant.dateDeNaissance|date('d-m-Y')}}</span>*/
/* 	        	</div>*/
/* */
/* 	        	<div> */
/* 	        		<span class="libelle">Orienté en : </span> */
/* 	        		<span class="content-libelle">{{ressortissant.section.libelle}}</span>*/
/* 	        	</div>*/
/* 				*/
/* 				<div> */
/* 	        		<span class="libelle">Ufr: </span> */
/* 	        		<span class="content-libelle">{{ufr.libelle}}</span>*/
/* 	        	</div>*/
/* */
/* 	        	<div> */
/* 	        		<span class="libelle">Bachelier en: </span> */
/* 	        		<span class="content-libelle">{{ressortissant.anneeVenu}}</span>*/
/* 	        	</div>*/
/* 				*/
/*         	</div>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*           <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*         </div>*/
/*   	</div>*/
/* </div>*/
