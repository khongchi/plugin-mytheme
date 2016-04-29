<?php
namespace Khongchi\Plugins\MyTheme\Controllers\Theme;

use App\Http\Controllers\Controller;
use Khongchi\Plugins\MyTheme\Plugin;
use Khongchi\Plugins\MyTheme\Theme\Basic;
use XePresenter;
use Xpressengine\Http\Request;
use Xpressengine\Media\MediaManager;
use Xpressengine\Storage\File;

class ConfigController extends Controller
{
    public function edit(Request $request)
    {
        return XePresenter::make(
            Plugin::getIdWith('views.theme.config'),
            [
                'config' => Basic::getConfig()
            ]
        );
    }

    public function update(Request $request)
    {
        $oldConfig = Basic::getConfig();

        $config = $request->only(['sidebar', 'logoTitle', 'logoImage']);

        $this->saveImage($config, $oldConfig);

        Basic::setConfig($config);

        return \Redirect::back()->with('alert', ['type' => 'success', 'message' => '저장되었습니다.']);
    }

    protected function saveImage(&$config, &$oldConfig)
    {
        $imageInputs = [
            'logoImage',
        ];

        // process images
        /** @var \Xpressengine\Storage\Storage $storage */
        $storage = app('xe.storage');
        /** @var MediaManager $media */
        $media = app('xe.media');

        foreach ($imageInputs as $key) {
            $uploadedFile = array_get($config, $key);
            $configId = $key.'Id';
            $configPath = $key.'Path';
            if ($uploadedFile !== null) {
                // remove old logo file
                if (!empty($oldConfig[$configId])) {
                    $oldFileId = $oldConfig[$configId];
                    $oldFile = File::find($oldFileId);
                    if ($oldFile) {
                        $storage->remove($oldFile);
                    }
                }

                $file = $storage->upload($uploadedFile, Plugin::getId(), null, 'plugin');
                $mediaFile = $media->make($file);
                $fileId = $file->id;
                $filePath = $mediaFile->url();

                $config[$configId] = $fileId;
                $config[$configPath] = $filePath;
            } else {
                $config[$configId] = $oldConfig->get($configId, '');
                $config[$configPath] = $oldConfig->get($configPath, '');
            }
        }
    }

}
