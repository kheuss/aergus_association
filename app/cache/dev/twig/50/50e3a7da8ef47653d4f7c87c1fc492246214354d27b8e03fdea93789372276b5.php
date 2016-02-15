<?php

/* AERGUSassociationBundle:AdminBureau:entity.html.twig */
class __TwigTemplate_9b55e180c040a4c21612d90c221f27fe7828c2342e530848b070417e42244150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'entity_widget' => array($this, 'block_entity_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c39a4f89e4ac3a3b0cca95d442668b5847f5fce96ca4df3bdbfc7e2f245caa9d = $this->env->getExtension("native_profiler");
        $__internal_c39a4f89e4ac3a3b0cca95d442668b5847f5fce96ca4df3bdbfc7e2f245caa9d->enter($__internal_c39a4f89e4ac3a3b0cca95d442668b5847f5fce96ca4df3bdbfc7e2f245caa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AERGUSassociationBundle:AdminBureau:entity.html.twig"));

        // line 1
        $this->displayBlock('entity_widget', $context, $blocks);
        // line 16
        echo "    ";
        
        $__internal_c39a4f89e4ac3a3b0cca95d442668b5847f5fce96ca4df3bdbfc7e2f245caa9d->leave($__internal_c39a4f89e4ac3a3b0cca95d442668b5847f5fce96ca4df3bdbfc7e2f245caa9d_prof);

    }

    // line 1
    public function block_entity_widget($context, array $blocks = array())
    {
        $__internal_b821a431e13ef0f1f45e8dc67e1d5ab2807a4368f0c58aea6d789c01dca27c8a = $this->env->getExtension("native_profiler");
        $__internal_b821a431e13ef0f1f45e8dc67e1d5ab2807a4368f0c58aea6d789c01dca27c8a->enter($__internal_b821a431e13ef0f1f45e8dc67e1d5ab2807a4368f0c58aea6d789c01dca27c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_widget"));

        // line 2
        ob_start();
        // line 3
        echo "        <div>
            <label for=\"fichier\" title=\"ajouter le programme\" id=\"label-file\">
                <i class=\"glyphicon glyphicon-paperclip\"></i>
            </label>
            <input id=\"fichier\" class=\"ajax_file hidden\" type=\"file\" data-target=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("aergus_association_bureau_ajouter_programme");
        echo "\">

            <div class=\"progress hidden\" style=\"width: 150px\">
                <div class=\"progress-bar progress-bar-success\"></div>
            </div>
            <input name=\"file\" type=\"hidden\" id=\"id\">
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b821a431e13ef0f1f45e8dc67e1d5ab2807a4368f0c58aea6d789c01dca27c8a->leave($__internal_b821a431e13ef0f1f45e8dc67e1d5ab2807a4368f0c58aea6d789c01dca27c8a_prof);

    }

    public function getTemplateName()
    {
        return "AERGUSassociationBundle:AdminBureau:entity.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  40 => 3,  38 => 2,  32 => 1,  25 => 16,  23 => 1,);
    }
}
/* {% block entity_widget %}*/
/* {% spaceless %}*/
/*         <div>*/
/*             <label for="fichier" title="ajouter le programme" id="label-file">*/
/*                 <i class="glyphicon glyphicon-paperclip"></i>*/
/*             </label>*/
/*             <input id="fichier" class="ajax_file hidden" type="file" data-target="{{ path('aergus_association_bureau_ajouter_programme') }}">*/
/* */
/*             <div class="progress hidden" style="width: 150px">*/
/*                 <div class="progress-bar progress-bar-success"></div>*/
/*             </div>*/
/*             <input name="file" type="hidden" id="id">*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock entity_widget %}*/
/*     */
