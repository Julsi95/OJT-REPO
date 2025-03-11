<div x-data="{            
    // Sets the time between each slides in milliseconds
    autoplayIntervalTime: 4000,
    slides: [                
        {
            imgSrc: 'https://media.istockphoto.com/id/1322997394/photo/medical-technicians-doctor-looking-at-the-microscope.jpg?s=2048x2048&w=is&k=20&c=crqjFmZ4ZAtksZ1rW3TX59rMUu2PW7qxMfjMdZpvqWI=',
            imgAlt: 'lorem ipsum dolor.',  
            title: 'lorem ipsum dolor',
            description: 'lorem ipsum dolor lorem ipsum dolorlorem ipsum dolorlorem ipsum dolor.',           
        },                
        {                    
            imgSrc: 'https://images.unsplash.com/photo-1511174511562-5f7f18b874f8?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',                    
            imgAlt: 'lorem ipsum dolor.',  
            title: 'lorem ipsum dolor',
            description: 'Because not all superheroes wear capes, some wear headphones and stare at terminal screens',            
        },                
        {                    
            imgSrc: 'https://images.unsplash.com/photo-1599318142003-2570ff9dda6c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',                    
            imgAlt: 'lorem ipsum dolor.',    
            title: 'lorem ipsum dolor',
            description: 'lorem ipsum dolorlorem ipsum dolorlorem ipsum dolor lorem ipsum dolor.',       
        },            
    ],            
    currentSlideIndex: 1,
    isPaused: false,
    autoplayInterval: null,
    previous() {                
        if (this.currentSlideIndex > 1) {                    
            this.currentSlideIndex = this.currentSlideIndex - 1                
        } else {   
            // If it's the first slide, go to the last slide           
            this.currentSlideIndex = this.slides.length                
        }            
    },            
    next() {                
        if (this.currentSlideIndex < this.slides.length) {                    
            this.currentSlideIndex = this.currentSlideIndex + 1                
        } else {                 
            // If it's the last slide, go to the first slide    
            this.currentSlideIndex = 1                
        }            
    },    
    autoplay() {
        this.autoplayInterval = setInterval(() => {
            if (! this.isPaused) {
                this.next()
            }
        }, this.autoplayIntervalTime)
    },
    // Updates interval time   
    setAutoplayInterval(newIntervalTime) {
        clearInterval(this.autoplayInterval)
        this.autoplayIntervalTime = newIntervalTime
        this.autoplay()
    },    
}" x-init="autoplay" class="relative w-full overflow-hidden">
   
    <!-- slides -->
    <!-- Change min-h-[50svh] to your preferred height size -->
    <div class="relative min-h-[30svh] lg:min-h-[60svh] w-full">
        <template x-for="(slide, index) in slides">
            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                
                <!-- Title and description -->
                <div class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-linear-to-t from-surface-dark/85 to-transparent px-16 py-12 text-center">
                    <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                    <p class="lg:w-1/2 w-full text-pretty text-sm text-white" x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                </div>

                <img class="absolute w-full h-full inset-0 object-cover object-[50%_20%] text-on-surface" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
            </div>
        </template>
    </div>
    
    <!-- indicators -->
    <div class="absolute rounded-radius bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides" >
        <template x-for="(slide, index) in slides">
            <button class="size-2 rounded-full transition" x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-white' : 'bg-gray-500']" x-bind:aria-label="'slide ' + (index + 1)"></button>
        </template>
    </div>
</div>