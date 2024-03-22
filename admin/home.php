<main class="container">
        <?php include "boxleft.php" ?>
        <article>
            <div class="dasboard-wp">
                <div class="dasboard">
                    <h4>
                        ĐH HOÀN THÀNH
                    </h4>
                    <?php 
                        $status='3';
                        $countOrderWait=countOrderWait($status);
                        if ($countOrderWait[0]['countOrderWait']=='') {
                            echo '
                            <span>
                                0
                            </span>';
                        }else{
                        echo '
                        <span>
                            '.$countOrderWait[0]['countOrderWait'].'
                        </span>';}
                    ?>
                </div>
                <div class="dasboard">
                    <h4>
                        ĐH CHỜ XÁC NHẬN
                    </h4>
                    <?php 
                        $status='0';
                        $countOrderWait=countOrderWait($status);
                        if ($countOrderWait[0]['countOrderWait']=='') {
                            echo '
                            <span>
                                0
                            </span>';
                        }else{
                        echo '
                        <span>
                            '.$countOrderWait[0]['countOrderWait'].'
                        </span>';}
                    ?>
                </div>
                <div class="dasboard">
                    <h4>
                        DOANH THU / NGÀY
                    </h4>
                    <?php 
                        $thongke_dt=thongke_doanh_thu_follow_date();
                        foreach ($thongke_dt as $tkdt) {
                            extract($tkdt);
                        }
                        echo '
                        <span>
                            '.number_format($totalOrder).' VND
                        </span>';
                    ?>
                </div>
                <div class="dasboard">
                    <h4>
                        KHÁCH HÀNG
                    </h4>
                    <?php 
                        $countUser=countUser();
                        echo '
                        <span>
                            '.$countUser[0]['countKH'].'
                        </span>';
                    ?>
                </div>
            </div>
            <div class="bieudo">
                <!-- <img src="../assets/img/bieudo.svg" alt=""> -->
                <iframe src="chartHouse.php" frameborder="0" width="100%" height="600px">
                    
                </iframe>
            </div>
        </article>
</main>

