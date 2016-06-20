<?php

/* @core/helpers.twig */
class __TwigTemplate_0e38b536873de800231f1a8859a86751f1304da92d15daa0a103d9375bd9756f extends Twig_Template
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
    }

    // line 1
    public function getshowTooltip($_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <i class=\"fa fa-question supsystic-tooltip\" title=\"";
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "\"></i>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@core/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 1,  150 => 45,  145 => 43,  140 => 10,  135 => 8,  130 => 46,  128 => 45,  125 => 44,  123 => 43,  118 => 40,  108 => 37,  104 => 35,  102 => 34,  97 => 33,  92 => 32,  90 => 26,  85 => 24,  81 => 22,  75 => 19,  70 => 18,  68 => 17,  63 => 15,  59 => 14,  54 => 11,  52 => 10,  49 => 9,  47 => 8,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 2,);
    }
}
