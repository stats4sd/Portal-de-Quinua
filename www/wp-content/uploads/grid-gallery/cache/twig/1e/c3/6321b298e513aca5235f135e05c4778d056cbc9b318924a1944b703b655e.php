<?php

/* @galleries/index.twig */
class __TwigTemplate_1ec36321b298e513aca5235f135e05c4778d056cbc9b318924a1944b703b655e extends Twig_Template
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
    </nav>

";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
    <section id=\"gg-galleries\">

        ";
        // line 17
        if ((!array_key_exists("galleries", $context))) {
            // line 18
            echo "            ";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "
            <div class=\"gg-galleries-grid\">
                ";
            // line 23
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) ? $context["galleries"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
                // line 24
                echo "                    <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" class=\"gg-item gg-gallery\" style=\"height: auto;\">
                        <h3 class=\"gallery-title\">";
                // line 25
                echo twig_title_string_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title"));
                echo "</h3>
                        <div class=\"image\">
                            ";
                // line 28
                echo "                            ";
                $context["cover"] = call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "attachment_id"), "350", "225", "true"));
                // line 29
                echo "
                            ";
                // line 30
                if ((twig_length_filter($this->env, (isset($context["cover"]) ? $context["cover"] : null)) < 1)) {
                    // line 31
                    echo "                                ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings"), "posts"), "postCover")) > 1)) {
                        // line 32
                        echo "                                    ";
                        $context["cover"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings"), "posts"), "postCover");
                        // line 33
                        echo "                                ";
                    }
                    // line 34
                    echo "                            ";
                }
                // line 35
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("cover", $context)) ? (_twig_default_filter((isset($context["cover"]) ? $context["cover"] : null), ("holder.js/350x220?theme=gray&text=" . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title")))) : (("holder.js/350x220?theme=gray&text=" . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title")))), "html", null, true);
                echo "\" alt=\"";
                echo $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title");
                echo "\" width=\"350px\" height=\"220px\"/>
                            ";
                // line 37
                echo "                            ";
                // line 41
                echo "                    </div>
                        <div class=\"controls-wrap\" style=\"display: inline-block\">
                            <!-- Control buttons -->
                            <ul class=\"gg-control-btn\">
                                <li>
                                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
                echo "\"
                                       class=\"button background\">
                                        <i class=\"fa fa-gear\"></i>
                                        ";
                // line 49
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Settings")), "html", null, true);
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
                echo "\"
                                       class=\"button background\">
                                        <i class=\"fa fa-bars\"></i>
                                        ";
                // line 56
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
                echo "\"
                                       class=\"button background\">
                                        <i class=\"fa fa-eye\"></i>
                                        ";
                // line 63
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
                echo "
                                    </a>
                                </li>
                            </ul>
                            <ul class=\"gg-control-btn\">
                                <li>
                                    <h4>
                                        <i class=\"fa fa-picture-o\"></i>
                                        ";
                // line 71
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Images: ")), "html", null, true);
                echo "
                                        <div class=\"gg-counter\"
                                             style=\"display: inline-block; font-weight: 200;\"
                                             title=\"";
                // line 74
                echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There are %s photos in the gallery %s")), twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos")), $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title")), "html", null, true);
                echo "\">
                                            ";
                // line 75
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "total") + (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array(), "any", false, true), "posts", array(), "any", false, true), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array(), "any", false, true), "posts", array(), "any", false, true), "length"), 0)) : (0))), "html", null, true);
                echo "
                                        </div>
                                    </h4>
                                </li>
                                <li title=\"";
                // line 79
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
                echo "\">
                                    <button class=\"button button-primary gallery import-to-gallery\" id=\"!sgg-btn-upload\" data-folder-id=\"0\"
                                            data-gallery-id=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" ";
                echo ">
                                        <i class=\"fa fa-fw fa-camera\"></i>
                                        ";
                // line 83
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
                echo "
                                    </button>
                                </li>
                                <li>
                                    <a id=\"delete-gallery\" data-confirm=\"";
                // line 87
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you sure you want to delete this gallery?")), "html", null, true);
                echo "\" class=\"button button-primary\" title=\"Delete this gallery\"
                                       href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "delete", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-trash-o\"></i>
                                        ";
                // line 90
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete gallery")), "html", null, true);
                echo "
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"shortcode-wrap\">
                            <div class=\"gg-shortcode\">
                                ";
                // line 97
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
                echo "<br /><br /> <input type=\"text\" id=\"shortcode-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" class=\"ggCopyTextCode shortcode\" value=\"[supsystic-gallery id='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "' position='center']\"><br /><br />
                                ";
                // line 98
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
                echo "<br /><br /> 
                                <input type=\"text\" id=\"phpcode-";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" class=\"ggCopyTextCode phpcode\" value='";
                echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id")) . " position=\"center\"]') ?>"), "html", null, true);
                echo "'>
                            </div>
                        </div>
                    </div>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 104
                echo "                    <h3>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You have no galleries")), "html", null, true);
                echo "</h3>
                    <p>
                        ";
                // line 106
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You don't have any galleries yet.")), "html", null, true);
                echo "
                        <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "showPresets"), "method"), "html", null, true);
                echo "\"
                           id=\"gg-create-gallery-link\"
                           style = \"color: #4ae8ea;\">";
                // line 109
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Want to create one right now?")), "html", null, true);
                echo "</a>
                    </p>

                    <h3>";
                // line 112
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("What is a gallery")), "html", null, true);
                echo "</h3>
                    <p>
                        ";
                // line 114
                echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array("<strong>Gallery</strong> &mdash; the highest type of entity in the Gallery by Supsystic."));
                echo "
                        <br/>
                        ";
                // line 116
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You can have an unlimited number of galleries, to which you can attach the preloaded pictures.")), "html", null, true);
                echo "
                        ";
                // line 117
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Each gallery has a number of display settings and behaviors that you can save to presets and apply to other galleries.")), "html", null, true);
                echo "
                    </p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "            </div>
        ";
        }
        // line 122
        echo "    </section>

    ";
        // line 145
        echo "
    <!-- Create dialog -->
    ";
        // line 188
        echo "
    ";
        // line 189
        $context["importTypes"] = $this->env->loadTemplate("@galleries/shortcode/import.twig");
        // line 190
        echo "    <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
        ";
        // line 191
        echo $context["importTypes"]->getshow(400);
        echo "
    </div>

";
    }

    // line 124
    public function getputPreset($_data = null)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $_data,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 125
            echo "        <div class=\"preset ";
            if ((($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pro"))) {
                echo "disabled";
            }
            echo "\"
             data-preset=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value"), "html", null, true);
            echo "\">
            <p>";
            // line 127
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title")), "html", null, true);
            echo "</p>
            <img src=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getModule", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
            echo "/assets/img/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "image"), "html", null, true);
            echo "\" alt=\"\"/>
            ";
            // line 129
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pro") && ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false))) {
                // line 130
                echo "                <a class=\"button button-primary inPro\"
                    ";
                // line 131
                if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title") == "Categories")) {
                    // line 132
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 134
                echo "                    ";
                if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title") == "Icons")) {
                    // line 135
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 137
                echo "                    ";
                if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title") == "Pagination")) {
                    // line 138
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 140
                echo "                    Available in PRO
                </a>
            ";
            }
            // line 143
            echo "        </div>
    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 143,  376 => 140,  372 => 138,  369 => 137,  365 => 135,  362 => 134,  358 => 132,  356 => 131,  353 => 130,  351 => 129,  345 => 128,  341 => 127,  337 => 126,  330 => 125,  319 => 124,  311 => 191,  306 => 190,  304 => 189,  301 => 188,  297 => 145,  293 => 122,  289 => 120,  280 => 117,  276 => 116,  271 => 114,  266 => 112,  260 => 109,  255 => 107,  251 => 106,  245 => 104,  233 => 99,  229 => 98,  221 => 97,  211 => 90,  206 => 88,  202 => 87,  195 => 83,  189 => 81,  184 => 79,  177 => 75,  173 => 74,  167 => 71,  156 => 63,  150 => 60,  143 => 56,  137 => 53,  130 => 49,  124 => 46,  117 => 41,  115 => 37,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  94 => 30,  91 => 29,  88 => 28,  83 => 25,  78 => 24,  72 => 23,  68 => 20,  65 => 19,  63 => 18,  61 => 17,  56 => 14,  53 => 13,  43 => 8,  36 => 6,  32 => 4,  29 => 3,);
    }
}
