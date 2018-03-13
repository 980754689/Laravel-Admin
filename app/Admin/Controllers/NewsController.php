<?php

namespace App\Admin\Controllers;

use App\Admin\Models\News;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class NewsController extends Controller
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

            $content->header('新闻管理');
            $content->description('新闻列表');

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

            $content->header('新闻管理');
            $content->description('新闻列表');

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

            $content->header('新闻管理');
            $content->description('新闻列表');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(News::class, function (Grid $grid) {

            $grid->id('编号')->sortable();
            
            $grid->title('标题');

            // 分类名
            $grid->type_id('所属分类')->display(function ($type_id) {
                $title =json_decode(News::type($type_id)) ;
                $title = $title['0'];
                return "<span style='font-size: 100%;' class='label label-warning'>$title</span>";
            });

            $grid->content_1('简介')->style('width:600px'); 

            $grid->is_show('展示')->display(function ($is_show) {
                return $is_show ? '展示' : '不展示';
            });

            $grid->orderby('排序')->sortable();
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
        return Admin::form(News::class, function (Form $form) {

            $form->display('id', '编号');

            $form->text('title', '标题')->rules('required|min:3');

            //图片上传
            $form->image('img', '图片');

            $form->select('type_id', '所属分类')->options( News::new_type() );

            $form->text('orderby', '排序');

            $form->radio('seat', '初始位置')->options(['200' => '200', '400' => '400', '600' => '600'])->default('200');
            
            //开关
            $states = [
                'on'  => ['value' => 1, 'text' => '展示', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => '不展示', 'color' => 'danger'],
            ];
            $form->switch('is_show', '展示')->states($states);

            $form->textarea('content_1', '简介')->rules('required|min:10');

            $form->ckeditor('content_2', '内容');

            //去掉重置按钮
            $form->disableReset();
            
        });
    }


}
