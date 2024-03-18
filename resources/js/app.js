import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob(['../img/**']);


const buttonDelete = document.querySelectorAll('#deleteButton')

buttonDelete.forEach((button) => {


    button.addEventListener('click',(e) => {
        e.preventDefault()

        const confirmDelete = window.confirm('Vuoi veramente eliminare questa transazione?')

        if (confirmDelete) {

            const form = button.closest('form');
            form.submit();
        } else {
           
            e.preventDefault();
        }
    })
})