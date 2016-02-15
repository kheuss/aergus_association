<?php

/* AERGUSassociationBundle:AdminRessortissants:index.html.twig */
class __TwigTemplate_5c11ea29acdc5c3be25f1116596507ce99d3e6a62eb4c5b1acd55ef46f825fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AERGUSassociationBundle::layout.html.twig", "AERGUSassociationBundle:AdminRessortissants:index.html.twig", 1);
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
        $__internal_f0a189e626d45c965c0d8b5e431126f3eb8ea757761bcc150c9e4bfe680afcfa = $this->env->getExtension("native_profiler");
        $__internal_f0a189e626d45c965c0d8b5e431126f3eb8ea757761bcc150c9e4bfe680afcfa->enter($__internal_f0a189e626d45c965c0d8b5e431126f3eb8ea757761bcc150c9e4bfe680afcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminRessortissants:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0a189e626d45c965c0d8b5e431126f3eb8ea757761bcc150c9e4bfe680afcfa->leave($__internal_f0a189e626d45c965c0d8b5e431126f3eb8ea757761bcc150c9e4bfe680afcfa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff2e198dea8de1305ec60a8e016823c0b1e4c7051f02f4630660d136e29ca133 = $this->env->getExtension("native_profiler");
        $__internal_ff2e198dea8de1305ec60a8e016823c0b1e4c7051f02f4630660d136e29ca133->enter($__internal_ff2e198dea8de1305ec60a8e016823c0b1e4c7051f02f4630660d136e29ca133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"content-ressortissant\">
\t\t<div id=\"groupe-d-action\">
\t\t\t<button type=\"button\" class=\"btn btn-primary bouton-supprimer-multible\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</button>
\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-filter\"></span> Filtrer les ressortissants</button>
\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-cloud-upload\"></span> Importer</button>
\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-cloud-download\"></span> Exporter</button>
\t\t\t<button type=\"button\" class=\"btn btn-primary imprimer-ressortissant\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-print\"></span> Imprimer</button>
\t\t\t<button type=\"button\" class=\"btn btn-primary restaurer-ressortissant\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-refresh\"></span> Restaurer</button>
\t\t</div>
\t\t<div class=\"entete\">
\t\t\t<span class=\"liste\">Liste de tous les ressortissants</span>
\t\t\t<span title=\"ajouter un ressortissant\" class=\"ajout\" data-toggle=\"modal\" data-target=\"#ajouter-un-ressortissant\"></span>
\t\t</div>
\t\t<div id=\"zone-ressorissats\">
\t\t\t<table id=\"ressortissant\" class=\"display\" cellspacing=\"0\" width=\"100%\">
\t\t        <thead>
\t\t            <tr>
\t\t            \t<th class=\"cocher cocher-suppimer-multiple\">Cocher</th>
\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Numero de Téléphone</th>
\t\t\t\t\t\t<th>Date de Naissance</th>
\t\t\t\t\t\t<th>Section</th>
\t\t\t\t\t\t<th>Bachelier</th>
\t\t\t\t\t\t<th class=\"act\">Actions</th>
\t\t\t\t\t</tr>
\t\t        </thead>
\t\t        <tbody>
\t\t        \t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ressortissants"]) ? $context["ressortissants"] : $this->getContext($context, "ressortissants")));
        foreach ($context['_seq'] as $context["_key"] => $context["ressortissant"]) {
            // line 32
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"cocher cocher-suppimer-multiple\"><input type=\"checkbox\" class=\"supprimer-multiple-check\" name=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\"/></td>
\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "numeroDeTelephone", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ressortissant"], "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ressortissant"], "section", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "anneeVenu", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"act\">
\t\t\t\t\t\t\t\t<span><a title=\"afficher ces informations\" name=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\" class=\"afficher-ressortissant action\" href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ressortissant_afficher", array("nom" => $this->getAttribute($context["ressortissant"], "nom", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span></a></span>
\t\t\t\t\t\t\t\t<span><a title=\"modifier\" name=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\" class=\"modifier modifier-ressortissant action\" href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ressortissant_edit", array("nom" => $this->getAttribute($context["ressortissant"], "nom", array()))), "html", null, true);
            echo "\"></a></span>
\t\t\t\t\t\t\t\t<span id=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "nom", array()), "html", null, true);
            echo "\" title=\"supprimer\" class=\"supprimer-ressortissant supprimer action\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressortissant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t        </tbody>
\t\t\t</table>
\t\t\t
\t\t</div>
\t\t<button type=\"button\" class=\"btn btn-primary bouton-supprimer-tous\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer la selection</button>
\t\t<button type=\"button\" class=\"btn btn-primary bouton-supprimer-annuler\" data-dismiss=\"modal\"> Annuler la suppression</button>
\t</div>

\t<div class=\"modal fade\" id=\"ajouter-un-ressortissant\" role=\"dialog\">
\t    <div class=\"modal-dialog modal-lg\">
\t      \t<div class=\"modal-content\">
\t\t        <div class=\"modal-header\">
\t\t          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t          <h4 class=\"modal-title\">Ajouter un nouveau ressortissant</h4>
\t\t        </div>
\t\t        <div class=\"modal-body\">
\t\t         \t<form action=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("aergus_association_ressortissant_ajouter");
        echo "\" method=\"post\" name=\"aergus_association_ressortissant\" id=\"ressortissant-ajouter\">
\t\t\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t\t\t<input type=\"submit\" value=\"Ajouter\" class=\"ajout-form\">
\t\t\t\t\t</form> 
\t\t        </div>
\t\t        <div class=\"modal-footer\">
\t\t          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
\t\t        </div>
\t      \t</div>
\t    </div>
  \t</div>

  \t<div class=\"modal fade\" id=\"modifier-un-ressortissant\" role=\"dialog\"></div>

  \t<div class=\"modal fade\" id=\"supprimer-un-ressortissant\" role=\"dialog\">
\t    <div class=\"modal-dialog\">
\t      \t<div class=\"modal-content\">
\t\t        <div class=\"modal-header\">
\t\t          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t          <h4 class=\"modal-title\">Suppression d'un ressortissant</h4>
\t\t        </div>
\t\t        <div class=\"modal-body\">
\t\t          <div class=\"confirmer\">Voulez-vous réellement supprimer ce ressortissant?</div>
\t\t\t         \t<div class=\"bouton-confirmer\">
\t\t\t\t         \t<button type=\"button\" class=\"btn btn-primary supprimer-le-ressortissant\" >Oui</button>
\t\t\t\t         \t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Non</button>
\t\t\t         \t</div>
\t\t        </div>
\t\t        <div class=\"modal-footer\">
\t\t          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t        </div>
\t      \t</div>
\t    </div>\t
    </div>
\t<script>
\t\t\$(\"document\").ready(function(){
\t\t\t\$(\"form input.date\").datepicker({
\t\t\t    dateFormat: 'dd/mm/yy',
\t\t\t    firstDay:1
\t\t\t}).attr(\"readonly\",\"readonly\");
\t\t\t\$(\"document\").ready(function(){
\t\t\t\t\$('.display').DataTable( {
\t\t\t        \"language\": {
\t\t\t            \"lengthMenu\": \"_MENU_ \",
\t\t\t            \"zeroRecords\": \"Desole aucun resultat n'a été trouvé\",
\t\t\t            \"info\": \" _PAGE_ sur _PAGES_\",
\t\t\t            \"infoEmpty\": \"No records available\",
\t\t\t            \"infoFiltered\": \"(filtered from _MAX_ total records)\"
\t\t\t        }
\t\t\t    });
\t\t\t});
\t\t});
\t</script>\t
";
        
        $__internal_ff2e198dea8de1305ec60a8e016823c0b1e4c7051f02f4630660d136e29ca133->leave($__internal_ff2e198dea8de1305ec60a8e016823c0b1e4c7051f02f4630660d136e29ca133_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminRessortissants:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 65,  152 => 64,  148 => 63,  130 => 47,  118 => 43,  112 => 42,  106 => 41,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  81 => 34,  77 => 33,  74 => 32,  70 => 31,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'AERGUSassociationBundle::layout.html.twig'%}*/
/* {% block body %}*/
/* 	<div class="content-ressortissant">*/
/* 		<div id="groupe-d-action">*/
/* 			<button type="button" class="btn btn-primary bouton-supprimer-multible" data-dismiss="modal"><span class="glyphicon glyphicon-trash"></span> Supprimer</button>*/
/* 			<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-filter"></span> Filtrer les ressortissants</button>*/
/* 			<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-cloud-upload"></span> Importer</button>*/
/* 			<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-cloud-download"></span> Exporter</button>*/
/* 			<button type="button" class="btn btn-primary imprimer-ressortissant" data-dismiss="modal"><span class="glyphicon glyphicon-print"></span> Imprimer</button>*/
/* 			<button type="button" class="btn btn-primary restaurer-ressortissant" data-dismiss="modal"><span class="glyphicon glyphicon-refresh"></span> Restaurer</button>*/
/* 		</div>*/
/* 		<div class="entete">*/
/* 			<span class="liste">Liste de tous les ressortissants</span>*/
/* 			<span title="ajouter un ressortissant" class="ajout" data-toggle="modal" data-target="#ajouter-un-ressortissant"></span>*/
/* 		</div>*/
/* 		<div id="zone-ressorissats">*/
/* 			<table id="ressortissant" class="display" cellspacing="0" width="100%">*/
/* 		        <thead>*/
/* 		            <tr>*/
/* 		            	<th class="cocher cocher-suppimer-multiple">Cocher</th>*/
/* 						<th>Prenom</th>*/
/* 						<th>Nom</th>*/
/* 						<th>Numero de Téléphone</th>*/
/* 						<th>Date de Naissance</th>*/
/* 						<th>Section</th>*/
/* 						<th>Bachelier</th>*/
/* 						<th class="act">Actions</th>*/
/* 					</tr>*/
/* 		        </thead>*/
/* 		        <tbody>*/
/* 		        	{% for ressortissant in ressortissants %}*/
/* 						<tr>*/
/* 							<td class="cocher cocher-suppimer-multiple"><input type="checkbox" class="supprimer-multiple-check" name="{{ressortissant.id}}"/></td>*/
/* 							<td>{{ressortissant.prenom}}</td>*/
/* 							<td>{{ressortissant.nom}}</td>*/
/* 							<td>{{ressortissant.numeroDeTelephone}}</td>*/
/* 							<td>{{ressortissant.dateDeNaissance|date('d-m-Y')}}</td>*/
/* 							<td>{{ressortissant.section.libelle}}</td>*/
/* 							<td>{{ressortissant.anneeVenu}}</td>*/
/* 							<td class="act">*/
/* 								<span><a title="afficher ces informations" name="{{ressortissant.id}}" class="afficher-ressortissant action" href=" {{path('aergus_association_ressortissant_afficher',{'nom': ressortissant.nom})}}"><span class="glyphicon glyphicon-list-alt"></span></a></span>*/
/* 								<span><a title="modifier" name="{{ressortissant.id}}" class="modifier modifier-ressortissant action" href=" {{path('aergus_association_ressortissant_edit',{'nom': ressortissant.nom})}}"></a></span>*/
/* 								<span id="{{ressortissant.nom}}" title="supprimer" class="supprimer-ressortissant supprimer action" name="{{ressortissant.id}}"></span>*/
/* 							</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 		        </tbody>*/
/* 			</table>*/
/* 			*/
/* 		</div>*/
/* 		<button type="button" class="btn btn-primary bouton-supprimer-tous" data-dismiss="modal"><span class="glyphicon glyphicon-trash"></span> Supprimer la selection</button>*/
/* 		<button type="button" class="btn btn-primary bouton-supprimer-annuler" data-dismiss="modal"> Annuler la suppression</button>*/
/* 	</div>*/
/* */
/* 	<div class="modal fade" id="ajouter-un-ressortissant" role="dialog">*/
/* 	    <div class="modal-dialog modal-lg">*/
/* 	      	<div class="modal-content">*/
/* 		        <div class="modal-header">*/
/* 		          <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 		          <h4 class="modal-title">Ajouter un nouveau ressortissant</h4>*/
/* 		        </div>*/
/* 		        <div class="modal-body">*/
/* 		         	<form action="{{path('aergus_association_ressortissant_ajouter')}}" method="post" name="aergus_association_ressortissant" id="ressortissant-ajouter">*/
/* 						{{ form_errors(form) }}*/
/* 						{{ form_widget(form) }}*/
/* 						<input type="submit" value="Ajouter" class="ajout-form">*/
/* 					</form> */
/* 		        </div>*/
/* 		        <div class="modal-footer">*/
/* 		          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/* 		        </div>*/
/* 	      	</div>*/
/* 	    </div>*/
/*   	</div>*/
/* */
/*   	<div class="modal fade" id="modifier-un-ressortissant" role="dialog"></div>*/
/* */
/*   	<div class="modal fade" id="supprimer-un-ressortissant" role="dialog">*/
/* 	    <div class="modal-dialog">*/
/* 	      	<div class="modal-content">*/
/* 		        <div class="modal-header">*/
/* 		          <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 		          <h4 class="modal-title">Suppression d'un ressortissant</h4>*/
/* 		        </div>*/
/* 		        <div class="modal-body">*/
/* 		          <div class="confirmer">Voulez-vous réellement supprimer ce ressortissant?</div>*/
/* 			         	<div class="bouton-confirmer">*/
/* 				         	<button type="button" class="btn btn-primary supprimer-le-ressortissant" >Oui</button>*/
/* 				         	<button type="button" class="btn btn-primary" data-dismiss="modal">Non</button>*/
/* 			         	</div>*/
/* 		        </div>*/
/* 		        <div class="modal-footer">*/
/* 		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/* 		        </div>*/
/* 	      	</div>*/
/* 	    </div>	*/
/*     </div>*/
/* 	<script>*/
/* 		$("document").ready(function(){*/
/* 			$("form input.date").datepicker({*/
/* 			    dateFormat: 'dd/mm/yy',*/
/* 			    firstDay:1*/
/* 			}).attr("readonly","readonly");*/
/* 			$("document").ready(function(){*/
/* 				$('.display').DataTable( {*/
/* 			        "language": {*/
/* 			            "lengthMenu": "_MENU_ ",*/
/* 			            "zeroRecords": "Desole aucun resultat n'a été trouvé",*/
/* 			            "info": " _PAGE_ sur _PAGES_",*/
/* 			            "infoEmpty": "No records available",*/
/* 			            "infoFiltered": "(filtered from _MAX_ total records)"*/
/* 			        }*/
/* 			    });*/
/* 			});*/
/* 		});*/
/* 	</script>	*/
/* {% endblock %}*/
