$('.popup-youtube').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
    iframe: {
        patterns: {
            youtube: {
                index: 'youtube.com/',
                id: function(url) {
                    var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                    if ( !m || !m[1] ) return null;
                    return m[1];
                },
                src: 'https://www.youtube.com/embed/%id%?autoplay=1'
            },

        }
    }
});


FedaPay.init('.pay-btn', {
    public_key: 'pk_live_j_PY-QiIVKuSKYi73s1VcLdH',
    transaction: {
        amount: 100,
        description: 'Acheter mon produit'
    },
    customer: {
        email: 'johndoe@gmail.com',
        lastname: 'Doe',
        firstname: 'John',
    }
});






