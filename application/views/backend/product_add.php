<div class="bg-light py-5">
    <div class="container">
        <div class="d-flex justify-content-between mb-4 align-items-center">
            <h4 class="mb-0">Add Product</h5>
            <div>
                <a href="<?php echo base_url(); ?>admin/product_list" class="fw-bold px-5 py-2 bg-white rounded-3">Go Back</a>
            </div>
        </div>
        <div class="bg-white rounded-3 p-5">
            <form action="">
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6">
                        <p class="mb-2">Product Code <span class="ms-2 text-danger">*</span></p>
                        <input id="product_code" code="product_code" type="text" placeholder="Enter Product Code" class="border rounded-3 px-4 py-2 w-100">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p class="mb-2">Product Image <span class="ms-2 text-danger">*</span></p>
                        <input id="product_img" name="product_img" type="file" placeholder="Choose Product Image" class="border rounded-3 px-4 py-2 w-100">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p class="mb-2">Product Name <span class="ms-2 text-danger">*</span></p>
                        <input id="product_name" name="product_name" type="text" placeholder="Enter Product Name" class="border rounded-3 px-4 py-2 w-100">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p class="mb-2">Product Description <span class="ms-2 text-danger">*</span></p>
                        <textarea id="product_desc" name="product_desc" type="text" placeholder="Enter Product Description" rows="3" class="border rounded-3 px-4 py-2 w-100"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="mt-3 d-flex justify-content-end gap-3">
                            <div>
                                <button href="#" class="px-5 py-2 bg-white rounded-3 border fw-bold text-black">Cancel</button>
                            </div>
                            <div>
                                <button href="#" class="px-5 py-2 bg-primary rounded-3 border fw-bold text-white">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>