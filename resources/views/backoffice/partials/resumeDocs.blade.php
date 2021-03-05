<div id="resumeDocs" class="bg-light pt-3 my-5">
    <div>
        <h1 class="m-3">Resume Docs</h1>
        <div class="w-25 d-flex justify-content-around my-2">
            {{-- Create --}}
            {{-- <a href="{{route('createResumeDocs')}}" class="btn btn-success">ADD</a> --}}
            {{-- Delete All --}}
            {{-- <form action="{{route('destroyAllResumeDocs')}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">DELETE ALL</button>
            </form> --}}
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Src</th>
                {{-- Show --}}
                <th scope="col"> </th>
                {{-- Edit --}}
                <th scope="col"> </th>
                {{-- Delete --}}
                {{-- <th scope="col"> </th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($resumeDocs as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                <td>{{$link->name}}</td>
                <td>{{$link->src}}</td>
                <td>
                    {{-- Show --}}
                    <a href="/showResumeDocs/{{$link->id}}" class="btn btn-primary">SHOW</a>
                </td>
                <td>
                    {{-- Edit --}}
                    <a href="/editResumeDocs/{{$link->id}}" class="btn btn-warning">EDIT</a>
                </td>
                {{-- <td> --}}
                    {{-- Delete --}}
                    {{-- <form action="/destroyResumeDocs/{{$link->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form> --}}
                {{-- </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>