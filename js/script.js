// toggle class active
const navbarNav = document.querySelector('.navbar-nav');
// ketika dropdown menu di klik
document.querySelector('#dropdown-menu'). onclick = () => {
    navbarNav.classList.toggle('active');
};

//Klik diluar sidebar untuk menghilangkan nav
const dropdown = document.querySelector('#dropdown-menu');

document.addEventListener('click', function(e) {
    if (!dropdown.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
});
