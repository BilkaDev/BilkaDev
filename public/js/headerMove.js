const headerTitleSpans = document.querySelectorAll('.header__box-heading-title span')



let positionStart = -45
headerTitleSpans.forEach(span => {
    positionStart = positionStart + 8.1
    span.animate([
        // keyframes
        { transform: `translate(${positionStart}vw,-55vh) scale(0.1)`,
        color: '#00adb5',

    },
        { transform: 'translateX(0px)'
    
    }
      ], {
        // timing options
        duration: 1850,
        fill: 'forwards'     });
})