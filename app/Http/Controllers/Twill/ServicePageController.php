<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\InlineRepeater;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class ServicePageController extends BaseModuleController
{
    protected $moduleName = 'servicePages';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Input::make()->name('description')->label('Description')->translatable()
        );

        $form->add(
            Input::make()->name('title')->label('Title')->translatable()
        );

        $form->add(
            Input::make()->name('sub_title')->label('Sub title')->translatable()
        );

        $form->add(
            Input::make()->name('block_title')->label('Block title')->translatable()
        );

        $form->add(
            Input::make()->type('textarea')
                ->name('block_description')
                ->label('Block description')
                ->translatable()
        );

        $form->add(
            InlineRepeater::make()->name('services')
                ->label('Add line service')
                ->fields([
                    Input::make()
                        ->required()
                        ->translatable()
                        ->name('title'),
                ])
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('description')->title('Description')
        );

        return $table;
    }
}
