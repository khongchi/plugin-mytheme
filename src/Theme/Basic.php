<?php
namespace Khongchi\Plugins\MyTheme\Theme;

use Route;
use XeFrontend;
use Xpressengine\Theme\AbstractTheme;
use Khongchi\Plugins\MyTheme\Plugin;

class Basic extends AbstractTheme
{

    protected static $supportDesktop = true;
    protected static $supportMobile = false;

    protected static $configID = 'mytheme@mytheme@basic';

    /**
     * boot
     *
     * @return void
     */
    public static function boot()
    {
        // register route for theme config page
        Route::settings(
            Plugin::getId(),
            function () {
                $alias = Plugin::getIdWith('theme.config');
                Route::get('config', ['as' => "$alias", 'uses' => 'ConfigController@edit']);
                Route::post('config', ['as' => "$alias", 'uses' => 'ConfigController@update']);
            }, ['namespace' => 'Khongchi\Plugins\MyTheme\Controllers\Theme']
        );
    }


    /**
     * return settings manage uri
     *
     * @return null|string
     */
    public static function getSettingsURI()
    {
        return route(Plugin::getIdWith('theme.config'));
    }

    /**
     * 테마 편집 페이지에서 편집할 수 있는 파일의 목록을 반환한다.
     *
     * @return array
     */
    public static function getEditFiles()
    {
        return [
            'template' => [
                'theme.blade.php' => Plugin::getPath('views/theme/basic.blade.php'),
            ],
            'stylesheets' => [
                'theme.css' => Plugin::getPath('assets/theme/basic.css'),
            ]
        ];
    }

    /**
     * 테마를 출력한다.
     *
     * @return string
     */
    public function render()
    {
        // load assets
        $this->loadAssets();

        // get configuration data of theme
        $config = $this->getConfig();

        // render html
        return \View::make(Plugin::getIdWith('views.theme.basic'), compact('config'));
    }

    protected function loadAssets()
    {
        // xe에서 제공하는 stylesheet입니다. 다양한 css compoent와 xe grid system을 사용할 수 있습니다.
        XeFrontend::css('assets/core/xe-ui-component/xe-ui-component.css')->load();
    }


}
