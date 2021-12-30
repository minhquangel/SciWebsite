<form action="{{ route('admin.blog.destroy', $blogId) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="delete" />
    <div id="deleteBlogModal{{ $blogId }}" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="section-title mt-5 mb-5">
                        <h2 class="text-gradient-02"> Destroy {{ $blogId }}, Are you sure ? </h2>
                    </div>
                    <button type="button" class="btn btn-secondary mb-3 mr-3" data-dismiss="modal">
                        <i class="la la-close"></i> No
                    </button>
                    <button type="submit" class="btn btn-success mb-3">
                        <i class="la la-check"></i> Yes
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
