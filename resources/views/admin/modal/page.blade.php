<form action="@if(isset($page)){{route('page.update',[$page->id])}}@else{{route('page.store')}}@endif" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade text-left" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        {{ __('Create New Page') }}
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input type="name" name="name" class="form-control" id="name" >
                        </div>
                        <div class="mb-3">
                            <label for="picture" class="form-label">Picture</label>
                            <input type="file" name="name" class="form-control" id="picture" >
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="ckeditor" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
            </div>
        </div>
        @push('script')
    <script type="text/javascript">
        ClassicEditor
            .create( document.querySelector( '#ckeditor' ) )
            .catch( error => {
                console.error( error );
        } );
        </script>
    @endpush
</form>