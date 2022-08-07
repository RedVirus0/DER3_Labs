@extends("dashboard.sidebar.sidebar")
@section("content")
    <form action="{{route("dashboard.challenge.update")}}" method="post" class="container" style="margin: 10px; font-size: 20px">
        <input type="hidden" value="{{$chall[0]->id}}" name="id">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input style="font-size: 20px" name="title" type="text" class="form-control" id="exampleInputEmail1" value="{{$chall[0]->title}}" aria-describedby="emailHelp" >
            @error("title")
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Score</label>
            <input style="font-size: 20px" name="score" type="number" class="form-control" id="exampleInputPassword1" value="{{$chall[0]->score}}">
            @error("score")
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror
            @csrf
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input style="font-size: 20px" name="description" type="text" class="form-control" id="exampleInputPassword1" value="{{$chall[0]->description}}">
            @error("description")
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Hint</label>
            <input style="font-size: 20px" name="hint" type="text" class="form-control" id="exampleInputPassword1" value="{{$chall[0]->hint}}">

            @error("hint")
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror

        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Flag</label>
            <input style="font-size: 20px" name="flag" type="text" class="form-control" id="exampleInputPassword1" value="{{$chall[0]->flag}}">

            @error("flag")
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Category</label>
            <select name="category">
                <option value="{{$chall[0]->category}}">{{$chall[0]->category}}</option>
                <option value="Osint">Osint</option>
                <option value="Web">Web</option>
                <option value="Crypto">Crypto</option>
            </select>
            @error("category")
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror

            <div class="form-group">
                <label for="exampleInputPassword1">link</label>
                <input style="font-size: 20px" name="link" type="text" class="form-control" id="hint" >
                @error("link")
                <small id="score" class="form-text text-muted">{{$message}}</small>
                @enderror
                @csrf
            </div>


        </div>
            <div class="form-group">
                <label for="exampleInputPassword1">difficulty</label>
                <select name="difficulty">
                    <option value="{{$chall[0]->difficulty}}">{{$chall[0]->difficulty}}</option>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
                @error("difficulty")
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                @enderror


        </div>
        <button style="font-size: 12px" type="submit" class="btn btn-success">Edit</button>
    </form>
@endsection
