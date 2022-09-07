const progessBar = document.getElementsByClassName('progess-bar')[0]
setInterval(() => {
    const computedStyle = getComputedStyle(progessBar)
    const width = parseFloat(computedStyle.getPropertyValue('--width')) || 0
    progessBar.style.setProperty('--width', width + .1)
}, 5)