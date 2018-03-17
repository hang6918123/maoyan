$('.powers').click(function(){
    //判断是否选中
    if($(this).attr('checked')){
        var action = 'add';
    } else {
        var action = 'del';
    }
    //获取用户id
    var uid = $(this).attr('data');
    //获取岗位id
    var power_id = $(this).val();

    //发送请求
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/admin/auth/update',
        type: 'post',
        data: {'action':action,'uid':uid,'power_id':power_id},
        success: function(data){
            alert(data);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('操作失败');
            window.location.reload();
        }
    })
});