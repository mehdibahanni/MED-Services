
// handle dorck mode
const modeSwitch = document.getElementById('mode-switch');
const body = document.body;

modeSwitch.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
})
document.getElementById('darkModeToggle').addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
})
// JavaScript to toggle dark mode
const darkModeToggle = document.querySelector('#darkModeToggle');

// Check for saved dark mode preference
const isDarkMode = localStorage.getItem('darkMode') === 'true';
if (isDarkMode) {
    body.classList.add('dark-mode');
}

// Toggle dark mode on button click
darkModeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    // Store dark mode preference in localStorage
    localStorage.setItem('darkMode', body.classList.contains('dark-mode'));
});

let prevScrollpos = window.pageYOffset;
    const navbar = document.querySelector(".navbar");

    window.addEventListener('scroll', function() {
        let currentScrollPos = window.pageYOffset;

        if (prevScrollpos > currentScrollPos) {
            navbar.style.top = "0";
            navbar.style.transition = "top 0.3s";
        } else {
            navbar.style.top = `-${navbar.offsetHeight}px`; // Use navbar height for dynamic hiding
        }
        
        prevScrollpos = currentScrollPos;
    });
