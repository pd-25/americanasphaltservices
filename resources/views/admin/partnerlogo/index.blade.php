@extends('admin.main.layout')
@section('content')
<style>
    .action-icons {
    display: block;
    gap: 10px; /* Adjust the gap between the icons as needed */
}
</style>
    <div class="app-card app-card-stats-table h-100 shadow-sm">
        <div class="app-card-header p-3">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h4 class="app-card-title">Partner Logo List</h4>
                    @if (Session::has('msg'))
                        <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
                </div>
                <div class="col-auto float-end">
                    <a href="{{ route('partner-logo.create') }}" class="btn btn-sm btn-success">Add Partner</a>
                </div>


            </div>

        </div>

        <div class="app-card-body p-3 p-lg-4">
            <div class="table-responsive">
                <table class="table table-borderless mb-0 ">
                    <thead>
                        <tr>
                            <th class="meta">Images</th>
                            <th class="meta ">Created at</th>
                            <th class="meta ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partner_logos as $item)
                            <tr>
                                <td class="align-self-center"> 
                                    @if (isset($item) && !empty($item->image) && File::exists(public_path('storage/partner_logos/' . $item->image)))
                                    <img height="103" width="127"
                                        src="{{ asset('storage/partner_logos/' . $item->image) }}" alt="">
                                @else
                                    <img src="{{ asset('User/assets/img/the-japanese-bridge-claude-monet.jpg') }}">
                                @endif</td>
                                <td class="align-self-center">{{$item->created_at}}</td>
                                <td class="action-icons align-self-center">
                                
                                        <form method="POST" action="{{ route('partner-logo.destroy', $item->id) }}" class="action-icon" onsubmit="return confirm('Are you sure you want to delete this image?');">

                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit"
                                            class="btn btn-outline-danger btn-xs delete-icon"
                                            data-toggle="tooltip" title='Delete'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div><!--//table-responsive-->
        </div><!--//app-card-body-->
    </div>
@endsection
