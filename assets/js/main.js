let btn_add_post = document.querySelector('.btn-insert-posts');
let btn_add_close = document.querySelector('.form-add-js .btn-close');

btn_add_post.addEventListener('click', function(e){
    e.preventDefault();
    document.querySelector('.form-add-js').classList.add('active-modal-form-add');
});


btn_add_close.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.form-add-js').classList.toggle('active-modal-form-add');
});

// Form Login - Verificar porque nao esta chamando este
// let btn_add_user = document.querySelector('.btn-register-user');
// let btn_close_user = document.querySelector('.login-addUser-js .btn-close');

// btn_add_user.addEventListener('click', function(e){
//     e.preventDefault();
//     console.log(document.querySelector('.login-addUser-js').classList.add('active-modal-form-add-user'));
// });


// btn_close_user.addEventListener('click', (e) => {
//     e.preventDefault();
//     document.querySelector('.login-addUser-js').classList.toggle('active-modal-form-add-user');
// });
