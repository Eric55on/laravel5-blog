@extends('layouts.app')

@section('htmlheader_title')
	Posts
@endsection


@section('main-content')
	<div class="row">
		<div class="box">
			<div class="panel panel-default">
				<div class="box-header">
					<h3>Posts</h3>
				</div>

				<div class="box-body">
					<table class="table table-bordered table-hover dataTable">
						<thead>
							<th>T&iacute;tulo</th>
						</thead>
						<tbody>
							@foreach( $posts as $post )
								<tr>
									<td><a href="{!! route('posts.show', ['id' => $post->id]) !!}"> {!! $post->title !!} </a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
