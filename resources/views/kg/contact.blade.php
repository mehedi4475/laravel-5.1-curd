<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <title>Login Form</title>
<!--  -->
<style>

</style>

</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
               
               {!! Form::open(array('url' => 'kg/contact')) !!}
                   
                    <div class="form-group">
                        <legend>Login Form</legend>
                    </div>
                       <div class="form-group">
                        <label for="input-id" class="col-sm-2">Username</label>
                        <input type="text" name="username" id="input" class="form-control" value="" >
                    </div>
                    <div class="form-group">
                        <label for="input-id" class="col-sm-2">Password</label>
                        <input type="password" name="password" id="input" class="form-control" value="">
                    </div>

                    <div class="form-group">                        
                        <button type="submit" class="btn btn-primary">Login</button>                      
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>

</script>
</body>
</html>
