import './bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $; //Accessible jquery via $

$(function (){
    $(document).on('click', '#logout-btn', function(e){
        e.preventDefault();
        $('#logout-form').trigger('submit');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-delete]').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const isConfirmed = confirm('Are you sure you want to delete this conference?');

            if (isConfirmed) {
                this.closest('form').submit();
            }
        });
    });
});

