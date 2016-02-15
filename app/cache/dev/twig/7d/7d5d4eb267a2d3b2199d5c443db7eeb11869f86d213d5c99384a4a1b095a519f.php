<?php

/* AERGUSassociationBundle:AdminRessortissants:restaurer.html.twig */
class __TwigTemplate_dcc6180d6adc53f41c332fcbeece87fdffc480a6721135c361a660da0d679ff9 extends Twig_Template
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
        $__internal_cdc183d2a8a17e8c8760a30442046b5794fb9d24337609aea279738c3b72ca7d = $this->env->getExtension("native_profiler");
        $__internal_cdc183d2a8a17e8c8760a30442046b5794fb9d24337609aea279738c3b72ca7d->enter($__internal_cdc183d2a8a17e8c8760a30442046b5794fb9d24337609aea279738c3b72ca7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminRessortissants:restaurer.html.twig"));

        // line 1
        echo "<table id=\"ressortissant\" class=\"display\" cellspacing=\"0\" width=\"100%\">
    <thead>
        <tr>
\t\t\t<th>Prenom</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Numero de Téléphone</th>
\t\t\t<th>Date de Naissance</th>
\t\t\t<th>Section</th>
\t\t\t<th>Bachelier</th>
\t\t\t<th class=\"act\">Actions</th>
\t\t</tr>
    </thead>
    <tbody>
    \t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ressortissants"]) ? $context["ressortissants"] : $this->getContext($context, "ressortissants")));
        foreach ($context['_seq'] as $context["_key"] => $context["ressortissant"]) {
            // line 15
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "numeroDeTelephone", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ressortissant"], "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ressortissant"], "section", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "anneeVenu", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"act\">
\t\t\t\t\t<span><a title=\"afficher ces informations\" name=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\" class=\"afficher-ressortissant action\" href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ressortissant_afficher", array("nom" => $this->getAttribute($context["ressortissant"], "nom", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span></a></span>
\t\t\t\t\t<span><a title=\"modifier\" name=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\" class=\"modifier modifier-ressortissant action\" href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ressortissant_edit", array("nom" => $this->getAttribute($context["ressortissant"], "nom", array()))), "html", null, true);
            echo "\"></a></span>
\t\t\t\t\t<span id=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "nom", array()), "html", null, true);
            echo "\" title=\"supprimer\" class=\"supprimer-ressortissant supprimer action\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\"></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressortissant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tbody>
</table>
<script>
\t\$(\"document\").ready(function(){
\t\t\$('#ressortissant').DataTable( {
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
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/ressortissants.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_cdc183d2a8a17e8c8760a30442046b5794fb9d24337609aea279738c3b72ca7d->leave($__internal_cdc183d2a8a17e8c8760a30442046b5794fb9d24337609aea279738c3b72ca7d_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminRessortissants:restaurer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 44,  93 => 29,  81 => 25,  75 => 24,  69 => 23,  64 => 21,  60 => 20,  56 => 19,  52 => 18,  48 => 17,  44 => 16,  41 => 15,  37 => 14,  22 => 1,);
    }
}
/* <table id="ressortissant" class="display" cellspacing="0" width="100%">*/
/*     <thead>*/
/*         <tr>*/
/* 			<th>Prenom</th>*/
/* 			<th>Nom</th>*/
/* 			<th>Numero de Téléphone</th>*/
/* 			<th>Date de Naissance</th>*/
/* 			<th>Section</th>*/
/* 			<th>Bachelier</th>*/
/* 			<th class="act">Actions</th>*/
/* 		</tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     	{% for ressortissant in ressortissants %}*/
/* 			<tr>*/
/* 				<td>{{ressortissant.prenom}}</td>*/
/* 				<td>{{ressortissant.nom}}</td>*/
/* 				<td>{{ressortissant.numeroDeTelephone}}</td>*/
/* 				<td>{{ressortissant.dateDeNaissance|date('d-m-Y')}}</td>*/
/* 				<td>{{ressortissant.section.libelle}}</td>*/
/* 				<td>{{ressortissant.anneeVenu}}</td>*/
/* 				<td class="act">*/
/* 					<span><a title="afficher ces informations" name="{{ressortissant.id}}" class="afficher-ressortissant action" href=" {{path('aergus_association_ressortissant_afficher',{'nom': ressortissant.nom})}}"><span class="glyphicon glyphicon-list-alt"></span></a></span>*/
/* 					<span><a title="modifier" name="{{ressortissant.id}}" class="modifier modifier-ressortissant action" href=" {{path('aergus_association_ressortissant_edit',{'nom': ressortissant.nom})}}"></a></span>*/
/* 					<span id="{{ressortissant.nom}}" title="supprimer" class="supprimer-ressortissant supprimer action" name="{{ressortissant.id}}"></span>*/
/* 				</td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* <script>*/
/* 	$("document").ready(function(){*/
/* 		$('#ressortissant').DataTable( {*/
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
