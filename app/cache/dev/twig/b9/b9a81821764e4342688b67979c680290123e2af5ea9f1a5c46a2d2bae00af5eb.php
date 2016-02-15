<?php

/* AERGUSassociationBundle:AdminMembre:ajouter.html.twig */
class __TwigTemplate_5278b74a3036f62e850bed51fa342bbbcd49e2a89e0199a012615b8d782cd579 extends Twig_Template
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
        $__internal_0e35b9328f88f654c378f366195c91f0ece363e04435eaf1bc205c7742d6e140 = $this->env->getExtension("native_profiler");
        $__internal_0e35b9328f88f654c378f366195c91f0ece363e04435eaf1bc205c7742d6e140->enter($__internal_0e35b9328f88f654c378f366195c91f0ece363e04435eaf1bc205c7742d6e140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminMembre:ajouter.html.twig"));

        // line 1
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "formulaire")) {
            // line 2
            echo "\t<div class=\"modal-dialog modal-lg\">
\t  \t<div class=\"modal-content\">
\t        <div class=\"modal-header\">
\t          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t          <h4 class=\"modal-title\">Inscription du ressortissant</h4>
\t          <div id=\"loading\"></div>
\t        </div>
\t        <div class=\"modal-body row\">
\t        \t<div class=\"info-ressortissant col-lg-6\">
\t        \t\t<div class=\"entete-info\">
\t        \t\t\t<p>Information du ressortissant</p>
\t        \t\t</div>
\t        \t\t<div class=\"info-ress list-group\">
\t        \t\t\t<div class=\"list-group-item\"> <span>Prénom : </span> <span>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressortissant"]) ? $context["ressortissant"] : $this->getContext($context, "ressortissant")), "prenom", array()), "html", null, true);
            echo "</span> </div>
\t        \t\t\t<div class=\"list-group-item\"> <span>Nom : </span> <span>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressortissant"]) ? $context["ressortissant"] : $this->getContext($context, "ressortissant")), "nom", array()), "html", null, true);
            echo "</span> </div>
\t        \t\t\t<div class=\"list-group-item\"> <span>Date de naissance : </span> <span>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ressortissant"]) ? $context["ressortissant"] : $this->getContext($context, "ressortissant")), "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
            echo "</span> </div>
\t        \t\t\t<div class=\"list-group-item\"> <span>Année d'obstension du bac : </span> <span>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressortissant"]) ? $context["ressortissant"] : $this->getContext($context, "ressortissant")), "anneeVenu", array()), "html", null, true);
            echo "</span> </div>
\t        \t\t\t
\t        \t\t</div>
\t        \t</div>
\t        \t<div class=\"formulaire-membre\">
\t\t        \t<form method=\"post\" class=\"form-horizontal\" name=\"aergus_association_membre\" id=\"membre-ajouter\">
\t\t        \t\t";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
\t\t        \t\t<div class=\"niveau-res col-lg-6\">
\t\t        \t\t\t<div class=\"entete-info\">
\t\t\t        \t\t\t<p>Niveau</p>
\t\t\t        \t\t</div>
\t\t\t        \t\t<div class=\"form-ress list-group\">
\t\t\t\t        \t\t<div class=\"form-group\">
\t\t\t\t\t\t\t      \t";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Niveau"));
            echo "
\t\t\t\t\t\t\t      \t";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'errors');
            echo "
\t\t\t\t\t\t\t        <div class=\"col-sm-9\">
\t\t\t\t\t\t\t        \t";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t      \t</div>
\t\t\t\t\t\t      \t<div class=\"form-group\">
\t\t\t\t\t\t\t      \t";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "section", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Section"));
            echo "
\t\t\t\t\t\t\t      \t";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "section", array()), 'errors');
            echo "
\t\t\t\t\t\t\t        <div class=\"col-sm-9\">
\t\t\t\t\t\t\t        \t";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "section", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t</div>
\t\t        \t\t</div>
\t\t        \t\t<div class=\"adresse-res col-lg-6\">
\t\t        \t\t\t<div class=\"entete-info\">
\t\t\t        \t\t\t<p>Adresse</p>
\t\t\t        \t\t</div>
\t\t\t        \t\t<div class=\"form-ress list-group\">
\t\t\t        \t\t\t<div class=\"error\"></div>
\t\t\t\t        \t\t<div class=\"form-group\">
\t\t\t\t\t\t\t      \t";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroDeChambre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Chambre"));
            echo "
\t\t\t\t\t\t\t      \t";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroDeChambre", array()), 'errors');
            echo "
\t\t\t\t\t\t\t        <div class=\"col-sm-9\">
\t\t\t\t\t\t\t        \t";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroDeChambre", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t      \t</div>
\t\t\t\t\t\t      \t<div class=\"form-group\">
\t\t\t\t\t\t\t      \t";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "block", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Block"));
            echo "
\t\t\t\t\t\t\t      \t";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "block", array()), 'errors');
            echo "
\t\t\t\t\t\t\t        <div class=\"col-sm-9\">
\t\t\t\t\t\t\t        \t";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "block", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t      \t</div>
\t\t\t\t\t\t      \t<div class=\"form-group\">
\t\t\t\t\t\t\t      \t";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "village", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Village"));
            echo "
\t\t\t\t\t\t\t      \t";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "village", array()), 'errors');
            echo "
\t\t\t\t\t\t\t        <div class=\"col-sm-9\">
\t\t\t\t\t\t\t        \t";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "village", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t</div>

\t\t\t\t\t    </div>
\t\t        \t\t<div class=\"fonction-res col-lg-6\">
\t\t        \t\t\t<div class=\"entete-info\">
\t\t\t        \t\t\t<p>Fonction</p>
\t\t\t        \t\t</div>
\t\t\t        \t\t<div class=\"form-ress list-group\">
\t\t\t\t        \t\t<div class=\"form-group\">
\t\t\t\t        \t\t\t<label class=\"col-sm-5 control-label\">Membre du bureau</label>
\t\t\t\t\t\t\t        <div class=\"col-sm-2\">
\t\t\t\t\t\t\t        \t<input type=\"checkbox\" class=\"form-control membrebureauverif\"/>\t
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t      \t</div>
\t\t\t\t\t\t      \t<div class=\"form-group\">
\t\t\t\t\t\t\t      \t";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Fonction"));
            echo "
\t\t\t\t\t\t\t      \t";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'errors');
            echo "
\t\t\t\t\t\t\t        <div class=\"col-sm-9\">
\t\t\t\t\t\t\t        \t";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => true)));
            echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t      \t</div>
\t\t\t\t\t      \t</div>
\t\t        \t\t</div>
\t\t\t\t\t</form>
\t        \t</div>
\t        \t<input class=\"info-base\" type=\"hidden\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["bureau"]) ? $context["bureau"] : $this->getContext($context, "bureau")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">\t
\t        </div>
\t        <div class=\"modal-footer\">
\t          <button type=\"button\" class=\"btn btn-primary membre-suivant\">Ajouter</button>
\t          <button type=\"button\" class=\"btn btn-primary membre-annuler\">Annuler</button>
\t        </div>
\t  \t</div>
\t</div>
";
        } else {
            // line 107
            echo "\t
\t<div class=\"modal-dialog modal-lg\">
      \t<div class=\"modal-content\">
\t        <div class=\"modal-header\">
\t          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t          <h4 class=\"modal-title\">Inscription d'un membre</h4>
\t        </div>
\t        <div class=\"modal-body\">
\t\t\t    <table id=\"ressortissant\" class=\"display\" cellspacing=\"0\" width=\"100%\">
\t\t\t        <thead>
\t\t\t            <tr>
\t\t\t            \t<th class=\"cocher\">Cocher</th>
\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Date de Naissance</th>
\t\t\t\t\t\t\t<th>Section</th>
\t\t\t\t\t\t\t<th>Bachelier</th>
\t\t\t\t\t\t</tr>
\t\t\t        </thead>
\t\t\t        <tbody>
\t\t\t        \t";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ressortissants"]) ? $context["ressortissants"] : $this->getContext($context, "ressortissants")));
            foreach ($context['_seq'] as $context["_key"] => $context["ressortissant"]) {
                // line 128
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"cocher\"><input type=\"radio\" class=\"ressortissant-membre-check\" id=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "id", array()), "html", null, true);
                echo "\" name=\"radio\"/></td>
\t\t\t\t\t\t\t\t<td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "prenom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 132
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ressortissant"], "dateDeNaissance", array()), "d-m-Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ressortissant"], "section", array()), "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["ressortissant"], "anneeVenu", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressortissant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t\t        </tbody>
\t\t\t\t</table>
\t        </div>
\t        <div class=\"modal-footer\">
\t          <button type=\"button\" class=\"btn btn-primary terminer-membre\" name=\"";
            // line 141
            echo twig_escape_filter($this->env, (isset($context["bureau"]) ? $context["bureau"] : $this->getContext($context, "bureau")), "html", null, true);
            echo "\">Terminer</button>
\t          <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Annuler</button>
\t        </div>
      \t</div>
    </div>
    <script>
\t\t\$(\"document\").ready(function(){
\t\t\t\$(\"form input.date\").datepicker({
\t\t\t    dateFormat: 'dd/mm/yy',
\t\t\t    firstDay:1
\t\t\t}).attr(\"readonly\",\"readonly\");
\t\t\t\$(\"document\").ready(function(){
\t\t\t\t\$('#ressortissant').DataTable( {
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
        }
        // line 166
        echo "
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/membre.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_0e35b9328f88f654c378f366195c91f0ece363e04435eaf1bc205c7742d6e140->leave($__internal_0e35b9328f88f654c378f366195c91f0ece363e04435eaf1bc205c7742d6e140_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminMembre:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 167,  297 => 166,  269 => 141,  263 => 137,  254 => 134,  250 => 133,  246 => 132,  242 => 131,  238 => 130,  234 => 129,  231 => 128,  227 => 127,  205 => 107,  191 => 98,  181 => 91,  176 => 89,  172 => 88,  151 => 70,  146 => 68,  142 => 67,  135 => 63,  130 => 61,  126 => 60,  119 => 56,  114 => 54,  110 => 53,  95 => 41,  90 => 39,  86 => 38,  79 => 34,  74 => 32,  70 => 31,  60 => 24,  51 => 18,  47 => 17,  43 => 16,  39 => 15,  24 => 2,  22 => 1,);
    }
}
/* {% if type=='formulaire'%}*/
/* 	<div class="modal-dialog modal-lg">*/
/* 	  	<div class="modal-content">*/
/* 	        <div class="modal-header">*/
/* 	          <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 	          <h4 class="modal-title">Inscription du ressortissant</h4>*/
/* 	          <div id="loading"></div>*/
/* 	        </div>*/
/* 	        <div class="modal-body row">*/
/* 	        	<div class="info-ressortissant col-lg-6">*/
/* 	        		<div class="entete-info">*/
/* 	        			<p>Information du ressortissant</p>*/
/* 	        		</div>*/
/* 	        		<div class="info-ress list-group">*/
/* 	        			<div class="list-group-item"> <span>Prénom : </span> <span>{{ressortissant.prenom}}</span> </div>*/
/* 	        			<div class="list-group-item"> <span>Nom : </span> <span>{{ressortissant.nom}}</span> </div>*/
/* 	        			<div class="list-group-item"> <span>Date de naissance : </span> <span>{{ressortissant.dateDeNaissance|date('d-m-Y')}}</span> </div>*/
/* 	        			<div class="list-group-item"> <span>Année d'obstension du bac : </span> <span>{{ressortissant.anneeVenu}}</span> </div>*/
/* 	        			*/
/* 	        		</div>*/
/* 	        	</div>*/
/* 	        	<div class="formulaire-membre">*/
/* 		        	<form method="post" class="form-horizontal" name="aergus_association_membre" id="membre-ajouter">*/
/* 		        		{{ form_errors(form) }}*/
/* 		        		<div class="niveau-res col-lg-6">*/
/* 		        			<div class="entete-info">*/
/* 			        			<p>Niveau</p>*/
/* 			        		</div>*/
/* 			        		<div class="form-ress list-group">*/
/* 				        		<div class="form-group">*/
/* 							      	{{ form_label(form.niveau, "Niveau", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 							      	{{ form_errors(form.niveau) }}*/
/* 							        <div class="col-sm-9">*/
/* 							        	{{ form_widget(form.niveau, {'attr': {'class': 'form-control'}}) }}*/
/* 							        </div>*/
/* 						      	</div>*/
/* 						      	<div class="form-group">*/
/* 							      	{{ form_label(form.section, "Section", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 							      	{{ form_errors(form.section) }}*/
/* 							        <div class="col-sm-9">*/
/* 							        	{{ form_widget(form.section, {'attr': {'class': 'form-control'}}) }}*/
/* 							        </div>*/
/* 						      	</div>*/
/* 					      	</div>*/
/* 		        		</div>*/
/* 		        		<div class="adresse-res col-lg-6">*/
/* 		        			<div class="entete-info">*/
/* 			        			<p>Adresse</p>*/
/* 			        		</div>*/
/* 			        		<div class="form-ress list-group">*/
/* 			        			<div class="error"></div>*/
/* 				        		<div class="form-group">*/
/* 							      	{{ form_label(form.numeroDeChambre, "Chambre", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 							      	{{ form_errors(form.numeroDeChambre) }}*/
/* 							        <div class="col-sm-9">*/
/* 							        	{{ form_widget(form.numeroDeChambre, {'attr': {'class': 'form-control'}}) }}*/
/* 							        </div>*/
/* 						      	</div>*/
/* 						      	<div class="form-group">*/
/* 							      	{{ form_label(form.block, "Block", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 							      	{{ form_errors(form.block) }}*/
/* 							        <div class="col-sm-9">*/
/* 							        	{{ form_widget(form.block, {'attr': {'class': 'form-control'}}) }}*/
/* 							        </div>*/
/* 						      	</div>*/
/* 						      	<div class="form-group">*/
/* 							      	{{ form_label(form.village, "Village", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 							      	{{ form_errors(form.village) }}*/
/* 							        <div class="col-sm-9">*/
/* 							        	{{ form_widget(form.village, {'attr': {'class': 'form-control'}}) }}*/
/* 							        </div>*/
/* 						      	</div>*/
/* 					      	</div>*/
/* */
/* 					    </div>*/
/* 		        		<div class="fonction-res col-lg-6">*/
/* 		        			<div class="entete-info">*/
/* 			        			<p>Fonction</p>*/
/* 			        		</div>*/
/* 			        		<div class="form-ress list-group">*/
/* 				        		<div class="form-group">*/
/* 				        			<label class="col-sm-5 control-label">Membre du bureau</label>*/
/* 							        <div class="col-sm-2">*/
/* 							        	<input type="checkbox" class="form-control membrebureauverif"/>	*/
/* 							        </div>*/
/* 						      	</div>*/
/* 						      	<div class="form-group">*/
/* 							      	{{ form_label(form.fonction, "Fonction", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 							      	{{ form_errors(form.fonction) }}*/
/* 							        <div class="col-sm-9">*/
/* 							        	{{ form_widget(form.fonction, {'attr': {'class': 'form-control','disabled':true}}) }}*/
/* 							        </div>*/
/* 						      	</div>*/
/* 					      	</div>*/
/* 		        		</div>*/
/* 					</form>*/
/* 	        	</div>*/
/* 	        	<input class="info-base" type="hidden" value="{{bureau}}" name="{{id}}">	*/
/* 	        </div>*/
/* 	        <div class="modal-footer">*/
/* 	          <button type="button" class="btn btn-primary membre-suivant">Ajouter</button>*/
/* 	          <button type="button" class="btn btn-primary membre-annuler">Annuler</button>*/
/* 	        </div>*/
/* 	  	</div>*/
/* 	</div>*/
/* {% else %}*/
/* 	*/
/* 	<div class="modal-dialog modal-lg">*/
/*       	<div class="modal-content">*/
/* 	        <div class="modal-header">*/
/* 	          <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 	          <h4 class="modal-title">Inscription d'un membre</h4>*/
/* 	        </div>*/
/* 	        <div class="modal-body">*/
/* 			    <table id="ressortissant" class="display" cellspacing="0" width="100%">*/
/* 			        <thead>*/
/* 			            <tr>*/
/* 			            	<th class="cocher">Cocher</th>*/
/* 							<th>Prenom</th>*/
/* 							<th>Nom</th>*/
/* 							<th>Date de Naissance</th>*/
/* 							<th>Section</th>*/
/* 							<th>Bachelier</th>*/
/* 						</tr>*/
/* 			        </thead>*/
/* 			        <tbody>*/
/* 			        	{% for ressortissant in ressortissants %}*/
/* 							<tr>*/
/* 								<td class="cocher"><input type="radio" class="ressortissant-membre-check" id="{{ressortissant.id}}" name="radio"/></td>*/
/* 								<td>{{ressortissant.prenom}}</td>*/
/* 								<td>{{ressortissant.nom}}</td>*/
/* 								<td>{{ressortissant.dateDeNaissance|date('d-m-Y')}}</td>*/
/* 								<td>{{ressortissant.section.libelle}}</td>*/
/* 								<td>{{ressortissant.anneeVenu}}</td>*/
/* 							</tr>*/
/* 						{% endfor %}*/
/* 			        </tbody>*/
/* 				</table>*/
/* 	        </div>*/
/* 	        <div class="modal-footer">*/
/* 	          <button type="button" class="btn btn-primary terminer-membre" name="{{bureau}}">Terminer</button>*/
/* 	          <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>*/
/* 	        </div>*/
/*       	</div>*/
/*     </div>*/
/*     <script>*/
/* 		$("document").ready(function(){*/
/* 			$("form input.date").datepicker({*/
/* 			    dateFormat: 'dd/mm/yy',*/
/* 			    firstDay:1*/
/* 			}).attr("readonly","readonly");*/
/* 			$("document").ready(function(){*/
/* 				$('#ressortissant').DataTable( {*/
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
/* {% endif %}*/
/* */
/* <script src="{{ asset('assets/js/ajax/membre.js') }}"></script>*/
