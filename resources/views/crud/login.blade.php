<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <title>Minimum Bootstrap HTML Skeleton</title>
<!--  -->
<style>

</style>

</head>

<body>
    <div class="container">
       
       <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
           <legend>Task list</legend>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>       
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->title}}</td>
                            <td>{{$task->description}}</td>
                            <td><a href="crud/update/{{$task->id}}">Edit</a> | <a href="#">Delete</a></td>
                        </tr>                    
                    @endforeach
                </tbody>
            </table>
    
        </div>

       
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
           <legend>Create task</legend>
           
           @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            
            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
            
            {!! Form::open([
                'url' => 'crud/store'
            ]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>

</script>
</body>
</html>
