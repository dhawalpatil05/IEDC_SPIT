<html>
<body>
<div>
<table border="1px">
<tr>
<th>Mentor_Id</th>
<th>Mentor_FullName</th>
<th>Mentor_Department</th>
<th>Mentor_username</th>
<th>Mentor_password</th>
<th>Mentor_Idea_id</th>
</tr>
@foreach($data_ment as $data_ment)
<tr>
<td>{{$data_ment->ment_id}}</td>
<td>{{$data_ment->ment_fullname}}</td>
<td>{{$data_ment->ment_dept}}</td>
<td>{{$data_ment->ment_username}}</td>
<td>{{$data_ment->ment_pass}}</td>
<td>{{$data_ment->ment_idea_id_fk}}</td>
 </td>
</tr>
@endforeach
</table>
</div><br>

<div>
<table border="1px">
<tr>
<th>Idea_ID</th>
</tr>

@foreach($data_idea as $data_idea)
<tr>
<td>{{$data_idea->idea_id}}</td>
</tr>
@endforeach
</table>
</div>
<br>


<div>
<h3>Add_Idea</h3>
<form action="{{route('add_ment_idea')}}" method="post" enctype="multipart/form-data">
@csrf
<label>Enter Mentor_id</label><br>
<input type="text" name="mentor_id"><br>
<label>Enter Idea_id</label><br>
<input type="text" name="idea_ment_id"><br>
<input type="submit" name="ment_id_sub">
</form>
</div><br>

<div>
<h3>Delete_Mentor</h3>
<form action="{{route('delete_ment')}}" method="post" enctype="multipart/form-data">
@csrf
<label>Enter Mentor_id</label><br>
<input type="text" name="mentor_id"><br>
<input type="submit" name="ment_id_sub">
</form>
</div>

<div>
<h3>Add_Mentor</h3>
<form action="{{route('add_mentor')}}" method="post" enctype="multipart/form-data">
@csrf
<label>Enter Mentor_name</label><br>
<input type="text" name="mentor_name"><br>

<label>Enter Mentor_dept</label><br>
<input type="text" name="mentor_dept"><br>

<label>Enter Mentor_username</label><br>
<input type="text" name="mentor_username"><br>

<label>Enter Mentor_pass</label><br>
<input type="text" name="mentor_pass"><br>

<label>Enter Idea_id</label><br>
<input type="text" name="mentor_idea_id"><br>

<input type="submit" name="ment_id_sub">
</form>
</div>



</body>
</html>