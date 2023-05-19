jQuery(document).ready(function( $ ) {
   $("#menu").mmenu({
      "extensions": [
         "pagedim-black",
         "theme-white",
         "effect-menu-slide",
         "effect-listitems-slide",
         "shadow-page",
      ],
      "offCanvas": {
         zposition   : "front",
         position    : "right"
      },
      "counters": true,
      "navbars": [
         {
            "position": "top",
            "content": [
              '<img src="/images/logo.svg" class="img-responsive" alt="Image">'
            ]
         },
         {
            "position": "top"
         },
         {
            "position": "bottom",
            "content": [
               "<a class='fa fa-envelope' href='mailto:info@isotechlb.com'></a>",
               "<a class='fa fa-facebook' href='https://www.facebook.com/isotechlb/' target='_blank'></a>",
               "<a class='fa fa-instagram' href='https://www.instagram.com/isotech_lebanon/' target='_blank'></a>",
               "<a class='fa fa-linkedin' href='https://lb.linkedin.com/company/isotech-co' target='_blank'></a>"
            ]
         }
      ]
   });
});