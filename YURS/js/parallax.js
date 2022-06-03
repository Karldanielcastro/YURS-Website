function splitScroll(){
    const controller = new ScrollMagic.Controller();

    new ScrollMagic.Scene({
        duration: '600%',
        triggerElement: '.emirates-title',
        triggerHook:0
    })
    .setPin('.emirates-title')
    .addTo(controller);
}

splitScroll();