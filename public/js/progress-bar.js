const progress_bar = document.getElementById("progress-bar");

window.onscroll = () => {
    if (progress_bar == null){
        console.error('No existe el elemento con id progress-bar');
        return;
    }

    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    progress_bar.style.width = scrolled + "%";
};
