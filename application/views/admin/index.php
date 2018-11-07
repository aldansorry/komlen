<?php 
//scope chart atas
$arraykeluhanbelum = "";
$keluhanBulanAda = array();
foreach ($keluhanbelumbulanan as $value) {
    $keluhanBulanAda[$value->month_keluhan] = $value->count_keluhan;
}
$i = 1;
while ($i<=12) {
    if(isset($keluhanBulanAda[$i])){
        $arraykeluhanbelum .= $keluhanBulanAda[$i].",";
    }else{
        $arraykeluhanbelum .= "0,";
    }
    $i++;
}
$arraykeluhanbelum = substr($arraykeluhanbelum,0,-1);
$arraykeluhanbelum = "[".$arraykeluhanbelum."]";


$arraykeluhanterbalas = "";
$keluhanBulanAda = array();
foreach ($keluhanterbalasbulanan as $value) {
    $keluhanBulanAda[$value->month_keluhan] = $value->count_keluhan;
}
$i = 1;
while ($i<=12) {
    if(isset($keluhanBulanAda[$i])){
        $arraykeluhanterbalas .= $keluhanBulanAda[$i].",";
    }else{
        $arraykeluhanterbalas .= "0,";
    }
    $i++;
}
$arraykeluhanterbalas = substr($arraykeluhanterbalas,0,-1);
$arraykeluhanterbalas = "[".$arraykeluhanterbalas."]";
?>

<?php 
//donutschart
$stringValue = "";
$stringLabels = "";
$countUnit = count($keluhanunitkerja);
foreach ($keluhanunitkerja as $value) {
    $stringValue .= $value->count_keluhan.",";
    $stringLabels .= "'".$value->unit_kerja."',";
}
$stringValue = substr($stringValue,0,-1);
$stringLabels = substr($stringLabels,0,-1);
$stringValue = "[".$stringValue."]";
$stringLabels = "[".$stringLabels."]";

//donutschart
$stringValueLingkupK = "";
$stringLabelLingkupK = "";
$countUnit = count($keluhanlingkupkeluhan);
foreach ($keluhanlingkupkeluhan as $value) {
    $stringValueLingkupK .= $value->count_keluhan.",";
    $stringLabelLingkupK .= "'".$value->lingkup_keluhan."',";
}
$stringValueLingkupK = substr($stringValueLingkupK,0,-1);
$stringLabelLingkupK = substr($stringLabelLingkupK,0,-1);
$stringValueLingkupK = "[".$stringValueLingkupK."]";
$stringLabelLingkupK = "[".$stringLabelLingkupK."]";
?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">overview</h2>
                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo $this->db->get("mahasiswa")->num_rows() ?></h2>
                                    <span>Mahasiswa</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <!-- <canvas id="widgetChart1"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo $this->db->get("petugas")->num_rows(); ?></h2>
                                    <span>Petugas</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <!-- <canvas id="widgetChart2"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo $this->db->get("keluhan")->num_rows(); ?></h2>
                                    <span>Keluhan</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <!-- <canvas id="widgetChart3"></canvas> -->
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo $this->db->get("respon")->num_rows() ?></h2>
                                    <span>Keluhan Terbalas</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <!-- <canvas id="widgetChart4"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            <h3 class="title-2">Keluhan</h3>
                            <div class="chart-info mt-3">
                                <div class="chart-info__left">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>Keluhan Belum Terbalas</span>
                                    </div>
                                    <div class="chart-note mr-0">
                                        <span class="dot dot--green"></span>
                                        <span>Keluhan Terbalas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-report__chart">
                                <canvas id="recent-rep-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="au-card chart-percent-card">
                        <div class="au-card-inner">
                            <h3 class="title-2 tm-b-5">Keluhan per Unit Kerja</h3>
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="percent-chart">
                                        <canvas id="chart-unitk"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="au-card chart-percent-card">
                        <div class="au-card-inner">
                            <h3 class="title-2 tm-b-5">Keluhan per Lingkup Keluhan</h3>
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="percent-chart">
                                        <canvas id="chart-lingkupk"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
 $(document).ready(() => { 
    const keluhanBelumTerbalas = 'rgb(0, 181, 233,1)'
    const keluhanTerbalas = 'rgba(0,173,95,0.6)';

    var elements = 10
    var data1 = <?php echo $arraykeluhanbelum ?>;
    var data2 = <?php echo $arraykeluhanterbalas ?>;

    var ctx = document.getElementById("recent-rep-chart");
    if (ctx) {
      ctx.height = 250;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          datasets: [
          {
              label: 'Keluhan Terbalas',
              backgroundColor: keluhanTerbalas,
              borderColor: 'transparent',
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: data2

          },
          {
              label: 'Keluhan Belum Terbalas',
              backgroundColor: keluhanBelumTerbalas,
              borderColor: 'transparent',
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: data1

          },
          ]
      },
      options: {
          maintainAspectRatio: true,
          legend: {
            display: false
        },
        responsive: true,
        scales: {
            xAxes: [{
              gridLines: {
                drawOnChartArea: true,
                color: '#f2f2f2'
            },
            ticks: {
                fontFamily: "Poppins",
                fontSize: 12
            }
        }],
        yAxes: [{
          ticks: {
            beginAtZero: true,
            maxTicksLimit: 5,
            stepSize: 2,
            max: 10,
            fontFamily: "Poppins",
            fontSize: 12
        },
        gridLines: {
            display: true,
            color: '#f2f2f2'

        }
    }]
},
elements: {
    point: {
      radius: 0,
      hitRadius: 10,
      hoverRadius: 4,
      hoverBorderWidth: 3
  }
}


}
});
  }


  var dynamicColors = function() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgb(" + r + "," + g + "," + b + ")";
};


var coloR = [];


for (var i = 0; i < <?php echo $countUnit ?>; i++) {
  coloR.push(dynamicColors());
}

var ctx = document.getElementById("chart-unitk");
if (ctx) {
  ctx.height = 280;
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [
      {
          label: "Keluhan per Unit Kerja",
          data: <?php echo $stringValue ?>,
          backgroundColor: coloR,
          borderWidth: [
          0, 0
          ],
          hoverBorderColor: [
          'transparent',
          'transparent'
          ]
      }
      ],
      labels: <?php echo $stringLabels ?>
  },
  options: {
      maintainAspectRatio: false,
      responsive: true,
      cutoutPercentage: 55,
      animation: {
        animateScale: true,
        animateRotate: true
    },
    legend: {
        display: false
    },
    tooltips: {
        titleFontFamily: "Poppins",
        xPadding: 15,
        yPadding: 10,
        caretPadding: 0,
        bodyFontSize: 16
    }
}
});
}

var coloR1 = [];


for (var i = 0; i < <?php echo $countUnit ?>; i++) {
  coloR1.push(dynamicColors());
}

var ctx = document.getElementById("chart-lingkupk");
if (ctx) {
  ctx.height = 280;
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [
      {
          label: "Keluhan per Unit Kerja",
          data: <?php echo $stringValueLingkupK ?>,
          backgroundColor: coloR1,
          borderWidth: [
          0, 0
          ],
          hoverBorderColor: [
          'transparent',
          'transparent'
          ]
      }
      ],
      labels: <?php echo $stringLabelLingkupK ?>
  },
  options: {
      maintainAspectRatio: false,
      responsive: true,
      cutoutPercentage: 55,
      animation: {
        animateScale: true,
        animateRotate: true
    },
    legend: {
        display: false
    },
    tooltips: {
        titleFontFamily: "Poppins",
        xPadding: 15,
        yPadding: 10,
        caretPadding: 0,
        bodyFontSize: 16
    }
}
});
}

});
</script>


