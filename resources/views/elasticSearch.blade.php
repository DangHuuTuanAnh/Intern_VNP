<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<!-- Search form -->
	
	<div class="container">
		<h2 style="text-align: center;">Elastic Search Demo</h2>
		<form class="form-inline active-pink-3 active-pink-4" action="{{route('elastic.search')}}" method="GET">
			<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
			aria-label="Search" name="search">
			{{-- <a style="margin-left: 20px;" href="" type="submit"><i class="fa fa-search" aria-hidden="true"></i></a> --}}
			<button class="btn btn-info" type="submit">Search</button>

		</form>
		<br>	
		<p>Danh sách tìm kiếm cho từ khóa " {{$search}} "</p>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>Title</th>
					<th>Body</th>
					<th>Tags</th>
				</tr>
			</thead>
			<tbody>
				@foreach($articles as $item)
				<tr>
					<td>{{$item->title}}</td>
					<td>{{$item->body}}</td>
					<td>{{$item->tags}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>