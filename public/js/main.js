// const navItems = document.querySelector('.nav_items');
// const openNavBtn = document.querySelector('#open_nav_btn');
// const closeNavBtn = document.querySelector('#close_nav_btn');
//
// //opens nav menu
// const openNav = () => {
//     navItems.style.display = 'flex';
//     openNavBtn.style.display = 'none';
//     closeNavBtn.style.display = 'inline-block';
// }
//
// //close nav menu
// const closeNav = () => {
//     navItems.style.display = 'none';
//     openNavBtn.style.display = 'inline-block';
//     closeNavBtn.style.display = 'none';
// }
// openNavBtn.addEventListener('click', openNav);
// closeNavBtn.addEventListener('click', closeNav);

//quiz on click submit post data
const imageInputs = document.querySelectorAll('.dog-input');
if (imageInputs) {
    imageInputs.forEach(imageInput => {
        imageInput.addEventListener('click', () => {
            imageInput.closest('form').submit()
            // const form = document.getElementById('dog-form')
            // form.submit()
        })
    })
}