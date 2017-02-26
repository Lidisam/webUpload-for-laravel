<?php namespace Lisam\Webupload;


class Webupload
{

    /**
     * constructor.
     */
    public function __construct()
    {
    }

    public function render()
    {
//        return view('Toastr::toastr', compact('javascript'));
    }

    /**
     * css资源文件
     */
    public function css()
    {
        echo '<link rel="stylesheet" type="text/css" href="/packages/webUpload/css/webuploader.css" />' . PHP_EOL;
        echo '<link rel="stylesheet" type="text/css" href="/packages/webUpload/css/style.css"/>' . PHP_EOL;
    }

    /**
     * js资源文件
     */
    public function js()
    {
        echo '<script type="text/javascript" src="/packages/webUpload/js/jquery.js"></script>' . PHP_EOL;
        echo '<script type="text/javascript" src="/packages/webUpload/js/webuploader.js"></script>' . PHP_EOL;
        echo '<script type="text/javascript" src="/packages/webUpload/js/upload.js"></script>' . PHP_EOL;
    }

    /**
     * 主体内容
     */
    public function content()
    {
        echo '<div id="wrapper">' .
            '<div id="container">' .
            '<div id="uploader">' .
            '<div class="queueList">' .
            '<div id="dndArea" class="placeholder">' .
            '<div id="filePicker"></div>' .
            '<p>或将照片拖到这里，单次最多可选300张</p>' .
            '</div>' .
            '</div>' .
            '<div class="statusBar" style="display:none;">' .
            '<div class="progress">' .
            '<span class="text">0%</span>' .
            '<span class="percentage"></span>' .
            '</div>' .
            '<div class="info"></div>' .
            '<div class="btns">' .
            '<div id="filePicker2"></div>' .
            '<div class="uploadBtn">开始上传</div>' .
            '</div>' .
            '</div>' .
            '</div>' .
            '</div>' .
            '</div>';
    }
}