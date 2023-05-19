@extends('layouts/admin')

@section('content')

    <Table class="mt-5 table table-striped">
        <thead>
            <th>Titolo</th>
            <th>Contenuto</th>
            <th>Slug</th>
        </thead>

        <tbody>

            @foreach ($projects as $singleProject)
                <tr>
                    <td>{{$singleProject->title}}</td>
                    <td>{{$singleProject->content}}</td>
                    <td>{{$singleProject->slug}}</td>
                    <td><a href="{{route('admin.projects.show', $singleProject->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                </tr>     
                
            @endforeach
        </tbody>
    </Table>

    
@endsection