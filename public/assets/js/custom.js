$(function() {
    'use strict'

    // ______________LOADER
    $("#global-loader").fadeOut("slow");


    // This template is mobile first so active menu in navbar
    // has submenu displayed by default but not in desktop
    // so the code below will hide the active menu if it's in desktop
    if (window.matchMedia('(min-width: 992px)').matches) {
        $('.main-navbar .active').removeClass('show');
        $('.main-header-menu .active').removeClass('show');
    }
    // Shows header dropdown while hiding others
    $('.main-header .dropdown > a').on('click', function(e) {
        e.preventDefault();
        $(this).parent().toggleClass('show');
        $(this).parent().siblings().removeClass('show');
        $(this).find('.drop-flag').removeClass('show');
    });
    $('.country-flag1').on('click', function(e) {

        $(this).parent().toggleClass('show');
        $('.main-header .dropdown > a').parent().siblings().removeClass('show');
    });

    // ______________Full screen
    $(document).on("click", ".full-screen", function toggleFullScreen() {
        $('html').addClass('fullscreen-button');
        if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
            if (document.documentElement.requestFullScreen) {
                document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
                document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            } else if (document.documentElement.msRequestFullscreen) {
                document.documentElement.msRequestFullscreen();
            }
        } else {
            $('html').removeClass('fullscreen-button');
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        }
    })


    // ______________Cover Image
    $(".cover-image").each(function() {
        var attr = $(this).attr('data-bs-image-src');
        if (typeof attr !== typeof undefined && attr !== false) {
            $(this).css('background', 'url(' + attr + ') center center');
        }
    });


    // ______________Toast
    $(".toast").toast();

    /* Headerfixed */
    $(window).on("scroll", function(e) {
        if ($(window).scrollTop() >= 66) {
            $('main-header').addClass('fixed-header');
        } else {
            $('.main-header').removeClass('fixed-header');
        }
    });

    // ______________Search
    $('body, .main-header form[role="search"] button[type="reset"]').on('click keyup', function(event) {
        if (event.which == 27 && $('.main-header form[role="search"]').hasClass('active') ||
            $(event.currentTarget).attr('type') == 'reset') {
            closeSearch();
        }
    });

    function closeSearch() {
        var $form = $('.main-header form[role="search"].active')
        $form.find('input').val('');
        $form.removeClass('active');
    }
    // Show Search if form is not active // event.preventDefault() is important, this prevents the form from submitting
    $(document).on('click', '.main-header form[role="search"]:not(.active) button[type="submit"]', function(event) {
        event.preventDefault();
        var $form = $(this).closest('form'),
            $input = $form.find('input');
        $form.addClass('active');
        $input.focus();
    });
    // if your form is ajax remember to call `closeSearch()` to close the search container
    $(document).on('click', '.main-header form[role="search"].active button[type="submit"]', function(event) {
        event.preventDefault();
        var $form = $(this).closest('form'),
            $input = $form.find('input');
        $('#showSearchTerm').text($input.val());
        closeSearch()
    });



    /* ----------------------------------- */

    // Showing submenu in navbar while hiding previous open submenu
    $('.main-navbar .with-sub').on('click', function(e) {
        e.preventDefault();
        $(this).parent().toggleClass('show');
        $(this).parent().siblings().removeClass('show');
    });
    // this will hide dropdown menu from open in mobile
    $('.dropdown-menu .main-header-arrow').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.dropdown').removeClass('show');
    });
    // this will show navbar in left for mobile only
    $('#mainNavShow, #azNavbarShow').on('click', function(e) {
        e.preventDefault();
        $('body').addClass('main-navbar-show');
    });
    // this will hide currently open content of page
    // only works for mobile
    $('#mainContentLeftShow').on('click touch', function(e) {
        e.preventDefault();
        $('body').addClass('main-content-left-show');
    });
    // This will hide left content from showing up in mobile only
    $('#mainContentLeftHide').on('click touch', function(e) {
        e.preventDefault();
        $('body').removeClass('main-content-left-show');
    });
    // this will hide content body from showing up in mobile only
    $('#mainContentBodyHide').on('click touch', function(e) {
        e.preventDefault();
        $('body').removeClass('main-content-body-show');
    })
    // navbar backdrop for mobile only
    $('body').append('<div class="main-navbar-backdrop"></div>');
    $('.main-navbar-backdrop').on('click touchstart', function() {
        $('body').removeClass('main-navbar-show');
    });
    // Close dropdown menu of header menu
    $(document).on('click touchstart', function(e) {
        e.stopPropagation();
        // closing of dropdown menu in header when clicking outside of it
        var dropTarg = $(e.target).closest('.main-header .dropdown').length;
        if (!dropTarg) {
            $('.main-header .dropdown').removeClass('show');
        }
        // closing nav sub menu of header when clicking outside of it
        if (window.matchMedia('(min-width: 992px)').matches) {
            // Navbar
            var navTarg = $(e.target).closest('.main-navbar .nav-item').length;
            if (!navTarg) {
                $('.main-navbar .show').removeClass('show');
            }
            // Header Menu
            var menuTarg = $(e.target).closest('.main-header-menu .nav-item').length;
            if (!menuTarg) {
                $('.main-header-menu .show').removeClass('show');
            }
            if ($(e.target).hasClass('main-menu-sub-mega')) {
                $('.main-header-menu .show').removeClass('show');
            }
        } else {
            //
            if (!$(e.target).closest('#mainMenuShow').length) {
                var hm = $(e.target).closest('.main-header-menu').length;
                if (!hm) {
                    $('body').removeClass('main-header-menu-show');
                }
            }
        }
    });
    $('#mainMenuShow').on('click', function(e) {
        e.preventDefault();
        $('body').toggleClass('main-header-menu-show');
    })
    $('.main-header-menu .with-sub').on('click', function(e) {
        e.preventDefault();
        $(this).parent().toggleClass('show');
        $(this).parent().siblings().removeClass('show');
    })
    $('.main-header-menu-header .close').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('main-header-menu-show');
    })

    $(".card-header-right .card-option .fe fe-chevron-left").on("click", function() {
        var a = $(this);
        if (a.hasClass("icofont-simple-right")) {
            a.parents(".card-option").animate({
                width: "35px",
            })
        } else {
            a.parents(".card-option").animate({
                width: "180px",
            })
        }
        $(this).toggleClass("fe fe-chevron-right").fadeIn("slow")
    });

    // ___________TOOLTIP
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })


    // __________POPOVER
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })


    // Enable Eva-icons with SVG markup
    eva.replace();


    // ______________Horizontal-menu Active Class
    $(document).ready(function() {
        $(".horizontalMenu-list li a").each(function() {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().click(); // click the item to make it drop
            }
        });
    });


    // ______________Active Class
    $(document).ready(function() {
        $(".horizontalMenu-list li a").each(function() {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().click(); // click the item to make it drop
            }
        });
        $(".horizontal-megamenu li a").each(function() {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().parent().parent().parent().parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().click(); // click the item to make it drop
            }
        });
        $(".horizontalMenu-list .sub-menu .sub-menu li a").each(function() {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().click(); // click the item to make it drop
            }
        });
    });


    // ______________ Back to Top

    var btn = $('#back-to-top');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

    // Custom Jquery
    $('.user-reply #reply').click(function(e) {
      e.preventDefault();
      var target = $(this).parents().children(".reply-box");
      $(target).slideToggle(1000, () => {
        $(this).css('display', 'block');
      });
    });
});

// Custom JS

// Daily Active Users Chart
var options = {
    series: [{
      data: [{
        x: 'Mon',
        y: [3, 5],
      }, {
        x: 'Tue',
        y: [1,2]
      }, {
        x: 'Wed',
        y: [5, 6]
      }, {
        x: 'Thu',
        y: [4, 6]
      }, {
        x: 'Fri',
        y: [2, 5]
      }, {
        x: 'Sat',
        y: [1.9, 4.5]
      }, {
        x: 'Sun',
        y: [2, 6]
      }]
  }],
    chart: {
    type: 'rangeBar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: false,
      borderRadius: 15,
      borderRadiusApplication: 'around',
      borderRadiusWhenStacked: 'last',    
    }
  },
  dataLabels: {
    enabled: true
  },
  colors:['#5F6A9A'],
  xaxis: {
      crosshairs: {
          width: 1,
      },
  }
  };

  var chart = new ApexCharts(document.querySelector("#chartDailyActiveUsers"), options);
  chart.render();


// Monthly Active Users Chart
var options = {
    series: [{
      data: [{
        x: 'Mon',
        y: [3, 5],
      }, {
        x: 'Tue',
        y: [1,2]
      }, {
        x: 'Wed',
        y: [5, 6]
      }, {
        x: 'Thu',
        y: [4, 6]
      }, {
        x: 'Fri',
        y: [2, 5]
      }, {
        x: 'Sat',
        y: [1.9, 4.5]
      }, {
        x: 'Sun',
        y: [2, 6]
      }]
  }],
    chart: {
    type: 'rangeBar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: false,
      borderRadius: 15,
      borderRadiusApplication: 'around',
      borderRadiusWhenStacked: 'last',
    }
  },
  dataLabels: {
    enabled: true
  },
  colors:['#E46B7C']
  };

  var chart = new ApexCharts(document.querySelector("#chartMonthlyActiveUsers"), options);
  chart.render();

  // Annual Active Users Chart
var options = {
    series: [{
      data: [{
        x: 'Mon',
        y: [3, 5],
      }, {
        x: 'Tue',
        y: [1,2]
      }, {
        x: 'Wed',
        y: [5, 6]
      }, {
        x: 'Thu',
        y: [4, 6]
      }, {
        x: 'Fri',
        y: [2, 5]
      }, {
        x: 'Sat',
        y: [1.9, 4.5]
      }, {
        x: 'Sun',
        y: [2, 6]
      }]
  }],
    chart: {
    type: 'rangeBar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: false,
      borderRadius: 15,
      borderRadiusApplication: 'around',
      borderRadiusWhenStacked: 'last',
    }
  },
  dataLabels: {
    enabled: true
  },
  colors:['#569C73']
  };

  var chart = new ApexCharts(document.querySelector("#chartAnnualActiveUsers"), options);
  chart.render();

//   Distributed Chart
var options = {
    series: [{
    name: 'Inflation',
    data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2]
  }],
    chart: {
    height: 350,
    type: 'bar',
  },
  plotOptions: {
    bar: {
      borderRadius: 10,
      dataLabels: {
        position: 'top', // top, center, bottom
      },
    }
  },
  dataLabels: {
    enabled: false,
    formatter: function (val) {
      return val + "%";
    },
    offsetY: -20,
    style: {
      fontSize: '12px',
      colors: ["#304758"]
    }
  },
  
  xaxis: {
    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    position: 'top',
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      fill: {
        type: 'gradient',
        gradient: {
          colorFrom: '#D8E3F0',
          colorTo: '#BED1E6',
          stops: [0, 100],
          opacityFrom: 0.4,
          opacityTo: 0.5,
        }
      }
    },
    tooltip: {
      enabled: true,
    }
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false,
    },
    labels: {
      show: false
    }
  
  },
  title: {
    floating: true,
    offsetY: 330,
    align: 'center',
    style: {
      color: '#444'
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#chartWeeklyActiveUsers"), options);
  chart.render();

//   Active Users Chart
var options = {
    series: [{
    name: 'series1',
    data: [31, 40, 28, 51, 42, 109, 100]
  }],
    chart: {
    height: 350,
    type: 'area'
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'smooth'
  },
  xaxis: {
    type: 'datetime',
    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
  },
  tooltip: {
    x: {
      format: 'dd/MM/yy HH:mm'
    },
  },
  colors:['#569C73']
  };

  var chart = new ApexCharts(document.querySelector("#chartActiveUsers"), options);
  chart.render();

  //   Inactive Users Chart
var options = {
  series: [{
  name: 'series1',
  data: [31, 40, 28, 51, 42, 109, 100]
}],
  chart: {
  height: 350,
  type: 'area'
},
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'smooth'
},
xaxis: {
  type: 'datetime',
  categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
},
tooltip: {
  x: {
    format: 'dd/MM/yy HH:mm'
  },
},
colors:['#FF4747']
};

var chart = new ApexCharts(document.querySelector("#chartInactiveUsers"), options);
chart.render();

// Chart Area
var options = {
  series: [{
  name: 'Network',
  data: [{
      x: 'Dec 23 2017',
      y: null
    },
    {
      x: 'Dec 24 2017',
      y: 44
    },
    {
      x: 'Dec 25 2017',
      y: 31
    },
    {
      x: 'Dec 26 2017',
      y: 38
    },
    {
      x: 'Dec 27 2017',
      y: null
    },
    {
      x: 'Dec 28 2017',
      y: 32
    },
    {
      x: 'Dec 29 2017',
      y: 55
    },
    {
      x: 'Dec 30 2017',
      y: 51
    },
    {
      x: 'Dec 31 2017',
      y: 67
    },
    {
      x: 'Jan 01 2018',
      y: 22
    },
    {
      x: 'Jan 02 2018',
      y: 34
    },
    {
      x: 'Jan 03 2018',
      y: null
    },
    {
      x: 'Jan 04 2018',
      y: null
    },
    {
      x: 'Jan 05 2018',
      y: 11
    },
    {
      x: 'Jan 06 2018',
      y: 4
    },
    {
      x: 'Jan 07 2018',
      y: 15,
    },
    {
      x: 'Jan 08 2018',
      y: null
    },
    {
      x: 'Jan 09 2018',
      y: 9
    },
    {
      x: 'Jan 10 2018',
      y: 34
    },
    {
      x: 'Jan 11 2018',
      y: null
    },
    {
      x: 'Jan 12 2018',
      y: null
    },
    {
      x: 'Jan 13 2018',
      y: 13
    },
    {
      x: 'Jan 14 2018',
      y: null
    }
  ],
}],
  chart: {
  type: 'area',
  height: 350,
  animations: {
    enabled: false
  },
  zoom: {
    enabled: false
  },
},
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'straight'
},
fill: {
  opacity: 0.8,
  type: 'pattern',
  pattern: {
    style: ['verticalLines', 'horizontalLines'],
    width: 5,
    height: 6
  },
},
markers: {
  size: 5,
  hover: {
    size: 9
  }
},
title: {
  text: 'Network Monitoring',
},
tooltip: {
  intersect: true,
  shared: false
},
theme: {
  palette: 'palette1'
},
xaxis: {
  type: 'datetime',
},
yaxis: {
  title: {
    text: 'Bytes Received'
  }
}
};

var chart = new ApexCharts(document.querySelector("#chartArea"), options);
chart.render();

// App Users

// Sample data for week strength
var weekStrengthData = [  2 ,23, 19,45, 38, 52, 45,  ];
var weekLabels = ['1 Week', '2 Weeks', '3 Weeks', '4 Weeks', '5 Weeks', '6 Weeks', '7 Weeks'];

// Calculate the total strength for the week
var totalStrength = weekStrengthData.reduce(function(a, b) {
    return a + b;
}, 0);

// Calculate the average strength for the week
var averageStrength = totalStrength / weekStrengthData.length;

var options = {
    chart: {
        height: 350,
        type: "area",
        toolbar: {
            show: false // Hide the toolbar
        }
    },
    dataLabels: {
        enabled: false
    },
    series: [{
        name: "Users",
        data: weekStrengthData
    }],
    xaxis: {
        categories: weekLabels // Set custom week labels for x-axis
    },
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.9,
            stops: [0, 90, 100]
        }
    },
    markers: {
        size: 10,
        colors: ['#74ABFF'],
        strokeColors: '#74ABFF',
        strokeWidth: 2,
        strokeOpacity: 0.9,
        fillOpacity: 1,
        shape: "circle",
    },
    // Add a text annotation for average strength
    annotations: {
        points: [{
            x: '50%', // Place the text in the middle of the chart
            y: averageStrength,
            marker: {
                size: 0
            },
            label: {
                text: 'Average Strength: ' + averageStrength.toFixed(2),
                offsetY: -15,
                style: {
                    fontSize: '14px',
                    fontWeight: 'bold'
                }
            }
        }]
    },
    tooltip: {
        y: {
            formatter: function(value) {
                return value + '%'; // Show percentages on hover
            }
        },
        marker: {
            show: true, // Show a hover circle
        }
    }
};

var chart = new ApexCharts(document.querySelector("#chartAppUsers"), options);
chart.render();