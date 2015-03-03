<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="/css/font-awesome/font-awesome.css" rel="stylesheet">
        <link href="/css/bootstrap-social/bootstrap-social.css" rel="stylesheet">
		<link href="/css/bootstrap/bootstrap.css" rel="stylesheet">
		
		
		<link href="/css/style.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Basic ToDo</a>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="jumbotron">
					<h1 class="text-center">{{$testing}}</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<form action="/" method="POST" role="form">
						<legend>Add new</legend>
					
						<div class="form-group">
							<label for="">New ToDo Item</label>
							<input type="text" class="form-control" id="" placeholder="Input field">
						</div>

						<button type="submit" class="btn btn-primary pull-right">Submit</button>
					</form>
				</div>
				<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
					<ul class="list-group">
						<li class="list-group-item active">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 0
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 1
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 2
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
						<li class="list-group-item list-group-item-success">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 3
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 4
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<a href="" role="button" class="btn btn-default" title="Done">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							To Do Item 5
							<div class="btn-group-md pull-right" role="group" aria-label="...">
								
								<a href="" role="button" class="btn btn-default" title="Working">
									<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</a>
								<a href="" role="button" class="btn btn-default" title="Save">
									<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
								</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<a class="btn btn-block btn-social btn-google-plus" href="https://plus.google.com/u/0/101300304010529531094/about" target="_blank">
						<i class="fa fa-google-plus"></i>
                        Sign in with Google Plus
					</a>
					<a class="btn btn-block btn-social btn-twitter" href="https://twitter.com/quarkmarino" target="_blank">
						<i class="fa fa-twitter"></i>
						Sign in with Twitter
					</a>
					<a class="btn btn-block btn-social btn-facebook" href="https://www.facebook.com/quarkmarino" target="_">
						<i class="fa fa-facebook"></i>
						Sign in with Facebook
					</a>
				</div>
			</div>
		</div>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h4>Copyright &copy; IESO Basic Practice</h4>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="/js/jquery/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="/js/bootstrap/bootstrap.min.js"></script>
	</body>
</html>