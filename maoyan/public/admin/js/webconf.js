$('.mws-form').submit(function(){
    //判断标题
	var title = $('input[name=title]').val();
	if($.trim(title).length == 0){
		alert('标题不能为空');
		return false;
	}
    //判断logo
    var imgPath = $("input[name=logo]").val();
    if (imgPath != "") {
       //判断上传文件的后缀名
        var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
        if (strExtension != 'jpg' && strExtension != 'gif'
            && strExtension != 'png') {
            alert("图片文件格式不正确");
            return false;
        }
        //判断logo大小
        var size = $("input[name=logo]")[0].files[0].size;
        if(size > (2 * 1024 * 1024)){
            alert("文件大小不能超过2M");
            return false;
        } 
    }
    //判断描述
	var describe = $('input[name=describe]').val();
	if ($.trim(describe).length == 0) {
		alert('描述不能为空');
		return false;
	}
    //判断关键词
    var keyword = $('input[name=keyword]').val();
    if ($.trim(keyword).length == 0) {
        alert('关键词不能为空');
        return false;
    }
    //判断版权
    var copyright = $('input[name=copyright]').val();
    if ($.trim(copyright).length == 0) {
        alert('版权不能为空');
        return false;
    }
    //判断公司名称
    var company = $('input[name=company]').val();
    if ($.trim(company).length == 0) {
        alert('公司不能为空');
        return false;
    }
});