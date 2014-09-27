<?php



namespace happyproff\YiiStatics;



use Yii;
use CApplicationComponent;
use CClientScript;
use CException;



class YiiStatics extends CApplicationComponent {



    public $assetsAlias = 'application.assets';



    /**
     * @param string $cssFile for examlple 'main.css' or 'notifications/main.css'
     * @param string|null $pathAlias for example 'application.assets.styles'
     * @param string string $media
     * @return YiiStatics
     * @throws CException
     */
    public function css ($cssFile, $pathAlias = null, $media = '') {

        if (!$cssFile) throw new CException('cssFile cannot be empty');
        if ($pathAlias === null) $pathAlias = $this->assetsAlias;

        $path = Yii::getPathOfAlias($pathAlias);
        if ($path === false) throw new CException('pathAlias "' . $pathAlias . '" is invalid');

        if ($cssFile[0] !== '/') $cssFile = '/' . $cssFile;

        Yii::app()->clientScript->registerCssFile(
            Yii::app()->assetManager->publish($path . $cssFile . '.css'),
            $media
        );

        return $this;

    }



    /**
     * @param string $jsFile for example 'main.js' or 'personal/jesus.js'
     * @param string|null $pathAlias for example 'application.assets.scripts'
     * @param int $position
     * @return YiiStatics
     * @throws CException
     */
    public function js ($jsFile, $pathAlias = null, $position = CClientScript::POS_END) {

        if (!$jsFile) throw new CException('jsFile cannot be empty');
        if ($pathAlias === null) $pathAlias = $this->assetsAlias;

        $path = Yii::getPathOfAlias($pathAlias);
        if ($path === false) throw new CException('pathAlias "' . $pathAlias . '" is invalid');

        if ($jsFile[0] !== '/') $jsFile = '/' . $jsFile;

        Yii::app()->clientScript->registerScriptFile(
            Yii::app()->assetManager->publish($path . $jsFile . '.js'),
            $position
        );

        return $this;

    }



}
