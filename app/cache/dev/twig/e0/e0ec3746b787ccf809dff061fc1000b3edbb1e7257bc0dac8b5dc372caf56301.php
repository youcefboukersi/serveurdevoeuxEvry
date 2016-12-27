<?php

/* FOSUserBundle:admin:menuAdmin.html.twig */
class __TwigTemplate_da80d1435e1b4f9fb785570844d81ee09e4bbc09fd3d06aa76b54f3283d789e2 extends Twig_Template
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
        $__internal_3e30967254e8884e5899a674d1d3d50d97969f33a5e967b46b7eabbe59c456c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e30967254e8884e5899a674d1d3d50d97969f33a5e967b46b7eabbe59c456c9->enter($__internal_3e30967254e8884e5899a674d1d3d50d97969f33a5e967b46b7eabbe59c456c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:admin:menuAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SVEDI - Admin</title>
        <link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/assets/css/home.css\"/>
        <link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/bootstrap/css/bootstrap.min.css\"/>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/search.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/VerifFormulaire.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Desinscription.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Notification.js\"></script>
        
        
        <link rel=stylesheet type=\"text/css\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\"/>
        <link rel=stylesheet type=\"text/css\" href=\"https://cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css\"/>
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/dataTables.jqueryui.min.js\"></script>
        
        echo '<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/isResp.js\"></script>';
        echo '<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Resp.js\"></script>';
        
        <style>
            
            .centreVerticalement {
                display: inline-block;
                vertical-align: top;
                float: none;
            }
            
            
        </style>
        
    </head>
    <body>
        
        
        
        <header>
            <div id=\"logo\">
                <a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/home/\"><img alt=\"svedi\" src=\"http://localhost:8181/serveurdevoeux/web/assets/images/SVEDI-small.png\"/></a>
                
            </div>
            <div id=\"searchBar\">
                <form id=\"newsearch\" method=\"get\" action=\"../controleurRecherche/\">
                    <input type=\"text\" value=\"\" class=\"textinput\" name=\"search\" size=\"35\" maxlength=\"120\"><input id=\"btnLoupe\" type=\"submit\" value=\"\" class=\"buttonSearch\">
                    <img id=\"loupeSearchBar\" alt=\"loupe\" src=\"http://localhost:8181/serveurdevoeux/web/assets/images/loupe.png\"/>
                </form>
                
            </div>
            
            <p id=\"deconnexion\">
                <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                    ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </a>
                <a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/enseignant/inscription\">Enseignant </a>
                <a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/responsable/inscription\">Responsable</a>
                <a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/users\">Admin</a>
            </p>
            
        </header>
        
        
        
        
        
";
        
        $__internal_3e30967254e8884e5899a674d1d3d50d97969f33a5e967b46b7eabbe59c456c9->leave($__internal_3e30967254e8884e5899a674d1d3d50d97969f33a5e967b46b7eabbe59c456c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:admin:menuAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 54,  76 => 53,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SVEDI - Admin</title>
        <link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/assets/css/home.css\"/>
        <link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/bootstrap/css/bootstrap.min.css\"/>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/search.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/VerifFormulaire.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Desinscription.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Notification.js\"></script>
        
        
        <link rel=stylesheet type=\"text/css\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\"/>
        <link rel=stylesheet type=\"text/css\" href=\"https://cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css\"/>
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/dataTables.jqueryui.min.js\"></script>
        
        echo '<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/isResp.js\"></script>';
        echo '<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Resp.js\"></script>';
        
        <style>
            
            .centreVerticalement {
                display: inline-block;
                vertical-align: top;
                float: none;
            }
            
            
        </style>
        
    </head>
    <body>
        
        
        
        <header>
            <div id=\"logo\">
                <a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/home/\"><img alt=\"svedi\" src=\"http://localhost:8181/serveurdevoeux/web/assets/images/SVEDI-small.png\"/></a>
                
            </div>
            <div id=\"searchBar\">
                <form id=\"newsearch\" method=\"get\" action=\"../controleurRecherche/\">
                    <input type=\"text\" value=\"\" class=\"textinput\" name=\"search\" size=\"35\" maxlength=\"120\"><input id=\"btnLoupe\" type=\"submit\" value=\"\" class=\"buttonSearch\">
                    <img id=\"loupeSearchBar\" alt=\"loupe\" src=\"http://localhost:8181/serveurdevoeux/web/assets/images/loupe.png\"/>
                </form>
                
            </div>
            
            <p id=\"deconnexion\">
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
                <a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/enseignant/inscription\">Enseignant </a>
                <a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/responsable/inscription\">Responsable</a>
                <a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/users\">Admin</a>
            </p>
            
        </header>
        
        
        
        
        
", "FOSUserBundle:admin:menuAdmin.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/menuAdmin.html.twig");
    }
}