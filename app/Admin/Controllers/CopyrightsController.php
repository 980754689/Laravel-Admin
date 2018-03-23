<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Copyrights;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CopyrightsController extends Controller
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

            $content->header('备案信息');
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

            $content->header('备案信息');
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

            $content->header('备案信息');
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
        return Admin::grid(Copyrights::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->company('公司名称');

            $grid->time('时间');

            $grid->url('工商链接');

            $grid->ip('备案号');

            $grid->created_at('创建时间');

            //禁用分页条
            $grid->disablePagination();

            //禁用创建按钮
            $grid->disableCreateButton();

            //禁用导出数据按钮
            $grid->disableExport();

            //禁用查询过滤器
            $grid->disableFilter();

            //禁用行选择checkbox
            $grid->disableRowSelector();

            //禁用操作
            $grid->actions(function ($actions) {
                //禁用删除
                $actions->disableDelete();
                // $actions->disableEdit();
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
        return Admin::form(Copyrights::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('time',  '时间');

            $form->text('url',  '工商链接');

            $form->text('company',  '公司名称');

            $form->text('ip', '备案号');

            $form->display('created_at', '创建时间');

            $form->display('updated_at', '更新时间');

            // 去掉重置按钮
            $form->disableReset();

        });
    }
}
