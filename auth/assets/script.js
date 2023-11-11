const container = document.getElementById('container');
const resetBtn = document.getElementById('reset');
const loginBtn = document.getElementById('login');

resetBtn.addEventListener('click', () => {
    container.classList.add("active"); 
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});