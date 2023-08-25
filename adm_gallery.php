<?php
    include_once 'includes/connect.inc.php';
    include_once 'adminheader.php';
?>

    <div class="container p-5">

        <div class="text-end pb-4">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#createRoomModal">Add Image</button>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Image Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $sql = "SELECT * FROM gallery WHERE active='1'";

                        $gallery_list = mysqli_query($conn, $sql);
                        $gallerylistcheck = mysqli_num_rows($gallery_list);
                
                        if ($gallerylistcheck > 0) {
                            while ($rows = mysqli_fetch_assoc($gallery_list)) {
                            $imageGalleryURL = 'img/gallery/'.$rows["gallery_image"];
                    ?>
                    <tr>
                        
                        <td><img src="<?php echo 'img/gallery/'.$rows["gallery_image"]; ?>" alt="..." style="width: 100px;"></td>
                        <td><?php echo $rows['gallery_name']; ?></td>
                        
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#galleryUpdate<?php echo $rows['gallery_id'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                    </svg>
                            </button>
                            <a href="includes/deletegallery.inc.php?id=<?php echo $rows["gallery_id"]; ?>">
                                <button type="button" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
                                    </svg>
                                </button>
                            </a>
                        </td>
                    </tr>
    
        
        <div class="modal fade" id="galleryUpdate<?php echo $rows['gallery_id'] ?>" tabindex="-1" aria-labelledby="galleryUpdateLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="galleryUpdateLabel">Update Gallery</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="includes/updategallery.inc.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" id="gallery_id" name="gallery_id" value="<?php echo $rows['gallery_id']; ?>">
                            <div class="mb-3">
                                <label for="gallery_name" class="form-label">Gallery Image Name:</label>
                                <input type="text" class="form-control" id="gallery_name" name="gallery_name" aria-describedby="gallery_name" value="<?php echo $rows['gallery_name']; ?>">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="file" name="file" />
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>    


        <!-- Modal Create -->
        <div class="modal fade" id="createRoomModal" tabindex="-1" aria-labelledby="createRoomModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createRoomModalLabel">Add Gallery Image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="includes/addgalleryimg.inc.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="gallery_name" class="form-label">Gallery Image Name:</label>
                                <input type="text" class="form-control" id="gallery_name" name="gallery_name" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="file" name="file" value="" required/>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                 
        <?php
                        }
                    }
                ?>
            </tbody>
        </table>
        </div>                   

    </div>
    
    
<?php

include_once('scripts.php');

?>

