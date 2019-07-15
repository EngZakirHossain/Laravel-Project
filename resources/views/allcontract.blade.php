@extends('layout')
@section('content')


<div class="box span6">
					
					<div class="box-content">
						<table class="table table-striped">
							  <thead>
								  <tr>
									  <th>UserID</th>
									  <th>User Name</th>
									  <th>Number</th>
									  <th>Action</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
					@foreach($allcontract_info as $view_content)		  	
					<tr>
						<td class="center">{{$view_content->id}}</td>
						<td class="center">{{$view_content->name}}</td>
						<td class="center">{{$view_content->number}}</td>
						<td class="center">
							<a href="{{URL::to('/edit_content/'.$view_content->id)}}" class="btn btn-info"> Edit</a>
							<a href="{{URL::to('/delect_content/'.$view_content->id)}}" class="btn btn-danger" id="delect"> Delect</a>


						</td>                                       
					</tr>
					@endforeach			                          
							  </tbody>
						 </table>  
						  
					</div>
				</div><!--/span-->
			</div><!--/row-->

@endsection