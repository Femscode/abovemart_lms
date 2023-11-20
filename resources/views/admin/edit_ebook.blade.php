@extends('admin.master')
@section('header')
@endsection

@section('content')

<div class="page-content-wrapper border">

    

    <!-- Course boxes START -->
    <div class="row g-4 mb-4">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="addEbookLabel">Edit Ebook</h5>
                <button onclick='return history.back()' type="button" class="btn btn-sm btn-light mb-0" aria-label="Back">Back</button>
            </div>
            <div class="modal-body">
                <form action="/update_ebook" method='post' class="row text-start g-3" enctype='multipart/form-data'>@csrf
                    <!-- Question -->
                    <div class="col-12">
                        <label class="form-label">Title/Name</label>
                        <input type='hidden' name='id' value='{{ $ebook->id }}'/>
                        <input id='title' name='title' required class="form-control" type="text"
                            value="{{ $ebook->title }}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Display Image<span style='color:red'> (Optional)</span></label>
                        <input id='file' name='image' accept="image/*" class="form-control" type="file">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea id='description' name='description' required class="form-control" type="text"
                           >{{ $ebook->description }}</textarea>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Category</label>
                        <select id='category' name='category_id' class='form-control'>
                            <option value='{{ $ebook->category_id }}'>{{ $ebook->cat->name ?? '--Select Category--'}}</option>
                            @foreach($categories as $category)
                            <option value='{{ $category->id }}'>{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Author<span class='text-danger'>(Optional)</span></label>
                        <input id='author' name='author' value="{{ $ebook->author }}" class="form-control" type="text">
                    </div>


                    <div class="col-12">
                        <label class="form-label">Ebook File</label>
                        <input id='file' name='file'  accept=".pdf, .doc, .docx" class="form-control" type="file">
                    </div>
                   

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
                <button id='c_submita' type="submit" class="btn btn-success my-0">Update</button>
            </div>
            </form>
        </div>

    </div>
    <!-- Course boxes END -->

  
</div>


@endsection

@section('script')
<script>
    $('document').ready(function() {
        
							$('body').on('click', '#delete_ebook', function() {
      // var id = $("#delete_id").val();
      id = $(this).data('id');
      console.log(id)
      var token = $("meta[name='csrf-token']").attr("content");
      var el = this;
      // alert(user_id);
      resetAccount(el, id);
    });


    async function resetAccount(el, id) {
      const willUpdate = await swal({
        title: "Confirm Ebook Delete",
        text: `Are you sure you want to delete this E-Book?`,
        icon: "warning",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes!",
        showCancelButton: true,
        buttons: ["Cancel", "Yes, Delete"]
      });
      if (willUpdate) {
        //performReset()
        performDelete(el, id);
      } else {
        swal("Course will not be deleted  :)");
      }
    }


    function performDelete(el, id) {

      try {
        $.get('{{ route("delete_ebook") }}?id=' + id,
          function(data, status) {
            console.log(status);
            console.table(data);
            if (status === "success") {
              let alert = swal('success', "Course successfully deleted!.", 'success');
              $(el).closest("tr").remove();
              // alert.then(() => {
              // });
            }
          }
        );
      } catch (e) {
        let alert = swal(e.message);
      }
    }
    })

</script>

<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
@endsection