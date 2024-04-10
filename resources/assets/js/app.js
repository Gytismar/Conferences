import './bootstrap';
require('flatpickr')
import $ from 'jquery';
window.$ = window.jQuery = $; //Accessible jquery via $
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
