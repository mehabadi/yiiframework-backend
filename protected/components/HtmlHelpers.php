<?php

class HtmlHelpers extends CHtml {

    public static function putViewScript() {
        $amt = func_num_args(); //Get the number of parameters
        $args = func_get_args(); //Get the parameters

        switch ($amt) {
            case 0:
                return self::PutViewScriptFile();
                break;
            case 1:
                return self::PutViewScriptAction($args[0]);
                break;
            case 2:
                return self::PutViewScriptControllerAction($args[0], $args[1]);
                break;
        }
    }

    protected static function PutViewScriptFile() {

        $cs = Yii::app()->getClientScript();
        $file = Yii::app()->baseUrl . '/viewscripts/' . Yii::app()->controller->id . '/' . Yii::app()->controller->action->id . '.js';
        if (!$cs->isScriptFileRegistered($file))
            $cs->registerScriptFile($file, CClientScript::POS_END);
    }

    protected static function PutViewScriptAction($ViewName) {
        $cs = Yii::app()->getClientScript();
        $file = Yii::app()->baseUrl . '/viewscripts/' . Yii::app()->controller->id . '/' . strtolower($ViewName) . '.js';
        if (!$cs->isScriptFileRegistered($file))
            $cs->registerScriptFile($file, CClientScript::POS_END);
    }

    protected static function PutViewScriptControllerAction($controllerName, $ViewName) {
        $cs = Yii::app()->getClientScript();
        $file = Yii::app()->baseUrl . '/viewscripts/' . strtolower($controllerName) . '/' . strtolower($ViewName) . '.js';
        if (!$cs->isScriptFileRegistered($file))
            $cs->registerScriptFile($file, CClientScript::POS_END);
    }

    public static function putScript($script) {
        $cs = Yii::app()->getClientScript();
        $js = "$script";
        $cs->registerScript('putScript', $js, CClientScript::POS_END);
    }

    public static function putGlobalScript() {
        self::putViewScriptControllerAction("_global", "_global");
    }

    public static function PutAjaxUCViewer($ID, $URL) {
        return "<div class=\"UCViewer\" id=\"".$ID."\" ucl=\"".$URL."\"></div>";
    }

}

?>
