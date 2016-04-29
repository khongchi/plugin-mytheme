<?php
namespace Khongchi\Plugins\MyTheme\Theme;

use Khongchi\Plugins\MyTheme\Plugin;

class Main extends Basic
{
    /**
     * boot
     *
     * @return void
     */
    public static function boot()
    {
        return;
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
        return \View::make(Plugin::getIdWith('views.theme.main'), compact('config'));
    }

}
