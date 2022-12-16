$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    },
    navText: ["<img src='../../image/icon/icon-prev.svg' />", "<img src='../../image/icon/icon-next.svg' />"],
});
