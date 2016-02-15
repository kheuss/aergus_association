<?php

/* ::base.html.twig */
class __TwigTemplate_f9b8ca56f7fc84108a602706f46f04b0327c6f51f42617fcd76ce2b7c29baa2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68d11856f7c40f7b8bda849e5273c55967116fb8ba0ef7ab69d8f1980d615498 = $this->env->getExtension("native_profiler");
        $__internal_68d11856f7c40f7b8bda849e5273c55967116fb8ba0ef7ab69d8f1980d615498->enter($__internal_68d11856f7c40f7b8bda849e5273c55967116fb8ba0ef7ab69d8f1980d615498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML> 
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css\"/>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/print.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"print\" />

        <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
        <script src=\"https://code.jquery.com/jquery-1.11.3.min.js\" type=\"text/javascript\"></script> 
        <script src=\"https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js\" type=\"text/javascript\"></script> 
        <script src=\"https://cdn.datatables.net/1.10.9/js/dataTables.foundation.min.js\" type=\"text/javascript\"></script> 
          
        <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.ui.datepicker-fr.js"), "html", null, true);
        echo " \"></script>
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        
    </head>
    <body>
        <div id=\"header\">
            <div id=\"adminstration\">
                <ul class=\"admin\">
                    <li class=\"item ufr\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("aergus_association_ufr_home");
        echo "\">Orientation</a></li>
                    <li class=\"item ressortissant\"><a href=\"#\">Ressortissants</a></li>
                    <li class=\"item membre\"><a href=\"#\">Membre</a></li>
                    <li class=\"item bureau\"><a href=\"#\">Bureau</a></li>
                    <li class=\"item reunion\"><a href=\"#\">Reunion</a></li>
                    <li class=\"item village\"><a href=\"#\">Residence</a></li>
                    <li class=\"item tresorie\"><a href=\"#\">Espace Tresorerie</a></li>
                    <li class=\"item projet\"><a href=\"#\">Projet</a></li>
                </ul>
            </div>
            <div id=\"logo\"></div>
            <div id=\"banniere\"></div>
        </div>
        <div id=\"contenu\">
            <div id=\"sidebar\">
                <div id=\"main-menu\">
                    <ul class=\"menu\">
                        <li class=\"item ufr\"><a href=\"#\">Orientation</a></li>
                        <li class=\"item ressortissant\"><a href=\"#\">Ressortissants</a></li>
                        <li class=\"item membre\"><a href=\"#\">Membre</a></li>
                        <li class=\"item bureau\"><a href=\"#\">Bureau</a></li>
                        <li class=\"item reunion\"><a href=\"#\">Reunion</a></li>
                        <li class=\"item village\"><a href=\"#\">Residence</a></li>
                        <li class=\"item tresorie\"><a href=\"#\">Espace Tresorerie</a></li>
                        <li class=\"item projet\"><a href=\"#\">Projet</a></li>
                    </ul>
                </div>
            </div>
            <div id=\"content\">
                <div id=\"content-app\">
                    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "                </div>
            </div>
            <div id=\"loading\"></div>
        </div>
        <div id=\"footer\" class=\"footer\"></div>
        <div class=\"overlay\"></div>
        ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "        <script type=\"text/javascript\">
            \$(\"document\").ready(function(){
                /*\$('td').removeClass('sorting_1');*/
                \$('.ajouter').click(function(){
                    \$('body').addClass('body-overlay');
                });
                \$('.ajouter-ressortissant').click(function(){
                    \$('body').addClass('body-overlay-ress');
                });
                \$('.annuler').click(function(){
                    \$('body').removeClass('body-overlay');
                    \$('body').removeClass('body-overlay-ress');
                });
            });

        </script>
    </body>
</html>
";
        
        $__internal_68d11856f7c40f7b8bda849e5273c55967116fb8ba0ef7ab69d8f1980d615498->leave($__internal_68d11856f7c40f7b8bda849e5273c55967116fb8ba0ef7ab69d8f1980d615498_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_45bd9ed797660ece70f16f6b46e87434a1a25def310b0bb5af6ed8f2c5d71c68 = $this->env->getExtension("native_profiler");
        $__internal_45bd9ed797660ece70f16f6b46e87434a1a25def310b0bb5af6ed8f2c5d71c68->enter($__internal_45bd9ed797660ece70f16f6b46e87434a1a25def310b0bb5af6ed8f2c5d71c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AERGUS!";
        
        $__internal_45bd9ed797660ece70f16f6b46e87434a1a25def310b0bb5af6ed8f2c5d71c68->leave($__internal_45bd9ed797660ece70f16f6b46e87434a1a25def310b0bb5af6ed8f2c5d71c68_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0057dd38aff9f7c5e7fe663e4f67456a39ec688f198b0ddc7c391a2b3d07bdb6 = $this->env->getExtension("native_profiler");
        $__internal_0057dd38aff9f7c5e7fe663e4f67456a39ec688f198b0ddc7c391a2b3d07bdb6->enter($__internal_0057dd38aff9f7c5e7fe663e4f67456a39ec688f198b0ddc7c391a2b3d07bdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0057dd38aff9f7c5e7fe663e4f67456a39ec688f198b0ddc7c391a2b3d07bdb6->leave($__internal_0057dd38aff9f7c5e7fe663e4f67456a39ec688f198b0ddc7c391a2b3d07bdb6_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7006f454612b3253f4a0237cb2aac07db8972961a7803ff7803d994d94330df = $this->env->getExtension("native_profiler");
        $__internal_b7006f454612b3253f4a0237cb2aac07db8972961a7803ff7803d994d94330df->enter($__internal_b7006f454612b3253f4a0237cb2aac07db8972961a7803ff7803d994d94330df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7006f454612b3253f4a0237cb2aac07db8972961a7803ff7803d994d94330df->leave($__internal_b7006f454612b3253f4a0237cb2aac07db8972961a7803ff7803d994d94330df_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b8caf88c268f113670311ee97ad0b9b81d8433fc4c266356a550dc9a5717fea = $this->env->getExtension("native_profiler");
        $__internal_1b8caf88c268f113670311ee97ad0b9b81d8433fc4c266356a550dc9a5717fea->enter($__internal_1b8caf88c268f113670311ee97ad0b9b81d8433fc4c266356a550dc9a5717fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1b8caf88c268f113670311ee97ad0b9b81d8433fc4c266356a550dc9a5717fea->leave($__internal_1b8caf88c268f113670311ee97ad0b9b81d8433fc4c266356a550dc9a5717fea_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 67,  168 => 60,  157 => 7,  145 => 6,  120 => 68,  118 => 67,  110 => 61,  108 => 60,  75 => 30,  64 => 22,  53 => 14,  49 => 13,  44 => 11,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE HTML> */
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}AERGUS!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css"/>*/
/*         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>*/
/*         <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/print.css') }}" type="text/css" media="print" />*/
/* */
/*         <script src="//code.jquery.com/jquery-1.10.2.js"></script>*/
/*         <script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script> */
/*         <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js" type="text/javascript"></script> */
/*         <script src="https://cdn.datatables.net/1.10.9/js/dataTables.foundation.min.js" type="text/javascript"></script> */
/*           */
/*         <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>*/
/*         <script type="text/javascript" src=" {{asset('assets/js/jquery.ui.datepicker-fr.js')}} "></script>*/
/*         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*         */
/*     </head>*/
/*     <body>*/
/*         <div id="header">*/
/*             <div id="adminstration">*/
/*                 <ul class="admin">*/
/*                     <li class="item ufr"><a href="{{path('aergus_association_ufr_home')}}">Orientation</a></li>*/
/*                     <li class="item ressortissant"><a href="#">Ressortissants</a></li>*/
/*                     <li class="item membre"><a href="#">Membre</a></li>*/
/*                     <li class="item bureau"><a href="#">Bureau</a></li>*/
/*                     <li class="item reunion"><a href="#">Reunion</a></li>*/
/*                     <li class="item village"><a href="#">Residence</a></li>*/
/*                     <li class="item tresorie"><a href="#">Espace Tresorerie</a></li>*/
/*                     <li class="item projet"><a href="#">Projet</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div id="logo"></div>*/
/*             <div id="banniere"></div>*/
/*         </div>*/
/*         <div id="contenu">*/
/*             <div id="sidebar">*/
/*                 <div id="main-menu">*/
/*                     <ul class="menu">*/
/*                         <li class="item ufr"><a href="#">Orientation</a></li>*/
/*                         <li class="item ressortissant"><a href="#">Ressortissants</a></li>*/
/*                         <li class="item membre"><a href="#">Membre</a></li>*/
/*                         <li class="item bureau"><a href="#">Bureau</a></li>*/
/*                         <li class="item reunion"><a href="#">Reunion</a></li>*/
/*                         <li class="item village"><a href="#">Residence</a></li>*/
/*                         <li class="item tresorie"><a href="#">Espace Tresorerie</a></li>*/
/*                         <li class="item projet"><a href="#">Projet</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="content">*/
/*                 <div id="content-app">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*             <div id="loading"></div>*/
/*         </div>*/
/*         <div id="footer" class="footer"></div>*/
/*         <div class="overlay"></div>*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script type="text/javascript">*/
/*             $("document").ready(function(){*/
/*                 /*$('td').removeClass('sorting_1');*//* */
/*                 $('.ajouter').click(function(){*/
/*                     $('body').addClass('body-overlay');*/
/*                 });*/
/*                 $('.ajouter-ressortissant').click(function(){*/
/*                     $('body').addClass('body-overlay-ress');*/
/*                 });*/
/*                 $('.annuler').click(function(){*/
/*                     $('body').removeClass('body-overlay');*/
/*                     $('body').removeClass('body-overlay-ress');*/
/*                 });*/
/*             });*/
/* */
/*         </script>*/
/*     </body>*/
/* </html>*/
/* */
