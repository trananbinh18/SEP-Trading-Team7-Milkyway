@extends ('layout.master')
@section(' title ')
Danh sách sản phẩm người bán
@stop
@section('content') 
<div class="row row-addproduct">
      <div class="col-md-3 box-shadow control-infotproduct">
        <div>
          <aside class="widget widget_product_categories" style="padding-left: 10px;">
            <div class="categories-home3">
             <h3>TRANG NHÂN VIÊN </h3>
             <i class="fa fa-chevron-circle-down icon-click"></i>
             <ul class="menu-vertical">
              <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Account_Seller')}}" title="Danh sách sản phẩm">Danh Sách Người Bán</a></li>
              <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Account_Buyer')}}" title="Danh sách sản phẩm">Danh Sách Người Mua</a></li>
              <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('listprosale')}}" title="Doanh số">Danh Sách Sản Phẩm</a></li>
              <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Salerevenueemployee')}}" title="Doanh số">Doanh Thu</a></li>
              <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('ResetPassword')}}" title="Doanh số">Đổi Mật Khẩu</a></li>
            </ul>
          </div>

        
        </aside>   
        </div> 
        </div>
    <div class="col-md-8 control-infotproduct box-shadow">
      <label class="col-md-2 control-lab">THỐNG KÊ:</label>
      <select id="SeclectAna" class="Unit">
        <option value="thang">Theo các Tháng</option>
        <option value="ngay">Theo các Ngày</option>
        <option value="tuan">Theo các Tuần</option>    
        <option value="nam">Theo các Năm</option>                     
      </select>     
      <br>
      <br>
      <label class="col-md-2 control-lab">BIỂU ĐỒ:</label>
      <select id="Seclectchart" class="Unit">
        <option value="cot">Dạng cột</option>    
        <option value="duong">Dạng đường</option>      
      </select>
      <div class="col-md-12 table-product">
        {{-- canvas display the chart --}}
        <canvas id="myChart" width="400" height="300"></canvas>
      </div>
    </div>
</div>
<div id="back-to-top">
  <i class="fa fa-long-arrow-up"></i>
</div>
<!-- jQuery -->
<script src="resources/assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="resources/assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="resources/assets/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="resources/assets/js/dataTables/jquery.dataTables.min.js"></script>
<script src="resources/assets/js/dataTables/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="resources/assets/js/startmin.js"></script>

{{-- CDN chart import --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
{{-- End CDN chart import --}}

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
var myChart;
$(document).ready(function() {
  //ajax for canvas
    var maxItem = 7;
    $.getJSON('SalerevenueDatathangforEmployee/', function (data){
         //canvas for chart 
    var ctx = document.getElementById("myChart");
    myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: monthArray(data,maxItem),
        datasets: [{
            label: 'Tổng doanh thu trong tháng',
            data: priceArray(data,maxItem),
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(225, 129, 68, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(225, 129, 68, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'VNĐ',
                    fontSize: 14,
                    padding:6
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Tháng',
                    fontSize: 14,
                    padding:6
                }
            }]
        }
        }
});

    //end canvas
    });


    var ctx = document.getElementById("myChart");
    $('#SeclectAna').change(function(){
        $("#Seclectchart").val("cot");
        if($(this).val()=='thang'){//Get by tháng
$.getJSON('SalerevenueDatathangforEmployee/', function (data){
                myChart.destroy();
                myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: monthArray(data,maxItem),
        datasets: [{
            label: 'Tổng doanh thu trong tháng',
            data: priceArray(data,maxItem),
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(225, 129, 68, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(225, 129, 68, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'VNĐ',
                    fontSize: 14,
                    padding:6
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Tháng',
                    fontSize: 14,
                    padding:6
                }
            }]
        }
        }
});

            });
        }else if($(this).val()=='ngay'){//Get by day
            $.getJSON('SalerevenueDatangayforEmployee/', function (data){
                myChart.destroy();
                myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: dayArray(data,maxItem),
        datasets: [{
            label: 'Tổng doanh thu trong ngày',
            data: priceArray(data,maxItem),
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(225, 129, 68, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(225, 129, 68, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'VNĐ',
                    fontSize: 14,
                    padding:6
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Ngày',
                    fontSize: 14,
                    padding:6
                }
            }]
        }
        }
});

            });
        }else if($(this).val()=='tuan'){// Get by tuan
                $.getJSON('SalerevenueDatatuanforEmployee/', function (data){
                myChart.destroy();
                myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: weekArray(data,maxItem),
        datasets: [{
            label: 'Tổng doanh thu trong tuần',
            data: priceArray(data,maxItem),
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(225, 129, 68, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(225, 129, 68, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'VNĐ',
                    fontSize: 14,
                    padding:6
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Tuần',
                    fontSize: 14,
                    padding:6
                }
            }]
        }
        }
});

            });
        }else{
            $.getJSON('SalerevenueDatanamforEmployee/', function (data){
                myChart.destroy();
                myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: yearArray(data,maxItem),
        datasets: [{
            label: 'Tổng doanh thu trong năm',
            data: priceArray(data,maxItem),
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(225, 129, 68, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(225, 129, 68, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'VNĐ',
                    fontSize: 14,
                    padding:6
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Năm',
                    fontSize: 14,
                    padding:6
                }
            }]
        }
        }
});

            });
        }
    });
    $("#Seclectchart").change(function(){
        var data1 = myChart.data;
        var option1 = myChart.options;
        myChart.destroy();
        if($(this).val()=="duong"){
            myChart = new Chart(ctx, {
            type: 'line',
            data: data1,    
            options: option1
            });
        }else{
            myChart = new Chart(ctx, {
            type: 'bar',
            data: data1,    
            options: option1
        });
        }
        
    });
});


</script>

@endsection