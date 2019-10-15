function App() {

    let that = this;
    this.init = function() {
      this.slider();
      this.mobileMenuOpen();
      this.scrollToCallback();
    };

    this.slider = function () {
      $('.js-slider').slick({
        slidesToShow: 4,
        arrows: false,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
    }

    this.scrollToCallback =  function() {
      $('.js-header-callback').on('click', function() {
        document.querySelector('#callback').scrollIntoView({
          behavior: "smooth"
        });
      })
    }
     
    this.mobileMenuOpen = function() {
      $('.js-header__mobile-menu').on('click', function() {
        $('.header__nav').addClass('opened');
      })
      $('.header__mobile-menu_close').on('click', function() {
        $('.header__nav').removeClass('opened');
      })
    }
    
    
}

const app = new App();
app.init();    

