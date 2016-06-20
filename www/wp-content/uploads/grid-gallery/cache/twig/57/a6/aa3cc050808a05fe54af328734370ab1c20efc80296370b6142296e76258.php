<?php

/* @ui/type.twig */
class __TwigTemplate_57a6aa3cc050808a05fe54af328734370ab1c20efc80296370b6142296e76258 extends Twig_Template
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
        // line 39
        echo "
";
        // line 52
        echo "
";
        // line 82
        echo "
";
        // line 115
        echo "
";
        // line 158
        echo "
";
    }

    // line 1
    public function getlist_view($_entities = null, $_sliderSettings = null, $_galleryId = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $_entities,
            "sliderSettings" => $_sliderSettings,
            "galleryId" => $_galleryId,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["view"] = $this;
            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "    <tr class=\"ui-jqgrid-labels-custom\" role=\"rowheader\">
        <th scope=\"col\" id=\"check-all\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            <input type=\"checkbox\" id=\"checkAll\" class=\"gg-checkbox\">
        </th>
        <th scope=\"col\" id=\"icon\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image")), "html", null, true);
            echo "
        </th>
        <th scope=\"col\" id=\"title\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 12
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Properties")), "html", null, true);
            echo "
        </th>
        <th scope=\"col\" id=\"date\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Date")), "html", null, true);
            echo "
        </th>
    </tr>
    ";
            $context["head"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "
    <table id=\"ui-jqgrid-htable-img\" class=\"ui-jqgrid-htable\" style=\"margin: 7px 0 7px -5px; width: 100%;\">
        <thead class=\"jqgrid-head-nav\">
        ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["head"]) ? $context["head"] : null), "html", null, true);
            echo "
        </thead>
        <tfoot>
        ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["head"]) ? $context["head"] : null), "html", null, true);
            echo "
        </tfoot>
        <tbody id=\"the-list\" data-sortable data-container=\"list\">
        ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "folders"));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 29
                echo "            ";
                echo $context["view"]->getlist_folder((isset($context["folder"]) ? $context["folder"] : null));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "images"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 32
                echo "            ";
                echo $context["view"]->getlist_image((isset($context["image"]) ? $context["image"] : null), (isset($context["sliderSettings"]) ? $context["sliderSettings"] : null), (isset($context["galleryId"]) ? $context["galleryId"] : null));
                echo "
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 34
                echo "            ";
                // line 35
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </tbody>
    </table>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 40
    public function getblock_view($_entities = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $_entities,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo "    ";
            $context["view"] = $this;
            // line 42
            echo "    <ul class=\"sg-photos\" data-sortable data-container=\"block\">
        ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "folders"));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 44
                echo "            ";
                echo $context["view"]->getblock_folder((isset($context["folder"]) ? $context["folder"] : null));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 48
                echo "            ";
                echo $context["view"]->getblock_image((isset($context["image"]) ? $context["image"] : null));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 53
    public function getblock_folder($_folder = null)
    {
        $context = $this->env->mergeGlobals(array(
            "folder" => $_folder,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "    <li data-droppable class=\"gg-list-item\" data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id"), "html", null, true);
            echo "\" data-entity-type=\"folder\"
        data-entity-info=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["folder"]) ? $context["folder"] : null)), "html", null, true);
            echo "\">
        <div class=\"gg-item\" style=\"z-index: 0;\">
            <div class=\"gg-check\">
                <input type=\"checkbox\" class=\"gg-checkbox\" data-observable>
            </div>
            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id"), "view" => "block")), "method"), "html", null, true);
            echo "\">
                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXk5+pYcSvrAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC\"
                     alt=\"\" width=\"150\" height=\"150\"/>

                <div style=\"position: absolute; top: 55px; left: 55px; color: #bdc3c7;\">
                    <i class=\"fa fa-folder-open-o\" style=\"font-size: 5em;\"></i>
                </div>

                <div class=\"gg-folder-photos\">
                    <i class=\"fa fa-picture-o\"></i> <span class=\"gg-folder-photos-num\">";
            // line 69
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "photos")), "html", null, true);
            echo "</span>
                </div>
            </a>

            <p>
                <span class=\"folder-title\">";
            // line 74
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "title")), "html", null, true);
            echo "</span>
                <small>
                    ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "date"), "html", null, true);
            echo "
                </small>
            </p>
        </div>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 83
    public function getblock_image($_image = null)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $_image,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 84
            echo "    <li class=\"gg-list-item\" data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" data-entity-type=\"photo\"
        data-entity-info=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["image"]) ? $context["image"] : null)), "html", null, true);
            echo "\">
        <div class=\"gg-item\" style=\"z-index: 10;\">
            <div class=\"gg-check\">
                <input type=\"checkbox\" class=\"gg-checkbox\" data-observable>
            </div>
            <a data-colorbox href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "sizes"), "full"), "url"), "html", null, true);
            echo "\">
                ";
            // line 91
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "sizes"), "thumbnail"))) {
                // line 92
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "sizes"), "full"), "url");
                // line 93
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "orientation") == "landscape")) {
                    // line 94
                    echo "                        ";
                    $context["sizes"] = array("width" => 80, "height" => 60);
                    // line 95
                    echo "                    ";
                } else {
                    // line 96
                    echo "                        ";
                    $context["sizes"] = array("width" => 60, "height" => 80);
                    // line 97
                    echo "                    ";
                }
                // line 98
                echo "                ";
            } else {
                // line 99
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "sizes"), "thumbnail"), "url");
                // line 100
                echo "                    ";
                $context["sizes"] = array("width" => 60, "height" => 60);
                // line 101
                echo "                ";
            }
            // line 102
            echo "                <img class=\"supsystic-lazy\" data-original=\"";
            echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "title"), "html", null, true);
            echo "\" width=\"150\"
                     style=\"min-height:150px;max-height:150px;\"/>
            </a>

            <p title=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "title"), "html", null, true);
            echo "\">
                ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "title"), "html", null, true);
            echo "
                <small>
                    ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "dateFormatted"), "html", null, true);
            echo "
                </small>
            </p>
        </div>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function getlist_folder($_folder = null)
    {
        $context = $this->env->mergeGlobals(array(
            "folder" => $_folder,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 117
            echo "    <tr data-droppable data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id"), "html", null, true);
            echo "\" data-entity-type=\"folder\"
        data-entity-info=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["folder"]) ? $context["folder"] : null)), "html", null, true);
            echo "\">
        <th scope=\"row\" class=\"check-column\">
            <label class=\"screen-reader-text\"
                   for=\"cb-select-";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select %s")), $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "title")), "html", null, true);
            echo "</label>
            <input type=\"checkbox\" name=\"folder[]\" id=\"cb-select-";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id"), "html", null, true);
            echo "\"
                   data-observable>
        </th>
        <td class=\"column-icon media-icon\" style=\"position: relative;\">
            <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id"), "view" => "list")), "method"), "html", null, true);
            echo "\"
               data-colorbox>
                <img width=\"60\" height=\"60\"
                     src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXk5+pYcSvrAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC\"
                     class=\"attachment-80x60 supsystic-lazy\" alt=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "title"), "html", null, true);
            echo "\">
            </a>

            <div style=\"position: absolute; top: 20px; left: 31px; color: #bdc3c7; z-index: 100;\">
                <i class=\"fa fa-folder-open-o\" style=\"font-size: 3em;\"></i>
            </div>
        </td>
        <td class=\"title column-title\">
            <strong>
                <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id"), "view" => "list")), "method"), "html", null, true);
            echo "\">
                    <span class=\"folder-title\">";
            // line 140
            echo twig_title_string_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "title"));
            echo "</span>
                </a>
            </strong>

            <p>
                <span class=\"gg-folder-photos-num\">
                    ";
            // line 146
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "photos")), "html", null, true);
            echo "
                </span>
                ";
            // line 148
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "photos")) == 1)) {
                // line 149
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("photo")), "html", null, true);
                echo "
                ";
            } else {
                // line 151
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("photos")), "html", null, true);
                echo "
                ";
            }
            // line 153
            echo "            </p>
        </td>
        <td class=\"date column-date\">";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "date"), "html", null, true);
            echo "</td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 159
    public function getlist_image($_image = null, $_sliderSettings = null, $_galleryId = null)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $_image,
            "sliderSettings" => $_sliderSettings,
            "galleryId" => $_galleryId,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 160
            echo "    ";
            $context["nonProMsg"] = "Available in PRO";
            // line 161
            echo "    <tr data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" data-settings=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["sliderSettings"]) ? $context["sliderSettings"] : null)), "html", null, true);
            echo "\" data-entity-type=\"photo\" data-entity-info=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["image"]) ? $context["image"] : null)), "html", null, true);
            echo "\">
        <th scope=\"row\" class=\"check-column\">
            <label class=\"screen-reader-text\"
                   for=\"cb-select-";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select %s")), $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "title")), "html", null, true);
            echo "</label>
            <input type=\"checkbox\" name=\"image[]\" id=\"cb-select-";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" data-observable>
        </th>
        <td class=\"column-icon media-icon\">
            <a href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "sizes"), "full"), "url"), "html", null, true);
            echo "\" data-colorbox>
                ";
            // line 169
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "sizes"), "thumbnail"))) {
                // line 170
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "sizes"), "full"), "url");
                // line 171
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "orientation") == "landscape")) {
                    // line 172
                    echo "                        ";
                    $context["sizes"] = array("width" => 80, "height" => 60);
                    // line 173
                    echo "                    ";
                } else {
                    // line 174
                    echo "                        ";
                    $context["sizes"] = array("width" => 60, "height" => 80);
                    // line 175
                    echo "                    ";
                }
                // line 176
                echo "                ";
            } else {
                // line 177
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "sizes"), "thumbnail"), "url");
                // line 178
                echo "                    ";
                $context["sizes"] = array("width" => 60, "height" => 60);
                // line 179
                echo "                ";
            }
            // line 180
            echo "                <img width=\"75\" height=\"75\" data-original=\"";
            echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : null), "html", null, true);
            echo "\"
                     class=\"attachment-thumbnail supsystic-lazy\" alt=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "title"), "html", null, true);
            echo "\">
            </a>
        </td>
        <td class=\"title column-title\">
            <form id=\"photo-editor-";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"photo-editor attachment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "id"), "html", null, true);
            echo "\">
                <strong data-tabcontent=\".tabcontent-";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\">
                    <a href=\"#photo-caption-";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"add-new-h2 button active\">
                        ";
            // line 188
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-captionEffect-";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 191
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption effect")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-seo-";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 194
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("SEO")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-link-";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 197
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Link")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-video-";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 200
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-tags-";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 203
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-linked-images-";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 206
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked images")), "html", null, true);
            echo "
                    </a>
                    <a href=\"#photo-crop-";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"add-new-h2 button\">
                        ";
            // line 209
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Crop")), "html", null, true);
            echo "
                    </a>
                </strong>

                <p id=\"photo-caption-";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\">
                    <input type=\"text\" name=\"caption\" value=\"";
            // line 214
            echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "caption");
            echo "\"
                           placeholder=\"";
            // line 215
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "html", null, true);
            echo "\"/>
                </p>

                <p id=\"photo-captionEffect-";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" style=\"display:none;\">
                    <button class=\"button selectCaptionEffectBtn\" data-id=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "id"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), "html", null, true);
            echo "</button>
                    <input type=\"text\" class=\"captionEffectVal\" name=\"captionEffect\" data-id=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "captionEffect"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sliderSettings"]) ? $context["sliderSettings"] : null), "thumbnail"), "overlay"), "effect"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sliderSettings"]) ? $context["sliderSettings"] : null), "thumbnail"), "overlay"), "effect"))), "html", null, true);
            echo "\" style=\"display: none;\" />
                </p>

                <p id=\"photo-seo-";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" style=\"display: none\">
                    <input type=\"text\" name=\"description\" value=\"";
            // line 224
            echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "description");
            echo "\"
                           style=\"width: 40%;\"
                           placeholder=\"";
            // line 226
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description")), "html", null, true);
            echo "\"/>
                    <input type=\"text\" name=\"alt\" value=\"";
            // line 227
            if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "alt")))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "alt"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "title"), "html", null, true);
            }
            echo "\"
                           style=\"width: 40%;\"
                           placeholder=\"";
            // line 229
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alternative text")), "html", null, true);
            echo "\"/>
                </p>

                <p id=\"photo-link-";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" style=\"display: none\">
                    <input
                            type=\"text\"
                            name=\"link\"
                            value=\"";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "external_link"), "html", null, true);
            echo "\"
                            style=\"width: 50%;\"
                            placeholder=\"";
            // line 238
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("http://example.com/")), "html", null, true);
            echo "\"
                            />
                    <label style=\"border: 1px solid #9D9D9D;padding: 5px;\">
                        <input
                                type=\"checkbox\"
                                name=\"target\"
                                value=\"_blank\"
                                ";
            // line 245
            if (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "target") == "_blank")) {
                // line 246
                echo "                                    checked=\"checked\"
                                ";
            }
            // line 248
            echo "                                />
                        ";
            // line 249
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open in new window")), "html", null, true);
            echo "
                    </label>
                    <label style=\"border: 1px solid #9D9D9D;padding: 5px; margin-left: 5px;\">
                        <input
                                type=\"checkbox\"
                                name=\"rel\"
                                value=\"nofollow\"
                                ";
            // line 256
            if (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "rel") == "nofollow")) {
                // line 257
                echo "                                    checked=\"checked\"
                                ";
            }
            // line 259
            echo "                                />
                        ";
            // line 260
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add nofollow attribute")), "html", null, true);
            echo "
                    </label>
                </p>

                <p id=\"photo-video-";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" style=\"display: none; width: 350px;\">
                    <input
                            type=\"text\"
                            ";
            // line 267
            if ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method")) {
                // line 268
                echo "                                name=\"video\"
                                value=\"";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "video"), "html", null, true);
                echo "\"
                            ";
            } else {
                // line 271
                echo "                                disabled=\"disabled\"
                                style=\"width: 200px;\"
                            ";
            }
            // line 274
            echo "                            placeholder=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video URL")), "html", null, true);
            echo "\"
                            >
                    ";
            // line 276
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false)) {
                // line 277
                echo "                        <span style=\"color:red\" class=\"description\">
                            <a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=video&utm_campaign=gallery\" target=\"_blank\">
                                ";
                // line 279
                echo (isset($context["nonProMsg"]) ? $context["nonProMsg"] : null);
                echo "
                            </a>
                        </span>
                    ";
            }
            // line 283
            echo "                </p>

                <p id=\"photo-tags-";
            // line 285
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" style=\"display:none;\">
                    ";
            // line 286
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false)) {
                // line 287
                echo "                        <input type=\"text\" style=\"width: 60%; margin-left:4px;\" disabled placeholder=\"Categories\">
                        <span style=\"color:red\" class=\"description\">
                            <a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=imagescategories&utm_campaign=gallery\" target=\"_blank\">
                                ";
                // line 290
                echo (isset($context["nonProMsg"]) ? $context["nonProMsg"] : null);
                echo "
                            </a>
                        </span>
                    ";
            } else {
                // line 294
                echo "                        <input type=\"text\" class=\"gg-tags\" id=\"tags-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
                echo "\"
                               value=\"";
                // line 295
                echo twig_join_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "tags"), ",");
                echo "\">
                    ";
            }
            // line 297
            echo "                </p>

                <p id=\"photo-linked-images-";
            // line 299
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" style=\"display:none;\">
                    ";
            // line 300
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false)) {
                // line 301
                echo "                        <button class=\"button disabled\" disabled>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "</button>
                        <span style=\"color:red\" class=\"description\">
                            <a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=linked_images&utm_campaign=gallery\" target=\"_blank\">
                                ";
                // line 304
                echo (isset($context["nonProMsg"]) ? $context["nonProMsg"] : null);
                echo "
                            </a>
                        </span>
                    ";
            } else {
                // line 308
                echo "                        <button class=\"button selectLinkedImages\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "</button>
                        <input type=\"text\" name=\"linkedImages\" data-id=\"";
                // line 309
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "linkedImages", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "linkedImages"), "")) : ("")), "html", null, true);
                echo "\" style=\"display: none;\" />
                    ";
            }
            // line 311
            echo "                </p>

                <p id=\"photo-crop-";
            // line 313
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id"), "html", null, true);
            echo "\" style=\"display:none; margin: 0;\">
                    <label style=\"margin-left: 5px;\">Image crop position: </label>
                    ";
            // line 315
            $context["cropPositionList"] = array("left-top" => "Top Left", "center-top" => "Top Center", "right-top" => "Top Right", "left-center" => "Center Left", "center-center" => "Center Center", "right-center" => "Center Right", "left-bottom" => "Bottom Left", "center-bottom" => "Bottom Center", "right-bottom" => "Bottom Right");
            // line 326
            echo "                    <select name=\"cropPosition\">
                        ";
            // line 327
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cropPositionList"]) ? $context["cropPositionList"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                // line 328
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
                if (((($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "cropPosition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "cropPosition"), "center-center")) : ("center-center")) == (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "                    </select>
                </p>
                
                <input name=\"attachment_id\" value=\"";
            // line 333
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "id"), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"gallery_id\" value=\"";
            // line 334
            echo twig_escape_filter($this->env, (isset($context["galleryId"]) ? $context["galleryId"] : null), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"action\" value=\"grid-gallery\" type=\"hidden\"/>
                <input name=\"route[module]\" value=\"photos\" type=\"hidden\"/>
                <input name=\"route[action]\" value=\"updateAttachment\" type=\"hidden\"/>
            </form>
        </td>
        <td class=\"date column-date\" style=\"text-align: center;\">";
            // line 340
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment"), "dateFormatted"), "html", null, true);
            echo "</td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@ui/type.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  945 => 340,  936 => 334,  932 => 333,  927 => 330,  912 => 328,  908 => 327,  905 => 326,  903 => 315,  896 => 313,  892 => 311,  885 => 309,  876 => 308,  869 => 304,  862 => 301,  860 => 300,  854 => 299,  850 => 297,  845 => 295,  838 => 294,  831 => 290,  826 => 287,  824 => 286,  818 => 285,  814 => 283,  807 => 279,  803 => 277,  801 => 276,  795 => 274,  790 => 271,  785 => 269,  782 => 268,  780 => 267,  772 => 264,  765 => 260,  762 => 259,  758 => 257,  756 => 256,  746 => 249,  743 => 248,  739 => 246,  737 => 245,  727 => 238,  722 => 236,  713 => 232,  707 => 229,  698 => 227,  694 => 226,  689 => 224,  683 => 223,  675 => 220,  667 => 219,  661 => 218,  655 => 215,  651 => 214,  645 => 213,  638 => 209,  634 => 208,  629 => 206,  625 => 205,  620 => 203,  616 => 202,  611 => 200,  607 => 199,  602 => 197,  598 => 196,  593 => 194,  589 => 193,  584 => 191,  580 => 190,  575 => 188,  571 => 187,  567 => 186,  561 => 185,  554 => 181,  549 => 180,  546 => 179,  543 => 178,  540 => 177,  537 => 176,  534 => 175,  531 => 174,  528 => 173,  525 => 172,  522 => 171,  519 => 170,  517 => 169,  513 => 168,  505 => 165,  499 => 164,  488 => 161,  485 => 160,  472 => 159,  458 => 155,  454 => 153,  448 => 151,  442 => 149,  440 => 148,  435 => 146,  426 => 140,  422 => 139,  410 => 130,  403 => 126,  394 => 122,  388 => 121,  382 => 118,  377 => 117,  366 => 116,  349 => 109,  344 => 107,  340 => 106,  330 => 102,  327 => 101,  324 => 100,  321 => 99,  318 => 98,  315 => 97,  312 => 96,  309 => 95,  306 => 94,  303 => 93,  300 => 92,  298 => 91,  294 => 90,  286 => 85,  281 => 84,  270 => 83,  253 => 76,  248 => 74,  240 => 69,  228 => 60,  220 => 55,  215 => 54,  204 => 53,  192 => 50,  183 => 48,  179 => 47,  176 => 46,  167 => 44,  163 => 43,  160 => 42,  157 => 41,  146 => 40,  133 => 36,  127 => 35,  125 => 34,  117 => 32,  111 => 31,  102 => 29,  98 => 28,  92 => 25,  86 => 22,  81 => 19,  74 => 15,  68 => 12,  62 => 9,  55 => 4,  52 => 3,  49 => 2,  36 => 1,  31 => 158,  28 => 115,  25 => 82,  22 => 52,  19 => 39,);
    }
}
