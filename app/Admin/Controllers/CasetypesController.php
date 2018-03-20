<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Casetypes;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CasetypesController extends Controller
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

            $content->header('案例分类管理');
            $content->description('分类列表');

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

            $content->header('案例分类管理');
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

            $content->header('案例分类管理');
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
        return Admin::grid(Casetypes::class, function (Grid $grid) {

            $grid->id('编号')->sortable();
            $grid->title('分类名称');
            $grid->is_show('展示')->display(function ($is_show) {
                return $is_show ? '是' : '否';
            });
            $grid->created_at('创建时间');
            $grid->updated_at('修改时间');

            //查询过滤
            $grid->filter(function ($filter){
                // 去掉默认的id过滤器
                $filter->disableIdFilter();
                //设置需要的查询
                $filter->like('title', '分类名称');
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
        return Admin::form(Casetypes::class, function (Form $form) {

            $form->display('id', '编号');
            $form->text('title', '分类名称');
            $states = [
                'on'  => ['value' => 1, 'text' => '打开', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '关闭', 'color' => 'danger'],
            ];

            $form->switch('is_show', '展示')->states($states);

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '修改时间');

        });
    }






}
