@extends('layouts.home.app')

@section('content')

@section('title', __('My Channel'))

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ $channel->name }}</div>

                <div class="card-body">
                    
                    <form id="update-channel-form" action="{{ route('channels.update',$channel->id) }}" method="POST" enctype="multipart/form-data">
						
						@csrf

						@method('PATCH')

						<div class="form-group row justify-content-center">
						    <div class="channel-avatar">	
						    	<div class="channel-avatar-overlay" onclick="document.getElementById('image').click();">
						    		<img src="https://image.flaticon.com/icons/png/128/685/685655.png" data-src="https://image.flaticon.com/icons/png/128/685/685655.png" alt="Camera free icon" title="Camera free icon" width="64" height="64" class="lzy lazyload--done" srcset="https://image.flaticon.com/icons/png/128/685/685655.png 4x">
						    	</div>
						    </div>
						</div>

						<input id="image" type="file" name="image" class="d-none" onchange="document.getElementById('update-channel-form').submit()">

						<div class="form-group">
						    <label for="name">Name</label>
						    <input id="name" type="text" class="form-control" placeholder="Enter Name" value="{{ $channel->name }}">
						</div>

						<div class="form-group">
						    <label for="description">Description</label>
						    <textarea id="description" name="description" rows="3" class="form-control" placeholder="Enter Description">
						    	{{ $channel->description }}
						    </textarea>
						</div>

						  <button type="submit" class="btn btn-primary col-12">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection