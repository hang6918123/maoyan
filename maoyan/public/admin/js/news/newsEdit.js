$('#news_form').submit(function(){
    //检测标题是否为空
	var title = $('input[name=title]').val();
    if($.trim(title).length == 0){
        alert('标题不能为空');
        return false;
    }
    //检测描述是否为空
    var descride = $('input[name=descride]').val();
    if($.trim(descride).length == 0){
        alert('描述不能为空');
        return false;
    }
    //  判断是否有选择上传文件
    var poster = $("input[name=poster]").val();
    if (poster != "") {
        //判断上传文件后缀
        var strExtension = poster.substr(poster.lastIndexOf('.') + 1);
        if (strExtension != 'jpg' && strExtension != 'gif'
            && strExtension != 'png') {
            alert("请选择图片文件");
            return false;
        }
        //判断上传文件大小
        var size = $("input[name=poster]")[0].files[0].size;
        if(size > (2 * 1024 * 1024)){
            alert("文件大小不能超过2M");
            return false;
        }
    }
    
    //判断内容
    var arr = [];
    arr.push(UE.getEditor('editor').getContent());
    var content = arr.join("\n");
    if($.trim(content).length == 0){
        alert('内容不能为空');
        return false;
    }
});