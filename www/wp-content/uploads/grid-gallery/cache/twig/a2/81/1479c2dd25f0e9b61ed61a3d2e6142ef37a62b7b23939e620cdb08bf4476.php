<?php

/* @galleries/preview.twig */
class __TwigTemplate_a2811479c2dd25f0e9b61ed61a3d2e6142ef37a62b7b23939e620cdb08bf4476 extends Twig_Template
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
        // line 1
        echo "<a id=\"back\" style=\"margin-left:15px;display:none;\"
   href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => (isset($context["gallery_id"]) ? $context["gallery_id"] : null))), "method"), "html", null, true);
        echo "\">
    &larr; ";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Back to the gallery")), "html", null, true);
        echo "
</a>

<iframe id=\"grid-gallery-preview\" data-post=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["post_id"]) ? $context["post_id"] : null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/?p=";
        echo twig_escape_filter($this->env, (isset($context["post_id"]) ? $context["post_id"] : null), "html", null, true);
        echo "&preview=true\" frameborder=\"0\" style=\"width:100%;margin: 10px 0 5px -10px;overflow-y:hidden;position: absolute;\"></iframe>

<script>
jQuery(document).ready(function(\$) {
\t\$iframe = \$('#grid-gallery-preview');
\t\$('#wpfooter').hide();
\t\$iframe.height(\$('#wpwrap').height() - 20);
});
</script>";
    }

    public function getTemplateName()
    {
        return "@galleries/preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
