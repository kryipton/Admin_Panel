
<div class="c_loader c_update_spinner" style="display: none;">
    <div class="c_loader-wheel"></div>
    <div class="c_loader-text"></div>
</div>

<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/head");?>

<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/menu");?>


    <div class="page-content">

        <div class="content">
            <h1 class="c_title">Brendlərin Modelləri</h1>
            <div class="grid simple ">
                <div class="row" style="margin-top: 50px">
                    <div class="grid-body no-border c_grid_padding">
                        <div class="row c_resfresh_portfolio_category">



                            <?php $this->load->view("$this->parent_folder/$this->sub_folder/car_model_render_page/model_table");?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/footer");?>
<!--melumat alerti-->
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

