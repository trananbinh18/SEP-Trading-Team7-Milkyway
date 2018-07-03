@extends ('layout.master')
@section(' title ')
Danh sách sản phẩm người bán
@stop
@section('content') 
<div class="row row-addproduct">
  <input type="hidden" id="idUser" value="{{session()->get('userid')}}" />
    <div class="col-md-3 box-shadow control-infotproduct">
        <div>
          <aside class="widget widget_product_categories" style="padding-left: 10px;">
            <div class="categories-home3">
               <h3>THÔNG TIN TÀI KHOẢN</h3>
               <i class="fa fa-chevron-circle-down icon-click"></i>
              <ul class="menu-vertical">
                <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('listpro')}}" title="Sản phẩm chơ duyệt">Sản phẩm chờ duyệt</a><span class="badge"><?php echo $countUnapprovedproduct; ?></span></li>
                <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('ListApproved')}}" title="Sản phẩm đã duyệt">Sản phẩm đã duyệt</a><span class="badge"><?php echo $countApproveproduct; ?></span></li>
                <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('ListHide')}}" title="Sản phẩm đã ẩn">Sản phẩm đã ẩn</a><span class="badge"><?php echo $countHideproduct; ?></li>
                <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('ordersplaced')}}" title="Đơn hàng được đặt">Đơn hàng được đặt</a></li>
                <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('Salerevenue')}}" title="Doanh số">Doanh số</a></li>
                <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('historybuyproducts')}}" title="Lịch sử bán hàng">Lịch sử bán hàng</a></li>
                <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="{{route('Seller_Infor')}}" title="Sửa thông tin">Sửa thông tin</a></li>
                <li><img src="resources/assets/images/icon-choose-4.png" alt=""><a href="{{route('Seller_Pass')}}"" title="Đổi mật khẩu">Đổi mật khẩu</a></li>     
              </ul>
            </div>
          </aside>
        </div>
    </div>
    <div class="col-md-8 control-infotproduct box-shadow">
      @if(session()->get('status') == 1)
      <label class="col-md-2 control-lab">Thống kê:</label>
      <select id="SeclectAna" class="Unit">
        <option value="thang">7 Tháng gần nhất</option>
        <option value="ngay">7 Ngày gần nhất</option>
        <option value="tuan">7 Tuần gần nhất</option>                      
      </select>         
      <div class="col-md-12 table-product">
        {{-- canvas display the chart --}}
        <canvas id="myChart" width="400" height="300"></canvas>
      </div>
      @endif
      <div class="centerr">
        @if(session()->get('status') == 0)
          <h2>Tài khoản của bạn chưa được duyệt</h2>
          <p>Bạn vui lòng chờ chúng tôi duyệt tài khoản và bạn có thể sử dụng được các chức năng của website</p>
        @endif
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
    var userid = $("#idUser").val();
    $.getJSON('SalerevenueDatathang/'+userid, function (data){
         //canvas for chart 
    var ctx = document.getElementById("myChart").getContext("2d");
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

    var ctx = document.getElementById("myChart").getContext("2d");
    $('#SeclectAna').change(function(){
        if($(this).val()=='thang'){//Get by tháng
$.getJSON('SalerevenueDatathang/'+userid, function (data){
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
            $.getJSON('SalerevenueDatangay/'+userid, function (data){
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
        }else{// Get by tuan
                $.getJSON('SalerevenueDatatuan/'+userid, function (data){
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
        }
    });
});


</script>

@endsection