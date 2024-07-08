@extends('admin.main')
@section('content')
<form action="/admin/product/add" enctype="multipart/form-data" method="post">
    @csrf
    <div class="admin-content-main-content-product-add">
        <div class="admin-content-main-content-left">
            <div class="admin-content-main-content-two-input">
                <input type="text" value="{{old('name')}}" name="name" placeholder="Tên sản phẩm">
                <input type="text" value="{{old('material')}}" name="material" placeholder="Chất liệu">
            </div>
            <div class="admin-content-main-content-two-input">
                <input type="text" value="{{old('price_nomal')}}" name="price_nomal" placeholder="Giá bán">
                <input type="text" value="{{old('price_sale')}}" name="price_sale" placeholder="Giá giảm">
            </div>
            <textarea class="editor_des" value="{{old('description')}}" name="description"
                placeholder="Đặc điểm nổi bật" id=""></textarea>
            <textarea class="editor_content" value="{{old('content')}}" name="content" placeholder="Mô tả sản phẩm"
                id=""></textarea>
            <br>
            <button type="submit" class="main-btn">Thêm sản phẩm</button>
        </div>
        <div class="admin-content-main-content-right">
            <div class="admin-content-main-content-right-image">
                <label for="file">Ảnh đại diện</label>
                <input id="file" type="file">
                <input type="hidden" name="image" id="input-file-img-hidden">
                <div class="image-show" id="input-file-img">

                </div>
            </div>
            <div class="admin-content-main-content-right-images">
                <form action="" method="POST" enctype="multipart/form-data">

                    @csrf
                    <label for="files">Thêm Ảnh sản phẩm</label>
                    <input id="files" type="file" multiple>
                    <div class="images-show" id="input-file-imgs">
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
</form>
@endsection
@section('footer')
<script src=" {{asset('backend/asset/ckeditor5/script.js')}}">
</script>
<script src="{{asset('backend/asset/ckeditor5/ckeditor.js')}}"></script>
<script src="{{asset('backend/asset/js/product_ajax.js')}}"></script>
<script>
function addImageInput() {
    const container = document.getElementById('imageInputs');
    const input = document.createElement('input');
    input.type = 'file';
    input.name = 'files[]';
    input.accept = 'image/*';
    input.required = true;
    container.appendChild(input);
}
</script>
<script>
ClassicEditor
    .create(document.querySelector('.editor_des'), {
        // Editor configuration.
    })
    .then(editor => {
        window.editor = editor;
    })
    .catch(handleSampleError);

ClassicEditor
    .create(document.querySelector('.editor_content'), {
        // Editor configuration.
    })
    .then(editor => {
        window.editor = editor;
    })
    .catch(handleSampleError);
</script>
@endsection
<!-- cnjsjaocnjsdncldsnlcndscnlds -->