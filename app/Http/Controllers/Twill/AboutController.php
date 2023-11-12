<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class AboutController extends BaseModuleController
{
    protected $moduleName = 'abouts';
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
            Input::make()->name('title')->label('Title')->translatable()
        );

        $form->add(
            Wysiwyg::make()->name('description')
                ->toolbarOptions([ [ 'header' => [1, 2, false] ], 'ordered', 'bullet', 'link', 'image' ])
                ->label('Description')->translatable()
        );

        $form->add(
            Input::make()->name('job_title')->label('Job Title')->translatable()
        );

        $form->add(
            Input::make()->name('name')->label('Name')->translatable()
        );

        $form->add(
            Input::make()->type('textarea')
                ->name('bio')
                ->label('Name')
                ->translatable()
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
