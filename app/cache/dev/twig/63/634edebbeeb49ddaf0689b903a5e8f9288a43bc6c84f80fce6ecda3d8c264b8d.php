<?php

/* AERGUSassociationBundle:AdminMembre:index.html.twig */
class __TwigTemplate_39cffb6ddc520bb84d9868102244b5cbb6a0f968ce8a97830178799bdfbca0d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AERGUSassociationBundle::layout.html.twig", "AERGUSassociationBundle:AdminMembre:index.html.twig", 1);
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
        $__internal_6d6f2af0d5d124bdddd0c50410051d1764869902a774187b75a4c2ed5b05e8a4 = $this->env->getExtension("native_profiler");
        $__internal_6d6f2af0d5d124bdddd0c50410051d1764869902a774187b75a4c2ed5b05e8a4->enter($__internal_6d6f2af0d5d124bdddd0c50410051d1764869902a774187b75a4c2ed5b05e8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminMembre:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d6f2af0d5d124bdddd0c50410051d1764869902a774187b75a4c2ed5b05e8a4->leave($__internal_6d6f2af0d5d124bdddd0c50410051d1764869902a774187b75a4c2ed5b05e8a4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_45227ae857a1af2374ea99f8b3c50027f0c828220e7fd07da72fc4c5078dcafd = $this->env->getExtension("native_profiler");
        $__internal_45227ae857a1af2374ea99f8b3c50027f0c828220e7fd07da72fc4c5078dcafd->enter($__internal_45227ae857a1af2374ea99f8b3c50027f0c828220e7fd07da72fc4c5078dcafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"content-membre\">
\t\t<div id=\"groupe-d-action\">
\t\t\t<button type=\"button\" class=\"btn btn-primary bouton-supprimer-multible\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</button>
\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-filter\"></span> Filtrer les membres</button>
\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-cloud-upload\"></span> Importer</button>
\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-cloud-download\"></span> Exporter</button>
\t\t\t<button type=\"button\" class=\"btn btn-primary imprimer-membre\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-print\"></span> Imprimer</button>
\t\t\t<button type=\"button\" class=\"btn btn-primary restaurer-membre\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-refresh\"></span> Restaurer</button>
\t\t</div>
\t\t<div class=\"entete\">
\t\t\t<span class=\"liste\">Liste de tous les membres</span>
\t\t\t<span title=\"ajouter un membre\" class=\"ajout\" data-toggle=\"modal\" data-target=\"#ajouter-un-membre\"></span>
\t\t</div>
\t\t<div id=\"zone-ressorissats\">
\t\t\t<table id=\"membre\" class=\"display\" cellspacing=\"0\" width=\"100%\">
\t\t        <thead>
\t\t            <tr>
\t\t            \t<th class=\"cocher cocher-suppimer-multiple\">Cocher</th>
\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Numero de Téléphone</th>
\t\t\t\t\t\t<th>Date de Naissance</th>
\t\t\t\t\t\t<th>Niveau</th>
\t\t\t\t\t\t<th>Section</th>
\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t<th class=\"act\">Actions</th>
\t\t\t\t\t</tr>
\t\t        </thead>
\t\t        <tbody>
\t\t        \t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 33
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"cocher cocher-suppimer-multiple\"><input type=\"checkbox\" class=\"supprimer-multiple-check\" name=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "id", array()), "html", null, true);
            echo "\"/></td>
\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["membre"], "ressortissant", array()), "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["membre"], "ressortissant", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["membre"], "ressortissant", array()), "numeroDeTelephone", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["membre"], "ressortissant", array()), "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["membre"], "niveau", array()), "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["membre"], "section", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "numeroDeChambre", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["membre"], "block", array()), "block", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["membre"], "village", array()), "village", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"act\">
\t\t\t\t\t\t\t\t<span><a title=\"afficher ces informations\" class=\"afficher-membre action\"><span class=\"glyphicon glyphicon-list-alt\"></span></a></span>
\t\t\t\t\t\t\t\t<span><a title=\"modifier\" class=\"modifier modifier-membre action\"></a></span>
\t\t\t\t\t\t\t\t<span title=\"supprimer\" class=\"supprimer-membre supprimer action\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t        </tbody>
\t\t\t</table>\t
\t\t</div>

\t\t<div class=\"modal fade\" id=\"ajouter-un-membre\" role=\"dialog\">
\t    <div class=\"modal-dialog modal-lg\">
\t      \t<div class=\"modal-content\">
\t\t        <div class=\"modal-header\">
\t\t          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t          <h4 class=\"modal-title\">Inscription d'un membre</h4>
\t\t        </div>
\t\t        <div class=\"modal-body\">
\t\t        <table id=\"ressortissant\" class=\"display\" cellspacing=\"0\" width=\"100%\">
\t\t        <thead>
\t\t            <tr>
\t\t            \t<th class=\"cocher\">Cocher</th>
\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Date de Naissance</th>
\t\t\t\t\t\t<th>Section</th>
\t\t\t\t\t\t<th>Bachelier</th>
\t\t\t\t\t</tr>
\t\t        </thead>
\t\t        <tbody>
\t\t        \t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ressortissants"]) ? $context["ressortissants"] : $this->getContext($context, "ressortissants")));
        foreach ($context['_seq'] as $context["_key"] => $context["ressortissant"]) {
            // line 74
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"cocher\"><input type=\"radio\" class=\"ressortissant-membre-check\" id=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\" name=\"radio\"/></td>
\t\t\t\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ressortissant"], "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ressortissant"], "section", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "anneeVenu", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressortissant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t        </tbody>
\t\t\t</table>
\t\t        </div>
\t\t        <div class=\"modal-footer\">
\t\t          <button type=\"button\" class=\"btn btn-primary terminer-membre\" name=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["bureau"]) ? $context["bureau"] : $this->getContext($context, "bureau")), "html", null, true);
        echo "\">Terminer</button>
\t\t          <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Annuler</button>
\t\t        </div>
\t      \t</div>
\t    </div>
  \t</div>
  \t<input type=\"hidden\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["bureau"]) ? $context["bureau"] : $this->getContext($context, "bureau")), "html", null, true);
        echo "\" id=\"bureau\">
\t<div class=\"modal fade\" id=\"ajouter-le-membre\" role=\"dialog\"></div>
\t</div>

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
        
        $__internal_45227ae857a1af2374ea99f8b3c50027f0c828220e7fd07da72fc4c5078dcafd->leave($__internal_45227ae857a1af2374ea99f8b3c50027f0c828220e7fd07da72fc4c5078dcafd_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminMembre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 93,  190 => 87,  184 => 83,  175 => 80,  171 => 79,  167 => 78,  163 => 77,  159 => 76,  155 => 75,  152 => 74,  148 => 73,  122 => 49,  106 => 41,  102 => 40,  98 => 39,  94 => 38,  90 => 37,  86 => 36,  82 => 35,  78 => 34,  75 => 33,  71 => 32,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'AERGUSassociationBundle::layout.html.twig'%}*/
/* {% block body %}*/
/* 	<div class="content-membre">*/
/* 		<div id="groupe-d-action">*/
/* 			<button type="button" class="btn btn-primary bouton-supprimer-multible" data-dismiss="modal"><span class="glyphicon glyphicon-trash"></span> Supprimer</button>*/
/* 			<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-filter"></span> Filtrer les membres</button>*/
/* 			<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-cloud-upload"></span> Importer</button>*/
/* 			<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-cloud-download"></span> Exporter</button>*/
/* 			<button type="button" class="btn btn-primary imprimer-membre" data-dismiss="modal"><span class="glyphicon glyphicon-print"></span> Imprimer</button>*/
/* 			<button type="button" class="btn btn-primary restaurer-membre" data-dismiss="modal"><span class="glyphicon glyphicon-refresh"></span> Restaurer</button>*/
/* 		</div>*/
/* 		<div class="entete">*/
/* 			<span class="liste">Liste de tous les membres</span>*/
/* 			<span title="ajouter un membre" class="ajout" data-toggle="modal" data-target="#ajouter-un-membre"></span>*/
/* 		</div>*/
/* 		<div id="zone-ressorissats">*/
/* 			<table id="membre" class="display" cellspacing="0" width="100%">*/
/* 		        <thead>*/
/* 		            <tr>*/
/* 		            	<th class="cocher cocher-suppimer-multiple">Cocher</th>*/
/* 						<th>Prenom</th>*/
/* 						<th>Nom</th>*/
/* 						<th>Numero de Téléphone</th>*/
/* 						<th>Date de Naissance</th>*/
/* 						<th>Niveau</th>*/
/* 						<th>Section</th>*/
/* 						<th>Adresse</th>*/
/* 						<th class="act">Actions</th>*/
/* 					</tr>*/
/* 		        </thead>*/
/* 		        <tbody>*/
/* 		        	{% for membre in membres %}*/
/* 						<tr>*/
/* 							<td class="cocher cocher-suppimer-multiple"><input type="checkbox" class="supprimer-multiple-check" name="{{membre.id}}"/></td>*/
/* 							<td>{{membre.ressortissant.prenom}}</td>*/
/* 							<td>{{membre.ressortissant.nom}}</td>*/
/* 							<td>{{membre.ressortissant.numeroDeTelephone}}</td>*/
/* 							<td>{{membre.ressortissant.dateDeNaissance|date('d-m-Y')}}</td>*/
/* 							<td>{{membre.niveau.niveau}}</td>*/
/* 							<td>{{membre.section.libelle}}</td>*/
/* 							<td>{{membre.numeroDeChambre}}{{membre.block.block}}{{membre.village.village}}</td>*/
/* 							<td class="act">*/
/* 								<span><a title="afficher ces informations" class="afficher-membre action"><span class="glyphicon glyphicon-list-alt"></span></a></span>*/
/* 								<span><a title="modifier" class="modifier modifier-membre action"></a></span>*/
/* 								<span title="supprimer" class="supprimer-membre supprimer action"></span>*/
/* 							</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 		        </tbody>*/
/* 			</table>	*/
/* 		</div>*/
/* */
/* 		<div class="modal fade" id="ajouter-un-membre" role="dialog">*/
/* 	    <div class="modal-dialog modal-lg">*/
/* 	      	<div class="modal-content">*/
/* 		        <div class="modal-header">*/
/* 		          <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 		          <h4 class="modal-title">Inscription d'un membre</h4>*/
/* 		        </div>*/
/* 		        <div class="modal-body">*/
/* 		        <table id="ressortissant" class="display" cellspacing="0" width="100%">*/
/* 		        <thead>*/
/* 		            <tr>*/
/* 		            	<th class="cocher">Cocher</th>*/
/* 						<th>Prenom</th>*/
/* 						<th>Nom</th>*/
/* 						<th>Date de Naissance</th>*/
/* 						<th>Section</th>*/
/* 						<th>Bachelier</th>*/
/* 					</tr>*/
/* 		        </thead>*/
/* 		        <tbody>*/
/* 		        	{% for ressortissant in ressortissants %}*/
/* 						<tr>*/
/* 							<td class="cocher"><input type="radio" class="ressortissant-membre-check" id="{{ressortissant.id}}" name="radio"/></td>*/
/* 							<td>{{ressortissant.prenom}}</td>*/
/* 							<td>{{ressortissant.nom}}</td>*/
/* 							<td>{{ressortissant.dateDeNaissance|date('d-m-Y')}}</td>*/
/* 							<td>{{ressortissant.section.libelle}}</td>*/
/* 							<td>{{ressortissant.anneeVenu}}</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 		        </tbody>*/
/* 			</table>*/
/* 		        </div>*/
/* 		        <div class="modal-footer">*/
/* 		          <button type="button" class="btn btn-primary terminer-membre" name="{{bureau}}">Terminer</button>*/
/* 		          <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>*/
/* 		        </div>*/
/* 	      	</div>*/
/* 	    </div>*/
/*   	</div>*/
/*   	<input type="hidden" value="{{bureau}}" id="bureau">*/
/* 	<div class="modal fade" id="ajouter-le-membre" role="dialog"></div>*/
/* 	</div>*/
/* */
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
