import './bootstrap';
import Alpine from 'alpinejs';

 
window.Alpine = Alpine
 
Alpine.start()


function Horizontalscroll(containerId) {
    const container = document.getElementById(containerId);
    let isScrolling = false;
    const tolerance = 5;

    if (!container) {
        console.warn(`❌ Element "${containerId}" not found!`);
        return;
    }


    container.addEventListener("wheel", function (scrolling) {
        const atStart = container.scrollLeft <= tolerance;
        const atend = container.scrollLeft + container.clientWidth >= container.scrollWidth - tolerance;

        const isScrollingRight = scrolling.deltaY > 0;
        const isScrollingLeft = scrolling.deltaY < 0;

        if ((atStart && isScrollingLeft) || (atend && isScrollingRight)) {
            return;
        } else {
            scrolling.preventDefault();
            isScrolling = true;

            const Scrolldistance = window.innerWidth;

            container.scrollBy({
                left: isScrollingRight ? Scrolldistance : -Scrolldistance,
                behavior: "smooth",
            });

            setTimeout(() => {
                isScrolling = false;
            }, 500);
        }
    });
}

// Wait for the element to appear before initializing
function waitForElement(containerId, callback) {
    let checkExist = setInterval(() => {
        let container = document.getElementById(containerId);
        if (container) {
            clearInterval(checkExist);
            callback(containerId);
        }
    }, 300); // Check every 300ms
}

// Ensure the function runs in different Laravel scenarios
document.addEventListener("DOMContentLoaded", () => {
    waitForElement("serviceScroll", Horizontalscroll);
});
document.addEventListener("inertia:load", () => {
    waitForElement("serviceScroll", Horizontalscroll);
});
Livewire.hook("message.processed", () => {
    waitForElement("serviceScroll", Horizontalscroll);
});

