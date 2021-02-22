require('./bootstrap');

/* DELETE SUBJECT MODAL*/
const modal = document.querySelector('.modal');
const showModal = document.querySelector('.show-modal');
const closeModal = document.querySelectorAll('.close-modal');

showModal.addEventListener('click', function (){
    modal.classList.remove('hidden');
});

closeModal.forEach(close => {
    close.addEventListener('click', function (){
        modal.classList.add('hidden');
    });
});

/* SHOW REPLY COMMENT DIV  */

function toggleReplyComment(id){
    let element = document.querySelector('#replyFormDiv-' + id);
    element.classList.toggle("hidden");
}