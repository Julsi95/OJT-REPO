import './bootstrap';
import Alpine from 'alpinejs';

 
window.Alpine = Alpine
 
Alpine.start()


window.Horizontalscroll(containerId){
    const container = document.getElementById(containerId);
    let isScrolling = false;
    const tolerance = 5;

    if(!container){
        console.warn(`WWALA DAW YUNG ELEMENT BOSS`);
        return;
    }

    container.addEventListener('wheel', function(scrolling){
        const atStart = container.scrollLeft <= tolerance;
        const atend = container.scrollLeft + container.clientWidth >= container.scrollWidth - tolerance;

        const isScrollingRight = scrolling.deltaY > 0;
        const isScrollingLeft = scrolling.deltaY < 0;

        if (atStart && isScrollingLeft){
            return;
        }else if(atend && isScrollingRight){
            return;
        }else{
            scrolling.preventDefault()
            isScrolling = true;

            const Scrolldistance = window.innerWidth;

            container.scrollBy({
                left: isScrollingRight ? Scrolldistance : -Scrolldistance,
                behavior:'smooth' 
            });
            setTimeout(()=> {
                isScrolling = false;
            }, 500);
        }
    });
}

Horizontalscroll('serviceScroll');