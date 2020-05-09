
     @extends('layouts.app')           

     @section('content')
                <div>
                    <table class ="table table-brodered">
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                        </tr>
                        @foreach($labs as $row)
                        <tr>
                            <td>{{$row['Name']}}</td>
                            <td>{{$row['Location']}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>

               <a class= "btn" href = "/createLab" method ="get"> Add Lab</a>

    @endsection