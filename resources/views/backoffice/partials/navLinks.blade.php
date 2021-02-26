<div class="mt-5 bg-light p-2">
    <div>
        <h1 class="m-3">Nav Links</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Link</th>
            <th scope="col">Name</th>
            {{-- Edit --}}
            <th scope="col"> </th>
            {{-- Delete --}}
            <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($navLinks as $link)
            <tr>
                <th scope="row">{{$link->id}}</th>
                <td>{{$link->href}}</td>
                <td>{{$link->name}}</td>
                <td>
                    {{-- Edit --}}
                    <a href="" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    {{-- Delete --}}
                    <form action="">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>