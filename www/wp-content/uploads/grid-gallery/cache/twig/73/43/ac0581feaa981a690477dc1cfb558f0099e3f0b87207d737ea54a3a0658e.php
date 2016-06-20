<?php

/* @galleries/gallery_preset.twig */
class __TwigTemplate_7343ac0581feaa981a690477dc1cfb558f0099e3f0b87207d737ea54a3a0658e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("grid-gallery.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        // line 26
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries, showPresets"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create new gallery")), "html", null, true);
        echo "</a>
    </nav>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "    <h3 style=\"margin-left: 10px;padding-bottom: 10px !important;border-bottom: 1px solid;\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Gallery Template.You can change template and settings on the next step.")), "html", null, true);
        echo "</h3>
    <div id=\"gg-create-gallery-text\">
        <h3 style=\"float: left; margin: 10px !important;\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")), "html", null, true);
        echo "</h3>
        <input name=\"title\" type=\"text\" style=\"float: left; width: 60%;\"/>
        <button id=\"gallery-create\" class=\"button button-primary\" type=\"button\">
            <i class=\"fa fa-check\"></i>
            ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
        </button>
        ";
        // line 45
        echo "
        <div class=\"clear\"></div>
        <input id=\"presetValue\" name=\"preset\" type=\"hidden\" value=\"1\"/>
    </div>
    ";
        // line 50
        echo "    <div id=\"gg-create-gallery-text\">
        <div class=\"presetSelect\">
            ";
        // line 52
        $context["preset"] = $this;
        // line 53
        echo "
            ";
        // line 54
        $context["presets"] = array(0 => array("title" => "Standard Gallery", "image" => "template1.jpg", "pro" => false, "value" => 1), 1 => array("title" => "Vertical Gallery", "image" => "template2.jpg", "pro" => false, "value" => 2), 2 => array("title" => "Rounded Gallery", "image" => "template3.jpg", "pro" => false, "value" => 3), 3 => array("title" => "Horizontal Gallery", "image" => "template4.jpg", "pro" => false, "value" => 4), 4 => array("title" => "Categories and Icons", "image" => "template5.jpg", "pro" => true, "value" => 5), 5 => array("title" => "Post feed and Pagination", "image" => "template6.jpg", "pro" => true, "value" => 6), 6 => array("title" => "Post feed Slide Up", "image" => "template7.jpg", "pro" => true, "value" => 7), 7 => array("title" => "Post feed Description", "image" => "template8.jpg", "pro" => true, "value" => 8));
        // line 64
        echo "
            ";
        // line 66
        echo "            ";
        // line 69
        echo "
            ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["presets"]) ? $context["presets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 71
            echo "                ";
            echo $context["preset"]->getputPreset((isset($context["data"]) ? $context["data"] : null));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </div>
    </div>
    <div id=\"gg-create-gallery-loader\" style=\"display: none;\">
        <p class=\"gg-centered\">

        <div class=\"gg-inline-loader gg-centered\"></div>
        </p>
    </div>
";
    }

    // line 3
    public function getputPreset($_data = null)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $_data,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    <div class=\"preset ";
            if ((($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pro"))) {
                echo "disabled";
            }
            echo "\"
         data-preset=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value"), "html", null, true);
            echo "\">
        <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getModule", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
            echo "/assets/img/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "image"), "html", null, true);
            echo "\" alt=\"\"/>
        ";
            // line 7
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pro") && ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false))) {
                // line 8
                echo "            <a class=\"button button-primary\" href=\"http://supsystic.com/plugins/photo-gallery/\" style=\"position: absolute; top: 50%; left: 30%; background-color: #ffffff;\">
                Available in PRO
            </a>
        ";
            } else {
                // line 12
                echo "            <div style=\"position: absolute; top: 50%; left: 50%; transform:translate(-50%, -50%); display:table;\">
                <a class=\"button button-primary button-select\" style=\"background-color: #ffffff;\">
                    Select
                </a>
                <span class=\"selected-preset\">";
                // line 16
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Selected")), "html", null, true);
                echo "</span>
            </div>
        ";
            }
            // line 19
            echo "        <div class=\"preset-overlay\">
            <h3>";
            // line 20
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title")), "html", null, true);
            echo "</h3>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/gallery_preset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 20,  170 => 19,  164 => 16,  158 => 12,  152 => 8,  150 => 7,  144 => 6,  140 => 5,  133 => 4,  122 => 3,  110 => 73,  101 => 71,  97 => 70,  94 => 69,  92 => 66,  89 => 64,  87 => 54,  84 => 53,  82 => 52,  78 => 50,  72 => 45,  67 => 40,  60 => 36,  54 => 34,  51 => 33,  42 => 29,  35 => 27,  32 => 26,  29 => 25,);
    }
}
