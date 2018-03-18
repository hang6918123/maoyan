//用户状态修改
$('.state').click(function(){
	var uid = $(this).attr('data');
	var state = $(this).find("i").attr('data');

	$.ajax({
		headers: {
    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		type: "post",
		url: "/admin/user/update/"+uid,
		data: {"uid":uid,"state":state},
		dataType: "json",
		success: function(data){
			if(data.state){
				$(".state[data="+data.uid+"]").html('<i class="icon-minus-sign states" data="0"></i>');
			} else {
				$(".state[data="+data.uid+"]").html('<i class="icon-ok-sign states" data="1"></i>');
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			$('.error').css('display','block');
			$('.error').html('<font style="vertical-align: inherit;">用户状态修改失败</font>');
		}
	});
});
//删除用户
$('.user_del').click(function(){
    if(confirm('是否确认删除')){
        var uid = $(this).attr('data')
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, 
            url: "/admin/user/destroy/"+uid,
            type: "post",
            data: {"uid":uid},
            dataType: "json",
            success: function(data){
                $('tr[data='+data.id+']').remove();
                alert(data.str);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown){
                $('.error').css('display','block');
                $('.error').html('<font style="vertical-align: inherit;">删除失败</font>');
            }
        });
    }
});