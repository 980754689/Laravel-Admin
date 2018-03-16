<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Teams;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class TeamsController extends Controller
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

            $content->header('专家团队管理');
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

            $content->header('专家团队管理');
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

            $content->header('专家团队管理');
            $content->description('添加');

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
        return Admin::grid(Teams::class, function (Grid $grid) {
            
            $grid->id('编号')->sortable();

            // $grid->img('图片')->image();
            $grid->img('图片')->image('http://xxx.com',100, 100);

            $grid->name('姓名');

            $grid->zhicheng('职称');

            $grid->is_show('展示')->display(function ($is_show) {
                return $is_show ? '展示' : '不展示';
            });

            $grid->created_at('创建时间');
            //设置查询
            $grid->filter(function ($filter){
                // 去掉默认的id过滤器
                $filter->disableIdFilter();
                $filter->like('name', '姓名');
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
        return Admin::form(Teams::class, function (Form $form) {

            $form->display('id', '编号');

            //图片上传
            $form->image('img', '图片');

            $form->text('name', '姓名');

            $form->text('zhicheng', '职称');
            
            $form->text('work_time', '年限');

            //开关
            $states = [
                'on'  => ['value' => 1, 'text' => '展示', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '不展示', 'color' => 'danger'],
            ];
            $form->switch('is_show', '展示')->states($states);

            $form->editor('jianjie', '简介');

            $form->editor('fenge', '风格');

            $form->editor('exper', '经验');
            
            // 去掉重置按钮
            $form->disableReset();

        });
    }
}
