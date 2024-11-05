// JavaScript animations on hover
document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mouseover', () => {
        card.classList.add('hover-effect');
    });
    card.addEventListener('mouseout', () => {
        card.classList.remove('hover-effect');
    });
});
