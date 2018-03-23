<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Jobs;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class JobsController extends Controller
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

            $content->header('人才招聘管理');
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

            $content->header('人才招聘管理');
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

            $content->header('人才招聘管理');
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
        return Admin::grid(Jobs::class, function (Grid $grid) {

            $grid->id('编号')->sortable();

            $grid->name('职位名称');

            $grid->type('职位类型');

            $grid->num('招聘人数');

            $grid->company('就职公司');

            $grid->time('更新时间');

            $grid->nature('工作性质');

            $grid->address('工作地点');

            $grid->salary('薪资范围');

            $grid->branch('需求部门');

            $grid->addre('招聘区域');

            $grid->is_show('是否展示')->display(function ($is_show) {
                return $is_show ? '展示' : '不展示' ;
            });

            $grid->orderby('排序')->sortable();

            $grid->created_at('创建时间');

            //$grid->updated_at('更新时间');

            //设置查询
            $grid->filter(function ($filter){
                // 去掉默认的id过滤器
                $filter->disableIdFilter();
                $filter->like('name', '职位名称');
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
        return Admin::form(Jobs::class, function (Form $form) {

            $form->display('id', '编号');

            $form->text('name', '职位名称');

            $form->text('type', '职位类型');

            $form->text('num', '招聘人数');

            $form->text('company', '就职公司');

            $form->text('time', '更新时间');

            $form->text('nature', '工作性质');

            $form->text('address', '工作地点');

            $form->text('salary', '薪资范围');

            $form->text('branch', '需求部门');

            $form->text('addre', '招聘区域');

            $form->text('orderby', '排序');

            //开关
            $states = [
                'on'  => ['value' => 1, 'text' => '展示', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '不展示', 'color' => 'danger'],
            ];
            $form->switch('is_show', '展示')->states($states);

            $form->editor('content', '职责');

            $form->display('created_at', '创建时间');

            $form->display('updated_at', '更新时间');

        });
    }
}
