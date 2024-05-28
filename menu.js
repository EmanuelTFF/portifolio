document.addEventListener('DOMContentLoaded', function() {
    // Seleciona todos os links de navegação
    const menuLinks = document.querySelectorAll('nav ul li a');

    // Adiciona um ouvinte de evento de clique a cada link
    menuLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Previne o comportamento padrão do link
            e.preventDefault();

            // Pega o ID da seção para rolar até
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            // Rola suavemente até a seção desejada
            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            });

            // Fecha o menu mobile, se estiver aberto
            const menuMobile = document.getElementById('menu-mobile');
            const overlayMenu = document.getElementById('overlay-menu');
            if (menuMobile.style.display === 'block') {
                menuMobile.style.display = 'none';
                overlayMenu.style.display = 'none';
            }
        });
    });

    // Menu mobile toggle
    const btnMenu = document.getElementById('btn-menu');
    const btnFechar = document.querySelector('.btn-fechar');
    const menuMobile = document.getElementById('menu-mobile');
    const overlayMenu = document.getElementById('overlay-menu');

    btnMenu.addEventListener('click', function() {
        menuMobile.style.display = 'flex';
        overlayMenu.style.display = 'block';
    });

    btnFechar.addEventListener('click', function() {
        menuMobile.style.display = 'none';
        overlayMenu.style.display = 'none';
    });

    overlayMenu.addEventListener('click', function() {
        menuMobile.style.display = 'none';
        overlayMenu.style.display = 'none';
    });
});
