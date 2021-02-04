"use strict";
jQuery(function($) {

    // var $grid = $('.blog-grid').imagesLoaded(function () {
    var $grid = $('.blog-grid');  
    $grid.isotope({
        // options
        itemSelector: '.grid-item',
        percentPosition: true,
        layoutMode: 'packery',
        packery: {
          gutter: 32,
          // columnWidth: '.my-sizer-element',
        }
      });
    //});

    // category menu
    // $('#menu-category-menu li').click(function(event){
    //   event.preventDefault();
    // });
    $('#menu-category-menu li:first-of-type').addClass('active');
    $('#menu-category-menu li:first-of-type a').click(function(){
      location.reload();
    });
    $('#menu-category-menu li:not(:first-of-type) a').click(function (event) {
      event.preventDefault();
      $('#menu-category-menu li').removeClass('active');
      $(this).parent('li').addClass('active');
      $('.grid-item').addClass('w33p').removeClass('w60p w40p');
      var linkText = this.innerHTML;
      console.log(linkText);
      var lowText = linkText.replace(/\s+/g, '-').toLowerCase();
      console.log(lowText);
      if(lowText == 'all') {
        $grid.isotope({ filter: '*' });
      }
      else {
        $grid.isotope({ filter: '.'+lowText });
      } 
    
    })

    // infinite scroll
    // InfiniteScroll.imagesLoaded = imagesLoaded;
    var pckry = $grid.data('isotope');
    
    // var $grid = $('#macy-container');
    $grid.infiniteScroll( {
      // options
      navSelector: '.archive-pagination', // selector for the paged navigation
      nextSelector: '.pagination-next a', // selector for the NEXT link (to page 2)
      path: '.pagination-next a',
      append: '.grid-item',
      //container: '.blog-grid',
      //behavior: 'local',
      //history: false,
      outlayer: pckry,
      debug: true,
      //status: 'scroller-status',
      loading: {
        finishedMsg: 'No more posts to load.'
      },
  
  // Infinite Scroll Callback
    },
  function (newElements) {
    var $newElems = jQuery(newElements);
  //   $newElems.imagesLoaded(function(){
        $grid.isotope('appended', $newElems);
  }
  );

  // Select correct category based on url

  var segment_str = window.location.pathname; 
  var segment_array = segment_str.split( '/' );
  var last_segment = segment_array[2];
 //console.log(last_segment);
 
 if ($('body').hasClass('category-page')) {
  $('#menu-category-menu li:first-of-type a').click(function(){
    location.assign('/blog/');
  });
  if (last_segment.length > 1) {
    $('#menu-category-menu li').removeClass('active');
    $('.grid-item').addClass('w33p').removeClass('w60p w40p');
    var linkNum = $('#menu-category-menu li').length;
    //console.log(linkNum);
    var link = $('#menu-category-menu li a');
    //console.log(linkText);
    //var lowText = linkText.replace(/\s+/g, '-').toLowerCase()
    for (var i=0; i<linkNum; i++) {
      currentLink = link[i];
      currentLinkText = currentLink.innerHTML.replace(/\s+/g, '-').toLowerCase();
      //console.log('this is' + currentLinkText);
      if (currentLinkText == last_segment ) {
        $(currentLink).parent().addClass('active');
      }
    }
    //console.log(linkText);
    $grid.isotope({ filter: '.'+ last_segment });
   };
   
 }

  
   



  // Owl Carousel

  $('.owl-carousel').owlCarousel({
    loop:true,
    nav: true,
    items: 1
  });



  // Biog cards toggle

  $('.biog-link').click(function(){
    event.preventDefault();
    $('.biog-card').removeClass('toggled');
    $(this).parent('.biog-card').addClass('toggled');
  });

  $('.biog-toggle').click(function(){
    $(this).closest('.biog-card').removeClass('toggled');
  });

  // IE fix for object cover of resource listing
  
  function objectFit(image) {
    if ('objectFit' in document.documentElement.style === false && image.currentStyle['object-fit']) {
        image.style.background = 'url("' + image.src + '") no-repeat 50%/' + image.currentStyle['object-fit'];
        image.src = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='" + image.width + "' height='" + image.height + "'%3E%3C/svg%3E";
    }
}

var elem = document.getElementsByClassName('attachment-home-listing');
objectFit(elem);

});




