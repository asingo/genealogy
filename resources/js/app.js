import 'flowbite';
// import Swal from 'sweetalert2';
// import $ from "jquery";
// window.$ = $;
// function action(name, config, id, approve) {
//     let text;
//     let url;
//     let type;
//     switch (config) {
//         case 'add':
//             title = "Tambah Data"
//             text = "Apakah anda yakin untuk Tambah Data?";
//             url = '/families/action/create';
//             icon = "question";
//             break;
//         case 'delete':
//             text = 'Hapus Data';
//             url = '/families/action/delete';
//             text = 'Apakah anda yakin untuk menghapus data?'
//             icon = "warning";
//             break;
//         case 'edit':
//             title = 'Ubah Data'
//             text = 'Apakah anda yakin untuk mengubah data?';
//             url = '/families/action/edit';
//             type = 'text';
//             icon = 'question';
//             break;
//     }
//     new Swal({
//         title: title,
//         text: text,
//         icon: icon,
//         allowOutsideClick: false,
//         showCloseButton: true,
//         customClass: {
//             popup: 'drop-shadow-main rounded-2xl',
//             confirmButton: '!bg-primary hover:bg-primaryHover !rounded-2xl focus:border-none focus:ring-none !shadow-none',
//             input: 'bg-gray-100 border-none rounded-xl active:ring-primary focus:border-primary focus:ring-primary'
//         },
//     })
//         .then((result) => {
//             if (result.isConfirmed) {
//                 $.ajaxSetup({
//                     headers: {
//                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
//                     }
//                 });
//                 $.ajax({
//                     type: "POST",
//                     url: url,
//
//                     data: {
//                         id: id,
//                         approve: approve,
//                         reason: $('#swal2-input').val()
//                     },
//                     success: function () {
//                         new Swal({
//                             title: "Yuhu! Berhasil " + text + " !",
//                             icon: "success",
//                             customClass: {
//                                 popup: 'drop-shadow-main rounded-2xl',
//                                 confirmButton: '!bg-primary hover:bg-primaryHover !rounded-2xl focus:border-none focus:ring-none !shadow-none',
//                                 input: 'bg-gray-100 border-none rounded-xl active:ring-primary focus:border-primary focus:ring-primary'
//                             },
//                         }).then(
//                             (result) => {
//                                 if (result.isConfirmed) {
//                                     location.reload();
//                                 }
//                             }
//                         );
//                     }
//                 })
//                 ;
//             } else {
//                 new Swal({
//                     title: "Aksi dibatalkan",
//                     icon: "error",
//                     customClass: {
//                         popup: 'drop-shadow-main rounded-2xl',
//                         confirmButton: '!bg-primary hover:bg-primaryHover !rounded-2xl focus:border-none focus:ring-none !shadow-none',
//                         input: 'bg-gray-100 border-none rounded-xl active:ring-primary focus:border-primary focus:ring-primary'
//                     },
//                 });
//             }
//         });
// }
//
// window.requestAlert = requestAlert;
