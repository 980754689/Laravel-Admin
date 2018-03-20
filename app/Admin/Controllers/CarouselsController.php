<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Carousels;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CarouselsController extends Controller
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

            $content->header('轮播图管理');
            $content->description('轮播图列表');

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

            $content->header('轮播图管理');
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

            $content->header('轮播图管理');
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
        return Admin::grid(Carousels::class, function (Grid $grid) {

            $grid->id('编号')->sortable();

            //$grid->img('图像')->image();
            $grid->img('图像')->image('http://laravel22.cc/uploads/',100);

            $grid->name('名称');

            $grid->link('链接');

            $grid->is_show('展示')->display(function($is_show){
                return $is_show ? '展示': '不展示' ;
            });

            $grid->target('是否打开新页面')->display(function($target){
                return $target ? '是' : '否' ;
            });

            $grid->created_at('创建时间');

            //设置查询
            $grid->filter(function($filter){
                //去掉默认ID
                $filter->disableIdFilter();
                $filter->like('name', '名称');
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
        return Admin::form(Carousels::class, function (Form $form) {

            $form->display('id', '编号');

            $form->image('img', '图片');

            $form->text('name', '名称');

            $form->text('link', '链接');

            $states = [
                'on'  => ['value' => 1, 'text' => '展示', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '不展示', 'color' => 'danger'],
            ];
            $form->switch('is_show', '展示')->states($states);

            $target = [
                'on'  => ['value' => 1, 'text' => '是', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '否', 'color' => 'danger'],
            ];
            $form->switch('target', '是否打开新页面')->states($target);


        });
    }
}
