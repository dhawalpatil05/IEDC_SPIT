<html>
<body>
<div>
<table border="1px">
<tr>
<th>Mentor_Id</th>
<th>Idea_Id</th>
<th>Idea_Title</th>
<th>Week_Progress</th>
<th>Parameters</th>
</tr>
@foreach($data_mmon_log as $data_mmon_log)
<tr>
<td>{{$data_mmon_log->ment_m_id}}</td>
<td>{{$data_mmon_log->idea_m_id}}</td>
<td>{{$data_mmon_log->idea_m_title}}</td>
<td>{{$data_mmon_log->week_progress}}</td>
<td>{{$data_mmon_log->parameters}}</td>
 </td>
</tr>
@endforeach
</table>
</div><br>


<div>
<h3>Monitor_Process</h3>
<form action="{{route('mentor_monitor_p')}}" method="post" enctype="multipart/form-data">
@csrf

@foreach($data_mon_ment as $data_mon_ment)
<input type="hidden" name="ment_moni_id" value="{{$data_mon_ment->ment_id}}">
<input type="hidden" name="ment_moni_idea" value="{{$data_mon_ment->ment_idea_id_fk}}">
@endforeach

@foreach($data_mon_idea as $data_mon_idea)
<input type="hidden" name="ment_moni_title" value="{{$data_mon_idea->idea_title}}">
@endforeach


<label>Enter Weekely Progress</label><br>
<input type="text" name="week_p"><br>
<label>Enter Parameters</label><br>
<input type="text" name="para"><br>
<input type="submit" name="mont_sub">
</form>
</div><br>
