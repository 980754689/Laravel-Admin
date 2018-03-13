<?php

namespace App\Admin\Controllers;

use App\Admin\Models\Cases;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CasesController extends Controller
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

            $content->header('案例管理');
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

            $content->header('案例管理');
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

            $content->header('案例管理');
            $content->description('创建');

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
        return Admin::grid(Cases::class, function (Grid $grid) {

            $grid->id('编号')->sortable();
            $grid->title('标题');
            $grid->address('项目地址'); 
            $grid->area('地区');

            $grid->type_id('所属分类')->display(function ($type_id) {
                $title =json_decode(Cases::type($type_id)) ;
                $title = $title['0'];
                return "<span style='font-size: 100%;' class='label label-warning'>$title</span>";
            });

            // $grid->img('图像')->image(); 

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
        return Admin::form(Cases::class, function (Form $form) {

            $form->display('id', '编号');

            $form->text('title', '标题')->rules('required');

            $form->image('img', '图片');
            // $form->image('img', '图片')->move($dir, $name);

            $form->text('address', '项目地址')->rules('required');

            $form->text('area', '地区')->rules('required');

            $form->editor('content', '项目介绍');

            $form->radio('seat', '初始位置')->options(['200' => '200', '400' => '400', '600' => '600'])->default('200');

            $form->select('type_id', '所属分类')->options( Cases::casetypelist() );

            $states = [
                'on'  => ['value' => 1, 'text' => '打开', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '关闭', 'color' => 'danger'],
            ];
            $form->switch('is_show', '展示')->states($states);

            $form->display( 'created_at', '创建时间');
            $form->display( 'updated_at', '修改时间');

        });
    }
}
