<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Klaykaps</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/blogo.png" rel="icon">
  <link href="assets/img/blogo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/6f8cc429d1.js" crossorigin="anonymous"></script>
	
</head>



<body onload="run()">
<script>


function run()
{	
	document.getElementById("show").click();
}
</script>


<header id="header">
  
      <div class="container">
	  
	  <h1><a href="https://klaykaps.com">Klay<span>kaps</span> </a></h1>	
	  	
	  <nav id="navbar" class="navbar">

        <ul>		 		
		<li><a class="nav-link" href="https://klaykaps.com/"><b>Shop</b></a></li> 
		<!--<li><a class="nav-link" href="https://klaykaps.com/raffle"><b>Raffle</b></a></li>-->
		<li><a class="nav-link" href="https://klaykaps.com/faq"><b>FAQ</b></a></li>		
		<li><a class="nav-link" href="https://discord.com/invite/TZDCwkr"><b>Discord</b></a></li>
		<li><a class="nav-link" href="https://www.instagram.com/klaykaps/"><b>Instagram</b></a></li> 
		<a class="nav-link" id="show" href="#showcase"></a>
        </ul>
	   <i class="bi bi-list mobile-nav-toggle"></i>	
	  </nav>
	   	  
	 </div>
	  

	
</header>	

  <!-- ======= Portfolio Section ======= -->
 <section id="showcase" class="portfolio">	
<div class="banner" id="banban">
    <div class="banner__content">
      <div class="banner__text" id = "scroll">
        <strong></strong> DUE TO THE ONGOING PANDEMIC AND HOLIDAYS, DELIVERY TIMES MAY BE EXTENDED.
      </div>
	  <button class="banner__close" type="button">
        <span class="material-icons">
         <i style ="color:#FBC8C3; font-size:19px;" class="fa fa-close"> </i>
        </span>
		<br>
      </button>
   
    </div>
 
	<script>

document.querySelector(".banner__close").addEventListener("click", function () {
  this.closest(".banner").style.display = "none";
});

</script>
  </div>

    <div class="container">
	
      <div class="section-title">
		<h2>Raffle</h2>        
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">      
            <li data-filter="*" class="filter-active" onclick="window.location.replace('http://klaykaps.com/')">Raffle</li>
			<li onclick="window.location.replace('http://klaykaps.com/gb')">GroupBuy</li>
          </ul>
        </div>
      </div>



<div id='collection-component-1616159924138'></div>
<script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'klaykaps.myshopify.com',
      storefrontAccessToken: 'a3af3b31a5f1ba890ceefe4824f7f5fa',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('collection', {
        id: '262900809913',
        node: document.getElementById('collection-component-1616159924138'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px",
          "width": "calc(25% - 20px)"
        }
      },
      "title": {
        "font-size": "15px",
        "color": "#020202"
      },
      "button": {
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px",
        ":hover": {
          "background-color": "#6a919d"
        },
        "background-color": "#76a1ae",
        ":focus": {
          "background-color": "#6a919d"
        },
        "border-radius": "14px",
        "padding-left": "90px",
        "padding-right": "90px"
      },
      "quantityInput": {
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px"
      },
      "price": {
        "color": "transparent",
		"font-size":"0px"
      },
      "compareAt": {
        "color": "#faf6f6"
      },
      "unitPrice": {
        "color": "#faf6f6"
      }
    },
    "buttonDestination": "modal",
    "contents": {
      "button": false,
      "options": false
    },
    "isButton": true,
    "text": {
      "button": "View product"
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "button": false,
      "buttonWithQuantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px",
        ":hover": {
          "background-color": "#6a919d"
        },
        "background-color": "#76a1ae",
        ":focus": {
          "background-color": "#6a919d"
        },
        "border-radius": "14px",
        "padding-left": "90px",
        "padding-right": "90px"
      },
      "quantityInput": {
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px"
      },
      "title": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "bold",
        "font-size": "26px",
        "color": "#4c4c4c"
      },
      "price": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal",
        "font-size": "17px",
        "color": "#4c4c4c"
      },
      "compareAt": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal",
        "font-size": "14.45px",
        "color": "#4c4c4c"
      },
      "unitPrice": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal",
        "font-size": "14.45px",
        "color": "#4c4c4c"
      }
    },
    "text": {
      "button": "Adopt me!"
    }
  },
  "option": {},
  "cart": {
    "styles": {
      "button": {
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px",
        ":hover": {
          "background-color": "#6a919d"
        },
        "background-color": "#76a1ae",
        ":focus": {
          "background-color": "#6a919d"
        },
        "border-radius": "14px"
      }
    },
    "text": {
      "title": "My Adoption Cart",
      "total": "Total ",
      "empty": "Fill me up!",
      "button": "Checkout",
      "noteDescription": "Feedback & Comments "
    },
    "contents": {
      "note": true
    },
    "popup": false
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#76a1ae",
        ":hover": {
          "background-color": "#6a919d"
        },
        ":focus": {
          "background-color": "#6a919d"
        }
      },
      "count": {
        "font-size": "13px"
      }
    }
  }
},
      });
    });
  }
})();
/*]]>*/
</script>	  
		  
</div>

	
</section><!-- End Portfolio Section -->

  
  <div class="credits"> 
    <a href="#">Klaykaps © 2020</a>

  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php

echo '<script type="text/javascript">',
	 'document.getElementById("show").click();',
     '</script>'
;


$servername = "zjgoh.com:3306";
$username = "klaykaps2020";
$password = "Melon97!";
$dbname = "test";


$notice="";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM server WHERE number = 1";	

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
        	
		$notice = $row['notice'];						
		;
		   
}
}

$conn->close();




if ($notice == "")
{
	
	
	echo '<script type="text/javascript">',
	 'var ban = document.getElementById("banban");',
	 'ban.remove();',

	 
     '</script>'
;


}
else
{
	
	 echo "<script> var banner = " . json_encode($notice) . "</script>";		 
	 echo '<script type="text/javascript">',
		'document.getElementById("scroll").innerText = banner;',

		'</script>';
		
	



}


function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}




?>


