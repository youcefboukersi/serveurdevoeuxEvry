<?php

/* @SRVDVServer/enseignant/ProfileEnseignant.html.twig */
class __TwigTemplate_40a36579cc0102fe72c2776e075c0d93d10e04e2130136f106948f026cdf5a6d extends Twig_Template
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
        $__internal_a5ab100a956d3e09ed345f00c6dbcda2ad31d4741e949c803b4e195961a6c76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ab100a956d3e09ed345f00c6dbcda2ad31d4741e949c803b4e195961a6c76e->enter($__internal_a5ab100a956d3e09ed345f00c6dbcda2ad31d4741e949c803b4e195961a6c76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/enseignant/ProfileEnseignant.html.twig"));

        // line 1
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "@SRVDVServer/enseignant/ProfileEnseignant.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Enseignant</h3>
        <ul>
          <li  class=\"active\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_profile_user_ens");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>   
            <li  ><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_enseignant");
        echo "\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
        </ul>
    </div>
</div>\t

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-5 col-md-5 col-lg-5\">
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Profile:edit"));
        echo "
    </div>
    <div class=\"col-xs-3 col-md-3 col-lg-3\">

            ";
        // line 21
        if (array_key_exists("motDePasse", $context)) {
            // line 22
            echo "             <P style=\"color:green;\" >Mot de passe modifier avec success !</P>
            ";
        }
        // line 24
        echo "            
        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:ChangePassword:changePassword"));
        echo "


    </div>
        
    
</div>

";
        // line 33
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/enseignant/ProfileEnseignant.html.twig", 33)->display($context);
        
        $__internal_a5ab100a956d3e09ed345f00c6dbcda2ad31d4741e949c803b4e195961a6c76e->leave($__internal_a5ab100a956d3e09ed345f00c6dbcda2ad31d4741e949c803b4e195961a6c76e_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/enseignant/ProfileEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  63 => 25,  60 => 24,  56 => 22,  54 => 21,  47 => 17,  35 => 8,  31 => 7,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}

<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Enseignant</h3>
        <ul>
          <li  class=\"active\"><a href=\"{{ path('form_profile_user_ens')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>   
            <li  ><a href=\"{{path('ChoixFiliereEns_enseignant')}}\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
        </ul>
    </div>
</div>\t

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-5 col-md-5 col-lg-5\">
        {{ render (controller(\"FOSUserBundle:Profile:edit\")) }}
    </div>
    <div class=\"col-xs-3 col-md-3 col-lg-3\">

            {% if motDePasse is defined %}
             <P style=\"color:green;\" >Mot de passe modifier avec success !</P>
            {% endif %}
            
        {{ render (controller(\"FOSUserBundle:ChangePassword:changePassword\")) }}


    </div>
        
    
</div>

{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/enseignant/ProfileEnseignant.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\enseignant\\ProfileEnseignant.html.twig");
    }
}
