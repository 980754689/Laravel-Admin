<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */
use App\Admin\Extensions\Form\CKEditor;
use Encore\Admin\Form;
Form::extend('ckeditor', CKEditor::class);

use App\Admin\Extensions\Form\WangEditor;
//设置去掉地图和富文本编辑
//Encore\Admin\Form::forget(['map', 'editor']);

//重写内置视图
app('view')->prependNamespace('admin', resource_path('views/admin/'));
//设置wangeditor编辑器
Form::extend('editor', WangEditor::class);
