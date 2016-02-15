<?php

/* AERGUSassociationBundle:AdminRessortissants:supprimerMultiple.html.twig */
class __TwigTemplate_68dceb496d40b855091693f01cda608c554d2a126b2b5b86814e09aed5c2a305 extends Twig_Template
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
        $__internal_2d6c90726455af616e98ffdf9505314063bdd64f09083fcc938908ee575d6beb = $this->env->getExtension("native_profiler");
        $__internal_2d6c90726455af616e98ffdf9505314063bdd64f09083fcc938908ee575d6beb->enter($__internal_2d6c90726455af616e98ffdf9505314063bdd64f09083fcc938908ee575d6beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminRessortissants:supprimerMultiple.html.twig"));

        // line 1
        echo "<table id=\"ressortissant\" class=\"display\" cellspacing=\"0\" width=\"100%\">
    <thead>
        <tr>
        \t<th class=\"cocher cocher-suppimer-multiple\">Cocher</th>
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
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ressortissants"]) ? $context["ressortissants"] : $this->getContext($context, "ressortissants")));
        foreach ($context['_seq'] as $context["_key"] => $context["ressortissant"]) {
            // line 16
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"cocher cocher-suppimer-multiple\"><input type=\"checkbox\" class=\"supprimer-multiple\" name=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\"/></td>
\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "numeroDeTelephone", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ressortissant"], "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ressortissant"], "section", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "anneeVenu", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"act\">
\t\t\t\t\t<span><a title=\"afficher ces informations\" name=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\" class=\"afficher-ressortissant action\" href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ressortissant_afficher", array("nom" => $this->getAttribute($context["ressortissant"], "nom", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span></a></span>
\t\t\t\t\t<span><a title=\"modifier\" name=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
            echo "\" class=\"modifier modifier-ressortissant action\" href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ressortissant_edit", array("nom" => $this->getAttribute($context["ressortissant"], "nom", array()))), "html", null, true);
            echo "\"></a></span>
\t\t\t\t\t<span id=\"";
            // line 27
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
        // line 31
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
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/ressortissants.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_2d6c90726455af616e98ffdf9505314063bdd64f09083fcc938908ee575d6beb->leave($__internal_2d6c90726455af616e98ffdf9505314063bdd64f09083fcc938908ee575d6beb_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminRessortissants:supprimerMultiple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 46,  98 => 31,  86 => 27,  80 => 26,  74 => 25,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  45 => 17,  42 => 16,  38 => 15,  22 => 1,);
    }
}
/* <table id="ressortissant" class="display" cellspacing="0" width="100%">*/
/*     <thead>*/
/*         <tr>*/
/*         	<th class="cocher cocher-suppimer-multiple">Cocher</th>*/
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
/* 				<td class="cocher cocher-suppimer-multiple"><input type="checkbox" class="supprimer-multiple" name="{{ressortissant.id}}"/></td>*/
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
