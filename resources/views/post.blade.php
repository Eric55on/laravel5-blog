@extends('layouts.app')

@section('htmlheader_title')
	Posts
@endsection


@section('main-content')
	<div class="row">
		<div class="box box-primary">
			<div class="panel panel-default">
				<div class="box-header with-border">
					<h3>Post</h3>
				</div>
				<div class="box-body">
					{!! Form::model($post, array( 'method' => 'PUT', 'route' => array('posts.update', $post->id)) ) !!}
						<div class="form-group">
							{!! Form::label('title', 'T&iacute;tulo') !!}
					    	{!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('title', 'Entrada') !!}
					    	{!! Form::textarea('description', $post->description, ['class' => 'textarea', 'placeholder' => 'Ingrese entrada...', 'style' => 'width: 810px; height: 200px;']); !!}
					    </div>
					    <div class="form-group">
					    	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
					    </div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

<link rel="stylesheet" type="text/css" href="{!! URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css') !!}">

<script type="text/javascript" src="{!! URL::asset('plugins/jQuery/jQuery-2.1.4.min.js') !!}" ></script>
<script type="text/javascript" src="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
        <script type="text/javascript">
            $('.textarea').wysihtml5({
                "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
                "emphasis": true, //Italics, bold, etc. Default true
                "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                "html": false, //Button which allows you to edit the generated HTML. Default false
                "link": false, //Button to insert a link. Default true
                "image": false, //Button to insert an image. Default true,
                "color": false //Button to change color of font  
            });
        </script>

@endsection
