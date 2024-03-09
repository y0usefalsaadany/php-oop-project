<?php
require "./Views/dashboard/layouts/header.php";
?>

<body class="g-sidenav-show  bg-gray-200">
    <?php require "./Views/dashboard/layouts/sidebar.php"; ?>



    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Articles table</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Article</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php


                                foreach ($articles as $article) {
                                    ?>
                                <tr>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold"><?= $article['title']?></span>
                                    </td>
                                    <td >
                                        <span class="text-secondary text-xs font-weight-bold"><?= $article['article']?></span>
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <?php

                                }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require "./Views/dashboard/layouts/footer.php";
    ?>