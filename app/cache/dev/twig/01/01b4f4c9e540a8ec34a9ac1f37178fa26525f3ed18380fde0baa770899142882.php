<?php

/* AERGUSassociationBundle:AdminRessortissants:cocherRestaurer.html.twig */
class __TwigTemplate_ba7dda9e09d3e9b7b4e4388a68a7d364ae171efe6eede07c57e74439485b6a9c extends Twig_Template
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
        $__internal_451ba19e1325c6956eab8c3cdcb58d0a52bbe2bcd7945e47338ea76b13ad6975 = $this->env->getExtension("native_profiler");
        $__internal_451ba19e1325c6956eab8c3cdcb58d0a52bbe2bcd7945e47338ea76b13ad6975->enter($__internal_451ba19e1325c6956eab8c3cdcb58d0a52bbe2bcd7945e47338ea76b13ad6975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminRessortissants:cocherRestaurer.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog modal-lg\">
  \t<div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\">Restaurer des ressortissants supprimés</h4>
        </div>
        <div class=\"modal-body\">
    \t\t<table id=\"ressortissant-restaurer\" class=\"display\" cellspacing=\"0\" width=\"100%\">
\t\t\t    <thead>
\t\t\t        <tr>
\t\t\t\t\t\t<th class=\"cocher\">Cocher</th>
\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Numero de Téléphone</th>
\t\t\t\t\t\t<th>Date de Naissance</th>
\t\t\t\t\t\t<th>Section</th>
\t\t\t\t\t\t<th>Bachelier</th>
\t\t\t\t\t</tr>
\t\t\t    </thead>
\t\t\t    <tbody>
\t\t\t    \t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ressortissants"]) ? $context["ressortissants"] : $this->getContext($context, "ressortissants")));
        foreach ($context['_seq'] as $context["_key"] => $context["ressortissant"]) {
            // line 22
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"cocher\"><input type=\"checkbox\" class=\"cocher-restaurer\" name=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\"/></td>
\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "numeroDeTelephone", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ressortissant"], "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ressortissant"], "section", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "anneeVenu", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressortissant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t    </tbody>
\t\t\t</table>
\t\t\t<button type=\"button\" class=\"btn btn-primary restaurer-les-ressortissants\">Restaurer</button>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
        </div>
  \t</div>
</div>
<script>
\t\$(\"document\").ready(function(){
\t\t\$('#ressortissant-restaurer').DataTable( {
\t        \"language\": {
\t            \"lengthMenu\": \"_MENU_ \",
\t            \"zeroRecords\": \"Desole aucun resultat n'a été trouvé\",
\t            \"info\": \" _PAGE_ sur _PAGES_\",
\t            \"infoEmpty\": \"No records available\",
\t            \"infoFiltered\": \"(filtered from _MAX_ total records)\"
\t        }
\t    });
\t});
</script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/ressortissants.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_451ba19e1325c6956eab8c3cdcb58d0a52bbe2bcd7945e47338ea76b13ad6975->leave($__internal_451ba19e1325c6956eab8c3cdcb58d0a52bbe2bcd7945e47338ea76b13ad6975_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminRessortissants:cocherRestaurer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 54,  84 => 32,  75 => 29,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  55 => 24,  51 => 23,  48 => 22,  44 => 21,  22 => 1,);
    }
}
/* <div class="modal-dialog modal-lg">*/
/*   	<div class="modal-content">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*           <h4 class="modal-title">Restaurer des ressortissants supprimés</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*     		<table id="ressortissant-restaurer" class="display" cellspacing="0" width="100%">*/
/* 			    <thead>*/
/* 			        <tr>*/
/* 						<th class="cocher">Cocher</th>*/
/* 						<th>Prenom</th>*/
/* 						<th>Nom</th>*/
/* 						<th>Numero de Téléphone</th>*/
/* 						<th>Date de Naissance</th>*/
/* 						<th>Section</th>*/
/* 						<th>Bachelier</th>*/
/* 					</tr>*/
/* 			    </thead>*/
/* 			    <tbody>*/
/* 			    	{% for ressortissant in ressortissants %}*/
/* 						<tr>*/
/* 							<td class="cocher"><input type="checkbox" class="cocher-restaurer" name="{{ressortissant.id}}"/></td>*/
/* 							<td>{{ressortissant.prenom}}</td>*/
/* 							<td>{{ressortissant.nom}}</td>*/
/* 							<td>{{ressortissant.numeroDeTelephone}}</td>*/
/* 							<td>{{ressortissant.dateDeNaissance|date('d-m-Y')}}</td>*/
/* 							<td>{{ressortissant.section.libelle}}</td>*/
/* 							<td>{{ressortissant.anneeVenu}}</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 			    </tbody>*/
/* 			</table>*/
/* 			<button type="button" class="btn btn-primary restaurer-les-ressortissants">Restaurer</button>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*           <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*         </div>*/
/*   	</div>*/
/* </div>*/
/* <script>*/
/* 	$("document").ready(function(){*/
/* 		$('#ressortissant-restaurer').DataTable( {*/
/* 	        "language": {*/
/* 	            "lengthMenu": "_MENU_ ",*/
/* 	            "zeroRecords": "Desole aucun resultat n'a été trouvé",*/
/* 	            "info": " _PAGE_ sur _PAGES_",*/
/* 	            "infoEmpty": "No records available",*/
/* 	            "infoFiltered": "(filtered from _MAX_ total records)"*/
/* 	        }*/
/* 	    });*/
/* 	});*/
/* </script>*/
/* <script src="{{ asset('assets/js/ajax/ressortissants.js') }}"></script>*/
