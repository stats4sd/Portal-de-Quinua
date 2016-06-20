<?php

/* @settings/index.twig */
class __TwigTemplate_3e23845e4415e505e77cf6356d6c72a1fecb1a23bb3b5287c6838e41c8ddaedb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("grid-gallery.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'beforeSettingsList' => array($this, 'block_beforeSettingsList'),
            'beforeSettings' => array($this, 'block_beforeSettings'),
            'afterSettings' => array($this, 'block_afterSettings'),
            'afterSettingsList' => array($this, 'block_afterSettingsList'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $context["h"] = $this->env->loadTemplate("@core/helpers.twig");
        // line 6
        echo "
    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "settings", 1 => "saveSettings"), "method"), "html", null, true);
        echo "\" method=\"POST\">
        ";
        // line 8
        $this->displayBlock('beforeSettingsList', $context, $blocks);
        // line 9
        echo "        <div class=\"settings-list\">
            ";
        // line 10
        $this->displayBlock('beforeSettings', $context, $blocks);
        // line 11
        echo "            <div class=\"settings\">
                <div class=\"setting-description\">

                    <label>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Roles"), "method"), "html", null, true);
        echo "</label>
                    ";
        // line 15
        echo $context["h"]->getshowTooltip("User roles that can use plugin. Administartor is included by default.", "top", true);
        echo "

                    ";
        // line 17
        if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false)) {
            // line 18
            echo "                        <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('build_pro_url')->getCallable(), array(array("utm_medium" => "manage_roles"))), "html", null, true);
            echo "\">
                            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "PRO option"), "method"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 22
        echo "                </div>
                <div class=\"setting-control\">
                    <select multiple=\"multiple\" name=\"settings[access_roles][]\" class=\"chosen-select\" data-placeholder=\"";
        // line 24
        echo "Select avalilable roles to use tables.";
        echo "\">
                        <option value=\"administrator\" disabled selected>Administrator</option>
                        ";
        // line 26
        $context["roles"] = array("editor" => "Editor", "author" => "Author", "contributor" => "Contributor", "subscriber" => "Subscriber");
        // line 32
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["role"] => $context["title"]) {
            // line 33
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : null), "html", null, true);
            echo "\"
                            ";
            // line 34
            if (twig_in_filter((isset($context["role"]) ? $context["role"] : null), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "access_roles"))) {
                // line 35
                echo "                                selected=\"selected\" 
                            ";
            }
            // line 37
            echo "                            >";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['role'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </select>
                </div>
            </div>
            ";
        // line 43
        $this->displayBlock('afterSettings', $context, $blocks);
        // line 44
        echo "        </div>
        ";
        // line 45
        $this->displayBlock('afterSettingsList', $context, $blocks);
        // line 46
        echo "    </form>
";
    }

    // line 8
    public function block_beforeSettingsList($context, array $blocks = array())
    {
    }

    // line 10
    public function block_beforeSettings($context, array $blocks = array())
    {
    }

    // line 43
    public function block_afterSettings($context, array $blocks = array())
    {
    }

    // line 45
    public function block_afterSettingsList($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@settings/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 45,  145 => 43,  140 => 10,  135 => 8,  130 => 46,  128 => 45,  125 => 44,  123 => 43,  118 => 40,  108 => 37,  104 => 35,  102 => 34,  97 => 33,  92 => 32,  90 => 26,  85 => 24,  81 => 22,  75 => 19,  70 => 18,  68 => 17,  63 => 15,  59 => 14,  54 => 11,  52 => 10,  49 => 9,  47 => 8,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 3,);
    }
}
