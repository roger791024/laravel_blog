<!DOCTYPE html>
{{-- resources/views/layouts/partials/navigation.blade.php --}}
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav">
	        <li>
	            <a href="{{ route('home.index') }}">Home</a>
	        </li>
	        <li>
	            <a href="{{ route('about.index') }}">About</a>
	        </li>
	        <li>
	            <a href="{{ route('posts.index') }}">Blog</a>
	        </li>
	        <li>
	            <a href="{{ route('contact.create') }}">Contact</a>
	        </li>
	    </ul>
	</div>
	<!-- /.navbar-collapse -->