<!-- 


<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="{{route('addproducts')}}" method="post" id="addproductForm">
        @csrf
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">products</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="errMsgContainer">

        </div>
        <div class="form-group">
            <label for="name">product name </label>
            <input type="text" class="form-control" name="name" id="name" placeholder="product name">
        </div>
        <div class="form-group">
            <label for="name">product price </label>
            <input type="text" class="form-control" name="price" id="price" placeholder="product price">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary ">Save product</button>
      </div>
    </div>
  </div>
</form>
</div> -->

<!-- @include('product_js') -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script>
  $(document).ready(function(){
    $(document).on('click','.add_product',function(e){
       e.preventDefault();
       let name=$('#name').val();
       let price=$('#price').val();
    //    console.log(name+price);
       $.ajax({

        url:{{route('add.product')}},
        method:'post',
        data:{name:name,price:price},
        success:function(res){
          if(res.status=='success'){
            $('#addmodel').model('hide');
            $('#addproductForm')[0].reset();
          }

        },error:function(err){
            let error=err.responseJSON;
            $.each(error.errors,function(index,value){});
            $(.'errMsgContainer').append('<span class="text-danger">'+value+'</span'+'<br>');
                  }
       });
    })
  })
</script> -->