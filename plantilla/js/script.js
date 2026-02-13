document.addEventListener('DOMContentLoaded', () => {
    const mobileBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.querySelector('.nav-menu');

    if (mobileBtn) {
        mobileBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    }

    // Optional: Add logic for mobile dropdowns if needed
    // Currently, hover effect works on desktop, but mobile needs click approach
    const dropdowns = document.querySelectorAll('.dropdown > a');
    dropdowns.forEach(drop => {
        drop.addEventListener('click', (e) => {
            if (window.innerWidth <= 1024) {
                e.preventDefault();
                const parent = drop.parentElement;
                parent.querySelector('.dropdown-content').style.display = 
                    parent.querySelector('.dropdown-content').style.display === 'block' ? 'none' : 'block';
            }
        });
    });
});
