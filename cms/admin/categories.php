<?php
include "includes/header.php";
?>

<div id="wrapper">
    <?php include "includes/navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>

                    <div class="col-lg-6">
                        <?php insert_category(); ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add Category Title</label>
                                <input type="text" name="cat_title" class="form-control" placeholder="Category Title">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
                            </div>
                        </form>

                        <?php if(isset($_GET['edit'])) {
                            $cat_id = $_GET['edit'];
                            include "includes/update_category.php";
                        } ?>
                    </div>

                    <div class="col-lg-6">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Category Title
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    //find all categories
                                    findAllCategories();
                                ?>
                                <?php
                                    //delete category
                                    deleteCategory();
                                ?>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/footer.php"; ?>
