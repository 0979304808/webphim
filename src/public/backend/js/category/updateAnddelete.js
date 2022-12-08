$(function () {

    let data = categories;

    $('.btn-delete-category').click(function () {
        let id = $(this).data('id');
        let name = $(this).data('name');
        alertify.confirm("Bạn có muốn xóa thể loại '" + name + "' này không ?", function (e) {
            if (e) {
                $.ajax({
                    type: "POST",
                    url: url_delete_category,
                    data: {
                        _method: 'DELETE',
                        id: id,
                    },
                    headers: {'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')},
                    success: function (response) {
                        if (response.status === 200) {
                            $(".record_jlpt" + id).remove();
                            toastr.success('Xóa thành công')
                        }
                    },
                    error: function (res) {
                        console.log(res)
                        toastr.error('Xóa thất bại')
                    }
                });
            }
        });
    });

    // Tạo mới
    $('body').on('click', '.btn-add-category', function () {
        $('.modal #categoryModal').text('Thêm thể loại mới');
    });

    $('body').on('click', '.btn-save-category', function () {
        let text = $('#text-input').val();
        $.ajax({
            type: "POST",
            url: url_create_category,
            data: {
                _method: 'POST',
                name: text,
            },
            headers: {'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')},
            success: function (response) {
                if (response.status === 200) {
                    if (response?.data?.name) {
                        toastr.success('Thêm thể loại thành công');
                        $('.modal').modal('hide');
                        return setInterval(() => {
                            location.reload()
                        }, 2000)
                    }
                    return toastr.error(response?.data)
                }
            },
            error: function (res) {
                console.log(res);
                toastr.error('Thêm thể loại không thành công')
            }
        });
    });

    // SHOW
    $('body').on('click', '.btn-show-category', function () {
        let id = $(this).data('id');
        let category = data.find((value) => value.id === id);
        $('.modal #categoryModal').text('Cập nhật thể loại "' + category.name + '"');

        // $.ajax({
        //     type: "GET",
        //     url: url_show_category,
        //     data: {
        //         _method : 'GET',
        //         id: id,
        //     },
        //     headers: {'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')},
        //     success: function (response) {
        //         if(response.status === 200){
        //             console.log(response)
        //             // $(".record_jlpt"+id).remove();
        //             // toastr.success('Xóa thành công')
        //         }
        //     },
        //     error: function (res) {
        //         console.log(res)
        //         // toastr.error('Xóa thất bại')
        //     }
        // });
    })

});

