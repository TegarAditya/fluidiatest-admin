function runKatex() {
    if (typeof renderMathInElement !== 'undefined') {
        renderMathInElement(document.body, {
            delimiters: [
                { left: "$$", right: "$$", display: true },
                { left: "$", right: "$", display: false }
            ],
            throwOnError: true,
        });
    }
}

window.renderKatexMath = runKatex;

document.addEventListener("DOMContentLoaded", runKatex);
document.addEventListener("livewire:load", runKatex);
document.addEventListener("livewire:update", runKatex);
document.addEventListener("livewire:navigated", runKatex);
document.addEventListener("livewire:rendered", runKatex);
document.addEventListener("turbo:frame-load", runKatex);
document.addEventListener("render-katex", runKatex);