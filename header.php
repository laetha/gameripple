<?php session_start();
if(!isset($_COOKIE['user'])) {
	if (!isset($_SESSION["newsession"])){
		$loguser = 'null';
		//echo ('No Logged in user');
	}
	else {
	$loguser = $_SESSION["newsession"];
	$cookie_name = "user";
	$cookie_value = $loguser;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/"); // 86400 = 1 day
	$cookie_name1 = "user";
	$cookie_value1 = $loguser;
	setcookie($cookie_name1, $cookie_value1, time() + (86400 * 90), "/"); // 86400 = 1 day
	//echo ('Logged in user is '.$loguser);
}
}
else {
	$loguser = $_COOKIE['user'];
	$cookiestatus = 'There was a cookie!';

}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/style.css" />
		<link rel="stylesheet" type="text/css" href="/selectize/css/selectize.default.css" />


		<title id="tabTitle"><?php echo $pgtitle; ?>MediaRipple</title>
		
	</head>
	<!--<body id="headbody" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url(/assets/images/bg/<?php echo $selectedBg; ?>) no-repeat center center fixed;	-webkit-background-size: cover;	-moz-background-size: cover;	-o-background-size: cover;	background-size: cover;	opacity:0.9;"> -->
	<body id="headbody" style="background-color: #2d2d2d; opacity: 0.8;">
		<script src="/jquery-3.3.1.min.js" tpye="text/javascript"></script>
		<script src="/selectize/js/standalone/selectize.min.js" tpye="text/javascript"></script>
		<script src="/selectize/js/list.js" tpye="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" tpye="text/javascript"></script>
		<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
		<script src="/plugins/simplemde-markdown-editor/dist/simplemde.min.js"></script>
		<link  href="/plugins/nanogallery2/src/css/nanogallery2.css" rel="stylesheet" type="text/css">
            <script  type="text/javascript" src="/plugins/nanogallery2/dist/jquery.nanogallery2.min.js"></script>

		<script type="text/javascript" src="/apikey.js"></script> 
		<?php
		//SQL Connect
		 $sqlpath = $_SERVER['DOCUMENT_ROOT'];
		 $sqlpath .= "/sql-connect.php";
		 include_once($sqlpath);
		 $friend = 0;
		 $usercheck = "SELECT * FROM `users` WHERE username LIKE '$loguser'";
		 $userdata = mysqli_query($dbcon, $usercheck) or die('error getting data');
		 while($row =  mysqli_fetch_array($userdata, MYSQLI_ASSOC)) {
		 	$friend = $row['friend'];
		 }
		 $friendcheck = $_SERVER['PHP_SELF'];

		 if ($friend !== '1' && $friendcheck !== '/tools/users/login.php') {
			 if ($friendcheck !== '/tools/users/loginprocess.php'){
			 echo ('<script>window.location.replace("/tools/users/login.php"); </script>');
		 }
		 }
		 ?>

		 <link rel="stylesheet" type="text/css" href="/navbar.css" />
		 <nav class="navbar navbar-default navbar-inverse" id="nonav" style="display:block;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php">GameRipple</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
				<li class="topsearch">
				<select id="search">
					<option value=""></option>
					</select>
				</li>

				<li class="dropdown">
		 			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="searchType">Games<span class="caret"></span></a>
					 <ul class="dropdown-menu">
      					<li><a class="dropdown-item" onClick="changeSearch('Games')">Games</a></li>
      					<li><a class="dropdown-item" onClick="changeSearch('Books')">Books</a></li>
      					<li><a class="dropdown-item" onClick="changeSearch('Movies')">Movies</a></li>
						<li><a class="dropdown-item" onClick="changeSearch('TV')">TV</a></li>
		</ul>
				</li>

				<li><a href="media.php">My Media</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="sentiments.php">Sentiments</a></li>

				
						<?php
			if ($loguser == 'tarfuin'){
			echo ('<li class="dropdown"><a href="#" class="dropdown-toggle" style="color: #42f486;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.ucfirst($loguser).'<span class="caret"></span></a>');
			?>
			<ul class="dropdown-menu">
				<li><a href="/tools/users/logout.php">Logout</a></li>
			</ul>
			<?php
			}
			?>
  </div>
      </ul>

	  <script>
	  </script>
    </div>
				<script type="text/javascript">

	var searchType = 'Games';
			//	var title;

	function changeSearch(mediaType){
  		$('#searchType').html(mediaType + '<span class="caret"></span>');
		searchType = mediaType;
		refreshSearch(mediaType);
	}

	$(document).ready(function () {
		changeSearch('Games');
	});


function refreshSearch(searchType){
	$('#search').selectize()[0].selectize.destroy();

if (searchType == 'Games'){
	$('#search').selectize({
    valueField: 'guid',
    labelField: 'name',
    searchField: 'name',
	maxOptions: 8,
    options: [],
    create: false,
    render: {
        option: function(item, escape) {
			var baseURL = 'https://giantbomb.com/api';
    		var apiKey = GBKey;
			var releaseDate = escape(item.original_release_date);
			var releaseDate1 = escape(item.expected_release_year);
			var releaseYear = releaseDate.slice(0,4);
			var comboRelease = releaseYear.concat(releaseDate1);
			var finalRelease = comboRelease.replace('null','');
			
            return '<div>' +
                '<img src="' + escape(item.image.small_url) + '" alt="" height="100px" style="margin-right:20px;">' +
                '<span class="title">' +
                    '<span class="name">' + escape(item.name) + ' - ('+
					finalRelease+')</span>' +
                '</span>' +                
            '</div>';
        }
    },
    load: function(query, callback) {
        if (!query.length) return callback();
        $.ajax({
            url: 'https://www.giantbomb.com/api/games/?api_key=' + GBKey + '&format=jsonp&filter=name:'+ query + '&sort=original_release_date:desc',
            type: 'GET',
			jsonp: 'json_callback',
			format: 'jsonp',
            dataType: 'jsonp',
            data: {
                q: query,
                page_limit: 10,
                apikey: GBKey

            },
            error: function() {
                callback();
            },
            success: function(res) {
                callback(res.results);
            }
        });
    },
	onChange: function(value){
					
					window.location.href = '/game.php?id=' + value;
	}
	

}); 
}

if (searchType == 'Books'){

$('#search').selectize({
    valueField: 'id',
    labelField: 'title',
    searchField: 'title',
	maxOptions: 8,
    options: [],
    create: false,
    render: {
        option: function(item, escape) {
			var baseURL = 'https://googleapis.com/books/v1/volumes';
    		var apiKey = GoogleKey;
			var releaseDate = escape(item.publishedDate);
			var releaseYear = releaseDate.slice(0,4);
			var iamgeLink = '';
			if (item.imageLinks === undefined){
				imageLink = '';
			}
			else {
				imageLink = item.imageLinks.thumbnail;
			}
			
            return '<div>' +
                '<img src="' + escape(imageLink) + '" alt="" height="100px" style="margin-right:20px;">' +
                '<span class="name">' +
                    '<span class="title">' + escape(item.title) + ' - ('+
					escape(item.authors) + ' - ' +
					releaseYear + ')</span>' +
                '</span>' +                
            '</div>';
        }
    },
    load: function(query, callback) {
        if (!query.length) return callback();
        $.ajax({
            url: 'https://www.googleapis.com/books/v1/volumes?q=+intitle:' + query + '&printType=books&maxResults=8&key='+ GoogleKey,
            type: 'GET',
            dataType: 'json',
            error: function() {
                callback();
            },
            success: function(jsonData) {
				var fullData = jsonData.items;
				var res = [];

				//take the 'ID' value out of the top level and put it in the 'volumeInfo' level.
				for (var i in fullData){
					let id = fullData[i].id;
					fullData[i].volumeInfo['id'] = id;
					res.push([i,fullData[i].volumeInfo]);
				}
                callback(res);
				//console.log(res);
            }
        });
    },
	onChange: function(value){
					
					window.location.href = '/book.php?id=' + value;
	}
	

}); 

}

if (searchType == 'Movies'){

$('#search').selectize({
    valueField: 'id',
    labelField: 'title',
    searchField: 'title',
	maxOptions: 8,
    options: [],
    create: false,
    render: {
        option: function(item, escape) {
			var baseURL = 'https://api.themoviedb.org/3/search/movie';
    		//var apiKey = tmdbKey;
			var releaseDate = escape(item.release_date);
			var releaseYear = releaseDate.slice(0,4);
			var imageLink = escape(item.poster_path);
			
            return '<div>' +
                '<img src="https://image.tmdb.org/t/p/original' + escape(imageLink) + '" alt="" height="100px" style="margin-right:20px;">' +
                '<span class="name">' +
                    '<span class="title">' + escape(item.original_title) + ' - ('+
					releaseYear + ')</span>' +
                '</span>' +                
            '</div>';
        }
    },
    load: function(query, callback) {
        if (!query.length) return callback();
        $.ajax({
            url: 'https://api.themoviedb.org/3/search/movie?query=' + query + '&api_key=1a4c153e771e6a97876ae286242ccb40',
            type: 'GET',
            dataType: 'json',
			error: function() {
                callback();
            },
            success: function(res) {
                callback(res.results);
            }
        });
    },
	onChange: function(value){
					
					window.location.href = '/movie.php?id=' + value;
	}
	

}); 
}

if (searchType == 'TV'){

$('#search').selectize({
    valueField: 'id',
    labelField: 'original_name',
    searchField: 'original_name',
	maxOptions: 8,
    options: [],
    create: false,
    render: {
        option: function(item, escape) {
			var baseURL = 'https://api.themoviedb.org/3/search/tv';
    		//var apiKey = tmdbKey;
			var releaseDate = escape(item.first_air_date);
			var releaseYear = releaseDate.slice(0,4);
			var imageLink = escape(item.poster_path);
			
            return '<div>' +
                '<img src="https://image.tmdb.org/t/p/original' + escape(imageLink) + '" alt="" height="100px" style="margin-right:20px;">' +
                '<span class="name">' +
                    '<span class="title">' + escape(item.original_name) + ' - ('+
					releaseYear + ')</span>' +
                '</span>' +                
            '</div>';
        }
    },
    load: function(query, callback) {
        if (!query.length) return callback();
        $.ajax({
            url: 'https://api.themoviedb.org/3/search/tv?query=' + query + '&api_key=1a4c153e771e6a97876ae286242ccb40',
            type: 'GET',
            dataType: 'json',
			error: function() {
                callback();
            },
            success: function(res) {
                callback(res.results);
            }
        });
    },
	onChange: function(value){
					
					window.location.href = '/tv.php?id=' + value;
	}
	

}); 
}

}

		</script>
			</div><!-- /.container-fluid -->
		</nav>

		<div class="container-fluid">