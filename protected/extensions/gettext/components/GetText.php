<?php

/**
 * GetText application component.
 * Sets the php locale and binds gettext domain
 * 
 * @package ext.gettext
 * @link http://github.com/acerix/yii-gettext
 * @author Dylan Ferris <dylan@kanux.org>
 * @copyright Copyright &copy; Dylan Ferris 2012-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version $Id: GetText.php 2012-04-22 acerix $
 */
class GetText extends CApplicationComponent {

    /**
     * @var GetText domain.
     */
    public $domain;

    /**
     * @var Language in yii canonical format.
     */
    public $language = 'en_us';

    /**
     * @var Directory containing gettext messages.
     */
    public $locale_dir;

    /**
     * Initialize php's gettext.
     */
    public function load() {
        if (Yii::app()->user->hasState('language'))
            $this->language = Yii::app()->user->getState('language');
        else if (isset(Yii::app()->request->cookies['language']))
            $this->language = Yii::app()->request->cookies['language']->value;

        $this->language = $this->getLocaleID($this->language);
        $this->setDirection($this->language);
        if (!$this->locale_dir)
            $this->locale_dir = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'locale';

        $this->domain = 'yii';
        if (Yii::app()->params["gettext_cache"] === false && $this->getLocaleID(Yii::app()->sourceLanguage) != $this->language) {

            $targetFolder = $this->locale_dir . '/' . $this->language . "/LC_MESSAGES/";

            $folder = opendir($targetFolder);
            while (false !== ($file = readdir($folder))) {
                $pathFiles = $targetFolder . "/" . $file;
                if ($file != ".." AND $file != "." AND strrchr($file, '.') == '.mo' AND $file != $this->domain . '.mo') {
                    unlink($pathFiles);
                }
            }
            closedir($folder);

            $translatefile = $this->domain . time();
            copy($this->locale_dir . '/' . $this->language . '/LC_MESSAGES/' . $this->domain . '.mo', $this->locale_dir . '/' . $this->language . '/LC_MESSAGES/' . $translatefile . '.mo');
            $this->domain = $translatefile;
        }


        putenv("LC_ALL=" . $this->language . ".utf8");
        setlocale(LC_ALL, $this->language);
        header('Content-Language: ' . str_replace('_', '-', $this->language));
        $this->bindDomain();
    }

    /**
     * Bind the gettext domain and make it the default
     */
    public function bindDomain() {
        bind_textdomain_codeset($this->domain, 'utf-8');
        bindtextdomain($this->domain, $this->locale_dir);
        textdomain($this->domain);
    }

    /**
     * Convert yii's canonical locale to the format required for gettext ( reverse of CLocale::getCanonicalID() )
     */
    static public function getLocaleID($id) {

        switch ($id) {
            case "fa":
                $id = "fa_IR";
                break;
            case "en":
                $id = "en_US";
                break;
            case "ar":
                $id = "ar_AE";
        }

        return $id;
    }

    static public function setDirection($id) {
        switch ($id) {
            case "fa_IR":
            case "ar_AE":
                Yii::app()->params->direction = 'rtl';
                break;
            case "en":
                Yii::app()->params->direction = 'ltr';
                break;
            default:
                Yii::app()->params->direction = 'ltr';
        }
    }

}
