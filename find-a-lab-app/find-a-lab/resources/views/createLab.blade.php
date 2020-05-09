

<div class ="row">
    <div class="col-md-12">
        <br/>
        <h3 aling ="center"> Add Lab</h3>
        </br>
        <form method ="post" action = "{{ url('labs') }}"> 
        {{csrf_field()}}
            <input type ="text" name = "Name" class = "form-control" placeholder = "Enter Lab name"/>

            <input type ="text" name = "Location" class = "form-control" placeholder = "Enter Lab location"/>
            
            <input type ="submit" name = "submit"/>

        </form>
    </div>
</div>