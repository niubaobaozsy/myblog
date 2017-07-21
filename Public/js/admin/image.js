/**
 * 图片上传功能，插件uploadify内置的方法
 */
$(function() {
    $('#file_upload').uploadify({
        'auto': true,
        'method':'post',
        'swf'      : SCOPE.ajax_upload_swf,
        'uploader' : SCOPE.ajax_upload_image_url,
        'buttonText': '上传图片',
        'fileTypeDesc': 'Image Files',
        'fileObjName' : 'file',
        //允许上传的文件后缀
        'fileTypeExts': '*.gif; *.jpg; *.png',
        'onUploadSuccess' : function(file,data,response) {
            // response true ,false
            if(response) {
                var obj = JSON.parse(data);

                $('#' + file.id).find('.data').html(' 上传完毕');
                var src = '/blog' + obj.data;
                console.log(src);
                $("#upload_org_code_img").attr("src", src);//设置属性的值
                $("#file_upload_image").attr('value',obj.data);
                $("#upload_org_code_img").show();
            }else{
                alert('上传失败');
            }
        },
    });
});



