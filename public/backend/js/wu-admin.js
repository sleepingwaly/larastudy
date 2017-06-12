/**
 * 上传图片预览
 * @param file
 */
function preview(file)
{
    var prevDiv = document.getElementById('wu-preview');
    if (file.files && file.files[0])
    {
        var reader = new FileReader();
        reader.onload = function(evt){
            prevDiv.innerHTML = '<img src="' + evt.target.result + '" />';
        }
        reader.readAsDataURL(file.files[0]);
    }
    else
    {
        prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
    }
}

$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.wu-del').on('click', function(){
        var url = $(this).data('url');
        swal({
            title: "确定删除?",
            text: "你将删除一条数据!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            cancelButtonText: "取消",
            confirmButtonText: "删除",
            closeOnConfirm: false
        }, function(){
            $.ajax({
                url: url,
                type: 'DELETE',
                success: function (res) {
                    if(res.status){
                        swal({
                            title: "Deleted!",
                            text: res.info,
                            type: 'success'
                        }, function() {
                            window.location.reload()
                        })
                    }else{
                        swal("Error", res.info, "error");
                    }
                },
                error: function (res) {
                    swal("Error", res.status+res.statusText, "error");
                }
            })
        });




    })
})