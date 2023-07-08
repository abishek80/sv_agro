<div class="bg-light py-5">
    <div class="container">
        <div class="d-flex justify-content-between mb-4 align-items-center">
            <a href="<?php echo base_url(); ?>admin/admin_home">
                <h4 class="mb-0"><i class="fa fa-home me-1"></i> Gallery List</h4>
            </a>
            <div>
                <a href="<?php echo base_url(); ?>admin/gallery_add" class="fw-bold px-5 py-2 bg-white rounded-3">Add Gallery</a>
            </div>
        </div>
        <div class="bg-white rounded-3 p-3">
            <table class="border border-dark table table-hover">
                <thead>
                    <tr>
                        <th>S. No</th>
                        <th>Gallery Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td><div class="background-image admin-product-img" style="background-image: url('<?php echo base_url(); ?>themes/img/hero-1.jpg');"></div></td>
                        <td>
                            <div class="d-flex gap-3 justify-content-center">
                                <div><a href="#">Edit</a></div>
                                <div><a href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </div>
        </div>
    </div>
</div>