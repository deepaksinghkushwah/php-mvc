$(document).ready(function(){
    $('.deleteCommon').on('click', function(){
        var src = $(this).attr('data-href');
        if(confirm("Are you sure want to delete this?")){
            $.ajax({
                url: src,
                type: 'get',
                dataType: 'json',
                success: function(data){
                    alert(data.msg);
                    window.location.reload();
                }
            });
        }
    });
});
