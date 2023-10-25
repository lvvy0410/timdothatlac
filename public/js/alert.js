// user xóa bài đăng
$('.user-btn-del').on('click', function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Bạn chắc chắn xóa?',
        text: "Nội dung sẽ không thể hoàn tác lại được.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xác nhận',
        cancelButtonText: 'Hủy',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Bạn đã xóa thành công.',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
            $.get($(this).attr('href'));
            window.location.replace('/user/trangchu');
        }
    })
});



// xóa bài đăng
$('.btn-del').on('click', function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Bạn chắc chắn xóa?',
        text: "Nội dung sẽ không thể hoàn tác lại được.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xác nhận',
        cancelButtonText: 'Hủy',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Bạn đã xóa thành công.',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
            $.get($(this).attr('href'));
            window.location.replace('trang_quan_ly');
        }
    })
});

// xóa người dùng
$('.btn-del-user').on('click', function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Bạn chắc chắn xóa?',
        text: "Nội dung sẽ không thể hoàn tác lại được.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xác nhận',
        cancelButtonText: 'Hủy',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Bạn đã xóa thành công.',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
            $.get($(this).attr('href'));
            window.location.replace('danh-sach-nguoi-dung');
        }
    })
});


// xóa tiêu đề
$('.btn-del-tieu-de').on('click', function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Bạn chắc chắn xóa?',
        text: "Nội dung sẽ không thể hoàn tác lại được.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xác nhận',
        cancelButtonText: 'Hủy',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Bạn đã xóa thành công.',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
            $.get($(this).attr('href'));
            window.location.replace('danh-sach-tieu-de');
        }
    })
});

// xóa bình luận
$('.btn-del-binh-luan').on('click', function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Bạn chắc chắn xóa?',
        text: "Nội dung sẽ không thể hoàn tác lại được.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xác nhận',
        cancelButtonText: 'Hủy',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Bạn đã xóa thành công.',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
            $.get($(this).attr('href'));
            window.location.replace('danh-sach-binh-luan');
        }
    })
});

// xóa báo cáo
$('.btn-del-bao-cao').on('click', function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Bạn chắc chắn xóa?',
        text: "Nội dung sẽ không thể hoàn tác lại được.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xác nhận',
        cancelButtonText: 'Hủy',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Bạn đã xóa thành công.',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
            $.get($(this).attr('href'));
            window.location.replace('quan-ly-bao-cao');
        }
    })
});

// xóa liên hệ
$('.btn-del-lien-he').on('click', function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Bạn chắc chắn xóa?',
        text: "Nội dung sẽ không thể hoàn tác lại được.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xác nhận',
        cancelButtonText: 'Hủy',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Bạn đã xóa thành công.',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
            $.get($(this).attr('href'));
            window.location.replace('quan-ly-lien-he');
        }
    })
});