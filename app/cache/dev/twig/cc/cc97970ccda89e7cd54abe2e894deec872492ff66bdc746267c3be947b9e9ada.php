<?php

/* AERGUSassociationBundle:AdminOrientation:liste.html.twig */
class __TwigTemplate_e5a2359a1274425a7f6ac08e3e0a62565251112d36bb37f449df87919285d228 extends Twig_Template
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
        $__internal_7732265f9014cf34235622cccc88acfaa7ed0131320fe5cb6364301635d79a07 = $this->env->getExtension("native_profiler");
        $__internal_7732265f9014cf34235622cccc88acfaa7ed0131320fe5cb6364301635d79a07->enter($__internal_7732265f9014cf34235622cccc88acfaa7ed0131320fe5cb6364301635d79a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminOrientation:liste.html.twig"));

        // line 1
        echo "<div id=\"section-liste\">
   ";
        // line 2
        if (((isset($context["verif"]) ? $context["verif"] : $this->getContext($context, "verif")) == false)) {
            // line 3
            echo "\t    <table id=\"section\" width=\"100%\">
\t\t    <thead>
\t\t        <tr>
\t\t\t\t\t<th>Sections</th>
\t\t\t\t\t<th class=\"act\">Actions</th>
\t\t\t\t</tr>
\t\t    </thead>
\t\t    <tbody>
\t\t    \t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : $this->getContext($context, "sections")));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 12
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"act\">
\t\t\t\t\t\t\t<span><a id=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "libelle", array()), "html", null, true);
                echo "\" title=\"modifier\" href=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ufr_section_modifier", array("libelle" => $this->getAttribute($context["section"], "libelle", array()))), "html", null, true);
                echo " \" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                echo "\" class=\"modifier-section action\"></a></span>
\t\t\t\t\t\t\t<span><a id=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "libelle", array()), "html", null, true);
                echo "\" href=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aergus_association_ufr_section_delete", array("libelle" => $this->getAttribute($context["section"], "libelle", array()))), "html", null, true);
                echo "\" title=\"supprimer\" class=\"supprimer-section action\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                echo "\"></a></span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t    </tbody>
\t\t</table>
\t";
        } else {
            // line 23
            echo "\tAucune section n'a été creer pour cet Ufr veuillez-en creer un!
\t";
        }
        // line 25
        echo "</div> 

   <div id=\"form-ajout\">
\t\t<form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"post\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" id=\"section-ajout\">
\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t<input type=\"submit\" value=\"Ajouter\" class=\"submit\">
\t\t</form>
   </div>
<script>
\t/*\$(\"document\").ready(function(){
\t\t\$('#loading').hide();
\t\$('#section-ajout').submit(function(){
\t\tvar id=\$(\"#section-ajout\").attr('name');
\t\tvar libelle = \$('#aergus_association_section_libelle').val();
\t\tvar DATA = 'libelle=' + libelle + '&id='+ id;
\t\t\$('#loading').show();
\t\t\$('#aergus_association_section_libelle').val(\"\");
\t\t\$.ajax({
\t        type: \"POST\",
\t        url: \"http://localhost/aergus/web/app_dev.php/aergus/ufr/\" + id + \"/ajouter/section\",
\t        data: DATA,
\t        success: function(data){
\t        \t\$(\"#section-liste\").empty().hide();
\t            \$('#section-liste').html(data);
\t            \$('#section-liste').show();
\t            \$('#loading').hide();
\t        }
\t    });  

\t\treturn false;
\t});

});*/
</script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ajax/section_ufr.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_7732265f9014cf34235622cccc88acfaa7ed0131320fe5cb6364301635d79a07->leave($__internal_7732265f9014cf34235622cccc88acfaa7ed0131320fe5cb6364301635d79a07_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminOrientation:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  91 => 29,  85 => 28,  80 => 25,  76 => 23,  71 => 20,  57 => 16,  49 => 15,  44 => 13,  41 => 12,  37 => 11,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div id="section-liste">*/
/*    {%if verif==false%}*/
/* 	    <table id="section" width="100%">*/
/* 		    <thead>*/
/* 		        <tr>*/
/* 					<th>Sections</th>*/
/* 					<th class="act">Actions</th>*/
/* 				</tr>*/
/* 		    </thead>*/
/* 		    <tbody>*/
/* 		    	{% for section in sections %}*/
/* 					<tr>*/
/* 						<td>{{section.libelle}}</td>*/
/* 						<td class="act">*/
/* 							<span><a id="{{section.libelle}}" title="modifier" href=" {{path('aergus_association_ufr_section_modifier',{'libelle':section.libelle})}} " name="{{section.id}}" class="modifier-section action"></a></span>*/
/* 							<span><a id="{{section.libelle}}" href=" {{path('aergus_association_ufr_section_delete',{'libelle':section.libelle})}}" title="supprimer" class="supprimer-section action" name="{{section.id}}"></a></span>*/
/* 						</td>*/
/* 					</tr>*/
/* 				{% endfor %}*/
/* 		    </tbody>*/
/* 		</table>*/
/* 	{% else %}*/
/* 	Aucune section n'a été creer pour cet Ufr veuillez-en creer un!*/
/* 	{% endif %}*/
/* </div> */
/* */
/*    <div id="form-ajout">*/
/* 		<form action="{{path('liste',{'id':id })}}" method="post" name="{{id}}" id="section-ajout">*/
/* 			{{ form_widget(form) }}*/
/* 			<input type="submit" value="Ajouter" class="submit">*/
/* 		</form>*/
/*    </div>*/
/* <script>*/
/* 	/*$("document").ready(function(){*/
/* 		$('#loading').hide();*/
/* 	$('#section-ajout').submit(function(){*/
/* 		var id=$("#section-ajout").attr('name');*/
/* 		var libelle = $('#aergus_association_section_libelle').val();*/
/* 		var DATA = 'libelle=' + libelle + '&id='+ id;*/
/* 		$('#loading').show();*/
/* 		$('#aergus_association_section_libelle').val("");*/
/* 		$.ajax({*/
/* 	        type: "POST",*/
/* 	        url: "http://localhost/aergus/web/app_dev.php/aergus/ufr/" + id + "/ajouter/section",*/
/* 	        data: DATA,*/
/* 	        success: function(data){*/
/* 	        	$("#section-liste").empty().hide();*/
/* 	            $('#section-liste').html(data);*/
/* 	            $('#section-liste').show();*/
/* 	            $('#loading').hide();*/
/* 	        }*/
/* 	    });  */
/* */
/* 		return false;*/
/* 	});*/
/* */
/* });*//* */
/* </script>*/
/* <script src="{{ asset('assets/js/ajax/section_ufr.js') }}"></script>*/
