<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_7a2df76872882c9b77dd81e29dda414ac45a22ab55f78551d204998d177fce1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_598d0fca02bbd877dff6b9794864f379c43820fb3ea975c6426cd8c8486351d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598d0fca02bbd877dff6b9794864f379c43820fb3ea975c6426cd8c8486351d0->enter($__internal_598d0fca02bbd877dff6b9794864f379c43820fb3ea975c6426cd8c8486351d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_598d0fca02bbd877dff6b9794864f379c43820fb3ea975c6426cd8c8486351d0->leave($__internal_598d0fca02bbd877dff6b9794864f379c43820fb3ea975c6426cd8c8486351d0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_19e2f1a63fdc9625ed5edd937aaeea8c04bfb6e70605013c0caa9687bc498deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e2f1a63fdc9625ed5edd937aaeea8c04bfb6e70605013c0caa9687bc498deb->enter($__internal_19e2f1a63fdc9625ed5edd937aaeea8c04bfb6e70605013c0caa9687bc498deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_19e2f1a63fdc9625ed5edd937aaeea8c04bfb6e70605013c0caa9687bc498deb->leave($__internal_19e2f1a63fdc9625ed5edd937aaeea8c04bfb6e70605013c0caa9687bc498deb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_67566b63be77d66478264ab4db008456efeadd1f52fda242587bb122e6c1ae13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67566b63be77d66478264ab4db008456efeadd1f52fda242587bb122e6c1ae13->enter($__internal_67566b63be77d66478264ab4db008456efeadd1f52fda242587bb122e6c1ae13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_67566b63be77d66478264ab4db008456efeadd1f52fda242587bb122e6c1ae13->leave($__internal_67566b63be77d66478264ab4db008456efeadd1f52fda242587bb122e6c1ae13_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a18340986183666c8d93c259845fdb1c552e719db7677a1e3cfc3e0c8e345621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18340986183666c8d93c259845fdb1c552e719db7677a1e3cfc3e0c8e345621->enter($__internal_a18340986183666c8d93c259845fdb1c552e719db7677a1e3cfc3e0c8e345621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a18340986183666c8d93c259845fdb1c552e719db7677a1e3cfc3e0c8e345621->leave($__internal_a18340986183666c8d93c259845fdb1c552e719db7677a1e3cfc3e0c8e345621_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
