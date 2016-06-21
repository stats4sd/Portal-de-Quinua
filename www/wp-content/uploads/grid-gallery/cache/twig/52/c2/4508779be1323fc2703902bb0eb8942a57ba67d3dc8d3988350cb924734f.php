<?php

/* @galleries/shortcode/import.twig */
class __TwigTemplate_52c24508779be1323fc2703902bb0eb8942a57ba67d3dc8d3988350cb924734f extends Twig_Template
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
    public function getshow($_areaWidth = null, $_galleryId = null)
    {
        $context = $this->env->mergeGlobals(array(
            "areaWidth" => $_areaWidth,
            "galleryId" => $_galleryId,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"media-wrapr ";
            if (twig_test_empty((isset($context["galleryId"]) ? $context["galleryId"] : null))) {
                echo "no-gallery-id";
            }
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, (isset($context["areaWidth"]) ? $context["areaWidth"] : null), "html", null, true);
            echo "px;margin: 0 auto !important;display: block;\">
        <h1>";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose source")), "html", null, true);
            echo "</h1>
        <button class=\"button button-primary button-hero gallery\" id=\"gg-btn-upload\" data-folder-id=\"0\"
                style=\"width: 400px;\"
                data-gallery-id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["galleryId"]) ? $context["galleryId"] : null), "html", null, true);
            echo "\" data-upload>
            <i class=\"fa fa-wordpress fa-2x\"></i>
            ";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from WordPress Media Library")), "html", null, true);
            echo "
        </button>
        <h3>";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from social networks")), "html", null, true);
            echo "</h3>
        <a class=\"button button-primary button-hero\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "insta", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
            echo "\" style=\"width: 400px;margin-bottom: 20px;\">
            <i class=\"fa fa-instagram fa-2x\"></i>
            ";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Instagram account")), "html", null, true);
            echo "
        </a>
        ";
            // line 15
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
                // line 16
                echo "            <a class=\"button button-primary button-hero\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "flickr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "tumblr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 22
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "facebook", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 26
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "ftp", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 30
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 33
                echo "            <h3>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get Pro to enable import")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"http://supsystic.com/plugins/photo-gallery/\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-unlock fa-2x\"></i>
                ";
                // line 36
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get PRO")), "html", null, true);
                echo "
            </a>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 42
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 48
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 54
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 60
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </button>
        ";
            }
            // line 63
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 60,  166 => 58,  159 => 54,  154 => 52,  135 => 42,  123 => 36,  110 => 30,  100 => 26,  95 => 24,  80 => 18,  74 => 16,  67 => 13,  58 => 10,  48 => 6,  42 => 3,  33 => 2,  21 => 1,  224 => 140,  219 => 125,  214 => 123,  209 => 122,  199 => 12,  194 => 9,  187 => 140,  180 => 136,  176 => 135,  165 => 126,  163 => 125,  160 => 124,  157 => 123,  155 => 122,  147 => 48,  145 => 65,  142 => 46,  140 => 57,  125 => 49,  118 => 48,  116 => 33,  109 => 43,  104 => 41,  98 => 40,  90 => 22,  85 => 20,  79 => 32,  73 => 29,  62 => 11,  51 => 21,  45 => 20,  40 => 17,  38 => 12,  34 => 10,  25 => 1,  381 => 143,  376 => 140,  372 => 138,  369 => 137,  365 => 135,  362 => 134,  358 => 132,  356 => 131,  353 => 130,  351 => 129,  345 => 128,  341 => 127,  337 => 126,  330 => 125,  319 => 124,  311 => 191,  306 => 190,  304 => 189,  301 => 188,  297 => 145,  293 => 122,  289 => 120,  280 => 117,  276 => 116,  271 => 114,  266 => 112,  260 => 109,  255 => 107,  251 => 106,  245 => 104,  233 => 99,  229 => 98,  221 => 97,  211 => 90,  206 => 88,  202 => 13,  195 => 83,  189 => 141,  184 => 79,  177 => 63,  173 => 74,  167 => 71,  156 => 63,  150 => 119,  143 => 56,  137 => 55,  130 => 40,  124 => 46,  117 => 41,  115 => 37,  108 => 35,  105 => 28,  102 => 33,  99 => 32,  96 => 31,  94 => 30,  91 => 29,  88 => 28,  83 => 25,  78 => 24,  72 => 15,  68 => 27,  65 => 19,  63 => 18,  61 => 17,  56 => 23,  53 => 8,  43 => 8,  36 => 6,  32 => 9,  29 => 8,);
    }
}
