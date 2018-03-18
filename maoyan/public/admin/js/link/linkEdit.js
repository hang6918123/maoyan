$('#news_form').submit(function(){
    //检测标题是否为空
	var name = $('input[name=name]').val();
    if($.trim(name).length == 0){
        alert('名称不能为空');
        return false;
    }
    //检测描述是否为空
    var url = $('input[name=url]').val();
    if($.trim(url).length == 0){
        alert('地址不能为空');
        return false;
    }
});