<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Services;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ServicesController extends Controller
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

            $content->header('首页我们的服务管理');
            $content->description('列表信息');

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

            $content->header('首页我们的服务管理');
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

            $content->header('首页我们的服务管理');
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
        return Admin::grid(Services::class, function (Grid $grid) {

            $grid->id('编号')->sortable();

            $grid->img('图片')->image('http://laravel22.cc/uploads/', '100', '100');

            $grid->title('标题');
        
            $grid->created_at('创建时间');

            $grid->is_show('展示')->display(function($is_show){
                return $is_show ? '展示' : '不展示';
            });

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
        return Admin::form(Services::class, function (Form $form) {

            $form->display('id', '编号');

            $form->image('img','图片');

            $form->text('title', '标题')->rules('required')->placeholder('请输入标题...');

            $form->text('url', '链接')->default('0');

            // $form->multipleImage('image', '图片')->removable();
            // $form->multipleFile('image', '图片');
            // $form->slider('year', '年龄')->options(['max' => 110, 'min' => 1, 'step' => 1, 'postfix' => 'years old']);

            // 开关
            $states = [
                'on'  => ['value' => 1, 'text' => '展示', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '不展示', 'color' => 'danger'],
            ];
            $form->switch('is_show', '展示')->states( $states );

            // 去掉重置按钮
            $form->disableReset(  );


        });
    }
}
