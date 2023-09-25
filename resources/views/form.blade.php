<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
</head>
<form>


    <div class="form-group">
        <label for="exampleInputEmail1"> Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter email">
        <small id="emailHelp" class="form-text text-muted"> we'll never share your email with anyone else</small>

    </div>
    <div class="form-group">

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exempleCheck1">
            <label class="form-check-label"  for="exampleCheck1">Check me out</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
