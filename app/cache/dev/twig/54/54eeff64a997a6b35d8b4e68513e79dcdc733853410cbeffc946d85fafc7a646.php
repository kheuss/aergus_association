<?php

/* AERGUSassociationBundle:AdminBureau:index.html.twig */
class __TwigTemplate_3799be1cefa17dcb18a63a94608431a743f8cdd0a69d9c8fbd933c140e488fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AERGUSassociationBundle::layout.html.twig", "AERGUSassociationBundle:AdminBureau:index.html.twig", 1);
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
        $__internal_c0de464e901e7b9e99d80a12405cff856a71e6bff9f5129da027fdfae036b722 = $this->env->getExtension("native_profiler");
        $__internal_c0de464e901e7b9e99d80a12405cff856a71e6bff9f5129da027fdfae036b722->enter($__internal_c0de464e901e7b9e99d80a12405cff856a71e6bff9f5129da027fdfae036b722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminBureau:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0de464e901e7b9e99d80a12405cff856a71e6bff9f5129da027fdfae036b722->leave($__internal_c0de464e901e7b9e99d80a12405cff856a71e6bff9f5129da027fdfae036b722_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae18791e2d5f5fb611ea87d3c1d70289a81ce71289f22a7f6672da6d15989918 = $this->env->getExtension("native_profiler");
        $__internal_ae18791e2d5f5fb611ea87d3c1d70289a81ce71289f22a7f6672da6d15989918->enter($__internal_ae18791e2d5f5fb611ea87d3c1d70289a81ce71289f22a7f6672da6d15989918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div id=\"content-bureau\">
\t\t<div class=\"partie-village col-md-6\">
\t\t\t<div class=\"entete\">
\t\t\t\t<span class=\"liste\">Liste des bureaux</span>
\t\t\t\t<span title=\"ajouter un nouveau bureau\" class=\"ajout\" data-toggle=\"modal\" data-target=\"#ajouter-un-bureau\"></span>
\t\t\t</div>
\t\t\t<div id=\"zone-bureaux\">
\t\t\t\t<table id=\"bureau\" class=\"display\" cellspacing=\"0\" width=\"100%\">
\t\t\t        <thead>
\t\t\t            <tr>
\t\t\t\t\t\t\t<th>Bureaux</th>
\t\t\t\t\t\t\t<th>Programmes</th>
\t\t\t\t\t\t\t<th class=\"act\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t        </thead>
\t\t\t        <tbody>
\t\t\t        \t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bureaux"]) ? $context["bureaux"] : $this->getContext($context, "bureaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["bureau"]) {
            // line 20
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["bureau"], "nomBureau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td> <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fichier/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["bureau"], "nomPath", array()), "html", null, true);
            echo "\"> <span class=\"glyphicon glyphicon-file\"></span> </a> </td>
\t\t\t\t\t\t\t\t<td class=\"act\">
\t\t\t\t\t\t\t\t\t<span><a title=\"afficher ces memebres\" class=\"afficher-membre action\" href=\" ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_admin_membre_home", array("bureau" => $this->getAttribute($context["bureau"], "nomBureau", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span></a></span>
\t\t\t\t\t\t\t\t\t<span><a title=\"modifier\" name=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bureau"], "id", array()), "html", null, true);
            echo "\" class=\"modifier modifier-bureau action\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_bureau_modifier", array("id" => $this->getAttribute($context["bureau"], "id", array()))), "html", null, true);
            echo " \"></a></span>
\t\t\t\t\t\t\t\t\t<span title=\"supprimer\" class=\"supprimer-bureau supprimer action\" name=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["bureau"], "id", array()), "html", null, true);
            echo "\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bureau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t        </tbody>
\t\t\t\t</table>\t
\t\t\t</div>
\t\t</div>\t
\t\t<div class=\"partie-fonction col-md-6\">
\t\t\t<div class=\"entete\">
\t\t\t\t<span class=\"liste\">Liste des fonctions</span>
\t\t\t</div>
\t\t\t<div id=\"zone-fonctions\">
\t\t\t\t<table id=\"fonction\" class=\"display\" cellspacing=\"0\" width=\"100%\">
\t\t\t        <thead>
\t\t\t            <tr>
\t\t\t\t\t\t\t<th>Fonctions</th>
\t\t\t\t\t\t\t<th class=\"act\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t        </thead>
\t\t\t        <tbody>
\t\t\t\t        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fonctions"]) ? $context["fonctions"] : $this->getContext($context, "fonctions")));
        foreach ($context['_seq'] as $context["_key"] => $context["fonction"]) {
            // line 48
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["fonction"], "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"act\">
\t\t\t\t\t\t\t\t\t<span><a title=\"modifier\" class=\"modifier modifier-fonction action\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_fonction_modifier", array("id" => $this->getAttribute($context["fonction"], "id", array()))), "html", null, true);
            echo "\"></a></span>
\t\t\t\t\t\t\t\t\t<span title=\"supprimer\" class=\"supprimer-fonction supprimer action\" name=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["fonction"], "id", array()), "html", null, true);
            echo "\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fonction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t        </tbody>
\t\t\t\t</table>\t
\t\t\t</div>
\t\t\t<div class=\"formulaire-ajout-village\">
\t\t\t\t<form role=\"form\" class=\"aergus_association_fonction\" action=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("aergus_association_fonction_ajouter");
        echo "\" method=\"post\" name=\"aergus_association_fonction\" id=\"fonction-ajouter\">
\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formFonction"]) ? $context["formFonction"] : $this->getContext($context, "formFonction")), 'errors');
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formFonction"]) ? $context["formFonction"] : $this->getContext($context, "formFonction")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formFonction"]) ? $context["formFonction"] : $this->getContext($context, "formFonction")), 'rest');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"Ajouter\" class=\"ajout-form btn btn-primary\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>\t
\t\t<div class=\"partie-niveau col-md-6\">
\t\t\t<div class=\"entete\">
\t\t\t\t<span class=\"liste\">Liste des niveaux</span>
\t\t\t</div>
\t\t\t<div id=\"zone-niveaux\">
\t\t\t\t<table id=\"niveau\" class=\"display\" cellspacing=\"0\" width=\"100%\">
\t\t\t        <thead>
\t\t\t            <tr>
\t\t\t\t\t\t\t<th>Niveaux</th>
\t\t\t\t\t\t\t<th class=\"act\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t        </thead>
\t\t\t        <tbody>
\t\t\t\t        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) ? $context["niveaux"] : $this->getContext($context, "niveaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 84
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["niveau"], "niveau", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"act\">
\t\t\t\t\t\t\t\t\t<span><a title=\"modifier\" class=\"modifier modifier-niveau action\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_niveau_modifier", array("id" => $this->getAttribute($context["niveau"], "id", array()))), "html", null, true);
            echo "\"></a></span>
\t\t\t\t\t\t\t\t\t<span title=\"supprimer\" class=\"supprimer-niveau supprimer action\" name=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["niveau"], "id", array()), "html", null, true);
            echo "\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['niveau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t\t        </tbody>
\t\t\t\t</table>\t
\t\t\t</div>
\t\t\t<div class=\"formulaire-ajout-village\">
\t\t\t\t<form role=\"form\" class=\"aergus_association_niveau\" action=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("aergus_association_niveau_ajouter");
        echo "\" method=\"post\" name=\"aergus_association_niveau\" id=\"niveau-ajouter\">
\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNiveau"]) ? $context["formNiveau"] : $this->getContext($context, "formNiveau")), 'errors');
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNiveau"]) ? $context["formNiveau"] : $this->getContext($context, "formNiveau")), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNiveau"]) ? $context["formNiveau"] : $this->getContext($context, "formNiveau")), 'rest');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"Ajouter\" class=\"ajout-form btn btn-primary\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"modal fade\" id=\"ajouter-un-bureau\" role=\"dialog\">
\t    <div class=\"modal-dialog content-bureau-popup\">
\t      \t<div class=\"modal-content\">
\t\t        <div class=\"modal-header\">
\t\t          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t          <h4 class=\"modal-title\">Ajouter un nouveau bureau</h4>
\t\t        </div>
\t\t        <div class=\"modal-body\">
\t\t     \t\t<form class=\"aergus_association_bureau\"  role=\"form\" action=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("aergus_association_bureau_ajouter");
        echo "\" method=\"post\" name=\"aergus_association_ufr\" id=\"bureau-ajouter\">
\t\t\t\t\t\t";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t    \t\t\t";
        // line 117
        $this->env->getExtension('form')->renderer->setTheme($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "programme", array()), array(0 => "AERGUSassociationBundle:AdminBureau:entity.html.twig"));
        // line 118
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t\t\t<input type=\"submit\" value=\"Ajouter\" class=\"ajout-form btn btn-primary\">
\t\t\t\t\t</form>
\t\t        </div>
\t\t        <div class=\"modal-footer\">
\t\t          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
\t\t        </div>
\t      \t</div>
\t    </div>
  \t</div>
  \t<div class=\"modal fade\" id=\"supprimer-un-bureau\" role=\"dialog\">
\t    <div class=\"modal-dialog\">
\t      \t<div class=\"modal-content\">
\t\t        <div class=\"modal-header\">
\t\t          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t          <h4 class=\"modal-title\">Suppression d'un bureau</h4>
\t\t        </div>
\t\t        <div class=\"modal-body\">
\t\t          <div class=\"confirmer\">Voulez-vous réellement supprimer ce bureau?</div>
\t\t        </div>
\t\t        <div class=\"modal-footer\">
\t\t\t\t    <button type=\"button\" class=\"btn btn-primary supprimer-le-bureau\" >Oui</button>
\t\t          \t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Non</button>
\t\t        </div>
\t      \t</div>
\t    </div>\t
    </div>

    <div class=\"modal fade\" id=\"supprimer-une-fonction\" role=\"dialog\">
\t    <div class=\"modal-dialog\">
\t      \t<div class=\"modal-content\">
\t\t        <div class=\"modal-header\">
\t\t          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t          <h4 class=\"modal-title\">Suppression d'une function</h4>
\t\t        </div>
\t\t        <div class=\"modal-body\">
\t\t          <div class=\"confirmer\">Voulez-vous réellement supprimer cette function?</div>
\t\t        </div>
\t\t        <div class=\"modal-footer\">
\t\t\t\t    <button type=\"button\" class=\"btn btn-primary supprimer-la-function\" >Oui</button>
\t\t          \t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Non</button>
\t\t        </div>
\t      \t</div>
\t    </div>\t
    </div>
    <div class=\"modal fade\" id=\"supprimer-un-niveau\" role=\"dialog\">
\t    <div class=\"modal-dialog\">
\t      \t<div class=\"modal-content\">
\t\t        <div class=\"modal-header\">
\t\t          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t          <h4 class=\"modal-title\">Suppression d'un niveau</h4>
\t\t        </div>
\t\t        <div class=\"modal-body\">
\t\t          <div class=\"confirmer\">Voulez-vous réellement supprimer ce niveau?</div>
\t\t        </div>
\t\t        <div class=\"modal-footer\">
\t\t\t\t    <button type=\"button\" class=\"btn btn-primary supprimer-le-niveau\" >Oui</button>
\t\t          \t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Non</button>
\t\t        </div>
\t      \t</div>
\t    </div>\t
    </div>
    <div class=\"modal fade\" id=\"modifier-un-bureau\" role=\"dialog\"></div>
    <script>
\t\t\$(\"document\").ready(function(){
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
\t</script>
";
        
        $__internal_ae18791e2d5f5fb611ea87d3c1d70289a81ce71289f22a7f6672da6d15989918->leave($__internal_ae18791e2d5f5fb611ea87d3c1d70289a81ce71289f22a7f6672da6d15989918_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminBureau:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 118,  252 => 117,  248 => 116,  244 => 115,  227 => 101,  222 => 99,  217 => 97,  213 => 96,  207 => 92,  197 => 88,  193 => 87,  188 => 85,  185 => 84,  181 => 83,  160 => 65,  155 => 63,  150 => 61,  146 => 60,  140 => 56,  130 => 52,  126 => 51,  121 => 49,  118 => 48,  114 => 47,  95 => 30,  85 => 26,  79 => 25,  75 => 24,  69 => 22,  65 => 21,  62 => 20,  58 => 19,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'AERGUSassociationBundle::layout.html.twig'%}*/
/* {% block body %}*/
/* 	<div id="content-bureau">*/
/* 		<div class="partie-village col-md-6">*/
/* 			<div class="entete">*/
/* 				<span class="liste">Liste des bureaux</span>*/
/* 				<span title="ajouter un nouveau bureau" class="ajout" data-toggle="modal" data-target="#ajouter-un-bureau"></span>*/
/* 			</div>*/
/* 			<div id="zone-bureaux">*/
/* 				<table id="bureau" class="display" cellspacing="0" width="100%">*/
/* 			        <thead>*/
/* 			            <tr>*/
/* 							<th>Bureaux</th>*/
/* 							<th>Programmes</th>*/
/* 							<th class="act">Actions</th>*/
/* 						</tr>*/
/* 			        </thead>*/
/* 			        <tbody>*/
/* 			        	{% for bureau in bureaux %}*/
/* 							<tr>*/
/* 								<td>{{bureau.nomBureau}}</td>*/
/* 								<td> <a href="{{asset('fichier/')}}{{bureau.nomPath}}"> <span class="glyphicon glyphicon-file"></span> </a> </td>*/
/* 								<td class="act">*/
/* 									<span><a title="afficher ces memebres" class="afficher-membre action" href=" {{path('aergus_association_admin_membre_home',{'bureau': bureau.nomBureau})}}"><span class="glyphicon glyphicon-list-alt"></span></a></span>*/
/* 									<span><a title="modifier" name="{{bureau.id}}" class="modifier modifier-bureau action" href="{{path('aergus_association_bureau_modifier',{'id':bureau.id})}} "></a></span>*/
/* 									<span title="supprimer" class="supprimer-bureau supprimer action" name="{{bureau.id}}"></span>*/
/* 								</td>*/
/* 							</tr>*/
/* 						{% endfor %}*/
/* 			        </tbody>*/
/* 				</table>	*/
/* 			</div>*/
/* 		</div>	*/
/* 		<div class="partie-fonction col-md-6">*/
/* 			<div class="entete">*/
/* 				<span class="liste">Liste des fonctions</span>*/
/* 			</div>*/
/* 			<div id="zone-fonctions">*/
/* 				<table id="fonction" class="display" cellspacing="0" width="100%">*/
/* 			        <thead>*/
/* 			            <tr>*/
/* 							<th>Fonctions</th>*/
/* 							<th class="act">Actions</th>*/
/* 						</tr>*/
/* 			        </thead>*/
/* 			        <tbody>*/
/* 				        {% for fonction in fonctions %}*/
/* 							<tr>*/
/* 								<td>{{fonction.libelle}}</td>*/
/* 								<td class="act">*/
/* 									<span><a title="modifier" class="modifier modifier-fonction action" href="{{path('aergus_association_fonction_modifier',{'id':fonction.id})}}"></a></span>*/
/* 									<span title="supprimer" class="supprimer-fonction supprimer action" name="{{fonction.id}}"></span>*/
/* 								</td>*/
/* 							</tr>*/
/* 						{% endfor %}*/
/* 			        </tbody>*/
/* 				</table>	*/
/* 			</div>*/
/* 			<div class="formulaire-ajout-village">*/
/* 				<form role="form" class="aergus_association_fonction" action="{{path('aergus_association_fonction_ajouter')}}" method="post" name="aergus_association_fonction" id="fonction-ajouter">*/
/* 					{{ form_errors(formFonction) }}*/
/* 					<div class="form-group">*/
/* 						{{ form_widget(formFonction.libelle, {'attr': {'class': 'form-control'}}) }}*/
/* 					</div>*/
/* 					{{ form_rest(formFonction) }}*/
/* 					<input type="submit" value="Ajouter" class="ajout-form btn btn-primary">*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>	*/
/* 		<div class="partie-niveau col-md-6">*/
/* 			<div class="entete">*/
/* 				<span class="liste">Liste des niveaux</span>*/
/* 			</div>*/
/* 			<div id="zone-niveaux">*/
/* 				<table id="niveau" class="display" cellspacing="0" width="100%">*/
/* 			        <thead>*/
/* 			            <tr>*/
/* 							<th>Niveaux</th>*/
/* 							<th class="act">Actions</th>*/
/* 						</tr>*/
/* 			        </thead>*/
/* 			        <tbody>*/
/* 				        {% for niveau in niveaux %}*/
/* 							<tr>*/
/* 								<td>{{niveau.niveau}}</td>*/
/* 								<td class="act">*/
/* 									<span><a title="modifier" class="modifier modifier-niveau action" href="{{path('aergus_association_niveau_modifier',{'id':niveau.id})}}"></a></span>*/
/* 									<span title="supprimer" class="supprimer-niveau supprimer action" name="{{niveau.id}}"></span>*/
/* 								</td>*/
/* 							</tr>*/
/* 						{% endfor %}*/
/* 			        </tbody>*/
/* 				</table>	*/
/* 			</div>*/
/* 			<div class="formulaire-ajout-village">*/
/* 				<form role="form" class="aergus_association_niveau" action="{{path('aergus_association_niveau_ajouter')}}" method="post" name="aergus_association_niveau" id="niveau-ajouter">*/
/* 					{{ form_errors(formNiveau) }}*/
/* 					<div class="form-group">*/
/* 						{{ form_widget(formNiveau.niveau, {'attr': {'class': 'form-control'}}) }}*/
/* 					</div>*/
/* 					{{ form_rest(formNiveau) }}*/
/* 					<input type="submit" value="Ajouter" class="ajout-form btn btn-primary">*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="modal fade" id="ajouter-un-bureau" role="dialog">*/
/* 	    <div class="modal-dialog content-bureau-popup">*/
/* 	      	<div class="modal-content">*/
/* 		        <div class="modal-header">*/
/* 		          <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 		          <h4 class="modal-title">Ajouter un nouveau bureau</h4>*/
/* 		        </div>*/
/* 		        <div class="modal-body">*/
/* 		     		<form class="aergus_association_bureau"  role="form" action="{{path('aergus_association_bureau_ajouter')}}" method="post" name="aergus_association_ufr" id="bureau-ajouter">*/
/* 						{{ form_errors(form) }}*/
/* 		    			{% form_theme form.programme 'AERGUSassociationBundle:AdminBureau:entity.html.twig' %}*/
/* 						{{ form_widget(form) }}*/
/* 						<input type="submit" value="Ajouter" class="ajout-form btn btn-primary">*/
/* 					</form>*/
/* 		        </div>*/
/* 		        <div class="modal-footer">*/
/* 		          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/* 		        </div>*/
/* 	      	</div>*/
/* 	    </div>*/
/*   	</div>*/
/*   	<div class="modal fade" id="supprimer-un-bureau" role="dialog">*/
/* 	    <div class="modal-dialog">*/
/* 	      	<div class="modal-content">*/
/* 		        <div class="modal-header">*/
/* 		          <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 		          <h4 class="modal-title">Suppression d'un bureau</h4>*/
/* 		        </div>*/
/* 		        <div class="modal-body">*/
/* 		          <div class="confirmer">Voulez-vous réellement supprimer ce bureau?</div>*/
/* 		        </div>*/
/* 		        <div class="modal-footer">*/
/* 				    <button type="button" class="btn btn-primary supprimer-le-bureau" >Oui</button>*/
/* 		          	<button type="button" class="btn btn-primary" data-dismiss="modal">Non</button>*/
/* 		        </div>*/
/* 	      	</div>*/
/* 	    </div>	*/
/*     </div>*/
/* */
/*     <div class="modal fade" id="supprimer-une-fonction" role="dialog">*/
/* 	    <div class="modal-dialog">*/
/* 	      	<div class="modal-content">*/
/* 		        <div class="modal-header">*/
/* 		          <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 		          <h4 class="modal-title">Suppression d'une function</h4>*/
/* 		        </div>*/
/* 		        <div class="modal-body">*/
/* 		          <div class="confirmer">Voulez-vous réellement supprimer cette function?</div>*/
/* 		        </div>*/
/* 		        <div class="modal-footer">*/
/* 				    <button type="button" class="btn btn-primary supprimer-la-function" >Oui</button>*/
/* 		          	<button type="button" class="btn btn-primary" data-dismiss="modal">Non</button>*/
/* 		        </div>*/
/* 	      	</div>*/
/* 	    </div>	*/
/*     </div>*/
/*     <div class="modal fade" id="supprimer-un-niveau" role="dialog">*/
/* 	    <div class="modal-dialog">*/
/* 	      	<div class="modal-content">*/
/* 		        <div class="modal-header">*/
/* 		          <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 		          <h4 class="modal-title">Suppression d'un niveau</h4>*/
/* 		        </div>*/
/* 		        <div class="modal-body">*/
/* 		          <div class="confirmer">Voulez-vous réellement supprimer ce niveau?</div>*/
/* 		        </div>*/
/* 		        <div class="modal-footer">*/
/* 				    <button type="button" class="btn btn-primary supprimer-le-niveau" >Oui</button>*/
/* 		          	<button type="button" class="btn btn-primary" data-dismiss="modal">Non</button>*/
/* 		        </div>*/
/* 	      	</div>*/
/* 	    </div>	*/
/*     </div>*/
/*     <div class="modal fade" id="modifier-un-bureau" role="dialog"></div>*/
/*     <script>*/
/* 		$("document").ready(function(){*/
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
/* 	</script>*/
/* {% endblock %}*/
