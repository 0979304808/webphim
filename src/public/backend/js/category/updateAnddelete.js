$(function () {

    let data = categories.data;
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
        $('#id').val(0);
        $('#text-input').val('');
    });

    $('body').on('click', '.btn-save-category', function () {
        let text = $('#text-input').val();
        let id = $('#id').val();
        $.ajax({
            type: Number(id) !== 0 ? 'PUT' : 'POST',
            url: Number(id) !== 0 ? url_update_category : url_create_category,
            data: {
                _method: Number(id) !== 0 ? 'PUT' : 'POST',
                name: text,
                id: id,
            },
            headers: {'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')},
            success: function (response) {
                if (response.status === 200) {
                    console.log(response.data.msg)
                    if (response?.data?.name) {
                        toastr.success('Thêm thể loại thành công');
                        $('.modal').modal('hide');
                        return setInterval(() => {
                            location.reload()
                        }, 2000)
                    }
                    if (response?.data.success) {
                        toastr.success(response?.data.success)
                        $('.modal').modal('hide');
                        return setInterval(() => {
                            location.reload()
                        }, 2000)
                    }
                    if (response?.data.error) {
                        return toastr.error(response?.data.error)
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
        console.log(category);
        $('.modal #categoryModal').text('Cập nhật thể loại "' + category.name + '"');
        console.log(category.name)
        $('#text-input').val(category.name);
        $('#id').val(category.id);
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

