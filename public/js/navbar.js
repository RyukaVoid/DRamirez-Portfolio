document.onscroll = () => {
    const navbar = document.getElementsByTagName("nav")[0];
    if (navbar == null){
        console.error('No existe el elemento con id navbar');
        return;
    }

    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    if (winScroll > 0){
        navbar.classList.remove("transparent");
    } else {
        navbar.classList.add("transparent");
    }
}
