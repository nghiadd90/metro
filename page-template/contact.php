<?php
/**
 * Template Name: Contact Page
 */
?>
<?php
get_header();
?>

            <!-- Section content -->
            <section id="frg-content">
                <div class="container">
                    <div class="row">
                        <!-- Main Content -->
                        <div id="frg-main-content" class="col-sm-8">
                            <div class="frg-contact-form">
                                <form>
                                  <div class="form-group">
                                    <label for="frg-contact-name">Họ tên</label>
                                    <input type="text" class="form-control" id="frg-contact-name" placeholder="...">
                                  </div>
                                  <div class="form-group">
                                    <label for="frg-contact-email">Email</label>
                                    <input type="email" class="form-control" id="frg-contact-email" placeholder="...">
                                  </div>
                                  <div class="form-group">
                                    <label for="frg-contact-subject">Chủ đề</label>
                                    <input type="text" class="form-control" id="frg-contact-subject">
                                  </div>
                                  <div class="form-group">
                                    <label for="frg-contact-content">Nội dung</label>
                                    <textarea class="form-control" rows="6"></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-default btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- End #main-content -->



<?php
get_sidebar();
get_footer();
