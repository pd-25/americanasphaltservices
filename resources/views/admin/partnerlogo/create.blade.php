@extends('admin.main.layout')
@section('content')
    <div class="container-xl">
        <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
            <div class="inner">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <form class="settings-form" action="{{ route('partner-logo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div id="image-all">
                                <label for="setting-input-3" class="form-label">Image</label>
                                <div class="mb-3 image-field">
                                    <input type="file" name="image[]" class="form-control" required multiple>
                                </div>
                            </div>
                            <div class="mb-3 float-end">
                                <button type="button" class="btn btn-sm btn-success" onclick="addMoreImage()">+ Add more image</button>
                            </div>
                            <div class="mt-5">
                                <button type="submit" class="btn app-btn-primary">Save</button>
                            </div>
                        </form>
                        
                    </div><!--//app-card-body-->
                </div>
            </div><!--//inner-->
        </div><!--//app-card-->
    </div><!--//container-fluid-->
@endsection

@section('script')
    <script>
        function addMoreImage() {
            var html =
                '<div class="mb-3 image-field"><input type="file" name="image[]" class="form-control" required><button type="button" class="btn btn-danger btn-sm remove-image mt-2">Remove</button></div>';
            var container = document.getElementById('image-all');
            container.insertAdjacentHTML('beforeend', html);
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-image')) {
                e.target.parentElement.remove();
            }
        });
    </script>
@endsection
