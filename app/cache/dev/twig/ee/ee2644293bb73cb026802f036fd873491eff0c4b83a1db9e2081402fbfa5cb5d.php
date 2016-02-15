<?php

/* AERGUSassociationBundle:AdminOrientation:index.html.twig */
class __TwigTemplate_3c260046058efe4fedbeee7da5e77e91efa8ecb11600b8c0eca317e0eeed8227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AERGUSassociationBundle::layout.html.twig", "AERGUSassociationBundle:AdminOrientation:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AERGUSassociationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc839e14ca2694dd86fa079df0b8e6030eb7f1a5ad4a1fd2744ab5f3998facc2 = $this->env->getExtension("native_profiler");
        $__internal_dc839e14ca2694dd86fa079df0b8e6030eb7f1a5ad4a1fd2744ab5f3998facc2->enter($__internal_dc839e14ca2694dd86fa079df0b8e6030eb7f1a5ad4a1fd2744ab5f3998facc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminOrientation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc839e14ca2694dd86fa079df0b8e6030eb7f1a5ad4a1fd2744ab5f3998facc2->leave($__internal_dc839e14ca2694dd86fa079df0b8e6030eb7f1a5ad4a1fd2744ab5f3998facc2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7483c51c96c524767ce6c7e2b2414533d6cbdd7a6bf235248399ca2d9afdcf5 = $this->env->getExtension("native_profiler");
        $__internal_d7483c51c96c524767ce6c7e2b2414533d6cbdd7a6bf235248399ca2d9afdcf5->enter($__internal_d7483c51c96c524767ce6c7e2b2414533d6cbdd7a6bf235248399ca2d9afdcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div id=\"content-ufr\">
\t\t<div class=\"entete\">
\t\t\t<span class=\"liste\">Listes des Ufr</span>
\t\t\t<span class=\"ajout ajouter\"></span>
\t\t</div>
\t\t<div id=\"zone\">
\t\t\t<table id=\"ufr\" class=\"display\" cellspacing=\"0\" width=\"100%\">
\t\t        <thead>
\t\t            <tr>
\t\t\t\t\t\t<th>Ufr</th>
\t\t\t\t\t\t<th>Nom complet</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t        </thead>
\t\t        <tbody>
\t\t        \t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ufrs"]) ? $context["ufrs"] : $this->getContext($context, "ufrs")));
        foreach ($context['_seq'] as $context["_key"] => $context["ufr"]) {
            // line 19
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ufr"], "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["ufr"], "NomComplet", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span><a title=\"Afficher la liste des sections\" name=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ufr"], "id", array()), "html", null, true);
            echo "\" class=\"ligne action\" href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste", array("id" => $this->getAttribute($context["ufr"], "id", array()))), "html", null, true);
            echo " \"></a></span>
\t\t\t\t\t\t\t\t<span><a id=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["ufr"], "libelle", array()), "html", null, true);
            echo "\" title=\"modifier\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ufr"], "id", array()), "html", null, true);
            echo "\" class=\"modifier modifier-ufr action\" href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ufr_modifier", array("libelle" => $this->getAttribute($context["ufr"], "libelle", array()))), "html", null, true);
            echo " \"></a></span>
\t\t\t\t\t\t\t\t<span><a id=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["ufr"], "libelle", array()), "html", null, true);
            echo "\" title=\"supprimer\" class=\"supprimer supprimer-ufr action\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ufr"], "id", array()), "html", null, true);
            echo "\" href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ufr_delete", array("libelle" => $this->getAttribute($context["ufr"], "libelle", array()))), "html", null, true);
            echo " \"></a></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ufr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t        </tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"formulaire-ajout\">
\t\t\t<h3>Ajouter un Ufr</h3>
\t\t\t<div class=\"error\" style=\"color:\"></div>
\t\t\t<form class=\"aergus_association_section_libelle\" action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ajouter");
        echo "\" method=\"post\" name=\"aergus_association_ufr\" id=\"ufr-ajouter\">
\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t<input type=\"submit\" value=\"Ajouter\" class=\"ajout-form\">
\t\t\t</form>
\t\t\t<button class=\"annuler\">Annuler</button> 
\t\t</div>
\t</div>
\t<div id=\"sections\"></div>
\t<div id=\"delete\"></div>
\t<div id=\"modifier-form\"></div>
\t<script>
\t\t\$(\"document\").ready(function(){
\t\t\t\$('.display').DataTable( {
\t\t        \"language\": {
\t\t            \"lengthMenu\": \"_MENU_ \",
\t\t            \"zeroRecords\": \"Desole aucun resultat n'a été trouvé\",
\t\t            \"info\": \" _PAGE_ sur _PAGES_\",
\t\t            \"infoEmpty\": \"No records available\",
\t\t            \"infoFiltered\": \"(filtered from _MAX_ total records)\"
\t\t        }
\t\t    });
\t\t});
\t</script>\t
";
        
        $__internal_d7483c51c96c524767ce6c7e2b2414533d6cbdd7a6bf235248399ca2d9afdcf5->leave($__internal_d7483c51c96c524767ce6c7e2b2414533d6cbdd7a6bf235248399ca2d9afdcf5_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminOrientation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  113 => 36,  109 => 35,  101 => 29,  87 => 25,  79 => 24,  73 => 23,  68 => 21,  64 => 20,  61 => 19,  57 => 18,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'AERGUSassociationBundle::layout.html.twig'%}*/
/* {% block body %}*/
/* 	<div id="content-ufr">*/
/* 		<div class="entete">*/
/* 			<span class="liste">Listes des Ufr</span>*/
/* 			<span class="ajout ajouter"></span>*/
/* 		</div>*/
/* 		<div id="zone">*/
/* 			<table id="ufr" class="display" cellspacing="0" width="100%">*/
/* 		        <thead>*/
/* 		            <tr>*/
/* 						<th>Ufr</th>*/
/* 						<th>Nom complet</th>*/
/* 						<th>Actions</th>*/
/* 					</tr>*/
/* 		        </thead>*/
/* 		        <tbody>*/
/* 		        	{% for ufr in ufrs %}*/
/* 						<tr>*/
/* 							<td>{{ufr.libelle}}</td>*/
/* 							<td>{{ufr.NomComplet}}</td>*/
/* 							<td>*/
/* 								<span><a title="Afficher la liste des sections" name="{{ufr.id}}" class="ligne action" href=" {{path('liste',{'id': ufr.id })}} "></a></span>*/
/* 								<span><a id="{{ufr.libelle}}" title="modifier" name="{{ufr.id}}" class="modifier modifier-ufr action" href=" {{path('aergus_association_ufr_modifier',{'libelle': ufr.libelle})}} "></a></span>*/
/* 								<span><a id="{{ufr.libelle}}" title="supprimer" class="supprimer supprimer-ufr action" name="{{ufr.id}}" href=" {{path('aergus_association_ufr_delete',{'libelle': ufr.libelle })}} "></a></span>*/
/* 							</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 		        </tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 		<div class="formulaire-ajout">*/
/* 			<h3>Ajouter un Ufr</h3>*/
/* 			<div class="error" style="color:"></div>*/
/* 			<form class="aergus_association_section_libelle" action="{{path('ajouter')}}" method="post" name="aergus_association_ufr" id="ufr-ajouter">*/
/* 				{{ form_errors(form) }}*/
/* 				{{ form_widget(form) }}*/
/* 				<input type="submit" value="Ajouter" class="ajout-form">*/
/* 			</form>*/
/* 			<button class="annuler">Annuler</button> */
/* 		</div>*/
/* 	</div>*/
/* 	<div id="sections"></div>*/
/* 	<div id="delete"></div>*/
/* 	<div id="modifier-form"></div>*/
/* 	<script>*/
/* 		$("document").ready(function(){*/
/* 			$('.display').DataTable( {*/
/* 		        "language": {*/
/* 		            "lengthMenu": "_MENU_ ",*/
/* 		            "zeroRecords": "Desole aucun resultat n'a été trouvé",*/
/* 		            "info": " _PAGE_ sur _PAGES_",*/
/* 		            "infoEmpty": "No records available",*/
/* 		            "infoFiltered": "(filtered from _MAX_ total records)"*/
/* 		        }*/
/* 		    });*/
/* 		});*/
/* 	</script>	*/
/* {% endblock %}*/
/* */
