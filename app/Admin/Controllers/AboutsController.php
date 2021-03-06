<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Abouts;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AboutsController extends Controller
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

            $content->header('关于我们');
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

            $content->header('关于我们');
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

            $content->header('关于我们');
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
        return Admin::grid(Abouts::class, function (Grid $grid) {

            $grid->id('编号')->sortable();

            $grid->company('公司名称');

            $grid->tel('电话号码');

            $grid->phone('手机号');

            $grid->email('邮箱地址');

            $grid->qq('QQ');

            $grid->work_time('工作时间');

            $grid->address('公司地址');

            $grid->wechat('微信');

            //$grid->jianjie('公司简介');

            //$grid->wenhua('企业文化');

            //$grid->fazhan('发展历程');

            //$grid->fanwei('服务范围');

            //$grid->youshi('服务优势');

            $grid->created_at('创建时间');

            //$grid->updated_at('修改时间');

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
        return Admin::form(Abouts::class, function (Form $form) {

            $form->display('id', '编号');

            $form->text('company', '公司名称')->rules('required');

            $form->text('tel', '电话号码')->rules('required');

            $form->text('phone', '手机号')->rules('required');

            $form->text('email', '邮箱地址')->rules('required');

            $form->text('qq', 'QQ')->rules('required');

            $form->text('wechat', '微信')->rules('required');

            $form->text('work_time', '工作时间')->rules('required');

            $form->text('address', '公司地址')->rules('required');

            $form->editor('jianjie', '公司简介');

            $form->editor('wenhua', '企业文化');

            $form->editor('fazhan', '发展历程');

            $form->editor('fanwei', '服务范围');

            $form->editor('youshi', '服务优势');

            $form->display('created_at', '创建时间' );

            $form->display('updated_at', '修改时间' );
        });
    }

}
