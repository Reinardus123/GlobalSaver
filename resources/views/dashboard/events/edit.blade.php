@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Events </h1>
  </div>

  <div class="col-lg-8">
      <form method="post" action="/dashboard/events/{{$event->slug}}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">@lang('events.judul')</label>
          <input type="text" class="form-control @error('title')
              is-invalid
          @enderror" id="title" name="title" required autofocus value="{{old('title',$event->title)}}">
          @error('title')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
        </div>


          <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug')
                is-invalid
            @enderror" id="slug" name="slug" required value="{{old('slug',$event->slug)}}">
            @error('slug')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="category" class="form-label">@lang('events.kategori')</label>
            <select class="form-select" name="category_id">
                @foreach ( $categories as $category )
                @if (old('category_id',$event->category_id) == $category->id)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
              
                @endforeach
              </select>
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">@lang('events.gambar_event')</label>
            <input type="hidden" name="oldImage" value="{{$event->image}}">
            @if ($event->image)
              <img src="{{asset('storage/' .$event->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
             <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
          
            <input class="form-control @error('image')
                is-invalid
            @enderror" type="file" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="title" class="form-label">@lang('events.harga')</label>
            <input type="text" class="form-control @error('price')
                is-invalid
            @enderror" id="price" name="price" required autofocus value="{{old('price',$event->price)}}">
            @error('price')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control @error('date')
                is-invalid
            @enderror" id="date" name="date" required autofocus value="{{old('date')}}">
            @error('date')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{old('body',$event->body)}}">
            <trix-editor input="body"></trix-editor>
          </div>
        
        <button type="submit" class="btn btn-primary">@lang('events.perbarui_event')</button>
      </form>
  </div>

  <script>
      title.addEventListener('change',function(){
        fetch('/dahsboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })
    
    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
  </script>

@endsection