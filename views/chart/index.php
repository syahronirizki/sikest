<?php
/* @var $this yii\web\View */
use dosamigos\chartjs\ChartJs;


$this->title = 'Grafik Laporan';

$Gender=[];
foreach ($psi as $pasien) {
    $Gender[]=$pasien["Gender"];
}
?>

<div class="row">
    <div class="col-md-12">
        <p style="text-align: center;">Jumlah Pasien terdaftar Berdasarkan Gender :</p>
    <?= ChartJs::widget([
    'type' => 'pie',
    'options' => [
        'height' => 150,
        'width' => 400
    ],
    'data' => [
        'labels' => ["Pria", "Wanita"],
        'datasets' => [
            [
                'label' => "My Dataset",
                'backgroundColor' => [
                    'rgb(54, 162, 235)',
                    'rgb(255, 99, 132)',
                ],
                'borderColor' => "rgba(179,181,198,1)",
                'pointBackgroundColor' => "rgba(179,181,198,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(179,181,198,1)",
                'data' => $Gender
            ],
        ]
    ]
]);
?>
    </div>
</div>

