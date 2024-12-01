document.addEventListener('DOMContentLoaded', function () {
    const menuIconOpen = document.getElementById('menu-icon-open');
    const menuIconClose = document.getElementById('menu-icon-close');
    const menuIcons = document.getElementById('menu-icons');

    menuIcons.addEventListener('click', function () {
        if (menuIconOpen.style.display === 'none') {
            menuIconOpen.style.display = 'block';
            menuIconClose.style.display = 'none';
        } else {
            menuIconOpen.style.display = 'none';
            menuIconClose.style.display = 'block';
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const menuIconOpen = document.getElementById('menu-icon-open');
    const menuIconClose = document.getElementById('menu-icon-close');
    const menu = document.getElementById('menu');
    const menuIcons = document.getElementById('menu-icons');

    menuIcons.addEventListener('click', function () {
        if (menu.classList.contains('open')) {
            menu.classList.remove('open');
            menu.style.height = '0';
            menuIconOpen.style.display = 'block';
            menuIconClose.style.display = 'none';
        } else {
            menu.classList.add('open');
            menu.style.height = '80vh';  // Match this to the height defined in your CSS
            menuIconOpen.style.display = 'none';
            menuIconClose.style.display = 'block';
        }
    });
});