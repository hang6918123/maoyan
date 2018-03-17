//岗位添加表显示隐藏
$('#station_add').click(function(){
    $('#auth_show').css('display','none');
    $('#station_show').css('display','block');
    $('input[name=pid]').val(0);
});

$('#station_out').click(function(){
    $('#auth_show').css('display','block');
    $('#station_show').css('display','none');
});
//权限添表显示隐藏
$('#power_out').click(function(){
    $('#auth_show').css('display','block');
    $('#power_show').css('display','none');
});

$('#power_add').click(function(){
    var station = $('select[name=station]').val();
    if(station){
        $('#auth_show').css('display','none');
        $('#power_show').css('display','block');
        $('input[name=pid]').val(station);
    } else {
        alert('请选择岗位');
    }
});
//权限添加检测提交
$('#power').click(function(){
    var power_val = $('#power_title').val();
    if($.trim(power_val).length == 0){
        alert('权限名称不能为空');
        return false;
    }
    var route_val = $('input[name=route]').val();
    if($.trim(route_val).length == 0){
        alert('权限路由不能为空');
        return false;
    }
    var pid = $('input[name=pid]').val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/admin/auth/create',
        type: 'post',
        data: {'title':power_val,'route':route_val,'pid':pid},
        success: function(data){
            alert('添加成功');
            window.location.reload();
        },
        error: function(){
            alert('添加失败');
        }
    });
});
//岗位添加检测提交
$('#station').click(function(){
    var station_val = $('#station_title').val();
    if($.trim(station_val).length == 0){
        alert('岗位名称不能为空');
        return false;
    }
    var pid = $('input[name=pid]').val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/admin/auth/create',
        type: 'post',
        data: {'title':station_val,'pid':pid},
        success: function(data){
            alert(data);
            window.location.reload();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('添加失败');
        }
    });
});
//岗位删除
$('#station_del').click(function(){
    var station = $('select[name=station]').val();
    if(station){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/auth/delete',
            type: 'post',
            data: {'id':station},
            success: function(data){
                alert(data);
                window.location.reload();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown){
                alert('删除失败');
            }
        });
    } else {
        alert('请选择岗位');
    }
});
//权限删除
$('#power_del').click(function(){
    var power = $('select[name=power]').val();
    if(power){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/auth/delete',
            type: 'post',
            data: {'id':power},
            success: function(data){
                alert(data);
                window.location.reload();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown){
                alert('删除失败');
            }
        });
    } else {
        alert('请选择权限');
    }
});

$('select[name=station]').change(function(){
    var station = $(this).val();
    if(station){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/auth/show',
            type: 'post',
            data: {'pid':station},
            dataType: 'json',
            success: function(data){
                var strs = '<option value="">权限</option>';
                if(data.length > 0){
                    $.each(data,function(i,item){
                        strs += '<option value="'+item.id+'">'+item.title+'</option>'
                    });
                }
                $('select[name=power]').html(strs);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown){
                alert('权限查找失败');
            }
        });
    } else {
        $('select[name=power]').html('<option value="">权限</option>');
    }
});