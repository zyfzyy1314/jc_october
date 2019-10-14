<?php namespace AndreiShilov\Up\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Illuminate\Filesystem\Filesystem;

class SelectImage extends FormWidgetBase
{
    public function widgetDetails()
    {
        return [
            'name' => 'andreishilov.up::lang.selectimage.name',
            'description' => 'andreishilov.up::lang.selectimage.description'
        ];
    }

    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $filesystem = new Filesystem();
        $images = $filesystem->files(plugins_path('andreishilov/up/assets/img/arrows/'));
        foreach ($images as $image) {
            $this->vars['images'][] = $image->getFilename();
        }

        $this->vars['selectedValue'] = $this->getLoadValue();
    }

    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('widget');
    }

    public function loadAssets()
    {
        $this->addCss($this->getAssetPath('css/base.css'));
    }
}