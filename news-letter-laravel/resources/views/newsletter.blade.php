<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity=""
    crossorigin="anonymous">

@if (session('status'))
    <div class='alert alert-sucess'>
        {{ session('status') }}
    </div>
@endif

<div class="container">
    <h3>NewsLetter</h3>
    <div class="row">
        <form action="/newsletter/store" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="email" name="user_email" id="exampleInputEmail" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
