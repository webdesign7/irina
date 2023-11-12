<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Files;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Listings\Columns\Image;
use A17\Twill\Services\Listings\Columns\Languages;
use A17\Twill\Services\Listings\Columns\PublishStatus;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class ServiceController extends BaseModuleController
{
    protected $moduleName = 'services';

    protected $previewView = 'site.services.show';

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
    }

    protected function getIndexTableColumns(): TableColumns
    {
        $columns = new TableColumns();

        $columns->add(
            Image::make()
                ->field('thumb')
                ->title(twillTrans('Thumb'))
        );

        $columns->add(
            PublishStatus::make()
                ->field('published')
                ->title(twillTrans('Published'))
        );

        $columns->add(
            Text::make()
                ->field('title')
                ->linkToEdit(true)
                ->title(twillTrans('Title'))
        );

        $columns->add(
            Languages::make()
        );


        return $columns;
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);


        $form->add(
            Input::make()->name('subtitle')
                ->label('Sub title')->translatable()
        );


        $form->add(
            Wysiwyg::make()->name('description')
                ->toolbarOptions([ [ 'header' => [1, 2, false] ], 'ordered', 'bullet', 'link', 'image' ])
                ->label('Description')->translatable()
        );

        $form->add(
            Input::make()->type('textarea')
                ->name('short_description')
                ->required()
                ->maxLength(100)
                ->label('Short description')->translatable()
        );

        $form->add(
            Medias::make()
                ->name('thumb')
                ->label(twillTrans('List image'))
                ->max(1)
        );

        return $form;
    }
}
