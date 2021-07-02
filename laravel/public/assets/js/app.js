// Slider functionality
let position = 0;
const slidesVisible = 3;
const slidesOnScroll = 3;
const container = document.querySelector('.slider-container');
const track = document.querySelector('.slider-track');
const prevBtn = document.querySelector('.btn-prev');
const nextBtn = document.querySelector('.btn-next');
const items = document.querySelectorAll('.slider-item');
const itemCount = items.length;
const itemWidth = container.clientWidth / slidesVisible;
const movePosition = slidesOnScroll * itemWidth;

items.forEach((item) => {
    item.style.minWidth = `${itemWidth}px`;
});

prevBtn.addEventListener('click', () => {
    const itemsLeft =  Math.abs(position) / itemWidth;
    position += itemsLeft >= slidesOnScroll ? movePosition : itemsLeft * itemWidth;
    
    setPosition();
    checkBtns();
});
nextBtn.addEventListener('click', () => {
    const itemsLeft = itemCount - (Math.abs(position) + slidesVisible * itemWidth) / itemWidth;
    position -= itemsLeft >= slidesOnScroll ? movePosition : itemsLeft * itemWidth;
    
    setPosition();
    checkBtns();
});

const setPosition = () => {
    track.style.transform = `translateX(${position}px)`;
};

const checkBtns = () => {
    prevBtn.disabled = position === 0;
    nextBtn.disabled = position <= -(itemCount - slidesVisible) * itemWidth;
};

checkBtns();
