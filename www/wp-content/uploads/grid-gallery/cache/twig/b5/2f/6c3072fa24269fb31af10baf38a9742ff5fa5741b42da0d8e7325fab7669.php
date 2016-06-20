<?php

/* @galleries/shortcode/gallery.twig */
class __TwigTemplate_b52f6c3072fa24269fb31af10baf38a9742ff5fa5741b42da0d8e7325fab7669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'gallery_before' => array($this, 'block_gallery_before'),
            'gallery_attributes' => array($this, 'block_gallery_attributes'),
            'photos_before' => array($this, 'block_photos_before'),
            'photos_attributes' => array($this, 'block_photos_attributes'),
            'photos' => array($this, 'block_photos'),
            'photos_after' => array($this, 'block_photos_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["style"] = $this->env->loadTemplate("@galleries/shortcode/style.twig");
        // line 2
        echo "
";
        // line 3
        if ((array_key_exists("gallery", $context) && (!twig_test_empty((isset($context["gallery"]) ? $context["gallery"] : null))))) {
            // line 4
            echo "\t";
            $this->displayBlock('gallery_before', $context, $blocks);
            // line 14
            echo "
\t<section
\t\t";
            // line 16
            $this->displayBlock('gallery_attributes', $context, $blocks);
            // line 117
            echo ">

\t\t";
            // line 119
            if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "enabled") == "true") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "enabled") == null))) {
                // line 120
                echo "\t\t\t";
                if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "icon_name") == "default") || ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") != true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "enabled") == null))) {
                    // line 121
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"blocks\">
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 130
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"la-";
                    // line 131
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "icon_name"), "html", null, true);
                    echo "\" style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "background"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 132
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "icon_items")));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 133
                        echo "\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 138
                echo "\t\t";
            }
            // line 139
            echo "
\t\t";
            // line 140
            $this->displayBlock('photos_before', $context, $blocks);
            // line 142
            echo "
\t\t<section
\t\t\t";
            // line 144
            $this->displayBlock('photos_attributes', $context, $blocks);
            // line 147
            echo ">

\t\t\t";
            // line 149
            $this->displayBlock('photos', $context, $blocks);
            // line 154
            echo "
\t\t\t<div class=\"grid-gallery-clearfix\"></div>
\t\t</section>
\t\t
\t\t<div class=\"grid-gallery-clearfix\"></div>

\t\t";
            // line 160
            $this->displayBlock('photos_after', $context, $blocks);
            // line 162
            echo "\t</section>

\t<style>
\t\t#cboxLoadedContent iframe { margin: 0; padding: 0;}
\t</style>
\t
\t<!-- Gallery by Supsystic plugin ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getConfig", array(), "method"), "get", array(0 => "plugin_version"), "method"), "html", null, true);
            echo "  ";
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getConfig", array(), "method"), "get", array(0 => "pro_plugin_version"), "method"), "html", null, true);
            }
            echo " -->
";
        }
    }

    // line 4
    public function block_gallery_before($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 6
            echo "\t\t\t<style>
\t\t\t\t #grid-gallery-";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
            echo " .";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "effect"), "html", null, true);
            echo " .hi-icon { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "color"), "html", null, true);
            echo " !important; background: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background"), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
            echo " .";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "effect"), "html", null, true);
            echo " .hi-icon:hover { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "hover_color"), "html", null, true);
            echo " !important; background: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "background_hover"), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
            echo " .hi-icon { width: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
            echo "px !important; height: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
            echo "px !important; }
\t\t\t\t #grid-gallery-";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
            echo " .hi-icon:before { font-size: ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size"), 16)) : (16)), "html", null, true);
            echo "px !important; line-height: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "size") * 2), "html", null, true);
            echo "px !important; }
\t\t\t</style>
\t\t";
        }
        // line 13
        echo "\t";
    }

    // line 16
    public function block_gallery_attributes($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\tid=\"grid-gallery-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
        echo "\"
\t\t\tdata-grid-type=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid"), "html", null, true);
        echo "\"
\t\t\tdata-offset=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "distance"), "html", null, true);
        echo "\"
\t\t\tdata-area-position=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position"), "html", null, true);
        echo "\"
\t\t\t";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "2")) {
            // line 22
            echo "\t\t\tdata-width=\"auto\"
\t\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\t\tdata-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width"), "html", null, true);
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit") == 1)) {
                echo "%";
            }
            echo "\"
\t\t\t";
        }
        // line 26
        echo "\t\t\tdata-preloader = \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload"), "enabled"), "html", null, true);
        echo "\"
\t\t\tdata-width=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width"), "html", null, true);
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit") == 1)) {
            echo "%";
        }
        echo "\"
\t\t\tdata-height=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height"), "html", null, true);
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit") == 1)) {
            echo "%";
        }
        echo "\"
\t\t\tdata-padding=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "padding"), "html", null, true);
        echo "\"
\t\t\tdata-quicksand = \"";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "quicksand"), "enabled") == "1")) {
            echo "enabled";
        } else {
            echo "disabled";
        }
        echo "\"
\t\t\tdata-quicksand-duration = \"";
        // line 31
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "quicksand"), "duration")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "quicksand"), "duration"), "html", null, true);
        } else {
            echo "none";
        }
        echo "\"
\t\t\t\t";
        // line 32
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "enabled") == "false"))) {
            // line 33
            echo "\t\t\t\t\tdata-popup-type = \"disable\"
\t\t\t\t";
        } else {
            // line 35
            echo "\t\t\t\t\tdata-popup-theme = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "theme"), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "0") && ((isset($context["mobile"]) ? $context["mobile"] : null) != "true"))) {
            // line 38
            echo "\t\t\t\t\tdata-popup-type =\"colorbox\"
\t\t\t\t\tdata-popup-fadeOut = \"";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "fadeOut", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "fadeOut"), 300)) : (300)), "html", null, true);
            echo "\"
\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t";
        if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "1") && ((isset($context["mobile"]) ? $context["mobile"] : null) != "true")) && ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled"), "true")) : ("true")) == "true"))) {
            // line 42
            echo "\t\t\t\t\tdata-popup-type = \"pretty-photo\"
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t";
        if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "2") && ((isset($context["mobile"]) ? $context["mobile"] : null) != "true")) && ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled"), "true")) : ("true")) == "true"))) {
            // line 45
            echo "\t\t\t\t\tdata-popup-type = \"photobox\"
\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "3")) {
            // line 48
            echo "\t\t\t\t\tdata-columns-number = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general"), "columns"), "number"), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "captions") == "on")) {
            // line 51
            echo "\t\t\t\t\tdata-popup-captions = 'hide'
\t\t\t\t";
        }
        // line 53
        echo "
\t\t\t\t";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "popupwidth") == "")) {
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 56
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "popupwidth"), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 59
        echo "
\t\t\t\t";
        // line 60
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "popupheight") == "")) {
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 62
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "popupheight"), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 65
        echo "\t\t\tdata-popup-slideshow = \"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow"), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-speed = \"";
        // line 66
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed"), 2500)) : (2500)), "html", null, true);
        echo "\"
\t\t\tdata-popup-hoverstop = \"";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop"), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-auto = \"";
        // line 68
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto"), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-background = \"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "background"), "html", null, true);
        echo "\"
\t\t\tdata-popup-transparency = \"";
        // line 70
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency"), 30)) : (30)), "html", null, true);
        echo "\"
\t\t\tdata-fullscreen=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fullscreen"), "enabled"), "html", null, true);
        echo "\"
\t\t\tdata-hide-tooltip=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "tooltip"), "html", null, true);
        echo "\"
\t\t\tdata-caption-font-family=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
        echo "\"
\t\t\tdata-caption-mobile=\"";
        // line 74
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile"), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\t";
        // line 75
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect") == "polaroid")) {
            // line 76
            echo "\t\t\t\tdata-polaroid-animation=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation"), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-scattering=\"";
            // line 77
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering"), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-frame-width=\"";
            // line 78
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth"), 20)) : (20)), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 80
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "3")) {
            // line 81
            echo "\t\t\t\tdata-responsive-colums=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns"), "")) : (""))), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 83
        echo "\t\t\tdata-caption-font-family=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
        echo "\"
\t\t\t";
        // line 84
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll"), "enabled") == "true"))) {
            // line 85
            echo "\t\t\t\tdata-horizontal-scroll=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll")), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 87
        echo "
\t\t\tclass=\"grid-gallery
\t\t\t\t";
        // line 89
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "1")) {
            // line 90
            echo "\t\t\t\t\tgrid-gallery-fluid-height
\t\t\t\t";
        } else {
            // line 92
            echo "\t\t\t\t\tgrid-gallery-fixed
\t\t\t\t";
        }
        // line 94
        echo "
\t\t\t\t";
        // line 95
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbs"), "enable") == "1")) {
            // line 96
            echo "\t\t\t\t\tgrid-gallery-thumbs
\t\t\t\t";
        }
        // line 98
        echo "
\t\t\t\t";
        // line 99
        if ((($this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getConfig", array(), "method"), "get", array(0 => "optimizations"), "method") == 1) && ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false))) {
            // line 100
            echo "\t\t\t\t\t\toptimizations
\t\t\t\t";
        }
        // line 101
        echo "\"
\t\t\tstyle=\"
\t\t\t\twidth:";
        // line 103
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "width") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "width_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t\t\t\theight:";
        // line 104
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "height"), "auto")) : ("auto")), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 105
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "height") != "auto") && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "height") != null))) {
            echo "px ";
        }
        echo ";
\t\t\t\t";
        // line 106
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position") == "1") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position") == "left"))) {
            // line 107
            echo "\t\t\t\t\tfloat: left
\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position") == "2") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position") == "right"))) {
            // line 110
            echo "\t\t\t\t\tfloat:right
\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "position") == "center")) {
            // line 113
            echo "\t\t\t\tmargin-left:auto;
\t\t\t\tmargin-right:auto;
\t\t\t\t";
        }
        // line 116
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fullscreen"), "enabled")) {
            echo "position: fixed; z-index: 9999999; top: 0; left: 0; background-color: white;";
        } else {
            echo "position:relative;";
        }
        echo "\"
\t\t";
    }

    // line 140
    public function block_photos_before($context, array $blocks = array())
    {
        // line 141
        echo "\t\t";
    }

    // line 144
    public function block_photos_attributes($context, array $blocks = array())
    {
        // line 145
        echo "\t\t\t\tid=\"photos-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
        echo "\"
\t\t\t\tclass=\"grid-gallery-photos\"
\t\t\t";
    }

    // line 149
    public function block_photos($context, array $blocks = array())
    {
        // line 150
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos"));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 151
            echo "\t\t\t\t\t";
            $this->env->loadTemplate("@galleries/shortcode/helpers.twig")->display(array("photo" => (isset($context["photo"]) ? $context["photo"] : null), "settings" => (isset($context["settings"]) ? $context["settings"] : null)));
            // line 152
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "\t\t\t";
    }

    // line 160
    public function block_photos_after($context, array $blocks = array())
    {
        // line 161
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 161,  548 => 160,  544 => 153,  538 => 152,  535 => 151,  530 => 150,  527 => 149,  519 => 145,  516 => 144,  512 => 141,  509 => 140,  498 => 116,  493 => 113,  490 => 112,  486 => 110,  483 => 109,  479 => 107,  477 => 106,  471 => 105,  467 => 104,  463 => 103,  459 => 101,  455 => 100,  453 => 99,  450 => 98,  446 => 96,  444 => 95,  441 => 94,  437 => 92,  433 => 90,  431 => 89,  427 => 87,  421 => 85,  419 => 84,  414 => 83,  408 => 81,  405 => 80,  400 => 78,  396 => 77,  391 => 76,  389 => 75,  385 => 74,  381 => 73,  377 => 72,  373 => 71,  369 => 70,  365 => 69,  361 => 68,  357 => 67,  353 => 66,  348 => 65,  343 => 63,  340 => 62,  334 => 60,  331 => 59,  326 => 57,  323 => 56,  317 => 54,  314 => 53,  310 => 51,  307 => 50,  301 => 48,  298 => 47,  294 => 45,  291 => 44,  287 => 42,  284 => 41,  279 => 39,  276 => 38,  273 => 37,  267 => 35,  263 => 33,  261 => 32,  253 => 31,  245 => 30,  241 => 29,  234 => 28,  227 => 27,  222 => 26,  213 => 24,  209 => 22,  207 => 21,  203 => 20,  199 => 19,  195 => 18,  190 => 17,  187 => 16,  183 => 13,  173 => 10,  165 => 9,  155 => 8,  145 => 7,  142 => 6,  139 => 5,  136 => 4,  124 => 168,  116 => 162,  114 => 160,  106 => 154,  104 => 149,  100 => 147,  98 => 144,  94 => 142,  92 => 140,  89 => 139,  86 => 138,  81 => 135,  74 => 133,  70 => 132,  64 => 131,  61 => 130,  50 => 121,  47 => 120,  45 => 119,  41 => 117,  39 => 16,  35 => 14,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }
}
