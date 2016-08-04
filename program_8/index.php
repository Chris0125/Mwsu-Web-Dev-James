<?php
session_start();
$sid = session_id();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>My Shop</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="screen" href="./css/font-awesome.css" />
	<script   src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="./plugin/jquery.twbsPagination.js"></script>
	
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style>

        #pleaseWaitDialog {
            width: 400px;
            height: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -25px;
            margin-left: -200px;
            padding: 20px;
        }

        /* When the body has the loading class, we turn
           the scrollbar off with overflow:hidden */
        body.loading {
            overflow: hidden;   
        }

        /* Anytime the body has the loading class, our
           modal element will be visible */
        body.loading .modal {
            display: block;
        }
        
        .col-centered{
            float: none;
            margin: 0 auto;
        }
        
        .modal-header {
            padding-bottom: 5px;
        }

        .modal-footer {
                padding: 0;
            }
    
        .modal-footer .btn-group button {
            height:40px;
            border-top-left-radius : 0;
            border-top-right-radius : 0;
            border: none;
            border-right: 1px solid #ddd;
        }
    
        .modal-footer .btn-group:last-child > button {
            border-right: 0;
        }
		
		body {
			padding:20px;
		}
        
	</style>
</head>
<body>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <categp>
					</categp>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="https://107.170.129.183/program_8/assets/1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://107.170.129.183/program_8/assets/2.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="https://107.170.129.183/program_8/assets/3.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
				 <table class="table table-striped">
				<tbody>
				</tbody>
				</table>
				<div class="row">
  <div class="col-xs-12 col-sm-8"><center>
      <ul id="pagination-demo" class="pagination-sm"></ul>
      </center>
</div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


<script>

(function($) {
    //https://esimakin.github.io/twbs-pagination/
	
	var guid = <?php echo"\"{$sid}\";";?>
	
	//console.log(guid);

    var myWait;
    myWait = myWait || (function () {
        var waitDiv = $('<div class="modal" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false"><div class="progress"> <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:98%"> LOADING... </div></div></div>');
        return {
            show: function() {
                waitDiv.modal();
            },
            hide: function () {
                waitDiv.modal('hide');
            },

        };
    })();


    myWait.show();

    // Set up some variables for our pagination
    var page = 1;
    var page_size = 12;
    var total_records = 0;
    var total_pages = 0;
    var rows = "";
    var col_head = "";

    /*
    products = {
        "columns":[
            0: "id"
            1: "category"
            2: "desc"
            3: "price"
            4: "img"
        ],
        "records": [
            [
                0: "1",
                1: "tablet",
                2: "Fire Tablet, 7" Display, Wi-Fi, 8 GB - Includes Special Offers, Black",
                3: "49.99",
                4: "https://..."
            ],
            [
            ...
            ]
        ]
    }
    */


    function loadTableData(page, page_size,sort,order) {
		$.get('https://107.170.129.183/api/api.php/categories')
		 .done(function(data) {
		 //' <a href="#" class="list-group-item">Category 3</a>'
		 // console.log(data);
		 var cat = data.categories.records;
		 var cats = "";
		 for (var i = 0; i < cat.length; i++) {
			 cats = cats + ' <a href="#" class="list-group-item">' + cat[i][1] + '</a>';
		 }
		 
		 $('categp').html(cats);
		});
		
		var sort = typeof sort !== 'undefined' ?  sort.trim() : "id";
		var order = typeof order !== 'undefined' ?  ","+order : "";
    
        myWait.show();
                
        // Perform a get request to our api passing the page number and page size as parameters
		console.log("https://107.170.129.183/api/api.php/products?order="+sort+"&page=" + page + "," + page_size);
        $.get("https://107.170.129.183/api/api.php/products?order="+sort+order+"&page=" + page + "," + page_size)

        // The '.done' method fires when the get request completes
        .done(function(data) {

            // Pull the products out of our json object 
			//var cat = data.categories.records;
            var records = data.products.records;
			//console.log(records);
            // Start an empty html string
            rows = "";
            for (var i = 0; i < records.length; i++) {

                //Start a new row for each product and put the product id in a data-element
               //rows = rows + "<tr data-id="+records[i][0]+">";
				rows = rows + '<div class="col-sm-4 col-lg-4 col-md-4"> <div class="thumbnail">';
				
				var result = records[i][4] .split(' ');
                var img = result[0].replace("~","75");
                records[i][4] = ""//<img src="+img+'.jpg>';
				
				rows = rows + records[i][4];
				
				rows = rows + '<div class="caption"><h4 class="pull-right">' + records[i][3];
				
				var name = records[i][2].split(' ');
				
				rows = rows + '</h4><h4><a href="#" id="single">' + name[0] + ' ' + name[1] + '</a></h4>';
				rows = rows + '<p>' + records[i][2] + '</p></div><div class="ratings"><p class="pull-right">15 reviews</p>';
				rows = rows + '<p><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>';
                rows = rows + '<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>';
                rows = rows + '<span class="glyphicon glyphicon-star"></span></p></div></div></div>';
				
				
            }

            // At this point "rows" should have 'page_size' number of items in it,
            // so append all those rows to the body of the table.
			//console.log(rows);
            $('tbody').html(rows);
            
            myWait.hide();
			
			$('#single').click(function(){
			//console.log("click");
			
			var singprod = $(this).context['parentElement']['parentElement']['parentElement']['innerHTML'].split(">");
			var img = singprod[0].replace("US75","US674")
			singprod[0] = img;
			
			rows = '<div class="container"> <div class="row"> </div> <div class="col-md-9"> <div class="thumbnail">';
			rows = rows + singprod[0] + '> <div class="caption-full"> <h4 class="pull-right">$';
			rows = rows + singprod[3] + '><h4><a href="#">' + singprod[6] + '> </h4> <p>' + singprod[9] + '>';
			rows = rows + '<p>Want to make these reviews work? Check out <strong><a href="https://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a> </strong>over at maxoffsky.com!</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> </div> <div class="ratings"> <p class="pull-right">3 reviews</p> <p> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star-empty"></span> 4.0 stars </p> </div> </div> <div class="well"> <div class="text-right"> <a class="btn btn-success">Leave a Review</a> </div> <hr> <div class="row"> <div class="col-md-12"> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star-empty"></span> Anonymous <span class="pull-right">10 days ago</span> <p>This product was great in terms of quality. I would definitely buy another!</p> </div> </div> <hr> <div class="row"> <div class="col-md-12"> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star-empty"></span> Anonymous <span class="pull-right">12 days ago</span> <p>I\'ve alredy ordered another one!</p> </div> </div> <hr> <div class="row"> <div class="col-md-12"> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star-empty"></span> Anonymous <span class="pull-right">15 days ago</span> <p>I\'ve seen some better than this, but not at this price. I definitely recommend this item.</p> </div> </div> </div> </div> </div> </div> ';
			$('tbody').html(rows);
			});
		});
    }
    
    function getTotalPages(){
        $.get("https://107.170.129.183/api/api.php/products")

        // The '.done' method fires when the get request completes
        .done(function(data) {

            total_records = data.products.records.length;
            total_pages = parseInt(total_records / page_size);
            loadTableData(1, 12);
            $('#pagination-demo').twbsPagination({
                totalPages: total_pages,
                visiblePages: 10,
                onPageClick: function (event, page) {
                    $('#page-content').text('Page ' + page);
                    loadTableData(page,10);
                }
            });
			
        });

    }
    
	function addCartItem(item){
		
		var row=''+
		'<div class="row cart-item" id="item-'+item[0]+'">'+
			'<div class="col-xs-2">'+ item[4] +
			'</div>'+
			'<div class="col-xs-2">'+
			'	<h4 class="product-name"><strong>'+item[1]+'</strong></h4>'+
			'</div>'+
			'<div class="col-xs-8">'+
			'	<div class="col-xs-5 text-right">'+
			'		<h6><strong>$<span class ="price">'+ item[3] +'</span><span class="text-muted"> x </span></strong></h6>'+
			'	</div>'+
			'	<div class="col-xs-4">'+
			'		<input type="text" class="form-control input-sm count" value="1">'+
			'	</div>'+
			'	<div class="col-xs-2">'+
			'		<button type="button" class="btn btn-link btn-xs">'+
			'			<span class="glyphicon glyphicon-trash trash"> </span>'+
			'		</button>'+
			'	</div>'+
			'</div>'+
		'</div>'+
		'<hr>';
		
		var postData = {};
		postData['uid']=guid;
		postData['pid']=item[0];
		postData['count']=1;
		postData['description']=item[1];
		postData['price']=item[3];
		postData['time-added']=Math.floor(Date.now() / 1000);
		
		//console.log(postData);
		var cartTotal = parseFloat($('#cart-total').text());
		if(isNaN(cartTotal))
			cartTotal = 0;

		cartTotal += parseFloat(item[3]);
		//console.log(cartTotal);
		$('#cart-body').append(row);
		$('#cart-total').text(cartTotal)
		$.post("https://107.170.129.183/api/api.php/shopping_cart/",postData);
		
		$('.trash').click(function(){
		console.log($(this).context['parentElement']['parentElement']['parentElement']['parentElement']);
		$(this).context['parentElement']['parentElement']['parentElement']['parentElement'].remove();
	});
	
	
	
	}

 
    
	 function guid() {
	  function s4() {
		return Math.floor((1 + Math.random()) * 0x10000)
		  .toString(16)
		  .substring(1);
	  }
	  return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
		s4() + '-' + s4() + s4() + s4();
	}
	
	$('.trash').click(function(){
		console.log($(this).context['parentElement']['parentElement']['innerHTML']);
	});
	
	
		
	
    getTotalPages();
	
	


}(jQuery));
</script>
</body>
</html>
