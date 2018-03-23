<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Flows;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class FlowsController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('服务流程管理');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('服务流程管理');
            $content->description('修改');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('服务流程管理');
            $content->description('新增');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Flows::class, function (Grid $grid) {

            $grid->id('编号')->sortable();

            $grid->title('标题');

            $grid->title_en('标题(英语)');

            $grid->is_show('是否展示')->display(function($is_show){
                return $is_show ? '展示' : '不展示';
            });

            $grid->created_at('创建时间');

            //设置查询
            $grid->filter(function ($filter){
                // 去掉默认的id过滤器
                $filter->disableIdFilter();
                $filter->like('title', '标题');
            });

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Flows::class, function (Form $form) {

            $form->display('id', '编号');

            $form->text('title', '标题')->rules('required');

            $form->text('title_en', '标题(英语)');

            //开关
            $states = [
                'on'  => ['value' => 1, 'text' => '展示', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '不展示', 'color' => 'danger'],
            ];
            $form->switch('is_show', '展示')->states($states);

            $form->editor('content', '服务介绍');

            //去掉重置按钮
            $form->disableReset();

        });
    }
}
