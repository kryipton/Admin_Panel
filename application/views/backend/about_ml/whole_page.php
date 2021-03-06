<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/head");?>


<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/menu");?>




    <div class="page-content">


        <div class="content">
            <h1 class="c_title">Haqqımızda hissəsi</h1>
            <div class="grid simple ">
                <div class="row" style="margin-top: 50px">
                    <div class="grid-body no-border c_grid_padding">
                        <div class="row">

                            <form action="<?php echo base_url("secure_admin_panel_about_act_ml")?>" method="post">



                                <!--                                3 dilin linki-->
                                <ul class="nav nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#az">Azərbaycan</a></li>
                                    <li><a data-toggle="pill" href="#en">İngilis</a></li>
                                    <li><a data-toggle="pill" href="#ru">Rus</a></li>
                                </ul>
                                <!--                                3 dilin linki-->


                                <!--                                3 dilde olan divler-->
                                <div class="tab-content">

                                    <!--                                        Azerbaycanca olan hisse-->
                                    <div id="az" class="tab-pane fade in active">

                                        <label>Haqqında</label>
                                        <textarea id="editor1" name="desc_az"><?php echo $about['text_az']?></textarea>
                                        <br><br>
                                    </div>
                                    <!--                                        Azerbaycanca olan hisse-->



                                    <!--                                        Ingilisce olan hisse-->
                                    <div id="en" class="tab-pane fade">

                                        <label>About</label>
                                        <textarea id="editor2" name="desc_en"><?php echo $about['text_en']?></textarea>
                                        <br><br>
                                    </div>
                                    <!--                                        Ingilisce olan hisse-->




                                    <!--                                        Rusca olan hisse-->
                                    <div id="ru" class="tab-pane fade">

                                        <label>Около</label>
                                        <textarea id="editor3" name="desc_ru"><?php echo $about['text_ru']?></textarea>
                                        <br><br>
                                    </div>
                                    <!--                                        Rusca olan hisse-->

                                </div>
                                <!--                                3 dilde olan divler-->

                                <button type="submit" class="btn btn-primary c_marginleft_20px">Yadda saxla</button>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/footer");?>

    <script>
        CKEDITOR.replace( 'editor1', {});
        CKEDITOR.replace( 'editor2', {});
        CKEDITOR.replace( 'editor3', {});
    </script>

    <!--melumat alerti-->
<?php if($this->session->flashdata("alert_danger")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert_danger")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>

<?php if($this->session->flashdata("alert")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>