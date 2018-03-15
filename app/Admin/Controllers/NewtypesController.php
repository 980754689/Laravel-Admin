<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Newtypes;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class NewtypesController extends Controller
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

            $content->header('新闻分类');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     *
     */
    public function demo()
    {
        return Admin::content(function (Content $content){
             $content->header("新闻分类");
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

            $content->header('新闻分类');
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

            $content->header('新闻分类');
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
        return Admin::grid(Newtypes::class, function (Grid $grid) {
            
            $grid->id('编号')->sortable();
            $grid->title('所属分类');
            $grid->is_show('展示')->display(function ($is_show) {
                return $is_show ? '展示' : '不展示';
            });


            //查询过滤
            $grid->filter(function ($filter){
                // 去掉默认的id过滤器
                $filter->disableIdFilter();
                //设置需要的查询
                $filter->like('title', '所属分类');
            });

            // 去掉删除按钮
            $grid->actions(function ($actions) {
                $actions->disableDelete();
            });

            $grid->actions(function ($actions) {
                //去掉删除操作
                $actions->disableDelete();
                // 添加删除操作
                $actions->append('<a href=""><i class="fa fa-trash"></i></a>');
                // prepend一个操作
                // $actions->prepend('<a href=""><i class="fa fa-paper-plane"></i></a>');
            });

        });
    }

    /**
     * Make a form builder.
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Newtypes::class, function (Form $form) {

            $form->display('id', '编号');

            $form->text('title','所属分类')->rules('required');

            //开关
            $states = [
                'on'  => ['value' => 1, 'text' => '展示', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '不展示', 'color' => 'danger'],
            ];
            $form->switch('is_show', '展示')->states($states);

        });
    }


}

