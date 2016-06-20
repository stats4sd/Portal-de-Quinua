<?php

/* @galleries/view.twig */
class __TwigTemplate_8759ab0f26c99bffdc834436842b2957a4d4c088b23478765b86dd71b767c428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("grid-gallery.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
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
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title"), "html", null, true);
        echo "</a>
    </nav>

    <section class=\"supsystic-bar\" id=\"single-gallery-toolbar\">
        <ul class=\"supsystic-bar-controls\">
            ";
        // line 15
        echo "            ";
        // line 28
        echo "
            <li title=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                <button class=\"button button-primary gallery import-to-gallery\">
                    <i class=\"fa fa-fw fa-upload\"></i>
                    ";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                </button>
            </li>

            <li>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
        echo "\"
                   class=\"button\">
                    <i class=\"fa fa-fw fa-cogs\"></i>
                    ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Properties")), "html", null, true);
        echo "
                </a>
            </li>

            <li>
                <a target=\"_blank\"
                   href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
        echo "\"
                   class=\"button\" data-button=\"preview\">
                    <i class=\"fa fa-fw fa-eye\"></i>
                    ";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                </a>
            </li>

            <li class=\"separator\">|</li>

            ";
        // line 60
        echo "
            <li>
                <button class=\"button\" data-button=\"remove\" disabled>
                    <i class=\"fa fa-fw fa-trash-o\"></i>
                    ";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete Image")), "html", null, true);
        echo "
                </button>
            </li>

            <li class=\"separator\">|</li>

            <li style=\"float: right\">
                <button class=\"button button-primary\" data-button=\"sortbtn\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    Ok
                </button>
            </li>

            <li title=\"";
        // line 77
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "\" style=\"float: right;\">
                ";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "
                <select name=\"sortto\" style=\"height: 34px;\">
                    <option value=\"asc\" ";
        // line 80
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortto") == "asc")) {
            echo "selected";
        }
        echo ">Asc</option>
                    <option value=\"desc\" ";
        // line 81
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortto") == "desc")) {
            echo "selected";
        }
        echo ">Desc</option>
                </select>
            </li>

            <li title=\"";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "\" style=\"float: right;\">
                ";
        // line 86
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "
                <select name=\"sortby\" style=\"height: 34px;\">
                    <option value=\"postion\" ";
        // line 88
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "position")) {
            echo "selected";
        }
        echo ">Position</option>
                    <option value=\"adate\" ";
        // line 89
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "adate")) {
            echo "selected";
        }
        echo ">Add date</option>
                    <option value=\"date\" ";
        // line 90
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "date")) {
            echo "selected";
        }
        echo ">Create date</option>
                    <option value=\"size\" ";
        // line 91
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "size")) {
            echo "selected";
        }
        echo ">Size</option>
                    <option value=\"name\" ";
        // line 92
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "name")) {
            echo "selected";
        }
        echo ">Name</option>
                    ";
        // line 93
        if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
            echo "<option value=\"tags\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort"), "sortby") == "tags")) {
                echo "selected";
            }
            echo ">Tags</option>";
        }
        // line 94
        echo "                </select>
            </li>

            ";
        // line 114
        echo "        </ul>
    </section>

    ";
        // line 117
        if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
            // line 118
            echo "    <section class=\"supsystic-bar\" id=\"images-gallery-toolbar\" style=\"padding-right: 15px;\">
        <ul class=\"supsystic-bar-controls\">
            <li>
                <select name=\"bulkactions\" style=\"height: 34px;\">
                    ";
            // line 122
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags")) > 0)) {
                // line 123
                echo "                    <option value=\"add\">Add Category</option>
                    ";
            }
            // line 125
            echo "                    <option value=\"newcat\">Create New Category</option>
                    ";
            // line 126
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags")) > 0)) {
                // line 127
                echo "                    <option value=\"delcat\">Delete Category</option>
                    ";
            }
            // line 129
            echo "                </select>
            </li>

            <li>
                ";
            // line 133
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags")) > 0)) {
                // line 134
                echo "                <select name=\"catactions\" style=\"height: 34px;\">
                    ";
                // line 135
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags"));
                foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                    // line 136
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "                    <option value=\"allcat\" style=\"display:none;\">All Categories</option>
                </select>
                ";
            }
            // line 141
            echo "                <input type=\"text\" name=\"newTag\" ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags")) != 0)) {
                echo " style=\"display:none; height:34px; width: 150px;\" ";
            } else {
                echo " style=\"width: 150px; height:34px;\" ";
            }
            echo "value=\"\" placeholder=\"Category name...\">
            </li>

            <li>
                <button class=\"button button-primary\" data-button=\"allimagetags\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    ";
            // line 147
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Apply")), "html", null, true);
            echo "
                </button>
            </li>
        </ul>
    </section>
    ";
        }
    }

    // line 155
    public function block_content($context, array $blocks = array())
    {
        // line 156
        echo "    ";
        $context["importTypes"] = $this->env->loadTemplate("@galleries/shortcode/import.twig");
        // line 157
        echo "
    ";
        // line 158
        if (((!array_key_exists("gallery", $context)) || (null === (isset($context["gallery"]) ? $context["gallery"] : null)))) {
            // line 159
            echo "        <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("The gallery is does not exists")), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 161
            echo "        ";
            if (twig_test_empty($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos"))) {
                // line 162
                echo "            <h2 style=\"text-align: center; color: #bfbfbf; margin: 50px 0 25px 0;\">
                <span style=\"margin-bottom: 20px; display: block;\">
                    ";
                // line 164
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently this gallery has no images")), "html", null, true);
                echo "
                </span>
                ";
                // line 166
                echo $context["importTypes"]->getshow("1000", $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"));
                echo "
            </h2>
        ";
            } else {
                // line 169
                echo "            ";
                $context["view"] = $this->env->loadTemplate("@ui/type.twig");
                // line 170
                echo "            ";
                $context["entity"] = array("images" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos"));
                // line 171
                echo "            ";
                $context["sliderSettings"] = (isset($context["settings"]) ? $context["settings"] : null);
                // line 172
                echo "
            ";
                // line 173
                if (((isset($context["viewType"]) ? $context["viewType"] : null) == "block")) {
                    // line 174
                    echo "                ";
                    echo $context["view"]->getblock_view((isset($context["entity"]) ? $context["entity"] : null));
                    echo "
            ";
                }
                // line 176
                echo "
            ";
                // line 177
                if (((isset($context["viewType"]) ? $context["viewType"] : null) == "list")) {
                    // line 178
                    echo "                ";
                    echo $context["view"]->getlist_view((isset($context["entity"]) ? $context["entity"] : null), (isset($context["sliderSettings"]) ? $context["sliderSettings"] : null), $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"));
                    echo "
            ";
                }
                // line 180
                echo "        ";
            }
            // line 181
            echo "    ";
        }
        // line 182
        echo "
    <div id=\"importDialog\" title=\"";
        // line 183
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
        ";
        // line 184
        echo $context["importTypes"]->getshow(400, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"));
        echo "
    </div>

    <div id=\"linkedImagesDialog\" title=\"";
        // line 187
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked Images")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div class=\"linked-images-action-buttons\">
            <button class=\"button add\">";
        // line 189
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add images")), "html", null, true);
        echo "</button>
            <button class=\"button remove\">";
        // line 190
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove selected")), "html", null, true);
        echo "</button>
        </div>
        <div class=\"linked-attachments-list\">
            
        </div>
        <div class=\"loading-container\">
            <i class=\"fa fa-spinner fa-spin fa-2x\"></i>
        </div>
    </div>

    <div id=\"effectDialog\" title=\"";
        // line 200
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
            ";
        // line 202
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Sqkwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid");
        // line 230
        echo "            ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 237
        echo "            ";
        ob_start();
        // line 238
        echo "                border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius") . strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
                ";
        // line 239
        if ((($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 240
            echo "                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_enabled") == "true")) {
                // line 241
                echo "                        background-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color"), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
                    ";
            }
            // line 243
            echo "                ";
        } else {
            // line 244
            echo "                    color:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "foreground"), "html", null, true);
            echo ";
                    background-color:";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "background"), "html", null, true);
            echo ";
                    font-size:";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
                    ";
            // line 247
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align") != 3)) {
                // line 248
                echo "                        text-align:";
                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align"), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
                    ";
            }
            // line 250
            echo "                    ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect") == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "false"))) {
                // line 251
                echo "                        ";
                // line 252
                echo "                        bottom:0;
                    ";
            }
            // line 254
            echo "                ";
        }
        // line 255
        echo "            ";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 256
        echo "
            ";
        // line 257
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings"), "icons"), "enabled") == "false")) {
            // line 258
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["effects"]) ? $context["effects"] : null));
            foreach ($context['_seq'] as $context["type"] => $context["name"]) {
                // line 259
                echo "                    ";
                if (((isset($context["type"]) ? $context["type"] : null) != "direction-aware")) {
                    // line 260
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                    echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 261
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                    // line 262
                    echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                    echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\">
                                    <span>";
                    // line 264
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "</span>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                    // line 268
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                } else {
                    // line 272
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                    echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right ? Left</div>
                                <div class=\"box__left\">Left ? Right</div>
                                <div class=\"box__top\">Top ? Bottom</div>
                                <div class=\"box__bottom\">Bottom ? Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 280
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                    // line 283
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                }
                // line 287
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
            ";
        } else {
            // line 290
            echo "                <div class=\"captions-effect-with-icons\" data-confirm=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
            echo "\">
                    <h3>Captions effects with icons</h3>
                    ";
            // line 292
            $this->displayBlock('iconsEffects', $context, $blocks);
            // line 316
            echo "                </div>
            ";
        }
        // line 318
        echo "        </div>
        <style>
            .hi-icon { 
                color: ";
        // line 321
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "color"), "html", null, true);
        echo " !important; 
                background: ";
        // line 322
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background"), "html", null, true);
        echo " !important; 
            }
            .hi-icon:hover { 
                color: ";
        // line 325
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "hover_color"), "html", null, true);
        echo " !important; 
                background: ";
        // line 326
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background_hover"), "html", null, true);
        echo " !important; 
            }
            .hi-icon { 
                width: ";
        // line 329
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
        echo "px !important; 
                height: ";
        // line 330
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
        echo "px !important; 
            }
            .hi-icon:before { 
                font-size: ";
        // line 333
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size"), 16)) : (16)), "html", null, true);
        echo "px !important; 
                line-height: ";
        // line 334
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
        echo "px !important; 
            }
        </style>
    </div>
";
    }

    // line 292
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 293
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["iconsWithCaptionsEffects"]) ? $context["iconsWithCaptionsEffects"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 294
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 295
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 296
            echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 302
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
            echo "
                                        vertical-align:";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 311
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@galleries/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  657 => 315,  647 => 311,  638 => 305,  634 => 304,  629 => 302,  620 => 296,  616 => 295,  611 => 294,  606 => 293,  603 => 292,  594 => 334,  590 => 333,  584 => 330,  580 => 329,  574 => 326,  570 => 325,  564 => 322,  560 => 321,  555 => 318,  551 => 316,  549 => 292,  543 => 290,  539 => 288,  533 => 287,  526 => 283,  520 => 280,  508 => 272,  501 => 268,  494 => 264,  489 => 262,  485 => 261,  480 => 260,  477 => 259,  472 => 258,  470 => 257,  467 => 256,  464 => 255,  461 => 254,  457 => 252,  455 => 251,  452 => 250,  446 => 248,  444 => 247,  439 => 246,  435 => 245,  430 => 244,  427 => 243,  421 => 241,  418 => 240,  416 => 239,  411 => 238,  408 => 237,  405 => 230,  403 => 202,  398 => 200,  385 => 190,  381 => 189,  376 => 187,  370 => 184,  366 => 183,  363 => 182,  360 => 181,  357 => 180,  351 => 178,  349 => 177,  346 => 176,  340 => 174,  338 => 173,  335 => 172,  332 => 171,  329 => 170,  326 => 169,  320 => 166,  315 => 164,  311 => 162,  308 => 161,  302 => 159,  300 => 158,  297 => 157,  294 => 156,  291 => 155,  280 => 147,  266 => 141,  261 => 138,  250 => 136,  246 => 135,  243 => 134,  241 => 133,  235 => 129,  231 => 127,  229 => 126,  226 => 125,  222 => 123,  220 => 122,  214 => 118,  212 => 117,  207 => 114,  202 => 94,  194 => 93,  188 => 92,  182 => 91,  176 => 90,  170 => 89,  164 => 88,  159 => 86,  155 => 85,  146 => 81,  140 => 80,  135 => 78,  131 => 77,  115 => 64,  109 => 60,  100 => 49,  94 => 46,  85 => 40,  79 => 37,  71 => 32,  65 => 29,  62 => 28,  60 => 15,  50 => 9,  43 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
