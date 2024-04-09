import './bootstrap';
require('flatpickr')
// document.addEventListener('DOMContentLoaded',function (){
//   document.querySelectorAll('.datepicker').forEach(function (item){
//       flatpickr(item,{
//           mode:'range'
//       });
//   });
// });

$(function (){
    $(document).on('click', '#logout-btn', function(e){
        e.preventDefault();
        $('#logout-form').trigger('submit');
    });
});
