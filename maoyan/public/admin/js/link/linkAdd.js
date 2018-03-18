$('.mws-form').submit(function(){
	var name = $('input[name=name]').val();
    if($.trim(name).length == 0){
        alert('名称不能为空');
        return false;
    }

    var url = $('input[name=url]').val();
    if($.trim(url).length == 0){
        alert('地址不能为空');
        return false;
    }
});