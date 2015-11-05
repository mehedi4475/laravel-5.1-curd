@include('kg/header')
    
    <div class="body-area">
        <div class="wrapper">
            <h1>
                @section('title') 
                
                @show 
            </h1>
            <p>
                @section('content')
                
                @show
            </p>
        </div>
    </div>
  
 @include('kg/footer')