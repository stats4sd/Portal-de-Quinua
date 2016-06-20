<?php

/* @galleries/settings.twig */
class __TwigTemplate_8ed030b891e28500c2edb7b256a1d9e168369b46a433490f1c0fdc769e6563e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("grid-gallery.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'tabs' => array($this, 'block_tabs'),
            'preview' => array($this, 'block_preview'),
            'content' => array($this, 'block_content'),
            'area' => array($this, 'block_area'),
            'disableRightClick' => array($this, 'block_disableRightClick'),
            'horizontalScroll' => array($this, 'block_horizontalScroll'),
            'horizontalScrollAfter' => array($this, 'block_horizontalScrollAfter'),
            'border' => array($this, 'block_border'),
            'shadow' => array($this, 'block_shadow'),
            'popup' => array($this, 'block_popup'),
            'popupAfter' => array($this, 'block_popupAfter'),
            'preload' => array($this, 'block_preload'),
            'post' => array($this, 'block_post'),
            'icons' => array($this, 'block_icons'),
            'categories' => array($this, 'block_categories'),
            'pagination' => array($this, 'block_pagination'),
            'form' => array($this, 'block_form'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
            'modals' => array($this, 'block_modals'),
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

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\" style=\"float: left; padding-top: 20px;\">
        ";
        // line 27
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title");
        echo "</a>
    </nav>

    <h2 class=\"form-tabs\">
        <a class=\"nav-tab change-tab\" href=\"area\">
            <i class=\"fa fa-home\"></i>
            ";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"overlay\">
            <i class=\"fa fa-info\"></i>
            ";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"cats\">
            <i class=\"fa fa-bookmark-o\"></i>
            ";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"post\">
            <i class=\"fa fa-columns\"></i>
            ";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), "html", null, true);
        echo "
        </a>

        ";
        // line 55
        $this->displayBlock('tabs', $context, $blocks);
        // line 56
        echo "    </h2>
";
    }

    // line 55
    public function block_tabs($context, array $blocks = array())
    {
    }

    // line 59
    public function block_preview($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        $context["style"] = $this->env->loadTemplate("@galleries/shortcode/style.twig");
        // line 61
        echo "    ";
        $context["attachment"] = $this->env->loadTemplate("@galleries/helpers/attachment.twig");
        // line 62
        echo "
    <div id=\"preview\" class=\"gallery-preview\">
        <section class=\"supsystic-bar-preview\" id=\"single-gallery-toolbar\">
            <ul class=\"supsystic-bar-controls\">
                ";
        // line 73
        echo "
                <li title=\"";
        // line 74
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                    <button class=\"button button-primary gallery import-to-gallery\" data-gallery-id=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-camera\"></i>
                        ";
        // line 77
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                    </button>
                </li>

                <li>
                    <a class=\"button\"
                       href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-list fa-fw\"></i>
                        ";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <a class=\"button button-primary\" target=\"_blank\"
                       href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-eye\"></i>
                        ";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <button class=\"button button-primary\" id=\"btnSave\">
                        <i class=\"fa fa-fw fa-check\"></i>
                        ";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
                    </button>
                </li>
            </ul>
        </section>
        ";
        // line 105
        if ((!twig_test_empty($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos")))) {
            // line 106
            echo "            <div style=\"
            ";
            // line 107
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings"), "area"), "photo_width_unit") == 0) && (!twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings"), "area"), "photo_width"))))) {
                // line 108
                echo "                width:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings"), "area"), "photo_width"), "html", null, true);
                echo "px;
            ";
            }
            // line 110
            echo "            margin: 10px auto;
            max-width: 380px;
            clear:both;
            \">
                <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"center\" style=\"float: none !important;\">
                   ";
            // line 115
            list($context["width"], $context["height"], $context["crop"]) =             array(0, 0, 0);
            // line 116
            echo "
                    ";
            // line 117
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit") == 0)) {
                // line 118
                echo "                        ";
                $context["width"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width");
                // line 119
                echo "                    ";
            }
            // line 120
            echo "
                    ";
            // line 121
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit") == 0)) {
                // line 122
                echo "                        ";
                $context["height"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height");
                // line 123
                echo "                    ";
            }
            // line 124
            echo "
                    ";
            // line 125
            if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 0) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "2")) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "3"))) {
                // line 126
                echo "                        ";
                $context["crop"] = 1;
                // line 127
                echo "                    ";
            } else {
                // line 128
                echo "                        ";
                $context["height"] = null;
                // line 129
                echo "                    ";
            }
            // line 130
            echo "
                    ";
            // line 131
            if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) {
                // line 132
                echo "                        ";
                $context["cropQuality"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "cropQuality");
                // line 133
                echo "                    ";
            } else {
                // line 134
                echo "                        ";
                $context["cropQuality"] = null;
                // line 135
                echo "                    ";
            }
            // line 136
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos"), 0, array(), "array"), "attachment"), "id"), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), (isset($context["crop"]) ? $context["crop"] : null), (isset($context["cropQuality"]) ? $context["cropQuality"] : null))), "html", null, true);
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, ("holder.js/350x250?theme=simple&text=" . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title")), "html", null, true);
            echo "\" alt=\"";
            echo $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title");
            echo "\" style=\"width: auto; height: auto;\"/>
                    <figcaption style=\"";
            // line 137
            echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
            echo "\">
                        <div style=\"display: table; height: 100%; width: 100%;\">
                            <div class=\"grid-gallery-figcaption-wrap\" style=\"display: table-cell;\">
                                <span>Gallery by Supsystic</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        ";
        } else {
            // line 147
            echo "            <div style=\"clear: both;\"></div>
            <h2 style=\"text-align: center;\">
                ";
            // line 149
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There're no images in the gallery.")), "html", null, true);
            echo "<br>
                <a class=\"import-to-gallery\" href=\"#\">Add Images</a>
            </h2>
        ";
        }
        // line 153
        echo "
        <div style=\"clear: both;\"></div>

        <div class=\"shortcode-wrap\" style=\"margin-top: 20px\">
            <div class=\"shortcode\">";
        // line 157
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"[";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "config"), "get", array(0 => "shortcode_name"), "method"), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
        echo " position=center]\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
            <div class=\"shortcode\">";
        // line 158
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"";
        echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id")) . " position=\"center\"]') ?>"), "html", null, true);
        echo "\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
        </div>

        <small style=\"left:25px;position:absolute;top:10px;display:none;\">Oops! Transparency doesn't work in live preview. </small>
        <div class=\"separator\"></div>

        <div style=\"margin: 20px 0\">
            <a class=\"button\" id=\"openSettingsImportDialog\" href=\"\"><i class=\"fa fa-copy\"></i> ";
        // line 165
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings")), "html", null, true);
        echo "</a>
        </div>
    </div>
";
    }

    // line 170
    public function block_content($context, array $blocks = array())
    {
        // line 171
        echo "    ";
        $context["form"] = $this->env->loadTemplate("@core/form.twig");
        // line 172
        echo "    ";
        $context["f"] = $this;
        // line 173
        echo "
    <div class=\"settings-wrap\" data-leave-confirm=\"";
        // line 174
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your changes not saved. You really want to leave without saving?")), "html", null, true);
        echo "\">
        ";
        // line 175
        echo $context["form"]->getopen("post", $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "saveSettings", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"))), "method"), array("id" => "form-settings"));
        echo "
        <input id=\"currentPresetTitle\" name=\"title\" type=\"hidden\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title"), "")) : ("")), "html", null, true);
        echo "\"/>
        <input name=\"previewImage\" type=\"hidden\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings"), "previewImage"), "html", null, true);
        echo "\"/>

        <div data-tab=\"area\">
            ";
        // line 180
        $this->displayBlock('area', $context, $blocks);
        // line 275
        echo "
            ";
        // line 276
        $this->displayBlock('horizontalScroll', $context, $blocks);
        // line 314
        echo "
            <div class=\"load-more-button-preview\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 317
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load more gallery images with scroll or button")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" href=\"";
        // line 319
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Get PRO"), "method"), "html", null, true);
        echo "</a>
                </h1>
                <div>
                    <a href=\"";
        // line 322
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/load_more_button_pro.jpg\" />
                    </a>
                </div>
                <div class=\"separator\"></div>
            </div>

            <div class=\"custom-buttons-preview\">
                <table class=\"form-table\">
                    <thead>
                        ";
        // line 332
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Buttons")), $context["form"]->getbutton("buttons-presets-editor-preview", "Show preset Editor", array("class" => "button button-primary")), "custom-buttons-preview", true);
        // line 333
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            </div>

            ";
        // line 339
        $this->displayBlock('border', $context, $blocks);
        // line 384
        echo "
            ";
        // line 385
        $this->displayBlock('shadow', $context, $blocks);
        // line 451
        echo "
            ";
        // line 452
        $this->displayBlock('popup', $context, $blocks);
        // line 665
        echo "
            ";
        // line 666
        $this->displayBlock('preload', $context, $blocks);
        // line 718
        echo "        </div>

        ";
        // line 720
        $this->displayBlock('post', $context, $blocks);
        // line 737
        echo "
        <div data-tab=\"overlay\">
            <table class=\"form-table\" name=\"captions\">
                <thead>
                    ";
        // line 742
        echo "                    ";
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Sqkwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid");
        // line 770
        echo "                    ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 777
        echo "                    ";
        $context["enableCaptions"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled"), "true")) : ("true")) == "true");
        // line 778
        echo "                    ";
        $context["polaroidIsEnable"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect") == "polaroid")) ? ("true") : ("false"));
        // line 779
        echo "
                    ";
        // line 781
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), ((($context["form"]->getradio("thumbnail[overlay][enabled]", "true", twig_array_merge(array("id" => "showCaptions"), (((isset($context["enableCaptions"]) ? $context["enableCaptions"] : null)) ? (array("checked" => "checked")) : (array())))) . $context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "showCaptions")) . $context["form"]->getradio("thumbnail[overlay][enabled]", "false", twig_array_merge(array("id" => "hideCaptions"), (((isset($context["enableCaptions"]) ? $context["enableCaptions"] : null)) ? (array()) : (array("checked" => "checked")))))) . $context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "hideCaptions")), "", true, "useCaptions");
        // line 801
        echo "

                    ";
        // line 804
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Effect")), ($context["form"]->getbutton("", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), array("id" => "chooseEffect", "class" => "button bordered")) . $context["form"]->gethidden("thumbnail[overlay][effect]", (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect"), "quarter-appear")) : ("quarter-appear")), array("id" => "overlayEffect"))), "chooseEffect");
        // line 816
        echo "

                    ";
        // line 819
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Personal captions")), $context["form"]->getselect("thumbnail[overlay][personal]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal"), "false")) : ("false")), array("style" => "width: auto;")), "overlay-personal");
        // line 827
        echo "

                    ";
        // line 830
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Style")), $context["form"]->getselect("", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (isset($context["polaroidIsEnable"]) ? $context["polaroidIsEnable"] : null), array("style" => "width: auto;")), "polaroid-effect");
        // line 838
        echo "

                    ";
        // line 841
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Animation")), $context["form"]->getselect("thumbnail[overlay][polaroidAnimation]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation"), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-animation");
        // line 849
        echo "

                    ";
        // line 852
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Scattering ")), $context["form"]->getselect("thumbnail[overlay][polaroidScattering]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering"), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-scattering");
        // line 860
        echo "

                    ";
        // line 863
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Frame Width")), $context["form"]->getinput("number", "thumbnail[overlay][polaroidFrameWidth]", (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth"), 20)) : (20)), array("style" => array("width" => "140px"))), "polaroid-frame-width");
        // line 871
        echo "

                    ";
        // line 874
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), $context["form"]->gettext("thumbnail[overlay][background]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "background"), array("class" => "gg-color-picker")), "overlay-background");
        // line 881
        echo "

                    ";
        // line 884
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text color")), $context["form"]->gettext("thumbnail[overlay][foreground]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "foreground"), array("class" => "gg-color-picker")), "overlay-foreground");
        // line 891
        echo "

                    ";
        // line 894
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")), $context["form"]->getselect("thumbnail[overlay][transparency]", array(0 => "0%", 1 => "10%", 2 => "20%", 3 => "30%", 4 => "40%", 5 => "50%", 6 => "60%", 7 => "70%", 8 => "80%", 9 => "90%", 10 => "100%"), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency"), 9)) : (9)), array("style" => "width: auto;")), "overlay-transparency");
        // line 902
        echo "

                    ";
        // line 905
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text size")), ($context["form"]->getinput("number", "thumbnail[overlay][text_size]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), array("style" => array("width" => "140px"))) . $context["form"]->getselect("thumbnail[overlay][text_size_unit]", array(0 => "pixels", 1 => "percents", 2 => "ems"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array("style" => "margin-top: -2px; height: 27px"))), "text-size");
        // line 919
        echo "

                    ";
        // line 922
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text horizontal align")), $context["form"]->getselect("thumbnail[overlay][text_align]", array("left" => "Left", "right" => "Right", "center" => "Center", "auto" => "Auto"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align"), array("style" => "width: auto;")), "text-align");
        // line 930
        echo "

                    ";
        // line 933
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text vertical align")), $context["form"]->getselect("thumbnail[overlay][position]", array("top" => "Top", "middle" => "Middle", "bottom" => "Bottom"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), array("style" => "width: auto;")), "overlay-position");
        // line 941
        echo "

                    ";
        // line 944
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Font family")), $context["form"]->getselectv("thumbnail[overlay][font_family]", (isset($context["fontList"]) ? $context["fontList"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), array("style" => "width: auto;")), "font-family");
        // line 952
        echo "
                </thead>

                ";
        // line 956
        echo "                ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide image title tooltip")), $context["form"]->getselect("thumbnail[tooltip]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "tooltip"), array("style" => "width: auto;")), "tooltip");
        // line 964
        echo "

                ";
        // line 967
        echo "                ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mobile - show always caption")), $context["form"]->getselect("thumbnail[isMobile]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile"), "false")) : ("false"))), "ismobile");
        // line 974
        echo "
            </table>

            <div class=\"separator\"></div>

            ";
        // line 979
        $this->displayBlock('icons', $context, $blocks);
        // line 1106
        echo "        </div>

        ";
        // line 1108
        $this->displayBlock('categories', $context, $blocks);
        // line 1139
        echo "
        ";
        // line 1140
        $this->displayBlock('form', $context, $blocks);
        // line 1142
        echo "
        ";
        // line 1143
        echo $context["form"]->getclose();
        echo "

        <div id=\"saveDialog\" title=\"";
        // line 1145
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save settings as preset")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetTitle\">
                    ";
        // line 1148
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preset title:")), "html", null, true);
        echo "
                </label>
            </div>
            <div>
                <input id=\"presetTitle\" type=\"text\" name=\"title\" style=\"width:100%;\" value=\"";
        // line 1152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "title"), "html", null, true);
        echo "\"/>
                <input id=\"settingsId\" type=\"hidden\" name=\"settings_id\" value=\"";
        // line 1153
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"/>
            </div>
        </div>

        <div id=\"deletePreset\" title=\"";
        // line 1157
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete preset")), "html", null, true);
        echo "\">
            <p>
                ";
        // line 1159
        echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you really want to delete preset \"%s\"?")), $this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "title")), "html", null, true);
        echo "
            </p>
            <input type=\"hidden\" id=\"presetId\" value=\"";
        // line 1161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "id"), "html", null, true);
        echo "\">
        </div>

        <div id=\"loadPreset\" title=\"";
        // line 1164
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load settings from presets")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetList\">";
        // line 1166
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select preset:")), "html", null, true);
        echo "</label>
            </div>
            <div>
                <select id=\"presetList\" name=\"presetList\" style=\"width:100%\"></select>
            </div>
            <div id=\"presetListError\">
                <p id=\"presetLoadingFailed\" style=\"display:none\">
                    ";
        // line 1173
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Failed to load the presets.")), "html", null, true);
        echo "
                </p>

                <p id=\"presetEmpty\" style=\"display:none\">
                    ";
        // line 1177
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently you have no presets.")), "html", null, true);
        echo "
                </p>
            </div>
        </div>

        <div id=\"themeDialog\" title=\"";
        // line 1182
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select \"Big image\" theme")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1184
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select a theme")), "html", null, true);
        echo "
            </h1>
            <div>
                ";
        // line 1187
        $context["bigImageThemes"] = array("theme_1" => "Theme 1", "theme_2" => "Theme 2", "theme_3" => "Theme 3", "theme_4" => "Theme 4", "theme_5" => "Theme 5", "theme_6" => "Theme 6", "theme_7" => "Theme 7");
        // line 1196
        echo "
                ";
        // line 1197
        if ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method")) {
            // line 1198
            echo "                    ";
            $context["bigImageThemes"] = twig_array_merge((isset($context["bigImageThemes"]) ? $context["bigImageThemes"] : null), array("theme_1_pro" => "Fullscreen popup"));
            // line 1199
            echo "                ";
        }
        // line 1200
        echo "
                ";
        // line 1201
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bigImageThemes"]) ? $context["bigImageThemes"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["name"]) {
            // line 1202
            echo "                    <div class=\"grid-gallery-caption\">
                        <img data-name=\"";
            // line 1203
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" data-val=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" class=\"theme dialog-image\"
                             src=\"";
            // line 1204
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getModule", array(0 => "colorbox"), "method"), "getThemeScreenshotUrl", array(0 => (isset($context["value"]) ? $context["value"] : null)), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
                             title=\"";
            // line 1205
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"/>
                        <div class=\"select-element\">
                            <h3>";
            // line 1207
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "</h3>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1211
        echo "
            </div>
        </div>

        <div id=\"effectDialog\" title=\"";
        // line 1215
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\">
            <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
                ";
        // line 1217
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["effects"]) ? $context["effects"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1218
            echo "                    ";
            if (((isset($context["type"]) ? $context["type"] : null) != "direction-aware")) {
                // line 1219
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1220
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                // line 1221
                echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
                                    <div style=\"display:table;width:100%;height:100%;\">
                                        <span style=\"display:table-cell;font-size:";
                // line 1224
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                echo ";padding:10px;vertical-align:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
                echo ";\">Caption</span>
                                    </div>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                // line 1229
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } else {
                // line 1233
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right → Left</div>
                                <div class=\"box__left\">Left → Right</div>
                                <div class=\"box__top\">Top → Bottom</div>
                                <div class=\"box__bottom\">Bottom → Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1241
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1244
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            }
            // line 1248
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1249
        echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
                <div class=\"captions-effect-with-icons\" data-confirm=\"";
        // line 1250
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
        echo "\">
                    <h3>Captions effects with icons</h3>
                    ";
        // line 1252
        $this->displayBlock('iconsEffects', $context, $blocks);
        // line 1276
        echo "                </div>
            </div>
        </div>

        <div id=\"shadowDialog\" title=\"";
        // line 1280
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow preset")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1282
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow")), "html", null, true);
        echo "
            </h1>
            <div class=\"shadow-dialog-wrapper\">
                ";
        // line 1285
        $context["shadowPresets"] = array("effect_1" => array("name" => "Effect 1", "offset_x" => "8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_2" => array("name" => "Effect 2", "offset_x" => "-8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_3" => array("name" => "Effect 3", "offset_x" => "-8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_4" => array("name" => "Effect 4", "offset_x" => "8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_5" => array("name" => "Effect 5", "offset_x" => "8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_6" => array("name" => "Effect 6", "offset_x" => "-8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_7" => array("name" => "Effect 7", "offset_x" => "0", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_8" => array("name" => "Effect 8", "offset_x" => "0", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_9" => array("name" => "Effect 9", "offset_x" => "0", "offset_y" => "4", "blur" => "10", "color" => "rgba(0, 0, 0, 1.0)"), "effect_10" => array("name" => "Effect 10", "offset_x" => "0", "offset_y" => "-4", "blur" => "8", "color" => "rgba(0, 0, 0, 1.0)"));
        // line 1357
        echo "

                ";
        // line 1359
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shadowPresets"]) ? $context["shadowPresets"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["effect"]) {
            // line 1360
            echo "                    <div class=\"grid-gallery-caption\" style=\"float: left; margin-left: 15px; cursor: pointer;\">
                        <div class=\"shadow-preset\" data-offset-x=\"";
            // line 1361
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "offset_x"), "html", null, true);
            echo "\" data-offset-y=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "offset_y"), "html", null, true);
            echo "\" data-blur=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "blur"), "html", null, true);
            echo "\" data-color=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "color"), "html", null, true);
            echo "\"
                             style=\"margin: 20px; box-shadow: ";
            // line 1362
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "offset_x"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "offset_y"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "blur"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "color"), "html", null, true);
            echo ";\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1363
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["effect"]) ? $context["effect"] : null), "name"), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                        </div>
                        <div class=\"select-element\">
                            ";
            // line 1366
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1370
        echo "
            </div>
        </div>

        <div id=\"reviewNotice\" title=\"Review\" hidden>
            <h3>Hey, I noticed you just use Gallery by Supsystic over a week – that’s awesome!</h3>
            <p>Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.</p>

            <ul style=\"list-style: circle; padding-left: 30px;\">
                <li>
                    <button class=\"button button-primary\"><a href=\"//wordpress.org/support/view/plugin-reviews/gallery-by-supsystic?rate=5#postform\" target=\"_blank\" class=\"bupSendStatistic\" data-statistic-code=\"is_shown\" style=\"color:#000000 !important;\">Ok, you deserve it</a></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">Nope, maybe later</span></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">I already did</span></button>
                </li>
            </ul>
        </div>

        <div id=\"settingsImportDialog\" title=\"Import\" hidden>
            <div class=\"import\">
                <p>";
        // line 1393
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings from gallery")), "html", null, true);
        echo "</p>
                <select class=\"list\"></select>
            </div>
            <div class=\"import-not-available\" style=\"display:none\">
                <p>";
        // line 1397
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you can import settings from other galleries, but right now, you have only one gallery, create more - and see how it works")), "html", null, true);
        echo "</p>
            </div>
        </div>

        ";
        // line 1401
        $context["importTypes"] = $this->env->loadTemplate("@galleries/shortcode/import.twig");
        // line 1402
        echo "        <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
            ";
        // line 1403
        echo $context["importTypes"]->getshow(400, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"));
        echo "
        </div>

        <div class=\"buttons-edit-preset-dialog-preview\" title=\"";
        // line 1406
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons preset editor for Paginations, Categories and Load More buttons")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 1407
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                <img src=\"";
        // line 1408
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/custom_button_icon_pro.jpg\" />
            </a>
        </div>
        <div class=\"loader-dialog-preview\" title=\"";
        // line 1411
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Improve free version")), "html", null, true);
        echo "\" style=\"line-height: 200%;\">
            Please be advised that this option is available only in <u>Pro version</u>. You can
            <a  href=\"";
        // line 1413
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\">
                Get PRO
            </a>
            today and get this and other PRO options for Galleries!
        </div>
    </div>

    ";
        // line 1420
        $this->displayBlock('modals', $context, $blocks);
    }

    // line 180
    public function block_area($context, array $blocks = array())
    {
        // line 181
        echo "                <table class=\"form-table\" name=\"area\">
                    <thead>
                        ";
        // line 183
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Type")), $context["form"]->getselect("area[grid]", array(0 => "Fixed", 1 => "Vertical", 2 => "Horizontal", 3 => "Fixed Columns"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid"), array("style" => "width: auto;")), "grid-type", "gallery-types", "columns");
        // line 184
        echo "
        \t\t\t\t
                        <tr id=\"generalColumnsRow\" hidden>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
        // line 189
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of Columns")), "html", null, true);
        echo "
        \t\t\t\t\t\t\t";
        // line 190
        echo $context["form"]->getshow_tooltip("columns");
        echo "
        \t\t\t\t\t\t\t<br />
        \t\t\t\t\t\t\t<label><a href=\"http://supsystic.com/fixed-columns-gallery-example/\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">More Info</a> </label>
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" name=\"general[columns][number]\" value=\"";
        // line 196
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number"), 3)) : (3)), "html", null, true);
        echo "\">
                            </td>
                        </tr>

                        ";
        // line 200
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive columns")), ((((((((((((($context["form"]->getinput("number", "general[responsiveColumns][desktop][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width"), 1200)) : (1200)), array("style" => array("width" => "60px;"))) . $context["form"]->getspan("", "px")) . $context["form"]->getinput("number", "general[responsiveColumns][desktop][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns"), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number"), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number"), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") . $context["form"]->getinput("number", "general[responsiveColumns][tablet][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width"), 768)) : (768)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) . $context["form"]->getinput("number", "general[responsiveColumns][tablet][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns"), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number"), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number"), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") . $context["form"]->getinput("number", "general[responsiveColumns][mobile][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width"), 320)) : (320)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) . $context["form"]->getinput("number", "general[responsiveColumns][mobile][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns"), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number"), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number"), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")), "responsive-columns");
        // line 209
        echo "

                        ";
        // line 213
        echo "    \t\t\t\t\t
    \t\t\t\t\t";
        // line 214
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")), $context["form"]->getinput("text", "title", $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title"), array("style" => array("width" => "232px;"))), "title");
        // line 216
        echo "

                        ";
        // line 218
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images distance")), ($context["form"]->getinput("number", "area[distance]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "distance"), array("style" => array("width" => "140px;"))) . $context["form"]->getspan("", "pixels")), "distance");
        // line 220
        echo "

                        ";
        // line 222
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery width")), ($context["form"]->getinput("number", "area[width]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "width"), array("style" => array("width" => "140px"))) . $context["form"]->getselect("area[width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "width_unit"), array("style" => "margin-top: -2px; height: 27px;"))), "area-width");
        // line 224
        echo "

                        ";
        // line 226
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery padding")), ($context["form"]->getinput("number", "area[padding]", (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "padding", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "padding"), 0)) : (0)), array("style" => array("width" => "140px"))) . $context["form"]->getspan("", "pixels")), "area-padding");
        // line 227
        echo "

                        ";
        // line 234
        echo "
                        ";
        // line 235
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image width")), ($context["form"]->getinput("number", "area[photo_width]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width"), array("style" => array("width" => "140px"))) . $context["form"]->getselect("area[photo_width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit"), array("style" => "margin-top: -2px; height: 27px"))), "photo-width");
        // line 237
        echo "

                        ";
        // line 239
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image height")), ($context["form"]->getinput("number", "area[photo_height]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height"), array("style" => array("width" => "140px"))) . $context["form"]->getselect("area[photo_height_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit"), array("style" => "margin-top: -2px; height: 27px"))), "photo-height");
        // line 241
        echo "

                        ";
        // line 243
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image radius")), ($context["form"]->getinput("number", "thumbnail[border][radius]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius"), array("style" => array("width" => "140px"))) . $context["form"]->getselect("thumbnail[border][radius_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius_unit"), array("style" => "margin-top: -2px; height: 27px"))), "border-radius");
        // line 245
        echo "
                   
                        ";
        // line 248
        echo "                        ";
        $context["qualityList"] = array("100" => "100%", "90" => "90%", "80" => "80%", "70" => "70%", "60" => "60%", "50" => "50%", "40" => "40%", "30" => "30%", "20" => "20%", "10" => "10%");
        // line 260
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image crop quality")), $context["form"]->getselect("thumbnail[cropQuality]", (isset($context["qualityList"]) ? $context["qualityList"] : null), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality"), "100")) : ("100"))), "cropQuality");
        // line 267
        echo "
  
                        ";
        // line 269
        $this->displayBlock('disableRightClick', $context, $blocks);
        // line 271
        echo "                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 269
    public function block_disableRightClick($context, array $blocks = array())
    {
        // line 270
        echo "                        ";
    }

    // line 276
    public function block_horizontalScroll($context, array $blocks = array())
    {
        // line 277
        echo "                <table class=\"form-table\">
                    <thead>
                        ";
        // line 279
        $context["horizontalScrollEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "enabled"), "false")) : ("false")) == "true");
        // line 280
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Horizontal Scroll")), ((($context["form"]->getradio("horizontalScroll[enabled]", "true", twig_array_merge(array("id" => "horizontal-scroll-enable"), (((isset($context["horizontalScrollEnabled"]) ? $context["horizontalScrollEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) . $context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "horizontal-scroll-enable")) . $context["form"]->getradio("horizontalScroll[enabled]", "false", twig_array_merge(array("id" => "horizontal-scroll-disable"), (((isset($context["horizontalScrollEnabled"]) ? $context["horizontalScrollEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) . $context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "horizontal-scroll-disable")), "horizontal-scroll", true);
        // line 284
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 287
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Color")), $context["form"]->gettext("horizontalScroll[color]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll"), "color"), array("class" => "gg-color-picker")), "horizontal-scroll-color");
        // line 288
        echo "

                        ";
        // line 290
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Transparency")), $context["form"]->getselect("horizontalScroll[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "transparency"), "60")) : ("60")), array("style" => "width: auto")), "horizontal-scroll-transparency");
        // line 306
        echo "

                        ";
        // line 308
        $this->displayBlock('horizontalScrollAfter', $context, $blocks);
        // line 310
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 308
    public function block_horizontalScrollAfter($context, array $blocks = array())
    {
        // line 309
        echo "                        ";
    }

    // line 339
    public function block_border($context, array $blocks = array())
    {
        // line 340
        echo "                <table class=\"form-table\" name=\"border\">
                    <thead>
                        ";
        // line 342
        $context["borderTypes"] = array("solid" => "Solid", "dotted" => "Dotted", "dashed" => "Dashed", "double" => "Double", "groove" => "Groove", "ridge" => "Ridge", "inset" => "Inset", "outset" => "Outset", "none" => "None");
        // line 353
        echo "
                        ";
        // line 369
        echo "
                        ";
        // line 370
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border Type")), ($context["form"]->getselect("thumbnail[border][type]", (isset($context["borderTypes"]) ? $context["borderTypes"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "type"), array("style" => "width: auto;")) . $context["form"]->getinput("text", "border-type", "Example", array("style" => "margin-top: -2px; height: 27px; width: 70px; border: 1px solid black; display:none;"))), "border-type", "gallery-borders");
        // line 372
        echo "

                        ";
        // line 374
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border color")), $context["form"]->getinput("text", "thumbnail[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "color"), array("class" => "gg-color-picker")), "border-color");
        // line 375
        echo "

                        ";
        // line 377
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border width")), ($context["form"]->getinput("number", "thumbnail[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "width"), array("style" => array("width" => "140px;"))) . $context["form"]->getspan("", "pixels")), "border-width");
        // line 379
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 385
    public function block_shadow($context, array $blocks = array())
    {
        // line 386
        echo "                <table class=\"form-table\" name=\"shadow\">
                    <thead>
                        <tr id=\"useShadowRow\">
                            <th scope=\"row\">
                                <h3 style=\"margin: 0 !important;\">
                                    ";
        // line 391
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "
                                </h3>
                            </th>
                            <td>
                                <input type=\"radio\" id=\"showShadow\" name=\"use_shadow\" value=\"1\" ";
        // line 395
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 396
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
        echo "
                                <input type=\"radio\" id=\"hideShadow\" name=\"use_shadow\" value=\"0\" ";
        // line 397
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") != "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 398
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope=\"row\">
                                ";
        // line 405
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow preset")), "html", null, true);
        echo "
                            </th>
                            <td>
                                <button id=\"chooseShadowPreset\" class=\"button bordered\" type=\"button\">
                                    ";
        // line 409
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose preset")), "html", null, true);
        echo "
                                </button>
                            </td>
                        </tr>

                        <tr id=\"useMouseShadowRow\">
                            <th scope=\"row\">
                                ";
        // line 416
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When mouse is over")), "html", null, true);
        echo "
                            </th>
                            <td>
                                <select id=\"useMouseOverShadow\" style=\"width: auto;\" name=\"mouse_shadow\">
                                    <option value=\"0\" ";
        // line 420
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow") == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 421
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Off")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"1\" ";
        // line 423
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow") == "1")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 424
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show mouse on")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"2\" ";
        // line 426
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow") == "2")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 427
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide mouse on")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>

                        ";
        // line 433
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay image with shadow")), $context["form"]->getselect("thumbnail[shadow][overlay]", array(0 => "Off", 1 => "On"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "overlay"), array("style" => "width: auto;")), "overlay-type");
        // line 434
        echo "

                        ";
        // line 436
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow color")), $context["form"]->gettext("thumbnail[shadow][color]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "color"), array("style" => array("width" => "300px"), "class" => "gg-color-picker")), "shadow-color");
        // line 437
        echo "

                        ";
        // line 439
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow blur")), $context["form"]->getinput("number", "thumbnail[shadow][blur]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "blur"), array("style" => array("width" => "auto"))), "shadow-blur");
        // line 440
        echo "

                        ";
        // line 442
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow X")), $context["form"]->getinput("number", "thumbnail[shadow][x]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "x"), array("style" => array("width" => "auto"))), "shadow-x");
        // line 443
        echo "

                        ";
        // line 445
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow Y")), $context["form"]->getinput("number", "thumbnail[shadow][y]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "y"), array("style" => array("width" => "auto"))), "shadow-y");
        // line 446
        echo "
                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 452
    public function block_popup($context, array $blocks = array())
    {
        // line 453
        echo "                <table class=\"form-table\">
                    <thead>
                        ";
        // line 456
        echo "                        ";
        $context["popUpEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled"), "true")) : ("true")) == "true");
        // line 457
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop-up Image")), ((($context["form"]->getradio("box[enabled]", "true", twig_array_merge(array("id" => "box-enable"), (((isset($context["popUpEnabled"]) ? $context["popUpEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) . $context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "box-enable")) . $context["form"]->getradio("box[enabled]", "false", twig_array_merge(array("id" => "box-disable"), (((isset($context["popUpEnabled"]) ? $context["popUpEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) . $context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "box-disable")), "box", true);
        // line 476
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 480
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup box theme")), (($context["form"]->getbutton("chooseTheme", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose theme")), array("class" => "button bordered", "id" => "chooseTheme")) . $context["form"]->gethidden("box[type]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type"))) . $context["form"]->gethidden("box[theme]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "theme"), array("id" => "bigImageTheme"))));
        // line 495
        echo "

                        ";
        // line 498
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable on mobile")), $context["form"]->getcheckbox("box[mobile]", "on", ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "mobile") == "on")) ? (array("checked" => "checked")) : (array()))), "mobile");
        // line 505
        echo "

                        ";
        // line 508
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide Popup Captions")), $context["form"]->getcheckbox("box[captions]", "on", ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "captions") == "on")) ? (array("checked" => "checked")) : (array()))), "captions");
        // line 515
        echo "

                        ";
        // line 518
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), $context["form"]->gettext("box[background]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "background"), array("class" => "gg-color-picker")), "box-background");
        // line 525
        echo "
                        
                        ";
        // line 528
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")), $context["form"]->getselect("box[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency"), 30)) : (30)), array("style" => "width: auto")), "box-transparency");
        // line 547
        echo "

                        ";
        // line 550
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow")), $context["form"]->getselect("box[slideshow]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow"), "false")) : ("false")), array("style" => "width: auto")), "slideshow");
        // line 558
        echo "

                        ";
        // line 561
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow speed")), $context["form"]->getinput("number", "box[slideshowSpeed]", (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed"), 2500)) : (2500)), array("style" => array("width" => "auto")), "box-slideshowSpeed"));
        // line 569
        echo "

                        ";
        // line 572
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow pause on hover")), $context["form"]->getselect("box[popupHoverStop]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop"), "false")) : ("false")), array("style" => "width: auto"), "box-popupHoverStop"), "popupHoverStop");
        // line 581
        echo "

                        ";
        // line 584
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow autostart")), $context["form"]->getselect("box[slideshowAuto]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto"), "false")) : ("false")), array("style" => "width: auto"), "box-slideshowAuto"));
        // line 592
        echo "

                        ";
        // line 595
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image size")), ((($context["form"]->getinput("number", "box[popupwidth]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "popupwidth"), array("style" => array("width" => "60px"))) . $context["form"]->getspan("", "x")) . $context["form"]->getinput("number", "box[popupheight]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "popupheight"), array("style" => array("width" => "60px")))) . $context["form"]->getspan("", "pixels")), "box-popupsize");
        // line 611
        echo "

                        ";
        // line 614
        echo "                        ";
        $this->displayBlock('popupAfter', $context, $blocks);
        // line 661
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 614
    public function block_popupAfter($context, array $blocks = array())
    {
        // line 615
        echo "                            ";
        // line 616
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video size")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.size", ((($context["form"]->gettext("popup[video][width]", (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width"), "853")) : ("853")), array("style" => array("width" => "40px"), "disabled" => "")) . $context["form"]->getspan("", "x")) . $context["form"]->gettext("popup[video][height]", (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height"), "480")) : ("480")), array("style" => array("width" => "40px"), "disabled" => ""))) . $context["form"]->getspan("", "pixels")));
        // line 631
        echo "

                            ";
        // line 634
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Autoplay video")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.autoplay", $context["form"]->getselect("popup[video][autoplay]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay"), "false")) : ("false")), array("disabled" => "")));
        // line 643
        echo "
                            
                            ";
        // line 646
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When video ends")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.onEnd", $context["form"]->getselect("popup[video][onEnd]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Do nothing")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open next slide")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close popup"))), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd"), "0")) : ("0")), array("disabled" => "")));
        // line 659
        echo "
                        ";
    }

    // line 666
    public function block_preload($context, array $blocks = array())
    {
        // line 667
        echo "                <table class=\"form-table\" name=\"preload\">
                    <thead>
                        ";
        // line 669
        $context["preloadEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array(), "any", false, true), "enabled"), "true")) : ("true")) == "true");
        // line 670
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Loader")), ((($context["form"]->getradio("preload[enabled]", "true", twig_array_merge(array("id" => "preload-enable"), (((isset($context["preloadEnabled"]) ? $context["preloadEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) . $context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "preload-enable")) . $context["form"]->getradio("preload[enabled]", "false", twig_array_merge(array("id" => "preload-disable"), (((isset($context["preloadEnabled"]) ? $context["preloadEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) . $context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "preload-disable")), "preload", true);
        // line 674
        echo "
                    </thead>
                ";
        // line 676
        if ((!$this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method"))) {
            // line 677
            echo "                    <tbody>
                        <tr id=\"preload-background\">
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 681
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 683
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 687
            echo $context["form"]->gettext("preload[background]", "#0073AA", array("class" => "gg-color-picker", "id" => "preloadColor-free"));
            echo "
                            </td>
                        </tr>
                        ";
            // line 690
            $context["piconImg"] = ('' === $tmp = "                            <div class=\"gallery-loading\">
                                <div class=\"blocks\">
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                </div>
                            </div>
                        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 700
            echo "
                        <tr>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 704
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Icon")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 706
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 710
            echo $context["form"]->getbutton("buttons-preload-icon", "Choose Icon", array("class" => "button button-primary", "id" => "choosePreicon-free"));
            echo "
                                ";
            // line 711
            echo twig_escape_filter($this->env, (isset($context["piconImg"]) ? $context["piconImg"] : null), "html", null, true);
            echo "
                            </td>
                        </tr>
                    </tbody>
                ";
        }
        // line 716
        echo "                </table>
            ";
    }

    // line 720
    public function block_post($context, array $blocks = array())
    {
        // line 721
        echo "            <div data-tab=\"post\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 723
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Posts and Pages")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 726
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">Get
                        PRO for 29\$</a>
                </h1>

                <div>
                    <a href=\"";
        // line 731
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/posts_pro.jpg\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 979
    public function block_icons($context, array $blocks = array())
    {
        // line 980
        echo "                <table class=\"form-table\" name=\"icons\">
                    <thead>
                        ";
        // line 982
        $context["iconsEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "enabled"), "false")) : ("false")) == "true");
        // line 983
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show icons")), ((($context["form"]->getradio("icons[enabled]", "true", twig_array_merge(array("id" => "icons-enable"), (((isset($context["iconsEnabled"]) ? $context["iconsEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) . $context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "icons-enable")) . $context["form"]->getradio("icons[enabled]", "false", twig_array_merge(array("id" => "icons-disable"), (((isset($context["iconsEnabled"]) ? $context["iconsEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) . $context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "icons-disable")), "photo-icon", true);
        // line 987
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 990
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select effect")), ($context["form"]->getbutton(null, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation")), array("class" => "button bordered", "id" => "selectIconsEffect")) . $context["form"]->gethidden("icons[effect]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "effect"), array("id" => "iconsEffectName"))));
        // line 993
        echo "
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsColor\">
                                    ";
        // line 997
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsColor\" class=\"gg-color-picker\" value=\"";
        // line 1001
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "color"), "html", null, true);
        echo "\" name=\"icons[color]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsHoverColor\">
                                    ";
        // line 1007
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons hover color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1011
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "hover_color"), "html", null, true);
        echo "\" name=\"icons[hover_color]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsBackgroundColor\">
                                    ";
        // line 1017
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsBackgroundColor\" class=\"gg-color-picker\" value=\"";
        // line 1021
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background"), "html", null, true);
        echo "\" name=\"icons[background]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsBackgroundHoverColor\">
                                    ";
        // line 1027
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background hover color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsBackgroundHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1031
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background_hover"), "html", null, true);
        echo "\" name=\"icons[background_hover]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsSize\">
                                    ";
        // line 1037
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons size")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" pattern=\"[0-9]\" id=\"iconsSize\"  name=\"icons[size]\" value=\"";
        // line 1041
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size"), "html", null, true);
        echo "\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsMargin\">
                                    ";
        // line 1047
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between icons")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" pattern=\"[0-9]\" id=\"iconsMargin\"  name=\"icons[margin]\" value=\"";
        // line 1051
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "margin"), "html", null, true);
        echo "\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsOverlay\">
                                    ";
        // line 1057
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show overlay")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <select id=\"iconsOverlay\" name=\"icons[overlay_enabled]\" style=\"width: auto;\">
                                    <option value=\"true\" ";
        // line 1062
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_enabled"), "true");
        echo ">
                                        ";
        // line 1063
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"false\" ";
        // line 1065
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_enabled"), "false");
        echo ">
                                        ";
        // line 1066
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr class=\"icons-overlay-toggle\">
                            <th scope=\"row\">
                                <label for=\"iconsOverlayColor\">
                                    ";
        // line 1074
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsOverlayColor\" class=\"gg-color-picker\" value=\"";
        // line 1078
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_color"), "html", null, true);
        echo "\" name=\"icons[overlay_color]\"/>
                            </td>
                        </tr>
                        <tr class=\"icons-overlay-toggle\">
                            <th scope=\"row\">
                                <label for=\"iconsOverlayTransparency\">
                                    ";
        // line 1084
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay transparency")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <select id=\"iconsOverlayTransparency\" name=\"icons[overlay_transparency]\" style=\"width: auto;\">
                                    <option value=\"0\" ";
        // line 1089
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_transparency"), 0);
        echo ">0%</option>
                                    <option value=\"1\" ";
        // line 1090
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_transparency"), 1);
        echo ">10%</option>
                                    <option value=\"2\" ";
        // line 1091
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_transparency"), 2);
        echo ">20%</option>
                                    <option value=\"3\" ";
        // line 1092
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_transparency"), 3);
        echo ">30%</option>
                                    <option value=\"4\" ";
        // line 1093
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_transparency"), 4);
        echo ">40%</option>
                                    <option value=\"5\" ";
        // line 1094
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_transparency"), 5);
        if ((!$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true))) {
            echo "selected=\"selected\"";
        }
        echo ">50%</option>
                                    <option value=\"6\" ";
        // line 1095
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_transparency"), 6);
        echo ">60%</option>
                                    <option value=\"7\" ";
        // line 1096
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_transparency"), 7);
        echo ">70%</option>
                                    <option value=\"8\" ";
        // line 1097
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_transparency"), 8);
        echo ">80%</option>
                                    <option value=\"9\" ";
        // line 1098
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_transparency"), 9);
        echo ">90%</option>
                                    <option value=\"10\" ";
        // line 1099
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_transparency"), 10);
        echo ">100%</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            ";
    }

    // line 1108
    public function block_categories($context, array $blocks = array())
    {
        // line 1109
        echo "            <div data-tab=\"cats\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1111
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categorize images in the gallery")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1118
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/cats_pro.jpg\" />
                    </a>
                </div>
                ";
        // line 1122
        $this->displayBlock('pagination', $context, $blocks);
        // line 1137
        echo "            </div>
        ";
    }

    // line 1122
    public function block_pagination($context, array $blocks = array())
    {
        // line 1123
        echo "                    <h1 style=\"line-height: 1;\">
                        ";
        // line 1124
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Let user switch gallery pages")), "html", null, true);
        echo "
                        </br>
                        <a class=\"button get-pro\"
                           href=\"";
        // line 1127
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                    </h1>
                    <div name=\"pagination\">
                        <div>
                            <a href=\"";
        // line 1131
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 1132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/pagination_pro.jpg\" />
                            </a>
                        </div>
                    </div>
                ";
    }

    // line 1140
    public function block_form($context, array $blocks = array())
    {
        // line 1141
        echo "        ";
    }

    // line 1252
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 1253
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["iconsWithCaptionsEffects"]) ? $context["iconsWithCaptionsEffects"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1254
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1255
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 1256
            echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 1262
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 1264
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
            echo "
                                        vertical-align:";
            // line 1265
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 1271
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1275
        echo "                    ";
    }

    // line 1420
    public function block_modals($context, array $blocks = array())
    {
        // line 1421
        echo "        <div id=\"iconsPreview\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select icons effects")), "html", null, true);
        echo "\">
            ";
        // line 1423
        $context["iconsEffects"] = array("hi-icon-effect-1a" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-1b" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-2a" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-2b" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-3a" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-3b" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-5a" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5b" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5c" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5d" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-7a" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-7b" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-9a" => array("padding" => "0", "bg" => "96a94b"), "hi-icon-effect-9b" => array("padding" => "0", "bg" => "96a94b"));
        // line 1440
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["iconsEffects"]) ? $context["iconsEffects"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["p"]) {
            // line 1441
            echo "                <div class=\"hi-icon-wrap ";
            echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["name"]) ? $context["name"] : null), 0, ((isset($context["length"]) ? $context["length"] : null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo " holderjs\" style=\"display: inline-block; padding: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "padding"), "html", null, true);
            echo "; width: 150px; height: 150px; background: no-repeat; overflow: hidden;\" data-background-src=\"holder.js/150x150?theme=industrial&text=\\t\">
                    <a href=\"#\" class=\"hi-icon icon-link\" data-effect=\"";
            // line 1442
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Click on the icon to select effect")) . " ") . (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
            echo "\">Select</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1445
        echo "        </div>
        <style>
            .hi-icon {
                color: ";
        // line 1448
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "color"), "html", null, true);
        echo " !important;
                background: ";
        // line 1449
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background"), "html", null, true);
        echo " !important;
            }
            .hi-icon:hover {
                color: ";
        // line 1452
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "hover_color"), "html", null, true);
        echo " !important;
                background: ";
        // line 1453
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background_hover"), "html", null, true);
        echo " !important;
            }
            .hi-icon {
                width: ";
        // line 1456
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
        echo "px !important;
                height: ";
        // line 1457
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
        echo "px !important;
            }
            .hi-icon:before {
                font-size: ";
        // line 1460
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size"), 16)) : (16)), "html", null, true);
        echo "px !important;
                line-height: ";
        // line 1461
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
        echo "px !important;
            }
        </style>
    ";
    }

    // line 3
    public function getlabel($_label = null, $_for = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "for" => $_for,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["for"]) ? $context["for"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2016 => 4,  2004 => 3,  1996 => 1461,  1992 => 1460,  1986 => 1457,  1982 => 1456,  1976 => 1453,  1972 => 1452,  1966 => 1449,  1962 => 1448,  1957 => 1445,  1946 => 1442,  1937 => 1441,  1932 => 1440,  1930 => 1423,  1925 => 1421,  1922 => 1420,  1918 => 1275,  1908 => 1271,  1899 => 1265,  1895 => 1264,  1890 => 1262,  1881 => 1256,  1877 => 1255,  1872 => 1254,  1867 => 1253,  1864 => 1252,  1860 => 1141,  1857 => 1140,  1848 => 1132,  1844 => 1131,  1837 => 1127,  1831 => 1124,  1828 => 1123,  1825 => 1122,  1820 => 1137,  1818 => 1122,  1812 => 1119,  1808 => 1118,  1801 => 1114,  1795 => 1111,  1791 => 1109,  1788 => 1108,  1777 => 1099,  1773 => 1098,  1769 => 1097,  1765 => 1096,  1761 => 1095,  1754 => 1094,  1750 => 1093,  1746 => 1092,  1742 => 1091,  1738 => 1090,  1734 => 1089,  1726 => 1084,  1717 => 1078,  1710 => 1074,  1699 => 1066,  1695 => 1065,  1690 => 1063,  1686 => 1062,  1678 => 1057,  1669 => 1051,  1662 => 1047,  1653 => 1041,  1646 => 1037,  1637 => 1031,  1630 => 1027,  1621 => 1021,  1614 => 1017,  1605 => 1011,  1598 => 1007,  1589 => 1001,  1582 => 997,  1576 => 993,  1574 => 990,  1569 => 987,  1566 => 983,  1564 => 982,  1560 => 980,  1557 => 979,  1548 => 732,  1544 => 731,  1536 => 726,  1530 => 723,  1526 => 721,  1523 => 720,  1518 => 716,  1510 => 711,  1506 => 710,  1499 => 706,  1494 => 704,  1488 => 700,  1478 => 690,  1472 => 687,  1465 => 683,  1460 => 681,  1454 => 677,  1452 => 676,  1448 => 674,  1445 => 670,  1443 => 669,  1439 => 667,  1436 => 666,  1431 => 659,  1428 => 646,  1424 => 643,  1421 => 634,  1417 => 631,  1414 => 616,  1412 => 615,  1409 => 614,  1402 => 661,  1399 => 614,  1395 => 611,  1392 => 595,  1388 => 592,  1385 => 584,  1381 => 581,  1378 => 572,  1374 => 569,  1371 => 561,  1367 => 558,  1364 => 550,  1360 => 547,  1357 => 528,  1353 => 525,  1350 => 518,  1346 => 515,  1343 => 508,  1339 => 505,  1336 => 498,  1332 => 495,  1329 => 480,  1324 => 476,  1321 => 457,  1318 => 456,  1314 => 453,  1311 => 452,  1303 => 446,  1301 => 445,  1297 => 443,  1295 => 442,  1291 => 440,  1289 => 439,  1285 => 437,  1283 => 436,  1279 => 434,  1277 => 433,  1268 => 427,  1262 => 426,  1257 => 424,  1251 => 423,  1246 => 421,  1240 => 420,  1233 => 416,  1223 => 409,  1216 => 405,  1206 => 398,  1200 => 397,  1196 => 396,  1190 => 395,  1183 => 391,  1176 => 386,  1173 => 385,  1165 => 379,  1163 => 377,  1159 => 375,  1157 => 374,  1153 => 372,  1151 => 370,  1148 => 369,  1145 => 353,  1143 => 342,  1139 => 340,  1136 => 339,  1132 => 309,  1129 => 308,  1122 => 310,  1120 => 308,  1116 => 306,  1114 => 290,  1110 => 288,  1108 => 287,  1103 => 284,  1100 => 280,  1098 => 279,  1094 => 277,  1091 => 276,  1087 => 270,  1084 => 269,  1077 => 271,  1075 => 269,  1071 => 267,  1068 => 260,  1065 => 248,  1061 => 245,  1059 => 243,  1055 => 241,  1053 => 239,  1049 => 237,  1047 => 235,  1044 => 234,  1040 => 227,  1038 => 226,  1034 => 224,  1032 => 222,  1028 => 220,  1026 => 218,  1022 => 216,  1020 => 214,  1017 => 213,  1013 => 209,  1011 => 200,  1004 => 196,  995 => 190,  991 => 189,  984 => 184,  982 => 183,  978 => 181,  975 => 180,  971 => 1420,  961 => 1413,  956 => 1411,  950 => 1408,  946 => 1407,  942 => 1406,  936 => 1403,  931 => 1402,  929 => 1401,  922 => 1397,  915 => 1393,  890 => 1370,  880 => 1366,  874 => 1363,  864 => 1362,  854 => 1361,  851 => 1360,  847 => 1359,  843 => 1357,  841 => 1285,  835 => 1282,  830 => 1280,  824 => 1276,  822 => 1252,  817 => 1250,  814 => 1249,  808 => 1248,  801 => 1244,  795 => 1241,  783 => 1233,  776 => 1229,  765 => 1224,  759 => 1221,  755 => 1220,  750 => 1219,  747 => 1218,  743 => 1217,  738 => 1215,  732 => 1211,  722 => 1207,  717 => 1205,  711 => 1204,  705 => 1203,  702 => 1202,  698 => 1201,  695 => 1200,  692 => 1199,  689 => 1198,  687 => 1197,  684 => 1196,  682 => 1187,  676 => 1184,  671 => 1182,  663 => 1177,  656 => 1173,  646 => 1166,  641 => 1164,  635 => 1161,  630 => 1159,  625 => 1157,  618 => 1153,  614 => 1152,  607 => 1148,  601 => 1145,  596 => 1143,  593 => 1142,  591 => 1140,  588 => 1139,  586 => 1108,  582 => 1106,  580 => 979,  573 => 974,  570 => 967,  566 => 964,  563 => 956,  558 => 952,  555 => 944,  551 => 941,  548 => 933,  544 => 930,  541 => 922,  537 => 919,  534 => 905,  530 => 902,  527 => 894,  523 => 891,  520 => 884,  516 => 881,  513 => 874,  509 => 871,  506 => 863,  502 => 860,  499 => 852,  495 => 849,  492 => 841,  488 => 838,  485 => 830,  481 => 827,  478 => 819,  474 => 816,  471 => 804,  467 => 801,  464 => 781,  461 => 779,  458 => 778,  455 => 777,  452 => 770,  449 => 742,  443 => 737,  441 => 720,  437 => 718,  435 => 666,  432 => 665,  430 => 452,  427 => 451,  425 => 385,  422 => 384,  420 => 339,  412 => 333,  410 => 332,  398 => 323,  394 => 322,  386 => 319,  381 => 317,  376 => 314,  374 => 276,  371 => 275,  369 => 180,  363 => 177,  359 => 176,  355 => 175,  351 => 174,  348 => 173,  345 => 172,  342 => 171,  339 => 170,  331 => 165,  319 => 158,  311 => 157,  305 => 153,  298 => 149,  294 => 147,  281 => 137,  272 => 136,  269 => 135,  266 => 134,  263 => 133,  260 => 132,  258 => 131,  255 => 130,  252 => 129,  249 => 128,  246 => 127,  243 => 126,  241 => 125,  238 => 124,  235 => 123,  232 => 122,  230 => 121,  227 => 120,  224 => 119,  221 => 118,  219 => 117,  216 => 116,  214 => 115,  207 => 110,  201 => 108,  199 => 107,  196 => 106,  194 => 105,  186 => 100,  176 => 93,  171 => 91,  162 => 85,  157 => 83,  148 => 77,  143 => 75,  139 => 74,  136 => 73,  130 => 62,  127 => 61,  124 => 60,  121 => 59,  116 => 55,  111 => 56,  109 => 55,  103 => 52,  95 => 47,  87 => 42,  79 => 37,  68 => 31,  61 => 29,  53 => 27,  50 => 8,  47 => 7,);
    }
}
